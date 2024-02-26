<?php

namespace AdminKit\Feedbacks\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AdminKit\Feedbacks\Feedbacks
 */
class Feedbacks extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AdminKit\Feedbacks\Feedbacks::class;
    }
}
