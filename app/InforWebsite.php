<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InforWebsite extends Model
{
    const POSITION_MAIN = 'position_main';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slogan',
        'logo',
        'link_communications',
        'footer',
        'options',
        'position',
    ];

    public static function getPositionOption()
    {
        return [
            self::POSITION_MAIN => ['value' => self::POSITION_MAIN, 'title' => 'Position Main'],
        ];
    }
}
