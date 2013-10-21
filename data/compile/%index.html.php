<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/modal.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/jquery.flashSlider-1.0.js"></script>

<div class="container">
    <div class="slidebox">
        <div class="slide">
            <ul>
            	<?  if(!isset($this->magic_vars['_G']['scrollpic']) || $this->magic_vars['_G']['scrollpic']=='') $this->magic_vars['_G']['scrollpic'] = array();  $_from = $this->magic_vars['_G']['scrollpic']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
            	<? if (!isset($this->magic_vars['item']['type_id'])) $this->magic_vars['item']['type_id']=''; ;if (  $this->magic_vars['item']['type_id']==1): ?>
            	<li><a href="<? if (!isset($this->magic_vars['item']['url'])) $this->magic_vars['item']['url'] = ''; echo $this->magic_vars['item']['url']; ?>"><img src="<? if (!isset($this->magic_vars['item']['pic'])) $this->magic_vars['item']['pic'] = ''; echo $this->magic_vars['item']['pic']; ?>" alt=""><div class="slide-txt"><? if (!isset($this->magic_vars['item']['summary'])) $this->magic_vars['item']['summary'] = ''; echo $this->magic_vars['item']['summary']; ?></div></a></li>
            	<? endif; ?>
            	<? endforeach; endif; unset($_from); ?>
            </ul>
        </div>
    </div>
    <script>
	
        jQuery(document).ready(function() {
            jQuery('.slide').flashSlider();
        });
	
    </script>
    <div class="contentbox clearfix">
        <div class="left">
            <div class="zbtitle">
                正在招标的项目
            </div><!--正在招标的标题-->
            <div class="listmain">
        	<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'var','limit'=>'10','order'=>'biaoindex');$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<div class="list-div">
                    <a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html"><img src="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = '';$_tmp = $this->magic_vars['var']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"middle");echo $_tmp;unset($_tmp); ?>" class="productimg"></a>
                    <ul class="list-ul">
                        <li class="titleli">
                           <span>
                                <a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"25:...");echo $_tmp;unset($_tmp); ?>&nbsp;&nbsp;</a>
                           </span>
                           <? if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;if (  $this->magic_vars['var']['is_lz']==1): ?>
                           <a href="/question/a146.html" target="_blank" rel="tooltip" title="项目流转标"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/lz.gif" border="0"  alt="点击查看详情"  /></a>&nbsp;
                           <? if (!isset($this->magic_vars['var']['is_fast'])) $this->magic_vars['var']['is_fast']=''; ;elseif (  $this->magic_vars['var']['is_fast']==1): ?>
                           <a href="/question/a146.html" target="_blank" rel="tooltip" title="小微企业现场审核抵押标"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/fast.gif" border="0"  alt="点击查看详情"  /></a>&nbsp;
                           <? if (!isset($this->magic_vars['var']['is_jin'])) $this->magic_vars['var']['is_jin']=''; ;elseif (  $this->magic_vars['var']['is_jin']==1): ?>
                           <a href="/question/a184.html" target="_blank" rel="tooltip" title="借款者在网站内资产做保障的借款标"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/jin.gif"   border="0"  alt="点击查看详情" /></a>&nbsp;
                           <? if (!isset($this->magic_vars['var']['is_mb'])) $this->magic_vars['var']['is_mb']=''; ;elseif (  $this->magic_vars['var']['is_mb']==1): ?>
                           <a href="/question/a145.html" target="_blank" rel="tooltip" title="秒标满额系统自动还款"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/miao.jpg"  border="0" /></a>&nbsp;
                           <? if (!isset($this->magic_vars['var']['is_xin'])) $this->magic_vars['var']['is_xin']=''; ;elseif (  $this->magic_vars['var']['is_xin']==1): ?>
                           <a href="/question/a143.html" target="_blank" rel="tooltip" title="网站给予的信用额度借款标"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/xin.jpg"   border="0"  alt="点击查看详情" /></a>&nbsp;
                           <? endif; ?>
                           <? if (!isset($this->magic_vars['var']['isday'])) $this->magic_vars['var']['isday']=''; ;if (  $this->magic_vars['var']['isday']==1): ?><a href="#" target="_blank" rel="tooltip" title="天标是按天借款标"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/day.jpg"   border="0"  alt="点击查看详情" /></a>&nbsp;<? endif; ?>
                           <? if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']='';if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']=''; ;if (  $this->magic_vars['var']['award']==1 ||  $this->magic_vars['var']['award']==2): ?><a  rel="tooltip" title="投资该借款标除利息外有额外的奖励" href="#" ><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/jiangli.gif"  border="0"  /></a>&nbsp;<? endif; ?>
                           <? if (!isset($this->magic_vars['var']['pwd'])) $this->magic_vars['var']['pwd']=''; ;if (  $this->magic_vars['var']['pwd'] != ""): ?><a rel="tooltip" title="定向标是投标的时候需要定向密码的借款标" href="#"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/lock.gif"  border="0"  /></a>&nbsp;<? endif; ?>
                           <? if (!isset($this->magic_vars['var']['danbao'])) $this->magic_vars['var']['danbao']=''; ;if (  $this->magic_vars['var']['danbao'] == 1): ?><a rel="tooltip" title="由第三方担保公司担保的借款标" href="#"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/dan.gif"  border="0" /></a><? endif; ?>
                           <? if (!isset($this->magic_vars['var']['is_kuai'])) $this->magic_vars['var']['is_kuai']=''; ;if (  $this->magic_vars['var']['is_kuai']==1): ?> <a rel="tooltip" title="快速标，短期资金周转" href="#"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/kuai.gif"  border="0" /></a><? endif; ?>
                        </li>
                        <li>借款金额：￥<? if (!isset($this->magic_vars['var']['account_format'])) $this->magic_vars['var']['account_format'] = ''; echo $this->magic_vars['var']['account_format']; ?>元</li>
                        <li>年利率：<strong><? if (!isset($this->magic_vars['var']['apr'])) $this->magic_vars['var']['apr'] = ''; echo $this->magic_vars['var']['apr']; ?></strong>%</li>
                        <li><? if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;if (  $this->magic_vars['var']['is_lz']==1): ?>流转周期：<? else: ?>借款期限：<? endif; ?><? if (!isset($this->magic_vars['var']['isday'])) $this->magic_vars['var']['isday']=''; ;if (  $this->magic_vars['var']['isday']==1): ?><strong><? if (!isset($this->magic_vars['var']['time_limit_day'])) $this->magic_vars['var']['time_limit_day'] = ''; echo $this->magic_vars['var']['time_limit_day']; ?></strong>天<? else: ?><strong><? if (!isset($this->magic_vars['var']['time_limit'])) $this->magic_vars['var']['time_limit'] = ''; echo $this->magic_vars['var']['time_limit']; ?></strong>个月<? endif; ?></li>
                        <li><span style="float:left">信用等级：</span><img class="rank" src="<? if (!isset($this->magic_vars['_G']['system']['con_credit_picurl'])) $this->magic_vars['_G']['system']['con_credit_picurl'] = ''; echo $this->magic_vars['_G']['system']['con_credit_picurl']; ?><? if (!isset($this->magic_vars['var']['credit_pic'])) $this->magic_vars['var']['credit_pic'] = '';$_tmp = $this->magic_vars['var']['credit_pic'];$_tmp = $this->magic_modifier("default",$_tmp,"credit_s11.gif");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['var']['credit_jifen'])) $this->magic_vars['var']['credit_jifen'] = '';$_tmp = $this->magic_vars['var']['credit_jifen'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>分" /></li>
                        <li>
                            <div class="float_left">已完成：</div>
                            <div class="jindu float_left">
                                <div class="tiaotiao" style="width:<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale'] = '';$_tmp = $this->magic_vars['var']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%"></div>
                            </div>
                            <div class="float_left">&nbsp;<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale'] = '';$_tmp = $this->magic_vars['var']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%</div>
                        </li>
                        <li><? if (!isset($this->magic_vars['var']['isday'])) $this->magic_vars['var']['isday']='';if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;if (  $this->magic_vars['var']['isday']==1 && $this->magic_vars['var']['is_lz']==0): ?>到期全额还款<? if (!isset($this->magic_vars['var']['is_mb'])) $this->magic_vars['var']['is_mb']=''; ;elseif (  $this->magic_vars['var']['is_mb']==1): ?>系统自动还款<? if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;elseif (  $this->magic_vars['var']['is_lz']==1): ?>到期自动回购<? else: ?><? if (!isset($this->magic_vars['var']['style'])) $this->magic_vars['var']['style'] = '';$_tmp = $this->magic_vars['var']['style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?><? endif; ?></li>
					</ul>
					<div class="list-btnbox">
						<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==3): ?>
						<? if (!isset($this->magic_vars['var']['repayment_account'])) $this->magic_vars['var']['repayment_account']='';if (!isset($this->magic_vars['var']['repayment_yesaccount'])) $this->magic_vars['var']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['repayment_account'] ==  $this->magic_vars['var']['repayment_yesaccount']): ?>
						<a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="btn-action">已还款</a>
						<? else: ?>
						<a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="btn-action">还款中</a>
						<? endif; ?>
						<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==5): ?>
						<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/cancel_repayment.jpg" />
						<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==4): ?>
						<a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="btn-action">复审失败</a>
						<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==2): ?>
						<a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="btn-action">等待复审</a>
						<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale'] < 100): ?>
							<? if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;if (  $this->magic_vars['var']['is_lz']==1): ?>
							<a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="btn-action">马上认购</a>
							<? else: ?>
							<a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="btn-action">立即投标</a>
							<? endif; ?>
						<? else: ?>
							<? if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;if (  $this->magic_vars['var']['is_lz']==1): ?>
							<a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="btn-action">已认购完</a>
							<? else: ?>
							<a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="btn-action">等待复审</a>
							<? endif; ?>
					<? endif; ?>
					</div>
				</div>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
            </div><!--标列表-->
        </div>
        <div class="right">
            <? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']==""): ?>
				<div class="rightbox loginbox">
                	<div class="title">
                    	<span class="float_left">用户登录</span>
                	</div>
                <form action="/index.php?user&q=going/login" method="post" id="login_sub">
                    <ul class="articleul loginul">
                        <li><label for="">帐号：</label><input id="username" name="username" type="text" size="22" maxlength="60" value="" class="txt"></li>
                        <li><label for="">密码：<input id="password" name="password" type="password" size="22" maxlength="60" value="" class="txt"></li>
                        <li class="checkboxs">
                        <table><tr><td>记住我</td><td><input type="checkbox" name="remember" value="1" style="width:15px;border:0" /></td><td><select name="save_time"><option value="3600">一个小时</option><option value="18000">五个小时</option><option value="86400">一天</option><option value="604800">一周</option><option value="2592000">一个月</option><option value="31104000">永远</option></select></td></tr></table>
                            <!-- <input type="checkbox">记住用户名 <a class="text-link" href="?user&q=going/getpwd" target=_blank>忘记密码？</a> -->
                        </li>
                        <li>
                            <a href="#" class="denglu" id="login_btn">登  录</a>
                            <a href="?user&q=going/reg" class="zhuce" target=_blank>立即注册</a>
                        </li>
                    </ul>
           	    </form>
		        </div>
			<? else: ?>
			<div class="rightbox loginbox">
				<div class="title">
                    <span class="float_left">用户登录</span>
                </div>
				<ul class="articleul loginul">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
				<td width="100"><img src="<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id'] = '';$_tmp = $this->magic_vars['_G']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"middle");echo $_tmp;unset($_tmp); ?>" height="98" width="98" style="padding-top: 2px; padding-right: 2px; padding-bottom: 2px; padding-left: 2px; border-top-color: #999; border-right-color: #999; border-bottom-color: #999; border-left-color: #999; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: dashed; border-right-style: dashed; border-bottom-style: dashed; border-left-style: dashed;" class="pic"/></td>
                    <td style="padding-left:10px;"><strong><font color="#FF0000"><? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?></font></strong>
					<br/><br/>
					<a href="/index.php?user&q=code/user/credit"><? if (!isset($this->magic_vars['_G']['user_cache']['credit'])) $this->magic_vars['_G']['user_cache']['credit'] = '';$_tmp = $this->magic_vars['_G']['user_cache']['credit'];$_tmp = $this->magic_modifier("credit",$_tmp,"");echo $_tmp;unset($_tmp); ?></a><br/>
					<br/><a href="/index.php?user"><font color="#427E1D">[我的账号]</font></a>
					
					<a href="/index.php?user&q=going/logout"><font color="#FF0000">[退出]</font></a></td>
                  </tr>
                </table>
			    <li style="text-align:center;list-style:none;margin:10px auto;">
	                 <a href="/index.php?user&q=code/account/recharge_new" 
					 class="btn-action">充值</a>&nbsp;&nbsp;&nbsp;
                     <a href="/index.php?user&q=code/account/cash_new" class="btn-action">提现</a>
			    </li>
			</ul>
			</div>
		<? endif; ?>
            <div class="rightbox">
                <div class="title">
                    <span class="float_left">网站公告</span><a href="/gonggao/index.html" class="float_right">[更多]</a>
                </div>
                <ul class="articleul">
                    <? $this->magic_vars['varlgnore'] = array();$this->magic_vars['varsite_id'] = array(22); if(!isset($this->magic_vars['_G']['site_list'])) $this->magic_vars['_G']['site_list']= array(); $_from = $this->magic_vars['_G']['site_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from,'array'); } if (count($_from)):
 $i=0;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
 if ($this->magic_vars['var']['pid']!=''  && in_array($this->magic_vars['var']['site_id'],$this->magic_vars['varsite_id']) ): $this->magic_vars['key'] =$i?>
                    <? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'6','site_var'=>'var','var'=>'item','status'=>'1','site_id'=>$this->magic_vars['var']['site_id']);$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
                        <li class="clearfix"><a href="<? if (!isset($this->magic_vars['item']['site_nid'])) $this->magic_vars['item']['site_nid'] = ''; echo $this->magic_vars['item']['site_nid']; ?>/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html"><span  class="float_left"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></span><span class="float_right">12.15</span></a></li>
                    <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
                    <? $i++;endif;endforeach; endif;  unset($_from);unset($_magic_vars);unset($this->magic_vars['lgnore']); ?>	
                </ul>
            </div>
            <div class="rightbox">
                <div class="title">
                    <span class="float_left">成功贷款</span><a href="/invest/index.html?type=success" class="float_right">[更多]</a>
                </div>
                <div class="sucbox" id="success_borrow">
                    <ul class="articleul">
                        <? $this->magic_vars['query_type']='GetList';$data = array('type'=>'fast','var'=>'var','limit'=>'6','status'=>'3','order'=>'account_down','recMonth'=>'1');$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
                        <li class="clearfix">
                            <img src="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = '';$_tmp = $this->magic_vars['var']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");echo $_tmp;unset($_tmp); ?>" alt="" class="sucimg">
                            <dl>
                                <dt><a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" target="_blank" title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"13");echo $_tmp;unset($_tmp); ?></a></dt>
                                <dd>金额：<b><? if (!isset($this->magic_vars['var']['account'])) $this->magic_vars['var']['account'] = ''; echo $this->magic_vars['var']['account']; ?>元</b></dd>
                                <dd>期限：<? if (!isset($this->magic_vars['var']['time_limit'])) $this->magic_vars['var']['time_limit'] = '';$_tmp = $this->magic_vars['var']['time_limit'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_time_limit");echo $_tmp;unset($_tmp); ?></dd>
                            </dl>
                        </li>
                        <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
                    </ul>
                </div>
            </div>
            <div class="rightbox" style="margin-bottom: 0;">
                <div class="title">
                    <span class="float_left">常见问题</span><a href="/newsdongtai/index.html" class="float_right">[更多]</a>
                </div>
                <ul class="articleul">
                    <? $this->magic_vars['varlgnore'] = array();$this->magic_vars['varsite_id'] = array(11); if(!isset($this->magic_vars['_G']['site_list'])) $this->magic_vars['_G']['site_list']= array(); $_from = $this->magic_vars['_G']['site_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from,'array'); } if (count($_from)):
 $i=0;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
 if ($this->magic_vars['var']['pid']!=''  && in_array($this->magic_vars['var']['site_id'],$this->magic_vars['varsite_id']) ): $this->magic_vars['key'] =$i?>
                    <? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'7','site_var'=>'var','var'=>'item','status'=>'1','site_id'=>$this->magic_vars['var']['site_id']);$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
                        <li><a href="<? if (!isset($this->magic_vars['item']['site_nid'])) $this->magic_vars['item']['site_nid'] = ''; echo $this->magic_vars['item']['site_nid']; ?>/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"18");echo $_tmp;unset($_tmp); ?></a></li>
                    <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
                    <? $i++;endif;endforeach; endif;  unset($_from);unset($_magic_vars);unset($this->magic_vars['lgnore']); ?>	
                </ul>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript">

jQuery(function(){
	jQuery("[rel='tooltip']").tooltip();
	jQuery('#login_btn').click(function(){
		jQuery('#login_sub').submit();
	});
});

</script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/tooltip.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/popover.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/transition.js"></script>

<!--main end-->
<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>


