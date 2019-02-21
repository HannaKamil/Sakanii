<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    protected $table = 'flats';
    public $primaryKey = 'flat_id';
    public $timestamps = true;

    public function flat(){
        return $this->hasMany('App\Flat_booking');
    }
    public function comment(){
        return $this->hasMany('App\Comment');
    }
    public function image(){
        return $this->hasMany('App\Image');
    }
    public function owner(){
        return $this->belongsTo('App\Owner');
    }
    public  function users()
    {
        return $this->belongsTo('App\User');
    }
}
