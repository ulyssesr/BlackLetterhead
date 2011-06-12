<?php get_header();  ?>
<div id="content" class="narrowcolumn">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php require('post.php'); ?>
<?php endwhile; ?>
<div class="navigation">
<div class="alignleft"><?php next_posts_link('« Older Entries'); ?></div>
<div class="alignright"><?php previous_posts_link('Newer Entries »'); ?></div> 
</div>
<?php else : ?>
<h2 class="center">Not Found</h2>
<p class="center"><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); 

/* end of index.php */
