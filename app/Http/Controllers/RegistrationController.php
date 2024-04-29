<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create(){
        return view('registration');
    }

    public function store(Request $request){
        $request->validate([
            'full_name'=>'required',
            'address'=>'required',
            'email'=>'required|email',
            'password'=>'required',
        ]);
        
        $customer = new Customer;
        $customer->full_name=$request['full_name'];
        $customer->address=$request['address'];
        $customer->email=$request['email'];
        $customer->password=md5($request['password']);
        $customer->save();

        return redirect('customertable');
    }

    public function view(){
        $customers = Customer::all();
        $data = compact('customers');
        return view('customertable')->with($data);
    }

    public function delete($id){
        $customers = Customer::find($id);
        if(!is_null('customers')){
            $customers->delete();
        }
        return redirect('customertable');
    }

    public function edit($id){
        $customers = Customer::find($id);
        if(is_null('customers')){
            return redirect('customertable');
        }
        else{
            $data = compact('customers');
            return view('editform')->with($data);
        }
    }

    public function update($id, Request $request){
        $customers = Customer::find($id);
        $customers->full_name=$request['full_name'];
        $customers->address=$request['address'];
        $customers->email=$request['email'];
        // $customer->password=md5($request['password']);
        $customers->save();

        return redirect('customertable');
    }
}
