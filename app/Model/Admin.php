<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{

    use Notifiable;

    protected $fillable = [
        "email",
        "unid",
        "title",
        "who",
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
