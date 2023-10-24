<?php

use App\Http\Controllers\user\UserDashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::name('User.')->prefix('User/')->middleware('auth','user')->group(function () {

    Route::get('Dashboard',[UserDashboardController::class,'index'])->name('Dashboard');
    Route::get('Referral/Link',[UserDashboardController::class,'referral'])->name('Referral.Link');
    Route::get('Add/Cash',[UserDashboardController::class,'deposit'])->name('Deposit.View');
    Route::post('Store/Deposit',[UserDashboardController::class,'storeDeposit'])->name('Store.Deposit');
    Route::get('All/Plans',[UserDashboardController::class,'plans'])->name('All.Plans');
    Route::post('Buy/Plan/{id}',[UserDashboardController::class,'buyPlan'])->name('Buy.Plan');
    Route::get('Widthraw/Balance',[UserDashboardController::class,'widthraw'])->name('Widthraw.Balance');
    Route::post('Store/Widthraw',[UserDashboardController::class,'storeWidthraw'])->name('Store.Widthraw.Balance');
    Route::get('One/Rupee',[UserDashboardController::class,'oneRupee'])->name('One.Rupee');
    Route::post('Buy/One/Rupee/{id}',[UserDashboardController::class,'buyOneRupee'])->name('One.Rupee.Buy');
    Route::get('Profile',[UserDashboardController::class,'profile'])->name('Profile');
    Route::get('Plans/Calculator',[UserDashboardController::class,'calculator'])->name('Plans.calculator');
    Route::get('Picture/Page',[UserDashboardController::class,'picture'])->name('Picture.Page');
    Route::post('Store/Picture/Page',[UserDashboardController::class,'store_picture'])->name('Store.Picture');
    Route::post('Date-Of-Birth',[UserDashboardcontroller::class,'birthDate'])->name('Date.of.Birth');
    Route::get('Stars',[UserDashboardController::class,'stars'])->name('Stars');

});


Route::get('/Images',[UserDashboardController::class,'images'])->name('Images');