<?php

/* Widgets */

if ( function_exists('register_sidebar') ) register_sidebar();

/* Legacy Comments */

add_filter('comments_template', 'legacy_comments');
function legacy_comments($file) {
 if(!function_exists('wp_list_comments')) 
 $file = TEMPLATEPATH . '/legacy.comments.php';
 return $file;
}

/* Automatic Feed Links */

add_theme_support('automatic-feed-links');

/* Post Thumbnails */

add_theme_support( 'post-thumbnails' );

/* Custom Menus */

add_theme_support('menus');
add_action('init', 'register_top_menu');
function register_top_menu() {
register_nav_menu('top_menu', __('Top Menu'));
}

/* Custom Backgrounds */

add_custom_background();

/* Custom Headers */

define( 'HEADER_IMAGE', '%s/images/header.png' ); // The default logo located in themes folder
define( 'HEADER_IMAGE_WIDTH', apply_filters( '', 960 ) ); // Width of Logo
define( 'HEADER_IMAGE_HEIGHT', apply_filters( '', 200 ) ); // Height of Logo
define( 'NO_HEADER_TEXT', true );
add_custom_image_header( '', 'admin_header_style' ); // This Enables the Appearance > Header
// Following Code is for Styling the Admin Side
add_action('wp_head', 'admin_header_style');
if ( ! function_exists( 'admin_header_style' ) ) :
function admin_header_style() {
?>
<style type="text/css">
#header { background-image: url('<?php header_image(); ?>');}
</style>
<?php
}
endif;

/* Theme functions */

include(dirname(__FILE__).'/themetoolkit.php');

themetoolkit(
'blackletterhead',array(    
'sep1' => 'Layout {separator}',
'sidebar' => 'Sidebar:Page Width  {radio|right|Right Sidebar - Normal 760px (Default)|left|Left Sidebar - Normal 760px|rightwide|Right Sidebar - Wide 960px|leftwide|Left Sidebar - Wide 960px}',

'sep2' => 'Header Images {separator}',
'rotateheaderimages' => 'Rotate {radio|no|No (Default)|yes|Yes - Place header images in the theme /images directory. Disables Custom Header.}',

'sep3' => 'Header Display {separator}',
'removefromheader' => 'Remove Title and Tagline {radio|no|No (Default)|yes|Yes}',

'sep4' => 'Single Page {separator}',
'singlewithsidebar' => 'With Sidebar {radio|yes|Yes|no|No (Default)}',

'sep5' => 'Border {separator}',
'pageborder' => 'Page Border {radio|no|No|yes|Yes (Default)}',
'pagebordercolor' => 'Page Border Color ## Default color #959596 - light grey',

'sep6' => 'Fonts {separator}',
'mainfont' => 'Main Text Font ## Default font: Verdana, Arial, Sans-Serif',
'headerfont' => 'Main Header Font ## Default font: Garamond, Serif',
'posttitlefont' => 'Post Title Fonts ## Default font: Palatino Linotype, Serif',
'sidebarfont' => 'Sidebar Font ## Default font: Verdana, Arial, Sans-Serif',
'sidebartitlefont' => 'Sidebar Title Fonts ## Default font: Verdana, Arial, Sans-Serif',

'sep7' => 'Text Colors {separator}',
'textcolor' => 'Main Text Color ## Default color #B0B0B0 - light white',
'orange' => 'Header & Link Colors ## Default color #FD5A1E - dark orange color',
'yellow' => 'Post Title & Sidebar Titles ## Default color #E4D3A6 - light yellow color',
),__FILE__);

