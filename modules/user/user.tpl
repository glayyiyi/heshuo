{if $_A.query_type == "list"}
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr>
		<td width="" class="main_td">UID</td>
		<td width="" class="main_td">用户名</td>
		<td width="" class="main_td">真实姓名</td>
		<td width="" class="main_td">性别</td>
		<td width="" class="main_td">邮箱</td>
		<td width="" class="main_td">QQ</td>
		<td width="" class="main_td">手机</td>
		<td width="" class="main_td">所在地</td>
		<td width="" class="main_td">身份证</td>
		<th width="" class="main_td">添加时间</th>
		<th width="" class="main_td">状态</th>
		<th width="" class="main_td">用户类型</th>
		<th width="" class="main_td">是否为vip</th>
		<td width="" class="main_td">操作</td>
	</tr>
	{foreach  from=$_A.user_list key=key item=item}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.user_id}</td>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center">{$item.realname}</td>
		<td class="main_td1" align="center">{if $item.sex==1}男{elseif $item.sex==2}女{else}未知{/if}</td>
		<td class="main_td1" align="center">{$item.email}</td>
		<td class="main_td1" align="center">{$item.qq}</td>
		<td class="main_td1" align="center">{$item.phone}</td>
		<td class="main_td1" align="center">{$item.area|area}</td>
		<td class="main_td1" align="center">{$item.card_id}</td>
		<td class="main_td1" align="center" >{$item.addtime|date_format:"Y-m-d H:i:s"}</td>
		<td class="main_td1" align="center" >{if $item.status ==1}开通{else}关闭{/if}</td>
		<td class="main_td1" align="center" >{$item.typename}</td>
		<td class="main_td1" align="center" >{if $item.vip_status==1}是{else}否{/if}</td>
		<td class="main_td1" align="center"><a href="{$_A.query_url}/edit&user_id={$item.user_id}{$_A.site_url}">修改</a> / <a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='{$_A.query_url}/del&user_id={$item.user_id}{$_A.site_url}'">删除</a>{if $magic.session.usertype==1} / <a href="{$_A.admin_url}&q=module/manager/edit&user_id={$item.user_id}{$_A.site_url}">管理用户</a>{/if} </td>
	</tr>
	{/foreach}
	<tr>
		<td colspan="14" class="action">
			<div class="floatl"></div>
			<div class="floatr">
				用户名：<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>
				邮箱：<input type="text" name="email" id="email" value="{$magic.request.email}"/>
				真实姓名：<input type="text" name="realname" id="realname" value="{$magic.request.realname|urldecode}"/>
				<input type="button" value="搜索" onclick="sousuo()" />
			</div>
		</td>
		</tr>
	<tr>
		<td colspan="13" class="page">
		{$_A.showpage}
		</td>
	</tr>
