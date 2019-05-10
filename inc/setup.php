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

?>