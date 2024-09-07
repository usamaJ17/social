<?php


	namespace Modules\User\Controllers\Auth;


	use Illuminate\Auth\Access\AuthorizationException;
	use Illuminate\Auth\Events\Verified;
	use Illuminate\Http\Request;

	class VerificationController extends \App\Http\Controllers\Auth\VerificationController
	{

		protected $redirectTo = '';

	public function verify(Request $request)
    {
        // if ($request->route('id') != $request->user()->getKey()) {
        //     throw new AuthorizationException;
        // }

        $user = \App\User::find($request->route('id'));

        auth()->login($user);

        if ($request->user()->hasVerifiedEmail()) {
            return redirect($this->redirectPath());
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return redirect($this->redirectPath())->with('verified', true);
    }

	}