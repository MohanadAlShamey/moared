<?php

use App\Http\Controllers\Theme\AboutController;
use App\Http\Controllers\Theme\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Theme\IndexController;
use App\Http\Controllers\Theme\NewsController;
use App\Http\Controllers\Theme\PartController;
use App\Http\Controllers\Theme\WorksController;

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

Route::get('/welcome', function () {
    return view('theme.index');
});
Route::get('/languages/{lang}', [IndexController::class, 'change_lang'])->name('change.lang');
Route::name('theme.')->middleware('locale')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');

    Route::resource('/abouts', AboutController::class)->only('index');
    Route::resource('/contacts', ContactController::class)->only('index','store');
    Route::resource('/posts', NewsController::class)->only(['index', 'show']);
    Route::resource('/works', WorksController::class)->only('index', 'show');
    Route::resource('/parts', PartController::class)->only('show');
});


//Route::group(['middleware' =>])
