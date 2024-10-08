<?php

return [
    'sidebar' => [
        'view' => 'components.sidebar.root',
        'classes' => [
            'root' => '',
            'overlay' => 'inset-0 z-10 fixed',
            'mobile-navbar' => 'h-11 flex items-center z-50 p-2 mx-auto',
            'burger' => 'flex items-center gap-x-3 py-1.5 px-2 text-sm/6 rounded-md',
            'burger-icon' => 'h-7 w-7',
            'container' => 'h-full fixed z-20 top-0 left-0 transition-transform duration-300 ease-in-out transform',
            'container-open' => 'translate-x-0',
            'container-hidden' => '-translate-x-full',
            'close' => 'absolute top-2 -right-8 z-30',
            'content' => 'p-5 overflow-y-auto flex flex-col h-full',
            'content-top' => 'flex-grow',
            'content-bottom' => '',
            'open-body' => '',
        ],
        'props' => [
            'as' => 'nav',
            'color' => 'default',
            'size' => 'md',
            'variant' => 'fixed-lg',
        ],
        'options' => [
            'size' => [
                'sm' => [
                    'root' => 'w-48',
                    'container' => 'min-w-48',
                ],
                'md' => [
                    'root' => 'w-60',
                    'container' => 'min-w-60',
                ],
                'lg' => [
                    'root' => 'w-72',
                    'container' => 'min-w-72',
                ],
            ],
            'variant' => [
                'inline-md' => [
                    'root' => 'md:flex-shrink-0',
                    'container' => 'md:left-auto',
                    'open-body' => 'overflow-hidden md:overflow-auto',
                    'close' => 'md:hidden',
                    'container-hidden' => 'md:translate-x-0',
                    'mobile-navbar' => 'md:hidden',
                    'overlay' => 'md:relative',
                ],
                'inline-lg' => [
                    'root' => 'lg:flex-shrink-0',
                    'container' => 'lg:left-auto',
                    'open-body' => 'overflow-hidden lg:overflow-auto',
                    'close' => 'lg:hidden',
                    'container-hidden' => 'lg:translate-x-0',
                    'mobile-navbar' => 'lg:hidden',
                    'overlay' => 'lg:relative',
                ],
                'inline-xl' => [
                    'root' => 'xl:flex-shrink-0',
                    'container' => 'xl:left-auto',
                    'open-body' => 'overflow-hidden xl:overflow-auto',
                    'close' => 'xl:hidden',
                    'container-hidden' => 'xl:translate-x-0',
                    'mobile-navbar' => 'xl:hidden',
                    'overlay' => 'xl:relative',
                ],
                'fixed-md' => [
                    'open-body' => 'overflow-hidden md:overflow-auto',
                    'close' => 'md:hidden',
                    'container-hidden' => 'md:translate-x-0',
                    'mobile-navbar' => 'md:hidden',
                    'overlay' => 'md:relative',
                ],
                'fixed-lg' => [
                    'open-body' => 'overflow-hidden lg:overflow-auto',
                    'close' => 'lg:hidden',
                    'container-hidden' => 'lg:translate-x-0',
                    'mobile-navbar' => 'lg:hidden',
                    'overlay' => 'lg:relative',
                ],
                'fixed-xl' => [
                    'open-body' => 'overflow-hidden xl:overflow-auto',
                    'close' => 'xl:hidden',
                    'container-hidden' => 'xl:translate-x-0',
                    'mobile-navbar' => 'xl:hidden',
                    'overlay' => 'xl:relative',
                ],
            ],
            'color' => [
                'default' => [
                    'overlay' => 'bg-zinc-500 bg-opacity-50 dark:bg-zinc-500 dark:bg-opacity-50',
                    'burger' => 'font-medium text-zinc-700 hover:bg-zinc-100 dark:text-zinc-300 dark:hover:bg-zinc-700',
                    'container' => 'bg-zinc-100 dark:bg-zinc-900',
                    'close' => 'text-zinc-700 dark:text-zinc-300',
                ],
            ],
        ],
    ],
    'sidebar-item' => [
        'view' => 'components.sidebar.item',
        'classes' => [
            'root' => 'flex items-center gap-x-3 group',
        ],
        'props' => [
            'as' => 'a',
            'color' => 'default',
            'size' => 'md',
        ],
        'options' => [
            'color' => [
                'light' => 'text-zinc-500 hover:text-zinc-700 rounded-md',
                'dark' => 'text-zinc-400 hover:text-zinc-300 rounded-md',
                'default' => [
                    'text-zinc-500 hover:text-zinc-700 rounded-md',
                    'dark:text-zinc-400 dark:hover:text-zinc-300 dark:rounded-md',
                ],

                'active-light' => 'text-zinc-900 rounded-md font-semibold',
                'active-dark' => 'text-sky-400 rounded-md',
                'active' => [
                    'text-zinc-900 rounded-md font-semibold',
                    'dark:text-white dark:rounded-md',
                ],

                'burger-light' => 'text-zinc-700 hover:bg-zinc-100 rounded-md',
                'burger-dark' => 'text-zinc-300 hover:bg-zinc-700 rounded-md',
                'burger' => [
                    'text-zinc-700 hover:bg-zinc-100 rounded-md',
                    'dark:text-zinc-300 dark:hover:bg-zinc-700 dark:rounded-md',
                ],
            ],
            'size' => [
                'md' => 'py-1.5 text-sm/6',
            ],
        ],
    ],
    'sidebar-icon' => [
        'view' => 'components.sidebar.icon',
        'classes' => [
            'root' => 'flex-none border rounded-md',
        ],
        'props' => [
            'as' => 'svg',
            'color' => 'default',
            'size' => 'md',
        ],
        'options' => [
            'color' => [
                'light' => 'border-zinc-200 group-hover:text-zinc-900',
                'dark' => 'dark:border-zinc-700 dark:bg-zinc-800',
                'default' => [
                    'border-zinc-200 bg-zinc-100 group-hover:text-zinc-900',
                    'dark:border-zinc-700 dark:bg-zinc-800 dark:group-hover:text-white',
                ],
            ],
            'size' => [
                'md' => 'size-7 p-1',
            ],
        ],
    ],
];
