<!-- 初审 开始 -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "view"): ?>
<div class="module_add">
	<form name="form1" method="post" action="" onsubmit="return submit_fool();" enctype="multipart/form-data" >
	<div class="module_title"><strong>审核借款标</strong></div>
	<div class="module_border">
		<div class="l">用户名：</div>
		<div class="c">
		<a href="javascript:void(0)" onclick='tipsWindown("用户详细信息查看","url:get?<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['_A']['borrow_result']['user_id'])) $this->magic_vars['_A']['borrow_result']['user_id'] = ''; echo $this->magic_vars['_A']['borrow_result']['user_id']; ?>&type=scene",500,230,"true","","true","text");'>	<? if (!isset($this->magic_vars['_A']['user_result']['username'])) $this->magic_vars['_A']['user_result']['username'] = '';$_tmp = $this->magic_vars['_A']['user_result']['username']; if (!isset($this->magic_vars['_A']['borrow_result']['username'])) $this->magic_vars['_A']['borrow_result']['username'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['_A']['borrow_result']['username']);echo $_tmp;unset($_tmp); ?></a>
		</div>
	</div>
	<div class="module_border">
		<div class="l">状态：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['status']==0): ?>发布审批中<? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['status']==1): ?>正在募集<? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['status']==2): ?>审核失败<? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['status']==3): ?>已满标<? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['status']==4): ?>满标审核失败<? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['status']==5): ?>撤回<? endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">借款用途：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['use'])) $this->magic_vars['_A']['borrow_result']['use'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['use'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_use");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">借款期限：</div>
		<div class="c">
		<? if (!isset($this->magic_vars['_A']['borrow_result']['isday'])) $this->magic_vars['_A']['borrow_result']['isday']=''; ;if (  $this->magic_vars['_A']['borrow_result']['isday']==1): ?> 
                <? if (!isset($this->magic_vars['_A']['borrow_result']['time_limit_day'])) $this->magic_vars['_A']['borrow_result']['time_limit_day'] = ''; echo $this->magic_vars['_A']['borrow_result']['time_limit_day']; ?>天
                <? else: ?>
                <? if (!isset($this->magic_vars['_A']['borrow_result']['time_limit'])) $this->magic_vars['_A']['borrow_result']['time_limit'] = ''; echo $this->magic_vars['_A']['borrow_result']['time_limit']; ?>个月
                <? endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">还款方式：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['isday'])) $this->magic_vars['_A']['borrow_result']['isday']=''; ;if (  $this->magic_vars['_A']['borrow_result']['isday']==1): ?> 
                到期全额还款
            <? else: ?>
                <? if (!isset($this->magic_vars['_A']['borrow_result']['style'])) $this->magic_vars['_A']['borrow_result']['style'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?>
            <? endif; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">借贷总金额：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account'] = ''; echo $this->magic_vars['_A']['borrow_result']['account']; ?><input type="hidden" name="account" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account'] = ''; echo $this->magic_vars['_A']['borrow_result']['account']; ?>" /> 元
		</div>
	</div>
	<div class="module_border">
		<div class="l">年利率：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['apr'])) $this->magic_vars['_A']['borrow_result']['apr'] = ''; echo $this->magic_vars['_A']['borrow_result']['apr']; ?> %
		</div>
	</div>
	<div class="module_border">
		<div class="l">最低投标金额：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['lowest_account'])) $this->magic_vars['_A']['borrow_result']['lowest_account'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['lowest_account'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_lowest_account");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">最多投标总额：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['most_account'])) $this->magic_vars['_A']['borrow_result']['most_account'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['most_account'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_most_account");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
		<div class="module_border">
		<div class="l">有效时间：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['valid_time'])) $this->magic_vars['_A']['borrow_result']['valid_time'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['valid_time'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_valid_time");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<div class="module_title"><strong>设置奖励</strong></div>
	<div class="module_border">
		<div class="w"><input type="radio" name="award" value="0" <? if (!isset($this->magic_vars['_A']['borrow_result']['award'])) $this->magic_vars['_A']['borrow_result']['award']='';if (!isset($this->magic_vars['_A']['borrow_result']['award'])) $this->magic_vars['_A']['borrow_result']['award']=''; ;if (  $this->magic_vars['_A']['borrow_result']['award']==0 ||  $this->magic_vars['_A']['borrow_result']['award']==""): ?> checked="checked"<? endif; ?> disabled="disabled">不设置奖励</div>
		<div class="c">
			 <span>如果您设置了奖励金额，将会冻结您帐户中相应的账户余额。如果要设置奖励，请确保您的帐户有足够 的账户余额。 </span>
		</div>
	</div>
	<div class="module_border">
		<div class="w"><input type="radio" name="award" value="1" <? if (!isset($this->magic_vars['_A']['borrow_result']['award'])) $this->magic_vars['_A']['borrow_result']['award']=''; ;if (  $this->magic_vars['_A']['borrow_result']['award']==1): ?> checked="checked"<? endif; ?> disabled="disabled"/>按固定金额分摊奖励：</div>
		<div class="c">
			<input type="text" name="part_account" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['part_account'])) $this->magic_vars['_A']['borrow_result']['part_account'] = ''; echo $this->magic_vars['_A']['borrow_result']['part_account']; ?>" size="5" disabled="disabled"/> 元 <span>保留到“元”为单位。这里设置本次标的要奖励给所有投标用户的总金额。  </span>
		</div>
	</div>
	<div class="module_border">
		<div class="w"><input type="radio" name="award" value="2" <? if (!isset($this->magic_vars['_A']['borrow_result']['award'])) $this->magic_vars['_A']['borrow_result']['award']=''; ;if (  $this->magic_vars['_A']['borrow_result']['award']==2): ?> checked="checked"<? endif; ?> disabled="disabled"/>按投标金额比例奖励：</div>
		<div class="c">
			<input type="text" name="funds" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['funds'])) $this->magic_vars['_A']['borrow_result']['funds'] = ''; echo $this->magic_vars['_A']['borrow_result']['funds']; ?>" size="5" disabled="disabled"/> %  <span>这里设置本次标的要奖励给所有投标用户的奖励比例。  </span>
		</div>
	</div>
	<div class="module_border">
		<div class="w"><input type="checkbox" name="is_false" value="1" <? if (!isset($this->magic_vars['_A']['borrow_result']['is_false'])) $this->magic_vars['_A']['borrow_result']['is_false']=''; ;if (  $this->magic_vars['_A']['borrow_result']['is_false']==1): ?> checked="checked"<? endif; ?>  disabled="disabled"/>标的失败时也同样奖励：</div>
		<div class="c">
			  <span>如果您勾选了此选项，到期未满标或复审失败时同样会奖励给投标用户。如果没有勾选，标的失败时会把奖励金额解冻回账户余额。   </span>
		</div>
	</div>
	<? if (!isset($this->magic_vars['_A']['borrow_result']['is_vouch'])) $this->magic_vars['_A']['borrow_result']['is_vouch']=''; ;if (  $this->magic_vars['_A']['borrow_result']['is_vouch']==1): ?>
	<div class="module_title"><strong>担保奖励</strong></div>
	<div class="module_border">
		<div class="l">担保奖励：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['vouch_award'])) $this->magic_vars['_A']['borrow_result']['vouch_award'] = ''; echo $this->magic_vars['_A']['borrow_result']['vouch_award']; ?>%
		</div>
	</div>
	<div class="module_border">
		<div class="l">指定担保人：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['vouch_user'])) $this->magic_vars['_A']['borrow_result']['vouch_user'] = ''; echo $this->magic_vars['_A']['borrow_result']['vouch_user']; ?>
		</div>
	</div>
	<? endif; ?>
	<div class="module_title"><strong>帐户信息公开</strong></div>
	<div class="module_border">
		<div class="w">公开我的帐户资金情况：</div>
		<div class="c">
			<input type="checkbox" name="open_account" value="1" <? if (!isset($this->magic_vars['_A']['borrow_result']['open_account'])) $this->magic_vars['_A']['borrow_result']['open_account']=''; ;if (  $this->magic_vars['_A']['borrow_result']['open_account']==1): ?> checked="checked"<? endif; ?> disabled="disabled"/> <span> 如果您勾上此选项，将会实时公开您帐户的：账户总额、可用余额、冻结总额。  </span>
		</div>
	</div>
	<div class="module_border">
		<div class="w">公开我的借款资金情况：</div>
		<div class="c">
			<input type="checkbox" name="open_borrow" value="1" <? if (!isset($this->magic_vars['_A']['borrow_result']['open_borrow'])) $this->magic_vars['_A']['borrow_result']['open_borrow']=''; ;if (  $this->magic_vars['_A']['borrow_result']['open_borrow']==1): ?> checked="checked"<? endif; ?> disabled="disabled"/> <span>如果您勾上此选项，将会实时公开您帐户的：借款总额、已还款总额、未还款总额、迟还总额、逾期总额。 </span>
		</div>
	</div>
	<div class="module_border">
		<div class="w">公开我的投标资金情况：</div>
		<div class="c">
			<input type="checkbox" name="open_tender" value="1" <? if (!isset($this->magic_vars['_A']['borrow_result']['open_tender'])) $this->magic_vars['_A']['borrow_result']['open_tender']=''; ;if (  $this->magic_vars['_A']['borrow_result']['open_tender']==1): ?> checked="checked"<? endif; ?> disabled="disabled"/> <span>如果您勾上此选项，将会实时公开您帐户的：投标总额、已收回总额、待收回总额。  </span>
		</div>
	</div>
	<div class="module_border">
		<div class="w">公开我的信用额度情况：</div>
		<div class="c">
			<input type="checkbox" name="open_credit" value="1" <? if (!isset($this->magic_vars['_A']['borrow_result']['open_credit'])) $this->magic_vars['_A']['borrow_result']['open_credit']=''; ;if (  $this->magic_vars['_A']['borrow_result']['open_credit']==1): ?> checked="checked"<? endif; ?> disabled="disabled"/> <span>如果您勾上此选项，将会实时公开您帐户的：最低信用额度、最高信用额度。  </span>
		</div>
	</div>
	<div class="module_border">
		<div class="l">添加时间/IP:</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['addtime'])) $this->magic_vars['_A']['borrow_result']['addtime'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>/<? if (!isset($this->magic_vars['_A']['borrow_result']['addip'])) $this->magic_vars['_A']['borrow_result']['addip'] = ''; echo $this->magic_vars['_A']['borrow_result']['addip']; ?></div>
	</div>
		<? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['status']==1): ?>
	<div class="module_title"><strong>审核状态</strong></div>
	<div class="module_border" >
		<div class="l">审核时间：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['verify_time'])) $this->magic_vars['_A']['borrow_result']['verify_time'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">审核人：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['verify_username'])) $this->magic_vars['_A']['borrow_result']['verify_username'] = ''; echo $this->magic_vars['_A']['borrow_result']['verify_username']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">审核备注：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['verify_remark'])) $this->magic_vars['_A']['borrow_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['borrow_result']['verify_remark']; ?>
		</div>
	</div>
	<? endif; ?>
	<? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['status']==0): ?>
	<div class="module_title"><strong>审核此借款</strong></div>
	<div class="module_border">
		<div class="l">状态:</div>
		<div class="c">
		<input type="radio" name="status" value="1"/>审核通过 <input type="radio" name="status" value="2"  checked="checked"/>审核不通过 </div>
	</div>
	<div class="module_border" >
		<div class="l">审核备注:</div>
		<div class="c">
			<textarea name="verify_remark" cols="45" rows="5"><? if (!isset($this->magic_vars['_A']['borrow_result']['verify_remark'])) $this->magic_vars['_A']['borrow_result']['verify_remark'] = ''; echo $this->magic_vars['_A']['borrow_result']['verify_remark']; ?></textarea>
		</div>
	</div>
	<div class="module_submit" >
		<input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['id'])) $this->magic_vars['_A']['borrow_result']['id'] = ''; echo $this->magic_vars['_A']['borrow_result']['id']; ?>" />
		<input type="hidden" name="user_id" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['user_id'])) $this->magic_vars['_A']['borrow_result']['user_id'] = ''; echo $this->magic_vars['_A']['borrow_result']['user_id']; ?>" />
		<input type="hidden" name="name" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['name'])) $this->magic_vars['_A']['borrow_result']['name'] = ''; echo $this->magic_vars['_A']['borrow_result']['name']; ?>" />
		<input type="submit"  name="reset" value="审核此借款标" />
	</div>
	<? endif; ?>
	</form>
