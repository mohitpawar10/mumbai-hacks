<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // dashboard controller
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // add campaign resource
    Route::resource('campaigns', CampaignController::class);
});
