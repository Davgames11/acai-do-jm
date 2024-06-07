<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/sobrenos', function () {
    return view('sobrenos');
})->name('sobrenos');

Route::get('/hall', function () {
    return view('halloffame');
})->name('halloffame');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');