</div>
<!-- 初审 结束 --><!-- 所有借款 开始 -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="list"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post">
		<tr>
			<td width="70px" class="main_td">借款编号</td>
			<td width="" class="main_td">用户名</td>
 			<td width="" class="main_td">借款标题</td>
			<td width="" class="main_td">借款金额</td>
			<td width="" class="main_td">利率</td>
			<td width="" class="main_td">借款期限</td>
			<td width="" class="main_td">发布时间</td>
			<td width="" class="main_td">状态</td>
			<td width="" class="main_td">操作</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['borrow_list']) || $this->magic_vars['_A']['borrow_list']=='') $this->magic_vars['_A']['borrow_list'] = array();  $_from = $this->magic_vars['_A']['borrow_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?><input type="hidden" name="id[]" value="<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" /></td>
			<td class="main_td1" ><a href="/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene" class="thickbox" title="用户详细信息查看">	<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
 			<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"  align="left">
			<span style="color:#FF0000">【<? if (!isset($this->magic_vars['item']['show_name'])) $this->magic_vars['item']['show_name'] = ''; echo $this->magic_vars['item']['show_name']; ?>】</span>
			<a href="/invest/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></a>
			</td>
			<td><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>元</td>
			<td><? if (!isset($this->magic_vars['item']['apr'])) $this->magic_vars['item']['apr'] = ''; echo $this->magic_vars['item']['apr']; ?>%</td>
			<td><? if (!isset($this->magic_vars['item']['isday'])) $this->magic_vars['item']['isday']=''; ;if (  $this->magic_vars['item']['isday'] ==1): ?><? if (!isset($this->magic_vars['item']['time_limit_day'])) $this->magic_vars['item']['time_limit_day'] = ''; echo $this->magic_vars['item']['time_limit_day']; ?>天<? else: ?><? if (!isset($this->magic_vars['item']['time_limit'])) $this->magic_vars['item']['time_limit'] = ''; echo $this->magic_vars['item']['time_limit']; ?>个月<? endif; ?></td>
			<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			<td>
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status'] ==1): ?>
				<? if (!isset($this->magic_vars['item']['biao_type'])) $this->magic_vars['item']['biao_type']='';if (!isset($this->magic_vars['item']['is_liubiao'])) $this->magic_vars['item']['is_liubiao']=''; ;if (  $this->magic_vars['item']['biao_type']=='lz' &&  $this->magic_vars['item']['is_liubiao']<1): ?>
				已停止流转
				<? if (!isset($this->magic_vars['item']['biao_type'])) $this->magic_vars['item']['biao_type']='';if (!isset($this->magic_vars['item']['is_liubiao'])) $this->magic_vars['item']['is_liubiao']='';if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account']='';if (!isset($this->magic_vars['item']['account_yes'])) $this->magic_vars['item']['account_yes']=''; ;elseif (  $this->magic_vars['item']['biao_type']=='lz' &&  $this->magic_vars['item']['is_liubiao']>0 &&  $this->magic_vars['item']['account']== $this->magic_vars['item']['account_yes']): ?>
				已认购完
				<? else: ?>
				<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account']='';if (!isset($this->magic_vars['item']['account_yes'])) $this->magic_vars['item']['account_yes']=''; ;if (  $this->magic_vars['item']['account']> $this->magic_vars['item']['account_yes']): ?>
				正在招标..
				<? else: ?>
				满标审核中
				<? endif; ?>
				<? endif; ?>
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==0): ?>等待初审
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==-1): ?><font color="#999999">尚未发布</font>
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==3): ?>满标借款成功
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==4): ?>复审未通过
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==5): ?>被撤回
			<? else: ?>初审未通过<? endif; ?>
			</td>
			<td>
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status'] ==0): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">初审</a><? endif; ?>
				<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']='';if (!isset($this->magic_vars['item']['biao_type'])) $this->magic_vars['item']['biao_type']=''; ;if (  $this->magic_vars['item']['status']==1 &&  $this->magic_vars['item']['biao_type']!='lz'): ?>
					<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account']='';if (!isset($this->magic_vars['item']['account_yes'])) $this->magic_vars['item']['account_yes']=''; ;if (  $this->magic_vars['item']['account']> $this->magic_vars['item']['account_yes']): ?>
					<a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/full_view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">撤回</a>
					<? else: ?>
					<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']!=3): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/full_view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">满标审核</a><? endif; ?>
					<? endif; ?>
				<? endif; ?>
				<? if (!isset($this->magic_vars['item']['biao_type'])) $this->magic_vars['item']['biao_type']='';if (!isset($this->magic_vars['item']['is_liubiao'])) $this->magic_vars['item']['is_liubiao']='';if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']='';if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['biao_type']=='lz' &&  $this->magic_vars['item']['is_liubiao']>0 && ( $this->magic_vars['item']['status']==1 ||  $this->magic_vars['item']['status']==0)): ?>
				<a href="javascript:if(confirm('确定要停止流转此标么')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/stoplz<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>';submit_fool()">停止流转</a>
				<? endif; ?>
			</td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="9" >
		<div class="action">
			<div class="floatl">
			<input type="button" onclick="sousuo('excel')" value="导出当前列表" />
			</div>
			<div class="floatr">
				用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/> 
				标类型：<select name="biaoType" id="biaoType">
						<option value=""> 所有</option>
						<option value="fast" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='fast'): ?>selected<? endif; ?> >抵押标</option>
						<option value="jin" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='jin'): ?>selected<? endif; ?> >净值标</option>
						<option value="miao" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='miao'): ?>selected<? endif; ?> >秒还标</option>
						<option value="xin" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='xin'): ?>selected<? endif; ?> >信用标</option>
						<option value="lz" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='lz'): ?>selected<? endif; ?> >流转标</option>
					</select>
				状态：<select id="status" ><option value="">全部</option><option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>正在招标..</option><option value="2" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==2): ?> selected="selected"<? endif; ?>>初审未通过</option><option value="3" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==3): ?> selected="selected"<? endif; ?>>满标借款成功</option><option value="5" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="5"): ?> selected="selected"<? endif; ?>>被撤回</option><option value="4" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="4"): ?> selected="selected"<? endif; ?>>满标复审失败</option></select>
				发布时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()" /> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()" />
				<input type="button" value="搜索" onclick="sousuo()" />
			</div>
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="9" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table><!-- 所有借款 结束 -->
<!-- 满标列表 开始 -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="full"): ?>
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post">
		<tr>
			<td width="70px" class="main_td">借款编号</td>
			<td width="" class="main_td" >用户名</td>
			<td width="" class="main_td" >借款标题</td>
			<td width="" class="main_td" >借款金额</td>
			<td width="" class="main_td" >应付利息</td>
			<td width="" class="main_td" >年利率</td>
			<td width="" class="main_td" >投标次数</td>
			<td width="" class="main_td" >借款期限</td>
			<td width="" class="main_td" >发标时间</td>
			<td width="" class="main_td" >初审时间</td>
			<td width="" class="main_td" >状态</td>
			<td width="" class="main_td" >操作</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['borrow_list']) || $this->magic_vars['_A']['borrow_list']=='') $this->magic_vars['_A']['borrow_list'] = array();  $_from = $this->magic_vars['_A']['borrow_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1"  ><a href="/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene"  class="thickbox" title="用户详细信息查看">	<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<!--<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></td>-->
            <td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>" align="left">
			<span style="color:#FF0000">【<? if (!isset($this->magic_vars['item']['show_name'])) $this->magic_vars['item']['show_name'] = ''; echo $this->magic_vars['item']['show_name']; ?>】</span>
				<a href="/invest/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></a>
			</td>
			<td><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>元</td>
			<td>
				<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==3): ?>
                <script type="text/javascript">
                var tempInterest = (<? if (!isset($this->magic_vars['item']['repayment_account'])) $this->magic_vars['item']['repayment_account'] = '';$_tmp = $this->magic_vars['item']['repayment_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>-<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = '';$_tmp = $this->magic_vars['item']['account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>);
					document.write(tempInterest.toFixed(2));
                </script>
                <? else: ?>--<? endif; ?>
			</td>
			<td ><? if (!isset($this->magic_vars['item']['apr'])) $this->magic_vars['item']['apr'] = ''; echo $this->magic_vars['item']['apr']; ?>%</td>
			<td ><? if (!isset($this->magic_vars['item']['tender_times'])) $this->magic_vars['item']['tender_times'] = '';$_tmp = $this->magic_vars['item']['tender_times'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td ><? if (!isset($this->magic_vars['item']['isday'])) $this->magic_vars['item']['isday']=''; ;if (  $this->magic_vars['item']['isday']==1): ?> 
                <? if (!isset($this->magic_vars['item']['time_limit_day'])) $this->magic_vars['item']['time_limit_day'] = ''; echo $this->magic_vars['item']['time_limit_day']; ?>天
                <? else: ?>
                <? if (!isset($this->magic_vars['item']['time_limit'])) $this->magic_vars['item']['time_limit'] = ''; echo $this->magic_vars['item']['time_limit']; ?>个月
                <? endif; ?>            </td>
			<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['verify_time'])) $this->magic_vars['item']['verify_time'] = '';$_tmp = $this->magic_vars['item']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			<td>
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status'] ==1): ?>
				<? if (!isset($this->magic_vars['item']['biao_type'])) $this->magic_vars['item']['biao_type']='';if (!isset($this->magic_vars['item']['is_liubiao'])) $this->magic_vars['item']['is_liubiao']=''; ;if (  $this->magic_vars['item']['biao_type']=='lz' &&  $this->magic_vars['item']['is_liubiao']<1): ?>
				已停止流转
				<? if (!isset($this->magic_vars['item']['biao_type'])) $this->magic_vars['item']['biao_type']='';if (!isset($this->magic_vars['item']['is_liubiao'])) $this->magic_vars['item']['is_liubiao']='';if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account']='';if (!isset($this->magic_vars['item']['account_yes'])) $this->magic_vars['item']['account_yes']=''; ;elseif (  $this->magic_vars['item']['biao_type']=='lz' &&  $this->magic_vars['item']['is_liubiao']>0 &&  $this->magic_vars['item']['account']== $this->magic_vars['item']['account_yes']): ?>
				已认购完
				<? else: ?>
				<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account']='';if (!isset($this->magic_vars['item']['account_yes'])) $this->magic_vars['item']['account_yes']=''; ;if (  $this->magic_vars['item']['account']> $this->magic_vars['item']['account_yes']): ?>
				正在招标..
				<? else: ?>
				满标审核中
				<? endif; ?>
				<? endif; ?>
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==0): ?>等待初审
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==-1): ?><font color="#999999">尚未发布</font>
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==3): ?>满标借款成功
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==4): ?>复审未通过
			<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==5): ?>被撤回
			<? else: ?>初审未通过<? endif; ?>
			</td>
			<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status'] ==0): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">初审</a><? endif; ?>
				<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']='';if (!isset($this->magic_vars['item']['biao_type'])) $this->magic_vars['item']['biao_type']=''; ;if (  $this->magic_vars['item']['status']==1 &&  $this->magic_vars['item']['biao_type']!='lz'): ?>
					<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account']='';if (!isset($this->magic_vars['item']['account_yes'])) $this->magic_vars['item']['account_yes']=''; ;if (  $this->magic_vars['item']['account']> $this->magic_vars['item']['account_yes']): ?>
					<a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/full_view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">撤回</a>
					<? else: ?>
					<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']!=3): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/full_view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">满标审核</a><? endif; ?>
					<? endif; ?>
				<? endif; ?>
				<? if (!isset($this->magic_vars['item']['biao_type'])) $this->magic_vars['item']['biao_type']='';if (!isset($this->magic_vars['item']['is_liubiao'])) $this->magic_vars['item']['is_liubiao']='';if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']='';if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['biao_type']=='lz' &&  $this->magic_vars['item']['is_liubiao']>0 && ( $this->magic_vars['item']['status']==1 ||  $this->magic_vars['item']['status']==0)): ?>
				<a href="javascript:if(confirm('确定要停止流转此标么')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/stoplz<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>';submit_fool()">停止流转</a>
				<? endif; ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="12" class="action">
		<div class="floatl">
		</div>
		<div class="floatr">
			用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
			标类型：<select name="biaoType" id="biaoType">
					<option value="">所有</option>
					<option value="fast" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='fast'): ?>selected<? endif; ?> >抵押标</option>
					<option value="jin" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='jin'): ?>selected<? endif; ?> >净值标</option>
					<option value="miao" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='miao'): ?>selected<? endif; ?> >秒还标</option>
					<option value="xin" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='xin'): ?>selected<? endif; ?> >信用标</option>
					<option value="lz" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='lz'): ?>selected<? endif; ?> >流转标</option>
				</select>			状态：<select id="status"><option value="">全部</option><option value="3" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==3): ?>selected="selected"<? endif; ?>>复审通过</option><option value="4" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==4): ?>selected="selected"<? endif; ?>>复审失败</option></select>
			<input type="button" value="搜索" onclick="sousuo()" />
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="12" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table>
<!-- 满标列表 结束 --><!-- 满标复审和撤回 开始 -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "full_view"): ?>
<div class="module_add">
	<div class="module_title"><strong>已满额借款标审核</strong></div>
	<div class="module_border">
		<div class="l">用户名：</div>
		<div class="c">
			<a href="javascript:void(0)" onclick='tipsWindown("用户详细信息查看","url:get?<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['_A']['borrow_result']['user_id'])) $this->magic_vars['_A']['borrow_result']['user_id'] = ''; echo $this->magic_vars['_A']['borrow_result']['user_id']; ?>&type=scene",500,230,"true","","true","text");'>	<? if (!isset($this->magic_vars['_A']['borrow_result']['username'])) $this->magic_vars['_A']['borrow_result']['username'] = ''; echo $this->magic_vars['_A']['borrow_result']['username']; ?></a>
		</div>
	</div>
	<div class="module_border">
		<div class="l">标题：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['name'])) $this->magic_vars['_A']['borrow_result']['name'] = ''; echo $this->magic_vars['_A']['borrow_result']['name']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">借款金额：</div>
		<div class="h">
			￥<? if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account'] = ''; echo $this->magic_vars['_A']['borrow_result']['account']; ?>
		</div>
		<div class="l">年利率：</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['apr'])) $this->magic_vars['_A']['borrow_result']['apr'] = ''; echo $this->magic_vars['_A']['borrow_result']['apr']; ?> %
		</div>
	</div>
	<div class="module_border">		<div class="l">已借到款：</div>		<div class="h">￥<? if (!isset($this->magic_vars['_A']['borrow_result']['account_yes'])) $this->magic_vars['_A']['borrow_result']['account_yes'] = ''; echo $this->magic_vars['_A']['borrow_result']['account_yes']; ?></div>
		<div class="l">借款期限：</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['isday'])) $this->magic_vars['_A']['borrow_result']['isday']=''; ;if (  $this->magic_vars['_A']['borrow_result']['isday']==1): ?> 
                <? if (!isset($this->magic_vars['_A']['borrow_result']['time_limit_day'])) $this->magic_vars['_A']['borrow_result']['time_limit_day'] = ''; echo $this->magic_vars['_A']['borrow_result']['time_limit_day']; ?>天
                <? else: ?>
                <? if (!isset($this->magic_vars['_A']['borrow_result']['time_limit'])) $this->magic_vars['_A']['borrow_result']['time_limit'] = ''; echo $this->magic_vars['_A']['borrow_result']['time_limit']; ?>个月
                <? endif; ?>
		</div>
		<div class="l">借款用途：</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['use'])) $this->magic_vars['_A']['borrow_result']['use'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['use'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_use");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<div class="module_border">
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
		<tr>
			<td width="" class="main_td">ID</td>
			<td width="" class="main_td" >用户名称</td>
			<td width="" class="main_td" >信用积分</td>
			<td width="" class="main_td" >投资金额</td>
			<td width="" class="main_td" >有效金额</td>
			<td width="" class="main_td" >状态</td>
			<td width="" class="main_td" >投标时间</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['borrow_tender_list']) || $this->magic_vars['_A']['borrow_tender_list']=='') $this->magic_vars['_A']['borrow_tender_list'] = array();  $_from = $this->magic_vars['_A']['borrow_tender_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1"  ><a href="javascript:void(0)" onclick='tipsWindown("用户详细信息查看","url:get?<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene",500,230,"true","","true","text");'>	<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td ><? if (!isset($this->magic_vars['item']['credit_jifen'])) $this->magic_vars['item']['credit_jifen'] = ''; echo $this->magic_vars['item']['credit_jifen']; ?>分</td>
			<td ><? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?>元</td>
			<td ><font color="#FF0000"><? if (!isset($this->magic_vars['item']['tender_account'])) $this->magic_vars['item']['tender_account'] = ''; echo $this->magic_vars['item']['tender_account']; ?>元</font></td>
			<td ><? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money']='';if (!isset($this->magic_vars['item']['tender_account'])) $this->magic_vars['item']['tender_account']=''; ;if (  $this->magic_vars['item']['money'] ==  $this->magic_vars['item']['tender_account']): ?>全部通过<? else: ?>部分通过<? endif; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
			<td colspan="9" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</table>
	</div>	<? if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account']='';if (!isset($this->magic_vars['_A']['borrow_result']['account_yes'])) $this->magic_vars['_A']['borrow_result']['account_yes']=''; ;if (  $this->magic_vars['_A']['borrow_result']['account']<= $this->magic_vars['_A']['borrow_result']['account_yes']): ?>
	<div class="module_border">
	<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
		<tr>
			<td width="" class="main_td">ID</td>
			<td width="" class="main_td" >计划还款日</td>
			<td width="" class="main_td" >预还金额</td>
			<td width="" class="main_td" >本金</td>
			<td width="" class="main_td" >利息</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['borrow_repayment']) || $this->magic_vars['_A']['borrow_repayment']=='') $this->magic_vars['_A']['borrow_repayment'] = array();  $_from = $this->magic_vars['_A']['borrow_repayment']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']+1; ?></td>
			<td><? if (!isset($this->magic_vars['item']['repayment_time'])) $this->magic_vars['item']['repayment_time'] = '';$_tmp = $this->magic_vars['item']['repayment_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
			<td>￥<? if (!isset($this->magic_vars['item']['repayment_account'])) $this->magic_vars['item']['repayment_account'] = ''; echo $this->magic_vars['item']['repayment_account']; ?></td>
			<td>￥<? if (!isset($this->magic_vars['item']['capital'])) $this->magic_vars['item']['capital'] = ''; echo $this->magic_vars['item']['capital']; ?></td>
			<td>￥<? if (!isset($this->magic_vars['item']['interest'])) $this->magic_vars['item']['interest'] = ''; echo $this->magic_vars['item']['interest']; ?>元</td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
	</table>
	</div>	<? endif; ?>	<div class="module_title"><strong>其他详细内容</strong></div>	<div class="module_border">		<div class="l">投标奖励：</div>		<div class="h">			<? if (!isset($this->magic_vars['_A']['borrow_result']['award'])) $this->magic_vars['_A']['borrow_result']['award']=''; ;if (  $this->magic_vars['_A']['borrow_result']['award']==0): ?>无奖励<? if (!isset($this->magic_vars['_A']['borrow_result']['award'])) $this->magic_vars['_A']['borrow_result']['award']=''; ;elseif (  $this->magic_vars['_A']['borrow_result']['award']==1): ?>比例：<? if (!isset($this->magic_vars['_A']['borrow_result']['funds'])) $this->magic_vars['_A']['borrow_result']['funds'] = ''; echo $this->magic_vars['_A']['borrow_result']['funds']; ?>%<? else: ?><? if (!isset($this->magic_vars['_A']['borrow_result']['part_account'])) $this->magic_vars['_A']['borrow_result']['part_account'] = ''; echo $this->magic_vars['_A']['borrow_result']['part_account']; ?><? endif; ?>		</div>		<div class="l">投标失败是否奖励：</div>		<div class="h">			<? if (!isset($this->magic_vars['_A']['borrow_result']['is_false'])) $this->magic_vars['_A']['borrow_result']['is_false']=''; ;if (  $this->magic_vars['_A']['borrow_result']['is_false']==0): ?>是<? else: ?>否<? endif; ?>		</div>	</div>	<div class="module_border">		<div class="l">添加时间：</div>		<div class="h">			<? if (!isset($this->magic_vars['_A']['borrow_result']['addtime'])) $this->magic_vars['_A']['borrow_result']['addtime'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>		</div>		<div class="l">招标时间：</div>		<div class="h">			<? if (!isset($this->magic_vars['_A']['borrow_result']['verify_time'])) $this->magic_vars['_A']['borrow_result']['verify_time'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>		</div>	</div>	<div class="module_border">		<div class="l">内容：</div>		<div class="hb" >			<table><tr><td ><? if (!isset($this->magic_vars['_A']['borrow_result']['content'])) $this->magic_vars['_A']['borrow_result']['content'] = ''; echo $this->magic_vars['_A']['borrow_result']['content']; ?></td></tr></table>		</div>	</div>
	<? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['status']==1): ?>
	<div class="module_title"><strong>审核此借款</strong></div>
	<form name="form1" method="post"<? if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account']='';if (!isset($this->magic_vars['_A']['borrow_result']['account_yes'])) $this->magic_vars['_A']['borrow_result']['account_yes']=''; ;if (  $this->magic_vars['_A']['borrow_result']['account']<= $this->magic_vars['_A']['borrow_result']['account_yes']): ?>action=""<? else: ?>action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/cancel<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>"<? endif; ?> onkeydown="if(event.keyCode==13){return false;}">
	<div class="module_border">
		<div class="l">状态:</div>
		<div class="c">		<? if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account']='';if (!isset($this->magic_vars['_A']['borrow_result']['account_yes'])) $this->magic_vars['_A']['borrow_result']['account_yes']=''; ;if (  $this->magic_vars['_A']['borrow_result']['account']<= $this->magic_vars['_A']['borrow_result']['account_yes']): ?>
		<input type="radio" name="status" value="3" />复审通过 <input type="radio" name="status" value="4" checked="checked" />复审不通过 </div>
		<? else: ?>		<input type="radio" name="status" value="5" checked="checked" />撤回		<? endif; ?>	</div>	<? if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account']='';if (!isset($this->magic_vars['_A']['borrow_result']['account_yes'])) $this->magic_vars['_A']['borrow_result']['account_yes']=''; ;if (  $this->magic_vars['_A']['borrow_result']['account']<= $this->magic_vars['_A']['borrow_result']['account_yes']): ?>
	<div class="module_border" >
		<div class="l">审核备注:</div>
		<div class="c">
			<textarea name="repayment_remark" cols="45" rows="5"><? if (!isset($this->magic_vars['_A']['borrow_result']['repayment_remark'])) $this->magic_vars['_A']['borrow_result']['repayment_remark'] = ''; echo $this->magic_vars['_A']['borrow_result']['repayment_remark']; ?></textarea>
		</div>
	</div>	<? endif; ?>
	<div class="module_border" >
		<div class="l">验证码:</div>
		<div class="c">
			<input name="valicode" type="text" size="11" maxlength="4"  tabindex="3"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" />
		</div>
	</div>
	<div class="module_submit" >
		<input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['id'])) $this->magic_vars['_A']['borrow_result']['id'] = ''; echo $this->magic_vars['_A']['borrow_result']['id']; ?>" />		<? if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account']='';if (!isset($this->magic_vars['_A']['borrow_result']['account_yes'])) $this->magic_vars['_A']['borrow_result']['account_yes']=''; ;if (  $this->magic_vars['_A']['borrow_result']['account']<= $this->magic_vars['_A']['borrow_result']['account_yes']): ?>
		<input type="button" name="reset" value="审核此借款标" onclick="document.forms['form1'].submit();this.disabled=true;submit_fool()" />		<? else: ?>		<input type="button" name="reset" value="撤回此借款标" onclick="document.forms['form1'].submit();this.disabled=true;submit_fool()" />		<? endif; ?>
	</div>
	</form>
	<? endif; ?>
