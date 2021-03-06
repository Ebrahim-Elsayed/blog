<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Controller;

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


Route::middleware(['auth' , 'isAdmin'])->prefix("admin")->group(function(){

    Route::get("/" , [DashboardController::class , "index"])->name('dashboard');

    Route::get('/user/pdf' , [UserController::class , 'userpdf'])->name('userpdf');

    Route::get('/user/export' , [UserController::class , 'export'])->name('user.export');

    Route::resource('/user' , UserController::class);

    Route::resource('/role' , RoleController::class);


});
// Route::get('hema' , [ebrahimcontroller::class , "ebrahimhome"])->name("best") ;
// Route::post('hema' , [ebrahimcontroller::class , "ebrahimwork"]);





