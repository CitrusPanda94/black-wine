<?php
/** 
 * Black Wine themes functions and definitions
*/
if (!function_exists('bw_setup')) :
    function bw_setup()
    {
        //add theme support - featured image
        add_theme_support('post-thumbnails'); 

        //add theme support - custom logo
        add_theme_support( 'custom-logo', array(
            'height'      => 50,
            'width'       => 50,
        ));

        //register menus
        register_nav_menus(array(
            'primary-menu' => __('Primary'),
            'footer-menu' => __('Footer'),
            'social-menu' => __('Social')
        ));

        //set the permalink structure
        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure( '/%postname%/');
    } 
endif;
add_action('after_setup_theme', 'bw_setup');


if (!function_exists('bw_enqueue_scripts')) :
    function bw_enqueue_scripts()
    {
        //enqueue styles
        wp_enqueue_style('bw-style', get_stylesheet_uri());
        wp_enqueue_style('bw-nav-style', get_template_directory_uri() . '/assets/css/responsive-nav.css');

        //enqueue scripts
        wp_enqueue_script('bw-script', get_template_directory_uri() . '/assets/js/main.js');
        wp_enqueue_script('bw-nav-script', get_template_directory_uri() . '/assets/js/responsive-nav.js');
    }
endif;
add_action('wp_enqueue_scripts', 'bw_enqueue_scripts');

if (!function_exists('bw_widgets_init')) :
    function bw_widgets_init()
    {
        register_sidebar(array(
            'name'          => __( 'Sidebar', 'theme_text_domain' ),
            'id'            => 'sidebar-1',
            'description'   => 'Add widgets here'
        ));
    }
endif;
add_action('widgets_init', 'bw_widgets_init');