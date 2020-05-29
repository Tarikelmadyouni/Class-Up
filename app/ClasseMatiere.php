<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClasseMatiere extends Model
{
    protected $fillable=['classe','matiere','user_id'];


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
        return $this->hasMany(\App\ChoixClasseEleve::class,'user_id');
    }

    public function classeProfToQuestionnaire()
    {
        return $this->belongsToMany(\App\Questionnaire::class);
    }

    public function profToGraph()
    {
        return $this->hasMany(\App\GraphiqueStudent::class,'user_id','id');
    }
}
