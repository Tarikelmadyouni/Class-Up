<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded=[];


    public function admin(){

        return $this->belongsToMany(\App\User::class);
    }

    /*

    public function admins(){

        return $this->belongsToMany(\App\RoleUser::class);
    }
    */


}
