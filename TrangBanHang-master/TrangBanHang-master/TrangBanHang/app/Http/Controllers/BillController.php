<?php

namespace App\Http\Controllers;

use App\Bill;
use App\BillDetail;
use App\Customer;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function showList(){
        $customers = Customer::all();
        $bills = Bill::with(['customer', 'bill_details'])->get();
        return view('admin.bill.list',compact('customers','bills'));
    }

    public function showEditForm($id){
        $bill = Bill::find($id);
        return view('admin.bill.edit',compact('bill'));
    }
    public function edit(Request $request, $id){
        $bill = Bill::find($id);
        $bill->status = $request->input('status');
        $bill->save();
        return redirect(route('show.list.bill'));

    }
    public function showDelete($id){
        $bill = Bill::find($id);
        return view('admin.bill.delete',compact('bill'));
    }
    public function delete($id){
        $bill = Bill::find($id);
        $bill->delete();
        return redirect(route('show.list.bill'));
    }

    public function showListByCustomer($id){
        $customers = Customer::all();
        $customer_id = Customer::find($id);
        $bills = Bill::where('customer_id',$id)->get();
        return view('admin.bill.list_by_customer',compact('bills','customers','customer_id'));
    }
    public function showBillDetail($id){
        $bill_details = BillDetail::where('bill_id',$id)->get();
        $bills = Bill::all();
        return view ('admin.bill.bill_detail',compact('bill_details','bills'));
    }

}
