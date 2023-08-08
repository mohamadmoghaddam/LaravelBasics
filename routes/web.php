<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'create']);
Route::get('/contactUs', [MainController::class, 'create']);
Route::post('/submitmessage', [MainController::class, 'store']);
Route::get('/submitted/{name}', [MainController::class, 'create']);
Route::get('/messages', [MainController::class, 'index']);
Route::get('/delete/{id}', [MainController::class, 'delete']);
Route::get('/deleted/{id}', [MainController::class, 'index']);