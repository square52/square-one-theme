<?php
/**
 * The template used for displaying page content of footer.php
 *
 * @package Square One
 */
?>

<section id="footer-widgets" class="row">
	<div class="large-4 medium-4 columns">
		<?php dynamic_sidebar( 'footer-left' ); ?>
	</div><!-- .large-4 medium-4 columns-->
	<div class="large-4 medium-4 columns">
		<?php dynamic_sidebar( 'footer-middle' ); ?>
	</div><!-- .large-4 medium-4 columns-->
	<div class="large-4 medium-4 columns">
		<?php dynamic_sidebar( 'footer-right' ); ?>
	</div><!-- .large-4 medium-4 columns-->
</section><!-- #footer-widgets .row -->	

<section id="footer-menu" class="show-for-small row">
	<div class="large-12 columns">
		<div id="search">
			<?php get_search_form(); ?>
		</div>
		<h3 class="subheader">Navigation Menu <small><a href="#">Go to Top</a></small></h3>
		<nav id="nav-small-footer">
			<?php wp_nav_menu( array('menu' => 'footer' )); ?>
		</nav><!--#footer-nav-->
	</div><!--.large-12 columns-->
</section><!--#footer-menu .show-for-small .row-->

<section id="footer-content" class="row">
	<footer class="large-12 columns" role="contentinfo">
		<?php do_action( 'squareone_credits' ); ?>
		<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'squareone' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'squareone' ), 'WordPress' ); ?></a>
		<span class="sep"> | </span>
		<?php printf( __( 'Theme: %1$s by %2$s.', 'squareone' ), 'Square One', '<a href="http://tiltedsquare.com" rel="designer">Dan Northern</a>' ); ?>
	</footer><!-- .large-12 columns -->
</section><!-- #footer-content .row -->
  <a class="exit-off-canvas"></a>

    </section><!--wrappe for off canvas-->



</div><!--inner-wrap for off canvas-->
  </div><!--off canvas wrap -->
	