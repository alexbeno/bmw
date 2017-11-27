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
    <?php 
      foreach( $term_moteur as $term ) {
        $current = $term->name;
        $slug = $term->slug;
    ?>
    <div class="config__nav__item">
      <img src="<?= IMAGES_URL ?>/configurateur/menu/moteur.jpg" alt="moteur" class="config__nav__item__bg">
      <a href="#" class="config__nav__item__sub__link config__nav__item__link" data-mainSlug="moteur" data-slug="<?= $slug ?>" ><?= $current ?></a>
    </div>
    <?php } ?>
  </div>

<!-- [exterieur items] -->

  <div class="config__nav__container">

    <?php 
      foreach( $term_exterieur as $term ) {
        $current = $term->name;
        $slug = $term->slug;
    ?>
        <div class="config__nav__item config__nav__item--exterieur">
          <img src="<?= IMAGES_URL ?>/configurateur/menu/option.jpg" alt="moteur" class="config__nav__item__bg ">
          <a href="#" class="config__nav__item__sub__link config__nav__item__link" data-mainSlug="exterieur" data-slug="<?= $slug ?>" ><?= $current ?></a>
        </div>
    <?php } ?>
  </div>

<!-- [interieur items] --> 

  <div class="config__nav__container">
    <?php  
      foreach( $term_interieur as $term ) {
        $current = $term->name;
        $slug = $term->slug;
    ?>
    <div class="config__nav__item config__nav__item--interieur">
      <img src="<?= IMAGES_URL ?>/configurateur/menu/int.jpg" alt="moteur" class="config__nav__item__bg">
      <a href="#" class="config__nav__item__sub__link config__nav__item__link" data-mainSlug="interieur" data-slug="<?= $slug ?>" ><?= $current ?></a>
    </div>
    <?php } ?>
  </div>

<!-- [pack items] -->

  <div class="config__nav__container">
    <?php  
      foreach( $term_pack as $term ) {
        $current = $term->name;
        $slug = $term->slug;
    ?>
    <div class="config__nav__item">
      <img src="<?= IMAGES_URL ?>/configurateur/menu/pack.jpg" alt="moteur" class="config__nav__item__bg">
      <a href="#" class="config__nav__item__sub__link config__nav__item__link" data-mainSlug="pack" data-slug="<?= $slug ?>" >Pack D'équipements</a>
    </div>
    <?php }?>
  </div>

<!-- [options items] -->

  <div class="config__nav__container">
    <div class="config__nav__item">
      <img src="<?= IMAGES_URL ?>/configurateur/menu/option.jpg" alt="moteur" class="config__nav__item__bg">
      <a href="#" class="config__nav__item__sub__link config__nav__item__link" data-mainSlug="option" >option</a>
    </div>
  </div>

  <div class="config__term">
    <div class="config__term__container">
    </div>
  </div>
</div>

<div class="config__mobilNav">
  <div class="config__mobilNav__slide">
    <?php 
      foreach( $term_moteur as $term ) {
        $current = $term->name;
        $slug = $term->slug;
      ?>
      <div class="config__mobilNav__item">
        <a href="#" class="config__mobilNav__item__link" data-mainSlug="moteur" data-slug="<?= $slug ?>" ><?= $current ?></a>
      </div>
      <?php } ?>
  </div>
</div>