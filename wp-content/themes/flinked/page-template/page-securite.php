<?php
/*
Template Name: page securité
*/

$folder = 'securite';
$path = 'template/'. $folder .'/'.$folder.'-';

if ( have_posts() ){
  while ( have_posts() ) {
    the_post();
    get_header();
    get_template_part($path . 'main');
    get_template_part($path . 'tranquilite');
    get_template_part($path . 'aide');
    get_template_part($path . 'affichage');
    get_footer();
  }
}
?>
