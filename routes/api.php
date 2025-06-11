<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Webhook\FacebookAdsController;


// Webhook endpoints with prefix api/webhook
Route::prefix('webhook')->group(function () {
    Route::prefix('facebook')->group(function () {
        Route::prefix('leads')->group(function () {
            Route::get('/give', [FacebookAdsController::class, 'getFacebookLeads']);
        });
    });

});