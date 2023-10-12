<?php

use Illuminate\Support\Facades\Route;

//only demo mode you can remove it if you need,
if (config('app.demo_mode')) {
    Route::get('/demo', function () {
        return view('demo');
    });
}

if (config('app.portfolio')) {
    // code...
    Route::get('/', 'FrontendController@index');
    Route::get('/book-repair', 'FrontendController@booking');
    Route::get('/book-repair-widget-2', 'FrontendController@bookingW2');
    Route::get('/custom-page', 'FrontendController@pageReadBySlug');

    // Don't not change path (/track) for track is being used
    // in QRcode and notifications sent to customers.
    // if you changed path customer can not track his order by scanning QR code
    Route::get('/track/{track?}', 'FrontendController@track');
}

//======= Do not make changes or modify below lines ========//
//For single page i,e workshop
// and admin area so don't change anything
Route::get('{all}', 'AppController@index')->where('all', '^((?!api).)*')->name('index');
