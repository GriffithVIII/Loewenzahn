<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Artikeltraining;

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
    return view('home');
});

Route::get('/artikeltraining', function () {
    return view('sprachtor.artikeltraining');
});

Route::resource('artikeltraining', Artikeltraining::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
