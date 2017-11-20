<?php
$prefixe = 'configurateur_item__interieur--';
$configurateur_title = get_field($prefixe.'titre');
$configurateur_price = get_field($prefixe.'prix');
$configurateur_slug = get_field($prefixe.'slug');
$configurateur_icone = get_field($prefixe.'icone');
$configurateur_modif = get_field($prefixe.'modification_visuel');
$taxo = $mainSlug.'_'.$slug;
?>

<div class="config__term__item config__term__item__add config__term__item__add--interieur config__term__item--interieur" data-cat="<?= $taxo ?>" data-price="<?= $configurateur_price ?>" data-slug="<?= $configurateur_slug ?>" data-title="<?= $configurateur_title ?>" data-image="<?= $configurateur_modif ?>">
  <img src="<?= $configurateur_icone ?>" alt="couleur" class="config__term__item__icone">
  <p class="config__term__item__title"><?= $configurateur_title ?></p>
  <p class="config__term__item__price"><?= $configurateur_price ?>,00 €</p>
</div>