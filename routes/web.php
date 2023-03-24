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
/// Administrator-Destinasi
Route::get('admin/datadestinasi', [AdminController::class, 'datadestinasi'])->name('admin.datadestinasi');
Route::get('admin/destinasi/form', [AdminController::class, 'destinasiForm'])->name('admin.destinasi.form');
//CRUD Destinasi
Route::post('/insertdestinasi',[AdminController::class, 'insertdestinasi'])->name('insertdestinasi');
Route::post('/updatedestinasi/{id}',[AdminController::class, 'updatedestinasi'])->name('updatedestinasi');
Route::get('/editdestinasi/{id}',[AdminController::class, 'editdestinasi'])->name('editdestinasi');
Route::get('/deletedestinasi/{id}',[AdminController::class, 'deletedestinasi'])->name('deletedestinasi');


// Administrasi-Kuliner
Route::get('admin/datakuliner', [AdminController::class, 'datakuliner'])->name('admin.datakuliner');
Route::get('admin/kuliner/form', [AdminController::class, 'kulinerForm'])->name('admin.kuliner.form');
//CRUD Kuliner
Route::post('/insertkuliner',[AdminController::class, 'insertkuliner'])->name('insertkuliner');
Route::post('/updatekuliner/{id}',[AdminController::class, 'updatekuliner'])->name('updatekuliner');
Route::get('/editkuliner/{id}',[AdminController::class, 'editkuliner'])->name('editkuliner');
Route::get('/deletekuliner/{id}',[AdminController::class, 'deletekuliner'])->name('deletekuliner');


// Kontributor
Route::get('beranda', [ContributorController::class, 'index'])->middleware('auth')->name('contributor.beranda');
// Kontributor-Destinasi
Route::get('contributor/datadestinasi', [ContributorController::class, 'datadestinasi'])->name('contributor.datadestinasi');
Route::get('contributor/destinasi/form', [ContributorController::class, 'destinasiForm'])->name('contributor.destinasi.form');
//CRUD Destinasi
Route::post('/insertdestinasi',[ContributorController::class, 'insertdestinasi'])->name('insertdestinasi');
Route::post('/updatedestinasi/{id}',[ContributorController::class, 'updatedestinasi'])->name('updatedestinasi');
Route::get('/editdestinasi/{id}',[ContributorController::class, 'editdestinasi'])->name('editdestinasi');

// Kontributor-Kuliner
Route::get('contributor/datakuliner', [ContributorController::class, 'datakuliner'])->name('contributor.datakuliner');
Route::get('contributor/kuliner/form', [ContributorController::class, 'kulinerForm'])->name('contributor.kuliner.form');
//CRUD Kuliner
Route::post('/insertkuliner',[ContributorController::class, 'insertkuliner'])->name('insertkuliner');
Route::post('/updatekuliner/{id}',[ContributorController::class, 'updatekuliner'])->name('updatekuliner');
Route::get('/editkuliner/{id}',[ContributorController::class, 'editkuliner'])->name('editkuliner');



//Templating View
//Home Landing Page
Route::get('home', [HomePageController::class, 'home'])->name('home');
// Destinasi Page
Route::get('destinasi', [DestinasiController::class, 'destinasi'])->name('destinasi');
// Kuliner Page
Route::get('kuliner', [KulinerPageController::class, 'kuliner'])->name('kuliner');