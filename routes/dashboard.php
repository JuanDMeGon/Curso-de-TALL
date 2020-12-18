<?php

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');
