<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'User Logout Successfully',
            'alert-type' => 'success'
        );
        flash()->addSuccess('User Logout Successfully');
        return redirect('/')->with($notification);
    }// end method


    public function Profile(){
        $id=Auth::User()->id;
        $ProdifleData=User::find($id);
        return view('admin.profile.index',compact('ProdifleData'));
    }// End Method

    public function EditProfile(){
        $id=Auth::User()->id;
        $EditData=User::find($id);
        return view('admin.profile.edit',compact('EditData'));
    }// End Method


    public function UpdateProfile(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')) {
           $file = $request->file('photo');

           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('upload/profile_photo'),$filename);
           $data['photo'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );
        flash()->addSuccess('Admin Profile Updated Successfully');
        return redirect()->route('admin.profile')->with($notification);

    }// End Method

    public function ChangePassword(){

        return view('admin.profile.updatePassword');
    }// End Method


    public function UpdatePassword(Request $request){
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirm_password' => 'required|same:newpassword',

        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword,$hashedPassword )) {
            $users = User::find(Auth::id());
            $users->password = bcrypt($request->newpassword);
            $users->save();

            session()->flash('message','Password Updated Successfully');
            return redirect()->back();
        } else{
            session()->flash('message','Old password is not match');
            return redirect()->back();
        }

    }// End Method









}
