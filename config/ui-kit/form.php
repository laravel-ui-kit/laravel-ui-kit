<?php

return [
    'form' => [
        'view' => 'components.form.root',
        'props' => [
            'method' => 'GET',
            'csrf' => null,
        ],
    ],
    'label' => [
        'view' => 'components.form.label',
        'classes' => [
            'root' => 'block font-medium',
        ],
        'props' => [
            'as' => 'label',
            'color' => 'default',
            'size' => 'md',
            'align' => 'inherit',
        ],
        'options' => [
            'color' => [
                'light' => 'text-stone-200',
                'dark' => 'text-zinc-800',
                'default' => [
                    'text-stone-800',
                    'dark:text-zinc-200',
                ],
            ],
            'size' => [
                'xs' => 'text-xs',
                'sm' => 'text-sm',
                'md' => 'text-sm mb-2',
                'lg' => 'text-lg',
                'xl' => 'text-xl',
                '2xl' => 'text-2xl',
            ],
            'align' => [
                'inherit' => '',
                'center' => 'text-center',
                'left' => 'text-left',
                'right' => 'text-right',
            ],
        ],
    ],
    'input' => [
        'view' => 'components.form.input',
        'classes' => [
            'root' => 'block w-full border appearance-none rounded-md',
        ],
        'props' => [
            'type' => 'text',
            'color' => 'default',
            'size' => 'md',
        ],
        'options' => [
            'color' => [
                'light' => 'bg-white border-zinc-200 text-zinc-800 placeholder-zinc-400 focus:border-blue-600 focus:bg-white focus:outline-none focus:ring-blue-600',
                'dark' => 'bg-zinc-700 border-zinc-600 text-zinc-300 placeholder-zinc-500 hover:border-zinc-500 focus:border-blue-600 focus:bg-zinc-700 focus:outline-none focus:ring-blue-600',
                'default' => [
                    'bg-white border-zinc-200 text-zinc-800 placeholder-zinc-400 focus:border-blue-600 focus:bg-white focus:outline-none focus:ring-blue-600',
                    'dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-300 dark:placeholder-zinc-500 dark:hover:border-zinc-500 dark:focus:border-blue-600 dark:focus:bg-zinc-700 dark:focus:outline-none dark:focus:ring-blue-600',
                ],
            ],
            'size' => [
                'sm' => 'px-3 py-1 text-sm',
                'md' => 'px-3 py-2 sm:text-sm',
                'lg' => 'px-5 py-3',
            ],
        ],
    ],
    'textarea' => [
        'view' => 'components.form.textarea',
        'classes' => [
            'root' => 'block w-full border appearance-none rounded-md',
        ],
        'props' => [
            'size' => 'md',
            'color' => 'default',
            'maxHeight' => 'md',
        ],
        'options' => [
            'color' => [
                'light' => 'bg-white border-zinc-200 text-zinc-800 placeholder-zinc-400 focus:border-blue-600 focus:bg-white focus:outline-none focus:ring-blue-600',
                'dark' => 'bg-zinc-700 border-zinc-600 text-zinc-300 placeholder-zinc-500 hover:border-zinc-500 focus:border-blue-600 focus:bg-zinc-700 focus:outline-none focus:ring-blue-600',
                'default' => [
                    'bg-white border-zinc-200 text-zinc-800 placeholder-zinc-400 focus:border-blue-600 focus:bg-white focus:outline-none focus:ring-blue-600',
                    'dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-300 dark:placeholder-zinc-500 dark:hover:border-zinc-500 dark:focus:border-blue-600 dark:focus:bg-zinc-700 dark:focus:outline-none dark:focus:ring-blue-600',
                ],
            ],
            'size' => [
                'sm' => 'px-3 py-1 text-sm',
                'md' => 'px-3 py-2 sm:text-sm',
                'lg' => 'px-5 py-3',
            ],
            'maxHeight' => [
                'none' => '',
                'xs' => 'max-h-16',
                'sm' => 'max-h-24',
                'md' => 'max-h-32',
                'lg' => 'max-h-40',
                'xl' => 'max-h-48',
                '2xl' => 'max-h-56',
            ],
        ],
    ],
    'select' => [
        'view' => 'components.form.select',
        'classes' => [
            'root' => 'block w-full border appearance-none cursor-pointer rounded-md',
        ],
        'props' => [
            'color' => 'default',
            'size' => 'md',
        ],
        'options' => [
            'color' => [
                'light' => 'bg-white border-zinc-200 text-zinc-800 placeholder-zinc-400 focus:border-blue-600 focus:bg-white focus:outline-none focus:ring-blue-600',
                'dark' => 'bg-zinc-700 border-zinc-600 text-zinc-300 placeholder-zinc-500 hover:border-zinc-500 focus:border-blue-600 focus:bg-zinc-700 focus:outline-none focus:ring-blue-600',
                'default' => [
                    'bg-white border-zinc-200 text-zinc-800 placeholder-zinc-400 focus:border-blue-600 focus:bg-white focus:outline-none focus:ring-blue-600',
                    'dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-300 dark:placeholder-zinc-500 dark:hover:border-zinc-500 dark:focus:border-blue-600 dark:focus:bg-zinc-700 dark:focus:outline-none dark:focus:ring-blue-600',
                ],
            ],
            'size' => [
                'sm' => 'px-3 py-1 text-sm',
                'md' => 'pl-3 pr-5 py-2 sm:text-sm',
                'lg' => 'px-5 py-3',
            ],
        ],
    ],
    'checkbox' => [
        'view' => 'components.form.checkbox',
        'classes' => [
            'root' => 'rounded cursor-pointer',
        ],
        'props' => [
            'color' => 'default',
            'size' => 'md',
        ],
        'options' => [
            'color' => [
                'light' => 'text-blue-500 bg-white border-zinc-200 focus:ring-sky-500 focus:border-sky-500 focus:ring-offset-white',
                'dark' => 'text-blue-500 bg-zinc-800 border-zinc-600 focus:ring-sky-500 focus:border-sky-500 focus:ring-offset-zinc-800 checked:bg-blue-500 checked:border-sky-600',
                'default' => [
                    'text-blue-500 bg-white border-zinc-200 focus:ring-sky-500 focus:border-sky-500 focus:ring-offset-white',
                    'dark:text-blue-500 dark:bg-zinc-800 dark:border-zinc-600 dark:focus:ring-sky-500 dark:focus:border-sky-500 dark:focus:ring-offset-zinc-800 dark:checked:bg-blue-500 dark:checked:border-sky-600',
                ],
            ],
            'size' => [
                'sm' => 'w-3 h-3',
                'md' => 'w-4 h-4',
                'lg' => 'w-6 h-6',
            ],
        ],
    ],
    'radio' => [
        'view' => 'components.form.radio',
        'classes' => [
            'root' => '',
        ],
        'props' => [
            'color' => 'default',
            'size' => 'md',
        ],
        'options' => [
            'color' => [
                'light' => 'text-blue-500 bg-white border-zinc-200 focus:ring-sky-500 focus:border-sky-500 focus:ring-offset-white',
                'dark' => 'text-blue-500 bg-zinc-800 border-zinc-600 focus:ring-sky-500 focus:border-sky-500 focus:ring-offset-zinc-800 checked:bg-blue-500 checked:border-sky-600',
                'default' => [
                    'text-blue-500 bg-white border-zinc-200 focus:ring-sky-500 focus:border-sky-500 focus:ring-offset-white',
                    'dark:text-blue-500 dark:bg-zinc-800 dark:border-zinc-600 dark:focus:ring-sky-500 dark:focus:border-sky-500 dark:focus:ring-offset-zinc-800 dark:checked:bg-blue-500 dark:checked:border-sky-600',
                ],
            ],
            'size' => [
                'sm' => 'w-3 h-3',
                'md' => 'w-4 h-4',
                'lg' => 'w-6 h-6',
            ],
        ],
    ],
];
