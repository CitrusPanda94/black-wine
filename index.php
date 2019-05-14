<?php get_header(); ?>

<section class="section-blog container">
    <div>
        <?php get_template_part('template-parts/content-excerpt');
        get_template_part('template-parts/content');
        ?>
        <h3>Hello</h3>
        
    </div>
    <?php get_sidebar(); ?>

</section>

<?php 
get_sidebar();
get_footer(); ?>
