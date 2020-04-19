<?php

namespace App\Http\Controllers\Admin;

use Gate;
use App\Role;
use App\User;
use App\Customer;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



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
        $customer = Customer::all();

       $users = User::where('role','Student')->get();

        return view('admin.users.index', compact('customer'))->with('user',$users);


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        if(Gate::denies('edit-users')){
            return redirect(route('admin.users.index'));

        }



       $info = Customer::all();
        $role = Role::all();

        return view('admin.users.edit')->with([
               'user'=>$user,
               'role'=>$role,
               'info'=>$info
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
        $user->roles()->sync($request->role);



        $user->name = $request->name;
        $user->email = $request->email;

        if($user->save()){
            $request->session()->flash('success',$user->name . ' has been updated');
        }else{
            $request->session()->flash('error', 'Mmmmh... Une erreur à eu lieu lors de la mise à jour');
        }



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



        $user->roles()->detach();
        $user->delete();

        return redirect()->route('admin.users.index');
    }




}

