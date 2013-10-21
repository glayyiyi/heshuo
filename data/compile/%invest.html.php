<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/modal.css" rel="stylesheet" type="text/css" />
<!--子栏目 开始-->

<?
$this->magic_vars['_G']['uurl'] = url_format($this->magic_vars['_G']['nowurl'],"order");
$this->magic_vars['_G']['epurl'] = url_format($this->magic_vars['_G']['nowurl'],"epage");
?>

<!--子栏目 结束-->
<? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']==late): ?>
<div id="main" class="clearfix">
	<ul id="tab" class="list-tab clearfix">
		<li class="active"><a href="#tb" data-toggle="tab">逾期的借款标</a></li>
	</ul>
<? $this->magic_vars['query_type']='GetLateList';$data = array('var'=>'loop','late_day'=>'1');$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetLateList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['showpage'] =  show_pages($this->magic_vars['magic_result']);?>
<ul class="list-main">
		<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
			<li>
				<img src="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = '';$_tmp = $this->magic_vars['var']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"middle");$_tmp = $this->magic_modifier("imgurl_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>" class="pic" />
				<div class="list-main-info-sub">
				
					<ul class="sub-col1">
						<li><a href="/u/<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = ''; echo $this->magic_vars['var']['user_id']; ?>" title="<? if (!isset($this->magic_vars['var']['realname'])) $this->magic_vars['var']['realname'] = ''; echo $this->magic_vars['var']['realname']; ?>"><? if (!isset($this->magic_vars['var']['realname'])) $this->magic_vars['var']['realname'] = ''; echo $this->magic_vars['var']['realname']; ?></a></li>
						<li>性别：<? if (!isset($this->magic_vars['var']['sex'])) $this->magic_vars['var']['sex']=''; ;if (  $this->magic_vars['var']['sex']==1): ?>男<? else: ?>女<? endif; ?></li>
						<li>身份证:<? if (!isset($this->magic_vars['var']['card_id'])) $this->magic_vars['var']['card_id'] = ''; echo $this->magic_vars['var']['card_id']; ?></li>
					</ul>
					<ul>
						<li ><font color="#FF0000">欠款总额：￥<? if (!isset($this->magic_vars['var']['late_account'])) $this->magic_vars['var']['late_account'] = ''; echo $this->magic_vars['var']['late_account']; ?></font></li>
						<li >Email：<? if (!isset($this->magic_vars['var']['email'])) $this->magic_vars['var']['email'] = ''; echo $this->magic_vars['var']['email']; ?></li>
						<li>电话：<? if (!isset($this->magic_vars['var']['phone'])) $this->magic_vars['var']['phone'] = ''; echo $this->magic_vars['var']['phone']; ?></li>
					</ul>
					<ul>
						<li ><font color="#FF0000">逾期笔数：<? if (!isset($this->magic_vars['var']['late_num'])) $this->magic_vars['var']['late_num'] = ''; echo $this->magic_vars['var']['late_num']; ?>笔</font></li>
						<li>网站代还笔数：<? if (!isset($this->magic_vars['var']['late_webnum'])) $this->magic_vars['var']['late_webnum'] = '';$_tmp = $this->magic_vars['var']['late_webnum'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></li>
						<li>最长逾期天数:<? if (!isset($this->magic_vars['var']['late_numdays'])) $this->magic_vars['var']['late_numdays'] = ''; echo $this->magic_vars['var']['late_numdays']; ?>天</li>
					</ul>
					<ul>
						<li ><font color="#FF0000">所在地：<? if (!isset($this->magic_vars['var']['area'])) $this->magic_vars['var']['area'] = '';$_tmp = $this->magic_vars['var']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"");echo $_tmp;unset($_tmp); ?></font></li>
						<li></li>
						<li>QQ：<? if (!isset($this->magic_vars['var']['qq'])) $this->magic_vars['var']['qq'] = ''; echo $this->magic_vars['var']['qq']; ?></li>
					</ul>
				</div>
			</li>
		<? endforeach; endif; unset($_from); ?>
