<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'user'], function(){

Route::resource('storages',
    App\Http\Controllers\StorageController::class
    );

});

