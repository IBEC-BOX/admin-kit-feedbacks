<?php

return [
    'resource' => [
        'label' => 'Feedback',
        'plural_label' => 'Feedback',

        'id' => 'ID',
        'name' => 'Name',
        'phone' => 'Phone',
        'locale' => 'Preferred language',

        'created_at' => 'Created At',
        'updated_at' => 'Updated At',
    ],
    'api' => [
        'attributes' => [
            'name' => 'name',
            'phone' => 'phone',
        ],
        'messages' => [
            'required' => 'The :attribute field is required.',
            'max' => [
                'string' => 'The :attribute field must not be greater than :max characters.',
            ],
            'min' => [
                'string' => 'The :attribute field must be at least :min characters.',
            ],
            'string' => 'The :attribute field must be a string.',
            'recaptcha' => 'Invalid recaptcha.',
        ],
    ],
];
