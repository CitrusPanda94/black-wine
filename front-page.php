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

<section class="section-vinyards">
    <div class="container">
        <div class="columns">
            <div class="column">
            <span class="wine-text">
                <h1>DAMPSTEED VINEYARD</h1>
                <p>This vineyard lies on a north facing slope below the pinot noir.
                The soil is very dense with limestone and subordinate limestone horizons.</p>
                <p>
                <hr>
                Dampsteed Vineyard (formally Spye) is located in the north east of Waipara
                Valley at the foot of the Omihi Saddle, 10km north of our Home Vineyard.
                Riesling and Pinot Noir grow here with vine density of more than 5000 vine per
                hectare.

                Pinot Noir is grown on a 5 hectare north east facing slope, with an altitude
                between 140 to 180 meters above sea level. The vines here were planted in 1999
                and grow on clay overlying fractured limestone and sandstone soils.
                </p>
            </span>
            </div>
            <div class="column is-half">
            <img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/b6f9aa79385931.5cc16780e4bae.jpg" alt="wine bottle display">
            </div>
            
        </div>
    </div>
    
</section>

<?php
get_template_part('template-parts/content');

get_footer(); ?>