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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about-us', function () {
    return view('pages.about');
});

Route::get('/digital-solutions', function () {
    return view('pages.digital_solutions');
});

Route::get('/business-competence', function () {
    return view('pages.business');
});

Route::get('/clients-partners', function () {
    return view('pages.client_partners');
});