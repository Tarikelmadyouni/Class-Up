<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccueilAdmin extends Model
{
    protected $guarded=[];


    public function showAllProfesseur(){

        return $this->belongsTo(User::class);
    }

    public function questions(){

        return $this->hasMany(Questionnaire::class);
    }

    public function surveys(){

        return $this->hasMany(Survey::class);
    }

    public function surveyResponse(){

        return $this->hasMany(SurveyResponse::class);
    }

    public function imageUpload(){

        return $this->hasMany(ImageUpload::class);
    }

    public function accueil(){

        return $this->hasMany(Role::class);
    }

    public function telechargement(){

        return $this->hasMany(ImageUpload::class);
    }

    public function showClasseProf()
    {
        return $this->hasMany(\App\Reception::class);
    }

    public function ProfToClasseStudent()
    {
        return $this->hasMany(\App\AccueilEleve::class);
    }

    public function profToClasseProf()
    {
        return $this->hasMany(\App\ClasseMatiere::class);
    }

    public function profToClasseEleve()
    {
        return $this->hasMany(\App\ChoixClasseEleve::class);
    }




}
