<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Survey;
use App\ImageUpload;
use App\Questionnaire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class AccueilEleveController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }


    public function index(){



        $AccueilEleve = Questionnaire::all();
        $AccueilEleves = ImageUpload::all();




        return view('accueilEleve.accueil', compact('AccueilEleve', 'AccueilEleves' ));



    }

    public function show(Questionnaire $questionnaires, Survey $survey, ImageUpload $path){


        $questionnaires = auth()->user()->questionnaires;

        $questionnaire  = Questionnaire::all();

        $survey = Survey::all();

        $path = imageUpload::all();

        //$video = Video::all();

        $maj= 'Tu es à jour';

        return view('AccueilEleve.dashboardeleve', compact('questionnaire',
                                                           'survey',
                                                           'path',
                                                           'maj',
                                                           ));
    }




    public function download(ImageUpload $path, $id){

        /*
       if(! is_dir(storage_path(('app/files')))){
           mkdir(storage_path('app/files'), 0777);
       }
        */

        $path = ImageUpload::find($id);



        //$download = storage_path('files',$idFile->original);

        //return response()->download($download);
        return Storage::disk('files')->download($path->original);

        //return redirect('/accueil/'.$idFile, $download);


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
