<?php

namespace AdminKit\Feedbacks\Listeners;

use AdminKit\Feedbacks\Events\FeedbackSaved;
use AdminKit\Feedbacks\Mail\FeedbackNotificationMail;
use Illuminate\Support\Facades\Mail;

class NotifyAboutNewFeedback
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(FeedbackSaved $event): void
    {
        $fields = $event->feedback->fields;

        Mail::queue(new FeedbackNotificationMail($fields));
    }
}
