<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChoixClasseEleve extends Model
{
    protected $fillable= ['classe_eleve','user_id'];


    public function classeEleveToUser()
    {

        return $this->hasMany(\App\User::class);
    }

    public function classeToProfClass()
    {
        return $this->hasMany(\App\ClasseMatiere::class,'user_id');
    }

    public function classeToAdminProf()
    {
        return $this->hasMany(\App\AccueilAdmin::class);
    }

    public function classeToAccueilEleve()
    {
        return $this->hasMany(\App\AccueilEleve::class);
    }

    public function classeToQuestionnaire()
    {
        return $this->belongsToMany(\App\Questionnaire::class);
    }

    public function eleveToGraph()
    {
        return $this->hasMany(\App\GraphiqueStudent::class,'user_id');
    }



}
