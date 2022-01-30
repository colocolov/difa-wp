<?php global $difa_options; ?>
<aside class="slider-aside">
  <div class="slider-aside__content">
    <p class="slider-aside__text"><span><?php echo esc_attr($difa_options['social-profiles-text']);; ?></span></p>
    <div class="slider-aside__divider"></div>
    <ul data-da=".menu__body,768,2" class="socail slider-aside__list">
      <?php
          $social_links = $difa_options['social-profiles-links'];
            foreach($social_links as $social=>$link) : 
              $svg = '';
              if ($social == 'Viber') : 
                $svg = 'viber';
                  if(check_mobile_device()) :
                    $link = 'viber://add?number=' . $link;       
                  else :
                    $link = 'viber://chat?number=' . $link;
                  endif;
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