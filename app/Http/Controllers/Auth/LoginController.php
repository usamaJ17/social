<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\UserMeta;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Matrix\Exception;
use Modules\User\Events\SendMailUserRegistered;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/user/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo()
    {
        if (Auth::user()->hasPermissionTo('dashboard_access')) {
            return '/admin';
        } else {
            return $this->redirectTo;
        }
    }

    public function showLoginForm()
    {
        return view('auth.login', ['page_title' => __("Login")]);
    }

    public function socialLogin($provider)
    {
        if ($provider != 'linkedin') {
            $this->initConfigs($provider);
            return Socialite::driver($provider)->redirect();
        } else {
            $clientId = config('services.linkedin.client_id');
            $redirectUri = config('services.linkedin.redirect');
            $scope = 'openid%20profile%20email';
            $response_type = 'code';
            return redirect("https://www.linkedin.com/oauth/v2/authorization?response_type=$response_type&client_id=$clientId&redirect_uri=$redirectUri&scope=$scope");
        }
    }

    protected function initConfigs($provider)
    {
        switch ($provider) {
            case "facebook":
            case "google":
            case "twitter":
                config()->set([
                    'services.' . $provider . '.client_id' => setting_item($provider . '_client_id'),
                    'services.' . $provider . '.client_secret' => setting_item($provider . '_client_secret'),
                    'services.' . $provider . '.redirect' => '/social-callback/' . $provider,
                ]);
                break;
        }
    }

    public function socialCallBack(Request $request ,$provider)
    {
        try {
            if ($provider != 'linkedin') {
                $this->initConfigs($provider);

                $user = Socialite::driver($provider)->user();

                if (empty($user)) {
                    return redirect()->to('login')->with('error', __('Can not authorize'));
                }

                $existUser = User::getUserBySocialId($provider, $user->getId());

                if (empty($existUser)) {

                    $meta = UserMeta::query()->where('name', 'social_' . $provider . '_id')->where('val', $user->getId())->first();
                    if (!empty($meta)) {
                        $meta->delete();
                    }

                    if (empty($user->getEmail())) {
                        return redirect()->route('login')->with('error', __('Can not get email address from your social account'));
                    }

                    $userByEmail = User::query()->where('email', $user->getEmail())->first();
                    if (!empty($userByEmail)) {
                        return redirect()->route('login')->with('error', __('Email :email exists. Can not register new account with your social email', ['email' => $user->getEmail()]));
                    }

                    // Create New User
                    $realUser = new User();
                    $realUser->email = $user->getEmail();
                    $realUser->password = Hash::make(uniqid() . time());
                    $realUser->name = $user->getName();
                    $realUser->first_name = $user->getName();
                    $realUser->status = 'publish';

                    $realUser->save();

                    $realUser->addMeta('social_' . $provider . '_id', $user->getId());
                    $realUser->addMeta('social_' . $provider . '_email', $user->getEmail());
                    $realUser->addMeta('social_' . $provider . '_name', $user->getName());
                    $realUser->addMeta('social_' . $provider . '_avatar', $user->getAvatar());
                    $realUser->addMeta('social_meta_avatar', $user->getAvatar());

                    $realUser->assignRole('customer');

                    try {
                        event(new SendMailUserRegistered($realUser));
                    } catch (Exception $exception) {
                        Log::warning("SendMailUserRegistered: " . $exception->getMessage());
                    }

                    // Login with user
                    Auth::login($realUser);

                    return redirect('/');
                } else {

                    if ($existUser->deleted == 1) {
                        return redirect()->route('login')->with('error', __('User blocked'));
                    }
                    if (in_array($existUser->status, ['blocked'])) {
                        return redirect()->route('login')->with('error', __('Your account has been blocked'));
                    }

                    Auth::login($existUser);

                    return redirect('/');
                }
            } else {
                $code = $request->query('code');

                if (empty($code)) {

                    return response()->json(['error' => 'Authorization code not provided'], 400);
                }

                $clientId = config('services.linkedin.client_id');

                $clientSecret = config('services.linkedin.client_secret');

                $redirectUri = config('services.linkedin.redirect');

                $response = Http::asForm()->post('https://www.linkedin.com/oauth/v2/accessToken', [

                    'code'          => $code,

                    'client_id'     => $clientId,

                    'client_secret' => $clientSecret,

                    'redirect_uri'  => $redirectUri,

                    'grant_type'    => 'authorization_code',

                ]);

                $accessToken = $response->json('access_token');


                $userData = $this->getUserData($accessToken);


                $user = $this->findOrCreateUser($userData, $provider);

                $userRecord = User::where('email', $user['email'])->where('linkedin_id', $user['linkedin_id'])->first();

                if ($userRecord) {

                    Auth::login($userRecord);

                    return redirect('/'); //Redirect the user where you want

                } else {

                    return redirect()->route('login');
                }
            }
        } catch (\Exception $exception) {
            $message = $exception->getMessage();
            if (empty($message) and request()->get('error_message')) $message = request()->get('error_message');
            if (empty($message)) $message = $exception->getCode();

            return redirect()->route('login')->with('error', $message);
        }
    }
    private function getUserData($accessToken)

    {

        $response = Http::withHeaders([

            'Authorization' => 'Bearer ' . $accessToken,

        ])->get('https://api.linkedin.com/v2/userinfo');

        return $response->json();

    }

    private function findOrCreateUser($userData,$provider)

    {

        $user = User::where('email', $userData['email'])->first();
        if (!$user) {

            // Create a new user if not exists in database
            $user = User::create([

                'name' => $userData['given_name'] . ' ' . $userData['family_name'],
                'first_name' => $userData['given_name'],
                'last_name' => $userData['family_name'],
                'email' => $userData['email'],
                'linkedin_id' => $userData['sub'],
                'status' => 'publish',
                'password' => Hash::make(uniqid() . time()),
                'avatar'   => $userData['picture'],
            ]);
            $user->addMeta('social_' . $provider . '_id', $userData['sub']);
            $user->addMeta('social_' . $provider . '_email', $userData['email']);
            $user->addMeta('social_' . $provider . '_name', $userData['name']);
            $user->addMeta('social_' . $provider . '_avatar', $userData['picture']);
            $user->addMeta('social_meta_avatar', $userData['picture']);

            $user->assignRole('customer');

        }

        return $user;

    }
}
