<?php
use Illuminate\Support\Facades\Route;

// Route::get('greeting', function () {
//     return 'Hi, this is your awesome package! mof';
// });

// Route::get('mof/test', 'EdgeWizz\Mof\Controllers\MofController@test')->name('test');

Route::post('fmt/mof/store', 'EdgeWizz\Mof\Controllers\MofController@store')->name('fmt.mof.store');

Route::post('fmt/mof/update/{id}', 'EdgeWizz\Mof\Controllers\MofController@update')->name('fmt.mof.update');

Route::post('fmt/mof/csv_upload', 'EdgeWizz\Mof\Controllers\MofController@csv_upload')->name('fmt.mof.csv_upload');

Route::any('fmt/mof/inactive/{id}',  'EdgeWizz\Mof\Controllers\MofController@inactive')->name('fmt.mof.inactive');
Route::any('fmt/mof/active/{id}',  'EdgeWizz\Mof\Controllers\MofController@active')->name('fmt.mof.active');
