<?php

namespace App\Http\Controllers;

use App\User;
use App\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(User $user){



    return view('profiles.index',compact('user'));


    }

    public function edit(User $user)
    {
            $this->authorize('update',$user->profile);

            return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);
          $data = request()->validate([

            'description'=> 'required',
             'url'=> 'url',
             //'image'=>'',
         ]);

       auth()->user()->profile->update($data);

         return redirect("/profile/{$user->id}");

    }


    public function download(ImageUpload $idFile, $id){

        /*
       if(! is_dir(storage_path(('app/files')))){
           mkdir(storage_path('app/files'), 0777);
       }
        */

        $idFile = ImageUpload::find($id);



        //$download = storage_path('files',$idFile->original);

        //return response()->download($download);
        return Storage::disk('files')->download($idFile->original);

        //return redirect('/accueil/'.$idFile, $download);


     }



}


