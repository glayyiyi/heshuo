<!DOCTYPE html>
<html>
		<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
		<meta http-equiv="X-UA-Compatible" content="IE=8" />
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<title>中硕信投</title>
		<meta name="description" content="<? if (!isset($this->magic_vars['_G']['system']['con_description'])) $this->magic_vars['_G']['system']['con_description'] = ''; echo $this->magic_vars['_G']['system']['con_description']; ?>" />
<meta name="keywords" content="<? if (!isset($this->magic_vars['_G']['system']['con_keywords'])) $this->magic_vars['_G']['system']['con_keywords'] = ''; echo $this->magic_vars['_G']['system']['con_keywords']; ?>" />
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/jquery-ui.css" type="text/css" media="all" />
<!-- <script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/script/jquery-1.7.2.min.js" type="text/javascript"></script> -->
 <script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/jquery.js"></script> 
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/jquery-ui.js"></script>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/thickbox/thickbox.js"></script>
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/thickbox/thickbox.css" type="text/css" media="screen" />
<!--jbox-->
<link id="skin" rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/jBox/Skins/Gray/jbox.css" />
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/jBox/jquery.jBox-2.3.min.js?v=1" charset='gb2312'></script>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/jBox/i18n/jquery.jBox-zh-CN.js?v=1" charset='gb2312'></script>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/blockUI.js"></script>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/index.js"></script>

		<!--[if IE 6]>
		<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/script/iepng.js" type="text/javascript"></script>
		<![endif]-->
		<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/basic.css" rel="stylesheet" type="text/css" />
		<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/style/index.css" rel="stylesheet" type="text/css" />

		
		<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/script/imgSlide.js" type="text/javascript"></script>

	</head>
	<body>
		<!-- 标记(logo)区域 -->
		<div class="branding">
			<div class="head">
            	<div class="logo fl"></div>
                <div class="nav fl">
                	<ul class="navList">
                    	<li><a class="" href="/">首页</a></li>
                        <li><a href="/invest/index.html?order=account_up">我要投资</a>
                        	<p class="subMenu hide"><a href="#">理财</a> <a href="#">储蓄</a> <a href="#">基金</a> <a href="#">保险</a></p>
                        </li>
                        <li><a href="/index.action?user">我的账户</a></li>
                        <li><a href="/linekefu/index.html">咨询服务</a></li>
                        <li><a href="/aboutus/index.html">关于我们</a></li>
                    </ul>                
                </div>
                <div class="info fr">
                  <p class="name"><label class="fl"> <? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']>0): ?>
				  欢迎你，<a href="/?user"><? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?></a> 
				  <a href="/?user&q=going/logout">[退出]</a>
				 <? else: ?>
				 <? if (!isset($this->magic_vars['_G']['open_connet']['type'])) $this->magic_vars['_G']['open_connet']['type']=''; ;if (  $this->magic_vars['_G']['open_connet']['type']=='qq'): ?>
				 欢迎您，<img src="/data/images/base/connect_qq.gif" title="qq" />
				 <? if (!isset($this->magic_vars['_G']['open_connet']['nickname'])) $this->magic_vars['_G']['open_connet']['nickname'] = ''; echo $this->magic_vars['_G']['open_connet']['nickname']; ?> | 
				 <a href="/index.action?user&q=going/reg">完善帐号信息</a> | 
				 <a href="/index.action?user&q=going/login">绑定已有帐号</a> | 
				<a href="/?user&q=going/logout">退出</a>
				 <? else: ?>
				 <a href="/index.action?user&q=going/login">登录</a> | 
				<a href="/index.action?user&q=going/getreg">注册</a>
				 <? endif; ?>
				
				<? endif; ?>
				</label> <a class="fr" href="#">加入收藏</a></p>
              </div>
            </div>
		</div>
		<!-- end 标记(logo)区域 -->
		<div class="container">
			<!-- 二级导航 -->
			<div class="subNavBg m_b_6 clearfix">
				<div class="fl loginBar">
					<a class="longin_apply" href="/linekefu/index.html">理财顾问</a>
					<!-- <a class="longin_apply" href="首页-理财顾问申请入住.html">申请入驻</a> -->
					<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']==""): ?>
					<span class="popdiv">
					<a class="longin_enter" href="/index.action?user&q=going/login">登录</a>
						<!-- 弹出层 -->
						<div class="popEnter hide">
						
                		<form action="/index.php?user&q=going/login" method="post" id="login_sub">
							<div class="login">
								<label class="name">用户名</label>
								<span class="input_name">
									<!-- <input type="text" name="textfield" id="textfield" /> -->
									 <input name="username" type="text" maxlength="60" value="" >
								</span>
								<label class="pass">密码</label>
								<span class="input_pass">
									<!-- <input type="password" name="textfield" id="textfield" /> -->
									<input name="password" type="password" maxlength="60" value="" >
								</span>
								<a id="login_btn" class="btn btn_login" >登 录</a> 
								<!-- <input class="btn btn_login" type="submit" value="登录"> -->
								<a href="/index.action?user&q=going/getreg" class="btn btn_login" target=_blank>立即注册</a>
								
                   
                      
                      
                        
                        <!-- <table><tr><td>记住我</td><td><input type="checkbox" name="remember" value="1" style="width:15px;border:0" /></td><td><select name="save_time"><option value="3600">一个小时</option><option value="18000">五个小时</option><option value="86400">一天</option><option value="604800">一周</option><option value="2592000">一个月</option><option value="31104000">永远</option></select></td></tr></table> -->
                            <!-- <input type="checkbox">记住用户名 <a class="text-link" href="?user&q=going/getpwd" target=_blank>忘记密码？</a> -->
                       
                       
                            <!-- <a href="#" class="denglu" id="login_btn">登  录</a> -->
                           <!--  <a href="?user&q=going/reg" class="zhuce" target=_blank>立即注册</a> -->
                        
                   
           	    </form>
		      
			
		<? endif; ?>
							</div>
							</span>
						</div>
						<!-- end 弹出层 -->
					
				</div>
			</div>
			<!-- end 二级导航 -->
			
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/head_nav.js"></script>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/base.js"></script>

<!--header-end-->