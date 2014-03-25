<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{include file="user_header.html" }
<script type="text/javascript"
	src="{$tempdir}/media/js/jquery.pstrength.js"></script>
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
#passwordStrengthDiv {
	margin-top: 6px;
}

.is0 {
	background: url(/data/images/base/progress.png) no-repeat 0 0;
}

.is10 {
	background-position: 0 -7px;
}

.is20 {
	background-position: 0 -14px;
}

.is30 {
	background-position: 0 -21px;
}

.is40 {
	background-position: 0 -28px;
}

.is50 {
	background-position: 0 -35px;
}

.is60 {
	background-position: 0 -42px;
}

.is70 {
	background-position: 0 -49px;
}

.is80 {
	background-position: 0 -56px;
}

.is90 {
	background-position: 0 -63px;
}

.is100 {
	background-position: 0 -70px;
}
</style>
{/literal}
<link href="{$tempdir}/media/css/modal.css" rel="stylesheet"
	type="text/css" />
<form action="" method="post" name="formUser"
	onSubmit="return userReg();" id="reg_sub">
	<div id="main" class="clearfix">

		<div class="content">
			<div class="register clearfix m_b_25">

				<div class="hd m_b_20">
					注册 <font size="2" color="black">君和会是一群中高收入客户组成的私密投资圈子，欢迎您的加入，目前开放注册中</font><s
						class="tip"></s>
				</div>
				<div class="bg clearfix">
					<div class="fl regTB">
						<table width="100%" class="tb_reg m_b_20">

							<!-- 							<tr> -->
							<!-- 								<th>邮 箱：</th> -->
							<!-- 								<td><div class="input_style01"> -->
							<!-- 										<span class="r"><input id="email" name="email" type="text" -->
							<!-- 											size="22" maxlength="30" value="" -->
							<!-- 											onFocus="this.className='biankuang1';" -->
							<!-- 											onBlur="this.className='biankuang2';checkEmail(this.value);"/> -->
							<!-- 										</span> -->

							<!-- 									</div> -->
							<!-- 									<div class="reg-l-tips" id="email_notice"> -->
							<!-- 										<span>*</span> 请输入您常用的邮箱地址,进行邮箱认证 -->
							<!-- 									</div></td> -->
							<!-- 							</tr> -->
							<!-- 							<tr> -->
							<!-- 								<th>手机：</th> -->
							<!-- 								<td> -->
							<!-- 									<div class="input_style01"> -->
							<!-- 										<span class="r"><input id="phone" name="phone" type="text" size="22" -->
							<!-- 											value="" -->
							<!-- 											onFocus="this.className='biankuang1';" -->
							<!-- 											onBlur="this.className='biankuang2';"/> -->
							<!-- 										</span> -->
							<!-- 									</div> -->

							<!-- 								</td> -->
							<!-- 							</tr> -->
							<!-- 							<tr> -->
							<!-- 								<th>真实姓名：</th> -->
							<!-- 								<td> -->
							<!-- 									<div class="input_style01"> -->
							<!-- 									<span class="r"> -->
							<!-- 										<input id="realname" name="realname" type="text" size="22" -->
							<!-- 											maxlength="10" value="" -->
							<!-- 											onFocus="this.className='biankuang1';" -->
							<!-- 											onBlur="this.className='biankuang2';"/> -->
							<!-- 									</span> -->
							<!-- 									</div> -->

							<!-- 								</td> -->
							<!-- 							</tr> -->
							
							<!--  <tr>
								<th style="vertical-align: top;">邀请码：</th>

								<td><div class="input_style01">
										<span class="r"> <input id="invite_userid"
											name="invite_userid" type="text" size="22" maxlength="10"
											value="{$magic.session.reginvite_user_id}"
											onFocus="this.className='biankuang1';"
											onBlur="this.className='biankuang2';checkInviteCode(this.value);" />
										</span>

									</div>
									<div class="reg-l-tips" id="invitecode_notice">
										<span>*</span> 请输入邀请码,无邀请码不能注册
									</div>
									</td>
							</tr>-->
							
							
							<tr>
								<th>用户名：</th>
								<td><div class="input_style01">
										<span class="r"><input id="username" name="username"
											type="text" size="22" maxlength="20" value=""
											onFocus="this.className='biankuang1';"
											onBlur="this.className='biankuang2';checkUsername(this.value);" />
										</span>
									</div>
									<div class="reg-l-tips" id="username_notice">
										<span>*</span> 请输入4-10位字符.英文,数字
									</div></td>

							</tr>
							<tr>

								<th>密 码：</th>
								<td><div class="input_style01">
										<span class="r"><input id="password" name="password"
											type="password" size="22" maxlength="20" value=""
											onFocus="this.className='biankuang1';"
											onBlur="this.className='biankuang2';checkPassword(this.value);" />
										</span>
									</div>
									<div id="passwordStrengthDiv" class="is0"
										style="width: 138px; height: 7px; overflow: hidden;"></div>
									<div class="reg-l-tips" id="password_notice">
										<span>*</span> 请输入6到20位密码,建议英文大小写+数字
									</div></td>
								</li>
							
							
							<tr>
								<th>确认密码：</th>
								<td><div class="input_style01">
										<span class="r"><input id="conform_password"
											name="confirm_password" type="password" size="22"
											maxlength="20" value=""
											onFocus="this.className='biankuang1';"
											onBlur="this.className='biankuang2';checkConformPassword(this.value);" />
										</span>
									</div>
									<div class="reg-l-tips" id="conform_password_notice">
										<span>*</span> 请重复输入上面的密码
									</div></td>
							</tr>


							


							<!-- <tr> -->
							<!--  <th style="vertical-align: top;">验证码：</th>-->

							<!-- 								<td><div class="input_style01 m_r_10"> -->
							<!-- 										<span class="r"><input name="valicode" type="text" size="11" -->
							<!-- 											maxlength="4" />&nbsp;<img src="plugins/index.php?q=imgcode" -->
							<!-- 											alt="看不清换一张？" -->
							<!-- 											onClick="this.src='plugins/index.php?q=imgcode&t=' + Math.random();" -->
							<!-- 											align="absmiddle" style="cursor: pointer" /></span> -->
							<!-- 									</div></td> -->
							<!-- 							</tr> -->

							<!-- 				<li> -->
							<!-- 					<div class="reg-l-title">真实姓名：</div> -->
							<!--  <div class="reg-l-input"><input id="realname" name="realname" type="text" size="22" maxlength="10" value="" onFocus="this.className='biankuang1';"  onBlur="this.className='biankuang2';checkRealname(this.value);"></div>-->
							<!-- 					<div class="reg-l-tips" id="realname_notice"><span>*</span> (此处可不填)请填写您的真实姓名</div> -->
							<!-- 				</li> -->
							<!-- 				<li> -->
							<!-- 					<div class="reg-l-title">介绍人：</div> -->
							<!--  <div class="reg-l-input"><input id="invite_username" name="invite_username" type="text" size="22" maxlength="10" value="{$magic.session.reginvite_user_Name}" onFocus="this.className='biankuang1';"  onBlur="this.className='biankuang2';" ></div>-->
							<!-- 					<div class="reg-l-tips"><span>*</span> (此处可不填)如填写介绍人的本站用户名(非真实姓名)，对方将获得奖励收入.<a href="#" id="infoyq" data-content="如果您申请了VIP并且成功付费，那么您的介绍人可以一次性获得100元的奖励。 -->
							<!-- 每月结算已付费的VIP提成，通过网站充值方式打到您的介绍人的账上。">邀请规则</a></div> -->
							<!-- 				</li> -->
							<!--  <li class="reg-li"><input type="checkbox" id="dianji" checked="checked" style="position:relative; top:3px; margin-right:5px;">我已阅读并且同意<a href="/data/reg.doc">协议</a></li>-->
							<!-- 				<li class="reg-li"><input type="submit" id="reg_btn" class="btn-action" value="立即注册" /></li> -->



						</table>
						<!--  	<p style="padding-left: 30px; margin-bottom: 20px;">-->
						<!-- 							<input type="checkbox" id="dianji" checked="checked"/>我已阅读并且同意助贷网-个人信用贷款 -->
						<!-- 							小额贷款 投资理财 企业融资 的 <a href="/data/reg.doc">使用协议</a> -->
						<!-- 						</p> -->
						<p style="padding-left: 110px;">
							<input type="submit" id="reg_btn" class="btnnew btn_login"
								value="注 册" />
						</p>
					</div>
					<div class="fl regInfo">
						<h3 class="tit">您还没有注册?</h3>
						<ol class="list m_b_40">
							<!-- 							<li>1、帮助他人 快乐自己 收获利息</li> -->
							<!-- 							<li>2、助您创业 资金周转 分期偿还</li> -->
							<li>1、收益稳定可靠回报高</li>
							<li>2、交易安全快捷有保障</li>
							<li>3、私密投资结交实力朋友</li>
						</ol>
						<p style="padding-left: 25px;">
							<label class="f_14 m_r_10">已有账号？</label> <a
								href="/index.action?user&q=action/login"
								class="ico_sprite btnnew btn_view_02">直接登录</a>
						</p>
					</div>

				</div>
			</div>
		</div>
	</div>

</form>
{literal}
<script type="text/javascript"> 
//By Glay jQuery('#reg_btn').click(function(){
// 	 if(jQuery('#dianji').attr("checked")){
// 			jQuery('#reg_sub').submit();
// 			}
// 		else{
// 			alert("请勾选我已阅读并且同意协议");
// 			 return false;
// 	 }	

// });
</script>
{/literal}
<script type="text/javascript" src="{$tempdir}/media/js/user2.js"></script>
<script src="{$tempdir}/media/js/tooltip.js"></script>
<script src="{$tempdir}/media/js/popover.js"></script>
{include file="user_footer.html"}
