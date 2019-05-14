<?php 

// ********* Contact ***********
    
$wp_customize->add_section('bw_contact', array(
    'title' => __('Contact'),
    'priority' => 1
));

$wp_customize->add_setting('bw_contact_blurb', array(
    'capability' => 'edit_theme_options',
    'default' => __('We\'d love to hear from you.')
));

$wp_customize->add_control('bw_contact_blurb_control', array(
    'type' => 'textarea',
    'section' => 'bw_contact',
    'settings' => 'bw_contact_blurb',
    'label' => __('Blurb')
));

?>