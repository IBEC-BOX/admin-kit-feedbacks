<?php

namespace AdminKit\Feedbacks\UI\Filament\Resources\FeedbackResource\Pages;

use AdminKit\Feedbacks\UI\Filament\Resources\FeedbackResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

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
