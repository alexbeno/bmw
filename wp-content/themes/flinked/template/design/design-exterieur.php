<?php 
$prefixe = 'design_exterieur--';
$prefixeRepeat = 'design_exterieur--contenu--';
$design_title = get_field($prefixe.'title');
$design_upTitle = get_field($prefixe.'upTitle');
$design_image = get_field($prefixe.'image');

$design_content = 'design_exterieur--contenu';
$design_content_title = $prefixeRepeat.'titre';
$design_content_content = $prefixeRepeat.'explain';
?>

<div class="design__exterieur">
  <div class="design__exterieur__title title">
    <h4 class="design__exterieur__title__up title__up"><?= $design_upTitle ?></h4>
    <h3 class="design__exterieur__title__main title__main"><?= $design_title ?></h3>
  </div>
  <div class="design__exterieur__container">
    <?php 
    if( have_rows($design_content) ):
      while ( have_rows($design_content) ) : the_row();
          ?>
            <div class="design__exterieur__content content">
              <h4 class="design__exterieur__content__title content__title"><?= get_sub_field($design_content_title); ?></h4>
              <div class="design__exterieur__content__text content__text"><?= get_sub_field($design_content_content);  ?></div>
            </div>  
          <?php
      endwhile;  
    else : 
    endif;
    ?>
  </div>
  <img src="<?= $design_image ?>" alt="BMW" class="design__exterieur__footer">
  <p class="design__exterieur__number numberSection">02</p>
</div>