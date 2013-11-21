<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{include file="user_header.html"}
<link href="{$tempdir}/media/css/modal.css" rel="stylesheet" type="text/css" />
<link href="{$tempdir}/media/css/tipswindown.css" rel="stylesheet" type="text/css" />

<!--用户中心的主栏目 开始-->
<div id="main" class="clearfix" style="margin-top:0px;">
<div class="wrap950 ">
	<!--左边的导航 开始-->
	<div class="user_left">
		{include file="user_menu.html"}
	</div>
	<!--左边的导航 结束-->
	
	<!--右边的内容 开始-->
	<div class="user_right">
		<div class="user_right_menu">
			{if $_U.query_type=="userpwd" || $_U.query_type=="paypwd" || $_U.query_type=="protection" || $_U.query_type=="getpaypwd" || $_U.query_type=="serialStatusSet"}
			<ul id="tab" class="list-tab clearfix">
				
				<li {if $_U.query_type=="userpwd"} class="cur"{/if}><a href="{$_U.query_url}/userpwd">登录密码</a></li>
				<li {if $_U.query_type=="paypwd" || $_U.query_type=="getpaypwd"} class="cur"{/if}><a href="{$_U.query_url}/paypwd">交易密码</a></li>
				<li {if $_U.query_type=="protection"} class="cur"{/if}><a href="{$_U.query_url}/protection">密码保护</a></li>
				<li {if $_U.query_type=="serialStatusSet"} class="cur"{/if}><a href="{$_U.query_url}/serialStatusSet">动态口令设置</a></li>
			</ul>
			{elseif $_U.query_type=="reginvite"  || $_U.query_type=="request" || $_U.query_type=="myfriend" || $_U.query_type=="black"|| $_U.query_type=="ticheng"}
			<ul id="tab" class="list-tab clearfix">
				<li {if $_U.query_type=="reginvite"} class="cur"{/if}><a href="{$_U.query_url}/reginvite">邀请好友</a></li>
				<li {if $_U.query_type=="request"} class="cur"{/if}><a href="{$_U.query_url}/request">好友请求</a></li>
				<li {if $_U.query_type=="myfriend"} class="cur"{/if}><a href="{$_U.query_url}/myfriend">我的好友</a></li>
				<li {if $_U.query_type=="black"} class="cur"{/if}><a href="{$_U.query_url}/black">黑名单</a></li>
				<li {if $_U.query_type=="ticheng"} class="cur"{/if}><a href="{$_U.query_url}/ticheng">好友提成</a></li>
			</ul>
			{elseif $_U.query_type=="credit" }
			<ul id="tab" class="list-tab clearfix">
			</ul>
			{elseif $_U.query_type=="smsorder" }
			<ul id="tab" class="list-tab clearfix">
            <li {if $_U.query_type=="smsorder"} class="cur"{/if}><a href="{$_U.query_url}/smsorder">短信订制</a></li>
			</ul>            
			{elseif $_U.query_type=="myuser" }
			<ul id="tab" class="list-tab clearfix">
				<li {if $_U.query_type=="myuser"} class="cur"{/if}><a href="{$_U.query_url}/myuser">我的理财顾问</a></li>
				<li ><a href="/?user&q=code/borrow/myuser">客户借款</a></li>
				<li ><a href="/?user&q=code/borrow/myuser_account">统计信息</a></li>
			</ul>
			{elseif $_U.query_type=="tenderTreasure"}
			<ul id="tab" class="list-tab clearfix">
			<li {if $_U.query_type=="tenderTreasure"} class="cur"{/if}><a href="{$_U.query_url}/tenderTreasure">投友宝</a></li>
			</ul>
			{else}
			<ul id="tab" class="list-tab-narrow clearfix">
				<li {if $_U.query_type=="realname"} class="cur"{/if}><a href="{$_U.query_url}/realname">实名认证</a></li>
				<li {if $_U.query_type=="email_status"} class="cur"{/if}><a href="{$_U.query_url}/email_status">邮箱认证</a></li>
				<li {if $_U.query_type=="phone_status"} class="cur"{/if}><a href="{$_U.query_url}/phone_status">手机认证</a></li>
				<li {if $_U.query_type=="video_status"} class="cur"{/if}><a href="{$_U.query_url}/video_status">视频认证</a></li>
				<li {if $_U.query_type=="scene_status"} class="cur"{/if}><a href="{$_U.query_url}/scene_status">现场认证</a></li>
				<li ><a href="/?user&q=code/attestation">上传资料证明</a></li>
				<li {if $_U.query_type=="avatar"} class="cur"{/if}><a href="{$_U.query_url}/avatar">头像信息</a></li>
 			</ul>
			{/if}
		</div>
		
		<div class="user_right_main">
		
		{if $_U.query_type=="avatar"}
		<!--头像 开始-->
		<div class="user_help alert">请上传你网站的头像<br/>* 温馨提示：头像现在有三种，大，中，小</div>
		<div style="width:100%">
		<div style="float:left;padding-left:100px;">
			
			<img  style="border:1px dashed #999;padding:2px;margin-top:60px;" src="{$_G.user_id|avatar}"/><br/>
			<a href="index.php?user&q=code/user/avatar"><font color="#FF0000">当前用户头像</font></a>

		</div>
		<div style="float:right">{show_avatar}</div>
		
		</div>
	
		<!--头像 结束-->
		
		
		
		{elseif $_U.query_type=="privacy"}
		<div class="user_help">设置个人的隐私</div>
		<form action="" method="post">
		<div class="user_main_title">Home</div>
		<div class="user_right_border">
			<div class="e">好友列表：</div>
			<div class="c">
				<script src="plugins/?q=linkage&nid=yinsi&name=friend&isid=false&value={$_U.user_privacy.friend}"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">好友评论：</div>
			<div class="c">
				<script src="plugins/?q=linkage&nid=yinsi&name=friend_comment&isid=false&value={$_U.user_privacy.friend_comment}"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">借款列表：</div>
			<div class="c">
				<script src="plugins/?q=linkage&nid=yinsi&name=borrow_list&isid=false&value={$_U.user_privacy.borrow_list}"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">投标记录：</div>
			<div class="c">
				<script src="plugins/?q=linkage&nid=yinsi&name=loan_log&isid=false&value={$_U.user_privacy.loan_log}"></script>
			</div>
		</div>
			
		
		<div class="user_main_title">站内信/加为好友</div>
		<div class="user_right_border">
			<div class="e">谁可以给我发站内信：</div>
			<div class="c">
				<script src="plugins/?q=linkage&nid=yinsi&name=sent_msg&isid=false&value={$_U.user_privacy.sent_msg}"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">谁可以向我发好友申请：</div>
			<div class="c">
				<script src="plugins/?q=linkage&nid=yinsi&name=friend_request&isid=false&value={$_U.user_privacy.friend_request}"></script>
			</div>
		</div>
		
		
		<div class="user_main_title">黑名单</div>
		<div class="user_right_border">
			<div class="e">谁可以看我的黑名单：</div>
			<div class="c">
				<select name="look_black">
					<option value="0" {if $_U.user_privacy.look_black==0} selected="selected"{/if}>不允许我的好友查看我的黑名单</option>
					<option value="1" {if $_U.user_privacy.look_black==1} selected="selected"{/if}>允许我的好友查看我的黑名单</option>
					<option value="2"{ if $_U.user_privacy.look_black==2} selected="selected"{/if}>仅允许我同意的好友查看我的黑名单</option>
				</select>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">允许黑名单向我发内信：</div>
			<div class="c">
				<input type="radio" name="allow_black_sent" value="1" { if $_U.user_privacy.allow_black_sent==1} checked="checked"{/if}/> 允许 <input type="radio" name="allow_black_sent" value="0"   { if $_U.user_privacy.allow_black_sent==0 || $_U.user_privacy.allow_black_sent==""} checked="checked"{/if} /> 不允许 
			</div>
		</div>
		<div class="user_right_border">
			<div class="e">允许黑名单向我发送好友请求：</div>
			<div class="c">
				<input type="radio" name="allow_black_request" value="1"  {if $_U.user_privacy.allow_black_request==1} checked="checked"{/if}/> 允许 <input type="radio" name="allow_black_request" value="0" {if $_U.user_privacy.allow_black_request==0 || $_U.user_privacy.allow_black_request==""} checked="checked"{/if}/> 不允许 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e"></div>
			<div class="c">
				<input type="submit"  class="btn-action"  name="name"  value="确认提交" size="30" /> 
			</div>
		</div>
		</form>
		
		<div class="user_right_foot alert">
		* 温馨提示：请保护好自己的隐私
		</div>
		<!--账号充值 结束-->
		
		
		
		{elseif $_U.query_type=="userpwd"}
		<!--修改登录密码 开始-->
		<form action="" name="form1" method="post" onsubmit="return check_form()">
		<div class="user_help alert alert">密码请不要太简单，设成复杂一点，做好字母+符号</div>
		<div class="user_right_border">
			<div class="e">原始密码：</div>
			<div class="c">
				<input type="password" name="oldpassword" /> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="e">新密码：</div>
			<div class="c">
				<input type="password" name="newpassword" /> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="e">确认密码：</div>
			<div class="c">
				<input type="password" name="newpassword1" /> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="e"></div>
			<div class="c">
				<input type="submit" class="btn-action" name="name"  value="确认提交" size="30" /> 
			</div>
		</div>
		</form>
		<div class="user_right_foot alert">
		* 温馨提示：我们将严格对用户的所有资料进行保密
		</div>
		{literal}<script>
			function check_form(){
				 var frm = document.forms['form1'];
				 var oldpassword = frm.elements['oldpassword'].value;
				 var newpassword = frm.elements['newpassword'].value;
				  var newpassword1 = frm.elements['newpassword1'].value;
				 var errorMsg = '';
				  if (oldpassword.length == 0 ) {
					errorMsg += '* 请输入旧的登录密码' + '\n';
				  }
				  if (newpassword.length == 0 ) {
					errorMsg += '* 新密码不能为空' + '\n';
				  }
				   if (newpassword.length >15 || newpassword.length<6 ) {
					errorMsg += '* 新密码长度在6到15之间' + '\n';
				  }
				    if (newpassword.length !=newpassword1.length) {
					errorMsg += '* 两次密码不一样' + '\n';
				  }
				  if (errorMsg.length > 0){
					alert(errorMsg); return false;
				  } else{  
					return true;
				}
			
			}
		</script>{/literal}
		<!--修改登录密码 结束-->
		
