<?php
$prefixe = 'design_philosophie--';
$prefixContent = 'design_philosophie--contenu--';
$design_upTitle = get_field($prefixe.'upTtitle');
$design_title = get_field($prefixe.'title');

$design_contenu_title = get_field($prefixContent.'title');
$design_contenu_explain = get_field($prefixContent.'explain');

$design_image = get_field($prefixe.'image');
?>

<div class="design__philo">

  <div class="design__philo__title title">
    <h4 class="design__philo__title__up title__up"><?= $design_upTitle ?></h4>
    <h3 class="design__philo__title__main title__main"><?= $design_title ?></h3>
  </div>

  <div class="design__philo__flex">
    <img src="<?= $design_image ?>" alt="BMW" class="design__philo__image to-animate">
    <div class="design__philo__content content">
      <h4 class="design__philo__content__title content__title to-animate"><?= $design_contenu_title ?></h4>
      <div class="design__philo__content__text content__text to-animate"><?= wpautop($design_contenu_explain) ?></div>
    </div>
  </div>

  <p class="design__philo__number numberSection">01</p>
</div>