<?php
$prefixe = 'configurateur_item_moteur--';
$configurateur_title = get_field($prefixe.'titre');
$configurateur_price = get_field($prefixe.'prix');
$configurateur_slug = get_field($prefixe.'slug');
$configurateur_serie = get_field($prefixe.'serie');
$taxo = $mainSlug.'_'.$slug;
?>
<?php
  if ($configurateur_serie === true){
    ?>
      <div class="config__term__item config__term__item__add config__term__item__adds--moteur config__term__item--moteur config__term__item--active" data-cat="<?= $taxo ?>" data-price="<?= $configurateur_price ?>" data-slug="<?= $configurateur_slug ?>" data-title="<?= $configurateur_title ?>" data-taxo="<?= $slug ?>">
    <?php
  }
  else {
    ?>
      <div class="config__term__item config__term__item__add config__term__item__adds--moteur config__term__item--moteur" data-cat="<?= $taxo ?>" data-price="<?= $configurateur_price ?>" data-slug="<?= $configurateur_slug ?>" data-title="<?= $configurateur_title ?>" data-taxo="<?= $slug ?>">
    <?php
  }
?>
  <p class="config__term__item__title"><?= $configurateur_title ?></p>
  <div class="config__term__item__technique">
    <?php
      if( have_rows('configurateur_item_moteur--technique') ):
          while ( have_rows('configurateur_item_moteur--technique') ) : the_row();
              ?>
                <p class="config__term__item__technique__item"><?= the_sub_field('configurateur_item_moteur--technique--item'); ?></p>
              <?php
          endwhile;
      else :
      endif;
    ?>
  </div>
  <p class="config__term__item__price"><?= $configurateur_price ?> €</p>
</div>