<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
<? $this->magic_include(array('file' => "user_header.html", 'vars' => array()));?>
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/modal.css" rel="stylesheet" type="text/css" />
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/auto_user.css" rel="stylesheet" type="text/css" />

<style type="text/css">
.auto_borrow_style tr{line-height:30px}
</style>


<!--用户中心的主栏目 开始-->
<div id="main" class="clearfix">
<div class="wrap950 ">
	<!--左边的导航 开始-->
	<div class="user_left">
		<? $this->magic_include(array('file' => "user_menu.html", 'vars' => array()));?>
	</div>
	<!--左边的导航 结束-->
	
	<!--右边的内容 开始-->
	<div class="user_right">
		<div class="user_right_menu">
			<ul id="tab" class="list-tab clearfix">
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="auto"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/auto">自动投标列表</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="auto_new"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/auto_new">添加自动投标</a></li>
			</ul>
		</div>
		
		<div class="user_right_main" style="text-align:left;">
		<!--自动投标 开始-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="auto"): ?>
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
				<? $this->magic_vars['query_type']='GetAutoList';$data = array('limit'=>'all','order'=>'order','user_id'=>$this->magic_vars['_G']['user_id']);$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetAutoList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<span style="display:none"><? if (!isset($this->magic_vars['i'])) $this->magic_vars['i'] = ''; echo $this->magic_vars['i']++; ?></span>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td ><? if (!isset($this->magic_vars['i'])) $this->magic_vars['i'] = ''; echo $this->magic_vars['i']; ?></td>
					<td ><? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==1): ?>启用<? else: ?>未启用<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['var']['tender_type'])) $this->magic_vars['var']['tender_type']=''; ;if (  $this->magic_vars['var']['tender_type']==1): ?>按金额投标<? else: ?>按比例投标<? endif; ?></td>
					<td>￥<? if (!isset($this->magic_vars['var']['tender_account'])) $this->magic_vars['var']['tender_account'] = ''; echo $this->magic_vars['var']['tender_account']; ?></td>
					<td><!--<? if (!isset($this->magic_vars['var']['tender_scale'])) $this->magic_vars['var']['tender_scale'] = ''; echo $this->magic_vars['var']['tender_scale']; ?>-->   <? if (!isset($this->magic_vars['var']['apr_first'])) $this->magic_vars['var']['apr_first'] = ''; echo $this->magic_vars['var']['apr_first']; ?>% ~ <? if (!isset($this->magic_vars['var']['apr_last'])) $this->magic_vars['var']['apr_last'] = ''; echo $this->magic_vars['var']['apr_last']; ?>%</td>
					<td><? if (!isset($this->magic_vars['var']['timelimit_status'])) $this->magic_vars['var']['timelimit_status']=''; ;if (  $this->magic_vars['var']['timelimit_status']==1): ?><? if (!isset($this->magic_vars['var']['timelimit_month_first'])) $this->magic_vars['var']['timelimit_month_first'] = ''; echo $this->magic_vars['var']['timelimit_month_first']; ?>~<? if (!isset($this->magic_vars['var']['timelimit_month_last'])) $this->magic_vars['var']['timelimit_month_last'] = ''; echo $this->magic_vars['var']['timelimit_month_last']; ?><? else: ?>不启用<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['var']['borrow_credit_status'])) $this->magic_vars['var']['borrow_credit_status']=''; ;if (  $this->magic_vars['var']['borrow_credit_status']==1): ?><? if (!isset($this->magic_vars['var']['borrow_credit_first'])) $this->magic_vars['var']['borrow_credit_first'] = ''; echo $this->magic_vars['var']['borrow_credit_first']; ?>~<? if (!isset($this->magic_vars['var']['borrow_credit_last'])) $this->magic_vars['var']['borrow_credit_last'] = ''; echo $this->magic_vars['var']['borrow_credit_last']; ?><? else: ?>不启用<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['var']['award_status'])) $this->magic_vars['var']['award_status']=''; ;if (  $this->magic_vars['var']['award_status']==1): ?><? if (!isset($this->magic_vars['var']['award_first'])) $this->magic_vars['var']['award_first'] = ''; echo $this->magic_vars['var']['award_first']; ?>~<? if (!isset($this->magic_vars['var']['award_last'])) $this->magic_vars['var']['award_last'] = ''; echo $this->magic_vars['var']['award_last']; ?><? else: ?>不启用<? endif; ?></td>
                    <td><? if (!isset($this->magic_vars['var']['fast_status'])) $this->magic_vars['var']['fast_status']=''; ;if (  $this->magic_vars['var']['fast_status']==1): ?>是<? else: ?>不启用<? endif; ?></td>
                    <td><? if (!isset($this->magic_vars['var']['xin_status'])) $this->magic_vars['var']['xin_status']=''; ;if (  $this->magic_vars['var']['xin_status']==1): ?>是<? else: ?>不启用<? endif; ?></td>
                    <td><? if (!isset($this->magic_vars['var']['jin_status'])) $this->magic_vars['var']['jin_status']=''; ;if (  $this->magic_vars['var']['jin_status']==1): ?>是<? else: ?>不启用<? endif; ?></td>
					<td><a href="/index.php?user&q=code/borrow/auto_new&id=<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>">修改</a> <a href="#" onclick="javascript:if(confirm('你确定要删除此自动投标吗？')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/auto_del&id=<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>'">删除</a></td>
				</tr>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</form>	
		</table>
	
		</div>
		
		
		<!--自动投标 结束-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="auto_new"): ?>
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
                           <input id="status" type="checkbox" name="status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['status'])) $this->magic_vars['_U']['auto_result']['status']=''; ;if (  $this->magic_vars['_U']['auto_result']['status']==1): ?> checked="checked" <? endif; ?>/><label for="">是否启用</label><span>(如果不选中则当前规则不会生效)</span> 
                        </td> 
                    </tr> 
                    <tr> 
                        <th> 
                            金额：
                        </th> 
                        <td style="width:550px"> 
                            <span style='display:none;'><input  type="radio" name="tender_type" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['tender_type'])) $this->magic_vars['_U']['auto_result']['tender_type']='';if (!isset($this->magic_vars['_U']['auto_result']['tender_type'])) $this->magic_vars['_U']['auto_result']['tender_type']=''; ;if (  $this->magic_vars['_U']['auto_result']['tender_type']==1 ||  $this->magic_vars['_U']['auto_result']['tender_type']==""): ?> checked="checked"<? endif; ?>  /></span> <label for="tender_type">每次投标</label> 
                            <input name="tender_account" type="text" maxlength="5" id="tender_account"  style="width:80px;" value="<? if (!isset($this->magic_vars['_U']['auto_result']['tender_account'])) $this->magic_vars['_U']['auto_result']['tender_account'] = ''; echo $this->magic_vars['_U']['auto_result']['tender_account']; ?>" />元<span>(最少50元)</span> 
                           <!-- <span ><input  type="radio" name="tender_type" value="2"  <? if (!isset($this->magic_vars['_U']['auto_result']['tender_type'])) $this->magic_vars['_U']['auto_result']['tender_type']=''; ;if (  $this->magic_vars['_U']['auto_result']['tender_type']==2): ?> checked="checked"<? endif; ?>  /><label for="tender_type">按比例投标</label></span> 
                            <input name="tender_scale" type="text" value="<? if (!isset($this->magic_vars['_U']['auto_result']['tender_scale'])) $this->magic_vars['_U']['auto_result']['tender_scale'] = ''; echo $this->magic_vars['_U']['auto_result']['tender_scale']; ?>" maxlength="2"  style="width:80px;" />%<span>(只能在1%~<span id="">20</span>%)</span> -->
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
                            <input id="video_status" type="checkbox" name="video_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['video_status'])) $this->magic_vars['_U']['auto_result']['video_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['video_status']==1): ?> checked="checked"<? endif; ?> /><label for="video_status">必须通过视频认证</label> 
                            <input id="scene_status" type="checkbox" name="scene_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['scene_status'])) $this->magic_vars['_U']['auto_result']['scene_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['scene_status']==1): ?> checked="checked"<? endif; ?> /><label for="scene_status">必须通过现场认证</label> 
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
                            <input id="my_friend" type="checkbox" name="my_friend" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['my_friend'])) $this->magic_vars['_U']['auto_result']['my_friend']=''; ;if (  $this->magic_vars['_U']['auto_result']['my_friend']==1): ?> checked="checked"<? endif; ?>/><label for="my_friend">必须是我的好友</label> 
                            <input id="not_black" type="checkbox" name="not_black" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['not_black'])) $this->magic_vars['_U']['auto_result']['not_black']=''; ;if (  $this->magic_vars['_U']['auto_result']['not_black']==1): ?> checked="checked"<? endif; ?>/><label for="not_black">必须不在我的黑名单中</label> 
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
                            <input id="late_status" type="checkbox" name="late_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['late_status'])) $this->magic_vars['_U']['auto_result']['late_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_status']==1): ?> checked="checked"<? endif; ?> /><label for="late_status">逾期次数必须小于等于(≤)</label> 
                            <select name="late_times" id="late_times" style=" width: 50px;"> 
	<option <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']='';if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==0 ||  $this->magic_vars['_U']['auto_result']['late_times']==""): ?> selected="selected"<? endif; ?> value="0">0</option> 
	<option value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==1): ?> selected="selected"<? endif; ?> >1</option> 
	<option value="2" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==2): ?> selected="selected"<? endif; ?> >2</option> 
	<option value="3" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==3): ?> selected="selected"<? endif; ?> >3</option> 
	<option value="4" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==4): ?> selected="selected"<? endif; ?> >4</option> 
	<option value="5" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==5): ?> selected="selected"<? endif; ?> >5</option> 
	<option value="6" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==6): ?> selected="selected"<? endif; ?> >6</option> 
	<option value="7" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==7): ?> selected="selected"<? endif; ?> >7</option> 
	<option value="8" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==8): ?> selected="selected"<? endif; ?> >8</option> 
	<option value="9" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==9): ?> selected="selected"<? endif; ?> >9</option> 
	<option value="10" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==10): ?> selected="selected"<? endif; ?> >10</option> 
 
