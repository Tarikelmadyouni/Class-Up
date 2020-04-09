<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use App\ImageUpload;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\mkdir;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Auth\Middleware\Authenticate;







class TelechargementController extends Controller
{




     public function index(){

        $images_id = ImageUpload::latest()->get();

        return view('drop.dropzone', compact('images_id'));


     }




     public function store(Request $request){




          if($request->hasFile('file')){


          $file = $request->file('file')->getClientOriginalName();

          $filePath = pathInfo($file, PATHINFO_FILENAME);

          $fileExt = $request->file('file')->getClientOriginalExtension();

          $newFile = $filePath.'_'.time().'.'.$fileExt;

         $path = $request->file('file')->storeAs('files', $newFile);

         Storage::disk('public')

                ->put('files', $path);

                //$filePath->move(storage_path('/files'), $newFile);

                ImageUpload::create([
                    'original'=>'/files/'.$path,
                    'thumbnail'=>'/files/'.$path,

                ]);



     }else{
            $newFile = 'nofile.pdf';
          }





        return redirect('/images');





     }




/*
public function store(Request $request){

    if(! is_dir(public_path('/docs'))){

        mkdir(public_path('/docs'), 0777  );
       }

      // Get file extension
      $extension = $request->file('file')->getClientOriginalExtension();

      // Valid extensions
      $validextensions = array("jpeg","jpg","png","pdf");

      // Check extension
      if(in_array(strtolower($extension), $validextensions)){

        // Rename file
        $fileName = Carbon::now()->toDayDateTimeString().rand(11111, 99999) .'.' . $extension;

        Image::make($fileName)
                ->fit(250, 250)
                ->save(public_path('/docs/' .$fileName));


        // Uploading file to given path

        $request->file('file')->move(public_path('/docs/'), $fileName);

        ImageUpload::create([

            'original'=> '/docs/' .$fileName,
            'thumbnail'=> '/docs/' .$fileName,
        ]);
      }







            return redirect ('/images');
    }
*/




        public function destroy(ImageUpload $imageUpload){

            //delete the file
            File::delete([
                public_path($imageUpload->original),
                public_path($imageUpload->thumbnail),
            ]);


            //delete record database
            $imageUpload->delete();

            //redirect
            return redirect('/images');


        }




}


