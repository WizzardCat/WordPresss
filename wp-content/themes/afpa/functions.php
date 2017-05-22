<?php
/**
 * Created by PhpStorm.
 * User: Formation
 * Date: 18/05/2017
 * Time: 10:46
 */

add_theme_support('post-thumbnails', array('post', 'portfolio', 'team'));

set_post_thumbnail_size(680,235,true);
add_image_size('home-slideshow',940,380,true);
add_image_size('tiny-post',220,140,true);
add_image_size('archive-team',220,245,true);
add_image_size('single-portfolio',680,600,true);

add_filter('the_content', 'add_post_content' );
function add_post_content($content)
{
    $content .= "<br><h4></h4>";
    return $content;
}

// [alert type=""][/alert]

add_shortcode('alert', '__do_shortcode_alert');
function __do_shortcode_alert($atts, $content)
{
    extract( shortcode_atts(
        array(
            'type' => 'info'
        ),
        $atts
    ));

    return '<div class="' . $type .'">' . do_shortcode($content) . '</div>';
}


?>