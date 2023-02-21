<?php

use App\Http\Controllers\ContactController;
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
    echo 'Welcome Page';
});

Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function () {
        echo "marbel edu games";
    });

    Route::get('/marbel-and-friends-kids-games', function () {
        echo "marbel and friend kids games";
    });

    Route::get('/riri-story-books', function () {
        echo "riri story books";
    });

    Route::get('/kolak-kids-songs', function () {
        echo "kolak kids songs";
    });
});

Route::get('/news/{title}', function ($title) {
    echo 'ini adalah daftar berita tentang "' . $title . '"';
});


Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        echo "daftar karir";
    });

    Route::get('/magang', function () {
        echo "daftar magang";
    });

    Route::get('/kunjungan-industri', function () {
        echo "daftar kunjungan industri";
    });
});

Route::get('/about-us', function () {
    echo "About my company";
    echo "<br>";
    echo "Berdiri pada tahun 1999";
});

Route::resource('contact-us', ContactController::class);