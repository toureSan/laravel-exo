<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'name', 'adresse' ,'localite'
    ];
}
