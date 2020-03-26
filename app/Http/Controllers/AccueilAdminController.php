<?php

namespace App\Http\Controllers;

use App\User;
use App\ImageUpload;
use App\AccueilAdmin;
use App\Questionnaire;
use Illuminate\Http\Request;
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
