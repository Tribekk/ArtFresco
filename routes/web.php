<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\MainController@index')->name('home');

Route::get('/query', 'App\Http\Controllers\MainController@query');

Route::get('/2', 'App\Http\Controllers\MainController@query1');

Route::get('/contacts', 'App\Http\Controllers\MainController@contacts');

Route::post('/contacts/chek', 'App\Http\Controllers\MainController@contacts_chek');

Route::get('/phpinfo', function () {
    phpinfo();
});
