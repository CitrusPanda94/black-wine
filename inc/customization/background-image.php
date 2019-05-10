<?php 

$wp_customize->add_section('bw_background', array(
    'title' => __('Background'),
    'priority' => 1
));

$wp_customize->add_setting('bw_background_image', array(
    'capability' => 'edit_theme_options',
    // 'default' => __('We\'d love to hear from you.')
));

$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'bw_background', array(
    'label'      => __( 'Upload a logo', 'theme_name' ),
    'section'    => 'bw_background',
    'settings'   => 'bw_background_image',
    'context'    => 'your_setting_context' 
    ))
);

?>