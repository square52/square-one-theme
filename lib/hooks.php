<?


/***********************************************
* HEADER HOOKS
************************************************/


//* Add wrapper to header content
add_action( 'genesis_before_header', 'squareone_opening_header_divs', 9 );
function squareone_opening_header_divs() {
	echo '<div class="header-container">';
}
add_action( 'genesis_after_header', 'squareone_closing_header_divs' );
function squareone_closing_header_divs() {
	echo '</div>';
}

//* Remove the site description
remove_action( 'genesis_site_description', 'genesis_seo_site_description' );




/***********************************************
* PAGE HOOKS
************************************************/

//** Page content Wrapper */
add_action('genesis_before_entry', 'squareone_content_wrapper_start');
function squareone_content_wrapper_start() { ?>
  <section class="main-section">

<?php }

//** Page content Wrapper */
add_action('genesis_after_entry', 'squareone_content_wrapper_end');
function squareone_content_wrapper_end() { ?>

</section>
<?php }







