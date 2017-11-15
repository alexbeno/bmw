<?php
  $prefixe = "configurateur_config--";
  $config_price = get_field($prefixe.'prix');
?>


<div class="config__price">
  <h1>c'est cher quand même </h1>
  <p data-price="<?= $config_price ?>" class="config__price__item"><?= $config_price ?>,00</p>
</div>