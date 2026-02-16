<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

Route::get('/intereses', function () {
    return view('intereses');
})->name('intereses');

Route::get('/habilidades', function () {
    return view('habilidades');
})->name('habilidades');

Route::get('/metas', function () {
    return view('metas');
})->name('metas');  
