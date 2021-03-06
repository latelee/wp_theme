<?php
/*
Template Name: 联系方式
*/
?>
<?php get_header(); ?>
<article id="primary" class="site-content">
	<section class="single-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content' ); ?>
	</section>
	<!-- #content -->
	<section class="single-content">
		<div class="contact" style="padding:30px;">
			<h4>联系我</h4>
			<div id="hint">可以使用下面的表单发送Email，我会尽快回复！</div>
			<form action="" id="wr" name="wr" class="index_contact_form">
				<div class="contact_form_inner_form">
					<div class="index_contact_form_title">昵称</div>
					<input type="text" name="name" id="form_name" style="padding:3px;border:1px solid #ccc;-webkit-appearance: none;"/>
					<div class="index_contact_form_title">邮箱</div>
					<input type="text" name="email" id="form_email" style="padding:3px;border:1px solid #ccc;-webkit-appearance: none;"/>
					<div class="index_contact_form_title">网站</div>
					<input type="text" name="website" id="form_website" style="padding:3px;border:1px solid #ccc;-webkit-appearance: none;"/>
					<div class="index_contact_form_title">内容</div>
					<textarea name="message" id="form_message" style="height:100px;padding:10px;border:1px solid #ccc;width:96.5%;-webkit-appearance: none;" cols="" rows=""></textarea>
					<input type="button" value="发送邮件" class="contact_form_submit" onclick="initrequest('<?php bloginfo('template_url'); ?>/inc/form.php');" style="cursor:pointer;background: #04a4cc;width:87px;height:35px;color: #fff;text-align:center;margin:10px 0 0 0;border:0px;border-radius:2px;-webkit-appearance: none;"/>
				</div>
			</form>
		</div>
	</section>
	<?php endwhile; ?>
</article>
<!-- #primary -->
<script type="text/javascript">
function initrequest(url){
	var http_request = false;
	//initialize vars
	var email=document.wr.email.value;
	var name=document.wr.name.value;
	var message=document.wr.message.value;
	var website=document.wr.website.value;
	var hint="";
	var msg="姓名: "+name+" \n网址: "+website+" \n邮箱: "+email+"\n\n"+"\n"+"邮件内容:\n"+message;
   	
	var passData="email="+email+"&name="+name+"&message="+msg;

	if (window.XMLHttpRequest) { // Mozilla, Safari, ...
        http_request = new XMLHttpRequest();
            if (http_request.overrideMimeType) {
                http_request.overrideMimeType('text/xml');
            }
        } else if (window.ActiveXObject) { // IE
            try {
                http_request = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    http_request = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {}
            }
        }
        if (!http_request) {
            alert('Error: Unable to initialize class');
            return false;
        }
        http_request.onreadystatechange = function() { sendrequest(http_request); };
        http_request.open('POST', url, true);
       	http_request.setRequestHeader('Content-Type','application/x-www-form-urlencoded; charset=UTF-8');
		if (email && name && message)
		{
			http_request.send(passData);
		}else {
			if (!email)
			{
				hint+="<font color=#ff0000>请填写电子邮件地址</font><br />";
			}
			if (!name)
			{
				hint+="<font color=#ff0000>请填写昵称</font><br />";
			}
			if (!message)
			{
				hint+="<font color=#ff0000>请输入邮件内容</font><br />";
			}
			
			document.getElementById('hint').innerHTML=hint;
			
		}
}

function sendrequest(http_request) {
	if (http_request.readyState == 4) {
		if (http_request.status == 200) {
			document.getElementById('hint').innerHTML = http_request.responseText;
			document.getElementById('form_name').value = '';
			document.getElementById('form_email').value = '';
			document.getElementById('form_website').value = '';
			document.getElementById('form_message').value = '';
		} else {
		HideIndicator()
			document.getElementById('hint').innerHTML = '邮件没有发送成功，请稍后再试。谢谢！';
		}
	}
}
</script>
<?php get_sidebar(); ?>
<?php get_footer(); ?> 