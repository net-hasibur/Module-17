<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/resume', 'resume')->name('resume');
Route::view('/projects', 'projects')->name('projects');
Route::view('/contact', 'contact')->name('contact');