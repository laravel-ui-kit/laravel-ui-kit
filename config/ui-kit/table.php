<?php

return [
    'table' => [
        'view' => 'components.table.root',
        'classes' => [
            'root' => 'min-w-full w-full overflow-x-auto text-left',
            'container' => 'inline-block w-full align-middle overflow-hidden',
            'body' => '',
            'head' => '',
            'foot' => '',
        ],
        'props' => [
            'size' => 'md',
        ],
        'options' => [
            'size' => [
                'xs' => 'text-xs',
                'sm' => 'text-sm',
                'md' => 'text-base',
                'lg' => 'text-lg',
                'xl' => 'text-xl',
            ],
        ],
    ],
    'tr' => [
        'view' => 'components.table.tr',
        'classes' => [
            'root' => '',
        ],
        'props' => [
            'as' => 'tr',
            'color' => 'transparent',
        ],
        'options' => [
            'color' => [
                'transparent' => '',
            ],
        ],
    ],
    'th' => [
        'view' => 'components.table.th',
        'classes' => [
            'root' => 'text-left text-sm border-b',
        ],
        'props' => [
            'as' => 'th',
            'align' => 'inherit',
            'color' => 'default',
            'size' => 'sm',
            'weight' => 'semibold',
        ],
        'options' => [
            'color' => [
                'light' => 'text-gray-500 border-gray-200',
                'dark' => 'text-gray-300 border-gray-700',
                'default' => [
                    'text-gray-500 border-gray-200',
                    'dark:text-gray-300 dark:border-gray-700',
                ],
            ],
            'size' => [
                'sm' => 'py-3 px-2 first:pl-0 last:pr-0',
                'md' => 'py-4 px-3 first:pl-0 last:pr-0',
                'lg' => 'py-5 px-4 first:pl-0 last:pr-0',
            ],
            'align' => [
                'inherit' => '',
                'left' => 'text-left',
                'center' => 'text-center',
                'right' => 'text-right',
            ],
            'weight' => [
                'inherit' => '',
                'normal' => 'font-normal',
                'semibold' => 'font-semibold',
                'bold' => 'font-bold',
            ],
        ],
    ],
    'td' => [
        'view' => 'components.table.td',
        'classes' => [
            'root' => 'relative whitespace-nowrap text-sm border-b',
            'href' => 'absolute inset-0 focus:outline-none',
        ],
        'props' => [
            'as' => 'td',
            'align' => 'inherit',
            'color' => 'default',
            'size' => 'sm',
            'weight' => 'inherit',
            'href' => null,
        ],
        'options' => [
            'color' => [
                'light' => 'text-gray-700 border-gray-200',
                'dark' => 'text-gray-300 border-gray-700',
                'default' => [
                    'text-gray-700 border-gray-200',
                    'dark:text-gray-400 dark:border-gray-700',
                ],
            ],
            'size' => [
                'sm' => 'py-3 px-2 first:pl-0 last:pr-0',
                'md' => 'py-4 px-3 first:pl-0 last:pr-0',
                'lg' => 'py-5 px-4 first:pl-0 last:pr-0',
            ],
            'align' => [
                'inherit' => '',
                'left' => 'text-left',
                'center' => 'text-center',
                'right' => 'text-right',
            ],
            'weight' => [
                'inherit' => '',
                'normal' => 'font-normal',
                'semibold' => 'font-semibold',
                'bold' => 'font-bold',
            ],
        ],
    ],
];
