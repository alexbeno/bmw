<?php
$prefixe = 'dynamisme_architecture--';
$prefixItem = 'dynamisme_architecture--contenu--';

$dyna_title = get_field($prefixe.'title');
$dyna_upTitle = get_field($prefixe.'upTitle');
$dyna_image = get_field($prefixe.'image');

$dyna_item = 'dynamisme_architecture--contenu';
$dyna_item_title = $prefixItem .'titre';
$dyna_item_contenu = $prefixItem .'texte';

// echo '</br>';
// echo'dynamisme architecture';
// echo '</br>';

// echo $dyna_upTitle;

// echo '</br>';

// echo $dyna_title;

// echo '</br>';

// echo $dyna_image;

// echo '</br>';

// if( have_rows($dyna_item) ):
//   while ( have_rows($dyna_item) ) : the_row();
//       echo '</br>';
//       echo '</br>';

//       echo get_sub_field($dyna_item_title);

//       echo '</br>';

//       echo get_sub_field($dyna_item_contenu);
//   endwhile;
// else :
// endif;

// echo '</br>';
// echo'--------------------------';
?>

<div class="dyna__archi">
  <div class="dyna__archi__title title">
    <h4 class="dyna__archi__title__up title__up"><?= $dyna_upTitle ?></h4>
    <h3 class="dyna__archi__title__main title__main"><?= $dyna_title ?></h3>
  </div>
  <img src="<?= $dyna_image ?>" alt="BMW" class="dyna__archi__image to-animate">
  <div class="dyna__archi__container">
  <?php
    if( have_rows($dyna_item) ):
      while ( have_rows($dyna_item) ) : the_row();

      ?>
        <div class="dyna__archi__container__content content">
          <h4 class="dyna__archi__container__content__title content__title to-animate"><?= get_sub_field($dyna_item_title); ?></h4>
          <div class="dyna__archi__container__content__text content__text to-animate"><?= get_sub_field($dyna_item_contenu);  ?></div>
        </div>
      <?php
      endwhile;
    else :
    endif;
  ?>
  <p class="dyna__archi__number numberSection">03</p>
  </div>