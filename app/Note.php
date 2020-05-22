<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $guarded=[];

    public function noteToGraphique()
    {
        return $this->hasMany(\App\GraphiqueStudent::class);
    }



}
