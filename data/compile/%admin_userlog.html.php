<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">ID</td>
		<td width="*" class="main_td">用户名</td>
		<td width="*" class="main_td">真实姓名</td>
		<td width="*" class="main_td">处理信息</td>
		<td width="*" class="main_td">地址</td>
		<th width="" class="main_td">状态</th>
		<th width="" class="main_td">添加时间</th>
		<th width="" class="main_td">IP</th>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['userlog_list']) || $this->magic_vars['_A']['userlog_list']=='') $this->magic_vars['_A']['userlog_list'] = array();  $_from = $this->magic_vars['_A']['userlog_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['log_id'])) $this->magic_vars['item']['log_id'] = ''; echo $this->magic_vars['item']['log_id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['query'])) $this->magic_vars['item']['query'] = ''; echo $this->magic_vars['item']['query']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['url'])) $this->magic_vars['item']['url'] = ''; echo $this->magic_vars['item']['url']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['result'])) $this->magic_vars['item']['result']=''; ;if (  $this->magic_vars['item']['result']==1): ?>成功<? else: ?><font color="#FF0000">失败</font><? endif; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['addip'])) $this->magic_vars['item']['addip'] = ''; echo $this->magic_vars['item']['addip']; ?></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr>
			<td colspan="11" class="action">
			<div class="floatl">
			<script>
	  var url = '<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>';
	    
	  	function sousuo(){
			var username = $("#username").val();
			var quer = $("#quer").val();
			location.href=url+"&quer="+quer+"&username="+username;
		}
	  
	  </script>
	  
			</div>
			<div class="floatr">
				用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/>  处理信息：<input type="text" name="quer" id="quer" value="<? if (!isset($_REQUEST['quer'])) $_REQUEST['quer'] = ''; echo $_REQUEST['quer']; ?>"/> <input type="button" value="搜索" / onclick="sousuo()">
			</div>
			</td>
		</tr>
	<tr>
		<td colspan="7" class="page">
		<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?>
		</td>
	</tr>
</table>
