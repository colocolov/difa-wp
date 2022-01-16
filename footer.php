<?php
/**
 * The template for displaying the footer
 */
	global $difa_options;
?>
<footer class="footer">
  <div class="container">
    <div class="footer__content">
      <h2 class="heading footer__head"><?php esc_html_e( 'Contacte', 'difa' ); ?></h2>
      <ul class="socail footer__list">
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
        <li class="social__item footer__item">
          <a class="footer__link social__link" href="<?php echo $link; ?>">
            <svg class="social__icon" aria-hidden="true">
              <use
                xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sprite.svg#<?php echo $svg; ?>">
              </use>
            </svg>
          </a>
        </li>
        <?php endif; endforeach; ?>
      </ul>
      <div class="footer__data">
        <div class="footer__contact">
          <?php 
            if ($difa_options['secondary_phones']) :
              foreach ($difa_options['secondary_phones'] as $phone) :
                if ($phone) :
          ?>
          <div class="footer__phone">
            <?php esc_html_e( 'Telefon:', 'difa' ); ?>
            <a href="tel:<?php echo $tel = str_replace(" ","",$phone); 
							?>" class="footer__link">
              <?php echo $phone; ?>
            </a>
          </div>
          <?php endif; endforeach; endif; 
            if ($difa_options['email_difa']) :
          ?>
          <div class="footer__email">
            <a href="mailto:<?php echo $difa_options['email_difa']; ?>"
              class="footer__link"><?php echo $difa_options['email_difa']; ?></a>
          </div>
        </div>
        <?php endif; 
          if ($difa_options['address']) :
        ?>
        <address class="footer__adress">
          <?php echo $difa_options['address']; ?>
        </address>
        <?php endif; 
          if ($difa_options['copyright']) :
        ?>
        <p class="footer__copyright">
          <?php echo $difa_options['copyright']; ?>
        </p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</footer>


</div>

<!-- подключение скриптов -->
<!-- <script src="js/adv.min.js"></script> -->
<!-- <script src="js/swiper-bundle.min.js"></script> -->
<!-- <script src="js/main.js"></script> -->
<?php wp_footer(); ?>
</body>

</html>