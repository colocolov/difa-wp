<?php
    
?>

<a href="<?php the_permalink(); ?>" class="page__work page__work--middle">
  <div class="page__photo page__photo--middle">
    <img class="image" src="<?php echo get_the_post_thumbnail_url( $post_ID, 'large' ); ?>"
      alt="<?php the_title(); ?>" />
  </div>
  <h2 class="page__title"><?php the_title(); ?></h2>
  <p class="page__adress"><?php echo get_the_excerpt(); ?></p>
</a>