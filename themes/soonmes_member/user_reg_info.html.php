<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{include file="user_header.html" }
<script type="text/javascript" src="{$tempdir}/media/js/jquery.pstrength.js"></script>
{literal}
<script>
 var childWindow;
		function toQzoneLogin()
		{
			childWindow = 	window.location.href="/api/qqlogin.php";
			
		}
jQuery(function(){  
	 
	jQuery('#password').passwordStrength();

});
</script>
<style>
#passwordStrengthDiv{margin-top:6px;}
.is0{background:url(/data/images/base/progress.png) no-repeat 0 0;}
.is10{background-position:0 -7px;}
.is20{background-position:0 -14px;}
.is30{background-position:0 -21px;}
.is40{background-position:0 -28px;}
.is50{background-position:0 -35px;}
.is60{background-position:0 -42px;}
.is70{background-position:0 -49px;}
.is80{background-position:0 -56px;}
.is90{background-position:0 -63px;}
.is100{background-position:0 -70px;}
</style>
{/literal}
<link href="{$tempdir}/media/css/modal.css" rel="stylesheet" type="text/css" />
<form action="" method="post" name="formUser" onSubmit="return userReg();" id="reg_sub">
<div id="main" class="clearfix">
	<div class="box">
		<div class="box-con">
			<p class="reg-pro">注册步骤：<span>1.填写注册信息</span> > 2.邮箱认证 > 3.上传头像> 4.注册完成</a></p>
			<div class="reg-header"><h3>免费注册</h3><span ><a href="/index.action?user&q=action/login">已有帐号? 登录</a></span></div>
			<ul class="reg-table" >
				<li>
					<div class="reg-l-title">用户名：</div>
					<div class="reg-l-input"><input id="username" name="username" type="text" size="22" maxlength="10" value="" onFocus="this.className='biankuang1';"  onBlur="this.className='biankuang2';checkUsername(this.value);"></div>
					<div class="reg-l-tips" id="username_notice"><span>*</span> 请输入4-10位字符.英文,数字</div>
				</li>
				<li>
					<div class="reg-l-title">密码：</div>
					<div class="reg-l-input"><input id="password" name="password" type="password" size="22" maxlength="20" value="" onFocus="this.className='biankuang1';"  onBlur="this.className='biankuang2';checkPassword(this.value);" ></div>
					 <div id="passwordStrengthDiv" class="is0" style="width:138px;height:7px;overflow:hidden;"></div>    
					<div class="reg-l-tips" id="password_notice"><span>*</span> 请输入6到20位密码,建议英文大小写+数字</div>
				</li>
				<li>
					<div class="reg-l-title">确认密码：</div>
					<div class="reg-l-input"><input id="conform_password" name="confirm_password" type="password" size="22" maxlength="20" value="" onFocus="this.className='biankuang1';"  onBlur="this.className='biankuang2';checkConformPassword(this.value);"></div>
					<div class="reg-l-tips" id="conform_password_notice"><span>*</span> 请重复输入上面的密码</div>
				</li>
				<li>
					<div class="reg-l-title">Email：</div>
					<div class="reg-l-input"><input id="email" name="email" type="text" size="22" maxlength="30" value="" onFocus="this.className='biankuang1';"  onBlur="this.className='biankuang2';checkEmail(this.value);"></div>
					<div class="reg-l-tips" id="email_notice"><span>*</span> 请输入您常用的邮箱地址,会邮箱认证</div>
				</li>
				<li>
					<div class="reg-l-title">真实姓名：</div>
					<div class="reg-l-input"><input id="realname" name="realname" type="text" size="22" maxlength="10" value="" onFocus="this.className='biankuang1';"  onBlur="this.className='biankuang2';checkRealname(this.value);"></div>
					<div class="reg-l-tips" id="realname_notice"><span>*</span> (此处可不填)请填写您的真实姓名</div>
				</li>
				<li>
					<div class="reg-l-title">介绍人：</div>
					<div class="reg-l-input"><input id="invite_username" name="invite_username" type="text" size="22" maxlength="10" value="{$magic.session.reginvite_user_Name}" onFocus="this.className='biankuang1';"  onBlur="this.className='biankuang2';" ></div>
					<div class="reg-l-tips"><span>*</span> (此处可不填)如填写介绍人的本站用户名(非真实姓名)，对方将获得奖励收入.<a href="#" id="infoyq" data-content="如果您申请了VIP并且成功付费，那么您的介绍人可以一次性获得100元的奖励。
每月结算已付费的VIP提成，通过网站充值方式打到您的介绍人的账上。">邀请规则</a></div>
				</li>
				<li class="reg-li"><input type="checkbox" id="dianji" checked="checked" style="position:relative; top:3px; margin-right:5px;">我已阅读并且同意<a href="/data/reg.doc">协议</a></li>
				<li class="reg-li"><input type="submit" id="reg_btn" class="btn-action" value="立即注册" /></li>
			</ul>
			<div style="width:480px">
			
			</div>
		</div>
	</div>
</div>
</form>
{literal}
<script type="text/javascript">
jQuery('#reg_btn').click(function(){
	 if(jQuery('#dianji').attr("checked")){
			jQuery('#reg_sub').submit();
			}
		else{
			alert("请勾选我已阅读并且同意协议");
			 return false;
	 }	

});
</script>
{/literal}
<script type="text/javascript"  src="{$tempdir}/media/js/user2.js"></script>
<script src="{$tempdir}/media/js/tooltip.js"></script>
<script src="{$tempdir}/media/js/popover.js"></script>
{include file="user_footer.html"}