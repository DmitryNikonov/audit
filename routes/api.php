<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return response()->json([
        'message' => 'Привет из Laravel API',
        'status' => 'ok'
    ]);
});