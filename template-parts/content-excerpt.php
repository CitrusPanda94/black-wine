
<?php
if(have_posts()) :
    while(have_posts()): the_post(); ?>
        <!-- <div> -->
            <?php the_title('<h2 class="entry-title"><a href="' . get_permalink() . '">', '</a></h2>'); ?>
            <div class="entry-content">
                <p>
                    <?php echo get_the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">More</a>
                </p>
            </div>
        <!-- </div> -->
    <?php endwhile;
    // get_sidebar();
else : ?>
    <p>Sorry, no posts</p>
<?php endif;
?>