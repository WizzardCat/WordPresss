<!DOCTYPE html>

<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
	<meta charset="<?php echo bloginfo('charset'); ?>"> <!--Récup du charset utf-8 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Home - SmartStart<?php wp_title(''); ?></title>

	<meta name="description" content="<?php echo bloginfo('description'); ?>">
	<meta name="author" content="<?php echo bloginfo('author'); ?>">

	<!--[if !lte IE 6]><!-->
	<link rel="stylesheet" href="<?php echo STATICPATH; ?>/css/style.css" media="screen" />

	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic" />

	<link rel="stylesheet" href="<?php echo STATICPATH; ?>/css/fancybox.min.css" media="screen" />

	<link rel="stylesheet" href="<?php echo STATICPATH; ?>/css/video-js.min.css" media="screen" />

	<link rel="stylesheet" href="<?php echo STATICPATH; ?>/css/audioplayerv1.min.css" media="screen" />
	<!--<![endif]-->

	<!--[if lte IE 6]>
	<link rel="stylesheet" href="//universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen, projection">
	<![endif]-->

	<!-- HTML5 Shiv + detect touch events -->
	<script src="<?php echo STATICPATH; ?>/js/modernizr.custom.js"></script>


	<!-- HTML5 video player -->
	<script src="<?php echo STATICPATH; ?>/js/video.min.js"></script>
	<script>_V_.options.flash.swf = 'http://localhost/smartstart/js/video-js.swf';</script>
	<?php wp_head(); ?>
</head>
<body>

<header id="header" class="container clearfix">

	<a href="index.html" id="logo">
		<img src="<?php echo STATICPATH; ?>/img/logo.png" alt="SmartStart">
	</a>

	<nav id="main-nav">

		<ul>
			<li <?php echo is_home() ? 'class="current"' : "" ; ?>>
				<a href="<?php echo home_url(); ?>" data-description="All starts here">Home</a>
			</li>
            <li <?php echo is_page(48) || is_single() ? 'class="current"' : "" ; ?>>
                <a href="<?php echo get_permalink(48); ?>" data-description="All starts here">The Blog</a>
            </li>
            <li <?php echo is_page(66) ? 'class="current"' : "" ; ?>>
                <a href="<?php echo get_permalink(66); ?>" data-description="All the different stuff">Portfolio</a>
            </li>
            <li <?php echo is_page(53) ? 'class="current"' : "" ; ?>>
                <a href="<?php echo get_permalink(53); ?>" data-description="All the different stuff">Equipe</a>
            </li>
            <li <?php echo is_page(19) ? 'class="current"' : "" ; ?>>
                <a href="<?php echo get_permalink(19); ?>" data-description="All starts here">A propos de nous</a>
            </li>
            <li <?php echo is_page(20) ? 'class="current"' : "" ; ?>>
                <a href="<?php echo get_permalink(20); ?>" data-description="All starts here">Contact</a>
            </li>
        </ul>

	</nav><!-- end #main-nav -->

</header><!-- end #header -->
