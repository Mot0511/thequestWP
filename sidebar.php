<div class="col-lg-4 sidebar">
  <div class="sb-widget">
    <form class="sb-search" method="get" action="<?php echo esc_url( home_url( '/searchPage.php/' ) ); ?>">
      <input type="text" name="s" placeholder="Search">
    </form>
  </div>
  <div class="sb-widget">
    <h2 class="sb-title">Categories</h2>
    <ul class="sb-cata-list">
      <?php wp_list_cats('sort_column=name&optioncount=1&hierarchail=0'); ?>
    </ul>
  </div>
  <div class="sb-widget">
    <h2 class="sb-title">Latest News</h2>
    <div class="latest-news-widget">
      <div class="ln-item">
        <img src="<?php echo get_template_directory_uri()?>/img/blog-thumbs/1.jpg" alt="">
        <div class="ln-text">
          <div class="ln-date">April 1, 2019</div>
          <h6>10 Amazing new games</h6>
          <div class="ln-metas">
            <div class="ln-meta">By Admin</div>
            <div class="ln-meta">in <a href="#">Games</a></div>
            <div class="ln-meta">3 Comments</div>
          </div>
        </div>
      </div>
      <div class="ln-item">
        <img src="<?php echo get_template_directory_uri()?>/img/blog-thumbs/2.jpg" alt="">
        <div class="ln-text">
          <div class="ln-date">April 1, 2019</div>
          <h6>10 Amazing new games</h6>
          <div class="ln-metas">
            <div class="ln-meta">By Admin</div>
            <div class="ln-meta">in <a href="#">Games</a></div>
            <div class="ln-meta">3 Comments</div>
          </div>
        </div>
      </div>
      <div class="ln-item">
        <img src="<?php echo get_template_directory_uri()?>/img/blog-thumbs/3.jpg" alt="">
        <div class="ln-text">
          <div class="ln-date">April 1, 2019</div>
          <h6>10 Amazing new games</h6>
          <div class="ln-metas">
            <div class="ln-meta">By Admin</div>
            <div class="ln-meta">in <a href="#">Games</a></div>
            <div class="ln-meta">3 Comments</div>
          </div>
        </div>
      </div>
      <div class="ln-item">
        <img src="<?php echo get_template_directory_uri()?>/img/blog-thumbs/4.jpg" alt="">
        <div class="ln-text">
          <div class="ln-date">April 1, 2019</div>
          <h6>10 Amazing new games</h6>
          <div class="ln-metas">
            <div class="ln-meta">By Admin</div>
            <div class="ln-meta">in <a href="#">Games</a></div>
            <div class="ln-meta">3 Comments</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sb-widget">
    <a href="#" class="add">
      <img src="<?php echo get_template_directory_uri()?>/img/add-2.jpg" alt="">
    </a>
  </div>
  <div class="sb-widget">
    <h2 class="sb-title">Latest Comments</h2>
    <div class="latest-comments-widget">
      <div class="lc-item">
        <img src="<?php echo get_template_directory_uri()?>/img/author-thumbs/1.jpg" alt="">
        <div class="lc-text">
          <h6>Jane Smith<span> In </span><a href="">The best 2019 Games</a></h6>
          <div class="lc-date">April 1,2019</div>
        </div>
      </div>
      <div class="lc-item">
        <img src="<?php echo get_template_directory_uri()?>/img/author-thumbs/2.jpg" alt="">
        <div class="lc-text">
          <h6>Michael James<span> In </span><a href="">The best 2019 Games</a></h6>
          <div class="lc-date">April 1,2019</div>
        </div>
      </div>
      <div class="lc-item">
        <img src="<?php echo get_template_directory_uri()?>/img/author-thumbs/3.jpg" alt="">
        <div class="lc-text">
          <h6>Jane Smith<span> In </span><a href="">The best 2019 Games</a></h6>
          <div class="lc-date">April 1,2019</div>
        </div>
      </div>
      <div class="lc-item">
        <img src="<?php echo get_template_directory_uri()?>/img/author-thumbs/4.jpg" alt="">
        <div class="lc-text">
          <h6>Michael James<span> In </span><a href="">The best 2019 Games</a></h6>
          <div class="lc-date">April 1,2019</div>
        </div>
      </div>
      <div class="lc-item">
        <img src="<?php echo get_template_directory_uri()?>/img/author-thumbs/1.jpg" alt="">
        <div class="lc-text">
          <h6>Jane Smith<span> In </span><a href="">The best 2019 Games</a></h6>
          <div class="lc-date">April 1,2019</div>
        </div>
      </div>
    </div>
  </div>
</div>
