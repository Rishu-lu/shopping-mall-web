<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/login-signup', function () {
    return view('frontend.auth.loginAndSignUp');
})->name('login.signup');
