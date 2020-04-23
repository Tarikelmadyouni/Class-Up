<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
       public function __construct()
       {
            
       }

      public function create()
      {

        return view('posts.create');

      }


      public function store()
      {
            $data = request()->validate([

                  'légende'=>'required',
                  'image'=>['required','image'],
            ]);


               auth()->user()->posts()->create($data);



            dd(request()->all());
      }

}
