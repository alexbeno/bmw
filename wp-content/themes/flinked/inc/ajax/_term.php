<?php
  add_action( 'wp_ajax_ajax_term', 'ajax_term' );
  add_action( 'wp_ajax_nopriv_ajax_term', 'ajax_term' );

  function ajax_term() {
    global $wpdb, $_POST;
    $slug = $_POST['slug'];
    $mainSlug = $_POST['mainSlug'];
    if($slug !== "noSlug") {
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
    }
    else {

      // get all terms in the taxonomy
      $terms = get_terms( $mainSlug ); 
      // convert array of term objects to array of term IDs
      $term_ids = wp_list_pluck( $terms, 'slug' );

      $args = array(
        'post_type' => 'configurateur',
        'tax_query' => array(
          array(
            'taxonomy' =>  $mainSlug,
            'field'    => 'slug',
            'terms'    => $term_ids,
          ),
        ),
      );
    }
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            set_query_var( 'mainSlug', $mainSlug );
            set_query_var( 'slug', $slug );
            if($slug === "teintes_exterieures") {
              get_template_part('template/configurateur/components/configurateur-components-teinte');
            }
            else if($slug === "jantes") {
              get_template_part('template/configurateur/components/configurateur-components-jante');
            }
            else if($slug === "moteur") {
              get_template_part('template/configurateur/components/configurateur-components-moteur');
            }
            else if($slug === "pack") {
              get_template_part('template/configurateur/components/configurateur-components-pack');
            }
            else if($slug === "interieur") {
              get_template_part('template/configurateur/components/configurateur-components-interieur');
            }
            else if($mainSlug === "option") {
              get_template_part('template/configurateur/components/configurateur-components-option');
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