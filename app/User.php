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
        'name', 'email', 'password','user_id', 'intitule', 'role_id','intitule'
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

    public function role(){

        return $this->belongsToMany(\App\Role::class);
    }

    /*
    public function roles(){

        return $this->belongsToMany(\App\RoleUser::class);
    }
    */


    public function hasAnyRoles($roles){

        if($this->role()->whereIn('name', $roles)->first()){
              return true;
        }
        return false;
    }

    public function hasRoles($role){

        if($this->role()->where('name', $role)->first()){
              return true;
        }
        return false;
    }





}
