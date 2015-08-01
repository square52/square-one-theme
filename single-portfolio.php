<?php
/**
 * Displaying all single portfolio posts.
 *the format is "single-posttypename.php"
 *
 * @package Square One
 */

get_header(); ?>

<section id="main">
		<div class="row">
			<div class="large-8 columns">
				<?php the_post_thumbnail(); ?>
			</div><!--large-8 columns-->
			<div class="large-4 columns">
				<?php
						global $wp_query;
						$postid = $wp_query->post->ID;
						echo get_post_meta($postid, '_sqcmb_summary', true);
						wp_reset_query();
						?>
<h4>Website</h4>
				<?php
						global $wp_query;
						$postid = $wp_query->post->ID;
						echo get_post_meta($postid, '_sqcmb_website', true);
						wp_reset_query();
						?>
			</div><!--large-4 columns-->
		</div><!-- .row -->
		
		<div class="row">
			<div class="large-12 columns">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'templates/content', 'page' ); ?>
				<?php endwhile; // end of the loop. ?>
				<?php squareone_content_nav( 'nav-below' ); ?>
			</div><!-- .large-12 .columns-->
		</div><!--.row-->
	</section><!-- #main-->

<?php get_footer(); ?>