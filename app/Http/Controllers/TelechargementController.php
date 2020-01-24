<?php

namespace App\Http\Controllers;

use App\Telechargement;
use Illuminate\Http\Request;

class TelechargementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


            return view('video/dropzone');
        }



    }


