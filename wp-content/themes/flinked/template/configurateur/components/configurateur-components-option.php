<?php
global $post;
$prefixe = 'configurateur_item_option--';
$configurateur_title = get_field($prefixe.'titre');
$configurateur_price = get_field($prefixe.'prix');
$configurateur_slug = get_field($prefixe.'slug');
$configurateur_icone = get_field($prefixe.'icone');
$configurateur_modif = get_field($prefixe.'modification_visuel');
$configurateur_payant = get_field($prefixe.'serie');
$term_list = wp_get_post_terms($post->ID, $mainSlug, array('fields' => 'all'));
$slug = $term_list[0]->slug;
$taxo = $mainSlug.'_'.$slug;

$term_option = get_terms( 'option', array(
  'orderby'    => 'count',
  'hide_empty' => 0
) );

?>

<?php if($configurateur_payant === true) { ?>
<div class="config__term__item config__term__item__add config__term__item__add--option config__term__item--option" data-option="option" data-cat="<?= $taxo ?>" data-price="<?= $configurateur_price ?>" data-slug="<?= $configurateur_slug ?>" data-title="<?= $configurateur_title ?>" data-image="<?= $configurateur_modif ?>">
  <img src="<?= $configurateur_icone ?>" alt="couleur" class="config__term__item__icone">
  <p class="config__term__item__title"><?= $configurateur_title ?></p>
  <p class="config__term__item__price"><?= $configurateur_price ?>,00 €</p>
</div>

<?php } else { ?>

<div class="config__term__item config__term__item--option config__term__item--option--serie" data-option="option" data-cat="<?= $taxo ?>" data-price="<?= $configurateur_price ?>" data-slug="<?= $configurateur_slug ?>" data-title="<?= $configurateur_title ?>" data-image="<?= $configurateur_modif ?>">
  <img src="<?= $configurateur_icone ?>" alt="couleur" class="config__term__item__icone">
  <p class="config__term__item__title"><?= $configurateur_title ?></p>
  <p class="config__term__item__price"><?= $configurateur_price ?>,00 €</p>
</div>

  <?php } ?>