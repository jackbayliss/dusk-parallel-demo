<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('hello'));
Route::get('/about', fn() => view('about'));
