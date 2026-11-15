<?php

use App\Http\Controllers\SalesFunnelController;

Route::get('sales/funnel', SalesFunnelController::class)
    ->name('sales.funnel');
