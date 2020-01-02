<?php

use Illuminate\Support\Facades\Route;
use Merotech\AppendableDynamicDropdown\Http\Controllers\RouterController;

Route::get('retrieve', RouterController::class . '@retrieve');
