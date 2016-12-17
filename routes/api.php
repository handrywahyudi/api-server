<?php

use Illuminate\Http\Request;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::group(['middleware' => ['cors']], function () {
    Route::get('/log', function () {
        $jsonString = file_get_contents(__DIR__.'/logs.json');
        
        return json_decode($jsonString, true);
    });

    Route::patch('/log', function () {
        
    });

});