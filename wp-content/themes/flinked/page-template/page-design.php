<?php
/*
Template Name: page design
*/

$folder = 'design';
$path = 'template/'. $folder .'/'.$folder.'-';

if ( have_posts() ){
  while ( have_posts() ) {
    the_post();
    get_header();
    get_template_part($path . 'main');
    get_template_part($path . 'philo');
    get_template_part($path . 'exterieur');
    get_template_part($path . 'lumiere');
    get_footer();
  }
}
?>
