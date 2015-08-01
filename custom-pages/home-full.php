<?php
/*
Template Name: Home Template
*/
?>

<?php get_header(); ?>

<section id="main">
  <div class="row">
    <div class="large-12 columns">
			<section id="home-widget-area" class="row">
				<div class="large-4 medium-4 columns">
					<?php dynamic_sidebar( 'home-left' ); ?>
				</div><!-- .large-4 medium-4 columns-->
				<div class="large-4 medium-4 columns">
					<?php dynamic_sidebar( 'home-middle' ); ?>
				</div><!-- .large-4 medium-4 columns-->
				<div class="large-4 medium-4 columns">
					<?php dynamic_sidebar( 'home-right' ); ?>
				</div><!-- .large-4 columns-->
			</section><!--#home-widget-area--><!-- .row-->
			<div class="row">
				<div class="large-12 columns">
					<?php while ( have_posts() ) : the_post(); // Start the Loop?>
						<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
				</div><!-- .large-12 columns-->
			</div><!--row-->

		</div><!--.large-12 columns-->
 	</div><!--.row-->
</section><!--#main-->  

<?php get_footer(); ?>
