<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\AdminRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Hash;
use Symfony\Component\HttpFoundation\Session\Session;


class AdminController extends Controller
{
    public function showLoginForm(){
        if (!Auth::check()){
            return view('admin.login');
        }else{
            return redirect()->route('show.index');
        }

    }
    public function login(AdminRequest $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password,'role' => 1])){
            return redirect()->route('show.index');
        }else return redirect()->route('show.login.form');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('show.login.form');
    }

    public function showFormEditPassword($id){
        if(Auth::check()){
            $id = Auth::user()->id;
            $user = User::find($id);
            return view('admin.user.edit',compact('user'));
        }
    }
    public function editPassword(Request $request, $id ){
        $id = Auth::user()->id;
        $user = User::find($id);
        if($request->input('newpassword' == $request->input('repassword'))){
            $user->password = Hash::make($request->newpassword);
        }else "khong trung mat khau";
        $user->save();
        return redirect()->route('show.index');
    }
}
