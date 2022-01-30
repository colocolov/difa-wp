<?php 
  global $difa_options;
?>
<footer class="footer footer--contact">
  <div class="container">
    <?php 
      if ($difa_options['copyright']) :
    ?>
    <div class="footer__content footer__content--contact">
      <p class="footer__copyright">
        <?php echo esc_attr($difa_options['copyright']); ?>
      </p>
    </div>
    <?php endif; ?>
  </div>
</footer>

</div>
<?php wp_footer(); ?>
</body>

</html>