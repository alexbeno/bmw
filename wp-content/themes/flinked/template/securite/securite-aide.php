<?php
$prefixe = 'securite_aide--';
$securite_upTitle = get_field($prefixe.'upTitle');
$securite_title = get_field($prefixe.'title');
$securite_content = get_field($prefixe.'contenu');
$securite_slider = get_field($prefixe.'slider');
?>

<div class="securite__aide">
  <div class="securite__aide__content content">
    <div class="securite__aide__title title  to-animate">
      <h4 class="securite__aide__title__up title__up"><?= $securite_upTitle ?></h4>
      <h3 class="securite__aide__title__main title__main"><?= $securite_title ?></h3>
    </div>
    <div class="securite__aide__content__text content__text  to-animate"><?= $securite_content;  ?></div>
  </div>
  <div class="securite__aide__slider slider to-animate">
    <div class="slider__container">
      <div class="securite__aide__slider__container__mover slider__container__mover">
        <?php
          if( $securite_slider ):
            foreach( $securite_slider as $slider ):
              ?>
                <img src="<?= $slider['url']; ?>" alt="BMW" class="securite__aide__slider__container__item slider__container__item">
              <?php
            endforeach;
          endif;
        ?>
      </div>
    </div>
    <div class="securite__aide__slider__button slider__button">
        <a href="#" class="securite__aide__slider__button__left slider__button__item slider__button__item--left"></a>
        <a href="#" class="securite__aide__slider__button__right slider__button__item slider__button__item--right"></a>
    </div>
  </div>
  <p class="securite__aide__number numberSection to-animate">02</p>
</div>