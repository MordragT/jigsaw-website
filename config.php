<?php

return [
    'production' => false,
    'baseUrl' => '',
    'collections' => [
        'posts' => [
            'author' => 'annonymous',
            'sort' => '-date',
            'path' => 'blog/{filename}'
        ]
    ],
];