</div><!-- 满标复审和撤回 结束 -->
<!-- 已还款 开始 -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="repayment"): ?>
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr>
			<td width="70px" class="main_td">借款编号</td>
			<td width="" class="main_td" >用户名</td>
			<td width="" class="main_td" >借款标题</td>
			<td width="" class="main_td" >期数</td>
			<td width="" class="main_td" >到期时间</td>
			<td width="" class="main_td" >还款金额</td>
			<td width="" class="main_td" >还款利息</td>
			<td width="" class="main_td" >还款时间</td>
			<td width="" class="main_td" >状态</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['borrow_list']) || $this->magic_vars['_A']['borrow_list']=='') $this->magic_vars['_A']['borrow_list'] = array();  $_from = $this->magic_vars['_A']['borrow_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1" align="center"><a href="/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene"  class="thickbox" title="用户详细信息查看">	<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>" align="left">
			<span style="color:#FF0000">【<? if (!isset($this->magic_vars['item']['show_name'])) $this->magic_vars['item']['show_name'] = ''; echo $this->magic_vars['item']['show_name']; ?>】</span>
			<a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_id'])) $this->magic_vars['item']['borrow_id'] = ''; echo $this->magic_vars['item']['borrow_id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></a></td>
			<td ><? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']+1; ?>/<? if (!isset($this->magic_vars['item']['time_limit'])) $this->magic_vars['item']['time_limit'] = ''; echo $this->magic_vars['item']['time_limit']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['repayment_time'])) $this->magic_vars['item']['repayment_time'] = '';$_tmp = $this->magic_vars['item']['repayment_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
			<td ><? if (!isset($this->magic_vars['item']['repayment_account'])) $this->magic_vars['item']['repayment_account'] = ''; echo $this->magic_vars['item']['repayment_account']; ?>元</td>
			<td ><? if (!isset($this->magic_vars['item']['interest'])) $this->magic_vars['item']['interest'] = ''; echo $this->magic_vars['item']['interest']; ?>元</td>
			<td ><? if (!isset($this->magic_vars['item']['repayment_yestime'])) $this->magic_vars['item']['repayment_yestime'] = '';$_tmp = $this->magic_vars['item']['repayment_yestime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
			<td ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==1): ?><font color="#006600">已还</font><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?><font color="#006600">网站代还</font><? else: ?><font color="#FF0000">未还</font><? endif; ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="10" class="action">
		<div class="floatl">
			<input type="button" onclick="sousuo('excel')" value="导出列表" />
		</div>
		<div class="floatr">
		还款时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>
			用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
				标类型：<select id="biaoType" name="biaoType">				<option value="">全部</option>
				<option value="1" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']==1): ?>selected="selected"<? endif; ?>>抵押标</option>
				<option value="2" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']==2): ?>selected="selected"<? endif; ?>>净值标</option>
				<option value="3" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']==3): ?>selected="selected"<? endif; ?>>秒还标</option>				<option value="4" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']==4): ?>selected="selected"<? endif; ?>>信用标</option>
			</select>
			<select id="status" >
			<option value="">全部</option>
			<option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>已还</option>			<option value="2" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==2): ?> selected="selected"<? endif; ?>>网站代还</option>
			<option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> selected="selected"<? endif; ?>>未还</option>
			</select><input type="button" value="搜索" onclick="sousuo()" />
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="9" class="page">
			<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?> 
			</td>
		</tr>
	</form>	
