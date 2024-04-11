<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::group(['prefix'=>'auth'], function(){

    Route::group(['prefix'=>'login','controller'=>LoginController::class], function(){
        Route::get('','login')->name('login');
        Route::post('','auth')->name('auth');
    });

    Route::group(['prefix'=>'register','controller'=>RegisterController::class], function(){
        Route::get('','register')->name('register');
        Route::post('','create')->name('create');
    });

});
