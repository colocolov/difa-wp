<?php
/**
 * The template for displaying archive pages
*/
get_header();

if( is_category() ) :
	$head_title = get_queried_object()->name;
  $category_id = get_cat_ID($head_title);
endif;
  $term = get_queried_object();
  $bg_img = get_field('bg-image', $term); 
  $category_img = get_field('category-image', $term); 
  $descr = get_field('description', $term);
  $url = get_field('url', $term);

  switch ($category_id) {
    case 3:
      $cat_name = 'interior';
      break;
    case 6:
      $cat_name = 'interior';
      break;
    
    case 8:
      $cat_name = 'arhitectura';
      break;
    case 9:
      $cat_name = 'arhitectura';
      break;

    case 11:
      $cat_name = 'mobilier';
      break;
    case 12:
      $cat_name = 'mobilier';
      break;

    case 17:
      $cat_name = 'reparatie';
      $cat_numb = $category_id;
      break;
    case 18:
      $cat_name = 'reparatie';
      $cat_numb = $category_id;
      break;
  }  
?>

<section class="page-hero page-hero--<?php echo $cat_name; ?>"
  style="background-image: url(<?php echo esc_attr($bg_img); ?>)">
  <div class="container">
    <div class="page-hero__wrapper">
      <div class="page-hero__head page-hero__head--<?php echo $cat_name ?>">
        <h1 class="unvisible"><?php echo esc_attr($head_title); ?></h1>
        <img class="image" src="<?php echo esc_attr($category_img); ?>" alt="<?php echo esc_attr($head_title); ?>" />
      </div>
      <div class="page-hero__content">
        <?php
					if ($descr) :	echo $descr; endif;
          if ($url) : 
            if ( $category_id == $cat_numb) : ?>
              <a class="btn-reset button page-hero__btn page-hero__btn--<?php echo $cat_name; ?>"
                href="<?php echo $url; ?>"><?php esc_html_e( 'To get a consultation', 'difa' ); ?>
              </a>
            <? else : ?>
              <a class="btn-reset button page-hero__btn"
                href="<?php echo $url; ?>"><?php esc_html_e( 'Show more', 'difa' ); ?>
              </a> 
            <? endif;
          endif; ?>
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