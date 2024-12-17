<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'dashboard']);
Route::get('/search-page', [MainController::class, 'search_page']);
Route::get('/search-page/{id}', [MainController::class, 'view_lecture']);
