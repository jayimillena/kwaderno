<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KwadernoController;

Route::resource('/kwadernos', KwadernoController::class);