</select> 
                            
                        </td> 
                        <td> 
                           <input id="dianfu_status" type="checkbox" name="dianfu_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_status'])) $this->magic_vars['_U']['auto_result']['dianfu_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_status']==1): ?> checked="checked"<? endif; ?>  /><label for="dianfu_status">被垫付次数必须小于等于(≤)</label> 
                            <select name="dianfu_times" id="dianfu_times" style=" width: 50px;"> 
	<option <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']='';if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==0 ||  $this->magic_vars['_U']['auto_result']['dianfu_times']==""): ?> selected="selected"<? endif; ?> value="0">0</option> 
	<option value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==1): ?> selected="selected"<? endif; ?> >1</option> 
	<option value="2" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==2): ?> selected="selected"<? endif; ?> >2</option> 
	<option value="3" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==3): ?> selected="selected"<? endif; ?> >3</option> 
	<option value="4" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==4): ?> selected="selected"<? endif; ?> >4</option> 
	<option value="5" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==5): ?> selected="selected"<? endif; ?> >5</option> 
	<option value="6" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==6): ?> selected="selected"<? endif; ?> >6</option> 
	<option value="7" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==7): ?> selected="selected"<? endif; ?> >7</option> 
	<option value="8" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==8): ?> selected="selected"<? endif; ?> >8</option> 
	<option value="9" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==9): ?> selected="selected"<? endif; ?> >9</option> 
	<option value="10" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==10): ?> selected="selected"<? endif; ?> >10</option> 
 
