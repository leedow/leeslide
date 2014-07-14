<?php
include_once('include/base-config.php'); 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<meta charset="UTF-8" />
	<title>Comments of Leedow</title>
	<link rel="stylesheet" type="text/css" href="<?php echo constant('INC_URL');?>lee-style.css"/>
	<!--
	<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js?appkey=3115725149" type="text/javascript" charset="utf-8"></script>
	-->
	<style>
	 #goback{
	 	position: absolute;
	 	z-index: 0;
	 	left: 0;
	 	top: 0;
	 	overflow: hidden;
	 	width: 80px;
	 	height: 100%;
	 	background: #4183C4 ;
	}

	 #goback ul{	 
	}

	#goback ul li{
	 	float: left;
	 	width: 80px;
	 	height: 80px;
	 	font-size: 14px; 
	 	cursor: pointer;
	 	text-align: center;
	 	line-height: 80px;
	 	color:#fff;
	 	text-shadow:1px 1px 4px #333;
	 	background: #ffcc00;
	}
	a{text-decoration: none;}
	 
	</style>
</head>
<body>
	<div id="goback">
		<ul>
			<a href="http://www.leedow.com/">
			<li><回首页</li></a>
		</ul>
		 
	</div>
	 <div class="contact-box" style="padding:20px 20px 20px 100px;">
	 <!--
	 	 <wb:comments url="http://www.leedow.com/" width="auto" appkey="3115725149" ></wb:comments>
	 -->
	 <!-- UY BEGIN -->
<div id="uyan_frame"></div>
<script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=1931023"></script>
<!-- UY END -->
	 	 
	 </div>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F85826a08d34ed79d760289a3de2da49d' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>
