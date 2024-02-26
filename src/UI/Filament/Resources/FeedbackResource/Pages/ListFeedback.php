<?php

namespace AdminKit\Feedbacks\UI\Filament\Resources\FeedbackResource\Pages;

use Filament\Resources\Pages\ListRecords;
use AdminKit\Feedbacks\UI\Filament\Resources\FeedbackResource;

class ListFeedback extends ListRecords
{
    protected static string $resource = FeedbackResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
