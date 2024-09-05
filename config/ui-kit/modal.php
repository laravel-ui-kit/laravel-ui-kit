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
                'default' => [
                    'border bg-white border-zinc-200',
                    'dark:bg-zinc-800 dark:border-zinc-700',
                ],
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
