<?php

use Illuminate\Support\Facades\Route;


Route::get('/', Index::class);
Route::post('/', Store::class);