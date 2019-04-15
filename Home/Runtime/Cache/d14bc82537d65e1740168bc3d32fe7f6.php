<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="all" />
<meta name="keywords" content="拍卖,拍卖网,拍卖装备,拍卖游戏装备,拍卖游戏道具,拍卖平台,装备交易,游戏装备,游戏道具,在线拍卖,拍卖商城,好拍,好拍网,游戏频道,好拍365,haopai,haopai365,haopaiwang" />
<meta name="description" content="好拍网_游戏频道是最大最权威的网络游戏交易拍卖平台,魔兽世界|地下城与勇士|征途2|热血江湖|热血传奇|天龙八部3|问道|诛仙|大话西游3|巫师之怒|艾尔之光|冒险岛等网络游戏的最大交易拍卖平台,是中国电子商务诚信单位。" />
<meta name="alexaVerifyID" content="AkvIvOK1gZmSUYt-3eJElNM4Jxg" />
<meta name="y_key" value="82469ac5f64981a7" />
<base target="_self" />
<title>好拍网_游戏频道_中国最大最权威的网络游戏交易拍卖平台</title>
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link type="text/css" rel="stylesheet" media="screen" href="__PUBLIC__/Home/Css/common.css" tppabs="http://game.haopai365.com/__PUBLIC__/Home/Css/common.css" />
<link type="text/css" rel="stylesheet" media="screen" href="__PUBLIC__/Home/Css/homepage.css" tppabs="http://game.haopai365.com/__PUBLIC__/Home/Css/homepage.css"  />
<link type="text/css" rel="stylesheet" media="screen" href="__PUBLIC__/Home/Css/register.css" tppabs="http://game.haopai365.com/static/style/register.css"  />
<link type="text/css" rel="stylesheet" media="screen" href="__PUBLIC__/Home/Css/auction.css" tppabs="http://game.haopai365.com/static/style/auction.css"  />
<link type="text/css" rel="stylesheet" media="screen" href="__PUBLIC__/Home/Css/member.css" tppabs="http://game.haopai365.com/static/style/auction.css"  />
<link type="text/css" rel="stylesheet" media="screen" href="__PUBLIC__/Home/Css/jquery-ui-1.8.14.custom.css"  />
<link type="text/css" rel="stylesheet" media="screen" href="__PUBLIC__/Home/Css/search.css"  />

<!--跟ajax和首页动态有关 开启会导致内存上升-->
<script type="text/javascript" src="__PUBLIC__/Home/Js/jquery-1.5.min.js" tppabs="http://game.haopai365.com/__PUBLIC__/Home/Js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Home/Js/jquery.tools.min.js" tppabs="http://game.haopai365.com/__PUBLIC__/Home/Js/jquery.tools.min.js"></script>
<!-- <script type="text/javascript" src="__PUBLIC__/Home/Js/common.js" tppabs="http://game.haopai365.com/__PUBLIC__/Home/Js/common.js" ></script> -->
<script type="text/javascript" src="__PUBLIC__/Home/Js/auctioncommon.js" tppabs="http://game.haopai365.com/__PUBLIC__/Home/Js/auctioncommon.js" ></script>
<script type="text/javascript" src="__PUBLIC__/Home/Js/bxslider/jquery.bxSlider.min.js" tppabs="http://game.haopai365.com/__PUBLIC__/Home/Js/bxslider/jquery.bxSlider.min.js" ></script>
<!--<script type="text/javascript" src="__PUBLIC__/Home/Js/auctioning.js" tppabs="http://game.haopai365.com/static/script/auctioning.js"></script>

<script type="text/javascript" src="__PUBLIC__/Home/Js/indexhelper.js" tppabs="http://game.haopai365.com/__PUBLIC__/Home/Js/indexhelper.js"></script>
<script type="text/javascript" src="__PUBLIC__/Home/Js/jquery.formValidator.js" tppabs="http://game.haopai365.com/static/script/jquery.formValidator.js"></script>



