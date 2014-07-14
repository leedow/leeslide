<?php
include_once('include/base-config.php'); 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<meta charset="UTF-8" />
	<title>Leedow</title>
	<script src="../js/jquery-1.10.1.min.js"></script> 
	<script src="../js/jquery.leeslide.js"></script> 
	<link rel="stylesheet" type="text/css" href="css/lee-style.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>	 
	<link rel="stylesheet" type="text/css" href="../style/leeslide.css"/>
</head>
<body scroll="no">

<div id="test">
	<div class="lsd-container">
		
		<div class="lsd-box" style="background:#ccc;overflow-y:auto !important;">
			
			<div class="container avatar">
				<h1>
					<img src="img/leedow-carton.png" />
				</h1>
				<p class="base-info">
					<?php 
					$word = '<span>"Hey there,welcome to my castle!"</span>';
					$text  = array(
						'php' => "&lt;?php echo $word; ?&gt;",
						'python' => "print $word",
						'java' => "System.out.print($word)",
						'c'   => "printf($word);"
					);
					echo $text[array_rand($text)];
					?>
					
				</p>
				<p class="more-info">
					我是Leedow，来自浙江杭州，控制相关专业在读硕士生，<br/>业余长期从事Web领域开发，摄影和指弹爱好者
				</p>
			</div>
			<div class="container link-line">
				<div class="links lee-center">
					<ul>
						<li onclick="$('#test').leeslide.slideTo(1)">LOFTER</li>
						<li onclick="$('#test').leeslide.slideTo(2)">新浪微博</li>
						<li onclick="$('#test').leeslide.slideTo(3)">联系方式</li>
						<li onclick="$('#test').leeslide.slideTo(4)">留 言</li>
					</ul>
				</div>
				
			</div>
			<div class="container">
				<div class="copyright">
					<p class="p2">
					<img src="img/leedow.png" align="left"/>
					     Copyright © 2014 All Rights Reserved
					     
					</p>
					<p class="p1">
						感谢   &nbsp;&nbsp;
						<a href="http://sae.sina.com.cn/"  target="_blank">
<img src="img/sae-logo.png"  border="0" /> 
						</a>
					&nbsp;&nbsp;&&nbsp;&nbsp;
					<a href="http://www.qiniu.com/" target="_blank">
<img src="img/qiniu-logo.png"  border="0"/>
					</a>
					&nbsp;&nbsp;提供云服务
					</p>
				</div>
			</div>
		
		</div>
		<div class="lsd-box" style="background:#fff;">
			 
		</div>
		<div class="lsd-box" style="background:#fff;">
		 	<div class="weibobox">
		 	</div>
			<script>
		 		$('.weibobox').html('<iframe width="960" height="'+$(window).height()+'" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=960&height='+$(window).height()+'&fansRow=2&ptype=1&speed=0&skin=5&isTitle=1&noborder=1&isWeibo=1&isFans=1&uid=1353674400&verifier=22b45b00&dpc=1"></iframe>');	
		 	</script>
			 
		</div>
		<div class="lsd-box" style="background:#fff;">
 			 
		</div>
		<div class="lsd-box" style="background:#fff;">
 			 
		</div>
	</div>
	<div class="lsd-tab">
		<ul class="text-shadow">
			<li class="lsd-rm">主 页</li>
			<li class="lofter lsd-hide">Lofter</li>
			<li class="weibo">微 博</li>
		 	<li class="contact">联 系</li>
		 	<li class="comments">留 言</li>
		</ul>	
	</div>	
</div>
<script type="text/javascript">
	 $('#test').leeslide({
	 	content		: {
	 		lofter	: 'http://leedow.lofter.com',
	 		contact : 'http://leedow.sinaapp.com/contact.php',
	 		comments: 'http://www.leedow.com/comments.php' 
	 	}
	 });
</script>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F85826a08d34ed79d760289a3de2da49d' type='text/javascript'%3E%3C/script%3E"));
</script>	 
</body>
</html>
