<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
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
Route::get('/', [HomeController::class, 'home']);

//Product
Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'home']);
    Route::get('/1', function () {
        return redirect("https://www.educastudio.com/category/marbel-edu-games");
    });
    Route::get('/2', function () {
        return redirect("https://www.educastudio.com/category/marbel-and-friends-kids-games");
    });
    Route::get('/3', function () {
        return redirect("https://www.educastudio.com/category/riri-story-books");
    });
    Route::get('/4', function () {
        return redirect("https://www.educastudio.com/category/kolak-kids-songs");
    });
});

//News
Route::get('/news', [NewsController::class, 'home']);
Route::get('/news/{id}', function ($id) {
    if ($id == 1) {
        return redirect("https://www.educastudio.com/news");
    } else {
        return redirect("https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19");
    }
});

//Program
Route::prefix('program')->group(function () {
    Route::get('/', [ProgramController::class, 'home']);
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

//About Us
Route::get('/about', function () {
    return redirect("https://www.educastudio.com/about-us");
});

//Contact Us
Route::get('/contact', function () {
    return redirect("https://www.educastudio.com/contact-us");
});
