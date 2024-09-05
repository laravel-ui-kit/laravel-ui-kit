<?php

return [
    'tabs' => [
        'view' => 'components.tabs.root',
        'classes' => [
            'root' => 'flex list-none font-medium',
        ],
        'props' => [
            'as' => 'div',
            'orientation' => 'horizontal',
            'color' => 'default',
        ],
        'options' => [
            'color' => [
                'default' => [
                    'border-zinc-200 text-zinc-600',
                    'dark:border-zinc-600 dark:text-zinc-400',
                ],
            ],
            'orientation' => [
                'horizontal' => 'items-stretch border-b',
                'vertical' => 'flex-col items-stretch border-l',
            ],
        ],
    ],
    'tab' => [
        'view' => 'components.tabs.item',
        'classes' => [
            'root' => 'inline-flex transition-colors duration-200',
        ],
        'props' => [
            'as' => 'a',
            'orientation' => 'horizontal',
            'color' => 'default',
            'active' => false,
            'disabled' => false,
        ],
        'options' => [
            'color' => [
                'default' => [
                    'active' => 'border-zinc-800 text-zinc-800 font-semibold dark:border-white dark:text-white',
                    'not-active' => 'border-transparent text-zinc-500 hover:border-zinc-500 hover:text-zinc-700 dark:hover:border-zinc-400 dark:hover:text-zinc-400',
                ],
            ],
            'orientation' => [
                'horizontal' => 'px-4 py-2 text-sm border-b -mb-px',
                'vertical' => 'px-4 py-2 text-sm border-l -ml-px',
            ],
        ],
    ],
];
