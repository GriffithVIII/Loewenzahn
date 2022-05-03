<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Artikeltraining;
use App\Http\Controllers\NounsDe;
use App\Http\Controllers\NounsEs;
use App\Http\Controllers\VerbsDe;

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

Route::prefix('de/nouns')->group(function (){
    Route::get('', [NounsDe::class, 'index'])->name('admin.de.nouns.main')->name('admin.de.nouns.main');
    Route::post('', [NounsDe::class, 'editor']);
    Route::get('create', [NounsDe::class, 'create'])->name('admin.de.nouns.create');
    Route::post('create', [NounsDe::class, 'store']);
    Route::get('translate/{nouns_de}', [NounsDe::class, 'translate'])->name('admin.de.nouns.translate');
    Route::post('translate', [NounsDe::class, 'storeTranslated']);
    Route::get('edit/{nouns_de}', [NounsDe::class, 'edit'])->name('admin.de.nouns.edit');
    Route::put('edit/{nouns_de}', [NounsDe::class, 'update']);
});

Route::prefix('de/verbs')->group(function (){
    Route::get('', [VerbsDe::class, 'index'])->name('admin.de.verbs.main')->name('admin.de.verbs.main');
    //Route::post('', [VerbsDe::class, 'editor']);
    Route::get('create', [VerbsDe::class, 'create'])->name('admin.de.verbs.create');
    Route::post('create', [VerbsDe::class, 'store']);
    //Route::get('translate/{verbs_de}', [VerbsDe::class, 'translate'])->name('admin.de.verbs.translate');
    //Route::post('translate', [VerbsDe::class, 'storeTranslated']);
    //Route::get('edit/{verbs_de}', [VerbsDe::class, 'edit'])->name('admin.de.verbs.edit');
    //Route::put('edit/{verbs_de}', [VerbsDe::class, 'update']);
});

Route::get('/tables', [NounsDe::class, 'index'])->name('admin.tables');
//Route::get('/tables/create', [NounsDe::class, 'create'])->name('admin.de.nouns.create');
//Route::post('/tables/create', [NounsDe::class, 'store']);
//Route::get('/tables/translate', [NounsDe::class, 'translate'])->name('admin.de.nouns.translate');
//Route::post('/tables/translate', [NounsEs::class, 'store']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');