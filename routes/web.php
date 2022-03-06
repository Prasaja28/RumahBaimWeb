<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfilController;


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

//Profil
Route::get('/admin-profil',[ProfilController::class, 'index']);
Route::get('/admin-profil/delete-video/{id}',[ProfilController::class, 'videoDestroy']);
Route::put('/admin-profil/update-video/{id}',[ProfilController::class, 'videoUpdate']);
Route::post('/admin-profil/video-store',[ProfilController::class, 'videoStore']);
Route::get('/admin-profil/delete-tentang/{id}',[ProfilController::class, 'tentangDestroy']);
Route::put('/admin-profil/update-tentang/{id}',[ProfilController::class, 'tentangUpdate']);
Route::post('/admin-profil/store-tentang',[ProfilController::class, 'tentangStore']);
Route::get('/admin-profil/delete-kontak/{id}',[ProfilController::class, 'kontakDestroy']);
Route::put('/admin-profil/update-kontak/{id}',[ProfilController::class, 'kontakUpdate']);
Route::post('/admin-profil/store-kontaj',[ProfilController::class, 'kontakStore']);
