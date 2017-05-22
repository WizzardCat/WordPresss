<?php

/*
Plugin Name: Mon Portfolio
Plugin URI:
Description:
Version: 1.0
Author: WizzardCat
Author URI:
*/

/*----------------------------------------------------------------*/
/* Déclaration du CPT
/*----------------------------------------------------------------*/

add_action( 'init', '__portfolio_portfolio_init' );
function __portfolio_portfolio_init()
{
    $labels = array(
        'name'               => 'Références',
        'singular_name'      => 'Référence',
        'all_items'          => 'Toutes les références',

        'add_new'            => 'Ajouter une référence',
        'add_new_item'       => 'Ajouter une nouvelle référence',
        'edit_item'          => 'Editer une référence',
        'new_item'           => 'Une nouvelle référence',
        /*
        'view_item'          => 'View Book',
        'search_items'       => 'Search Books',
        'not_found'          => 'No books found',
        'not_found_in_trash' => 'No books found in Trash',
        'parent_item_colon'  => '',
        */
        'menu_name'          => 'Références'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'rewrite'            => array( 'slug' => 'portfolio' ),
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5, // On positionne le CPT en dessous d'article
        'menu_icon'			 => 'dashicons-desktop', // Identifiant de l'icône disponible sur http://melchoyce.github.io/dashicons/
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    );

    register_post_type( 'portfolio', $args );

    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'               => 'Compétences',
        'singular_name'      => 'Compétence',
        'all_items'          => 'Toutes les compétences',
        'menu_name'          => 'Compétences'
    );

    $args = array(
        'public'			=> false,
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
    );

    register_taxonomy( 'skill', 'portfolio', $args );
}

