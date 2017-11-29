<?php
$prefixe = 'dynamisme_aerodynamique--';
$dyna_title = get_field($prefixe.'title');
$dyna_upTitle = get_field($prefixe.'upTitle');
$dyna_contenu = get_field($prefixe.'contenu');
$dyna_slider = get_field($prefixe.'slider');
?>

<div class="dyna__aero">
  <div class="dyna__aero__content content">
    <div class="dyna__aero__title title">
      <h4 class="dyna__aero__title__up title__up"><?= $dyna_upTitle ?></h4>
      <h3 class="dyna__aero__title__main title__main"><?= $dyna_title ?></h3>
    </div>
    <div class="dyna__aero__content__text content__text to-animate"><?= $dyna_contenu;  ?></div>
  </div>
  <div class="dyna__aero__slider slider to-animate">
    <div class="slider__container">
      <div class="dyna__aero__slider__container__mover slider__container__mover">
        <?php
          if( $dyna_slider ):
            foreach( $dyna_slider as $slider ):
              ?>
                <img src="<?= $slider['url']; ?>" alt="BMW" class="dyna__aero__slider__container__item slider__container__item">
              <?php
            endforeach;
          endif;
        ?>
      </div>
    </div>
    <div class="dyna__aero__slider__button slider__button">
        <a href="#" class="dyna__aero__slider__button__left slider__button__item slider__button__item--left"></a>
        <a href="#" class="dyna__aero__slider__button__right slider__button__item slider__button__item--right"></a>
    </div>
  </div>
  <p class="dyna__aero__number numberSection">02</p>
</div>