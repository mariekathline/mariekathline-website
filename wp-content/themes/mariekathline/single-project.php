<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Head Section -->
<section class="page-section bg-dark-alfa-50" data-background="<?php the_post_thumbnail_url();?>">
  <div class="relative container align-left">
      
      <div class="row">
          <div class="col-md-8">
              <h1 class="hs-line-11 no-transp font-alt mb-20 mb-xs-0"><?php the_title(); ?></h1>
              <div class="hs-line-4 font-alt black">
                  <?php the_field('work_sub_title'); ?>
              </div>
          </div>
      </div>
      
  </div>
</section>
<!-- End Head Section -->





<!-- About Section -->
<section class="page-section">
  <div class="container relative">
      
      <div class="section-text mb-60 mb-sm-40">
          <div class="row">
              
              <div class="col-md-4 mb-sm-50 mb-xs-30">
                    
                  <!-- Project Detail -->
                  <div class="work-detail">
                      <h5 class="font-alt mt-0 mb-20">Détails du projet</h5>
                      <div class="work-full-detail">
                          <p>
                              <strong>Client:</strong>
                              Envato Users
                          </p>
                          <p>
                              <strong>Date:</strong>
                              1th Februery, 2014
                          </p>
                          <p>
                              <strong>Online:</strong>
                              <a href="#" target="_blank">www.rhythm.bestlooker.pro</a>
                          </p>
                      </div>
                  </div>
                  <!-- End Project Detail -->
                    
              </div>
              
              <div class="col-md-8 mb-sm-50 mb-xs-30">
                <?php the_field('work_description'); ?>
              </div>
              
          </div>
      </div>
      
      
      <!-- Counters -->
      <div class="count-wrapper">
          <div class="row">
              
              <!-- Counter Item -->
              <div class="col-xs-6 col-sm-3">
                  <div class="count-number">
                      320
                  </div>
                  <div class="count-descr font-alt">
                      <i class="fa fa-clock-o"></i>
                      <span class="count-title">Hours</span>
                  </div>
              </div>
              <!-- End Counter Item -->
              
              <!-- Counter Item -->
              <div class="col-xs-6 col-sm-3">
                  <div class="count-number">
                      150
                  </div>
                  <div class="count-descr font-alt">
                      <i class="fa fa-heart"></i>
                      <span class="count-title">Pixels used</span>
                  </div>
              </div>
              <!-- End Counter Item -->
              
              <!-- Counter Item -->
              <div class="col-xs-6 col-sm-3">
                  <div class="count-number">
                      533
                  </div>
                  <div class="count-descr font-alt">
                      <i class="fa fa-coffee"></i>
                      <span class="count-title">Coffee Cups</span>
                  </div>
              </div>
              <!-- End Counter Item -->
              
              <!-- Counter Item -->
              <div class="col-xs-6 col-sm-3">
                  <div class="count-number">
                      100
                  </div>
                  <div class="count-descr font-alt">
                      <i class="fa fa-lightbulb-o"></i>
                      <span class="count-title">Great Ideas</span>
                  </div>
              </div>
              <!-- End Counter Item -->
              
          </div>
      </div>
      <!-- End Counters -->
      
  </div>
</section>
<!-- End About Section -->


<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>



<?php get_footer(); ?>
