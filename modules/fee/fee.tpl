<div class="module_add">
<form name="form1" method="post" action="{$_A.query_url}/edit"  enctype="multipart/form-data">
	<!-- <div class="module_title"><strong>费用管理</strong></div>
	<div class="module_border">
		<div class="w">借入者充值的费用：</div>
		<div class="c">
		充值的费率为 <input type="text" value="2" name="" size="10" />%  大于 <input type="text" value="5000" name=""  size="10" />元费用为<input type="text" value="50" name="50"  size="10" /> 元
		</div>
	</div>
	<div class="module_border">
		<div class="w">借款管理费用：</div>
		<div class="c">
		借款两个月管理费为本金<input type="text" value="1" name="" size="5" />% 每增加一个月加收管理费<input type="text" value="1" name="" size="5" /> %。
		管理费用不计息，不退还，在借款金额中直接扣除。
		</div>
	</div>
	<div class="module_border">
		<div class="w">VIP会员管理：</div>
		<div class="c">
		资料积分达到 <input type="text" value="1" name="" size="5" />分可以申请vip，vip的费用为：<input type="text" value="5000" name=""  size="10" />元/年 。保证金按本金<input type="text" value="1" name="" size="5" />%冻结在个人帐户。用户正常全额还款后，解冻保证金。在借款成功以后再扣除，借款不成功不收费
		</div>
	</div>
	<div class="module_border">
		<div class="w">银牌会员管理：</div>
		<div class="c">
		资料积分达到 <input type="text" value="500" name="" size="5" />分其中借款用户全额还清积分必须达到<input type="text" value="300" name="" size="5" />分）且没有迟还款和逾期还款的用户，系统自动为其升级成为银牌会员
		</div>
	</div> -->
	<div class="module_border">
		<div class="w">提现费用管理：</div>
		<div class="c">
		最低提现金额<input type="text" value="{$_A.cash_rule.min_cash}" name="min_cash" size="5" />元，最高提现金额<input type="text" value="{$_A.cash_rule.max_cash}" name="max_cash" size="5" />元，每日累计提现不能超过<input type="text" value="{$_A.cash_rule.max_day_cash}" name="max_day_cash" size="5" />元
		<br/>提现手续费A:<input type="radio" name="scheme" value="1" {if $_A.cash_rule.scheme=="1"}checked="checked"{/if} />提现金额小于<input type="text" value="{$_A.cash_rule.cash_lt}" name="cash_lt" size="5" />收取<input type="text" value="{$_A.cash_rule.every_lt_fee}" name="every_lt_fee" size="1" />元/笔手续费，提现金额大于<input type="text" value="{$_A.cash_rule.cash_gt}" name="cash_gt" size="5" />收取<input type="text" value="{$_A.cash_rule.every_gt_fee}" name="every_gt_fee" size="1" />元/笔手续费，充值<input type="text" value="{$_A.cash_rule.every_day_lt}" name="every_day_lt" size="1" />天内且未完全投标的额外加收<input type="text" value="{$_A.cash_rule.every_extra_fee}" name="every_extra_fee" size="1" />元/笔的手续费
		<br/>提现手续费B:<input type="radio" name="scheme" value="2" {if $_A.cash_rule.scheme=="2"}checked="checked"{/if} />提现收取<input type="text" value="{$_A.cash_rule.scale_fee}" name="scale_fee" size="5" />%的手续费，充值<input type="text" value="{$_A.cash_rule.scale_day_lt}" name="scale_day_lt" size="1" />天内且未进行投标部分额外收取<input type="text" value="{$_A.cash_rule.scale_extra_fee}" name="scale_extra_fee" size="5" />%的手续费
		</div>
	</div>
	<div class="module_submit">
		<input type="hidden" name="id" value="{$_A.cash_rule.id}" />
		<input type="submit" name="submit" value="确认提交" />
		<input type="reset" name="reset" value="重置表单" />
	</div>
</form>
</div>

{literal}
<script>
function check_form(){
/*
	 var frm = document.forms['form1'];
	 var title = frm.elements['name'].value;
	 var errorMsg = '';
	  if (title.length == 0 ) {
		errorMsg += '标题必须填写' + '\n';
	  }
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
	  */
}

</script>
{/literal}
