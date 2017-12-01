<?php
$prefixe = 'home_header--';
$home_header = get_field($prefixe.'image');
$home_upTitle = get_field($prefixe.'upTitle');
$home_title = get_field($prefixe.'title');

?>

<div class="home__header color-nav">
    <img class="home__header__img" src="<?php echo $home_header; ?>" alt="">
    <div class="home__header__container">
        <h4 class="home__header__title__up title__up"><?php echo $home_upTitle; ?></h4>
        <h1 class="home__header__title"><?php echo $home_title; ?></h1>
    </div>
</div>