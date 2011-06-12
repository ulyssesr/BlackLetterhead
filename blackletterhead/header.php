<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?><?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?><?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> 
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
<style type="text/css" media="screen">
<?php blackletterhead_sidebar(); ?>
<?php blackletterhead_rotateheaderimages(); ?>
<?php blackletterhead_pageborder(); ?>
<?php blackletterhead_mainfont(); ?>
<?php blackletterhead_headerfont(); ?>
<?php blackletterhead_posttitlefont(); ?>
<?php blackletterhead_sidebarfont(); ?>
<?php blackletterhead_sidebartitlefont(); ?>
<?php blackletterhead_textcolor(); ?>
<?php blackletterhead_orange(); ?>
<?php blackletterhead_yellow(); ?>
</style>
</head>
<body>

<div id="page">
<div id="header" onclick="location.href='<?php bloginfo('url');?>';" style="cursor:pointer;">
<?php blackletterhead_displayheader(); ?>
</div>
<?php wp_nav_menu(array( 'theme_location' => 'top_menu', 'container_class' => 'menu-sample', 'fallback_cb' => '')); ?>
<div style="clear:both"></div>

