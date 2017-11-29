<?php
$prefixe = 'design_lumiere--';
$design_upTitle = get_field($prefixe.'upTitle');
$design_title = get_field($prefixe.'title');
$design_contenu = get_field($prefixe.'contenu');
$design_slider = get_field($prefixe.'slider');

?>

<div class="design__lumiere">
  <div class="design__lumiere__container">
    <div class="design__lumiere__title title">
      <h4 class="design__lumiere__title__up title__up"><?= $design_upTitle ?></h4>
      <h3 class="design__lumiere__title__main title__main"><?= $design_title ?></h3>
    </div>
    <div class="design__lumiere__content content">
      <div class="design__lumiere__content__text content__text to-animate"><?= $design_contenu;  ?></div>
    </div>
  </div>
  <div class="design__lumiere__slider slider to-animate">
    <div class="slider__container">
      <div class="design__lumiere__slider__container__mover slider__container__mover">
        <?php
          if( $design_slider ):
            foreach( $design_slider as $slider ):
              ?>
                <img src="<?= $slider['url']; ?>" alt="BMW" class="design__lumiere__slider__container__item slider__container__item">
              <?php
            endforeach;
          endif;
        ?>
      </div>
    </div>
    <div class="design__lumiere__slider__button slider__button">
        <a href="#" class="design__lumiere__slider__button__left slider__button__item slider__button__item--left"></a>
        <a href="#" class="design__lumiere__slider__button__right slider__button__item slider__button__item--right"></a>
    </div>
  </div>
  <p class="design__lumiere__number numberSection">03</p>
</div>