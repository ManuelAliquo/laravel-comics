<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('comics');
})->name("comics");

Route::get('/other', function () {
    return view('other');
})->name("other");
