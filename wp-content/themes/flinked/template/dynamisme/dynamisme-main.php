<?php
$prefixe = 'dynamisme_header--';
$dyna__header = get_field($prefixe.'image');
$dyna__title = get_field($prefixe.'title');
$dyna__subTitle = get_field($prefixe.'subTitle');
?>

<div class="dyna__header block__header color-nav">
  <img src="<?= $dyna__header ?>" alt="bmw" class="dyna__header__image block__header__image">
  <div class="dyna__header__content block__header__content to-animate">
    <h2 class="dyna__header__content__title block__header__content__title"><?= $dyna__title ?></h2>
    <p class="dyna__header__content__subTitle block__header__content__subTitle"><?= $dyna__subtitle ?></p>
  </div>
</div>