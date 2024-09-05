<?php

return [
    'text' => [
        'view' => 'components.typography.text',
        'classes' => [
            'root' => '',
        ],
        'props' => [
            'as' => 'p',
            'color' => 'default',
            'size' => 'md',
            'align' => 'none',
            'weight' => 'none',
        ],
        'options' => [
            'color' => [
                'default' => ['text-stone-800', 'dark:text-gray-400'],
                'slate' => ['text-slate-500', 'dark:text-slate-400'],
                'gray' => ['text-gray-500', 'dark:text-gray-400'],
                'zinc' => ['text-zinc-500', 'dark:text-zinc-400'],
                'neutral' => ['text-neutral-500', 'dark:text-neutral-400'],
                'stone' => ['text-stone-500', 'dark:text-stone-400'],
                'red' => ['text-red-500', 'dark:text-red-400'],
                'orange' => ['text-orange-500', 'dark:text-orange-400'],
                'amber' => ['text-amber-500', 'dark:text-amber-400'],
                'yellow' => ['text-yellow-500', 'dark:text-yellow-400'],
                'lime' => ['text-lime-500', 'dark:text-lime-400'],
                'green' => ['text-green-500', 'dark:text-green-400'],
                'emerald' => ['text-emerald-500', 'dark:text-emerald-400'],
                'teal' => ['text-teal-500', 'dark:text-teal-400'],
                'cyan' => ['text-cyan-500', 'dark:text-cyan-400'],
                'sky' => ['text-sky-500', 'dark:text-sky-400'],
                'blue' => ['text-blue-500', 'dark:text-blue-400'],
                'indigo' => ['text-indigo-500', 'dark:text-indigo-400'],
                'violet' => ['text-violet-500', 'dark:text-violet-400'],
                'purple' => ['text-purple-500', 'dark:text-purple-400'],
                'fuchsia' => ['text-fuchsia-500', 'dark:text-fuchsia-400'],
                'pink' => ['text-pink-500', 'dark:text-pink-400'],
                'rose' => ['text-rose-500', 'dark:text-rose-400'],
                'none' => '',
            ],
            'size' => [
                'xs' => 'text-xs',
                'sm' => 'text-sm',
                'md' => 'text-base',
                'lg' => 'text-lg',
                'xl' => 'text-xl',
                '2xl' => 'text-2xl',
                'none' => '',
            ],
            'align' => [
                'none' => '',
                'center' => 'text-center',
                'left' => 'text-left',
                'right' => 'text-right',
            ],
            'weight' => [
                'none' => '',
                'normal' => 'font-normal',
                'medium' => 'font-medium',
                'bold' => 'font-bold',
            ],
        ],
    ],
    'title' => [
        'view' => 'components.typography.title',
        'classes' => [
            'root' => '',
        ],
        'props' => [
            'as' => 'h1',
            'color' => 'default',
            'size' => 'xl',
            'align' => 'none',
            'weight' => 'medium',
        ],
        'options' => [
            'color' => [
                'default' => ['text-stone-800', 'dark:text-gray-100'],
                'slate' => ['text-slate-800', 'dark:text-slate-100'],
                'gray' => ['text-gray-800', 'dark:text-gray-100'],
                'zinc' => ['text-zinc-800', 'dark:text-zinc-100'],
                'neutral' => ['text-neutral-800', 'dark:text-neutral-100'],
                'stone' => ['text-stone-800', 'dark:text-stone-100'],
                'red' => ['text-red-800', 'dark:text-red-100'],
                'orange' => ['text-orange-800', 'dark:text-orange-100'],
                'amber' => ['text-amber-800', 'dark:text-amber-100'],
                'yellow' => ['text-yellow-800', 'dark:text-yellow-100'],
                'lime' => ['text-lime-800', 'dark:text-lime-100'],
                'green' => ['text-green-800', 'dark:text-green-100'],
                'emerald' => ['text-emerald-800', 'dark:text-emerald-100'],
                'teal' => ['text-teal-800', 'dark:text-teal-100'],
                'cyan' => ['text-cyan-800', 'dark:text-cyan-100'],
                'sky' => ['text-sky-800', 'dark:text-sky-100'],
                'blue' => ['text-blue-800', 'dark:text-blue-100'],
                'indigo' => ['text-indigo-800', 'dark:text-indigo-100'],
                'violet' => ['text-violet-800', 'dark:text-violet-100'],
                'purple' => ['text-purple-800', 'dark:text-purple-100'],
                'fuchsia' => ['text-fuchsia-800', 'dark:text-fuchsia-100'],
                'pink' => ['text-pink-800', 'dark:text-pink-100'],
                'rose' => ['text-rose-800', 'dark:text-rose-100'],
                'none' => '',
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
                'none' => '',
            ],
            'align' => [
                'center' => 'text-center',
                'left' => 'text-left',
                'right' => 'text-right',
                'none' => '',
            ],
            'weight' => [
                'normal' => 'font-normal',
                'medium' => 'font-medium',
                'semibold' => 'font-semibold',
                'bold' => 'font-bold',
                'none' => '',
            ],
        ],
    ],
    'link' => [
        'view' => 'components.typography.link',
        'classes' => [
            'root' => 'transition underline',
        ],
        'props' => [
            'as' => 'a',
            'color' => 'default',
            'size' => 'md',
            'align' => 'none',
        ],
        'options' => [
            'color' => [
                'default' => ['text-blue-600 hover:text-blue-800 decoration-blue-600/50', 'dark:text-blue-400 dark:hover:text-blue-300 dark:decoration-blue-400/50'],
                'slate' => ['text-slate-600 hover:text-slate-800 decoration-slate-600/50', 'dark:text-slate-400 dark:hover:text-slate-300 dark:decoration-slate-400/50'],
                'gray' => ['text-gray-600 hover:text-gray-800 decoration-gray-600/50', 'dark:text-gray-400 dark:hover:text-gray-300 dark:decoration-gray-400/50'],
                'zinc' => ['text-zinc-600 hover:text-zinc-800 decoration-zinc-600/50', 'dark:text-zinc-400 dark:hover:text-zinc-300 dark:decoration-zinc-400/50'],
                'neutral' => ['text-neutral-600 hover:text-neutral-800 decoration-neutral-600/50', 'dark:text-neutral-400 dark:hover:text-neutral-300 dark:decoration-neutral-400/50'],
                'stone' => ['text-stone-600 hover:text-stone-800 decoration-stone-600/50', 'dark:text-stone-400 dark:hover:text-stone-300 dark:decoration-stone-400/50'],
                'red' => ['text-red-600 hover:text-red-800 decoration-red-600/50', 'dark:text-red-400 dark:hover:text-red-300 dark:decoration-red-400/50'],
                'orange' => ['text-orange-600 hover:text-orange-800 decoration-orange-600/50', 'dark:text-orange-400 dark:hover:text-orange-300 dark:decoration-orange-400/50'],
                'amber' => ['text-amber-600 hover:text-amber-800 decoration-amber-600/50', 'dark:text-amber-400 dark:hover:text-amber-300 dark:decoration-amber-400/50'],
                'yellow' => ['text-yellow-600 hover:text-yellow-800 decoration-yellow-600/50', 'dark:text-yellow-400 dark:hover:text-yellow-300 dark:decoration-yellow-400/50'],
                'lime' => ['text-lime-600 hover:text-lime-800 decoration-lime-600/50', 'dark:text-lime-400 dark:hover:text-lime-300 dark:decoration-lime-400/50'],
                'green' => ['text-green-600 hover:text-green-800 decoration-green-600/50', 'dark:text-green-400 dark:hover:text-green-300 dark:decoration-green-400/50'],
                'emerald' => ['text-emerald-600 hover:text-emerald-800 decoration-emerald-600/50', 'dark:text-emerald-400 dark:hover:text-emerald-300 dark:decoration-emerald-400/50'],
                'teal' => ['text-teal-600 hover:text-teal-800 decoration-teal-600/50', 'dark:text-teal-400 dark:hover:text-teal-300 dark:decoration-teal-400/50'],
                'cyan' => ['text-cyan-600 hover:text-cyan-800 decoration-cyan-600/50', 'dark:text-cyan-400 dark:hover:text-cyan-300 dark:decoration-cyan-400/50'],
                'sky' => ['text-sky-600 hover:text-sky-800 decoration-sky-600/50', 'dark:text-sky-400 dark:hover:text-sky-300 dark:decoration-sky-400/50'],
                'blue' => ['text-blue-600 hover:text-blue-800 decoration-blue-600/50', 'dark:text-blue-400 dark:hover:text-blue-300 dark:decoration-blue-400/50'],
                'indigo' => ['text-indigo-600 hover:text-indigo-800 decoration-indigo-600/50', 'dark:text-indigo-400 dark:hover:text-indigo-300 dark:decoration-indigo-400/50'],
                'violet' => ['text-violet-600 hover:text-violet-800 decoration-violet-600/50', 'dark:text-violet-400 dark:hover:text-violet-300 dark:decoration-violet-400/50'],
                'purple' => ['text-purple-600 hover:text-purple-800 decoration-purple-600/50', 'dark:text-purple-400 dark:hover:text-purple-300 dark:decoration-purple-400/50'],
                'fuchsia' => ['text-fuchsia-600 hover:text-fuchsia-800 decoration-fuchsia-600/50', 'dark:text-fuchsia-400 dark:hover:text-fuchsia-300 dark:decoration-fuchsia-400/50'],
                'pink' => ['text-pink-600 hover:text-pink-800 decoration-pink-600/50', 'dark:text-pink-400 dark:hover:text-pink-300 dark:decoration-pink-400/50'],
                'rose' => ['text-rose-600 hover:text-rose-800 decoration-rose-600/50', 'dark:text-rose-400 dark:hover:text-rose-300 dark:decoration-rose-400/50'],
                'none' => ''
            ],
            'size' => [
                'xs' => 'text-xs',
                'sm' => 'text-sm',
                'md' => 'text-base',
                'lg' => 'text-lg',
                'xl' => 'text-xl',
                '2xl' => 'text-2xl',
                'none' => '',
            ],
            'align' => [
                'center' => 'text-center',
                'left' => 'text-left',
                'right' => 'text-right',
                'none' => '',
            ],
        ],
    ],
    'badge' => [
        'view' => 'components.typography.badge',
        'classes' => [
            'root' => 'inline-flex items-center justify-center font-semibold gap-1 transition-all rounded-full',
        ],
        'props' => [
            'as' => 'span',
            'size' => 'md',
            'color' => 'default',
        ],
        'options' => [
            'color' => [
                'default' => ['text-gray-700 bg-gray-100', 'dark:text-gray-300 dark:bg-gray-700'],
                'slate' => ['text-slate-700 bg-slate-100', 'dark:text-slate-300 dark:bg-slate-700'],
                'gray' => ['text-gray-700 bg-gray-100', 'dark:text-gray-300 dark:bg-gray-700'],
                'zinc' => ['text-zinc-700 bg-zinc-100', 'dark:text-zinc-300 dark:bg-zinc-700'],
                'neutral' => ['text-neutral-700 bg-neutral-100', 'dark:text-neutral-300 dark:bg-neutral-700'],
                'stone' => ['text-stone-700 bg-stone-100', 'dark:text-stone-300 dark:bg-stone-700'],
                'red' => ['text-red-700 bg-red-100', 'dark:text-red-300 dark:bg-red-700'],
                'orange' => ['text-orange-700 bg-orange-100', 'dark:text-orange-300 dark:bg-orange-700'],
                'amber' => ['text-amber-700 bg-amber-100', 'dark:text-amber-300 dark:bg-amber-700'],
                'yellow' => ['text-yellow-700 bg-yellow-100', 'dark:text-yellow-300 dark:bg-yellow-700'],
                'lime' => ['text-lime-700 bg-lime-100', 'dark:text-lime-300 dark:bg-lime-700'],
                'green' => ['text-green-700 bg-green-100', 'dark:text-green-300 dark:bg-green-700'],
                'emerald' => ['text-emerald-700 bg-emerald-100', 'dark:text-emerald-300 dark:bg-emerald-700'],
                'teal' => ['text-teal-700 bg-teal-100', 'dark:text-teal-300 dark:bg-teal-700'],
                'cyan' => ['text-cyan-700 bg-cyan-100', 'dark:text-cyan-300 dark:bg-cyan-700'],
                'sky' => ['text-sky-700 bg-sky-100', 'dark:text-sky-300 dark:bg-sky-700'],
                'blue' => ['text-blue-700 bg-blue-100', 'dark:text-blue-300 dark:bg-blue-700'],
                'indigo' => ['text-indigo-700 bg-indigo-100', 'dark:text-indigo-300 dark:bg-indigo-700'],
                'violet' => ['text-violet-700 bg-violet-100', 'dark:text-violet-300 dark:bg-violet-700'],
                'purple' => ['text-purple-700 bg-purple-100', 'dark:text-purple-300 dark:bg-purple-700'],
                'fuchsia' => ['text-fuchsia-700 bg-fuchsia-100', 'dark:text-fuchsia-300 dark:bg-fuchsia-700'],
                'pink' => ['text-pink-700 bg-pink-100', 'dark:text-pink-300 dark:bg-pink-700'],
                'rose' => ['text-rose-700 bg-rose-100', 'dark:text-rose-300 dark:bg-rose-700'],
                'none' => '',
            ],
            'size' => [
                'xs' => 'px-2 py-0.5 text-xs h-6',
                'sm' => 'px-2 py-1 text-sm h-7',
                'md' => 'px-4 py-2 text-base h-9',
                'lg' => 'px-5 py-3 text-lg h-11',
                'xl' => 'px-6 py-4 text-xl h-13',
                'none' => '',
            ],
        ],
    ],
    'list' => [
        'view' => 'components.typography.list',
        'classes' => [
            'root' => 'space-y-2',
        ],
        'props' => [
            'as' => 'ul',
            'type' => 'disc',
            'size' => 'md',
            'align' => 'inside',
            'color' => 'default',
        ],
        'options' => [
            'color' => [
                'default' => ['text-gray-700', 'dark:text-gray-300'],
                'slate' => ['text-slate-700', 'dark:text-slate-300'],
                'gray' => ['text-gray-700', 'dark:text-gray-300'],
                'zinc' => ['text-zinc-700', 'dark:text-zinc-300'],
                'neutral' => ['text-neutral-700', 'dark:text-neutral-300'],
                'stone' => ['text-stone-700', 'dark:text-stone-300'],
                'red' => ['text-red-700', 'dark:text-red-300'],
                'orange' => ['text-orange-700', 'dark:text-orange-300'],
                'amber' => ['text-amber-700', 'dark:text-amber-300'],
                'yellow' => ['text-yellow-700', 'dark:text-yellow-300'],
                'lime' => ['text-lime-700', 'dark:text-lime-300'],
                'green' => ['text-green-700', 'dark:text-green-300'],
                'emerald' => ['text-emerald-700', 'dark:text-emerald-300'],
                'teal' => ['text-teal-700', 'dark:text-teal-300'],
                'cyan' => ['text-cyan-700', 'dark:text-cyan-300'],
                'sky' => ['text-sky-700', 'dark:text-sky-300'],
                'blue' => ['text-blue-700', 'dark:text-blue-300'],
                'indigo' => ['text-indigo-700', 'dark:text-indigo-300'],
                'violet' => ['text-violet-700', 'dark:text-violet-300'],
                'purple' => ['text-purple-700', 'dark:text-purple-300'],
                'fuchsia' => ['text-fuchsia-700', 'dark:text-fuchsia-300'],
                'pink' => ['text-pink-700', 'dark:text-pink-300'],
                'rose' => ['text-rose-700', 'dark:text-rose-300'],
                'none' => '',
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
                'none' => '',
            ],
            'align' => [
                'inside' => 'list-inside',
                'outside' => 'list-outside',
                'none' => '',
            ],
        ],
    ],
    'caption' => [
        'view' => 'components.typography.caption',
        'classes' => [
            'root' => 'text-xs text-gray-500',
        ],
        'props' => [
            'as' => 'span',
            'size' => 'sm',
            'align' => 'none',
            'color' => 'default',
            'weight' => 'none',
        ],
        'options' => [
            'color' => [
                'default' => ['text-gray-500', 'dark:text-gray-400'],
                'slate' => ['text-slate-500', 'dark:text-slate-400'],
                'gray' => ['text-gray-500', 'dark:text-gray-400'],
                'zinc' => ['text-zinc-500', 'dark:text-zinc-400'],
                'neutral' => ['text-neutral-500', 'dark:text-neutral-400'],
                'stone' => ['text-stone-500', 'dark:text-stone-400'],
                'red' => ['text-red-500', 'dark:text-red-400'],
                'orange' => ['text-orange-500', 'dark:text-orange-400'],
                'amber' => ['text-amber-500', 'dark:text-amber-400'],
                'yellow' => ['text-yellow-500', 'dark:text-yellow-400'],
                'lime' => ['text-lime-500', 'dark:text-lime-400'],
                'green' => ['text-green-500', 'dark:text-green-400'],
                'emerald' => ['text-emerald-500', 'dark:text-emerald-400'],
                'teal' => ['text-teal-500', 'dark:text-teal-400'],
                'cyan' => ['text-cyan-500', 'dark:text-cyan-400'],
                'sky' => ['text-sky-500', 'dark:text-sky-400'],
                'blue' => ['text-blue-500', 'dark:text-blue-400'],
                'indigo' => ['text-indigo-500', 'dark:text-indigo-400'],
                'violet' => ['text-violet-500', 'dark:text-violet-400'],
                'purple' => ['text-purple-500', 'dark:text-purple-400'],
                'fuchsia' => ['text-fuchsia-500', 'dark:text-fuchsia-400'],
                'pink' => ['text-pink-500', 'dark:text-pink-400'],
                'rose' => ['text-rose-500', 'dark:text-rose-400'],
                'none' => '',
            ],
            'size' => [
                'xs' => 'text-xs',
                'sm' => 'text-sm',
                'md' => 'text-base',
                'lg' => 'text-lg',
                'xl' => 'text-xl',
                '2xl' => 'text-2xl',
                'none' => '',
            ],
            'align' => [
                'center' => 'text-center',
                'left' => 'text-left',
                'right' => 'text-right',
                'none' => '',
            ],
            'weight' => [
                'normal' => 'font-normal',
                'medium' => 'font-medium',
                'bold' => 'font-bold',
                'none' => '',
            ],
        ],
    ],
];