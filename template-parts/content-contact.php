<?php 
    global $difa_options;
?>
<main class="main">
  <section class="contact">
    <div class="container contact__container">

      <?php if (get_field('image-map-mobile')) : ?>
      <div class="contact__image">
        <img class="image" src="<?php
          echo get_field('image-map-mobile')['url']; 
        ?>" alt="<?php echo get_field('image-map-mobile')['alt']; ?>" />
      </div>
      <?php endif; ?>

      <h1 class="heading contact__head">
        <?php esc_html_e( 'Difa location', 'difa' ); ?></h1>
      <div class="contact__content">
        <div class="contact__data">
          <h2 class="heading contact__data-head"><?php echo get_the_title(); ?></h2>

          <div class="contact__data-wrap">
            <div class="contact__data-wrap-data">
              <div class="contact__data-contact">
                <?php 
            if ($difa_options['secondary_phones']) :
              foreach ($difa_options['secondary_phones'] as $phone) :
                if ($phone) :
          ?>
                <div class="contact__data-phone">
                  <?php esc_html_e( 'Telefon:', 'difa' ); ?>
                  <a href="tel:<?php echo $tel = str_replace(" ","",$phone); 
							?>" class="contact__data-link"><?php echo $phone; ?></a>
                </div>
                <?php endif; endforeach; endif; 
            if ($difa_options['email_difa']) :
          ?>
                <div class="contact__data-email">
                  <a href="mailto:<?php echo $difa_options['email_difa']; ?>"
                    class="contact__data-link"><?php echo $difa_options['email_difa']; ?></a>
                </div>
              </div>
              <?php endif; 
          if ($difa_options['address']) :
        ?>
              <address class="contact__data-adress">
                <?php echo $difa_options['address']; ?>
              </address>
              <?php endif; ?>
            </div>
            <ul class="social contact__list">
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
              <li class="social__item contact__item">
                <a href="<?php echo $link; ?>" class="social__link">
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
          <a class="btn-reset button contact__button contact__button--call" href="tel:<?php 
								$primary = str_replace(" ","",get_field('call-now'));
								echo $primary; 
							?>">
            <?php esc_html_e( 'Call now', 'difa' ); ?>
          </a>
        </div>
        <div class="contact__form">
          <!-- <form action="#">
            <input type="text" placeholder="Your name" />
            <input type="text" placeholder="Your phone" />
            <input type="email" placeholder="Your e-mail" />
            <button class="btn-reset button contact__button">Send</button>
          </form> -->
          <?php 
            $contact = get_field('contact_from');
            // echo $contact;
            echo do_shortcode( $contact ); 
          ?>
        </div>
      </div>
      <?php if (get_field('image-map')) : ?>
      <div class="contact__location">
        <img class="image" src="<?php
          echo get_field('image-map')['url']; 
        ?>" alt="<?php echo get_field('image-map')['alt']; ?>" />
      </div>
      <?php endif; ?>
      <aside class="slider-aside slider-aside--contact">
        <div class="slider-aside__content slider-aside__content--contact">
          <p class="slider-aside__text"><span><?php echo $difa_options['social-profiles-text'];; ?></span></p>
          <div class="slider-aside__divider"></div>
          <ul data-da=".menu__body,768,2" class="social slider-aside__list">
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
  </section>
</main>