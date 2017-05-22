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
            query_posts(
                 array(
                     'post_type'=>'post',
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
        wp_reset_query();
    ?>

		<ul class="pagination">
			<li class="next"><a href="#">&larr; Next</a></li>
			<li><a href="#">1</a></li>
			<li class="current">2</li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li class="prev"><a href="#">Previous &rarr;</a></li>
		</ul>

	</section><!-- end #main -->

	<aside id="sidebar">

		<div class="widget">

			<h6 class="widget-title">Blog Categories</h6>

			<ul class="categories">
				<li><a href="#">Design</a></li>
				<li><a href="#">Awards &amp; Recognition</a></li>
				<li><a href="#">Competitions</a></li>
				<li><a href="#">Travel &amp; Tourism</a></li>
				<li><a href="#">Direct Mail</a></li>
				<li><a href="#">Environment</a></li>
			</ul>

		</div><!-- end .widget -->

		<div class="widget">

			<h6 class="widget-title">Text Widget</h6>

			<p>Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

		</div><!-- end .widget -->

		<div class="widget">

			<h6 class="widget-title">Accordion Widget</h6>

			<h4 class="acc-trigger">
				<a href="#">User Research</a>
			</h4>

			<div class="acc-container">
				<div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu. Aenean nisl orci, cosequat eu.</div>
			</div>

			<h4 class="acc-trigger">
				<a href="#">Organizational Consulting</a>
			</h4>

			<div class="acc-container">
				<div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu. Aenean nisl orci, cosequat eu.</div>
			</div>

			<h4 class="acc-trigger">
				<a href="#">Competitive Analysis</a>
			</h4>

			<div class="acc-container">
				<div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu. Aenean nisl orci, cosequat eu.</div>
			</div>

			<h4 class="acc-trigger">
				<a href="#">Market Research</a>
			</h4>

			<div class="acc-container">
				<div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu. Aenean nisl orci, cosequat eu.</div>
			</div>

		</div><!-- end .widget -->

		<div class="widget">

			<h6 class="widget-title">Twitter Feed</h6>

			<ul class="tweets-feed">
				<li>Oops, our Twitter feed is unavailable at the moment - <a href="http://twitter.com/">Follow us on Twitter!</a></li>
			</ul><!-- end .tweets-feed -->

		</div><!-- end .widget -->

		<div class="widget">

			<h6 class="widget-title">Flickr Feed</h6>

			<ul class="flickr-feed">
				<li>Oops, our Flickr feed is unavailable at the moment - <a href='http://flickr.com/'>Check our images on Flickr!</a></li>
			</ul><!-- end .flickr-feed -->

		</div><!-- end .widget -->

	</aside><!-- end #sidebar -->

</section><!-- end #content -->

<?php get_footer(); ?>