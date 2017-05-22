<?php

/*
Plugin Name: Mon equipe
Plugin URI:
Description:
Version: 1.0
Author: WizzardCat
Author URI:
*/

/*----------------------------------------------------------------*/
/* Déclaration du CPT
/*----------------------------------------------------------------*/

add_action( 'init', '__equipe_equipe_init' );
function __equipe_equipe_init()
{
    $labels = array(
        'name' => 'Personnes',
        'singular_name' => 'Personne',
        'all_items' => 'Toutes les personnes',

        'add_new' => 'Ajouter une personne',
        'add_new_item' => 'Ajouter une nouvelle personne',
        'edit_item' => 'Editer une personne',
        'new_item' => 'Une nouvelle personne',
        /*
        'view_item'          => 'View Book',
        'search_items'       => 'Search Books',
        'not_found'          => 'No books found',
        'not_found_in_trash' => 'No books found in Trash',
        'parent_item_colon'  => '',
        */
        'menu_name' => 'Personne'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'rewrite' => array('slug' => 'team'),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5, // On positionne le CPT en dessous d'article
        'menu_icon' => 'dashicons-groups', // Identifiant de l'icône disponible sur http://melchoyce.github.io/dashicons/
        'supports' => array('title', 'excerpt', 'thumbnail')
    );

    register_post_type('team', $args);

    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'               => 'Jobs',
        'singular_name'      => 'Job',
        'all_items'          => 'Toutes les jobs',
        'menu_name'          => 'Jobs'
    );

    $args = array(
        'public'			=> false,
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
    );


    register_taxonomy( 'job', 'team', $args );

}

add_action('add_meta_boxes','initialisation_metabox');
function initialisation_metabox(){
    add_meta_box('url_crea', 'URL du site', 'url_crea', 'team', 'normal', 'default');
}

function url_crea($post){

    $url_facebook = get_post_meta($post->ID,'_url_facebook',true);
    $url_twitter = get_post_meta($post->ID,'_url_twitter',true);
    $url_skype = get_post_meta($post->ID,'_url_skype',true);
    $url_google = get_post_meta($post->ID,'_url_google',true);


    echo '<label for="url_meta">Facebook :</label>';
    echo '<input id="url_meta" type="url" name="url_facebook" value="'.$url_facebook.'" />';
    echo '<label for="url_meta">Twitter :</label>';
    echo '<input id="url_meta" type="url" name="url_twitter" value="'.$url_twitter.'" />';
    echo '<label for="url_meta">Skype :</label>';
    echo '<input id="url_meta" type="url" name="url_skype" value="'.$url_skype.'" />';
    echo '<label for="url_meta">Google+ :</label>';
    echo '<input id="url_meta" type="url" name="url_google" value="'.$url_google.'" />';
}

add_action('save_post','save_metabox');
function save_metabox($post_id){
    if(isset($_POST['url_facebook']) || isset($_POST['url_twitter']) || isset($_POST['url_skype']) || isset($_POST['url_google']) )
        update_post_meta($post_id, '_url_facebook', esc_url($_POST['url_facebook']));
        update_post_meta($post_id, '_url_twitter', esc_url($_POST['url_twitter']));
        update_post_meta($post_id, '_url_skype', esc_url($_POST['url_skype']));
        update_post_meta($post_id, '_url_google', esc_url($_POST['url_google']));

}
