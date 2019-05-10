<?php
/*
 * https://www.wpbeginner.com/wp-tutorials/create-custom-taxonomies-wordpress/
*/
 


//create a custom taxonomy name it topics for your posts
if (!function_exists('bw_create_taxonomies')) : 
function bw_create_taxonomies() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'Years', 'taxonomy general name' ),
    'singular_name' => _x( 'Year', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Years' ),
    'all_items' => __( 'All Years' ),
    'parent_item' => __( 'Parent Year' ),
    'parent_item_colon' => __( 'Parent Year:' ),
    'edit_item' => __( 'Edit Year' ), 
    'update_item' => __( 'Update Year' ),
    'add_new_item' => __( 'Add New Year' ),
    'new_item_name' => __( 'New Year Name' ),
    'menu_name' => __( 'Years' ),
  );    
 
// Now register the taxonomy
 
  register_taxonomy('years',array('post'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'topic' ),
  ));
 
}
endif;

add_action( 'init', 'bw_create_taxonomies', 0 );

?>