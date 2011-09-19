<div id="sidebar">
  <ul>
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
    <li><?php get_search_form(); ?></li>
    <li>
      <?php /* If this is a category archive */ if (is_category()) { ?>
      <p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>
      <?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
      <p>You are currently browsing the <a href="<?php echo get_option('siteurl'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives for the day <?php the_time('l, F jS, Y'); ?>.</p>
      <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
      <p>You are currently browsing the <a href="<?php echo get_option('siteurl'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives for <?php the_time('F, Y'); ?>.</p>
      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
      <p>You are currently browsing the <a href="<?php echo get_option('siteurl'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives for the year <?php the_time('Y'); ?>.</p>
      <?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
      <p>You have searched the <a href="<?php echo get_option('siteurl'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives for <strong>'<?php echo esc_html($s); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>
      <?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
      <p>You are currently browsing the <a href="<?php echo get_option('siteurl'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives.</p>
      <?php } ?>
    </li>
    <?php wp_list_pages('title_li=<h2>' . __('Pages') . '</h2>' ); ?>
    <?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>				
    <?php wp_list_bookmarks(); ?>
    <li>
    <?php wp_list_categories('title_li=<h2>' . __('Categories') . '</h2>' ); ?>
    </li>
    <?php if (function_exists('wp_theme_switcher')) { ?>
    <li><h2><?php _e('Themes'); ?></h2>
      <?php wp_theme_switcher(); ?>
    </li>
    <?php } ?>
    <li><?php get_calendar(); ?></li>
    <li><h2><?php _e('Archives'); ?></h2>
      <ul>
        <?php wp_get_archives('type=monthly'); ?>
      </ul>
    </li>
    <li>
      <h2><?php _e('Meta'); ?></h2>
      <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>'); ?></a></li>
        <li><a href="http://jigsaw.w3.org/css-validator/check/referer" title="<?php _e('This validates the CSS for this site'); ?>"><?php _e('Valid <abbr title="Cascading Style Sheets">CSS</abbr>'); ?></a></li>
        <li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
        <li><a href="http://ulyssesonline.com/atom/" title="<?php _e('Syndicate this site using Atom'); ?>">Atom 1.0</a></li>
        <li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS 2.0'); ?>"><?php _e('Entries <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
        <li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
        <li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>">WordPress</a></li>
        <?php wp_meta(); ?>
      </ul>
    </li>
    <?php } ?>
    <?php endif; ?>	
    <?php if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) { ?><br /><?php } else {} ?>
  </ul>
</div>
