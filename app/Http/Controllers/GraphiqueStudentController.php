<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\GraphiqueStudent;

class GraphiqueStudentController extends Controller
{

    public function create(GraphiqueStudent $graphs){

        $graphs = Customer::all();
   //dd($graphs);
        return view('graph.create', compact('graphs'));


    }





    public function store(GraphiqueStudent $graph){

        $data = request()->validate([

            'nom'=>'required',
            'matiere'=>'required',



        ]);

        dd($data);

        $graphique = $graph->customer()->create($data['nom']);
        $graphique->matiere()->createMany($data['matiere']);


         return redirect('/graph/'.$graph->id);
    }



    public function show(GraphiqueStudent $graph){



        return view('graph.graphique', compact('graph'));


    }


}
