<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\GraphiqueStudent;

class GraphiqueStudentController extends Controller
{

    public function create(Customer $graphs){

        $graphs = Customer::all();

        return view('graph.create', compact('graphs'));
    }





    public function store(Customer $customer){

        $data = request()->validate([


            'notes'=>'required',
            'mois'=>'required',
            'matiere'=>'required',
            'date'=>'required',


        ]);

        $graphique = $customer->customer()->create($data['customers']);
        $graphique->graphique()->createMany($data['graphs']);


         return redirect('customers'.$customer->id);
    }



    public function show(GraphiqueStudent $graph){



        return view('graph.graphique', compact('graph'));


    }

}
