<?php
/*
Template Name: page Configurateur
*/

$folder = 'configurateur';
$path = 'template/'. $folder .'/'.$folder.'-';

if ( have_posts() ){
  while ( have_posts() ) {
    the_post();
    get_header();
    ?>
      <div class="config">
    <?php 
    get_template_part($path . 'main');
    get_template_part($path . 'car');
    get_template_part($path . 'nav');
    // get_template_part($path . 'price');
    ?>
     </div>
    <?php 
    get_footer();
  }
}
?>
