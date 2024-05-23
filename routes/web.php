<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('dashboard');


Auth::routes();
Route::prefix('/gateway')->group(function (){
    Route::get('/list/{module}',[\App\Http\Controllers\GatewayController::class,'list'])->name('gateway.list');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
