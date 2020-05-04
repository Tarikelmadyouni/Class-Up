<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reception extends Model
{

    protected $guarded = [];



    public function userReception()
    {

        return $this->belongsToMany(\App\User::class);
    }


    public function downloadReception()
    {

        return $this->belongsToMany(\App\ImageUpload::class, 'reception_user','reception_id');
    }


}