function blackletterhead_sidebar() {
global $blackletterhead;
if ($blackletterhead->option['sidebar'] == "left") { 
echo ".narrowcolumn {float:right;padding:0 45px 20px 0;margin:0;width:450px;} #sidebar {padding:32px 5px 10px 5px;margin-left:25px;width:190px;}"; }
if ($blackletterhead->option['sidebar'] == "rightwide") { 
echo "#page {margin:20px auto;padding:0;width:960px;} #sidebar {padding:32px 0 10px 0;margin-left:745px;width:190px;} .narrowcolumn {float:left;padding:0 0 20px 45px;margin:0px 0 0;width:650px;}
#footer {padding:50px 0 0 0;margin:0 auto;width:960px;clear: both;} .widecolumn {padding:10px 0 20px 0;margin:5px 0 0 150px;width:650px;}"; }
if ($blackletterhead->option['sidebar'] == "leftwide") { 
echo "#page {margin:20px auto;padding:0;width: 960px;} #sidebar {padding: 32px 5px 10px 5px;margin-left:25px;width:190px;} .narrowcolumn {float:right;padding:0 45px 20px 0;margin:0;width:650px;}
#footer {padding:50px 0 0 0;margin:0 auto;width:960px;clear:both;} .widecolumn {padding:10px 0 20px 0;margin:5px 0 0 150px;width:650px;}";}	
}

function blackletterhead_rotateheaderimages() {
global $blackletterhead;
if ($blackletterhead->option['rotateheaderimages'] == "yes") { 
print '#header {background-image: url('; bloginfo('template_directory');echo '/rotate.php);}';
print "\n"; }
}

function blackletterhead_displayheader() {
global $blackletterhead;
if ($blackletterhead->option['removefromheader'] == "yes") { 
print '';} else { ?>
<h1><a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a></h1>
<div class="description"><?php bloginfo('description'); ?></div>
<?php }
}

function blackletterhead_singlewithsidebardiv() {
global $blackletterhead;
if ($blackletterhead->option['singlewithsidebar'] == "yes") { 
print '<div id="content" class="narrowcolumn">';
print "\n"; }
}

function blackletterhead_singlewithsidebarcall() {
global $blackletterhead;
if ($blackletterhead->option['singlewithsidebar'] == "yes") { 
get_sidebar();}
}

function blackletterhead_pageborder() {
global $blackletterhead;
if ($blackletterhead->option['pageborder'] == "yes") { 
print '#page { border: 1px solid ';
print $blackletterhead->option['pagebordercolor']; 
print ";}\n"; }
}

function blackletterhead_mainfont() {
global $blackletterhead;
if ($blackletterhead->option['mainfont']) { 
print 'body { font-family: ';
print $blackletterhead->option['mainfont']; 
print ";}\n"; }
}

function blackletterhead_headerfont() {
global $blackletterhead;
if ($blackletterhead->option['headerfont']) { 
print 'h1 { font-family: ';
print $blackletterhead->option['headerfont']; 
print ";}\n"; }
}

function blackletterhead_posttitlefont() {
global $blackletterhead;
if ($blackletterhead->option['posttitlefont']) { 
print 'h2,h3 { font-family: ';
print $blackletterhead->option['posttitlefont']; 
print ";}\n"; }
}

function blackletterhead_sidebarfont() {
global $blackletterhead;
if ($blackletterhead->option['sidebarfont']) { 
print '#sidebar { font-family: ';
print $blackletterhead->option['sidebarfont']; 
print ";}\n"; }
}

function blackletterhead_sidebartitlefont() {
global $blackletterhead;
if ($blackletterhead->option['sidebartitlefont']) { 
print '#sidebar h2 { font-family: ';
print $blackletterhead->option['sidebartitlefont']; 
print ";}\n"; }
}

function blackletterhead_textcolor() {
global $blackletterhead;
if ( $blackletterhead->option['textcolor'] ) { 
print 'body { color:'; print $blackletterhead->option['textcolor']; print " ;}\n"; }
}

function blackletterhead_orange() {
global $blackletterhead;
if ( $blackletterhead->option['orange'] ) { 
print 'h1, h1 a, h1 a:hover, h1 a:visited, .description { color:'; 
print $blackletterhead->option['orange']; print " ;}\n";
print '.entry p a:visited { color:';
print $blackletterhead->option['orange']; print " ;}\n";
print 'a, h2 a:hover, h3 a:hover { color:';
print $blackletterhead->option['orange']; print " ;}\n"; }
}

function blackletterhead_yellow() {
global $blackletterhead;
if ( $blackletterhead->option['yellow'] ) { 
print 'strong { color:'; 
print $blackletterhead->option['yellow']; print " ;}\n";
print 'h2, h2 a, h2 a:visited, h3, h3 a, h3 a:visited { color:'; 
print $blackletterhead->option['yellow']; print " ;}\n"; }
}
	
if (!$blackletterhead->is_installed()) { 
$set_defaults['sidebar'] = 'right';
$set_defaults['rotateheaderimages'] = 'no';
$set_defaults['removefromheader'] = 'no';
$set_defaults['singlewithsidebar'] = 'no';
$set_defaults['pageborder'] = 'yes';
$set_defaults['pagebordercolor'] = '#959596';
$set_defaults['mainfont'] = 'Verdana, Arial, Sans-Serif';
$set_defaults['headerfont'] = 'Garamond, Serif';
$set_defaults['posttitlefont'] = 'Palatino Linotype, Serif';
$set_defaults['sidebarfont'] = 'Verdana, Arial, Sans-Serif';
$set_defaults['sidebartitlefont'] = 'Verdana, Arial, Sans-Serif';
$set_defaults['textcolor'] = '#B0B0B0';
$set_defaults['orange'] = '#FD5A1E';
$set_defaults['yellow'] = '#E4D3A6';	
$result = $blackletterhead->store_options($set_defaults); 
}

/* end of functions.php */
