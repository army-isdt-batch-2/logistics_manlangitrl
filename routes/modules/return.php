<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'user'], function(){

 Route::resource('return',
    App\Http\Controllers\ReturnController::class
    ); 

});

