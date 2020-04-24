<?php

namespace App\Http\Controllers;

use App\User;
use App\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

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
             'image'=>'',
         ]);


         if (request('image')){

             $imagePath = request('image')->store('profile', 'public');

             $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
             $image->save();

                 $imageArray =['image'=> $imagePath];

            }

            auth()->user()->profile->update(array_merge(

                        $data,
                        $imageArray ??[]


             ));

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


