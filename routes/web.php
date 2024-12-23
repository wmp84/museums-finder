<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users',  'App\Http\Controllers\UsersController@index');

Route::get('/museums',  'App\Http\Controllers\MuseumsController@index');
Route::get('/museums/create',  'App\Http\Controllers\MuseumsController@create');
Route::post('/museums','App\Http\Controllers\MuseumsController@store')->name("museums.store");

//Route::resource('museums', 'App\Http\Controllers\MuseumsController');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
