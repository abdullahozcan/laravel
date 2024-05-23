<?php
use Illuminate\Support\Facades\Route;

// TechnicalService route

Route::get('list',[\App\Modules\TechnicalService\Controllers\IndexController::class,'list'])->name('services.list');
Route::get('create',[\App\Modules\TechnicalService\Controllers\IndexController::class,'create'])->name('services.create');
Route::post('store',[\App\Modules\TechnicalService\Controllers\IndexController::class,'store'])->name('services.store');
Route::get('{id}/edit',[\App\Modules\TechnicalService\Controllers\IndexController::class,'edit'])->name('services.edit');
Route::post('{id}/update',[\App\Modules\TechnicalService\Controllers\IndexController::class,'update'])->name('services.update');
Route::post('{id}/delete',[\App\Modules\TechnicalService\Controllers\IndexController::class,'delete'])->name('services.delete');
