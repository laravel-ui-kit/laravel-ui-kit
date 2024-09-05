<?php

return [
    'button' => [
        'view' => 'components.button.root',
        'classes' => [
            'root' => 'inline-flex border items-center justify-center gap-2 font-semibold transition-all rounded-lg disabled:opacity-50',
        ],
        'props' => [
            'as' => 'button',
            'color' => 'secondary',
            'size' => 'md',
        ],
        'options' => [
            'color' => [
                'primary' => ['text-white bg-gray-800 border-gray-700 hover:bg-opacity-80 dark:bg-gray-500 dark:border-gray-400 dark:hover:bg-opacity-80'],
                'secondary' => ['text-gray-700 bg-white border-gray-200 hover:bg-gray-50 dark:text-white dark:bg-transparent dark:border-gray-600 dark:hover:bg-gray-600/20'],
                'transparent' => ['text-gray-700 bg-transparent border-transparent hover:border-gray-200 dark:text-gray-300 dark:hover:border-gray-600'],
                'slate' => ['text-white bg-slate-600 border-slate-700 hover:bg-slate-700 dark:bg-slate-500 dark:border-slate-400 dark:hover:bg-slate-600'],
                'gray' => ['text-white bg-gray-600 border-gray-700 hover:bg-gray-700 dark:bg-gray-500 dark:border-gray-400 dark:hover:bg-gray-600'],
                'zinc' => ['text-white bg-zinc-600 border-zinc-700 hover:bg-zinc-700 dark:bg-zinc-500 dark:border-zinc-400 dark:hover:bg-zinc-600'],
                'neutral' => ['text-white bg-neutral-600 border-neutral-700 hover:bg-neutral-700 dark:bg-neutral-500 dark:border-neutral-400 dark:hover:bg-neutral-600'],
                'stone' => ['text-white bg-stone-600 border-stone-700 hover:bg-stone-700 dark:bg-stone-500 dark:border-stone-400 dark:hover:bg-stone-600'],
                'red' => ['text-white bg-red-600 border-red-700 hover:bg-red-700 dark:bg-red-500 dark:border-red-400 dark:hover:bg-red-600'],
                'orange' => ['text-white bg-orange-600 border-orange-700 hover:bg-orange-700 dark:bg-orange-500 dark:border-orange-400 dark:hover:bg-orange-600'],
                'amber' => ['text-white bg-amber-600 border-amber-700 hover:bg-amber-700 dark:bg-amber-500 dark:border-amber-400 dark:hover:bg-amber-600'],
                'yellow' => ['text-white bg-yellow-600 border-yellow-700 hover:bg-yellow-700 dark:bg-yellow-500 dark:border-yellow-400 dark:hover:bg-yellow-600'],
                'lime' => ['text-white bg-lime-600 border-lime-700 hover:bg-lime-700 dark:bg-lime-500 dark:border-lime-400 dark:hover:bg-lime-600'],
                'green' => ['text-white bg-green-600 border-green-700 hover:bg-green-700 dark:bg-green-500 dark:border-green-400 dark:hover:bg-green-600'],
                'emerald' => ['text-white bg-emerald-600 border-emerald-700 hover:bg-emerald-700 dark:bg-emerald-500 dark:border-emerald-400 dark:hover:bg-emerald-600'],
                'teal' => ['text-white bg-teal-600 border-teal-700 hover:bg-teal-700 dark:bg-teal-500 dark:border-teal-400 dark:hover:bg-teal-600'],
                'cyan' => ['text-white bg-cyan-600 border-cyan-700 hover:bg-cyan-700 dark:bg-cyan-500 dark:border-cyan-400 dark:hover:bg-cyan-600'],
                'sky' => ['text-white bg-sky-600 border-sky-700 hover:bg-sky-700 dark:bg-sky-500 dark:border-sky-400 dark:hover:bg-sky-600'],
                'blue' => ['text-white bg-blue-600 border-blue-700 hover:bg-blue-700 dark:bg-blue-500 dark:border-blue-400 dark:hover:bg-blue-600'],
                'indigo' => ['text-white bg-indigo-600 border-indigo-700 hover:bg-indigo-700 dark:bg-indigo-500 dark:border-indigo-400 dark:hover:bg-indigo-600'],
                'violet' => ['text-white bg-violet-600 border-violet-700 hover:bg-violet-700 dark:bg-violet-500 dark:border-violet-400 dark:hover:bg-violet-600'],
                'purple' => ['text-white bg-purple-600 border-purple-700 hover:bg-purple-700 dark:bg-purple-500 dark:border-purple-400 dark:hover:bg-purple-600'],
                'fuchsia' => ['text-white bg-fuchsia-600 border-fuchsia-700 hover:bg-fuchsia-700 dark:bg-fuchsia-500 dark:border-fuchsia-400 dark:hover:bg-fuchsia-600'],
                'pink' => ['text-white bg-pink-600 border-pink-700 hover:bg-pink-700 dark:bg-pink-500 dark:border-pink-400 dark:hover:bg-pink-600'],
                'rose' => ['text-white bg-rose-600 border-rose-700 hover:bg-rose-700 dark:bg-rose-500 dark:border-rose-400 dark:hover:bg-rose-600'],
                'none' => '',
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
        'classes' => [
            'root' => 'inline-flex rounded-md isolate group',
        ],
        'props' => [
            'as' => 'div',
        ],
    ],
    'button-group-item' => [
        'view' => 'components.button-group.item',
        'classes' => [
            'root' => 'rounded-none first:rounded-l-md last:rounded-r-md',
        ],
        'props' => [
            'as' => 'button',
            'size' => 'md',
        ],
        'options' => [],
    ],
];
