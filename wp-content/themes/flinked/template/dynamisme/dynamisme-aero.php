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
  <div class="dyna__aero__slider to-animate">
    <img src="<?= $dyna_slider ?>" alt="BMW" class="dyna__aero__slider__container__item">
  </div>
</div>