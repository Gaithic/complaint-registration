<?php namespace  Netgen\Netgen;
use Netgen\Netgen\Classes\GetCities;
use Netgen\Netgen\Classes\ExportCsv;

use Route;

Route::get('/get-cities', [GetCities::class, 'getCities']);
Route::get('/export-csv', [ExportCsv::class, 'exportCsv']);

Route::get('/refreshcaptcha', function () {
    return captcha_img('math');
})->name('refreshcaptcha'); 
Route::get('/captcha/.htaccess', function(){
    return abort(403);
});