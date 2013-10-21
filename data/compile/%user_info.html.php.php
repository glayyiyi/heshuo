<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
<? $this->magic_include(array('file' => "user_header.html", 'vars' => array()));?>
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/modal.css" rel="stylesheet" type="text/css" />
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/tipswindown.css" rel="stylesheet" type="text/css" />

<!--用户中心的主栏目 开始-->
<div id="main" class="clearfix" style="margin-top:0px;">
<div class="wrap950 ">
	<!--左边的导航 开始-->
	<div class="user_left">
		<? $this->magic_include(array('file' => "user_menu.html", 'vars' => array()));?>
	</div>
	<!--左边的导航 结束-->
	
	<!--右边的内容 开始-->
	<div class="user_right">
		<div class="user_right_menu">
			<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="userpwd" ||  $this->magic_vars['_U']['query_type']=="paypwd" ||  $this->magic_vars['_U']['query_type']=="protection" ||  $this->magic_vars['_U']['query_type']=="getpaypwd" ||  $this->magic_vars['_U']['query_type']=="serialStatusSet"): ?>
			<ul id="tab" class="list-tab clearfix">
				
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="userpwd"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/userpwd">登录密码</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="paypwd" ||  $this->magic_vars['_U']['query_type']=="getpaypwd"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/paypwd">交易密码</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="protection"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/protection">密码保护</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="serialStatusSet"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/serialStatusSet">动态口令设置</a></li>
			</ul>
			<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="reginvite"  ||  $this->magic_vars['_U']['query_type']=="request" ||  $this->magic_vars['_U']['query_type']=="myfriend" ||  $this->magic_vars['_U']['query_type']=="black"||  $this->magic_vars['_U']['query_type']=="ticheng"): ?>
			<ul id="tab" class="list-tab clearfix">
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="reginvite"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/reginvite">邀请好友</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="request"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/request">好友请求</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="myfriend"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/myfriend">我的好友</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="black"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/black">黑名单</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="ticheng"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/ticheng">好友提成</a></li>
			</ul>
			<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="credit"): ?>
			<ul id="tab" class="list-tab clearfix">
			</ul>
			<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="smsorder"): ?>
			<ul id="tab" class="list-tab clearfix">
            <li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="smsorder"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/smsorder">短信订制</a></li>
			</ul>            
			<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="myuser"): ?>
			<ul id="tab" class="list-tab clearfix">
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="myuser"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/myuser">我的客服</a></li>
				<li ><a href="/?user&q=code/borrow/myuser">客户借款</a></li>
				<li ><a href="/?user&q=code/borrow/myuser_account">统计信息</a></li>
			</ul>
			<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="tenderTreasure"): ?>
			<ul id="tab" class="list-tab clearfix">
			<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="tenderTreasure"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/tenderTreasure">投友宝</a></li>
			</ul>
			<? else: ?>
			<ul id="tab" class="list-tab-narrow clearfix">
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="realname"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/realname">实名认证</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="email_status"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/email_status">邮箱认证</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="phone_status"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/phone_status">手机认证</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="video_status"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/video_status">视频认证</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="scene_status"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/scene_status">现场认证</a></li>
				<li ><a href="/?user&q=code/attestation">上传资料证明</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="avatar"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/avatar">头像信息</a></li>
 			</ul>
			<? endif; ?>
		</div>
		
		<div class="user_right_main">
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="avatar"): ?>
		<!--头像 开始-->
		<div class="user_help alert">请上传你网站的头像<br/>* 温馨提示：头像现在有三种，大，中，小</div>
		<div style="width:100%">
		<div style="float:left;padding-left:100px;">
			
			<img  style="border:1px dashed #999;padding:2px;margin-top:60px;" src="<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id'] = '';$_tmp = $this->magic_vars['_G']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/><br/>
			<a href="index.php?user&q=code/user/avatar"><font color="#FF0000">当前用户头像</font></a>

		</div>
		<div style="float:right"> <? 
 require_once(ROOT_PATH.'plugins/avatar/configs.php');
