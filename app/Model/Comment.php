<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    public $primaryKey = 'comment_id';
    public $timestamps = true;


    public function student(){
        return $this->belongsTo('App\Student');
    }

    public function flat_comment(){
        return $this->belongsTo('App\Flat_Comment');
    }

    public function flat(){
        return $this->belongsTo('App\Flat');
    }

    public  function users()
    {
        return $this->belongsTo('App\User');
    }
}
