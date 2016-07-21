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
    return view('index');
});

Route::get('login', function () {
    return view('login');
});

Route::get('mentor', function () {
    return view('mentor/index');
});

Route::get('mentor/add', function () {
    return view('mentor/add');
});

Route::get('mentor/show', function () {
    return view('mentor/show');
});