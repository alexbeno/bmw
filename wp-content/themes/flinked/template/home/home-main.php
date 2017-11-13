<?php 
$prefixe = 'home_header--';
$home_header = get_field($prefixe.'image');
$home_upTitle = get_field($prefixe.'upTitle');
$home_title = get_field($prefixe.'title');

echo'home header';
echo '</br>';

echo $home_header;

echo '</br>';

echo $home_upTitle;

echo '</br>';

echo $home_title;

echo '</br>';
echo'--------------------------';
?>