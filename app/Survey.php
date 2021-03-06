<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $guarded = [];


    public function questionnaire(){



            return $this->belongsTo(Questionnaire::class);

    }

    public function responses(){

        return $this->hasMany(SurveyResponse::class);
    }


    public function adminProfesseur(){

        return $this->belongsTo(AccueilAdmin::class);
    }

    public function accueilEleve(){

        return $this->hasMany(AccueilEleve::class);
    }



}
