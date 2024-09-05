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
                'default' => ['bg-white text-zinc-700 border-zinc-200 dark:bg-zinc-800 dark:text-zinc-300 dark:border-zinc-700'],
                'slate' => ['bg-slate-100 text-slate-700 border-slate-200 dark:bg-slate-800 dark:text-slate-300 dark:border-slate-700'],
                'gray' => ['bg-gray-100 text-gray-700 border-gray-200 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-700'],
                'zinc' => ['bg-zinc-100 text-zinc-700 border-zinc-200 dark:bg-zinc-800 dark:text-zinc-300 dark:border-zinc-700'],
                'neutral' => ['bg-neutral-100 text-neutral-700 border-neutral-200 dark:bg-neutral-800 dark:text-neutral-300 dark:border-neutral-700'],
                'stone' => ['bg-stone-100 text-stone-700 border-stone-200 dark:bg-stone-800 dark:text-stone-300 dark:border-stone-700'],
                'red' => ['bg-red-100 text-red-700 border-red-200 dark:bg-red-800 dark:text-red-300 dark:border-red-700'],
                'orange' => ['bg-orange-100 text-orange-700 border-orange-200 dark:bg-orange-800 dark:text-orange-300 dark:border-orange-700'],
                'amber' => ['bg-amber-100 text-amber-700 border-amber-200 dark:bg-amber-800 dark:text-amber-300 dark:border-amber-700'],
                'yellow' => ['bg-yellow-100 text-yellow-700 border-yellow-200 dark:bg-yellow-800 dark:text-yellow-300 dark:border-yellow-700'],
                'lime' => ['bg-lime-100 text-lime-700 border-lime-200 dark:bg-lime-800 dark:text-lime-300 dark:border-lime-700'],
                'green' => ['bg-green-100 text-green-700 border-green-200 dark:bg-green-800 dark:text-green-300 dark:border-green-700'],
                'emerald' => ['bg-emerald-100 text-emerald-700 border-emerald-200 dark:bg-emerald-800 dark:text-emerald-300 dark:border-emerald-700'],
                'teal' => ['bg-teal-100 text-teal-700 border-teal-200 dark:bg-teal-800 dark:text-teal-300 dark:border-teal-700'],
                'cyan' => ['bg-cyan-100 text-cyan-700 border-cyan-200 dark:bg-cyan-800 dark:text-cyan-300 dark:border-cyan-700'],
                'sky' => ['bg-sky-100 text-sky-700 border-sky-200 dark:bg-sky-800 dark:text-sky-300 dark:border-sky-700'],
                'blue' => ['bg-blue-100 text-blue-700 border-blue-200 dark:bg-blue-800 dark:text-blue-300 dark:border-blue-700'],
                'indigo' => ['bg-indigo-100 text-indigo-700 border-indigo-200 dark:bg-indigo-800 dark:text-indigo-300 dark:border-indigo-700'],
                'violet' => ['bg-violet-100 text-violet-700 border-violet-200 dark:bg-violet-800 dark:text-violet-300 dark:border-violet-700'],
                'purple' => ['bg-purple-100 text-purple-700 border-purple-200 dark:bg-purple-800 dark:text-purple-300 dark:border-purple-700'],
                'fuchsia' => ['bg-fuchsia-100 text-fuchsia-700 border-fuchsia-200 dark:bg-fuchsia-800 dark:text-fuchsia-300 dark:border-fuchsia-700'],
                'pink' => ['bg-pink-100 text-pink-700 border-pink-200 dark:bg-pink-800 dark:text-pink-300 dark:border-pink-700'],
                'rose' => ['bg-rose-100 text-rose-700 border-rose-200 dark:bg-rose-800 dark:text-rose-300 dark:border-rose-700'],
                'none' => '',
            ],
            'size' => [
                'sm' => 'px-4 py-2 text-sm',
                'md' => 'px-4 py-3 text-base',
                'lg' => 'px-6 py-4 text-lg',
            ],
        ],
    ],
];
