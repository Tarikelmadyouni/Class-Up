<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GraphiqueStudent extends Model
{
    protected $guarded = [];


    public function customer(){

        return $this->hasMany(\App\Customer::class);
    }


    public function matiere(){

        return $this->hasMany(\App\MatiereCustomers::class);
    }
}
