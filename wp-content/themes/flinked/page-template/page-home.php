<?php
/*
Template Name: page home
*/

$folder = 'home';
$path = 'template/'. $folder .'/'.$folder.'-';

if ( have_posts() ){
  while ( have_posts() ) {
    the_post();
    get_header();
    get_template_part($path . 'main');
    get_template_part($path . 'technique');
    get_template_part($path . 'design');
    get_footer();
  }
}
?>
