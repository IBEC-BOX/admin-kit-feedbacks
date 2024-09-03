<?php

declare(strict_types=1);

namespace AdminKit\Feedbacks\Events;

use AdminKit\Feedbacks\Models\Feedback;

class FeedbackSaved
{
    public Feedback $feedback;

    public function __construct(Feedback $feedback)
    {
        $this->feedback = $feedback;
    }
}
