<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

<<<<<<< HEAD
=======
    protected $guarded =[];

     public function profileImage()
     {
     $imagePath = ($this->image) ? $this->image : 'avatar/BkQ0jzUe0E7VBBOye6xf9ZwbMaGlLRDMvotwt00e.png';

    return'/storage/'.$imagePath;
     }
>>>>>>> 68a5c05334b11124e8a08507768fa807322148c7

    public function user()
    {
       return $this->belongsTo(User::class);

       
    }
}
