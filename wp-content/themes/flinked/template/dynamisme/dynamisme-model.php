<?php 
$prefixe = 'dynamisme_model--';
$dyna_title = get_field($prefixe.'title');
$dyna_upTitle = get_field($prefixe.'upTitle');
$dyna_contenu = get_field($prefixe.'contenu');
$dyna_image = get_field($prefixe.'image');

?>

<div class="dyna__mode">
  <div class="dyna__mode__content content">
    <div class="dyna__mode__title title">
      <h4 class="dyna__mode__title__up title__up"><?= $dyna_upTitle ?></h4>
      <h3 class="dyna__mode__title__main title__main"><?= $dyna_title ?></h3>
    </div>
    <div class="dyna__mode__content__text content__text"><?= $dyna_contenu;  ?></div>
  </div>
  <div class="dyna__mode__image slider">
    <img src="<?= $dyna_image ?>" alt="BMW" class="dyna__mode__image__img">
  </div>
  <p class="dyna__mode__number numberSection">02</p>
</div>