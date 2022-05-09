<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.app');
// });

Route::get('/', function () {
    return view('home');
});
Route::get('/about-us', function () {
    return view('about');
});
Route::get('/our-services', function () {
    return view('services');
});

Route::get('/our-work', function () {
    return view('our-work');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/get-in-touch', function () {
    return view('get-in-touch');
});

Route::get('/work-with-us', function () {
    return view('work-with-us');
});

Route::get('/portfolio-item', function () {
    return view('euler');
});