</select> 
                        </td> 
                    </tr> 
                    <tr> 
                        <th> 
                            黑名单：
                        </th> 
                        <td style="width:380px"> 
                            <input type="checkbox" name="black_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['black_status'])) $this->magic_vars['_U']['auto_result']['black_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_status']==1): ?> checked="checked"<? endif; ?> /><label for="black_status">被网站</label> 
                            <select name="black_user" id="black_user" style=" width: 90px;"> 
	<option value="0" <? if (!isset($this->magic_vars['_U']['auto_result']['black_user'])) $this->magic_vars['_U']['auto_result']['black_user']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_user']==0): ?> selected="selected"<? endif; ?>>所有用户</option> 
	<option value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['black_user'])) $this->magic_vars['_U']['auto_result']['black_user']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_user']==1): ?> selected="selected"<? endif; ?>>所有VIP</option> 
	<option value="2" <? if (!isset($this->magic_vars['_U']['auto_result']['black_user'])) $this->magic_vars['_U']['auto_result']['black_user']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_user']==2): ?> selected="selected"<? endif; ?>>银牌会员</option> 
	<option value="3" <? if (!isset($this->magic_vars['_U']['auto_result']['black_user'])) $this->magic_vars['_U']['auto_result']['black_user']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_user']==3): ?> selected="selected"<? endif; ?>>金牌会员</option> 
	<option value="4" <? if (!isset($this->magic_vars['_U']['auto_result']['black_user'])) $this->magic_vars['_U']['auto_result']['black_user']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_user']==4): ?> selected="selected"<? endif; ?>>白金会员</option> 
 
