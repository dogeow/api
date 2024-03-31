<?php

use App\Http\Controllers\CodingController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NetController;
use App\Http\Controllers\TimeController;
use Illuminate\Support\Facades\Route;

Route::get('hello', [IndexController::class, 'hello']);

Route::get('/ip', [NetController::class, 'ip']);

Route::controller(TimeController::class)
    ->group(function () {
        Route::get('/timestamp', 'timestamp');
        Route::get('/datetime', 'datetimeFunction');
        Route::get('/date', 'date');
    });

Route::controller(CodingController::class)
    ->group(function () {
        Route::get('/punycode/{domain}', 'punycode');
        Route::get('md5/{string?}', 'md5');
        Route::get('hash/{string?}', 'hash');
    });
