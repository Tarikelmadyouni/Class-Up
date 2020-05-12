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
}
