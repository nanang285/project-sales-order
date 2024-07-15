<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/index', function () {
    return view('index');
});

Route::get('/example', function () {
    return view('example');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');
});











 
// Route::prefix('dashboard')->group(function () {
//     Route::get('/users', 'Api\UserController@index'); 
//     Route::post('/users', 'Api\UserController@store'); 
//     Route::put('/users/{id}', 'Api\UserController@update');
//     Route::delete('/users/{id}', 'Api\UserController@destroy'); 
// });
