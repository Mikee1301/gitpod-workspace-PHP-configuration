<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('contact', 'App\Http\Controllers\Contact\ContactController@contact');
Route::get('contact/{id}', 'App\Http\Controllers\Contact\ContactController@contactByID');
Route::post('contact', 'App\Http\Controllers\Contact\ContactController@contactSave');    
Route::put('contact/{contact}', 'App\Http\Controllers\Contact\ContactController@contactUpdate');
Route::delete('contact/{contact}', 'App\Http\Controllers\Contact\ContactController@contactDelete');