<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];


    public function graphique(){

        return $this->hasMany(\App\GraphiqueStudent::class);
    }



    public function user(){

        return $this->belongsToMany(\App\User::class);
    }


}
