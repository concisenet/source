<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Ajax测试--网站后台管理</title><link href="__PUBLIC__/css/admin_main.css" type="text/css" rel="stylesheet" /><script src="__PUBLIC__/js/jquery.js"></script><script>	$(function(){
		$('#add').click(function(){
			var $key="upload";
			$('#myform').submit();
			
		});
	})
</script><style>	#result{display:none;background:#00acec;color:#fff;height:100px;width:350px;position:absolute;top:200px;left:600px;}
</style></head><body><div class="admin_nav"><ul><li><a href="__APP__/category/">栏目管理</a></li><li><a href="__APP__/page/">单页管理</a></li><li><a href="__APP__/link/">链接管理</a></li><li><a href="__APP__/article/">文章管理</a></li><li><a href="__APP__/message/">留言管理</a></li><li><a href="__APP__/index/logout">安全退出</a></li><div class="clear"></div></ul></div><div class="admin_main"><div class="admin_left"></div><div class="admin_right"><form name="myform" method="post" id="myform" action="__ACTION__" enctype="multipart/form-data" target="hframe">				用户：<input type="text" id="uname" name="uname" /><br/>				密码：<input type="text" id="upwd" name="upwd" /><br/><input type="file" name="logo" /><br/><input type="button" name="sub" id="add" value="提交" /></form><?php echo ($nowdate); ?><iframe name="hframe" id="hframe" ></iframe></div><div class="clear"></div></div><div id="result"></div><div class="admin_footer"></div></body></html>