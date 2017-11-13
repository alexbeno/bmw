<?php
add_action( 'init', 'postype_configurateur' );
function postype_configurateur() {
    $post_type         = "configurateur";
    $post_type_support = "posts";
    $labels            = array(
        'name'               => _x( 'configurateurs', 'Postype : Nom post', 'alexbeno' ),
        'singular_name'      => _x( 'configurateur', 'Postype : Nom post singulier', 'alexbeno' ),
        'all_items'          => _x( 'All configurateurs', 'Postype : Tous les posts', 'alexbeno' ),
        'add_new'            => _x( 'Add configurateur', 'Postype : Ajouter un nouveau', 'alexbeno' ),
        'add_new_item'       => _x( 'Add new configurateur', 'Postype : Ajouter un nouveau post', 'alexbeno' ),
        'edit_item'          => _x( "Edit configurateur", 'Postype : Editer post',  'alexbeno' ),
        'new_item'           => _x( 'New configurateur', 'Postype : Nouveau post', 'alexbeno' ),
        'view_item'          => _x( "View configurateur", 'Postype : Voir post',  'alexbeno' ),
        'search_items'       => _x( 'Find configurateur', 'Postype : Chercher post',  'alexbeno' ),
        'not_found'          => _x( 'No result', 'Postype : Post non trouver', 'alexbeno' ),
        'not_found_in_trash' => _x( 'No result', 'Postype : Post non trouver dans la corbeille', 'alexbeno' ),
        'parent_item_colon'  => _x( 'Parent configurateur:', 'Postype : Post parent',  'alexbeno' ),
        'menu_name'          => _x( 'configurateurs', 'Postype : Nom menu',  'alexbeno' ),
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
        'moteur', // slug
        array($post_type), // posttype
        array(
            'label'        => 'moteur', // label
            'rewrite'      => array( 'slug' => 'moteur' ), // rewrite
            'hierarchical' => true, // true: categorie, false: tag
        )
    );
    register_taxonomy(
        'exterieur', // slug
        array($post_type), // posttype
        array(
            'label'        => 'extérieur', // label
            'rewrite'      => array( 'slug' => 'exterieur' ), // rewrite
            'hierarchical' => true, // true: categorie, false: tag
        )
    );
    register_taxonomy(
        'interieur', // slug
        array($post_type), // posttype
        array(
            'label'        => 'intérieur', // label
            'rewrite'      => array( 'slug' => 'interieur' ), // rewrite
            'hierarchical' => true, // true: categorie, false: tag
        )
    );
    register_taxonomy(
        'pack', // slug
        array($post_type), // posttype
        array(
            'label'        => 'pack', // label
            'rewrite'      => array( 'slug' => 'pack' ), // rewrite
            'hierarchical' => true, // true: categorie, false: tag
        )
    );
    register_taxonomy(
        'option', // slug
        array($post_type), // posttype
        array(
            'label'        => 'option', // label
            'rewrite'      => array( 'slug' => 'option' ), // rewrite
            'hierarchical' => true, // true: categorie, false: tag
        )
    );
}