</table><!-- 已还款 结束 -->

<!-- 流标 开始 -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="liubiao"): ?>
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr>
			<td width="70px" class="main_td">借款编号</td>
			<td width="*" class="main_td" >用户名</td>
			<td width="" class="main_td" >借款标题</td>
			<td width="" class="main_td" >借款期限</td>
			<td width="" class="main_td" >借款金额</td>
			<td width="" class="main_td" >已投金额</td>
			<td width="" class="main_td" >开始时间</td>
			<td width="" class="main_td" >结束时间</td>
			<td width="" class="main_td" >状态</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['borrow_list']) || $this->magic_vars['_A']['borrow_list']=='') $this->magic_vars['_A']['borrow_list'] = array();  $_from = $this->magic_vars['_A']['borrow_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?>class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1" align="center"><a href="/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene"  class="thickbox" title="用户详细信息查看">	<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>" align="left">
			<span style="color:#FF0000">【<? if (!isset($this->magic_vars['item']['show_name'])) $this->magic_vars['item']['show_name'] = ''; echo $this->magic_vars['item']['show_name']; ?>】</span>
			<a href="/invest/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></a></td>
			<td><? if (!isset($this->magic_vars['item']['time_limit'])) $this->magic_vars['item']['time_limit'] = ''; echo $this->magic_vars['item']['time_limit']; ?>个月</td>
			<td><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>元</td>
			<td><? if (!isset($this->magic_vars['item']['account_yes'])) $this->magic_vars['item']['account_yes'] = ''; echo $this->magic_vars['item']['account_yes']; ?>元</td>
			<td><? if (!isset($this->magic_vars['item']['verify_time'])) $this->magic_vars['item']['verify_time'] = '';$_tmp = $this->magic_vars['item']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['verify_time'])) $this->magic_vars['item']['verify_time'] = ''; if (!isset($this->magic_vars['item']['valid_time'])) $this->magic_vars['item']['valid_time'] = '';$_tmp = $this->magic_vars['item']['verify_time']+$this->magic_vars['item']['valid_time']*24*60*60;$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
			<td><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/liubiao_edit&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>">修改</a></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="10" class="action">
		<div class="floatl">
		</div>
		<div class="floatr">
			用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" />
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
<!-- 流标 结束 -->
<!-- 流标修改 开始 -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="liubiao_edit"): ?>
<div class="module_title"><strong>流标管理</strong></div>
	<div class="module_border">
		<div class="l">用户名：</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['username'])) $this->magic_vars['_A']['borrow_result']['username'] = ''; echo $this->magic_vars['_A']['borrow_result']['username']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">标题：</div>
		<div >
			<a href="/invest/a<? if (!isset($this->magic_vars['_A']['borrow_result']['id'])) $this->magic_vars['_A']['borrow_result']['id'] = ''; echo $this->magic_vars['_A']['borrow_result']['id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['_A']['borrow_result']['name'])) $this->magic_vars['_A']['borrow_result']['name'] = ''; echo $this->magic_vars['_A']['borrow_result']['name']; ?></a>
		</div>
	</div>
	<div class="module_border">
		<div class="l">借款额度：</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['account'])) $this->magic_vars['_A']['borrow_result']['account'] = ''; echo $this->magic_vars['_A']['borrow_result']['account']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">已借额度：</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['account_yes'])) $this->magic_vars['_A']['borrow_result']['account_yes'] = ''; echo $this->magic_vars['_A']['borrow_result']['account_yes']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">申请时间：</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['verify_time'])) $this->magic_vars['_A']['borrow_result']['verify_time'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l">结束时间：</div>
		<div class="h">
			<? if (!isset($this->magic_vars['_A']['borrow_result']['verify_time'])) $this->magic_vars['_A']['borrow_result']['verify_time'] = ''; if (!isset($this->magic_vars['_A']['borrow_result']['valid_time'])) $this->magic_vars['_A']['borrow_result']['valid_time'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['verify_time']+$this->magic_vars['_A']['borrow_result']['valid_time']*24*60*60;$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>
		</div>
	</div>
	<div class="module_title"><strong>审核</strong></div>
	<form name="form1" method="post" action="">
	<div class="module_border">
		<div class="l">审核状态：</div>
		<div>
			<? if (!isset($this->magic_vars['_A']['borrow_result']['biao_type'])) $this->magic_vars['_A']['borrow_result']['biao_type']=''; ;if (  $this->magic_vars['_A']['borrow_result']['biao_type']=='lz'): ?><? else: ?>
			<input type="radio" name="status" value="1" />流标返回金额<? endif; ?><input type="radio" name="status" value="2" checked="checked" />延长借款期限
		</div>
	</div>
	<div class="module_border">
		<div class="l">延长天数：</div>
		<div >
			<input type="text" name="days" value="<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['account'])) $this->magic_vars['_A']['borrow_amount_result']['account'] = ''; echo $this->magic_vars['_A']['borrow_amount_result']['account']; ?>" size="5" value="0" />天
		</div>
	</div>	<div class="module_border">		<div class="l">验证码：</div>		<div >			<input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['id'])) $this->magic_vars['_A']['borrow_result']['id'] = ''; echo $this->magic_vars['_A']['borrow_result']['id']; ?>">			<input type="text" name="valicode" size="5" maxlength="4" /><img style="cursor:pointer; margin-left:3px;" onclick="this.src='/plugins/index.php?q=imgcode&amp;t=' + Math.random();" alt="点击刷新" src="/plugins/index.php?q=imgcode">		</div>	</div>
	<div class="module_border">
		<div class="l"></div>
		<div class="h">
			<input type="button" value="确定审核" onclick="document.forms['form1'].submit();this.disabled=true;submit_fool()" />
		</div>
	</div>
	</form>
