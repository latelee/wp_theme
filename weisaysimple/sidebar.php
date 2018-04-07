<div id="sidebar">
<div class="widget">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('小工具1') ) : ?>
	<?php endif; ?>
</div>

<div class="clear"></div>
<div class="widget"><div id="tab-title"><?php include('includes/r_tab.php'); ?></div></div>
<div class="widget">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('小工具2') ) : ?>
	<?php endif; ?>
</div>

<?php if (get_option('swt_ada') == 'Display') { ?>
<div class="widget"><h3>广告</h3><?php echo stripslashes(get_option('swt_adacode')); ?></div><?php { echo ''; } ?><?php } else { } ?>

<div class="widget">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('小工具3') ) : ?>
	<?php endif; ?>
</div>

<div class="clear"></div>
<div class="widget"><?php include('includes/r_comment.php'); ?></div>

<div class="widget"><h3>标签云集</h3>	
<div class="tags"><?php wp_tag_cloud('smallest=12&largest=12&unit=px&number=32&orderby=count&order=RAND');?></div><div class="clear"></div></div>

<div class="widget"><?php include('includes/r_statistics.php'); ?></div>
<?php if ( is_home() ) { ?>
<div class="widget">
<h3>友情链接</h3>
<div class="v-links"><ul><?php wp_list_bookmarks('orderby=link_id&categorize=0&category='.get_option('swt_links').'&title_li='); ?></ul></div></div>
<div class="clear"></div>
<?php } ?>

<div class="widget">
<?php
  global $user_ID, $user_identity, $user_email, $user_login;
  get_currentuserinfo();
  if (!$user_ID) {
?>

<?php } 
else { ?>
<h3>用户管理</h3>
<div class="v_avatar"><?php echo weisay_get_avatar($user_email, 64); ?></div><div class="v_li">
			<li><a href="<?php bloginfo('url') ?>/wp-admin/">控制面板</a></li>
				<li><a href="<?php bloginfo('url') ?>/wp-admin/post-new.php">撰写文章</a></li>
				<li><a href="<?php bloginfo('url') ?>/wp-admin/edit-comments.php">评论管理</a></li>
				<li><a href="<?php bloginfo('url') ?>/wp-login.php?action=logout&amp;redirect_to=<?php echo urlencode($_SERVER['REQUEST_URI']) ?>">注销</a></li></div>
<?php } ?></div>
</div>
</div>
