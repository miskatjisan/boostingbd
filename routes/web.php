<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\CustomerAuthController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BoostTypeController;
use App\Http\Controllers\BalanceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Auth

Route::get('', [CustomerAuthController::class, 'login'])->name('login');
Route::post('post-login', [CustomerAuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [CustomerAuthController::class, 'registration'])->name('register');
Route::post('post-registration', [CustomerAuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('home', [CustomerAuthController::class, 'home'])->name('home'); 
Route::get('logout', [CustomerAuthController::class, 'logout'])->name('logout');

//service

Route::get('service',  [ServiceController::class,'create'] )->name('service.create'); 
Route::get('service/details/{id}',  [ServiceController::class,'ServiceDetails'] )->name('service.details'); 
Route::get('buy/service/{id}',  [ServiceController::class,'BuyService'] )->name('buy.service'); 
Route::post('service/add/successfull',  [ServiceController::class,'store'] )->name('service.store'); 

// category 

Route::get('category/view',[CategoryController::class,'CategoryView'])->name('category.view');
Route::post('category/store',[CategoryController::class,'Categorystore'])->name('category.store');
Route::get('category/delete/{id}',[CategoryController::class,'CategoryDelete'])->name('category.delete');
Route::get('category/edit/{id}',[CategoryController::class,'CategoryEdit'])->name('category.edit');
Route::post('category/update',[CategoryController::class,'CategoryUpdate'])->name('category.update');

// Add services 

Route::get('services/view',[AdminServiceController::class,'ServicesView'])->name('services.view');
Route::get('services/add',[AdminServiceController::class,'ServicesAdd'])->name('add.service');
Route::post('admin/services/store',[AdminServiceController::class,'ServicesStore'])->name('admin.service.store');
Route::get('admin/services/edit/{id}',[AdminServiceController::class,'ServicesEdit'])->name('admin.service.edit');
Route::post('admin/services/update',[AdminServiceController::class,'ServicesUpdate'])->name('admin.service.update');
Route::get('admin/services/delete/{id}',[AdminServiceController::class,'ServicesDelete'])->name('admin.service.delete');


// Boost Type 

Route::get('boosttype/boostleadgeneration',[BoostTypeController::class,'BoostLeadGenerationView'])->name('boostleadgeneration.view');
Route::get('boosttype/catalogboost',[BoostTypeController::class,'CatalogBoostView'])->name('catalogboost.view');
Route::get('boosttype/cellboost',[BoostTypeController::class,'CellBoostView'])->name('cellboost.view');
Route::get('boosttype/messageboost',[BoostTypeController::class,'MessageBoostView'])->name('messageboost.view');
Route::get('boosttype/promotepage',[BoostTypeController::class,'PromotePageView'])->name('promotepage.view');
Route::get('boosttype/trafficboost',[BoostTypeController::class,'TrafficBoostView'])->name('trafficboost.view');


//payment
Route::get('user/payment', [PaymentController::class,'Create'])->name('payment.create'); 
Route::post('payment/add/successfull', [PaymentController::class,'Store'])->name('payment.store');


Route::get('payment/bkash', [PaymentController::class,'bkash'])->name('payment.bkash');
Route::get('payment/rocket', [PaymentController::class,'rocket'])->name('payment.rocket');
Route::get('payment/nogod', [PaymentController::class,'nogod'])->name('payment.nogod');
Route::get('payment/surecash', [PaymentController::class,'surecash'])->name('payment.surecash');

//job/apply/
Route::get('apply-job/', [JobController::class,'create'])->name('job.create'); 
Route::post('job/apply/successfull', [JobController::class,'Store'])->name('job.store');

//Our Team
Route::get('our-team', [TeamController::class,'allteam'])->name('allteam');

//Contact
Route::get('contact',  [ContactController::class,'create'] )->name('contact.create'); 
Route::post('contact/add/successfull',  [ContactController::class,'store'] )->name('contact.store');

//Update Profile
Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
Route::get('/profile/edit', [UserProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update/successfully', [UserProfileController::class, 'update'])->name('profile.update');

//Balance
Route::get('settings', [BalanceController::class,'Create'])->name('balance.create'); 
Route::post('balance/add/successfull', [BalanceController::class,'Store'])->name('balance.store');