<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/',[StudentController::class,'index'])->name('index');
Route::post('/',[StudentController::class,'store'])->name('store');
Route::get('edit/{id}',[StudentController::class,'edit'])->name('edit');
Route::put('edit/{id}',[StudentController::class,'update'])->name('update');
Route::get('delete/{id}',[StudentController::class,'destroy'])->name('delete');
