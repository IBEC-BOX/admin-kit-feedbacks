<?php

return [
    'email_notification' => [
        'enabled' => env('ADMIN_KIT_FEEDBACKS_EMAIL_NOTIFICATION_ENABLED', false),
        'addresses' => env('ADMIN_KIT_FEEDBACKS_EMAIL_NOTIFICATION_ADDRESSES', 'admin@example.com'),
    ],

    'fields' => [
        'name' => [
            'rules' => 'required|string|max:255',
            'label' => 'Name',
        ],
        'phone' => [
            'rules' => 'required|string|min:18|max:18',
            'label' => 'Phone',
        ],
    ],
];
