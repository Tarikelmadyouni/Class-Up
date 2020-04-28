<?php

namespace App\Http\Controllers;

use App\User;
use App\ImageUpload;
use App\AccueilAdmin;
use App\Questionnaire;
use Illuminate\Http\Request;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Storage;

class AccueilAdminController extends Controller


{
    public function __construct()
    {
        $this->middleware('auth');
    }



        public function show(){




        $AccueilAdmin =auth()->user()->questionnaires;
        $idFile = ImageUpload::all();






        return view('accueil_admin.accueil', compact('AccueilAdmin', 'idFile' ));



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
