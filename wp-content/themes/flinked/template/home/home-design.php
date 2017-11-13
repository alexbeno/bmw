<?php 
$prefixe = 'home__design--';
$prefixeExplain = 'home__design--explication--';
$home_upTitle = get_field($prefixe.'sur_titre');
$home_title = get_field($prefixe.'titre');

$home_explain_title = get_field($prefixeExplain.'title');
$home_explain_content = get_field($prefixeExplain.'contenu');
$home_explain_link = get_field($prefixeExplain.'lien');

$home_slider = get_field($prefixe.'slider');


echo '</br>';

echo'home design';

echo '</br>';

echo $home_upTitle;

echo '</br>';

echo $home_title;

echo '</br>';

echo $home_explain_title;

echo '</br>';

echo $home_explain_content;

echo '</br>';

echo $home_explain_link;

echo '</br>';
echo 'slider :';
echo '</br>';

if( $home_slider ): 
  foreach( $home_slider as $slider ): 
        echo $slider['url'];
        echo '</br>'; 
  endforeach; 
endif;

echo '</br>';
echo'--------------------------';
?>