<?php
  add_action( 'wp_ajax_ajax_term', 'ajax_term' );
  add_action( 'wp_ajax_nopriv_ajax_term', 'ajax_term' );

  function ajax_term() {
    global $wpdb, $_POST;
    $slug = $_POST['slug'];
    $mainSlug = $_POST['mainSlug'];
    $args = array(
      'post_type' => 'configurateur',
      'tax_query' => array(
        array(
          'taxonomy' =>  $mainSlug,
          'field'    => 'slug',
          'terms'    => $slug,
        ),
      ),
    );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            set_query_var( 'mainSlug', $mainSlug );
            set_query_var( 'slug', $slug );
            if($slug === "teintes_exterieures") {
              get_template_part('template/configurateur/components/configurateur-components-teinte');
            }
            if($slug === "jantes") {
              get_template_part('template/configurateur/components/configurateur-components-jante');
            }
        }
        /* Restore original Post Data */
        wp_reset_postdata();
    } else {
        // no posts found
        echo "<div class='config__term__item'>pas d'option trouvé</div>";
    }
      die();
  }
?>