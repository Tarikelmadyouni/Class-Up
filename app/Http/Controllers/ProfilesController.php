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


    public function index($user){

        $user= User::findOrFail($user);

    return view('profiles.index',[

         'user'=>$user,

    ]);
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


