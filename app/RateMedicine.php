<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RateMedicine extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'medicine_id',
        'point_rate',
    ];
}
