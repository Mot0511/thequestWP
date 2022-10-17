	<?php get_header(); ?>

	<?php

	?>
		<!-- Blog section -->
		<section class="blog-section spad">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">

						<?php
							while (have_posts()){
								the_post();
						?>
						<div class="blog-post single-post">
							<img src="<?php echo get_template_directory_uri()?>/img/blog/1.jpg" alt="">
							<div class="post-date"><?php the_date(); ?></div>
							<h3><?php the_title(); ?></h3>
							<div class="post-metas">
								<div class="post-meta">By <?php the_author(); ?></div>
								<div class="post-meta">in <?php print(get_the_category(the_ID())->name); ?></div>
								<div class="post-meta"><?php comments_number( "No comments", '% comment', '% comments', the_ID()); ?></div>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas ac-cumsan lacus vel facilisis. Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Morbi id dictum quam, ut commodo lorem. In at nisi nec arcu porttitor aliquet vitae at dui. </p>
							<p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, ornare non nisl a, auctor euismod purus. Morbi pretium interdum vestibulum. Fusce nec eleifend ipsum. Sed non blandit tellus.</p>
							<p>Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vestibulum malesuada aliquet libero viverra cursus. Aliquam erat volutpat. Morbi id dictum quam, ut commodo lorem. In at nisi nec arcu porttitor aliquet vitae at dui. Sed sollicitudin nulla non leo viverra scelerisque. Phasellus facilisis lobortis metus, sit amet viverra lectus finibus ac. Aenean non felis dapibus, placerat libero auctor, ornare ante. Morbi quis ex eleifend, sodales nulla vitae, scelerisque ante. Nunc id vulputate dui. Suspendisse consecte-tur rutrum metus nec scelerisque. </p>

							<div class="comments">
								<h5>Comments (2)</h5>
								<ul class="comments-list">
									<li>
										<img src="<?php echo get_template_directory_uri()?>/img/author-thumbs/1.jpg" alt="">
										<div class="comment-text">
											<h6>Jane Smith <a href="#" class="reply">Reply</a></h6>
											<div class="comment-date">April 1,2019</div>
											<p>Aenean non felis dapibus, placerat libero auctor, ornare ante. Morbi quis ex eleifend, sodales nulla vitae, scelerisque ante. Nunc id vulputate dui. Suspendisse consectetur rutrum metus nec scelerisque. </p>
										</div>
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri()?>/img/author-thumbs/2.jpg" alt="">
										<div class="comment-text">
											<h6>Michael James  <a href="#" class="reply">Reply</a></h6>
											<div class="comment-date">April 1,2019</div>
											<p>Non felis dapibus, placerat libero auctor, ornare ante. Morbi quis ex eleifend, sodales nulla vitae, scelerisque ante. Nunc id vulputate dui. Suspendisse consectetur rutrum metus.</p>
										</div>
									</li>
								</ul>

									<div class="row">
										<?php
											 comments_template();
										 ?>
									</div>
						</div>
					</div>
				<?php }; ?>
				</div>
<?php get_sidebar(); ?>
			</div>
		</div>
	</section>
	<!-- Blog section end -->

<?php get_footer(); ?>