<script type="text/javascript" src="__PUBLIC__/Home/Js/auction_detail.js" tppabs="http://game.haopai365.com/static/script/auction_detail.js" ></script>-->
<script type="text/javascript" src="__PUBLIC__/Home/Js/ucauction.js" tppabs="http://game.haopai365.com/static/script/auction_detail.js" ></script>
<script type="text/javascript" src="__PUBLIC__/Home/Js/jquery-ui-1.8.14.custom.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Home/Js/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="__PUBLIC__/Home/Js/jquery-ui-timepicker-zh.js"></script>
<script>
		

			//function get_content_timeOut(){
				//alert(4);
				//$.post(u,function(data){
					//接受ajax返回的数据

					//先将数据进行一次清空

					//将新数据append到显示位置

					//再次调用函数get_content(url)发送ajax请求

					
				//})
				
			
			//当第一次进入首页的时候显示最新拍卖，ajax函数要自动调用一次，显示最新拍卖的
			
			
		//}
</script>
</head>

<body>

<!-- #haopai page -->
<div id="haopai" class="subpage skin">


	<!-- #header -->
<div id="header" class="clearfix blueLink">
	
	<div id="logo" class="clearfix">
		<h1><a id="haopaiLogo" href="__APP__" tppabs="http://game.haopai365.com/"  title="好拍网——中国最公平公正的网上拍卖平台" onfocus="this.blur();">好拍网——中国最公平公正的网上拍卖平台</a></h1>

	</div>

		<?php if(($_SESSION['username']==null) or (!isset($_SESSION['username']))): ?><div id="userInfo">
				<ul id="loginNav" class="clearfix">
					<li>
						<a id="loginBtn" class="strong" href="__APP__/Login/login" tppabs="http://game.haopai365.com/app/login" title="登录">登录</a>
					</li>
					<li class="separator">
						|
					</li>
					<li>
						<h2>
							<a id="signup" href="__APP__/Register/register" tppabs="http://game.haopai365.com/app/register" title="免费注册" style="color: rgb(255, 102, 0);">注册</a>
						</h2>
					</li>
				</ul>
			</div>
			<script type="text/javascript" language="javascript">window._islogined = 0;</script>
			<?php else: ?>
					
				<div id="userInfo">
					<ul class="clearfix">
						<li>
							您好，<span id="header_username"><?php echo (session('username')); ?></span>，<a title="到个人中心" href="__APP__/HomePage">个人中心</a>
						</li>
						<li>
							<a title="安全退出" href="__APP__/Login/doLogout">退出</a>
						</li>
					</ul>
				</div>
				
				<script type="text/javascript" language="javascript">window._islogined = 1;</script><?php endif; ?>

	
	<div class="accountMenu" id="accountMenu" onMouseOut="accountMenuOff();"></div>
	
	<div id="mainNav">
		<form action="__APP__/Index/search" name="searchForm" method="get">
			<ul class="clearfix">
				<li>
					<a class="mainNavMenu mainNav_1" href="__APP__" tppabs="调用" title="好拍网首页" onfocus="this.blur() ;" onclick="get_content(“new');">首 页</a>
				</li>

				<li>
					<a class="mainNavMenu mainNav_2" href="__APP__/Index/auctioning" tppabs="http://game.haopai365.com/app/auctioning"  title="正在拍卖" onfocus="this.blur();">正在拍卖</a>
				</li>
		
				<li>
					<a class="mainNavMenu mainNav_3" href="__APP__/Index/future" tppabs="http://game.haopai365.com/app/future"  title="即将推出" onfocus="this.blur();">即将推出</a>
				</li>
		
				<li>
					<a class="mainNavMenu mainNav_4" href="__APP__/Index/history" tppabs="http://game.haopai365.com/app/history"  title="历史拍卖" onfocus="this.blur();">历史拍卖</a>
				</li>
				
				<li class="mainNav_5" >
					<input type="hidden" value="search"  id="oper"/>
					<input type="text" value="" class="search_keyword" name="search" id="search_keyword" style="display:none;"/>
					<!--直接搜索框js代码在common.js-->
					<input type="text" value="输入名称，直接搜索" class="search_keyword" style="color:#D1D1D1;padding-left:5px;"  id="search_keywordHidden"/>
	<script>
				//点击search_keywordHidden框后
				$('#search_keywordHidden').bind('focus', function(){
					//显示search_keyword的Input框 并且用focus选中
					$('#search_keyword').show().focus();
					//同时原本的search_keywordHidden隐藏
					$('#search_keywordHidden').hide();
				});
				
				$('#search_keyword').bind('blur', function(){
					var e = $(this);
					if (e.val() == '') {
						//如果没值切换到有提示“输入名称，直接搜索”的Input框
						$('#search_keywordHidden').show();
						$('#search_keyword').hide();
					}
				});		
	</script>
	</li>
				<li>
					<input type="submit" id="new-searcc" value=""  class="serBtn">
				</li>
			</ul>
		</form>
	</div>

