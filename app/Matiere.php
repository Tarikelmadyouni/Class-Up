<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $guarded=[];

    public function graphique(){

        return $this->hasMany(\App\GraphiqueStudent::class);
    }

    public function customer(){

        return $this->hasMany(\App\Customer::class);
    }

    public function user(){

        return $this->hasMany(\App\User::class);
    }

    public function customerMatiere(){

        return $this->hasMany(\App\MatiereCustomers::class);
    }
}
