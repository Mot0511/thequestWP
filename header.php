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
<style media="screen">
	.comment-form-cookies-consent{
		display: none;
	}
	.comment-respond{
		width: 90%;
	}
	.comment-author .url {
		color: #fff;
		font-weight: 500;
		margin-bottom: 5px;
		font-style: normal;
	}
	.comment-meta a:nth-of-type(1){
		font-size: 12px;
		font-weight: 700;
		color: #a5a4a4;
		position: relative;
		bottom: 60px;
		left: 82px;
	}
	.comment-edit-link{
		color: #10ddb4;
		position: absolute;
		bottom: 0;
		left: 164px;
	}
	.comment-edit-link:hover{
		color: #10ddb4;
	}
	.reply a{
		color: #10ddb4;
		position: relative;
		left: 82px;
	}
	.comment{
		position: relative;
		min-height: 80px;
	}
	.comment-body p{
		position: relative;
		bottom: 30px;
		left: 82px;
		width: 700px;
	}
	.comment-body{
		width: 700px;
	}
</style>
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
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
			<img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="logo">
		</a>
		<?php
			wp_nav_menu(array(
				'theme_location'=>'top',
				'container'=>false,
				'menu_class'=>'main-menu'
			));
		?>

	</header>
	<!-- Header section end -->