</ul>
<? unset($_magic_vars); ?>
</div>
<? else: ?>
<!--header-end-->
<div id="main" class="clearfix investlist">
<form action="" method="get">
	<div class="box">
		<div class="box-title">搜索条件</div>
		<div class="box-con">
			<ul class="select-A clearfix">
				<li>借款目的：
				  <select name='use' id='use' >  <option value=''>没有限制</option>  <option value='1' <?php if($_REQUEST['use']=='1') echo "selected='selected'" ?>>短期周转</option>  <option value='2' <?php if($_REQUEST['use']=='2') echo "selected='selected'" ?>>生意周转</option>  <option value='3' <?php if($_REQUEST['use']=='3') echo "selected='selected'" ?>>生活周转</option>  <option value='4' <?php if($_REQUEST['use']=='4') echo "selected='selected'" ?>>购物消费</option>  <option value='5' <?php if($_REQUEST['use']=='5') echo "selected='selected'" ?>>不提现借款</option>  <option value='6' <?php if($_REQUEST['use']=='6') echo "selected='selected'" ?>>其它借款</option>  <option value='7' <?php if($_REQUEST['use']=='7') echo "selected='selected'" ?>>创业借款</option> </select>  
				</li>
				<!--<li>期限：
				  <select name='limittime' id='limittime' >  <option value=''>没有限制</option>  <option value='1' <?php if($_REQUEST['limittime']=='1') echo "selected='selected'" ?>>1个月</option>  <option value='2' <?php if($_REQUEST['limittime']=='2') echo "selected='selected'" ?>>2个月</option>  <option value='3' <?php if($_REQUEST['limittime']=='3') echo "selected='selected'" ?>>3个月</option>  <option value='4' <?php if($_REQUEST['limittime']=='4') echo "selected='selected'" ?>>4个月</option>  <option value='5' <?php if($_REQUEST['limittime']=='5') echo "selected='selected'" ?>>5个月</option>  <option value='6' <?php if($_REQUEST['limittime']=='6') echo "selected='selected'" ?>>6个月</option>  <option value='7' <?php if($_REQUEST['limittime']=='7') echo "selected='selected'" ?>>7个月</option>  <option value='8' <?php if($_REQUEST['limittime']=='8') echo "selected='selected'" ?>>8个月</option>  <option value='9' <?php if($_REQUEST['limittime']=='9') echo "selected='selected'" ?>>9个月</option>  <option value='10' <?php if($_REQUEST['limittime']=='10') echo "selected='selected'" ?>>10个月</option>  <option value='11' <?php if($_REQUEST['limittime']=='11') echo "selected='selected'" ?>>11个月</option>  <option value='12' <?php if($_REQUEST['limittime']=='12') echo "selected='selected'" ?>>12个月</option> </select>  
				</li>
				-->
				<li>标种：
				<select name="biaoType" id="biaoType">
					<option value=""> 所有</option>
					<option value="fast" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='fast'): ?>selected<? endif; ?> >抵押标</option>
					<option value="jin" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='jin'): ?>selected<? endif; ?> >净值标</option>
					<option value="miao" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='miao'): ?>selected<? endif; ?> >秒还标</option>
					<option value="xin" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='xin'): ?>selected<? endif; ?> >信用标</option>
					<option value="lz" <? if (!isset($_REQUEST['biaoType'])) $_REQUEST['biaoType']=''; ;if (  $_REQUEST['biaoType']=='lz'): ?>selected<? endif; ?> >流转标</option>
				</select>
				</li>
				<li>关键字：<input type="text" name="keywords" size="20" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" /></li>
				<li><input type="submit" class="btn-action" id="search_btn" value="搜索" /> </li>
			   <li><input type="hidden" name="type" value="<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>" /></li>
			</ul>
		</div>
	</div>
