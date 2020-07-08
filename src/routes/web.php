<?php

Route::group(['namespace' => 'RomelPaano\Contact\Http\Controllers'], function (){
    Route::get('contact', [\RomelPaano\Contact\Http\Controllers\ContactController::class, 'index'])->name('contact');
    Route::post('contact', [\RomelPaano\Contact\Http\Controllers\ContactController::class, 'store']);
});


