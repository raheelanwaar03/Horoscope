<?php

use App\Models\User;
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
    return 4;
}

function widthrawal()
{
    $widthrawls = UserWidthraw::where('status','approved')->get();
    $total_widthraw = 0;
    foreach($widthrawls as $data)
    {
        $total_widthraw += $data->amount;
    }
    return $total_widthraw;
}

