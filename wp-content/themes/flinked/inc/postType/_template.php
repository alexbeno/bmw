<?php
// add_action( 'init', 'postype_voiture' );
function postype_voiture() {
    $post_type         = "voiture";
    $post_type_support = "posts";
    $labels            = array(
        'name'               => _x( 'voitures', 'Postype : Nom post', 'alexbeno' ),
        'singular_name'      => _x( 'voiture', 'Postype : Nom post singulier', 'alexbeno' ),
        'all_items'          => _x( 'All voitures', 'Postype : Tous les posts', 'alexbeno' ),
        'add_new'            => _x( 'Add voiture', 'Postype : Ajouter un nouveau', 'alexbeno' ),
        'add_new_item'       => _x( 'Add new voiture', 'Postype : Ajouter un nouveau post', 'alexbeno' ),
        'edit_item'          => _x( "Edit voiture", 'Postype : Editer post',  'alexbeno' ),
        'new_item'           => _x( 'New voiture', 'Postype : Nouveau post', 'alexbeno' ),
        'view_item'          => _x( "View voiture", 'Postype : Voir post',  'alexbeno' ),
        'search_items'       => _x( 'Find voiture', 'Postype : Chercher post',  'alexbeno' ),
        'not_found'          => _x( 'No result', 'Postype : Post non trouver', 'alexbeno' ),
        'not_found_in_trash' => _x( 'No result', 'Postype : Post non trouver dans la corbeille', 'alexbeno' ),
        'parent_item_colon'  => _x( 'Parent voiture:', 'Postype : Post parent',  'alexbeno' ),
        'menu_name'          => _x( 'voitures', 'Postype : Nom menu',  'alexbeno' ),
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title', 'thumbnail', 'editor' ),
        'public'              => true, // single.php
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-performance',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false, // in search
        'has_archive'         => false, // archive.php
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type, $args );

    register_taxonomy(
        'marque', // slug
        array($post_type), // posttype
        array(
            'label'        => __( 'marque', 'alexbeno' ), // label
            'rewrite'      => array( 'slug' => 'marque' ), // rewrite
            'hierarchical' => true, // true: categorie, false: tag
        )
    );

}
