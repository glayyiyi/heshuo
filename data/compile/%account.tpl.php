<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "new" ||  $this->magic_vars['_A']['query_type'] == "edit"): ?>
<!-- 帐户信息列表 开始 -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="list"): ?>
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post">
		<tr>
			<td width="" class="main_td">ID</td>
			<td width="" class="main_td">用户名</td>
			<td width="" class="main_td">真实姓名</td>
			<td width="" class="main_td">总余额</td>
			<td width="" class="main_td">可用余额</td>
			<td width="" class="main_td">冻结金额</td>
			<td width="" class="main_td">待收金额</td>
            <td width="" class="main_td">待还金额</td>
            <td width="" class="main_td">净资产</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['account_list']) || $this->magic_vars['_A']['account_list']=='') $this->magic_vars['_A']['account_list'] = array();  $_from = $this->magic_vars['_A']['account_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?></td>
			<td><a href="javascript:void(0)" onclick='tipsWindown("用户详细信息查看","url:get?index.php?admin&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene",500,230,"true","","true","text");'><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = '';$_tmp = $this->magic_vars['item']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['use_money'])) $this->magic_vars['item']['use_money'] = '';$_tmp = $this->magic_vars['item']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['no_use_money'])) $this->magic_vars['item']['no_use_money'] = '';$_tmp = $this->magic_vars['item']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['collection'])) $this->magic_vars['item']['collection'] = '';$_tmp = $this->magic_vars['item']['collection'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<? $data = array('user_id'=>$this->magic_vars['item']['user_id'],'var'=>'acc');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['acc'] = borrowClass::GetWaitPayment($data);if(!is_array($this->magic_vars['acc'])){ $this->magic_vars['acc']=array();}?>
			<td>
			<? if (!isset($this->magic_vars['acc']['wait_payment'])) $this->magic_vars['acc']['wait_payment'] = '';$_tmp = $this->magic_vars['acc']['wait_payment'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>
			</td>
			<td>
			<script type="text/javascript">
			document.write(<? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = '';$_tmp = $this->magic_vars['item']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>-<? if (!isset($this->magic_vars['acc']['wait_payment'])) $this->magic_vars['acc']['wait_payment'] = '';$_tmp = $this->magic_vars['acc']['wait_payment'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>);
			</script>
			</td>
			<? unset($_magic_vars);unset($data); ?>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="10" class="action">
		<div class="floatr">
			用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/> <input type="button" value="搜索" onclick="sousuo()" />
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="9" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>
</table>
<!-- 帐户信息列表 结束 -->

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="listTJ"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr>
			<td width="" class="main_td">用户编号</td>
			<td width="" class="main_td">用户名</td>
			<td width="" class="main_td">真实姓名</td>
			<td width="" class="main_td">总余额</td>
			<td width="" class="main_td">可用余额</td>
			<td width="" class="main_td">冻结金额</td>
			<td width="" class="main_td">待收金额</td>
            <td width="" class="main_td">待还金额</td>
            <td width="" class="main_td">净资产</td>
			<td width="" class="main_td">对账时间</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['account_list']) || $this->magic_vars['_A']['account_list']=='') $this->magic_vars['_A']['account_list'] = array();  $_from = $this->magic_vars['_A']['account_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = '';$_tmp = $this->magic_vars['item']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['use_money'])) $this->magic_vars['item']['use_money'] = '';$_tmp = $this->magic_vars['item']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['no_use_money'])) $this->magic_vars['item']['no_use_money'] = '';$_tmp = $this->magic_vars['item']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['collection'])) $this->magic_vars['item']['collection'] = '';$_tmp = $this->magic_vars['item']['collection'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
            <td><? if (!isset($this->magic_vars['item']['wait_repayMoney'])) $this->magic_vars['item']['wait_repayMoney'] = '';$_tmp = $this->magic_vars['item']['wait_repayMoney'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
            <td><? if (!isset($this->magic_vars['item']['jin_money'])) $this->magic_vars['item']['jin_money'] = '';$_tmp = $this->magic_vars['item']['jin_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="11" class="action">
		<div class="floatl">
		<input type="button" onclick="javascript:location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/listTJ&type=excel'" value="导出列表" />
		</div>
		<div class="floatr">
			用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/> <input type="button" value="搜索" onclick="sousuo()" />
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="11" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>
</table>

<!-- 负数监控 开始 -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "fs_list"): ?>
<table border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post">
		<tr>
			<td width="" class="main_td">用户编号</td>
			<td width="" class="main_td">用户名</td>
			<td width="" class="main_td">真实姓名</td>
			<td width="" class="main_td">总余额</td>
			<td width="" class="main_td">可用余额</td>
			<td width="" class="main_td">冻结金额</td>
			<td width="" class="main_td">待收金额</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['fs_list']) || $this->magic_vars['_A']['fs_list']=='') $this->magic_vars['_A']['fs_list'] = array();  $_from = $this->magic_vars['_A']['fs_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = '';$_tmp = $this->magic_vars['item']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['use_money'])) $this->magic_vars['item']['use_money'] = '';$_tmp = $this->magic_vars['item']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['no_use_money'])) $this->magic_vars['item']['no_use_money'] = '';$_tmp = $this->magic_vars['item']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['collection'])) $this->magic_vars['item']['collection'] = '';$_tmp = $this->magic_vars['item']['collection'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
			<td colspan="7" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>
</table>
<!-- 负数监控 结束 -->

<!-- 用户提成 开始 -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="ticheng"): ?>
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr>
			<td width="" class="main_td">时间</td>
			<td width="" class="main_td">用户名</td>
			<td width="" class="main_td">好友投资总额(月)</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['account_ticheng']) || $this->magic_vars['_A']['account_ticheng']=='') $this->magic_vars['_A']['account_ticheng'] = array();  $_from = $this->magic_vars['_A']['account_ticheng']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['addtimes'])) $this->magic_vars['item']['addtimes'] = ''; echo $this->magic_vars['item']['addtimes']; ?></td>
			<td><a href="javascript:void(0)" onclick='tipsWindown("用户详细信息查看","url:get?index.php?admin&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene",500,230,"true","","true","text");'><? if (!isset($this->magic_vars['item']['usernames'])) $this->magic_vars['item']['usernames'] = ''; echo $this->magic_vars['item']['usernames']; ?></a></td>
			<td ><? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
			<td colspan="4" class="action">
			<div class="floatl">
			<input type="button" onclick="sousuo('excel')" value="导出列表" />
			</div>
			<div class="floatr">
				用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/><input type="button" value="搜索" onclick="sousuo()" />
			</div>
			</td>
		</tr>
		<tr>
			<td colspan="4" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>
</table>  
<!-- 用户提成 结束 -->

<!-- vip提成 开始 -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="vipTC"): ?>
<table border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post">
		<tr>
			<td width="" class="main_td">推广者用户名</td>	
			<td width="" class="main_td">下线用户名</td>
			<td width="" class="main_td">真实姓名</td>
			<td width="" class="main_td">注册时间</td>
			<td width="" class="main_td">是否VIP会员</td>
			<td width="" class="main_td">应得提成收入</td>
			<td width="" class="main_td">实际提成收入(已支付)</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['vipTC_list']) || $this->magic_vars['_A']['vipTC_list']=='') $this->magic_vars['_A']['vipTC_list'] = array();  $_from = $this->magic_vars['_A']['vipTC_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr>
			<td><? if (!isset($this->magic_vars['item']['inviteUserName'])) $this->magic_vars['item']['inviteUserName'] = ''; echo $this->magic_vars['item']['inviteUserName']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['vip_status'])) $this->magic_vars['item']['vip_status']=''; ;if (  $this->magic_vars['item']['vip_status'] == 1): ?>是<? else: ?>否<? endif; ?></td>
			<td><? if (!isset($this->magic_vars['item']['vip_status'])) $this->magic_vars['item']['vip_status']=''; ;if (  $this->magic_vars['item']['vip_status'] == 1): ?>100元<? else: ?>0元<? endif; ?></td>
			<td><? if (!isset($this->magic_vars['item']['invite_money'])) $this->magic_vars['item']['invite_money'] = ''; echo $this->magic_vars['item']['invite_money']; ?>元</td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="10" class="action">
		<div class="floatl">
		</div>
		<div class="floatr">
		介绍人用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
                  下线人用户名：<input type="text" name="username2" id="username2" value="<? if (!isset($_REQUEST['username2'])) $_REQUEST['username2'] = '';$_tmp = $_REQUEST['username2'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
                  <input type="button" value="搜索" onclick="sousuo()" />
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="9" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table>
<!-- vip提成 结束 -->

