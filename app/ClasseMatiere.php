<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClasseMatiere extends Model
{
    protected $fillable=['classe','matiere'];


    public function classeMatiereToUser()
    {

        return $this->belongsTo(\App\User::class);
    }

    public function classeToStudent()
    {
        return $this->hasMany(\App\AccueilEleve::class);
    }

    public function classeToProf()
    {
        return $this->hasMany(\App\AccueilAdmin::class);
    }

    public function classeProftoClasseStudent()
    {
        return $this->belongsToMany(\App\ChoixClasseEleve::class);
    }

    public function classeProfToQuestionnaire()
    {
        return $this->belongsToMany(\App\Questionnaire::class);
    }
}