</form>
	<ul id="tab" class="list-tab clearfix">
		<li class="active"><a href="#tb" data-toggle="tab">所有</a></li>
		<!--<li><a href="#glb" data-toggle="tab">抵押标</a></li>
		<li><a href="#jzb" data-toggle="tab">净值标</a></li>
		<li><a href="#dbb" data-toggle="tab">担保标</a></li>
		<li><a href="#mb" data-toggle="tab">秒标</a></li>
		<li><a href="#xyb" data-toggle="tab">信用标</a></li>-->
		<li class="list-tab-sel"><input type="checkbox" value="2" name="sel"> 只显示有奖励</li>
	</ul>
	
	<div class="list-select clearfix">
		<div class="list-select-l">排序：
		
		<span>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;if (  $_REQUEST['order']=='account_up'): ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=account_down&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&keywords=<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>"><font color="#FF0000">金额↑</font></a>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;elseif (  $_REQUEST['order']=='account_down'): ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=account_up&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&keywords=<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>"><font color="#FF0000">金额↓</font></a>
				<? else: ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=account_up&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&keywords=<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>">金额</a><? endif; ?>
			</span> 
			<span>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;if (  $_REQUEST['order']=='apr_up'): ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=apr_down&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&keywords=<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>"><font color="#FF0000">利率↑</font></a>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;elseif (  $_REQUEST['order']=='apr_down'): ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=apr_up&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&keywords=<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>"><font color="#FF0000">利率↓</font></a>
				<? else: ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=apr_up&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&keywords=<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>">利率</a><? endif; ?>
			</span> 
			<span>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;if (  $_REQUEST['order']=='jindu_up'): ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=jindu_down&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&keywords=<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>"><font color="#FF0000">进度↑</font></a>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;elseif (  $_REQUEST['order']=='jindu_down'): ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=jindu_up&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&keywords=<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>"><font color="#FF0000">进度↓</font></a>
				<? else: ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=jindu_up&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&keywords=<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>">进度</a><? endif; ?>
			</span> 
			<span>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;if (  $_REQUEST['order']=='credit_up'): ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=credit_down&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&keywords=<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>"><font color="#FF0000">信用↑</font></a>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;elseif (  $_REQUEST['order']=='credit_down'): ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=credit_up&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&keywords=<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>"><font color="#FF0000">信用↓</font></a>
				<? else: ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=credit_up&type=<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>&keywords=<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = ''; echo $_REQUEST['keywords']; ?>">信用</a><? endif; ?>
			</span>  
		
		</div>
		<div class="list-select-r2"><!--金额范围：<select><option value="">0～5000</option><option value="244">5000～10000</option></select>-->
		<!--显示：<a href="<? if (!isset($this->magic_vars['_G']['epurl'])) $this->magic_vars['_G']['epurl'] = ''; echo $this->magic_vars['_G']['epurl']; ?>&epage=20"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_20.gif"  /></a> <a href="<? if (!isset($this->magic_vars['_G']['epurl'])) $this->magic_vars['_G']['epurl'] = ''; echo $this->magic_vars['_G']['epurl']; ?>&epage=40"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_40.gif" /></a> -->
		</div>
	<!--
		<div >
		显示： <a href="<? if (!isset($this->magic_vars['_G']['epurl'])) $this->magic_vars['_G']['epurl'] = ''; echo $this->magic_vars['_G']['epurl']; ?>&epage=20"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_20.gif"  /></a> 
			<a href="<? if (!isset($this->magic_vars['_G']['epurl'])) $this->magic_vars['_G']['epurl'] = ''; echo $this->magic_vars['_G']['epurl']; ?>&epage=40"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_40.gif" /></a> 
			<a href="<? if (!isset($this->magic_vars['_G']['epurl'])) $this->magic_vars['_G']['epurl'] = ''; echo $this->magic_vars['_G']['epurl']; ?>&epage=60"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_60.gif" /></a>
		</div>
		
		-->
	</div>
	
<!--所有标-->
<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','biaoType'=>isset($_REQUEST['biaoType'])?$_REQUEST['biaoType']:'','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','type'=>isset($_REQUEST['type'])?$_REQUEST['type']:'','use'=>isset($_REQUEST['use'])?$_REQUEST['use']:'','account1'=>isset($_REQUEST['account1'])?$_REQUEST['account1']:'','account2'=>isset($_REQUEST['account2'])?$_REQUEST['account2']:'','limittime'=>isset($_REQUEST['limittime'])?$_REQUEST['limittime']:'','award'=>isset($_REQUEST['award'])?$_REQUEST['award']:'','province'=>isset($_REQUEST['province'])?$_REQUEST['province']:'','city'=>isset($_REQUEST['city'])?$_REQUEST['city']:'','page'=>isset($_REQUEST['page'])?$_REQUEST['page']:'','epage'=>isset($_REQUEST['epage'])?$_REQUEST['epage']:'','order'=>$_REQUEST['order'],'site_id'=>$this->magic_vars['_G']['site_result']['site_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['showpage'] =  show_pages($this->magic_vars['magic_result']);?>
		<div class="listmain">
		<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
			<div class="list-div">
				<img src="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = '';$_tmp = $this->magic_vars['var']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"middle");echo $_tmp;unset($_tmp); ?>" class="productimg" />
				<ul class="list-ul">
						<li class="titleli">
                        <a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"12:...");echo $_tmp;unset($_tmp); ?>&nbsp;&nbsp;</a>
						<? if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if (  $this->magic_vars['var']['is_vouch']==1): ?><a href="/question/a144.html" target="_blank"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/danbao.gif" border="0" alt= /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['is_mb'])) $this->magic_vars['var']['is_mb']=''; ;if (  $this->magic_vars['var']['is_mb']==1): ?><a href="/question/a145.html" target="_blank" rel="tooltip" title="秒标满额系统自动还款"
