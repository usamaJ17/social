<?php
namespace Modules\User\Controllers;

use App\Models\ChMessage;
use App\Notifications\AdminChannelServices;
use Chatify\Http\Models\Message;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Matrix\Exception;
use Modules\FrontendController;
use Modules\Property\Models\Property;
use Modules\Review\Models\Review;
use Modules\User\Events\NewVendorRegistered;
use Modules\User\Events\SendMailUserRegistered;
use Modules\User\Events\UserSubscriberSubmit;
use Modules\User\Models\Subscriber;
use Modules\User\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;
use Modules\Vendor\Models\VendorRequest;
use Validator;
use Modules\Booking\Models\Booking;
use App\Helpers\ReCaptchaEngine;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Modules\Booking\Models\Enquiry;
use Illuminate\Support\Str;
use Carbon\Carbon;
use DB;
class UserController extends FrontendController
{   
    
   
    use AuthenticatesUsers;

    protected $enquiryClass;

    public function __construct()
    {
        $this->enquiryClass = Enquiry::class;
        parent::__construct();
    }

    public function dashboard(Request $request)
    {
        $this->checkPermission('dashboard_vendor_access');
        $user = Auth::user();
        $data = [
            'cards_report'       => Booking::getTopCardsReportForVendor($user->id),
            'earning_chart_data' => Booking::getEarningChartDataForVendor(strtotime('monday this week'), time(), $user->id),
            'page_title'         => __("Vendor Dashboard"),
            'breadcrumbs'        => [
                [
                    'name'  => __('Dashboard'),
                    'class' => 'active'
                ]
            ],
            'user'=>$user,
            'activeListingCount'=>Property::where('status','publish')->where('create_user',$user->id)->count(),
            'reviewCount'=>Review::where('status','approved')->where('vendor_id',$user->id)->count(),
            'wishListCount'=>$user->wishList()->count(),
            'messageCount'=>CHMessage::where('to_id',$user->id)->count(),
        ];
        return view('User::frontend.dashboard', $data);
    }

    public function reloadChart(Request $request)
    {
        $chart = $request->input('chart');
        $user_id = Auth::id();
        switch ($chart) {
            case "earning":
                $from = $request->input('from');
                $to = $request->input('to');
                return $this->sendSuccess([
                    'data' => Booking::getEarningChartDataForVendor(strtotime($from), strtotime($to), $user_id)
                ]);
                break;
        }
    }

public function messages(Request $request)
{
 
 //return view('User::admin.messages');   
}

    public function profile(Request $request)
    {
        // dd('ok');
        $user = Auth::user();
        $data = [
            'dataUser'         => $user,
            'page_title'       => __("Profile"),
            'breadcrumbs'      => [
                [
                    'name'  => __('Setting'),
                    'class' => 'active'
                ]
            ],
            'is_vendor_access' => $this->hasPermission('dashboard_vendor_access')
        ];
        return view('User::frontend.profile', $data);
    }


//customer_profile
        public function customer_profile(Request $request)
    {
        // dd('ok');
        $user = Auth::user();
        
        if(!$user->hasVerifiedEmail())
        {
            return redirect('email/verify');
        }
        $data = [
            'dataUser'         => $user,
            'page_title'       => __("Profile"),
            'breadcrumbs'      => [
                [
                    'name'  => __('Setting'),
                    'class' => 'active'
                ]
            ],
            'is_vendor_access' => $this->hasPermission('dashboard_vendor_access')
        ];
        return view('User::frontend.profile.customer_profile', $data);
       
        
        
    }
    
    
    
    
     public function updatecustomerprofile(Request $request )
    {
        DB::table('users')->where('id',Auth::id())->update(array(
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'phone' => $request->input('first_name')
            ));
            
            try {
                event(new SendMailUserRegistered($user));
                
            } catch (Exception $exception) {

                Log::warning("SendMailUserRegistered: " . $exception->getMessage());
            }
          
          return redirect()->to('customer/profile');
    }
    
    
    
     
     public function update_contractor_profile(Request $request )
    {
        DB::table('bc_properties')->where('create_user',Auth::id())->update(array(
            'title' => $request->input('title'),
            'slug' => str_replace(' ', '-', $request->input('slug')),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
           
            ));
            
            try {
                event(new SendMailUserRegistered($user));
            } catch (Exception $exception) {

                Log::warning("SendMailUserRegistered: " . $exception->getMessage());
            }
          
          return redirect()->to('customer/profile');
    }
    

