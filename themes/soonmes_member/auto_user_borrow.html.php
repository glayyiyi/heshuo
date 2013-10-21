<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{include file="user_header.html"}
<link href="{$tempdir}/media/css/modal.css" rel="stylesheet" type="text/css" />
<link href="{$tempdir}/media/css/auto_user.css" rel="stylesheet" type="text/css" />
{literal}
<style type="text/css">
.auto_borrow_style tr{line-height:30px}
</style>
{/literal}

<!--用户中心的主栏目 开始-->
<div id="main" class="clearfix">
<div class="wrap950 ">
	<!--左边的导航 开始-->
	<div class="user_left">
		{include file="user_menu.html"}
	</div>
	<!--左边的导航 结束-->
	
	<!--右边的内容 开始-->
	<div class="user_right">
		<div class="user_right_menu">
			<ul id="tab" class="list-tab clearfix">
				<li {if $_U.query_type=="auto"} class="cur"{/if}><a href="{$_U.query_url}/auto">自动投标列表</a></li>
				<li {if $_U.query_type=="auto_new"} class="cur"{/if}><a href="{$_U.query_url}/auto_new">添加自动投标</a></li>
			</ul>
		</div>
		
		<div class="user_right_main" style="text-align:left;">
		<!--自动投标 开始-->
		{if $_U.query_type=="auto"}
		<div class="user_help alert">
1、自动投标最多允许添加1个规则<br />
2、当判断到有符合条件的规则时即为您自动投标，而后续的规则则不予采用。 
</div>
 
