<?php
use Illuminate\Support\Facades\Route;

// Employee route
Route::get('list',[\App\Modules\Employee\Controllers\IndexController::class,'list'])->name('employee.list');
Route::get('create',[\App\Modules\Employee\Controllers\IndexController::class,'create'])->name('employee.create');
Route::get('{id}/edit',[\App\Modules\Employee\Controllers\IndexController::class,'edit'])->name('employee.edit');
Route::post('{id}/upload',[\App\Modules\Employee\Controllers\IndexController::class,'upload'])->name('employee.upload');
Route::post('store',[\App\Modules\Employee\Controllers\IndexController::class,'store'])->name('employee.store');
Route::get('{id}/delete',[\App\Modules\Employee\Controllers\IndexController::class,'delete'])->name('employee.delete');
