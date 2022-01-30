<?php
/**
 * The template for displaying archive pages
*/
get_header();

if( is_category() ) :
	$head_title = get_queried_object()->name;
endif;
  $term = get_queried_object();
  $bg_img = get_field('bg-image', $term); 
  $descr = get_field('description', $term);
  $url = get_field('url', $term);
?>

<section class="page-hero page-hero--<?php echo strtolower($head_title); ?>"
  style="background-image: url(<?php echo esc_attr($bg_img); ?>)">
  <div class="container">
    <div class="page-hero__wrapper">
      <div class="page-hero__head page-hero__head--<?php echo strtolower($head_title); ?>">
        <h1 class="unvisible"><?php echo esc_attr($head_title); ?></h1>
        <img class="image"
          src="<?php echo get_template_directory_uri(); ?>/assets/images/intro/<?php echo strtolower($head_title); ?>.svg"
          alt="<?php echo esc_attr($head_title); ?>" />
      </div>
      <div class="page-hero__content">
        <?php
					if ($descr) :	echo $descr; endif;
          if ($url) : 
				?>
        <a class="btn-reset button page-hero__btn"
          href="<?php echo $url; ?>"><?php esc_html_e( 'Show more', 'difa' ); ?>
        </a>
        <?php endif; ?>
      </div>
      <?php get_template_part( 'template-parts/content', 'aside' ); ?>
    </div>
  </div>
</section>
<main class="main">
  <section class="page__section">
    <div class="container page__container">
      <? if ( have_posts() ) : while ( have_posts() ) :	the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="page__work">
        <div class="page__photo">
          <img class="image" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>"
            alt="<?php esc_attr(the_title()); ?>" />
        </div>
        <h2 class="page__title"><?php echo esc_attr(get_the_title()); ?></h2>
        <p class="page__adress"><?php echo esc_attr(get_the_excerpt()); ?></p>
      </a>
      <?php
		    endwhile;
        endif; 
      ?>
    </div>
  </section>

  <? get_footer(); ?>