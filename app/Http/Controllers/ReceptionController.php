<?php

namespace App\Http\Controllers;

use App\ImageUpload;
use App\User;
use AApp\Role;
use App\Questionnaire;
use App\Reception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReceptionController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }


    public function travaux(Reception $classe, $id)
    {


        $user = User::findOrFail($id);

        $idFile = ImageUpload::with('uploadForFile')->where('user_id',$user->id)->get();

        $classe = Reception::with('userReception')->where('user_id', $id)->get();

        $AccueilAdmin = Questionnaire::with('user')->where('user_id', $user->id)->get();




        return view('classe.travaux' ,compact('idFile', 'classe', 'AccueilAdmin'));
    }




    public function download(ImageUpload $idFile, $id){


        $idFile = ImageUpload::find($id);



        return Storage::disk('files')->download($idFile->original);


     }






}