require_once(ROOT_PATH.'plugins/avatar/avatar.class.php');
$objAvatar = new Avatar();
echo $objAvatar->uc_avatar($this->magic_vars['_G']['user_id'], 'virtual');
?></div>
		
		</div>
	
		<!--头像 结束-->
		
		
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="privacy"): ?>
		<div class="user_help">设置个人的隐私</div>
		<form action="" method="post">
		<div class="user_main_title">Home</div>
		<div class="user_right_border">
			<div class="e">好友列表：</div>
			<div class="c">
				<script src="plugins/?q=linkage&nid=yinsi&name=friend&isid=false&value=<? if (!isset($this->magic_vars['_U']['user_privacy']['friend'])) $this->magic_vars['_U']['user_privacy']['friend'] = ''; echo $this->magic_vars['_U']['user_privacy']['friend']; ?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">好友评论：</div>
			<div class="c">
				<script src="plugins/?q=linkage&nid=yinsi&name=friend_comment&isid=false&value=<? if (!isset($this->magic_vars['_U']['user_privacy']['friend_comment'])) $this->magic_vars['_U']['user_privacy']['friend_comment'] = ''; echo $this->magic_vars['_U']['user_privacy']['friend_comment']; ?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">借款列表：</div>
			<div class="c">
				<script src="plugins/?q=linkage&nid=yinsi&name=borrow_list&isid=false&value=<? if (!isset($this->magic_vars['_U']['user_privacy']['borrow_list'])) $this->magic_vars['_U']['user_privacy']['borrow_list'] = ''; echo $this->magic_vars['_U']['user_privacy']['borrow_list']; ?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">投标记录：</div>
			<div class="c">
				<script src="plugins/?q=linkage&nid=yinsi&name=loan_log&isid=false&value=<? if (!isset($this->magic_vars['_U']['user_privacy']['loan_log'])) $this->magic_vars['_U']['user_privacy']['loan_log'] = ''; echo $this->magic_vars['_U']['user_privacy']['loan_log']; ?>"></script>
			</div>
		</div>
			
		
		<div class="user_main_title">站内信/加为好友</div>
		<div class="user_right_border">
			<div class="e">谁可以给我发站内信：</div>
			<div class="c">
				<script src="plugins/?q=linkage&nid=yinsi&name=sent_msg&isid=false&value=<? if (!isset($this->magic_vars['_U']['user_privacy']['sent_msg'])) $this->magic_vars['_U']['user_privacy']['sent_msg'] = ''; echo $this->magic_vars['_U']['user_privacy']['sent_msg']; ?>"></script>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">谁可以向我发好友申请：</div>
			<div class="c">
				<script src="plugins/?q=linkage&nid=yinsi&name=friend_request&isid=false&value=<? if (!isset($this->magic_vars['_U']['user_privacy']['friend_request'])) $this->magic_vars['_U']['user_privacy']['friend_request'] = ''; echo $this->magic_vars['_U']['user_privacy']['friend_request']; ?>"></script>
			</div>
		</div>
		
		
		<div class="user_main_title">黑名单</div>
		<div class="user_right_border">
			<div class="e">谁可以看我的黑名单：</div>
			<div class="c">
				<select name="look_black">
					<option value="0" <? if (!isset($this->magic_vars['_U']['user_privacy']['look_black'])) $this->magic_vars['_U']['user_privacy']['look_black']=''; ;if (  $this->magic_vars['_U']['user_privacy']['look_black']==0): ?> selected="selected"<? endif; ?>>不允许我的好友查看我的黑名单</option>
					<option value="1" <? if (!isset($this->magic_vars['_U']['user_privacy']['look_black'])) $this->magic_vars['_U']['user_privacy']['look_black']=''; ;if (  $this->magic_vars['_U']['user_privacy']['look_black']==1): ?> selected="selected"<? endif; ?>>允许我的好友查看我的黑名单</option>
					<option value="2"<? if (!isset($this->magic_vars['_U']['user_privacy']['look_black'])) $this->magic_vars['_U']['user_privacy']['look_black']=''; ;if (  $this->magic_vars['_U']['user_privacy']['look_black']==2): ?> selected="selected"<? endif; ?>>仅允许我同意的好友查看我的黑名单</option>
				</select>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e">允许黑名单向我发内信：</div>
			<div class="c">
				<input type="radio" name="allow_black_sent" value="1" <? if (!isset($this->magic_vars['_U']['user_privacy']['allow_black_sent'])) $this->magic_vars['_U']['user_privacy']['allow_black_sent']=''; ;if (  $this->magic_vars['_U']['user_privacy']['allow_black_sent']==1): ?> checked="checked"<? endif; ?>/> 允许 <input type="radio" name="allow_black_sent" value="0"   <? if (!isset($this->magic_vars['_U']['user_privacy']['allow_black_sent'])) $this->magic_vars['_U']['user_privacy']['allow_black_sent']='';if (!isset($this->magic_vars['_U']['user_privacy']['allow_black_sent'])) $this->magic_vars['_U']['user_privacy']['allow_black_sent']=''; ;if (  $this->magic_vars['_U']['user_privacy']['allow_black_sent']==0 ||  $this->magic_vars['_U']['user_privacy']['allow_black_sent']==""): ?> checked="checked"<? endif; ?> /> 不允许 
			</div>
		</div>
		<div class="user_right_border">
			<div class="e">允许黑名单向我发送好友请求：</div>
			<div class="c">
				<input type="radio" name="allow_black_request" value="1"  <? if (!isset($this->magic_vars['_U']['user_privacy']['allow_black_request'])) $this->magic_vars['_U']['user_privacy']['allow_black_request']=''; ;if (  $this->magic_vars['_U']['user_privacy']['allow_black_request']==1): ?> checked="checked"<? endif; ?>/> 允许 <input type="radio" name="allow_black_request" value="0" <? if (!isset($this->magic_vars['_U']['user_privacy']['allow_black_request'])) $this->magic_vars['_U']['user_privacy']['allow_black_request']='';if (!isset($this->magic_vars['_U']['user_privacy']['allow_black_request'])) $this->magic_vars['_U']['user_privacy']['allow_black_request']=''; ;if (  $this->magic_vars['_U']['user_privacy']['allow_black_request']==0 ||  $this->magic_vars['_U']['user_privacy']['allow_black_request']==""): ?> checked="checked"<? endif; ?>/> 不允许 
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
		
		
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="userpwd"): ?>
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
		<script>
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
		</script>
		<!--修改登录密码 结束-->
		
