<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'create']);
Route::get('/aboutUs', [MainController::class, 'create']);
Route::post('/submitmessage', [MainController::class, 'store']);
