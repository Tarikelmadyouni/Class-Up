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


}