<!--  LiuYY 2012-05-31 -->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type'] =="serialStatusSet"): ?>
		<!--修改动态口令状态 开始-->
		
		<form action="" name="form1" method="post" onsubmit="" >
		<div class="user_help alert">动态口令可以确认用户的合法身份，从而在合法身份登录的基础上保障业务业务访问的安全性。</div>
		将动态口令应用于：<br/>
		<? if (!isset($this->magic_vars['_G']['user_result']['serial_id'])) $this->magic_vars['_G']['user_result']['serial_id']=''; ;if (   $this->magic_vars['_G']['user_result']['serial_id'] == ""): ?>
		<font color="red" >您的账号还未绑定动态口令，无法执行相关设置！</font>
		<? endif; ?>
		<div class="user_right_border">
			<div class="e">提现：</div>
			<div class="c">
				<input type="checkbox" name="carryout"  value="1" id="carryout" <? if (!isset($this->magic_vars['_G']['user_result']['serial_id'])) $this->magic_vars['_G']['user_result']['serial_id']=''; ;if (   $this->magic_vars['_G']['user_result']['serial_id'] == ""): ?> disabled="disabled" <? endif; ?> /> 
			</div>
			<div class="e">登录：</div>
			<div class="c">
				<input type="checkbox"  name="login" value="1" id="login" <? if (!isset($this->magic_vars['_G']['user_result']['serial_id'])) $this->magic_vars['_G']['user_result']['serial_id']=''; ;if (   $this->magic_vars['_G']['user_result']['serial_id'] == ""): ?> disabled="disabled" <? endif; ?> /> 
			</div>
			<input type="hidden" id="json_data" value='<? if (!isset($this->magic_vars['_G']['user_result']['serial_status'])) $this->magic_vars['_G']['user_result']['serial_status'] = ''; echo $this->magic_vars['_G']['user_result']['serial_status']; ?>' />	
		</div>
		<input type="hidden" name="action" value="1" />
		<br/>
		<div class="">
			<div class="e"></div>
			请输入动态口令码: <input type="text" maxlength="6" name="uchoncode" <? if (!isset($this->magic_vars['_G']['user_result']['serial_id'])) $this->magic_vars['_G']['user_result']['serial_id']=''; ;if (  $this->magic_vars['_G']['user_result']['serial_id'] == ""): ?> disabled="disabled" <? endif; ?> /> 
			<div class="c">
			<br/>
				<input type="submit"  class="btn-action" name="name"  value="确认提交" size="30" <? if (!isset($this->magic_vars['_G']['user_result']['serial_id'])) $this->magic_vars['_G']['user_result']['serial_id']=''; ;if (   $this->magic_vars['_G']['user_result']['serial_id'] == ""): ?> disabled="disabled" <? endif; ?> /> 
			</div>
		</div>
	
	
		</form>
		<div class="user_right_foot alert">
		* 温馨提示：我们将严格对用户的所有资料进行保密
		</div>
		
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
    </script>
		<!--修改动态口令状态 结束-->		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="paypwd"): ?>
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
		<script>
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
		</script>
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="tenderTreasure"): ?>
		<div class="user_help alert">投友宝-您身边的网贷记账专家，成功绑定后可以在投友宝上多平台自动记账、对账，简单、高效、安全。<a href="http://bbs.cnwdai.com/forum.php?mod=viewthread&tid=10617&extra=page%3D1"  target="_break">【点此查看产品说明】</a></div>
		<? if (!isset($this->magic_vars['_G']['user_result']['forum_accredit'])) $this->magic_vars['_G']['user_result']['forum_accredit']=''; ;if (  $this->magic_vars['_G']['user_result']['forum_accredit']==1): ?>
		您已成功申请了投友宝服务，<a href="http://tyb.cnwdai.com/" target="_break">马上前往投友宝</a>！
		<? else: ?>
		<form action="" name="form1" method="post" onkeydown="if(event.keyCode==13){return false;}">
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
		<? endif; ?>
		<div class="user_right_foot alert">
		* 温馨提示：我们将严格对用户的所有资料进行保密
		</div>
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="getpaypwd"): ?>
		<!--修改安全密码 开始-->
		<? if (!isset($_GET['keyid'])) $_GET['keyid']=''; ;if (  $_GET['keyid']!=""): ?>
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
		<script>
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
		</script>
		
		<? else: ?>
		<form action="" name="form1" method="post" >
		<div class="user_help">请登录邮箱找回</div>
		<div class="user_right_border">
			<div class="l">您的邮箱：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['email'])) $this->magic_vars['_G']['user_result']['email'] = ''; echo $this->magic_vars['_G']['user_result']['email']; ?>
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
		<? endif; ?>
		<div class="user_right_foot alert">
		* 温馨提示：我们将严格对用户的所有资料进行保密
		</div>
        
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="smsorder"): ?>
		<!--短信定制 开始-->
		<form action="" name="form1" method="post" >
		<div class="user_right_border">
			<div class="l">开始时间：</div>
			<div class="c"><? if (!isset($this->magic_vars['_U']['smsuser']['start_time'])) $this->magic_vars['_U']['smsuser']['start_time'] = ''; echo $this->magic_vars['_U']['smsuser']['start_time']; ?></div>
		</div>
		<div class="user_right_border">
			<div class="l">结束时间：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['smsuser']['end_time'])) $this->magic_vars['_U']['smsuser']['end_time'] = ''; echo $this->magic_vars['_U']['smsuser']['end_time']; ?>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">订购类型：</div>
			<div class="c">
				<input name="ordertype" type="radio" value="1_<? if (!isset($this->magic_vars['_U']['apptype']['money_month'])) $this->magic_vars['_U']['apptype']['money_month'] = ''; echo $this->magic_vars['_U']['apptype']['money_month']; ?>" />包月（<? if (!isset($this->magic_vars['_U']['apptype']['money_month'])) $this->magic_vars['_U']['apptype']['money_month'] = ''; echo $this->magic_vars['_U']['apptype']['money_month']; ?>）<input name="ordertype" type="radio" value="2_<? if (!isset($this->magic_vars['_U']['apptype']['money_year'])) $this->magic_vars['_U']['apptype']['money_year'] = ''; echo $this->magic_vars['_U']['apptype']['money_year']; ?>" />包年（<? if (!isset($this->magic_vars['_U']['apptype']['money_year'])) $this->magic_vars['_U']['apptype']['money_year'] = ''; echo $this->magic_vars['_U']['apptype']['money_year']; ?>）
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
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="protection"): ?>
		<!--密码保护 开始-->
		 <form action="" method="post">
		<? if (!isset($this->magic_vars['_U']['answer_type'])) $this->magic_vars['_U']['answer_type']='';if (!isset($this->magic_vars['_G']['user_result']['answer'])) $this->magic_vars['_G']['user_result']['answer']=''; ;if (  $this->magic_vars['_U']['answer_type']=="2" ||  $this->magic_vars['_G']['user_result']['answer'] == ""): ?>
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
		<? else: ?>
		<div class="user_help">您已经设置了密码保护功能，请先输入答案再进行修改。 </div>
		<div class="user_right_border">
			<div class="l">请选择问题：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['question'])) $this->magic_vars['_G']['user_result']['question'] = '';$_tmp = $this->magic_vars['_G']['user_result']['question'];$_tmp = $this->magic_modifier("linkage",$_tmp,"pwd_protection");echo $_tmp;unset($_tmp); ?> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">请输入答案：</div>
			<div class="c">
				<input type="text" name="answer" /> <input type="hidden" name="type" value="1" />
			</div>
		</div>
		
		<? endif; ?>
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
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="reginvite"): ?>
		<div class="user_help alert" style="text-align:left;" > 
			<strong>温馨提示：</strong><br/>
