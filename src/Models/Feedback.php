<?php

namespace AdminKit\Feedbacks\Models;

use AdminKit\Core\Abstracts\Models\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use AdminKit\Feedbacks\Database\Factories\FeedbackFactory;

class Feedback extends AbstractModel
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'admin_kit_feedbacks';

    protected $fillable = [
        'title',
    ];

    protected $casts = [
        //
    ];

    protected $translatable = [
        'title',
    ];

    protected static function newFactory(): FeedbackFactory
    {
        return new FeedbackFactory();
    }
}
