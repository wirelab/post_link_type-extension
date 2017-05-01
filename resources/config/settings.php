<?php

return [
    'url_template' => [
        'required' => true,
        'type' => 'anomaly.field_type.text',
        'config' => [
            'default_value' => 'posts/{slug}'
        ],
    ],
];
