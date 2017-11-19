<?php 
$prefixe = 'home_header--';
$home_header = get_field($prefixe.'image');
$home_upTitle = get_field($prefixe.'upTitle');
$home_title = get_field($prefixe.'title');

?>

<img src="<?php echo $home_header; ?>" alt="">
<h1 class="block__header__content__title"><?php echo $home_title; ?></h1>
<h4 class="title__up"><?php echo $home_upTitle; ?></h4>