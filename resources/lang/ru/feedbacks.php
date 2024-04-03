<?php

return [
    'resource' => [
        'label' => 'Обратная связь',
        'plural_label' => 'Обратная связь',

        'id' => 'ID',
        'locale' => 'Предпочитаемый язык',

        'created_at' => 'Создан',
        'updated_at' => 'Обновлен',
    ],
    'api' => [
        'messages' => [
            'required' => 'Поле :attribute обязательно для заполнения.',
            'max' => [
                'string' => 'Поле :attribute должно быть не длиннее :max символов.',
            ],
            'min' => [
                'string' => 'Поле :attribute должно быть не короче :min символов.',
            ],
            'string' => 'Поле :attribute должно быть строкой.',
            'recaptcha' => 'Неверная recaptcha.',
        ],
    ],
];
