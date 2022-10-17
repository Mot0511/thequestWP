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
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 blog-posts">
				<?php
					$result = wp_get_recent_posts([
						'numberposts' => 1,
					], OBJECT);
					foreach ($result as $post) {
						setup_postdata($post)

				?>
					<div class="blog-post featured-post">
						<img src="<?php echo get_template_directory_uri()?>/img/blog/1.jpg" alt="">
						<div class="post-date"><?php the_date(); ?></div>
						<h3><?php the_title(); ?></h3>
						<div class="post-metas">
							<div class="post-meta">By <?php the_author(); ?></div>
							<div class="post-meta">in <?php print(get_the_category(the_ID())->name); ?></div>
							<div class="post-meta"><?php comments_number( "No comments", ' comment', '% comments', the_ID()); ?></div>
						</div>
						<p><?php the_content(); ?></p>
						<a href="<?php echo get_permalink(); ?>" class="site-btn">Read More</a>
					</div>
				<?php }; ?>
					<div class="row">
						<?php
							while (have_posts()){
								the_post();
						?>
						<div class="col-md-6">
							<div class="blog-post">
								<img src="<?php echo get_template_directory_uri()?>/img/blog/2.jpg" alt="">
								<div class="post-date"><?php the_date(); ?></div>
								<h4><?php the_title(); ?></h4>
								<div class="post-metas">
									<div class="post-meta">By <?php the_author(); ?></div>
									<div class="post-meta">in <?php print(get_the_category(the_ID())->name); ?></div>
									<div class="post-meta"><?php comments_number( "No comments", ' comment', '% comments', the_ID()); ?></div>
								</div>
								<p><?php the_content(); ?></p>
								<a href="<?php echo get_permalink(); ?>" class="read-more">Read More</a>
							</div>
						</div>
					<?php }; ?>
					</div>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</section>
	<!-- Blog section end -->

	<!-- Blog list section -->
	<section class="blog-list-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="small-blog-list">
						<?php
							while (have_posts()){
								the_post();
						?>
						<div class="sb-item">
							<img src="<?php echo get_template_directory_uri()?>/img/blog-thumbs/6.jpg" alt="">
							<div class="sb-text">
								<div class="sb-date"><?php the_date(); ?></div>
								<h6><?php the_title(); ?></h6>
								<div class="sb-metas">
									<div class="sb-meta">By <?php the_author(); ?></div>
									<div class="sb-meta">in <?php print(get_the_category(the_ID())->name); ?></div>
									<div class="sb-meta"><?php comments_number( "No comments", '% comment', '% comments', the_ID()); ?></div>
								</div>
								<p><?php the_content(); ?></p>
							</div>
						</div>
					<?php }; ?>
					</div>
				</div>
			</div>
		</div>
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
