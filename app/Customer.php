<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    protected $guarded = [];






    public function graphique(){

        return $this->hasMany(\App\GraphiqueStudent::class);
    }



    public function user(){

        return $this->belongsTo(User::class);
    }


    public function matiere(){

        return $this->hasMany(\App\MatiereCustomers::class);
    }

    public function matieres(){

        return $this->hasMany(\App\Matiere::class);
    }

    public function roleOfuser(){

        return $this->belongsTo(\App\Role::class);
    }


    /*public function avatar(){

        return $this->belongsToMany(\App\ImageUpload::class);
    }
    */


}