><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/miao.jpg"  border="0"   /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['is_fast'])) $this->magic_vars['var']['is_fast']=''; ;if (  $this->magic_vars['var']['is_fast']==1): ?><a href="/question/a146.html" target="_blank" rel="tooltip" title="抵押标是小微企业现场审核抵押借款标"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/fast.gif" border="0"  alt=  /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['danbao'])) $this->magic_vars['var']['danbao']=''; ;if (  $this->magic_vars['var']['danbao']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/dan.gif" /><? endif; ?>
						<? if (!isset($this->magic_vars['var']['is_kuai'])) $this->magic_vars['var']['is_kuai']=''; ;if (  $this->magic_vars['var']['is_kuai']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/kuai.gif" /><? endif; ?>
						<? if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;if (  $this->magic_vars['var']['is_lz']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/lz.gif" /><? endif; ?>
						<? if (!isset($this->magic_vars['var']['is_jin'])) $this->magic_vars['var']['is_jin']=''; ;if (  $this->magic_vars['var']['is_jin']==1): ?><a href="/question/a184.html" target="_blank" rel="tooltip" title="净值标是以用户在网站资产做担保的借款标"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/jin.gif"   border="0"  alt= /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['biao_type'])) $this->magic_vars['var']['biao_type']=''; ;if (  $this->magic_vars['var']['biao_type']=="xin"): ?><a href="/question/a143.html" target="_blank" rel="tooltip" title="信用标是以个人用户信用状况借款"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/xin.jpg"   border="0"  /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['isday'])) $this->magic_vars['var']['isday']=''; ;if (  $this->magic_vars['var']['isday']==1): ?><a href="#" target="_blank" rel="tooltip" title="天标是按天借款标"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/day.jpg"   border="0"  /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['flag'])) $this->magic_vars['var']['flag']=''; ;if (  $this->magic_vars['var']['flag']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/tuijian.gif" align="absmiddle"  border="0"/>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']='';if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']=''; ;if (  $this->magic_vars['var']['award']==1 ||  $this->magic_vars['var']['award']==2): ?><a  rel="tooltip" title="投资该借款标除利息外有额外的奖励" href="#" ><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/jiangli.gif"  border="0"  /></a>&nbsp;<? endif; ?>
						<? if (!isset($this->magic_vars['var']['pwd'])) $this->magic_vars['var']['pwd']=''; ;if (  $this->magic_vars['var']['pwd'] != ""): ?><a rel="tooltip" title="定向标是投标的时候需要定向密码的借款标" href="#"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/lock.gif"  border="0"  /></a>&nbsp;<? endif; ?>
                        </li>
                        <li>借款金额：￥<? if (!isset($this->magic_vars['var']['account'])) $this->magic_vars['var']['account'] = ''; echo $this->magic_vars['var']['account']; ?>元</li>
						<li>年利率：<? if (!isset($this->magic_vars['var']['apr'])) $this->magic_vars['var']['apr'] = ''; echo $this->magic_vars['var']['apr']; ?>%</li>
						<li>
                            <div class="float_left">已完成：</div>
                            <div class="jindu float_left">
                                <div class="tiaotiao" style="width:<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale'] = '';$_tmp = $this->magic_vars['var']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%"></div>
                            </div>
                            <div class="float_left">&nbsp;<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale'] = '';$_tmp = $this->magic_vars['var']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%</div>
						</li>
						<li>剩余时间：<span id="endtime<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>"><? if (!isset($this->magic_vars['var']['lave_time'])) $this->magic_vars['var']['lave_time'] = ''; echo $this->magic_vars['var']['lave_time']; ?> </span></li>
						<li>
						<span style="float:left">信用等级：</span><img class="rank" src="<? if (!isset($this->magic_vars['_G']['system']['con_credit_picurl'])) $this->magic_vars['_G']['system']['con_credit_picurl'] = ''; echo $this->magic_vars['_G']['system']['con_credit_picurl']; ?><? if (!isset($this->magic_vars['var']['credit_pic'])) $this->magic_vars['var']['credit_pic'] = '';$_tmp = $this->magic_vars['var']['credit_pic'];$_tmp = $this->magic_modifier("default",$_tmp,"credit_s11.gif");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['var']['credit_jifen'])) $this->magic_vars['var']['credit_jifen'] = '';$_tmp = $this->magic_vars['var']['credit_jifen'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>分"  />
						<!--籍 贯：<? if (!isset($this->magic_vars['var']['user_area'])) $this->magic_vars['var']['user_area'] = '';$_tmp = $this->magic_vars['var']['user_area'];$_tmp = $this->magic_modifier("area",$_tmp,"p,c");echo $_tmp;unset($_tmp); ?>-->
						</li>
						<li>借款期限：<? if (!isset($this->magic_vars['var']['isday'])) $this->magic_vars['var']['isday']=''; ;if (  $this->magic_vars['var']['isday']==1): ?> 
					<? if (!isset($this->magic_vars['var']['time_limit_day'])) $this->magic_vars['var']['time_limit_day'] = ''; echo $this->magic_vars['var']['time_limit_day']; ?>天
					<? if (!isset($this->magic_vars['var']['is_mb'])) $this->magic_vars['var']['is_mb']=''; ;elseif (  $this->magic_vars['var']['is_mb']==1): ?>
					 额满即还
					<? else: ?>
					<? if (!isset($this->magic_vars['var']['time_limit'])) $this->magic_vars['var']['time_limit'] = ''; echo $this->magic_vars['var']['time_limit']; ?>个月 
					<? endif; ?></li>
				</ul>
				<div class="list-btnbox">
					<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==3): ?>
						<? if (!isset($this->magic_vars['var']['repayment_account'])) $this->magic_vars['var']['repayment_account']='';if (!isset($this->magic_vars['var']['repayment_yesaccount'])) $this->magic_vars['var']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['repayment_account'] ==  $this->magic_vars['var']['repayment_yesaccount']): ?>
						<a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="list-btn">已还款</a>
						<? else: ?>
						<a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="list-btn">还款中</a>
						<? endif; ?>
					<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==5): ?>
						<a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="list-btn">用户取消</a>
					<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==4): ?>
						<a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="list-btn">复审失败</a>
					<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==2): ?>
						<a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="list-btn">等待复审</a>
					<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale'] < 100): ?>
						<? if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;if (  $this->magic_vars['var']['is_lz']==1): ?>
						<a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="list-btn">马上认购</a>
						<? else: ?>
						<a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="list-btn">立即投标</a>
						<? endif; ?>
					<? else: ?>
						<? if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;if (  $this->magic_vars['var']['is_lz']==1): ?>
						<a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="list-btn">已认购完</a>
						<? else: ?>
						<a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="list-btn">等待复审</a>
						<? endif; ?>
					<? endif; ?>
					<? if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;if (  $this->magic_vars['var']['is_lz']==1): ?>
						
					<? endif; ?>
                    <a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="xiangxi">< 标的详细 ></a>
				</div>
			</div>
		
	<? endforeach; endif; unset($_from); ?>
		</div>
	<!--分页开始-->
				<br/><div align="center" class="showpage"><? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?></div>
	<!--分页结束-->
	<? unset($_magic_vars); ?>
</div>
<? endif; ?>

<!--main end-->
<script type="text/javascript">

jQuery(function(){
	jQuery("[rel='tooltip']").tooltip();
});

</script>

<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/tab.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/transition.js"></script>

<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/tooltip.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/popover.js"></script>


<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>