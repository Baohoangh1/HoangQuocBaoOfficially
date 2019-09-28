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
    return view('welcome');
});

Route::get('/Bao1', function () {
    return view('Bao1');
});

Route::post('/Bao2', function () {
    return view('Bao2');
});

Route::get('/bt571_html', function () {
    return view('bt571_html');
});

Route::post('/bt571_php', function () {
    return view('bt571_php');
});

Route::get('/bt153_html', function () {
    return view('bt153_html');
});

Route::get('/bt153_php', function () {
    return view('bt153_php');
});

Route::get('/bt151_1_html', function () {
    return view('bt151_1_html');
});

Route::post('/bt151_1_php', function () {
    return view('bt151_1_php');
});

Route::get('/bt151_2_html', function () {
    return view('bt151_2_html');
});

Route::post('/bt151_2_php', function () {
    return view('bt151_2_php');
});

//Route::post('/action',function())->name(action);