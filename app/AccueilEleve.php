<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccueilEleve extends Model
{
    protected $guarded=[];

    public function user(){

        return $this->belongsTo(\App\User::class);
    }

    public function questionnaire(){

        return $this->hasMany(\App\Questionnaire::class);
    }

    public function survey(){

        return $this->hasMany(Survey::class);
    }

    public function showClasse()
    {
        return $this->hasMany(\App\Reception::class);
    }

    public function studentToClasseProf()
    {
        return $this->hasMany(\App\ClasseMatiere::class);
    }

    public function studentToProf()
    {
        return $this->hasMany(\App\AccueilAdmin::class);
    }

    public function eleveToClasseEleve()
    {
        return $this->belongsTo(\App\AccueilEleve::class);
    }
}