</select> 
                            <label for="black_times" id="black_times">列为黑名单必须少于(≤)</label> 
                            <select name="black_times" id="black_times" style=" width: 50px;"> 
	<option <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']='';if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==0 ||  $this->magic_vars['_U']['auto_result']['black_times']==""): ?> selected="selected"<? endif; ?> value="0">0</option> 
	<option value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==1): ?> selected="selected"<? endif; ?> >1</option> 
	<option value="2" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==2): ?> selected="selected"<? endif; ?> >2</option> 
	<option value="3" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==3): ?> selected="selected"<? endif; ?> >3</option> 
	<option value="4" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==4): ?> selected="selected"<? endif; ?> >4</option> 
	<option value="5" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==5): ?> selected="selected"<? endif; ?> >5</option> 
	<option value="6" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==6): ?> selected="selected"<? endif; ?> >6</option> 
	<option value="7" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==7): ?> selected="selected"<? endif; ?> >7</option> 
	<option value="8" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==8): ?> selected="selected"<? endif; ?> >8</option> 
	<option value="9" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==9): ?> selected="selected"<? endif; ?> >9</option> 
	<option value="10" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==10): ?> selected="selected"<? endif; ?> >10</option>
	<option value="15" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==15): ?> selected="selected"<? endif; ?>>15</option> 
	<option value="20" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==20): ?> selected="selected"<? endif; ?>>20</option> 
	<option value="25" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==25): ?> selected="selected"<? endif; ?>>25</option> 
	<option value="30" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==30): ?> selected="selected"<? endif; ?>>30</option> 
	<option value="40" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==40): ?> selected="selected"<? endif; ?>>40</option> 
	<option value="50" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==50): ?> selected="selected"<? endif; ?>>50</option> 
	<option value="80" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==80): ?> selected="selected"<? endif; ?>>80</option> 
	<option value="100" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==100): ?> selected="selected"<? endif; ?>>100</option> 
	<option value="150" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==150): ?> selected="selected"<? endif; ?>>150</option> 
	<option value="200" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==200): ?> selected="selected"<? endif; ?>>200</option> 
	<option value="250" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==250): ?> selected="selected"<? endif; ?>>250</option> 
	<option value="300" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==300): ?> selected="selected"<? endif; ?>>300</option> 
	<option value="500" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==500): ?> selected="selected"<? endif; ?>>500</option> 
	<option value="800" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==800): ?> selected="selected"<? endif; ?>>800</option> 
	<option value="1000" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==1000): ?> selected="selected"<? endif; ?>>1000</option> 
 
