<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function questionnaires(){

        return $this->hasMany(\App\Questionnaire::class);
    }

    public function image(){

        return $this->morphOne(Image::class, 'imageable');
    }

    /*public function videos()
    {
      return $this->hasMany(Video::class);
    }
    */

    public function uploads()
    {
   return $this->hasMany(Upload::class);
    }


    public function images(){

        return $this->hasMany(\App\ImageUpload::class);
    }


    public function adminProfesseur(){

        return $this->belongsTo(\App\AccueilAdmin::class);
    }


    public function customer(){

        return $this->belongsToMany(\App\Customer::class);
    }





}
