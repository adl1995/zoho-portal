<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Session;
use Mail;

class ResetPasswordController extends Controller
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
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Send email for password reset.
     *
     * @return void
     */
    public function reset(Request $request)
    {
        $reset_key = str_random(64);
        $user = User::where('email', $request->input('email'))->get();
        $user = User::find($user[0]['id']);

        Mail::send('emails.reset', ['verify_key' => $reset_key, 'user' => $user], function ($m) use ($user, $request) {
            $m->from('mail@zoho.net', 'Zoho');
            $m->to($user->email, $user->first_name)->subject('Zoho Portal - Reset password');
        });

        Session::flash('status', 'Email sent! Please check your email.');
    }

    /**
     * Show password reset form.
     *
     * @return void
     */
    public function showUpdatePassword()
    {
        $token = str_random(64);
        return view('auth.passwords.reset', compact('token'));
    }

    /**
     * Update the password in database.
     *
     * @return void
     */
    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => array('required','min:6','confirmed','regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'),
        ]);

        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::where('email', $request->input('email'))->get();
        $user = User::find($user[0]['id']);
        if (isset($user)) {
            if ($request->input('password') == $request->input('password_confirmation')) {
                $user->password = bcrypt($request->input('password'));
            }
        }
        $user->save();

        Session::flash('status', 'Password successfully updated.');
        return redirect('/login');
    }
}