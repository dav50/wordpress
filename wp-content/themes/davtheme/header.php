<!DOCTYPE html>
<html>
	<head <?php language_attributes(); ?>>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php the_title(); ?></title>
		<meta name="description" content="description de ma page"> 
		<!--
		<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		-->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" >
		<!--
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script.js"></script>
		-->
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="wrap">
		<header>
			<img src="<?php echo home_url() ;?>/wp-content/themes/davtheme/media/akuma.gif" alt="">
			<h1><?php bloginfo('name')?></h1>
			<div id="slogan">
				<?php bloginfo('description') ?>
			</div>
		</header>
		
		<nav class="nava">
					<?php wp_nav_menu(array('theme_location' => 'header')); ?>
					
			<div class="navb">
				<a href="<?php bloginfo('rss_url') ?>">S'abonner au RSS</a>
			</div>
			
			<div class="navc">
				<h3>Recherche</h3>
				<?php get_search_form() ?>
			</div>
		</nav>
		
		
		
	