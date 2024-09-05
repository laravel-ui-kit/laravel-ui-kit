<?php

return [
    'modal' => [
        'view' => 'components.modal.root',
        'classes' => [
            'root' => 'relative w-full overflow-y-auto shadow-2xl rounded-3xl p-[0.060rem]',
            'overlay' => 'fixed inset-0 bg-neutral-950 bg-opacity-50',
            'container' => 'rounded-3xl p-10',
        ],
        'props' => [
            'size' => 'md',
            'color' => 'default',
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
                'default' => [
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
        'classes' => [
            'root' => 'flex justify-end',
        ],
        'props' => [
            'as' => 'div',
        ],
    ],
];