<!-- 资金对账表 开始 -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="moneyCheck"): ?>
<table border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post">
		<tr >
			<td width="" class="main_td">用户名</td>
			<td width="" class="main_td">资金总额</td>
			<td width="" class="main_td">可用资金</td>
			<td width="" class="main_td">冻结资金</td>
			<td width="" class="main_td">待收资金(1)</td>
			<td width="" class="main_td">待收资金(2)</td>
			<td width="" class="main_td">充值资金(1)</td>
			<td width="" class="main_td">充值资金(2)</td>
			<td width="" class="main_td">其中：线上</td>
			<td width="" class="main_td">其中：线下1</td>
			<td width="" class="main_td">其中：线下2</td>
			<td width="" class="main_td">成功提现金额</td>
			<!--td width="" class="main_td">提现实际到账</td>
			<td width="" class="main_td">提现费用</td-->
			<td width="" class="main_td">投标奖励金额</td>
			<!--td width="" class="main_td">投标已收资金</td-->
			<td width="" class="main_td">投标已收利息</td>
			<td width="" class="main_td">投标待收利息</td>
			<!--td width="" class="main_td">借款总金额</td-->
			<td width="" class="main_td">借款标奖励</td>
			<td width="" class="main_td">借款管理费</td>
			<td width="" class="main_td">待还本金</td>
			<td width="" class="main_td">待还利息</td>
			<td width="" class="main_td">借款已还利息</td>
			<td width="" class="main_td">系统扣费</td>
			<td width="" class="main_td">推广奖励</td>
			<td width="" class="main_td">VIP扣费</td> 
			<td width="" class="main_td">逾期总额</td>
			<!--td width="" class="main_td">资金总额1</td>
			<td width="" class="main_td">资金总额2</td-->
		</tr>
		<?  if(!isset($this->magic_vars['_A']['moneyCheck_list']) || $this->magic_vars['_A']['moneyCheck_list']=='') $this->magic_vars['_A']['moneyCheck_list'] = array();  $_from = $this->magic_vars['_A']['moneyCheck_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr>
			<td><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = ''; echo $this->magic_vars['item']['total']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['use_money'])) $this->magic_vars['item']['use_money'] = ''; echo $this->magic_vars['item']['use_money']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['no_use_money'])) $this->magic_vars['item']['no_use_money'] = ''; echo $this->magic_vars['item']['no_use_money']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['collection'])) $this->magic_vars['item']['collection'] = ''; echo $this->magic_vars['item']['collection']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['collection2'])) $this->magic_vars['item']['collection2'] = ''; echo $this->magic_vars['item']['collection2']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['reMoney'])) $this->magic_vars['item']['reMoney'] = ''; echo $this->magic_vars['item']['reMoney']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['reMoney2'])) $this->magic_vars['item']['reMoney2'] = ''; echo $this->magic_vars['item']['reMoney2']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['reMoney_1'])) $this->magic_vars['item']['reMoney_1'] = ''; echo $this->magic_vars['item']['reMoney_1']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['reMoney_2'])) $this->magic_vars['item']['reMoney_2'] = ''; echo $this->magic_vars['item']['reMoney_2']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['reMoney_3'])) $this->magic_vars['item']['reMoney_3'] = ''; echo $this->magic_vars['item']['reMoney_3']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['txTotal'])) $this->magic_vars['item']['txTotal'] = ''; echo $this->magic_vars['item']['txTotal']; ?></td>
			<!--td><? if (!isset($this->magic_vars['item']['txCredited'])) $this->magic_vars['item']['txCredited'] = ''; echo $this->magic_vars['item']['txCredited']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['txFee'])) $this->magic_vars['item']['txFee'] = ''; echo $this->magic_vars['item']['txFee']; ?></td-->
			<td><? if (!isset($this->magic_vars['item']['awardAdd'])) $this->magic_vars['item']['awardAdd'] = ''; echo $this->magic_vars['item']['awardAdd']; ?></td>
			<!--td><? if (!isset($this->magic_vars['item']['collecdMoney'])) $this->magic_vars['item']['collecdMoney'] = ''; echo $this->magic_vars['item']['collecdMoney']; ?></td-->
			<td><? if (!isset($this->magic_vars['item']['interestYes'])) $this->magic_vars['item']['interestYes'] = ''; echo $this->magic_vars['item']['interestYes']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['interestWait'])) $this->magic_vars['item']['interestWait'] = ''; echo $this->magic_vars['item']['interestWait']; ?></td>
			<!--td><? if (!isset($this->magic_vars['item']['accountBorrow'])) $this->magic_vars['item']['accountBorrow'] = ''; echo $this->magic_vars['item']['accountBorrow']; ?></td-->
			<td><? if (!isset($this->magic_vars['item']['borrowAward'])) $this->magic_vars['item']['borrowAward'] = ''; echo $this->magic_vars['item']['borrowAward']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['borrowMgrFee'])) $this->magic_vars['item']['borrowMgrFee'] = ''; echo $this->magic_vars['item']['borrowMgrFee']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['waitMoney_money'])) $this->magic_vars['item']['waitMoney_money'] = ''; echo $this->magic_vars['item']['waitMoney_money']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['waitMoney_interest'])) $this->magic_vars['item']['waitMoney_interest'] = ''; echo $this->magic_vars['item']['waitMoney_interest']; ?></td>
			<td>
				<script type="text/javascript">
				document.write(<? if (!isset($this->magic_vars['item']['repayment_yesaccount'])) $this->magic_vars['item']['repayment_yesaccount'] = '';$_tmp = $this->magic_vars['item']['repayment_yesaccount'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>);
				</script>
			</td>
			<td><? if (!isset($this->magic_vars['item']['feeSystem'])) $this->magic_vars['item']['feeSystem'] = ''; echo $this->magic_vars['item']['feeSystem']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['invite_money'])) $this->magic_vars['item']['invite_money'] = ''; echo $this->magic_vars['item']['invite_money']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['vipMoney'])) $this->magic_vars['item']['vipMoney'] = ''; echo $this->magic_vars['item']['vipMoney']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['accountLateAll'])) $this->magic_vars['item']['accountLateAll'] = '';$_tmp = $this->magic_vars['item']['accountLateAll'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="24" class="action">
		<div class="floatr">
			用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
            <input type="button" value="搜索" onclick="sousuo()" />
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="24" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?>
			</td>
		</tr>
	</form>
</table>  
<!-- 资金对账表 结束 -->
                        
<!-- 提现参考 开始 -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="cashCK"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post">
		<tr>
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">用户名</td>
			<td width="" class="main_td">真实姓名</td>
			<td width="" class="main_td">投资担保额度</td>
			<td width="" class="main_td">使用的信用额度（X）</td>
			<td width="" class="main_td">净资产(W)</td>
			<td width="" class="main_td">待收利息(E)</td>
 			<td width="" class="main_td">提现标准（W+1.1X-E）</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['account_cashCK_list']) || $this->magic_vars['_A']['account_cashCK_list']=='') $this->magic_vars['_A']['account_cashCK_list'] = array();  $_from = $this->magic_vars['_A']['account_cashCK_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?></td>
			<td>
			<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>
			</td>
			<td><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['tender_vouch'])) $this->magic_vars['item']['tender_vouch'] = '';$_tmp = $this->magic_vars['item']['tender_vouch'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td>
                <script type="text/javascript">
                       document.write(<? if (!isset($this->magic_vars['item']['credit'])) $this->magic_vars['item']['credit'] = '';$_tmp = $this->magic_vars['item']['credit'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>-<? if (!isset($this->magic_vars['item']['credit_use'])) $this->magic_vars['item']['credit_use'] = '';$_tmp = $this->magic_vars['item']['credit_use'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>+<? if (!isset($this->magic_vars['item']['borrow_vouch'])) $this->magic_vars['item']['borrow_vouch'] = '';$_tmp = $this->magic_vars['item']['borrow_vouch'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>-<? if (!isset($this->magic_vars['item']['borrow_vouch_use'])) $this->magic_vars['item']['borrow_vouch_use'] = '';$_tmp = $this->magic_vars['item']['borrow_vouch_use'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>);
                </script>
          	</td>
			<td>
                <? $data = array('user_id'=>$this->magic_vars['item']['user_id'],'var'=>'acc');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['acc'] = borrowClass::GetUserLog($data);if(!is_array($this->magic_vars['acc'])){ $this->magic_vars['acc']=array();}?>
                <script type="text/javascript">
                document.write(<? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = '';$_tmp = $this->magic_vars['item']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>-<? if (!isset($this->magic_vars['acc']['wait_payment'])) $this->magic_vars['acc']['wait_payment'] = '';$_tmp = $this->magic_vars['acc']['wait_payment'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>);
                </script>
                <? unset($_magic_vars);unset($data); ?>
			</td>
			<td >
				<? $data = array('user_id'=>$this->magic_vars['item']['user_id'],'var'=>'acc');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['acc'] = borrowClass::GetUserLog($data);if(!is_array($this->magic_vars['acc'])){ $this->magic_vars['acc']=array();}?>
				<? if (!isset($this->magic_vars['acc']['collection_interest0'])) $this->magic_vars['acc']['collection_interest0'] = '';$_tmp = $this->magic_vars['acc']['collection_interest0'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>
				<? unset($_magic_vars);unset($data); ?>
			</td>
			<td >
				<? $data = array('user_id'=>$this->magic_vars['item']['user_id'],'var'=>'acc');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['acc'] = borrowClass::GetUserLog($data);if(!is_array($this->magic_vars['acc'])){ $this->magic_vars['acc']=array();}?>
				<script type="text/javascript">
				document.write(<? if (!isset($this->magic_vars['item']['credit'])) $this->magic_vars['item']['credit'] = '';$_tmp = $this->magic_vars['item']['credit'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>*1.1-<? if (!isset($this->magic_vars['item']['credit_use'])) $this->magic_vars['item']['credit_use'] = '';$_tmp = $this->magic_vars['item']['credit_use'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>*1.1+<? if (!isset($this->magic_vars['item']['borrow_vouch'])) $this->magic_vars['item']['borrow_vouch'] = '';$_tmp = $this->magic_vars['item']['borrow_vouch'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>*1.1-<? if (!isset($this->magic_vars['item']['borrow_vouch_use'])) $this->magic_vars['item']['borrow_vouch_use'] = '';$_tmp = $this->magic_vars['item']['borrow_vouch_use'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>*1.1+<? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = '';$_tmp = $this->magic_vars['item']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>-<? if (!isset($this->magic_vars['acc']['wait_payment'])) $this->magic_vars['acc']['wait_payment'] = '';$_tmp = $this->magic_vars['acc']['wait_payment'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>-<? if (!isset($this->magic_vars['acc']['collection_interest0'])) $this->magic_vars['acc']['collection_interest0'] = '';$_tmp = $this->magic_vars['acc']['collection_interest0'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>);
				</script>
				<? unset($_magic_vars);unset($data); ?>
			</td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="10" class="action">
		<div class="floatl">
		</div>
		<div class="floatr">
			用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/> <input type="button" value="搜索" onclick="sousuo()" />
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="9" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table>
<!-- 提现参考 结束 -->
<!--提现记录列表 开始-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="cash"): ?>
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post">
		<tr>
			<td width="" class="main_td">ID</td>
			<td width="*" class="main_td">用户名称</td>
			<td width="*" class="main_td">真实姓名</td>
			<td width="" class="main_td">提现账号</td>
			<td width="" class="main_td">提现银行</td>
			<td width="" class="main_td">支行</td>
			<td width="" class="main_td">提现总额</td>
			<td width="" class="main_td">到账金额</td>
			<td width="" class="main_td">手续费</td>
			<td width="" class="main_td">红包抵扣</td>
			<td width="" class="main_td">提现时间</td>
			<td width="" class="main_td">状态</td>
			<td width="" class="main_td">操作</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['account_cash_list']) || $this->magic_vars['_A']['account_cash_list']=='') $this->magic_vars['_A']['account_cash_list'] = array();  $_from = $this->magic_vars['_A']['account_cash_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/cash&username=<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td ><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['bank_name'])) $this->magic_vars['item']['bank_name'] = ''; echo $this->magic_vars['item']['bank_name']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['branch'])) $this->magic_vars['item']['branch'] = ''; echo $this->magic_vars['item']['branch']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = ''; echo $this->magic_vars['item']['total']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['credited'])) $this->magic_vars['item']['credited'] = ''; echo $this->magic_vars['item']['credited']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['fee'])) $this->magic_vars['item']['fee'] = ''; echo $this->magic_vars['item']['fee']; ?></td>	
			<td ><? if (!isset($this->magic_vars['item']['hongbao'])) $this->magic_vars['item']['hongbao'] = ''; echo $this->magic_vars['item']['hongbao']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?></td>
			<td ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>审核中<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==1): ?>已通过 <? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>被拒绝<? endif; ?></td>
			<td ><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/cash_view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">审核/查看</a></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="13" class="action">
		<div class="floatl">
			<input type="button" value="导出当前条件报表" onclick="sousuo('excel')" />
		</div>
		<div class="floatr">
		提现账号：<input type="text" name="account" id="account" value="<? if (!isset($_REQUEST['account'])) $_REQUEST['account'] = ''; echo $_REQUEST['account']; ?>" maxlength="19" />
		充值时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/>到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>	
		用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
		状态：<select id="status"><option value="">全部</option><option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>已通过</option><option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> selected="selected"<? endif; ?>>待审核</option><option value="2" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="2"): ?> selected="selected"<? endif; ?>>审核失败</option></select><input type="button" value="搜索" onclick="sousuo()" />
		</div>
		</td>
	</tr>
	<tr>
		<td colspan="13" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
		</td>
	</tr>
	</form>	
</table>
<!--提现记录列表 结束-->
<!--提现审核 开始-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "cash_view"): ?>
<div class="module_add">
	<form name="form1" method="post" action="">
	<div class="module_title"><strong>提现审核/查看</strong></div>
	<div class="module_border">
		<div class="l">用户名：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['username'])) $this->magic_vars['_A']['account_cash_result']['username'] = ''; echo $this->magic_vars['_A']['account_cash_result']['username']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">提现银行：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['bank_name'])) $this->magic_vars['_A']['account_cash_result']['bank_name'] = ''; echo $this->magic_vars['_A']['account_cash_result']['bank_name']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">提现支行：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['branch'])) $this->magic_vars['_A']['account_cash_result']['branch'] = ''; echo $this->magic_vars['_A']['account_cash_result']['branch']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">提现账号：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['account'])) $this->magic_vars['_A']['account_cash_result']['account'] = ''; echo $this->magic_vars['_A']['account_cash_result']['account']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">提现总额：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['total'])) $this->magic_vars['_A']['account_cash_result']['total'] = ''; echo $this->magic_vars['_A']['account_cash_result']['total']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">到账金额：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['credited'])) $this->magic_vars['_A']['account_cash_result']['credited'] = ''; echo $this->magic_vars['_A']['account_cash_result']['credited']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">手续费：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['fee'])) $this->magic_vars['_A']['account_cash_result']['fee'] = ''; echo $this->magic_vars['_A']['account_cash_result']['fee']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">状态：</div>
		<div class="c">
		<? if (!isset($this->magic_vars['_A']['account_cash_result']['status'])) $this->magic_vars['_A']['account_cash_result']['status']=''; ;if (  $this->magic_vars['_A']['account_cash_result']['status']==0): ?>提现审核中<? if (!isset($this->magic_vars['_A']['account_cash_result']['status'])) $this->magic_vars['_A']['account_cash_result']['status']=''; ;elseif (  $this->magic_vars['_A']['account_cash_result']['status']==1): ?>提现已通过 <? if (!isset($this->magic_vars['_A']['account_cash_result']['status'])) $this->magic_vars['_A']['account_cash_result']['status']=''; ;elseif (  $this->magic_vars['_A']['account_cash_result']['status']==2): ?>提现被拒绝<? endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">添加时间/IP:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_cash_result']['addtime'])) $this->magic_vars['_A']['account_cash_result']['addtime'] = '';$_tmp = $this->magic_vars['_A']['account_cash_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>/<? if (!isset($this->magic_vars['_A']['account_cash_result']['addip'])) $this->magic_vars['_A']['account_cash_result']['addip'] = ''; echo $this->magic_vars['_A']['account_cash_result']['addip']; ?></div>
	</div>
	<? if (!isset($this->magic_vars['_A']['account_cash_result']['status'])) $this->magic_vars['_A']['account_cash_result']['status']=''; ;if (  $this->magic_vars['_A']['account_cash_result']['status']==0): ?>
	<div class="module_title"><strong>审核此提现信息</strong></div>
	<div class="module_border">
		<div class="l">状态:</div>
		<div class="c">
		<input type="radio" name="status" value="0" <? if (!isset($this->magic_vars['_A']['account_cash_result']['status'])) $this->magic_vars['_A']['account_cash_result']['status']=''; ;if (  $this->magic_vars['_A']['account_cash_result']['status']==0): ?> checked="checked"<? endif; ?> />等待审核  <input type="radio" name="status" value="1" <? if (!isset($this->magic_vars['_A']['account_cash_result']['status'])) $this->magic_vars['_A']['account_cash_result']['status']=''; ;if (  $this->magic_vars['_A']['account_cash_result']['status']==1): ?> checked="checked"<? endif; ?>/>审核通过 <input type="radio" name="status" value="2" <? if (!isset($this->magic_vars['_A']['account_cash_result']['status'])) $this->magic_vars['_A']['account_cash_result']['status']=''; ;if (  $this->magic_vars['_A']['account_cash_result']['status']==2): ?> checked="checked"<? endif; ?>/>审核不通过 </div>
	</div>
	<div class="module_border" >
		<div class="l">到账金额:</div>
		<div class="c">
			<input type="text" name="credited" readonly="readonly" style="background:#CCCCCC" value="<? if (!isset($this->magic_vars['_A']['account_cash_result']['credited'])) $this->magic_vars['_A']['account_cash_result']['credited'] = ''; echo $this->magic_vars['_A']['account_cash_result']['credited']; ?>" size="10">
		</div>
	</div>
	<div class="module_border" >
		<div class="l">手续费:</div>
		<div class="c">
			<input type="text" name="fee" value="<? if (!isset($this->magic_vars['_A']['account_cash_result']['fee'])) $this->magic_vars['_A']['account_cash_result']['fee'] = ''; echo $this->magic_vars['_A']['account_cash_result']['fee']; ?>" size="5" onchange="updateFee(<? if (!isset($this->magic_vars['_A']['account_cash_result']['total'])) $this->magic_vars['_A']['account_cash_result']['total'] = ''; echo $this->magic_vars['_A']['account_cash_result']['total']; ?>)" readonly="readonly" style="background:#CCCCCC">
			
			<script type="text/javascript">
			function updateFee(total){
				var form = document.forms['form1'];
				var fee = parseFloat(form.elements['fee'].value);
				var hongbao = parseFloat(form.elements['hongbao'].value);
				if(isNaN(fee)){
					fee = 0;
				}
				if(fee<hongbao){
					alert("手续费不能小于抵扣的红包");
					form.elements['fee'].value = hongbao;
				}else if(fee>total/2){
					alert("手续费不能大于提现总额的50%");
					form.elements['fee'].value = total/2;
				}else{
					form.elements['fee'].value = fee;
				}
				form.elements['credited'].value = parseFloat(total)-parseFloat(form.elements['fee'].value)+parseFloat(form.elements['hongbao'].value);
			}
			function check_form(){
				var frm = document.forms['form1'];
				var verify_remark = frm.elements['verify_remark'].value;
				var errorMsg = '';
				if(verify_remark.length == 0 ) {
					errorMsg += '--备注必须填写' + '\n';
				}
				if(errorMsg.length == 0){
					frm.submit();
					frm.elements['reset'].disabled=true;
					frm.elements['reset'].value="审核提交中....";
					submit_fool();
				}else{
					alert(errorMsg);
					return;
				}
			}
			</script>
			
		</div>
	</div>
	<div class="module_border" >
		<div class="l">红包抵扣:</div>
		<div class="c">
			<input type="text" name="hongbao" readonly="readonly" style="background:#CCCCCC" value="<? if (!isset($this->magic_vars['_A']['account_cash_result']['hongbao'])) $this->magic_vars['_A']['account_cash_result']['hongbao'] = ''; echo $this->magic_vars['_A']['account_cash_result']['hongbao']; ?>" size="10">
		</div>
	</div>
	<div class="module_border" >
		<div class="l">审核备注:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="5"><? if (!isset($this->magic_vars['_A']['account_result']['verify_remark'])) $this->magic_vars['_A']['account_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['account_result']['verify_remark']; ?></textarea>
		</div>
	</div>
	<div class="module_submit" >
		<input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['account_cash_result']['id'])) $this->magic_vars['_A']['account_cash_result']['id'] = ''; echo $this->magic_vars['_A']['account_cash_result']['id']; ?>" />
		<input type="hidden" name="user_id" value="<? if (!isset($this->magic_vars['_A']['account_cash_result']['user_id'])) $this->magic_vars['_A']['account_cash_result']['user_id'] = ''; echo $this->magic_vars['_A']['account_cash_result']['user_id']; ?>" />
		<input type="button" name="reset" value="审核此提现信息" onclick="check_form()" />
	</div>
	<? else: ?>
	<div class="module_border">
		<div class="l">审核信息：</div>
		<div class="c">
			审核人：<? if (!isset($this->magic_vars['_A']['account_cash_result']['verify_username'])) $this->magic_vars['_A']['account_cash_result']['verify_username'] = ''; echo $this->magic_vars['_A']['account_cash_result']['verify_username']; ?>,审核时间：<? if (!isset($this->magic_vars['_A']['account_cash_result']['verify_time'])) $this->magic_vars['_A']['account_cash_result']['verify_time'] = '';$_tmp = $this->magic_vars['_A']['account_cash_result']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?>,审核备注：<? if (!isset($this->magic_vars['_A']['account_cash_result']['verify_remark'])) $this->magic_vars['_A']['account_cash_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['account_cash_result']['verify_remark']; ?>
		</div>
	</div>
	<? endif; ?>
	</form>
</div>


<!--充值记录列表 开始-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="recharge"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="" class="main_td">ID</td>
            <td width="*" class="main_td">流水号</td>
			<td width="*" class="main_td">用户名称</td>
			<td width="*" class="main_td">真实姓名</td>
			<td width="" class="main_td">类型</td>
			<td width="" class="main_td">所属银行</td>
			<td width="" class="main_td">充值金额</td>
			<td width="" class="main_td">费用</td>
			<td width="" class="main_td">到账金额</td>
			<td width="" class="main_td">奖励红包</td>
			<td width="" class="main_td">充值时间</td>
			<td width="" class="main_td">状态</td>
			<td width="" class="main_td">银行返回</td>
			<td width="" class="main_td">操作</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['account_recharge_list']) || $this->magic_vars['_A']['account_recharge_list']=='') $this->magic_vars['_A']['account_recharge_list'] = array();  $_from = $this->magic_vars['_A']['account_recharge_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['trade_no'])) $this->magic_vars['item']['trade_no'] = ''; echo $this->magic_vars['item']['trade_no']; ?></td>
			<td><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/recharge&username=<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>&a=cash"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td ><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;if (  $this->magic_vars['item']['type']==1): ?>网上充值<? else: ?>线下充值<? endif; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['payment'])) $this->magic_vars['item']['payment']=''; ;if (  $this->magic_vars['item']['payment']==0): ?>手动充值<? else: ?><? if (!isset($this->magic_vars['item']['payment_name'])) $this->magic_vars['item']['payment_name'] = ''; echo $this->magic_vars['item']['payment_name']; ?><? endif; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?>元</td>
			<td ><? if (!isset($this->magic_vars['item']['fee'])) $this->magic_vars['item']['fee'] = ''; echo $this->magic_vars['item']['fee']; ?>元</td>
			<td ><font color="#FF0000"><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = ''; echo $this->magic_vars['item']['total']; ?>元</font></td>
			<td ><? if (!isset($this->magic_vars['item']['hongbao'])) $this->magic_vars['item']['hongbao'] = ''; echo $this->magic_vars['item']['hongbao']; ?>元</td>
			<td ><font color="#FF3300">提交：<? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></font><br/>
			<font color="#aaaaaa">完成：<? if (!isset($this->magic_vars['item']['verify_time'])) $this->magic_vars['item']['verify_time'] = '';$_tmp = $this->magic_vars['item']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></font>
			</td>
			<td ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']='';if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0 ||  $this->magic_vars['item']['status']== -1): ?><font color="#6699CC">待审核</font><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (   $this->magic_vars['item']['status']==1): ?> 成功 <? else: ?><font color="#FF0000">失败</font><? endif; ?></td>
            <td ><? if (!isset($this->magic_vars['item']['return'])) $this->magic_vars['item']['return']='';if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;if (  $this->magic_vars['item']['return']==""&&  $this->magic_vars['item']['type']==1): ?><span style="color:#F00">线上未到帐</span><? if (!isset($this->magic_vars['item']['return'])) $this->magic_vars['item']['return']='';if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;elseif (  $this->magic_vars['item']['return']<>""&&  $this->magic_vars['item']['type']==1): ?> 线上已到账<? else: ?>线下核对<? endif; ?></td>
			<td ><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/recharge_view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">审核/查看</a></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
	<tr>
		<td colspan="14" class="action">
		<div class="floatl">
		<input type="button" value="导出当前报表" onclick="sousuo('excel')" />
		</div>
		<div class="floatr">
		所属银行：<select id="pertainbank"><option value="0">全部</option><option value="-1">线下充值</option><option value="-2">网上充值</option><option value="-3">手动充值</option>
		<?  if(!isset($this->magic_vars['_A']['account_payment_list']) || $this->magic_vars['_A']['account_payment_list']=='') $this->magic_vars['_A']['account_payment_list'] = array();  $_from = $this->magic_vars['_A']['account_payment_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
		<? if (!isset($_REQUEST['pertainbank'])) $_REQUEST['pertainbank']='';if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id']=''; ;if (  $_REQUEST['pertainbank']== $this->magic_vars['var']['id']): ?>
		<option value="<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>" selected="selected"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></option>
		<? else: ?>
		<option value="<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></option>
		<? endif; ?>
		<? endforeach; endif; unset($_from); ?></select>
		充值时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>
		用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
		流水号：<input type="text" name="trade_no" id="trade_no" value="<? if (!isset($_REQUEST['trade_no'])) $_REQUEST['trade_no'] = ''; echo $_REQUEST['trade_no']; ?>"/> 
		状态<select id="status" ><option value=''>全部</option><option value="-1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="-1"): ?> selected="selected"<? endif; ?>>未审核</option><option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>审核成功</option><option value="2" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="2"): ?> selected="selected"<? endif; ?>>审核失败</option></select> <input type="button" value="搜索" onclick="sousuo()" />
		</div>
		</td>
	</tr>
		<tr>
			<td colspan="14" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table>
<!--充值记录列表 结束-->
<!--批量导入充值记录-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="rechargefromexcel"): ?>
<form action='' method='post' enctype="multipart/form-data">
<div class="module_border">
	<div class="l">导入文件：</div>
	<div class="c">
		<input type="file" name="excelfile" />
	</div>
	<div class="c">
		<input type="submit" value="提交导入" />
	</div>
</div>
</form>
<!--充值审核 开始-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "recharge_view"): ?>
<div class="module_add">
	<form name="form1" method="post" action="">
	<div class="module_title"><strong>充值查看</strong></div>
	<div class="module_border">
		<div class="l">用户名：</div>
		<div class="c">
			<a href="javascript:void(0)" onclick='tipsWindown("用户详细信息查看","url:get?index.php?admin&q=module/user/view&user_id=<? if (!isset($this->magic_vars['_A']['account_recharge_result']['user_id'])) $this->magic_vars['_A']['account_recharge_result']['user_id'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['user_id']; ?>&type=scene",500,230,"true","","true","text");'><? if (!isset($this->magic_vars['_A']['account_recharge_result']['username'])) $this->magic_vars['_A']['account_recharge_result']['username'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['username']; ?></a>
		</div>
	</div>
	<div class="module_border">
		<div class="l">充值类型：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['type'])) $this->magic_vars['_A']['account_recharge_result']['type']=''; ;if (  $this->magic_vars['_A']['account_recharge_result']['type']==1): ?>网上充值<? else: ?>线下充值<? endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">支付方式：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['payment_name'])) $this->magic_vars['_A']['account_recharge_result']['payment_name'] = '';$_tmp = $this->magic_vars['_A']['account_recharge_result']['payment_name'];$_tmp = $this->magic_modifier("default",$_tmp,"管理员添加充值");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">充值总额：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['money'])) $this->magic_vars['_A']['account_recharge_result']['money'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['money']; ?>元
		</div>
	</div>
	<div class="module_border">
		<div class="l">费用：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['fee'])) $this->magic_vars['_A']['account_recharge_result']['fee'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['fee']; ?>元
		</div>
	</div>
	<div class="module_border">
		<div class="l">奖励红包：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['hongbao'])) $this->magic_vars['_A']['account_recharge_result']['hongbao'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['hongbao']; ?>元
		</div>
	</div>
	<div class="module_border">
		<div class="l">现金奖励：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['reward'])) $this->magic_vars['_A']['account_recharge_result']['reward'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['reward']; ?>元
		</div>
	</div>
	<div class="module_border">
		<div class="l">实际到账：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['total'])) $this->magic_vars['_A']['account_recharge_result']['total'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['total']; ?>元
		</div>
	</div>
	<div class="module_border">
		<div class="l">用户备注：</div>
		<div class="c">
		<? if (!isset($this->magic_vars['_A']['account_recharge_result']['remark'])) $this->magic_vars['_A']['account_recharge_result']['remark'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['remark']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">流水号：</div>
		<div class="c">
		<? if (!isset($this->magic_vars['_A']['account_recharge_result']['trade_no'])) $this->magic_vars['_A']['account_recharge_result']['trade_no'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['trade_no']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">状态：</div>
		<div class="c">
		<? if (!isset($this->magic_vars['_A']['account_recharge_result']['status'])) $this->magic_vars['_A']['account_recharge_result']['status']=''; ;if (  $this->magic_vars['_A']['account_recharge_result']['status']==0): ?>等待审核<? if (!isset($this->magic_vars['_A']['account_recharge_result']['status'])) $this->magic_vars['_A']['account_recharge_result']['status']=''; ;elseif (  $this->magic_vars['_A']['account_recharge_result']['status']==1): ?> 充值成功 <? if (!isset($this->magic_vars['_A']['account_recharge_result']['status'])) $this->magic_vars['_A']['account_recharge_result']['status']=''; ;elseif (  $this->magic_vars['_A']['account_recharge_result']['status']==2): ?>充值失败<? endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">添加时间/IP:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['addtime'])) $this->magic_vars['_A']['account_recharge_result']['addtime'] = '';$_tmp = $this->magic_vars['_A']['account_recharge_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>/<? if (!isset($this->magic_vars['_A']['account_recharge_result']['addip'])) $this->magic_vars['_A']['account_recharge_result']['addip'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['addip']; ?></div>
	</div>
	<? if (!isset($this->magic_vars['_A']['account_recharge_result']['status'])) $this->magic_vars['_A']['account_recharge_result']['status']=''; ;if (  $this->magic_vars['_A']['account_recharge_result']['status']==0): ?>
	<div class="module_title"><strong>审核此充值信息</strong></div>
	<div class="module_border">
		<div class="l">状态:</div>
		<div class="c">
	<input type="radio" name="status" value="1"/>充值成功   <input type="radio" name="status" value="2"  checked="checked"/>充值失败 </div>
	</div>
	<div class="module_border" >
		<div class="l">到账金额:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['account_recharge_result']['total'])) $this->magic_vars['_A']['account_recharge_result']['total'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['total']; ?>元
			<input type="hidden" name="total" value="<? if (!isset($this->magic_vars['_A']['account_recharge_result']['total'])) $this->magic_vars['_A']['account_recharge_result']['total'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['total']; ?>" size="15" readonly="readonly">
		</div>
	</div>
	<? if (!isset($this->magic_vars['_A']['account_recharge_result']['type'])) $this->magic_vars['_A']['account_recharge_result']['type']=''; ;if (  $this->magic_vars['_A']['account_recharge_result']['type']!=1): ?>
	<div class="module_border" >
		<div class="l">到账现金奖励:</div>
		<div class="c"><? if (!isset($this->magic_vars['_A']['account_recharge_result']['reward'])) $this->magic_vars['_A']['account_recharge_result']['reward'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['reward']; ?>元</div>
	</div>
	<? endif; ?>
	<div class="module_border" >
		<div class="l">审核备注:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="5"><? if (!isset($this->magic_vars['_A']['account_recharge_result']['verify_remark'])) $this->magic_vars['_A']['account_recharge_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['verify_remark']; ?></textarea>
		</div>
	</div>
	<div class="module_border" >
		<div class="l">验证码:</div>
		<div class="c">
		<input type="text" size="5" maxlength="4" name="valicode">
		<img style="cursor:pointer; margin-left:3px;" onclick="this.src='/plugins/index.php?q=imgcode&amp;t=' + Math.random();" alt="点击刷新" src="/plugins/index.php?q=imgcode">
		</div>
	</div>
	<div class="module_submit" >
		<input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['account_recharge_result']['id'])) $this->magic_vars['_A']['account_recharge_result']['id'] = ''; echo $this->magic_vars['_A']['account_recharge_result']['id']; ?>" />
		<input type="button" name="reset" value="审核此充值信息" onclick="check_form()" />
	</div>
	<? else: ?>
		<? if (!isset($this->magic_vars['_A']['account_recharge_result']['type'])) $this->magic_vars['_A']['account_recharge_result']['type']=''; ;if (  $this->magic_vars['_A']['account_recharge_result']['type']==2): ?>
	<div class="module_border">
		<div class="l">审核信息：</div>
		<div class="c">
			审核人：<? if (!isset($this->magic_vars['_A']['account_result']['verify_username'])) $this->magic_vars['_A']['account_result']['verify_username'] = ''; echo $this->magic_vars['_A']['account_result']['verify_username']; ?>,审核时间：<? if (!isset($this->magic_vars['_A']['account_result']['verify_time'])) $this->magic_vars['_A']['account_result']['verify_time'] = '';$_tmp = $this->magic_vars['_A']['account_result']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?>,审核备注：<? if (!isset($this->magic_vars['_A']['account_result']['verify_remark'])) $this->magic_vars['_A']['account_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['account_result']['verify_remark']; ?>
		</div>
	</div>
	<? endif; ?>
	<? endif; ?>
	</form>
</div>

<script type="text/javascript">
function check_form(){
	var frm = document.forms['form1'];
	var verify_remark = frm.elements['verify_remark'].value;
	var valicode = frm.elements['valicode'].value;
	var errorMsg = '';
	if(verify_remark.length == 0 ) {
		errorMsg += '--备注必须填写' + '\n';
	}
	if(valicode.length != 4){
		errorMsg += '--验证码输入有误' + '\n';
	}
	if(errorMsg.length == 0){
		frm.submit();
		frm.elements['reset'].disabled=true;
		frm.elements['reset'].value="审核提交中....";
		submit_fool();
	}else{
		alert(errorMsg);
		return;
	}
}
</script>

<!--充值审核 结束-->

<!--添加充值记录 开始-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "recharge_new"): ?>
<div class="module_add">
	<form name="form1" method="post" action="" enctype="multipart/form-data">
	<div class="module_title"><strong>添加充值</strong></div>
	<div class="module_border">
		<div class="l">用户名：</div>
		<div class="c">
			<input type="text" name="username" /><font style="color:red">*</font>
		</div>
	</div>
	<div class="module_border">
		<div class="l">类型：</div>
		<div class="c">
			线下充值<input type="hidden" name="type" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">金额：</div>
		<div class="c">
			<input type="text" name="money" maxlength="6" /><font style="color:red">*</font>
		</div>
	</div>
	<div class="module_border">
		<div class="l">备注：</div>
		<div class="c">
			<input type="text" name="remark" value="添加充值记录" /><font style="color:red">*</font>
		</div>
	</div>
	<!-- <div class="module_border">
		<div class="l">批量添加：</div>
		<div class="c">
			<input type="file" name="excelfile" />
			<input type="button" value="批量添加" onclick="document.forms['form1'].submit();this.disabled=true;" />
		</div>
	</div> -->
	<div class="module_submit" >
		<input type="button" name="reset" value="确认充值" onclick="check_form()" />
	</div>
</form>
</div>

<script type="text/javascript">
function check_form(){
	var frm = document.forms['form1'];
	var remark = frm.elements['remark'].value;
	var username = frm.elements['username'].value;
	var money = frm.elements['money'].value;
	var errorMsg = '';
	if(remark.length == 0 ) {
		errorMsg += '--备注必须填写' + '\n';
	}
	if(username.length == 0){
		errorMsg += '--用户名必须填写' + '\n';
	}
	if(money.length == 0){
		errorMsg += '--金额必须填写' + '\n';
	}
	if(errorMsg.length == 0){
		frm.submit();
		frm.elements['reset'].disabled=true;
		frm.elements['reset'].value="充值提交中...";
		submit_fool();
	}else{
		alert(errorMsg);
		return;
	}
}
</script>

<!--添加充值记录 结束-->
<!--费用扣除 开始-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "deduct"): ?>
<div class="module_add">
	<form name="form1" method="post" action="">
	<div class="module_title"><strong>费用扣除</strong></div>
	<div class="module_border">
		<div class="l">用户名：</div>
		<div class="c">
			<input type="text" name="username" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">类型：</div>
		<div class="c">
			<select name="type">
				<option value="scene_account">现场认证费用</option>
				<option value="vouch_advanced">担保垫付扣费</option>
				<option value="borrow_kouhui">借款人罚金扣回</option>
				<option value="account_other">其他</option>
			</select>
		</div>
	</div>
	<div class="module_border">
		<div class="l">金额：</div>
		<div class="c">
			<input type="text" name="money" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">备注：</div>
		<div class="c">
			<input type="text" name="remark" />比如，现场费用扣除200元
		</div>
	</div>
	<div class="module_border">
		<div class="l">验证码：</div>
		<div class="c"><input  class="user_aciton_input"  name="valicode" type="text" size="8" maxlength="4" style=" padding-top:4px; height:16px; width:70px;"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	<div class="module_submit" >
		<input type="button"  name="reset" value="确定扣除" onclick="check_form()" />
	</div>
</form>
</div>

<script type="text/javascript">
function check_form(){
	var frm = document.forms['form1'];
	var remark = frm.elements['remark'].value;
	var username = frm.elements['username'].value;
	var money = frm.elements['money'].value;
	var valicode = frm.elements['valicode'].value;
	var errorMsg = '';
	if(remark.length == 0 ) {
		errorMsg += '--备注必须填写' + '\n';
	}
	if(username.length == 0){
		errorMsg += '--用户名必须填写' + '\n';
	}
	if(money.length == 0){
		errorMsg += '--金额必须填写' + '\n';
	}
	if(valicode.length != 4){
		errorMsg += '--验证码输入有误' + '\n';
	}
	if(errorMsg.length == 0){
		frm.submit();
		frm.elements['reset'].disabled=true;
		frm.elements['reset'].value="提交中...";
		submit_fool();
	}else{
		alert(errorMsg);
		return;
	}
}
</script>

<!--费用扣除  结束-->
<!--资金使用记录列表 开始-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="log"): ?>
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr>
			<td width="" class="main_td">ID</td>
			<td width="" class="main_td">用户名称</td>
			<td width="" class="main_td">类型</td>
			<td width="" class="main_td">总金额</td>
			<td width="" class="main_td">操作金额</td>
			<td width="" class="main_td">可用金额</td>
			<td width="" class="main_td">冻结金额</td>
			<td width="" class="main_td">待收金额</td>
			<td width="" class="main_td">交易对方</td>
			<td width="" class="main_td">记录时间</td>
            <td width="" class="main_td">备注</td>
			<td width="" class="main_td">操作</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['account_log_list']) || $this->magic_vars['_A']['account_log_list']=='') $this->magic_vars['_A']['account_log_list'] = array();  $_from = $this->magic_vars['_A']['account_log_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1" ><a href="/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene" class="thickbox" title="用户详细信息查看"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type'] = '';$_tmp = $this->magic_vars['item']['type'];$_tmp = $this->magic_modifier("linkage",$_tmp,"account_type");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = ''; echo $this->magic_vars['item']['total']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['use_money'])) $this->magic_vars['item']['use_money'] = ''; echo $this->magic_vars['item']['use_money']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['no_use_money'])) $this->magic_vars['item']['no_use_money'] = '';$_tmp = $this->magic_vars['item']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['collection'])) $this->magic_vars['item']['collection'] = '';$_tmp = $this->magic_vars['item']['collection'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['to_username'])) $this->magic_vars['item']['to_username'] = '';$_tmp = $this->magic_vars['item']['to_username'];$_tmp = $this->magic_modifier("default",$_tmp,"系统");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
            <td><? if (!isset($this->magic_vars['item']['remark'])) $this->magic_vars['item']['remark'] = ''; echo $this->magic_vars['item']['remark']; ?></td>
			<td>--</td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="12" class="action">
		<div class="floatl"><input type="button" value="导出当前报表" onclick="sousuo('excel')" /></div>
		<div class="floatr">
		时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = '';$_tmp = $_REQUEST['dotime1']; if (!isset($this->magic_vars['day7'])) $this->magic_vars['day7'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['day7']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" size="15" onclick="change_picktime()"/>到<input type="text" name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = '';$_tmp = $_REQUEST['dotime2']; if (!isset($this->magic_vars['nowtime'])) $this->magic_vars['nowtime'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['nowtime']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" id="dotime2" size="15" onclick="change_picktime()"/>   
		  <select name='typeaction' id='typeaction' >  <option value=''>全部</option>  <option value='tender' <?php if($_REQUEST['typeaction']=='tender') echo "selected='selected'" ?>>投标</option>  <option value='recharge' <?php if($_REQUEST['typeaction']=='recharge') echo "selected='selected'" ?>>用户充值</option>  <option value='borrow_fee' <?php if($_REQUEST['typeaction']=='borrow_fee') echo "selected='selected'" ?>>借款手续费</option>  <option value='cash_cancel' <?php if($_REQUEST['typeaction']=='cash_cancel') echo "selected='selected'" ?>>取消提现解冻</option>  <option value='cash_frost' <?php if($_REQUEST['typeaction']=='cash_frost') echo "selected='selected'" ?>>提现冻结</option>  <option value='borrow_success' <?php if($_REQUEST['typeaction']=='borrow_success') echo "selected='selected'" ?>>借款入帐</option>  <option value='margin' <?php if($_REQUEST['typeaction']=='margin') echo "selected='selected'" ?>>保证金</option>  <option value='invest' <?php if($_REQUEST['typeaction']=='invest') echo "selected='selected'" ?>>扣除冻结款</option>  <option value='fee' <?php if($_REQUEST['typeaction']=='fee') echo "selected='selected'" ?>>充值手续费</option>  <option value='award_lower' <?php if($_REQUEST['typeaction']=='award_lower') echo "selected='selected'" ?>>扣除投标奖励</option>  <option value='award_add' <?php if($_REQUEST['typeaction']=='award_add') echo "selected='selected'" ?>>投标奖励</option>  <option value='repayment' <?php if($_REQUEST['typeaction']=='repayment') echo "selected='selected'" ?>>还款</option>  <option value='invest_false' <?php if($_REQUEST['typeaction']=='invest_false') echo "selected='selected'" ?>>投标失败资金返回</option>  <option value='recharge_fee' <?php if($_REQUEST['typeaction']=='recharge_fee') echo "selected='selected'" ?>>提现手续费</option>  <option value='collection' <?php if($_REQUEST['typeaction']=='collection') echo "selected='selected'" ?>>待收金额</option>  <option value='borrow_frost' <?php if($_REQUEST['typeaction']=='borrow_frost') echo "selected='selected'" ?>>解冻借款担保金</option>  <option value='invest_repayment' <?php if($_REQUEST['typeaction']=='invest_repayment') echo "selected='selected'" ?>>还款</option>  <option value='vip' <?php if($_REQUEST['typeaction']=='vip') echo "selected='selected'" ?>>vip会员费</option>  <option value='realname' <?php if($_REQUEST['typeaction']=='realname') echo "selected='selected'" ?>>实名认证费用</option>  <option value='recharge_success' <?php if($_REQUEST['typeaction']=='recharge_success') echo "selected='selected'" ?>>提现成功</option>  <option value='recharge_false' <?php if($_REQUEST['typeaction']=='recharge_false') echo "selected='selected'" ?>>提现失败</option>  <option value='system_repayment' <?php if($_REQUEST['typeaction']=='system_repayment') echo "selected='selected'" ?>>逾期系统还款</option>  <option value='late_rate' <?php if($_REQUEST['typeaction']=='late_rate') echo "selected='selected'" ?>>逾期利息扣除</option>  <option value='late_repayment' <?php if($_REQUEST['typeaction']=='late_repayment') echo "selected='selected'" ?>>逾期还款</option>  <option value='ticheng' <?php if($_REQUEST['typeaction']=='ticheng') echo "selected='selected'" ?>>投标提成</option>  <option value='late_collection' <?php if($_REQUEST['typeaction']=='late_collection') echo "selected='selected'" ?>>逾期收入</option>  <option value='scene_account' <?php if($_REQUEST['typeaction']=='scene_account') echo "selected='selected'" ?>>现场认证费用</option>  <option value='vouch_advanced' <?php if($_REQUEST['typeaction']=='vouch_advanced') echo "selected='selected'" ?>>担保垫付扣费</option>  <option value='borrow_kouhui' <?php if($_REQUEST['typeaction']=='borrow_kouhui') echo "selected='selected'" ?>>借款人罚金扣回</option>  <option value='vouch_awardpay' <?php if($_REQUEST['typeaction']=='vouch_awardpay') echo "selected='selected'" ?>>担保奖励支付</option>  <option value='vouch_award' <?php if($_REQUEST['typeaction']=='vouch_award') echo "selected='selected'" ?>>担保奖励接收</option>  <option value='margin_vouch' <?php if($_REQUEST['typeaction']=='margin_vouch') echo "selected='selected'" ?>>担保成功冻结5%</option>  <option value='video' <?php if($_REQUEST['typeaction']=='video') echo "selected='selected'" ?>>视频认证费用</option>  <option value='tender_mange' <?php if($_REQUEST['typeaction']=='tender_mange') echo "selected='selected'" ?>>利息管理费用</option>  <option value='vip2' <?php if($_REQUEST['typeaction']=='vip2') echo "selected='selected'" ?>>扣除冻结VIP费</option>  <option value='smssq' <?php if($_REQUEST['typeaction']=='smssq') echo "selected='selected'" ?>>扣除短信费用</option>  <option value='tixian_fee' <?php if($_REQUEST['typeaction']=='tixian_fee') echo "selected='selected'" ?>>扣除提现手续费</option>  <option value='borrow_fee_forst' <?php if($_REQUEST['typeaction']=='borrow_fee_forst') echo "selected='selected'" ?>>发标费用冻结</option>  <option value='borrow_fee_unforst' <?php if($_REQUEST['typeaction']=='borrow_fee_unforst') echo "selected='selected'" ?>>发标费用解冻</option>  <option value='vip3' <?php if($_REQUEST['typeaction']=='vip3') echo "selected='selected'" ?>>冻结VIP申请费</option>  <option value='vip4' <?php if($_REQUEST['typeaction']=='vip4') echo "selected='selected'" ?>>vip申请没通过退费</option>  <option value='recharge_reward' <?php if($_REQUEST['typeaction']=='recharge_reward') echo "selected='selected'" ?>>充值奖励金额</option>  <option value='return_reward' <?php if($_REQUEST['typeaction']=='return_reward') echo "selected='selected'" ?>>回款续投奖励</option> </select>
		用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
		<input type="button" value="搜索" onclick="sousuo()" />
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="11" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?>
			</td>
		</tr>
	</form>
</table>
<!--资金使用记录列表 结束-->
<!--回款续投奖励审核 开始-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="return_reward"): ?>
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr>
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">用户名</td>
		<td width="" class="main_td">投资借款标</td>
		<td width="" class="main_td">投标金额</td>
		<td width="" class="main_td">可奖励部分</td>
		<td width="" class="main_td">奖励比率</td>
		<td width="" class="main_td">奖励金额</td>
		<td width="" class="main_td">状态</td>
		<td width="" class="main_td">添加时间</td>
		<td width="" class="main_td">操作</td>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['return_reward']) || $this->magic_vars['_A']['return_reward']=='') $this->magic_vars['_A']['return_reward'] = array();  $_from = $this->magic_vars['_A']['return_reward']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1"><a href="/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene" class="thickbox" title="用户详细信息查看"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
		<td><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_id'])) $this->magic_vars['item']['borrow_id'] = ''; echo $this->magic_vars['item']['borrow_id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?></a></td>
		<td><? if (!isset($this->magic_vars['item']['tender_account'])) $this->magic_vars['item']['tender_account'] = ''; echo $this->magic_vars['item']['tender_account']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['can_reward'])) $this->magic_vars['item']['can_reward'] = ''; echo $this->magic_vars['item']['can_reward']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['reward_scale'])) $this->magic_vars['item']['reward_scale'] = ''; echo $this->magic_vars['item']['reward_scale']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['reward_account'])) $this->magic_vars['item']['reward_account'] = ''; echo $this->magic_vars['item']['reward_account']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==1): ?>奖励发放成功<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==5): ?>奖励发放失败<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>等待发放奖励<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==3): ?>投标冻结中<? endif; ?></td>
		<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
		<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==2): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/return_rewardview&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>&a=cash">审核</a><? else: ?>--<? endif; ?></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="12" class="action">
		<div class="floatr">
		状态：<select id="status"><option value="">全部</option><option value="2" <? if (!isset($_GET['status'])) $_GET['status']=''; ;if (  $_GET['status']==2): ?>selected="selected"<? endif; ?>>等待发放奖励</option><option value="1" <? if (!isset($_GET['status'])) $_GET['status']=''; ;if (  $_GET['status']==1): ?>selected="selected"<? endif; ?>>奖励发放成功</option><option value="5" <? if (!isset($_GET['status'])) $_GET['status']=''; ;if (  $_GET['status']==5): ?>selected="selected"<? endif; ?>>奖励发放失败</option><option value="3" <? if (!isset($_GET['status'])) $_GET['status']=''; ;if (  $_GET['status']==3): ?>selected="selected"<? endif; ?>>投标冻结中</option></select>
		用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
		<input type="button" value="搜索" onclick="sousuo()" />
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="11" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?>
			</td>
		</tr>
