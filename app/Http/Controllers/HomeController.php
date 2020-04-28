<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $questionnaires = auth()->user()->questionnaires;

        return view('home', compact('questionnaires'));
    }


    public function user(User $user)
    {

       $user=auth()->user()->profile;
       return view('home', compact('user'));

    }
}
