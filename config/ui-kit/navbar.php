<?php

return [
    'navbar' => [
        'view' => 'components.navbar.root',
        'classes' => [
            'root' => 'h-11 flex items-center z-10',
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
                'default' => [
                    'root' => 'border-b border-zinc-200 bg-white text-zinc-800 dark:border-zinc-600 dark:bg-zinc-800 dark:text-white',
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
                'default' => [
                    'rounded-full px-3 py-1 text-zinc-700 hover:bg-zinc-200',
                    'dark:rounded-full dark:px-3 dark:py-1 dark:text-zinc-300 dark:hover:bg-zinc-900/50 dark:transition dark:duration-200 dark:ease-in-out',
                ],
                'burger' => [
                    'rounded-md px-1 py-0.5',
                    'text-zinc-700 hover:bg-zinc-100',
                    'dark:text-zinc-300 dark:hover:bg-zinc-800/50',
                ],
                'brand' => [
                    'text-zinc-700 px-0 py-1',
                    'dark:text-zinc-300',
                ],
            ],
        ],
    ],
];
