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


echo '</br>';
echo'home technique';
echo '</br>';

echo $home_car;

echo '</br>';

echo $home_upTitle;

echo '</br>';

echo $home_title;

if( have_rows($home_item_main) ):
  while ( have_rows($home_item_main) ) : the_row();
      echo '</br>';
      echo '</br>';

      echo get_sub_field($home_item_image);  
      
      echo '</br>';

      echo get_sub_field($home_item_title); 
      
      echo '</br>'; 

      echo get_sub_field($home_item_content);  
  endwhile;  
else : 
endif;

echo '</br>';
echo'--------------------------';
?>