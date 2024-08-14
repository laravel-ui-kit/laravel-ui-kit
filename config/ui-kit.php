<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    /*
     * Blade Components
     */
    'components' => [
        // Typography
        'text' => [
            'view' => 'components.typography.text',
            'style' => [
                'root' => '',
            ],
            'props' => [
                'as' => 'p',
                'color' => 'light-dark',
                'size' => 'md',
                'align' => 'inherit',
                'weight' => 'inherit',
            ],
            'options' => [
                'color' => [
                    'light' => 'text-stone-800',
                    'dark' => 'text-gray-400',
                    'light-dark' => [
                        'text-stone-800',
                        'dark:text-gray-400',
                    ],
                    'inherit' => '',
                ],
                'size' => [
                    'xs' => 'text-xs',
                    'sm' => 'text-sm',
                    'md' => 'text-base',
                    'lg' => 'text-lg',
                    'xl' => 'text-xl',
                    '2xl' => 'text-2xl',
                    'inherit' => '',
                ],
                'align' => [
                    'inherit' => '',
                    'center' => 'text-center',
                    'left' => 'text-left',
                    'right' => 'text-right',
                ],
                'weight' => [
                    'inherit' => '',
                    'normal' => 'font-normal',
                    'medium' => 'font-medium',
                    'bold' => 'font-bold',
                ],
            ],
        ],
        'title' => [
            'view' => 'components.typography.title',
            'style' => [
                'root' => '',
            ],
            'props' => [
                'as' => 'h1',
                'color' => 'light-dark',
                'size' => 'xl',
                'align' => 'inherit',
                'weight' => 'medium',
            ],
            'options' => [
                'color' => [
                    'light' => 'text-stone-800',
                    'dark' => 'text-gray-100',
                    'light-dark' => [
                        'text-stone-800',
                        'dark:text-gray-100',
                    ],
                ],
                'size' => [
                    'xs' => 'text-xs',
                    'sm' => 'text-sm',
                    'md' => 'text-base',
                    'lg' => 'text-lg',
                    'xl' => 'text-xl',
                    '2xl' => 'text-2xl',
                    '3xl' => 'text-3xl',
                    '4xl' => 'text-4xl',
                ],
                'align' => [
                    'inherit' => '',
                    'center' => 'text-center',
                    'left' => 'text-left',
                    'right' => 'text-right',
                ],
                'weight' => [
                    'inherit' => 'font-inherit',
                    'normal' => 'font-normal',
                    'medium' => 'font-medium',
                    'semibold' => 'font-semibold',
                    'bold' => 'font-bold',
                ],
            ],
        ],
        'link' => [
            'view' => 'components.typography.link',
            'style' => [
                'root' => 'transition underline',
            ],
            'props' => [
                'as' => 'a',
                'color' => 'light-dark',
                'size' => 'md',
                'align' => 'inherit',
            ],
            'options' => [
                'color' => [
                    'light' => 'text-blue-600 hover:text-blue-800 decoration-blue-600/50',
                    'dark' => 'text-blue-400 hover:text-blue-300 decoration-blue-400/50',
                    'light-dark' => [
                        'text-blue-600 hover:text-blue-800 decoration-blue-600/50',
                        'dark:text-blue-400 dark:hover:text-blue-300 dark:decoration-blue-400/50',
                    ],
                ],
                'size' => [
                    'xs' => 'text-xs',
                    'sm' => 'text-sm',
                    'md' => 'text-base',
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
        'badge' => [
            'view' => 'components.typography.badge',
            'style' => [
                'root' => 'inline-flex items-center justify-center font-semibold gap-1 transition-all rounded-full',
            ],
            'props' => [
                'as' => 'span',
                'size' => 'md',
                'color' => 'light-dark',
            ],
            'options' => [
                'color' => [
                    'light' => 'text-gray-700 bg-gray-100',
                    'dark' => 'text-gray-300 bg-gray-700',
                    'light-dark' => [
                        'text-gray-700 bg-gray-100',
                        'dark:text-gray-300 dark:bg-gray-700',
                    ],
                    'green-light' => 'text-green-500 bg-green-100',
                    'green-dark' => 'text-green-300 bg-green-700',
                    'green' => [
                        'text-green-500 bg-green-100',
                        'dark:text-green-300 dark:bg-green-700',
                    ],
                ],
                'size' => [
                    'xs' => 'px-2 py-0.5 text-xs h-6',
                    'sm' => 'px-2 py-1 text-sm h-7',
                    'md' => 'px-4 py-2 text-base h-9',
                    'lg' => 'px-5 py-3 text-lg h-11',
                    'xl' => 'px-6 py-4 text-xl h-13',
                ],
            ],
        ],
        'list' => [
            'view' => 'components.typography.list',
            'style' => [
                'root' => 'space-y-2',
            ],
            'props' => [
                'as' => 'ul',
                'type' => 'disc',
                'size' => 'md',
                'align' => 'inside',
                'color' => 'light-dark',
            ],
            'options' => [
                'color' => [
                    'light' => 'text-gray-700',
                    'dark' => 'text-gray-300',
                    'light-dark' => [
                        'text-gray-700',
                        'dark:text-gray-300',
                    ],
                ],
                'type' => [
                    'disc' => 'list-disc',
                    'decimal' => 'list-decimal',
                    'none' => 'list-none',
                ],
                'size' => [
                    'xs' => 'text-xs',
                    'sm' => 'text-sm',
                    'md' => 'text-base',
                    'lg' => 'text-lg',
                    'xl' => 'text-xl',
                    '2xl' => 'text-2xl',
                ],
                'align' => [
                    'inside' => 'list-inside',
                    'outside' => 'list-outside',
                ],
            ],
        ],
        'caption' => [
            'view' => 'components.typography.caption',
            'style' => [
                'root' => 'text-xs text-gray-500',
            ],
            'props' => [
                'as' => 'span',
                'size' => 'sm',
                'align' => 'inherit',
                'color' => 'light-dark',
                'weight' => 'inherit',
            ],
            'options' => [
                'size' => [
                    'xs' => 'text-xs',
                    'sm' => 'text-sm',
                    'md' => 'text-base',
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
                'color' => [
                    'light' => 'text-gray-500',
                    'dark' => 'text-gray-400',
                    'light-dark' => [
                        'text-gray-500',
                        'dark:text-gray-400',
                    ],
                    'red-light' => 'text-red-500',
                    'red-dark' => 'text-red-300',
                    'red' => [
                        'text-red-500',
                        'dark:text-red-300',
                    ],
                ],
                'weight' => [
                    'inherit' => '',
                    'normal' => 'font-normal',
                    'medium' => 'font-medium',
                    'bold' => 'font-bold',
                ],
            ],
        ],

        // Layout
        'card' => [
            'view' => 'components.layout.card',
            'style' => [
                'root' => 'block border shadow-sm rounded-xl',
            ],
            'props' => [
                'as' => 'div',
                'color' => 'light-dark',
                'size' => 'md',
            ],
            'options' => [
                'color' => [
                    'light' => 'bg-white border-gray-200',
                    'dark' => 'bg-gray-800 border-gray-700',
                    'light-dark' => [
                        'bg-white border-gray-200',
                        'dark:bg-gray-800 dark:border-gray-700',
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
            'style' => [
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
                    'light' => 'bg-gray-100',
                    'dark' => 'bg-gray-900',
                    'light-dark' => [
                        'bg-gray-100',
                        'dark:bg-gray-900',
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
            'style' => [
                'root' => 'w-full border-t',
            ],
            'props' => [
                'as' => 'hr',
                'color' => 'light-dark',
                'size' => 'sm',
            ],
            'options' => [
                'color' => [
                    'light' => 'border-gray-200',
                    'dark' => 'border-gray-700',
                    'light-dark' => [
                        'border-gray-200',
                        'dark:border-gray-700',
                    ],
                ],
                'size' => [
                    'sm' => 'border-t',
                    'md' => 'border-t-2',
                    'lg' => 'border-t-3',
                ],
            ],
        ],

        // Form
        'form' => [
            'view' => 'components.form.root',
            'props' => [
                'method' => 'GET',
                'csrf' => null,
            ],
        ],
        'label' => [
            'view' => 'components.form.label',
            'style' => [
                'root' => 'block font-medium',
            ],
            'props' => [
                'as' => 'label',
                'color' => 'light-dark',
                'size' => 'md',
                'align' => 'inherit',
            ],
            'options' => [
                'color' => [
                    'light' => 'text-stone-200',
                    'dark' => 'text-gray-800',
                    'light-dark' => [
                        'text-stone-800',
                        'dark:text-gray-200',
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
            'style' => [
                'root' => 'block w-full border appearance-none rounded-md',
            ],
            'props' => [
                'type' => 'text',
                'color' => 'light-dark',
                'size' => 'md',
            ],
            'options' => [
                'color' => [
                    'light' => 'bg-white border-gray-200 text-gray-800 placeholder-gray-400 focus:border-blue-600 focus:bg-white focus:outline-none focus:ring-blue-600',
                    'dark' => 'bg-gray-700 border-gray-600 text-gray-300 placeholder-gray-500 hover:border-gray-500 focus:border-blue-600 focus:bg-gray-700 focus:outline-none focus:ring-blue-600',
                    'light-dark' => [
                        'bg-white border-gray-200 text-gray-800 placeholder-gray-400 focus:border-blue-600 focus:bg-white focus:outline-none focus:ring-blue-600',
                        'dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:placeholder-gray-500 dark:hover:border-gray-500 dark:focus:border-blue-600 dark:focus:bg-gray-700 dark:focus:outline-none dark:focus:ring-blue-600',
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
            'style' => [
                'root' => 'block w-full border appearance-none rounded-md',
            ],
            'props' => [
                'size' => 'md',
                'color' => 'light-dark',
                'maxHeight' => 'md',
            ],
            'options' => [
                'color' => [
                    'light' => 'bg-white border-gray-200 text-gray-800 placeholder-gray-400 focus:border-blue-600 focus:bg-white focus:outline-none focus:ring-blue-600',
                    'dark' => 'bg-gray-700 border-gray-600 text-gray-300 placeholder-gray-500 hover:border-gray-500 focus:border-blue-600 focus:bg-gray-700 focus:outline-none focus:ring-blue-600',
                    'light-dark' => [
                        'bg-white border-gray-200 text-gray-800 placeholder-gray-400 focus:border-blue-600 focus:bg-white focus:outline-none focus:ring-blue-600',
                        'dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:placeholder-gray-500 dark:hover:border-gray-500 dark:focus:border-blue-600 dark:focus:bg-gray-700 dark:focus:outline-none dark:focus:ring-blue-600',
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
            'style' => [
                'root' => 'block w-full border appearance-none cursor-pointer rounded-md',
            ],
            'props' => [
                'color' => 'light-dark',
                'size' => 'md',
            ],
            'options' => [
                'color' => [
                    'light' => 'bg-white border-gray-200 text-gray-800 placeholder-gray-400 focus:border-blue-600 focus:bg-white focus:outline-none focus:ring-blue-600',
                    'dark' => 'bg-gray-700 border-gray-600 text-gray-300 placeholder-gray-500 hover:border-gray-500 focus:border-blue-600 focus:bg-gray-700 focus:outline-none focus:ring-blue-600',
                    'light-dark' => [
                        'bg-white border-gray-200 text-gray-800 placeholder-gray-400 focus:border-blue-600 focus:bg-white focus:outline-none focus:ring-blue-600',
                        'dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:placeholder-gray-500 dark:hover:border-gray-500 dark:focus:border-blue-600 dark:focus:bg-gray-700 dark:focus:outline-none dark:focus:ring-blue-600',
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
            'style' => [
                'root' => 'rounded cursor-pointer',
            ],
            'props' => [
                'color' => 'light-dark',
                'size' => 'md',
            ],
            'options' => [
                'color' => [
                    'light' => 'text-blue-500 bg-white border-gray-200 focus:ring-sky-500 focus:border-sky-500 focus:ring-offset-white',
                    'dark' => 'text-blue-500 bg-gray-800 border-gray-600 focus:ring-sky-500 focus:border-sky-500 focus:ring-offset-gray-800 checked:bg-blue-500 checked:border-sky-600',
                    'light-dark' => [
                        'text-blue-500 bg-white border-gray-200 focus:ring-sky-500 focus:border-sky-500 focus:ring-offset-white',
                        'dark:text-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:focus:ring-sky-500 dark:focus:border-sky-500 dark:focus:ring-offset-gray-800 dark:checked:bg-blue-500 dark:checked:border-sky-600',
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
            'style' => [
                'root' => '',
            ],
            'props' => [
                'color' => 'light-dark',
                'size' => 'md',
            ],
            'options' => [
                'color' => [
                    'light' => 'text-blue-500 bg-white border-gray-200 focus:ring-sky-500 focus:border-sky-500 focus:ring-offset-white',
                    'dark' => 'text-blue-500 bg-gray-800 border-gray-600 focus:ring-sky-500 focus:border-sky-500 focus:ring-offset-gray-800 checked:bg-blue-500 checked:border-sky-600',
                    'light-dark' => [
                        'text-blue-500 bg-white border-gray-200 focus:ring-sky-500 focus:border-sky-500 focus:ring-offset-white',
                        'dark:text-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:focus:ring-sky-500 dark:focus:border-sky-500 dark:focus:ring-offset-gray-800 dark:checked:bg-blue-500 dark:checked:border-sky-600',
                    ],
                ],
                'size' => [
                    'sm' => 'w-3 h-3',
                    'md' => 'w-4 h-4',
                    'lg' => 'w-6 h-6',
                ],
            ],
        ],
        // 'switch' => 'components.form.switch',
        // 'file' => 'components.form.file',

        // Dropdown
        'dropdown' => [
            'view' => 'components.dropdown.root',
            'style' => [
                'root' => 'relative',
                'trigger' => '',
                'container' => 'absolute z-50 shadow-xl mt-2 origin-top-right rounded-xl border ring-inset focus:outline-none p-1',
                'menu' => 'rounded-xl'
            ],
            'props' => [
                'size' => 'md',
                'align' => 'left',
                'color' => 'light-dark',
            ],
            'options' => [
                'color' => [
                    'light' => [
                        'container' => 'bg-white border-gray-200',
                    ],
                    'dark' => [
                        'container' => 'bg-gray-800 border-gray-700',
                    ],
                    'light-dark' => [
                        'container' => [
                            'bg-white border-gray-200',
                            'dark:bg-gray-800 dark:border-gray-700',
                        ],
                    ],
                ],
                'size' => [
                    'sm' => [
                        'container' => 'min-w-36',
                    ],
                    'md' => [
                        'container' => 'min-w-48',
                    ],
                ],
                'align' => [
                    'left' => [
                        'container' => 'left-0'
                    ],
                    'right' => [
                        'container' => 'right-0',
                    ],
                ],
            ],
        ],
        'dropdown-item' => [
            'view' => 'components.dropdown.item',
            'style' => [
                'root' => 'block w-full text-left rounded-md',
            ],
            'props' => [
                'as' => 'button',
                'color' => 'light-dark',
                'size' => 'md',
                'divider' => 'none',
            ],
            'options' => [
                'color' => [
                    'light' => 'text-gray-700 hover:text-gray-900 hover:bg-gray-100',
                    'dark' => 'text-gray-300 hover:text-gray-100 hover:bg-gray-700',
                    'light-dark' => [
                        'text-gray-700 hover:text-gray-900 hover:bg-gray-100',
                        'dark:text-gray-300 dark:hover:text-gray-100 dark:hover:bg-gray-700',
                    ],
                ],
                'size' => [
                    'md' => 'px-4 py-2 text-sm',
                ],
                'divider' => [
                    'none' => '',
                    'top' => 'border-t border-white/5',
                    'bottom' => 'border-b border-white/5',
                ],
            ],
        ],

        // Button
        'button' => [
            'view' => 'components.button.root',
            'style' => [
                'root' => 'inline-flex border items-center justify-center gap-2 font-semibold transition-all rounded-lg disabled:opacity-50',
            ],
            'props' => [
                'as' => 'button',
                'color' => 'secondary',
                'size' => 'md',
            ],
            'options' => [
                'color' => [
                    'primary-light' => 'text-white bg-gray-800 border-gray-700 hover:bg-opacity-80',
                    'primary-dark' => 'bg-gray-500 border-gray-400 hover:bg-opacity-80',
                    'primary' => [
                        'text-white bg-gray-800 border-gray-700 hover:bg-opacity-80',
                        'dark:bg-gray-500 dark:border-gray-400 dark:hover:bg-opacity-80'
                    ],

                    'secondary-light' => 'text-gray-700 bg-white border-gray-200 hover:bg-gray-50',
                    'secondary-dark' => 'text-white bg-transparent border-gray-600 hover:bg-gray-600/20',
                    'secondary' => [
                        'text-gray-700 bg-white border-gray-200 hover:bg-gray-50',
                        'dark:text-white dark:bg-transparent dark:border-gray-600 dark:hover:bg-gray-600/20',
                    ],
                    
                    'transparent-light' => 'text-white bg-transparent border-transparent hover:border-gray-200',
                    'transparent-dark' => 'text-gray-300 bg-transparent border-transparent hover:border-gray-600',
                    'transparent' => [
                        'text-white bg-transparent border-transparent hover:border-gray-200',
                        'dark:text-gray-300 dark:bg-transparent dark:border-transparent dark:hover:border-gray-600',
                    ],
                ],
                'size' => [
                    'xs' => 'px-1 py-1 text-xs h-6',
                    'sm' => 'px-3 py-1 text-sm h-7',
                    'md' => 'px-4 py-2 text-sm h-9',
                    'lg' => 'px-5 py-3 text-md h-11',
                    'xl' => 'px-6 py-4 text-md h-13',
                ],
            ],
        ],
        'button-group' => [
            'view' => 'components.button-group.root',
            'style' => [
                'root' => 'inline-flex rounded-md isolate group',
            ],
            'props' => [
                'as' => 'div',
            ],
        ],
        'button-group-item' => [
            'view' => 'components.button-group.item',
            'style' => [
                'root' => 'rounded-none first:rounded-l-md last:rounded-r-md',
            ],
            'props' => [
                'as' => 'button',
                'size' => 'md',
            ],
            'options' => [],
        ],

        // Dialog
        'modal' => [
            'view' => 'components.modal.root',
            'style' => [
                'root' => 'relative w-full overflow-y-auto shadow-2xl rounded-3xl p-[0.060rem]',
                'overlay' => 'fixed inset-0 bg-neutral-950 bg-opacity-50',
                'container' => 'rounded-3xl p-10',
            ],
            'props' => [
                'size' => 'md',
                'color' => 'light-dark',
                'closable' => true,
            ],
            'options' => [
                'size' => [
                    'xs' => 'max-w-xs',
                    'sm' => 'max-w-sm',
                    'md' => 'max-w-md',
                    'lg' => 'max-w-lg',
                    'xl' => 'max-w-xl',
                    '2xl' => 'max-w-2xl',
                ],
                'color' => [
                    'light' => 'bg-white border-gray-200',
                    'dark' => 'bg-gray-800 border-gray-700',
                    'light-dark' => [
                        'bg-white border-gray-200',
                        'dark:bg-gray-800 dark:border-gray-700',
                    ],
                    'gray' => 'bg-gradient-to-b from-neutral-900 via-neutral-900/5',
                    'white' => 'border shadow-sm rounded-xl bg-white border-gray-200',
                ],
            ],
        ],
        'modal-close' => [
            'view' => 'components.modal.close',
            'style' => [
                'root' => 'flex justify-end',
            ],
            'props' => [
                'as' => 'div',
            ],
        ],

        // Alert
        'alert' => [
            'view' => 'components.alert.root',
            'style' => [
                'root' => 'shadow-sm rounded-xl border',
            ],
            'props' => [
                'as' => 'div',
                'color' => 'light-dark',
                'size' => 'md',
            ],
            'options' => [
                'color' => [
                    'light' => 'bg-white text-gray-700 border-gray-200',
                    'dark' => 'bg-gray-800 text-gray-300 border-gray-700',
                    'light-dark' => [
                        'bg-white text-gray-700 border-gray-200',
                        'dark:bg-gray-800 dark:text-gray-300 dark:border-gray-700',
                    ],
                    
                    'green-light' => 'bg-green-100 text-green-500 border-green-200',
                    'green-dark' => 'bg-green-700 text-green-300 border-green-600',
                    'green' => [
                        'bg-green-100 text-green-500 border-green-200',
                        'dark:bg-green-700 dark:text-green-300 dark:border-green-600',
                    ],

                    'yellow-light' => 'bg-yellow-100 text-yellow-500 border-yellow-200',
                    'yellow-dark' => 'bg-yellow-700 text-yellow-300 border-yellow-600',
                    'yellow' => [
                        'bg-yellow-100 text-yellow-500 border-yellow-200',
                        'dark:bg-yellow-700 dark:text-yellow-300 dark:border-yellow-600',
                    ],
                ],
                'size' => [
                    'sm' => 'px-4 py-2 text-sm',
                    'md' => 'px-4 py-3 text-base',
                    'lg' => 'px-6 py-4 text-lg',
                ],
            ],
        ],

        // Table
        'table' => [
            'view' => 'components.table.root',
            'style' => [
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
            'style' => [
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
            'style' => [
                'root' => 'text-left text-sm font-semibold border-b',
            ],
            'props' => [
                'as' => 'th',
                'align' => 'inherit',
                'color' => 'light-dark',
                'size' => 'sm',
            ],
            'options' => [
                'color' => [
                    'light' => 'text-gray-500 border-gray-200',
                    'dark' => 'text-gray-300 border-gray-700',
                    'light-dark' => [
                        'text-gray-500 border-gray-200',
                        'dark:text-gray-300 dark:border-gray-700',
                    ],
                ],
                'size' => [
                    'sm' => 'py-3',
                    'md' => 'py-4',
                    'lg' => 'py-5',
                ],
                'align' => [
                    'inherit' => '',
                    'left' => 'text-left',
                    'center' => 'text-center',
                    'right' => 'text-right',
                ],
            ],
        ],
        'td' => [
            'view' => 'components.table.td',
            'style' => [
                'root' => 'relative whitespace-nowrap text-sm border-b',
                'href' => 'absolute inset-0 focus:outline-none',
            ],
            'props' => [
                'as' => 'td',
                'align' => 'inherit',
                'color' => 'light-dark',
                'size' => 'sm',
                'href' => null,
            ],
            'options' => [
                'color' => [
                    'light' => 'text-gray-700 border-gray-200',
                    'dark' => 'text-gray-300 border-gray-700',
                    'light-dark' => [
                        'text-gray-700 border-gray-200',
                        'dark:text-gray-400 dark:border-gray-700',
                    ],
                ],
                'size' => [
                    'sm' => 'py-3',
                    'md' => 'py-4',
                    'lg' => 'py-5',
                ],
                'align' => [
                    'inherit' => '',
                    'left' => 'text-left',
                    'center' => 'text-center',
                    'right' => 'text-right',
                ],
            ],
        ],

        // Accordian
        'accordion' => [
            'view' => 'components.accordion.root',
            'style' => [
                'root' => 'relative mx-auto border rounded-xl divide-y divide-gray-600',
            ],
            'props' => [
                'color' => 'light-dark',
            ],
            'options' => [
                'color' => [
                    'light' => 'divide-gray-200 border-gray-200',
                    'dark' => 'divide-gray-700 border-gray-700',
                    'light-dark' => [
                        'divide-gray-200 border-gray-200',
                        'dark:divide-gray-700 dark:border-gray-700',
                    ],
                ],
            ],
        ],
        'accordion-item' => [
            'view' => 'components.accordion.item',
            'style' => [
                'root' => 'relative text-white border-b last:border-0',
                'button' => 'flex items-center justify-between group w-full px-5 py-3 text-left',
                'text' => 'text-base duration-200 group-hover:text-blue-400',
                'icon' => 'inline w-5 h-5 ml-4 transition-transform duration-200 transform rotate-180 group-hover:text-blue-400',
                'content' => 'px-5 pb-5',
            ],
            'props' => [
                'color' => 'light-dark',
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
                    'light-dark' => [
                        'root' => 'border-gray-200 dark:border-gray-700',
                        'button' => 'text-gray-700 dark:text-gray-300',
                    ],
                ],
            ],
        ],

        // Tabs
        'tabs' => [
            'view' => 'components.tabs.root',
            'style' => [
                'root' => 'flex list-none font-medium',
            ],
            'props' => [
                'orientation' => 'horizontal',
                'color' => 'light-dark',
            ],
            'options' => [
                'color' => [
                    'light' => 'border-gray-200 text-gray-600',
                    'dark' => 'border-gray-700 text-gray-400',
                    'light-dark' => [
                        'border-gray-200 text-gray-600',
                        'dark:border-gray-600 dark:text-gray-400',
                    ],
                ],
                'orientation' => [
                    'horizontal' => 'items-stretch space-x-3 border-b',
                    'vertical' => 'flex-col items-stretch space-y-0.5 border-l',
                ],
            ],
        ],
        'tab' => [
            'view' => 'components.tabs.item',
            'style' => [
                'root' => 'inline-flex transition-colors duration-200',
            ],
            'props' => [
                'as' => 'a',
                'orientation' => 'horizontal',
                'color' => 'light-dark',
                'active' => false,
                'disabled' => false,
            ],
            'options' => [
                'color' => [
                    'light' => [
                        'active' => 'border-sky-400 text-sky-400',
                        'not-active' => 'border-transparent hover:border-gray-600 hover:text-gray-600',
                    ],
                    'dark' => [
                        'active' => 'border-gray-300 text-gray-300',
                        'not-active' => 'border-transparent hover:border-gray-300 hover:text-gray-300',
                    ],
                    'light-dark' => [
                        'active' => 'border-sky-400 text-sky-400 dark:border-sky-400 dark:text-sky-400',
                        'not-active' => 'border-transparent hover:border-gray-600 hover:text-gray-600 dark:hover:border-gray-300 dark:hover:text-gray-300',
                    ],
                ],
                'orientation' => [
                    'horizontal' => 'px-4 py-2 text-sm border-b -mb-px',
                    'vertical' => 'px-4 py-2 text-sm border-l -ml-px',
                ],
            ],
        ],

        // Breadcrumbs
        'breadcrumbs' => [
            'view' => 'components.breadcrumbs.root',
            'style' => [
                'root' => 'flex items-center space-x-2',
                'container' => 'flex',
            ],
            'props' => [
                'as' => 'nav',
            ],
        ],
        'breadcrumb' => [
            'view' => 'components.breadcrumbs.item',
            'style' => [
                'root' => 'text-sm ml-2',
                'container' => 'flex items-center',
                'icon' => 'flex-shrink-0 w-5 h-5 group-first:hidden',
            ],
            'props' => [
                'color' => 'light-dark',
            ],
            'options' => [
                'color' => [
                    'light' => [
                        'root' => 'text-gray-600 hover:text-gray-800 group-last:text-gray-800',
                        'icon' => 'text-gray-400',
                    ],
                    'dark' => [
                        'root' => 'text-gray-400 hover:text-gray-200 group-last:text-gray-200',
                        'icon' => 'text-gray-600',
                    ],
                    'light-dark' => [
                        'root' => 'text-gray-600 hover:text-gray-800 group-last:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200 dark:group-last:text-gray-200',
                        'icon' => 'text-gray-400 dark:text-gray-600',
                    ],
                ],
            ],
        ],

        // Navbar
        'navbar' => [
            'view' => 'components.navbar.root',
            'style' => [
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
                'color' => 'light-dark',
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
                    'light-dark' => [
                        'root' => 'border-b border-gray-200 bg-white text-gray-800 dark:border-gray-600 dark:bg-gray-700 dark:text-white',
                    ],
                ],
            ],
        ],
        'navbar-item' => [
            'view' => 'components.navbar.item',
            'style' => [
                'root' => 'inline-flex items-center text-sm border border-transparent transition duration-200 ease-in-out',
            ],
            'props' => [
                'as' => 'a',
                'color' => 'light-dark',
            ],
            'options' => [
                'color' => [
                    'light' => 'rounded-full px-3 py-1 text-gray-700 hover:bg-gray-100',
                    'dark' => 'rounded-full px-3 py-1 text-gray-300 hover:bg-gray-800/50',
                    'light-dark' => [
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

        // Sidebar
        'sidebar' => [
            'view' => 'components.sidebar.root',
            'style' => [
                'root' => '',
                'overlay' => 'inset-0 z-10 fixed lg:relative',
                'mobile-navbar' => 'h-11 flex lg:hidden items-center z-50 p-2 mx-auto',
                'burger' => 'flex items-center gap-x-3 py-1.5 px-2 text-sm/6 rounded-md',
                'burger-icon' => 'h-7 w-7',
                'container' => 'h-full fixed z-20 top-0 transition-transform duration-300 ease-in-out transform',
                'container-open' => 'translate-x-0',
                'container-hidden' => '-translate-x-full lg:translate-x-0',
                'close' => 'absolute top-2 -right-8 z-30 lg:hidden',
                'content' => 'p-5 h-full overflow-y-auto',
                'open-body' => 'overflow-hidden lg:overflow-auto',
            ],
            'props' => [
                'as' => 'nav',
                'color' => 'light-dark',
                'size' => 'fixed',
            ],
            'options' => [
                'size' => [
                    'inline' => [
                        'root' => 'lg:w-60 lg:flex-shrink-0',
                        'container' => 'min-w-60 left-0 lg:left-auto',
                    ],
                    'fixed' => [
                        'root' => 'lg:w-60',
                        'container' => 'min-w-60 left-0',
                    ],
                ],
                'color' => [
                    'light' => [
                        'overlay' => 'bg-gray-500 bg-opacity-50',
                        'burger' => 'font-medium text-gray-700 hover:bg-gray-100',
                        'container' => 'bg-gray-100',
                        'close' => 'text-gray-700',
                    ],
                    'dark' => [
                        'overlay' => 'bg-gray-900 bg-opacity-50',
                        'burger' => 'font-medium text-gray-300 hover:bg-gray-700',
                        'container' => 'bg-gray-900',
                        'close' => 'text-gray-300',
                    ],
                    'light-dark' => [
                        'overlay' => 'bg-gray-500 bg-opacity-50 dark:bg-gray-900 dark:bg-opacity-50',
                        'burger' => 'font-medium text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700',
                        'container' => 'bg-gray-100 dark:bg-gray-900',
                        'close' => 'text-gray-700 dark:text-gray-300',
                    ],
                ],
            ],
        ],
        'sidebar-item' => [
            'view' => 'components.sidebar.item',
            'style' => [
                'root' => 'flex items-center gap-x-3 font-semibold',
            ],
            'props' => [
                'as' => 'a',
                'color' => 'light-dark',
                'size' => 'md',
            ],
            'options' => [
                'color' => [
                    'light' => 'text-gray-500 hover:text-gray-700  rounded-md',
                    'dark' => 'text-gray-400 hover:text-gray-300 rounded-md',
                    'light-dark' => [
                        'text-gray-500 hover:text-gray-700 rounded-md',
                        'dark:text-gray-400 dark:hover:text-gray-300 dark:rounded-md',
                    ],

                    'active-light' => 'text-sky-400 rounded-md',
                    'active-dark' => 'text-sky-400 rounded-md',
                    'active' => [
                        'text-sky-400 rounded-md',
                        'dark:text-sky-400 dark:rounded-md',
                    ],

                    'burger-light' => 'text-gray-700 hover:bg-gray-100 rounded-md',
                    'burger-dark' => 'text-gray-300 hover:bg-gray-700 rounded-md',
                    'burger' => [
                        'text-gray-700 hover:bg-gray-100 rounded-md',
                        'dark:text-gray-300 dark:hover:bg-gray-700 dark:rounded-md',
                    ],
                ],
                'size' => [
                    'md' => 'py-1.5 text-sm/6',
                ],
            ],
        ],
        'sidebar-icon' => [
            'view' => 'components.sidebar.icon',
            'style' => [
                'root' => 'flex-none border rounded-md p-1.5',
            ],
            'props' => [
                'as' => 'svg',
                'color' => 'light-dark',
                'size' => 'md',
            ],
            'options' => [
                'color' => [
                    'light' => 'border-gray-200 bg-gray-100',
                    'dark' => 'dark:border-gray-700 dark:bg-gray-800',
                    'light-dark' => [
                        'border-gray-200 bg-gray-100',
                        'dark:border-gray-700 dark:bg-gray-800',
                    ],
                ],
                'size' => [
                    'md' => 'size-8 p-1.5',
                ],
            ],
        ],

        // Spinner
        'spinner' => [
            'view' => 'components.spinner.root',
            'style' => [
                'root' => 'animate-spin text-center',
            ],
            'props' => [
                'size' => 'md',
                'color' => 'light-dark',
            ],
            'options' => [
                'size' => [
                    'xs' => 'w-4 h-4',
                    'sm' => 'w-6 h-6',
                    'md' => 'w-8 h-8',
                    'lg' => 'w-10 h-10',
                    'xl' => 'w-12 h-12',
                ],
                'color' => [
                    'light' => 'text-gray-200 fill-blue-500',
                    'dark' => 'text-gray-200 fill-blue-400',
                    'light-dark' => [
                        'text-gray-200 fill-blue-500',
                        'dark:text-gray-200 dark:fill-blue-400',
                    ],
                ],
            ],
        ],
    ],
];
