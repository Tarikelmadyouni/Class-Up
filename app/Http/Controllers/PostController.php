<?php

namespace App\Http\Controllers;

use App\Channel;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //public function create(){

        //$channels = Channel::orderBy('name')->get();

        //return view('post.create');
    //}

    public function create(){



        return view('post.create');
    }
}
