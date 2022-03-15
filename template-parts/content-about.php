<?php 
    $list_serv = get_field('list-services-section');
?>
<section
  class="page-about"
  style="background-image: url(<?php echo get_field('intro'); ?>)"
>
  <div class="container">
    <div class="page-hero__wrapper">
      <div class="page-about__content">
        <h2><?php the_title(); ?></h2>
        <?php
          echo the_content();
        ?>
      </div>
      <?php get_template_part( 'template-parts/content', 'aside' ); ?>
    </div>
  </div>
</section>

<main class="main"><section class="page-about__service">
  <div class="container">
    <div class="page-about__wrap">
      <ul class="page-about__list">
        <?php 
          $services = get_field('list_servs');
          foreach ($services as $serv) :
        ?>
        <li class="page-about__item">
          <div class="page-about__item-left">
            <div class="page-about__spec-wrap">
              <div class="page-about__spec-icon">
                <svg class="page-about__spec-icon--chair" aria-hidden="true">
                  <use xlink:href="<?php echo esc_attr($serv['link-icon']); ?>"></use>
                </svg>
              </div>
              <div class="page-about__spec-title"><?php echo $serv['name']; ?></div>
              <a href="tel:<?php echo get_field('call_now'); ?>" class="btn-reset button page-about__btn"><?php esc_html_e( 'Call now', 'difa' ); ?></a>
            </div>
          </div>
          <div class="page-about__item-right">
            <?php echo $serv['description'];?>
          </div>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>
</main>