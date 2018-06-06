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

Route::get('/home', 'RootController@index');

Route::get('/about-us', 'AboutController@index')->name('about.index');

Route::get('/meet-the-team', 'AboutController@team')->name('about.team');

Route::get('/case-studies', 'CaseStudyController@index')->name('case.index');

// Redrirct case pages to Maintenacne
Route::get('/case-studies/{name}', function () {
    return view('Maintenacne');
});

// Redrirct digitalinsight to Maintenacne
Route::get("/digitalinsight", function () {
    return view('maintenacne');
});

Route::get('/contact', 'RootController@contact');

Auth::routes();

Route::get('/dashboard', 'DashBoardController@index')->name('user.dashboard');
