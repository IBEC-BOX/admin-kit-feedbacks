<?php

use Illuminate\Support\Facades\Route;
use AdminKit\Feedbacks\UI\API\Controllers\FeedbackController;

Route::get('/feedbacks', [FeedbackController::class, 'index']);
Route::get('/feedbacks/{id}', [FeedbackController::class, 'show']);
