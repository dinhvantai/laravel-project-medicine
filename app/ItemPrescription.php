<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemPrescription extends Model
{
    //
    const STATUS_IN_STORE = 1;
    const STATUS_OUT_STORE = 0;
}
