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
    	return view('admin.clients', compact('users'));
    }

    /**
     * List a client's details
     *
     * @return void
     */
    public function listClientsDetails($id)
    {
    	$user = User::find($id);
    	return view('admin.client-details', compact('user'));
    }

}
