<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{include file="user_header.html"}
<link href="{$tempdir}/media/css/modal.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/themes/soonmes/media/js/tipswindown.js"></script>
<link href="{$tempdir}/media/css/tipswindown.css" rel="stylesheet" type="text/css" />

 <div id="main" class="clearfix">
<!--用户中心的主栏目 开始-->
<div class="wrap950 mar10">
	<!--左边的导航 开始-->
	<div class="user_left">
		{include file="user_menu.html"}
	</div>
	<!--左边的导航 结束-->
	
	<!--右边的内容 开始-->
	<div class="user_right">
		<div class="user_right_menu">
			<ul class="list-tab clearfix">
				<li {if $_U.query_type=="list" || $_U.query_type=="view"} class="cur"{/if}><a href="{$_U.query_url}">收件箱</a></li>
				<li {if $_U.query_type=="sented" || $_U.query_type=="viewed"} class="cur"{/if}><a href="{$_U.query_url}/sented">已发送</a></li>
				<li {if $_U.query_type=="sent"} class="cur"{/if}><a href="{$_U.query_url}/sent">发信息</a></li>
			</ul>
		</div>
		
		
		
		<!--收件箱 开始-->
		{if $_U.query_type=="list"}
		<div class="user_main_title1" ><input type="button"  value="删除" onclick="on_submit('{$_G.query_url}/sented',1)" /> <input type="button" value="标记已读" onclick="on_submit('{$_G.query_url}/sented',2)"/> <input type="button"  value="标记未读" onclick="on_submit('{$_G.query_url}/sented',3)"/></div>
		<div class="user_right_main">
			<table  border="0"  cellspacing="0" class="table table-striped  table-condensed">
			<form action="" method="post" id="form1">
				<tr class="head" >
				<td><input type="checkbox" name="allcheck" onclick="checkFormAll(this.form)"/><input type="hidden" name="type" id="type" value="0" /></td>
				<td><div class="icon_xin_no"></div></td>
				<td>发件人 </td>
				<td>标题</td>
				<td>发送时间 </td>
				</tr>
				{ foreach  from=$_U.message_list key=key item=item}
                                <tr  {if $key%2==1} class="tr1_1"{/if}>
				<td><input type="checkbox" name="id[{$key}]" value="{$item.id}"/></td>
				<td>{if $item.status==1}<div class="icon_xin_yes"></div>{else}<div class="icon_xin_no"></div>{/if}</td>
				<td>{ $item.sent_username|default:"系统消息"}</td>
                                <td ><a href="{$_U.query_url}/view&id={$item.id}">{if $item.status==0}<strong>{ $item.name}</strong>{else}{ $item.name}{/if}</a></td>
				<td>{ $item.addtime|date_format:"Y-m-d H:i"}</td>
				</tr>
				{ /foreach}
				<tr >
					<td colspan="5" class="page">
						<div class="user_list_page">{$_U.show_page}</div>
					</td>
				</tr>
			</form>	
			</table>
			<!--收件箱 结束-->
		</div>
		
		<!--发件箱 开始-->
		{elseif $_U.query_type=="sented"}
		<div class="user_main_title1" ><input type="button"  value="删除" onclick="on_submit('{$_G.query_url}/sented',1)" /></div>
		<form action="" method="post" id="form1">
		<div class="user_right_main">
			<table  border="0"  cellspacing="0" class="table table-striped  table-condensed">
				<tr class="head" >
				<td><input type="checkbox" name="allcheck" onclick="checkFormAll(this.form)"/></td>
				<td>收件人 </td>
				<td>标题</td>
				<td>发送时间 </td>
				</tr>
				{ foreach  from=$_U.message_list key=key item=item}
				<tr  {if $key%2==1} class="tr1"{/if}>
				<td><input type="checkbox" name="id[{$key}]" value="{$item.id}"/></td>
				<td>{ $item.receive_username|default:"admin"}</td>
				<td><a href="{$_U.query_url}/viewed&id={$item.id}">{ $item.name}</a></td>
				<td>{ $item.addtime|date_format:"Y-m-d H:i"}</td>
				</tr>
				{ /foreach}
				<tr >
					<td colspan="5" class="page">
						<div class="user_list_page">{$_U.show_page}</div>
					</td>
				</tr>
				<input type="hidden" name="type" id="type" value="0" />
			</form>	
			</table>
			<!--发件箱 结束-->
		</div>
		<!--发件箱 开始-->
		{elseif $_U.query_type=="sent"}
		<form method="post" action="" >
		<div class="user_right_border">
			<div class="l">发件人：</div>
			<div class="c">
				{$_G.user_result.username}<!-- ({$_G.user_result.realname})-->
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">收件人：</div>
			<div class="c">
				<input type="text" name="receive_user" value="{$magic.request.receive}" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">标题：</div>
			<div class="c">
				<input type="text" name="name"  />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">内容：</div>
			<div class="c">
				<textarea name="content" rows="7" cols="50"></textarea>
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
				<input name="sented" type="checkbox" value="1" />保存到发件箱
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input type="submit"  class="btn-action"   value="确认提交" size="30" /> 
			</div>
		</div>
		</form>
		<div class="user_right_foot alert">
		* 温馨提示：如果要送管理员发送信息，请输入发件人admin
		</div>
                
		{elseif $_U.query_type=="forward"}
		<form method="post" action="" >
		<div class="user_right_border">
			<div class="l">发件人：</div>
			<div class="c">
				{$_G.user_result.username}<!-- ({$_G.user_result.realname})-->
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">收件人：</div>
			<div class="c">
				<input type="text" name="receive_user" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">标题：</div>
			<div class="c">
                            <input type="text" name="name" value="[转发]:{$_U.message_result.name}" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">内容：</div>
			<div class="c">
				<textarea name="content" rows="7" cols="50">{$_U.message_result.content}[以上是原短信内容]</textarea>
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
				<input name="sented" type="checkbox" value="1" />保存到发件箱
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
                            <input type="hidden" name="id" value="{$_U.message_result.id}" />
				<input type="submit"  class="btn-action"   value="确认提交" size="30" /> 
			</div>
		</div>
		</form>
		<div class="user_right_foot alert">
		* 温馨提示：如果要送管理员发送信息，请输入发件人admin
		</div>
{elseif $_U.query_type=="jubao"}
		<form method="post" action="" >
		<div class="user_right_border">
			<div class="l">发件人：</div>
			<div class="c">
				{$_G.user_result.username} <!--({$_G.user_result.realname})-->
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">收件人：</div>
			<div class="c">
				<input type="text" name="receive_user" value="admin" disabled />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">标题：</div>
			<div class="c">
                            <input type="text" name="name" value="[举报]:{$_U.message_result.name}" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l">内容：</div>
			<div class="c">
				<textarea name="content" rows="7" cols="50">{$_U.message_result.content}[以上是原短信内容]</textarea>
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
				<input name="sented" type="checkbox" value="1" />保存到发件箱
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
                            <input type="hidden" name="id" value="{$_U.message_result.id}" />
				<input type="submit"  class="btn-action"   value="确认提交" size="30" /> 
			</div>
		</div>
		</form>
		<div class="user_right_foot alert">
		* 温馨提示：如果要送管理员发送信息，请输入发件人admin
		</div>
		<!--查看 开始-->
		{elseif $_U.query_type=="view"}
		<div class="user_main_title1" >
                    <input type="button" onclick="javascript:location.href='{$_U.query_url}'" value="<<返回" /> 
                    <!-- <input type="button" value="转发" onclick="javascript:location.href='{$_U.query_url}/forward&id={$_U.message_result.id}'"/> -->
                    <input type="button" value="删除" onclick="javascript:location.href='{$_U.query_url}/del&id={$_U.message_result.id}'"/>
                    <!-- <input type="button" value="举报" onclick="javascript:location.href='{$_U.query_url}/jubao&id={$_U.message_result.id}'"/> -->
               
                </div>
		<form method="post" action="" >
		<div class="user_right_border"style=" background-color:#FCF4EA ">
			<div class="l"></div>
			<div class="c" style=" color: red">
				<strong>{$_U.message_result.name}</strong>
			</div>
		</div>
		
		<div class="user_right_border"style=" background-color:#FCF4EA ">
			
