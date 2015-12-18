<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return View::make("welcome");
});
 
// Top menu
Route::get('/about-emak', function () {
    return view('top-about-emak');
});

Route::get('/proyek-emak', function () {
    return view('top-proyek-emak');
});

Route::get('/visi-misi-emak', function () {
    return view('top-visi-misi-emak');
});

Route::get('/kontak', function () {
    return view('top-kontak-emak');
});

// sample page
 Route::get('/pita-hias', function () {
    return view('pita-hias');
});

Route::get('/user-profile', function () {
    return view('user-profile');
});

Route::get('/user-invoice', function () {
    return view('user-invoice');
});