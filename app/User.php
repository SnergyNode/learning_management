<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "email",
        "unid",
        "title",
        "first_name",
        "last_name",
        "password",
        "phone",
        "address",
        "dob",
        "active",
        "photo",
        "token",
        "reset_token",
        "reset_timer",
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function image(){
        if(file_exists($this->passport)){
            return url($this->passport);
        }else{
            return url('images/user.png');
        }
    }

    public function fullname(){
        return "$this->first_name $this->last_name";
    }
}
