<?php

declare(strict_types=1);

namespace AdminKit\Feedbacks\UI\API\Controllers;

use AdminKit\Feedbacks\Models\Feedback;

class FeedbackController extends Controller
{
    public function index()
    {
        return Feedback::all();
    }

    public function show(int $id)
    {
        return Feedback::findOrFail($id);
    }
}
