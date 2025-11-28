<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::get('/contact',[ContactController::class,'confirm'])->name('contact.confirm');
Route::get('/contact',[ContactController::class,'send'])->name('contact.send');