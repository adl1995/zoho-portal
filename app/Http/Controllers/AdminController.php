<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * List all registered clients
     *
     * @return void
     */
    
    public function listClients()
    {
    	$users = User::where('is_admin', 0)->get();
    	return $users;
    }

}
