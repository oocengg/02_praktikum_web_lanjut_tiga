<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomePage;
use App\Http\Controllers\ProductPage;
use App\Http\Controllers\NewsPage;
use App\Http\Controllers\ProgramPage;
use App\Http\Controllers\AboutUsPage;
use App\Http\Controllers\ContactUsPage;
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

Route::get('/', [HomePage::class, 'home']);

Route::prefix('category')->group(function() {
    Route::get('/marbel-edu-games', [ProductPage::class, 'prd1']);
    Route::get('/marbel-and-friends-kids-games', [ProductPage::class, 'prd2']);
    Route::get('/riri-story-books', [ProductPage::class, 'prd3']);
    Route::get('/kolak-kids-songs', [ProductPage::class, 'prd4']);
});

Route::get('/news/{id}', [NewsPage::class, 'news']);

Route::prefix('program')->group(function() {
    Route::get('/karir', [ProgramPage::class, 'prg1']);
    Route::get('/magang', [ProgramPage::class, 'prg2']);
    Route::get('/kunjungan-industri', [ProgramPage::class, 'prg3']);
});

Route::get('/aboutus', [AboutUsPage::class, 'about']);

Route::get('/contactus', [ContactUsPage::class, 'contact']);