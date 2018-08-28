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
<section class="page-section" id="gallery">

    <div class="relative">
        
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
        <ul class="works-grid clearfix font-alt hover-white hide-titles masonry" id="work-grid">

            <?php
            $args = (array(
            'post_type'     => 'work',
            'order' => 'DSC'
            ));

            $work_post = new WP_Query( $args );
            while ( $work_post->have_posts() ) : $work_post->the_post();?>
            
            <!-- Work Item -->
            <li class="work-item mix <?php the_field('work_category') ?>">
                <a href="
                <?php if( get_field('work_category') == 'video' ) : the_field('work_url_video')?>
                <?php else : the_field('work_image')?>
                <?php endif; ?>"
                
                class="work-lightbox-link 
                    <?php if( get_field('work_category') == 'video' ) :?>mfp-iframe
                    <?php else :?>mfp-image
                    <?php endif; ?>
                ">
                    <div class="work-img">
                        <img src="<?php the_field('work_image') ?>" alt="<?php the_field('work_title') ?>" />
                    </div>
                    <div class="work-intro">
                        <h3 class="work-title"><?php the_field('work_title') ?></h3>
                        <div class="work-descr">
                            <?php the_field('work_content') ?>
                        </div>
                    </div>
                </a>
            </li>
            <!-- End Work Item -->

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
