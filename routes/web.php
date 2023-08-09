<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'create']);
Route::get('/contactUs', [MainController::class, 'create']);
Route::post('/submitmessage', [MainController::class, 'store']);
Route::get('/submitted/{name}', [MainController::class, 'create']);
Route::get('/messages', [MainController::class, 'index']);
Route::delete('messages/{message}', [MainController::class, 'destroy']);
Route::get('/deleted/{id}', [MainController::class, 'index']);
Route::get('/edit/{message}', [MainController::class, 'edit']);
Route::patch('/editmessage/{message}', [MainController::class, 'update']);
Route::get('/edited/{id}', [MainController::class, 'index']);
