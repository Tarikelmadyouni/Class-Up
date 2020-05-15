<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GraphiqueStudent extends Model
{
    protected $fillable = ['user_id','notes','matiere','date'];




    public function customer(){

        return $this->hasMany(\App\Customer::class);
    }


    public function matiereCustomer(){

        return $this->hasMany(\App\MatiereCustomers::class);
    }

    public function matiere(){

        return $this->hasMany(\App\Matiere::class);
    }

    public function user(){

        return $this->hasMany(\App\User::class,'user_id');
    }
}
