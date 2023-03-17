<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\KulinerPageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContributorController;
use App\Http\Controllers\RegisterController;
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
    return view('welcome');
});

// Authentication
// Register
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'registration'])->name('register.registration');

// Login
Route::get('login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('auth');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


// Administrator
Route::get('Beranda', [AdminController::class, 'index'])->middleware('auth')->name('admin.beranda');
// Administrator-Destinasi
Route::get('admin/destinasi', [AdminController::class, 'destinasi'])->name('admin.destinasi');
Route::get('admin/destinasi/form', [AdminController::class, 'destinasiForm'])->name('admin.destinasi.form');
// Administrator-Kuliner
Route::get('admin/kuliner', [AdminController::class, 'kuliner'])->name('admin.kuliner');
Route::get('admin/kuliner/form', [AdminController::class, 'kulinerForm'])->name('admin.kuliner.form');

// Kontributor
Route::get('beranda', [ContributorController::class, 'index'])->middleware('auth')->name('contributor.beranda');
// Kontributor-Destinasi
Route::get('contributor/destinasi', [ContributorController::class, 'destinasi'])->name('contributor.destinasi');
Route::get('contributor/destinasi/form', [ContributorController::class, 'destinasiForm'])->name('contributor.destinasi.form');
//CRUD Destinasi
Route::post('/insertdestinasi',[ContributorController::class, 'insertdestinasi'])->name('insertdestinasi');
Route::post('/updatedestinasi/{id}',[ContributorController::class, 'updatedestinasi'])->name('updatedestinasi');


// Kontributor-Kuliner
Route::get('contributor/kuliner', [ContributorController::class, 'kuliner'])->name('contributor.kuliner');
Route::get('contributor/kuliner/form', [ContributorController::class, 'kulinerForm'])->name('contributor.kuliner.form');

//Home Landing Page
Route::get('home', [HomePageController::class, 'home'])->name('home');

// Destinasi Page
Route::get('destinasi', [DestinasiController::class, 'destinasi'])->name('destinasi');

// Kuliner Page
Route::get('kuliner', [KulinerPageController::class, 'kuliner'])->name('kuliner');