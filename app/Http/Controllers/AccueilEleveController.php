<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageUpload;
use App\Questionnaire;

class AccueilEleveController extends Controller
{


    public function show(){



        $AccueilEleve = Questionnaire::all();
        $AccueilEleves = ImageUpload::all();




        return view('accueilEleve.accueil', compact('AccueilEleve', 'AccueilEleves' ));



    }
}
