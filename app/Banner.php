<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    const POSITION_TOP = 'postion_top';
    const POSITION_BOTTOM = 'position_bottom';

    const STATUS_DISABLE = 0;
    const STATUS_ENABLE = 1;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'path_main',
        'path_thumb',
        'position',
        'status',
        'options',
    ];

    public static function getPossitionOption()
    {
        return [
            self::POSITION_TOP => ['value' => self::POSITION_TOP, 'title' => 'Position Top'],
            self::POSITION_BOTTOM => ['value' => self::POSITION_BOTTOM, 'title' => 'Position Bottom'],
        ];
    }
}
