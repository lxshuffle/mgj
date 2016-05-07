<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/Public/Home/css/public.css">
	<link rel="stylesheet" href="/Public/Home/css/index.css">
	<link rel="icon" href="/Public/Home/images/logo.ico">
	<title>蘑菇街-我的买手街!</title>
	<script type="text/javascript"src="/Public/Home/js/jquery-1.8.3.min.js"></script>
</head>
<body>
	<!-- 导航条 -->
	<div id="header">
		<div class="dh">
			<li><a href="<?php echo U('Home/User/zhuce');?>">注册</a></li>
			<li><a href="<?php echo U('Home/User/login');?>">登录</a><span>|</span></li>
			<li><a href=""><img src="/Public/Home/images/tb1.png" class="tb1"> 我的订单</a><span>|</span></li>
			<li><a href="v" name="rdh_md"><img src="/Public/Home/images/tb2.png" class="tb2"> 购物车</a><span>|</span></li>
			<li><a href="">客户服务 </a><span>|</span></li>
			<li><a href=""><img src="/Public/Home/images/tb3.png" class="tb3"> 我的小店</a></li>
		</div>
	</div>

	<!-- 右侧导航条 -->
	<div id="right_dh">
		<div class="right_dh">
		<!-- 购物车 -->
			<div class="rdh_gwc">
				<a href=""><div class="rdh_gwc_logo">
					<img src="/Public/Home/images/right_dh.png" alt="">
				</div>
				<div class="rdh_gwc_w">购物车</div></a>
			</div>
			<!-- 优惠券 -->
			<div class="rdh_yhq">
				<a href="">
					<div class="rdh_yhq_logo">
						<img src="/Public/Home/images/right_dh.png" alt="">
					</div>
					<div class="rdh_yhq_w">优惠券</div>
				</a>
			</div>
			<!-- 钱包 -->
			<div class="rdh_qb">
				<a href="">
					<div class="rdh_qb_logo">
						<img src="/Public/Home/images/right_dh.png" alt="">
					</div>
					<div class="rdh_qb_w">钱包</div>
				</a>
			</div>
			<!-- 足迹 -->
			<div class="rdh_zj">
				<a href="">
					<div class="rdh_zj_logo">
						<img src="/Public/Home/images/right_dh.png" alt="">
					</div>
					<div class="rdh_zj_w">足迹</div>
				</a>
			</div>

		</div>
		<!-- 锚点 -->
		<div class="rdh_md">
			<a href="#rdh_md"><img src="/Public/Home/images/right_dh.png" alt=""></a>

		</div>
	</div>
	
	<div class="c"></div>
	<!-- 顶部 -->
	<div id="top">
		<div class="top">
			<div class="top_logo">
				<img src="/Public/Home/images/top_logo.png" alt="">
				
				<div class="fl_all">全部商品</div>
				
			</div>
			
			<!-- 搜索框 -->
			<div class="top_center">
				<div class="sousuo_left">
					<span>搜商品</span>
				</div>
				<form action="" >
					<input type="search" class="sousuo_center">
					<button class="sousuo_right"><img src="/Public/Home/images/ss.png" alt=""></button>
				</form>
			</div>
			<!-- 二维码 -->
			<div class="top_right" style="background-image: url('/Public/Home/images/ewm.gif');">
				<img src="/Public/Home/images/ewm.png" alt="">
			</div>
		</div>
		
	</div>
	
	<!-- 中间 -->
	<div class="c"></div>
	
	<div class="c"></div>
	<div class="center">
		<div class="c1">
		<!-- 商品分类 -->
			<div class="c1_fl">
				<dl>
					<dt><a href="<?php echo U('Home/List/lb');?>">裙子</a></dt>
					<dd>
						<a href="">初夏新品</a><span>|</span>
						<a href="">连衣裙</a><span>|</span>
						<a href="">蕾丝裙</a>
					</dd>
				</dl>
				<dl>
					<dt><a href="">裙子</a></dt>
					<dd>
						<a href="">初夏新品</a><span>|</span>
						<a href="">连衣裙</a><span>|</span>
						<a href="">蕾丝裙</a>
					</dd>
				</dl>
				<dl>
					<dt><a href="">裙子</a></dt>
					<dd>
						<a href="">初夏新品</a><span>|</span>
						<a href="">连衣裙</a><span>|</span>
						<a href="">蕾丝裙</a>
					</dd>
				</dl>
				<dl>
					<dt><a href="">裙子</a></dt>
					<dd>
						<a href="">初夏新品</a><span>|</span>
						<a href="">连衣裙</a><span>|</span>
						<a href="">蕾丝裙</a>
					</dd>
				</dl>
				<dl>
					<dt><a href="">裙子</a></dt>
					<dd>
						<a href="">初夏新品</a><span>|</span>
						<a href="">连衣裙</a><span>|</span>
						<a href="">蕾丝裙</a>
					</dd>
				</dl>
				<dl>
					<dt><a href="">裙子</a></dt>
					<dd>
						<a href="">初夏新品</a><span>|</span>
						<a href="">连衣裙</a><span>|</span>
						<a href="">蕾丝裙</a>
					</dd>
				</dl>
				<dl>
					<dt><a href="">裙子</a></dt>
					<dd>
						<a href="">初夏新品</a><span>|</span>
						<a href="">连衣裙</a><span>|</span>
						<a href="">蕾丝裙</a>
					</dd>
				</dl>
			</div>
			<!-- 轮播图 -->
			<div class="c1_lb">
				<a href=""><img src="/Public/Home/images/c1_lb.jpg" alt=""></a>
			</div>
			<!-- 右侧图片 -->
			<div class="c1_img">
				<div class="c1_img1">
					<a href=""><img src="/Public/Home/images/c1_img1.jpg" alt=""></a>
				</div>
				<a href=""><img src="/Public/Home/images/c1_img2.jpg" alt=""></a>
			</div>
		</div>
		<!-- 精品 -->
		<div class="c2">
			<div class="c2_head">
				<div class="c2_head_left">
					<img src="/Public/Home/images/c2_head.png" alt="">
				</div>
				<div class="c2_head_center">
					精品馆
				</div>
				<div class="c2_head_right">
					<img src="/Public/Home/images/c2_head.png" alt="">
				</div>
			</div>
			<div class="c2_goods">
				<div class="c2_goods_left">
					<div class="c2_goods_lt">
						<a href=""><img src="/Public/Home/images/c2_lt.jpg" alt=""></a>
					</div>
					<div class="c2_goods_lb">
						<div class="c2_goods_img1">
							<a href=""><img src="/Public/Home/images/c2_lb1.png" alt=""></a>
						</div>
						<div class="c2_goods_img2">
							<a href=""><img src="/Public/Home/images/c2_lb2.jpg" alt=""></a>
						</div>
						<div class="c2_goods_img1">
							<a href=""><img src="/Public/Home/images/c2_lb3.jpg" alt=""></a>
						</div>
						<div class="c2_goods_img2">
							<a href=""><img src="/Public/Home/images/c2_lb4.jpg" alt=""></a>
						</div>
						<div class="c2_goods_img1">
							<a href=""><img src="/Public/Home/images/c2_lb5.jpg" alt=""></a>
						</div>
						<div class="c2_goods_img2">
							<a href=""><img src="/Public/Home/images/c2_lb6.jpg" alt=""></a>
						</div>
						<div class="c2_goods_img1">
							<a href=""><img src="/Public/Home/images/c2_lb7.jpg" alt=""></a>
						</div>
						<div class="c2_goods_img2">
							<a href=""><img src="/Public/Home/images/c2_lb8.jpg" alt=""></a>
						</div>
					</div>
				</div>
				<div class="c2_bimg">
					<img src="/Public/Home/images/c2_bimg.jpg" alt="">
				</div>
				<div class="c2_goods_r">
					<div class="c2_goods_r1">
						<a href=""><img src="/Public/Home/images/c2_r1.jpg" alt="">
						<p>韩版T恤</p>
						</a>
					</div>
					<div class="c2_goods_r1">
						<a href=""><img src="/Public/Home/images/c2_r1.jpg" alt="">
						<p>韩版T恤</p>
						</a>
					</div>
					<div class="c2_goods_r1">
						<a href=""><img src="/Public/Home/images/c2_r1.jpg" alt="">
						<p>韩版T恤</p>
						</a>
					</div>
					<div class="c2_goods_r1">
						<a href=""><img src="/Public/Home/images/c2_r1.jpg" alt="">
						<p>韩版T恤</p>
						</a>
					</div>
					<div class="c2_goods_r1">
						<a href=""><img src="/Public/Home/images/c2_r1.jpg" alt="">
						<p>韩版T恤</p>
						</a>
					</div>
					<div class="c2_goods_r1">
						<a href=""><img src="/Public/Home/images/c2_r1.jpg" alt="">
						<p>韩版T恤</p>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- 新品 -->
		<div class="c2">
			<div class="c2_head">
				<div class="c2_head_left">
					<img src="/Public/Home/images/c2_head.png" alt="">
				</div>
				<div class="c2_head_center">
					新品馆
				</div>
				<div class="c2_head_right">
					<img src="/Public/Home/images/c2_head.png" alt="">
				</div>
			</div>
			<div class="c2_goods">
				<div class="c2_goods_left">
					<div class="c2_goods_lt">
						<a href=""><img src="/Public/Home/images/c2_lt.jpg" alt=""></a>
					</div>
					<div class="c2_goods_lb">
						<div class="c2_goods_img1">
							<a href=""><img src="/Public/Home/images/c2_lb1.png" alt=""></a>
						</div>
						<div class="c2_goods_img2">
							<a href=""><img src="/Public/Home/images/c2_lb2.jpg" alt=""></a>
						</div>
						<div class="c2_goods_img1">
							<a href=""><img src="/Public/Home/images/c2_lb3.jpg" alt=""></a>
						</div>
						<div class="c2_goods_img2">
							<a href=""><img src="/Public/Home/images/c2_lb4.jpg" alt=""></a>
						</div>
						<div class="c2_goods_img1">
							<a href=""><img src="/Public/Home/images/c2_lb5.jpg" alt=""></a>
						</div>
						<div class="c2_goods_img2">
							<a href=""><img src="/Public/Home/images/c2_lb6.jpg" alt=""></a>
						</div>
						<div class="c2_goods_img1">
							<a href=""><img src="/Public/Home/images/c2_lb7.jpg" alt=""></a>
						</div>
						<div class="c2_goods_img2">
							<a href=""><img src="/Public/Home/images/c2_lb8.jpg" alt=""></a>
						</div>
					</div>
				</div>
				<div class="c2_bimg">
					<img src="/Public/Home/images/c2_bimg.jpg" alt="">
				</div>
				<div class="c2_goods_r">
					<div class="c2_goods_r1">
						<a href=""><img src="/Public/Home/images/c2_r1.jpg" alt="">
						<p>韩版T恤</p>
						</a>
					</div>
					<div class="c2_goods_r1">
						<a href=""><img src="/Public/Home/images/c2_r1.jpg" alt="">
						<p>韩版T恤</p>
						</a>
					</div>
					<div class="c2_goods_r1">
						<a href=""><img src="/Public/Home/images/c2_r1.jpg" alt="">
						<p>韩版T恤</p>
						</a>
					</div>
					<div class="c2_goods_r1">
						<a href=""><img src="/Public/Home/images/c2_r1.jpg" alt="">
						<p>韩版T恤</p>
						</a>
					</div>
					<div class="c2_goods_r1">
						<a href=""><img src="/Public/Home/images/c2_r1.jpg" alt="">
						<p>韩版T恤</p>
						</a>
					</div>
					<div class="c2_goods_r1">
						<a href=""><img src="/Public/Home/images/c2_r1.jpg" alt="">
						<p>韩版T恤</p>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- 热销 -->
		<div class="c2">
			<div class="c2_head">
				<div class="c2_head_left">
					<img src="/Public/Home/images/c2_head.png" alt="">
				</div>
				<div class="c2_head_center">
					热销馆
				</div>
				<div class="c2_head_right">
					<img src="/Public/Home/images/c2_head.png" alt="">
				</div>
			</div>
			<div class="c2_goods">
				<div class="c2_goods_left">
					<div class="c2_goods_lt">
						<a href=""><img src="/Public/Home/images/c2_lt.jpg" alt=""></a>
					</div>
					<div class="c2_goods_lb">
						<div class="c2_goods_img1">
							<a href=""><img src="/Public/Home/images/c2_lb1.png" alt=""></a>
						</div>
						<div class="c2_goods_img2">
							<a href=""><img src="/Public/Home/images/c2_lb2.jpg" alt=""></a>
						</div>
						<div class="c2_goods_img1">
							<a href=""><img src="/Public/Home/images/c2_lb3.jpg" alt=""></a>
						</div>
						<div class="c2_goods_img2">
							<a href=""><img src="/Public/Home/images/c2_lb4.jpg" alt=""></a>
						</div>
						<div class="c2_goods_img1">
							<a href=""><img src="/Public/Home/images/c2_lb5.jpg" alt=""></a>
						</div>
						<div class="c2_goods_img2">
							<a href=""><img src="/Public/Home/images/c2_lb6.jpg" alt=""></a>
						</div>
						<div class="c2_goods_img1">
							<a href=""><img src="/Public/Home/images/c2_lb7.jpg" alt=""></a>
						</div>
						<div class="c2_goods_img2">
							<a href=""><img src="/Public/Home/images/c2_lb8.jpg" alt=""></a>
						</div>
					</div>
				</div>
				<div class="c2_bimg">
					<img src="/Public/Home/images/c2_bimg.jpg" alt="">
				</div>
				<div class="c2_goods_r">
					<div class="c2_goods_r1">
						<a href=""><img src="/Public/Home/images/c2_r1.jpg" alt="">
						<p>韩版T恤</p>
						</a>
					</div>
					<div class="c2_goods_r1">
						<a href=""><img src="/Public/Home/images/c2_r1.jpg" alt="">
						<p>韩版T恤</p>
						</a>
					</div>
					<div class="c2_goods_r1">
						<a href=""><img src="/Public/Home/images/c2_r1.jpg" alt="">
						<p>韩版T恤</p>
						</a>
					</div>
					<div class="c2_goods_r1">
						<a href=""><img src="/Public/Home/images/c2_r1.jpg" alt="">
						<p>韩版T恤</p>
						</a>
					</div>
					<div class="c2_goods_r1">
						<a href=""><img src="/Public/Home/images/c2_r1.jpg" alt="">
						<p>韩版T恤</p>
						</a>
					</div>
					<div class="c2_goods_r1">
						<a href=""><img src="/Public/Home/images/c2_r1.jpg" alt="">
						<p>韩版T恤</p>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- 友情链接 -->
		<div class="c"></div>
		<div class="friendlink" style="border:1px solid black;">
			友情链接:
			<?php if(is_array($res)): foreach($res as $key=>$vo): ?><tr class="gradeA odd" role="row">
                            <td class="sorting_1"><img src="/Public/<?php echo ($vo["logo"]); ?>" width="50px"></td>   
                        </tr><?php endforeach; endif; ?>
		</div>
		<!-- 搜索 -->
		<div class="ss">
			<div class="ss_logo">
				<img src="/Public/Home/images/ss_logo.png" alt="">
			</div>
			<div class="ss_left">
                <span class="selected">搜商品</span>
            </div>
            <form action="">
            	<input type="search" class="search">
            	<button><img src="/Public/Home/images/ss.png" alt=""></button>
            </form>
		</div>
		<script type="text/javascript"src="/Public/Home/js/ss.js"></script>
	</div>


	<div class="c"></div>
	<!-- 底部 -->
	<div id="footer" style="background-image: url('/Public/Home/images/footer_bg.png');">
		<div class="footer">
			<div class="footer_left">
				<div class="footer_logo">
					<img src="/Public/Home/images/footer_logo.png" alt="">
				</div>
				<div class="footer_bq">
					<ul>
						<li>营业执照注册号：330106000129004</li>
						<li>增值电信业务经营许可证：浙B2-20110349</li>
						<li>ICP备案号：浙ICP备10044327号-3</li>
						<li>©2016 Mogujie.com 杭州卷瓜网络有限公司</li>
					</ul>
				</div>
			</div>
			<div class="footer_center">
				<dl>
					<dt>公司</dt>
					<dd><a href="">关于我们</a></dd>
					<dd><a href="">招聘信息</a></dd>
					<dd><a href="">联系我们</a></dd>
				</dl>
				<dl>
					<dt>消费者</dt>
					<dd><a href="">消费者服务</a></dd>
					<dd><a href="">意见反馈</a></dd>
					<dd><a href="">手机版下载</a></dd>
				</dl>
				<dl>
					<dt>商家</dt>
					<dd><a href="">商家入驻</a></dd>
					<dd><a href="">商家后台</a></dd>
					<dd><a href="">商家社区</a></dd>
				</dl>
				
			</div>
			<div class="footer_right">
				<p>权威认证</p>
				<div class="img">
					<div class="img1">
						<img src="/Public/Home/images/split.png" alt="">
					</div>
					<div class="img2">
						<img src="/Public/Home/images/split.png" alt="">
					</div>
					<div class="img3">
						<img src="/Public/Home/images/split.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>