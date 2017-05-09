<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'symptom',
        'short_describer',
        'detail',
        'user_id',
        'avg_rate',
        'total_rate',
        'related_medicine',
    ];

    public function getAllImages()
    {
        return $this->hasMany('App\Image');
    }
    public function getAllRateMedicines()
    {
        return $this->hasMany('App\RateMedicine')
    }
    public function getAllComments()
    {
        return $this->hasMany('App\Comment');
    }
}
