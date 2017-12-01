<?php
  $prefixe = "configurateur_config--";
  $config_price = get_field($prefixe.'prix');
?>

<div id ="config__car" class="config__car">
  <div class="loader">
      <div class="loader__content"></div>
  </div>
  <div class="config__car__imageContainer">
    <img id="config__car__image" src="" alt="BMW" class="dragdealer config__car__image">
  </div>

  <div class="config__price">
    <p class="config__price__text">Prix maximum conseillé :</p>
    <p data-price="<?= $config_price ?>" class="config__price__item"><?= $config_price ?>,00</p>
    <a href="#" class="config__price__devis">Demander un devis</a>
  </div>

  <img id="config__car__imageMobil" src="" alt="BMW" class="dragdealer config__car__imageMobil">
  <div class="config__3D config__3D--active">
    <img src="<?= IMAGES_URL ?>/iconeConf/left-arrow.svg" alt="3d view"class="config__3D__image config__3D__image--left">
    <img src="<?= IMAGES_URL ?>/iconeConf/hand-pointer.svg" alt="3d view"class="config__3D__image config__3D__image--hand">
    <img src="<?= IMAGES_URL ?>/iconeConf/left-arrow.svg" alt="3d view"class="config__3D__image config__3D__image--right">
  </div>
</div>