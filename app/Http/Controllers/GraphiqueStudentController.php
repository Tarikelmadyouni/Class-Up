<?php

namespace App\Http\Controllers;

use App\Note;
use App\User;
use App\Customer;
use App\ClasseMatiere;
use App\ChoixClasseEleve;
use App\GraphiqueStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class GraphiqueStudentController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth');
    }


    public function create(GraphiqueStudent $graph, User $user, ChoixClasseEleve $choix, ClasseMatiere $prof ){

        $id = Auth::user()->id;

        //$eleve = ChoixClasseEleve::all();

        $matiere = ClasseMatiere::where('user_id',$id)->get();


        $student = DB::table('users')
                    ->leftJoin('choix_classe_eleves','users.id','=','choix_classe_eleves.user_id')
                    ->leftJoin('classe_matieres','choix_classe_eleves.id','=','classe_matieres.user_id')
                    ->where('classe_eleve','!=',$id)
                    ->select('users.name','users.surname')
                    ->get();


        $note = Note::all();



        $eleve = ChoixClasseEleve::where('user_id',$choix)->get();



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

