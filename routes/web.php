<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('authentication.login');
})->name('login');


Route::get('/registration', function () {
    return view('authentication.registration');
})->name('registration');



Route::get('/', function () {
    return view('header');
});

