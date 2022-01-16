<?php
 $cnt = 0;
    $cnt++;
   echo $cnt; 
    
?>

<a href="<?php the_permalink(); ?>" class="page__work page__work--middle">
  <div class="page__photo page__photo--middle">
    <img class="image" src="<?php echo get_the_post_thumbnail_url( $post_ID, 'large' ); ?>"
      alt="<?php the_title(); ?>" />
  </div>
  <h2 class="page__title"><?php the_title(); ?></h2>
  <p class="page__adress"><?php echo get_the_excerpt(); ?></p>
</a>
<!-- <a href="#" class="page__work page__work--middle">
        <div class="page__photo page__photo--middle">
          <img class="image" src="images/portfolio/interior/02.jpg" alt="" />
        </div>
        <h2 class="page__title">Apartament 64 m2 “Park House”</h2>
        <p class="page__adress">Bd. Moscovei 9/5</p>
      </a>
      <a href="#" class="page__work page__work--small">
        <div class="page__photo page__photo--small">
          <img class="image" src="images/portfolio/interior/03.jpg" alt="" />
        </div>
        <h2 class="page__title">Apartament 63 m2</h2>
        <p class="page__adress">Str. Calea Iesilor 5</p>
      </a>
      <a href="#" class="page__work page__work--small">
        <div class="page__photo page__photo--small">
          <img class="image" src="images/portfolio/interior/04.jpg" alt="" />
        </div>
        <h2 class="page__title">Apartament 63 m2</h2>
        <p class="page__adress">Str. Calea Iesilor 5</p>
      </a>
      <a href="#" class="page__work page__work--median">
        <div class="page__photo page__photo--median">
          <img class="image" src="images/portfolio/interior/05.jpg" alt="" />
        </div>
        <h2 class="page__title">Matei Basarab 2/1</h2>
        <p class="page__adress">Apartament 43.4 m2</p>
      </a>
      <a href="#" class="page__work page__work--big">
        <div class="page__photo page__photo--big">
          <img class="image" src="images/portfolio/interior/06.jpg" alt="" />
        </div>
        <h2 class="page__title">Apartament 59 m2</h2>
        <p class="page__adress">Bd. Ștefan cel Mare 184</p>
      </a> -->