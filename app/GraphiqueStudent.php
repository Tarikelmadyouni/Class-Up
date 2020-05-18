<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GraphiqueStudent extends Model
{
    protected $fillable = ['user_id','note_id','nom','notes','matiere','date'];




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

    public function notes()
    {
        return $this->hasMany(\App\Note::class,'note_id');
    }

    public function matiereProf()
    {
        return $this->belongsTo(\App\ClasseMatiere::class);
    }

    public function graphToClasseEleve()
    {
        return $this->hasMany(\App\ChoixClasseEleve::class,'user_id');
    }


}
