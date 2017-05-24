<?php
/**
 * Created by PhpStorm.
 * User: Formation
 * Date: 24/05/2017
 * Time: 10:18
 */
/*
Plugin Name: Cleaner
Plugin URI:
Description:
Version: 1.0
Author: WizzardCat
Author URI:
*/

remove_action( 'wp_head',             'feed_links_extra',               3    );
remove_action( 'wp_head',             'rsd_link'                             );
remove_action( 'wp_head',             'wlwmanifest_link'                     );
remove_action( 'wp_head',             'index_rel_link'                       );
remove_action( 'wp_head',             'parent_post_rel_link',          10, 0 );
remove_action( 'wp_head',             'start_post_rel_link',           10, 0 );
remove_action( 'wp_head',             'adjacent_posts_rel_link',       10, 0 );
remove_action( 'wp_head',             'adjacent_posts_rel_link_wp_head',10,0 );
remove_action( 'wp_head',             'noindex',                        1    );
remove_action( 'wp_head',             'rel_canonical'                        );
remove_action( 'wp_head',             'wp_generator'                         );
add_filter(    'wpseo_next_rel_link'   , '__return_false'                    );

// It disables the file js l10n
add_action( 'wp_enqueue_scripts', 'deregister_script_l10n' );
function deregister_script_l10n() {
    wp_deregister_script('l10n');
}

add_filter( 'script_loader_src', 'baw_delete_script_version', 15, 1 );
add_filter( 'style_loader_src', 'baw_delete_script_version', 15, 1 );
function baw_delete_script_version( $src ){
    $parts = explode( '?', $src );
    $ver = '?ver=' . md5( wp_salt( 'nonce' ) . $parts[1] );
    return $parts[0] . $ver;
}