<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ZohoModuleField extends Model
{
	/**
	 * Name of the table
	 * @var string
	 */
	protected $table = 'zoho_module_fields';

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'user_id', 'module', 'zoho_id', 'label', 'customfield', 'maxlength', 'isreadonly', 'type', 'required'
    ];

    /**
     * Get user of the key
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
