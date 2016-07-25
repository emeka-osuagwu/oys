<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use Mail;
use App\PasswordReset;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $token  = bcrypt($request['email'] . Carbon::now());
        $email  = $request['email']; 
        $user   = User::where('email', $email)->get()->first();
 
        if ($user == null) 
        {

            return back();
        }

        PasswordReset::create(['email' => $email, 'token' => $token])->create();

        Mail::send('emails.user.password_reset', compact('token', 'user'), function ($message) use ($user, $token) {
            $message->to($user->email)->subject("Your Password Reset Link");
            $message->from(env('SENDER_EMAIL'), env('SENDER_NAME'));
        });

        session()->flash('alert-success', 'A password reset link as been sent to your email :)');
        return back();
    }

    public function showResetForm(Request $request)
    {
        $email = $request['email'];
        return view('pages.change_password', compact('email'));
    }


    public function reset(Request $request)
    {
        $user = User::where('email', $request['email'])->get()->first();
        
        $user->password = $request['password'];
        $user->save();

        session()->flash('alert-success', 'Your password as been updated');
        return redirect()->to('login');
    }
}
