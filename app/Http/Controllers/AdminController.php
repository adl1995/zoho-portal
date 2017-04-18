<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ZohoModuleField;
use Validator;
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
        \Session::flash('tab', ['admin-home']);

        $users = User::all();
        return view('admin.home', compact('users'));
    }

    /**
     * Add a client
     *
     * @return view
     */
    public function addClient()
    {
        \Session::flash('tab', ['add-clients']);

        return view('admin.client-create');
    }

    /**
     * Show error log
     *
     * @return view
     */
    public function errorLog()
    {
        \Session::flash('tab', ['errors']);

        return view('admin.error-log');
    }

    /**
     * Add a client in the database
     *
     * @return view
     */
    public function createClient(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'company' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|unique:users|string|max:255',
            'address1' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip' => 'required|integer',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/admin/clients/add')
                ->withErrors($validator)
                ->withInput();
        }

        $client = new User;

        $client->first_name = $request->input('first_name');
        $client->last_name = $request->input('last_name');
        $client->company = $request->input('company');
        $client->email = $request->input('email');
        $client->address1 = $request->input('address1');
        $client->city = $request->input('city');
        $client->state = $request->input('state');
        $client->zip = $request->input('zip');
        $client->verify_key = '123456';
        $client->password = bcrypt('123456');

        if ($request->input('status') == 'active')
            $client->is_suspended = 1;
        else
            $client->is_suspended = 0;

        $client->save();

        return redirect('/admin');
    }

    /**
     * List all registered clients
     *
     * @return void
     */
    public function currentClient()
    {
        \Session::flash('tab', ['list-clients']);

    	$user = Auth::user();
    	return view('admin.clients', compact('user'));
    }

    /**
     * Show admin profile
     *
     * @return void
     */
    public function profile()
    {
        $user = Auth::user();
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
        $validator = Validator::make($request->all(), [
            'company' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/admin/clients/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }

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
            'AdminController@profile'
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
            'AdminController@profile'
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
            'AdminController@profile'
        );
    }

    /**
     * Sync client
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
