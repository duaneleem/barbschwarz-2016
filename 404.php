<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
						<li class="active">Search</li>
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
					<header class="page-header">
                        <h1 class="page-title">
                            <?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'barbschwarz' ); ?>
                        </h1>
                    </header><!-- .page-header -->
                    
                    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'barbschwarz' ); ?></p>
                    
                    <?php get_search_form(); ?>
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
