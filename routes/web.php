<?php

use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\SubmissionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [QuestionsController::class,'showQuestionActive']);


Route::post('/question/add',[QuestionsController::class, 'addQuestions'])->name('question.add');
Route::get('/question/add/form',[QuestionsController::class, 'showAddQuestions'])->name('show-question.add');

Route::get('/question/show',[QuestionsController::class,'showQuestionsAll'])->name('questions-all');

Route::post('/submission/add',[SubmissionsController::class,'addSubmission'])->name('submission.add');

Route::get('questions/answers/count',[QuestionsController::class,'showAnswerscountPerQuestion'])->name('questions.answers.count');

Route::post('/questions/update-active', [QuestionsController::class, 'updateActiveQuestion']);
