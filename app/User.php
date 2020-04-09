<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role','user_id','role_id'
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


    public function uploads()
    {
   return $this->hasMany(Upload::class);
    }


    public function imageFileUpload(){

        return $this->hasMany(\App\ImageUpload::class);
    }


    public function adminProfesseur(){

        return $this->belongsTo(\App\AccueilAdmin::class);
    }


    public function customer(){

        return $this->hasMany(Customer::class);
    }

    public function matiere(){

        return $this->hasMany(\App\Matiere::class);
    }

    public function matiereCustomer(){

        return $this->hasMany(\App\MatiereCustomers::class);
    }

    public function graphique(){

        return $this->hasMany(\App\GraphiqueStudent::class);
    }

    public function roles(){

        return $this->belongsToMany(\App\Role::class,'role_user','user_id');
    }



    public function hasAnyRoles($roles){

        if($this->roles()->whereIn('role', $roles)->first()){
              return true;
        }
        return false;
    }

    public function hasRole($role){

        if($this->roles()->where('role', $role)->first()){
              return true;
        }
        return false;
    }





}
