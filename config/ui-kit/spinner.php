<?php

return [
    'spinner' => [
        'view' => 'components.spinner.root',
        'classes' => [
            'root' => 'animate-spin text-center',
        ],
        'props' => [
            'size' => 'md',
            'color' => 'default',
        ],
        'options' => [
            'size' => [
                'xs' => 'w-4 h-4',
                'sm' => 'w-6 h-6',
                'md' => 'w-8 h-8',
                'lg' => 'w-10 h-10',
                'xl' => 'w-12 h-12',
            ],
            'color' => [
                'light' => 'text-gray-200 fill-blue-500',
                'dark' => 'text-gray-200 fill-blue-400',
                'default' => [
                    'text-gray-200 fill-blue-500',
                    'dark:text-gray-200 dark:fill-blue-400',
                ],
            ],
        ],
    ],
];
