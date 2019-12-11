<?php
$pages = [
    // category slug => {array}
    'uncategorized' => [],
    'introduction'  => [
        // page slug       => [ label: {string}, icon: {string}, tmpl?: {string}, url?: {string} ],
        'overview'         => [ 'label' => 'Sloth','icon' => 'fas fa-heading', 'tmpl' => 'intr-sloth', 'url' => 'key-visual' ],
        'why-sloth'        => [ 'label' => 'Why Sloth?', 'icon' => 'fas fa-question', 'tmpl' => '', 'url' => 'why-sloth' ],
        'get-started'      => [ 'label' => 'Get Started Sloth!', 'icon' => 'fas fa-fire', 'tmpl' => '', 'url' => 'get-started' ],
        'about-extensions' => [ 'label' => 'About Sloth Extensions', 'icon' => 'far fa-lightbulb', 'tmpl' => '', 'url' => 'about-extensions' ],
        'basic-structures' => [ 'label' => 'Basic Structures', 'icon' => 'fas fa-chalkboard', 'tmpl' => '', 'url' => 'basic-structures' ],
    ],
    'styles'        => [
        'typograpy'             => [ 'label' => 'Typograpy', 'icon' => 'fas fa-font', 'tmpl' => 'styl-typo' ],
        'lists'                 => [ 'label' => 'Lists', 'icon' => 'fas fa-list-ul', 'tmpl' => 'styl-lists' ],
        'links'                 => [ 'label' => 'Links', 'icon' => 'fas fa-link', 'tmpl' => 'styl-links' ],
        'forms'                 => [ 'label' => 'Forms', 'icon' => 'fas fa-edit', 'tmpl' => 'styl-forms' ],
        'buttons'               => [ 'label' => 'Buttons', 'icon' => 'fas fa-toggle-on', 'tmpl' => 'styl-btns' ],
        'tables'                => [ 'label' => 'Tables', 'icon' => 'fas fa-table', 'tmpl' => 'styl-table' ],
        'grid-systems'          => [ 'label' => 'Grid Systems', 'icon' => 'fas fa-th', 'tmpl' => 'styl-grids' ],
        'components'            => [ 'label' => 'Components', 'icon' => 'far fa-address-card', 'tmpl' => 'styl-compo' ],
        'colors'                => [ 'label' => 'Colors', 'icon' => 'fas fa-palette', 'tmpl' => 'styl-color' ],
        'utilities'             => [ 'label' => 'Utilities', 'icon' => 'fas fa-toolbox', 'tmpl' => 'styl-util' ],
        'overriding-properties' => [ 'label' => 'Overriding Properties', 'icon' => 'far fa-edit', 'tmpl' => 'styl-props' ],
    ],
    'extensions'    => [
        'what-extensions'  => [ 'label' => 'What are Extensions?', 'icon' => 'fas fa-question', 'tmpl' => 'exti-desc', 'url' => 'what-extensions' ],
        'about-extensions' => [ 'label' => 'About Extensions', 'icon' => 'far fa-lightbulb', 'tmpl' => '', 'url' => 'about-extensions' ],
    ],
    'features'      => [
        'element-sizing'  => [ 'label' => 'Element Sizing', 'icon' => 'fas fa-expand-arrows-alt', 'tmpl' => 'exts-sizes' ],
        'option-mapping'  => [ 'label' => 'Option Mapping', 'icon' => 'fas fa-align-justify', 'tmpl' => 'exts-optmap' ],
        'toggle-password' => [ 'label' => 'Toggle Password', 'icon' => 'fas fa-low-vision', 'tmpl' => 'exts-passwd' ],
        'image-uploader'  => [ 'label' => 'Image Uploader', 'icon' => 'fas fa-file-upload', 'tmpl' => 'exts-upload' ],
        'class-switching' => [ 'label' => 'Class Switching', 'icon' => 'fas fa-exchange-alt', 'tmpl' => 'exts-switch' ],
        'validation-form' => [ 'label' => 'Validation Form', 'icon' => 'fab fa-wpforms', 'tmpl' => 'exts-valid' ],
        'dialog'          => [ 'label' => 'Dialog Notification', 'icon' => 'far fa-window-restore', 'tmpl' => 'exts-dialog' ],
        'lazy-loading'    => [ 'label' => 'Lazy Loading Images', 'icon' => 'far fa-image', 'tmpl' => 'exts-lazyload' ],
        'stick-footer'    => [ 'label' => 'Sticky Footer', 'icon' => 'fas fa-shoe-prints', 'tmpl' => 'exts-footer' ],
        'toc'             => [ 'label' => 'Table Of Contents', 'icon' => 'fas fa-stream', 'tmpl' => 'exts-toc' ],
        'demo-form'       => [ 'label' => 'Demo Form', 'icon' => 'far fa-lightbulb', 'tmpl' => 'exts-demo1' ],
    ],
    'category'      => [
        'core-styles'      => [ 'label' => 'Core Styles', 'icon' => 'fab fa-css3', 'tmpl' => 'intr-sloth' ],
        'sloth-extensions' => [ 'label' => 'Sloth Extensions', 'icon' => 'far fa-lightbulb', 'tmpl' => 'exti-desc' ],
        'supported'        => [ 'label' => 'Supported Browsers', 'icon' => 'far fa-window-restore', 'tmpl' => 'support' ],
    ],
    'links'         => [
        'donation' => [ 'label' => 'Donation', 'icon' => 'fas fa-donate', 'url' => 'https://ka215.github.io/sloth/donation.html' ],
        'github' => [ 'label' => 'To github', 'icon' => 'fab fa-github-alt', 'url' => 'https://github.com/ka215/sloth' ],
        'home' => [ 'label' => 'Back to homepage', 'icon' => 'fas fa-home', 'url' => 'https://ka2.org/' ],
    ],
];

function get_page_category( $page_slug, $is_return_num = false ) {
    $pages = $GLOBALS['pages'];
    $retval = false;
    $index  = 0;
    foreach ( $pages as $_cat => $_ary ) {
        if ( in_array( $page_slug, array_keys( $_ary ), true ) ) {
            $retval = $_cat;
            break;
        }
        $index++;
    }
    return $is_return_num ? $index : $retval;
}

function get_page_menu( $cat ) {
    switch( true ) {
        case preg_match( '/^(1|2|introduction|styles)$/i', $cat ):
            $menu_list = [ 'introduction', 'styles', 'category', 'links' ];
            break;
        case preg_match( '/^(3|4|extensions|features)$/i', $cat ):
            $menu_list = [ 'extensions', 'features', 'category', 'links' ];
            break;
        default:
            $menu_list = [ 'category', 'links' ];
            break;
    }
    return $menu_list;
}

function get_page_template( $page_slug ) {
    $pages = $GLOBALS['pages'];
    $_tmpl = false;
    foreach ( $pages as $_pages ) {
        if ( array_key_exists( $page_slug, $_pages ) ) {
            if ( array_key_exists( 'tmpl', $_pages[$page_slug] ) ) {
                $_tmpl = $_pages[$page_slug]['tmpl'];
                break;
            }
        }
    }
    return $_tmpl;
}