</table>
<!-- 添加和修改用户 开始 -->
{elseif $_A.query_type == "new" || $_A.query_type == "edit"}
<div class="module_add">
	<form name="form_user" method="post" action="" onsubmit="return submit_fool()">
	<div class="module_title"><strong>{ if $_A.query_type == "edit" }编辑{else}添加{/if}用户</strong></div>
	<div class="module_border">
		<div class="l">用户名：</div>
		<div class="c">
			{if $_A.query_type != "edit" }<input name="username" type="text"  class="input_border" />{else}{ $_A.user_result.username}<input name="username" type="hidden"  class="input_border" value="{$_A.user_result.username}" />{/if} <font color="#FF0000">*</font>
		</div>
	</div>
	<div class="module_border">
		<div class="l">登录密码：</div>
		<div class="c">
			<input name="password" type="password" class="input_border" />{ if $_A.query_type == "edit" } 不修改请为空{/if} <font color="#FF0000">*</font>
		</div>
	</div>
	<div class="module_border">
		<div class="l">确认密码：</div>
		<div class="c">
			<input name="password1" type="password" class="input_border" />{ if $_A.query_type == "edit" } 不修改请为空{/if} <font color="#FF0000">*</font>
		</div>
	</div>
	<div class="module_border">
		<div class="l">真实姓名：</div>
		<div class="c">
			<input name="realname" type="text" value="{ $_A.user_result.realname }" class="input_border" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">性　别： </div>
		<div class="c">
		<input type="radio" name="sex" value="1" {if $_A.user_result.sex==1 } checked="checked" {/if} />
		男&nbsp;&nbsp;
		<input type="radio" name="sex" value="2"  {if $_A.user_result.sex==2 } checked="checked" {/if}/>
	  女&nbsp;&nbsp; 
		</div>
	</div>
	<div class="module_border">
		<div class="l">生日：</div>
		<div class="c">
		<input type="text" name="birthday"  class="input_border" value="{ $_A.user_result.birthday|date_format:"Y-m-d"}" size="20" onclick="change_picktime()"/> 
		</div>
	</div>
	<div class="module_border">
		<div class="l">所属客服：</div>
		<div class="c">
			<select name="kefu_userid">
			<option value="0">无</option>
			{loop module ="user" function = "GetList" type_id="7,3" limit="all"}
			<option value="{$var.user_id}" {if $_A.user_result.kefu_userid==$var.user_id} selected="selected"{/if}>{$var.username}</option>
			{/loop}
			</select>
		</div>
	</div>
	<div class="module_border">
		<div class="l">是否可以发担保标：</div>
		<div class="c">
			<input type="radio" name="borrow_vouch" value="0" {if $_A.user_result.borrow_vouch==0} checked="checked"{/if}/>否 <input type="radio" name="borrow_vouch" value="1" {if $_A.user_result.borrow_vouch==1} checked="checked"{/if}/>可以
		</div>
	</div>
	<div class="module_border">
		<div class="l">类型： </div>
		<div class="c">
			{html_options name="type_id" options=$list_type selected=$_A.user_result.type_id}
		</div>
	</div>
	<div class="module_border">
		<div class="l">是否锁定：</div>
		<div class="c">
			 <input name="islock" type="radio" value="0"   { if $_A.user_result.islock=="0"} checked="checked"{/if}/>开通<input name="islock" type="radio" value="1" { if $_A.user_result.islock==1 || $_A.user_result.islock==""} checked="checked"{/if}/>锁定
		</div>
	</div>
	<div class="module_border">
		<div class="l">介绍人ID：</div>
		<div class="c">
			 <input name="invite_userid" id="invite_userid"  value="{ $_A.user_result.invite_userid }" type="text" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">推广提成费用：</div>
		<div class="c">
			 <input name="invite_money" id="invite_money" value="{ $_A.user_result.invite_money }" type="text" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">状态：</div>
		<div class="c">
			 <input name="status" type="radio" value="0"   { if $_A.user_result.status=="0"} checked="checked"{/if}/>关闭<input name="status" type="radio" value="1" { if $_A.user_result.status==1 || $_A.user_result.status==""} checked="checked"{/if}/>开通
		</div>
	</div>
	<div class="module_border">
		<div class="l">所在地：</div>
		<div class="c">
			<script src="./plugins/index.php?&q=area&area={$_A.user_result.area}" type='text/javascript' language="javascript"></script>
		</div>
	</div>
	<div class="module_border">
		<div class="l">证件类型：</div>
		<div class="c">
			<select name="card_type">
				<option value="1" {if $_A.user_result.card_type==1} selected="selected"{/if}>身份证</option>
				<option value="2" {if $_A.user_result.card_type==2} selected="selected"{/if}>军官证</option>
				<option value="3" {if $_A.user_result.card_type==3} selected="selected"{/if}>台胞证</option>
			</select>
			<input name="card_id" type="text" value="{ $_A.user_result.card_id }" class="input_border" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">电子邮件地址： </div>
		<div class="c">
			<input name="email" value="{ $_A.user_result.email }" type="text"  class="input_border" /> <font color="#FF0000">*</font>
		</div>
	</div>
	<div class="module_border">
		<div class="l">QQ：</div>
		<div class="c">
			<input name="qq" type="text" value="{ $_A.user_result.qq }" class="input_border" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">旺旺：</div>
		<div class="c">
			<input name="wangwang" type="text" value="{ $_A.user_result.wangwang }" class="input_border" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">家庭电话：</div>
		<div class="c">
			<input name="tel" type="text" value="{ $_A.user_result.tel }" class="input_border" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">手机：</div>
		<div class="c">
			<input name="phone" type="text" value="{ $_A.user_result.phone }" class="input_border" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">详细地址：</div>
		<div class="c">
			<input name="address" type="text" value="{ $_A.user_result.address }" class="input_border" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">令牌序列号SN：</div>
		<div class="c">
			<input name="serial_id" type="text" value="{$_A.user_result.serial_id }" class="input_border" />
		</div>
	</div>
	<div class="module_submit border_b" >
	{if $_A.query_type=="edit"}<input type="hidden" name="user_id" value="{$magic.request.user_id }" />{/if}
	{if $_A.query_type=="new"}<input type="button" name="tijiao" value="确认提交" onclick="check_user()" />{else}<input type="submit" name="tijiao" value="确认提交" />{/if}
	<input type="reset" name="reset" value="重置表单" />
	</div>
	</form>
