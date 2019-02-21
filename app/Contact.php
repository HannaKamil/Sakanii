<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    public $primaryKey = 'contact_id';
    public $timestamps = true;
    public function contact(){
        return $this->hasMany('App\Contact');
    }
}
