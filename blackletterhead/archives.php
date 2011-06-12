<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
<div id="content" class="narrowcolumn">
  <div class="pagepost">
  <h2>Archives</h2>
  <h3>Last 10 Posts</h3>
  <ul>
    <?php get_archives('postbypost', '10', 'other', '<li>', '</li>', false); ?>
  </ul>
  <h3>Archives by Month:</h3>
  <ul>
    <?php wp_get_archives('type=monthly'); ?>
  </ul>
  <h3>Archives by Subject:</h3>
  <ul>
    <?php wp_list_cats(); ?>
  </ul>
  </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); 

/* end of archives.php */
