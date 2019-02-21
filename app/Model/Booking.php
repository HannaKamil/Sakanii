<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    public $primaryKey = 'booking_id';
    public $timestamps = true;

    public  function flat_booking()
    {
        return $this->belongsTo('App\Flat_comment');
    }
    public  function users()
    {
        return $this->belongsTo('App\User');
    }
}
