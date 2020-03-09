<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//use Auth;
use Illuminate\Support\Facades\Auth;





class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo='/home';


    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo(){

        if(Auth::user()->hasRoles('admin')){
            $this->redirectTo = route('accueil_admin.accueil');
            return $this->redirectTo;

        }elseif(Auth::user()->hasRoles('professeur')){
            $this->redirectTo = route('accueil_admin.accueil');
            return $this->redirectTo;

        }elseif(Auth::user()->hasRoles('student')){
            $this->redirectTo = route('accueilEleve.accueileleve');
            return $this->redirectTo;

        }

        $this->redirectTo = route('home');
        return $this->redirectTo;

    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     /*
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    */
}