<!-- 流标修改 结束 -->
<!--额度管理 开始-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="amount"): ?>
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post">
		<tr>
			<td width="" class="main_td">ID</td>
			<td width="" class="main_td" >用户名称</td>
			<td width="" class="main_td" >申请类型</td>
			<td width="" class="main_td" >原来额度</td>
			<td width="" class="main_td" >申请额度</td>
			<td width="" class="main_td" >新额度</td>
			<td width="" class="main_td" >申请时间</td>
			<td width="" class="main_td" >内容</td>
			<td width="" class="main_td" >备注</td>
			<td width="" class="main_td" >状态</td>
			<td width="" class="main_td" >操作</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['borrow_amount_list']) || $this->magic_vars['_A']['borrow_amount_list']=='') $this->magic_vars['_A']['borrow_amount_list'] = array();  $_from = $this->magic_vars['_A']['borrow_amount_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1" align="center"><a href="/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene"  class="thickbox" title="用户详细信息查看">	<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td width="80" ><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;if (  $this->magic_vars['item']['type'] =="tender_vouch"): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/amount&type=tender_vouch&a=borrow">投资担保额度</a><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;elseif (  $this->magic_vars['item']['type'] =="borrow_vouch"): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/amount&type=borrow_vouch&a=borrow">借款担保额度</a><? else: ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/amount&type=credit&a=borrow">借款信用额度</a><? endif; ?></td>
			<td width="70" ><? if (!isset($this->magic_vars['item']['account_old'])) $this->magic_vars['item']['account_old'] = ''; echo $this->magic_vars['item']['account_old']; ?>元</td>
			<td width="70"  ><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>元</td>
			<td><? if (!isset($this->magic_vars['item']['account_new'])) $this->magic_vars['item']['account_new'] = ''; echo $this->magic_vars['item']['account_new']; ?>元</td>
			<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['content'])) $this->magic_vars['item']['content'] = ''; echo $this->magic_vars['item']['content']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['remark'])) $this->magic_vars['item']['remark'] = ''; echo $this->magic_vars['item']['remark']; ?></td>
			<td width="50"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==2): ?><font color="#6699CC">审核中</font><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==1): ?>成功 <? else: ?><font color="#FF0000">失败</font><? endif; ?></td>
			<td width="70"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==2): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/amount_view<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">审核/查看</a><? else: ?>--<? endif; ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="11" class="action">
		<div class="floatl">
		</div>
		<div class="floatr">
			用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
			状态：<select id="status" ><option value="">全部</option><option value="2" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==2): ?> selected="selected"<? endif; ?>>等待审核</option><option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>已通过</option><option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> selected="selected"<? endif; ?>>未通过</option></select> <input type="button" value="搜索" onclick="sousuo('<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/amount<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>')" />
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
<!--额度管理 结束-->
<!--当前已经逾期借款 开始-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="late"): ?>
<table border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post">
		<tr>
			<td width="70px" class="main_td">借款编号</td>
			<td width="" class="main_td" >借款人</td>
			<td width="" class="main_td" >借款标题</td>
			<td width="" class="main_td" >期数</td>
			<td width="" class="main_td" >到期时间</td>
			<td width="" class="main_td" >应还本息</td>
			<td width="" class="main_td" >逾期天数</td>
			<td width="" class="main_td" >罚金</td>
			<td width="" class="main_td" >操作</td>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['borrow_repayment_list']) || $this->magic_vars['_A']['borrow_repayment_list']=='') $this->magic_vars['_A']['borrow_repayment_list'] = array();  $_from = $this->magic_vars['_A']['borrow_repayment_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1" align="center"><a href="/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene"  class="thickbox" title="用户详细信息查看">	<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td align="left">
			<span style="color:#FF0000">【<? if (!isset($this->magic_vars['item']['show_name'])) $this->magic_vars['item']['show_name'] = ''; echo $this->magic_vars['item']['show_name']; ?>】</span>
			<a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_id'])) $this->magic_vars['item']['borrow_id'] = ''; echo $this->magic_vars['item']['borrow_id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?></a></td>
			<td><? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']+1; ?>/<? if (!isset($this->magic_vars['item']['time_limit'])) $this->magic_vars['item']['time_limit'] = ''; echo $this->magic_vars['item']['time_limit']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['repayment_time'])) $this->magic_vars['item']['repayment_time'] = '';$_tmp = $this->magic_vars['item']['repayment_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
			<td><? if (!isset($this->magic_vars['item']['repayment_account'])) $this->magic_vars['item']['repayment_account'] = ''; echo $this->magic_vars['item']['repayment_account']; ?>元</td>
			<td><? if (!isset($this->magic_vars['item']['late_days'])) $this->magic_vars['item']['late_days'] = ''; echo $this->magic_vars['item']['late_days']; ?>天</td>
			<td><? if (!isset($this->magic_vars['item']['late_interest'])) $this->magic_vars['item']['late_interest'] = ''; echo $this->magic_vars['item']['late_interest']; ?></td>
			<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==2): ?><font color="#FF0000">已代还</font><? else: ?><? if (!isset($this->magic_vars['item']['late_days'])) $this->magic_vars['item']['late_days']=''; ;if (  $this->magic_vars['item']['late_days']>0): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/late_repay<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">还款</a><? else: ?>-<? endif; ?><? endif; ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="11" class="action">
		<div class="floatl">
			<input type="button" onclick="sousuo('excel')" value="导出列表" />
		</div>
		<div class="floatr">
			用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = ''; echo $_REQUEST['username']; ?>"/> 
			状态：<select id="status"><option value="">全部</option><option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>已还</option><option value="2" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==2): ?> selected="selected"<? endif; ?>>网站代还</option><option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> selected="selected"<? endif; ?>>未还</option></select> 
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
</table><!-- 当前已经逾期借款 结束 --><!-- 网站代还 开始 -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="late_repay"): ?><div class="module_title"><strong>逾期网站代还</strong></div><div class="module_border">	<div class="l">标题：</div>	<div>		<span style="color:#FF0000">【<? if (!isset($this->magic_vars['_A']['borrow_result']['show_name'])) $this->magic_vars['_A']['borrow_result']['show_name'] = ''; echo $this->magic_vars['_A']['borrow_result']['show_name']; ?>】</span>		<a href="/invest/a<? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_id'])) $this->magic_vars['_A']['borrow_result']['borrow_id'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['_A']['borrow_result']['borrow_name'])) $this->magic_vars['_A']['borrow_result']['borrow_name'] = ''; echo $this->magic_vars['_A']['borrow_result']['borrow_name']; ?></a>	</div></div><div class="module_border">	<div class="l">借款人：</div>	<div><? if (!isset($this->magic_vars['_A']['borrow_result']['username'])) $this->magic_vars['_A']['borrow_result']['username'] = ''; echo $this->magic_vars['_A']['borrow_result']['username']; ?></div></div><div class="module_border">	<div class="l">期数：</div>	<div><? if (!isset($this->magic_vars['_A']['borrow_result']['order'])) $this->magic_vars['_A']['borrow_result']['order'] = ''; echo $this->magic_vars['_A']['borrow_result']['order']+1; ?>/<? if (!isset($this->magic_vars['_A']['borrow_result']['time_limit'])) $this->magic_vars['_A']['borrow_result']['time_limit'] = ''; echo $this->magic_vars['_A']['borrow_result']['time_limit']; ?></div></div><div class="module_border">	<div class="l">应还时间：</div>	<div><? if (!isset($this->magic_vars['_A']['borrow_result']['repayment_time'])) $this->magic_vars['_A']['borrow_result']['repayment_time'] = '';$_tmp = $this->magic_vars['_A']['borrow_result']['repayment_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></div></div><div class="module_border">	<div class="l">逾期天数：</div>	<div><? if (!isset($this->magic_vars['_A']['borrow_result']['late_days'])) $this->magic_vars['_A']['borrow_result']['late_days'] = ''; echo $this->magic_vars['_A']['borrow_result']['late_days']; ?>天</div></div><div class="module_border">	<div class="l">逾期罚金：</div>	<div><? if (!isset($this->magic_vars['_A']['borrow_result']['late_interest'])) $this->magic_vars['_A']['borrow_result']['late_interest'] = ''; echo $this->magic_vars['_A']['borrow_result']['late_interest']; ?>元</div></div><div class="module_border">	<div class="l">应还金额：</div>	<div><? if (!isset($this->magic_vars['_A']['borrow_result']['repayment_account'])) $this->magic_vars['_A']['borrow_result']['repayment_account'] = ''; echo $this->magic_vars['_A']['borrow_result']['repayment_account']; ?>元</div></div><div class="module_title"><strong>投资人信息</strong></div><div class="module_border">	<table  border="0" cellspacing="1" bgcolor="#CCCCCC" width="100%">		<tr>			<td width="" class="main_td">ID</td>			<td width="" class="main_td" >用户名称</td>			<td width="" class="main_td" >vip状态</td>			<td width="" class="main_td" >本期应收本金</td>			<td width="" class="main_td" >本期应收利息</td>			<td width="" class="main_td" >应收合计</td>			<td width="" class="main_td" >网站代还比例</td>			<td width="" class="main_td" >网站代还本金</td>			<td width="" class="main_td" >网站代还利息</td>			<td width="" class="main_td" >网站代还合计</td>		</tr>		<?  if(!isset($this->magic_vars['_A']['borrow_tender_list']) || $this->magic_vars['_A']['borrow_tender_list']=='') $this->magic_vars['_A']['borrow_tender_list'] = array();  $_from = $this->magic_vars['_A']['borrow_tender_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>			<td><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>			<td class="main_td1"><a href="javascript:void(0)" onclick='tipsWindown("用户详细信息查看","url:get?<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene",500,230,"true","","true","text");'><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>			<td><? if (!isset($this->magic_vars['item']['vip_status'])) $this->magic_vars['item']['vip_status']=''; ;if (  $this->magic_vars['item']['vip_status']==1): ?>是<? else: ?>否<? endif; ?></td>			<td><? if (!isset($this->magic_vars['item']['capital'])) $this->magic_vars['item']['capital'] = ''; echo $this->magic_vars['item']['capital']; ?>元</td>			<td><? if (!isset($this->magic_vars['item']['interest'])) $this->magic_vars['item']['interest'] = ''; echo $this->magic_vars['item']['interest']; ?>元</td>			<td><? if (!isset($this->magic_vars['item']['repay_account'])) $this->magic_vars['item']['repay_account'] = ''; echo $this->magic_vars['item']['repay_account']; ?>元</td>			<td><? if (!isset($this->magic_vars['item']['bili'])) $this->magic_vars['item']['bili'] = ''; echo $this->magic_vars['item']['bili']*100; ?>%</td>			<td><? if (!isset($this->magic_vars['item']['webrepay_capital'])) $this->magic_vars['item']['webrepay_capital'] = ''; echo $this->magic_vars['item']['webrepay_capital']; ?>元</td>			<td><? if (!isset($this->magic_vars['item']['webrepay_interest'])) $this->magic_vars['item']['webrepay_interest'] = ''; echo $this->magic_vars['item']['webrepay_interest']; ?>元</td>			<td><font style="color:red"><? if (!isset($this->magic_vars['item']['webrepay_account'])) $this->magic_vars['item']['webrepay_account'] = ''; echo $this->magic_vars['item']['webrepay_account']; ?>元</font></td>		</tr>		<? endforeach; endif; unset($_from); ?>	</table></div><? if (!isset($this->magic_vars['_A']['borrow_result']['status'])) $this->magic_vars['_A']['borrow_result']['status']=''; ;if (  $this->magic_vars['_A']['borrow_result']['status']==0): ?><div class="module_title"><strong>网站代还</strong></div><? if (!isset($this->magic_vars['_A']['borrow_result']['advance_time'])) $this->magic_vars['_A']['borrow_result']['advance_time']='';if (!isset($this->magic_vars['_A']['borrow_result']['late_days'])) $this->magic_vars['_A']['borrow_result']['late_days']=''; ;if (  $this->magic_vars['_A']['borrow_result']['advance_time']<= $this->magic_vars['_A']['borrow_result']['late_days']): ?><form name="form1" method="post" action=""><div class="module_border">	<div class="l">验证码：</div>	<input type="hidden" name="id" value="<? if (!isset($this->magic_vars['_A']['borrow_result']['id'])) $this->magic_vars['_A']['borrow_result']['id'] = ''; echo $this->magic_vars['_A']['borrow_result']['id']; ?>">	<div><input type="text" name="valicode" maxlength="4" size="5"><img style="cursor:pointer; margin-left:3px;" onclick="this.src='/plugins/index.php?q=imgcode&amp;t=' + Math.random();" alt="点击刷新" src="/plugins/index.php?q=imgcode"></div></div><div style="text-align:center"><input type="button" value="确认网站代还" onclick="document.forms['form1'].submit();this.disabled=true;submit_fool()" /></div><? else: ?><h2 style="text-align:center">此借款标尚未逾期<? if (!isset($this->magic_vars['_A']['borrow_result']['advance_time'])) $this->magic_vars['_A']['borrow_result']['advance_time'] = ''; echo $this->magic_vars['_A']['borrow_result']['advance_time']; ?>天，不能代还</h2><? endif; ?></form><? endif; ?><!-- 网站代还 结束 -->
<!-- 抵押标到期 开始 -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="lateFast"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<form action="" method="post">
		<tr>
			<td width="" class="main_td">借款编号</td>
			<td width="" class="main_td">用户名</td>
			<td width="" class="main_td">借款标题</td>
			<td width="" class="main_td">期数</td>
			<td width="" class="main_td">到期时间</td>
			<td width="" class="main_td">应还本息</td>
			<td width="" class="main_td">应还利息</td>
			<td width="" class="main_td">逾期天数</td>
			<td width="" class="main_td">罚金</td>
			<td width="" class="main_td">操作</td>
		</tr>
                <?php  $showtime=date("y-m-d");?>
		<?  if(!isset($this->magic_vars['_A']['borrow_repayment_list']) || $this->magic_vars['_A']['borrow_repayment_list']=='') $this->magic_vars['_A']['borrow_repayment_list'] = array();  $_from = $this->magic_vars['_A']['borrow_repayment_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td ><? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?></td>
			<td class="main_td1" align="center"><a href="/<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/view&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>&type=scene"  class="thickbox" title="用户详细信息查看">	<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
			<td align="left">
			<span style="color:#FF0000">【<? if (!isset($this->magic_vars['item']['show_name'])) $this->magic_vars['item']['show_name'] = ''; echo $this->magic_vars['item']['show_name']; ?>】</span>
			<a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_id'])) $this->magic_vars['item']['borrow_id'] = ''; echo $this->magic_vars['item']['borrow_id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?></a></td>
			<td><? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']+1; ?>/<? if (!isset($this->magic_vars['item']['time_limit'])) $this->magic_vars['item']['time_limit'] = ''; echo $this->magic_vars['item']['time_limit']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['repayment_time'])) $this->magic_vars['item']['repayment_time'] = '';$_tmp = $this->magic_vars['item']['repayment_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
			<td ><? if (!isset($this->magic_vars['item']['repayment_account'])) $this->magic_vars['item']['repayment_account'] = ''; echo $this->magic_vars['item']['repayment_account']; ?>元</td>
			<td ><? if (!isset($this->magic_vars['item']['interest'])) $this->magic_vars['item']['interest'] = ''; echo $this->magic_vars['item']['interest']; ?>元</td>
			<td ><? if (!isset($this->magic_vars['item']['late_days'])) $this->magic_vars['item']['late_days'] = ''; echo $this->magic_vars['item']['late_days']; ?>天</td>
			<td ><? if (!isset($this->magic_vars['item']['late_interest'])) $this->magic_vars['item']['late_interest'] = ''; echo $this->magic_vars['item']['late_interest']; ?></td>
			<td ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==2): ?><font color="#FF0000">已代还</font><? else: ?><? if (!isset($this->magic_vars['item']['late_days'])) $this->magic_vars['item']['late_days']=''; ;if (  $this->magic_vars['item']['late_days']>=0): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/late_repay<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">还款</a><? else: ?>--<? endif; ?><? endif; ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr>
		<td colspan="11" class="action">
		<div class="floatl">
		<input type="button" onclick="sousuo('excel')" value="导出列表" />
		</div>
		<div class="floatr">
			用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" />
			状态：<select id="status" ><option value="">全部</option><option value="1" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==1): ?> selected="selected"<? endif; ?>>已还</option><option value="2" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']==2): ?> selected="selected"<? endif; ?>>网站代还</option><option value="0" <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> selected="selected"<? endif; ?>>未还</option></select> 
			<input type="button" value="搜索" onclick="sousuo('<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/amount<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>')" />
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
<!--抵押标到期 结束-->
<!--额度审核 开始-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="amount_view"): ?>
<div class="module_title"><strong>额度审核</strong></div>
<div class="module_border">
	<div class="l">用户名：</div>
	<div class="h">
		<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['username'])) $this->magic_vars['_A']['borrow_amount_result']['username'] = ''; echo $this->magic_vars['_A']['borrow_amount_result']['username']; ?>
	</div>
