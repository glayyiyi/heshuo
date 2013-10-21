{include file="user_header.html" }
  <script type="text/javascript" src="{$tempdir}/js/jquery.js"></script>
<script type="text/javascript" src="{$tempdir}/js/base.js"></script>
<script type="text/javascript" src="{$tempdir}/js/jquery.js"></script>
<script type="text/javascript" src="{$tempdir}/js/base.js"></script>
<script type="text/javascript" src="{$tempdir}/js/user.js"></script>
<script type="text/javascript" src="{$tempdir}/js/tipswindown.js"></script>
<div id="main">
<!--用户登录注册的头部 开始-->

<!--用户登录注册的头部 结束-->

<!--用户注册 开始-->
<div class="user_action_main topborder">

	<!--用户注册左边 开始-->
	<div class="user_action_reg_left" >
		<!--用户注册 开始-->
		<div class="user_action_reg_top"></div>
		<div class="user_action_reg_submit">
			<div class="user_action_reg_a3"></div>
			<table border="0" align="center" cellpadding="0" cellspacing="0">   <tr>     <td height="45" align="center" valign="middle">
				<br />
				{show_avatar}
					</td>   </tr> </table> 
					<a href="/index.php?user&q=going/reg_avatar&jump=true">如果不想上传头，请点击这里进入用户中心</a>
		
		</div>
		<div class="user_action_reg_foot"></div>
	</div>
	<!--用户注册右边 开始-->
	{include file="user_reg_right.html"}
	<!--用户注册右边 结束-->
</div>
<!--用户注册 结束-->
</div>

{include file="user_footer.html"}