</div>
	<!-- #header end -->
	
	


<script type="text/javascript">

var nTimeOut = 0;		//超时时间
var bTimeOutState = 0;	//超时状态 
/* 启动服务端反推监听 */
function startServerListener(){
	$.ajax({
	      url: "/app?type=ajax&action=getperiodforuserhome&callback=?",
	      type: "POST",
	      dataType: "json",
	      success: function(param){
	    	 nTimeOut = 0;
	         bTimeOutState=0;
	         var periods = param.period;
	         var user = param.user;
	    	 
	    	 if(periods.length>0) {
	    		 for (var c in periods){
	    			 refreshAuction(periods[c]);
	    		 }
	    	 }
	    	 else {
	    		 refreshAuction(periods);
	    	 }
	    	 
	    	 if(user!=null)
	    	 {
	    		 refreshUser(user);
	    	 } else {
    			window._islogined = 0;
    			  loadLoginInfo({"isLogin":0});
	    	 }
	    	 
	    	 startServerListener();
	      },
	      error: function(jqXHR, textStatus, errorThrown){
	    	  startServerListener();
	      }
	   }
	);
}

$(document).ready(function(){
	
	$.ajaxSetup({cache:false});
	
	window._periods = new Array();//拍卖商品对象
	
	
	  
	
});

function initStyle()
{
	//tabview
	var $tabs = $(".tab a");

	$tabs.bind("click", function(){
		var tabId = $(this).attr("href");
		var tabIdStr = tabId.split("#");
		var currentTabId = '#'+tabIdStr[1];
		$(currentTabId).show().siblings(".content").hide();
		$(this).parent("li").addClass("on").siblings().removeClass("on");
		$(this).parent("h2").parent("li").addClass("on").siblings().removeClass("on");
		return false;
	})
	.focus(function(){
		$(this).blur();
	});

	//input[type='text'] input[type='password'] textarea button
	$(".input").hover(
	function(){
		$(this).addClass("input-hover");
	},
	function(){
		$(this).removeClass("input-hover");
	});

	$(".button button").bind("click",function(){
		$(this).blur();
	});

	$(".input:disabled").addClass("input-disabled");

	$(".button").hover(
	function(){
		$(this).addClass("button-hover");
	},
	function(){
		$(this).removeClass("button-hover");
	});

	$(".button-hilite").hover(
	function(){
		$(this).addClass("button-hilite-hover");
	},
	function(){
		$(this).removeClass("button-hilite-hover");
	});
}

