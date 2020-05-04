<?php

namespace App\Http\Controllers;

use App\ImageUpload;
use App\User;
use AApp\Role;
use App\Reception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReceptionController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }


    public function travaux( $id)
    {

        $idFile = ImageUpload::all();

        $user = User::all();

        $classe = Reception::find($id);


        return view('classe.travaux' ,compact('idFile', 'classe','user'))->with($id);
    }




    public function download(ImageUpload $idFile, $id){


        $idFile = ImageUpload::find($id);



        return Storage::disk('files')->download($idFile->original);


     }






}
