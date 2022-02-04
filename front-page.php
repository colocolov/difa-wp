<?php get_header( ); ?>

<div class="main-slider">
  <div class="swiper-wrapper">
    <?php 
      $slider = get_field('header-slider');
      foreach ($slider as $slide) :
    ?>
    <div class="swiper-slide main-slider__slide"
      style="background-image: url(<?php echo $slide['header-slider-img']['url']; ?>)">
      <div class="container main-slider__container">
        <h2 class="heading main-slider__head">
          <?php echo $slide['header-slider-text']; ?>
        </h2>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  <!-- <div class="main-slider__btn main-slider__btn-prev">
    <svg class="main-slider__btn-fill" aria-hidden="true">
      <use xlink:href="<?php 
        // echo get_template_directory_uri(); 
      ?>/assets/images/icons/sprite.svg#arrow-slider"></use>
    </svg>
  </div>
  <div class="main-slider__btn main-slider__btn-next">
    <svg class="main-slider__btn-fill" aria-hidden="true">
      <use xlink:href="<?php 
        // echo get_template_directory_uri(); 
      ?>/assets/images/icons/sprite.svg#arrow-slider"></use>
    </svg>
  </div> -->
  <div class="container main-slider__aside">
    <?php get_template_part( 'template-parts/content', 'aside' ); ?>
  </div>
</div>

<main class="main">
  <?php 
    $specs = get_field('specs');
  ?>
  <div class="main-about" style="background-image: url(<?php echo $specs['spec-bg']; ?>)">
    <div class="container main-about__content">
      <div class="main-about__descr">
        <?php the_content(); ?>
      </div>
      <div class="main-about__intro">
        <?php $service_img = get_field('service'); ?>
        <img class="image main-about__image" src="<?php echo $service_img['dark']; ?>" alt="Difa servicii" />
      </div>
      <div class="main-about__spec">
        <?php
          $spec_item = $specs['spec-home'];
          foreach ($spec_item as $spec) : 
        ?>
        <div class="main-about__spec-wrap">
          <div class="main-about__spec-icon">
            <svg class="main-about__spec-icon--chair" aria-hidden="true">
              <use xlink:href="<?php echo esc_attr($spec['spec-icon']); ?>"></use>
            </svg>
          </div>
          <div class="main-about__spec-title"><?php echo $spec['spec-title']; ?></div>
          <p class="main-about__spec-text">
            <?php echo esc_attr($spec['spec-text']); ?>
          </p>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="main-about__wrap-btn">
        <a class="btn-reset button main-about__btn"
          href="<?php echo esc_url($specs['spec-btn']); ?>"><?php esc_html_e( 'Show more', 'difa' ); ?></a>
      </div>
    </div>
  </div>
  <div id="interior" class="mini-slider">
    <div class="container mini-slider__container">
      <div class="mini-slider__intro">
        <img class="image mini-slider__image" src="<?php echo $service_img['light']; ?>" alt="Difa servicii" />
      </div>
      <div class="mini-slider__slider">
        <div class="mini-slider__slider-wrapper">
          <div class="swiper-wrapper">
            <?php 
              $mini_slider_spec = get_field('mini-slider-section');
                $mini_slider = $mini_slider_spec['mini-slider'];
                foreach ($mini_slider as $arrg) : 
            ?>
            <div class="swiper-slide mini-slider__slide">
              <img class="image" src="<?php echo $arrg['mini-slider-img']['url']; ?>"
                alt="<?php echo $arrg['mini-slider-img']['alt']; ?>" />
            </div>
            <?php endforeach; ?>
          </div>
          <div class="mini-slider__btn mini-slider__btn-prev">
            <svg class="mini-slider__btn-fill" aria-hidden="true">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sprite.svg#arrow-btn">
              </use>
            </svg>
          </div>
          <div class="mini-slider__btn mini-slider__btn-next">
            <svg class="mini-slider__btn-fill" aria-hidden="true">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sprite.svg#arrow-btn">
              </use>
            </svg>
          </div>
        </div>
      </div>
      <a class="btn-reset button mini-slider__button"
        href="<?php echo esc_url($mini_slider_spec['mini-slider-btn']); ?>"><?php esc_html_e( 'Show more', 'difa' ); ?></a>
    </div>
  </div>
</main>
<?php get_footer(); ?>