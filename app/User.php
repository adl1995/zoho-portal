<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'is_admin', 'company', 'email', 'address1', 'address2', 'city', 'state', 'zip', 'email', 'password', 'verify_key'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the keys for a user.
     */
    public function keys()
    {
        return $this->hasMany('App\ZohoKey');
    }

    /**
     * Check if current user is an admin
     */
    public function isAdmin()
    {
        return $this->is_admin;
    }   
}
