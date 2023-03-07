<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\UserwebController;
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
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/tambahagenda', [AgendaController::class, 'createnow']);
Route::get('/tambahuserweb', [UserwebController::class, 'create']);

Route::post('proses-login', [LoginController::class, 'prosesLogin'])->name('login.proses');
Route::post('/simpanagenda', [AgendaController::class, 'storenow']);
Route::post('/simpanuserweb', [UserwebController::class, 'store']);

Route::resource('agenda', AgendaController::class);
Route::resource('pengguna', PenggunaController::class);
Route::resource('userweb', UserwebController::class);