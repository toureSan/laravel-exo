<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Movie extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'title', 'year' ,'artist_id'
    ];
    public function director(){

        return $this->belongsTo('App\Models\Artist');
    }

    public function actors(){
        return $this->belongsToMany('App\Models\Artist'); 
    }
}