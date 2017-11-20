<?php 
$prefixe = 'home__design--';
$prefixeExplain = 'home__design--explication--';
$home_upTitle = get_field($prefixe.'sur_titre');
$home_title = get_field($prefixe.'titre');

$home_explain_title = get_field($prefixeExplain.'title');
$home_explain_content = get_field($prefixeExplain.'contenu');
$home_explain_link = get_field($prefixeExplain.'lien');

$home_slider = get_field($prefixe.'slider');
?>

<h4 class="title__up"><?php echo $home_upTitle; ?></h4>
<h3 class="title__main"><?php echo $home_title; ?></h3>
<h3 class="content__title"><?php echo $home_explain_title; ?></h3>
<p><?php echo $home_explain_content; ?></p>
<a href="<?php echo $home_explain_link; ?>">En savoir plus</a>

<div class="slider">
  <div class="slider__container">
    <div class="slider__container__mover">
      <?php
      if( $home_slider ): 
        foreach( $home_slider as $slider ): 
          ?>
            <img src="<?php echo $slider['url']; ?>" alt="BMW" class="slider__container__item">
          <?php
        endforeach; 
      endif;
      ?>
    </div>
  </div>
  <div class="slider__button">
        <a href="#" class="slider__button__item slider__button__item--left"></a>
        <a href="#" class="slider__button__item slider__button__item--right"></a>
    </div>
</div>