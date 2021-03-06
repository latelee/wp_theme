<?php get_header(); ?>
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="转到底部" id="fall"></div></div>
<div id="content">
<div class="main">
<div id="mapsite">当前位置： <a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a> &gt; 搜索结果</div>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
<ul <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<li>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="详细阅读 <?php the_title_attribute(); ?>"><?php the_title(); ?></a><span class="new"><?php include('includes/new.php'); ?></span></h2>
<div class="article">
<?php if (get_option('swt_thumbnail') == 'Display') { ?>
        <?php if (get_option('swt_articlepic') == 'Display') { ?>
<?php include('includes/articlepic.php'); ?>
    <?php { echo ''; } ?>
			<?php } else { include(TEMPLATEPATH . '/includes/thumbnail.php'); } ?>
<?php { echo ''; } ?><?php } else { } ?>
<div class="entry_post"><?php
    if(is_singular()){the_content();}else{
    $pc=$post->post_content;
    $st=strip_tags(apply_filters('the_content',$pc));
    if(has_excerpt())
        the_excerpt();
    elseif(preg_match('/<!--more.*?-->/',$pc) || mb_strwidth($st)<300)
        the_content('');
    elseif(function_exists('mb_strimwidth'))
        echo'<p>'
        .mb_strimwidth($st,0,300,' ...')
        .'</p>';
    else the_content();
}?></div>
<div class="clear"></div>
<div class="info">作者：<?php the_author() ?> | 发布：<?php the_time('Y-m-d H:i') ?> | 分类：<?php the_category(', ') ?> <?php if(function_exists('the_views')) { echo '| 阅读：'; the_views(); } ?> <?php the_tags('| 标签：', ', ', ''); ?> | 评论：<?php comments_popup_link ('无评论','1条评论','%条评论'); ?></div>
<div class="comments_num"><span class="more"><a href="<?php the_permalink() ?>" title="详细阅读 <?php the_title(); ?>" rel="nofollow">阅读全文</a></span></div>
</div></li></ul><div class="clear"></div>
		<?php endwhile; else: ?>
<div class="left">
<div class="article">
<h3 class="center">非常抱歉，无法搜索到与之相匹配的信息。</h3>
</div></div>
		<?php endif; ?> 
<div class="navigation"><?php pagination($query_string); ?></div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>