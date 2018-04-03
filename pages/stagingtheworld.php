<?php
/*
    Template Name: Staging The World
*/

get_header(); ?>

<style>
  body > section > div:nth-child(2) > div > div > h3 { padding-bottom: 40px; }
  body { color: #333; }
</style>

<section class="container" style="padding: 40px 0px 40px 0px;">
  <div class="row">
    <div class="col-sm-4 col-sm-push-4">
      <!-- ===================================================
        Image
      =================================================== -->
      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-responsive" />
    </div><!-- /col -->
  </div><!-- /row -->
  
  <div class="row" style="padding-top: 40px;">
    <div class="col-lg-12">
      <!-- ===================================================
        Content
      =================================================== -->
      <?php
        // TO SHOW THE PAGE CONTENTS
        while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
            <div class="entry-content-page">
                <?php the_content(); ?> <!-- Page Content -->
            </div><!-- .entry-content-page -->
        <?php
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
      ?>
    </div>
  </div><!-- /row -->
</section><!-- /container -->




<?php get_footer();