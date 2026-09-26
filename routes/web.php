<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AwardCatelogueController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('admin/signup', [AuthController::class, 'showSignup'])->name('admin.signup');
    Route::post('admin/signup', [AuthController::class, 'signup'])->name('admin.signup.store');
    Route::get('admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login.store');
});

Route::middleware(['auth', 'admin'])
        ->prefix('admin')
        ->name('admin.')
        ->group(function () {
            Route::get('profile', [AuthController::class, 'profile'])->name('profile');
            Route::get('profile/edit', [AuthController::class, 'editProfile'])->name('profile.edit');
            Route::put('profile', [AuthController::class, 'updateProfile'])->name('profile.update');
            Route::post('logout', [AuthController::class, 'logout'])->name('logout');
        });

Route::resource('awards', AwardCatelogueController::class)
        ->middlewareFor(['create', 'store', 'edit', 'update'], ['auth', 'admin']);

Route::post('contact', [ContactController::class])->name('contact.store');
