<?php
/**
 * The template used for displaying page content of header.php
 *
 * @package Square One
 */
?>
	<div class="off-canvas-wrap">
  <div class="inner-wrap">
    <section id="header" role="banner">
      <nav class="tab-bar">
        <section class="left tab-bar-section">
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        </section>

        <section class="right-small">
          <a class="right-off-canvas-toggle menu-icon" ><span></span></a>
        </section>
      </nav>


      <aside class="right-off-canvas-menu">
        <span class="small-uppercase"><?php wp_nav_menu( array('theme_location' => 'small-menu', 'menu_class' => 'small-nav' )); ?>
      </aside>
  </section>

    <section class="wrapper">