</script>


	
	<!-- #memberWrap -->
	<div id="memberWrap" class="mainbody clearfix">
	
		<!-- left menu -->
		





	<div id="menubar" class="sidebarWrap">
			<!-- #menubar -->
			<div id="user_avatar">
				<div><a href="__URL__/editavatar" title="修改头像">
					<?php if(($_SESSION['pic']=='')): ?><img src="__PUBLIC__/Uploads/Pic/big_noavatar.gif" />							    
					<?php else: ?>	<img style="width:200px;height:170px;"src="__PUBLIC__/Uploads/Pic/b_<?php echo (session('pic')); ?>"  /><?php endif; ?>	
				</a></div>
			</div>
			
			<div class="borderbox" id="borderbox"> <!--样式在member.css-->
				<span style="font-weight:normal;">昵称：<?php echo (session('nickname')); ?>
				<!--<a href="__URL__/bind" style="font-weight:normal;">(未认证)</a>
				<div title="买家等级1">
				<span style="font-weight:normal;">等级：</span>
					<img src="__PUBLIC__/Home/Images/common/star_level1.png"  style="margin:0;"/>		
				</div>	
				<hr class="da m0">
				<ul class="ptn xl xl2 cl">

					<li style="width:80px;height:16px;line-height:16px;"><img src="__PUBLIC__/Home/Images/common/uc_seller.gif" id="roleZone"><a href="__URL__?mode=1" >我是卖家</a></li>
					
				</ul>-->
			</div>
			
			<dl class="subMenu">
				<dt>我是买家</dt>
				<dd><a href="__URL__/orderlist">查看订单</a></dd>
				<!--<dd><a href="__URL__/comment">我的评价</a></dd>-->
				<dd><a href="__URL__/auctioning">正在竞拍</a></dd>
				<dd><a href="__URL__/auctionhistory">竞拍历史</a></dd>
			</dl>
			
			<dl class="subMenu">
				<dt>我是卖家</dt>
				<dd><a href="__URL__/addauction">添加商品</a></dd>
				<dd><a href="__URL__/auctionlist">历史商品</a></dd>
				<dd><a href="__URL__/sellerauctioning">正在竞拍</a></dd>
				<dd><a href="__URL__/sellerfuture">即将竞拍</a></dd>
				<dd><a href="__URL__/ordermanage">订单管理</a></dd>
			</dl>
			
			<dl class="subMenu">
				<dt>账户信息</dt>
				<dd><a href="__URL__/pointcard">账户充值</a></dd>
				<dd><a href="__URL__/editinfo">个人资料</a></dd>
				<dd><a href="__URL__/editavatar">修改头像</a></dd>
				<dd><a href="__URL__/editpword">修改密码</a></dd>
				<dd><a href="__URL__/answer">密保问题</a></dd>
			</dl>
			<!-- #menubar end -->
		</div>
	
<script type="text/javascript" language="javascript">
function setDefaultMenu(val) {
	$.getJSON("/app",{"mode": val, type:'ajax',action:'sethomepage'} ,function(result) {
		if (result == 1) {
			$('#btnSetMenu').hide();
			jgrowl("设置成功");
			return true;
		} 
	});
}
</script>


		<!-- end left menu -->
		
		<div id="contentWrap" class="mbWrap">
		
			<!-- ad 760x90 -->
			<div id="mbAdShow" class="cb" style="margin-bottom:10px;">
				<a href=""><img src="__PUBLIC__/Home/Images/a-d/1296011424.jpg" alt="注册好拍网免费领取拍点，快来参与秒杀、拍卖吧！好拍网，真好拍！" width="746px" height="120px" border="0"/></a>			
			</div>
			<!-- ad end -->
			
			<!-- #mbAjaxShow ajax page -->
			<div id="mbforward">

	<!-- Start current auction list -->
	

	<!-- Start current auction list -->
	<div class="container">
				<div class="tabview"><h2 class="title fl">正在拍卖</h2></div>
				
