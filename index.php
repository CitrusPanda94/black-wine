<?php get_header(); ?>

<section class="section-blog container">
    <div>
        <?php get_template_part('template-parts/content-excerpt');
        get_template_part('template-parts/content');
        ?>
        
    </div>
    <?php get_sidebar(); ?>

</section>

<?php 
get_footer(); ?>
