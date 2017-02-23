<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZohoController extends Controller
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
     * Get the API key from user
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    	return $request->api_key;
    }
}
