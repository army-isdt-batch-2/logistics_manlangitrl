<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'user'], function(){

Route::resource('distribution',
    App\Http\Controllers\DistributionController::class
    );
});

