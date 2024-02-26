<?php

namespace AdminKit\Feedbacks\Models;

use AdminKit\Core\Abstracts\Models\AbstractModel;
use AdminKit\Feedbacks\Database\Factories\FeedbackFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feedback extends AbstractModel
{
    use HasFactory;

    protected $table = 'admin_kit_feedbacks';

    protected $fillable = [
        'name',
        'phone',
        'locale',
    ];

    protected static function newFactory(): FeedbackFactory
    {
        return new FeedbackFactory();
    }
}
