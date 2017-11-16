<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $primaryKey = 'user_no';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $fillable = [
        'user_no','user_type','id','password','name','birth','email','tel','type','introduce','stage_name','gender','height','weight','local','career','license_no','ceo','address','homepage','manager','manager_position','manager_tel','created_at','updated_at'
    ];

    // 'license_no','ceo','address','homepage','manager','manager_position','manager_tel',


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
