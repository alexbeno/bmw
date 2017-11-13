<?php 
$prefixe = 'securite_affichage--';
$securite_upTitle = get_field($prefixe.'upTitle');
$securite_title = get_field($prefixe.'title');
$securite_content = get_field($prefixe.'contenu');
$securite_image = get_field($prefixe.'image');
?>

<div class="securite__affichage">
  <img class="securite__affichage__image" src="<?= $securite_image ?>"/>
  <div class="securite__affichage__content content">
    <div class="securite__affichage__title title">
      <h4 class="securite__affichage__title__up title__up"><?= $securite_upTitle ?></h4>
      <h3 class="securite__affichage__title__main title__main"><?= $securite_title ?></h3>
    </div>
    <div class="securite__affichage__content__text content__text"><?= $securite_content;  ?></div>
  </div> 
  <p class="securite__affichage__number numberSection">03</p>
</div>