<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{


    protected $guarded =[];

    protected $dates =['date_de_naissance'];

     public function profileImage()
     {
     $imagePath = ($this->image) ? $this->image : 'avatar/BkQ0jzUe0E7VBBOye6xf9ZwbMaGlLRDMvotwt00e.png';

    return'/storage/'.$imagePath;
     }


    public function user()
    {
       return $this->belongsTo(User::class);


    }




}
