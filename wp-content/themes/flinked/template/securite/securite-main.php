<?php
$prefixe = 'securite_header--';
$securite_header = get_field($prefixe.'image');
$securite_subtitle = get_field($prefixe.'subtitle');
$securite_title = get_field($prefixe.'title');
?>

<div class="securite__header block__header color-nav">
  <img src="<?= $securite_header ?>" alt="bmw" class="securite__header__image block__header__image">
  <div class="securite__header__content block__header__content to-animate">
    <h2 class="securite__header__content__title block__header__content__title"><?= $securite_title ?></h2>
    <p class="securite__header__content__subTitle block__header__content__subTitle"><?= $securite_subtitle ?></p>
  </div>
</div>