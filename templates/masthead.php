<?php
/**
 * Template part for the masthead section.
 *
 * @package Square One
 */
?>

<?php if (get_post_meta($post->ID, '_sqcmb_masthead_select', true)) { ?>

		<section id="masthead" style="background:
			<?php if 
					(get_post_meta($post->ID, '_sqcmb_masthead_bg_image', true )) {
						echo "url('";
						echo $content = get_post_meta( $post->ID, '_sqcmb_masthead_bg_image', true );
						echo "')no-repeat center;
								background-size:cover;
								-webkit-background-size: cover;
								-moz-background-size: cover;
								-o-background-size: cover;"; 	}
					else {
						echo $content = get_post_meta( $post->ID, '_sqcmb_masthead_bg_color', true );
						echo ";"; }
			?>"	>

			<div class="row">
		  		<div class="large-12 columns">
					<?php
						// Get the field
						$content = get_post_meta( $post->ID, '_sqcmb_masthead_content', true );
						// Filter it for shortcodes
						echo do_shortcode( $content );
					?>
				</div><!-- .large-12 columns -->
			</div><!-- .row -->
		</section><!-- #masthead -->


<? } else { ?>
<!-- Do Nothing. -->
<?php }?>
