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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('questions', 'QuestionsController@index');

Route::group([ 'prefix' => 'questions'], function () {
    Route::get('/', 'App\Http\Controllers\QuestionsController@index')->name('questions.all');
    Route::post('/', 'App\Http\Controllers\QuestionsController@store')->name('question.store');
    Route::post('/save', 'App\Http\Controllers\QuestionsController@save')->name('question.save');
    Route::post('/delete', 'App\Http\Controllers\QuestionsController@destory')->name('question.destroy');
});
