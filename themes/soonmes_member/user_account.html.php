<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{include file="user_header.html"}
<link href="{$tempdir}/media/css/modal.css" rel="stylesheet" type="text/css" />
 
<!--用户中心的主栏目 开始-->
 <div id="main" class="clearfix" style="margin-top:0px;">
<div class="wrap950 mar10">
	<!--左边的导航 开始-->
	<div class="user_left">
		{include file="user_menu.html"}
	</div>
	<!--左边的导航 结束-->
	
	<!--右边的内容 开始-->
	<div class="user_right">
		<div class="user_right_menu">
			<ul id="tab" class="list-tab clearfix">
				<li {if $_U.query_type=="list"} class="cur"{/if}><a href="{$_U.query_url}">帐户详情</a></li>
				<li {if $_U.query_type=="bank"} class="cur"{/if}><a href="{$_U.query_url}/bank">银行账号</a></li>
				<li {if $_U.query_type=="recharge_new"} class="cur"{/if}><a href="{$_U.query_url}/recharge_new">帐户充值</a></li>
				<li {if $_U.query_type=="recharge"} class="cur"{/if}><a href="{$_U.query_url}/recharge">充值记录</a></li>
				<li {if $_U.query_type=="cash_new"} class="cur"{/if}><a href="{$_U.query_url}/cash_new">帐户提现</a></li>
				<li {if $_U.query_type=="cash"} class="cur"{/if}><a href="{$_U.query_url}/cash">提现记录</a></li>
				<li {if $_U.query_type=="log"} class="cur"{/if}><a href="{$_U.query_url}/log">资金明细</a></li>
			</ul>
		</div>
		<div class="user_right_main">
		<!--资金使用记录列表 开始-->
		{if $_U.query_type=="log"}
		<div class="user_main_title well" style="height:20px; padding-top:7px;"> 
		记录时间：<input class="Wdate" type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> 到 <input class="Wdate" type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/>   
		{linkages nid="account_type" value="$magic.get.type" name="type" type="value" default="全部" } <input value="搜索" type="submit" class="btn-action"  onclick="sousuo('{$_U.query_url}/publish')" />
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
				{foreach from=$_U.account_log_list key=key item=item}
				<tr {if $key%2==1} class="tr1"{/if}>
					<td>{$item.type|linkage:"account_type"}</td>
					<td>￥{$item.money}</td>
					<td>￥{$item.total}</td>
					<td>￥{$item.use_money}</td>
					<td>￥{$item.no_use_money|default:0}</td>
					<td>￥{$item.collection}</td>
					<td>{if $item.to_username==0}结算中心{else}<a href="/u/{$item.to_user}" target="_blank">{$item.to_username|default:"结算中心"}</a>{/if}</td>
					<td>{$item.addtime|date_format:"Y-m-d H:i:s"}</td>
					<td width="130">{$item.remark}</td>
				</tr>
				{/foreach}
				<tr >
					<td colspan="11" class="page">
						{$_U.show_page}
					</td>
				</tr>
			</form>	
		</table>
		<!--资金使用记录列表 结束-->
		<!--历史资金使用记录列表 开始-->
		
		{elseif $_U.query_type=="logold"}
		
		<div class="user_main_title well" style="height:20px; padding-top:7px;"> 
		记录时间：<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/>   
		{linkages nid="account_type" value="$magic.request.type" name="type" type="value" default="全部" } <input value="搜索" type="submit" class="btn-action"  onclick="sousuo('{$_U.query_url}/publish')" />	
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
				{foreach from=$_U.account_log_list key=key item=item}
				<tr {if $key%2==1} class="tr1"{/if}>
					<td>{$item.type|linkage:"account_type"}</td>
					<td>￥{$item.money}</td>
					<td>￥{$item.total}</td>
					<td>￥{$item.use_money}</td>
					<td>￥{$item.no_use_money|default:0}</td>
					<td>￥{$item.collection}</td>
					<td>{if $item.to_username==0}结算中心{else}<a href="/u/{$item.to_user}" target="_blank">{$item.to_username|default:"结算中心"}</a>{/if}</td>
					<td>{$item.addtime|date_format:"Y-m-d H:i:s"}</td>
					<td width="130">{$item.remark}</td>
				</tr>
				{/foreach}
				<tr>
					<td colspan="11" class="page">
						{$_U.show_page}
					</td>
				</tr>
			</form>	
		</table>
		<!--历史资金使用记录列表 结束-->
		
		<!--充值记录列表 开始-->
		{elseif $_U.query_type=="recharge"}
		<div class="user_help alert">成功充值{$_U.account_log.recharge_success|default:0}元，线上成功充值{$_U.account_log.recharge_online|default:0}元，线下成功充值{$_U.account_log.recharge_downline|default:0}元,，手动成功充值{$_U.account_log.recharge_shoudong|default:0}元</div>
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
			{list module="account" function="GetRechargeList" showpage="3" var="loop" status="1" user_id="0" epage=20}
			{foreach from=$loop.list key=key item=item}
			<tr {if $key%2==1} class="tr1"{/if}>
			<td>{if $item.type==1}网上充值{else}线下充值{/if}</td>
			<td>{$item.payment_name|default:"手动充值"}</td>
			<td><font color="#FF0000">￥{$item.money}</font></td>
			<td>{$item.hongbao}</td>
			<td>{$item.remark}</td>
			<td>{$item.addtime|date_format:"Y-m-d H:i"}</td>
			<td>{if $item.status==0}审核中{elseif  $item.status==1} 充值成功 {elseif $item.status==2}充值失败{/if}</td>
			
			<td>{$item.verify_remark|default:"-"}</td>
			</tr>
			{/foreach}
			<tr>
				<td colspan="11" class="page">{$loop.showpage}</div>
				</td>
			</tr>
			{/list}
		</form>	
		</table>
		<!--充值记录列表 结束-->
		
		<!--提现记录列表 开始-->
		{elseif $_U.query_type=="cash"}
		<div class="user_help alert">成功提现{$_U.cash_log.cash_success.money|default:0}元，提现到账{$_U.cash_log.cash_success.credited|default:0}元，手续费{$_U.cash_log.cash_success.fee|default:0}元</div>
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
				{foreach from=$_U.account_cash_list key=key item=item}
				<tr {if $key%2==1} class="tr1"{/if}>
					<td>{$item.bank_name}</td>
					<td>{$item.account}</td>
					<td>￥{$item.total|default:0}</td>
					<td>￥{$item.credited|default:0}</td>
					<td>￥{$item.fee|default:0}</td>	
					<td>￥{$item.hongbao|default:0}</td>	
					<td>{$item.addtime|date_format:"Y-m-d H:i"}</td>
					<td>{if $item.status==0}审核中{elseif  $item.status==1} 提现成功 {elseif $item.status==2}提现失败 {elseif $item.status==3}用户取消{/if}</td>
					<td>{if $item.verify_remark!=""}{$item.verify_remark}{else}{if $item.status==0}<a href="#" onclick="javascript:if(confirm('确定要取消此提现申请')) location.href='{$_U.query_url}/cash_cancel&id={$item.id}'">取消提现</a>{else}-{/if}{/if}</td>
				</tr>
				{/foreach}
				<tr >
					<td colspan="11" class="page">
						{$_U.show_page}
					</td>
				</tr>
			</form>	
		</table>
		<!--提现记录列表 结束-->
		
		<!--账号充值 开始-->
		{elseif $_U.query_type=="recharge_new"}
		<div class="user_help alert">
                    * 温馨提示：网上银行充值过程中请耐心等待,充值成功后，请不要关闭浏览器,充值成功后返回{$_G.system.con_webname},
                    充值金额才能打入您的帐号。
                    <br>* <font color="red">在线充值，手续费全免哦！</font>
        </div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">真实姓名：</div>
			<div class="c">
				{$_G.user_result.realname}
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">联系Email：</div>
			<div class="c">
				{$_G.user_result.email}
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
{literal}
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
{/literal}
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
{foreach from=$_U.account_payment_list item="var"}
{if $var.nid!="offline"}
<input type="radio" name="payment1" class="input_border" value="{$var.id}" id="payment_{$key}"  /> <label for="payment_{$key}">{$var.name}</label> <input type="hidden" name="payname{$var.id}" value="{$var.name}" /><label for="payment_{$key}">({$var.description})</label> <br />
{/if}
{/foreach}                 
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
					{foreach from=$_U.account_payment_list item="var"}
					{if $var.nid=="offline"}
					<input type="radio" name="payment2"  class="input_border" value="{$var.id}" id="offline_{$key}" /><label for="offline_{$key}">{$var.description}</label><br />
					{/if}
					{/foreach}
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
		
		
		{literal}
		
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
		{/literal}
		<div class="user_right_foot alert">
		{$_G.system.con_webname}禁止信用卡套现、虚假交易等行为,一经发现将予以处罚,包括但不限于：限制收款、冻结账户、永久停止服务,并有可能影响相关信用记录。
		</div>
		<!--账号充值 结束-->
		
		
		<!--银行账号 开始-->
		{elseif $_U.query_type=="bank"}
		<div class="user_help alert" style="text-align:left;text-indent :24px;">{$_G.system.con_webname}禁止信用卡套现、虚假交易等行为,一经发现将予以处罚,包括但不限于：限制收款、冻结账户、永久停止服务,并有可能影响相关信用记录。
