<?php

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware(Authenticate::using('sanctum'));

//posts
Route::apiResource('/posts/UKM', App\Http\Controllers\Api\UKMController::class);
Route::get('/posts/UKM/{id}', [App\Http\Controllers\Api\UKMController::class, 'show'])->name('post.show');
Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);
Route::get('/posts/{id}', [App\Http\Controllers\Api\PostController::class, 'show'])->name('post.show');
Route::apiResource('/posts/AnggotaBEM', App\Http\Controllers\Api\AnggotaBEM::class);
Route::get('/posts/AnggotaBEM/{id}', [App\Http\Controllers\Api\AnggotaBEM::class, 'show'])->name('anggota.show');
