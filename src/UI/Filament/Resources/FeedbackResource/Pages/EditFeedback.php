<?php

namespace AdminKit\Feedbacks\UI\Filament\Resources\FeedbackResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use AdminKit\Feedbacks\UI\Filament\Resources\FeedbackResource;

class EditFeedback extends EditRecord
{
    protected static string $resource = FeedbackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
