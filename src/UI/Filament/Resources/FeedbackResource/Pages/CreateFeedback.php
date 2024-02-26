<?php

namespace AdminKit\Feedbacks\UI\Filament\Resources\FeedbackResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use AdminKit\Feedbacks\UI\Filament\Resources\FeedbackResource;

class CreateFeedback extends CreateRecord
{
    protected static string $resource = FeedbackResource::class;

    protected function getActions(): array
    {
        return [
            //
        ];
    }

    protected function getRedirectUrl(): string
    {
        return FeedbackResource::getUrl();
    }
}
