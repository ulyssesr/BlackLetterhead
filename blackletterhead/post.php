<div class="post">
<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to <?php the_title();?>"><?php the_title(); ?></a></h2>
<small>Posted in <?php the_category(', '); ?> on <?php the_time('F jS, Y'); ?> by <?php the_author(); ?></small>
<div class="entry">
<?php if (function_exists('the_post_thumbnail')) {the_post_thumbnail('post-thumbnail');} ?>
<?php the_content('Read more &raquo;'); ?></div>
<small><?php the_tags('Tags: ', ', ', '<br />'); ?></small>
<p class="postmetadata"><?php edit_post_link('Edit','',' | '); ?><?php comments_popup_link(' Leave A Comment &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
<?php trackback_rdf(); ?>
</div>