</select><label for="" id="">次</label> 
                        </td> 
                        <td><input id="not_late_black" type="checkbox" value="1" name="not_late_black" <? if (!isset($this->magic_vars['_U']['auto_result']['not_late_black'])) $this->magic_vars['_U']['auto_result']['not_late_black']=''; ;if (  $this->magic_vars['_U']['auto_result']['not_late_black']==1): ?> checked="checked"<? endif; ?>/><label for="not_late_black">必须不在网站逾期黑名单中</label></td> 
                        </tr> 
                    -->
                    <!--<tr> 
                        <th> 
                            信用积分：
                        </th> 
                        <td> 
                           <input id="borrow_credit_status" type="checkbox" name="borrow_credit_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['borrow_credit_status'])) $this->magic_vars['_U']['auto_result']['borrow_credit_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['borrow_credit_status']==1): ?> checked="checked"<? endif; ?>/><label for="borrow_credit_status">积分必须为</label> 
                           <input name="borrow_credit_first" type="text" value="<? if (!isset($this->magic_vars['_U']['auto_result']['borrow_credit_first'])) $this->magic_vars['_U']['auto_result']['borrow_credit_first'] = ''; echo $this->magic_vars['_U']['auto_result']['borrow_credit_first']; ?>" maxlength="6" id="borrow_credit_first" style="width:50px;" />~<input name="borrow_credit_last" type="text" value="<? if (!isset($this->magic_vars['_U']['auto_result']['borrow_credit_last'])) $this->magic_vars['_U']['auto_result']['borrow_credit_last'] = ''; echo $this->magic_vars['_U']['auto_result']['borrow_credit_last']; ?>" maxlength="6" id="borrow_credit_last"  style="width:50px;" /> 
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
                            <input id="borrow_style_status" type="checkbox" name="borrow_style_status" value="1"  <? if (!isset($this->magic_vars['_U']['auto_result']['borrow_style_status'])) $this->magic_vars['_U']['auto_result']['borrow_style_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['borrow_style_status']==1): ?> checked="checked"<? endif; ?>/><label for="">启用  还款方式必须为</label> 
                            <select name="borrow_style" id="borrow_style" > 
	<option value="0"  <? if (!isset($this->magic_vars['_U']['auto_result']['borrow_style'])) $this->magic_vars['_U']['auto_result']['borrow_style']=''; ;if (  $this->magic_vars['_U']['auto_result']['borrow_style']==0): ?> selected="selected"<? endif; ?>>按月分期还款</option> 
 
</select> 
                        </td> 
                        <td><span>【不选中则没有此项限制】</span></td> 
                    </tr> 
                    <tr> 
                        <th> 
                            借款期限：
                        </th> 
                        <td style="width:400px"> 
                           <input id="timelimit_status"  name="timelimit_status" type="radio" value="0" checked="checked" <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_status'])) $this->magic_vars['_U']['auto_result']['timelimit_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_status']==0): ?> checked="checked"<? endif; ?>/><label for="">不限定期限</label> 
                           <input id="timelimit_status" type="radio" name="timelimit_status" value="1"   name="timelimit_status" <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_status'])) $this->magic_vars['_U']['auto_result']['timelimit_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_status']==1): ?> checked="checked"<? endif; ?>/><label for="">按照下面规则</label> 
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
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==0): ?> selected="selected"<? endif; ?> value="0">不投月标</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==1): ?> selected="selected"<? endif; ?> value="1">1个月</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==2): ?> selected="selected"<? endif; ?> value="2">2个月</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==3): ?> selected="selected"<? endif; ?> value="3">3个月</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==4): ?> selected="selected"<? endif; ?> value="4">4个月</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==5): ?> selected="selected"<? endif; ?> value="5">5个月</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==6): ?> selected="selected"<? endif; ?> value="6">6个月</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==7): ?> selected="selected"<? endif; ?> value="7">7个月</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==8): ?> selected="selected"<? endif; ?> value="8">8个月</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==9): ?> selected="selected"<? endif; ?> value="9">9个月</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==10): ?> selected="selected"<? endif; ?> value="10">10个月</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==11): ?> selected="selected"<? endif; ?> value="11">11个月</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==12): ?> selected="selected"<? endif; ?> value="12">12个月</option> 
		</select>
			~
		<select id="timelimit_month_last" name="timelimit_month_last" style=" width: 80px;"> 
			<option value="0"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==0): ?> selected="selected"<? endif; ?>>不投月标</option> 
            <option value="1"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==1): ?> selected="selected"<? endif; ?>>1个月</option> 
			<option value="2"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==2): ?> selected="selected"<? endif; ?>>2个月</option> 
			<option value="3"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==3): ?> selected="selected"<? endif; ?>>3个月</option> 
			<option value="4"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==4): ?> selected="selected"<? endif; ?>>4个月</option> 
			<option value="5"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==5): ?> selected="selected"<? endif; ?>>5个月</option> 
			<option value="6"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==6): ?> selected="selected"<? endif; ?>>6个月</option> 
			<option value="7"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==7): ?> selected="selected"<? endif; ?>>7个月</option> 
			<option value="8"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==8): ?> selected="selected"<? endif; ?>>8个月</option> 
			<option value="9"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==9): ?> selected="selected"<? endif; ?>>9个月</option> 
			<option value="10"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==10): ?> selected="selected"<? endif; ?>>10个月</option> 
			<option value="11"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==11): ?> selected="selected"<? endif; ?>>11个月</option> 
			<option value="12"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==12): ?> selected="selected"<? endif; ?>>12个月</option> 
		</select>
                                                    
                        <br/>天标：
                        
	<select id="timelimit_day_first" name="timelimit_day_first" style=" width: 80px;"> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==0): ?> selected="selected"<? endif; ?> value="0">不投天标</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==1): ?> selected="selected"<? endif; ?> value="1">1天</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==2): ?> selected="selected"<? endif; ?> value="2">2天</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==3): ?> selected="selected"<? endif; ?> value="3">3天</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==4): ?> selected="selected"<? endif; ?> value="4">4天</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==5): ?> selected="selected"<? endif; ?> value="5">5天</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==6): ?> selected="selected"<? endif; ?> value="6">6天</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==7): ?> selected="selected"<? endif; ?> value="7">7天</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==8): ?> selected="selected"<? endif; ?> value="8">8天</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==9): ?> selected="selected"<? endif; ?> value="9">9天</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==10): ?> selected="selected"<? endif; ?> value="10">10天</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==11): ?> selected="selected"<? endif; ?> value="11">11天</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==12): ?> selected="selected"<? endif; ?> value="12">12天</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==13): ?> selected="selected"<? endif; ?> value="13">13天</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==14): ?> selected="selected"<? endif; ?> value="14">14天</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==15): ?> selected="selected"<? endif; ?> value="15">15天</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==16): ?> selected="selected"<? endif; ?> value="16">16天</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==17): ?> selected="selected"<? endif; ?> value="17">17天</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==18): ?> selected="selected"<? endif; ?> value="18">18天</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==19): ?> selected="selected"<? endif; ?> value="19">19天</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==20): ?> selected="selected"<? endif; ?> value="20">20天</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==21): ?> selected="selected"<? endif; ?> value="21">21天</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==22): ?> selected="selected"<? endif; ?> value="22">22天</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==23): ?> selected="selected"<? endif; ?> value="23">23天</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==24): ?> selected="selected"<? endif; ?> value="24">24天</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==25): ?> selected="selected"<? endif; ?> value="25">25天</option> 
	</select>
		~
		<select id="timelimit_day_last" name="timelimit_day_last" style=" width: 80px;"> 
			<option value="0"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==0): ?> selected="selected"<? endif; ?>>不投天标</option> 
            <option value="1"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==1): ?> selected="selected"<? endif; ?>>1天</option> 
			<option value="2"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==2): ?> selected="selected"<? endif; ?>>2天</option> 
			<option value="3"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==3): ?> selected="selected"<? endif; ?>>3天</option> 
			<option value="4"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==4): ?> selected="selected"<? endif; ?>>4天</option> 
			<option value="5"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==5): ?> selected="selected"<? endif; ?>>5天</option> 
			<option value="6"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==6): ?> selected="selected"<? endif; ?>>6天</option> 
			<option value="7"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==7): ?> selected="selected"<? endif; ?>>7天</option> 
			<option value="8"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==8): ?> selected="selected"<? endif; ?>>8天</option> 
			<option value="9"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==9): ?> selected="selected"<? endif; ?>>9天</option> 
			<option value="10"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==10): ?> selected="selected"<? endif; ?>>10天</option> 
			<option value="11"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==11): ?> selected="selected"<? endif; ?>>11天</option> 
			<option value="12"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==12): ?> selected="selected"<? endif; ?>>12天</option> 
            <option value="13"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==13): ?> selected="selected"<? endif; ?>>13天</option> 
            <option value="14"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==14): ?> selected="selected"<? endif; ?>>14天</option> 
            <option value="15"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==15): ?> selected="selected"<? endif; ?>>15天</option> 
            <option value="16"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==16): ?> selected="selected"<? endif; ?>>16天</option> 
            <option value="17"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==17): ?> selected="selected"<? endif; ?>>17天</option> 
            <option value="18"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==18): ?> selected="selected"<? endif; ?>>18天</option> 
            <option value="19"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==19): ?> selected="selected"<? endif; ?>>19天</option> 
            <option value="20"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==20): ?> selected="selected"<? endif; ?>>20天</option> 
            <option value="21"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==21): ?> selected="selected"<? endif; ?>>21天</option> 
            <option value="22"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==22): ?> selected="selected"<? endif; ?>>22天</option> 
            <option value="23"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==23): ?> selected="selected"<? endif; ?>>23天</option> 
            <option value="24"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==24): ?> selected="selected"<? endif; ?>>24天</option> 
            <option value="25"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==25): ?> selected="selected"<? endif; ?>>25天</option> 
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
                           <input id="apr_status" type="checkbox" name="apr_status" value="1"  <? if (!isset($this->magic_vars['_U']['auto_result']['apr_status'])) $this->magic_vars['_U']['auto_result']['apr_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_status']==1): ?> checked="checked"<? endif; ?>/><label for="">启用 利率范围：</label> 
                           
						<select name="apr_first" style=" width: 80px;"> 
														<option value="1"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==1): ?> selected="selected"<? endif; ?>>1%</option> 
														<option value="2"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==2): ?> selected="selected"<? endif; ?>>2%</option> 
														<option value="3"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==3): ?> selected="selected"<? endif; ?>>3%</option> 
														<option value="4"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==4): ?> selected="selected"<? endif; ?>>4%</option> 
														<option value="5"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==5): ?> selected="selected"<? endif; ?>>5%</option> 
														<option value="6"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==6): ?> selected="selected"<? endif; ?>>6%</option> 
														<option value="7"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==7): ?> selected="selected"<? endif; ?>>7%</option> 
														<option value="8"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==8): ?> selected="selected"<? endif; ?>>8%</option> 
														<option value="9"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==9): ?> selected="selected"<? endif; ?>>9%</option> 
														<option value="10"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==10): ?> selected="selected"<? endif; ?>>10%</option> 
														<option value="11"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==11): ?> selected="selected"<? endif; ?>>11%</option> 
														<option value="12"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==12): ?> selected="selected"<? endif; ?>>12%</option> 
														<option value="13"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==13): ?> selected="selected"<? endif; ?>>13%</option> 
														<option value="14"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==14): ?> selected="selected"<? endif; ?>>14%</option> 
														<option value="15"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==15): ?> selected="selected"<? endif; ?>>15%</option> 
														<option value="16"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==16): ?> selected="selected"<? endif; ?>>16%</option> 
														<option value="17"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==17): ?> selected="selected"<? endif; ?>>17%</option> 
														<option value="18"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==18): ?> selected="selected"<? endif; ?>>18%</option> 
														<option value="19"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==19): ?> selected="selected"<? endif; ?>>19%</option> 
														<option value="20"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==20): ?> selected="selected"<? endif; ?>>20%</option> 
														<option value="21"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==21): ?> selected="selected"<? endif; ?>>21%</option> 
														<option value="22"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==22): ?> selected="selected"<? endif; ?>>22%</option> 
														<option value="23"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==23): ?> selected="selected"<? endif; ?>>23%</option> 
														<option value="24"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==24): ?> selected="selected"<? endif; ?>>24%</option> 
														<option value="25"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==25): ?> selected="selected"<? endif; ?>>25%</option> 
							</select> 
                            ~
							<select name="apr_last" style=" width: 80px;"> 
						   								<option value="5"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==5): ?> selected="selected"<? endif; ?>>5%</option> 
														<option value="6"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==6): ?> selected="selected"<? endif; ?>>6%</option> 
														<option value="7"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==7): ?> selected="selected"<? endif; ?>>7%</option> 
														<option value="8"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==8): ?> selected="selected"<? endif; ?>>8%</option> 
														<option value="9"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==9): ?> selected="selected"<? endif; ?>>9%</option> 
														<option value="10"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==10): ?> selected="selected"<? endif; ?>>10%</option> 
														<option value="11"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==11): ?> selected="selected"<? endif; ?>>11%</option> 
														<option value="12"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==12): ?> selected="selected"<? endif; ?>>12%</option> 
														<option value="13"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==13): ?> selected="selected"<? endif; ?>>13%</option> 
														<option value="14"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==14): ?> selected="selected"<? endif; ?>>14%</option> 
														<option value="15"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==15): ?> selected="selected"<? endif; ?>>15%</option> 
														<option value="16"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==16): ?> selected="selected"<? endif; ?>>16%</option> 
														<option value="17"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==17): ?> selected="selected"<? endif; ?>>17%</option> 
														<option value="18"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==18): ?> selected="selected"<? endif; ?>>18%</option> 
														<option value="19"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==19): ?> selected="selected"<? endif; ?>>19%</option> 
														<option value="20"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==20): ?> selected="selected"<? endif; ?>>20%</option> 
														<option value="21"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==21): ?> selected="selected"<? endif; ?>>21%</option> 
														<option value="22"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==22): ?> selected="selected"<? endif; ?>>22%</option> 
														<option value="23"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==23): ?> selected="selected"<? endif; ?>>23%</option> 
														<option value="24"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==24): ?> selected="selected"<? endif; ?>>24%</option> 
														<option value="25"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==25): ?> selected="selected"<? endif; ?>>25%</option> 
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
                           <input  type="checkbox" name="award_status"  value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['award_status'])) $this->magic_vars['_U']['auto_result']['award_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_status']==1): ?> checked="checked"<? endif; ?> />启用 <label for="">奖励必须大于等于</label> 
                           <select name="award_first" style=" width: 80px;"> 
	<option  value="0" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0"): ?> selected="selected"<? endif; ?>>0%</option> 
	<option value="0.1" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.1"): ?> selected="selected"<? endif; ?>>0.1%</option> 
	<option value="0.2" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.2"): ?> selected="selected"<? endif; ?>>0.2%</option> 
	<option value="0.3" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.3"): ?> selected="selected"<? endif; ?>>0.3%</option> 
	<option value="0.4" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.4"): ?> selected="selected"<? endif; ?>>0.4%</option> 
	<option value="0.5" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.5"): ?> selected="selected"<? endif; ?>>0.5%</option> 
	<option value="0.6" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.6"): ?> selected="selected"<? endif; ?>>0.6%</option> 
	<option value="0.7" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.17"): ?> selected="selected"<? endif; ?>>0.7%</option> 
	<option value="0.8" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.8"): ?> selected="selected"<? endif; ?>>0.8%</option> 
	<option value="0.9" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.9"): ?> selected="selected"<? endif; ?>>0.9%</option> 
	<option value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="1"): ?> selected="selected"<? endif; ?>>1%</option> 
	<option value="1.5" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="1.5"): ?> selected="selected"<? endif; ?>>1.5%</option> 
	<option value="2" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="2"): ?> selected="selected"<? endif; ?>>2%</option> 
 
