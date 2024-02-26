<?php

namespace AdminKit\Feedbacks;

use Filament\Contracts\Plugin;
use Filament\Panel;
use AdminKit\Feedbacks\UI\Filament\Resources\FeedbackResource;

class FilamentPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-plugin-admin-kit-feedbacks';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            FeedbackResource::class,
        ]);
    }

    public function boot(Panel $panel): void
    {
    }

    public static function make(): static
    {
        return app(static::class);
    }
}