<!--  LiuYY 2012-05-31 -->
		{elseif $_U.query_type =="serialStatusSet"}
		<!--修改动态口令状态 开始-->
		
		<form action="" name="form1" method="post" onsubmit="" >
		<div class="user_help alert">动态口令可以确认用户的合法身份，从而在合法身份登录的基础上保障业务业务访问的安全性。</div>
		将动态口令应用于：<br/>
		{ if  $_G.user_result.serial_id == "" }
		<font color="red" >您的账号还未绑定动态口令，无法执行相关设置！</font>
		{/if}
		<div class="user_right_border">
			<div class="e">提现：</div>
			<div class="c">
				<input type="checkbox" name="carryout"  value="1" id="carryout" { if  $_G.user_result.serial_id == "" } disabled="disabled" {/if} /> 
			</div>
			<div class="e">登录：</div>
			<div class="c">
				<input type="checkbox"  name="login" value="1" id="login" {if  $_G.user_result.serial_id == "" } disabled="disabled" {/if} /> 
			</div>
			<input type="hidden" id="json_data" value='{$_G.user_result.serial_status}' />	
		</div>
		<input type="hidden" name="action" value="1" />
		<br/>
		<div class="">
			<div class="e"></div>
			请输入动态口令码: <input type="text" maxlength="6" name="uchoncode" {if $_G.user_result.serial_id == "" } disabled="disabled" {/if} /> 
			<div class="c">
			<br/>
				<input type="submit"  class="btn-action" name="name"  value="确认提交" size="30" { if  $_G.user_result.serial_id == "" } disabled="disabled" {/if} /> 
			</div>
		</div>
	
	
		</form>
		<div class="user_right_foot alert">
		* 温馨提示：我们将严格对用户的所有资料进行保密
		</div>
		{literal}
		<script src="j.js"></script>
		 <script >
		jQuery(function(){
			

			var json_data = jQuery("#json_data").attr('value');
			var obj=eval("("+json_data+")");
			if(obj.carryout=='1'){
				jQuery("#carryout").attr("checked","checked");
			}
			if(obj.login == '1'){
				jQuery("#login").attr("checked","checked");
			}
			
		});
    </script>{/literal}
		<!--修改动态口令状态 结束-->		
		{elseif $_U.query_type=="paypwd"}
		<!--修改安全密码 开始-->
		<form action="" name="form1" method="post" onsubmit="return check_form()">
		<div class="user_help alert">请把密码设置复杂,并认真保管好自己的密码!（字母+符号尤佳）</div>
		<div class="user_right_border">
			<div class="l">原始交易密码：</div>
			<div class="c">
				<input type="password" name="oldpassword" /> 请输入原交易密码。(初始交易密码与您注册时的登录密码一致)
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">新交易密码：</div>
			<div class="c">
				<input type="password" name="newpassword" /> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">确认交易密码：</div>
			<div class="c">
				<input type="password" name="newpassword1" /> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">验证码：</div>
			<div class="c clearfix" >
				<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" style="float:left;"/><img src="/plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer;float:left;" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input type="submit"  class="btn-action" name="name"  value="确认提交" size="30" /> <a href="/?user&q=code/user/getpaypwd">忘记交易密码？</a>
			</div>
		</div>
		</form>
		<div class="user_right_foot alert">
		* 温馨提示：我们将严格对用户的所有资料进行保密
		</div>
		<!--修改安全密码 结束-->
		{literal}<script>
			function check_form(){
				 var frm = document.forms['form1'];
				 var oldpassword = frm.elements['oldpassword'].value;
				 var newpassword = frm.elements['newpassword'].value;
				  var newpassword1 = frm.elements['newpassword1'].value;
				 var errorMsg = '';
				  if (oldpassword.length == 0 ) {
					errorMsg += '* 请输入旧密码，如果没有设定交易密码，请输入登录密码' + '\n';
				  }
				  if (newpassword.length == 0 ) {
					errorMsg += '* 新密码不能为空' + '\n';
				  }
				   if (newpassword.length >15 || newpassword.length<6 ) {
					errorMsg += '* 新密码长度在6到15之间' + '\n';
				  }
				    if (newpassword.length !=newpassword1.length) {
					errorMsg += '* 两次密码不一样' + '\n';
				  }
				  if (errorMsg.length > 0){
					alert(errorMsg); return false;
				  } else{  
					return true;
				}
			
			}
		</script>{/literal}
		
		{elseif $_U.query_type=="tenderTreasure"}
		<div class="user_help alert">投友宝-您身边的网贷记账专家，成功绑定后可以在投友宝上多平台自动记账、对账，简单、高效、安全。<a href="http://bbs.cnwdai.com/forum.php?mod=viewthread&tid=10617&extra=page%3D1"  target="_break">【点此查看产品说明】</a></div>
		{if $_G.user_result.forum_accredit==1}
		您已成功申请了投友宝服务，<a href="http://tyb.cnwdai.com/" target="_break">马上前往投友宝</a>！
		{else}
		<form action="" name="form1" method="post" {literal}onkeydown="if(event.keyCode==13){return false;}"{/literal}>
		<div class="user_right_border">
			<div class="l">投友宝用户名：</div>
			<div class="c">
				<input type="text" name="username" /><a href="http://www.cnwdai.com/member.php?mod=register" target="_break">没有用户名？立即注册</a>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">验证码：</div>
			<div class="c clearfix">
				<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" style="float:left"/><img src="/plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer;float:left" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input type="checkbox" name="protocolcheck" value="1" /><a href="javascript:protocolshow()">同意投友宝用户授权协议</a>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input type="button" class="btn-action" name="name"  value="确认申请" size="30" onclick="tenderTreasure()" /> 
			</div>
		</div>
		</form>
		<div id="protocol" style="display: none">
		<p style="text-align:center">投友宝用户授权协议</p>

