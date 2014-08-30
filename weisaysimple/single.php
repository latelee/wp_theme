<?php get_header(); ?>
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="查看评论" id="ct"></div><div title="转到底部" id="fall"></div></div>
<div id="content">
<div class="main">
<div id="mapsite">当前位置： <a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a> &gt; <?php the_category(', ') ?> &gt; 正文</div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="left">
<h2><?php the_title(); ?></h2>
<div class="article_info">作者：<?php the_author() ?> &nbsp; 发布：<?php the_time('Y-m-d H:i') ?> &nbsp; 分类：<?php the_category(', ') ?> &nbsp; <?php if(function_exists('the_views')) { echo '阅读：'; the_views(); } ?> &nbsp; <?php comments_popup_link ('无评论','1条评论','%条评论'); ?> &nbsp; <?php edit_post_link('编辑', ' [ ', ' ] '); ?></div>
<div class="article">
    <div class="clear"></div>
    <div class="context">
            <?php if (get_option('swt_adb') == 'Display') { ?><div style="float:right;border:1px #ccc solid;padding:2px;overflow:hidden;margin:12px 0 1px 2px;"><?php echo stripslashes(get_option('swt_adbcode')); ?></div><?php { echo ''; } ?><?php } else { } ?><?php the_content('Read more...'); ?><?php wp_link_pages(); ?><p>本文固定链接: <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_permalink() ?></a></p></div>
            <?php if (get_option('swt_adc') == 'Display') { ?><p style="text-align:center;"><?php echo stripslashes(get_option('swt_adccode')); ?></p><?php { echo ''; } ?><?php } else { } ?>
    </div>
</div>
<div class="articles">
    <div class="author_text">
    如无特别说明，<a href="<?php bloginfo('siteurl'); ?>"><?php bloginfo('name');?></a>文章均为原创，转载请注明: <a href="<?php the_permalink() ?>" rel="bookmark" title="本文固定链接 <?php the_permalink() ?>"><?php the_title(); ?> | <?php bloginfo('name');?></a><br/>
    </div>
</div>

<div class="articles">
<?php previous_post_link('【上一篇】%link') ?><br/><?php next_post_link('【下一篇】%link') ?>
</div>

<div class="articles">
<?php include('includes/related.php'); ?>
<div class="clear"></div>
</div>

<div class="articles">
<?php comments_template(); ?>
</div>

	<?php endwhile; else: ?>
	<?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>