<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Flat_comment extends Model
{
    protected $table = 'flat_comments';
    public $primaryKey = 'flat_comment_id';
    public $timestamps = true;

    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public  function users()
    {
        return $this->belongsTo('App\User');
    }
}
