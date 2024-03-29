<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MahasiswaMatakuliah;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Praktikum1;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Models\Mahasiswa;
use App\Models\Matkul;
use Database\Seeders\KeluargaSeeder;
use Illuminate\Support\Facades\Auth;
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

// //Product
// Route::prefix('product')->group(function () {
//     Route::get('/product', [Praktikum1::class, "productHome"]);
//     Route::get('{id}', [Praktikum1::class, "product"]);
// });
// //News
// Route::get('/news', [Praktikum1::class, "newsHome"]);
// Route::get('/news/{id}', [Praktikum1::class, "news"]);

// //Program
// Route::prefix('program')->group(function () {
//     Route::get('/program', [Praktikum1::class, "program"]);
//     Route::get('/karir', function () {
//         return redirect("https://www.educastudio.com/program/karir");
//     });
//     Route::get('/magang', function () {
//         return redirect("https: //www.educastudio.com/program/magang");
//     });
//     Route::get('/kunjungan', function () {
//         return redirect("https://www.educastudio.com/program/kunjungan-industri");
//     });
// });

// //Contact
// Route::get('/contact', [Praktikum1::class, 'contact_us']);

// //About Us
// Route::get('/about', [Praktikum1::class, 'about_us']);

Auth::routes();

//Logout
Route::get('/logout', [LoginController::class, 'logout']);

//Middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/sekolah', [HomeController::class, 'sekolah']);
    Route::get('/profile', [HomeController::class, 'profile']);
    Route::get('/kuliah', [HomeController::class, 'kuliah']);
    Route::get('/keluarga', [KeluargaController::class, 'index']);
    Route::get('/artikel/cetak', [ArtikelController::class, 'cetak']);
    Route::get('/mahasiswa/cetak/{id}', [MahasiswaController::class, 'cetak']);
    Route::post('/mahasiswa/data', [MahasiswaController::class, 'data']);

    Route::resource('/mahasiswa', MahasiswaController::class);
    Route::resource('/hobi', HobiController::class);
    Route::resource('/keluarga', KeluargaController::class);
    Route::resource('/matkul', MatkulController::class);
    Route::resource('/nilai', MahasiswaMatakuliah::class);
    Route::resource('/artikel', ArtikelController::class);
});