<p>投友宝是一款免费的网贷投资多平台记账对账工具，授权之后，用户可以在投友宝后台获取以下数据：</p>

<p>1.账户资金信息</p>
<p>2.资金操作日志</p>
<p>3.投标记录</p>
<p>4.待收记录</p>
<p>5.用户充值记录</p>
<p>6.用户提现记录</p>
<br/>
<p>投友宝安全：</p>
<p>1.投友宝与网贷之窗(http://www.cnwdai.com)用户同步登陆。</p>
<p>2.投友宝不记录用户在平台的任何密码。</p>
<p>3.投友宝只查询用户财务记录等情况，不操作用户的资金。</p>
<p>4.投友宝维护您的合法权益，不会对外公开任何用户私有数据。</p>
<p>5.投友宝与平台通信采用双向加密验证。</p>
<br/>
<p>授权解除：</p>
<p>用户若需解除用户授权，请登陆投友宝，到自动记账->平台账号 中解除随时解除授权即可。</p>
</div>
		{/if}
		<div class="user_right_foot alert">
		* 温馨提示：我们将严格对用户的所有资料进行保密
		</div>
		{elseif $_U.query_type=="getpaypwd"}
		<!--修改安全密码 开始-->
		{if $magic.get.keyid!=""}
		<form action="" name="form1" method="post" onsubmit="return check_form()" >
		<div class="user_help">请重新输入您的支付密码</div>
		<div class="user_right_border">
			<div class="l">请输入密码：</div>
			<div class="c">
				<input type="password" name="paypwd" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">请再一次输入密码：</div>
			<div class="c">
				<input type="password" name="paypwd1" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">验证码：</div>
			<div class="c clearfix">
				<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" style="float:left"/><img src="/plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer;float:left" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input type="submit"  class="btn-action" name="name"  value="确认提交" size="30" /> 
			</div>
		</div>
		</form>
		{literal}<script>
			function check_form(){
				 var frm = document.forms['form1'];
				 var newpassword = frm.elements['paypwd'].value;
				  var newpassword1 = frm.elements['paypwd1'].value;
				 var errorMsg = '';
				  if (newpassword.length == 0 ) {
					errorMsg += '* 新密码不能为空' + '\n';
				  }
				   if (newpassword.length >15 || newpassword.length<6 ) {
					errorMsg += '* 新密码长度在6到15之间' + '\n';
				  }
				    if (newpassword.length !=newpassword1.length) {
					errorMsg += '* 两次密码不一样' + '\n';
				  }
				  if (errorMsg.length > 0){
					alert(errorMsg); return false;
				  } else{  
					return true;
				}
			
			}
		</script>{/literal}
		
		{else}
		<form action="" name="form1" method="post" >
		<div class="user_help">请登录邮箱找回</div>
		<div class="user_right_border">
			<div class="l">您的邮箱：</div>
			<div class="c">
				{$_G.user_result.email}
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">验证码：</div>
			<div class="c clearfix">
				<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" style="float:left"/><img src="/plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer;float:left" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input type="submit"  class="btn-action" name="name"  value="确认提交" size="30" /> 
			</div>
		</div>
		</form>
		{/if}
		<div class="user_right_foot alert">
		* 温馨提示：我们将严格对用户的所有资料进行保密
		</div>
        
		{elseif $_U.query_type=="smsorder"}
		<!--短信定制 开始-->
		<form action="" name="form1" method="post" >
		<div class="user_right_border">
			<div class="l">开始时间：</div>
			<div class="c">{$_U.smsuser.start_time}</div>
		</div>
		<div class="user_right_border">
			<div class="l">结束时间：</div>
			<div class="c">
				{$_U.smsuser.end_time}
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">订购类型：</div>
			<div class="c">
				<input name="ordertype" type="radio" value="1_{$_U.apptype.money_month}" />包月（{$_U.apptype.money_month}）<input name="ordertype" type="radio" value="2_{$_U.apptype.money_year}" />包年（{$_U.apptype.money_year}）
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input type="submit"  class="btn-action" name="name"  value="确认订购" size="30" /> 
			</div>
		</div>
		</form>
	        
		<!--修改安全密码 结束-->
		{elseif $_U.query_type=="protection"}
		<!--密码保护 开始-->
		 <form action="" method="post">
		{if $_U.answer_type=="2" || $_G.user_result.answer == "" }
		<div class="user_help alert">请选择一个新的帐号保护问题,并输入答案。帐号保护可以为您以后在忘记密码、重要设置等操作的时候,提供安全保障。 </div>
		<div class="user_right_border">
			<div class="l">请选择问题：</div>
			<div class="c">
				<script src="/plugins/?q=linkage&name=question&nid=pwd_protection&isid=false"></script> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">请输入答案：</div>
			<div class="c">
				<input type="text" name="answer" /><input type="hidden" name="type" value="2" /> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">验证码：</div>
			<div class="c clearfix">
				<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3" style="float:left"/><img src="/plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer;float:left" />
			</div>
		</div>
		{else}
		<div class="user_help">您已经设置了密码保护功能，请先输入答案再进行修改。 </div>
		<div class="user_right_border">
			<div class="l">请选择问题：</div>
			<div class="c">
				{$_G.user_result.question|linkage:"pwd_protection"} 
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">请输入答案：</div>
			<div class="c">
				<input type="text" name="answer" /> <input type="hidden" name="type" value="1" />
			</div>
		</div>
		
		{/if}
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input type="submit"  class="btn-action" name="name"  value="确认提交" size="30" /> 
			</div>
		</div>
		<div class="user_right_foot alert">
		* 温馨提示：我们将严格对用户的所有资料进行保密
		</div>
		
		</form>
		<!--密码保护 结束-->
		
		
		<!--好友邀请 开始-->
		{elseif $_U.query_type=="reginvite"}
		<div class="user_help alert" style="text-align:left;" > 
			<strong>温馨提示：</strong><br/>
请不要发送邀请信给不熟悉的人士,避免给别人带来不必要的困扰。<br />
请把下边的链接地址发给您的好友，这样您就成了他的上线用户。<br />
		</div>
		<div class="user_right_border">
			<div class="l">邀请链接：</div>
			<div class="c">
				<textarea style="height:100px;width:500px" id="invite">{$_G.weburl}/index.php?user&q=going/reginvite&u={$_U.user_inviteid}</textarea><br/><input type="button" onclick="doCopy('invite')" class="btn-action" value="复制" />
			</div>
		</div>
		<table border="0" cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form action="" method="post">
				<tr class="head">
					<td>下线用户名 </td>
                    <td>真实姓名 </td>
					<td>注册时间 </td>
                    <td>是否VIP会员 </td>
					<td>应得提成收入</td>
                    <td>实际提成收入(已支付)</td>
				</tr>
				{list module="user" function="GetFriendsInvite" var="loop" user_id="0" showpage="3"}
				{foreach from="$loop.list" item="item"}
				<tr>
					<td>{$item.username}</td>
                    <td>{$item.realname}</td>
					<td>{$item.addtime|date_format}</td>
                    <td>{ if $item.vip_status == 1}是{else}否{/if}</td>
					<td>{ if $item.vip_status == 1}100元{else}0元{/if}</td>
                    <td>{$item.invite_money}元</td>
				</tr>
				{/foreach}
				<tr>
					<td colspan="6" class="page">
						<div class="list_table_page">{$loop.showpage}</div>
					</td>
				</tr>
				{/list}
			</form>	
		</table>
		{literal}
		<script>
		function doCopy(id) { 
		  var codeid;
		  codeid=id;
		 if (document.all){
		   var obj;
		   obj=document.getElementById(codeid);
		   window.clipboardData.setData("text",obj.innerText)
		   alert("邀请链接地址复制成功，你可以直接复制发给你的好友");
		 }
		 else{
		   alert("此功能只能在IE上有效\n\n请在文本域中用Ctrl+A选择再复制");
		 }
		}
		</script>
		{/literal}
		<!--好友请求 结束-->
		
		<!--好友请求 开始-->
		{elseif $_U.query_type=="request"}
		<table border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form action="" method="post">
				<tr class="head" >
					<td>对方名称</td>
					<td>请求时间</td>
					<td>请求说明</td>
					<td>操作</td>
				</tr>
				{list  module="user" function="GetFriendsRlist" var="loop" user_id="0" }
				{foreach from="$loop.list" item="item"}
				<tr >
					<td><a href="/u/{$item.user_id}" target="_blank">{$item.username}</a></td>
					<td>{$item.addtime|date_format}</td>
					<td>{$item.content}</td>
					<td><a href="javascript:void(0)" onclick='tipsWindown("加为好友","url:get?/?user&q=code/user/raddfriend&username={$item.username}",400,230,"true","","true","text");'>加为好友</a>  <a href="{$_U.query_url}/delfriend&username={$item.username}">删除</a> </td>
				</tr>
				{/foreach}
				<tr >
					<td colspan="4" class="page">
						<div class="list_table_page">{$loop.show_page}</div>
					</td>
				</tr>
				{/list}
			</form>	
		</table>
		<!--好友请求 结束-->
		
		<!--我的好友 开始-->
		{elseif $_U.query_type=="myfriend"}
		
		<div class="user_main_title" style="height:30px; padding-top:7px;"> 
		
		&nbsp; &nbsp; &nbsp; 用户名：<input type="text" name="username" id="username" value="{$magic.request.username}" /> <input value="搜索" type="button" onclick="sousuo('{$_U.query_url}/publish')"  />
		</div>
		
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form action="" method="post">
				<tr class="head" >
					<td>对方名称</td>
					<td>加入时间</td>
					<td>好友说明</td>
					<td>操作</td>
				</tr>
				{list module="user" function="GetFriendsList" var="loop" user_id="0" status=1 showpage="3" username="request"}
				{foreach from="$loop.list" item="item"}
				<tr >
					<td><a href="/u/{$item.friends_userid}" target="_blank">{$item.friend_username}</a></td>
					<td>{$item.addtime|date_format}</td>
					<td>{$item.content|default:"-"}</td>
					<td><a href="{$_U.query_url}/delfriend&username={$item.friend_username}">删除</a>  <a href="{$_U.query_url}/blackfriend&username={$item.friend_username}">设为黑名单</a></td>
				</tr>
				{/foreach}
				<tr>
					<td colspan="4" class="page">
						<div class="list_table_page">{$loop.showpage}</div>
					</td>
				</tr>
				{/list}
			</form>	
		</table>
		<!--我的好友 结束-->
<script>
	var url = "{$_U.query_url}/{$_U.query_type}";
		{literal}
		function sousuo(){
			var _url = "";
			var username = jQuery("#username").val();
			if (username!=null){
				 _url += "&username="+username;
			}
			location.href=url+_url;
		}
</script>
{/literal}
		
		<!--黑名单 开始-->
		{elseif $_U.query_type=="black"}
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form action="" method="post">
				<tr class="head" >
					<td>对方名称</td>
					<td>操作</td>
				</tr>
				{list  module="user" function="GetFriendsList" var="loop" user_id="0" status=2}
				{foreach from="$loop.list" item="item"}
				<tr>
					<td><a href="/u/{$item.friends_userid}" target="_blank">{$item.friend_username}</a></td>
					<td><a href="{$_U.query_url}/delfriend&username={$item.friend_username}">删除</a>  <a href="{$_U.query_url}/readdfriend&username={$item.friend_username}">重新加为好友</a></td>
				</tr>
				{/foreach}
				<tr>
					<td colspan="4" class="page">
						<div class="list_table_page">{$loop.show_page}</div>
					</td>
				</tr>
				{/list}
			</form>	
		</table>
		<!--黑名单 结束-->
		<!-- 提成开始-->
		{elseif $_U.query_type=="ticheng"}
		<div class="user_main_title alert" style="height:60px; padding-top:7px;"> 
		</div>

		<table border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
				<tr class="head" >
					<td>时间</td>
					<td>投资金额</td>
				</tr>
				{list  module="user" function="GetTiChengList" var="loop" status="0" user_id="0" }
				{foreach from="$loop.list" item="item"}
				<tr >
					<td>{$item.addtimes}</td>
					<td>￥{$item.money}</td>
				</tr>
				{/foreach}
				{/list}
		</table>
		<!--提成 结束-->
		
		{elseif $_U.query_type=="realname"}
		<!--修改登录密码 开始-->
		{if $_G.user_result.real_status==1} 
		<div class="user_help alert">恭喜您已经通过了实名认证，如要修改请跟理财顾问联系，谢谢！</div>
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">用户名：</div>
			<div class="c">
				{$_G.user_result.username} 
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">真实姓名：</div>
			<div class="c">
				{$_G.user_result.realname}
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">性 别 ：</div>
			<div class="c">
				{if $_G.user_result.sex==1}男{else}女{/if} 
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">民 族：</div>
			<div class="c">
				{$_G.user_result.nation|linkage:"nation/value"}
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">出生日期：</div>
			<div class="c">
				{$_G.user_result.birthday|date_format:"Y-m-d"}
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">证件类别：</div>
			<div class="c">
				{$_G.user_result.card_type|linkage:"card_type"}
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">证件号码：</div>
			<div class="c">
				{$_G.user_result.card_id|truncate:14}****
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">籍贯：</div>
			<div class="c">
				{$_G.user_result.area|area}
			</div>
		</div>
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">身份证图片：</div>
			<div class="c">
				<a href="{$_G.user_result.card_pic1}" target="_blank">正面</a> | <a href="{$_G.user_result.card_pic2}" target="_blank">反面</a>
			</div>
		</div>
		{else}
		
		<form action="" name="form1" method="post" onsubmit="return check_form()" enctype="multipart/form-data">
		<div class="user_help alert">注意：请认真填写以下的内容，一旦通过实名认证以下信息将不能修改。{$_G.user_result.content}</div>
		<div class="user_right_border">
			<div class="l">用户名：</div>
			<div class="c">
				{$_G.user_result.username} 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">真实姓名：</div>
			<div class="c">
				<input  name="realname" value="{$_G.user_result.realname}" /><font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">性 别 ：</div>
			<div class="c">
				<input type="radio" name="sex" value="1" {if $_G.user_result.sex=="1" || $_G.user_result.sex==""}checked="checked" {/if} />男 <input type="radio" name="sex" value="2"  {if $_G.user_result.sex=="2"}checked="checked" {/if} />女 <font color="#FF0000">*</font> 
				
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">民 族：</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&nid=nation&name=nation&value={$_G.user_result.nation}" ></script> <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">出生日期：</div>
			<div class="c">
				<input type="text" name="birthday" value="{$_G.user_result.birthday|date_format:"Y-m-d"}" onclick="change_picktime()" />  <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">证件类别：</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&nid=card_type&name=card_type&isid=false&value={$_G.user_result.card_type}" ></script> <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">证件号码：</div>
			<div class="c">
				<input type="text" name="card_id" value="{$_G.user_result.card_id}" />  <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">籍贯：</div>
			<div class="c">
                <script src="/plugins/index.php?q=area&area={$_G.user_result.area}" type="text/javascript" ></script> <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">身份证正面上传：</div>
			<div class="c">
				<input type="file" name="card_pic1" size="20" class="input_border"/> {if $_G.user_result.card_pic1!=""}<a href="./{ $_G.user_result.card_pic1}" target="_blank" title="有图片"><img src="{ $tempdir }/images/ico_yes.gif" border="0"  /></a>{/if}  <font color="#FF0000">*</font> 
           </div>
		</div>
		
	<div class="user_right_border">
			<div class="l">身份证背面上传：</div>
			<div class="c">
				<input type="file" name="card_pic2" size="20" class="input_border"/> {if $_G.user_result.card_pic2!=""}<a href="./{ $_G.user_result.card_pic2}" target="_blank" title="有图片"><img src="{ $tempdir }/images/ico_yes.gif" border="0"  /></a>{/if}  <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e"></div>
			<div class="c">
				{if $_G.user_result.use_money>=0}<input type="submit"  class="btn-action" name="name"  value="确认提交" size="30" /> {else} 您的余额为{$_G.user_result.use_money},请先 <a href="/?user&q=code/account/recharge_new"><font color="#FF0000">充值</font></a>。{/if}
			</div>
		</div>
		</form>{/if}
		<div class="user_right_foot alert">
		* 温馨提示：我们将对用户的所有资料进行严格的保密
		</div>
		{literal}<script>
			function check_form(){
				 var frm = document.forms['form1'];
                 var card_pic1 = (frm.elements['card_pic1'].value);
                 var card_pic2 = (frm.elements['card_pic2'].value);
				 var realname = frm.elements['realname'].value;
				 var birthday = frm.elements['birthday'].value;
				 var card_id = frm.elements['card_id'].value;
				 var area = frm.elements['area'].value;
				 var errorMsg = '';
				  if (realname.length == 0 ) {
					errorMsg += '* 真实姓名不能为空' + '\n';
				  }
				  if (birthday.length == 0 ) {
					birthday += '* 生日不能为空' + '\n';
				  }
				  if (card_id.length == 0 ) {
					errorMsg += '* 证件号码不能为空' + '\n';
				  }
				  if (area.length == 0 ) {
					errorMsg += '* 请填写籍贯' + '\n';
				  }
                  var pos1 = card_pic1.lastIndexOf(".");
                  var lastname1 = card_pic1.substring(pos1,card_pic1.length);
                  var pos2 = card_pic2.lastIndexOf(".");
                  var lastname2 = card_pic2.substring(pos2,card_pic2.length);
                  if (!(lastname1.toLowerCase()==".jpg" || lastname1.toLowerCase()==".gif" ))
                  {
                       errorMsg += "*您上传的文件类型必须为.jpg或 .gif类型" + '\n';
                   }
					if (!(lastname2.toLowerCase()==".jpg" || lastname2.toLowerCase()==".gif" ))
                  {
                     errorMsg += "*您上传的文件类型必须为.jpg或 .gif类型" + '\n';
                  }
				  if (errorMsg.length > 0){
					alert(errorMsg); return false;
				  } else{  
					return true;
				}
			}
		</script>{/literal}
		<!--修改登录密码 结束-->
		
		{elseif $_U.query_type=="email_status"}
		<!--邮箱认证 开始-->
		{if $_G.user_result.email_status==1}
		<div class="user_help alert">您的邮箱已经通过认证：<b>{$_G.user_result.email}</b> </div>
		
		{else}
		<div class="user_help alert">您的邮箱还没通过认证：<b>{$_G.user_result.email}</b></div>
		<div class="user_right_border">
			<div class="c">
				<form action="" method="post" onsubmit="this.elements['submit'].disabled='disabled';return true;">
				重设邮箱：<input type="text" name="email" value="{$_G.user_result.email}" />  <input type="submit"  class="btn-action" name="submit" value="重新激活"  />
				</form>
			</div>
		</div>
		{/if}
		<!--邮箱认证 结束-->
		
		{elseif $_U.query_type=="phone_status"}
		<!--邮箱认证 开始-->
		{if $_G.user_result.phone_status==1}
		<div class="user_help alert">您的手机已经通过认证，认证的手机号码为：<b>{$_G.user_result.phone|truncate:9}**</b></div>

		{elseif $_G.user_result.phone_status==2}
		<div class="user_help alert">您的手机没有通过认证，请重新提交正确的手机号码</b></div>
			<div class="user_right_border">
			<div class="c">
				<form action="" method="post">
				手机号码：<input type="text" name="phone" id="phone" value="{if $_G.user_result.phone_status==0 || $_G.user_result.phone_status==1}{$_G.user_result.phone}{/if}" />
				<input type="submit"  class="btn-action" value="确认提交" class="subphone" /><br/><br/>
				</form>
			</div>
		</div>
        {literal}<script type="text/javascript">
		jQuery(function(){
		jQuery('.subphone').click(function(){
			var phone = jQuery('#phone').val();
			if(phone==''){
				alert('手机号码不能为空'); 
				return false;
			}else{
				 reg=/^1[3|4|5|8][0-9]{9}$/; 
				if(!reg.test(phone)){
					alert('手机号码格式不正确！');
					return false;
				}
			}
		});
		});
		</script>{/literal}
		{else}
		<div class="user_help alert">
		{if $_G.user_result.phone_status!=0}您的手机理财顾问正在审核中，请耐心等待。手机号：<font color="#FF0000">{$_G.user_result.phone_status|$_G.user_result.phone}</font>。
		{else}您的手机还没通过认证。
					<div class="user_right_border">
			<div class="c">
				<form action="" method="post" name="form1">
				手机号码：<input type="text" name="phone" id="phone" maxlength="11"  value="{if $_G.user_result.phone_status==0 || $_G.user_result.phone_status==1}{$_G.user_result.phone}{/if}" />
				<input type="button" value="获取验证码" id="getCode" onclick="getcode()" /><br/><br/>
				&nbsp;&nbsp;验证码：<input type="text" name="code" maxlength="6" /><br/><br/>
				<input type="submit"  class="btn-action" value="提交验证" id="sub-f" /></form>
			</div>
		</div>
		{literal}
		<script type="text/javascript">
		function is_phone(phone){
			if(phone==''){
				return false;
			}else{
				var reg=/^1[3|4|5|8][0-9]{9}$/; 
				if(!reg.test(phone)){
					return false;
				}
				return true;
			}
		}
		$("#sub-f").click(function(){
			var frm = document.forms['form1'];
			var code = frm.elements['code'].value;
			var phone = frm.elements['phone'].value;
			var reg = /^[0-9]{4,6}$/;
			if(!reg.test(code)){
				jQuery.jBox.error('验证码格式不正确!', '提示');
			}else if(!is_phone(phone)){
				jQuery.jBox.error('手机号码格式不正确!', '提示');
			}else{
				jQuery.jBox.tip("正在提交..", 'loading');
				frm.submit();
			}
		})
		function getcode(){
			var phone=document.forms['form1'].elements['phone'].value;
			if(!is_phone(phone)){
				jQuery.jBox.error('手机号码格式不正确!', '提示');
				return false;
			}
			$("#getCode").attr({"disabled":"disabled"});
			$.post("/index.php?user&q=code/user/phone_status","type=getcode&phone="+phone,function(msg){
				if(msg==1){
					jQuery.jBox.success('验证码发送成功，请注意查收!', '提示');
					document.forms['form1'].elements['phone'].setAttribute("readonly","readonly");
					$("#getCode").attr({"disabled":"disabled"});
					var date=new Date();
					date.setTime(date.getTime()+5*60*1000);
					document.cookie = "phonecode=300;expires=" + date.toGMTString();
					SetRemainTime();
				}else{
					jQuery.jBox.error('验证码发送失败!', '提示');
					$("#getCode").removeAttr("disabled");
					return;
				}
			});
		}
		SetRemainTime();
		function SetRemainTime() {
				var arr,reg=new RegExp("(^| )phonecode=([^;]*)(;|$)");
				var SysSecond = 0;
				if(arr=document.cookie.match(reg)){
					var SysSecond = arr[2];
				}
			    if (SysSecond > 0) { 
			    SysSecond = SysSecond - 1;
			    var date=new Date();
				date.setTime(date.getTime()+SysSecond*1000);
				document.cookie = "phonecode="+SysSecond+";expires=" + date.toGMTString();
			    var second = Math.floor(SysSecond % 60);             // 计算秒     
			    var minite = Math.floor((SysSecond / 60) % 60);      //计算分 
			    var hour = Math.floor((SysSecond / 3600) % 24);      //计算小时 
			    var day = Math.floor((SysSecond / 3600) / 24);        //计算天 
				$("#getCode").attr({"value":minite+"分"+second+"秒"});
				$("#getCode").attr({"disabled":"disabled"});
				setTimeout("SetRemainTime()",1000);
			   }else{
				$("#getCode").attr({"value":"获取验证码"});	
					$("#getCode").removeAttr("disabled");
			   } 
		}
		</script>
		{/literal}
		{/if}
		</div>
		{/if}
		<!--邮箱认证 结束-->
		
		{elseif $_U.query_type=="video_status"}
		<!--视频认证 开始-->

                {if $_G.user_result.vedio_status==1}
		<div class="user_help alert">您已经通过了视频认证</div>
		{else}
		<div class="user_help alert">
		{if $_G.user_result.video_status!=0}您的视频认证已经提交，理财顾问人员会及时的跟你联系。</font>。{else}欢迎进行视频认证。<div class="user_right_border">
			<div class="c">
				<form action="" method="post">
                                    如果你需要视频认证，请点按钮提交。<input type="submit"  class="btn-action" value="提交申请" name="submit" /><br />
                 </form>
			</div>
		</div>{/if}</div>
		{/if}
		<!--视频认证 结束-->
		
		{elseif $_U.query_type=="scene_status"}
		<!--视频认证 开始-->
		{if $_G.user_result.vip_status!=1}
		<div class="user_help alert" style="text-align:left">你还不是VIP会员不能做现场认证。</a>
		<div class="c">
			如要申请成为VIP会员，请点按钮提交到VIP申请页。<input type="button" class="btn-action" onclick="javacript:location.href='/vip/index.html'" value="申请VIP会员"  /><br /><br /></form>

			</div>
		</div>
		{elseif $_G.user_result.scene_status==1}
		<div class="user_help alert">您已经通过了现场认证</b></div>
		{else}
		<div class="user_help alert">如果您需要现场认证，请您到公司地址。
		</div>
		{/if}
		<!--视频认证 结束-->
		
		<!--信用积分 开始-->
		{elseif $_U.query_type=="credit"}
		<div class="user_help" > 
		<strong>信用总得分：</strong> <font size="3" color="#FF0000"><strong>{$_U.user_cache.credit}</strong></font>  {$_U.user_cache.credit|credit}
		</div>
		<table border="0" cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form action="" method="post">
				<tr class="head" >
					<td>积分类型</td>
					<td>积分</td>
                    <td>添加时间</td>
					<td>备注</td>
				</tr>
				{loop module="credit" function="GetLogList" user_id="0" limit="all"}
				<tr >
					<td>{$var.type_name}</td>
					<td>{$var.value} 分</td>
                    <td>{$var.addtime|date_format:"Y-m-d"}</td>
					<td>{$var.remark}</td>
				</tr>
				{/loop}
				<tr>
					<td colspan="4" class="page">
						<div class="list_table_page">{$_U.show_page}</div>
					</td>
				</tr>
			</form>	
		</table>
		<!--信用积分 结束-->
		
		<!--信用积分 开始-->
		{elseif $_U.query_type=="myuser"}
		<div class="user_help" > 
		{list  module="user" function="GetList" var="loop" epage=20  kefu_userid="$_G.user_id" showpage=3 }
			
		<strong>总客户：</strong> {$loop.total} 个
		</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form action="" method="post">
				<tr class="head" >
					<td>用户名</td>
					<td>真实姓名</td>
					<td>性别</td>
					<td>电话</td>
					<td>QQ</td>
					<td>邮箱</td>
					<td>所在地</td>
					<td>操作</td>
				</tr>
					{foreach from="$loop.list" item="item"}
				<tr>
					<td><a href="/u/{$item.user_id}" target="_blank">{$item.username}</a></td>
					<td><a href="/?user&q=code/borrow/myuser&user_id={$item.user_id}">{$item.realname}</a> </td>
					<td>{if $item.sex==1}男{else}女{/if}</td>
					<td>{$item.phone}</td>
					<td>{$item.qq}</td>
					<td>{$item.email}</td>
					<td>{$item.area|area}</td>
					<td><a href="/?user&q=code/attestation/myuser&user_id={$item.user_id}">资料证明</a> | <a href="/?user&q=code/borrow/myuserrepay&user_id={$item.user_id}">还款明细</a></td>
				</tr>
				{/foreach}
				<tr >
					<td colspan="4" class="page">
						<div class="list_table_page">是{$loop.showpage}</div>
					</td>
				</tr>
			</form>	
		</table>
		{/list}
		<!--信用积分 结束-->
		{/if}
</div>
</div>
</div>
</div>
<!--用户中心的主栏目 结束-->
{include file="user_footer.html"}
{literal}
<script language="javascript">
function reurl(){
    var url = location.href; //把当前页面的地址赋给变量 url
    var times = url.split("$"); //分切变量 url 分隔符号为 "$"
    var myDate = new Date();
    var mytime=myDate.getMilliseconds();     //获取当前时间
    if(times[1] != 1){ //如果$后的值不等于1表示没有刷新
        url += "&nowtime="+mytime;
        url += "&$1"; //把变量 url 的值加入 $1
        window.location.href=url;
    }
    if(times[1] == 1){
        window.location.reload();
    }
}
function protocolshow(){
	$("#protocol").dialog({
	    bgiframe: true,
	    resizable: false,
	    height:450,
	    width:500,
	    modal: true,
	    title:'\u6295\u53cb\u5b9d\u7528\u6237\u6388\u6743\u534f\u8bae',
	    overlay: {
	        backgroundColor: '#000',
	        opacity: 0.5
	    },
	    buttons: {
	        '\u5173\u95ed': function() {
	            $(this).dialog('close');
	        }
	    }
	});
}
function tenderTreasure(){
	var frm = document.forms['form1'];
	var username = frm.elements['username'].value;
	var valicode = frm.elements['valicode'].value;
	var protocolcheck = frm.elements['protocolcheck'];
	if(username==''){
		jQuery.jBox.info('\u7528\u6237\u540d\u4e0d\u80fd\u4e3a\u7a7a','\u63d0\u793a');
		return false;
	}
	if(valicode.length<4){
		jQuery.jBox.info('\u9a8c\u8bc1\u7801\u683c\u5f0f\u6709\u8bef','\u63d0\u793a');
		return false;
	}
	if(protocolcheck.checked==false){
		jQuery.jBox.info('\u60a8\u5fc5\u987b\u540c\u610f\u6295\u53cb\u5b9d\u7528\u6237\u6388\u6743\u534f\u8bae\u624d\u80fd\u63d0\u4ea4','\u63d0\u793a');
		return false;
	}
	var submit = function (v, h, f) {
	    if (v == 'ok'){
	    	jQuery.jBox.tip('\u63d0\u4ea4\u4e2d','loading');
	    	frm.submit();
		}
	    return true;
	};
	$.jBox.confirm("\u8bf7\u786e\u8ba4\u60a8\u8f93\u5165\u7684\u6295\u53cb\u5b9d\u7528\u6237\u540d\u662f\u81ea\u5df1\u7684\uff0c\u5e76\u4e14\u8f93\u5165\u65e0\u8bef\uff1f", "\u63d0\u793a", submit);
	return false;
}
</script>
{/literal}
<script src="{$tempdir}/media/js/modal.js"></script>
<script src="{$tempdir}/media/js/tab.js"></script>
<script src="{$tempdir}/media/js/alert.js"></script>
<script src="{$tempdir}/media/js/transition.js"></script>