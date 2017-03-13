<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ZohoKey;
use Config;
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $user = Auth::user();
        // Mail::send('emails.verify', ['verify_key' => $user->verify_key, 'user' => $user], function ($m) use ($user, $request) {
        //     $m->from('mail@zoho.net', 'Zoho');
        //     $m->to('adeelahmad14@hotmail.com', $user->first_name)->subject('Zoho Portal - Verfiy your account');
        // });
        return view('home');
    }

    /**
     * Add zoho api key in the table
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $keys = ZohoKey::where('zoho_key', '=', $request->zoho_key)->where('user_id', Auth::user()->id)->get();
        
        if (count($keys) == 0)
            $key = ZohoKey::create(['zoho_key' => $request->zoho_key, 'user_id' => Auth::user()->id]);
        
        // return (ZohoKey::find(1)->user);
        return view('home');
    }
}
