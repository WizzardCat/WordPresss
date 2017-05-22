<?php
/**
 * Created by PhpStorm.
 * User: Formation
 * Date: 18/05/2017
 * Time: 11:47
 */

get_header();
the_post();
?>


<section id="content" class="container clearfix">

	<header class="page-header">

		<h1 class="page-title"><?php the_title() ?></h1>

	</header><!-- end .page-header -->

	<section id="main">

		<article class="entry single clearfix">

			<a href="<?php the_permalink(); ?>" title="">
                <?php the_post_thumbnail(array(680,235), array('class'=>'entry-image')); ?>
			</a>

			<div class="entry-body">

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

		<section id="comments">

			<h6 class="section-title">Comments (4)</h6>

			<ol class="comments-list">

				<li class="comment">

					<article>

						<img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=50" alt="Image" class="avatar">

						<div class="comment-meta">

							<h5 class="author"><a href="#">John Doe</a> - <a href="#" class="comment-reply-link">Reply</a></h5>

							<p class="date">January 06, 2011</p>

						</div><!-- end .comment-meta -->

						<div class="comment-body">

							<p>Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus.</p>

						</div><!-- end .comment-body -->

					</article>

					<ul class="children">

						<li class="comment">

							<article>

								<img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=50" alt="Image" class="avatar">

								<div class="comment-meta">

									<h5 class="author"><a href="#">John Doe</a> - <a href="#" class="comment-reply-link">Reply</a></h5>

									<p class="date">January 06, 2011</p>

								</div><!-- end .comment-meta -->

								<div class="comment-body">

									<p>Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus.</p>

								</div><!-- end .comment-body -->

							</article>

						</li>

					</ul><!-- end .children -->

				</li>

				<li class="comment">

					<article>

						<img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=50" alt="Image" class="avatar">

						<div class="comment-meta">

							<h5 class="author"><a href="#">John Doe</a> - <a href="#" class="comment-reply-link">Reply</a></h5>

							<p class="date">January 06, 2011</p>

						</div><!-- end .comment-meta -->

						<div class="comment-body">

							<p>Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus.</p>

						</div><!-- end .comment-body -->

					</article>

				</li>

				<li class="comment">

					<article>

						<img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=50" alt="Image" class="avatar">

						<div class="comment-meta">

							<h5 class="author"><a href="#">John Doe</a> - <a href="#" class="comment-reply-link">Reply</a></h5>

							<p class="date">January 06, 2011</p>

						</div><!-- end .comment-meta -->

						<div class="comment-body">

							<p>Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus.</p>

						</div><!-- end .comment-body -->

					</article>

				</li>

			</ol>

		</section>

		<section id="respond">

			<h6 class="section-title">Leave a Comment</h6>

			<form method="post" class="comments-form">

				<p class="input-block">
					<label for="comment-name"><strong>Name</strong> (required)</label>
					<input type="text" name="name" value="" id="comment-name" required>
				</p>

				<p class="input-block">
					<label for="comment-email"><strong>Email</strong> (required)</label>
					<input type="email" name="email" value="" id="comment-email" required>
				</p>

				<p class="input-block">
					<label for="comment-url"><strong>Website</strong></label>
					<input type="url" name="url" value="" id="comment-url">
				</p>

				<p class="textarea-block">
					<label for="comment-message"><strong>Your Comment</strong> (required)</label>
					<textarea name="message" id="comment-message" cols="88" rows="6" required></textarea>
				</p>

				<input type="submit" value="Submit">

				<div class="clear"></div>

			</form>

		</section>

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

<?php
get_footer();
?>
