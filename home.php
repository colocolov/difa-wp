<?php get_header( ); ?>

<div class="main-slider">
  <div class="swiper-wrapper">
    <?php 
      $slider = $difa_options['main-slides'];
      foreach ($slider as $slide) :
    ?>
    <div class="swiper-slide main-slider__slide" style="background-image: url(<?php echo $slide['image']; ?>">
      <div class="container main-slider__container">
        <h2 class="heading main-slider__head">
          <?php echo $slide['title'];?>
        </h2>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  <!-- кнопки  -->
  <div class="main-slider__btn main-slider__btn-prev">
    <svg class="main-slider__btn-fill" aria-hidden="true">
      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sprite.svg#arrow-slider"></use>
    </svg>
  </div>
  <div class="main-slider__btn main-slider__btn-next">
    <svg class="main-slider__btn-fill" aria-hidden="true">
      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sprite.svg#arrow-slider"></use>
    </svg>
  </div>
  <aside class="slider-aside">
    <div class="slider-aside__content">
      <p class="slider-aside__text"><span><?php echo $difa_options['social-profiles-text'];; ?></span></p>
      <div class="slider-aside__divider"></div>
      <ul data-da=".menu__body,768,2" class="socail slider-aside__list">
        <?php
          $social_links = $difa_options['social-profiles-links'];
            foreach($social_links as $social=>$link) : 
              $svg = '';
              if ($social == 'Viber') : $svg = 'viber';
                elseif ($social == 'Instagram') : $svg = 'instagram';
                elseif ($social == 'Facebook') : $svg = 'facebook';
              endif;
              if ($link) :
        ?>

        <li class="social__item slider-aside__item">
          <a class="social__link" href="<?php echo $link; ?>" target="_blank">
            <svg class="social__icon" aria-hidden="true">
              <use
                xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sprite.svg#<?php echo $svg; ?>">
              </use>
            </svg>
          </a>
        </li>

        <?php endif; endforeach; ?>
      </ul>
    </div>
  </aside>

</div>

<main class="main">
  <div class="main-about">
    <div class="container main-about__content">
      <div class="main-about__descr">
        <h2 class="heading main-about__head"><span>cine</span> suntem?</h2>
        <p class="main-about__text">
          <span><strong>Salut!</strong></span> Suntem Difa - un birou de design,
          proiectare și arhitectură! Oferim o gamă largă de servicii creative și
          strategice pentru mărci, companii, dar și pentru spații și locuințe
          personale.
        </p>
        <p class="main-about__text">
          DIFA oferă servicii de design interior + reparație la cheie, design
          mobilier, dar și arhitectură, proiectare și construcție.
        </p>
        <p class="main-about__text">
          <span>
            Te ghidăm în realizarea celor mai bune soluții și materializăm
            proiectul tău de vis în realitate!
          </span>
        </p>
      </div>
      <div class="main-about__intro">
        <img class="image main-about__image"
          src="<?php echo get_template_directory_uri(); ?>/assets/images/intro/servicii-black.png" alt="" />
        <!-- <svg class="main-about__intro" aria-hidden="true">
          <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/intro/servicii-black.svg"></use>
        </svg> -->
      </div>
      <div class="main-about__spec">
        <div class="main-about__spec-wrap">
          <div class="main-about__spec-icon">
            <svg class="main-about__spec-icon--chair" aria-hidden="true">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sprite.svg#chair"></use>
            </svg>
          </div>
          <div class="main-about__spec-title"><span>I</span> - Interior</div>
          <p class="main-about__spec-text">
            Proiectare și realizare design interior
          </p>
        </div>
        <div class="main-about__spec-wrap">
          <div class="main-about__spec-icon">
            <svg class="main-about__spec-icon--wardrobe" aria-hidden="true">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sprite.svg#wardrobe">
              </use>
            </svg>
          </div>
          <div class="main-about__spec-title"><span>I</span> - Furniture</div>
          <p class="main-about__spec-text">Design și confec- ționare mobilier</p>
        </div>
        <div class="main-about__spec-wrap">
          <div class="main-about__spec-icon">
            <svg class="main-about__spec-icon--home" aria-hidden="true">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sprite.svg#home"></use>
            </svg>
          </div>
          <div class="main-about__spec-title"><span>A</span> - Architecture</div>
          <p class="main-about__spec-text">
            Arhitectură, proiectare și construcție
          </p>
        </div>
      </div>
      <div class="main-about__wrap-btn">
        <button class="btn-reset button main-about__btn">Află mai multe</button>
      </div>
    </div>
  </div>
  <div id="interior" class="mini-slider">
    <div class="container mini-slider__container">
      <div class="mini-slider__intro">
        <img class="image mini-slider__image"
          src="<?php echo get_template_directory_uri(); ?>/assets/images/intro/servicii-light.png" alt="" />
      </div>
      <div class="mini-slider__slider">
        <div class="mini-slider__slider-wrapper">
          <div class="swiper-wrapper">
            <div class="swiper-slide mini-slider__slide">
              <img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/slide-3.jpg"
                alt="" />
            </div>
            <!-- slide -->
            <div class="swiper-slide mini-slider__slide">
              <img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/slide-2.jpg"
                alt="" />
            </div>
          </div>
          <!-- slide -->
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
      <button class="btn-reset button mini-slider__button">Află mai multe</button>
    </div>
  </div>

</main>

<?php get_footer(); ?>