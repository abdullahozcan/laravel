<?php
use Illuminate\Support\Facades\Route;

// Company route

Route::get('list',[\App\Modules\Company\Controllers\IndexController::class,'list'])->name('companies.list');
Route::get('create',[\App\Modules\Company\Controllers\IndexController::class,'create'])->name('companies.create');
Route::post('store',[\App\Modules\Company\Controllers\IndexController::class,'store'])->name('companies.store');
Route::get('{id}/edit',[\App\Modules\Company\Controllers\IndexController::class,'edit'])->name('companies.edit');
Route::post('{id}/update',[\App\Modules\Company\Controllers\IndexController::class,'update'])->name('companies.update');
Route::post('{id}/delete',[\App\Modules\Company\Controllers\IndexController::class,'delete'])->name('companies.delete');
