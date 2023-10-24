<?php

use App\Http\Controllers\admin\AdminLuckyDrawController;
use App\Http\Controllers\admin\MarketplaceController;
use App\Http\Controllers\user\AdminDashboardController;
use Illuminate\Support\Facades\Route;



Route::name('Admin.')->prefix('Admin/')->middleware('auth','admin')->group(function () {

    Route::get('Dashboard',[AdminDashboardController::class,'index'])->name('Dashboard');
    Route::get('All/Users',[AdminDashboardController::class,'users'])->name('All.Users');
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
