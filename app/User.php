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
        'name', 'username' , 'phone_number', 'email', 'password','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comment(){
        return $this->hasMany('App\Comment');
    }
    public function image(){
        return $this->hasMany('App\Image');
    }
    public function flat(){
        return $this->hasMany('App\Flat');
    }
    public function flat_comment(){
        return $this->hasMany('App\Flat_comment');
    }
    public function flat_booking(){
        return $this->hasMany('App\Flat_booking');
    }
    public function booking(){
        return $this->hasMany('App\Booking');
    }

//    public function  hasAnyRole($roles)
//    {
//        if(is_array($roles))
//        {
//            foreach ($roles as $role)
//            {
//                if($this->hasRole($role))
//                {
//                    return true;
//                }
//            }
//        }else{
//            if($this->hasRole($roles))
//            {
//                return true;
//            }
//        }
//    }
//    public function hasRole($role)
//    {
//        if($this->roles()->where('name' , $role)->first())
//        {
//            return true;
//        }
//        return false;
//    }
}
