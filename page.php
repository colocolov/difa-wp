<?php
/**
 * The template for displaying all pages
 */

get_header();
?>

<?php
		while ( have_posts() ) :
			the_post();
			
			if ( is_page( array('contacte', 'contakty') ) ) :
				get_template_part( 'template-parts/content', 'contact' );
			
			else :
				get_template_part( 'template-parts/content', 'page' );

			endif;

		endwhile; // End of the loop.
		?>

<?php
	if ( is_page( array('contacte', 'contakty') ) ) :
		get_footer('contact');
	else :
		get_footer();
	endif;