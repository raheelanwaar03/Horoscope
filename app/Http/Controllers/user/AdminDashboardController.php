<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDeposit;
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

    public function pendingDeposit()
    {
        $pending_request = UserDeposit::where('status','pending')->get();
        return view('admin.deposit.pending',compact('pending_request'));
    }

    public function approvedDeposit()
    {
        $pending_request = UserDeposit::where('status','approved')->get();
        return view('admin.deposit.approved',compact('pending_request'));
    }

    public function rejectedDeposit()
    {
        $pending_request = UserDeposit::where('status','rejected')->get();
        return view('admin.deposit.rejected',compact('pending_request'));
    }

    public function approveRequest($id)
    {
        $deposit_request = UserDeposit::find($id);
        $deposit_request->status = 'approved';
        $deposit_request->save();
        return redirect()->back()->with('success','Deposit request approved successfully');
    }


    public function rejectRequest($id)
    {
        $deposit_request = UserDeposit::find($id);
        $deposit_request->status = 'rejected';
        $deposit_request->save();
        return redirect()->back()->with('success','Deposit request rejected successfully');
    }


}
