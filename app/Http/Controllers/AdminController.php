<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ZohoModuleField;
use Auth;

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
     * Show the admin dashboard
     *
     * @return void
     */
    public function index()
    {
        $users = User::all();
        return view('admin.home', compact('users'));
    }

    /**
     * List all registered clients
     *
     * @return void
     */
    public function listClients()
    {
        // @todo: grab errors
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

    /**
     * Edit a client by id
     *
     * @return void
     */
    public function editClient($id)
    {
        $user = User::find($id);
        return view('admin.client-edit', compact('user'));
    }

    /**
     * Update a client
     *
     * @return void
     */
    public function updateClient($id, Request $request)
    {
        $user = User::find($id);
        
        $user->company = $request->input('company');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');

        if ($request->input('active') == 'active')
            $user->is_suspended = 1;
        else
            $user->is_suspended = 0;

        $user->save();
        return redirect()->action(
            'AdminController@editClient', ['id' => $id]
        );
    }

    /**
     * Manually verify a client
     *
     * @return void
     */
    public function verifyClient($id)
    {
        $user = User::find($id);
        $user->is_verified = 1;
        $user->save();
        return redirect()->action(
            'AdminController@listClientsDetails', ['id' => $id]
        );
    }

    /**
     * Suspend a client
     *
     * @return void
     */
    public function suspendClient($id)
    {
        $user = User::find($id);
        $user->is_suspended = 1;
        $user->save();
        return redirect()->action(
            'AdminController@listClientsDetails', ['id' => $id]
        );
    }

    /**
     * Reactivate a client
     *
     * @return void
     */
    public function reactivateClient($id)
    {
        $user = User::find($id);
        $user->is_suspended = 0;
        $user->save();
        return redirect()->action(
            'AdminController@listClientsDetails', ['id' => $id]
        );
    }

    /**
     * Suspend a client
     *
     * @return void
     */
    public function syncClient($id)
    {
        $fields = ZohoModuleField::where('user_id', $id)->get();
        // @todo: sync data with Google SQL and update last sync time
        return $fields;
    }

}
