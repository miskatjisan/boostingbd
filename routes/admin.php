<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BuyServiceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\Auth\AdminAuthController;



/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//auth
Route::get('/login',[AdminAuthController::class, 'login'])->middleware('adminLoggedIn');
Route::post('/check',[AdminAuthController::class, 'check'])->name('admin.check');
Route::get('/logout',[AdminAuthController::class, 'logout'])->name('admin.logout');
Route::get('/dashboard',[AdminAuthController::class, 'dashboard'])->middleware('isLoggedInAdmin');
//Service
Route::resource('services', ServiceController::class);
//Buy Service
Route::resource('buyservices', BuyServiceController::class);
//payment
Route::resource('payments', PaymentController::class);
//Job 
Route::resource('jobapplies', JobController::class);
//Our Team Member
Route::resource('teams', TeamController::class);
//Contact
Route::resource('contacts', ContactController::class);
//users
Route::resource('users', UserController::class);
//Profile Balance settings
Route::resource('balances', BalanceController::class);
// Inactive/Active Toggle status
Route::get('/status/update', [BalanceController::class, 'updateStatus'])->name('update.status');
