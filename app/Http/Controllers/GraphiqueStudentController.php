<?php

namespace App\Http\Controllers;

use App\ChoixClasseEleve;
use App\Note;
use App\User;
use App\Customer;
use App\ClasseMatiere;
use App\GraphiqueStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GraphiqueStudentController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth');
    }


    public function create(GraphiqueStudent $graph, User $user ){

        $id = Auth::user()->id;

        $student = ChoixClasseEleve::with('eleveToProf','classeEleveToUser')
                         ->where('choix_classe_eleves.user_id','classe_matieres.user_id')
                         ->where('choix_classe_eleves.user_id','users.id')
                         ->get();

        $note = Note::all();

        $matiere = ClasseMatiere::where('user_id',$id)->get();


        return view('graph.create', compact('graph','student','note','matiere'));


    }



    public function store(GraphiqueStudent $graphs){

        $data = request()->validate([

            'nom'=>'required',
            'notes'=>'required',
            'date'=>'required',


        ]);



        $graphs = auth()->user()->graphique()->create($data);


         return redirect('/graphs/'.$graphs->id);
    }




    public function show(GraphiqueStudent $graph ){

        //$user = Auth::user()->id;


        $graph = GraphiqueStudent::all();



        return view('graph.graphique', compact('graph'));


    }



}
