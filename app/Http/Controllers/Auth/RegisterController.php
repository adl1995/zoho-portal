<?php

namespace App\Http\Controllers\Auth;

use Mail;
use Request;
use Session;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest', ['except' => ['verifyAccount']]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address1' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip' => 'required|numeric',
            'email' => 'required|email|max:255|unique:users',
            'password' => array('required','min:6','confirmed','regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'),
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'company' => $data['company'],
            'email' => $data['email'],
            'address1' => $data['address1'],
            'address2' => $data['address2'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zip' => $data['zip'],
            'verify_key' => str_random(10),
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        if ($user) {
            $user = Auth::user();
            // @todo fix Mail: verify url
            Mail::send('emails.verify', ['verify_key' => $user->verify_key, 'user' => $user], function ($m) use ($user, $request) {
                $m->from('mail@zoho.net', 'Zoho');
                $m->to($user->email, $user->first_name)->subject('Zoho Portal - Verfiy your account');
            });
            Session::flash('status', 'Email sent! Please verify your account');
        }
        return $user;
    }
    /**
     * Verify an account.
     *
     * @param
     * @return
     */
    public function verifyAccount()
    {
        $user = User::where('verify_key', Input::get('verificationkey'))->first();
        $user->is_verified = true;
        $user->save();
        
        return redirect('home');
    }
}
