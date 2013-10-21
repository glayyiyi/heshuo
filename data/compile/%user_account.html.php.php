<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
<? $this->magic_include(array('file' => "user_header.html", 'vars' => array()));?>
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/modal.css" rel="stylesheet" type="text/css" />
 
<!--用户中心的主栏目 开始-->
 <div id="main" class="clearfix" style="margin-top:0px;">
<div class="wrap950 mar10">
	<!--左边的导航 开始-->
	<div class="user_left">
		<? $this->magic_include(array('file' => "user_menu.html", 'vars' => array()));?>
	</div>
	<!--左边的导航 结束-->
	
	<!--右边的内容 开始-->
	<div class="user_right">
		<div class="user_right_menu">
			<ul id="tab" class="list-tab clearfix">
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="list"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>">帐户详情</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="bank"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/bank">银行账号</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="recharge_new"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/recharge_new">帐户充值</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="recharge"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/recharge">充值记录</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="cash_new"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/cash_new">帐户提现</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="cash"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/cash">提现记录</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="log"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/log">资金明细</a></li>
			</ul>
		</div>
		<div class="user_right_main">
		<!--资金使用记录列表 开始-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="log"): ?>
		<div class="user_main_title well" style="height:20px; padding-top:7px;"> 
		记录时间：<input class="Wdate" type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = '';$_tmp = $_REQUEST['dotime1']; if (!isset($this->magic_vars['day7'])) $this->magic_vars['day7'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['day7']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" size="15" onclick="change_picktime()"/> 到 <input class="Wdate" type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = '';$_tmp = $_REQUEST['dotime2']; if (!isset($this->magic_vars['nowtime'])) $this->magic_vars['nowtime'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['nowtime']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" id="dotime2" size="15" onclick="change_picktime()"/>   
		  <select name='type' id='type' >  <option value=''>全部</option>  <option value='tender' <?php if($_GET['type']=='tender') echo "selected='selected'" ?>>投标</option>  <option value='recharge' <?php if($_GET['type']=='recharge') echo "selected='selected'" ?>>用户充值</option>  <option value='borrow_fee' <?php if($_GET['type']=='borrow_fee') echo "selected='selected'" ?>>借款手续费</option>  <option value='cash_cancel' <?php if($_GET['type']=='cash_cancel') echo "selected='selected'" ?>>取消提现解冻</option>  <option value='cash_frost' <?php if($_GET['type']=='cash_frost') echo "selected='selected'" ?>>提现冻结</option>  <option value='borrow_success' <?php if($_GET['type']=='borrow_success') echo "selected='selected'" ?>>借款入帐</option>  <option value='margin' <?php if($_GET['type']=='margin') echo "selected='selected'" ?>>保证金</option>  <option value='invest' <?php if($_GET['type']=='invest') echo "selected='selected'" ?>>扣除冻结款</option>  <option value='fee' <?php if($_GET['type']=='fee') echo "selected='selected'" ?>>充值手续费</option>  <option value='award_lower' <?php if($_GET['type']=='award_lower') echo "selected='selected'" ?>>扣除投标奖励</option>  <option value='award_add' <?php if($_GET['type']=='award_add') echo "selected='selected'" ?>>投标奖励</option>  <option value='repayment' <?php if($_GET['type']=='repayment') echo "selected='selected'" ?>>还款</option>  <option value='invest_false' <?php if($_GET['type']=='invest_false') echo "selected='selected'" ?>>投标失败资金返回</option>  <option value='recharge_fee' <?php if($_GET['type']=='recharge_fee') echo "selected='selected'" ?>>提现手续费</option>  <option value='collection' <?php if($_GET['type']=='collection') echo "selected='selected'" ?>>待收金额</option>  <option value='borrow_frost' <?php if($_GET['type']=='borrow_frost') echo "selected='selected'" ?>>解冻借款担保金</option>  <option value='invest_repayment' <?php if($_GET['type']=='invest_repayment') echo "selected='selected'" ?>>还款</option>  <option value='vip' <?php if($_GET['type']=='vip') echo "selected='selected'" ?>>vip会员费</option>  <option value='realname' <?php if($_GET['type']=='realname') echo "selected='selected'" ?>>实名认证费用</option>  <option value='recharge_success' <?php if($_GET['type']=='recharge_success') echo "selected='selected'" ?>>提现成功</option>  <option value='recharge_false' <?php if($_GET['type']=='recharge_false') echo "selected='selected'" ?>>提现失败</option>  <option value='system_repayment' <?php if($_GET['type']=='system_repayment') echo "selected='selected'" ?>>逾期系统还款</option>  <option value='late_rate' <?php if($_GET['type']=='late_rate') echo "selected='selected'" ?>>逾期利息扣除</option>  <option value='late_repayment' <?php if($_GET['type']=='late_repayment') echo "selected='selected'" ?>>逾期还款</option>  <option value='ticheng' <?php if($_GET['type']=='ticheng') echo "selected='selected'" ?>>投标提成</option>  <option value='late_collection' <?php if($_GET['type']=='late_collection') echo "selected='selected'" ?>>逾期收入</option>  <option value='scene_account' <?php if($_GET['type']=='scene_account') echo "selected='selected'" ?>>现场认证费用</option>  <option value='vouch_advanced' <?php if($_GET['type']=='vouch_advanced') echo "selected='selected'" ?>>担保垫付扣费</option>  <option value='borrow_kouhui' <?php if($_GET['type']=='borrow_kouhui') echo "selected='selected'" ?>>借款人罚金扣回</option>  <option value='vouch_awardpay' <?php if($_GET['type']=='vouch_awardpay') echo "selected='selected'" ?>>担保奖励支付</option>  <option value='vouch_award' <?php if($_GET['type']=='vouch_award') echo "selected='selected'" ?>>担保奖励接收</option>  <option value='margin_vouch' <?php if($_GET['type']=='margin_vouch') echo "selected='selected'" ?>>担保成功冻结5%</option>  <option value='video' <?php if($_GET['type']=='video') echo "selected='selected'" ?>>视频认证费用</option>  <option value='tender_mange' <?php if($_GET['type']=='tender_mange') echo "selected='selected'" ?>>利息管理费用</option>  <option value='vip2' <?php if($_GET['type']=='vip2') echo "selected='selected'" ?>>扣除冻结VIP费</option>  <option value='smssq' <?php if($_GET['type']=='smssq') echo "selected='selected'" ?>>扣除短信费用</option>  <option value='tixian_fee' <?php if($_GET['type']=='tixian_fee') echo "selected='selected'" ?>>扣除提现手续费</option>  <option value='borrow_fee_forst' <?php if($_GET['type']=='borrow_fee_forst') echo "selected='selected'" ?>>发标费用冻结</option>  <option value='borrow_fee_unforst' <?php if($_GET['type']=='borrow_fee_unforst') echo "selected='selected'" ?>>发标费用解冻</option>  <option value='vip3' <?php if($_GET['type']=='vip3') echo "selected='selected'" ?>>冻结VIP申请费</option>  <option value='vip4' <?php if($_GET['type']=='vip4') echo "selected='selected'" ?>>vip申请没通过退费</option>  <option value='recharge_reward' <?php if($_GET['type']=='recharge_reward') echo "selected='selected'" ?>>充值奖励金额</option>  <option value='return_reward' <?php if($_GET['type']=='return_reward') echo "selected='selected'" ?>>回款续投奖励</option> </select> <input value="搜索" type="submit" class="btn-action"  onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/publish')" />
		</div>
			<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" >
			  <form action="" method="post">
				<tr class="head">
					<td>类型</td>
					<td>操作金额</td>
					<td>总金额</td>
					<td>可用金额</td>
					<td>冻结金额</td>
					<td>待收金额</td>
					<td>交易对方</td>
					<td>记录时间</td>
					<td width="130">备注信息</td>
				</tr>
				<?  if(!isset($this->magic_vars['_U']['account_log_list']) || $this->magic_vars['_U']['account_log_list']=='') $this->magic_vars['_U']['account_log_list'] = array();  $_from = $this->magic_vars['_U']['account_log_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type'] = '';$_tmp = $this->magic_vars['item']['type'];$_tmp = $this->magic_modifier("linkage",$_tmp,"account_type");echo $_tmp;unset($_tmp); ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = ''; echo $this->magic_vars['item']['total']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['use_money'])) $this->magic_vars['item']['use_money'] = ''; echo $this->magic_vars['item']['use_money']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['no_use_money'])) $this->magic_vars['item']['no_use_money'] = '';$_tmp = $this->magic_vars['item']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['collection'])) $this->magic_vars['item']['collection'] = ''; echo $this->magic_vars['item']['collection']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['to_username'])) $this->magic_vars['item']['to_username']=''; ;if (  $this->magic_vars['item']['to_username']==0): ?>结算中心<? else: ?><a href="/u/<? if (!isset($this->magic_vars['item']['to_user'])) $this->magic_vars['item']['to_user'] = ''; echo $this->magic_vars['item']['to_user']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['to_username'])) $this->magic_vars['item']['to_username'] = '';$_tmp = $this->magic_vars['item']['to_username'];$_tmp = $this->magic_modifier("default",$_tmp,"结算中心");echo $_tmp;unset($_tmp); ?></a><? endif; ?></td>
					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
					<td width="130"><? if (!isset($this->magic_vars['item']['remark'])) $this->magic_vars['item']['remark'] = ''; echo $this->magic_vars['item']['remark']; ?></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr >
					<td colspan="11" class="page">
						<? if (!isset($this->magic_vars['_U']['show_page'])) $this->magic_vars['_U']['show_page'] = ''; echo $this->magic_vars['_U']['show_page']; ?>
					</td>
				</tr>
			</form>	
		</table>
		<!--资金使用记录列表 结束-->
		<!--历史资金使用记录列表 开始-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="logold"): ?>
		
		<div class="user_main_title well" style="height:20px; padding-top:7px;"> 
		记录时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = '';$_tmp = $_REQUEST['dotime1']; if (!isset($this->magic_vars['day7'])) $this->magic_vars['day7'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['day7']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = '';$_tmp = $_REQUEST['dotime2']; if (!isset($this->magic_vars['nowtime'])) $this->magic_vars['nowtime'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['nowtime']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" id="dotime2" size="15" onclick="change_picktime()"/>   
		  <select name='type' id='type' >  <option value=''>全部</option>  <option value='tender' <?php if($_REQUEST['type']=='tender') echo "selected='selected'" ?>>投标</option>  <option value='recharge' <?php if($_REQUEST['type']=='recharge') echo "selected='selected'" ?>>用户充值</option>  <option value='borrow_fee' <?php if($_REQUEST['type']=='borrow_fee') echo "selected='selected'" ?>>借款手续费</option>  <option value='cash_cancel' <?php if($_REQUEST['type']=='cash_cancel') echo "selected='selected'" ?>>取消提现解冻</option>  <option value='cash_frost' <?php if($_REQUEST['type']=='cash_frost') echo "selected='selected'" ?>>提现冻结</option>  <option value='borrow_success' <?php if($_REQUEST['type']=='borrow_success') echo "selected='selected'" ?>>借款入帐</option>  <option value='margin' <?php if($_REQUEST['type']=='margin') echo "selected='selected'" ?>>保证金</option>  <option value='invest' <?php if($_REQUEST['type']=='invest') echo "selected='selected'" ?>>扣除冻结款</option>  <option value='fee' <?php if($_REQUEST['type']=='fee') echo "selected='selected'" ?>>充值手续费</option>  <option value='award_lower' <?php if($_REQUEST['type']=='award_lower') echo "selected='selected'" ?>>扣除投标奖励</option>  <option value='award_add' <?php if($_REQUEST['type']=='award_add') echo "selected='selected'" ?>>投标奖励</option>  <option value='repayment' <?php if($_REQUEST['type']=='repayment') echo "selected='selected'" ?>>还款</option>  <option value='invest_false' <?php if($_REQUEST['type']=='invest_false') echo "selected='selected'" ?>>投标失败资金返回</option>  <option value='recharge_fee' <?php if($_REQUEST['type']=='recharge_fee') echo "selected='selected'" ?>>提现手续费</option>  <option value='collection' <?php if($_REQUEST['type']=='collection') echo "selected='selected'" ?>>待收金额</option>  <option value='borrow_frost' <?php if($_REQUEST['type']=='borrow_frost') echo "selected='selected'" ?>>解冻借款担保金</option>  <option value='invest_repayment' <?php if($_REQUEST['type']=='invest_repayment') echo "selected='selected'" ?>>还款</option>  <option value='vip' <?php if($_REQUEST['type']=='vip') echo "selected='selected'" ?>>vip会员费</option>  <option value='realname' <?php if($_REQUEST['type']=='realname') echo "selected='selected'" ?>>实名认证费用</option>  <option value='recharge_success' <?php if($_REQUEST['type']=='recharge_success') echo "selected='selected'" ?>>提现成功</option>  <option value='recharge_false' <?php if($_REQUEST['type']=='recharge_false') echo "selected='selected'" ?>>提现失败</option>  <option value='system_repayment' <?php if($_REQUEST['type']=='system_repayment') echo "selected='selected'" ?>>逾期系统还款</option>  <option value='late_rate' <?php if($_REQUEST['type']=='late_rate') echo "selected='selected'" ?>>逾期利息扣除</option>  <option value='late_repayment' <?php if($_REQUEST['type']=='late_repayment') echo "selected='selected'" ?>>逾期还款</option>  <option value='ticheng' <?php if($_REQUEST['type']=='ticheng') echo "selected='selected'" ?>>投标提成</option>  <option value='late_collection' <?php if($_REQUEST['type']=='late_collection') echo "selected='selected'" ?>>逾期收入</option>  <option value='scene_account' <?php if($_REQUEST['type']=='scene_account') echo "selected='selected'" ?>>现场认证费用</option>  <option value='vouch_advanced' <?php if($_REQUEST['type']=='vouch_advanced') echo "selected='selected'" ?>>担保垫付扣费</option>  <option value='borrow_kouhui' <?php if($_REQUEST['type']=='borrow_kouhui') echo "selected='selected'" ?>>借款人罚金扣回</option>  <option value='vouch_awardpay' <?php if($_REQUEST['type']=='vouch_awardpay') echo "selected='selected'" ?>>担保奖励支付</option>  <option value='vouch_award' <?php if($_REQUEST['type']=='vouch_award') echo "selected='selected'" ?>>担保奖励接收</option>  <option value='margin_vouch' <?php if($_REQUEST['type']=='margin_vouch') echo "selected='selected'" ?>>担保成功冻结5%</option>  <option value='video' <?php if($_REQUEST['type']=='video') echo "selected='selected'" ?>>视频认证费用</option>  <option value='tender_mange' <?php if($_REQUEST['type']=='tender_mange') echo "selected='selected'" ?>>利息管理费用</option>  <option value='vip2' <?php if($_REQUEST['type']=='vip2') echo "selected='selected'" ?>>扣除冻结VIP费</option>  <option value='smssq' <?php if($_REQUEST['type']=='smssq') echo "selected='selected'" ?>>扣除短信费用</option>  <option value='tixian_fee' <?php if($_REQUEST['type']=='tixian_fee') echo "selected='selected'" ?>>扣除提现手续费</option>  <option value='borrow_fee_forst' <?php if($_REQUEST['type']=='borrow_fee_forst') echo "selected='selected'" ?>>发标费用冻结</option>  <option value='borrow_fee_unforst' <?php if($_REQUEST['type']=='borrow_fee_unforst') echo "selected='selected'" ?>>发标费用解冻</option>  <option value='vip3' <?php if($_REQUEST['type']=='vip3') echo "selected='selected'" ?>>冻结VIP申请费</option>  <option value='vip4' <?php if($_REQUEST['type']=='vip4') echo "selected='selected'" ?>>vip申请没通过退费</option>  <option value='recharge_reward' <?php if($_REQUEST['type']=='recharge_reward') echo "selected='selected'" ?>>充值奖励金额</option>  <option value='return_reward' <?php if($_REQUEST['type']=='return_reward') echo "selected='selected'" ?>>回款续投奖励</option> </select> <input value="搜索" type="submit" class="btn-action"  onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/publish')" />	
		</div>	
		
			<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" >
			  <form action="" method="post">
				<tr class="head">
					<td>类型</td>
					<td>操作金额</td>
					<td>总金额</td>
					<td>可用金额</td>
					<td>冻结金额</td>
					<td>待收金额</td>
					<td>交易对方</td>
					<td>记录时间</td>
					<td width="130">备注信息</td>
				</tr>
				<?  if(!isset($this->magic_vars['_U']['account_log_list']) || $this->magic_vars['_U']['account_log_list']=='') $this->magic_vars['_U']['account_log_list'] = array();  $_from = $this->magic_vars['_U']['account_log_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type'] = '';$_tmp = $this->magic_vars['item']['type'];$_tmp = $this->magic_modifier("linkage",$_tmp,"account_type");echo $_tmp;unset($_tmp); ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = ''; echo $this->magic_vars['item']['total']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['use_money'])) $this->magic_vars['item']['use_money'] = ''; echo $this->magic_vars['item']['use_money']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['no_use_money'])) $this->magic_vars['item']['no_use_money'] = '';$_tmp = $this->magic_vars['item']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['collection'])) $this->magic_vars['item']['collection'] = ''; echo $this->magic_vars['item']['collection']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['to_username'])) $this->magic_vars['item']['to_username']=''; ;if (  $this->magic_vars['item']['to_username']==0): ?>结算中心<? else: ?><a href="/u/<? if (!isset($this->magic_vars['item']['to_user'])) $this->magic_vars['item']['to_user'] = ''; echo $this->magic_vars['item']['to_user']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['to_username'])) $this->magic_vars['item']['to_username'] = '';$_tmp = $this->magic_vars['item']['to_username'];$_tmp = $this->magic_modifier("default",$_tmp,"结算中心");echo $_tmp;unset($_tmp); ?></a><? endif; ?></td>
					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
					<td width="130"><? if (!isset($this->magic_vars['item']['remark'])) $this->magic_vars['item']['remark'] = ''; echo $this->magic_vars['item']['remark']; ?></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr>
					<td colspan="11" class="page">
						<? if (!isset($this->magic_vars['_U']['show_page'])) $this->magic_vars['_U']['show_page'] = ''; echo $this->magic_vars['_U']['show_page']; ?>
					</td>
				</tr>
			</form>	
		</table>
		<!--历史资金使用记录列表 结束-->
		
		<!--充值记录列表 开始-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="recharge"): ?>
		<div class="user_help alert">成功充值<? if (!isset($this->magic_vars['_U']['account_log']['recharge_success'])) $this->magic_vars['_U']['account_log']['recharge_success'] = '';$_tmp = $this->magic_vars['_U']['account_log']['recharge_success'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>元，线上成功充值<? if (!isset($this->magic_vars['_U']['account_log']['recharge_online'])) $this->magic_vars['_U']['account_log']['recharge_online'] = '';$_tmp = $this->magic_vars['_U']['account_log']['recharge_online'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>元，线下成功充值<? if (!isset($this->magic_vars['_U']['account_log']['recharge_downline'])) $this->magic_vars['_U']['account_log']['recharge_downline'] = '';$_tmp = $this->magic_vars['_U']['account_log']['recharge_downline'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>元,，手动成功充值<? if (!isset($this->magic_vars['_U']['account_log']['recharge_shoudong'])) $this->magic_vars['_U']['account_log']['recharge_shoudong'] = '';$_tmp = $this->magic_vars['_U']['account_log']['recharge_shoudong'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>元</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" >
		<form action="" method="post">
			<tr class="head" >
			<td>类型</td>
			<td>支付方式</td>
			<td>充值金额</td>
			<td>奖励红包</td>
			<td>备注</td>
			<td>充值时间</td>
			<td>状态</td>
			<td>管理备注</td>
			</tr>
			<? $this->magic_vars['query_type']='GetRechargeList';$data = array('showpage'=>'3','var'=>'loop','status'=>'1','user_id'=>'0','epage'=>'20','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/account/account.class.php');$this->magic_vars['magic_result'] = accountClass::GetRechargeList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
			<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;if (  $this->magic_vars['item']['type']==1): ?>网上充值<? else: ?>线下充值<? endif; ?></td>
			<td><? if (!isset($this->magic_vars['item']['payment_name'])) $this->magic_vars['item']['payment_name'] = '';$_tmp = $this->magic_vars['item']['payment_name'];$_tmp = $this->magic_modifier("default",$_tmp,"手动充值");echo $_tmp;unset($_tmp); ?></td>
			<td><font color="#FF0000">￥<? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?></font></td>
			<td><? if (!isset($this->magic_vars['item']['hongbao'])) $this->magic_vars['item']['hongbao'] = ''; echo $this->magic_vars['item']['hongbao']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['remark'])) $this->magic_vars['item']['remark'] = ''; echo $this->magic_vars['item']['remark']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>审核中<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (   $this->magic_vars['item']['status']==1): ?> 充值成功 <? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>充值失败<? endif; ?></td>
			
			<td><? if (!isset($this->magic_vars['item']['verify_remark'])) $this->magic_vars['item']['verify_remark'] = '';$_tmp = $this->magic_vars['item']['verify_remark'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<? endforeach; endif; unset($_from); ?>
			<tr>
				<td colspan="11" class="page"><? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?></div>
				</td>
			</tr>
			<? unset($_magic_vars); ?>
		</form>	
		</table>
		<!--充值记录列表 结束-->
		
		<!--提现记录列表 开始-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="cash"): ?>
		<div class="user_help alert">成功提现<? if (!isset($this->magic_vars['_U']['cash_log']['cash_success']['money'])) $this->magic_vars['_U']['cash_log']['cash_success']['money'] = '';$_tmp = $this->magic_vars['_U']['cash_log']['cash_success']['money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>元，提现到账<? if (!isset($this->magic_vars['_U']['cash_log']['cash_success']['credited'])) $this->magic_vars['_U']['cash_log']['cash_success']['credited'] = '';$_tmp = $this->magic_vars['_U']['cash_log']['cash_success']['credited'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>元，手续费<? if (!isset($this->magic_vars['_U']['cash_log']['cash_success']['fee'])) $this->magic_vars['_U']['cash_log']['cash_success']['fee'] = '';$_tmp = $this->magic_vars['_U']['cash_log']['cash_success']['fee'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>元</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" >
			<form action="" method="post">
				<tr class="head">
					<td>提现银行</td>
					<td>提现账号</td>
					<td>提现总额</td>
					<td>到账金额</td>
					<td>手续费</td>
					<td>红包费(抵扣)</td>
					<td>提现时间</td>
					<td>状态</td>
					<td>操作</td>
				</tr>
				<?  if(!isset($this->magic_vars['_U']['account_cash_list']) || $this->magic_vars['_U']['account_cash_list']=='') $this->magic_vars['_U']['account_cash_list'] = array();  $_from = $this->magic_vars['_U']['account_cash_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td><? if (!isset($this->magic_vars['item']['bank_name'])) $this->magic_vars['item']['bank_name'] = ''; echo $this->magic_vars['item']['bank_name']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['total'])) $this->magic_vars['item']['total'] = '';$_tmp = $this->magic_vars['item']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['credited'])) $this->magic_vars['item']['credited'] = '';$_tmp = $this->magic_vars['item']['credited'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['fee'])) $this->magic_vars['item']['fee'] = '';$_tmp = $this->magic_vars['item']['fee'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>	
					<td>￥<? if (!isset($this->magic_vars['item']['hongbao'])) $this->magic_vars['item']['hongbao'] = '';$_tmp = $this->magic_vars['item']['hongbao'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>	
					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?></td>
					<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>审核中<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (   $this->magic_vars['item']['status']==1): ?> 提现成功 <? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>提现失败 <? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==3): ?>用户取消<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['item']['verify_remark'])) $this->magic_vars['item']['verify_remark']=''; ;if (  $this->magic_vars['item']['verify_remark']!=""): ?><? if (!isset($this->magic_vars['item']['verify_remark'])) $this->magic_vars['item']['verify_remark'] = ''; echo $this->magic_vars['item']['verify_remark']; ?><? else: ?><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?><a href="#" onclick="javascript:if(confirm('确定要取消此提现申请')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/cash_cancel&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">取消提现</a><? else: ?>-<? endif; ?><? endif; ?></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr >
					<td colspan="11" class="page">
						<? if (!isset($this->magic_vars['_U']['show_page'])) $this->magic_vars['_U']['show_page'] = ''; echo $this->magic_vars['_U']['show_page']; ?>
					</td>
				</tr>
			</form>	
		</table>
		<!--提现记录列表 结束-->
		
		<!--账号充值 开始-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="recharge_new"): ?>
		<div class="user_help alert">
                    * 温馨提示：网上银行充值过程中请耐心等待,充值成功后，请不要关闭浏览器,充值成功后返回<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>,
                    充值金额才能打入您的帐号。
                    <br>* <font color="red">在线充值，手续费全免哦！</font>
        </div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">真实姓名：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['realname'])) $this->magic_vars['_G']['user_result']['realname'] = ''; echo $this->magic_vars['_G']['user_result']['realname']; ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">联系Email：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['email'])) $this->magic_vars['_G']['user_result']['email'] = ''; echo $this->magic_vars['_G']['user_result']['email']; ?>
			</div>
		</div>
		<form action="" method="post" name="form1" target="_blank"  onsubmit= "return check();" >
		<div id="returnpay">
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">充值方式：</div>
			<div class="c">
			<table>
				<tr><td><input type="radio" name="type" id="type_1" class="input_border" onclick="change_type(1)" value="1"  checked="checked" /></td><td><label for="type_1">网上充值</label></td><td><input type="radio" name="type" id="type_2" class="input_border"  value="2"  onclick="change_type(2)" /></td><td><label for="type_2">线下充值</label></td></tr>
			</table>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">充值金额：</div>
			<div class="c">
				<input type="text" name="money"  class="input_border" value="" size="10" onkeyup="commit(this);" maxlength="9" /> 元 <span id="realacc">实际入账：<font color="#FF0000" id="real_money">0</font> 元</span>
			</div>
		</div>
                    <div id="type_net" class="disnone">
			<div class="user_right_border">
				<div class="l" style="font-weight:bold;">充值类型：</div>
				<div class="c">
						<font color="red">以下银行是使用个人网上银行支付，只需开通个人网上银行即可!</font>
