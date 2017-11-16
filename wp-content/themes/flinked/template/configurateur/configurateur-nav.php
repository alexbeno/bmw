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
  <div class="config__nav__histo">
    <img src="<?= IMAGES_URL ?>/back.svg" alt="moteur" class="config__nav__histo__arrow config__nav__histo__arrow--back">
    <img src="<?= IMAGES_URL ?>/next.svg" alt="moteur" class="config__nav__histo__arrow config__nav__histo__arrow--next">
  </div>


<!-- [moteur items] -->

  <div class="config__nav__container">
  <?php if(wp_count_terms( 'moteur' ) > 1) { ?>

    <div class="config__nav__item">
      <img src="<?= IMAGES_URL ?>/configurateur/menu/moteur.jpg" alt="moteur" class="config__nav__item__bg">
      <a href="#" class="config__nav__item__link">Moteurs</a>
    </div>
    <div class="config__nav__sub">
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
    <?php 
    } 
    else { 
      foreach( $term_moteur as $term ) {
        $current = $term->name;
        $slug = $term->slug;
    ?>
    <div class="config__nav__item">
      <img src="<?= IMAGES_URL ?>/configurateur/menu/moteur.jpg" alt="moteur" class="config__nav__item__bg">
      <a href="#" class="config__nav__item__sub__link config__nav__item__link" data-mainSlug="moteur" data-slug="<?= $slug ?>" ><?= $current ?></a>
    </div>
    <?php }} ?>
  </div>

<!-- [exterieur items] -->

  <div class="config__nav__container">
  <?php if(wp_count_terms( 'exterieur' ) > 1) { ?>

    <div class="config__nav__item">
      <img src="<?= IMAGES_URL ?>/configurateur/menu/ext.jpg" alt="moteur" class="config__nav__item__bg">
      <a href="#" class="config__nav__item__link">Extérieur</a>
    </div>
    <div class="config__nav__sub">
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
    <?php 
    } 
    else { 
      foreach( $term_exterieur as $term ) {
        $current = $term->name;
        $slug = $term->slug;
    ?>
    <div class="config__nav__item">
      <img src="<?= IMAGES_URL ?>/configurateur/menu/ext.jpg" alt="moteur" class="config__nav__item__bg">
      <a href="#" class="config__nav__item__sub__link config__nav__item__link" data-mainSlug="exterieur" data-slug="<?= $slug ?>" ><?= $current ?></a>
    </div>
    <?php }} ?>
  </div>

<!-- [interieur items] --> 

  <div class="config__nav__container">
  <?php if(wp_count_terms( 'interieur' ) > 1) { ?>

    <div class="config__nav__item">
      <img src="<?= IMAGES_URL ?>/configurateur/menu/int.jpg" alt="moteur" class="config__nav__item__bg">
      <a href="#" class="config__nav__item__link">Intérieur</a>
    </div>
    <div class="config__nav__sub">
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
    <?php 
    } 
    else { 
      foreach( $term_interieur as $term ) {
        $current = $term->name;
        $slug = $term->slug;
    ?>
    <div class="config__nav__item">
      <img src="<?= IMAGES_URL ?>/configurateur/menu/int.jpg" alt="moteur" class="config__nav__item__bg">
      <a href="#" class="config__nav__item__sub__link config__nav__item__link" data-mainSlug="interieur" data-slug="<?= $slug ?>" ><?= $current ?></a>
    </div>
    <?php }} ?>
  </div>

<!-- [pack items] -->

  <div class="config__nav__container">
  <?php if(wp_count_terms( 'pack' ) > 1) { ?>

    <div class="config__nav__item">
      <img src="<?= IMAGES_URL ?>/configurateur/menu/pack.jpg" alt="moteur" class="config__nav__item__bg">
      <a href="#" class="config__nav__item__link">Pack D'équipements</a>
    </div>
    <div class="config__nav__sub">
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
    <?php 
    } 
    else { 
      foreach( $term_pack as $term ) {
        $current = $term->name;
        $slug = $term->slug;
    ?>
    <div class="config__nav__item">
      <img src="<?= IMAGES_URL ?>/configurateur/menu/pack.jpg" alt="moteur" class="config__nav__item__bg">
      <a href="#" class="config__nav__item__sub__link config__nav__item__link" data-mainSlug="pack" data-slug="<?= $slug ?>" >Pack D'équipements</a>
    </div>
    <?php }} ?>
  </div>

<!-- [options items] -->

  <div class="config__nav__container">
  <?php if(wp_count_terms( 'option' ) > 1) { ?>
    <div class="config__nav__item">
      <img src="<?= IMAGES_URL ?>/configurateur/menu/option.jpg" alt="moteur" class="config__nav__item__bg">
      <a href="#" class="config__nav__item__link">Options</a>
    </div>
    <div class="config__nav__sub">
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
    <?php 
    } 
    else { 
      foreach( $term_option as $term ) {
        $current = $term->name;
        $slug = $term->slug;
    ?>
    <div class="config__nav__item">
      <img src="<?= IMAGES_URL ?>/configurateur/menu/option.jpg" alt="moteur" class="config__nav__item__bg">
      <a href="#" class="config__nav__item__sub__link config__nav__item__link" data-mainSlug="option" data-slug="<?= $slug ?>" ><?= $current ?></a>
    </div>
    <?php }} ?>
  </div>
  <div class="config__term">
    <div class="config__term__container">
    </div>
  </div>
</div>