<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);

        $user_check = User::where('email', $request->email)->first();

        // echo $user_check;
        // exit();

        if ($user_check == null){
            $response = $this->broker()->sendResetLink(
                $request->only('email')
            );

            if ($response === Password::RESET_LINK_SENT) {
                return back()->with('status', trans($response));
            }

            return back()->withErrors(
                ['email' => trans($response)]
            );
        }

        else{
            if ($user_check->status == 1) {
                $response = $this->broker()->sendResetLink(
                    $request->only('email')
                );
    
                if ($response === Password::RESET_LINK_SENT) {
                    return back()->with('status', trans($response));
                }
    
                return back()->withErrors(
                    ['email' => trans($response)]
                );
            } else {
                return back()->withErrors(
                    ['email' => trans( 'Need to verify first the provided email address before password reset.')]
                );
            }
        }
    }
}
