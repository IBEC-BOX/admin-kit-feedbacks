<?php

namespace AdminKit\Feedbacks\UI\Filament\Resources;

use AdminKit\Feedbacks\Models\Feedback;
use AdminKit\Feedbacks\UI\Filament\Resources\FeedbackResource\Pages;
use Filament\Resources\Resource;
use Filament\Tables;

class FeedbackResource extends Resource
{
    protected static ?string $model = Feedback::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label(__('admin-kit-feedbacks::feedbacks.resource.name')),
                Tables\Columns\TextColumn::make('phone')
                    ->label(__('admin-kit-feedbacks::feedbacks.resource.phone')),
                Tables\Columns\TextColumn::make('locale')
                    ->label(__('admin-kit-feedbacks::feedbacks.resource.locale')),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('admin-kit-feedbacks::feedbacks.resource.created_at')),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFeedback::route('/'),
        ];
    }

    public static function getLabel(): ?string
    {
        return __('admin-kit-feedbacks::feedbacks.resource.label');
    }

    public static function getPluralLabel(): ?string
    {
        return __('admin-kit-feedbacks::feedbacks.resource.plural_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('admin-kit-feedbacks::feedbacks.resource.label');
    }
}
