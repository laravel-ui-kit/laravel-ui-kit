<?php

return [
    'card' => [
        'view' => 'components.layout.card',
        'classes' => [
            'root' => 'block border shadow-sm rounded-xl',
        ],
        'props' => [
            'as' => 'div',
            'color' => 'default',
            'size' => 'md',
        ],
        'options' => [
            'color' => [
                'default' => [
                    'bg-white border-zinc-200',
                    'dark:bg-zinc-800 dark:border-zinc-700',
                ],
            ],
            'size' => [
                'xxs' => '',
                'xs' => '-2',
                'sm' => 'p-4',
                'md' => 'p-6',
                'lg' => 'p-8',
                'xl' => 'p-10',
                '2xl' => 'p-12',
            ],
        ],
    ],
    'container' => [
        'view' => 'components.layout.container',
        'classes' => [
            'root' => 'relative',
        ],
        'props' => [
            'as' => 'div',
            'size' => 'md',
            'align' => 'center',
            'color' => 'transparent',
        ],
        'options' => [
            'color' => [
                'light' => 'bg-zinc-100',
                'dark' => 'bg-zinc-900',
                'default' => [
                    'bg-zinc-100',
                    'dark:bg-zinc-900',
                ],
                'transparent' => '',
            ],
            'size' => [
                'none' => '',
                'xxs' => 'max-w-xl',
                'xs' => 'max-w-2xl',
                'sm' => 'max-w-3xl',
                'md' => 'max-w-4xl',
                'lg' => 'max-w-5xl',
                'xl' => 'max-w-6xl',
                '2xl' => 'max-w-7xl',
            ],
            'align' => [
                'center' => 'mx-auto',
                'left' => 'ml-auto',
                'right' => 'mr-auto',
            ],
        ],
    ],
    'divider' => [
        'view' => 'components.layout.divider',
        'classes' => [
            'root' => 'w-full border-t',
        ],
        'props' => [
            'as' => 'hr',
            'color' => 'default',
            'size' => 'sm',
        ],
        'options' => [
            'color' => [
                'light' => 'border-zinc-200',
                'dark' => 'border-zinc-700',
                'default' => [
                    'border-zinc-200',
                    'dark:border-zinc-700',
                ],
            ],
            'size' => [
                'sm' => 'border-t',
                'md' => 'border-t-2',
                'lg' => 'border-t-3',
            ],
        ],
    ],
];
