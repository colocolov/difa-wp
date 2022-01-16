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
        href="<?php echo $link;?>"><?php esc_html_e( 'Află mai multe', 'difa' ); ?>
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
        <!-- <div class="swiper portfolio-slider--preview">
          <div class="swiper-wrapper">
            <div class="swiper-slide portfolio-slider__slide">
              <img class="image" src="images/portfolio/slide-1.jpg" />
            </div>
            <div class="swiper-slide">
              <img class="image" src="images/portfolio/slide-2.jpg" />
            </div>
            <div class="swiper-slide">
              <img class="image" src="images/portfolio/slide-3.jpg" />
            </div>
            <div class="swiper-slide">
              <img class="image" src="images/portfolio/slide-4.jpg" />
            </div>
            <div class="swiper-slide">
              <img class="image" src="images/portfolio/slide-5.jpg" />
            </div>
            <div class="swiper-slide">
              <img class="image" src="images/portfolio/slide-6.jpg" />
            </div>
          </div>
          <div class="swiper-pagination"></div>
          <div class="portfolio-slider__btn portfolio-slider__btn-prev">
            <svg class="portfolio-slider__btn-fill" aria-hidden="true">
              <use xlink:href="images/icons/sprite.svg#arrow-btn"></use>
            </svg>
          </div>
          <div class="portfolio-slider__btn portfolio-slider__btn-next">
            <svg class="portfolio-slider__btn-fill" aria-hidden="true">
              <use xlink:href="images/icons/sprite.svg#arrow-btn"></use>
            </svg>
          </div>
        </div>
        <div thumbsSlider="" class="swiper portfolio-slider--thumb">
          <div class="swiper-wrapper portfolio-slider--thumb-wr">
            <div class="swiper-slide portfolio-slider--thumb-img">
              <img class="image" src="images/portfolio/slide-1.jpg" />
            </div>
            <div class="swiper-slide portfolio-slider--thumb-img">
              <img class="image" src="images/portfolio/slide-2.jpg" />
            </div>
            <div class="swiper-slide portfolio-slider--thumb-img">
              <img class="image" src="images/portfolio/slide-3.jpg" />
            </div>
            <div class="swiper-slide portfolio-slider--thumb-img">
              <img class="image" src="images/portfolio/slide-4.jpg" />
            </div>
            <div class="swiper-slide portfolio-slider--thumb-img">
              <img class="image" src="images/portfolio/slide-5.jpg" />
            </div>
            <div class="swiper-slide portfolio-slider--thumb-img">
              <img class="image" src="images/portfolio/slide-6.jpg" />
            </div>
          </div>
          <div class="portfolio-slider__btn portfolio-slider__btn-thumb-prev">
            <svg class="portfolio-slider__btn-fill" aria-hidden="true">
              <use xlink:href="images/icons/sprite.svg#arrow-btn"></use>
            </svg>
          </div>
          <div class="portfolio-slider__btn portfolio-slider__btn-thumb-next">
            <svg class="portfolio-slider__btn-fill" aria-hidden="true">
              <use xlink:href="images/icons/sprite.svg#arrow-btn"></use>
            </svg>
          </div>
        </div> -->
      </div>
    </div>
  </section>
</main>