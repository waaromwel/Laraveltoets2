<?php

use App\Http\Controllers\Api\DocentController;
use App\Http\Controllers\Api\VakController;

Route::apiResource('docenten', DocentController::class);
Route::apiResource('vakken', VakController::class);