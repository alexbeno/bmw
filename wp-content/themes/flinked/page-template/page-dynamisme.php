<?php
/*
Template Name: page dynamisme
*/

$folder = 'dynamisme';
$path = 'template/'. $folder .'/'.$folder.'-';

if ( have_posts() ){
  while ( have_posts() ) {
    the_post();
    get_header();
    get_template_part($path . 'main');
    get_template_part($path . 'aero');
    get_template_part($path . 'model');
    get_template_part($path . 'architecture');
    get_footer();
  }
}
?>