</div>
<div class="module_border">
	<div class="l">借款类型：</div>
	<div class="h">
		<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['type'])) $this->magic_vars['_A']['borrow_amount_result']['type']=''; ;if (  $this->magic_vars['_A']['borrow_amount_result']['type']=="tender_vouch"): ?><font color="#FF0000">投资担保额度</font><? if (!isset($this->magic_vars['_A']['borrow_amount_result']['type'])) $this->magic_vars['_A']['borrow_amount_result']['type']=''; ;elseif (  $this->magic_vars['_A']['borrow_amount_result']['type']=="borrow_vouch"): ?><font color="#FF0000">借款担保额度</font><? else: ?>信用额度<? endif; ?>
	</div>
</div>
<div class="module_border">
	<div class="l">原来金额：</div>
	<div class="h">
		<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['account_old'])) $this->magic_vars['_A']['borrow_amount_result']['account_old'] = '';$_tmp = $this->magic_vars['_A']['borrow_amount_result']['account_old'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>
	</div>
</div>
<div class="module_border">
	<div class="l">申请额度：</div>
	<div class="h">
		<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['account'])) $this->magic_vars['_A']['borrow_amount_result']['account'] = ''; echo $this->magic_vars['_A']['borrow_amount_result']['account']; ?>
	</div>
