<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// Import Controller Product
use App\Http\Controllers\ProductController; 

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Tambahkan rute resource untuk product di sini
Route::resource('product', ProductController::class);