</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">真实姓名：</div>
			<div class="c">
				{$_U.account_bank_result.realname}
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">登陆用户名：</div>
			<div class="c">
				{$_U.account_bank_result.username}
			</div>
		</div>
		
		{if $_U.account_bank_result.bank!=""}
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">开户银行：</div>
			<div class="c">
				{$_U.account_bank_result.bank|linkage}
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">开户行名称：</div>
			<div class="c">
				{$_U.account_bank_result.branch}
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">银行账号：</div>
			<div class="c">
				{$_U.account_bank_result.account_view}
			</div>
		</div>
		{/if}
		<div class="user_right_foot">
		</div>
		<form action="" method="post" name="form1">
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">开户银行：</div>
			<div class="c">
				<script src="/plugins/index.php?q=linkage&name=bank&nid=account_bank&value={$_U.account_bank_result.bank}"></script>
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
				<input type="text" name="account" value="" id="infoyhzh" data-content="特别提醒：上述银行卡号的开户人姓名必须为“{$_U.account_bank_result.realname}”, 个人银行账号必须填写正确,否则你的提现资金将存在风险。
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
				<input type="hidden" name="user_id" value="{$_G.user_id}" />
				<input type='hidden' name='oid' value='<?php echo date('YmdHis');?>'/> 
				<input type="button" class="btn-action"  name="name"  value="确认提交" size="30" onclick="sub_form()" /> 
			</div>
		</div>
		</form>
		<div class="user_right_foot alert">
		* 温馨提示：禁止信用卡套现
		</div>
{literal}
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
{/literal}	
		<!--银行账号 结束-->

		<!--提现 开始-->
		{elseif $_U.query_type=="cash_new"}
		<div class="user_help alert" style="text-align:left;">
