<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard/index');
})->name('home');

Route::get('/projects', function () {
    return view('front/projects');
})->name('projects');


Route::get('/services', function () {
    return view('front/services');
})->name('services');

Route::get('/gallery', function () {
    return view('front/gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('front/contact');
})->name('contact');

