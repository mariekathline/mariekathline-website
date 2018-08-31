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
        <ul class="works-grid clearfix hover-white hide-titles masonry" id="work-grid">

            <?php
            $args = (array(
            'post_type'     => 'work',
            'order' => 'DSC'
            ));


            $work_post = new WP_Query( $args );
            while ( $work_post->have_posts() ) : $work_post->the_post();?>
            
            <li class="work-item mix <?php the_field('work_category') ?>">

            <?php if( get_field('work_type') == 'simple' ) :?>

                <a href="
                    <?php if( get_field('work_category') == 'video' ) : the_field('work_url_video')?><?php else : the_field('work_image')?><?php endif; ?>"                
                    class="work-lightbox-link mfp-pop <?php if( get_field('work_category') == 'video' ) :?>mfp-iframe<?php else :?>mfp-image<?php endif; ?>"
                    target="_blank">

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

                <?php elseif ( get_field('work_type') == 'gallery' ) :?>

                 <a data-links="<?php
                 if( get_field('work_image_gallery_1') ):
                    the_field('work_image_gallery_1');
                 endif;
                 if( get_field('work_image_gallery_2') ):
                    echo ',';
                    the_field('work_image_gallery_2');
                 endif;
                 if( get_field('work_image_gallery_3') ):
                    echo ',';
                    the_field('work_image_gallery_3');
                 endif;
                 if( get_field('work_image_gallery_4') ):
                    echo ',';
                    the_field('work_image_gallery_4');
                 endif;
                 if( get_field('work_image_gallery_5') ):
                    echo ',';
                    the_field('work_image_gallery_5');
                 endif;
                 if( get_field('work_image_gallery_6') ):
                    echo ',';
                    the_field('work_image_gallery_6');
                 endif;
                 if( get_field('work_image_gallery_7') ):
                    echo ',';
                    the_field('work_image_gallery_7');
                 endif;
                 if( get_field('work_image_gallery_8') ):
                    echo ',';
                    the_field('work_image_gallery_8');
                 endif;
                 if( get_field('work_image_gallery_9') ):
                    echo ',';
                    the_field('work_image_gallery_9');
                 endif;
                 if( get_field('work_image_gallery_10') ):
                    echo ',';
                    the_field('work_image_gallery_10');
                 endif;
                 ?>"
                 class="btn-gallery">

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
                <?php endif; ?>
            </li>
            <?php endwhile; wp_reset_query(); ?>
 
        </ul>
        <!-- End Works Grid -->
        
    </div>
</section>
<!-- End Portfolio Section -->

<section id="instagram">
    <ul id="mk_instafeed"></ul>
</section>


<?php } // end while
} // end if
?>

<?php get_footer(); ?>
