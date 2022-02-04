<?php
/**
 * The header for our theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="theme-color" content="#111111" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php 
    global $difa_options;
  ?>

  <div class="wrapper">
    <header class="header">
      <div class="container header__container">

        <?php if ( is_front_page() && is_home() ) :	?>
        <a class="header__link header__link--logo">
          <img class="logo image" src="<?php echo $difa_options['logo_difa']['url']; ?>"
            alt="<?php bloginfo( 'name' ); ?>" />
        </a>
        <?php	else : ?>
        <a class="header__link header__link--logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="logo image" src="<?php echo $difa_options['logo_difa']['url']; ?>"
            alt="<?php bloginfo( 'name' ); ?>" />
        </a>
        <?php	endif; ?>

        <?php if ($difa_options['primary_phone']) : ?>
        <a data-da=".menu__body,768,1" href="tel:<?php 
								$primary = str_replace(" ","",$difa_options['primary_phone']);
								echo esc_attr($primary); 
							?>" class="header__link header__link--phone">
          <?php echo esc_attr($difa_options['primary_phone']); ?>
        </a>
        <?php endif; ?>
        <div class="header__menu menu">
          <nav class="menu__body">

            <?php wp_nav_menu( [
								'theme_location'  => 'header',
								'container'       => false,
								'menu_class'      => 'menu__list',
								'menu_id'         => false,
								'echo'            => true,
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
							] ); ?>

            <?php if ( has_nav_menu( 'langs' ) ) :
              wp_nav_menu( [
								'theme_location'  => 'langs',
								'container'       => false,
								'menu_class'      => '',
								'menu_id'         => false,
								'echo'            => true,
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
							] ); 
              endif;  
            ?>

          </nav>
          <button type="button" class="menu__icon">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
    </header>