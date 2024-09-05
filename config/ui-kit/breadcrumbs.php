<?php

return [
    'breadcrumbs' => [
        'view' => 'components.breadcrumbs.root',
        'classes' => [
            'root' => 'flex items-center space-x-2',
            'container' => 'flex',
        ],
        'props' => [
            'as' => 'nav',
        ],
    ],
    'breadcrumb' => [
        'view' => 'components.breadcrumbs.item',
        'classes' => [
            'root' => 'text-sm ml-2',
            'container' => 'flex items-center',
            'icon' => 'flex-shrink-0 w-5 h-5 group-first:hidden',
        ],
        'props' => [
            'color' => 'default',
        ],
        'options' => [
            'color' => [
                'light' => [
                    'root' => 'text-gray-600 hover:text-gray-800 group-last:text-gray-800',
                    'icon' => 'text-gray-400',
                ],
                'dark' => [
                    'root' => 'text-gray-400 hover:text-gray-200 group-last:text-gray-200',
                    'icon' => 'text-gray-600',
                ],
                'default' => [
                    'root' => 'text-gray-600 hover:text-gray-800 group-last:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:group-last:text-gray-200',
                    'icon' => 'text-gray-400 dark:text-gray-600',
                ],
            ],
        ],
    ],
];