    public function profileUpdate(Request $request){
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            
        ]);

        $update_data = array(
            'avatar_id'=> $request->avatar_id,
            'email'=> $request->email,
            'user_name'=> $request->user_name,
            'first_name'=> $request->first_name,
            'last_name'=> $request->last_name,
            'age'=> $request->age,            'gender'=> $request->gender,            'city'=> $request->city,
            'state'=> $request->state,
            'country'=> $request->country,
            'phone'=> $request->phone
        );

        $updated = DB::table('users')->where('id', $request->id)->update($update_data);
        if ($updated) {
            return redirect()->back()->with('success', __('Profile Updated successfully'));
        }
        return redirect()->back()->with('error', __('Something wrong!'));


exit;



        $user = Auth::user();
        $messages = [
            'user_name.required'      => __('The User name field is required.'),
        ];
        $request->validate([
            'first_name' => 'required|max:255',
            'last_name'  => 'required|max:255',
            'email'      => [
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id)
            ],
            'user_name'=> [
                'required',
                'max:255',
                'min:4',
                'string',
                'alpha_dash',
                Rule::unique('users')->ignore($user->id)
            ],
            'phone'       => [
                'required',
                Rule::unique('users')->ignore($user->id,'id'),
            ],
        ],$messages);
        $input = $request->except('bio');
        $user->fill($input);
        $user->bio = clean($request->input('bio'));
        $user->birthday = date("Y-m-d", strtotime($user->birthday));
        $user->user_name = Str::slug( $request->input('user_name') ,"_");

        $user->save();
        return redirect()->back()->with('success', __('Update successfully'));
    }

    public function changePassword(Request $request)
    {
        $user_id = Auth::id();
        $rows = DB::table('bc_properties')->select("bc_properties.*")->where("bc_properties.create_user", $user_id)->first();

        $data = [
            'breadcrumbs' => [
                [
                    'name' => __('Setting'),
                    'url'  => route("user.profile.index")
                ],
                [
                    'name'  => __('Change Password'),
                    'class' => 'active'
                ]
            ],
            'page_title'  => __("Change Password"),
            'row'  => $rows,
        ];
        // dd('ok');
        
        return view('User::frontend.changePassword', $data);
    }

    public function changePasswordUpdate(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", __("Your current password does not matches with the password you provided. Please try again."));
        }
        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            //Current password and new password are same
            return redirect()->back()->with("error", __("New Password cannot be same as your current password. Please choose a different password."));
        }
        $request->validate([
            'current-password' => 'required',
            'new-password'     => 'required|string|min:6|confirmed',
        ]);
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->back()->with('success', __('Password changed successfully !'));
    }

    public function bookingHistory(Request $request)
    {
        $user_id = Auth::id();
        $data = [
            'bookings'    => Booking::getBookingHistory($request->input('status'), $user_id),
            'statues'     => config('booking.statuses'),
            'breadcrumbs' => [
                [
                    'name'  => __('Booking History'),
                    'class' => 'active'
                ]
            ],
            'page_title'  => __("Booking History"),
        ];
        return view('User::frontend.bookingHistory', $data);
    }

    public function userLogin(Request $request)
    {
        $rules = [
            'email'    => 'required|email',
            'password' => 'required'
        ];
        $messages = [
            'email.required'    => __('Email is required field'),
            'email.email'       => __('Email invalidate'),
            'password.required' => __('Password is required field'),
        ];
        if (ReCaptchaEngine::isEnable() and setting_item("user_enable_login_recaptcha")) {
            $codeCapcha = $request->input('g-recaptcha-response');
            if (!$codeCapcha or !ReCaptchaEngine::verify($codeCapcha)) {
                $errors = new MessageBag(['message_error' => __('Please verify the captcha')]);
                return response()->json([
                    'error'    => true,
                    'messages' => $errors
                ], 200);
            }
        }
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json([
                'error'    => true,
                'messages' => $validator->errors()
            ], 200);
        } else {
            $email = $request->input('email');
            $password = $request->input('password');
            if (Auth::attempt([
                'email'    => $email,
                'password' => $password
            ], $request->has('remember'))) {
                if (in_array(Auth::user()->status, ['blocked'])) {
                    Auth::logout();
                    $errors = new MessageBag(['message_error' => __('Your account has been blocked')]);
                    return response()->json([
                        'error'    => true,
                        'messages' => $errors,
                        'redirect' => false
                    ], 200);
                }
                return response()->json([
                    'error'    => false,
                    'messages' => false,
                    'redirect' => $request->input('redirect') ?? $request->headers->get('referer') ?? url(app_get_locale(false, '/'))
                ], 200);
            } else {
                $errors = new MessageBag(['message_error' => __('Username or password incorrect')]);
                return response()->json([
                    'error'    => true,
                    'messages' => $errors,
                    'redirect' => false
                ], 200);
            }
        }
    }

    public function userRegister(Request $request)
    {


        $rules = [
            'first_name' => [
                'required',
                'string',
                'max:255'
            ],
            'last_name'  => [
                'required',
                'string',
                'max:255'
            ],
            'email'      => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users'
            ],
            'password'   => [
                'required',
                'min:8',
                'string'
            ],
            'phone'       => ['required','unique:users'],
            'term'       => ['required'],
        ];
        $messages = [
            'phone.required'      => __('Phone is required field'),
            'email.required'      => __('Email is required field'),
            'email.email'         => __('Email invalidate'),
            'password.required'   => __('Password is required field'),
            'first_name.required' => __('The first name is required field'),
            'last_name.required'  => __('The last name is required field'),
            'term.required'       => __('The terms and conditions field is required'),
        ];
        if (ReCaptchaEngine::isEnable() and setting_item("user_enable_register_recaptcha")) {
            $codeCapcha = $request->input('g-recaptcha-response');
            if (!$codeCapcha or !ReCaptchaEngine::verify($codeCapcha)) {
                $errors = new MessageBag(['message_error' => __('Please verify the captcha')]);
                return response()->json([
                    'error'    => true,
                    'messages' => $errors
                ], 200);
            }
        }
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json([
                'error'    => true,
                'messages' => $validator->errors()
            ], 200);
        } else {

            $user = \App\User::create([
                'first_name' => $request->input('first_name'),
                'last_name'  => $request->input('last_name'),
                'email'      => $request->input('email'),
                'password'   => Hash::make($request->input('password')),
                'status'    => $request->input('publish','publish'),
                'phone'    => $request->input('phone'),
            ]);
            
            
            //event(new Registered($user));
            Auth::loginUsingId($user->id);
            // try {
            //     event(new SendMailUserRegistered($user));
            // } catch (Exception $exception) {

            //     Log::warning("SendMailUserRegistered:" . $exception->getMessage());
            // }
            
            
            $user->assignRole('customer');
            return response()->json([
                'error'    => false,
                'messages' => false,
                'redirect' => url('user_type')
            ], 200);
        }
    }


    public function lateremail()
    {
        
      $avc =  Session::get('user_details');
      print_r($avc);
      
    }
    
    public function subscribe(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255'
        ]);
        $check = Subscriber::withTrashed()->where('email', $request->input('email'))->first();
        if ($check) {
            if ($check->trashed()) {
                $check->restore();
                return $this->sendSuccess([], __('Thank you for subscribing'));
            }
            return $this->sendError(__('You are already subscribed'));
        } else {
            $a = new Subscriber();
            $a->email = $request->input('email');
            $a->first_name = $request->input('first_name');
            $a->last_name = $request->input('last_name');
            $a->save();

            event(new UserSubscriberSubmit($a));

            return $this->sendSuccess([], __('Thank you for subscribing'));
        }
    }

    public function upgradeVendor(Request $request){
        $user = Auth::user();
        $vendorRequest = VendorRequest::query()->where("user_id",$user->id)->where("status","pending")->first();
        if(!empty($vendorRequest)){
            return redirect()->back()->with('warning', __('You have just done the become vendor request, please wait for the Admin\'s approved'));
        }
        // check vendor auto approved
        $vendorAutoApproved = setting_item('vendor_auto_approved');
         $dataVendor['role_request'] = setting_item('vendor_role');
        if ($vendorAutoApproved) {
            if ($dataVendor['role_request']) {
                $user->assignRole($dataVendor['role_request']);
            }
            $dataVendor['status'] = 'approved';
            $dataVendor['approved_time'] = now();
        } else {
            $dataVendor['status'] = 'pending';
        }
        $vendorRequestData = $user->vendorRequest()->save(new VendorRequest($dataVendor));
        try {
            event(new NewVendorRegistered($user, $vendorRequestData));
        } catch (Exception $exception) {
            Log::warning("NewVendorRegistered: " . $exception->getMessage());
        }
        return redirect()->back()->with('success', __('Request vendor success!'));
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect(app_get_locale(false, '/'));
    }

    public function enquiryReport(Request $request){
        $this->checkPermission('enquiry_view');
        $user_id = Auth::id();
        $rows = $this->enquiryClass::where("vendor_id",$user_id)
            ->whereIn('object_model',array_keys(get_bookable_services()))
            ->orderBy('id', 'desc');
        $data = [
            'rows'        => $rows->paginate(5),
            'statues'     => $this->enquiryClass::$enquiryStatus,
            'has_permission_enquiry_update' => $this->hasPermission('enquiry_update'),
            'breadcrumbs' => [
                [
                    'name'  => __('Enquiry Report'),
                    'class' => 'active'
                ],
            ],
            'page_title'  => __("Enquiry Report"),
        ];
        return view('User::frontend.enquiryReport', $data);
    }

    public function enquiryReportBulkEdit($enquiry_id, Request $request)
    {
        $status = $request->input('status');
        if (!empty( $this->hasPermission('enquiry_update') ) and !empty($status) and !empty($enquiry_id)) {
            $query = $this->enquiryClass::where("id", $enquiry_id);
            $query->where("vendor_id", Auth::id());
            $item = $query->first();
            if (!empty($item)) {
                $item->status = $status;
                $item->save();
                return redirect()->back()->with('success', __('Update success'));
            }
            return redirect()->back()->with('error', __('Enquiry not found!'));
        }
        return redirect()->back()->with('error', __('Update fail!'));
    }


