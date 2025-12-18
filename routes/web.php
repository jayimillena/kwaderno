<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KwadernoController;

Route::get('/', [KwadernoController::class, 'index'])->name('kwadernos.index');
Route::resource('/kwadernos', KwadernoController::class);