</div>
{literal}
<script type="text/javascript">
function check_user(){
	 var frm = document.forms['form_user'];
	 var username = frm.elements['username'].value;
	 var password = frm.elements['password'].value;
	 var password1 = frm.elements['password1'].value;
	 var email = frm.elements['email'].value;
	 var errorMsg = '';
	 if (username.length == 0 ) {
		errorMsg += '-- 用户名不能为空<br/>';
	 }
	 if (username.length<2) {
		errorMsg += '-- 用户名长度不能少于2位<br/>';
	 }
	 if (password.length==0) {
		errorMsg += '-- 密码不能为空<br/>';
	  }
	  if (password.length<6) {
		errorMsg += '-- 密码长度不能小于6位<br/>';
	  }
	  if (password.length!=password1.length) {
		errorMsg += '-- 两次密码不一样<br/>';
	  }
	  if(email.length==0) {
		errorMsg += '-- 邮箱不能为空<br/>';
	  }
	  if(errorMsg.length > 0){
		$.jBox.info(errorMsg,'提示');
		return false;
	  } else{
	  	frm.elements['tijiao'].disabled=true;
	  	frm.elements['tijiao'].value="提交中..";
	  	frm.submit();
		return true;
	  }
}
</script>
{/literal}
<!-- 添加和修改用户 结束 -->
<!-- 用户类型列表 开始 -->
{elseif $_A.query_type == "type"}
<table width="100%" border="0" cellpadding="5" cellspacing="1">
	<tr>
		<td width="7%" class="main_td">类型名称</td>
		<td class="main_td">简要</td>
		<td class="main_td">备注</td>
		<td width="5%" class="main_td">排序</td>
		<td width="5%" class="main_td">状态</td>
		<td width="7%" class="main_td">操作</td>
	</tr>
	<form action="{$_A.query_url}/type_order" method="post">
	{foreach from = $_A.user_type_list key=key item=item}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td bgcolor="#ffffff" >{$item.name}</td>
		<td bgcolor="#ffffff" >{$item.summary}</td>
		<td bgcolor="#ffffff">{$item.remark}</td>
		<td bgcolor="#ffffff"><input name="order[]" size="2" value="{ $item.order}"type="text" ><input name="type_id[]" type="hidden" size="2" value="{ $item.type_id}" ></td>
		<td bgcolor="#ffffff" >{ if $item.status==1}开通{else}<font color=red>关闭</font>{/if}</td>
		<td bgcolor="#ffffff"><a href="{$_A.query_url}/type_edit&type_id={$item.type_id}&a=userinfo">修改</a>/<a href="#" onclick="javascript:if(confirm('确定要删除吗?请慎重')) location.href='{$_A.query_url}/type_del&type_id={$item.type_id}'">删除</a></td>
	</tr>
	{/foreach}
	<tr>
		<td colspan="6" class="action"><input type="button" onclick="javascript:location.href='{$_A.query_url}/type_new{$_A.site_url}'" value="添加类型" />  <input type="submit" value="修改排序" /> </td>
	</tr>
	</form>
</table><!-- 用户类型列表 结束 -->

