<?php get_header(); ?>
<?php if ($blackletterhead->option['singlewithsidebar'] == "yes") { blackletterhead_singlewithsidebardiv(); } else { ?>
<div id="content" class="widecolumn">
<?php } ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="post">
    <div class="navigation">
      <div class="alignleft"><?php previous_post('&laquo; %','','yes') ?></div>
      <div class="alignright"><?php next_post(' % &raquo;','','yes') ?></div>
    </div>		
    <h2 id="post-<?php the_ID(); ?>"><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>	
    <div class="entrytext">
      <?php if (function_exists('the_post_thumbnail')) {the_post_thumbnail('post-thumbnail');} ?>
      <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
      <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
      <small><?php the_tags('Tags: ', ', ', '<br />'); ?></small>				
      <p class="postmetadata alt">
      <small>
      This entry was posted on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
      and is filed under <?php the_category(', ') ?>.
      You can follow any responses to this entry through the <?php comments_rss_link('RSS 2.0'); ?> feed. 
      <?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
      // Both Comments and Pings are open ?>
      You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(display); ?>">trackback</a> from your own site.
      <?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
      // Only Pings are Open ?>
      Responses are currently closed, but you can <a href="<?php trackback_url(display); ?> ">trackback</a> from your own site.
      <?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
      // Comments are open, Pings are not ?>
      You can skip to the end and leave a response. Pinging is currently not allowed.
      <?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
      // Neither Comments, nor Pings are open ?>
      Both comments and pings are currently closed.			
      <?php } edit_post_link('Edit this entry.','',''); ?>
      </small>
      </p>
    </div>
  </div>
  <?php comments_template(); ?>
  <?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>
</div>
<?php blackletterhead_singlewithsidebarcall(); ?>
<?php get_footer(); 

/* end of single.php */
