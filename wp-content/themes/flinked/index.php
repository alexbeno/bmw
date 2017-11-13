<?php
/**
 * The template for displaying all pages
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="welcome">
			<img class="welcome--img" src="<?= IMAGES_URL ?>logo.png" alt="">
			<div class="welcome--border"></div>
			<h1 class="welcome--txt">welcom to our theme</h1>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
