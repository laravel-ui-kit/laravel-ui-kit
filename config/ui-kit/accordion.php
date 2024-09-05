<?php

return [
    'accordion' => [
        'view' => 'components.accordion.root',
        'classes' => [
            'root' => 'relative mx-auto border rounded-xl divide-y divide-gray-600',
        ],
        'props' => [
            'color' => 'default',
        ],
        'options' => [
            'color' => [
                'light' => 'divide-gray-200 border-gray-200',
                'dark' => 'divide-gray-700 border-gray-700',
                'default' => [
                    'divide-gray-200 border-gray-200',
                    'dark:divide-gray-700 dark:border-gray-700',
                ],
            ],
        ],
    ],
    'accordion-item' => [
        'view' => 'components.accordion.item',
        'classes' => [
            'root' => 'relative text-white border-b last:border-0',
            'button' => 'flex items-center justify-between group w-full px-5 py-3 text-left',
            'text' => 'text-base duration-200 group-hover:text-blue-400',
            'icon' => 'inline w-5 h-5 ml-4 transition-transform duration-200 transform rotate-180 group-hover:text-blue-400',
            'content' => 'px-5 pb-5',
        ],
        'props' => [
            'color' => 'default',
        ],
        'options' => [
            'color' => [
                'light' => [
                    'root' => 'border-gray-200',
                    'button' => 'text-gray-700',
                ],
                'dark' => [
                    'root' => 'border-gray-700',
                    'button' => 'text-gray-300',
                ],
                'default' => [
                    'root' => 'border-gray-200 dark:border-gray-700',
                    'button' => 'text-gray-700 dark:text-gray-300',
                ],
            ],
        ],
    ],
];
