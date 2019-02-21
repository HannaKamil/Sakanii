<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    public $primaryKey = 'image_id';
    public $timestamps = true;

    public function flat(){
        return $this->belongsTo('App\Flat');
    }
    public  function users()
    {
        return $this->belongsTo('App\User');
    }
}
