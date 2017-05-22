<?php
get_header();
?>
<section id="content" class="container clearfix">

	<h2 class="slogan align-center">We are a group of experienced designers and developers.<br />
		We set new standards in user experience &amp; make future happen.</h2>

	<section id="features-slider" class="ss-slider">

		<article class="slide">

			<img src="<?php echo STATICPATH; ?>/img/placeholders/slider-slide-1.jpg" alt="" class="slide-bg-image" />

			<div class="slide-button">
				<span class="dropcap">1</span>
				<h5>Responsive Layout</h5>
				<span class="description">From desktop to mobile</span>
			</div>

			<div class="slide-content">
				<h2>Responsive Layout</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec purus justo.</p>
				<p><a class="button" href="#">Read More</a></p>
			</div>

		</article><!-- end .slide (Responsive Layout) -->

		<article class="slide">

			<img src="<?php echo STATICPATH; ?>/img/placeholders/slider-slide-2.jpg" alt="" class="slide-bg-image" />

			<div class="slide-button">
				<span class="dropcap">2</span>
				<h5>HTML5 / CSS3</h5>
				<span class="description">For today and tomorrow</span>
			</div>

			<div class="slide-content">
				<h2>HTML5 / CSS3</h2>
				<p>Hendrerit eleifend condimentum quis, varius at lacus. Donec ultrices justo scelerisque erat feugiat sed mattis justo volutpat.</p>
				<p><a class="button" href="#">Read More</a></p>
			</div>

		</article><!-- end .slide (HTML5 / CSS3) -->


	</section><!-- end #features-slider -->

	<h6 class="section-title">Latest Projects</h6>

	<ul class="projects-carousel clearfix">

		<li>
			<a href="single-project.html">
				<img src="<?php echo STATICPATH; ?>/img/placeholders/portfolio-project-4th-1.jpg" alt="">
				<h5 class="title">Altered</h5>
				<span class="categories">illustration / design</span>
			</a>
		</li>

		<li>
			<a href="single-project.html">
				<img src="<?php echo STATICPATH; ?>/img/placeholders/portfolio-project-4th-2.jpg" alt="">
				<h5 class="title">Snow Tower</h5>
				<span class="categories">illustration / photography</span>
			</a>
		</li>
	</ul><!-- end .projects-carousel -->

	<h6 class="section-title">Latest stuff from our blog</h6>

	<ul class="post-carousel">

		<li>

			<a href="single-post.html">
				<img src="<?php echo STATICPATH; ?>/img/placeholders/blog-post-1.jpg" alt="" class="entry-image">
			</a>

			<div class="entry-meta">

				<a href="single-post.html">
					<span class="post-format">Permalink</span>
				</a>

				<span class="date">Sep 17 2011</span>

			</div><!-- end .entry-meta -->

			<div class="entry-body">

				<a href="single-post.html">
					<h5 class="title">Bringing iMessage to the Desktop</h5>
				</a>

				<p>Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>

			</div><!-- end .entry-body -->

		</li>

		<li>

			<div class="entry-meta">

				<a href="single-post.html">
					<span class="post-format link">Permalink</span>
				</a>

				<span class="date">Sep 17 2011</span>

			</div><!-- end .entry-meta -->

			<div class="entry-body">

				<a href="single-post.html">
					<h5 class="title">Visit our Sister Site!</h5>
				</a>

				<p>Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>

			</div><!-- end .entry-body -->

		</li>

	</ul><!-- end .post-carousel -->

</section><!-- end #content -->
<?php
get_footer();
?>