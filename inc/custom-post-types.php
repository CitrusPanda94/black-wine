<?php
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


if (!function_exists('bw_create_post_types')) :
    function bw_create_post_types()
    {
        register_post_type(
            'bw_varieties',
            array('labels' => array(
                'name' => __('Varieties'),
                'singular_name' => __('Variety')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'thumbnail'),
            // 'taxonamies' => array('category', 'post_tag')
            'taxonomies' => array('years'),
        )
        );
    }
endif;

add_action("init", 'bw_create_post_types');

?>