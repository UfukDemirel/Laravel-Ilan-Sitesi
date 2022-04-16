<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\AdminController;

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


Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('logpost', [LoginController::class, 'logpost'])->name('logpost');
Route::post('reg', [LoginController::class, 'reg'])->name('reg');

Route::prefix('/')->middleware('isUser')->group(function (){
Route::get('details/{id}', [UserController::class,'details'])->name('details');
Route::get('company', [UserController::class,'company'])->name('company');
Route::get('edit', [UserController::class,'edit'])->name('edit');
Route::post('editpost', [UserController::class,'editpost'])->name('editpost');
Route::get('advert', [UserController::class,'advert'])->name('advert');
Route::post('advertpost', [UserController::class,'advertpost'])->name('advertpost');
Route::get('update',[UserController::class,'update'])->name('update');
Route::post('updatepost', [UserController::class,'updatepost'])->name('updatepost');
Route::post('test', [UserController::class,'test'])->name('test');
Route::get('contact',[UserController::class,'contact'])->name('contact');
Route::post('contactpost', [UserController::class,'contactpost'])->name('contactpost');
Route::get('delete/{id}',[UserController::class,"delete"])->name('delete');
Route::get('companylist', [UserController::class, 'companylist'])->name('companylist');
Route::get('comdetails/{id}', [UserController::class, 'comdetails'])->name('comdetails');
Route::get('dropzone',[ImageUploadController::class,"dropzone"])->name('dropzone');
Route::post('store',[ImageUploadController::class,"store"]);
Route::get('exit', [LoginController::class, 'exit'])->name('exit');
});

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


Route::get('home', [AdminController::class,'home'])->name('home');
Route::get('adsdetails', [AdminController::class,'adsdetails'])->name('adsdetails');
Route::get('userdetails/{id}', [AdminController::class,'userdetails'])->name('userdetails');
Route::post('userdetailspost/{id}', [AdminController::class,'userdetailspost'])->name('userdetailspost');
Route::get('userdelete/{id}',[AdminController::class,"userdelete"])->name('userdelete');
Route::get('companydetails', [AdminController::class,'companydetails'])->name('companydetails');
Route::get('del',[AdminController::class,"del"])->name('del');

