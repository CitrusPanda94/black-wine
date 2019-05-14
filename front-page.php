<?php get_header(); ?>


<style type="text/css">
    .section-landing .hero { 
        background-image:url('<?php echo get_theme_mod( 'bw_background_image' );?>'); 
    }
</style>

<section class="section-landing">
    <!-- <div class="container"> -->
        <div class="hero">
            <section class="hero-blurb">
                <h2>WHAT A REMARKABLE PLACE FOR WINE</h2>
                <p>Three organic hillside vineyards on clay limestone soils in North Canterbury.</p>
                <button>Shop Listings!</button>
            </section>
        </div>
    <!-- </div> -->
</section>

<section class="vinyards">
    <div class="container">
        <div class="columns">
            <div class="column is-two-thirds">is-two-thirds</div>
            <div class="column">Auto</div>
            <div class="column">Auto</div>
        </div>
    </div>
    
</section>

<?php
get_template_part('template-parts/content');

get_footer(); ?>