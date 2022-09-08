<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TrollController;

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


// ?LOGIN//

Route::get('login',[AuthController::class,'index'])->name('login');
Route::post('proses_login',[AuthController::class,'proses_login'])->name('proses_login');
Route::get('logout',[AuthController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function() {
    Route::group(['middleware' => ['Cek_login:admin']], function() {
        Route::get('admin',[TrollController::class,'index'])->name('admin');
    });
    Route::group(['middleware' => ['Cek_login:user']], function() {
        Route::get('user',[TrollController::class,'index'])->name('user');
    });

});