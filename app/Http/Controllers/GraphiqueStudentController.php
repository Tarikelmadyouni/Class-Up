<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\GraphiqueStudent;

class GraphiqueStudentController extends Controller

  {


    public function create(GraphiqueStudent $graphs){

        $graphs=GraphiqueStudent::all();

        return view('graph.graphique', compact('graphs'));


    }





    public function store(Customer $graphs){

        $data = request()->validate([

            'nom'=>'required',
            'matiere'=>'required',
            'notes'=>'required',
            'date'=>'required',



        ]);




        $graphique = $graphs->graphique()->create($data);
        //$graphique->matiereCustomer()->createMany($data['matiere']['notes']);


         return redirect('/graphs/'.$graphs->id);
    }



    public function show(GraphiqueStudent $graph){



        return view('graph.graphique', compact('graph'));


    }



}
