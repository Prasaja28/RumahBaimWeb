<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/admin-akun', function () {
    return view('admin.akun');
});
Route::get('/admin-portofolio', function () {
    return view('admin.portofolio');
});
Route::get('/admin-layanan', function () {
    return view('admin.layanan');
});
Route::get('/admin-faq', function () {
    return view('admin.faq');
});
Route::get('/admin-contact', function () {
    return view('admin.contact');
});


Route::resource('users', App\Http\Controllers\usersController::class);
