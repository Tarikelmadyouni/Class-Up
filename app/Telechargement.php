<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telechargement extends Model
{
    public function uploadForVideo(){

        return $this->belongsTo(User::class);
    }
}
