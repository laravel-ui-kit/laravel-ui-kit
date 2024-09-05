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
                    'root' => 'text-zinc-600 hover:text-zinc-800 group-last:text-zinc-800',
                    'icon' => 'text-zinc-400',
                ],
                'dark' => [
                    'root' => 'text-zinc-400 hover:text-zinc-200 group-last:text-zinc-200',
                    'icon' => 'text-zinc-600',
                ],
                'default' => [
                    'root' => 'text-zinc-600 hover:text-zinc-800 group-last:text-zinc-800 dark:text-zinc-400 dark:hover:text-zinc-200 dark:group-last:text-zinc-200',
                    'icon' => 'text-zinc-400 dark:text-zinc-600',
                ],
            ],
        ],
    ],
];
