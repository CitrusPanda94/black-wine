<?php
/** 
 * Black Wine themes functions and definitions
*/
if (!function_exists('bw_setup')) :
    function bw_setup()
    {
        //enqueue styles
        wp_enqueue_style('bw-style', get_stylesheet_uri());
        wp_enqueue_style('bw-nav-style', get_template_directory_uri() . '/assets/css/responsive-nav.css');

        //enqueue scripts
        wp_enqueue_script('bw-script', get_template_directory_uri() . '/assets/js/main.js');
        wp_enqueue_script('bw-nav-script', get_template_directory_uri() . '/assets/js/responsive-nav.js');

        //add theme support - featured image
        add_theme_support('post-thumbnails'); 

        //add theme support - custom logo
        add_theme_support( 'custom-logo', array(
            'height'      => 50,
            'width'       => 50,
        ));

        //register menus
        register_nav_menus(array(
            'primary-menu' => __('Primary')
        ));
    } 
endif;
add_action('after_setup_theme', 'bw_setup');
