<?php

use Illuminate\Support\Facades\Route;
use AdminKit\Feedbacks\UI\API\Controllers\FeedbackController;

Route::post('/feedbacks', [FeedbackController::class, 'store']);
