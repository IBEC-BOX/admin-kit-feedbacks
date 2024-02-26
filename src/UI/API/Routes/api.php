<?php

use AdminKit\Feedbacks\UI\API\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;

Route::post('/feedbacks', [FeedbackController::class, 'store']);
