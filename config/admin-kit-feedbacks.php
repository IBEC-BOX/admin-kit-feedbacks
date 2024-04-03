<?php

// The label can be a translation key
return [
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
