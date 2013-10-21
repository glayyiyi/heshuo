<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{include file="user_header.html"}
<link href="{$tempdir}/media/css/modal.css" rel="stylesheet" type="text/css" />
<div id="main" class="clearfix">

			<form action="" method="post" name="formUser" >
			<div class="user_action_reg_form forgetppwd">
				{if $_U.updatepwd_msg!=""}
					<br /><font color="#FF0000">{$_U.updatepwd_msg}</font><br /><br /><br />
					<a href="index.php?user&q=action/login">返回登录</a>
				{else}
				<div class="alert alert-info"> <a class="close" data-dismiss="alert">x</a>{if $_U.update_msg==""}请重新设置你的登录密码{else}{$_U.update_msg}{/if}</div> <br />
				<table>
				<tr style="height:30px"><td>用户名：</td><td><strong style="font-size:16px;">{$_U.user_result.username}</strong></td></tr>
				<tr style="height:30px"><td>密码：</td><td><input type="password" maxLength=15  class="user_aciton_input1" name=password id=password /></td></tr>
				<tr style="height:30px"><td>确认密码：</td><td><input type="password"  maxLength=15  class="user_aciton_input1" name=confirm_password id=confirm_password /></td></tr>
				<tr style="height:30px"><td><input type="submit" value="确认" class="btn-action"  /> <input type="hidden" name="keyid" value="{$magic.request.keyid}" /></td></tr>
				</table>
				{/if}
			</div>
			</form>
		
</div>
<!--用户注册 结束-->
<script src="{$tempdir}/media/js/modal.js"></script>
<script src="{$tempdir}/media/js/tab.js"></script>
<script src="{$tempdir}/media/js/alert.js"></script>
<script src="{$tempdir}/media/js/transition.js"></script>

{include file="user_footer.html"}