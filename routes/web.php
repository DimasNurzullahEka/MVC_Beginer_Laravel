<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('layout.v_home');
// });
// Route::get('/guru', function () {
//     return view('layout.v_guru');
// });
// Route::get('/user', function () {
//     return view('layout.v_user');
// });
// Route::get('/siswa', function () {
//     return view('layout.v_siswa');
// });
Route::get('/', [HomeController::class,'index']);
// Route::get('/home/about/{id}',[HomeController::class,'about']);
Route::get('/guru', [GuruController::class,'index']);
Route::get('/user', [UserController::class,'index']);
Route::get('/siswa',[SiswaController::class,'index']);
