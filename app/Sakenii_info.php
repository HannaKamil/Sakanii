<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sakenii_info extends Model
{
    protected $table = 'sakenii_infos';
    public $primaryKey = 'id';
    public $timestamps = true;
    public function contact(){
        return $this->hasMany('App\Sakenii_info');
    }
}
