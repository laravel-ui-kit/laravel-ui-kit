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
                'light' => 'border-gray-200 text-gray-600',
                'dark' => 'border-gray-700 text-gray-400',
                'default' => [
                    'border-gray-200 text-gray-600',
                    'dark:border-gray-600 dark:text-gray-400',
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
                'light' => [
                    'active' => 'border-gray-400 text-gray-800',
                    'not-active' => 'border-transparent hover:border-gray-500 hover:text-gray-700',
                ],
                'dark' => [
                    'active' => 'border-gray-300 text-gray-300',
                    'not-active' => 'border-transparent hover:border-gray-400 hover:text-gray-400',
                ],
                'default' => [
                    'active' => 'border-gray-800 text-gray-800 font-semibold dark:border-white dark:text-white',
                    'not-active' => 'border-transparent text-gray-500 hover:border-gray-500 hover:text-gray-700 dark:hover:border-gray-400 dark:hover:text-gray-400',
                ],
            ],
            'orientation' => [
                'horizontal' => 'px-4 py-2 text-sm border-b -mb-px',
                'vertical' => 'px-4 py-2 text-sm border-l -ml-px',
            ],
        ],
    ],
];
