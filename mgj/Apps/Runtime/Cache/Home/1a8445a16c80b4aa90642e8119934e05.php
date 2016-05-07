<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/Public/Home/css/login.css">
	<link rel="icon" href="/Public/Home/images/logo.ico">
	<title>登录_蘑菇街</title>
</head>
<body>
	<div id="zc">
		<!-- logo显示 -->
		<div class="zc_logo"><img src="/Public/Home/images/logo.png"></div>
		<!-- 主体内容 -->
		<div class="zc_main">
			<!-- 大图片 -->
			<div class="img"><img src="/Public/Home/images/zhuce.jpg" alt=""></div>
			<!-- 登录表单 -->
			<div class="form">
				<!-- 表头 -->
				<div class="form_head">
					<div class="head"><b>普通登录</b></div>
				</div>
				<!-- 表单主体 -->
				<div class="form_main">
					<div class="main">
						<form action="" method="">
							<input type="text" name="username" class="username" placeholder="用户名">
							<input type="password" name="password" class="password" placeholder="密码">
							<button class="tj">注册</button>
							
							<div class="login"><a href="<?php echo U('Home/User/zhuce');?>">新用户注册</a></div>
						</form>
						<div class="otherlogin">
							<p>你也可以用以下方式登录：</p>
							<ul>
								<li><a href=""><img src="/Public/Home/images/1.png" alt=""></a></li>
								<li><a href=""><img src="/Public/Home/images/2.png" alt=""></a></li>
								<li><a href=""><img src="/Public/Home/images/3.png" alt=""></a></li>
								<li><a href=""><img src="/Public/Home/images/4.png" alt=""></a></li>
								<li><a href=""><img src="/Public/Home/images/5.png" alt=""></a></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 底部 -->
	<div id="button">
			<div class="button_left">
				<table class="one">
					<tr class="a">
						<td>新手帮助</td>
						<td>权益保障</td>
						<td>商家服务</td>
					</tr>
					<tr class="b">
						<td>如何购买</td>
						<td>全国包邮</td>
						<td>免费开店</td>
					</tr>
					<tr class="c">
						<td>支付教程</td>
						<td>无理由退货</td>
						<td>商家社区</td>
					</tr>
					<tr class="d">
						<td>优惠券使用</td>
						<td>退货运费补贴</td>
						<td>商家入驻</td>
					</tr>
					<tr class="e">
						<td>常见问题</td>
						<td>72小时发货</td>
						<td>管理后台</td>
					</tr>
					
				</table>
			</div>
			<div style="clear:both"></div>
			
			<div id="button_right">
				<table class="two">
					<tr>
						<td>蘑菇街移动客户端</td>
					</tr>
					<tr>
						<td><img src="/Public/Home/images/26.png"></td>
					</tr>
				</table>
				<div class="banquan">
					<p>&copy;Copyright 2010-2016蘑菇街 Mogujie.com (增值电信业务经营许可证：浙B2-20110349)</p>
				</div>
			</div>

</body>
</html>