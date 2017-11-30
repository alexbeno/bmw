<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Bmw i8</title>
        <!-- Execution de la fonction wp_head() obligatoire ! -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <nav class="header">
        <a href="<?php echo get_option('home'); ?>/" ><img class="header__logo" src="<?=IMAGES_URL?>/bmw.png"/></a>
        <div class="header__menu">
            <?php wp_nav_menu(array( 'theme_location' => 'header' )); ?>
        </div>
    </nav>

    <nav class="header--responsive">
        <a href="<?php echo get_option('home'); ?>/" ><img class="header--responsive__logo" src="<?=IMAGES_URL?>/bmw.png"/></a>
        <img class="header--responsive__button" src="<?=IMAGES_URL?>/menu.svg"/>
        <div class="header--responsive__menu">
            <img class="header--responsive__close" src="<?=IMAGES_URL?>/close.svg"/>
            <?php wp_nav_menu(array( 'theme_location' => 'header' )); ?>
        </div>
    </nav>