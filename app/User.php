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
        'display_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public static function getPermissionOption()
    {
        return [
            self::PERMISSION_USER => ['value' => self::PERMISSION_USER, 'title' => 'Normal User'],
            self::PERMISSION_ADMIN => ['value' => self::PERMISSION_ADMIN, 'title' => 'Admin'],
        ];
    }

    public function getAllComments()
    {
        return $this->hasMany('App\Comment');
    }
    public function getAllMarkMedicines()
    {
        return $this->hasMany('App\MarkMedicine');
    }
    public function getAllPrescriptions()
    {
        return $this->hasMany('App\Prescription');
    }
}
