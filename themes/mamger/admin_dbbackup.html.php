<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{ if $_A.query_type=="back" }
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post" name="back_form">
	
	<tr   >
	  <td width="10%" class="main_td"><input type="checkbox" name="allcheck" onclick="selectAll()" checked="checked" /></td>
	  <td width="*" class="main_td"><strong>表名</strong></td>
	  <td width="20%" class="main_td"><strong>记录数</strong></td>
	  <td width="28%" class="main_td"><strong>操作</strong></td>
	</tr>
	{ foreach from=$result key=key item=item}
	<tr  {if $key%2==1}class="tr2"{/if}>
	  <td class="main_td1"><input type="checkbox" name="name[]" value="{ $item.name}" checked="checked" /> </td>
	  <td align="left" class="main_td1">&nbsp;&nbsp;{ $item.name}</td>
	 
	  <td class="main_td1">{ $item.num}</td>
	   <td class="main_td1"><a href="javascript:void(0);" onclick="getAjaxTable('{ $_A.query_url}/show&table={ $item.name}');">查看结构</a></td>
	</tr>
	{ /foreach}
	<tr   >
	  <td colspan="4"  class="submit">&nbsp;&nbsp;<strong>备份操作</strong>  当前数据库版本 ：{ $mysql_version}  分卷大小：<input type="text" size="10" value="1024" name="size"/> K  <input type="submit" value="开始备份" /> <input type="button" onclick="location.href='data/dbbackup/dbbackup.zip'" value="下载到本地" /><input type="hidden" name="total" value="{ $total}" /></td>
	</tr>
	</form>
</table>

{ elseif $_A.query_type=="revert" }
<table width="100%" border="0" cellspacing="1" bgcolor="#CCCCCC">
	<form action="" method="post" name="back_form" >
	<input type="hidden" name="total" value="{ $total}"/>
	<tr  class="main_td1">
	  <td width="10%" class="main_td"><input type="checkbox" name="allcheck" onclick="selectAll()" checked="checked"/></td>
	  <td width="*"  class="main_td">还原的文件</td>
	</tr>
	{ if $result!=""}
	{ foreach from=$result key=key item=item}
	<tr {if $key%2==1}class="tr2"{/if}>
	  <td  class="main_td1"><input type="checkbox" name="name[]" value="{ $item}"  checked="checked" /> </td>
	  <td align="left"  class="main_td1">&nbsp;&nbsp;{ $item}</td>
	  </tr>
	{ /foreach}
	<tr class="main_td1">
	  <td colspan="2" class="submit">{ if $show_table==true}还原表结构信息(show_table.sql)：<input type="checkbox" size="10" value="1" name="show" checked="checked" />{ /if} 还原后删除备份文件：<input type="checkbox" size="10" value="1" name="delfile"/> <input type="submit" value="开始还原数据" /></td>
	</tr>
	{ else}
	<tr   >
	  <td width="10%" colspan="2" align="left" class="main_td1">&nbsp;&nbsp;<strong>找不到备份文件</strong></td>
	</tr>
	{ /if}
	</form>
</table>
{ /if}
{literal}
<script>
function selectAll(){   //全选
	 var m = document.getElementsByName('name[]');
	for ( var i=0; i< m.length ; i++ )
	{
		m[i].checked == true
			? m[i].checked = false
			: m[i].checked = true;
	}
}


</script>
{/literal}