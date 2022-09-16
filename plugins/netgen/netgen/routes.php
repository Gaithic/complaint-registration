<?php namespace  Netgen\Netgen;
use Netgen\Netgen\Classes\GetCities;
use Netgen\Netgen\Classes\ExportCsv;

use Route;

Route::get('/get-cities', [GetCities::class, 'getCities']);
Route::get('/export-csv', [ExportCsv::class, 'exportCsv']);

