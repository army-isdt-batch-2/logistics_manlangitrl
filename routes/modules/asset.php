<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'user'], function(){

Route::resource('asset',
    App\Http\Controllers\AssetController::class
    );

});
