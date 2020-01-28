<?php

namespace App\Http\Controllers;

use App\ImageUpload;
use App\Telechargement;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\mkdir;



class TelechargementController extends Controller
{


     public function index(){

        $images_id = ImageUpload::latest()->get();

        return view('drop.dropzone', compact('images_id'));


     }







    public function store(){

           if(! is_dir(public_path('/docs'))){

             mkdir(public_path('/docs'), 0777  );
            }


            $images = Collection::wrap( request()->file('file'));

            $images->each(function($image){

                $basename = Str::random();
                $original= $basename. '.' .$image->getClientOriginalExtension();
                $thumbnail= $basename. '_thumb.' .$image->getClientOriginalExtension();

                Image::make($image)
                ->fit(250, 250)
                ->save(public_path('/docs/' .$thumbnail));

                $image->move(public_path('/docs'), $original);

                ImageUpload::create([

                    'original'=> '/docs/' .$original,
                    'thumbnail'=> '/docs/' .$thumbnail,
                ]);


            });



            return redirect ('/images');
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


