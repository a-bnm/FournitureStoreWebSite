<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FournitureController;
use App\Http\Controllers\stockController;
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
    return view('index');
});

Route::resource('/', FournitureController::class);

Route::get('/Managment', function () {
    return view('Fourniture/StockManagment');
});

Route::get('/ToAdd', function () {
    return view('Fourniture/addFourniture');
});

Route::get('/ToDrop', function () {
    return view('Fourniture/dropFourniture');
});
Route::get('/ToUpdate', function () {
    return view('Fourniture/stock');
});


Auth::routes();

Route::get('/drop', [FournitureController::class,'destroy']);
Route::get('/store', [FournitureController::class,'stockDisplay']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/{id}', [FournitureController::class,'show']);


