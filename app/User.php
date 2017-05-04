<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const PERMISSION_ADMIN = 1;
    const PERMISSION_USER = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'display_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getPermissionOption(){
        return array(
            array('value' => self::PERMISSION_USER, 'title' => 'Normal User'),
            array('value' => self::PERMISSION_ADMIN, 'title' => 'Admin')
        );
    }
}
