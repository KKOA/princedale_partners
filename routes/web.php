<?php

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
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/case-studies', function () {
    return view('case-studies');
});

Route::get('/meet-the-team', function () {
    return view('meet-the-team');
});

Route::get('/digital-insight', function () {
    return view('digital-insight');
});

Route::get('/contact', function () {
    return view('contact');
});