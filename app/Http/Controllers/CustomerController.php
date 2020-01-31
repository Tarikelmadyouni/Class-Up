<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    /*public function index(Request $request){

       $customers = Customer::where('active',$request->query('active', 1))->get();

       return view('customer.index',compact('customers'));
    }
    */




    public function create(){


        $customer = Customer::all();


        return view('customer.create', compact('customer'));
    }



    public function store(){


        $data = request()->validate([

            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required|email',
            'classe'=>'required',
            'ecole'=>'required',


        ]);

        //$data = auth()->user()->id;

        $customer = Customer::create($data);

        return redirect('customers');


    }



    public function show(Customer $customer){


        //$customer = Customer::where('id',$customer)->firstOrFail();

       return view ('customer.show', compact('customer'));
    }




    public function edit(Customer $customer){

        $customer = Customer::all();

        return view ('customers.edit', compact('customer'));

    }



    public function update(Customer $customer){

        $customer->update($this->validatedData());

        return redirect('/customers');
    }




    public function destroy(Customer $customer){

        $customer->delete();

        return redirect('/customers');
    }




    protected function validatedData(){

         return request()->validate([

        'name'=>'required',
        'email'=>'required|email'
         ]);

    }



}
