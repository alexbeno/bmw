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
  <div class="securite__aide__slider to-animate">
    <img src="<?= $securite_slider?>" alt="BMW" class="securite__aide__slider__container__item">
  </div>
</div>