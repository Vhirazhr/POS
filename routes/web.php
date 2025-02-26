<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index']);

// Products (Route Prefix)
Route::prefix('/category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
});

// User Page (Route Parameter)
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

// Sales Page
Route::get('/sales', [SalesController::class, 'index']);