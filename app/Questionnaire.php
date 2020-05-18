<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Questionnaire extends Model
{
    protected $guarded = [];

     public function path(){

        return url('/questionnaires/' .$this->id);
     }


     public function publicPath(){

        return url("/surveys/".$this->id.'-'.Str::slug($this->title));

     }


    public function user(){

        return $this->belongsTo(User::class);
    }



    public function questions(){

        return $this->hasMany(Question::class);
    }

    public function surveys(){

        return $this->hasMany(Survey::class);
    }

    public function adminProfesseur(){

        return $this->belongsTo(AccueilAdmin::class);
    }

    public function accueilEleve(){

        return $this->hasMany(AccueilEleve::class);
    }

    public function questionnaireToClasseProf()
    {
        return $this->belongsTo(\App\ClasseMatiere::class,'user_id','classe');
    }

    public function questionnaireToClasseEleve()
    {
        return $this->hasMany(\App\ChoixClasseEleve::class,'user_id','classe_eleve');
    }

}