<!--还款明细 结束-->
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" >
			  <form action="" method="post">
				<tr class="head" >
					<td>排序</td>
					<td>是否启用</td>
					<td>投标类型</td>
					<td>投标额度</td>
					<td>利率范围</td>
					<td>借款期限</td>
					<td>信用积分</td>
					<td>标的奖励</td>
					<td>是否抵押标</td>
                    <td>是否信用标</td>
                    <td>是否净值标</td>
					<td>操作</td>
				</tr>
				{loop module="borrow" function ="GetAutoList" " user_id="0" limit="all" order="order"}
				<span style="display:none">{$i++}</span>
				<tr {if $key%2==1} class="tr1"{/if}>
					<td >{$i}</td>
					<td >{if $var.status==1}启用{else}未启用{/if}</td>
					<td>{if $var.tender_type==1}按金额投标{else}按比例投标{/if}</td>
					<td>￥{$var.tender_account}</td>
					<td><!--{$var.tender_scale}-->   {$var.apr_first}% ~ {$var.apr_last}%</td>
					<td>{if $var.timelimit_status==1}{$var.timelimit_month_first}~{$var.timelimit_month_last}{else}不启用{/if}</td>
					<td>{if $var.borrow_credit_status==1}{$var.borrow_credit_first}~{$var.borrow_credit_last}{else}不启用{/if}</td>
					<td>{if $var.award_status==1}{$var.award_first}~{$var.award_last}{else}不启用{/if}</td>
                    <td>{if $var.fast_status==1}是{else}不启用{/if}</td>
                    <td>{if $var.xin_status==1}是{else}不启用{/if}</td>
                    <td>{if $var.jin_status==1}是{else}不启用{/if}</td>
					<td><a href="/index.php?user&q=code/borrow/auto_new&id={$var.id}">修改</a> <a href="#" onclick="javascript:if(confirm('你确定要删除此自动投标吗？')) location.href='{$_U.query_url}/auto_del&id={$var.id}'">删除</a></td>
				</tr>
				{/loop}
			</form>	
		</table>
	
		</div>
		
		
		<!--自动投标 结束-->
		{elseif $_U.query_type=="auto_new"}
		<form  method="post" name="form1"  action="/index.php?user&q=code/borrow/auto_add" >
		<div class="user_help alert">
		自动投标时，只有满足下面您选择的条件时系统才会为您自动投标。
		</div>
		 <div  style=" width: 780px; margin:0 auto; padding-bottom:20px;"> 
        <div class="sideT" >
            <div class="user_right_title"> 
                <span class=""><strong style="color:red">生效状态</strong></span></div> 
            <div class="set_table" style=" clear:both; float:left"> 
			
            <table border="0" style="text-align:left" class='auto_borrow_style'> 
                    <tr> 
                        <th> 
                            状态：
                        </th> 
                        <td> 
                           <input id="status" type="checkbox" name="status" value="1" {if $_U.auto_result.status==1} checked="checked" {/if}/><label for="">是否启用</label><span>(如果不选中则当前规则不会生效)</span> 
                        </td> 
                    </tr> 
                    <tr> 
                        <th> 
                            金额：
                        </th> 
                        <td style="width:550px"> 
                            <span style='display:none;'><input  type="radio" name="tender_type" value="1" {if $_U.auto_result.tender_type==1 || $_U.auto_result.tender_type==""} checked="checked"{/if}  /></span> <label for="tender_type">每次投标</label> 
                            <input name="tender_account" type="text" maxlength="5" id="tender_account"  style="width:80px;" value="{$_U.auto_result.tender_account}" />元<span>(最少50元)</span> 
                           <!-- <span ><input  type="radio" name="tender_type" value="2"  {if $_U.auto_result.tender_type==2} checked="checked"{/if}  /><label for="tender_type">按比例投标</label></span> 
                            <input name="tender_scale" type="text" value="{$_U.auto_result.tender_scale}" maxlength="2"  style="width:80px;" />%<span>(只能在1%~<span id="">20</span>%)</span> -->
                        </td> 
                    </tr> 
                    <tr> 
                        <th> 
                        </th> 
                        <td  style="width:600px;"> 
                         <span style="color:Red;">如果超过标的的最大投标额度则以标的的最大额度为准，如果小于标的的最小投标额度则不投。
                     
                        </span>
                      <br /> 
                        <span>【当前规则满足时系统将为您自动投标的额度，投标金额和比例都只能为大于0的为整数。】</span>
                       </td> 
                        </tr> 
                    </table> 
            </div> 
            <!--
            <div class="user_right_title"> 
                <span class=""><strong style="color:red">借款人信息限制</strong></span></div> 
            <div class="set_table" style=" clear:both;float:left"> 
                <table border="0" style="text-align:left"> 
                    <tr align="left"> 
                        <th> 
                            认证选项：
                        </th> 
                        <td> 
                            <input id="video_status" type="checkbox" name="video_status" value="1" {if $_U.auto_result.video_status==1} checked="checked"{/if} /><label for="video_status">必须通过视频认证</label> 
                            <input id="scene_status" type="checkbox" name="scene_status" value="1" {if $_U.auto_result.scene_status==1} checked="checked"{/if} /><label for="scene_status">必须通过现场认证</label> 
                        </td> 
                        <td> 
                           <span>【选中则没有此项限制】</span> 
                        </td> 
                    </tr> -->
                   <!--
                    <tr> 
                        <th> 
                            关系选项：
                        </th> 
                        <td> 
                            <input id="my_friend" type="checkbox" name="my_friend" value="1" {if $_U.auto_result.my_friend==1} checked="checked"{/if}/><label for="my_friend">必须是我的好友</label> 
                            <input id="not_black" type="checkbox" name="not_black" value="1" {if $_U.auto_result.not_black==1} checked="checked"{/if}/><label for="not_black">必须不在我的黑名单中</label> 
                        </td> 
                        <td> 
                           <span>(不选中则没有此项限制)</span> 
                        </td> 
                    </tr> 
                    <tr> 
                        <th> 
                            还款信用：
                        </th> 
                        <td> 
                            <input id="late_status" type="checkbox" name="late_status" value="1" {if $_U.auto_result.late_status==1} checked="checked"{/if} /><label for="late_status">逾期次数必须小于等于(≤)</label> 
                            <select name="late_times" id="late_times" style=" width: 50px;"> 
	<option {if $_U.auto_result.late_times==0 || $_U.auto_result.late_times==""} selected="selected"{/if} value="0">0</option> 
	<option value="1" {if $_U.auto_result.late_times==1} selected="selected"{/if} >1</option> 
	<option value="2" {if $_U.auto_result.late_times==2} selected="selected"{/if} >2</option> 
	<option value="3" {if $_U.auto_result.late_times==3} selected="selected"{/if} >3</option> 
	<option value="4" {if $_U.auto_result.late_times==4} selected="selected"{/if} >4</option> 
	<option value="5" {if $_U.auto_result.late_times==5} selected="selected"{/if} >5</option> 
	<option value="6" {if $_U.auto_result.late_times==6} selected="selected"{/if} >6</option> 
	<option value="7" {if $_U.auto_result.late_times==7} selected="selected"{/if} >7</option> 
	<option value="8" {if $_U.auto_result.late_times==8} selected="selected"{/if} >8</option> 
	<option value="9" {if $_U.auto_result.late_times==9} selected="selected"{/if} >9</option> 
	<option value="10" {if $_U.auto_result.late_times==10} selected="selected"{/if} >10</option> 
 
</select> 
                            
                        </td> 
                        <td> 
                           <input id="dianfu_status" type="checkbox" name="dianfu_status" value="1" {if $_U.auto_result.dianfu_status==1} checked="checked"{/if}  /><label for="dianfu_status">被垫付次数必须小于等于(≤)</label> 
                            <select name="dianfu_times" id="dianfu_times" style=" width: 50px;"> 
	<option {if $_U.auto_result.dianfu_times==0 || $_U.auto_result.dianfu_times==""} selected="selected"{/if} value="0">0</option> 
	<option value="1" {if $_U.auto_result.dianfu_times==1} selected="selected"{/if} >1</option> 
	<option value="2" {if $_U.auto_result.dianfu_times==2} selected="selected"{/if} >2</option> 
	<option value="3" {if $_U.auto_result.dianfu_times==3} selected="selected"{/if} >3</option> 
	<option value="4" {if $_U.auto_result.dianfu_times==4} selected="selected"{/if} >4</option> 
	<option value="5" {if $_U.auto_result.dianfu_times==5} selected="selected"{/if} >5</option> 
	<option value="6" {if $_U.auto_result.dianfu_times==6} selected="selected"{/if} >6</option> 
	<option value="7" {if $_U.auto_result.dianfu_times==7} selected="selected"{/if} >7</option> 
	<option value="8" {if $_U.auto_result.dianfu_times==8} selected="selected"{/if} >8</option> 
	<option value="9" {if $_U.auto_result.dianfu_times==9} selected="selected"{/if} >9</option> 
	<option value="10" {if $_U.auto_result.dianfu_times==10} selected="selected"{/if} >10</option> 
 
</select> 
                        </td> 
                    </tr> 
                    <tr> 
                        <th> 
                            黑名单：
                        </th> 
                        <td style="width:380px"> 
                            <input type="checkbox" name="black_status" value="1" {if $_U.auto_result.black_status==1} checked="checked"{/if} /><label for="black_status">被网站</label> 
                            <select name="black_user" id="black_user" style=" width: 90px;"> 
	<option value="0" {if $_U.auto_result.black_user==0} selected="selected"{/if}>所有用户</option> 
	<option value="1" {if $_U.auto_result.black_user==1} selected="selected"{/if}>所有VIP</option> 
	<option value="2" {if $_U.auto_result.black_user==2} selected="selected"{/if}>银牌会员</option> 
	<option value="3" {if $_U.auto_result.black_user==3} selected="selected"{/if}>金牌会员</option> 
	<option value="4" {if $_U.auto_result.black_user==4} selected="selected"{/if}>白金会员</option> 
 
</select> 
                            <label for="black_times" id="black_times">列为黑名单必须少于(≤)</label> 
                            <select name="black_times" id="black_times" style=" width: 50px;"> 
	<option {if $_U.auto_result.black_times==0 || $_U.auto_result.black_times==""} selected="selected"{/if} value="0">0</option> 
	<option value="1" {if $_U.auto_result.black_times==1} selected="selected"{/if} >1</option> 
	<option value="2" {if $_U.auto_result.black_times==2} selected="selected"{/if} >2</option> 
	<option value="3" {if $_U.auto_result.black_times==3} selected="selected"{/if} >3</option> 
	<option value="4" {if $_U.auto_result.black_times==4} selected="selected"{/if} >4</option> 
	<option value="5" {if $_U.auto_result.black_times==5} selected="selected"{/if} >5</option> 
	<option value="6" {if $_U.auto_result.black_times==6} selected="selected"{/if} >6</option> 
	<option value="7" {if $_U.auto_result.black_times==7} selected="selected"{/if} >7</option> 
	<option value="8" {if $_U.auto_result.black_times==8} selected="selected"{/if} >8</option> 
	<option value="9" {if $_U.auto_result.black_times==9} selected="selected"{/if} >9</option> 
	<option value="10" {if $_U.auto_result.black_times==10} selected="selected"{/if} >10</option>
	<option value="15" {if $_U.auto_result.black_times==15} selected="selected"{/if}>15</option> 
	<option value="20" {if $_U.auto_result.black_times==20} selected="selected"{/if}>20</option> 
	<option value="25" {if $_U.auto_result.black_times==25} selected="selected"{/if}>25</option> 
	<option value="30" {if $_U.auto_result.black_times==30} selected="selected"{/if}>30</option> 
	<option value="40" {if $_U.auto_result.black_times==40} selected="selected"{/if}>40</option> 
	<option value="50" {if $_U.auto_result.black_times==50} selected="selected"{/if}>50</option> 
	<option value="80" {if $_U.auto_result.black_times==80} selected="selected"{/if}>80</option> 
	<option value="100" {if $_U.auto_result.black_times==100} selected="selected"{/if}>100</option> 
	<option value="150" {if $_U.auto_result.black_times==150} selected="selected"{/if}>150</option> 
	<option value="200" {if $_U.auto_result.black_times==200} selected="selected"{/if}>200</option> 
	<option value="250" {if $_U.auto_result.black_times==250} selected="selected"{/if}>250</option> 
	<option value="300" {if $_U.auto_result.black_times==300} selected="selected"{/if}>300</option> 
	<option value="500" {if $_U.auto_result.black_times==500} selected="selected"{/if}>500</option> 
	<option value="800" {if $_U.auto_result.black_times==800} selected="selected"{/if}>800</option> 
	<option value="1000" {if $_U.auto_result.black_times==1000} selected="selected"{/if}>1000</option> 
 
</select><label for="" id="">次</label> 
                        </td> 
                        <td><input id="not_late_black" type="checkbox" value="1" name="not_late_black" {if $_U.auto_result.not_late_black==1} checked="checked"{/if}/><label for="not_late_black">必须不在网站逾期黑名单中</label></td> 
                        </tr> 
                    -->
                    <!--<tr> 
                        <th> 
                            信用积分：
                        </th> 
                        <td> 
                           <input id="borrow_credit_status" type="checkbox" name="borrow_credit_status" value="1" {if $_U.auto_result.borrow_credit_status==1} checked="checked"{/if}/><label for="borrow_credit_status">积分必须为</label> 
                           <input name="borrow_credit_first" type="text" value="{$_U.auto_result.borrow_credit_first}" maxlength="6" id="borrow_credit_first" style="width:50px;" />~<input name="borrow_credit_last" type="text" value="{$_U.auto_result.borrow_credit_last}" maxlength="6" id="borrow_credit_last"  style="width:50px;" /> 
                        </td> 
                       
                    </tr> 
                    
                </table> 
            </div> -->
            <div class="user_right_title"> 
                <span class=""><strong style="color:red">标的信息限制</strong></span></div> 
            <div class="set_table" style=" clear:both;"> 
                <table border="0" style="text-align:left; float:left" class='auto_borrow_style' > 
                <tr> 
                        <th> 
                            还款方式：
                        </th> 
                        <td> 
                            <input id="borrow_style_status" type="checkbox" name="borrow_style_status" value="1"  {if $_U.auto_result.borrow_style_status==1} checked="checked"{/if}/><label for="">启用  还款方式必须为</label> 
                            <select name="borrow_style" id="borrow_style" > 
	<option value="0"  {if $_U.auto_result.borrow_style==0} selected="selected"{/if}>按月分期还款</option> 
 
</select> 
                        </td> 
                        <td><span>【不选中则没有此项限制】</span></td> 
                    </tr> 
                    <tr> 
                        <th> 
                            借款期限：
                        </th> 
                        <td style="width:400px"> 
                           <input id="timelimit_status"  name="timelimit_status" type="radio" value="0" checked="checked" {if $_U.auto_result.timelimit_status==0} checked="checked"{/if}/><label for="">不限定期限</label> 
                           <input id="timelimit_status" type="radio" name="timelimit_status" value="1"   name="timelimit_status" {if $_U.auto_result.timelimit_status==1} checked="checked"{/if}/><label for="">按照下面规则</label> 
                        </td> 
                        <td> 
                            <span></span> 
                        </td> 
                    </tr> 
                <tr> 
                        <th> 
                        </th> 
                        <td style="width:400px"> 
                         月标：
		<select id="timelimit_month_first" name="timelimit_month_first" style=" width: 80px;"> 
			<option  {if $_U.auto_result.timelimit_month_first==0} selected="selected"{/if} value="0">不投月标</option> 
            <option  {if $_U.auto_result.timelimit_month_first==1} selected="selected"{/if} value="1">1个月</option> 
			<option  {if $_U.auto_result.timelimit_month_first==2} selected="selected"{/if} value="2">2个月</option> 
			<option  {if $_U.auto_result.timelimit_month_first==3} selected="selected"{/if} value="3">3个月</option> 
			<option  {if $_U.auto_result.timelimit_month_first==4} selected="selected"{/if} value="4">4个月</option> 
			<option  {if $_U.auto_result.timelimit_month_first==5} selected="selected"{/if} value="5">5个月</option> 
			<option  {if $_U.auto_result.timelimit_month_first==6} selected="selected"{/if} value="6">6个月</option> 
			<option  {if $_U.auto_result.timelimit_month_first==7} selected="selected"{/if} value="7">7个月</option> 
			<option  {if $_U.auto_result.timelimit_month_first==8} selected="selected"{/if} value="8">8个月</option> 
			<option  {if $_U.auto_result.timelimit_month_first==9} selected="selected"{/if} value="9">9个月</option> 
			<option  {if $_U.auto_result.timelimit_month_first==10} selected="selected"{/if} value="10">10个月</option> 
			<option  {if $_U.auto_result.timelimit_month_first==11} selected="selected"{/if} value="11">11个月</option> 
			<option  {if $_U.auto_result.timelimit_month_first==12} selected="selected"{/if} value="12">12个月</option> 
		</select>
			~
		<select id="timelimit_month_last" name="timelimit_month_last" style=" width: 80px;"> 
			<option value="0"  {if $_U.auto_result.timelimit_month_last==0} selected="selected"{/if}>不投月标</option> 
            <option value="1"  {if $_U.auto_result.timelimit_month_last==1} selected="selected"{/if}>1个月</option> 
			<option value="2"  {if $_U.auto_result.timelimit_month_last==2} selected="selected"{/if}>2个月</option> 
			<option value="3"  {if $_U.auto_result.timelimit_month_last==3} selected="selected"{/if}>3个月</option> 
			<option value="4"  {if $_U.auto_result.timelimit_month_last==4} selected="selected"{/if}>4个月</option> 
			<option value="5"  {if $_U.auto_result.timelimit_month_last==5} selected="selected"{/if}>5个月</option> 
			<option value="6"  {if $_U.auto_result.timelimit_month_last==6} selected="selected"{/if}>6个月</option> 
			<option value="7"  {if $_U.auto_result.timelimit_month_last==7} selected="selected"{/if}>7个月</option> 
			<option value="8"  {if $_U.auto_result.timelimit_month_last==8} selected="selected"{/if}>8个月</option> 
			<option value="9"  {if $_U.auto_result.timelimit_month_last==9} selected="selected"{/if}>9个月</option> 
			<option value="10"  {if $_U.auto_result.timelimit_month_last==10} selected="selected"{/if}>10个月</option> 
			<option value="11"  {if $_U.auto_result.timelimit_month_last==11} selected="selected"{/if}>11个月</option> 
			<option value="12"  {if $_U.auto_result.timelimit_month_last==12} selected="selected"{/if}>12个月</option> 
		</select>
                                                    
                        <br/>天标：
                        
	<select id="timelimit_day_first" name="timelimit_day_first" style=" width: 80px;"> 
            <option  {if $_U.auto_result.timelimit_day_first==0} selected="selected"{/if} value="0">不投天标</option> 
            <option  {if $_U.auto_result.timelimit_day_first==1} selected="selected"{/if} value="1">1天</option> 
			<option  {if $_U.auto_result.timelimit_day_first==2} selected="selected"{/if} value="2">2天</option> 
			<option  {if $_U.auto_result.timelimit_day_first==3} selected="selected"{/if} value="3">3天</option> 
			<option  {if $_U.auto_result.timelimit_day_first==4} selected="selected"{/if} value="4">4天</option> 
			<option  {if $_U.auto_result.timelimit_day_first==5} selected="selected"{/if} value="5">5天</option> 
			<option  {if $_U.auto_result.timelimit_day_first==6} selected="selected"{/if} value="6">6天</option> 
			<option  {if $_U.auto_result.timelimit_day_first==7} selected="selected"{/if} value="7">7天</option> 
			<option  {if $_U.auto_result.timelimit_day_first==8} selected="selected"{/if} value="8">8天</option> 
			<option  {if $_U.auto_result.timelimit_day_first==9} selected="selected"{/if} value="9">9天</option> 
			<option  {if $_U.auto_result.timelimit_day_first==10} selected="selected"{/if} value="10">10天</option> 
			<option  {if $_U.auto_result.timelimit_day_first==11} selected="selected"{/if} value="11">11天</option> 
			<option  {if $_U.auto_result.timelimit_day_first==12} selected="selected"{/if} value="12">12天</option> 
            <option  {if $_U.auto_result.timelimit_day_first==13} selected="selected"{/if} value="13">13天</option> 
            <option  {if $_U.auto_result.timelimit_day_first==14} selected="selected"{/if} value="14">14天</option> 
            <option  {if $_U.auto_result.timelimit_day_first==15} selected="selected"{/if} value="15">15天</option> 
            <option  {if $_U.auto_result.timelimit_day_first==16} selected="selected"{/if} value="16">16天</option> 
            <option  {if $_U.auto_result.timelimit_day_first==17} selected="selected"{/if} value="17">17天</option> 
            <option  {if $_U.auto_result.timelimit_day_first==18} selected="selected"{/if} value="18">18天</option> 
            <option  {if $_U.auto_result.timelimit_day_first==19} selected="selected"{/if} value="19">19天</option> 
            <option  {if $_U.auto_result.timelimit_day_first==20} selected="selected"{/if} value="20">20天</option> 
            <option  {if $_U.auto_result.timelimit_day_first==21} selected="selected"{/if} value="21">21天</option> 
            <option  {if $_U.auto_result.timelimit_day_first==22} selected="selected"{/if} value="22">22天</option> 
            <option  {if $_U.auto_result.timelimit_day_first==23} selected="selected"{/if} value="23">23天</option> 
            <option  {if $_U.auto_result.timelimit_day_first==24} selected="selected"{/if} value="24">24天</option> 
            <option  {if $_U.auto_result.timelimit_day_first==25} selected="selected"{/if} value="25">25天</option> 
	</select>
		~
		<select id="timelimit_day_last" name="timelimit_day_last" style=" width: 80px;"> 
			<option value="0"  {if $_U.auto_result.timelimit_day_last==0} selected="selected"{/if}>不投天标</option> 
            <option value="1"  {if $_U.auto_result.timelimit_day_last==1} selected="selected"{/if}>1天</option> 
			<option value="2"  {if $_U.auto_result.timelimit_day_last==2} selected="selected"{/if}>2天</option> 
			<option value="3"  {if $_U.auto_result.timelimit_day_last==3} selected="selected"{/if}>3天</option> 
			<option value="4"  {if $_U.auto_result.timelimit_day_last==4} selected="selected"{/if}>4天</option> 
			<option value="5"  {if $_U.auto_result.timelimit_day_last==5} selected="selected"{/if}>5天</option> 
			<option value="6"  {if $_U.auto_result.timelimit_day_last==6} selected="selected"{/if}>6天</option> 
			<option value="7"  {if $_U.auto_result.timelimit_day_last==7} selected="selected"{/if}>7天</option> 
			<option value="8"  {if $_U.auto_result.timelimit_day_last==8} selected="selected"{/if}>8天</option> 
			<option value="9"  {if $_U.auto_result.timelimit_day_last==9} selected="selected"{/if}>9天</option> 
			<option value="10"  {if $_U.auto_result.timelimit_day_last==10} selected="selected"{/if}>10天</option> 
			<option value="11"  {if $_U.auto_result.timelimit_day_last==11} selected="selected"{/if}>11天</option> 
			<option value="12"  {if $_U.auto_result.timelimit_day_last==12} selected="selected"{/if}>12天</option> 
            <option value="13"  {if $_U.auto_result.timelimit_day_last==13} selected="selected"{/if}>13天</option> 
            <option value="14"  {if $_U.auto_result.timelimit_day_last==14} selected="selected"{/if}>14天</option> 
            <option value="15"  {if $_U.auto_result.timelimit_day_last==15} selected="selected"{/if}>15天</option> 
            <option value="16"  {if $_U.auto_result.timelimit_day_last==16} selected="selected"{/if}>16天</option> 
            <option value="17"  {if $_U.auto_result.timelimit_day_last==17} selected="selected"{/if}>17天</option> 
            <option value="18"  {if $_U.auto_result.timelimit_day_last==18} selected="selected"{/if}>18天</option> 
            <option value="19"  {if $_U.auto_result.timelimit_day_last==19} selected="selected"{/if}>19天</option> 
            <option value="20"  {if $_U.auto_result.timelimit_day_last==20} selected="selected"{/if}>20天</option> 
            <option value="21"  {if $_U.auto_result.timelimit_day_last==21} selected="selected"{/if}>21天</option> 
            <option value="22"  {if $_U.auto_result.timelimit_day_last==22} selected="selected"{/if}>22天</option> 
            <option value="23"  {if $_U.auto_result.timelimit_day_last==23} selected="selected"{/if}>23天</option> 
            <option value="24"  {if $_U.auto_result.timelimit_day_last==24} selected="selected"{/if}>24天</option> 
            <option value="25"  {if $_U.auto_result.timelimit_day_last==25} selected="selected"{/if}>25天</option> 
		</select>
                        </td> 
                        <td> 
                            <span></span> 
                        </td> 
                    </tr> 
                    
                 <tr> 
                        <th> 
                            年利率：
                        </th> 
                        <td> 
                           <input id="apr_status" type="checkbox" name="apr_status" value="1"  {if $_U.auto_result.apr_status==1} checked="checked"{/if}/><label for="">启用 利率范围：</label> 
                           
						<select name="apr_first" style=" width: 80px;"> 
														<option value="1"   {if $_U.auto_result.apr_first==1} selected="selected"{/if}>1%</option> 
														<option value="2"   {if $_U.auto_result.apr_first==2} selected="selected"{/if}>2%</option> 
														<option value="3"   {if $_U.auto_result.apr_first==3} selected="selected"{/if}>3%</option> 
														<option value="4"   {if $_U.auto_result.apr_first==4} selected="selected"{/if}>4%</option> 
														<option value="5"   {if $_U.auto_result.apr_first==5} selected="selected"{/if}>5%</option> 
														<option value="6"   {if $_U.auto_result.apr_first==6} selected="selected"{/if}>6%</option> 
														<option value="7"   {if $_U.auto_result.apr_first==7} selected="selected"{/if}>7%</option> 
														<option value="8"   {if $_U.auto_result.apr_first==8} selected="selected"{/if}>8%</option> 
														<option value="9"   {if $_U.auto_result.apr_first==9} selected="selected"{/if}>9%</option> 
														<option value="10"   {if $_U.auto_result.apr_first==10} selected="selected"{/if}>10%</option> 
														<option value="11"   {if $_U.auto_result.apr_first==11} selected="selected"{/if}>11%</option> 
														<option value="12"   {if $_U.auto_result.apr_first==12} selected="selected"{/if}>12%</option> 
														<option value="13"   {if $_U.auto_result.apr_first==13} selected="selected"{/if}>13%</option> 
														<option value="14"   {if $_U.auto_result.apr_first==14} selected="selected"{/if}>14%</option> 
														<option value="15"   {if $_U.auto_result.apr_first==15} selected="selected"{/if}>15%</option> 
														<option value="16"   {if $_U.auto_result.apr_first==16} selected="selected"{/if}>16%</option> 
														<option value="17"   {if $_U.auto_result.apr_first==17} selected="selected"{/if}>17%</option> 
														<option value="18"   {if $_U.auto_result.apr_first==18} selected="selected"{/if}>18%</option> 
														<option value="19"   {if $_U.auto_result.apr_first==19} selected="selected"{/if}>19%</option> 
														<option value="20"   {if $_U.auto_result.apr_first==20} selected="selected"{/if}>20%</option> 
														<option value="21"   {if $_U.auto_result.apr_first==21} selected="selected"{/if}>21%</option> 
														<option value="22"   {if $_U.auto_result.apr_first==22} selected="selected"{/if}>22%</option> 
														<option value="23"   {if $_U.auto_result.apr_first==23} selected="selected"{/if}>23%</option> 
														<option value="24"   {if $_U.auto_result.apr_first==24} selected="selected"{/if}>24%</option> 
														<option value="25"   {if $_U.auto_result.apr_first==25} selected="selected"{/if}>25%</option> 
							</select> 
                            ~
							<select name="apr_last" style=" width: 80px;"> 
						   								<option value="5"   {if $_U.auto_result.apr_last==5} selected="selected"{/if}>5%</option> 
														<option value="6"   {if $_U.auto_result.apr_last==6} selected="selected"{/if}>6%</option> 
														<option value="7"   {if $_U.auto_result.apr_last==7} selected="selected"{/if}>7%</option> 
														<option value="8"   {if $_U.auto_result.apr_last==8} selected="selected"{/if}>8%</option> 
														<option value="9"   {if $_U.auto_result.apr_last==9} selected="selected"{/if}>9%</option> 
														<option value="10"   {if $_U.auto_result.apr_last==10} selected="selected"{/if}>10%</option> 
														<option value="11"   {if $_U.auto_result.apr_last==11} selected="selected"{/if}>11%</option> 
														<option value="12"   {if $_U.auto_result.apr_last==12} selected="selected"{/if}>12%</option> 
														<option value="13"   {if $_U.auto_result.apr_last==13} selected="selected"{/if}>13%</option> 
														<option value="14"   {if $_U.auto_result.apr_last==14} selected="selected"{/if}>14%</option> 
														<option value="15"   {if $_U.auto_result.apr_last==15} selected="selected"{/if}>15%</option> 
														<option value="16"   {if $_U.auto_result.apr_last==16} selected="selected"{/if}>16%</option> 
														<option value="17"   {if $_U.auto_result.apr_last==17} selected="selected"{/if}>17%</option> 
														<option value="18"   {if $_U.auto_result.apr_last==18} selected="selected"{/if}>18%</option> 
														<option value="19"   {if $_U.auto_result.apr_last==19} selected="selected"{/if}>19%</option> 
														<option value="20"   {if $_U.auto_result.apr_last==20} selected="selected"{/if}>20%</option> 
														<option value="21"   {if $_U.auto_result.apr_last==21} selected="selected"{/if}>21%</option> 
														<option value="22"   {if $_U.auto_result.apr_last==22} selected="selected"{/if}>22%</option> 
														<option value="23"   {if $_U.auto_result.apr_last==23} selected="selected"{/if}>23%</option> 
														<option value="24"   {if $_U.auto_result.apr_last==24} selected="selected"{/if}>24%</option> 
														<option value="25"   {if $_U.auto_result.apr_last==25} selected="selected"{/if}>25%</option> 
							</select>	
                        </td> 
                        <td> 
                            <span>【不启用则没有此项限制】</span> 
                        </td> 
                    </tr> 
                <tr> 
                        <th> 
                            投标奖励：
                        </th> 
                        <td> 
                           <input  type="checkbox" name="award_status"  value="1" {if $_U.auto_result.award_status==1} checked="checked"{/if} />启用 <label for="">奖励必须大于等于</label> 
                           <select name="award_first" style=" width: 80px;"> 
	<option  value="0" {if $_U.auto_result.award_first=="0"} selected="selected"{/if}>0%</option> 
	<option value="0.1" {if $_U.auto_result.award_first=="0.1"} selected="selected"{/if}>0.1%</option> 
	<option value="0.2" {if $_U.auto_result.award_first=="0.2"} selected="selected"{/if}>0.2%</option> 
	<option value="0.3" {if $_U.auto_result.award_first=="0.3"} selected="selected"{/if}>0.3%</option> 
	<option value="0.4" {if $_U.auto_result.award_first=="0.4"} selected="selected"{/if}>0.4%</option> 
	<option value="0.5" {if $_U.auto_result.award_first=="0.5"} selected="selected"{/if}>0.5%</option> 
	<option value="0.6" {if $_U.auto_result.award_first=="0.6"} selected="selected"{/if}>0.6%</option> 
	<option value="0.7" {if $_U.auto_result.award_first=="0.17"} selected="selected"{/if}>0.7%</option> 
	<option value="0.8" {if $_U.auto_result.award_first=="0.8"} selected="selected"{/if}>0.8%</option> 
	<option value="0.9" {if $_U.auto_result.award_first=="0.9"} selected="selected"{/if}>0.9%</option> 
	<option value="1" {if $_U.auto_result.award_first=="1"} selected="selected"{/if}>1%</option> 
	<option value="1.5" {if $_U.auto_result.award_first=="1.5"} selected="selected"{/if}>1.5%</option> 
	<option value="2" {if $_U.auto_result.award_first=="2"} selected="selected"{/if}>2%</option> 
 
</select> 
                            ~
                       <!--     <select name="award_last" style=" width: 80px;"> 
	<option value="0.1" {if $_U.auto_result.award_first=="0.1"} selected="selected"{/if}>0.1%</option> 
	<option value="0.2" {if $_U.auto_result.award_first=="0.2"} selected="selected"{/if}>0.2%</option> 
	<option value="0.3" {if $_U.auto_result.award_first=="0.3"} selected="selected"{/if}>0.3%</option> 
	<option value="0.4" {if $_U.auto_result.award_first=="0.4"} selected="selected"{/if}>0.4%</option> 
	<option value="0.5" {if $_U.auto_result.award_first=="0.5"} selected="selected"{/if}>0.5%</option> 
	<option value="0.6" {if $_U.auto_result.award_first=="0.6"} selected="selected"{/if}>0.6%</option> 
	<option value="0.7" {if $_U.auto_result.award_first=="0.17"} selected="selected"{/if}>0.7%</option> 
	<option value="0.8" {if $_U.auto_result.award_first=="0.8"} selected="selected"{/if}>0.8%</option> 
	<option value="0.9" {if $_U.auto_result.award_first=="0.9"} selected="selected"{/if}>0.9%</option> 
	<option value="1" {if $_U.auto_result.award_first=="1"} selected="selected"{/if}>1%</option> 
	<option value="1.5" {if $_U.auto_result.award_first=="1.5"} selected="selected"{/if}>1.5%</option> 
	<option value="2" {if $_U.auto_result.award_first=="2"} selected="selected"{/if}>2%</option> 
 
</select> -->
                        </td> 
                        <td> 
                            <span>【不启用则没有此项限制】</span> 
                        </td> 
                    </tr> 
                 <tr> 
                        <th> 
                            投资标种：
                        </th> 
                        <td> 
                           
                           <!--<input id="vouch_status" type="checkbox" name="vouch_status" value="1" {if $_U.auto_result.vouch_status==1} checked="checked"{/if} /><label for="vouch_status">必须为抵押标</label>-->
                           <input id="fast_status" type="checkbox" name="fast_status" value="1" {if $_U.auto_result.fast_status==1} checked="checked"{/if} /><label for="fast_status">抵押标</label>
                           <input id="xin_status" type="checkbox" name="xin_status" value="1" {if $_U.auto_result.xin_status==1} checked="checked"{/if} /><label for="xin_status">信用标</label>
                           <input id="jin_status" type="checkbox" name="jin_status" value="1" {if $_U.auto_result.jin_status==1} checked="checked"{/if} /><label for="jin_status">净值标</label>
                           <!--
                           <input id="tuijian_status" type="checkbox" name="tuijian_status"  value="1" {if $_U.auto_result.tuijian_status==1} checked="checked"{/if}/><label for="tuijian_status">必须为推荐标</label> 
                           -->
                        </td>
                        <td> 
                            <span>【选择您的投资标种，可多选】</span> 
                        </td> 
                    </tr> 
                </table> 
                </div> 
        </div> 
        <div style="text-align:center; clear:both"> 
		<input type="hidden" name="auto_id" value="{$_U.auto_result.id}" />
        <input type="submit" class="btn-action" name="" value="保存" id=""  /> 
        <input type="reset" class="btn-action" name="" value="取消" id=""  /> 
        </div> 
    </div> 
		</form>
	{/if}
		<script> 
var url = "{$_U.query_url}/{$_U.query_type}";
{literal}
function sousuo(urla){
	if (urla!="") url = urla;
	var _url = "";
	var dotime1 = $("#dotime1").val();
	var keywords = $("#keywords").val();
	var username = $("#username").val();
	var status = $("#status").val();
	var reply_status = $("#reply_status").val();
	var tender_username = $("#tender_username").val();
	var dotime2 = $("#dotime2").val();
	if (username!=null){
		 _url += "&username="+username;
	}
	if (tender_username!=null){
		 _url += "&tender_username="+tender_username;
	}
	if (status!=null){
		 _url += "&status="+status;
	}
	if (reply_status!=null){
		 _url += "&reply_status="+reply_status;
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
	location.href=url+_url;
}
 
</script>
{/literal}
</div>
</div>
</div>
</div>
<!--用户中心的主栏目 结束-->
<script src="{$tempdir}/media/js/modal.js"></script>
<script src="{$tempdir}/media/js/tab.js"></script>
<script src="{$tempdir}/media/js/alert.js"></script>
<script src="{$tempdir}/media/js/transition.js"></script>
{include file="user_footer.html"}