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


    public function travaux(User $user, $id)
    {

        //$classe = Reception::find($id);

        $idFile = ImageUpload::all();

        $classe = Reception::where('classe_travaux')->find($user);

        $user = User::where('surname')->first();


        return view('classe.travaux' ,compact('idFile', 'classe','user'));
    }




    public function download(ImageUpload $idFile, $id){


        $idFile = ImageUpload::find($id);



        return Storage::disk('files')->download($idFile->original);


     }






}
