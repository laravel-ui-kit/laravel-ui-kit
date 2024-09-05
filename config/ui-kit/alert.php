<?php

return [    
    'alert' => [
        'view' => 'components.alert.root',
        'classes' => [
            'root' => 'shadow-sm rounded-xl border',
        ],
        'props' => [
            'as' => 'div',
            'color' => 'default',
            'size' => 'md',
        ],
        'options' => [
            'color' => [
                'light' => 'bg-white text-gray-700 border-gray-200',
                'dark' => 'bg-gray-800 text-gray-300 border-gray-700',
                'default' => [
                    'bg-white text-gray-700 border-gray-200',
                    'dark:bg-gray-800 dark:text-gray-300 dark:border-gray-700',
                ],
                
                'green-light' => 'bg-green-100 text-green-500 border-green-200',
                'green-dark' => 'bg-green-700 text-green-300 border-green-600',
                'green' => [
                    'bg-green-100 text-green-500 border-green-200',
                    'dark:bg-green-700 dark:text-green-300 dark:border-green-600',
                ],

                'red-light' => 'bg-red-100 text-red-500 border-red-200',
                'red-dark' => 'bg-red-700 text-red-300 border-red-600',
                'red' => [
                    'bg-red-100 text-red-500 border-red-200',
                    'dark:bg-red-700 dark:text-red-300 dark:border-red-600',
                ],

                'yellow-light' => 'bg-yellow-100 text-yellow-500 border-yellow-200',
                'yellow-dark' => 'bg-yellow-700 text-yellow-300 border-yellow-600',
                'yellow' => [
                    'bg-yellow-100 text-yellow-500 border-yellow-200',
                    'dark:bg-yellow-700 dark:text-yellow-300 dark:border-yellow-600',
                ],

                'gray-light' => 'bg-gray-100 text-gray-500 border-gray-200',
                'gray-dark' => 'bg-gray-700 text-gray-300 border-gray-600',
                'gray' => [
                    'bg-gray-100 text-gray-500 border-gray-200',
                    'dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600',
                ],
            ],
            'size' => [
                'sm' => 'px-4 py-2 text-sm',
                'md' => 'px-4 py-3 text-base',
                'lg' => 'px-6 py-4 text-lg',
            ],
        ],
    ],
];
