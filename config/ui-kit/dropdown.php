<?php

return [
    'dropdown' => [
        'view' => 'components.dropdown.root',
        'classes' => [
            'root' => 'relative',
            'trigger' => '',
            'container' => 'absolute z-50 shadow-xl mt-2 origin-top-right rounded-xl border ring-inset focus:outline-none p-1',
            'menu' => 'rounded-xl'
        ],
        'props' => [
            'size' => 'md',
            'align' => 'left',
            'color' => 'default',
        ],
        'options' => [
            'color' => [
                'default' => [
                    'container' => [
                        'bg-white border-gray-200',
                        'dark:bg-gray-800 dark:border-gray-700',
                    ],
                ],
            ],
            'size' => [
                'xs' => [
                    'container' => 'min-w-32',
                ],
                'sm' => [
                    'container' => 'min-w-36',
                ],
                'md' => [
                    'container' => 'min-w-48',
                ],
                'lg' => [
                    'container' => 'min-w-60',
                ],
                'xl' => [
                    'container' => 'min-w-72',
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
        'classes' => [
            'root' => 'block w-full text-left rounded-md',
        ],
        'props' => [
            'as' => 'button',
            'color' => 'default',
            'size' => 'md',
            'divider' => 'none',
        ],
        'options' => [
            'color' => [
                'default' => ['text-gray-700 hover:text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-gray-100 dark:hover:bg-gray-700'],
                'slate' => ['text-slate-700 hover:text-slate-900 hover:bg-slate-100 dark:text-slate-300 dark:hover:text-slate-100 dark:hover:bg-slate-700'],
                'gray' => ['text-gray-700 hover:text-gray-900 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-gray-100 dark:hover:bg-gray-700'],
                'zinc' => ['text-zinc-700 hover:text-zinc-900 hover:bg-zinc-100 dark:text-zinc-300 dark:hover:text-zinc-100 dark:hover:bg-zinc-700'],
                'neutral' => ['text-neutral-700 hover:text-neutral-900 hover:bg-neutral-100 dark:text-neutral-300 dark:hover:text-neutral-100 dark:hover:bg-neutral-700'],
                'stone' => ['text-stone-700 hover:text-stone-900 hover:bg-stone-100 dark:text-stone-300 dark:hover:text-stone-100 dark:hover:bg-stone-700'],
                'red' => ['text-red-700 hover:text-red-900 hover:bg-red-100 dark:text-red-300 dark:hover:text-red-100 dark:hover:bg-red-700'],
                'orange' => ['text-orange-700 hover:text-orange-900 hover:bg-orange-100 dark:text-orange-300 dark:hover:text-orange-100 dark:hover:bg-orange-700'],
                'amber' => ['text-amber-700 hover:text-amber-900 hover:bg-amber-100 dark:text-amber-300 dark:hover:text-amber-100 dark:hover:bg-amber-700'],
                'yellow' => ['text-yellow-700 hover:text-yellow-900 hover:bg-yellow-100 dark:text-yellow-300 dark:hover:text-yellow-100 dark:hover:bg-yellow-700'],
                'lime' => ['text-lime-700 hover:text-lime-900 hover:bg-lime-100 dark:text-lime-300 dark:hover:text-lime-100 dark:hover:bg-lime-700'],
                'green' => ['text-green-700 hover:text-green-900 hover:bg-green-100 dark:text-green-300 dark:hover:text-green-100 dark:hover:bg-green-700'],
                'emerald' => ['text-emerald-700 hover:text-emerald-900 hover:bg-emerald-100 dark:text-emerald-300 dark:hover:text-emerald-100 dark:hover:bg-emerald-700'],
                'teal' => ['text-teal-700 hover:text-teal-900 hover:bg-teal-100 dark:text-teal-300 dark:hover:text-teal-100 dark:hover:bg-teal-700'],
                'cyan' => ['text-cyan-700 hover:text-cyan-900 hover:bg-cyan-100 dark:text-cyan-300 dark:hover:text-cyan-100 dark:hover:bg-cyan-700'],
                'sky' => ['text-sky-700 hover:text-sky-900 hover:bg-sky-100 dark:text-sky-300 dark:hover:text-sky-100 dark:hover:bg-sky-700'],
                'blue' => ['text-blue-700 hover:text-blue-900 hover:bg-blue-100 dark:text-blue-300 dark:hover:text-blue-100 dark:hover:bg-blue-700'],
                'indigo' => ['text-indigo-700 hover:text-indigo-900 hover:bg-indigo-100 dark:text-indigo-300 dark:hover:text-indigo-100 dark:hover:bg-indigo-700'],
                'violet' => ['text-violet-700 hover:text-violet-900 hover:bg-violet-100 dark:text-violet-300 dark:hover:text-violet-100 dark:hover:bg-violet-700'],
                'purple' => ['text-purple-700 hover:text-purple-900 hover:bg-purple-100 dark:text-purple-300 dark:hover:text-purple-100 dark:hover:bg-purple-700'],
                'fuchsia' => ['text-fuchsia-700 hover:text-fuchsia-900 hover:bg-fuchsia-100 dark:text-fuchsia-300 dark:hover:text-fuchsia-100 dark:hover:bg-fuchsia-700'],
                'pink' => ['text-pink-700 hover:text-pink-900 hover:bg-pink-100 dark:text-pink-300 dark:hover:text-pink-100 dark:hover:bg-pink-700'],
                'rose' => ['text-rose-700 hover:text-rose-900 hover:bg-rose-100 dark:text-rose-300 dark:hover:text-rose-100 dark:hover:bg-rose-700'],
                'none' => '',
            ],
            'size' => [
                'md' => 'px-4 py-2 text-sm',
                'none' => '',
            ],
            'divider' => [
                'top' => 'border-t border-white/5',
                'bottom' => 'border-b border-white/5',
                'none' => '',
            ],
        ],
    ],
];
