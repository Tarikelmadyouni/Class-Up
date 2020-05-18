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

        return $this->belongsToMany(User::class,'image_upload_user','image_upload_id');
    }

    public function avatar(){

        return $this->belongsToMany(\App\Customer::class);
    }

    public function admin(){

        return $this->belongsTo(AccueilAdmin::class);
    }

    public function Classe()
    {
        return $this->hasMany(\App\Reception::class,'image_upload_user','image_upload_id');
    }












}


