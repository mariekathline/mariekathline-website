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

<!-- 2.1 - Section01 : What -->
<section class="section" id="gallery">
    <div class="container">
        <h2>Galerie&nbsp;__</h2>
        <div class="row">

        <?php
        $args = (array(
          'post_type'     => 'category',
          'order' => 'ASC'
        ));

        $category_post = new WP_Query( $args );
        while ( $category_post->have_posts() ) : $category_post->the_post();?>
        
        <div class="col-md-3 col-sm-3 mt-3">
            <div class="card">
                <img class="card-img-top" src="<?php the_field('category_image') ?>" alt="Accéder aux projets <?php the_field('category_title') ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php the_field('category_title') ?></h5>
                    <p class="card-text">
                        <?php the_field('category_content') ?>
                    </p>
                    <a href="#" class="btn btn-primary">Voir plus</a>
                </div>
            </div>
        </div>

      <?php endwhile; wp_reset_query(); ?>


    </div>
    <div class="cadres" id="cadre1"></div>
    <div class="cadres" id="cadre2"></div>
</section>

<!-- 2.1 - Section02 : About -->
<section class="section" id="about">
    <div class="row">
        <div class="col-md-6 col-md-push-2 col-sm-6 col-sm-push-1 col-xs-10 col-xs-push-1">
        <h2>about&nbsp;__</h2>
            <div class="row">
            </div>
        </div>

        <div class="col-md-3 col-md-push-1 col-sm-4 col-sm-push-1 col-xs-12 center btn-title">
            <a href="about.php" class="waves-effect waves-light btn-large"><i class="material-icons left">zoom_in</i>voir mon profil</a>
        </div>
    </div>
</section>

<?php } // end while
} // end if
?>

<?php get_footer(); ?>
