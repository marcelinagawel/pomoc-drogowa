<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as' => 'index.layout', 'uses' => 'IndexController@index']);
Route::get('/pomoc-drogowa', ['as' => 'index.layout', 'uses' => 'RoadsideAssistanceController@index']);
Route::get('/auto-detailing', ['as' => 'index.layout', 'uses' => 'CarDetailingController@index']);
Route::get('/serwis-klimatyzacji', ['as' => 'index.layout', 'uses' => 'AirConditioningServiceController@index']);
Route::get('/samochod-zastepczy', ['as' => 'index.layout', 'uses' => 'ReplacementCarController@index']);
Route::get('/kontakt', ['as' => 'index.layout', 'uses' => 'ContactController@index']);
Route::get('/zlomowanie', ['as' => 'index.layout', 'uses' => 'CarScrappingController@index']);
