<?php
if(have_posts()) :
    while(have_posts()): the_post(); ?>
    <section class="section-comments">
        <div class="container">
            <p>section-comments!!!!!!!!!!!!!!!!</p>
            <?php the_title('<h2 class="entry-title"><a href="' . get_permalink() . '">', '</a></h2>'); ?>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
    <?php endwhile;
else : ?>
    <p>Sorry, no posts</p>
<?php endif; ?>