</table>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="return_rewardview"): ?>
<div class="module_add">
	<form name="form1" method="post" action="" onsubmit="return submit_fool()">
	<div class="module_title"><strong>奖励发放审核</strong></div>
	<div class="module_border">
		<div class="l">用户名：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['return_rewardview']['username'])) $this->magic_vars['_A']['return_rewardview']['username'] = ''; echo $this->magic_vars['_A']['return_rewardview']['username']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">类型：</div>
		<div class="c">回款续投奖励发放</div>
	</div>
	<div class="module_border">
		<div class="l">金额：</div>
		<div class="c"><? if (!isset($this->magic_vars['_A']['return_rewardview']['reward_account'])) $this->magic_vars['_A']['return_rewardview']['reward_account'] = ''; echo $this->magic_vars['_A']['return_rewardview']['reward_account']; ?></div>
	</div>
	<? if (!isset($this->magic_vars['_A']['return_rewardview']['status'])) $this->magic_vars['_A']['return_rewardview']['status']=''; ;if (  $this->magic_vars['_A']['return_rewardview']['status']==2): ?>
	<div class="module_border">
		<div class="l">是否发放：</div>
		<div class="c">
			<input type="radio" name="status" value=1 />是<input type="radio" name="status" value=5 checked="checked" />否
		</div>
	</div>
	<div class="module_border">
		<div class="l">备注：</div>
		<div class="c">
			<input type="text" name="remark" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">验证码：</div>
		<div class="c"><input  class="user_aciton_input"  name="valicode" type="text" size="8" maxlength="4" style=" padding-top:4px; height:16px; width:70px;"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	<div class="module_submit" >
		<input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['return_rewardview']['id'])) $this->magic_vars['_A']['return_rewardview']['id'] = ''; echo $this->magic_vars['_A']['return_rewardview']['id']; ?>" />
		<input type="submit"  name="reset" value="确定奖励" />
	</div>
	<? else: ?>
	<div class="module_border">
		<div class="l">是否发放：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['return_rewardview']['status'])) $this->magic_vars['_A']['return_rewardview']['status']=''; ;if (  $this->magic_vars['_A']['return_rewardview']['status']==1): ?>已发放<? if (!isset($this->magic_vars['_A']['return_rewardview']['status'])) $this->magic_vars['_A']['return_rewardview']['status']=''; ;elseif (  $this->magic_vars['_A']['return_rewardview']['status']==5): ?>发放失败<? endif; ?>
		</div>
	</div>
	<? endif; ?>
	</form>
