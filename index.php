<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Barb_Schwarz,_Creator_of_Home_Staging
 */

get_header(); ?>

	<link href="<?php bloginfo("template_directory"); ?>/assets/template/css/style.css" rel="stylesheet" />
	
	<div class="breadcrumb-v1 dark-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="media">
						<div class="media-left">
							<!-- <img src="https://secure.gravatar.com/avatar/36e1402e3bc926837d40cac69ba91924?s=192&d=mm&r=g" class="img-responsive" alt="Barb Schwarz" /> -->
							<img src="https://d1xrp9zhb3ks3c.cloudfront.net/web/barbschwarz/images/barb-schwarz.jpg" class="media-object" style="width: 60px; height: auto;" alt="Barb Schwarz" />
						</div>
						<div class="media-body">
							<h4 class="media-heading color-white" style="margin-top: 7px;">Barb Schwarz Blog</h4>
							<div class="color-white">The Creator of Home Staging®</div>
						</div>
					</div>
				</div><!-- /col -->
				<div class="col-sm-6">
					<ol class="breadcrumb">
						<li><a href="/"><i class="fa fa-home"></i></a></li>
						<li class="active">Blog</li>
					</ol>
				</div><!-- /col -->
				
				
			</div>
		</div>
	</div><!--breadcrumb end-->
		
	<div class="space-70"></div>
	<section class="container">
		<div class="row">
			<div class="col-md-9 margin-b-40">
				<div class="masonry-blog row">
					<?php
						if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) : the_post();
								/*
								* Include the Post-Format-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Format name) and that will be used instead.
								*/
								get_template_part( 'template-parts/content', get_post_format() );

							endwhile;
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
					?>
				</div><!-- /row -->

				<div class="row">
					<div class="col-xs-12">
						<div class="text-center">
							<style>.screen-reader-text{ display: none }</style>
							<?php the_posts_pagination( array(
								'mid_size' => 2,
								'prev_text' => __("«"),
								'next_text' => __("»")
							) ); ?>
						</div>
					</div><!-- /col -->
				</div><!-- /row -->
			</div><!-- /col -->

			<!-- Sidebar -->
			<aside class="col-md-3">
				<?php get_sidebar(); ?>
			</aside>
		</div><!-- /row -->
	</section>
	
<?php
get_footer();

