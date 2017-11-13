<?php
$current_link = get_permalink();
$term_moteur = get_terms( 'moteur', array(
    'orderby'    => 'count',
    'hide_empty' => 0
) );
$term_exterieur = get_terms( 'exterieur', array(
    'orderby'    => 'count',
    'hide_empty' => 0
) );
$term_interieur = get_terms( 'interieur', array(
    'orderby'    => 'count',
    'hide_empty' => 0
) );
$term_pack = get_terms( 'pack', array(
    'orderby'    => 'count',
    'hide_empty' => 0
) );
$term_option = get_terms( 'option', array(
    'orderby'    => 'count',
    'hide_empty' => 0
) );

?>

<div class="config__nav">

<!-- [moteur items] -->

  <div class="config__nav__container">
    <div class="config__nav__item">
      <img src="<?= IMAGES_URL ?>/configurateur/menu/moteur.jpg" alt="moteur" class="config__nav__item__bg">
      <a href="#" class="config__nav__item__link">Moteurs</a>
    </div>
    <div class="config__nav__sub">
      <img src="<?= IMAGES_URL ?>/return.svg" alt="retourner en arriere" class="config__nav__sub__returns">
      <?php 
      foreach( $term_moteur as $term ) {
        $current = $term->name;
        $slug = $term->slug;
        ?>
          <div class="config__nav__item__sub__item config__nav__item">
            <img src="<?= IMAGES_URL ?>/configurateur/menu/moteur.jpg" alt="moteur" class="config__nav__item__sub__item_img config__nav__item__bg ">
            <a href="#" class="config__nav__item__sub__link config__nav__item__link" data-mainSlug="moteur" data-slug="<?= $slug ?>" ><?= $current ?></a>
          </div>
      <?php         
      }
      ?>
    </div>
  </div>

<!-- [exterieur items] -->

  <div class="config__nav__container">
    <div class="config__nav__item">
      <img src="<?= IMAGES_URL ?>/configurateur/menu/ext.jpg" alt="moteur" class="config__nav__item__bg">
      <a href="#" class="config__nav__item__link">Extérieur</a>
    </div>
    <div class="config__nav__sub">
      <img src="<?= IMAGES_URL ?>/return.svg" alt="retourner en arriere" class="config__nav__sub__returns">
      <?php 
      foreach( $term_exterieur as $term ) {
        $current = $term->name;
        $slug = $term->slug;
        ?>
          <div class="config__nav__item__sub__item config__nav__item">
            <img src="<?= IMAGES_URL ?>/configurateur/menu/moteur.jpg" alt="moteur" class="config__nav__item__sub__item_img config__nav__item__bg ">
            <a href="#" class="config__nav__item__sub__link config__nav__item__link" data-mainSlug="exterieur" data-slug="<?= $slug ?>" ><?= $current ?></a>
          </div>
      <?php         
      }
      ?>
    </div>
  </div>

<!-- [interieur items] --> 

  <div class="config__nav__container">
    <div class="config__nav__item">
      <img src="<?= IMAGES_URL ?>/configurateur/menu/int.jpg" alt="moteur" class="config__nav__item__bg">
      <a href="#" class="config__nav__item__link">Intérieur</a>
    </div>
    <div class="config__nav__sub">
      <img src="<?= IMAGES_URL ?>/return.svg" alt="retourner en arriere" class="config__nav__sub__returns">
      <?php 
      foreach( $term_interieur as $term ) {
        $current = $term->name;
        $slug = $term->slug;
        ?>
          <div class="config__nav__item__sub__item config__nav__item">
            <img src="<?= IMAGES_URL ?>/configurateur/menu/moteur.jpg" alt="moteur" class="config__nav__item__sub__item_img config__nav__item__bg ">
            <a href="#" class="config__nav__item__sub__link config__nav__item__link" data-mainSlug="interieur" data-slug="<?= $slug ?>" ><?= $current ?></a>
          </div>
      <?php         
      }
      ?>
    </div>
  </div>

<!-- [pack items] -->

  <div class="config__nav__container">
    <div class="config__nav__item">
      <img src="<?= IMAGES_URL ?>/configurateur/menu/pack.jpg" alt="moteur" class="config__nav__item__bg">
      <a href="#" class="config__nav__item__link">Pack D'équipements</a>
    </div>
    <div class="config__nav__sub">
      <img src="<?= IMAGES_URL ?>/return.svg" alt="retourner en arriere" class="config__nav__sub__returns">
      <?php 
      foreach( $term_pack as $term ) {
        $current = $term->name;
        $slug = $term->slug;
        ?>
          <div class="config__nav__item__sub__item config__nav__item">
            <img src="<?= IMAGES_URL ?>/configurateur/menu/moteur.jpg" alt="moteur" class="config__nav__item__sub__item_img config__nav__item__bg ">
            <a href="#" class="config__nav__item__sub__link config__nav__item__link" data-mainSlug="pack" data-slug="<?= $slug ?>" ><?= $current ?></a>
          </div>
      <?php         
      }
      ?>
    </div>
  </div>

<!-- [options items] -->

  <div class="config__nav__container">
    <div class="config__nav__item">
      <img src="<?= IMAGES_URL ?>/configurateur/menu/option.jpg" alt="moteur" class="config__nav__item__bg">
      <a href="#" class="config__nav__item__link">Options</a>
    </div>
    <div class="config__nav__sub">
      <img src="<?= IMAGES_URL ?>/return.svg" alt="retourner en arriere" class="config__nav__sub__returns">
      <?php 
      foreach( $term_option as $term ) {
        $current = $term->name;
        $slug = $term->slug;
        ?>
          <div class="config__nav__item__sub__item config__nav__item">
            <img src="<?= IMAGES_URL ?>/configurateur/menu/moteur.jpg" alt="moteur" class="config__nav__item__sub__item_img config__nav__item__bg ">
            <a href="#" class="config__nav__item__sub__link config__nav__item__link" data-mainSlug="option" data-slug="<?= $slug ?>" ><?= $current ?></a>
          </div>
      <?php         
      }
      ?>
    </div>
  </div>
  <div class="config__term">
  <img src="<?= IMAGES_URL ?>/return.svg" alt="retourner en arriere" class="config__term__returns">
  </div>
</div>