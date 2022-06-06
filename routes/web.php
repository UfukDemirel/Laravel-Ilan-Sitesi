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
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

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

Route::prefix('/')->middleware('isLogout')->group(function (){
Route::get('admin', [AdminController::class, 'admin'])->name('admin');
Route::post('adminpost', [AdminController::class, 'adminpost'])->name('adminpost');
});

Route::prefix('/')->middleware('isAdmin')->group(function (){
Route::get('destroy', [AdminController::class, 'destroy'])->name('destroy');
Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('adminadvert', [AdminController::class, 'adminadvert'])->name('adminadvert');
Route::get('create/{id}',[AdminController::class,"create"])->name('create');
Route::post('createpost/{id}',[AdminController::class,"createpost"])->name('createpost');
Route::get('remove/{id}',[AdminController::class,"remove"])->name('remove');
Route::get('companies',[AdminController::class,"companies"])->name('companies');
Route::get('companiesedit/{id}',[AdminController::class,"companiesedit"])->name('companiesedit');
Route::post('companieseditpost/{id}',[AdminController::class,"companieseditpost"])->name('companieseditpost');
Route::get('stop/{id}',[AdminController::class,"stop"])->name('stop');
});
