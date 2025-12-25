<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/projects', function () {
    return view('pages.projects');
})->name('projects');

Route::get('/cv', function () {
    return view('pages.cv');
})->name('cv');

// Route GET pour afficher la page contact
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Route POST pour gérer le formulaire
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');