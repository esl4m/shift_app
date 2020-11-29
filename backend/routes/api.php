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

use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\ResultController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('questions', 'QuestionsController@index');

Route::group([ 'prefix' => 'questions'], function () {
    Route::get('/', [QuestionsController::class, 'index'])->name('questions.all');
    Route::get('/{id}', [QuestionsController::class, 'show'])->name('get_question_by_id');
    Route::post('/', [QuestionsController::class, 'store'])->name('question.store');
    Route::post('/save', [QuestionsController::class, 'save'])->name('question.save');
    Route::post('/delete', [QuestionsController::class, 'destory'])->name('question.destroy');
});

Route::group([ 'prefix' => 'answers'], function () {
    Route::get('/', [AnswerController::class, 'index'])->name('answers.all');
    Route::get('/{id}', [AnswerController::class, 'show'])->name('get_answer_by_id');
    Route::post('/{id}', [AnswerController::class, 'store'])->name('answer.store');
    Route::post('/save', [AnswerController::class, 'save'])->name('answer.save');
    Route::post('/delete', [AnswerController::class, 'destory'])->name('answer.destroy');
});

Route::group([ 'prefix' => 'results'], function () {
    Route::get('/{id}', [ResultController::class, 'show'])->name('result_by_id');
    Route::get('/user/{user_id}', [ResultController::class, 'getUserResults'])->name('results_by_user_id');
    Route::post('/delete', [ResultController::class, 'destory'])->name('result.destroy');
});


