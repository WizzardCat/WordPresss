<?php
get_header();
?>


    <section id="content" class="container clearfix">

        <h2 class="slogan align-center">We are a group of experienced designers and developers.<br />
            We set new standards in user experience &amp; make future happen.</h2>


        <?php

    $list_for_slider_post = new WP_Query(
        array(
            'post_type'=>array('post', 'portfolio'),
            'post_status' => 'publish',
            'order' => 'ASC',//ASC or DESC
            'orderby' => 'title',
            'posts_per_page'=>4
        )

    );
?>

        <section id="features-slider" class="ss-slider">




            <?php
            $numeroArticle=1;
            ?>



<?php while ($list_for_slider_post->have_posts()) : $list_for_slider_post->the_post();?>


            <article class="slide">

                <?php the_post_thumbnail(array(940,380), array('class'=>'slide-bg-image')); ?>



                <div class="slide-button">
                    <span class="dropcap"><?php echo $numeroArticle++; ?></span>
                    <h5><?php the_title(); ?></h5>
                    <span class="description">From desktop to mobile</span>
                </div>

                <div class="slide-content">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?></p>
                    <p><a class="button" href="<?php the_permalink(); ?>">Read More</a></p>

            </article><!-- end .slide (Responsive Layout) -->

    <?php
    endwhile;
    wp_reset_postdata();
    ?>

        </section><!-- end #features-slider -->

        <h6 class="section-title">A la une</h6>

            <li class="projects-carousel clearfix">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(array(980,340), array('class'=>'entry-image')); ?>
                <h5 class="title"><?php the_title(); ?></h5>
                    <span class="title">Posted:</span> <a href="#"><?php the_time(get_option('date_format')); ?>
              </a>
            </li>


        <h6 class="section-title">Thanks for your visit</h6>

    </section><!-- end #content -->
<?php
get_footer();
?>