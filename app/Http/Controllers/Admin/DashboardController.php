<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function registered(){
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }

    public function registercreate($id){
        $users = User::find($id);
        return view('admin.register-create')->with('users', $users);
    }

    public function registeredit(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view('admin.register-edit')->with('users',$users);
    }

    public function registerupdate(Request $request,$id)
    {
        $users = User::find($id);
        $users->name = $request->input('username');
        $users->usertype = $request->input('usertype');
        $users->update();

        return redirect('role-register')->with('status','Your data is update');
    }
    public function registerdelete($id)
    {
        $users = User::findOrfail($id);
        $users->delete();

        return redirect('/role-register')->with('status','Your data is Delete');
    }
}
