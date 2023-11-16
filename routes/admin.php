<?php

use App\Http\Controllers\admin\AdminLuckyDrawController;
use App\Http\Controllers\admin\MarketplaceController;
use App\Http\Controllers\user\AdminDashboardController;
use Illuminate\Support\Facades\Route;



Route::name('Admin.')->prefix('Admin/')->middleware('auth','admin')->group(function () {

    Route::get('Dashboard',[AdminDashboardController::class,'index'])->name('Dashboard');
    Route::get('All/Users',[AdminDashboardController::class,'users'])->name('All.Users');
    // new routes added
    Route::get('All/Deposit/Pending/Requests',[AdminDashboardController::class,'pendingDeposit'])->name('All.Pending.Requests');
    Route::get('All/Deposit/Approved/Requests',[AdminDashboardController::class,'approvedDeposit'])->name('All.Approved.Requests');
    Route::get('All/Deposit/Rejected/Requests',[AdminDashboardController::class,'rejectedDeposit'])->name('All.Rejected.Requests');
    Route::get('Make/Request/Approve/{id}',[AdminDashboardController::class,'approveRequest'])->name('Approve.Deposit.Request');
    Route::get('Make/Request/Reject/{id}',[AdminDashboardController::class,'rejectRequest'])->name('Reject.Deposit.Request');
    // Widtharw routes
    Route::get('All/Widthraw/Pending/Requests',[AdminDashboardController::class,'pendingWidthraw'])->name('All.Pending.Widthraw.Requests');
    Route::get('All/Widthraw/Approved/Requests',[AdminDashboardController::class,'approvedWidthraw'])->name('All.Approved.Widthraw.Requests');
    Route::get('All/Widthraw/Rejected/Requests',[AdminDashboardController::class,'rejectedWidthraw'])->name('All.Rejected.Widthraw.Requests');
    Route::get('Make/Widthraw/Approve/{id}',[AdminDashboardController::class,'approveWidthraw'])->name('Approved.Widthraw.Request');
    Route::get('Make/Widthraw/Rejected/{id}',[AdminDashboardController::class,'rejectWidthraw'])->name('Rejected.Widthraw.Request');


    Route::get('User/Details/{id}',[AdminDashboardController::class,'details'])->name('User.Details');
    Route::post('Change/User/Details/{id}',[AdminDashboardController::class,'changeDetails'])->name('Change.User.Details');
    Route::get('Add/Items',[AdminLuckyDrawController::class,'add'])->name('Add.Items');
    Route::get('All/Items',[AdminLuckyDrawController::class,'allItems'])->name('All.Items');
    Route::get('All/Winners',[AdminLuckyDrawController::class,'allWinners'])->name('All.Winners');
    Route::get('Delete/Items/{id}',[AdminLuckyDrawController::class,'deleteItems'])->name('Delete.Items');
    Route::get('Delete/Winner/{id}',[AdminLuckyDrawController::class,'deleteWinner'])->name('Delete.Winner');
    Route::post('Store/luck',[AdminLuckyDrawController::class,'store'])->name('Store.Items');
    Route::get('Add/Image',[MarketplaceController::class,'add'])->name('Add.Image');
    Route::get('Add/Horoscope',[MarketplaceController::class,'horoscope'])->name('Add.Horoscope');
    Route::post('Store/Image',[MarketplaceController::class,'store'])->name('Store.Image');
    Route::post('Store/Horoscope',[MarketplaceController::class,'storeHoroscope'])->name('Store.Horoscope');
    Route::get('All/Horoscope',[MarketplaceController::class,'allHoroscope'])->name('All.Horoscope');
    Route::get('Horoscope/Details/{id}',[MarketplaceController::class,'detailsHoroscope'])->name('Details.Of.Horoscope');
    Route::get('Winner',[MarketplaceController::class,'winner'])->name('LuckyDraw.Winner');
    Route::get('Select/Image/{id}',[MarketplaceController::class,'select'])->name('Select.Image');
    Route::get('UnSelect/Image/{id}',[MarketplaceController::class,'UnSelect'])->name('UnSelect.Image');
    Route::post('Store/Winner',[MarketplaceController::class,'storeWinner'])->name('Store.LuckyDraw.Winner');
    Route::post('Update/Horoscope/Details/{id}',[MarketplaceController::class,'updateHoroscope'])->name('Update.Horoscope');

});
