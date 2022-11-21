<?php

/**
 * Attach assets
 */
add_action('wp_enqueue_scripts', function () {
    $version = '1.1';
    wp_enqueue_style(
        'style', 
        get_template_directory_uri() . '/assets/css/style.css', 
        array(), 
        $version, 
        'all'
    );
});

/**
 * Theme setup: register menus, enable thumbnails
 */
add_action('after_setup_theme', function () {
    // register menus
    add_theme_support('menus');
    register_nav_menus([
        'header-menu' => 'Main menu',
        'footer-menu-about' => 'Footer menu 1',
        'footer-menu-services' => 'Footer menu 2',
        'footer-menu-support' => 'Footer menu 3',
    ]);

    // enable post/page thumbnails
    add_theme_support('post-thumbnails');
});

/**
 * Register our sidebars and widget areas.
 */
add_action('widgets_init', function () {

    // add vidget for phone number
    register_sidebar(array(
        'name'          => 'number-widget',
        'id'            => 'number',
        'before_widget' => '<div class="phone-number">',
        'after_widget'  => '</div>',
    ));

    // add widget for 'Book online' button
    register_sidebar(array(
        'name'          => 'button-widget',
        'id'            => 'button',
        'before_widget' => '<div class="book-online">',
        'after_widget'  => '</div>',
    ));

    // add widget for address in footer
    register_sidebar(array(
        'name'          => 'address-widget',
        'id'            => 'address',
        'before_widget' => '<div class="footer-address">',
        'after_widget'  => '</div>',
    ));

    // add widget for email address block in footer
    register_sidebar(array(
        'name'          => 'mail-widget',
        'id'            => 'mail',
        'before_widget' => '<div class="footer-email">',
        'after_widget'  => '</div>',
    ));

    // add widget for social media links
    register_sidebar(array(
        'name'          => 'social-widget',
        'id'            => 'social',
        'before_widget' => '<div class="social-links">',
        'after_widget'  => '</div>',
    ));
});
