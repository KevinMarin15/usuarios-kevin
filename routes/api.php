<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::apiResource('/user', UsuarioController::class);

Route::get('/user/{usuario}', [UsuarioController::class, 'show']);