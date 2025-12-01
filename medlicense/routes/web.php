<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test');
});

Route::get('/index', function () {
    return view('index'); // file: resources/views/index.blade.php
})->name('index');
