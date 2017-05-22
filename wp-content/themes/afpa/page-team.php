<?php

/*
 * Template Name: Team
 */

get_header();
the_post();

?>


<section id="content" class="container clearfix">

    <header class="page-header">

        <h1 class="page-title align-left">Meet Our Team</h1>

        <hr />

        <h2 class="page-subdescription"><strong>Our success - people we employ.</strong> .</h2>

    </header><!-- end .page-header -->


<?php
query_posts(
    array(
        'post_type'=>'team',
        'ignore_sticky_post'=>true,
        'paged'=>get_query_var('paged') ? get_query_var('paged') : '1'
    )
);

?>


<?php
while( have_posts()): the_post();
    ?>

    <article class="team-member one-fourth">

        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(array(140,140), array('class'=>'entry-image')); ?>
        </a>

        <div class="content">

            <a href="<?php the_permalink(); ?>">
                <h3 class="title"><?php the_title() ?></h3>

            <span class="job-title"><?php echo strip_tags(get_the_term_list(get_the_ID(), 'job', '', '/',''))?></span>

            <p><?php the_excerpt() ?></p>

        </div><!-- end .content -->

        <ul class="social-links">
            <li class="facebook"><a href="<?php echo get_post_meta(get_the_ID(), '_url_facebook', true); ?> " target="_blank">Facebook</a></li>
            <li class="twitter"><a href="<?php echo get_post_meta(get_the_ID(), '_url_twitter', true); ?>">Twitter</a></li>
            <li class="skype"><a href="<?php echo get_post_meta(get_the_ID(), '_url_skype', true); ?>">Skype</a></li>
            <li class="googleplus"><a href="<?php echo get_post_meta(get_the_ID(), '_url_google', true); ?>">Google+</a></li>
        </ul><!-- end .social-links -->

    </article><!-- end .team-member.one-fourth -->

<?php
    endwhile;
    wp_reset_query();
?>


</section><!-- end #content -->

<?php get_footer(); ?>