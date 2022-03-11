<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PortoController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\GaleriController;


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
Route::get('/detail-porto', function () {
    return view('detail-porto');
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

//portofolio
Route::get('/admin-porto',[PortoController::class, 'index']);
Route::get('/admin-porto/delete/{id}',[PortoController::class, 'destroy']);
Route::put('/admin-porto/update/{id}',[PortoController::class, 'update']);
Route::post('/admin-porto/store',[PortoController::class, 'store']);

//detail Portofolio
Route::get('/admin-porto-detail/{id}',[PortoController::class, 'show']);

//Akun
Route::get('/admin-akun',[UsersController::class, 'index']);
Route::get('/admin-akun/delete/{id}',[UsersController::class, 'destroy']);
Route::put('/admin-akun/update/{id}',[UsersController::class, 'update']);
Route::post('/admin-akun/store',[UsersController::class, 'store']);

//Profil
Route::get('/admin-profil',[ProfilController::class, 'index']);
Route::get('/admin-profil/delete-foto/{id}',[ProfilController::class, 'fotoDestroy']);
Route::put('/admin-profil/update-foto/{id}',[ProfilController::class, 'fotoUpdate']);
Route::post('/admin-profil/store-foto',[ProfilController::class, 'fotoStore']);
Route::get('/admin-profil/delete-tentang/{id}',[ProfilController::class, 'tentangDestroy']);
Route::put('/admin-profil/update-tentang/{id}',[ProfilController::class, 'tentangUpdate']);
Route::post('/admin-profil/store-tentang',[ProfilController::class, 'tentangStore']);
Route::get('/admin-profil/delete-kontak/{id}',[ProfilController::class, 'kontakDestroy']);
Route::put('/admin-profil/update-kontak/{id}',[ProfilController::class, 'kontakUpdate']);
Route::post('/admin-profil/store-kontak',[ProfilController::class, 'kontakStore']);

//galeri portofolio
Route::get('/admin-galeri',[GaleriController::class, 'index']);
Route::get('/admin-galeri/show',[GaleriController::class, 'show']);
Route::get('/admin-galeri/delete/{id}',[GaleriController::class, 'destroy']);
Route::put('/admin-galeri/update/{id}',[GaleriController::class, 'update']);
Route::post('/admin-galeri/store',[GaleriController::class, 'store']);