</div>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="return_account"): ?>
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr>
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">用户名</td>
		<td width="" class="main_td">总回款金额</td>
		<td width="" class="main_td">可用回款金额</td>
		<td width="" class="main_td">已用回款金额</td>
		<td width="" class="main_td">冻结回款金额</td>
		<td width="" class="main_td">添加时间</td>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['return_account']) || $this->magic_vars['_A']['return_account']=='') $this->magic_vars['_A']['return_account'] = array();  $_from = $this->magic_vars['_A']['return_account']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1"><a href="/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene" class="thickbox" title="用户详细信息查看"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
		<td><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = ''; echo $this->magic_vars['item']['total']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['use_money'])) $this->magic_vars['item']['use_money'] = ''; echo $this->magic_vars['item']['use_money']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['already_use_money'])) $this->magic_vars['item']['already_use_money'] = ''; echo $this->magic_vars['item']['already_use_money']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['not_use_money'])) $this->magic_vars['item']['not_use_money'] = ''; echo $this->magic_vars['item']['not_use_money']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="12" class="action">
		<div class="floatr">
		用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
		<input type="button" value="搜索" onclick="sousuo()" />
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="11" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?>
			</td>
		</tr>
</table>
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="return_log"): ?>
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr>
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">用户名</td>
		<td width="" class="main_td">操作金额</td>
		<td width="" class="main_td">总回款金额</td>
		<td width="" class="main_td">可用回款金额</td>
		<td width="" class="main_td">已用回款金额</td>
		<td width="" class="main_td">冻结回款金额</td>
		<td width="" class="main_td">备注</td>
		<td width="" class="main_td">添加时间</td>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['return_log']) || $this->magic_vars['_A']['return_log']=='') $this->magic_vars['_A']['return_log'] = array();  $_from = $this->magic_vars['_A']['return_log']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
		<td class="main_td1"><a href="/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene" class="thickbox" title="用户详细信息查看"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
		<td><? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = ''; echo $this->magic_vars['item']['total']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['use_money'])) $this->magic_vars['item']['use_money'] = ''; echo $this->magic_vars['item']['use_money']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['already_use_money'])) $this->magic_vars['item']['already_use_money'] = ''; echo $this->magic_vars['item']['already_use_money']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['not_use_money'])) $this->magic_vars['item']['not_use_money'] = ''; echo $this->magic_vars['item']['not_use_money']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['remark'])) $this->magic_vars['item']['remark'] = ''; echo $this->magic_vars['item']['remark']; ?></td>
		<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="12" class="action">
		<div class="floatr">
		用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
		<input type="button" value="搜索" onclick="sousuo()" />
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="11" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?>
			</td>
		</tr>
