<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', function () {
    // dd(Request:: all()); 
  
})->name('contact-form');

// Route::get('/about/books', 'ContactControlller@allData')->name('about-data');