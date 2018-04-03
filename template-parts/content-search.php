<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Barb_Schwarz,_Creator_of_Home_Staging
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="masonry-post col-sm-6 margin-b-40">
				<div class="grid-post">
					
					<!-- ======================================================================
						Thumbnail
					====================================================================== -->
					<?php if(has_post_thumbnail()) { ?>
						<?php the_post_thumbnail('post-thumbnail', array( 'class' => "img-responsive full-img")); ?>
					<?php } ?>
					
					
					<div class="grid-post-meta">
						<!-- ======================================================================
							Title
						====================================================================== -->
						<?php 
							if ( is_single() ) :
								the_title( '<h3>', '</h3>' );
							else :
								the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
							endif; 
						?>

						<!-- ======================================================================
							Author Info
						====================================================================== -->
						<ul class="list-inline">
							<li><i class="fa fa-user"></i> <?php the_author(); ?></li>
							<li><i class="fa fa-clock-o"></i> <time><?php the_date("m/d/Y"); ?></time></li>
							<li><i class="fa fa-folder"></i> <?php the_category(", "); ?></li>
						</ul>
						
						<!-- ======================================================================
							Content
						====================================================================== -->
						<p class="post-excerpt">
							<?php the_excerpt(); ?>
						</p>

						<!-- ======================================================================
							Entry Footer
						====================================================================== -->
						<ul class="list-inline">
							<li><i class="fa fa-comments"></i> <?php comments_number(); ?></li>
							<li>
								<!-- Edit Post -->
								<?php edit_post_link("Edit", "<i class='fa fa-pencil'></i> "); ?>
							</li>
						</ul>
					</div>
				</div>
			</div><!--end col-->
		<?php endif; ?>
	</header><!-- .entry-header -->
</article><!-- #post-## -->
