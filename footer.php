<?php
/**
 * The template for displaying the footer
 */
	global $difa_options;
?>

<footer class="footer">
  <div class="container">
    <div class="footer__content">
      <h2 class="heading footer__head">Contacte</h2>
      <ul class="socail footer__list">
        <li class="social__item footer__item">
          <a href="#" class="footer__link social__link">
            <svg class="social__icon" aria-hidden="true">
              <use xlink:href="images/icons/sprite.svg#facebook"></use>
            </svg>
          </a>
        </li>
        <li class="social__item footer__item">
          <a href="#" class="social__link">
            <svg class="social__icon" aria-hidden="true">
              <use xlink:href="images/icons/sprite.svg#instagram"></use>
            </svg>
          </a>
        </li>
        <li class="social__item footer__item">
          <a href="#" class="social__link">
            <svg class="social__icon" aria-hidden="true">
              <use xlink:href="images/icons/sprite.svg#viber"></use>
            </svg>
          </a>
        </li>
      </ul>
      <div class="footer__data">
        <div class="footer__contact">
          <div class="footer__phone">
            Telefon:
            <a href="tel:<?php 
								$primary = str_replace(" ","",$difa_options['primary_phone']);
								echo $primary; 
							?>" class="footer__link">
              <?php echo $difa_options['primary_phone']; ?>
            </a>
          </div>
          <div class="footer__phone">
            Telefon:
            <a href="tel:<?php 
								$secondary = str_replace(" ","",$difa_options['secondary_phone']);
								echo $secondary; 
							?>" class="footer__link">
              <?php echo $difa_options['secondary_phone']; ?>
            </a>
          </div>
          <div class="footer__email">
            <a href="mailto:difa4solutions@gmail.com" class="footer__link">difa4solutions@gmail.com</a>
          </div>
        </div>
        <address class="footer__adress">
          str. Grenoble 128 of. 314,<br />
          mun. Chișinau, MD2048<br />
          Republica Moldova
        </address>
        <p class="footer__copyright">
          DIFA. Toate drepturile sunt rezervate. 2021
        </p>
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