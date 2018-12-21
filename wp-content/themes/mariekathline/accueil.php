<?php
/*
Template Name: Accueil
*/

get_header(); ?>

<?php
if ( have_posts() ) {
while ( have_posts() ) {
    the_post();
?>




<!-- Portfolio Section -->
<section class="small-section" id="gallery">

    <div class="relative container">
        
        <!-- Works Filter -->                    
        <!--div class="works-filter font-alt align-center">
            <a href="#" class="filter active" data-filter="*">Tous</a>
            <a href="#photographie" class="filter" data-filter=".photographie">Photographie</a>
            <a href="#print" class="filter" data-filter=".print">Print</a>
            <a href="#web" class="filter" data-filter=".web">Web</a>
            <a href="#video" class="filter" data-filter=".video">Vidéo</a>

        </div-->                    
        <!-- End Works Filter -->

        
        
        <!-- Works Grid -->
        <ul class="works-grid work-grid-3 clearfix hide-titles masonry" id="work-grid">

            <?php
            $args = (array(
            'post_type'     => 'project',
            'order' => 'DSC',
            'posts_per_page' => -1
            ));


            $work_post = new WP_Query( $args );
            while ( $work_post->have_posts() ) : $work_post->the_post();?>
            
            <li class="work-item mix">
                <a href="<?php the_permalink(); ?>">

                    <div class="work-img">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title() ?>" />
                    </div>

                    <div class="work-intro">
                        <h3 class="work-title"><?php the_title(); ?></h3>
                    </div>
                </a>
            </li>
            <?php endwhile; wp_reset_query(); ?>
 
        </ul>
        <!-- End Works Grid -->
        
    </div>
</section>
<!-- End Portfolio Section -->


<?php } // end while
} // end if
?>

<?php get_footer(); ?>
