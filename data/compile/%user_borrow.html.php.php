<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
<? $this->magic_include(array('file' => "user_header.html", 'vars' => array()));?>
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/modal.css" rel="stylesheet" type="text/css" />
<!--用户中心的主栏目 开始-->
<div id="main" class="clearfix" style="margin-top:0px;">
<div class="wrap950 ">
	<!--左边的导航 开始-->
	<div class="user_left">
		<? $this->magic_include(array('file' => "user_menu.html", 'vars' => array()));?>
	</div>
	<!--左边的导航 结束-->
	
	<!--右边的内容 开始-->
	<div class="user_right">
		<div class="user_right_menu">
			<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="repayment" ||  $this->magic_vars['_U']['query_type']=="repaymentplan" ||  $this->magic_vars['_U']['query_type']=="loandetail" ||  $this->magic_vars['_U']['query_type']=="repaymentyes" ||  $this->magic_vars['_U']['query_type']=="repayment_view"): ?>
			<ul id="tab" class="list-tab clearfix">
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="repayment"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repayment">正在还款的借款</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="repaymentplan"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repaymentplan">还款明细账</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="loandetail"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/loandetail">借款明细账</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="repaymentyes"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repaymentyes">已还完的借款</a></li>
				<? if (!isset($_REQUEST['id'])) $_REQUEST['id']=''; ;if (  $_REQUEST['id']!=""): ?> 
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="repayment_view"): ?> class="cur"<? endif; ?>>标的还款信息</li>
				<? endif; ?>
			</ul>
			<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="succes" ||  $this->magic_vars['_U']['query_type']=="gathering" ||  $this->magic_vars['_U']['query_type']=="lenddetail" ||  $this->magic_vars['_U']['query_type']=="succesyes"): ?>
			<ul class="list-tab clearfix">
				<li <? if (!isset($_REQUEST['type'])) $_REQUEST['type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $_REQUEST['type']=="wait" &&  $this->magic_vars['_U']['query_type']=="succes"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/succes&type=wait">正在收款的借款</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $this->magic_vars['_U']['query_type']=="gathering" &&  $_REQUEST['status']==0): ?> class="cur"<? endif; ?> ><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/gathering&status=0">未收款明细账</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $this->magic_vars['_U']['query_type']=="gathering" &&  $_REQUEST['status']==1): ?> class="cur"<? endif; ?> ><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/gathering&status=1">已收款明细账</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="lenddetail"): ?> class="cur"<? endif; ?> ><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/lenddetail">借出明细账</a></li>
				<li <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']=="yes"): ?> class="cur"<? endif; ?> ><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/succes&type=yes">已还清的借款</a></li>
			</ul>
			<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (   $this->magic_vars['_U']['query_type']=="bid" ||  $this->magic_vars['_U']['query_type']=="appraisal" ||  $this->magic_vars['_U']['query_type']=="attention" ||   $this->magic_vars['_U']['query_type']=="tender_reply"): ?>
			<ul class="list-tab clearfix">
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="bid"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/bid">正在投标的借款</a></li>
			</ul>
			<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="tender_vouch" ||  $this->magic_vars['_U']['query_type']=="tender_vouch_finish"): ?>
			<ul class="list-tab clearfix">
			<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="tender_vouch"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/tender_vouch">投标/复审担保标</a></li>
			<li <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="0"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/tender_vouch_finish&status=0">还款中的担保标</a></li>
			<li <? if (!isset($_REQUEST['status'])) $_REQUEST['status']=''; ;if (  $_REQUEST['status']=="1"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/tender_vouch_finish&status=1">已还完的担保标</a></li></ul>
			<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="myuser" ||  $this->magic_vars['_U']['query_type']=="myuserrepay" ||  $this->magic_vars['_U']['query_type']=="myuser_account"): ?>
			<ul class="list-tab clearfix">
				<li ><a href="index.php?user&q=code/user/myuser">我的客服</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="myuserrepay" ||  $this->magic_vars['_U']['query_type']=="myuser"): ?> class="cur"<? endif; ?>><a href="index.php?user&q=code/borrow/myuser">客户借款</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="myuser_account"): ?> class="cur"<? endif; ?>><a href="index.php?user&q=code/borrow/myuser_account">统计信息</a></li>
			</ul>
			<? else: ?>
			<ul class="list-tab clearfix">
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="publish"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/publish">正在招标的借款</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="unpublish"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/unpublish">尚未发布的借款</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="limitapp"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/limitapp">额度申请</a></li>
			</ul>
			<? endif; ?>
		</div>
		
		<div class="user_right_main">
		
	
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="publish"): ?>
		<!--正在招标 开始-->
		<div class="well" style="height:30px; padding-top:7px;"> 
		发布时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="搜索" type="submit" class="btn-action"  onclick="sousuo('')" />
		</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>标题</td>
					<td>类型</td>
					<td>金额(元)</td>
					<td>年利率</td>
					<td>期限</td>
					<td>发布时间</td>
					<td>进度</td>
					<td>状态</td>
					<td>操作</td>
				</tr>
				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','status'=>'1,2,4,5,6','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?> >
					<td width="70"  ><a href="/invest/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html" title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"12");echo $_tmp;unset($_tmp); ?></a></td>
					<td><? if (!isset($this->magic_vars['item']['is_vouch'])) $this->magic_vars['item']['is_vouch']=''; ;if (  $this->magic_vars['item']['is_vouch']==1): ?>担保标<? else: ?>普通标<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>元</td>
					<td><? if (!isset($this->magic_vars['item']['apr'])) $this->magic_vars['item']['apr'] = ''; echo $this->magic_vars['item']['apr']; ?> %</td>
					<td><? if (!isset($this->magic_vars['item']['isday'])) $this->magic_vars['item']['isday']=''; ;if (  $this->magic_vars['item']['isday']==1): ?><? if (!isset($this->magic_vars['item']['time_limit_day'])) $this->magic_vars['item']['time_limit_day'] = ''; echo $this->magic_vars['item']['time_limit_day']; ?>天<? else: ?><? if (!isset($this->magic_vars['item']['time_limit'])) $this->magic_vars['item']['time_limit'] = ''; echo $this->magic_vars['item']['time_limit']; ?>个月<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
					<td><div class="rate_bg floatl" align="left">
							<div class="rate_tiao" style=" width:<? if (!isset($this->magic_vars['item']['scale'])) $this->magic_vars['item']['scale'] = '';$_tmp = $this->magic_vars['item']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%"></div>
						</div><span class="floatl"><? if (!isset($this->magic_vars['item']['scale'])) $this->magic_vars['item']['scale'] = ''; echo $this->magic_vars['item']['scale']; ?>%</span></td>
					<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>发布审批中<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==1): ?><? if (!isset($this->magic_vars['item']['account_yes'])) $this->magic_vars['item']['account_yes']='';if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account']=''; ;if (  $this->magic_vars['item']['account_yes']== $this->magic_vars['item']['account']): ?>满标审核中<? else: ?>正在募集<? endif; ?><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>审核失败<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==3): ?>已满标<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==4): ?>满标审核失败<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==5): ?>已撤回<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?><a href="#" onclick="javascript:if(confirm('确定要撤回此招标')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/cancel&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">撤回</a><? else: ?><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']='';if (!isset($this->magic_vars['item']['biao_type'])) $this->magic_vars['item']['biao_type']='';if (!isset($this->magic_vars['item']['biao_type'])) $this->magic_vars['item']['biao_type']='';if (!isset($this->magic_vars['item']['account_yes'])) $this->magic_vars['item']['account_yes']=''; ;if (  $this->magic_vars['item']['status']==1 && ( $this->magic_vars['item']['biao_type']!='lz' || ( $this->magic_vars['item']['biao_type']=='lz' &&  $this->magic_vars['item']['account_yes']==0))): ?><a href="#" onclick="javascript:if(confirm('确定要撤回此招标')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/cancel&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">撤回</a><? else: ?>-<? endif; ?><? endif; ?></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr>
					<td colspan="9" class="page">
						<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
			</form>	
		</table>
		
		<!--正在招标 结束-->
		
		
		<!--尚未发布 开始-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="unpublish"): ?>
		<div class="well" style="height:30px; padding-top:7px;"> 
		发布时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="搜索" type="submit" class="btn-action"  onclick="sousuo()" />
		</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>标题</td>
					<td>金额(元)</td>
					<td>年利率</td>
					<td>期限</td>
					<td>发布时间</td>
					<td>操作</td>
				</tr>
				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','status'=>'-1,0','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>(元)</td>
					<td><? if (!isset($this->magic_vars['item']['apr'])) $this->magic_vars['item']['apr'] = ''; echo $this->magic_vars['item']['apr']; ?> %</td>
					<td><? if (!isset($this->magic_vars['item']['isday'])) $this->magic_vars['item']['isday']=''; ;if (  $this->magic_vars['item']['isday']==1): ?><? if (!isset($this->magic_vars['item']['time_limit_day'])) $this->magic_vars['item']['time_limit_day'] = ''; echo $this->magic_vars['item']['time_limit_day']; ?>天<? else: ?><? if (!isset($this->magic_vars['item']['time_limit'])) $this->magic_vars['item']['time_limit'] = ''; echo $this->magic_vars['item']['time_limit']; ?>个月<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
					<td><a href="#" onclick="javascript:if(confirm('确定要删除此招标')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/del&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">删除</a></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr>
					<td colspan="8" class="page">
						<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
			</form>	
		</table>
		<!--尚未发布 结束-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']='';if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="repayment" ||   $this->magic_vars['_U']['query_type']=="repaymentyes"): ?>
		<!--正在还款的借款 开始-->
		<div class="well" style="height:30px; padding-top:7px;"> 
		发布时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="搜索" type="submit" class="btn-action"  onclick="sousuo()" />
		</div>
		<table border="0" cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
			  <tr class="head" >
					<td>标题</td>
					<td>协议</td>
					<td>借款金额</td>
					<td>年利率</td>
					<td>还款期限</td>
					<td>偿还本息</td>
					<td>已还本息</td>
					<td>未还本息</td>
					<td>操作</td>
				</tr>
				<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="repayment"): ?>
				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','type'=>'now','status'=>'3','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></a></td>
					<td><a href="/protocol/index.html?borrow_id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" target="_blank">查看协议</a></td>
					<td><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>(元)</td>
					<td><? if (!isset($this->magic_vars['item']['apr'])) $this->magic_vars['item']['apr'] = ''; echo $this->magic_vars['item']['apr']; ?> %</td>
					<td><? if (!isset($this->magic_vars['item']['isday'])) $this->magic_vars['item']['isday']=''; ;if (  $this->magic_vars['item']['isday']==1): ?><? if (!isset($this->magic_vars['item']['time_limit_day'])) $this->magic_vars['item']['time_limit_day'] = ''; echo $this->magic_vars['item']['time_limit_day']; ?>天<? else: ?><? if (!isset($this->magic_vars['item']['time_limit'])) $this->magic_vars['item']['time_limit'] = ''; echo $this->magic_vars['item']['time_limit']; ?>个月<? endif; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['repayment_account'])) $this->magic_vars['item']['repayment_account'] = ''; echo $this->magic_vars['item']['repayment_account']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['repayment_yesaccount'])) $this->magic_vars['item']['repayment_yesaccount'] = '';$_tmp = $this->magic_vars['item']['repayment_yesaccount'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['repayment_noaccount'])) $this->magic_vars['item']['repayment_noaccount'] = ''; echo $this->magic_vars['item']['repayment_noaccount']; ?></td>
					<td><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repayment_view&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">还款明细</a></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr >
					<td colspan="9" class="page">
						<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
				<? else: ?>
				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','type'=>'yes','status'=>'3','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td title="<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></a></td>
					<td><a href="/protocol/index.html?borrow_id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" target="_blank">查看协议</a></td>
					<td><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>(元)</td>
					<td><? if (!isset($this->magic_vars['item']['apr'])) $this->magic_vars['item']['apr'] = ''; echo $this->magic_vars['item']['apr']; ?> %</td>
					<td><? if (!isset($this->magic_vars['item']['isday'])) $this->magic_vars['item']['isday']=''; ;if (  $this->magic_vars['item']['isday']==1): ?><? if (!isset($this->magic_vars['item']['time_limit_day'])) $this->magic_vars['item']['time_limit_day'] = ''; echo $this->magic_vars['item']['time_limit_day']; ?>天<? else: ?><? if (!isset($this->magic_vars['item']['time_limit'])) $this->magic_vars['item']['time_limit'] = ''; echo $this->magic_vars['item']['time_limit']; ?>个月<? endif; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['repayment_account'])) $this->magic_vars['item']['repayment_account'] = ''; echo $this->magic_vars['item']['repayment_account']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['repayment_yesaccount'])) $this->magic_vars['item']['repayment_yesaccount'] = '';$_tmp = $this->magic_vars['item']['repayment_yesaccount'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['repayment_noaccount'])) $this->magic_vars['item']['repayment_noaccount'] = ''; echo $this->magic_vars['item']['repayment_noaccount']; ?></td>
					<td><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repayment_view&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>" >还款明细</a></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr>
					<td colspan="9" class="page">
						<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
				<? endif; ?>
			</form>	
		</table>
		<!--正在还款的借款 结束-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="repaymentplan"): ?>
		<!--还款明细 开始-->
		<div class="well" style="height:30px; padding-top:7px;"> 
		发布时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="搜索" type="submit" class="btn-action"  onclick="sousuo()" />
		</div>
		<table border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>标题</td>
					<td>第几期</td>
					<td>应还款日期</td>
					<td>本期应还本息</td>
					<td>利息</td>
					<td>滞纳金</td>
					<td>逾期利息</td>
					<td>逾期天数</td>
					<td>还款状态</td>
					<td>操作</td>
				</tr>
				<? $this->magic_vars['query_type']='GetRepaymentList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','order'=>'repayment_time','status'=>'0,2','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetRepaymentList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></td>
					<td><? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']+1; ?>/<? if (!isset($this->magic_vars['item']['time_limit'])) $this->magic_vars['item']['time_limit'] = ''; echo $this->magic_vars['item']['time_limit']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['repayment_time'])) $this->magic_vars['item']['repayment_time'] = '';$_tmp = $this->magic_vars['item']['repayment_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['repayment_account'])) $this->magic_vars['item']['repayment_account'] = '';$_tmp = $this->magic_vars['item']['repayment_account'];$_tmp = $this->magic_modifier("round",$_tmp,"2");echo $_tmp;unset($_tmp); ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['interest'])) $this->magic_vars['item']['interest'] = '';$_tmp = $this->magic_vars['item']['interest'];$_tmp = $this->magic_modifier("round",$_tmp,"2");echo $_tmp;unset($_tmp); ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['forfeit'])) $this->magic_vars['item']['forfeit'] = ''; echo $this->magic_vars['item']['forfeit']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['late_interest'])) $this->magic_vars['item']['late_interest'] = ''; echo $this->magic_vars['item']['late_interest']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['late_days'])) $this->magic_vars['item']['late_days'] = ''; echo $this->magic_vars['item']['late_days']; ?>天</td>
					<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>待还款<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>网站先垫付<? else: ?>已还款<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']='';if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0 ||  $this->magic_vars['item']['status']==2): ?><a href="javascript:repay('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repay&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>')">还款</a><? else: ?>-<? endif; ?></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr>
					<td colspan="8" class="page">
						<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
			</form>	
		</table>
		<!--还款明细 结束-->
		
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="myuserrepay"): ?>
		<!--我的客户 开始-->
		
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>标题</td>
					<td>第几期</td>
					<td>所属用户</td>
					<td>应还款日期</td>
					<td>本期应还本息</td>
					<td>利息</td>
					<td>滞纳金</td>
					<td>逾期利息</td>
					<td>逾期天数</td>
					<td>还款状态</td>
					<td>操作</td>
				</tr>
				<? $this->magic_vars['query_type']='GetRepaymentList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>$_REQUEST['user_id'],'keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','kefu_userid'=>$this->magic_vars['_G']['user_id'],'dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','order'=>'repayment_time');$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetRepaymentList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_id'])) $this->magic_vars['item']['borrow_id'] = ''; echo $this->magic_vars['item']['borrow_id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></a></td>
					<td><? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']+1; ?>/<? if (!isset($this->magic_vars['item']['time_limit'])) $this->magic_vars['item']['time_limit'] = ''; echo $this->magic_vars['item']['time_limit']; ?></td>
					<td><a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
					<td><? if (!isset($this->magic_vars['item']['repayment_time'])) $this->magic_vars['item']['repayment_time'] = '';$_tmp = $this->magic_vars['item']['repayment_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");echo $_tmp;unset($_tmp); ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['repayment_account'])) $this->magic_vars['item']['repayment_account'] = ''; echo $this->magic_vars['item']['repayment_account']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['interest'])) $this->magic_vars['item']['interest'] = ''; echo $this->magic_vars['item']['interest']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['forfeit'])) $this->magic_vars['item']['forfeit'] = ''; echo $this->magic_vars['item']['forfeit']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['late_interest'])) $this->magic_vars['item']['late_interest'] = ''; echo $this->magic_vars['item']['late_interest']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['late_days'])) $this->magic_vars['item']['late_days'] = ''; echo $this->magic_vars['item']['late_days']; ?>天</td>
					<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>待还款<? else: ?>已还款<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?><a href="#" onclick="javascript:if(confirm('你确定要偿还此借款吗？')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repay&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>'">还款</a><? else: ?>-<? endif; ?></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr>
					<td colspan="8" class="page">
						<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
			</form>	
		</table>
		<!--我的客户 结束-->
		
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="loandetail"): ?>
		<!--借款明细 开始-->
		<div class="well" style="height:30px; padding-top:7px;"> 
		投资者：<input type="text" name="username" id="username" size="15" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="搜索" type="submit" class="btn-action"  onclick="sousuo()" class="btn-action" />
		</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>投资者 </td>
					<td>借入总额</td>
					<td>还款总额</td>
					<td>已还利息</td>
					<td>已还滞纳金</td>
					<td>待还总额</td>
					<td>待还利息</td>
				</tr>
				<? $this->magic_vars['query_type']='GetTenderUserList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','username'=>isset($_REQUEST['username'])?$_REQUEST['username']:'','borrow_status'=>'3','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderUserList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
					<td><font color="#FF0000">￥<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = '';$_tmp = $this->magic_vars['item']['account'];$_tmp = $this->magic_modifier("round",$_tmp,"2");echo $_tmp;unset($_tmp); ?></font></td>
					<td>￥<? if (!isset($this->magic_vars['item']['repayment_yesaccount'])) $this->magic_vars['item']['repayment_yesaccount'] = '';$_tmp = $this->magic_vars['item']['repayment_yesaccount'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['repayment_yesinterest'])) $this->magic_vars['item']['repayment_yesinterest'] = '';$_tmp = $this->magic_vars['item']['repayment_yesinterest'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['forfeit'])) $this->magic_vars['item']['forfeit'] = '';$_tmp = $this->magic_vars['item']['forfeit'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['wait_account'])) $this->magic_vars['item']['wait_account'] = '';$_tmp = $this->magic_vars['item']['wait_account'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['wait_interest'])) $this->magic_vars['item']['wait_interest'] = '';$_tmp = $this->magic_vars['item']['wait_interest'];$_tmp = $this->magic_modifier("round",$_tmp,"2");$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr>
					<td colspan="8" class="page">
						<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
			</form>	
		</table>
		<!--借款明细 结束-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="loanermsg"): ?>
		<!--投资者留言 开始-->
		<div class="well" style="height:30px; padding-top:7px;"> 
		您现在查看的是:<select name="status"> <option value="">所有回复</option> <option value="0">等我回复</option> <option value="1">已回复</option></select>
		<input value="搜索" type="submit" class="btn-action"  class="btn-action" />
		</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>标的标题</td>
					<td>留言者</td>
					<td>留言内容</td>
					<td>留言时间</td>
					<td>留言状态</td>
					<td>操作</td>
				</tr>
				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?>(元)</td>
					<td><? if (!isset($this->magic_vars['item']['apr'])) $this->magic_vars['item']['apr'] = ''; echo $this->magic_vars['item']['apr']; ?> %</td>
					<td><? if (!isset($this->magic_vars['item']['isday'])) $this->magic_vars['item']['isday']=''; ;if (  $this->magic_vars['item']['isday']==1): ?><? if (!isset($this->magic_vars['item']['time_limit_day'])) $this->magic_vars['item']['time_limit_day'] = ''; echo $this->magic_vars['item']['time_limit_day']; ?>天<? else: ?><? if (!isset($this->magic_vars['item']['time_limit'])) $this->magic_vars['item']['time_limit'] = ''; echo $this->magic_vars['item']['time_limit']; ?>个月<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr>
					<td colspan="8" class="page">
						<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
			</form>	
		</table>
		<!--投资者留言 结束-->

		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="limitapp"): ?>
		<!--额度申请 开始-->
		<div class="well"> 
		额度申请原则上每次最多申请1万
		</div>
		<? if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status']=''; ;if (  $this->magic_vars['_G']['user_result']['real_status']!=1): ?>
			<div align="center" ><font color="#FF0000"><br/>
		<br/>
		<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>提醒你：</font>你还没有通过实名认证，请先通过<a href="/index.php?user&q=code/user/realname"><strong>实名认证!</strong></a>
		</div><br/>
              <? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status']=''; ;elseif (  $this->magic_vars['_G']['user_result']['vip_status']!=1): ?>
              <div align="center"><font color="#FF0000"> <br/>
              <? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>提醒你：</font>你还不是VIP会员，请先成为<a href="/vip/index.html"><strong>VIP会员</strong></a>。</div><br /><br /><br />
		<? else: ?>
		<? $data = array('user_id'=>'0','var'=>'var','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['var'] = borrowClass::GetAmountApplyOne($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>
		<form method="post" action="" name="form1">
		<div class="user_right_border">
			<div class="e">申请者：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?>
			</div>
		</div>
		<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==2): ?>
		<div class="user_right_border">
			<div class="e"> 状态：</div>
			<div class="c">
				正在审核中
			</div>
		</div>
		<div class="user_right_border">
			<div class="e"> 申请类型：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['var']['type'])) $this->magic_vars['var']['type']=''; ;if (  $this->magic_vars['var']['type']=="tender_vouch"): ?>投资担保额度<? if (!isset($this->magic_vars['var']['type'])) $this->magic_vars['var']['type']=''; ;elseif (  $this->magic_vars['var']['type']=="borrow_vouch"): ?>借款担保额度<? else: ?>借款信用额度<? endif; ?>
			</div>
		</div>
		<div class="user_right_border">
			<div class="e"> 申请金额：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['var']['account'])) $this->magic_vars['var']['account'] = ''; echo $this->magic_vars['var']['account']; ?>
			</div>
		</div>
		<div class="user_right_border">
			<div class="e">详细说明：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['var']['content'])) $this->magic_vars['var']['content'] = ''; echo $this->magic_vars['var']['content']; ?>
			</div>
		</div>
		<div class="user_right_border">
			<div class="e">其它地方借款详细说明：</div>
			<div class="c">
			<? if (!isset($this->magic_vars['var']['remark'])) $this->magic_vars['var']['remark'] = ''; echo $this->magic_vars['var']['remark']; ?>
			</div>
		</div>
		<? else: ?>
		<div class="user_right_border">
			<div class="e"> 申请类型：</div>
			<div class="c">
				<select name="type"><option value="credit" <? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']=="credit"): ?> selected="selected"<? endif; ?>>借款信用额度</option>
				</select>
			</div>
		</div>
		<div class="user_right_border">
			<div class="e"> 申请金额：</div>
			<div class="c">
				<input type="text" name="account" /> 
			</div>
		</div>
		<div class="user_right_border">
			<div class="e">详细说明：</div>
			<div class="c">
				<textarea cols="40" name="content" style="height:50px"></textarea>
			</div>
		</div>
		<div class="user_right_border">
			<div class="e">其它地方借款详细说明：</div>
			<div class="c">
			<textarea cols="40" name="remark" style="height:50px"></textarea>
			</div>
		</div>
		<div class="user_right_border">
			<div class="e"></div>
			<div class="c">
				<input type="button" class="btn-action"  name="name" id="sub-limitapp" value="确认提交" size="30" /> 
			</div>
		</div>
		
		<script type="text/javascript">
			document.getElementById("sub-limitapp").onclick = function(){
				var frm = document.forms['form1'];
				var account = frm.elements['account'].value;
				account = parseFloat(account);
				if(isNaN(account) || account<1){
					jQuery.jBox.info('请输入正确的申请金额','提示');
				}else if(parseFloat(account)<0){
					jQuery.jBox.info('申请金额格式不正确','提示');
					frm.elements['account'].value=0;
				}else{
					jQuery,jBox.tip('提交中','loading');
					frm.submit();
				}
			}
		</script>
		
		<? endif; ?>
		</form>
		
		<? unset($_magic_vars);unset($data); ?>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>申请时间</td>
					<td>申请类型</td>
					<td>申请金额(元)</td>
					<td>通过金额(元)</td>
					<td>备注说明</td>
					<td>状态</td>
					<td>审核时间</td>
					<td>审核备注</td>
				</tr>
				<? $this->magic_vars['query_type']='GetAmountApplyList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetAmountApplyList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
					<td width="70"><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;if (  $this->magic_vars['item']['type']=="tender_vouch"): ?>投资担保额度<? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;elseif (  $this->magic_vars['item']['type']=="borrow_vouch"): ?>借款担保额度<? else: ?>借款信用额度<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['newaccount'])) $this->magic_vars['item']['newaccount'] = ''; echo $this->magic_vars['item']['newaccount']; ?></td>
					<td  width="200"><? if (!isset($this->magic_vars['item']['content'])) $this->magic_vars['item']['content'] = ''; echo $this->magic_vars['item']['content']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>审核不通过<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==1): ?>审核通过<? else: ?>正在审核<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['item']['verify_time'])) $this->magic_vars['item']['verify_time'] = '';$_tmp = $this->magic_vars['item']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?> </td>
					<td><? if (!isset($this->magic_vars['item']['verify_remark'])) $this->magic_vars['item']['verify_remark'] = ''; echo $this->magic_vars['item']['verify_remark']; ?></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr >
					<td colspan="8" class="page">
						<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
			</form>	
		</table>
		<div class="user_right_foot">
		* 温馨提示：额度申请后 无论申请是否批准 必须隔一个月后才能再次申请，每个月只能申请一次如有问题,请与我们联系
		</div>
		<!--额度申请 结束-->
		<? endif; ?>
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="succes"): ?>
		<!--成功投资 开始-->
		<? $data = array('user_id'=>'0','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['var'] = borrowClass::GetUserLog($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>
		<div class="alert alert-block">结果统计：借出总额￥<? if (!isset($this->magic_vars['var']['success_account'])) $this->magic_vars['var']['success_account'] = '';$_tmp = $this->magic_vars['var']['success_account'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 已收总额￥<? if (!isset($this->magic_vars['var']['collection_capital1'])) $this->magic_vars['var']['collection_capital1'] = '';$_tmp = $this->magic_vars['var']['collection_capital1'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 未收总额￥<? if (!isset($this->magic_vars['var']['collection_capital0'])) $this->magic_vars['var']['collection_capital0'] = '';$_tmp = $this->magic_vars['var']['collection_capital0'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 已收利息￥<? if (!isset($this->magic_vars['var']['collection_interest1'])) $this->magic_vars['var']['collection_interest1'] = '';$_tmp = $this->magic_vars['var']['collection_interest1'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> 未收利息￥<? if (!isset($this->magic_vars['var']['collection_interest0'])) $this->magic_vars['var']['collection_interest0'] = '';$_tmp = $this->magic_vars['var']['collection_interest0'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> </div>
		<? unset($_magic_vars);unset($data); ?>
		<div class="well" > 
		发布时间：<input type="text" name="dotime1" id="dotime1"  size="15" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>   关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" />
		<input value="搜索" type="submit" class="btn-action"  class="btn-action" onclick="sousuo()" />
		</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>标题</td>
					<td>借款者</td>
					<td>借款者积分</td>
					<td>年利率</td>
					<td>期限</td>
					<td>投标时间</td>
					<td>应收本息</td>
					<td>借出金额</td>
				</tr>
				<? $this->magic_vars['query_type']='GetBorrowSucces';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','type'=>$_REQUEST['type'],'user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetBorrowSucces($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></a></td>
					<td><a href="/index.php?user&q=code/message/sent&receive=<? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?>"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
					<td><? if (!isset($this->magic_vars['item']['credit'])) $this->magic_vars['item']['credit'] = '';$_tmp = $this->magic_vars['item']['credit'];$_tmp = $this->magic_modifier("credit",$_tmp,"");echo $_tmp;unset($_tmp); ?><? if (!isset($this->magic_vars['item']['credit'])) $this->magic_vars['item']['credit'] = ''; echo $this->magic_vars['item']['credit']; ?>分</td>
					<td><? if (!isset($this->magic_vars['item']['apr'])) $this->magic_vars['item']['apr'] = ''; echo $this->magic_vars['item']['apr']; ?>%</td>
					<td><? if (!isset($this->magic_vars['item']['isday'])) $this->magic_vars['item']['isday']=''; ;if (  $this->magic_vars['item']['isday']==1): ?><? if (!isset($this->magic_vars['item']['time_limit_day'])) $this->magic_vars['item']['time_limit_day'] = ''; echo $this->magic_vars['item']['time_limit_day']; ?>天<? else: ?><? if (!isset($this->magic_vars['item']['time_limit'])) $this->magic_vars['item']['time_limit'] = ''; echo $this->magic_vars['item']['time_limit']; ?>个月<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['item']['tender_time'])) $this->magic_vars['item']['tender_time'] = '';$_tmp = $this->magic_vars['item']['tender_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['repayment_account'])) $this->magic_vars['item']['repayment_account'] = ''; echo $this->magic_vars['item']['repayment_account']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['anum'])) $this->magic_vars['item']['anum'] = ''; echo $this->magic_vars['item']['anum']; ?></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr >
					<td colspan="11" class="page">
						<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
			</form>	
		</table>
		<!--成功投资 结束-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="tender_vouch"): ?>
		<!--成功担保 开始-->
		
		<div class="well" style="height:30px; padding-top:7px;"> 
		发布时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="搜索" type="submit" class="btn-action"  class="btn-action" onclick="sousuo()" />
		</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>标题</td>
					<td>借款者</td>
					<td>借款总额</td>
					<td>借款期限</td>
					<td>担保奖励</td>
					<td>担保总额</td>
					<td>担保时间</td>
					<td>状态</td>
				</tr>
				<? $this->magic_vars['query_type']='GetVouchList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','type'=>$_REQUEST['type'],'user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetVouchList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_id'])) $this->magic_vars['item']['borrow_id'] = ''; echo $this->magic_vars['item']['borrow_id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></a></td>
					<td><a href="/index.php?user&q=code/message/sent&receive=<? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?>"><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></a></td>
					<td>￥<? if (!isset($this->magic_vars['item']['borrow_account'])) $this->magic_vars['item']['borrow_account'] = ''; echo $this->magic_vars['item']['borrow_account']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['borrow_period'])) $this->magic_vars['item']['borrow_period'] = ''; echo $this->magic_vars['item']['borrow_period']; ?>个月</td>
					<td>￥<? if (!isset($this->magic_vars['item']['award_account'])) $this->magic_vars['item']['award_account'] = ''; echo $this->magic_vars['item']['award_account']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
					<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==1): ?>成功<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?><font color="#FF0000">失败</font><? else: ?>待审核<? endif; ?></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr>
					<td colspan="11" class="page">
						<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
			</form>	
		</table>
		<!--担保明细 结束-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="tender_vouch_finish"): ?>
		
 
