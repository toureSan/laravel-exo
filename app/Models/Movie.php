<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    public function director(){

        return $this->belongsTo('App\Models\Artist');
    }

    public function actophrs(){
        return $belongToMany('App\Models\Artist'); 
    }
}