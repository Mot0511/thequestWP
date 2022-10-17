<?php
comment_form(array(
  'fields'=>array(
    'author'=>'
    <div class="row">
      <div class="col-md-6">
        <input type="text" name="author" id="author" placeholder="Your name">
      </div>
    ',
    'email'=>'
      <div class="col-md-6">
        <input type="text" name="email" id="email" placeholder="Your e-mail">
      </div>
      </div>
    '
  ),
  'comment_field'=>'
    <div class="col-md-12">
      <textarea placeholder="Your message" name="comment" id="comment"></textarea>
    </div>
  ',
  'title_reply_before'=>'<h5 id="reply-title" class="comment-reply-title">',
  'title_replay'=>'Leave a Reply',
  'title_reply_after'=>'</h5>',
  'submit_field'=>'
  <p class="form-submit"><input name="submit" type="submit" id="submit" class="site-btn" value="POST COMMENT"> <input type="hidden" name="comment_post_ID" value="11" id="comment_post_ID">
<input type="hidden" name="comment_parent" id="comment_parent" value="0">
</p>
  ')
);
 ?>
 <div class="comments">
   <ul class="comments-list">
   <?php
   wp_list_comments([
     'style'=>'ul'
   ]);
   ?>
  </ul>
 </div>
