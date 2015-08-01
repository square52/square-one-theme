<?php
/*
Template Name: Portfolio Template
*/
?>

<?php get_header(); ?>

<section id="main">
  <div class="row">
    <div class="large-12 columns">

      <?php while ( have_posts() ) : the_post(); // Start the Loop?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    <div class="row">



<?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $temp = $wp_query;
            $wp_query= null;
            $wp_query = new WP_Query();
            $args = array(
                 'post_type' => 'portfolio',
                 'posts_per_page' => 4,
                 'orderby' => 'date',
                 'paged' => $paged
            );
            $wp_query->query($args);
            $max_page = $wp_query->max_num_pages;

            while ($wp_query->have_posts()): $wp_query->the_post();  ?>

          
      <!--Do stuff-->
      <div class="large-6 medium-6 columns">

          <a class="th" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('gallery'); ?></a><h4><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'squareone' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
            
          </div><!-- .large-6 columns -->
      <?php endwhile;?>
  </div><!-- .row -->
  <div class="row">
    <div class="small-12 columns">
      <div class="center"><?php
    if(function_exists('wp_pagenavi')): wp_pagenavi();
    else : posts_nav_link();
    endif;
  ?></div>
    </div><!-- .small-9 centered columns -->

    </div><!--.large-12 columns-->
  </div><!--.row-->
</section><!--#main-->  


    <?php 
    $wp_query = null; 
    $wp_query = $temp;  // Reset
    ?>


<?php get_footer(); ?>
