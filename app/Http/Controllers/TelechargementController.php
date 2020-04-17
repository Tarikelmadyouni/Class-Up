<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use App\ImageUpload;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\mkdir;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Session;







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



         Storage::disk('files')

                ->put($file, $path);

                //$filePath->move(storage_path('/files'), $newFile);

               ImageUpload::create([
                    'original'=>$path,
                    'thumbnail'=>$path,

                ]);


     }else{
            $newFile = 'nofile.pdf';
          }


        return redirect('/images');


     }




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