<!-- 				<div class="clearfix" id="filterTool">
					<form name="searchForm" action="/app/homepage/joinperiod" method="post">
						<div style="margin:5px 10px;height:20px;width:auto;float:left;line-height:25px;">
							拍卖时间 ：<input type="text" name="startTime" id="startTime" class="input" value="" />
							- <input type="text" name="endTime" id="endTime" class="input" value="" />
						</div>
						
						<div style="margin:5px 0px;width:50px;height:20px;float:left;line-height:25px;">
							<input type="submit" class="sendReq fl" value="查询" />
						</div>
						
					</form>
				</div> -->
				
				<div class="content">
					
					<table class="chart notice">
					  <tr>
					    <th scope="col" width="90">商品图片</th>
					    <th scope="col" width="10%">商品名称</th>
					    <th scope="col" width="10%">被拍次数</th>
					    <th scope="col" width="10%">我的出价</th>
					    <th scope="col" width="22%">开拍时间 </th>
					    <th scope="col" width="22%">结束时间 </th>
					  </tr>
					  
					   <tr><td colspan="8">&nbsp;</td></tr>
					 
					  <!-- start iterator -->
				<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
					    <td align="center" height="67px" >
					    	<a href="">
								<img style="width:50px;height:40px;" src="__PUBLIC__/Uploads/pics/b_<?php echo ($vo["pic"]); ?>" alt="900金 魔兽世界三区灰谷" />
							</a>
					    </td>
					    
					    <td align="center">
							<?php echo ($vo["eqname"]); ?>
					    </td>
					    
					    <td align="center" class="price">
							<span id="price_58373" title="市场价"><?php echo ($vo["autimes"]); ?></span>
					    </td>
					    
					    <td align="center">
							<span style="color:#C31A1F;" id="end_count_58373"><?php echo ($vo["price"]); ?></span>
					    </td>
					    				    
					    
					    <td align="center">
							<?php echo (date("Y-m-d H:i:s",$vo["starttime"])); ?>
					    </td>
					    
					    
					    <td align="center">
							<?php echo (date("Y-m-d H:i:s",$vo["endtime"])); ?>
					    </td>
					    

					 </tr><?php endforeach; endif; ?>			
					  <!-- end iterator -->
				</table>
				
				<!-- .pages --这里准备分页-->			
					<?php echo ($page); ?>
				<!-- .pages end -->
				
				</div>
			</div>
	<!-- End current auction list -->


<script type="text/javascript" language="javascript">
$(document).ready(function(){
	$('#startTime').datetimepicker();
	$('#endTime').datetimepicker();
	$('#startTime,#endTime').bind("focus",function(){$('#ui-datepicker-div').css({"z-index":500000}); });
});
</script>

			</div>
			<!-- #mbAjaxShow end -->

		</div>
	</div>
	<!-- #memberWrap end -->
	
		<script type="text/javascript">
		$(document).ready(function() {
			if ('null' != 'null') {
				jgrowl('null');
			}
			$('#birthday').datetimepicker({showTime:false,showHour:false,showMinute:false});
			configForm();
			  
		});
		$(document).ready(function() {
				  if ('null' != 'null') {
					jgrowl('null');
				  }
				  $('#birthday').datepick({showOnFocus: true,yearRange: 'c-90:c-2',dateFormat: 'yyyy-mm-dd'});
				  
			});
			function updateavatar() {
				window.location.reload();
			}
	</script>

	
	
	<!-- #footer -->
