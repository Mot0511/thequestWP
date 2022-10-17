<?php get_header(); ?>
	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hero-item set-bg" data-setbg="<?php echo get_template_directory_uri()?>/img/slider/1.jpg">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 offset-lg-1">
							<h2>Enter the Battle</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
							<a href="#" class="site-btn">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="hero-item set-bg" data-setbg="<?php echo get_template_directory_uri()?>/img/slider/2.jpg">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 offset-lg-1">
							<h2>Enter the Battle</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
							<a href="#" class="site-btn">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Blog section -->
	<section class="blog-section spad" style="padding-left: 20%; padding-right: 20%;">
    <?php
    while (have_posts()){
      the_post();
    }
    ?>
    <h2 style="color: white;"><?php the_title(); ?></h2>
    <?php the_content(); ?>
	</section>
	<!-- Blog list section end -->
	<!-- Video section -->
	<div class="video-section">
		<div class="container">
			<div class="video-logo">
				<img src="<?php echo get_template_directory_uri()?>/img/logo-2.png" alt="">
				<p>2018’s Best Game</p>
			</div>
			<div class="video-popup-warp">
				<a href="https://www.youtube.com/watch?v=xzCEdSKMkdU" class="video-play"><i class="fa fa-play"></i></a>
			</div>
		</div>
	</div>
	<!-- Video section end -->

	<?php get_footer(); ?>