</div>
<div class="module_border">
	<div class="l">内容：</div>
	<div class="h">
		<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['content'])) $this->magic_vars['_A']['borrow_amount_result']['content'] = ''; echo $this->magic_vars['_A']['borrow_amount_result']['content']; ?>
	</div>
</div>
<div class="module_border">
	<div class="l">备注：</div>
	<div class="h">
		<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['remark'])) $this->magic_vars['_A']['borrow_amount_result']['remark'] = ''; echo $this->magic_vars['_A']['borrow_amount_result']['remark']; ?>
	</div>
</div>
<div class="module_border">
	<div class="l">申请时间：</div>
	<div class="h">
		<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['addtime'])) $this->magic_vars['_A']['borrow_amount_result']['addtime'] = '';$_tmp = $this->magic_vars['_A']['borrow_amount_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>
	</div>
</div><? if (!isset($this->magic_vars['_A']['borrow_amount_result']['status'])) $this->magic_vars['_A']['borrow_amount_result']['status']=''; ;if (  $this->magic_vars['_A']['borrow_amount_result']['status']==2): ?>
<div class="module_title"><strong>审核</strong></div>
<form method="post" action="" name="form1">
<div class="module_border">
	<div class="l">审核状态：</div>
	<div class="h">
		<input type="radio" name="status" value="1" />通过  <input type="radio" name="status" value="0" checked="checked" />不通过
	</div>
</div>
<div class="module_border">
	<div class="l">通过额度：</div>
	<div class="h">
		<input type="text" name="account" value="<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['account'])) $this->magic_vars['_A']['borrow_amount_result']['account'] = ''; echo $this->magic_vars['_A']['borrow_amount_result']['account']; ?>" />
		<input type="hidden" name="type" value="<? if (!isset($this->magic_vars['_A']['borrow_amount_result']['type'])) $this->magic_vars['_A']['borrow_amount_result']['type'] = ''; echo $this->magic_vars['_A']['borrow_amount_result']['type']; ?>" />
	</div>
</div>
<div class="module_border">
	<div class="l">审核备注：</div>
	<div class="h" style="width:305px">
		<textarea name="verify_remark" rows="5" cols="40" ></textarea>
	</div>
</div><div class="module_border">	<div class="l">验证码：</div>	<div class="h">		<input type="text" name="valicode" size="5" maxlength="4"><img style="cursor:pointer; margin-left:3px;" onclick="this.src='/plugins/index.php?q=imgcode&amp;t=' + Math.random();" alt="点击刷新" src="/plugins/index.php?q=imgcode">	</div></div>
<div class="module_border">
	<div class="l"></div>
	<div class="h">
		<input type="button" name="tijiao" value="确定审核" onclick="sub_form()" />
	</div>
</div><? endif; ?>
</form><script type="text/javascript">function sub_form(){	var form=document.forms['form1'];	var verify_remark=form.elements['verify_remark'].value;	var account=form.elements['account'].value;	var valicode=form.elements['valicode'].value;	account=parseFloat(account);	var err="";	if(verify_remark.length==0){		err += "--备注不能为空\n";	}	if(account<=0 || isNaN(account)){		err += "--通过额度输入有误\n";	}	if(valicode.length!=4){		err += "--验证码输入有误";	}	if(err.length>0){		alert(err);	}else{		form.elements['tijiao'].disabled=true;		form.elements['tijiao'].value="提交中..";		form.submit();
		submit_fool();	}}</script><!--额度审核 结束-->		
<!--统计 开始-->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="tongji"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
		<tr >
			<td width="*" class="main_td">类型</td>
			<td width="*" class="main_td">总额</td>
		</tr>
		<tr  class="tr2">
			<td >成功借出总额</td>
			<td >￥<? if (!isset($this->magic_vars['_A']['borrow_tongji']['success_num'])) $this->magic_vars['_A']['borrow_tongji']['success_num'] = ''; echo $this->magic_vars['_A']['borrow_tongji']['success_num']; ?></td>
		</tr>
		<tr  >
			<td >己还款总额</td>
			<td >￥<? if (!isset($this->magic_vars['_A']['borrow_tongji']['success_num1'])) $this->magic_vars['_A']['borrow_tongji']['success_num1'] = ''; echo $this->magic_vars['_A']['borrow_tongji']['success_num1']; ?></td>
		</tr>
		<tr  class="tr2">
			<td >未还款总额</td>
			<td >￥<? if (!isset($this->magic_vars['_A']['borrow_tongji']['success_num0'])) $this->magic_vars['_A']['borrow_tongji']['success_num0'] = ''; echo $this->magic_vars['_A']['borrow_tongji']['success_num0']; ?></td>
		</tr>
		<tr  >
			<td >逾期总额</td>
			<td ><? if (!isset($this->magic_vars['_A']['borrow_tongji']['laterepay'])) $this->magic_vars['_A']['borrow_tongji']['laterepay'] = ''; echo $this->magic_vars['_A']['borrow_tongji']['laterepay']; ?></td>
		</tr>
		<tr  class="tr2">
			<td >逾期己还款总额</td>
			<td >￥<? if (!isset($this->magic_vars['_A']['borrow_tongji']['success_laterepay'])) $this->magic_vars['_A']['borrow_tongji']['success_laterepay'] = ''; echo $this->magic_vars['_A']['borrow_tongji']['success_laterepay']; ?></td>
		</tr>
		<tr >
			<td >逾期未还款总额</td>
			<td >￥<? if (!isset($this->magic_vars['_A']['borrow_tongji']['false_laterepay'])) $this->magic_vars['_A']['borrow_tongji']['false_laterepay'] = ''; echo $this->magic_vars['_A']['borrow_tongji']['false_laterepay']; ?></td>
			
		</tr>
		
	</form>	
</table>
<!--统计 结束-->

<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	  <form action="" method="post">
	  <?  if(!isset($this->magic_vars['_A']['account_tongji']) || $this->magic_vars['_A']['account_tongji']=='') $this->magic_vars['_A']['account_tongji'] = array();  $_from = $this->magic_vars['_A']['account_tongji']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr >
			<td width="*" class="main_td">类型名称</td>
			<td width="*" class="main_td"><? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?></td>
			<td width="" class="main_td">金额</td>
		</tr>
		<?  if(!isset($this->magic_vars['item']) || $this->magic_vars['item']=='') $this->magic_vars['item'] = array();  $_from = $this->magic_vars['item']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['_key'] =>  $this->magic_vars['_item']):
