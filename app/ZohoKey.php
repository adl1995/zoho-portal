<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ZohoKey extends Model
{

	/**
	 * Name of the table
	 * @var string
	 */
	protected $table = 'zoho_keys';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'zoho_key', 'user_id'
    ];

    /**
     * Get user of the key
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
