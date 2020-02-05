<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\GraphiqueStudent;

class GraphiqueStudentController extends Controller
{

    public function create(GraphiqueStudent $graphs){


   //dd($graphs);
        return view('graph.create', compact('graphs'));


    }





    public function store(Customer $graphs){

        $data = request()->validate([

            'nom.nom'=>'required',
            'matiere.matieres'=>'required',
            'notes.notes'=>'required',



        ]);




        $graphique = $graphs->graphique()->create($data['nom']);
        $graphique->matiereCustomer()->createMany($data['matiere']['notes']);


         return redirect('/graphs/'.$graphs->id);
    }


      /*
    public function show(GraphiqueStudent $graph){



        return view('graph.graphique', compact('graph'));


    }
    */


}
