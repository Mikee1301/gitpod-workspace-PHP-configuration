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

Route::get('/contactview','App\Http\Controllers\Contact\uiContactController@viewform'); 

Route::get('/contactview','App\Http\Controllers\Contact\uiContactController@index');

Route::get('/addContact','App\Http\Controllers\Contact\uiContactController@contactform');

Route::post('/add_data','App\Http\Controllers\Contact\uiContactController@contactSave');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
