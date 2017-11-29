<?php
$prefixe = 'securite_tranquillite--';
$securite_upTitle = get_field($prefixe.'upTitle');
$securite_title = get_field($prefixe.'title');
$securite_content = get_field($prefixe.'contenu');
$securite_image = get_field($prefixe.'image');
?>

<div class="securite__lumiere">
  <div class="securite__lumiere__title title">
      <h4 class="securite__lumiere__title__up title__up"><?= $securite_upTitle ?></h4>
      <h3 class="securite__lumiere__title__main title__main"><?= $securite_title ?></h3>
  </div>
  <div class="securite__lumiere__content to-animate">
    <div class="securite__lumiere__content__txt"><?= $securite_content ?></div>
  </div>
  <div class="securite__lumiere__image">
    <img class="securite__lumiere__image__img" src="<?= $securite_image ?>"/>
    <p class="securite__lumiere__number numberSection to-animate">01</p>
  </div>
</div>