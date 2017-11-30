<?php 
$prefixe = 'home_technique--';
$prefixRepeater = 'home_technique--itemTechnique--';

$home_upTitle = get_field($prefixe.'upTitle');
$home_title = get_field($prefixe.'title');
$home_car = get_field($prefixe.'car');

$home_item_main = 'home_technique--itemTechnique';
$home_item_image = $prefixRepeater.'image';
$home_item_title = $prefixRepeater.'titre';
$home_item_content = $prefixRepeater.'explication';
?>

<div class="home__technique">
  <h4 class="home__technique__title__up title__up"><?php echo $home_upTitle; ?></h4>
  <h3 class="home__technique__title title__main"><?php echo $home_title; ?></h3>
  <div class="home__technique__container">
    <?php
    if( have_rows($home_item_main) ):
      while ( have_rows($home_item_main) ) : the_row();
          ?>
          <div class="home__technique__card">
            <img class="home__technique__card__img"src="<?php echo get_sub_field($home_item_image); ?>" alt="">
            <h3 class="home__technique__card__title"><?php echo get_sub_field($home_item_title); ?></h3>
            <p class="home__technique__card__txt">
              <?php echo get_sub_field($home_item_content); ?>
            </p>
            <span class="home__technique__card__pointer">
              <span class="home__technique__card__pointer__secondary"></span>
            </span>
          </div>
          <?php
      endwhile;  
    else : 
    endif;
    ?>
  </div>
</div>
<img class="home__technique__img" src="<?php echo $home_car; ?>" alt="">