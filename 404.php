<?php
/**
 * The template for displaying 404 pages (not found)
 */
get_header();
?>

<section class="error-404">
  <div class="container">
    <div class="error-404__content">
      <h1 class="heading error-404__head">404</h1>
      <div class="error-404__block">
        <p class="error-404__text"><?php esc_html_e( 'page not found', 'difa' ); ?></p>
      </div>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
        class="btn-reset button error-404__btn"><?php esc_html_e( 'Back to home', 'difa' ); ?></a>
    </div>
  </div>
</section>

<?php
get_footer();