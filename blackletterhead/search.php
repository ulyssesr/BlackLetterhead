<?php get_header(); ?>
<div id="content" class="narrowcolumn">
  <?php if (have_posts()) : ?>
  <h2 class="pagetitle">Search Results</h2>
  <div class="navigation">
    <div class="alignleft"><?php posts_nav_link('','','&laquo; Previous Entries') ?></div>
    <div class="alignright"><?php posts_nav_link('','Next Entries &raquo;','') ?></div>
  </div>
  <?php while (have_posts()) : the_post(); ?>
  <div class="post">
    <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
    <small><?php the_time('l, F jS, Y') ?></small>
    <div class="entry">
      <?php the_excerpt() ?>
    </div>
    <p class="postmetadata">Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit','',' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p> 
  </div>
  <?php endwhile; ?>
  <div class="navigation">
    <div class="alignleft"><?php posts_nav_link('','','&laquo; Previous Entries') ?></div>
    <div class="alignright"><?php posts_nav_link('','Next Entries &raquo;','') ?></div>
  </div>
  <?php else : ?>
  <h2 class="center">Not Found</h2>
  <?php include (TEMPLATEPATH . '/searchform.php'); ?>
  <?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); 

/* end of search.php */
