<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class,'index']);
Route::get('/profile', [HomeController::class,'profile']);
Route::get('/artikel', [HomeController::class,'artikel']);
Route::get('/rfc', [HomeController::class,'rfc']);
Route::get('/layanan', [HomeController::class,'layanan']);
Route::get('/panduan', [HomeController::class,'panduan']);
Route::get('/kontak', [HomeController::class,'kontak']);

Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'authenticate']);
Route::get('/logout', [AuthController::class,'logout'])->name('logout');
Route::get('/register', [RegisterController::class,'create'])->name('register');
Route::post('/register', [RegisterController::class,'store'])->name('register');


Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth')->name('dashboard');
Route::resource('/berita', BeritaController::class,)->middleware('auth');
Route::resource('/main', MainController::class,)->middleware('auth');