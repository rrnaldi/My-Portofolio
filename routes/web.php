<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['title' => '']);
});
Route::get('/skill', function () {
    return view('skill', ['title' => 'Skill']);
});
Route::get('/pengalaman', function () {
    return view('pengalaman', ['title' => 'Pengalaman']);
});
Route::get('/pendidi', function () {
    return view('pendidi', ['title' => 'Pendidikan']);
});
Route::get('/sertif', function () {
    return view('sertif', ['title' => 'Sertifikat']);
});
Route::get('/projek', function () {
    return view('projek', ['title' => 'projek']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