</div>
		<div class="well" style="height:30px; padding-top:7px;"> 
		收款时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="搜索" type="submit" class="btn-action"  class="btn-action" onclick="sousuo()" />
		</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>借款者</td>
					<td>借款标题</td>
					<td>应还日期</td>
					<td>第几期/总期数</td>
					<td>总额</td>
					<td>担保总额</td>
					<td>本金</td>
					<td>利息</td>
					<td>状态</td>
				</tr>
				<? $this->magic_vars['query_type']='GetVouchRepayList';$data = array('var'=>'loop','showpage'=>'3','vouch_userid'=>$this->magic_vars['_G']['user_id'],'keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','borrow_status'=>'3','status'=>$_REQUEST['status'],'order'=>'repay_time');$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetVouchRepayList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?>class="tr1"<? endif; ?><? if (!isset($this->magic_vars['item']['mytime'])) $this->magic_vars['item']['mytime']=''; ;if (  $this->magic_vars['item']['mytime']<=24*3600): ?> style="color:red;"<? endif; ?>>
					<td><? if (!isset($this->magic_vars['item']['borrow_username'])) $this->magic_vars['item']['borrow_username'] = ''; echo $this->magic_vars['item']['borrow_username']; ?></td>
					<td><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_id'])) $this->magic_vars['item']['borrow_id'] = ''; echo $this->magic_vars['item']['borrow_id']; ?>.html" target="_blank" title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"13");echo $_tmp;unset($_tmp); ?></a></td>
					<td><? if (!isset($this->magic_vars['item']['repayment_time'])) $this->magic_vars['item']['repayment_time'] = '';$_tmp = $this->magic_vars['item']['repayment_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
					<td><? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']+1; ?>/<? if (!isset($this->magic_vars['item']['time_limit'])) $this->magic_vars['item']['time_limit'] = ''; echo $this->magic_vars['item']['time_limit']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['repayment_account'])) $this->magic_vars['item']['repayment_account'] = ''; echo $this->magic_vars['item']['repayment_account']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['repayment_account'])) $this->magic_vars['item']['repayment_account'] = ''; echo $this->magic_vars['item']['repayment_account']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['capital'])) $this->magic_vars['item']['capital'] = ''; echo $this->magic_vars['item']['capital']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['interest'])) $this->magic_vars['item']['interest'] = ''; echo $this->magic_vars['item']['interest']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==1): ?><font color="#666666">已还</font><? else: ?><font color="#FF0000">未还</font><? endif; ?></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr >
					<td colspan="8" class="page">
						<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
			</form>	
		</table>
		<!--担保明细 结束-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="gathering"): ?>
		<? $data = array('user_id'=>'0','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/account/account.class.php');$this->magic_vars['var'] = accountClass::GetAccountAll($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>
		<!--收款明细 开始-->
		<div class="user_help">
		<table class="table alert">
		 
		<tr>
			<td>待收总额：￥<? if (!isset($this->magic_vars['var']['tender_wait'])) $this->magic_vars['var']['tender_wait'] = '';$_tmp = $this->magic_vars['var']['tender_wait'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
			<td>待收利息：￥<? if (!isset($this->magic_vars['var']['tender_wait_interest'])) $this->magic_vars['var']['tender_wait_interest'] = '';$_tmp = $this->magic_vars['var']['tender_wait_interest'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?> </td>
			 
		</tr>
	</table>
		
    <? unset($_magic_vars);unset($data); ?>
 
</div>
		<div class="well" style="height:30px; padding-top:7px;"> 
		收款时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="搜索" type="submit" class="btn-action"  class="btn-action" onclick="sousuo()" />
		</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>借款标题</td>
					<td>应收日期</td>
					<td>借款者</td>
					<td>当期/总数</td>
					<td>(待收本金</td>
					<td>+</td>
					<td>待收利息</td>
					<td>=</td>
					<td>待收总额)</td>
					<td>逾期利息</td>
					<td>逾期天数</td>
					<td>状态</td>
				</tr>
				<? $this->magic_vars['query_type']='GetCollectionList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','borrow_status'=>'3','status'=>$_REQUEST['status'],'order'=>'repay_time','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetCollectionList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?> <? if (!isset($this->magic_vars['item']['mytime'])) $this->magic_vars['item']['mytime']=''; ;if (  $this->magic_vars['item']['mytime']<=24*3600): ?> style="color:red;"<? endif; ?>>
					<td><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_id'])) $this->magic_vars['item']['borrow_id'] = ''; echo $this->magic_vars['item']['borrow_id']; ?>.html" target="_blank" title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"13");echo $_tmp;unset($_tmp); ?></a></td>
					<td><? if (!isset($this->magic_vars['item']['repay_time'])) $this->magic_vars['item']['repay_time'] = '';$_tmp = $this->magic_vars['item']['repay_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
					<td><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
					<td  align="center"><? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']+1; ?>/<? if (!isset($this->magic_vars['item']['time_limit'])) $this->magic_vars['item']['time_limit'] = ''; echo $this->magic_vars['item']['time_limit']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['capital'])) $this->magic_vars['item']['capital'] = ''; echo $this->magic_vars['item']['capital']; ?></td>
					<td>+</td>
					<td>￥<? if (!isset($this->magic_vars['item']['interest'])) $this->magic_vars['item']['interest'] = ''; echo $this->magic_vars['item']['interest']; ?></td>
					<td>=</td>
					<td>￥<? if (!isset($this->magic_vars['item']['repay_account'])) $this->magic_vars['item']['repay_account'] = ''; echo $this->magic_vars['item']['repay_account']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['late_interest'])) $this->magic_vars['item']['late_interest'] = '';$_tmp = $this->magic_vars['item']['late_interest'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td><? if (!isset($this->magic_vars['item']['late_days'])) $this->magic_vars['item']['late_days'] = '';$_tmp = $this->magic_vars['item']['late_days'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>天</td>
					<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==1): ?><font color="#666666">已还</font><? else: ?><font color="#FF0000">未还</font><? endif; ?></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr>
					<td colspan="12" class="page">
						<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
			</form>	
		</table>
		<!--收款明细 结束-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="lenddetail"): ?>
		<!--借出明细 开始-->
		<div class="well" style="height:30px; padding-top:7px;"> 
		发布时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="搜索" type="submit" class="btn-action"  class="btn-action" onclick="sousuo()" />
		</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>借款者</td>
					<td>借款标</td>
					<td>投资本金</td>
					<td>应收总额</td>
					<td>已收总额</td>
					<td>待收总额</td>
					<td>已收利息</td>
					<td>待收利息</td>
				</tr>
			<? $this->magic_vars['query_type']='GetTenderList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td><? if (!isset($this->magic_vars['item']['op_username'])) $this->magic_vars['item']['op_username'] = ''; echo $this->magic_vars['item']['op_username']; ?></td>
					<td><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_id'])) $this->magic_vars['item']['borrow_id'] = ''; echo $this->magic_vars['item']['borrow_id']; ?>.html"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"14");echo $_tmp;unset($_tmp); ?></a></td>
					<td>￥<? if (!isset($this->magic_vars['item']['tender_account'])) $this->magic_vars['item']['tender_account'] = ''; echo $this->magic_vars['item']['tender_account']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['repayment_account'])) $this->magic_vars['item']['repayment_account'] = ''; echo $this->magic_vars['item']['repayment_account']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['repayment_yesaccount'])) $this->magic_vars['item']['repayment_yesaccount'] = ''; echo $this->magic_vars['item']['repayment_yesaccount']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['wait_account'])) $this->magic_vars['item']['wait_account'] = ''; echo $this->magic_vars['item']['wait_account']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['repayment_yesinterest'])) $this->magic_vars['item']['repayment_yesinterest'] = ''; echo $this->magic_vars['item']['repayment_yesinterest']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['item']['wait_interest'])) $this->magic_vars['item']['wait_interest'] = ''; echo $this->magic_vars['item']['wait_interest']; ?></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr >
					<td colspan="8" class="page">
						<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
			</form>	
		</table>
		<!--借出明细 结束-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="bid"): ?>
		<!--正在投标的借款 开始-->
		<div class="well" style="height:30px; padding-top:7px;"> 
		发布时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="搜索" type="submit" class="btn-action"  class="btn-action" onclick="sousuo()" />
		</div>
		<table border="0" cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>标题</td>
					<td>借款者</td>
					<td>投标/有效金额</td>
					<td>信用积分/投标时间 </td>
					<td>进度</td>
					<td>状态 </td>
				</tr>
				<? $this->magic_vars['query_type']='GetTenderList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','borrow_status'=>'1','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetTenderList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td style="line-height:21px;"><a href="/invest/a<? if (!isset($this->magic_vars['item']['borrow_id'])) $this->magic_vars['item']['borrow_id'] = ''; echo $this->magic_vars['item']['borrow_id']; ?>.html" target="_blank" title="<? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = ''; echo $this->magic_vars['item']['borrow_name']; ?>"><? if (!isset($this->magic_vars['item']['borrow_name'])) $this->magic_vars['item']['borrow_name'] = '';$_tmp = $this->magic_vars['item']['borrow_name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></a></td>
					<td style="line-height:21px;">借款者:<? if (!isset($this->magic_vars['item']['op_username'])) $this->magic_vars['item']['op_username'] = ''; echo $this->magic_vars['item']['op_username']; ?></td>
					<td style="line-height:21px;">投标金额:￥<? if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money'] = ''; echo $this->magic_vars['item']['money']; ?><br />有效金额:<font color="#FF0000">￥<? if (!isset($this->magic_vars['item']['tender_account'])) $this->magic_vars['item']['tender_account'] = ''; echo $this->magic_vars['item']['tender_account']; ?></font></td>
					
					<td style="line-height:25px;"><span><img src="<? if (!isset($this->magic_vars['_G']['system']['con_credit_picurl'])) $this->magic_vars['_G']['system']['con_credit_picurl'] = ''; echo $this->magic_vars['_G']['system']['con_credit_picurl']; ?><? if (!isset($this->magic_vars['item']['credit_pic'])) $this->magic_vars['item']['credit_pic'] = '';$_tmp = $this->magic_vars['item']['credit_pic'];$_tmp = $this->magic_modifier("default",$_tmp,"credit_s11.gif");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['item']['credit_jifen'])) $this->magic_vars['item']['credit_jifen'] = '';$_tmp = $this->magic_vars['item']['credit_jifen'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>分" /></span><br /><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
					
					<td style="line-height:21px;"><div class="rate_bg floatl" align="left">
							<div class="rate_tiao" style=" width:<? if (!isset($this->magic_vars['item']['scale'])) $this->magic_vars['item']['scale'] = '';$_tmp = $this->magic_vars['item']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%"></div>
						</div><span class="floatl"><? if (!isset($this->magic_vars['item']['scale'])) $this->magic_vars['item']['scale'] = ''; echo $this->magic_vars['item']['scale']; ?>%</span></td>
					<td style="line-height:21px;"><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==0): ?>投标失败<? else: ?><? if (!isset($this->magic_vars['item']['tender_account'])) $this->magic_vars['item']['tender_account']='';if (!isset($this->magic_vars['item']['money'])) $this->magic_vars['item']['money']=''; ;if (  $this->magic_vars['item']['tender_account']== $this->magic_vars['item']['money']): ?>全部通过<? else: ?>部分通过<? endif; ?><? endif; ?></td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr >
					<td colspan="10" class="page">
						<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
			</form>	
		</table>
		<!--正在投标的借款 结束-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="appraisal"): ?>
		<!--我的评价 开始-->
		<div class="well" style="height:30px; padding-top:7px;"> 
		发布时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="搜索" type="submit" class="btn-action"  class="btn-action"  onclick="sousuo()" />
		</div>
		<table border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>标题 </td>
					<td>借款者</td>
					<td>投标金额</td>
					<td>完成时间</td>
					<td>评价结果</td>
					<td>操作</td>
				</tr>
				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td><strong>短期借款，提前还款</strong> </td>
					<td>op6778</td>
					<td><img src="/pic/rank_4.gif" /></td>
					<td>18%</td>
					<td>1个月</td>
					<td>50</td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr >
					<td colspan="8" class="page">
						<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
			</form>	
		</table>
		<!--我的评价 结束-->

		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="attention"): ?>
		<!--我关注的借款 开始-->
		<div class="well" style="height:30px; padding-top:7px;"> 
		<select><option>进行中的借款</option><option>已结束的借款</option></select> 发布时间：<input type="text" name="dotime1" id="dotime1" value="<? if (!isset($_REQUEST['dotime1'])) $_REQUEST['dotime1'] = ''; echo $_REQUEST['dotime1']; ?>" size="15" onclick="change_picktime()"/> 到 <input type="text"  name="dotime2" value="<? if (!isset($_REQUEST['dotime2'])) $_REQUEST['dotime2'] = ''; echo $_REQUEST['dotime2']; ?>" id="dotime2" size="15" onclick="change_picktime()"/>  关键字：<input type="text" name="keywords" id="keywords" size="15" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /> 
		<input value="搜索" type="submit" class="btn-action"   onclick="sousuo()" />
		</div>
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>图片</td>
					<td>标题</td>
					<td>金额(元)</td>
					<td>进度</td>
					<td>期限</td>
					<td>信用等级</td>
					<td>操作</td>
				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td><strong>短期借款，提前还款</strong> </td>
					<td>op6778</td>
					<td><img src="/pic/rank_4.gif" /></td>
					<td>18%</td>
					<td>1个月</td>
					<td>50</td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr>
					<td colspan="8" class="page">
						<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
			</form>	
		</table>
		<!--我关注的借款 结束-->

		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="tender_reply"): ?>
		<!--投资者留言 开始-->
		<div class="well" style="height:30px; padding-top:7px;"> 
		您现在查看的是:<select name="status"> <option value="">所有回复</option> <option value="0">等我回复</option> <option value="1">已回复</option></select>
		<input value="搜索" type="submit" class="btn-action"  />
		</div>
		<table border="0" cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>标的标题</td>
					<td>留言者</td>
					<td>留言内容</td>
					<td>留言时间</td>
					<td>留言状态</td>
					<td>操作</td>
				</tr>
				<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','showpage'=>'3','user_id'=>'0','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','dotime1'=>isset($_REQUEST['dotime1'])?$_REQUEST['dotime1']:'','dotime2'=>isset($_REQUEST['dotime2'])?$_REQUEST['dotime2']:'','user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
				<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td><strong>短期借款，提前还款</strong> </td>
					<td>op6778</td>
					<td><img src="/pic/rank_4.gif" /></td>
					<td>18%</td>
					<td>1个月</td>
					<td>50</td>
				</tr>
				<? endforeach; endif; unset($_from); ?>
				<tr>
					<td colspan="8" class="page">
						<? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?>
					</td>
				</tr>
				<? unset($_magic_vars); ?>
			</form>	
		</table>
		<!--投资者留言 结束-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="myuser"): ?>
		<!--我的客户 结束-->
		<div class="user_help" > 
		<? $this->magic_vars['query_type']='GetMyuserList';$data = array('var'=>'loop','user_id'=>'0','showpage'=>'3','epage'=>'20','suser_id'=>$_REQUEST['user_id'],'user_id'=>$this->magic_vars['_G']['user_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetMyuserList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['_G']['class_pages']->set_data($this->magic_vars['magic_result']); $this->magic_vars['loop']['showpage'] =  $this->magic_vars['_G']['class_pages']->show(3);?>
			
		<strong>总借款数：</strong> <? if (!isset($this->magic_vars['loop']['total'])) $this->magic_vars['loop']['total'] = ''; echo $this->magic_vars['loop']['total']; ?> 个
		</div>
		<table border="0" cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>用户名</td>
					<td>真实姓名</td>
					<td>标题</td>
					<td>借款金额</td>
					<td>借款时间</td>
					<td>成功借款时间</td>
					<td>状态</td>
				</tr>
					<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<tr >
					<td><a href="/u/<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></a></td>
					<td><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/myuser&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?>"><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></a> </td>
					<td><a href="/invest/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html" target="_blank"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></a></td>
					<td>￥<? if (!isset($this->magic_vars['item']['account'])) $this->magic_vars['item']['account'] = ''; echo $this->magic_vars['item']['account']; ?></td>
					<td><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
					<td><? if (!isset($this->magic_vars['item']['success_time'])) $this->magic_vars['item']['success_time'] = '';$_tmp = $this->magic_vars['item']['success_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
					<td><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==5): ?>取消<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==3): ?>借款成功<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==2): ?>审核失败<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==4): ?>满标审核失败<? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;elseif (  $this->magic_vars['item']['status']==1): ?>正在招标中<? endif; ?></td>
				</tr>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
				<tr >
					<td colspan="8" class="page">
						<div class="list_table_page"><? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?></div>
					</td>
				</tr>
			</form>	
		</table>
		<? unset($_magic_vars); ?>
		<!--我的客户 结束-->
		
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="myuser_account"): ?>
		<!--我的客户统计 结束-->
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>时间</td>
					<td>成功借款</td>
					<td>成功投资</td>
					<td>VIP数</td>
				</tr>
					<? $this->magic_vars['query_type']='GetMyuserAcount';$data = array('var'=>'var','user_id'=>$this->magic_vars['_G']['user_id']);$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetMyuserAcount($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<tr >
					<td><? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = '';$_tmp = $this->magic_vars['key'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m");echo $_tmp;unset($_tmp); ?></td>
					<td>￥<? if (!isset($this->magic_vars['var']['borrow'])) $this->magic_vars['var']['borrow'] = '';$_tmp = $this->magic_vars['var']['borrow'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td>￥<? if (!isset($this->magic_vars['var']['tender'])) $this->magic_vars['var']['tender'] = '';$_tmp = $this->magic_vars['var']['tender'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td><? if (!isset($this->magic_vars['var']['vip'])) $this->magic_vars['var']['vip'] = '';$_tmp = $this->magic_vars['var']['vip'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>个</td>
				</tr>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</form>	
		</table>
		<? unset($_magic_vars); ?>
		<!--我的客户统计 结束-->
		
		<!--还款明细 开始-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="repayment_view"): ?>
		<div class="user_right_border">
			<div class="l">标题：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_U']['borrow_result']['name'])) $this->magic_vars['_U']['borrow_result']['name'] = ''; echo $this->magic_vars['_U']['borrow_result']['name']; ?>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"> 借款金额：</div>
			<div class="rb">
				<font color="#FF0000"><strong>￥<? if (!isset($this->magic_vars['_U']['borrow_result']['account'])) $this->magic_vars['_U']['borrow_result']['account'] = ''; echo $this->magic_vars['_U']['borrow_result']['account']; ?></strong></font>
			</div>
			<div class="l"> 借款利率：</div>
			<div class="rb">
				 <? if (!isset($this->magic_vars['_U']['borrow_result']['apr'])) $this->magic_vars['_U']['borrow_result']['apr'] = ''; echo $this->magic_vars['_U']['borrow_result']['apr']; ?>%
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"> 借款期限：</div>
			<div class="rb">
<? if (!isset($this->magic_vars['_U']['borrow_result']['isday'])) $this->magic_vars['_U']['borrow_result']['isday']=''; ;if (  $this->magic_vars['_U']['borrow_result']['isday']==1): ?><? if (!isset($this->magic_vars['_U']['borrow_result']['time_limit_day'])) $this->magic_vars['_U']['borrow_result']['time_limit_day'] = ''; echo $this->magic_vars['_U']['borrow_result']['time_limit_day']; ?>天<? else: ?><? if (!isset($this->magic_vars['_U']['borrow_result']['time_limit'])) $this->magic_vars['_U']['borrow_result']['time_limit'] = ''; echo $this->magic_vars['_U']['borrow_result']['time_limit']; ?>个月<? endif; ?>
			</div>
			<div class="l"> 还款方式：</div>
			<div class="rb">
				 <? if (!isset($this->magic_vars['_U']['borrow_result']['style'])) $this->magic_vars['_U']['borrow_result']['style'] = '';$_tmp = $this->magic_vars['_U']['borrow_result']['style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?>
			</div>
		</div>
		<div class="user_right_border">
			<div class="l"> 发布时间：</div>
			<div class="rb">
				 <? if (!isset($this->magic_vars['_U']['borrow_result']['addtime'])) $this->magic_vars['_U']['borrow_result']['addtime'] = '';$_tmp = $this->magic_vars['_U']['borrow_result']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>
			</div>
			<div class="l"> 借款时间：</div>
			<div class="rb">
				 <? if (!isset($this->magic_vars['_U']['borrow_result']['verify_time'])) $this->magic_vars['_U']['borrow_result']['verify_time'] = '';$_tmp = $this->magic_vars['_U']['borrow_result']['verify_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?>
			</div>
		</div>
		<!--还款明细 结束-->
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" style="width:98%">
			  <form cur="" method="post">
				<tr class="head" >
					<td>序号</td>
					<td>计划还款日</td>
					<td>计划还款本息</td>
					<td>实还日期</td>
					<td>实还本息</td>
					<td>逾期罚息</td>
					<td>逾期天数</td>
					<td>状态</td>
					<td>操作</td>
				</tr>
				<? $this->magic_vars['query_type']='GetRepaymentList';$data = array('id'=>isset($_REQUEST['id'])?$_REQUEST['id']:'','limit'=>'all','order'=>'order','user_id'=>$this->magic_vars['_G']['user_id']);$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetRepaymentList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td ><? if (!isset($this->magic_vars['var']['order'])) $this->magic_vars['var']['order'] = ''; echo $this->magic_vars['var']['order']+1; ?></td>
					<td><? if (!isset($this->magic_vars['var']['repayment_time'])) $this->magic_vars['var']['repayment_time'] = '';$_tmp = $this->magic_vars['var']['repayment_time'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?></td>
					<td>￥<? if (!isset($this->magic_vars['var']['repayment_account'])) $this->magic_vars['var']['repayment_account'] = ''; echo $this->magic_vars['var']['repayment_account']; ?></td>
					<td><? if (!isset($this->magic_vars['var']['repayment_yestime'])) $this->magic_vars['var']['repayment_yestime'] = '';$_tmp = $this->magic_vars['var']['repayment_yestime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i");$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
					<td>￥<? if (!isset($this->magic_vars['var']['repayment_yesaccount'])) $this->magic_vars['var']['repayment_yesaccount'] = ''; echo $this->magic_vars['var']['repayment_yesaccount']; ?></td>
					<td>￥<? if (!isset($this->magic_vars['var']['late_interest'])) $this->magic_vars['var']['late_interest'] = '';$_tmp = $this->magic_vars['var']['late_interest'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></td>
					<td><? if (!isset($this->magic_vars['var']['late_days'])) $this->magic_vars['var']['late_days'] = '';$_tmp = $this->magic_vars['var']['late_days'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>天</td>
					<td><? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==1): ?>已还<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==2): ?>网上垫付<? else: ?>待还款<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==1): ?>-<? else: ?><a href="javascript:repay('<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/repay&id=<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>')">还款</a><? endif; ?></td>
				</tr>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</form>	
		</table>
		<div class="user_right_foot">注：带有“(预计)”标记的金额说明该金额并非实际还款的金额，它只是假设以当前时间为还款时间的情况下用户将要还多少金额。 最终还款金额请以实际还款金额为准，因为预计的金额跟实际还款的金额可能会有所差异。 一次性全额还清将多支付下个月的利息。不记录还款状态，不增加还款积分。
		</div>
		<? endif; ?>
		<script>
var url = "<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type'] = ''; echo $this->magic_vars['_U']['query_type']; ?>";
var type = "<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>";
var status = "<? if (!isset($_REQUEST['status'])) $_REQUEST['status'] = ''; echo $_REQUEST['status']; ?>";

function repay(url){
	if(confirm('你确定要偿还此借款吗？')){
		jQuery.jBox.tip('还款中，请不要关闭浏览器和刷新本页面','loading');
		location.href = url;
	}
}
function sousuo(){
	var _url = "";
	var dotime1 = jQuery("#dotime1").val();

	var keywords = jQuery("#keywords").val();
	var username = jQuery("#username").val();
	var dotime2 = jQuery("#dotime2").val();
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
        if(type!=""){
            _url += "&type="+type;
        }
        if(status!=""){
            _url += "&status="+status;
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