<?php 
$prefixe = 'home__design--';
$prefixeExplain = 'home__design--explication--';
$home_upTitle = get_field($prefixe.'sur_titre');
$home_title = get_field($prefixe.'titre');

$home_explain_title = get_field($prefixeExplain.'title');
$home_explain_content = get_field($prefixeExplain.'contenu');
$home_explain_link = get_field($prefixeExplain.'lien');

$home_slider = get_field($prefixe.'slider');
?>

<div class="home__design">
  <div class="home__design__container">
    <div class="home__design__title title">
      <h4 class="home__design__title__up title__up"><?php echo $home_upTitle; ?></h4>
      <h3 class="home__design__title__main title__main"><?php echo $home_title; ?></h3>
    </div>
    <div class="home__design__content content">
      <h3 class="home__design__content__title content__title"><?php echo $home_explain_title; ?></h3>
      <div class="home__design__content__text content__text">
        <p><?php echo $home_explain_content; ?></p>
      </div>
      <a class="home__design__content__btn btn" href="<?php echo $home_explain_link; ?>">En savoir plus</a>
    </div>
  </div>
  <div class="home__design__slider slider">
    <div class="slider__container">
      <div class="slider__container__mover">
        <?php
        if( $home_slider ): 
          foreach( $home_slider as $slider ): 
            ?>
              <img src="<?php echo $slider['url']; ?>" alt="BMW" class="slider__container__item">
            <?php
          endforeach; 
        endif;
        ?>
      </div>
    </div>
    <div class="slider__button">
        <a href="#" class="slider__button__item slider__button__item--left"></a>
        <a href="#" class="slider__button__item slider__button__item--right"></a>
    </div>
  </div>
</div>