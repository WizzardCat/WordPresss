<?php
get_header();
the_post();
?>
<section id="content" class="container clearfix">

	<header class="page-header">

		<h1 class="page-title"><?php the_title(); ?></h1>

		<hr />

    </header><!-- end .page-header -->
    <div>
	    <?php the_content(); ?>
	</div><!-- end .one-third.last -->

</section><!-- end #content -->
<?php
get_footer();
?>