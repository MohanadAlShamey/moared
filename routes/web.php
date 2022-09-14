<?php

use App\Http\Controllers\Theme\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Theme\IndexController;

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
Route::name('theme.')->middleware('locale')->group(function(){
    Route::get('/',[IndexController::class,'index'])->name('index');
    Route::get('/about',[AboutController::class,'index'])->name('about');

});


//Route::group(['middleware' =>])
