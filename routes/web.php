<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', fn()=> view('test'));

Route::post('contact', [ContactController::class])->name('contact.store');