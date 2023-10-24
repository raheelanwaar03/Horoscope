<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function users()
    {
        $users = User::get();
        return view('admin.user.all',compact('users'));
    }

    public function details($id)
    {
        $user = User::find($id);
        return view('admin.user.edit',compact('user'));
    }

    public function changeDetails(Request $request,$id)
    {
        $user = User::find($id);
        $user->balance = $request->balance;
        $user->save();
        return redirect()->back()->with('success','User Balance Updated successfully');
    }


}
