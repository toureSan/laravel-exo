<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    // Permet de modifier les éléments 

    protected $fillable = [
        'name', 'firstname' , 'birthdate'

    ]; 
    public function has_directed (){
        return $this->hasMany('App\Models\Movie'); 
    }

    public function has_played(){
        return $this->belongsToMany('App\Model\Movie')->withPivot('role_name'); 
    }
}
