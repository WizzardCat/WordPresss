<?php
/*
    Template Name: Portfolio
*/

get_header();
the_post();
?>


    <section id="content" class="container clearfix">

    <header class="page-header">

        <h1 class="page-title">Things we have done</h1>

        <ul id="portfolio-items-filter">

            <li>Showing</li>
            <li><a data-categories="*">All</a></li>
            <li><a data-categories="animation">Animation</a></li>
            <li><a data-categories="design">Illustration</a></li>

        </ul><!-- end #portfolio-items-filter -->

    </header><!-- end .page-header -->

        <section id="portfolio-items" class="clearfix">

    <?php
         query_posts(
            array(
                'post_type'=>'portfolio',
                'ignore_sticky_post'=>true,
                'paged'=>get_query_var('paged') ? get_query_var('paged') : '1'
                )
         );

    ?>


    <?php
         while( have_posts()): the_post();
    ?>

             <article class="one-fourth" data-categories="illustration animation">

                 <a href="<?php the_permalink(); ?>">
                     <?php the_post_thumbnail(array(220,140), array('class'=>'entry-image')); ?>
                 </a>

                 <a href="<?php the_permalink(); ?>">
                         <h3 class="title"><?php the_title() ?></h3>
                     <span class="title">Posted:</span> <a href="#"><?php the_time(get_option('date_format')); ?>
                     <span class="categories"><?php echo strip_tags(get_the_term_list(get_the_ID(), 'skill', '', '/',''))?></span>
                 </a>

             </article><!-- end .one-fourth (Not the end) -->



    <?php
        endwhile;
        wp_reset_query();
    ?>

        </section>
        </section><!-- end #portfolio-items -->

<?php get_footer(); ?>