<strong>注：</strong><br/>
1、确保您的银行帐号的姓名和您的网站上的真实姓名一致<br><br>
2、请输入您要取出金额,我们将在1至2个工作日(国家节假日除外)之内处理您提交的提现申请。资金将在24小时内到达您的账上。请用户务必于每个工作日的下午4点(以最新公告时间为准)之前提交提现申请，每个工作日16:00(以最新公告时间为准)之后提交的提现申请在当天将不会得到及时处理。<br><br>
3、单笔取现下限{$_G.cash_rule.min_cash}元，上限为{$_G.cash_rule.max_cash}，日累计提现不得超过{$_G.cash_rule.max_day_cash}。<br><br>
{if $_G.cash_rule.scheme==1}
4、单笔提现金额{$_G.cash_rule.cash_lt}元（包含）以下，每笔收取{$_G.cash_rule.every_lt_fee}元手续费。单笔提现{$_G.cash_rule.cash_gt}元以上，每笔收取{$_G.cash_rule.every_gt_fee}元手续费。用户自充值之日起于{$_G.cash_rule.every_day_lt}日之内且未完全投标的额外加收{$_G.cash_rule.every_extra_fee}元手续费。
{else}
4、提现手续费为提现金额的{$_G.cash_rule.scale_fee}%，用户自充值之日起于{$_G.cash_rule.scale_day_lt}日之内且未完全投标的部分额外加收{$_G.cash_rule.scale_extra_fee}%手续费。
{/if}
<br>
		</div>
		<form action="" method="post" onsubmit="return check_form()" name="form1">
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">真实姓名：</div>
			<div class="c">
				{$_G.user_result.realname}
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">账户余额：</div>
			<div class="c">
				{$_G.user_result.use_money|default:0}元
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">可用余额：</div>
			<div class="c">
				{$_G.user_result.use_money|default:0}元
				<input type="hidden" name="userMoney" id="userMoney" value="{$_G.user_result.use_money|default:0}">
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">冻结总额：</div>
			<div class="c">
				{$_G.user_result.no_use_money|default:0}元
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">提现的银行：</div>
			<div class="c">
				{$_U.account_bank_result.bank|linkage} {$_U.account_bank_result.branch} {$_U.account_bank_result.account_view} 
			</div>
		</div>
                    
		{article module="borrow" function="GetCashGoodAmount"  user_id="$_G.user_id"  article_id="0"}
                
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">正在申请提现：</div>
			<div class="c">
				{$var.txValue|default:0}元(金额)
			</div>
		</div>
                
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">建议最大提现：</div>
			<div class="c">
				{$var.yValue}元(金额)
			</div>
		</div>
		
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">红包数：</div>
			<div class="c">
				{$_G.user_result.hongbao}元
				<input type="hidden" name="hongbao" id="hongbao" value="{$_G.user_result.hongbao}">
				<input type="hidden" name="hongbaoUsed" id="hongbaoUsed" value="">
			</div>
		</div>
		<input type="hidden" name="cashGoodAmount" id="cashGoodAmount" value="{$var.yValue}">
		<script style="text/javascript">
		var scheme={$var.cash_scheme.scheme};
		var max_cash={$var.cash_scheme.max_cash};
		var min_cash={$var.cash_scheme.min_cash};
		var cash_lt={$var.cash_scheme.cash_lt};
		var cash_gt={$var.cash_scheme.cash_gt};
		var every_lt_fee={$var.cash_scheme.every_lt_fee};
		var every_gt_fee={$var.cash_scheme.every_gt_fee};
		var every_extra_fee={$var.cash_scheme.every_extra_fee};
		var scale_fee={$var.cash_scheme.scale_fee};
		var scale_extra_fee={$var.cash_scheme.scale_extra_fee};
		var free_extra_part={$var.free_extra_part};
		</script>
		{/article}
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">交易密码：</div>
			<div class="c">
				{if $_U.account_bank_result.paypassword==""}<a href="{$_U.query_url}&q=code/user/paypwd"><font color="#FF0000">请先设置一个支付密码</font></a>{else}<input type="password" name="paypassword" />{/if}
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
{literal}
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
{/literal}
{literal}
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
{/literal}
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;">验证码：</div>
			<div class="c">
				<input name="valicode" type="text" size="11" maxlength="4" style="float:left;"/>&nbsp;<img src="/plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer;float:left;" />
			</div>
		</div>
		<div class="user_right_border">
			<div class="l" style="font-weight:bold;"></div>
			<div class="c">
				<input type="hidden" name="user_id" value="{$_G.user_id}" />
				<input type="button" class="btn-action"  name="name"  value="确认提交" size="30" onclick="check_form()" /> 
			</div>
		</div>
		</form>
		<div class="user_right_foot alert">
		* 温馨提示：禁止信用卡套现
		</div>
