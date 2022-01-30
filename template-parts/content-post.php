<?php
/**
 * Template part for displaying posts
 */
$category = get_the_category($post->ID);
// $current_cat_id = $category[0]->cat_ID;
$current_cat_name = $category[0]->name;
?>
<section class="portfolio-head">
  <div class="container">
    <div class="portfolio-head__wrapper">
      <p class="portfolio-head__undertitle">
        <?php esc_html_e( 'Difa portfolio', 'difa' ); ?> <span><?php echo strtolower($current_cat_name);?></span>
      </p>
      <h1 class="portfolio-head__head">
        <?php echo get_the_title(); ?>
      </h1>
      <?php 
        $link = get_field('link-post');
        if ($link) :
      ?>
      <a class="btn-reset button portfolio-head__btn"
        href="<?php echo $link;?>"><?php esc_html_e( 'Show more', 'difa' ); ?>
      </a>
      <?php endif; ?>
    </div>
  </div>
</section>

<main class="main">
  <section class="portfolio">
    <div class="container">
      <div class="portfolio-slider">
        <?php
        the_content( );
      ?>
      </div>
    </div>
  </section>
</main>