//ch message
        public function message(Request $request)
    {

        $user_id = Auth::id();
        //analytics added function
        $user_ip = \Request::ip();
        $date = date('Y-m-d');
        $view_data_arr = array(
            'view'=>1,
            'ch_id'=>$user_id,
            'ip'=>$user_ip,
            'date'=>$date,
        );
        $analytics = DB::table('analytics')->where('ip',$user_ip)->where('ch_id',$user_id)->where('date',$date)->first();
        if (empty($analytics)) {
            //analytics added
            DB::table('analytics')->insert($view_data_arr);
        }
        




        
        $message_data = DB::table('ch_messages')
                    ->where('to_id', $user_id)
                    ->select('ch_messages.body','users.email','users.phone','users.first_name','users.last_name')
                    ->join('users', 'users.id' , '=', 'ch_messages.from_id')
                    ->get();

        $data = $message_data;
        return view('message', get_defined_vars());
    }

//ch analytics

        public function analytics(Request $request)
    {


        // dd($request->all());


        $user_id = Auth::id();
        $user_ip = \Request::ip();
        $currentMonth = date('m');

        $day = date('w');
        $week_start = date('m-d-Y', strtotime('-'.$day.' days'));
        $week_end = date('m-d-Y', strtotime('+'.(6-$day).' days'));

        if (count($request->all())  > 0) {
            $total_analytics = DB::table('analytics')->where('ch_id',$user_id)->whereBetween('created_at', 
                            [$request->from, $request->to]
                        )->count();
        }else{
            $total_analytics = DB::table('analytics')->where('ch_id',$user_id)->count(); 
        }
        
        $currentday_analytics = DB::table('analytics')->where('ch_id',$user_id)->whereDate('created_at', Carbon::today())->count();
        $currentWeek_analytics = DB::table('analytics')->where('ch_id',$user_id)->whereBetween('created_at', 
                            [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]
                        )->count();
        $currentMonth_analytics = DB::table('analytics')->where('ch_id',$user_id)->whereRaw('MONTH(created_at) = ?',[$currentMonth])->count();

        return view('analytics', get_defined_vars());
    }
}
