<?php

use Illuminate\Support\Facades\Route;
use Mero\AppendableDynamicDropdown\Http\Controllers\RouterController;

Route::get('retrieve', RouterController::class . '@retrieve');
