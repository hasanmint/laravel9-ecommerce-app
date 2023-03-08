<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function Index(){
        $users=User::latest()->get();
        return view('admin.pages.user.alluser',compact('users'));
    }

    public function AddUser(){

        return view('admin.pages.user.adduser');
    }


    public function EditUser($id){
        $users=User::findOrFail($id);
        return view('admin.pages.user.edituser',compact('users'));
    }

    public function StoreUser(Request $request){
        $request->validate([
            'role' => 'required',
            'name' => 'required',
            'username' => 'required|unique:users|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required',
        ]);

        User::insert([
            'role' => $request->role,
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' =>bcrypt($request->password),
        ]);

        return redirect()->route('all.user')->with('message','User Insert Successfully');
    }


    public function UpdateUser( Request $request){
        $users_id= $request->hide_id;
        $request->validate([
            'role' => 'required',
            'name' => 'required',
            // 'username' => 'required|unique:users|max:255',
            // 'email' => 'required|unique:users|max:255',
        ]);


        User::findOrfail($users_id)->update([
            'role' => $request->role,
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
        ]);

        return redirect()->route('all.user')->with('message','Category Updated Successfully');
    }


    public function DeleteUser($id){
        User::findOrFail($id)->delete();

        return redirect()->route('all.user')->with('message','User Data Deleted Successfully');
    }

}