请不要发送邀请信给不熟悉的人士,避免给别人带来不必要的困扰。<br />
请把下边的链接地址发给您的好友，这样您就成了他的上线用户。<br />
		</div>
		<div class="user_right_border">
			<div class="l">邀请链接：</div>
			<div class="c">
				<textarea style="height:100px;width:500px" id="invite"><? if (!isset($this->magic_vars['_G']['weburl'])) $this->magic_vars['_G']['weburl'] = ''; echo $this->magic_vars['_G']['weburl']; ?>/index.php?user&q=going/reginvite&u=<? if (!isset($this->magic_vars['_U']['user_inviteid'])) $this->magic_vars['_U']['user_inviteid'] = ''; echo $this->magic_vars['_U']['user_inviteid']; ?></textarea><br/><input type="button" onclick="doCopy('invite')" class="btn-action" value="复制" />
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
				<? $this->magic_vars['query_type']='GetFriendsInvite';$data = array('var'=>'loop','user_id'=>'0','showpage'=>'3','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetFriendsInvite($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr>
					<td><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
                    <td><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
                    <td><? if (!isset($this->magic_vars['item']['vip_status'])) $this->magic_vars['item']['vip_status']=''; ;if (  $this->magic_vars['item']['vip_status'] == 1): ?>是<? else: ?>否<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['item']['vip_status'])) $this->magic_vars['item']['vip_status']=''; ;if (  $this->magic_vars['item']['vip_status'] == 1): ?>100元<? else: ?>0元<? endif; ?></td>
                    <td><? if (!isset($this->magic_vars['item']['invite_money'])) $this->magic_vars['item']['invite_money'] = ''; echo $this->magic_vars['item']['invite_money']; ?>元</td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr>
					<td colspan="6" class="page">
						<div class="list_table_page"><? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?></div>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
			</form>	
		</table>
		
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
		
		<!--好友请求 结束-->
		
		<!--好友请求 开始-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="request"): ?>
		<table border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form action="" method="post">
				<tr class="head" >
					<td>对方名称</td>
					<td>请求时间</td>
					<td>请求说明</td>
					<td>操作</td>
				</tr>
				<? $this->magic_vars['query_type']='GetFriendsRlist';$data = array('var'=>'loop','user_id'=>'0','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetFriendsRlist($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['showpage'] =  show_pages($this->magic_vars['magic_result']);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr >
					<td><a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
					<td><? if (!isset($this->magic_vars['item']['content'])) $this->magic_vars['item']['content'] = ''; echo $this->magic_vars['item']['content']; ?></td>
					<td><a href="javascript:void(0)" onclick='tipsWindown("加为好友","url:get?/?user&q=code/user/raddfriend&username=<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>",400,230,"true","","true","text");'>加为好友</a>  <a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/delfriend&username=<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>">删除</a> </td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr >
					<td colspan="4" class="page">
						<div class="list_table_page"><? if (!isset($this->magic_vars['loop']['show_page'])) $this->magic_vars['loop']['show_page'] = ''; echo $this->magic_vars['loop']['show_page']; ?></div>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
			</form>	
		</table>
		<!--好友请求 结束-->
		
		<!--我的好友 开始-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="myfriend"): ?>
		
		<div class="user_main_title" style="height:30px; padding-top:7px;"> 
		
		&nbsp; &nbsp; &nbsp; 用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>" /> <input value="搜索" type="button" onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/publish')"  />
		</div>
		
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form action="" method="post">
				<tr class="head" >
					<td>对方名称</td>
					<td>加入时间</td>
					<td>好友说明</td>
					<td>操作</td>
				</tr>
				<? $this->magic_vars['query_type']='GetFriendsList';$data = array('var'=>'loop','user_id'=>'0','status'=>'1','showpage'=>'3','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetFriendsList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr >
					<td><a href="/u/<? if (!isset($this->magic_vars['item']['friends_userid'])) $this->magic_vars['item']['friends_userid'] = ''; echo $this->magic_vars['item']['friends_userid']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['friend_username'])) $this->magic_vars['item']['friend_username'] = ''; echo $this->magic_vars['item']['friend_username']; ?></a></td>
					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
					<td><? if (!isset($this->magic_vars['item']['content'])) $this->magic_vars['item']['content'] = '';$_tmp = $this->magic_vars['item']['content'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
					<td><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/delfriend&username=<? if (!isset($this->magic_vars['item']['friend_username'])) $this->magic_vars['item']['friend_username'] = ''; echo $this->magic_vars['item']['friend_username']; ?>">删除</a>  <a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/blackfriend&username=<? if (!isset($this->magic_vars['item']['friend_username'])) $this->magic_vars['item']['friend_username'] = ''; echo $this->magic_vars['item']['friend_username']; ?>">设为黑名单</a></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr>
					<td colspan="4" class="page">
						<div class="list_table_page"><? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?></div>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
			</form>	
		</table>
		<!--我的好友 结束-->
<script>
	var url = "<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type'] = ''; echo $this->magic_vars['_U']['query_type']; ?>";
		
		function sousuo(){
			var _url = "";
			var username = jQuery("#username").val();
			if (username!=null){
				 _url += "&username="+username;
			}
			location.href=url+_url;
		}
</script>

		
		<!--黑名单 开始-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="black"): ?>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form action="" method="post">
				<tr class="head" >
					<td>对方名称</td>
					<td>操作</td>
				</tr>
				<? $this->magic_vars['query_type']='GetFriendsList';$data = array('var'=>'loop','user_id'=>'0','status'=>'2','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetFriendsList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['showpage'] =  show_pages($this->magic_vars['magic_result']);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr>
					<td><a href="/u/<? if (!isset($this->magic_vars['item']['friends_userid'])) $this->magic_vars['item']['friends_userid'] = ''; echo $this->magic_vars['item']['friends_userid']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['friend_username'])) $this->magic_vars['item']['friend_username'] = ''; echo $this->magic_vars['item']['friend_username']; ?></a></td>
					<td><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/delfriend&username=<? if (!isset($this->magic_vars['item']['friend_username'])) $this->magic_vars['item']['friend_username'] = ''; echo $this->magic_vars['item']['friend_username']; ?>">删除</a>  <a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/readdfriend&username=<? if (!isset($this->magic_vars['item']['friend_username'])) $this->magic_vars['item']['friend_username'] = ''; echo $this->magic_vars['item']['friend_username']; ?>">重新加为好友</a></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr>
					<td colspan="4" class="page">
						<div class="list_table_page"><? if (!isset($this->magic_vars['loop']['show_page'])) $this->magic_vars['loop']['show_page'] = ''; echo $this->magic_vars['loop']['show_page']; ?></div>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
			</form>	
		</table>
		<!--黑名单 结束-->
		<!-- 提成开始-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="ticheng"): ?>
		<div class="user_main_title alert" style="height:60px; padding-top:7px;"> 
		</div>

		<table border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
				<tr class="head" >
					<td>时间</td>
					<td>投资金额</td>
				</tr>
				<? $this->magic_vars['query_type']='GetTiChengList';$data = array('var'=>'loop','status'=>'0','user_id'=>'0','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetTiChengList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['showpage'] =  show_pages($this->magic_vars['magic_result']);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr >
					<td><? if (!isset($this->magic_vars['item']['addtimes'])) $this->magic_vars['item']['addtimes'] = ''; echo $this->magic_vars['item']['addtimes']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<? unset($_magic_vars); ?>
		</table>
		<!--提成 结束-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="realname"): ?>
		<!--修改登录密码 开始-->
		<? if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status']=''; ;if (  $this->magic_vars['_G']['user_result']['real_status']==1): ?> 
		<div class="user_help alert">恭喜您已经通过了实名认证，如要修改请跟客服联系，谢谢！</div>
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">用户名：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?> 
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">真实姓名：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['realname'])) $this->magic_vars['_G']['user_result']['realname'] = ''; echo $this->magic_vars['_G']['user_result']['realname']; ?>
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">性 别 ：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['sex'])) $this->magic_vars['_G']['user_result']['sex']=''; ;if (  $this->magic_vars['_G']['user_result']['sex']==1): ?>男<? else: ?>女<? endif; ?> 
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">民 族：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['nation'])) $this->magic_vars['_G']['user_result']['nation'] = '';$_tmp = $this->magic_vars['_G']['user_result']['nation'];$_tmp = $this->magic_modifier("linkage",$_tmp,"nation/value");echo $_tmp;unset($_tmp); ?>
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">出生日期：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['birthday'])) $this->magic_vars['_G']['user_result']['birthday'] = '';$_tmp = $this->magic_vars['_G']['user_result']['birthday'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">证件类别：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['card_type'])) $this->magic_vars['_G']['user_result']['card_type'] = '';$_tmp = $this->magic_vars['_G']['user_result']['card_type'];$_tmp = $this->magic_modifier("linkage",$_tmp,"card_type");echo $_tmp;unset($_tmp); ?>
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">证件号码：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['card_id'])) $this->magic_vars['_G']['user_result']['card_id'] = '';$_tmp = $this->magic_vars['_G']['user_result']['card_id'];$_tmp = $this->magic_modifier("truncate",$_tmp,"14");echo $_tmp;unset($_tmp); ?>****
			</div>
		</div>
		
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">籍贯：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['area'])) $this->magic_vars['_G']['user_result']['area'] = '';$_tmp = $this->magic_vars['_G']['user_result']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"");echo $_tmp;unset($_tmp); ?>
			</div>
		</div>
		<div class="user_right_border" style="background: #E8EEE5">
			<div class="l">身份证图片：</div>
			<div class="c">
				<a href="<? if (!isset($this->magic_vars['_G']['user_result']['card_pic1'])) $this->magic_vars['_G']['user_result']['card_pic1'] = ''; echo $this->magic_vars['_G']['user_result']['card_pic1']; ?>" target="_blank">正面</a> | <a href="<? if (!isset($this->magic_vars['_G']['user_result']['card_pic2'])) $this->magic_vars['_G']['user_result']['card_pic2'] = ''; echo $this->magic_vars['_G']['user_result']['card_pic2']; ?>" target="_blank">反面</a>
			</div>
		</div>
		<? else: ?>
		
		<form action="" name="form1" method="post" onsubmit="return check_form()" enctype="multipart/form-data">
		<div class="user_help alert">注意：请认真填写以下的内容，一旦通过实名认证以下信息将不能修改。<? if (!isset($this->magic_vars['_G']['user_result']['content'])) $this->magic_vars['_G']['user_result']['content'] = ''; echo $this->magic_vars['_G']['user_result']['content']; ?></div>
		<div class="user_right_border">
			<div class="l">用户名：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">真实姓名：</div>
			<div class="c">
				<input  name="realname" value="<? if (!isset($this->magic_vars['_G']['user_result']['realname'])) $this->magic_vars['_G']['user_result']['realname'] = ''; echo $this->magic_vars['_G']['user_result']['realname']; ?>" /><font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">性 别 ：</div>
			<div class="c">
				<input type="radio" name="sex" value="1" <? if (!isset($this->magic_vars['_G']['user_result']['sex'])) $this->magic_vars['_G']['user_result']['sex']='';if (!isset($this->magic_vars['_G']['user_result']['sex'])) $this->magic_vars['_G']['user_result']['sex']=''; ;if (  $this->magic_vars['_G']['user_result']['sex']=="1" ||  $this->magic_vars['_G']['user_result']['sex']==""): ?>checked="checked" <? endif; ?> />男 <input type="radio" name="sex" value="2"  <? if (!isset($this->magic_vars['_G']['user_result']['sex'])) $this->magic_vars['_G']['user_result']['sex']=''; ;if (  $this->magic_vars['_G']['user_result']['sex']=="2"): ?>checked="checked" <? endif; ?> />女 <font color="#FF0000">*</font> 
				
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">民 族：</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&nid=nation&name=nation&value=<? if (!isset($this->magic_vars['_G']['user_result']['nation'])) $this->magic_vars['_G']['user_result']['nation'] = ''; echo $this->magic_vars['_G']['user_result']['nation']; ?>" ></script> <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">出生日期：</div>
			<div class="c">
				<input type="text" name="birthday" value="<? if (!isset($this->magic_vars['_G']['user_result']['birthday'])) $this->magic_vars['_G']['user_result']['birthday'] = '';$_tmp = $this->magic_vars['_G']['user_result']['birthday'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" onclick="change_picktime()" />  <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">证件类别：</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&nid=card_type&name=card_type&isid=false&value=<? if (!isset($this->magic_vars['_G']['user_result']['card_type'])) $this->magic_vars['_G']['user_result']['card_type'] = ''; echo $this->magic_vars['_G']['user_result']['card_type']; ?>" ></script> <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">证件号码：</div>
			<div class="c">
				<input type="text" name="card_id" value="<? if (!isset($this->magic_vars['_G']['user_result']['card_id'])) $this->magic_vars['_G']['user_result']['card_id'] = ''; echo $this->magic_vars['_G']['user_result']['card_id']; ?>" />  <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">籍贯：</div>
			<div class="c">
                <script src="/plugins/index.php?q=area&area=<? if (!isset($this->magic_vars['_G']['user_result']['area'])) $this->magic_vars['_G']['user_result']['area'] = ''; echo $this->magic_vars['_G']['user_result']['area']; ?>" type="text/javascript" ></script> <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">身份证正面上传：</div>
			<div class="c">
				<input type="file" name="card_pic1" size="20" class="input_border"/> <? if (!isset($this->magic_vars['_G']['user_result']['card_pic1'])) $this->magic_vars['_G']['user_result']['card_pic1']=''; ;if (  $this->magic_vars['_G']['user_result']['card_pic1']!=""): ?><a href="./<? if (!isset($this->magic_vars['_G']['user_result']['card_pic1'])) $this->magic_vars['_G']['user_result']['card_pic1'] = ''; echo $this->magic_vars['_G']['user_result']['card_pic1']; ?>" target="_blank" title="有图片"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/ico_yes.gif" border="0"  /></a><? endif; ?>  <font color="#FF0000">*</font> 
           </div>
		</div>
		
	<div class="user_right_border">
			<div class="l">身份证背面上传：</div>
			<div class="c">
				<input type="file" name="card_pic2" size="20" class="input_border"/> <? if (!isset($this->magic_vars['_G']['user_result']['card_pic2'])) $this->magic_vars['_G']['user_result']['card_pic2']=''; ;if (  $this->magic_vars['_G']['user_result']['card_pic2']!=""): ?><a href="./<? if (!isset($this->magic_vars['_G']['user_result']['card_pic2'])) $this->magic_vars['_G']['user_result']['card_pic2'] = ''; echo $this->magic_vars['_G']['user_result']['card_pic2']; ?>" target="_blank" title="有图片"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/ico_yes.gif" border="0"  /></a><? endif; ?>  <font color="#FF0000">*</font> 
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="e"></div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['use_money'])) $this->magic_vars['_G']['user_result']['use_money']=''; ;if (  $this->magic_vars['_G']['user_result']['use_money']>=0): ?><input type="submit"  class="btn-action" name="name"  value="确认提交" size="30" /> <? else: ?> 您的余额为<? if (!isset($this->magic_vars['_G']['user_result']['use_money'])) $this->magic_vars['_G']['user_result']['use_money'] = ''; echo $this->magic_vars['_G']['user_result']['use_money']; ?>,请先 <a href="/?user&q=code/account/recharge_new"><font color="#FF0000">充值</font></a>。<? endif; ?>
			</div>
		</div>
		</form><? endif; ?>
		<div class="user_right_foot alert">
		* 温馨提示：我们将对用户的所有资料进行严格的保密
		</div>
		<script>
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
		</script>
		<!--修改登录密码 结束-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="email_status"): ?>
		<!--邮箱认证 开始-->
		<? if (!isset($this->magic_vars['_G']['user_result']['email_status'])) $this->magic_vars['_G']['user_result']['email_status']=''; ;if (  $this->magic_vars['_G']['user_result']['email_status']==1): ?>
		<div class="user_help alert">您的邮箱已经通过认证：<b><? if (!isset($this->magic_vars['_G']['user_result']['email'])) $this->magic_vars['_G']['user_result']['email'] = ''; echo $this->magic_vars['_G']['user_result']['email']; ?></b> </div>
		
		<? else: ?>
		<div class="user_help alert">您的邮箱还没通过认证：<b><? if (!isset($this->magic_vars['_G']['user_result']['email'])) $this->magic_vars['_G']['user_result']['email'] = ''; echo $this->magic_vars['_G']['user_result']['email']; ?></b></div>
		<div class="user_right_border">
			<div class="c">
				<form action="" method="post" onsubmit="this.elements['submit'].disabled='disabled';return true;">
				重设邮箱：<input type="text" name="email" value="<? if (!isset($this->magic_vars['_G']['user_result']['email'])) $this->magic_vars['_G']['user_result']['email'] = ''; echo $this->magic_vars['_G']['user_result']['email']; ?>" />  <input type="submit"  class="btn-action" name="submit" value="重新激活"  />
				</form>
			</div>
		</div>
		<? endif; ?>
		<!--邮箱认证 结束-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="phone_status"): ?>
		<!--邮箱认证 开始-->
		<? if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status']=''; ;if (  $this->magic_vars['_G']['user_result']['phone_status']==1): ?>
		<div class="user_help alert">您的手机已经通过认证，认证的手机号码为：<b><? if (!isset($this->magic_vars['_G']['user_result']['phone'])) $this->magic_vars['_G']['user_result']['phone'] = '';$_tmp = $this->magic_vars['_G']['user_result']['phone'];$_tmp = $this->magic_modifier("truncate",$_tmp,"9");echo $_tmp;unset($_tmp); ?>**</b></div>

		<? if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status']=''; ;elseif (  $this->magic_vars['_G']['user_result']['phone_status']==2): ?>
		<div class="user_help alert">您的手机没有通过认证，请重新提交正确的手机号码</b></div>
			<div class="user_right_border">
			<div class="c">
				<form action="" method="post">
				手机号码：<input type="text" name="phone" id="phone" value="<? if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status']='';if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status']=''; ;if (  $this->magic_vars['_G']['user_result']['phone_status']==0 ||  $this->magic_vars['_G']['user_result']['phone_status']==1): ?><? if (!isset($this->magic_vars['_G']['user_result']['phone'])) $this->magic_vars['_G']['user_result']['phone'] = ''; echo $this->magic_vars['_G']['user_result']['phone']; ?><? endif; ?>" />
				<input type="submit"  class="btn-action" value="确认提交" class="subphone" /><br/><br/>
				</form>
			</div>
		</div>
        <script type="text/javascript">
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
		</script>
		<? else: ?>
		<div class="user_help alert">
		<? if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status']=''; ;if (  $this->magic_vars['_G']['user_result']['phone_status']!=0): ?>您的手机客服正在审核中，请耐心等待。手机号：<font color="#FF0000"><? if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status'] = ''; echo $this->magic_vars['_G']['user_result']['phone_status']; ?></font>。
		<? else: ?>您的手机还没通过认证。
					<div class="user_right_border">
			<div class="c">
				<form action="" method="post" name="form1">
				手机号码：<input type="text" name="phone" id="phone" maxlength="11"  value="<? if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status']='';if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status']=''; ;if (  $this->magic_vars['_G']['user_result']['phone_status']==0 ||  $this->magic_vars['_G']['user_result']['phone_status']==1): ?><? if (!isset($this->magic_vars['_G']['user_result']['phone'])) $this->magic_vars['_G']['user_result']['phone'] = ''; echo $this->magic_vars['_G']['user_result']['phone']; ?><? endif; ?>" />
				<input type="button" value="获取验证码" id="getCode" onclick="getcode()" /><br/><br/>
				&nbsp;&nbsp;验证码：<input type="text" name="code" maxlength="6" /><br/><br/>
				<input type="submit"  class="btn-action" value="提交验证" id="sub-f" /></form>
			</div>
		</div>
		
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
		
		<? endif; ?>
		</div>
		<? endif; ?>
		<!--邮箱认证 结束-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="video_status"): ?>
		<!--视频认证 开始-->

                <? if (!isset($this->magic_vars['_G']['user_result']['vedio_status'])) $this->magic_vars['_G']['user_result']['vedio_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vedio_status']==1): ?>
		<div class="user_help alert">您已经通过了视频认证</div>
		<? else: ?>
		<div class="user_help alert">
		<? if (!isset($this->magic_vars['_G']['user_result']['video_status'])) $this->magic_vars['_G']['user_result']['video_status']=''; ;if (  $this->magic_vars['_G']['user_result']['video_status']!=0): ?>您的视频认证已经提交，客服人员会及时的跟你联系。</font>。<? else: ?>欢迎进行视频认证。<div class="user_right_border">
			<div class="c">
				<form action="" method="post">
                                    如果你需要视频认证，请点按钮提交。<input type="submit"  class="btn-action" value="提交申请" name="submit" /><br />
                 </form>
			</div>
		</div><? endif; ?></div>
		<? endif; ?>
		<!--视频认证 结束-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="scene_status"): ?>
		<!--视频认证 开始-->
		<? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;if (  $this->magic_vars['_G']['user_result']['vip_status']!=1): ?>
		<div class="user_help alert" style="text-align:left">你还不是VIP会员不能做现场认证。</a>
		<div class="c">
			如要申请成为VIP会员，请点按钮提交到VIP申请页。<input type="button" class="btn-action" onclick="javacript:location.href='/vip/index.html'" value="申请VIP会员"  /><br /><br /></form>

			</div>
		</div>
		<? if (!isset($this->magic_vars['_G']['user_result']['scene_status'])) $this->magic_vars['_G']['user_result']['scene_status']=''; ;elseif (  $this->magic_vars['_G']['user_result']['scene_status']==1): ?>
		<div class="user_help alert">您已经通过了现场认证</b></div>
		<? else: ?>
		<div class="user_help alert">如果您需要现场认证，请您到公司地址。
		</div>
		<? endif; ?>
		<!--视频认证 结束-->
		
		<!--信用积分 开始-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="credit"): ?>
		<div class="user_help" > 
		<strong>信用总得分：</strong> <font size="3" color="#FF0000"><strong><? if (!isset($this->magic_vars['_U']['user_cache']['credit'])) $this->magic_vars['_U']['user_cache']['credit'] = ''; echo $this->magic_vars['_U']['user_cache']['credit']; ?></strong></font>  <? if (!isset($this->magic_vars['_U']['user_cache']['credit'])) $this->magic_vars['_U']['user_cache']['credit'] = '';$_tmp = $this->magic_vars['_U']['user_cache']['credit'];$_tmp = $this->magic_modifier("credit",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</div>
		<table border="0" cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form action="" method="post">
				<tr class="head" >
					<td>积分类型</td>
					<td>积分</td>
                    <td>添加时间</td>
					<td>备注</td>
				</tr>
				<? $this->magic_vars['query_type']='GetLogList';$data = array('limit'=>'all','user_id'=>$this->magic_vars['_G']['user_id']);$default = '';  include_once(ROOT_PATH.'modules/credit/credit.class.php');$this->magic_vars['magic_result'] = creditClass::GetLogList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<tr >
					<td><? if (!isset($this->magic_vars['var']['type_name'])) $this->magic_vars['var']['type_name'] = ''; echo $this->magic_vars['var']['type_name']; ?></td>
					<td><? if (!isset($this->magic_vars['var']['value'])) $this->magic_vars['var']['value'] = ''; echo $this->magic_vars['var']['value']; ?> 分</td>
                    <td><? if (!isset($this->magic_vars['var']['addtime'])) $this->magic_vars['var']['addtime'] = '';$_tmp = $this->magic_vars['var']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
					<td><? if (!isset($this->magic_vars['var']['remark'])) $this->magic_vars['var']['remark'] = ''; echo $this->magic_vars['var']['remark']; ?></td>
				</tr>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
				<tr>
					<td colspan="4" class="page">
						<div class="list_table_page"><? if (!isset($this->magic_vars['_U']['show_page'])) $this->magic_vars['_U']['show_page'] = ''; echo $this->magic_vars['_U']['show_page']; ?></div>
					</td>
				</tr>
			</form>	
		</table>
		<!--信用积分 结束-->
		
		<!--信用积分 开始-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="myuser"): ?>
		<div class="user_help" > 
		<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','epage'=>'20','kefu_userid'=>$this->magic_vars['_G']['user_id'],'showpage'=>'3');$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
			
		<strong>总客户：</strong> <? if (!isset($this->magic_vars['loop']['total'])) $this->magic_vars['loop']['total'] = ''; echo $this->magic_vars['loop']['total']; ?> 个
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
					<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr>
					<td><a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
					<td><a href="/?user&q=code/borrow/myuser&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>"><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></a> </td>
					<td><? if (!isset($this->magic_vars['item']['sex'])) $this->magic_vars['item']['sex']=''; ;if (  $this->magic_vars['item']['sex']==1): ?>男<? else: ?>女<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone'] = ''; echo $this->magic_vars['item']['phone']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['qq'])) $this->magic_vars['item']['qq'] = ''; echo $this->magic_vars['item']['qq']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email'] = ''; echo $this->magic_vars['item']['email']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['area'])) $this->magic_vars['item']['area'] = '';$_tmp = $this->magic_vars['item']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
					<td><a href="/?user&q=code/attestation/myuser&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>">资料证明</a> | <a href="/?user&q=code/borrow/myuserrepay&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>">还款明细</a></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr >
					<td colspan="4" class="page">
						<div class="list_table_page">是<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?></div>
					</td>
				</tr>
			</form>	
		</table>
		<? unset($_magic_vars); ?>
		<!--信用积分 结束-->
		<? endif; ?>
</div>
</div>
</div>
</div>
<!--用户中心的主栏目 结束-->
<? $this->magic_include(array('file' => "user_footer.html", 'vars' => array()));?>

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

<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/modal.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/tab.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/alert.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/transition.js"></script>