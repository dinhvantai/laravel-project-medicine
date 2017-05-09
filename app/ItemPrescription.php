<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemPrescription extends Model
{
    //
    const STATUS_IN_STORE = 1;
    const STATUS_OUT_STORE = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'medicine_id',
        'name_medicine',
        'prescription_id',
        'amount',
        'status',
    ];

    public function getPrescription()
    {
        return $this->hasOne('App\Prescription');
    }
    public function getMedicine()
    {
        return $this->belongsTo('App\Medicine');
    }
    public function getRequestMedicine()
    {
        return $this->hasOne('App\RequestMedicine');
    }
}
