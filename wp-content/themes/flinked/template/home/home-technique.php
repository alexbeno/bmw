<?php 
$prefixe = 'home_technique--';
$prefixRepeater = 'home_technique--itemTechnique--';

$home_upTitle = get_field($prefixe.'upTitle');
$home_title = get_field($prefixe.'title');
$home_car = get_field($prefixe.'car');

$home_item_main = 'home_technique--itemTechnique';
$home_item_image = $prefixRepeater.'image';
$home_item_title = $prefixRepeater.'titre';
$home_item_content = $prefixRepeater.'explication';
?>


<h4 class="title__up"><?php echo $home_upTitle; ?></h4>
<h3 class="title__main"><?php echo $home_title; ?></h3>
<?php
if( have_rows($home_item_main) ):
  while ( have_rows($home_item_main) ) : the_row();
      ?>
      <img src="<?php echo get_sub_field($home_item_image); ?>" alt="">
      <h3><?php echo get_sub_field($home_item_title); ?></h3>
      <p><?php echo get_sub_field($home_item_content); ?></p>
      <?php
  endwhile;  
else : 
endif;
?>
<img src="<?php echo $home_car; ?>" alt="">