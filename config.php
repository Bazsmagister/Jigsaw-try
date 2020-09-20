<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Jigsaw',
    'description' => 'Website description.',
    'collections' => [
            'posts' => [
                'path' => 'blog/{filename}',
                'author' => 'Tighten',
        ],
    ],

    'contact_email' => 'info@hogyhat.hu',

    'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'selected' : '';
    },
];