</table>
<? endif; ?>
<script type="text/javascript">
var url = '<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type'] = ''; echo $this->magic_vars['_A']['query_type']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>';

function sousuo(){
	var sou = "";
	if(arguments[0]=="excel"){
		sou += "&type=excel";
	}
	var trade_no = $("#trade_no").val() || "";
	var status = $("#status").val() || "";
	var dotime1 = $("#dotime1").val() || "";
	var keywords = $("#keywords").val() || "";
	var username = $("#username").val() || "";
    var username2 = $("#username2").val() || "";
	var dotime2 = $("#dotime2").val() || "";
	var typeaction = $("#typeaction").val() || "";
	var pertainbank = $("#pertainbank").val() || "";
	var account = $("#account").val() || "";
	if (trade_no!=""){
		sou += "&trade_no="+trade_no;
	}
	if (status!=""){
		sou += "&status="+status;
	}
	if (username!=""){
		 sou += "&username="+username;
	}
	if (username2!=""){
		 sou += "&username2="+username2;
	}
	if (trade_no!=""){
		 sou += "&trade_no="+trade_no;
	}
	if (keywords!=""){
		 sou += "&keywords="+keywords;
	}
	if (dotime1!=""){
		 sou += "&dotime1="+dotime1;
	}
	if (dotime2!=""){
		 sou += "&dotime2="+dotime2;
	}
	if (typeaction!=""){
		 sou += "&typeaction="+typeaction;
	}
	if(pertainbank!=""){
		sou += "&pertainbank="+pertainbank;
	}
	if(account!=""){
		if(account.length!=19){
			alert("提现账号输入有误");
			return;
		}
		sou += "&account="+account;
	}
	location.href=url+sou;
}
</script>
