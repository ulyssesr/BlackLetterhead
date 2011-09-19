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
      <?php wp_get_archives('type=postbypost&limit=10&format=html'); ?>
    </ul>
  <h3>Archives by Month:</h3>
    <ul>
     <?php wp_get_archives('type=monthly'); ?>
    </ul>
  <h3>Archives by Category:</h3>
  <ul>
  <?php wp_list_categories('title_li='); ?>
  </ul>
  </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); 

/* end of archives.php */
