<?php get_template_part( 'inc/links' ); ?>

<footer id="footer">
	<div class="site-info">
<!-- my own info -->
Copyright &copy; 2010-2018 <a href="http://www.latelee.org/" title="迟思堂工作室">烟雨斜照</a>.  &nbsp; Powered by <a href="http://www.wordpress.org/" rel="external">WordPress</a>. Theme by  <a title="主题设计：知更鸟" href="http://zmingcx.com" target="_blank"><?php echo get_current_theme(); ?></a>. Modified by <a href="http://www.latelee.org/" title="李迟">Late Lee</a>.
<a href="http://www.miitbeian.gov.cn/" rel="external nofollow"> 桂ICP备10003672号.&nbsp; </a>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_2137378'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/stat.php%3Fid%3D2137378' type='text/javascript'%3E%3C/script%3E"));</script>&nbsp; | &nbsp; <a href="http://www.latelee.org/donate">赞助本站</a>
</p>若非特别声明，本站原创作品均采用<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/cn/" target=_blank>知识共享署名-非商业性使用-相同方式共享 3.0 中国大陆许可协议</a>进行许可。转载请注明作者及出处。
</p>This site is licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 3.0 License.

	<!-- .site-info -->
<div id="sidr" style="display: none;"><a id="simple-menu-s" href="#sidr"><i class="icon-close"></i></a><?php wp_nav_menu( array( 'theme_location' => 'mini-menu', 'fallback_cb' => 'default_menu' ) ); ?></div>



<?php get_template_part( 'inc/login' ); ?>

<?php get_template_part( 'inc/scroll' ); ?>

</footer>
<!-- #footer -->
</div><!-- #main -->
</div><!-- #page -->
<?php if (is_home() || is_archive() || is_search()) { ?>
<script type="text/javascript">
    document.onkeydown = chang_page;function chang_page(e) {
        var e = e || event,
        keycode = e.which || e.keyCode;
        if (keycode == 33 || keycode == 37) location = '<?php echo get_previous_posts_page_link(); ?>';
        if (keycode == 34 || keycode == 39) location = '<?php echo get_next_posts_page_link(); ?>';
    }
</script>
<?php } ?>
<?php wp_footer(); ?>

</body>
</html>
