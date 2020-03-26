<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageUpload;
use App\Questionnaire;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Gate;

class AccueilEleveController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }


    public function show(){



        $AccueilEleve = Questionnaire::all();
        $AccueilEleves = ImageUpload::all();




        return view('accueilEleve.accueil', compact('AccueilEleve', 'AccueilEleves' ));



    }



    






    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('accueilEleve'));

        }



        $role = Role::all();

        return view('accueilEleve.index')->with([
               'user'=>$user,
               'role'=>$role

               ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);

        $user->name = $request->name;
        $user->email = $request->email;

        if($user->save()){
            $request->session()->flash('success',$user->name . ' has been updated');
        }else{
            $request->session()->flash('error', 'Mmmmh... Une erreur à eu lieu lors de la mise à jour');
        }



        return redirect()->route('accueilEleve');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

        if(Gate::denies('delete-users')){
            return redirect(route('accueilEleve'));

        }



        $user->roles()->detach();
        $user->delete();

        return redirect()->route('accueilEleve');
    }
}
