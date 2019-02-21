<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Flat_booking extends Model
{
    protected $table = 'flat_bookings';
    public $primaryKey = 'flat_booking_id';
    public $timestamps = true;

    public function booking(){
        return $this->hasMany('App\Booking');
    }
    public function student(){
        return $this->belongsTo('App\Student');
    }
    public function flat(){
        return $this->belongsTo('App\Flat');
    }
    public  function users()
    {
        return $this->belongsTo('App\User');
    }
}
