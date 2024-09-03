<?php

namespace AdminKit\Feedbacks\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FeedbackNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public array $fields) {}

    public function build()
    {
        $emailList = explode(',', trim(config('admin-kit-feedbacks.email_notification.addresses')));

        return $this
            ->to($emailList)
            ->subject('Получена новая заявка с сайта')
            ->view('admin-kit-feedbacks::mail.feedback-notification', $this->fields);
    }
}
