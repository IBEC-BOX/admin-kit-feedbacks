<?php

declare(strict_types=1);

namespace AdminKit\Feedbacks\UI\API\Controllers;

use AdminKit\Feedbacks\Models\Feedback;
use AdminKit\Feedbacks\UI\API\Requests\FeedbackStoreRequest;
use Illuminate\Http\Response;
use AdminKit\Feedbacks\Events\FeedbackSaved;

class FeedbackController extends Controller
{
    public function store(FeedbackStoreRequest $request): Response
    {
        $feedback = Feedback::query()
            ->create(
                collect(['fields' => $request->validated()])
                    ->merge(['locale' => app()->getLocale()])
                    ->toArray()
            );

        event(new FeedbackSaved($feedback));

        return response('OK');
    }
}
