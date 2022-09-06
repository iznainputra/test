<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\TindakanController;

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

 Route::get('home', function () {
     return view('home',[ 'title' => 'home' ]);
 })->name('home');

Route::get('pegawai', [PegawaiController::class, 'showpegawai']);
Route::get('/fpegawai', [PegawaiController::class, 'create']);
Route::post('/createpegawai', [PegawaiController::class, 'store']);
Route::get('/showpegawai/{id}', [PegawaiController::class,'show']);
Route::post('/updatepegawai/{id}', [PegawaiController::class,'update']);
Route::get('/destroy/{id}', [PegawaiController::class,'destroy']);

Route::get('pasien', [PasienController::class, 'showpasien']);
Route::get('/fpasien', [PasienController::class, 'fpasien']);
Route::post('/crpasien', [PasienController::class, 'crpasien']);
Route::get('/showpasien/{id}', [PasienController::class,'shpasien']);
Route::post('/updatepasien/{id}', [PasienController::class,'updatepasien']);
Route::get('/destroy/{id}', [PasienController::class,'depasien']);

Route::get('obat', [ObatController::class, 'index']);
Route::get('/fobat', [ObatController::class, 'create']);
Route::post('/crobat', [ObatController::class, 'store']);
Route::get('/showobat/{id}', [ObatController::class,'show']);
Route::post('/updateobat/{id}', [ObatController::class,'update']);
Route::get('/deobat/{id}', [ObatController::class,'destroy']);

Route::get('tindakan', [TindakanController::class, 'index']);
Route::get('/ftindakan', [TindakanController::class, 'create']);
Route::post('/crtindakan', [TindakanController::class, 'store']);
Route::get('/showtindakan/{id}', [TindakanController::class,'show']);
Route::post('/updatetindakan/{id}', [TindakanController::class,'update']);
Route::get('/detindakan/{id}', [TindakanController::class,'destroy']);

Route::get('register',[UserController::class, 'register'])->name('register');
Route::post('register',[UserController::class, 'register_action'])->name('register.action');
Route::get('/',[UserController::class, 'login'])->name('login');
Route::post('login',[UserController::class, 'login_action'])->name('login.action');
Route::get('chpass',[UserController::class, 'chpass'])->name('chpass');
Route::post('chpass',[UserController::class, 'chpass_action'])->name('chpass.action');
Route::get('logout',[UserController::class, 'logout'])->name('logout');


Route::get('chart', [PasienController::class, 'chart']);