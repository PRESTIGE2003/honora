<?php

use App\Http\Controllers\SalesFunnelController;
use Illuminate\Support\Facades\Route;

Route::get('sales/funnel', SalesFunnelController::class)
    ->middleware('guest')
    ->name('sales.funnel');
