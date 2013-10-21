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
			{if $_U.query_type=="myuser"}
			<ul>
				<li ><a href="index.php?user&q=code/user/myuser">我的客服</a></li>
				<li ><a href="index.php?user&q=code/borrow/myuser">客户借款</a></li>
			</ul>
			{else}
			<ul id="tab" class="list-tab clearfix">
				<li {if $_U.query_type=="list"} class="cur"{/if}><a href="{$_U.query_url}">证明材料</a></li>
				<li {if $_U.query_type=="one"} class="cur"{/if}><a href="{$_U.query_url}/one">单个资料上传</a></li>
				<!-- <li {if $_U.query_type=="more"} class="cur"{/if}><a href="{$_U.query_url}/more">多个资料上传</a></li> -->
			</ul>
			{/if}
		</div>
		
		
		
		<!--收件箱 开始-->
		{if $_U.query_type=="list"}
	
		<div class="user_right_main">
			<table  border="0"  cellspacing="0" class="table table-striped  table-condensed">
			<form action="" method="post" id="form1">
				<tr class="head" >
				<td>说明信息 </td>
				<td>资料类型</td>
				<td>上传时间 </td>
				<td>审核时间</td>
				<td>审核说明</td>
				<td>积分 </td>
				<td>状态</td>
				<td>操作</td>
				</tr>
			{list module="attestation" function="GetList" showpage="3" var="loop" user_id="0" epage=20}
				{ foreach  from=$loop.list key=key item=item}
				<tr  {if $key%2==1} class="tr1"{/if}>
				<td>{$item.name|default:-}</td>
				<td>{$item.type_name}</td>
				<td>{ $item.addtime|date_format:"Y-m-d H:i"}</td>
				<td>{ $item.verify_time|date_format:"Y-m-d H:i"|default:-}</td>
				<td>{$item.verify_remark|default:-}</td>
				<td>{$item.jifen|default:0} 分</td>
				<td>{if $item.status==0}未审核{elseif $item.status==2}审核失败{else}已审核{/if}</td>
				
				<td><a href="{$item.litpic} " target="_blank">查看</a></td>
				
				</tr>
				{ /foreach}
				<tr >
					<td colspan="11" class="page">
						{$loop.showpage}
					</td>
				</tr>
				{/list}
			</form>	
			</table>
			<!--收件箱 结束-->
		</div>
		<!--我的客户 开始-->
		{elseif $_U.query_type=="myuser"}
	
		<div class="user_right_main">
			<table  border="0"  cellspacing="0" class="table table-striped  table-condensed">
			<form action="" method="post" id="form1">
				<tr class="head" >
				<td>说明信息 </td>
				<td>资料类型</td>
				<td>上传时间 </td>
				<td>审核时间</td>
				<td>审核说明</td>
				<td>积分 </td>
				<td>状态</td>
				</tr>
				{ loop  module="attestation" function="GetList" user_id="$magic.request.user_id" kefu_userid="$_G.user_id" var="item" limit="all"}
				<tr  {if $key%2==1} class="tr1"{/if}>
				<td>{$item.name|default:-}</td>
				<td>{$item.type_name}</td>
				<td>{ $item.addtime|date_format:"Y-m-d H:i"}</td>
				<td>{ $item.verify_time|date_format:"Y-m-d H:i"|default:-}</td>
				<td>{$item.verify_remark|default:-}</td>
				<td>{$item.jifen|default:0} 分</td>
				<td>{if $item.status==0}未审核{elseif $item.status==2}审核失败{else}已审核{/if}</td>
				
				
				</tr>
				{ /loop}
			</form>	
			</table>
			<!--我的客户 结束-->
		</div>
		{elseif $_U.query_type=="one"}
		<div class="user_right_main">
			<form action="" name="form1" method="post" onsubmit="return check_form()" enctype="multipart/form-data">
			<div class="user_help alert"><font color="#FF0000">*</font> 必须是本人的真实、有效资料
			</div>
			<div class="user_right_border">
				<div class="l">资料上传：</div>
				<div class="c">
					<input type="file" name="litpic" /> 上传最大的图片为1M，上传的格式为jpg.gif
				</div>
			</div>
			<div class="user_right_border">
				<div class="l">上传类型：</div>
				<div class="c">
					<select name="type_id">
					{foreach from="$_U.attestation_type_list" item="item"}
					<option value="{$item.type_id}">{$item.name}</option>
					{/foreach}
					</select>
				</div>
			</div>
			<div class="user_right_border">
				<div class="l">备注说明：</div>
				<div class="c">
					<textarea cols="50" rows="5" name="name"></textarea>
				</div>
			</div>
			
			<div class="user_right_border">
			<div class="l" style="font-weight:bold; float:left;">验证码：</div>
			<div class="c">
				<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3"  style="float:left;" />&nbsp;<img src="/plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer;float:right;" />
			</div>
		</div>
			<div class="user_right_border">
				<div class="e"></div>
				<div class="c">
					<input type="submit" class="btn-action" value="确认提交" size="30" /> 
				</div>
			</div>
			</form>
			<div class="user_right_foot alert">
			* 温馨提示：我们将严格对用户的所有资料进行保密
			</div>
		</div>
			{literal}<script>
				function check_form(){
					 var frm = document.forms['form1'];
					 var file = frm.elements['litpic'].value;
					 var errorMsg = '';
					  if (file.length == 0 ) {
						errorMsg += '* 图片不能为空' + '\n';
					  }
					 
					  if (errorMsg.length > 0){
						alert(errorMsg); return false;
					  } else{  
						return true;
					}
				
				}
			</script>{/literal}
			<!--修改登录密码 结束-->
			
		{elseif $_U.query_type=="more"}
		<div class="user_right_main">
			<form action="" name="form1" method="post" onsubmit="return check_form()" enctype="multipart/form-data">
			<div class="user_help alert"><font color="#FF0000">*</font> 必须是本人的相关资料<br />
					<font color="#FF0000">*</font> 真实 有效<br />
			</div>
			
			<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="700" height="500">
  <param name="movie" value="/plugins/swfupload/swfupload.swf?config=/index.php%3fplugins%26ac=swfupload%26code=attestation" />
  <param name="quality" value="high" />
  <embed src="/plugins/swfupload/swfupload.swf?config=/index.php%3fplugins%26ac=swfupload%26code=attestation" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="700" height="500"></embed>
</object>
			
			<div class="user_right_border">
				<div class="e"></div>
				<div class="c">
					<input type="submit" class="btn-action" value="确认提交" size="30" /> 
				</div>
			</div>
			</form>
	</div>
	
	
	
		{/if}
</div>
<!--用户中心的主栏目 结束-->
</div>
</div>
<script src="{$tempdir}/media/js/modal.js"></script>
<script src="{$tempdir}/media/js/tab.js"></script>
<script src="{$tempdir}/media/js/alert.js"></script>
<script src="{$tempdir}/media/js/transition.js"></script>
{include file="user_footer.html"}