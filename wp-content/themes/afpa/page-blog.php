<?php
/*
    Template Name: Blog
*/

get_header();
the_post();
?>



<section id="content" class="container clearfix">

	<header class="page-header">

		<h1 class="page-title"><?php the_title(); ?></h1>

	</header><!-- end .page-header -->

	<section id="main">

        <?php
            query_posts( // récupère moi :
                 array(
                     'post_type'=>'post', // contenu du post
                     'ignore_sticky_post'=>true,
                     'paged'=>get_query_var('paged') ? get_query_var('paged') : '1'
                 )

             );
        ?>


        <?php
            while( have_posts()): the_post();
        ?>



		<article class="entry clearfix">


                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(array(680,235), array('class'=>'entry-image')); ?>
						</a>


            <div class="entry-body">

				<a href="<?php the_permalink(); ?>">
					<h1 class="title"><?php the_title() ?></h1>
				</a>

				<?php the_content(); ?>

			</div><!-- end .entry-body -->

			<div class="entry-meta">

				<ul>
					<li><a href="<?php the_permalink(); ?>"><span class="post-format gallery">Permalink</span></a></li>
					<li><span class="title">Posted:</span> <a href="#"><?php the_time(get_option('date_format')); ?></a></li>
					<li><?php echo get_the_tag_list('<span class="title">Tags:</span> ', ' , '); ?></li>
					<li><span class="title"></span> <a href="#"><?php comments_number('0', '1', '%'); ?></a></li>
				</ul>

			</div><!-- end .entry-meta -->

		</article><!-- end .entry -->

    <?php
        endwhile;



        if(function_exists('wp_simple_pagination')) {
            wp_simple_pagination();
        }

    wp_reset_query();
    ?>

		<!--<ul class="pagination">
			<li class="next"><a href="#">&larr; Next</a></li>
			<li><a href="#">1</a></li>
			<li class="current">2</li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li class="prev"><a href="#">Previous &rarr;</a></li>
		</ul>-->

	</section><!-- end #main -->

	<aside id="sidebar">

        <?php get_sidebar('blog'); ?>

	</aside><!-- end #sidebar -->

</section><!-- end #content -->


<?php get_footer(); ?>