<?php

use App\Models\Recored;
use App\Models\User;
use App\Models\UserInvest;
use App\Models\UserWidthraw;

function allUser()
{
    $user = User::all()->count();
    return $user;
}

// function pendingUser()
// {
//     $user = User::where('status','pending')->count();
//     return $user;
// }

// function rejectedUsers()
// {
//     $user = User::where('status','rejected')->count();
//     return $user;
// }

// function approvedUsers()
// {
//     $user = User::where('status','approved')->count();
//     return $user;
// }

function investment()
{
    $investment = UserInvest::where('status', 'approved')->get();
    $total_invest = 0;
    foreach ($investment as $data) {
        $total_invest += $data->amount;
    }
    return $total_invest;
}

function widthrawal()
{
    $widthrawls = UserWidthraw::where('status', 'approved')->get();
    $total_widthraw = 0;
    foreach ($widthrawls as $data) {
        $total_widthraw += $data->amount;
    }
    return $total_widthraw;
}

function givenAmount()
{
    $recored = Recored::get();
    $total_balance = 0;
    foreach ($recored as $data) {
        $total_balance += $data->amount;
    }
    return $total_balance;
}
