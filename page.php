<?php
/**
 * The template for displaying all pages
 */

get_header();
?>

<?php
		while ( have_posts() ) :
			the_post();
			
if ( is_page_template('page-contact.php') ) {
} else {
	get_template_part( 'template-parts/content', 'page' );

}



		endwhile; // End of the loop.
		?>

<?php
get_footer();