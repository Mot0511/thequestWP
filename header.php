<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>TheQuest - Gaming Magazine Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="TheQuest Gaming Magazine Template">
	<meta name="keywords" content="gaming, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link href="<?php echo get_template_directory_uri()?>/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/magnific-popup.css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/animate.css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<?php wp_head(); ?>
</head>
<body>
	<?php
	wp_body_open();
	?>
	<!-- <div id="preloder">
		<div class="loader"></div>
	</div> -->

	<!-- Header section -->
	<header class="header-section">
		<a href="index.html" class="site-logo">
			<img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="logo">
		</a>
		<ul class="main-menu">
			<li><a href="index.html">Home</a></li>
			<li><a href="characters.html">Characters</a></li>
			<li><a href="game.html">Games</a></li>
			<li><a href="reviews.html">Reviews</a></li>
			<li><a href="news.html">News</a></li>
			<li><a href="single-post.html">Page</a></li>
		</ul>
	</header>
	<!-- Header section end -->
