<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});


Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/project', function () {
    return view('pages.project');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::post('/contact.send', [ContactController::class, 'send'])->name('contact.send');