<div id="footer" class="whiteLink page960">

	<div id="service">
		<p>
			<span>客服邮箱：<strong class="space">service@haopai365.com</strong></span>
			<span>客服电话：<strong class="space">0592-5920350</strong></span>
                        <span>联系地址：<strong class="space">厦门市西林东路8号</strong></span>
		</p>

		<p>
			工作时间为周一至周五，上午10:00-12:00，下午14:00-18:00，邮件48小时内回复
		</p>
	</div>
	
	<div id="footerMenu" class="clearfix">
	
			<a href="app/help/content/law/law.html" tppabs="http://game.haopai365.com/app/help/content/law/law.html" title="法律声明">法律声明</a>
			<span class="separator">|</span>
			<a href="app/help/content/law/buyer_rule.html" tppabs="http://game.haopai365.com/app/help/content/law/buyer_rule.html"  title="用户服务协议">用户服务协议</a>
			<span class="separator">|</span>
			<a href="app/help.htm" tppabs="http://game.haopai365.com/app/help" title="帮助中心">帮助中心</a>
			<span class="separator">|</span>
			<a href="app/help/content/about/company.html" tppabs="http://game.haopai365.com/app/help/content/about/company.html" title="关于好拍">关于好拍</a>
			<span class="separator">|</span>
			<a href="app/help/content/about/contact.html" tppabs="http://game.haopai365.com/app/help/content/about/contact.html" title="联系我们">联系我们</a>
			<span class="separator">|</span>
			<script src="../s17.cnzz.com/stat.php-id=3681283&web_id=3681283" tppabs="http://s17.cnzz.com/stat.php?id=3681283&web_id=3681283" language="JavaScript"></script>
	</div>
	
	<div id="icp" class="footerline footerCicp">
		<a href="javascript:if(confirm('http://www.miibeian.gov.cn/  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://www.miibeian.gov.cn/'" tppabs="http://www.miibeian.gov.cn/"  title="闽ICP备12010882号-1" target="_blank">闽ICP备12010882号-1</a>
	</div>
	
	<div id="copyright" class="footerline footerCcopy">
		Copyright &copy; 2011 <a href="http://www.wazyb.com"  target="_blank" title="资源邦">www.wazyb.com</a>.
		 All Rights Reserved.
	</div>
	
	<div id="footicon" class="footerline">
		<ul id="footicon" class="clearfix">
			<li><a class="icpIcon icpA" href="javascript:if(confirm('http://www.miibeian.gov.cn/  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://www.miibeian.gov.cn/'" tppabs="http://www.miibeian.gov.cn/" title="经营性网站备案信息" target="_blank"></a></li>
			<li><a class="icpIcon icpB" href="javascript:if(confirm('http://www.ga.xm.gov.cn/wsbs/cjsdh/wlaqjca/  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://www.ga.xm.gov.cn/wsbs/cjsdh/wlaqjca/'" tppabs="http://www.ga.xm.gov.cn/wsbs/cjsdh/wlaqjca/"  title="厦门市公安公众服务网" target="_blank"></a></li>
			<li><a class="icpIcon icpC" href="javascript:if(confirm('http://www.ga.xm.gov.cn/wsbs/cjsdh/wlaqjca/  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://www.ga.xm.gov.cn/wsbs/cjsdh/wlaqjca/'" tppabs="http://www.ga.xm.gov.cn/wsbs/cjsdh/wlaqjca/" title="公共信息安全网络监察" target="_blank"></a></li>
			<li><a class="icpIcon icpF" href="javascript:if(confirm('http://www.yeepay.com/  \n\nكτݾϞרԃ Teleport Ultra Ђ՘, ӲΪ ̼ˇһٶԲܲ·޶΢ҿѻʨ׃Ϊ̼քǴʼַ֘քַ֘c  \n\nţЫ՚ؾϱǷʏղߪ̼?'))window.location='http://www.yeepay.com/'" tppabs="http://www.yeepay.com/" title="易宝特约商家" target="_blank"></a></li>
		</ul>
	</div>
	
	
	<div class="apple_overlay pngImg" id="loginBox"><a class="close" id="closeTrigger"></a>
	  <div id="boxContent"></div>
	  <span id="loginTrigger"></span>
	</div>
	

</div>
<script type="text/javascript" language="javascript">initLoginConfig();initCommonAction();</script>
<!--[if IE 6]>
<script type="text/javascript" src="static/script/DD_belatedPNG_0.0.8a-min.js" tppabs="http://game.haopai365.com/static/script/DD_belatedPNG_0.0.8a-min.js" ></script>
<script type="text/javascript">
DD_belatedPNG.fix('#haopaiLogo,#mainNav,.bidImgButton,.hotTag-small,.hotTag-big,.newTag-small,.newTag-big,.subTitle,.accountMenu,.sprite, .onError, .onCorrect, .onFocus, .onShow, .onLoad');
</script>
<![endif]-->

	<!-- #footer end -->
</div>

<!-- activity 9.5 container start-->
<div id="applyFrame"></div>
<div id="gameCache" style="display:none;"></div>
<!-- activity 9.5 container end-->
<!--[if IE 6]>
<style type='text/css'>
#applyFrame {position:absolute;}
</style>
<![endif]-->

<script type="text/javascript" language="javascript">

window._tnews = 0;
var nTimeOut = 0;		//超时时间
var bTimeOutState = 0;	//超时状态 

