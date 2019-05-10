<?php
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


?>