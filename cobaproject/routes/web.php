<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hello World";
});

Route::get('/test', function () {
    return "halo ekal";
});
