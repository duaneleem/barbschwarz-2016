<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Barb_Schwarz,_Creator_of_Home_Staging
 */

get_header(); ?>

	<link href="<?php bloginfo("template_directory"); ?>/assets/template/css/style.css" rel="stylesheet" />
	
	<style>
		.breadcrumb-v1.dark-bg {
			padding: 20px 0px;
		}
	</style>
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
						<li><a href="/blog">Blog</a></li>
						<li class="active">Post</li>
					</ol>
				</div>
			</div>
		</div>
	</div><!--breadcrumb end-->
	
	<div class="space-70"></div>
	<section class="container">
		<div class="row">
			<div class="col-md-9 margin-b-40">
				<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content-page', get_post_format() );
					endwhile; // End of the loop.
				?>
				<!--post end-->

				<!-- ======================================================================
					Comments
				====================================================================== -->
				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			</div><!-- /col -->
			<aside class="col-md-3">
				<?php get_sidebar(); ?>
			</aside><!-- /col -->
		</div>
	</section>
	<!--container-end-->

	<div class="space-40"></div>
	
<?php
get_footer();

