<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{include file="user_header.html"}
<link href="{$tempdir}/media/css/modal.css" rel="stylesheet" type="text/css" />
<!--用户中心的主栏目 开始-->
<div id="main" class="clearfix">
<div class="wrap950 mar10">
	<!--左边的导航 开始-->
	<div class="user_left">
		{include file="user_menu.html"}
	</div>
	<!--左边的导航 结束-->
	
	<!--右边的内容 开始-->
	<div class="user_right">
		<div class="user_right_menu">
			
			<ul>
				<li class="title"><a href="{$_U.query_url}" style="color:red;"><strong>提醒设置 </strong></a></li>
			</ul>
		</div>
		
		<div class="user_right_main">
		
		<!--提醒设置 开始-->
		<div class="user_help alert">请勾选设置来收取您所需要的消息提醒。
为了您的交易安全，部分重要信息不能取消接收。 </div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form action="" method="post">
			  {foreach from= $_U.remind_list item="item"}
				<tr class="head" >
					<td  colspan="4" class="well" style="text-align:center;"><strong>{$item.name}</strong></td>
				</tr>
				{foreach from=$item.list item="var"}
				<tr  >
					<td>{$var.name}</td>
					<td>
						{if $var.message==1 || $var.message==2}<input type="hidden"  {if $var.message==1 }checked="checked"{/if} name="message_{$var.nid}"  value="1" /><span disabled>{else}<span>{/if}
						<input type="checkbox"  {if $var.message==1 || $var.message==3}checked="checked"{/if} name="message_{$var.nid}" id="message_{$var.nid}" value="1" />
						<label for=message_{$var.nid}>站内信提醒</label></span> 
					</td>
					<td>
					{if $var.email==1 || $var.email==2}<input type="hidden"  {if $var.email==1 }checked="checked"{/if} name="email_{$var.nid}" value="1" /><span disabled>{else}<span>{/if}
						<input type="checkbox"  {if $var.email==1 || $var.email==3}checked="checked"{/if} name="email_{$var.nid}" id="email_{$var.nid}" value="1" />
						<label for=email_{$var.nid}>邮件提醒 </label></span> </td>
					<td>
					{if $var.phone==1 || $var.phone==2}<input type="hidden"  {if $var.phone==1 }checked="checked"{/if} name="phone_{$var.nid}"  value="1" /><span disabled>{else}<span>{/if}
						<input type="checkbox"  {if $var.phone==1 || $var.phone==3}checked="checked"{/if} name="phone_{$var.nid}" id="phone_{$var.nid}" value="1" />
						<label for=phone_{$var.nid}>手机提醒</label></span> </td>
				</tr>
				{/foreach}
			{/foreach }
				
		</table>
		<div class="user_submit" align="center">
				<input type="hidden" name="type" value="1" />
				<input type="submit" class="btn-action" name="name"  value="确认提交" size="30" /> 
			
		</div>
		</form>
		
		<div class="user_right_foot alert">
		* 温馨提示：如果手机短信功能没开的话，所有的短信功能将不能使用
		</div>
		<!--提醒设置 结束-->
	</div>
	
</div>
</div>
</div>
<!--用户中心的主栏目 结束-->
<script src="{$tempdir}/media/js/modal.js"></script>
<script src="{$tempdir}/media/js/tab.js"></script>
<script src="{$tempdir}/media/js/alert.js"></script>
<script src="{$tempdir}/media/js/transition.js"></script>
{include file="user_footer.html"}