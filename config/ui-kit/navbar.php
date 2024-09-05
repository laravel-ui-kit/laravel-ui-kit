<?php

return [
    'navbar' => [
        'view' => 'components.navbar.root',
        'classes' => [
            'root' => 'h-11 text-white flex items-center z-10',
            'container' => 'px-2 flex-grow flex justify-between',
            'menu' => 'space-x-2',
            'left-menu' => 'flex items-center',
            'center-menu' => 'flex-grow hidden md:flex items-center',
            'right-menu' => 'hidden md:flex items-center',
            'burger' => 'flex md:hidden',
        ],
        'props' => [
            'as' => 'nav',
            'color' => 'default',
            'containerSize' => 'xl',
        ],
        'options' => [
            'color' => [
                'light' => [
                    'root' => 'border-b border-gray-200 bg-white text-gray-800',
                ],
                'dark' => [
                    'root' => 'border-b border-gray-600 bg-gray-700 text-white',
                ],
                'default' => [
                    'root' => 'border-b border-gray-200 bg-white text-gray-800 dark:border-gray-600 dark:bg-gray-700 dark:text-white',
                ],
            ],
        ],
    ],
    'navbar-item' => [
        'view' => 'components.navbar.item',
        'classes' => [
            'root' => 'inline-flex items-center text-sm border border-transparent transition duration-200 ease-in-out',
        ],
        'props' => [
            'as' => 'a',
            'color' => 'default',
        ],
        'options' => [
            'color' => [
                'light' => 'rounded-full px-3 py-1 text-gray-700 hover:bg-gray-100',
                'dark' => 'rounded-full px-3 py-1 text-gray-300 hover:bg-gray-800/50',
                'default' => [
                    'rounded-full px-3 py-1 text-gray-700 hover:bg-gray-100',
                    'dark:rounded-full dark:px-3 dark:py-1 dark:text-gray-300 dark:hover:bg-gray-800/50 dark:transition dark:duration-200 dark:ease-in-out',
                ],

                'burger-light' => 'rounded-md px-1 py-0.5 text-gray-700 hover:bg-gray-100',
                'burger-dark' => 'rounded-md px-1 py-0.5 text-gray-300 hover:bg-gray-700',
                'burger' => [
                    'rounded-md px-1 py-0.5',
                    'text-gray-700 hover:bg-gray-100',
                    'dark:text-gray-300 dark:hover:bg-gray-800/50',
                ],

                'brand-light' => 'text-gray-700 px-0 py-1',
                'brand-dark' => 'text-gray-300 px-0 py-1',
                'brand' => [
                    'text-gray-700 px-0 py-1',
                    'dark:text-gray-300',
                ],

                'dark-burger' => 'rounded-md px-1 py-0.5 text-gray-800 hover:bg-gray-800/10',
            ],
        ],
    ],
];
