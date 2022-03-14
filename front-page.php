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
  <div class="container main-slider__aside">
    <?php get_template_part( 'template-parts/content', 'aside' ); ?>
  </div>
</div>

<main class="main">
  <?php $specs = get_field('specs'); ?>
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
        $categories = get_categories(array(
          'taxonomy'     => 'category',
          'orderby' => 'term_id',
          'order' => 'ASC',
        ));
        foreach( $categories as $category ) :
          $term = $category;
          // pre($category);
          // $title = $category->name;
          $spec_cat = get_field('cat_on_home', $term);
        ?>
        <a class="main-about__spec-wrap" href="<?php echo get_category_link( $category->term_id ); ?>">
          <?php 
          // echo $category->cat_ID; 
          ?>
          <div class="main-about__spec-icon">
            <svg class="main-about__spec-icon--chair" aria-hidden="true">
              <use xlink:href="<?php echo esc_attr($spec_cat['icon']); ?>"></use>
            </svg>
          </div>
          <div class="main-about__spec-title">
            <?php echo $spec_cat['litera']; ?>
          </div>
          <p class="main-about__spec-text">
            <?php echo esc_attr($spec_cat['spec-text']); ?>
          </p>
        </a>
        <?php endforeach; ?>
      </div>

      <div class="main-about__wrap-btn">
        <a class="btn-reset button main-about__btn"
          href="<?php echo esc_url($specs['spec-btn']); ?>"><?php esc_html_e( 'Show more', 'difa' ); ?></a>
      </div>
    </div>
  </div>
  <?php 
    $list_serv = get_field('list-services-section');
  ?>
  <div id="interior" class="mini-slider" style="background-image: url(<?php echo esc_url($list_serv['list_bg']); ?>)">
    <div class="container mini-slider__container">   
      <div class="mini-slider__left">
        <div class="mini-slider__intro">
          <img class="image mini-slider__image" src="<?php echo $service_img['light']; ?>" alt="Difa servicii" />
        </div>
        <a class="btn-reset button mini-slider__button"
        href="<?php echo $list_serv['mini-slider-btn']; ?>"><?php esc_html_e( 'Show more', 'difa' ); ?>
        </a>
      </div>

      <div class="mini-slider__slider">
        <ul class="mini-slider__list">
          <?php 
            $list_serv_arr = get_field('list-services-section');
            $list_serv = $list_serv_arr['list-service'];
              foreach ($list_serv as $arrg) : 
          ?>
          <li class="mini-slider__item">
            <?php echo $arrg['item-service']; ?>
          </li>  
          <?php endforeach; ?>
      </div>     
    </div>
  </div>
</main>
<?php get_footer(); ?>