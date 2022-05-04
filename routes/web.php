<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

// registrar formulario
Route::get('signup', [FormController::class, 'index']);
Route::post('sendForm', [FormController::class, 'signUpForm']);

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/feed', function () {
    return view('feed');
});