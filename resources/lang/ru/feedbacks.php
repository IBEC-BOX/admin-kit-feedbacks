<?php

return [
    'resource' => [
        'label' => 'Обратная связь',
        'plural_label' => 'Обратная связь',

        'id' => 'ID',
        'name' => 'Имя',
        'phone' => 'Телефон',
        'locale' => 'Предпочитаемый язык',

        'created_at' => 'Создан',
        'updated_at' => 'Обновлен',
    ],
    'api' => [
        'attributes' => [
            'name' => 'имя',
            'phone' => 'номер телефона',
        ],
        'messages' => [
            'required' => 'Поле :attribute обязательно для заполнения.',
            'max' => [
                'string' => 'Поле :attribute должно быть не длиннее :max символов.',
            ],
            'min' => [
                'string' => 'Поле :attribute должно быть не короче :min символов.',
            ],
            'string' => 'Поле :attribute должно быть строкой.',
            'recaptcha' => 'Неверная recaptcha.'
        ],
    ],
];