{if $_U.message_result.sent_username==0} 
<div class="l">来自：</div>
 <div class="c"  >
系统消息
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发送时间：{$_U.message_result.addtime|date_format:"Y-m-d H:i"}
 </div>
 {else}  
<div class="l">发送人：</div>
 <div class="c"  >
				{$_U.message_result.sent_username|default:"admin"}
                                
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发送时间：{$_U.message_result.addtime|date_format:"Y-m-d H:i"}
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/u/{$_U.message_result.sent_user|default:0}" target="_blank">查看发件人信息</a>  
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<A 
onclick='tipsWindown("加为好友","url:get?/index.php?user&amp;q=code/user/addfriend&amp;username={$_U.message_result.sent_username|default:admin}",400,230,"true","","true","text");' 
href="javascript:void(0)">加为好友</A> </a>
			</div>
{/if}                     
					  
		</div>

                    <div class="user_right_border" >
			<div class="l"></div>
			<div class="c">
                            <br>
				{$_U.message_result.content}
                                <br>
                                <br>
                                <br>
			</div>
		</div>
		
		<div class="user_right_border"style=" background-color:#FCF4EA ">
			<div class="l"></div>
			<div class="c">
				<textarea name="content" rows="7" cols="50"></textarea>
                                
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"></div>
			<div class="c">
				<input type="submit"  class="btn-action"  value="回复"  />
				<input type="hidden" name="id" value="{$_U.message_result.id}" />
			</div>
		</div>
		</form>
		<!--查看 结束-->
		
		<!--查看 开始-->
		{elseif $_U.query_type=="viewed"}
		<div class="user_main_title1" ><input type="button" onclick="javascript:location.href='{$_U.query_url}/sented'" value="返回" /> <input type="button" value="删除" onclick="javascript:location.href='{$_U.query_url}/deled&id={$_U.message_result.id}'"/></div>
		<div class="user_right_border">
			<div class="l">标题：</div>
			<div class="c">
				{$_U.message_result.name}
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">收件人：</div>
			<div class="c">
				{$_U.message_result.receive_username|default:"admin"}
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">发送时间：</div>
			<div class="c">
				{$_U.message_result.addtime|date_format:"Y-m-d H:i"}
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l">发送内容：</div>
			<div class="c">
				{$_U.message_result.content}
			</div>
		</div>
		
		<!--查看 结束-->
		
		{/if}
	</div>
</div>
<!--用户中心的主栏目 结束-->
</div>
{include file="user_footer.html"}