?>
		<tr  class="tr2">
			<td ><? if (!isset($this->magic_vars['_item']['type_name'])) $this->magic_vars['_item']['type_name'] = ''; echo $this->magic_vars['_item']['type_name']; ?></td>
			<td ><? if (!isset($this->magic_vars['_item']['type'])) $this->magic_vars['_item']['type'] = ''; echo $this->magic_vars['_item']['type']; ?></td>
			<td >￥<? if (!isset($this->magic_vars['_item']['num'])) $this->magic_vars['_item']['num'] = ''; echo $this->magic_vars['_item']['num']; ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
	<? endforeach; endif; unset($_from); ?>
	</form>	
</table>
<!--统计 结束-->
<? endif; ?>


<script>

var urls = '<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type'] = ''; echo $this->magic_vars['_A']['query_type']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>';

function sousuo(){	var sou = "";	if(arguments[0]=='excel'){		sou += "&type=excel";	}
	var username = $("#username").val() || "";	var status = $("#status").val() || "";	var dotime1 = $("#dotime1").val() || "";	var dotime2 = $("#dotime2").val() || "";	var biaoType = $("#biaoType").val() || "";
	if (username!=""){
		sou += "&username="+username;
	}
	if (status!=""){
		sou += "&status="+status;
	}
	if (dotime1!=""){
		sou += "&dotime1="+dotime1;
	}
	if (dotime2!=""){
		sou += "&dotime2="+dotime2;
	}
	if (biaoType!=""){
		sou += "&biaoType="+biaoType;
	}
	location.href=urls+sou;
}

function sousuoExcel(url){
	var sou = "";
	var username = $("#username").val();
	if (username!=""){
		sou += "&username="+username;
	}
	var keywords = $("#keywords").val();
	if (keywords!=""){
		sou += "&keywords="+keywords;
	}
	var status = $("#status").val();
	if (status!=""){
		sou += "&status="+status;
	}
	
	var dotime1 = $("#dotime1").val();
	if (dotime1!=""){
		sou += "&dotime1="+dotime1;
	}
	var dotime2 = $("#dotime2").val();
	if (dotime2!=""){
		sou += "&dotime2="+dotime2;
	}
	
	var biaoType = $("#biaoType").val();
	if (biaoType!=""){
		sou += "&biaoType="+biaoType;
	}
 
 
	if (sou!=""){
		
		location.href=url+sou;
	}
}

function sousuoFull(url){
	var sou = "";
	var username = $("#username").val();
	if (username!=""){
		sou += "&username="+username;
	}
	var biaoType = $("#biaoType").val();
	if (biaoType!=""){
		sou += "&biaoType="+biaoType;
	}
	var is_vouch = $("#is_vouch").val();
	if (is_vouch!=""){
		sou += "&is_vouch="+is_vouch;
	}
	if (sou!=""){
		
		location.href=url+sou;
	}
}

function sousuoBiaoOrder(url){
	var sou = "";

	var dotime1 = $("#dotime1").val();
	if (dotime1!=""){
		sou += "&dotime1="+dotime1;
	}
	var dotime2 = $("#dotime2").val();
	if (dotime2!=""){
		sou += "&dotime2="+dotime2;
	}
	
	if (sou!=""){
		
		location.href=url+sou;
	}
}
</script>
