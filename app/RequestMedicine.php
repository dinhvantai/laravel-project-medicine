<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestMedicine extends Model
{
	public function getItemPrescription(){
		return this->hasOne('App\ItemPrescription');
	}
}
