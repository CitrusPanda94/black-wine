<?php get_header(); ?>
<section class="section-comments-single">
    <div class="container">
        <h1>Test Single!!!!!!!</h1>
    </div>
</section>

<?php
$args = array(
    'post_type' => 'bw_shops',
    'posts_per_page' => 5
);
$loop = new WP_Query($args);

if($loop->have_posts()) : $count = 0; 
while($loop->have_posts()) :
    $loop->the_post(); ?>
    <div class="container">
        <h2><a href="<?php echo site_url(); ?>/bw_shops/<?php echo $post->post_name; ?>"><?php echo the_title(); ?></a></h2>
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $post->post_name; ?>"/>
    </div>
<?php endwhile;
endif;
?>

<?php
get_template_part('template-parts/content-single');
get_sidebar();
get_footer(); ?>