<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'components' => array_merge(
        require(__DIR__ . '/ui-kit/typography.php'),
        require(__DIR__ . '/ui-kit/layout.php'),
        require(__DIR__ . '/ui-kit/navbar.php'),
        require(__DIR__ . '/ui-kit/sidebar.php'),
        require(__DIR__ . '/ui-kit/form.php'),
        require(__DIR__ . '/ui-kit/button.php'),
        require(__DIR__ . '/ui-kit/modal.php'),
        require(__DIR__ . '/ui-kit/accordion.php'),
        require(__DIR__ . '/ui-kit/tabs.php'),
        require(__DIR__ . '/ui-kit/breadcrumbs.php'),
        require(__DIR__ . '/ui-kit/table.php'),
        require(__DIR__ . '/ui-kit/dropdown.php'),
        require(__DIR__ . '/ui-kit/alert.php'),
        require(__DIR__ . '/ui-kit/spinner.php'),
        [
        // Form
        // 'switch' => 'components.form.switch',
        // 'file' => 'components.form.file',
    ]),
];