<!-- 添加修改用户类型 开始 -->
{elseif $_A.query_type == "type_new" || $_A.query_type == "type_edit" }
<div class="module_add">
	<form enctype="multipart/form-data" name="form1" method="post" action="" onsubmit="return check_form();"  >
	<div class="module_title"><strong>{if $_A.query_type == "edit"}编辑{else}添加{/if}用户类型</strong></div>
	<div class="module_border">
		<div class="l">类型名称:</div>
		<div class="c">
			<input type="text" name="name"  class="input_border" value="{$result.name}" size="30" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">排序:</div>
		<div class="c">
			<input type="text" name="order"  class="input_border" value="{$result.order|default:10}" size="10" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">状态:</div>
		<div class="c">
			<input type="radio" name="status" value="0" {if $result.status == 0}checked="checked"{/if}/> 关闭<input type="radio" name="status" value="1"  { if $result.status ==1 ||$result.status ==""}checked="checked"{/if}/>开通
		</div>
	</div>
	<div class="module_border">
		<div class="l">简要说明:</div>
		<div class="c">
			<textarea name="summary" cols="55" rows="6">{$result.summary}</textarea>
		</div>
	</div>
	<div class="module_border">
		<div class="l">备注:</div>
		<div class="c">
			<textarea name="remark" cols="55" rows="6">{$result.remark}</textarea>
		</div>
	</div>
	<div class="module_submit" >
	{if $_A.query_type == "type_edit" }<input type="hidden" name="type_id" value="{$result.type_id }" />{/if}
		<input type="submit" value="确认提交" />
		<input type="reset" name="reset" value="重置表单" />
	</div>
	</form>
</div>
{literal}
<script type="text/javascript">
function check_form(){
	 var frm = document.forms['form1'];
	 var title = frm.elements['name'].value;
	 var errorMsg = '';
	  if (title.length == 0 ) {
		errorMsg += '类型名称必须填写' + '\n';
	  }
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
}
{/literal}
</script><!-- 添加修改用户类型 结束 -->

{elseif $_A.query_type == "vip"}
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr>
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">用户名</td>
		<td width="" class="main_td">真实姓名1</td>
		<th width="" class="main_td">添加时间</th>
		<th width="" class="main_td">状态</th>
		<th width="" class="main_td">用户类型</th>
		<th width="" class="main_td">登录次数</th>
		<th width="" class="main_td">状态</th>
		<th width="" class="main_td">是否缴费</th>
		<td width="" class="main_td">操作</td>
	</tr>
	{foreach from=$_A.user_vip_list key=key item=item}
	<tr {if $key%2==1} class="tr2"{/if}>
		<td class="main_td1" align="center">{ $item.user_id}</td>
		<td class="main_td1" align="center">{ $item.realname}</td>
		<td class="main_td1" align="center">{$item.username}</td>
		<td class="main_td1" align="center" >{$item.addtime|date_format:"Y-m-d H:i:s"}</td>
		<td class="main_td1" align="center" >{ if $item.status ==1}开通{else}隐藏{/if}</td>
		<td class="main_td1" align="center" >{$item.typename}</td>
		<td class="main_td1" align="center">{$item.logintime}</td>
		<td class="main_td1" align="center">{if $item.isvip==-1}vip审核{else}VIP会员{/if}</td>
		<td class="main_td1" align="center">{if $item.vip_money==""}无{else}{$item.vip_money}元{/if}</td>
		<td class="main_td1" align="center">--</td>
	</tr>
	{/foreach}
	<tr>
		<td colspan="10" class="action">
		<div class="floatl"></div>
			<div class="floatr">
				用户名：<input type="text" name="username" id="username" value="{$magic.request.username|urldecode}"/>
				<input type="button" value="搜索" onclick="sousuo()" />
			</div>
			</td>
		</tr>
	<tr>
		<td colspan="10" class="page">
		{$_A.showpage}
		</td>
	</tr>
</table>
{/if}
<script type="text/javascript">
	var url = '{$_A.query_url}/{$_A.query_type}{$_A.site_url}';
	{literal}
	function sousuo(){
		var sou = "";
		var username = $("#username").val() || "";
		var email = $("#email").val() || "";
		var realname = $("#realname").val() || "";
		if(username!=""){
			sou += "&username="+username;
		}
		if(email!=""){
			sou += "&email="+email;
		}
		if(realname!=""){
			sou += "&realname="+realname;
		}
		location.href=url+sou;
	}
</script>
{/literal}