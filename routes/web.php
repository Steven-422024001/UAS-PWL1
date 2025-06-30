<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})-> name('home');

Route::get('/book', function () {
    return view('plp');
})-> name('plp');

Route::get('/book/{i}', function () {
    return view('pages.pdp');
})-> name('pdp');
