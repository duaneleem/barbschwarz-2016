<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Barb_Schwarz,_Creator_of_Home_Staging
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-full">
		<div class="blog-meta">
			<!-- ======================================================================
				Title
			====================================================================== -->
			<?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
			
			<!-- ======================================================================
				Author Info
			====================================================================== -->
			<ul class="list-inline">
				<li><i class="fa fa-user"></i> <?php the_author(); ?></li>
				<li><i class="fa fa-clock-o"></i> <time><?php the_date("m/d/Y"); ?></time></li>
				<li><i class="fa fa-folder"></i> <?php the_category(", "); ?></li>
			</ul>
		</div>
		<!--post meta end-->
		
		<!-- ======================================================================
			Thumbnail
		====================================================================== -->
		<?php if(has_post_thumbnail()) { ?>
			<?php the_post_thumbnail('post-thumbnail', array( 'class' => "img-responsive")); ?>
		<?php } ?>

		<!-- ======================================================================
			Body Content
		====================================================================== -->
		<div class="post-content">
			<?php the_content(); ?>
		</div>
	</div><!-- /post-full -->
</article><!-- #post-## -->
