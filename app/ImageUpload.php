<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageUpload extends Model
{
    protected $guarded = [];


    public function path(){

        return url('/docs' .$this->id);
     }



     public function user(){

        return $this->belongsTo(User::class);
    }






}


