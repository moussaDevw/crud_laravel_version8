<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('client','clientsController@index');
Route::post('client','clientsController@store');
Route::get('client/{client}','clientsController@show');
Route::get('client/{client}/edite', 'clientsController@edite');
Route::patch('client/{client}', 'clientsController@update');
Route::delete('client/{client}', 'clientsController@destroy');