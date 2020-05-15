<?php

namespace App\Http\Controllers;

use App\User;
use App\Customer;
use App\GraphiqueStudent;
use Illuminate\Http\Request;

class GraphiqueStudentController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth');
    }


    public function create(GraphiqueStudent $graphs){


        $student = User::where('role','student')->get();

        return view('graph.create', compact('graphs','student'));


    }





    public function store(GraphiqueStudent $graphs){

        $data = request()->validate([

            'nom'=>'required',
            'matiere'=>'required',
            'notes'=>'required',
            'date'=>'required',


        ]);
        


        $graphs = auth()->user()->graphique()->create($data);


         return redirect('/graphs/'.$graphs->id);
    }



    public function show($graph, User $user){



        $graph = GraphiqueStudent::all();

        return view('graph.graphique', compact('graph'));


    }



}