<script>
var use_money = {$_G.user_result.use_money|default:0};
{literal}
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
{/literal}
<!--提现 结束-->
{else}
{literal}
<? $this->magic_vars['day7'] = time()-6*60*60*24;?>
<? $this->magic_vars['nowtime'] = time();?>
{/literal}
		<div class="user_main_title" style="height:30px; padding-top:7px;"> 
		发布时间：<input type="text" name="dotime1" id="dotime1" value="{$magic.request.dotime1|default:"$day7"|date_format:"Y-m-d"}" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="{$magic.request.dotime2|default:"$nowtime"|date_format:"Y-m-d"}" id="dotime2" size="15" onclick="change_picktime()"/>   
		<input value="搜索" type="submit" class="btn-action"  onclick="sousuo('{$_U.query_url}/publish')" />
		</div>	
		{article module="borrow" function="GetUserLog" user_id="0"}
		<table width="100%">
			<tr style="height: 25px">
				<td colspan="6"><strong>个人资金详情</strong></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">账户总额：</td><td align="left">￥{$var.total|default:0}</td>
				<td align="right">可用余额：</td><td align="left">￥{$var.use_money|default:0}</td>
				<td align="right">冻结金额：</td><td align="left">￥{$var.no_use_money|default:0}</td>
			</tr>
			<tr style="height: 25px">
				<td align="right">投标冻结总额：</td><td align="left">￥{$var.tender|default:0}</td>
				<td align="right">充值成功总额：</td><td align="left">￥{$var.recharge_success|default:0}</td>
				<td align="right">提现成功总额：</td><td align="left">￥{$var.cash_success.money|default:0}</td>
			</tr>
			<tr style="height: 25px">
				<td align="right">在线充值总额：</td><td align="left">￥{$var.recharge_online|default:0}</td>
				<td align="right">线下充值总额：</td><td align="left">￥{$var.recharge_downline|default:0}</td>
				<td align="right">手动充值总额：</td><td align="left">￥{$var.recharge_shoudong|default:0}</td>
			</tr>
			<tr style="height: 25px">
				<td align="right">总手续费：</td><td align="left">￥{$var.fee+$var.recharge_fee|default:0}</td>
				<td align="right">充值手续费：</td><td align="left">￥{$var.fee|default:0}</td>
				<td align="right">提现手续费：</td><td align="left">￥{$var.recharge_fee|default:0}</td>
			</tr>
			<tr style="height: 25px">
				<td align="right">最高额度：</td><td align="left">￥{$var.amount|default:0}</td>
				<td align="right">最低额度：</td><td align="left">￥500</td>
				<td align="right">可用额度：</td><td align="left">￥{$var.use_amount|default:0}</td>
			</tr>
			<tr style="height: 25px">
				<td colspan="6"><strong>投资资金详情</strong></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">投标总额：</td><td align="left">￥{$var.invest_account|round:"2"|default:0}</td>
				<td align="right">借出总额：</td><td align="left">￥{$var.success_account|round:"2"|default:0}</td>
				<td align="right">奖励收入总额：</td><td align="left">￥{$var.award_add|default:0}</td>
			</tr>
			<tr style="height: 25px">
				<td align="right">待回收总额：</td><td align="left">￥{$var.collection_wait|default:0}</td>
				<td align="right">待回收金额：</td><td align="left">￥{$var.collection_capital0|default:0}</td>
				<td align="right">待回收利息：</td><td align="left">￥{$var.collection_interest0|round:"2"|default:0}</td>
			</tr>
			<tr style="height: 25px">
				<td align="right">已回收总额：</td><td align="left">￥{$var.collection_yes|default:0}</td>
				<td align="right">已回收金额：</td><td align="left">￥{$var.collection_capital1|default:0}</td>
				<td align="right">已回收利息：</td><td align="left">￥{$var.collection_interest1|default:0}</td>
			</tr>
			<tr style="height: 25px">
				<td align="right">网站垫付总额：</td><td align="left">￥{$var.num_late_repay_account|default:0}</td>
				<td align="right">逾期罚金收入：</td><td align="left">￥{$var.late_collection|default:0}</td>
				<td align="right">损失利息总额：</td><td align="left">￥{$var.num_late_interes|default:0}</td>
			</tr>
			<tr style="height: 25px">
				<td align="right">最近收款日期：</td><td align="left">{$var.collection_repaytime|date_format:"Y-m-d"|default:-}</td>
				<td align="right"></td><td align="left"></td>
				<td align="right"></td><td align="left"></td>
			</tr>
			<tr style="height: 25px">
				<td colspan="6"><strong>贷款资金详情</strong></td>
			</tr>
			<tr style="height: 25px">
				<td align="right">借款总额：</td><td align="left">￥{$var.borrow_num|default:0}</td>
				<td align="right">已还总额：</td><td align="left">￥{$var.borrow_num1|default:0}</td>
				<td align="right">未还总额：</td><td align="left">￥{$var.wait_payment|default:0}</td>
			</tr>
			<tr style="height: 25px">
				<td align="right">发标次数：</td><td align="left">{$var.borrow_times|default:0}</td>
				<td align="right">还款标数：</td><td align="left">{$var.payment_times|default:0}</td>
				<td align="right">待还笔数：</td><td align="left">{$var.borrow_repay0|default:0}</td>
			</tr>
			<tr style="height: 25px">
				<td align="right">最近还款日期：</td><td align="left">{$var.new_repay_time|date_format:"Y-m-d"}</td>
				<td align="right">最近应还款金额：</td><td align="left">￥{$var.new_repay_account|default:0}</td>
				<td align="right"></td><td align="left"></td>
			</tr>
		</table>
		{/article}
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
			{loop module="account" function="GetLogCount" var="var" user_id=0 dotime1="$magic.request.dotime1"  dotime2="$magic.request.dotime2" }
				<tr {if $var.i%2==1} class="tr1"{/if}>
					<td>{$key}</td>
					<td {if $var.borrow_success!=""} style="color:#FF0000"{/if}>￥{$var.borrow_success|default:0}</td>
					<td {if $var.borrow_fee!=""} style="color:#FF0000"{/if}>￥{$var.borrow_fee|default:0}</td>
					<td {if $var.margin!=""} style="color:#FF0000"{/if}>￥{$var.margin|default:0}</td>
					<td {if $var.award_lower!=""} style="color:#FF0000"{/if}>￥{$var.award_lower|default:0}</td>
					<td {if $var.tender!=""} style="color:#FF0000"{/if}>￥{$var.tender|default:0}</td>
					<td {if $var.collection!=""} style="color:#FF0000"{/if}>￥{$var.collection|default:0}</td>
					<td {if $var.award_add!=""} style="color:#FF0000"{/if}>￥{$var.award_add|default:0}</td>
					<td {if $var.invest_repayment!=""} style="color:#FF0000"{/if}>￥{$var.invest_repayment|default:0}</td>
					<td {if $var.recharge!=""} style="color:#FF0000"{/if}>￥{$var.recharge|default:0}</td>
					<td {if $var.recharge_success!=""} style="color:#FF0000"{/if}>￥{$var.recharge_success|default:0}</td>
				</tr>
				{/loop}
		</table>	
			{/if}
	</div>
	<!--右边的内容 结束-->
</div>
<!--用户中心的主栏目 结束-->
</div>
</div>
<script type="text/javascript">
var url = "{$_U.query_url}/{$_U.query_type}";
{literal}
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
{/literal}
<script src="{$tempdir}/media/js/modal.js"></script>
<script src="{$tempdir}/media/js/tab.js"></script>
<script src="{$tempdir}/media/js/alert.js"></script>
<script src="{$tempdir}/media/js/tooltip.js"></script>
<script src="{$tempdir}/media/js/popover.js"></script>
<script src="{$tempdir}/media/js/transition.js"></script>
{include file="user_footer.html"}