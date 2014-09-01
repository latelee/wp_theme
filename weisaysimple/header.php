<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php include('includes/seo.php'); ?>
<?php if (get_option('swt_alt_stylesheet')==''):?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css?ver=1.62" />
<?php endif;?>
<link rel="alternate" type="application/rss+xml" title="迟思堂工作室 RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="迟思堂工作室 Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
<?php wp_head(); ?>
<?php if ( is_singular() ){ ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/comments-ajax.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/realgravatar.js"></script>
<?php } ?>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/hoveraccordion.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/weisay.js"></script>
<?php include('includes/lazyload.php'); ?>
</head>
<body>
<div id="page">
<div id="header">
<div id="top">
<div class="subpage">
<?php if (get_option('swt_toppage') == 'Hide') { ?>
<?php { echo ''; } ?>
<?php } else { ?><div class="toppage"><ul><?php wp_list_pages('depth=2&title_li='); ?></ul></div><?php } ?>
<div id="rss"><ul>
<li class="rssfeed"><a href="<?php bloginfo('rss2_url'); ?>" target="_blank" class="icon1" title="欢迎订阅迟思堂工作室"></a></li>
<!--
<?php if (get_option('swt_tqq') == 'Display') { ?><li class="tqq"><a href="<?php echo stripslashes(get_option('swt_tqqurl')); ?>" target="_blank" class="icon2" title="我的腾讯微博"></a></li><?php { echo ''; } ?><?php } else { } ?>
<?php if (get_option('swt_tsina') == 'Display') { ?><li class="tsina"><a href="<?php echo stripslashes(get_option('swt_tsinaurl')); ?>" target="_blank" class="icon3" title="我的新浪微博"></a></li><?php { echo ''; } ?><?php } else { } ?>
<?php if (get_option('swt_mailqq') == 'Display') { ?><li class="rssmail"><a href="http://mail.qq.com/cgi-bin/feed?u=<?php bloginfo('rss2_url'); ?>" target="_blank" class="icon4" title="用QQ邮箱阅读空间订阅我的博客"></a></li><?php { echo ''; } ?><?php } else { } ?>
-->
</ul></div>
<div class="clear"></div>
</div>
<div id="top_logo">
    <a href="<?php bloginfo('siteurl'); ?>" title="迟思堂工作室 - 李迟的技术主页"><div class="logo"></div></a>
    <div id="blogname"><a href="<?php echo get_option('home'); ?>">迟思堂工作室</a><div id="blogtitle">李迟的技术主页</div></div>
</div>

<div class="topnav">
<?php
if(function_exists('wp_nav_menu')) {
    wp_nav_menu(array('theme_location'=>'primary','menu_id'=>'nav','container'=>'ul'));
}?>
<div class="search">		
    <form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
        <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" size="30" />
        <button type="submit"><?php _e("Search"); ?></button>
    </form>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>