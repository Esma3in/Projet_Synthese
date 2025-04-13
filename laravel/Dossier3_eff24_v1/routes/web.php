<?php

use App\Http\Controllers\EvenementController;
use Illuminate\Support\Facades\Route;

Route::get('/',[EvenementController::class,'index'])->name('evenements.index');
Route::get('/evenements/{evenement}',[EvenementController::class,'show'])->name('evenements.show');

Route::get('create',[EvenementController::class,'create'])->name('create');
Route::post("/evenements",[EvenementController::class,'store'])->name('evenements.store');

Route::get('/evenements/{evenement}/edit',[EvenementController::class,'edit'])->name('evenements.edit');
Route::get('/evenements/{evenement}/update',[EvenementController::class,'update'])->name('evenements.update');


Route::delete('/evenements/{evenement}/destroy',[EvenementController::class,'destroy'])->name('evenements.destroy');
