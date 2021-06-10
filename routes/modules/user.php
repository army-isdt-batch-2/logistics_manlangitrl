<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'user'], function(){

Route::resource('users',
    App\Http\Controllers\UserController::class
    );

});