$(document).ready(function(){
	
	$.ajaxSetup({cache:false});
	window._periods = new Array();//拍卖商品对象
	
  		
  		var period = new Array();
  		period[0] = 1; 								// 网络状态 
  		period[1] = "57618";				// 编号
  		period[2] = 0;								// 参与人数
  		period[3] = "4782"; 				//最后时间
  		period[4] = 0;								//当前状态	
  		period[5] = 1;			//是否开始
  		window._periods[0] =  period;
  	
  		
  		var period = new Array();
  		period[0] = 1; 								// 网络状态 
  		period[1] = "57619";				// 编号
  		period[2] = 0;								// 参与人数
  		period[3] = "6582"; 				//最后时间
  		period[4] = 0;								//当前状态	
  		period[5] = 1;			//是否开始
  		window._periods[1] =  period;
  	
  		
  		var period = new Array();
  		period[0] = 1; 								// 网络状态 
  		period[1] = "57642";				// 编号
  		period[2] = 0;								// 参与人数
  		period[3] = "8382"; 				//最后时间
  		period[4] = 0;								//当前状态	
  		period[5] = 1;			//是否开始
  		window._periods[2] =  period;
  	
  		
  		var period = new Array();
  		period[0] = 1; 								// 网络状态 
  		period[1] = "57960";				// 编号
  		period[2] = 0;								// 参与人数
  		period[3] = "8382"; 				//最后时间
  		period[4] = 0;								//当前状态	
  		period[5] = 1;			//是否开始
  		window._periods[3] =  period;
  	
  		
  		var period = new Array();
  		period[0] = 1; 								// 网络状态 
  		period[1] = "57961";				// 编号
  		period[2] = 0;								// 参与人数
  		period[3] = "8982"; 				//最后时间
  		period[4] = 0;								//当前状态	
  		period[5] = 1;			//是否开始
  		window._periods[4] =  period;
  	
  		
  		var period = new Array();
  		period[0] = 1; 								// 网络状态 
  		period[1] = "57644";				// 编号
  		period[2] = 0;								// 参与人数
  		period[3] = "11982"; 				//最后时间
  		period[4] = 0;								//当前状态	
  		period[5] = 1;			//是否开始
  		window._periods[5] =  period;
  	
  		
  		var period = new Array();
  		period[0] = 1; 								// 网络状态 
  		period[1] = "57962";				// 编号
  		period[2] = 0;								// 参与人数
  		period[3] = "12582"; 				//最后时间
  		period[4] = 0;								//当前状态	
  		period[5] = 1;			//是否开始
  		window._periods[6] =  period;
  	
  		
  		var period = new Array();
  		period[0] = 1; 								// 网络状态 
  		period[1] = "57647";				// 编号
  		period[2] = 0;								// 参与人数
  		period[3] = "15582"; 				//最后时间
  		period[4] = 0;								//当前状态	
  		period[5] = 1;			//是否开始
  		window._periods[7] =  period;
  	
  		
  		var period = new Array();
  		period[0] = 1; 								// 网络状态 
  		period[1] = "57963";				// 编号
  		period[2] = 0;								// 参与人数
  		period[3] = "15582"; 				//最后时间
  		period[4] = 0;								//当前状态	
  		period[5] = 1;			//是否开始
  		window._periods[8] =  period;
  	
  		
  		var period = new Array();
  		period[0] = 1; 								// 网络状态 
  		period[1] = "57649";				// 编号
  		period[2] = 0;								// 参与人数
  		period[3] = "17382"; 				//最后时间
  		period[4] = 0;								//当前状态	
  		period[5] = 1;			//是否开始
  		window._periods[9] =  period;
  	
  		
  		var period = new Array();
  		period[0] = 1; 								// 网络状态 
  		period[1] = "57651";				// 编号
  		period[2] = 0;								// 参与人数
  		period[3] = "22782"; 				//最后时间
  		period[4] = 0;								//当前状态	
  		period[5] = 1;			//是否开始
  		window._periods[10] =  period;
  	
  		
  		var period = new Array();
  		period[0] = 1; 								// 网络状态 
  		period[1] = "57652";				// 编号
  		period[2] = 0;								// 参与人数
  		period[3] = "22782"; 				//最后时间
  		period[4] = 0;								//当前状态	
  		period[5] = 1;			//是否开始
  		window._periods[11] =  period;
  	
	  startServerListener();
	  startTimer();
	  //bindEvent();
	  //loadNews();
	  bindPeriodHover();
	  initStyle();
	  //loadActivity();
	  bindGameNav();
	  showSlider();
});
</script>
</body>

</html>