<style type="text/css">

#ban table td{height:40px; line-height:40px;padding-right:30px;padding-bottom:10px; }
#ban table tr{height:40px; line-height:40px; }
#ban table img{width:125px; height:33px;float:left;}
#ban table input{border:none;width:20px; height:30px;float:left;}
#rechargeBox{padding:20px;}
#rechargeBox h2 {border-bottom: #ccc 1px solid; padding-bottom: 10px; margin-bottom: 10px; font-size: 16px}
.detail{padding:10px 0;margin:0 auto;}
.active-link{padding:10px;text-align:center;}
.btn_grey_b, .btn_grey_b span, .btn_grey_b span, {background:url("/data/images/base/pay_btn_a.png") no-repeat; height:30px; line-height:0; font-size:0; padding:0 4px 0 0; border:0; display:inline-block; vertical-align:middle; cursor:pointer; white-space:normal; outline:none;   overflow:visible }
.btn_grey_b span, .btn_grey_b span {background-position:0 0; margin:0; padding:0 12px 0 16px; color:#fff; font-size:14px; font-weight:700; line-height:30px; _line-height:29px }
.btn_grey_b {background-position:right -70px }
.btn_grey_b:hover {background-position:right -105px; text-decoration:none }
.btn_grey_b span, .btn_grey_b span {background-position:0 -70px; color:#333 }
.btn_grey_b:hover span, .btn_grey_b:hover span {background-position:0 -105px }

</style>
<div id="ban">
<table width="100%" cellpadding="3" cellspacing="3">
<tr>
<td width="160"><input type="radio" name="payment1" value="ICBC_g"/>
<img src="../data/bank/ICBC_OUT.gif" border="0"/></td>
<td width="160">
<input type="radio" name="payment1" value="BOC_g">
<img src="../data/bank/BOC_OUT.gif" border="0"/>
</td>
<td  width="160">
<input type="radio" name="payment1" value="CCB_g"/>
<img src="../data/bank/CCB_OUT.gif" border="0"/></td>
</tr>
<tr>
<td><input type="radio" name="payment1" value="ABC_g"/>
<img src="../data/bank/ABC_OUT.gif" border="0"/></td>
<td>
<input type="radio" name="payment1" value="CMB_g"/>
<img src="../data/bank/CMB_OUT.gif" border="0"/>
</td>
<td><input type="radio" name="payment1" value="GDB_g" />
<img src="../data/bank/GDB_OUT.gif" border="0"/></td>
</tr><tr>
<td><input type="radio" name="payment1" value="CMBC_g"/>
<img src="../data/bank/CMBC_OUT.gif" border="0"/></td>
<td><input type="radio" name="payment1" value="CEB_g"/>
<img src="../data/bank/CEB_OUT.gif" border="0"/></td>
<td><input type="radio" name="payment1" value="CIB_g"/>
<img src="../data/bank/CIB_OUT.gif" border="0"/></td>
</tr>
<tr>
<td><input type="radio" name="payment1" value="PSBC_g"/>
<img src="../data/bank/yz.jpg" border="0"/></td>
<td><input type="radio" name="payment1" value="HXBC_g"/>
<img src="../data/bank/hx.jpg" border="0"/></td>
<td><input type="radio" name="payment1" value="BOCOM_g"/>
<img src="../data/bank/COMM_OUT.gif" border="0"/></td>
</tr>
<tr>
<td><input type="radio" name="payment1" value="CITIC_g"/>
<img src="../data/bank/CITIC_OUT.gif" border="0"/></td>
<td><input type="radio" name="payment1" value="SPDB_g">
<img src="../data/bank/pf.jpg" border="0"/></td>
<td><input type="radio" name="payment1" value="SDB_g">
<img src="../data/bank/SZFZ_OUT.gif" border="0"/></td>
</tr>
</table>
</div>
<?  if(!isset($this->magic_vars['_U']['account_payment_list']) || $this->magic_vars['_U']['account_payment_list']=='') $this->magic_vars['_U']['account_payment_list'] = array();  $_from = $this->magic_vars['_U']['account_payment_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid']=''; ;if (  $this->magic_vars['var']['nid']!="offline"): ?>
<input type="radio" name="payment1" class="input_border" value="<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>" id="payment_<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>"  /> <label for="payment_<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></label> <input type="hidden" name="payname<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>" value="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>" /><label for="payment_<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>">(<? if (!isset($this->magic_vars['var']['description'])) $this->magic_vars['var']['description'] = ''; echo $this->magic_vars['var']['description']; ?>)</label> <br />
<? endif; ?>
<? endforeach; endif; unset($_from); ?>                 
</div>
</div>
</div>
        <div id="type_now"   style="display:none">
			<div class="user_right_border">
				<div class="l" style="font-weight:bold;">充值银行：</div>
                                
				<div class="c">
                    <div>
                       <font color="red">线下充值如遇到问题，请马上与客服联系联系；<br>
（1）线下充值红包奖励的单笔最低金额不低于20000元。<br>
（2）<strong><font color="blue">有效充值登记时间为:周一至周五的9:30到16:00</font></strong>，充值成功请跟我们的客服联系。<br><br></font></div>
					<div>
					<?  if(!isset($this->magic_vars['_U']['account_payment_list']) || $this->magic_vars['_U']['account_payment_list']=='') $this->magic_vars['_U']['account_payment_list'] = array();  $_from = $this->magic_vars['_U']['account_payment_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
					<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid']=''; ;if (  $this->magic_vars['var']['nid']=="offline"): ?>
					<input type="radio" name="payment2"  class="input_border" value="<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>" id="offline_<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>" /><label for="offline_<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>"><? if (!isset($this->magic_vars['var']['description'])) $this->magic_vars['var']['description'] = ''; echo $this->magic_vars['var']['description']; ?></label><br />
					<? endif; ?>
					<? endforeach; endif; unset($_from); ?>
					</div>
				</div>
			</div>
			<div class="user_right_border">
				<div class="l" style="font-weight:bold;">线下充值备注：</div>
				<div class="c">
					<input type="text" name="remark"  class="input_border" value="" size="30" /><br>（请注明您的用户名，转账银行卡号和转账流水号，以及转账时间，谢谢配合）
				</div>
			</div>
		</div>
 
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;"></div>
			<div class="c">
				<input type="submit" class="btn-action"  name="name"  value="确认提交" size="30" /> 
			</div>
		</div>
		</form>
		</div>
		
		
		
		
		<script type="text/javascript">
		 /*$("input[name='money']").keyup(function(){     
			 var tmptxt=$(this).val();     
			 $(this).val(tmptxt.replace(/\D|^0/g,''));     
		 }).bind("paste",function(){     
			 var tmptxt=$(this).val();     
			 $(this).val(tmptxt.replace(/\D|^0/g,''));     
		 }).css("ime-mode", "disabled");*/


		function check(){
			var aa = "";
			aa = $("input[name=type]:checked").val();
			
			var money = $("input[name=money]").val();
			if(!money){
				jQuery.jBox.tip('请填入充值金额！','warning');
				return false;
			}
			var info ="<div id='rechargeBox'><h2><strong>充值遇到问题？</strong></h2>   ";
				info+="<div class='ui-tip ui-tip-info'>      ";
				info+="<span class='ui-tip-icon'></span>";
				info+="<div class='ui-tip-text'>充值完成前请不要关闭此窗口。完成充值后请根据你的情况点击下面的按钮：</div>  ";
				info+="<p class='detail'><strong>请在新打开的网上银行页面上完成付款！</strong></p>";
				info+="</div>";
				info+="<div class='active-link'>";
				info+="<a href='/index.php?user&q=code/account/recharge'  seed='link-complete'><span class='btn_grey_b'><span>已完成充值</span></span></a>";
				info+="<a href='/linekefu/index.html'  seed='link-hasProblem'>   <span class='btn_grey_b'><span>充值遇到问题</span></span>   </a>";
				info+="</div>";
				info+="</div>";
			var op="{title:'在线充值'}";

			if(aa == 1){
			//线上充值
				var xsbank = $("input[name=payment1]:checked").val();
				 
				if (!xsbank){
 					jQuery.jBox.tip('请选择在线充值类型！','warning');
					return false;
				}else{
					//提交跳出充值提示框 20130130 add by weego 
					jQuery.jBox(info,{title:'在线充值',buttons: {'返回重新选择': 'ok' }, width: 500,opacity: 0.3, showClose: false,showIcon: false, top: '25%',draggable: false});
					return true;			
				}
				
			}else{
			//线下充值
				var xxbank = $("input[name=payment2]:checked").val();
				if (!xxbank){
					jQuery.jBox.tip('请选择线下充值的银行！','warning');
					return false;
				}else{
					//提交跳出充值提示框 20130130 add by weego 
					jQuery.jBox(info,op);
					return true;
				}
				
			}
		}
			function change_type(type){
          
				if (type==2){
                    document.getElementById("type_net").style.display="none";
                    document.getElementById("type_now").style.display="";
                    document.getElementById("realacc").style.display="none";
				}else{
                    document.getElementById("type_now").style.display="none";
                    document.getElementById("type_net").style.display="";
                    document.getElementById("realacc").style.display="";
				}
			}
		function payment (){
	 		var type = GetRadioValue("type");
			if (type==1){
				$("#returnpay").html("<font color='red'>请到打开的新页面充值</font>");
			}
		}
		function ctype(){
		var resualt=false;
			alert(document.form1.payment2.length);
			for(var i=0;i<document.form1.payment2.length;i++)
			{
				if(document.form1.payment2[i].checked)
				{
				  resualt=true;
				}
			}
			return resualt;
		}
        function commit(obj) {
            if (parseFloat(obj.value) > 0 ) 
            {
                var realMoney=parseFloat(obj.value);
                document.getElementById("real_money").innerHTML = realMoney ;
            }
        }
    </script>
		
		<div class="user_right_foot alert">
		<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>禁止信用卡套现、虚假交易等行为,一经发现将予以处罚,包括但不限于：限制收款、冻结账户、永久停止服务,并有可能影响相关信用记录。
		</div>
		<!--账号充值 结束-->
		
		
		<!--银行账号 开始-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="bank"): ?>
		<div class="user_help alert" style="text-align:left;text-indent :24px;"><? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>禁止信用卡套现、虚假交易等行为,一经发现将予以处罚,包括但不限于：限制收款、冻结账户、永久停止服务,并有可能影响相关信用记录。
</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">真实姓名：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['account_bank_result']['realname'])) $this->magic_vars['_U']['account_bank_result']['realname'] = ''; echo $this->magic_vars['_U']['account_bank_result']['realname']; ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">登陆用户名：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['account_bank_result']['username'])) $this->magic_vars['_U']['account_bank_result']['username'] = ''; echo $this->magic_vars['_U']['account_bank_result']['username']; ?>
			</div>
		</div>
		
		<? if (!isset($this->magic_vars['_U']['account_bank_result']['bank'])) $this->magic_vars['_U']['account_bank_result']['bank']=''; ;if (  $this->magic_vars['_U']['account_bank_result']['bank']!=""): ?>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">开户银行：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['account_bank_result']['bank'])) $this->magic_vars['_U']['account_bank_result']['bank'] = '';$_tmp = $this->magic_vars['_U']['account_bank_result']['bank'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">开户行名称：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['account_bank_result']['branch'])) $this->magic_vars['_U']['account_bank_result']['branch'] = ''; echo $this->magic_vars['_U']['account_bank_result']['branch']; ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">银行账号：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['account_bank_result']['account_view'])) $this->magic_vars['_U']['account_bank_result']['account_view'] = ''; echo $this->magic_vars['_U']['account_bank_result']['account_view']; ?>
			</div>
		</div>
		<? endif; ?>
		<div class="user_right_foot">
		</div>
		<form action="" method="post" name="form1">
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">开户银行：</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=bank&nid=account_bank&value=<? if (!isset($this->magic_vars['_U']['account_bank_result']['bank'])) $this->magic_vars['_U']['account_bank_result']['bank'] = ''; echo $this->magic_vars['_U']['account_bank_result']['bank']; ?>"></script>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">开户行名称：</div>
			<div class="c">
				<input type="text" name="branch" value="" data-content="**分行**支行**分理处或营业部(如：上海分行杨浦支行控江路分理处),
		    如果您无法确定,建议您致电您的开户银行客服进行询问。 " id="infokaih" />
			</div>
		</div>
		<div class="user_right_border" style="margin-left:0px">
			<div class="l" style="font-weight:bold;">银行账号：</div>
			<div class="c">
				<input type="text" name="account" value="" id="infoyhzh" data-content="特别提醒：上述银行卡号的开户人姓名必须为“<? if (!isset($this->magic_vars['_U']['account_bank_result']['realname'])) $this->magic_vars['_U']['account_bank_result']['realname'] = ''; echo $this->magic_vars['_U']['account_bank_result']['realname']; ?>”, 个人银行账号必须填写正确,否则你的提现资金将存在风险。
                    如果要修改的话必须要补全, 可以任何时候修改以您的姓名开户的银行卡号。" />
			</div>
			<div class="l" style="font-weight:bold;"></div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">手机验证：</div>
			<div class="c">
				<input type="text" name="mobilecode"  maxlength="6"  />&nbsp;&nbsp;<input id="codetime" name="codetime" type="button" value="获取验证码" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;"></div>
			<div class="c">
				<input type="hidden" name="user_id" value="<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id'] = ''; echo $this->magic_vars['_G']['user_id']; ?>" />
				<input type='hidden' name='oid' value='<?php echo date('YmdHis');?>'/> 
				<input type="button" class="btn-action"  name="name"  value="确认提交" size="30" onclick="sub_form()" /> 
			</div>
		</div>
		</form>
		<div class="user_right_foot alert">
		* 温馨提示：禁止信用卡套现
		</div>

	<script language="javascript">
		$("#codetime").click(function() {
			$("#codetime").attr({"disabled":"disabled"});
			$.ajax({
				url: "/index.php?user&q=code/account/cash_new_sms&itype=2&random="+Math.random(),
				success: function(msg){
					if(msg==-1){
						jQuery.jBox.confirm("您还没有手机认证，无法接收验证码，立即前往认证？", "提示", function(v,h,f){if(v=='ok'){location.href="/index.php?user&q=code/user/phone_status"};return true;});
						$("#codetime").removeAttr("disabled");
						return;
					}else if(msg==1){
						jQuery.jBox.success('验证码发送成功!', '提示');
						$("#codetime").attr({"disabled":"disabled"});
						var date=new Date();
						date.setTime(date.getTime()+5*60*1000);
						document.cookie = "bankcode=300;expires=" + date.toGMTString();
						SetRemainTime();
					}else{
						jQuery.jBox.error('验证码发送失败!', '提示');
						$("#codetime").removeAttr("disabled");
						return;
					}
				},
				error: function (xmlHttpRequest, error) {
					jQuery.jBox.error('验证码发送失败!', '提示');
					$("#codetime").removeAttr("disabled");
					return;
				}
			});
		});
		SetRemainTime();
		function SetRemainTime() {
			var arr,reg=new RegExp("(^| )bankcode=([^;]*)(;|$)");
			var SysSecond = 0;
			if(arr=document.cookie.match(reg)){
				var SysSecond = arr[2];
			}
		    if (SysSecond > 0) { 
		    SysSecond = SysSecond - 1;
		    var date=new Date();
			date.setTime(date.getTime()+SysSecond*1000);
			document.cookie = "bankcode="+SysSecond+";expires=" + date.toGMTString();
		    var second = Math.floor(SysSecond % 60);             // 计算秒     
		    var minite = Math.floor((SysSecond / 60) % 60);      //计算分 
		    var hour = Math.floor((SysSecond / 3600) % 24);      //计算小时 
		    var day = Math.floor((SysSecond / 3600) / 24);        //计算天 
			$("#codetime").attr({"value":minite+"分"+second+"秒"});
			$("#codetime").attr({"disabled":"disabled"});
			setTimeout("SetRemainTime()",1000);
		   }else{
			$("#codetime").attr({"value":"获取验证码"});	
				$("#codetime").removeAttr("disabled");
		   } 
	  }
