<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class RoleController extends Controller
{


    public function role(User $register){

        $register = request()->validate([
            'intitule'=>'required'
        ]);

        $role = auth()->user()->role()->create($register);

       /* $register = DB::table('roles')
        ->join('users','users.id','=','roles.intitule')
        ->select('users.role_id')
        ->get();
        */

        return view('auth.register', compact('register','role'));

    }
}
