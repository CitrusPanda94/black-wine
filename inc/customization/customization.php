<?php

function bw_customize_register($wp_customize){
    require_once get_template_directory() . '/inc/customization/contact.php';
    require_once get_template_directory() . '/inc/customization/background-image.php';
    
}


add_action('customize_register', 'bw_customize_register');
?> 