function sub_form(){
	var form = document.forms['form1'];
	var bank = form1.elements['bank'].value;
	var branch = form1.elements['branch'].value;
	var account = form1.elements['account'].value;
	var mobilecode = form1.elements['mobilecode'].value;
	if(bank==''){
		jQuery.jBox.info('开户银行输入有误','提示');return false;
	}
	if(account==''){
		jQuery.jBox.info('开户行名称输入有误','提示');return false;
	}
	if(account.length<16){
		jQuery.jBox.info('银行账户输入有误','提示');return false;
	}
	if(mobilecode.length!=6){
		jQuery.jBox.info('手机验证码输入有误','提示');return false;
	}
	jQuery.jBox.tip("提交中", 'loading');
	form.submit();
}
</script>
	
		<!--银行账号 结束-->

		<!--提现 开始-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="cash_new"): ?>
		<div class="user_help alert" style="text-align:left;">
<strong>注：</strong><br/>
1、确保您的银行帐号的姓名和您的网站上的真实姓名一致<br><br>
2、请输入您要取出金额,我们将在1至2个工作日(国家节假日除外)之内处理您提交的提现申请。资金将在24小时内到达您的账上。请用户务必于每个工作日的下午4点(以最新公告时间为准)之前提交提现申请，每个工作日16:00(以最新公告时间为准)之后提交的提现申请在当天将不会得到及时处理。<br><br>
3、单笔取现下限<? if (!isset($this->magic_vars['_G']['cash_rule']['min_cash'])) $this->magic_vars['_G']['cash_rule']['min_cash'] = ''; echo $this->magic_vars['_G']['cash_rule']['min_cash']; ?>元，上限为<? if (!isset($this->magic_vars['_G']['cash_rule']['max_cash'])) $this->magic_vars['_G']['cash_rule']['max_cash'] = ''; echo $this->magic_vars['_G']['cash_rule']['max_cash']; ?>，日累计提现不得超过<? if (!isset($this->magic_vars['_G']['cash_rule']['max_day_cash'])) $this->magic_vars['_G']['cash_rule']['max_day_cash'] = ''; echo $this->magic_vars['_G']['cash_rule']['max_day_cash']; ?>。<br><br>
<? if (!isset($this->magic_vars['_G']['cash_rule']['scheme'])) $this->magic_vars['_G']['cash_rule']['scheme']=''; ;if (  $this->magic_vars['_G']['cash_rule']['scheme']==1): ?>
4、单笔提现金额<? if (!isset($this->magic_vars['_G']['cash_rule']['cash_lt'])) $this->magic_vars['_G']['cash_rule']['cash_lt'] = ''; echo $this->magic_vars['_G']['cash_rule']['cash_lt']; ?>元（包含）以下，每笔收取<? if (!isset($this->magic_vars['_G']['cash_rule']['every_lt_fee'])) $this->magic_vars['_G']['cash_rule']['every_lt_fee'] = ''; echo $this->magic_vars['_G']['cash_rule']['every_lt_fee']; ?>元手续费。单笔提现<? if (!isset($this->magic_vars['_G']['cash_rule']['cash_gt'])) $this->magic_vars['_G']['cash_rule']['cash_gt'] = ''; echo $this->magic_vars['_G']['cash_rule']['cash_gt']; ?>元以上，每笔收取<? if (!isset($this->magic_vars['_G']['cash_rule']['every_gt_fee'])) $this->magic_vars['_G']['cash_rule']['every_gt_fee'] = ''; echo $this->magic_vars['_G']['cash_rule']['every_gt_fee']; ?>元手续费。用户自充值之日起于<? if (!isset($this->magic_vars['_G']['cash_rule']['every_day_lt'])) $this->magic_vars['_G']['cash_rule']['every_day_lt'] = ''; echo $this->magic_vars['_G']['cash_rule']['every_day_lt']; ?>日之内且未完全投标的额外加收<? if (!isset($this->magic_vars['_G']['cash_rule']['every_extra_fee'])) $this->magic_vars['_G']['cash_rule']['every_extra_fee'] = ''; echo $this->magic_vars['_G']['cash_rule']['every_extra_fee']; ?>元手续费。
<? else: ?>
4、提现手续费为提现金额的<? if (!isset($this->magic_vars['_G']['cash_rule']['scale_fee'])) $this->magic_vars['_G']['cash_rule']['scale_fee'] = ''; echo $this->magic_vars['_G']['cash_rule']['scale_fee']; ?>%，用户自充值之日起于<? if (!isset($this->magic_vars['_G']['cash_rule']['scale_day_lt'])) $this->magic_vars['_G']['cash_rule']['scale_day_lt'] = ''; echo $this->magic_vars['_G']['cash_rule']['scale_day_lt']; ?>日之内且未完全投标的部分额外加收<? if (!isset($this->magic_vars['_G']['cash_rule']['scale_extra_fee'])) $this->magic_vars['_G']['cash_rule']['scale_extra_fee'] = ''; echo $this->magic_vars['_G']['cash_rule']['scale_extra_fee']; ?>%手续费。
<? endif; ?>
<br>
		</div>
		<form action="" method="post" onsubmit="return check_form()" name="form1">
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">真实姓名：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['realname'])) $this->magic_vars['_G']['user_result']['realname'] = ''; echo $this->magic_vars['_G']['user_result']['realname']; ?>
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">账户余额：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['use_money'])) $this->magic_vars['_G']['user_result']['use_money'] = '';$_tmp = $this->magic_vars['_G']['user_result']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>元
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">可用余额：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['use_money'])) $this->magic_vars['_G']['user_result']['use_money'] = '';$_tmp = $this->magic_vars['_G']['user_result']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>元
				<input type="hidden" name="userMoney" id="userMoney" value="<? if (!isset($this->magic_vars['_G']['user_result']['use_money'])) $this->magic_vars['_G']['user_result']['use_money'] = '';$_tmp = $this->magic_vars['_G']['user_result']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>">
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">冻结总额：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['no_use_money'])) $this->magic_vars['_G']['user_result']['no_use_money'] = '';$_tmp = $this->magic_vars['_G']['user_result']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>元
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">提现的银行：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['account_bank_result']['bank'])) $this->magic_vars['_U']['account_bank_result']['bank'] = '';$_tmp = $this->magic_vars['_U']['account_bank_result']['bank'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?> <? if (!isset($this->magic_vars['_U']['account_bank_result']['branch'])) $this->magic_vars['_U']['account_bank_result']['branch'] = ''; echo $this->magic_vars['_U']['account_bank_result']['branch']; ?> <? if (!isset($this->magic_vars['_U']['account_bank_result']['account_view'])) $this->magic_vars['_U']['account_bank_result']['account_view'] = ''; echo $this->magic_vars['_U']['account_bank_result']['account_view']; ?> 
			</div>
		</div>
                    
		<? $data = array('user_id'=>$this->magic_vars['_G']['user_id'],'article_id'=>'0','id'=>$this->magic_vars['_G']['article_id']);  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['var'] = borrowClass::GetCashGoodAmount($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>
                
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">正在申请提现：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['var']['txValue'])) $this->magic_vars['var']['txValue'] = '';$_tmp = $this->magic_vars['var']['txValue'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>元(金额)
			</div>
		</div>
                
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">建议最大提现：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['var']['yValue'])) $this->magic_vars['var']['yValue'] = ''; echo $this->magic_vars['var']['yValue']; ?>元(金额)
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">红包数：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['hongbao'])) $this->magic_vars['_G']['user_result']['hongbao'] = ''; echo $this->magic_vars['_G']['user_result']['hongbao']; ?>元
				<input type="hidden" name="hongbao" id="hongbao" value="<? if (!isset($this->magic_vars['_G']['user_result']['hongbao'])) $this->magic_vars['_G']['user_result']['hongbao'] = ''; echo $this->magic_vars['_G']['user_result']['hongbao']; ?>">
				<input type="hidden" name="hongbaoUsed" id="hongbaoUsed" value="">
			</div>
		</div>
		<input type="hidden" name="cashGoodAmount" id="cashGoodAmount" value="<? if (!isset($this->magic_vars['var']['yValue'])) $this->magic_vars['var']['yValue'] = ''; echo $this->magic_vars['var']['yValue']; ?>">
		<script style="text/javascript">
		var scheme=<? if (!isset($this->magic_vars['var']['cash_scheme']['scheme'])) $this->magic_vars['var']['cash_scheme']['scheme'] = ''; echo $this->magic_vars['var']['cash_scheme']['scheme']; ?>;
		var max_cash=<? if (!isset($this->magic_vars['var']['cash_scheme']['max_cash'])) $this->magic_vars['var']['cash_scheme']['max_cash'] = ''; echo $this->magic_vars['var']['cash_scheme']['max_cash']; ?>;
		var min_cash=<? if (!isset($this->magic_vars['var']['cash_scheme']['min_cash'])) $this->magic_vars['var']['cash_scheme']['min_cash'] = ''; echo $this->magic_vars['var']['cash_scheme']['min_cash']; ?>;
		var cash_lt=<? if (!isset($this->magic_vars['var']['cash_scheme']['cash_lt'])) $this->magic_vars['var']['cash_scheme']['cash_lt'] = ''; echo $this->magic_vars['var']['cash_scheme']['cash_lt']; ?>;
		var cash_gt=<? if (!isset($this->magic_vars['var']['cash_scheme']['cash_gt'])) $this->magic_vars['var']['cash_scheme']['cash_gt'] = ''; echo $this->magic_vars['var']['cash_scheme']['cash_gt']; ?>;
		var every_lt_fee=<? if (!isset($this->magic_vars['var']['cash_scheme']['every_lt_fee'])) $this->magic_vars['var']['cash_scheme']['every_lt_fee'] = ''; echo $this->magic_vars['var']['cash_scheme']['every_lt_fee']; ?>;
		var every_gt_fee=<? if (!isset($this->magic_vars['var']['cash_scheme']['every_gt_fee'])) $this->magic_vars['var']['cash_scheme']['every_gt_fee'] = ''; echo $this->magic_vars['var']['cash_scheme']['every_gt_fee']; ?>;
		var every_extra_fee=<? if (!isset($this->magic_vars['var']['cash_scheme']['every_extra_fee'])) $this->magic_vars['var']['cash_scheme']['every_extra_fee'] = ''; echo $this->magic_vars['var']['cash_scheme']['every_extra_fee']; ?>;
		var scale_fee=<? if (!isset($this->magic_vars['var']['cash_scheme']['scale_fee'])) $this->magic_vars['var']['cash_scheme']['scale_fee'] = ''; echo $this->magic_vars['var']['cash_scheme']['scale_fee']; ?>;
		var scale_extra_fee=<? if (!isset($this->magic_vars['var']['cash_scheme']['scale_extra_fee'])) $this->magic_vars['var']['cash_scheme']['scale_extra_fee'] = ''; echo $this->magic_vars['var']['cash_scheme']['scale_extra_fee']; ?>;
		var free_extra_part=<? if (!isset($this->magic_vars['var']['free_extra_part'])) $this->magic_vars['var']['free_extra_part'] = ''; echo $this->magic_vars['var']['free_extra_part']; ?>;
		</script>
		<? unset($_magic_vars);unset($data); ?>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">交易密码：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['account_bank_result']['paypassword'])) $this->magic_vars['_U']['account_bank_result']['paypassword']=''; ;if (  $this->magic_vars['_U']['account_bank_result']['paypassword']==""): ?><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>&q=code/user/paypwd"><font color="#FF0000">请先设置一个支付密码</font></a><? else: ?><input type="password" name="paypassword" /><? endif; ?>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">提现金额：</div>
			<div class="c">
				<input type="text" name="money"  onblur="commit(this);" id="cash_money"  /><span id="realacc">实际到账：<font color="#FF0000" id="real_money">0</font> 元</span>
				<span id="realacc">本次提现手续费<font color="#FF0000" id="cash_fee">0</font>元</span>，使用红包抵消提现费用：<font color="#FF0000" id="hongbao_used">0</font> 元</span>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">手机验证：</div>
			<div class="c">
				<input type="text" name="mobilecode"  maxlength="6"  />&nbsp;&nbsp;<input id="codetime" name="codetime" type="button" value="发送验证码"/>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">动态口令(可选)：</div>
			<div class="c">
				<input type="text" name="uchoncode"  maxlength="6"  />
			</div>
		</div>

		<script language="javascript">
				
				document.getElementById("codetime").onclick = function(){
					$("#codetime").attr({"disabled":"disabled"});
					$.ajax({
						url:"/index.php?user&q=code/account/cash_new_sms&itype=1&random="+Math.random(),
						success:function(msg){
							if(msg==-1){
								jQuery.jBox.confirm("您还没有手机认证，无法接收验证码，立即前往认证？", "提示", function(v,h,f){if(v=='ok'){location.href="/index.php?user&q=code/user/phone_status"};return true;});
								$("#codetime").removeAttr("disabled");
								return;
							}else if(msg==1){
								jQuery.jBox.success('验证码发送成功', '提示');
								$("#codetime").attr({"disabled":"disabled"});
								var date=new Date();
								date.setTime(date.getTime()+5*60*1000);
								document.cookie = "cashcode=300;expires=" + date.toGMTString();
								SetRemainTime();
							}else{
								jQuery.jBox.error('验证码发送失败!', '提示');
								$("#codetime").removeAttr("disabled");
								return;
							}
						},
						error:function(XMLHttpRequest, error){
							jQuery.jBox.error('验证码发送失败!', '提示');
							$("#codetime").removeAttr("disabled");
							return;
						}
					});
				}
				SetRemainTime();
				function SetRemainTime() {
						var arr,reg=new RegExp("(^| )cashcode=([^;]*)(;|$)");
						var SysSecond = 0;
						if(arr=document.cookie.match(reg)){
							var SysSecond = arr[2];
						}
					    if (SysSecond > 0) { 
					    SysSecond = SysSecond - 1;
					    var date=new Date();
						date.setTime(date.getTime()+SysSecond*1000);
						document.cookie = "cashcode="+SysSecond+";expires=" + date.toGMTString();
					    var second = Math.floor(SysSecond % 60);             // 计算秒     
					    var minite = Math.floor((SysSecond / 60) % 60);      //计算分 
					    var hour = Math.floor((SysSecond / 3600) % 24);      //计算小时 
					    var day = Math.floor((SysSecond / 3600) / 24);        //计算天 
						$("#codetime").attr({"value":minite+"分"+second+"秒"});
						$("#codetime").attr({"disabled":"disabled"});
						setTimeout("SetRemainTime()",1000);
					   }else{
						$("#codetime").attr({"value":"获取验证码"});	
							$("#codetime").removeAttr("disabled");
					   } 
				}
	</script>


<script style="text/javascript">
	document.getElementById("cash_money").value=0;
       function commit(obj) {
            if (parseFloat(obj.value) > 0 )
            {
				var inputValue=parseFloat(obj.value);
				var yValue = document.getElementById("cashGoodAmount").value;
				var userMoney = document.getElementById("userMoney").value;
                if(inputValue!=0 && (inputValue<min_cash || inputValue>max_cash)){
                	jQuery.jBox.error("您好，提现资金不能低于"+min_cash+"元高于"+max_cash+"元", '警告');
                	obj.value = 0;
                	document.getElementById("real_money").innerText = 0 ;
                	return;
                }else if(inputValue>yValue){
                	jQuery.jBox.error("您好，提现资金不能高于最佳提现金额"+yValue+"元", '警告');
                	obj.value = 0;
                	document.getElementById("real_money").innerText = 0 ;
                	return;
                }
                getCashFeeValue(inputValue);
                return true;
            }
        }
        function getCashFeeValue(cashAmount){
                var yValue = document.getElementById("cashGoodAmount").value;
				var hongbao = document.getElementById("hongbao").value;
                var hongbaoUsed = 0;
                var caseFee;
                if(scheme==1){
					if(cashAmount<=cash_lt){
						caseFee=every_lt_fee;
					}else{
						caseFee=every_gt_fee;
					}
                }else if(scheme==2){
                	caseFee=cashAmount*scale_fee;
                }
                if(cashAmount>free_extra_part){
					if(scheme==1){
						caseFee+=every_extra_fee;
					}else if(scheme==2){
						caseFee+=(cashAmount-free_extra_part)*scale_extra_fee
					}
                }
				if(caseFee>=hongbao){
					hongbaoUsed=hongbao*1;
				}else{
					hongbaoUsed=caseFee*1;
				}
				document.getElementById("cash_fee").innerHTML = changeTwoDecimal(caseFee);
                document.getElementById("real_money").innerHTML = changeTwoDecimal(cashAmount-caseFee+hongbaoUsed);
				document.getElementById("hongbaoUsed").value = changeTwoDecimal(hongbaoUsed);
				document.getElementById("hongbao_used").innerHTML = changeTwoDecimal(hongbaoUsed);
        }
        
        function changeTwoDecimal(x)
        {
            var f_x = parseFloat(x);
            if (isNaN(f_x))
            {
                alert('function:changeTwoDecimal->parameter error');
                return false;
            }
            var f_x = Math.round(x*100)/100;
            return f_x;
        }
</script>

		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">验证码：</div>
			<div class="c">
				<input name="valicode" type="text" size="11" maxlength="4" style="float:left;"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer;float:left;" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;"></div>
			<div class="c">
				<input type="hidden" name="user_id" value="<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id'] = ''; echo $this->magic_vars['_G']['user_id']; ?>" />
				<input type="button" class="btn-action"  name="name"  value="确认提交" size="30" onclick="check_form()" /> 
			</div>
		</div>
		</form>
		<div class="user_right_foot alert">
		* 温馨提示：禁止信用卡套现
		</div>
<script>
var use_money = <? if (!isset($this->magic_vars['_G']['user_result']['use_money'])) $this->magic_vars['_G']['user_result']['use_money'] = '';$_tmp = $this->magic_vars['_G']['user_result']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>;

function check_form(){
	var frm = document.forms['form1'];
	var paypassword = frm.elements['paypassword'].value;
	var money = frm.elements['money'].value;
	var valicode = frm.elements['valicode'].value;
	var mobilecode = frm.elements['mobilecode'].value;
	if(!commit(document.getElementById("cash_money"))){
		jQuery.jBox.error('请输入有效的金额', '提示');
		return false;
	}
	if (paypassword.length == 0 ) {
		jQuery.jBox.error('请输入您的交易密码', '提示');return false;
	}
	if (money.length == 0 || money==0) {
		jQuery.jBox.error('请输入你的提现金额', '提示');return false;
	}
	if (money >use_money) {
		jQuery.jBox.error('您的提现金额大于现有的可用余额', '提示');return false;
	}
	if (!/^[0-9a-zA-Z]{4}$/.test(valicode)){
		jQuery.jBox.error('验证码格式有误', '提示');return false;
	}
	if(mobilecode==''){
		jQuery.jBox.error('手机验证码不能为空', '提示');return false;
	}
	jQuery.jBox.tip('提交中', 'loading');
	frm.submit();
}
</script>

<!--提现 结束-->
<? else: ?>

<? $this->magic_vars['day7'] = time()-6*60*60*24;?>
<? $this->magic_vars['nowtime'] = time();?>

		<div class="user_main_title" style="height:30px; padding-top:7px;"> 
		发布时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = '';$_tmp = $_REQUEST['dotime1']; if (!isset($this->magic_vars['day7'])) $this->magic_vars['day7'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['day7']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = '';$_tmp = $_REQUEST['dotime2']; if (!isset($this->magic_vars['nowtime'])) $this->magic_vars['nowtime'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['nowtime']);$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" id="dotime2" size="15" onclick="change_picktime()"/>   
		<input value="搜索" type="submit" class="btn-action"  onclick="sousuo('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/publish')" />
		</div>	
		<? $data = array('user_id'=>'0','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['var'] = borrowClass::GetUserLog($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>
		<table width="100%">
			<tr style="height: 25px">
				<td colspan="6"><strong>个人资金详情</strong></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">账户总额：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['total'])) $this->magic_vars['var']['total'] = '';$_tmp = $this->magic_vars['var']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">可用余额：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['use_money'])) $this->magic_vars['var']['use_money'] = '';$_tmp = $this->magic_vars['var']['use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">冻结金额：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['no_use_money'])) $this->magic_vars['var']['no_use_money'] = '';$_tmp = $this->magic_vars['var']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">投标冻结总额：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['tender'])) $this->magic_vars['var']['tender'] = '';$_tmp = $this->magic_vars['var']['tender'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">充值成功总额：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['recharge_success'])) $this->magic_vars['var']['recharge_success'] = '';$_tmp = $this->magic_vars['var']['recharge_success'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">提现成功总额：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['cash_success']['money'])) $this->magic_vars['var']['cash_success']['money'] = '';$_tmp = $this->magic_vars['var']['cash_success']['money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">在线充值总额：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['recharge_online'])) $this->magic_vars['var']['recharge_online'] = '';$_tmp = $this->magic_vars['var']['recharge_online'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">线下充值总额：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['recharge_downline'])) $this->magic_vars['var']['recharge_downline'] = '';$_tmp = $this->magic_vars['var']['recharge_downline'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">手动充值总额：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['recharge_shoudong'])) $this->magic_vars['var']['recharge_shoudong'] = '';$_tmp = $this->magic_vars['var']['recharge_shoudong'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">总手续费：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['fee'])) $this->magic_vars['var']['fee'] = ''; if (!isset($this->magic_vars['var']['recharge_fee'])) $this->magic_vars['var']['recharge_fee'] = '';$_tmp = $this->magic_vars['var']['fee']+$this->magic_vars['var']['recharge_fee'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">充值手续费：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['fee'])) $this->magic_vars['var']['fee'] = '';$_tmp = $this->magic_vars['var']['fee'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">提现手续费：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['recharge_fee'])) $this->magic_vars['var']['recharge_fee'] = '';$_tmp = $this->magic_vars['var']['recharge_fee'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">最高额度：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['amount'])) $this->magic_vars['var']['amount'] = '';$_tmp = $this->magic_vars['var']['amount'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">最低额度：</td><td align="left">￥500</td>
				<td align="right">可用额度：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['use_amount'])) $this->magic_vars['var']['use_amount'] = '';$_tmp = $this->magic_vars['var']['use_amount'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr style="height: 25px">
				<td colspan="6"><strong>投资资金详情</strong></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">投标总额：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['invest_account'])) $this->magic_vars['var']['invest_account'] = '';$_tmp = $this->magic_vars['var']['invest_account'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">借出总额：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['success_account'])) $this->magic_vars['var']['success_account'] = '';$_tmp = $this->magic_vars['var']['success_account'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">奖励收入总额：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['award_add'])) $this->magic_vars['var']['award_add'] = '';$_tmp = $this->magic_vars['var']['award_add'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">待回收总额：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['collection_wait'])) $this->magic_vars['var']['collection_wait'] = '';$_tmp = $this->magic_vars['var']['collection_wait'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">待回收金额：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['collection_capital0'])) $this->magic_vars['var']['collection_capital0'] = '';$_tmp = $this->magic_vars['var']['collection_capital0'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">待回收利息：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['collection_interest0'])) $this->magic_vars['var']['collection_interest0'] = '';$_tmp = $this->magic_vars['var']['collection_interest0'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">已回收总额：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['collection_yes'])) $this->magic_vars['var']['collection_yes'] = '';$_tmp = $this->magic_vars['var']['collection_yes'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">已回收金额：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['collection_capital1'])) $this->magic_vars['var']['collection_capital1'] = '';$_tmp = $this->magic_vars['var']['collection_capital1'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">已回收利息：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['collection_interest1'])) $this->magic_vars['var']['collection_interest1'] = '';$_tmp = $this->magic_vars['var']['collection_interest1'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">网站垫付总额：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['num_late_repay_account'])) $this->magic_vars['var']['num_late_repay_account'] = '';$_tmp = $this->magic_vars['var']['num_late_repay_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">逾期罚金收入：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['late_collection'])) $this->magic_vars['var']['late_collection'] = '';$_tmp = $this->magic_vars['var']['late_collection'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">损失利息总额：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['num_late_interes'])) $this->magic_vars['var']['num_late_interes'] = '';$_tmp = $this->magic_vars['var']['num_late_interes'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">最近收款日期：</td><td align="left"><? if (!isset($this->magic_vars['var']['collection_repaytime'])) $this->magic_vars['var']['collection_repaytime'] = '';$_tmp = $this->magic_vars['var']['collection_repaytime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
				<td align="right"></td><td align="left"></td>
				<td align="right"></td><td align="left"></td>
			</tr>
			<tr style="height: 25px">
				<td colspan="6"><strong>贷款资金详情</strong></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">借款总额：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['borrow_num'])) $this->magic_vars['var']['borrow_num'] = '';$_tmp = $this->magic_vars['var']['borrow_num'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">已还总额：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['borrow_num1'])) $this->magic_vars['var']['borrow_num1'] = '';$_tmp = $this->magic_vars['var']['borrow_num1'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">未还总额：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['wait_payment'])) $this->magic_vars['var']['wait_payment'] = '';$_tmp = $this->magic_vars['var']['wait_payment'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">发标次数：</td><td align="left"><? if (!isset($this->magic_vars['var']['borrow_times'])) $this->magic_vars['var']['borrow_times'] = '';$_tmp = $this->magic_vars['var']['borrow_times'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">还款标数：</td><td align="left"><? if (!isset($this->magic_vars['var']['payment_times'])) $this->magic_vars['var']['payment_times'] = '';$_tmp = $this->magic_vars['var']['payment_times'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">待还笔数：</td><td align="left"><? if (!isset($this->magic_vars['var']['borrow_repay0'])) $this->magic_vars['var']['borrow_repay0'] = '';$_tmp = $this->magic_vars['var']['borrow_repay0'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">最近还款日期：</td><td align="left"><? if (!isset($this->magic_vars['var']['new_repay_time'])) $this->magic_vars['var']['new_repay_time'] = '';$_tmp = $this->magic_vars['var']['new_repay_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
				<td align="right">最近应还款金额：</td><td align="left">￥<? if (!isset($this->magic_vars['var']['new_repay_account'])) $this->magic_vars['var']['new_repay_account'] = '';$_tmp = $this->magic_vars['var']['new_repay_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				<td align="right"></td><td align="left"></td>
			</tr>
		</table>
		<? unset($_magic_vars);unset($data); ?>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed"  width="300" style="margin-top:20px;">
		<tr class="head"  width="300">
		<td>日期</td>
		<td>成功借款+</td>
		<td>借款手续费-</td>
		<td>借款保证金-</td>
		<td>借款奖励-</td>
		<td>投标-</td>
		<td>待收总额+</td>
		<td>投标奖励+</td>
		<td>还款-</td>
		<td>充值+</td>
		<td>提现-</td>
		</tr>
			<? $this->magic_vars['query_type']='GetLogCount';$data = array('var'=>'var','dotime1'=>$_REQUEST['dotime1'],'dotime2'=>$_REQUEST['dotime2'],'user_id'=>$this->magic_vars['_G']['user_id']);$default = '';  include_once(ROOT_PATH.'modules/account/account.class.php');$this->magic_vars['magic_result'] = accountClass::GetLogCount($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<tr <? if (!isset($this->magic_vars['var']['i'])) $this->magic_vars['var']['i']=''; ;if (  $this->magic_vars['var']['i']%2==1): ?> class="tr1"<? endif; ?>>
					<td><? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?></td>
					<td <? if (!isset($this->magic_vars['var']['borrow_success'])) $this->magic_vars['var']['borrow_success']=''; ;if (  $this->magic_vars['var']['borrow_success']!=""): ?> style="color:#FF0000"<? endif; ?>>￥<? if (!isset($this->magic_vars['var']['borrow_success'])) $this->magic_vars['var']['borrow_success'] = '';$_tmp = $this->magic_vars['var']['borrow_success'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['borrow_fee'])) $this->magic_vars['var']['borrow_fee']=''; ;if (  $this->magic_vars['var']['borrow_fee']!=""): ?> style="color:#FF0000"<? endif; ?>>￥<? if (!isset($this->magic_vars['var']['borrow_fee'])) $this->magic_vars['var']['borrow_fee'] = '';$_tmp = $this->magic_vars['var']['borrow_fee'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['margin'])) $this->magic_vars['var']['margin']=''; ;if (  $this->magic_vars['var']['margin']!=""): ?> style="color:#FF0000"<? endif; ?>>￥<? if (!isset($this->magic_vars['var']['margin'])) $this->magic_vars['var']['margin'] = '';$_tmp = $this->magic_vars['var']['margin'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['award_lower'])) $this->magic_vars['var']['award_lower']=''; ;if (  $this->magic_vars['var']['award_lower']!=""): ?> style="color:#FF0000"<? endif; ?>>￥<? if (!isset($this->magic_vars['var']['award_lower'])) $this->magic_vars['var']['award_lower'] = '';$_tmp = $this->magic_vars['var']['award_lower'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['tender'])) $this->magic_vars['var']['tender']=''; ;if (  $this->magic_vars['var']['tender']!=""): ?> style="color:#FF0000"<? endif; ?>>￥<? if (!isset($this->magic_vars['var']['tender'])) $this->magic_vars['var']['tender'] = '';$_tmp = $this->magic_vars['var']['tender'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['collection'])) $this->magic_vars['var']['collection']=''; ;if (  $this->magic_vars['var']['collection']!=""): ?> style="color:#FF0000"<? endif; ?>>￥<? if (!isset($this->magic_vars['var']['collection'])) $this->magic_vars['var']['collection'] = '';$_tmp = $this->magic_vars['var']['collection'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['award_add'])) $this->magic_vars['var']['award_add']=''; ;if (  $this->magic_vars['var']['award_add']!=""): ?> style="color:#FF0000"<? endif; ?>>￥<? if (!isset($this->magic_vars['var']['award_add'])) $this->magic_vars['var']['award_add'] = '';$_tmp = $this->magic_vars['var']['award_add'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['invest_repayment'])) $this->magic_vars['var']['invest_repayment']=''; ;if (  $this->magic_vars['var']['invest_repayment']!=""): ?> style="color:#FF0000"<? endif; ?>>￥<? if (!isset($this->magic_vars['var']['invest_repayment'])) $this->magic_vars['var']['invest_repayment'] = '';$_tmp = $this->magic_vars['var']['invest_repayment'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['recharge'])) $this->magic_vars['var']['recharge']=''; ;if (  $this->magic_vars['var']['recharge']!=""): ?> style="color:#FF0000"<? endif; ?>>￥<? if (!isset($this->magic_vars['var']['recharge'])) $this->magic_vars['var']['recharge'] = '';$_tmp = $this->magic_vars['var']['recharge'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td <? if (!isset($this->magic_vars['var']['recharge_success'])) $this->magic_vars['var']['recharge_success']=''; ;if (  $this->magic_vars['var']['recharge_success']!=""): ?> style="color:#FF0000"<? endif; ?>>￥<? if (!isset($this->magic_vars['var']['recharge_success'])) $this->magic_vars['var']['recharge_success'] = '';$_tmp = $this->magic_vars['var']['recharge_success'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				</tr>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
		</table>	
			<? endif; ?>
	</div>
	<!--右边的内容 结束-->
</div>
<!--用户中心的主栏目 结束-->
</div>
</div>
<script type="text/javascript">
var url = "<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type'] = ''; echo $this->magic_vars['_U']['query_type']; ?>";

function sousuo(){
	var _url = "";
	var dotime1 = jQuery("#dotime1").val();
	var keywords = jQuery("#keywords").val();
	var username = jQuery("#username").val();
	var dotime2 = jQuery("#dotime2").val();
	var type = jQuery("#type").val();
	if (username!=null){
		 _url += "&username="+username;
	}
	if (keywords!=null){
		 _url += "&keywords="+keywords;
	}
	if (dotime1!=null){
		 _url += "&dotime1="+dotime1;
	}
	if (dotime2!=null){
		 _url += "&dotime2="+dotime2;
	}
	if (type!=null){
		 _url += "&type="+type;
	}
	location.href=url+_url;
}
$("[type='radio']").css("border","0");
$("#ban img").each(function(){
	this.onclick = function(){
		$(this).parent().find("input").attr("checked", "checked");
	}
})
</script>

<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/modal.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/tab.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/alert.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/tooltip.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/popover.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/transition.js"></script>
<? $this->magic_include(array('file' => "user_footer.html", 'vars' => array()));?>