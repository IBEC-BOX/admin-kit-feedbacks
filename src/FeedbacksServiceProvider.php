<?php

namespace AdminKit\Feedbacks;

use AdminKit\Feedbacks\Commands\FeedbacksCommand;
use AdminKit\Feedbacks\Listeners\NotifyAboutNewFeedback;
use AdminKit\Feedbacks\Providers\RouteServiceProvider;
use AdminKit\Feedbacks\Events\FeedbackSaved;
use Illuminate\Support\Facades\Event;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FeedbacksServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('admin-kit-feedbacks')
            ->hasConfigFile()
            ->hasViews()
            ->hasTranslations()
            ->hasMigrations([
                'create_admin_kit_feedbacks_table',
                'replace_name_phone_with_fields_in_admin_kit_feedbacks_table',
            ])
            ->hasCommand(FeedbacksCommand::class);
    }

    public function registeringPackage()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    public function bootingPackage()
    {
        if (config('admin-kit-feedbacks.email_notification.enabled')) {
            Event::listen(FeedbackSaved::class, NotifyAboutNewFeedback::class);
        }
    }
}
