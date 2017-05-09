<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestMedicine extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'medicine_name',
        'short_describer',
        'respone_admin',
        'item_prescription_id',
        'status',
    ];

	public function getItemPrescription()
	{
	    return $this->belongsTo('App\ItemPrescription');
	}
}
