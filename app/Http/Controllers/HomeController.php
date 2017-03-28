<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ZohoKey;
use Config;
use Validator;
use Mail;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('home');
        // $user = Auth::user();
        // Mail::send('emails.verify', ['verify_key' => $user->verify_key, 'user' => $user], function ($m) use ($user, $request) {
        //     $m->from('mail@zoho.net', 'Zoho');
        //     $m->to('adeelahmad14@hotmail.com', $user->first_name)->subject('Zoho Portal - Verfiy your account');
        // });
        return view('zoho.dashboard');
    }

    /**
     * Add zoho api key in the table
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'zoho_key' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/home')
                ->withErrors($validator)
                ->withInput();
        }
        $keys = ZohoKey::where('zoho_key', '=', $request->zoho_key)->where('user_id', Auth::user()->id)->get();
        
        if (count($keys) == 0)
            if (isset($request->zoho_key))
            $key = ZohoKey::create(['zoho_key' => $request->zoho_key, 'user_id' => Auth::user()->id]);
        
        // @todo: redirect to proper view
        return view('home');
    }
}
