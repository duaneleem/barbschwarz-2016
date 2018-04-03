<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Barb_Schwarz,_Creator_of_Home_Staging
 */

get_header(); ?>

	<link href="<?php bloginfo("template_directory"); ?>/assets/template/css/style.css" rel="stylesheet" />
	
	<style>
		.breadcrumb-v1.dark-bg {
			padding: 20px 0px;
		}

		header.page-header {
			margin: 10px 0 20px;
			border-bottom: 0px solid #eee;
		}
	</style>
	<div class="breadcrumb-v1 dark-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-1">
					<img src="https://secure.gravatar.com/avatar/36e1402e3bc926837d40cac69ba91924?s=192&d=mm&r=g" class="img-responsive" alt="Barb Schwarz" />
				</div>
				<div class="col-sm-5">
					<h1>Barb Schwarz Blog</h1>
					<p>The Creator of Home Staging®</p>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb">
						<li><a href="/"><i class="fa fa-home"></i></a></li>
						<li><a href="/blog">Blog</a></li>
						<li class="active">Category</li>
					</ol>
				</div>
			</div>
		</div>
	</div><!--breadcrumb end-->

	<div class="space-70"></div>
	<section class="container">
		<div class="row">
			<div class="col-md-9 margin-b-40">
				<div class="row">
					<?php
						if ( have_posts() ) : ?>

							<header class="page-header">
								<?php
									the_archive_title( '<h3 class="page-title">', '</h3>' );
									the_archive_description( '<div class="archive-description">', '</div>' );
								?>
							</header><!-- .page-header -->

							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
									* Include the Post-Format-specific template for the content.
									* If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Format name) and that will be used instead.
									*/
								get_template_part( 'template-parts/content', get_post_format() );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>
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
