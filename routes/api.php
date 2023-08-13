<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ValidateToken;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::post('login', [AuthController::class, 'login']);

Route::resource('categories', CategoryController::class)->only([
    'index', 'store', 'show', 'update', 'destroy'
]);

Route::resource('products', ProductController::class)->only([
    'index', 'store', 'show', 'update', 'destroy'
]);

Route::middleware([ValidateToken::class])->group(function () {
    Route::resource('users', UserController::class)->only([
        'index', 'store', 'show', 'update', 'destroy'
    ]);
});
