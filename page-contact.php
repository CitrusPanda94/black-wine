<?php get_header(); ?>

<section class="section-contact">
    <div class="container">
        <h1>The movie - Contact</h1>
        <p>This is the contact page.</p>

        <?php $blurb = get_theme_mod('bw_contact_blurb');
        if($blurb || is_customize_preview()) :
        // echo wpautop($blurb);
        echo $blurb;
        endif; ?>
    </div>
</contact>


<?php

get_template_part('template-parts/content');
get_footer(); ?>