<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccueilAdmin;
use App\ImageUpload;
use App\Questionnaire;
use App\Http\Middleware\Admin;

class AccueilAdminController extends Controller


{
    public function __construct()
    {
        $this->middleware('auth');
    }



        public function show(){



        $AccueilAdmin = Questionnaire::all();
        $AccueilAdmins = ImageUpload::all();




        return view('accueil_admin.accueil', compact('AccueilAdmin', 'AccueilAdmins' ));



    }


}
