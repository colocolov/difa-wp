<!-- HEADER -->


<?php if () : else: endif; ?>
<?php esc_html_e( 'Contacte', 'difa' ); ?>


<?php wp_body_open(); ?>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'difa' ); ?></a>

  <header id="masthead" class="site-header">
    <div class="site-branding">
      <?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
          rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <?php
			else :
				?>
      <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
          rel="home"><?php bloginfo( 'name' ); ?></a></p>
      <?php
			endif;
			$difa_description = get_bloginfo( 'description', 'display' );
			if ( $difa_description || is_customize_preview() ) :
				?>
      <p class="site-description">
        <?php echo $difa_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
      <?php endif; ?>
    </div><!-- .site-branding -->

    <nav id="site-navigation" class="main-navigation">
      <button class="menu-toggle" aria-controls="primary-menu"
        aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'difa' ); ?></button>
      <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
    </nav><!-- #site-navigation -->
  </header><!-- #masthead -->



  <!-- FOOTER -->


  <footer id="colophon" class="site-footer">
    <div class="site-info">
      <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'difa' ) ); ?>">
        <?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'difa' ), 'WordPress' );
				?>
      </a>
      <span class="sep"> | </span>
      <?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'difa' ), 'difa', '<a href="http://underscores.me/">domens</a>' );
				?>
    </div><!-- .site-info -->
  </footer><!-- #colophon -->
</div><!-- #page -->