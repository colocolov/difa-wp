<?php
/**
 * The template for displaying archive pages
*/
get_header();
?>

<section class="page-hero">
  <div class="container">
    <div class="page-hero__wrapper">
      <h1 class="heading page-hero__head">
        <?php echo esc_attr(get_the_title(); ); ?></h1>
      <div class="page-hero__content">
        <a class="btn-reset button page-hero__btn" href="<?php echo $mini_slider_spec['mini-slider-btn']; ?>"><?php esc_html_e( 'Show more', 'difa' ); ?></a>
      </div>
      <?php get_template_part( 'template-parts/content', 'aside' ); ?>
    </div>
  </div>
</section>
<main class="main">
  <section class="page__section">
    <div class="container page__container">
      <?
        if ( have_posts() ) : 
		      while ( have_posts() ) :
				the_post();
				
					get_template_part( 'template-parts/content', get_post_type() );
				
				endif;
		endwhile;
	
	else :

		get_template_part( 'template-parts/content', 'none' );

endif; ?>

    </div>
  </section>

  <? get_footer(); ?>