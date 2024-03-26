<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\playerController;
use App\Http\Controllers\standingController;
use App\Http\Controllers\playerDataController;

Route::get('/', [standingController::class, 'standing']);
Route::get('/player', [playerController::class, 'player']);
Route::get('dataPlayer/{id}', [playerDataController::class, 'playerData'])->name('dataPlayer');