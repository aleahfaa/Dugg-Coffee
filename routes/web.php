<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SpaceController;

Route::get('/', [NewsController::class, 'getLastNews']);
Route::resource('news', NewsController::class);
Route::get('/cart', function () {
    return view('pages.cart.index');
})->name('cart');

// Space routes
Route::get('/space/funroom', [SpaceController::class, 'funroom'])->name('space.funroom');
Route::get('/space/garden', [SpaceController::class, 'garden'])->name('space.garden');
Route::get('/space/meeting', [SpaceController::class, 'meeting'])->name('space.meeting');