<?php 
$prefixe = 'design_header--';
$design_header = get_field($prefixe.'image');
$design_title = get_field($prefixe.'title');
$design_subTitle = get_field($prefixe.'subTitle');
?>

<div class="design__header block__header color-nav">
  <img src="<?= $design_header ?>" alt="bmw" class="design__header__image block__header__image">
  <div class="design__header__content block__header__content">
    <h2 class="design__header__content__title block__header__content__title"><?= $design_title ?></h2>
    <p class="design__header__content__subTitle block__header__content__subTitle"><?= $design_subTitle ?></p>
  </div>
</div>