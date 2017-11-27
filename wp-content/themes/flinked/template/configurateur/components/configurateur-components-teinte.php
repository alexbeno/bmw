<?php
$prefixe = 'configurateur_item--';
$configurateur_title = get_field($prefixe.'titre');
$configurateur_price = get_field($prefixe.'prix');
$configurateur_slug = get_field($prefixe.'slug');
$configurateur_icone = get_field($prefixe.'icone');
$configurateur_serie = get_field($prefixe.'serie');
$taxo = $mainSlug.'_'.$slug;
?>

<?php
  if ($configurateur_serie === true){
    ?>
      <div class="config__term__item config__term__item__add config__term__item__adds--color config__term__item--active" data-cat="<?= $taxo ?>" data-price="<?= $configurateur_price ?>" data-slug="<?= $configurateur_slug ?>" data-title="<?= $configurateur_title ?>">
    <?php
  }
  else {
    ?>
      <div class="config__term__item config__term__item__add config__term__item__adds--color" data-cat="<?= $taxo ?>" data-price="<?= $configurateur_price ?>" data-slug="<?= $configurateur_slug ?>" data-title="<?= $configurateur_title ?>">
    <?php
  }
?>

  <img src="<?= $configurateur_icone ?>" alt="couleur" class="config__term__item__icone">
  <p class="config__term__item__title"><?= $configurateur_title ?></p>
  <p class="config__term__item__price"><?= $configurateur_price ?> €</p>
</div>