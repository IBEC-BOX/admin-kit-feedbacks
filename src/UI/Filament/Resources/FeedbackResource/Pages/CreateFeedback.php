<?php

namespace AdminKit\Feedbacks\UI\Filament\Resources\FeedbackResource\Pages;

use AdminKit\Feedbacks\UI\Filament\Resources\FeedbackResource;
use Filament\Resources\Pages\CreateRecord;

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
