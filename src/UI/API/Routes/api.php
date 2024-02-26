<?php

use AdminKit\Feedbacks\UI\API\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;

Route::get('/feedbacks', [FeedbackController::class, 'index']);
Route::get('/feedbacks/{id}', [FeedbackController::class, 'show']);
