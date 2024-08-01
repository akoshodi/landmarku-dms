<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', [APIController::class, 'getAllUsersData'])
    ->middleware('auth:sanctum')
    ->name('api.users');
