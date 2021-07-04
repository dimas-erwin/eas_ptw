<?php
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\BengkelController;
use App\Http\Controllers\indexController;
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
    return view('welcome');
});

Route::resource('/home', indexController::class);
Route::resource('/bengkel', BengkelController::class);
Route::resource('/pembelian', PembelianController::class);