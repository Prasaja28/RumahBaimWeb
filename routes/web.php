<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\UsersController;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

//login
Route::get('/login',[LoginController::class, 'index']);
Route::post('/login',[LoginController::class, 'login']);
Route::get('/logout', [loginController::class,'logout']);

//faq
Route::get('/admin-faq',[FaqController::class, 'index']);
Route::get('/admin-faq/delete/{id}',[FaqController::class, 'destroy']);
Route::put('/admin-faq/update/{id}',[FaqController::class, 'update']);
Route::post('/admin-faq/store',[FaqController::class, 'store']);

//Akun
Route::get('/admin-akun',[UsersController::class, 'index']);
Route::get('/admin-akun/delete/{id}',[UsersController::class, 'destroy']);
Route::put('/admin-akun/update/{id}',[UsersController::class, 'update']);
Route::post('/admin-akun/store',[UsersController::class, 'store']);