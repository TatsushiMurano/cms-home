<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::post('/contact_a',[ContactController::class,'confirm'])->name('contact.confirm');
Route::post('/contact_b',[ContactController::class,'send'])->name('contact.send');