<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PortoController;
use App\Http\Controllers\UsersController;
// use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\LandingController;


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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/menu-porto', function () {
    return view('menu-porto');
});
Route::get('/detail-menu-porto', function () {
    return view('detail-menu-porto');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/',[LandingController::class, 'index']);
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
// Route::get('/admin-profil',[ProfileController::class, 'index']);
// Route::get('/admin-profil/delete-foto/{id}',[ProfileController::class, 'fotoDestroy']);
// Route::put('/admin-profil/update-foto/{id}',[ProfileController::class, 'fotoUpdate']);
// Route::post('/admin-profil/store-foto',[ProfileController::class, 'fotoStore']);
// Route::post('/admin-profil/store-foto-media',[ProfileController::class, 'storeMedia']);
// Route::get('/admin-profil/delete-tentang/{id}',[ProfileController::class, 'tentangDestroy']);
// Route::put('/admin-profil/update-tentang/{id}',[ProfileController::class, 'tentangUpdate']);
// Route::post('/admin-profil/store-tentang',[ProfileController::class, 'tentangStore']);
// Route::get('/admin-profil/delete-kontak/{id}',[ProfileController::class, 'kontakDestroy']);
// Route::put('/admin-profil/update-kontak/{id}',[ProfileController::class, 'kontakUpdate']);
// Route::post('/admin-profil/store-kontak',[ProfileController::class, 'kontakStore']);

//Profile
Route::get('/admin-profile',[ProfileController::class, 'index'])->name('admin-profile');
Route::get('/admin-profile/delete-foto/{id}',[ProfileController::class, 'fotoDestroy']);
Route::post('/admin-profile/update-foto/{id}',[ProfileController::class, 'fotoUpdate'])->name('updateFoto');
Route::post('/admin-profile/store-foto',[ProfileController::class, 'fotoStore']);
Route::get('/admin-profile/delete-tentang/{id}',[ProfileController::class, 'tentangDestroy']);
Route::post('/admin-profile/update-tentang/{id}',[ProfileController::class, 'tentangUpdate']);
Route::post('/admin-profile/store-tentang',[ProfileController::class, 'tentangStore']);
Route::get('/admin-profile/delete-kontak/{id}',[ProfileController::class, 'kontakDestroy']);
Route::put('/admin-profile/update-kontak/{id}',[ProfileController::class, 'kontakUpdate']);
Route::post('/admin-profile/store-kontak',[ProfileController::class, 'kontakStore'])->name('storeKontak');

//galeri portofolio
Route::get('/admin-galeri',[GaleriController::class, 'index']);
Route::get('/admin-galeri/show',[GaleriController::class, 'show']);
Route::get('/admin-galeri/delete/{id}',[GaleriController::class, 'destroy']);
Route::put('/admin-galeri/update/{id}',[GaleriController::class, 'update']);
Route::post('/admin-galeri/store',[GaleriController::class, 'store']);
Route::post('/admin-galeri/store/media',[GaleriController::class, 'storeMedia']);

//testimoni
Route::get('/admin-testi',[TestimoniController::class, 'index']);
Route::get('/admin-testi/delete/{id}',[TestimoniController::class, 'destroy']);
Route::put('/admin-testi/update/{id}',[TestimoniController::class, 'update']);
Route::post('/admin-testi/store',[TestimoniController::class, 'store']);
