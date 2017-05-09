<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    const STATUS_DISABLE = 0;
    const STATUS_ENABLE  = 1;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'medicine_id',
        'content',
        'status',
    ];

    public function getUser()
    {
        return $this->belongsTo('App\User');
    }
    public function getMedicine()
    {
    	return $this->belongsTo('App\Medicine');
    }
}
