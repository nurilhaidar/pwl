<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Praktikum1;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use Database\Seeders\KeluargaSeeder;
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
//     echo "Selamat Datang ! ";
// });

// Route::get('/about', function () {
//     echo "NIM  : 2141720208";
//     echo "Nama : Mukhammad Nuril Haidar";
// });

// Route::get('/articles/{id}', function ($id) {
//     echo "Halaman artikel dengan id $id";
// });

// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

//Home
Route::get('/', [Praktikum1::class, 'home']);

//Product
Route::prefix('product')->group(function () {
    Route::get('/', [Praktikum1::class, "productHome"]);
    Route::get('{id}', [Praktikum1::class, "product"]);
});

//News
Route::get('/news', [Praktikum1::class, "newsHome"]);
Route::get('/news/{id}', [Praktikum1::class, "news"]);

//Program
Route::prefix('program')->group(function () {
    Route::get('/', [Praktikum1::class, "program"]);
    Route::get('/karir', function () {
        return redirect("https://www.educastudio.com/program/karir");
    });
    Route::get('/magang', function () {
        return redirect("https: //www.educastudio.com/program/magang");
    });
    Route::get('/kunjungan', function () {
        return redirect("https://www.educastudio.com/program/kunjungan-industri");
    });
});

//Contact
Route::get('/contact', [Praktikum1::class, 'contact_us']);

//About Us
Route::get('/about', [Praktikum1::class, 'about_us']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/sekolah', [HomeController::class, 'sekolah']);
Route::get('/profile', [HomeController::class, 'profile']);
Route::get('/kuliah', [HomeController::class, 'kuliah']);

Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/hobi', [HobiController::class, 'index']);
Route::get('/keluarga', [KeluargaController::class, 'index']);
Route::get('/matkul', [MatkulController::class, 'index']);
