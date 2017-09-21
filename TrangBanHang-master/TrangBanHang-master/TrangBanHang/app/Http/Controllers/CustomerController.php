<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function showList(){
        $customers = Customer::all();
        return view('admin.customer.list',compact('customers'));
    }

    public function showDelete($id){
        $customer = Customer::find($id);
        return view('admin.customer.delete',compact('customer'));
    }

    public function delete($id){
        $customer = Customer::find($id);
        $customer->delete();
        return redirect(route('show.list.customer'));
    }

}