</select> 
                            ~
                       <!--     <select name="award_last" style=" width: 80px;"> 
	<option value="0.1" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.1"): ?> selected="selected"<? endif; ?>>0.1%</option> 
	<option value="0.2" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.2"): ?> selected="selected"<? endif; ?>>0.2%</option> 
	<option value="0.3" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.3"): ?> selected="selected"<? endif; ?>>0.3%</option> 
	<option value="0.4" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.4"): ?> selected="selected"<? endif; ?>>0.4%</option> 
	<option value="0.5" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.5"): ?> selected="selected"<? endif; ?>>0.5%</option> 
	<option value="0.6" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.6"): ?> selected="selected"<? endif; ?>>0.6%</option> 
	<option value="0.7" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.17"): ?> selected="selected"<? endif; ?>>0.7%</option> 
	<option value="0.8" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.8"): ?> selected="selected"<? endif; ?>>0.8%</option> 
	<option value="0.9" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.9"): ?> selected="selected"<? endif; ?>>0.9%</option> 
	<option value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="1"): ?> selected="selected"<? endif; ?>>1%</option> 
	<option value="1.5" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="1.5"): ?> selected="selected"<? endif; ?>>1.5%</option> 
	<option value="2" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="2"): ?> selected="selected"<? endif; ?>>2%</option> 
 
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
                           
                           <!--<input id="vouch_status" type="checkbox" name="vouch_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['vouch_status'])) $this->magic_vars['_U']['auto_result']['vouch_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['vouch_status']==1): ?> checked="checked"<? endif; ?> /><label for="vouch_status">必须为抵押标</label>-->
                           <input id="fast_status" type="checkbox" name="fast_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['fast_status'])) $this->magic_vars['_U']['auto_result']['fast_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['fast_status']==1): ?> checked="checked"<? endif; ?> /><label for="fast_status">抵押标</label>
                           <input id="xin_status" type="checkbox" name="xin_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['xin_status'])) $this->magic_vars['_U']['auto_result']['xin_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['xin_status']==1): ?> checked="checked"<? endif; ?> /><label for="xin_status">信用标</label>
                           <input id="jin_status" type="checkbox" name="jin_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['jin_status'])) $this->magic_vars['_U']['auto_result']['jin_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['jin_status']==1): ?> checked="checked"<? endif; ?> /><label for="jin_status">净值标</label>
                           <!--
                           <input id="tuijian_status" type="checkbox" name="tuijian_status"  value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['tuijian_status'])) $this->magic_vars['_U']['auto_result']['tuijian_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['tuijian_status']==1): ?> checked="checked"<? endif; ?>/><label for="tuijian_status">必须为推荐标</label> 
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
		<input type="hidden" name="auto_id" value="<? if (!isset($this->magic_vars['_U']['auto_result']['id'])) $this->magic_vars['_U']['auto_result']['id'] = ''; echo $this->magic_vars['_U']['auto_result']['id']; ?>" />
        <input type="submit" class="btn-action" name="" value="保存" id=""  /> 
        <input type="reset" class="btn-action" name="" value="取消" id=""  /> 
        </div> 
    </div> 
		</form>
	<? endif; ?>
		<script> 
var url = "<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type'] = ''; echo $this->magic_vars['_U']['query_type']; ?>";

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

</div>
</div>
</div>
</div>
<!--用户中心的主栏目 结束-->
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/modal.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/tab.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/alert.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/transition.js"></script>
<? $this->magic_include(array('file' => "user_footer.html", 'vars' => array()));?>