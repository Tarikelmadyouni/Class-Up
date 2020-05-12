<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChoixClasseEleve extends Model
{
    protected $fillable= ['classe_eleve'];


    public function classeEleveToUser()
    {

        return $this->belongsTo(\App\User::class);
    }

    public function classeToProfClass()
    {
        return $this->hasMany(\App\ClasseMatiere::class);
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

    public function eleveToPro()
    {
        return $this->hasMany(\App\ClasseMatiere::class);
    }



}
