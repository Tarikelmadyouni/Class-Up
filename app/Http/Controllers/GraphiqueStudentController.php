<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraphiqueStudentController extends Controller
{
    public function store(){

        return view('graph.graphique');
    }
}
