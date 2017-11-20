<?php
$prefixe = 'configurateur_item_pack--';
$configurateur_title = get_field($prefixe.'titre');
$configurateur_price = get_field($prefixe.'prix');
$configurateur_slug = get_field($prefixe.'slug');
$configurateur_icone = get_field($prefixe.'icone');
$taxo = $mainSlug.'_'.$slug;
?>

<div class="config__term__item config__term__item__add config__term__item__adds--pack config__term__item--pack" data-cat="<?= $taxo ?>" data-price="<?= $configurateur_price ?>" data-slug="<?= $configurateur_slug ?>" data-title="<?= $configurateur_title ?>">
  <img src="<?= $configurateur_icone ?>" alt="couleur" class="config__term__item__icone">
  <p class="config__term__item__title"><?= $configurateur_title ?></p>
  <p class="config__term__item__price"><?= $configurateur_price ?>,00 €</p>
</div>