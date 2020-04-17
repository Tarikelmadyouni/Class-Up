<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class ImageUpload extends Model
{

    protected $guarded=[];





    public function path(){

        return url('/files' .$this->id);
     }



     public function uploadForFile(){

        return $this->belongsTo(User::class);
    }

    public function avatar(){

        return $this->belongsToMany(\App\Customer::class);
    }

    public function admin(){

        return $this->belongsTo(AccueilAdmin::class);
    }












}


