<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ValidateToken;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\TaxController;
use App\Http\Controllers\ChangeController;

Route::post('login', [AuthController::class, 'login']);
Route::get('categories', [CategoryController::class, 'index']);
Route::get('products', [ProductController::class, 'index']);

Route::middleware([ValidateToken::class])->group(function () {
    Route::resource('users', UserController::class)->only([
        'index',
        'store',
        'show',
        'update',
        'destroy'
    ]);
    Route::resource('categories', CategoryController::class)->only([
        'store',
        'show',
        'update',
        'destroy'
    ]);
    Route::resource('products', ProductController::class)->only([
        'store',
        'show',
        'destroy'
    ]);
    Route::post('products/update/{id}', [ProductController::class, 'update']);
    Route::resource('sales', SaleController::class)->only([
        'index',
        'store',
        'show',
        'update',
        'destroy'
    ]);
    Route::resource('currencies', CurrencyController::class)->only([
        'index',
        'store',
        'show',
        'update',
        'destroy'
    ]);
    Route::resource('taxes', TaxController::class)->only([
        'index',
        'store',
        'show',
        'update',
        'destroy'
    ]);
    Route::resource('changes', ChangeController::class)->only([
        'index',
        'store',
        'show',
        'update',
        'destroy'
    ]);
});