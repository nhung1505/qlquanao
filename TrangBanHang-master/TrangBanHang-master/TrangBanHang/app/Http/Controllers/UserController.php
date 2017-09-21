<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showList(){
        $users = User::all();
        return view('admin.user.list',['users' => $users]);
    }
    public function showFormDelete(Request $request,$id){
        $user = User::find($id);
        return view('admin.user.delete',['user' => $user]);
    }
    public function delete(Request $request,$id){
        $user = User::find($id);
        if($user->role ==0 )
        $user->delete();
        else echo"day la admin k dc xao";
        return redirect(route('show.list.user'));
    }
}
