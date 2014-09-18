<?php

// Include the custom Anchor Functions
include_once 'lib/anchor.php';

// Here are the theme options
set_theme_options(array(
    'header_logo'      => false,
    'logo_src'         => theme_url('public/img/search.png'),
    'show_admin_links' => false,
    'services' => array(
        (object)array(
            'icon' => 'car',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        ),
        (object)array(
            'icon' => 'car',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        ),
        (object)array(
            'icon' => 'car',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        )
    )
));
