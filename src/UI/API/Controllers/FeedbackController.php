<?php

declare(strict_types=1);

namespace AdminKit\Feedbacks\UI\API\Controllers;

use Illuminate\Http\Response;
use AdminKit\Feedbacks\Models\Feedback;
use AdminKit\Feedbacks\UI\API\Requests\FeedbackStoreRequest;

class FeedbackController extends Controller
{
    public function store(FeedbackStoreRequest $request): Response
    {
        Feedback::query()
            ->create(
                $request->merge([
                    'locale' => app()->getLocale(),
                ])->toArray()
            );

        return response('OK');
    }
}
