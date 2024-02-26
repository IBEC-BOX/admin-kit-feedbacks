<?php

namespace AdminKit\Feedbacks\Commands;

use Illuminate\Console\Command;

class FeedbacksCommand extends Command
{
    public $signature = 'admin-kit-feedbacks';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
