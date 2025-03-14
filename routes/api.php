<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('quotes', QuoteController::class);
Route::get('quotes/getByLength/{length}', [QuoteController::class, 'getByLength']);
Route::get('quotes/getPopular/{nb}', [QuoteController::class, 'getPopular']);
Route::get('quotes/getRandom/{nb}', [QuoteController::class, 'getRandom']);