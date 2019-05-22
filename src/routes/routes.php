<?php
/**
 * User: Manson
 * Date: 11/29/2018
 * Time: 3:33 PM
 */

Route::group(['namespace' => 'Digitalsigma\Translatable\Http\Controllers', 'middleware' => ['web']], function () {
    Route::get('/locale/{locale}', 'LocaleController@changeLocale');
});