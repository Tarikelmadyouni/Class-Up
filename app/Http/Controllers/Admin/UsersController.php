<?php

namespace App\Http\Controllers\Admin;

use Gate;
use App\Role;
use App\User;
use App\Customer;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use DB as GlobalDB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;



class UsersController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Customer $customer)
    {
        //$info = Customer::all();

       $users = User::where('role','Student')->get();



        return view('admin.users.index')->with('user',$users);


    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Customer $info)
    {

        if(Gate::denies('edit-users')){
            return redirect(route('admin.users.index'));

        }


       //$info = Customer::all();

       $this->authorize('edit-users',$user->customer);

      //$info = Customer::where('classe')->where('telephone')->first(); // or whatever, just get one log


        return view('admin.users.edit')->with([
               'user'=>$user,
               'info'=>$info,


               ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Customer $info)
    {


        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;

        $user->save();

        $data = request()->validate([

            'classe'=>'required',
            'telephone'=>'required'

        ]);

        //$info = new Customer;

        $user->customer()->update([

            'classe'=>$data['classe'],
            'telephone'=>$data['telephone'],
         ]);

        /*

        {
            $request->session()->flash('success',$user->name . ' has been updated');
        }else{
            $request->session()->flash('error', 'Mmmmh... Une erreur à eu lieu lors de la mise à jour');
        }
        */

        return redirect()->route('admin.users.index');
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

        if(Gate::denies('delete-users')){
            return redirect(route('admin.users.index'));

        }

        $user->delete();

        return redirect()->route('admin.users.index');
    }




}

