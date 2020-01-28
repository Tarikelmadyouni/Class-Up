<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccueilAdmin;
use App\ImageUpload;
use App\Questionnaire;

class AccueilAdminController extends Controller


{



        public function show(){



        $AccueilAdmin = Questionnaire::all();
        $AccueilAdmins = ImageUpload::all();




        return view('accueil_admin.accueil', compact('AccueilAdmin', 'AccueilAdmins' ));



    }


}
