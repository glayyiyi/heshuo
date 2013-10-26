<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/borrow_new.css" rel="stylesheet" type="text/css" />
<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']==""): ?>
<? header('location:/index.action?user&q=going/login');exit(); ?>
<? endif; ?>
<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']==""): ?>
<div id="main" class="clearfix"><div class="box"><div class="box-con"><p class="reg-pro">系统提示信息</p><div align="center">
		<br><br>请选择发布的标种<br><br><div id="msg_content"><a href="/borrow/index.html" >前往标列表页</a></div><br><br>
		</div></div></div></div>
<? else: ?>
<div id="main" class="clearfix">

<? $data = array('article_id'=>isset($_REQUEST['article_id'])?$_REQUEST['article_id']:'','user_id'=>'0','user_id'=>$this->magic_vars['_G']['user_id'],'id'=>isset($_REQUEST['article_id'])?$_REQUEST['article_id']:'');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['var'] = borrowClass::GetOnes($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>
<!--子栏目 开始-->
<div class="wrap950 header_site_sub">

	<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']='';if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="vouch" ||  $this->magic_vars['var']['is_vouch']==1): ?>
	<div class="alert alert-error fade in">
	 <a class="close" data-dismiss="alert" href="#">&times;</a>
	<font color="#FF0000">尊敬的用户，您好！您正在发布的是担保标，担保标将先由有担保额度的用户进行担保，等担保额度满了自动会进行投标！</font></div>
<script>
jQuery.jBox.prompt('您正在发布的是：担保标!', '提示', 'info');
</script>
	<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;elseif (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="miao"): ?>
	<div class="alert alert-error fade in">
	 <a class="close" data-dismiss="alert" href="#">&times;</a>
	<font color="#FF0000">尊敬的用户，您好！您正在发布的是秒还标，秒还标将在满标后系统自动审核并自动还款！</font></div>
<script>
jQuery.jBox.prompt('您正在发布的是：秒还标!', '提示', 'info');
</script>
	<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;elseif (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="fast"): ?>
	<div class="alert alert-error fade in">
	 <a class="close" data-dismiss="alert" href="#">&times;</a>
	<font color="#FF0000">尊敬的用户，您好！您正在发布的是抵押标，抵押标是小微企业现场审核借款！</font></div>
<script>
jQuery.jBox.prompt('您正在发布的是：抵押标!', '提示', 'info');
</script>
	<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;elseif (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="jin"): ?>
	<div class="alert alert-error fade in">
	 <a class="close" data-dismiss="alert" href="#">&times;</a>
	<font color="#FF0000">尊敬的用户，您好！您正在发布的是净值标，净值标是以您在网站上的资产为担保的一种借款标！</font></div>
<script>
jQuery.jBox.prompt('您正在发布的是：净值标!', '提示', 'info');
</script>
	<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;elseif (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="xin"): ?>
	<div class="alert alert-error fade in">
	 <a class="close" data-dismiss="alert" href="#">&times;</a>
	<font color="#FF0000">尊敬的用户，您好！您正在发布的是信用标，信用标是以您在网站上的借款信用额度为标准的一种个人信用借款标！</font></div>
<script>
jQuery.jBox.prompt('您正在发布的是：信用标!', '提示', 'info');
</script>
	<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;elseif (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="lz"): ?>
	<div class="alert alert-error fade in">
	 <a class="close" data-dismiss="alert" href="#">&times;</a>
	<font color="#FF0000">尊敬的用户，您好！您正在发布的是流转标，投资人即刻投资即刻生效！</font></div>
<script>
jQuery.jBox.prompt('您正在发布的是：流转标!', '提示', 'info');
</script>
		
	<? endif; ?>
</div>
<!--子栏目 结束-->
<form name="form1" method="post" id="form1" action="/index.php?user&q=code/borrow/<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id']=''; ;if (  $this->magic_vars['var']['user_id']==""): ?>add<? else: ?>update<? endif; ?>"  enctype="multipart/form-data">
<!--借款信息 开始-->

<!-- liukun add for biao_type begin-->
<input type="hidden" name="biao_type"  value="<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name'] = ''; echo $this->magic_vars['_G']['biaotype_info']['biao_type_name']; ?>" />
<!-- liukun add for biao_type begin-->
 <script>
 
  jQuery(function() {
    jQuery( "#tabs" ).tabs();
  });
  
  </script>
  <div  id="tabs">
<ul class="list-tabs clearfix">
		<li class="active"><a href="#jkxx"  >借款信息</a></li>
		<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']!="miao"): ?><li><a href="#tbjl" >投标奖励</a></li><? endif; ?>
		<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']='';if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="vouch" ||  $this->magic_vars['var']['is_vouch']==1): ?><li><a href="#dbjl"  >担保奖励</a></li><? endif; ?>
		<li><a href="#zhxx"  >帐户信息公开设置</a></li>
		<!--<li><a href="#jkxq" data-toggle="tab">投标的详细说明</a></li>-->
</ul>

<div id="myTabContent" class="tab-content">
<div class="wrap950 list_1 tab-pane fade in active" id="jkxx">
	<div class="content">
	
			<div class="module_border">
			<div class="w">借贷总金额：</div>
			<div class="c">
					<span id="infojdmoney" data-content="借款金额应在500元至5,000,000元之间。交易币种均为人民币。借款成功后, 每个月按借款本金收取 
                            管理费用，在借款金额中直接扣除。 更详尽的信息请查看帮助网站 收费规则"><input type="text" name="account"  id="account" value="<? if (!isset($this->magic_vars['var']['account'])) $this->magic_vars['var']['account'] = ''; echo $this->magic_vars['var']['account']; ?>" onkeyup="value=value.replace(/[^0-9]/g,'')" /><br /> 大写：<span id="cnaccount"></span>
							</span>
			</div>
			<div class="w">年利率：</div>
			<div class="c">
				<input type="text" name="apr" id="infonlv" data-content="填写您提供给投资者的年利率,所填写的利率是您还款的年利率。1至6个月的年利率不能超过22.40%,7至12个月的年利率不能超过24.00%.范围：1%至24.00%，且只保留小数后最后两位。" value="<? if (!isset($this->magic_vars['var']['apr'])) $this->magic_vars['var']['apr'] = ''; echo $this->magic_vars['var']['apr']; ?>" onkeyup="apr_keyup()" /> % 
			</div>
		</div>
<script type="text/javascript">
	
	 jQuery("#account").keyup(function(){ 
		var account=jQuery("#account").val();
		var cnaccount=Arabia_to_Chinese(account);
		jQuery("#cnaccount").html(cnaccount);
	 //写入触发计算中文总金额 add by weego 20121206
	 });
	 function apr_keyup(){
		 var apr = document.getElementById("infonlv").value;
		 document.getElementById("infonlv").value=apr.replace(/[^0-9.]/g,'');
		 if(apr.indexOf('.')!=apr.lastIndexOf('.')){
			 document.getElementById("infonlv").value=parseFloat(apr);
		 }
	 }

	</script>
		<div class="module_border">
			<div class="w">借款用途：</div>
			<div class="c"  >
				<span id="infojkxx" data-content="说明借款成功后的具体用途">  <select name='use' id='use' >  <option value='1' <?php if($this->magic_vars['var']['use']=='1') echo "selected='selected'" ?>>短期周转</option>  <option value='2' <?php if($this->magic_vars['var']['use']=='2') echo "selected='selected'" ?>>生意周转</option>  <option value='3' <?php if($this->magic_vars['var']['use']=='3') echo "selected='selected'" ?>>生活周转</option>  <option value='4' <?php if($this->magic_vars['var']['use']=='4') echo "selected='selected'" ?>>购物消费</option>  <option value='5' <?php if($this->magic_vars['var']['use']=='5') echo "selected='selected'" ?>>不提现借款</option>  <option value='6' <?php if($this->magic_vars['var']['use']=='6') echo "selected='selected'" ?>>其它借款</option>  <option value='7' <?php if($this->magic_vars['var']['use']=='7') echo "selected='selected'" ?>>创业借款</option> </select> </span>
			</div>
			
			<div class="w">借款期限：</div>
			<div class="c">
<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="miao"): ?>
<span id="infomb" data-content="需要借多少时间。">
			  <select name='time_limit' id='time_limit' disabled='disabled'>  <option value='1' <?php if($this->magic_vars['var']['time_limit']=='1') echo "selected='selected'" ?>>1个月</option>  <option value='2' <?php if($this->magic_vars['var']['time_limit']=='2') echo "selected='selected'" ?>>2个月</option>  <option value='3' <?php if($this->magic_vars['var']['time_limit']=='3') echo "selected='selected'" ?>>3个月</option>  <option value='4' <?php if($this->magic_vars['var']['time_limit']=='4') echo "selected='selected'" ?>>4个月</option>  <option value='5' <?php if($this->magic_vars['var']['time_limit']=='5') echo "selected='selected'" ?>>5个月</option>  <option value='6' <?php if($this->magic_vars['var']['time_limit']=='6') echo "selected='selected'" ?>>6个月</option>  <option value='7' <?php if($this->magic_vars['var']['time_limit']=='7') echo "selected='selected'" ?>>7个月</option>  <option value='8' <?php if($this->magic_vars['var']['time_limit']=='8') echo "selected='selected'" ?>>8个月</option>  <option value='9' <?php if($this->magic_vars['var']['time_limit']=='9') echo "selected='selected'" ?>>9个月</option>  <option value='10' <?php if($this->magic_vars['var']['time_limit']=='10') echo "selected='selected'" ?>>10个月</option>  <option value='11' <?php if($this->magic_vars['var']['time_limit']=='11') echo "selected='selected'" ?>>11个月</option>  <option value='12' <?php if($this->magic_vars['var']['time_limit']=='12') echo "selected='selected'" ?>>12个月</option> </select>
</span>
<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;elseif (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="lz"): ?>

<span id="infotl" data-content="还款周期。">
<span id="time_limit_day">
		 <input type="text" name="time_limit_day"  id="time_limit_day" value="<? if (!isset($this->magic_vars['var']['time_limit_day'])) $this->magic_vars['var']['time_limit_day'] = ''; echo $this->magic_vars['var']['time_limit_day']; ?>" onkeyup="value=value.replace(/[^0-9]/g,'')" /> 天
</span>

</span>
<? else: ?>
<span id="infotl" data-content="需要借多少时间，">
<span id="time_limit" <? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="jin"): ?> style="display:none;" <? endif; ?> >
  <select name='time_limit' id='time_limit' >  <option value='1' <?php if($this->magic_vars['var']['time_limit']=='1') echo "selected='selected'" ?>>1个月</option>  <option value='2' <?php if($this->magic_vars['var']['time_limit']=='2') echo "selected='selected'" ?>>2个月</option>  <option value='3' <?php if($this->magic_vars['var']['time_limit']=='3') echo "selected='selected'" ?>>3个月</option>  <option value='4' <?php if($this->magic_vars['var']['time_limit']=='4') echo "selected='selected'" ?>>4个月</option>  <option value='5' <?php if($this->magic_vars['var']['time_limit']=='5') echo "selected='selected'" ?>>5个月</option>  <option value='6' <?php if($this->magic_vars['var']['time_limit']=='6') echo "selected='selected'" ?>>6个月</option>  <option value='7' <?php if($this->magic_vars['var']['time_limit']=='7') echo "selected='selected'" ?>>7个月</option>  <option value='8' <?php if($this->magic_vars['var']['time_limit']=='8') echo "selected='selected'" ?>>8个月</option>  <option value='9' <?php if($this->magic_vars['var']['time_limit']=='9') echo "selected='selected'" ?>>9个月</option>  <option value='10' <?php if($this->magic_vars['var']['time_limit']=='10') echo "selected='selected'" ?>>10个月</option>  <option value='11' <?php if($this->magic_vars['var']['time_limit']=='11') echo "selected='selected'" ?>>11个月</option>  <option value='12' <?php if($this->magic_vars['var']['time_limit']=='12') echo "selected='selected'" ?>>12个月</option> </select> 
</span></span>
<span id="time_limit_day" <? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="jin"): ?> style="display:;" <? else: ?>style="display:none;"<? endif; ?>>
			<select name="time_limit_day" id="time_limit_day" ><option value="1">1天</option><option value="2">2天</option><option value="3">3天</option><option value="4">4天</option><option value="5">5天</option><option value="6">6天</option><option value="7">7天</option><option value="8">8天</option><option value="9">9天</option><option value="10">10天</option><option value="11">11天</option><option value="12">12天</option><option value="13">13天</option><option value="14">14天</option><option value="15">15天</option><option value="16">16天</option><option value="17">17天</option><option value="18">18天</option><option value="19">19天</option><option value="20">20天</option><option value="21">21天</option><option value="22">22天</option><option value="23">23天</option><option value="24">24天</option><option value="25">25天</option></select>
</span>
<a href="#">按天</a>
 <input type="checkbox" name="changetoDay" <? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="jin"): ?> checked="true" <? endif; ?>   value="1"  id="changetoDay" onclick="">  
<? endif; ?>				
			</div>
		</div>
		<div class="module_border" id="borrow_day" <? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="jin"): ?>style="display:block"<? else: ?>style="display:none;"<? endif; ?>>
			<div class="w">是否天标：</div>
			<div class="c"><input type="hidden" name="isday" id="isday" <? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']='';if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="jin"|| $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="lz"): ?> value="1" <? else: ?> value="0" <? endif; ?>/>是
			</div>
			<div class="sco" style="color:#FF0000" >借款成功后，系统将按照每月30天来计算借款利息。<a href="/gonggao/a244.html" target="_blank">天标系统说明</a></div>
		</div>	

<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="miao"): ?>
		<div class="module_border">
			<div class="w">是否秒标：</div>
			<div class="c">
			<input type="hidden" name="ismb" value="1" />
			<select name="miaobiao" disabled="disabled"><option value="1">是</option><option value="0">否</option></select>
			</div>
			<div class="sco" style="color:#FF0000" >借款成功后，系统立即扣除一个月的利息，并自动进行还款操作</div>
		</div>
<? endif; ?>				
		
<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="fast"): ?>
 
		<div class="module_border">
			<div class="w">是否抵押标：</div>
			<div class="c">
			<input type="hidden" name="isfast" value="1" />
			<input type="hidden" name="fastid" value="<? if (!isset($this->magic_vars['fastid'])) $this->magic_vars['fastid'] = ''; echo $this->magic_vars['fastid']; ?>" />
			<select name="fastbiao" disabled="disabled"><option value="1">是</option><option value="0">否</option></select>
			</div>
			<div class="sco" style="color:#FF0000" ><span id="infogeili" data-content="抵押借款标显示标记“力”，是<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>网站经过严格核查借款人资产负债，根据借款人的信用状况，签订抵押担保手续，确保风险控制在合理的范围内。如借款人到期还款出现困难，借款到期日当天由<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>垫付本金和利息还款，债权转让为<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>网站所有，抵押标逾期后，每天按千分之八收取罚息，本金利息及罚息全部为<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>网站收取.">抵押借款标显示标记“力”，是<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>网站经过严格核查借款人资产负债，根据.....</span></div>
		</div>
		<!--<div class="module_border">
			<div class="w">是否担保：</div>
			<div class="c">
			<select name="danbao" ><option value="0">否</option><option value="1">是</option></select>
			</div>
			<div class="sco" style="color:#FF0000" >选中表示由担保公司担保此借款标</div>
		</div>
		<div class="module_border">
			<div class="w">是否快速：</div>
			<div class="c">
			<select name="kuai" ><option value="0">否</option><option value="1">是</option></select>
			</div>
			<div class="sco" style="color:#FF0000" >选中表示此借款标快速标</div>
		</div>-->
<? endif; ?>	

<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="jin"): ?>
		<div class="module_border">
			<div class="w">是否净资产标：</div>
			<div class="c">
			<input type="hidden" name="isjin" value="1" />
			<select name="jinbiao" disabled="disabled"><option value="1">是</option><option value="0">否</option></select>
			</div>
			<div class="sco" style="color:#FF0000" >净资产借款标显示标记“净”.</div>
		</div>
<? endif; ?>

<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="lz"): ?>
<input name="is_lz" type="hidden" value="1" />
<div class="module_border">
			<div class="w">每份金额：</div>
			<div class="c">
                  <span id="infolzpermoney" data-content="设置本标认购的每份价值。" ><input disabled="disabled" type="text" name="lzpermoney" id="lzpermoney" value='100'> 元</span>
			</div>
                  <div class="w">总份数：</div>
			<div class="c">
                  <span id="infolzper" data-content='系统根据借款金额和每份金额，自动自算本标的流转份数。' ><input disabled="disabled" type="text" name="lzper" id="lzper"></span><input type="button" name="clstotalper" id="clstotalper" value="计算"/>
			</div>
</div>

<script type="text/javascript">

//计算流转标的总份数
jQuery("#clstotalper").click(function(){
	if(jQuery("#account").val()%jQuery("#lzpermoney").val()!=0){
		jQuery.jBox.error('借款金额必须为100的整数倍','提示');
		return;
	}
	var clstotalper=jQuery("#account").val()/jQuery("#lzpermoney").val();
	jQuery("#lzper").val(clstotalper+"份");

})


</script>
<? else: ?>

<div class="module_border">
			<div class="w">是否定向标：</div>
			<div class="c">
                  <span id="infoisDXB" data-content="定向标可邀请特定的用户或朋友来投标，设置好密码后，告诉对方此标的密码即可." ><input type="checkbox" name="isDXB" id="isDXB" value="1" onclick="checkDXB()">  </span>
			</div>
                  <div class="w">定向标密码：</div>
			<div class="c">
                  <span id="infopwd" data-content='定向标密码可以是数字或文字。如"恭喜发财","生日快乐"等等 ' ><input disabled="disabled" type="text" name="pwd" id="pwd"></span>
			</div>
</div>
<? endif; ?>

<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="xin"): ?>
<input type="hidden" name="isxin" value="1" />
<? endif; ?>
		<div class="module_border">
			<div class="w">最低投标金额：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="lz"): ?>
				<span id="infolow" data-content="允许投资者对一个借款标的投标总额的限制">100元</span>
				<? else: ?>	
				<span id="infolow" data-content="允许投资者对一个借款标的投标总额的限制">  <select name='lowest_account' id='lowest_account' >  <option value='50' <?php if($this->magic_vars['var']['lowest_account']=='50') echo "selected='selected'" ?>>50元</option>  <option value='100' <?php if($this->magic_vars['var']['lowest_account']=='100') echo "selected='selected'" ?>>100元</option>  <option value='150' <?php if($this->magic_vars['var']['lowest_account']=='150') echo "selected='selected'" ?>>150元</option>  <option value='200' <?php if($this->magic_vars['var']['lowest_account']=='200') echo "selected='selected'" ?>>200元</option>  <option value='500' <?php if($this->magic_vars['var']['lowest_account']=='500') echo "selected='selected'" ?>>500元</option>  <option value='1000' <?php if($this->magic_vars['var']['lowest_account']=='1000') echo "selected='selected'" ?>>1000元</option>  <option value='2000' <?php if($this->magic_vars['var']['lowest_account']=='2000') echo "selected='selected'" ?>>2000元</option>  <option value='3000' <?php if($this->magic_vars['var']['lowest_account']=='3000') echo "selected='selected'" ?>>3000元</option>  <option value='5000' <?php if($this->magic_vars['var']['lowest_account']=='5000') echo "selected='selected'" ?>>5000元</option>  <option value='6000' <?php if($this->magic_vars['var']['lowest_account']=='6000') echo "selected='selected'" ?>>6000元</option>  <option value='7000' <?php if($this->magic_vars['var']['lowest_account']=='7000') echo "selected='selected'" ?>>7000元</option>  <option value='8000' <?php if($this->magic_vars['var']['lowest_account']=='8000') echo "selected='selected'" ?>>8000元</option>  <option value='9000' <?php if($this->magic_vars['var']['lowest_account']=='9000') echo "selected='selected'" ?>>9000元</option>  <option value='10000' <?php if($this->magic_vars['var']['lowest_account']=='10000') echo "selected='selected'" ?>>10000元</option> </select></span>
			<? endif; ?>
			</div>
			<div class="w">最多投标总额：</div>
			<div class="c">
			<span id="infomax" data-content="允许投资者对一个借款标的投标总额的限制">  <select name='most_account' id='most_account' >  <option value='0' <?php if($this->magic_vars['var']['most_account']=='0') echo "selected='selected'" ?>>没有限制</option>  <option value='50' <?php if($this->magic_vars['var']['most_account']=='50') echo "selected='selected'" ?>>50元</option>  <option value='100' <?php if($this->magic_vars['var']['most_account']=='100') echo "selected='selected'" ?>>100元</option>  <option value='200' <?php if($this->magic_vars['var']['most_account']=='200') echo "selected='selected'" ?>>200元</option>  <option value='500' <?php if($this->magic_vars['var']['most_account']=='500') echo "selected='selected'" ?>>500元</option>  <option value='1000' <?php if($this->magic_vars['var']['most_account']=='1000') echo "selected='selected'" ?>>1000元</option>  <option value='1500' <?php if($this->magic_vars['var']['most_account']=='1500') echo "selected='selected'" ?>>1500元</option>  <option value='2000' <?php if($this->magic_vars['var']['most_account']=='2000') echo "selected='selected'" ?>>2000元</option>  <option value='5000' <?php if($this->magic_vars['var']['most_account']=='5000') echo "selected='selected'" ?>>5000元</option>  <option value='10000' <?php if($this->magic_vars['var']['most_account']=='10000') echo "selected='selected'" ?>>10000元</option>  <option value='15000' <?php if($this->magic_vars['var']['most_account']=='15000') echo "selected='selected'" ?>>15000元</option>  <option value='20000' <?php if($this->magic_vars['var']['most_account']=='20000') echo "selected='selected'" ?>>20000元</option>  <option value='30000' <?php if($this->magic_vars['var']['most_account']=='30000') echo "selected='selected'" ?>>30000元</option>  <option value='50000' <?php if($this->magic_vars['var']['most_account']=='50000') echo "selected='selected'" ?>>50000元</option>  <option value='80000' <?php if($this->magic_vars['var']['most_account']=='80000') echo "selected='selected'" ?>>80000元</option>  <option value='100000' <?php if($this->magic_vars['var']['most_account']=='100000') echo "selected='selected'" ?>>100000元</option>  <option value='100000' <?php if($this->magic_vars['var']['most_account']=='100000') echo "selected='selected'" ?>>150000元</option>  <option value='200000' <?php if($this->magic_vars['var']['most_account']=='200000') echo "selected='selected'" ?>>200000元</option> </select></span>
			</div>
		</div>
		<div class="module_border">
			<div class="w">有效时间：</div>
			<div class="c">
			<span id="infoyxtime" data-content="设置此次借款融资的天数。融资进度达到100%后直接进行网站的复审">  <select name='valid_time' id='valid_time' >  <option value='1' <?php if($this->magic_vars['var']['valid_time']=='1') echo "selected='selected'" ?>>1天</option>  <option value='2' <?php if($this->magic_vars['var']['valid_time']=='2') echo "selected='selected'" ?>>2天</option>  <option value='3' <?php if($this->magic_vars['var']['valid_time']=='3') echo "selected='selected'" ?>>3天</option>  <option value='4' <?php if($this->magic_vars['var']['valid_time']=='4') echo "selected='selected'" ?>>4天</option>  <option value='5' <?php if($this->magic_vars['var']['valid_time']=='5') echo "selected='selected'" ?>>5天</option>  <option value='6' <?php if($this->magic_vars['var']['valid_time']=='6') echo "selected='selected'" ?>>6天</option>  <option value='7' <?php if($this->magic_vars['var']['valid_time']=='7') echo "selected='selected'" ?>>7天</option>  <option value='366' <?php if($this->magic_vars['var']['valid_time']=='366') echo "selected='selected'" ?>>永不过期</option> </select></span>
			</div>
			<div class="w">还款方式：</div>
			<div class="c">
			<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="lz"): ?>
				<span id="infohk" data-content="按月分期还款是指贷款者借款成功后，每月还本息。"><select disabled="disabled" name='style' id=style ><option value='0' >按月分期还款</option></select></span>
			<? else: ?>
				<span id="infohk" data-content="按月分期还款是指贷款者借款成功后，每月还本息。">  <select name='style' id='style' >  <option value='0' <?php if($this->magic_vars['var']['style']=='0') echo "selected='selected'" ?>>按月分期还款</option>  <option value='3' <?php if($this->magic_vars['var']['style']=='3') echo "selected='selected'" ?>>按月付息到期还本</option>  <option value='2' <?php if($this->magic_vars['var']['style']=='2') echo "selected='selected'" ?>>到期全额还款</option> </select></span>
			<? endif; ?>
			</div>
		</div>
	</div>
	<div class="foot"></div>
</div>
<!--借款信息 结束-->

<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="miao"): ?>

<? else: ?>
<!--投标奖励 开始-->
<div class="wrap950 list_1 tab-pane fade" id="tbjl"">
	<div class="content">
	<div class="module_border">
			<div class="w"><span id="infowjiang" data-content="如果您设置了奖励金额，将会冻结您帐户中相应的账户余额。如果要设置奖励，请确保您的帐户有足够 的账户余额。"><input type="radio" name="award" id="award" value="0" <? if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']='';if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']=''; ;if (  $this->magic_vars['var']['award']==0 ||  $this->magic_vars['var']['award']==""): ?> checked="checked"<? endif; ?> onclick="change_j(0)">不设置奖励&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
			<div class="c"></div>
		</div>
		<div class="module_border">
			<div class="w"><span id="infoyjiang2" data-content="范围：0.1%~6% ，这里设置本次标的要奖励给所有投标用户的奖励比例。"><input type="radio" name="award" id="award" value="2" <? if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']=''; ;if (  $this->magic_vars['var']['award']==2): ?> checked="checked"<? endif; ?> onclick="change_j(2)"/>按投标金额比例奖励：</span></div>
			<div class="c">
				<input type="text" id="funds" name="funds" value="<? if (!isset($this->magic_vars['var']['funds'])) $this->magic_vars['var']['funds'] = ''; echo $this->magic_vars['var']['funds']; ?>" size="5" />%  
			</div>
			<div class="w"><span id="infoyjiang1" data-content="不能低于5元,不能高于总标的金额的2%，且请保留到“元”为单位。这里设置本次标的要奖励给所有投标用户的总金额。"><input type="radio" name="award" id="award" value="1" <? if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']=''; ;if (  $this->magic_vars['var']['award']==1): ?> checked="checked"<? endif; ?> onclick="change_j(1)"/>按固定金额分摊奖励：</span></div>
			<div class="c">
				<input type="text" id="part_account" name="part_account" value="<? if (!isset($this->magic_vars['var']['part_account'])) $this->magic_vars['var']['part_account'] = ''; echo $this->magic_vars['var']['part_account']; ?>" size="5" />元
			</div>
		</div>
	</div>
	<div class="foot"></div>
</div>
<!--投标奖励 结束-->
<? endif; ?>

<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']='';if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="vouch" ||  $this->magic_vars['var']['is_vouch']==1): ?>

<!--担保奖励 开始-->
<div class="wrap950 list_1 tab-pane fade" id="dbjl">
	<div class="content">
		<div class="module_border">
			<div class="w">担保比例：</div>
			<div class="c">
			<input name="vouch_award" id="infodbbl" data-content="担保奖励按照所要借款的百分比给担保人，比如借100，奖励是3%，担保人借出50，则奖励50*3%=1.5" type="text" value="<? if (!isset($this->magic_vars['var']['vouch_award'])) $this->magic_vars['var']['vouch_award'] = ''; echo $this->magic_vars['var']['vouch_award']; ?>" size="6" />%
			</div>
			<div class="w">指定担保人：</div>
			<div class="c">
			<input name="vouch_user" type="text" id="infodbb2" data-content="指定多个担保人请用|隔开，为空表示所有人都可以担保" value="<? if (!isset($this->magic_vars['var']['vouch_user'])) $this->magic_vars['var']['vouch_user'] = ''; echo $this->magic_vars['var']['vouch_user']; ?>" /><input name="is_vouch" type="hidden" value="1" />
			</div>
		</div>
	</div>
	<div class="foot"></div>
</div>
<!--担保奖励 结束-->
<? endif; ?>

<!--帐户信息公开设置 开始-->
<div class="wrap950 list_1 tab-pane fade" id="zhxx">
	<div class="content">
		<div class="module_border">
			<div class="w"><span id="infoss1" data-content="如果您勾上此选项，将会实时公开您帐户的：账户总额、可用余额、冻结总额。">公开我的帐户资金情况<input type="checkbox" name="open_account" value="1" checked="checked" disabled="disabled"/></span> </div>
			<div class="c"></div>
			<div class="w"><span id="infoss1" data-content="如果您勾上此选项，将会实时公开您帐户的：借款总额、已还款总额、未还款总额、迟还总额、逾期总额。">公开我的借款资金情况<input type="checkbox" name="open_borrow" value="1" checked="checked" disabled="disabled"/></span></div>
			<div class="c"></div>
		</div>
		
		<div class="module_border">
			<div class="w"><span id="infoss1" data-content="如果您勾上此选项，将会实时公开您帐户的：投标总额、已收回总额、待收回总额。">公开我的投标资金情况<input type="checkbox" name="open_tender" value="1" <? if (!isset($this->magic_vars['var']['open_tender'])) $this->magic_vars['var']['open_tender']=''; ;if (  $this->magic_vars['var']['open_tender']==1): ?> checked="checked"<? endif; ?>/></span></div>
			<div class="c"></div>
			<div class="w">
				<span id="infoss1" data-content="如果您勾上此选项，将会实时公开您帐户的：最低信用额度、最高信用额度。">公开我的信用额度情况 <input type="checkbox" name="open_credit" value="1" checked="checked" disabled="disabled"/></span></div>
			<div class="c"></div>
		</div>
	
	</div>
	<div class="foot"></div>
</div>
</div> <!-- myTabContent -->

</div>
<!--帐户信息公开设置 结束-->
<br/>
<!--帐户信息公开设置 开始-->
<ul  id="tab2" class="list-tab clearfix">
		<li class="active"><a href="#tbxx" data-toggle="tab2">借款的详细说明</a></li>
</ul>
<div id="myTabContent" class="tab-content">

<div class="wrap950 list_1 tab-pane fade in active" id="tbxx">
	<div class="content">
		<div class="module_border">
			<div class="w">标题：</div>
			<div style="padding-top:6px;">
				<input type="text" name="name" value="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>" size="50" id="infotitle" data-content="填写借款的标题，写好一点能借的几率也大一点" /> 
			</div>
			 
		</div>
                <script charset="gb2312" src="/plugins/editor/kindeditor/kindeditor-min.js"></script>
		<script charset="gb2312" src="/plugins/editor/kindeditor/lang/zh_CN.js"></script>
		<div class="module_border">
			<div class="w">信息：</div>
			<div style="float:left">
				<textarea name="content" id="content" style="width:650px;height:200px;visibility:hidden;" >
                                    <? if (!isset($this->magic_vars['var']['content'])) $this->magic_vars['var']['content']=''; ;if (  $this->magic_vars['var']['content']!=""): ?>
                                        <? if (!isset($this->magic_vars['var']['content'])) $this->magic_vars['var']['content'] = ''; echo $this->magic_vars['var']['content']; ?>
                                    <? else: ?>
                                        <P>借款详情： </P>
                                        <P>站内关联用户名：</P>
                                        <P>还款保障：</P>
                                    <? endif; ?>
                                </textarea>
				<!--iframe src="/plugins/editor/sinaeditor/editor.htm?id=content&ReadCookie=0" frameBorder="0" marginHeight="0" marginWidth="0" scrolling="No" width="640" height="460"></iframe-->
			</div>
		</div>
		<div class="module_border">
			<div class="w">验证码：</div>
			<div style="padding-top:6px;">
				<input name="valicode" type="text" size="11" maxlength="4" style="float:left" tabindex="3"/> &nbsp;&nbsp;&nbsp; <img src="/plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();"  style="cursor:pointer; margin-left:3px;" />
				<input type="hidden" value="<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>" name="id" />
			</div>
			<div class="sco" ></div>
		</div>
	</div>
	<br/>
	<div class="content" style="text-align:center;">
		<input type="button" value="确认提交" class="btn-action" onclick="check_form()" />
	</div>
	<div class="foot"></div>
</div>

</div> <!-- myTabContent -->
<!--帐户信息公开设置 结束-->
<!--帐户信息公开设置 开始-->

</form>

</div>
<? unset($_magic_vars);unset($data); ?>




<script type="text/javascript">
        function Arabia_to_Chinese(Num) {
            for (i = Num.length - 1; i >= 0; i--) {
                Num = Num.replace(",", "")//替换tomoney()中的“,”
                Num = Num.replace(" ", "")//替换tomoney()中的空格
            }
            Num = Num.replace("￥", "")//替换掉可能出现的￥字符
            if (isNaN(Num)) { //验证输入的字符是否为数字
            	jQuery.jBox.error('请检查小写金额是否正确','提示');
                return;
            }
            if(Num>max_account){
            	jQuery.jBox.error('借款金额不能大于'+max_account+'元','提示');
            	document.getElementById("account").value=max_account;
            	Num = max_account.toString();
            }
            //---字符处理完毕，开始转换，转换采用前后两部分分别转换---//
            part = String(Num).split(".");
            newchar = "";
            //小数点前进行转化
            for (i = part[0].length - 1; i >= 0; i--) {
                if (part[0].length > 10) {
                	document.getElementById("account").value=0;
                	jQuery.jBox.error('位数过大，无法计算', '提示');
                	return;
                } //若数量超过拾亿单位，提示
                tmpnewchar = ""
                perchar = part[0].charAt(i);
                switch (perchar) {
                    case "0": tmpnewchar = "零" + tmpnewchar; break;
                    case "1": tmpnewchar = "壹" + tmpnewchar; break;
                    case "2": tmpnewchar = "贰" + tmpnewchar; break;
                    case "3": tmpnewchar = "叁" + tmpnewchar; break;
                    case "4": tmpnewchar = "肆" + tmpnewchar; break;
                    case "5": tmpnewchar = "伍" + tmpnewchar; break;
                    case "6": tmpnewchar = "陆" + tmpnewchar; break;
                    case "7": tmpnewchar = "柒" + tmpnewchar; break;
                    case "8": tmpnewchar = "捌" + tmpnewchar; break;
                    case "9": tmpnewchar = "玖" + tmpnewchar; break;
                }
                switch (part[0].length - i - 1) {
                    case 0: tmpnewchar = tmpnewchar + "元"; break;
                    case 1: if (perchar != 0) tmpnewchar = tmpnewchar + "拾"; break;
                    case 2: if (perchar != 0) tmpnewchar = tmpnewchar + "佰"; break;
                    case 3: if (perchar != 0) tmpnewchar = tmpnewchar + "仟"; break;
                    case 4: tmpnewchar = tmpnewchar + "万"; break;
                    case 5: if (perchar != 0) tmpnewchar = tmpnewchar + "拾"; break;
                    case 6: if (perchar != 0) tmpnewchar = tmpnewchar + "佰"; break;
                    case 7: if (perchar != 0) tmpnewchar = tmpnewchar + "仟"; break;
                    case 8: tmpnewchar = tmpnewchar + "亿"; break;
                    case 9: tmpnewchar = tmpnewchar + "拾"; break;
                }
                newchar = tmpnewchar + newchar;
            }
            //小数点之后进行转化
            if (Num.indexOf(".") != -1) {
                if (part[1].length > 2) {
                	jQuery.jBox.error('小数点之后只能保留两位,系统将自动截段','提示');
                    part[1] = part[1].substr(0, 2)
                }
                for (i = 0; i < part[1].length; i++) {
                    tmpnewchar = ""
                    perchar = part[1].charAt(i)
                    switch (perchar) {
                        case "0": tmpnewchar = "零" + tmpnewchar; break;
                        case "1": tmpnewchar = "壹" + tmpnewchar; break;
                        case "2": tmpnewchar = "贰" + tmpnewchar; break;
                        case "3": tmpnewchar = "叁" + tmpnewchar; break;
                        case "4": tmpnewchar = "肆" + tmpnewchar; break;
                        case "5": tmpnewchar = "伍" + tmpnewchar; break;
                        case "6": tmpnewchar = "陆" + tmpnewchar; break;
                        case "7": tmpnewchar = "柒" + tmpnewchar; break;
                        case "8": tmpnewchar = "捌" + tmpnewchar; break;
                        case "9": tmpnewchar = "玖" + tmpnewchar; break;
                    }
                    if (i == 0) tmpnewchar = tmpnewchar + "角";
                    if (i == 1) tmpnewchar = tmpnewchar + "分";
                    newchar = newchar + tmpnewchar;
                }
            }
            //替换所有无用汉字
            while (newchar.search("零零") != -1)
                newchar = newchar.replace("零零", "零");
            newchar = newchar.replace("零亿", "亿");
            newchar = newchar.replace("亿万", "亿");
            newchar = newchar.replace("零万", "万");
            newchar = newchar.replace("零元", "元");
            newchar = newchar.replace("零角", "");
            newchar = newchar.replace("零分", "");

            if (newchar.charAt(newchar.length - 1) == "元" || newchar.charAt(newchar.length - 1) == "角")
                newchar = newchar + "整"
            return newchar;

        }
    </script>

 

<script type="text/javascript">

								
<? $data = array('user_id'=>'0','var'=>'acc','user_id'=>$this->magic_vars['_G']['user_id']);  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['acc'] = borrowClass::GetUserLog($data);if(!is_array($this->magic_vars['acc'])){ $this->magic_vars['acc']=array();}?>

	var total_zi = (<? if (!isset($this->magic_vars['acc']['total'])) $this->magic_vars['acc']['total'] = '';$_tmp = $this->magic_vars['acc']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>-parseFloat(<? if (!isset($this->magic_vars['acc']['no_use_money'])) $this->magic_vars['acc']['no_use_money'] = '';$_tmp = $this->magic_vars['acc']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>)-<? if (!isset($this->magic_vars['acc']['wait_payment'])) $this->magic_vars['acc']['wait_payment'] = '';$_tmp = $this->magic_vars['acc']['wait_payment'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>-<? if (!isset($this->magic_vars['acc']['borrowvouch_amount_useReal'])) $this->magic_vars['acc']['borrowvouch_amount_useReal'] = '';$_tmp = $this->magic_vars['acc']['borrowvouch_amount_useReal'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>)*0.95;
        var jinMoney = (<? if (!isset($this->magic_vars['acc']['total'])) $this->magic_vars['acc']['total'] = '';$_tmp = $this->magic_vars['acc']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>-parseFloat(<? if (!isset($this->magic_vars['acc']['no_use_money'])) $this->magic_vars['acc']['no_use_money'] = '';$_tmp = $this->magic_vars['acc']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>)-<? if (!isset($this->magic_vars['acc']['wait_payment'])) $this->magic_vars['acc']['wait_payment'] = '';$_tmp = $this->magic_vars['acc']['wait_payment'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>-<? if (!isset($this->magic_vars['acc']['borrowvouch_amount_useReal'])) $this->magic_vars['acc']['borrowvouch_amount_useReal'] = '';$_tmp = $this->magic_vars['acc']['borrowvouch_amount_useReal'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>);
       //var total_zi = (<? if (!isset($this->magic_vars['acc']['total'])) $this->magic_vars['acc']['total'] = '';$_tmp = $this->magic_vars['acc']['total'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>-<? if (!isset($this->magic_vars['acc']['no_use_money'])) $this->magic_vars['acc']['no_use_money'] = '';$_tmp = $this->magic_vars['acc']['no_use_money'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>-<? if (!isset($this->magic_vars['acc']['wait_payment'])) $this->magic_vars['acc']['wait_payment'] = '';$_tmp = $this->magic_vars['acc']['wait_payment'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>)*0.95;

	var video_status = <? if (!isset($this->magic_vars['_G']['user_result']['video_status'])) $this->magic_vars['_G']['user_result']['video_status'] = '';$_tmp = $this->magic_vars['_G']['user_result']['video_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>;
	var scene_status = <? if (!isset($this->magic_vars['_G']['user_result']['scene_status'])) $this->magic_vars['_G']['user_result']['scene_status'] = '';$_tmp = $this->magic_vars['_G']['user_result']['scene_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>;
	var phone_status = <? if (!isset($this->magic_vars['_G']['user_result']['phone_status'])) $this->magic_vars['_G']['user_result']['phone_status'] = '';$_tmp = $this->magic_vars['_G']['user_result']['phone_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>;
        var vip_status = <? if (!isset($this->magic_vars['_G']['user_result']['vip_status'])) $this->magic_vars['_G']['user_result']['vip_status'] = '';$_tmp = $this->magic_vars['_G']['user_result']['vip_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>;
	var crmoney = <? if (!isset($this->magic_vars['acc']['credit'])) $this->magic_vars['acc']['credit'] = '';$_tmp = $this->magic_vars['acc']['credit'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>;
	var cr = <? if (!isset($this->magic_vars['_G']['user_result']['credit'])) $this->magic_vars['_G']['user_result']['credit'] = '';$_tmp = $this->magic_vars['_G']['user_result']['credit'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>;
	var real_s = <? if (!isset($this->magic_vars['_G']['user_result']['real_status'])) $this->magic_vars['_G']['user_result']['real_status'] = '';$_tmp = $this->magic_vars['_G']['user_result']['real_status'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>;
	var danbao_money = <? if (!isset($this->magic_vars['acc']['borrow_vouch'])) $this->magic_vars['acc']['borrow_vouch'] = '';$_tmp = $this->magic_vars['acc']['borrow_vouch'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>;
	var sxf = <? if (!isset($this->magic_vars['_G']['system']['con_borrow_fee'])) $this->magic_vars['_G']['system']['con_borrow_fee'] = ''; echo $this->magic_vars['_G']['system']['con_borrow_fee']*100; ?>;
	
	<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']='';if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="vouch" ||  $this->magic_vars['var']['is_vouch']==1): ?>
	jQuery.jBox.alert("你的借款担保额度为<? if (!isset($this->magic_vars['acc']['borrow_vouch'])) $this->magic_vars['acc']['borrow_vouch'] = ''; echo $this->magic_vars['acc']['borrow_vouch']; ?>元,你还能借<? if (!isset($this->magic_vars['acc']['borrow_vouch_use'])) $this->magic_vars['acc']['borrow_vouch_use'] = ''; echo $this->magic_vars['acc']['borrow_vouch_use']; ?>元",'提示');
	var danbao = 1;
	//var max_account = <? if (!isset($this->magic_vars['acc']['borrow_vouch_use'])) $this->magic_vars['acc']['borrow_vouch_use'] = '';$_tmp = $this->magic_vars['acc']['borrow_vouch_use'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>;
	<? else: ?>
	var danbao = 0;
	//var max_account = <? if (!isset($this->magic_vars['acc']['credit_use'])) $this->magic_vars['acc']['credit_use'] = '';$_tmp = $this->magic_vars['acc']['credit_use'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>;
	<? endif; ?>
<? unset($_magic_vars);unset($data); ?>
var max_account=<? if (!isset($this->magic_vars['_G']['biaotype_info']['max_amount'])) $this->magic_vars['_G']['biaotype_info']['max_amount'] = ''; echo $this->magic_vars['_G']['biaotype_info']['max_amount']; ?>;
var min_account=<? if (!isset($this->magic_vars['_G']['biaotype_info']['min_amount'])) $this->magic_vars['_G']['biaotype_info']['min_amount'] = ''; echo $this->magic_vars['_G']['biaotype_info']['min_amount']; ?>;
var max_fax =<? if (!isset($this->magic_vars['_G']['system']['con_max_fee'])) $this->magic_vars['_G']['system']['con_max_fee'] = '';$_tmp = $this->magic_vars['_G']['system']['con_max_fee'];$_tmp = $this->magic_modifier("default",$_tmp,"20");echo $_tmp;unset($_tmp); ?>;
var max_apr =<? if (!isset($this->magic_vars['_G']['system']['con_borrow_apr'])) $this->magic_vars['_G']['system']['con_borrow_apr'] = '';$_tmp = $this->magic_vars['_G']['system']['con_borrow_apr'];$_tmp = $this->magic_modifier("default",$_tmp,"22.18");echo $_tmp;unset($_tmp); ?>;

<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="fast"): ?> var maxdai = 1000000000; var fastbiao = 1;<? else: ?> var maxdai=5000; var fastbiao = 0;<? endif; ?>

<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="miao"): ?> var miaobiao_is = 1;<? else: ?> var miaobiao_is = 0;<? endif; ?>

<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="jin"): ?> var jinbiao = 1;<? else: ?> var jinbiao = 0;<? endif; ?>
<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="lz"): ?> var lzbiao = 1;<? else: ?> var lzbiao = 0;<? endif; ?>
<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="xin"): ?> var xinbiao = 1;<? else: ?> var xinbiao = 0;<? endif; ?>



 
 
			var editor;
			KindEditor.ready(function(K) {
				editor = K.create('textarea[name="content"]', {
					resizeType : 1,
					allowPreviewEmoticons : false,
					allowImageUpload : true,
					items : [
						'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
						'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
						'insertunorderedlist', '|', 'emoticons', 'image', 'link']
				});
			});
	 
								
			jQuery('#changetoDay').click(function(){

			var isday=jQuery('#isday').val();
		
			if(isday==0){
				jQuery('#isday').val('1');
				 
				jQuery('#time_limit_day').show();
				jQuery('#time_limit').hide();
			}else{
				jQuery('#isday').val('0');
				 
				jQuery('#time_limit_day').hide();
				jQuery('#time_limit').show();
			}

			jQuery('#borrow_day').toggle('slow');
			
								
			});

function checkDXB(){
    var frm = document.forms['form1'];
    if(frm.elements['isDXB'].checked){
        frm.elements['pwd'].disabled=false;
    }else{
        frm.elements['pwd'].disabled=true;
        frm.elements['pwd'].value="";
    }
}

function check_form(){
	 var frm = document.forms['form1'];
	 var account = frm.elements['account'].value;
	 var title = frm.elements['name'].value;
	 var style = frm.elements['style'].value;
	 //var content = frm.elements['content'].value;
	 var content = $("iframe").get(0).contentWindow.document.body.innerHTML;
         frm.elements['content'].value = content;
	 if(lzbiao){
		 var time_limit = "";
		 var lowest_account = "";
	 }else{
		 var time_limit = frm.elements['time_limit'].value;
		 var lowest_account = frm.elements['lowest_account'].value;
	 }
	 var most_account = frm.elements['most_account'].value;
	 if(miaobiao_is){
		 var award = 0;
		 var part_account = '';
		 var funds = '';
		 var time_limit_day = '';
	 }else{
		 var award = get_award_value();
		 var part_account = frm.elements['part_account'].value;
		 var funds = frm.elements['funds'].value;
		 var time_limit_day = frm.elements['time_limit_day'].value;
	 }
	 var apr = frm.elements['apr'].value;
	 var valicode = frm.elements['valicode'].value;
	 var use = frm.elements['most_account'].value;
	 var errorMsg = '';
	  if (account.length == 0 ) {
		errorMsg += '- 总金额不能为空<br/>';
	  }
	  if(account>max_account){
		  errorMsg += '- 总金额不能大于'+max_account+'元<br/>';
	  }
	  if(account<min_account){
		  errorMsg += '- 总金额不能小于'+min_account+'元<br/>';
	  }
	  if(lzbiao){
		  if(account%100!==0){
			  errorMsg += '- 流转标的借款金额必须为100的倍数' + '\n';
		  }
		if(time_limit_day<1)
		{
			errorMsg += '- 请填写借款周期<br/>';
		}
	  }
	  if(danbao){//担宝
		   if(account > danbao_money){//如果大于担保额度,不允许
                  errorMsg += '- 您当前的贷款金额大于您的可用担保额度！<br/>';
           }else if(cr < 30 || real_s != '1'){
                  errorMsg += '- 您尚未通过实名认证<br/>';
                  jQuery.jBox.alert(errorMsg,'提示');
                  location.href='/index.php?user&q=code/user/realname';
                  return false;
            }else if(vip_status != 1){
                            errorMsg += '-您不是VIP用户，请先申请VIP！<br/>';
                            jQuery.jBox.alert(errorMsg,'提示');
                            location.href="/vip/index.html";
                            return false;
            }else if(cr <30){
                  errorMsg += '- 您当前的积分小于30分，请上传资料进行认证!<br/>';
                  jQuery.jBox.alert(errorMsg,'提示');
                  location.href='/index.php?user&q=code/attestation';
                  return false;
            }else if(account>(danbao_money)){
            	  errorMsg += '- 借款金额大于担保额度<br/>';
			};
	  }else if(miaobiao_is){//秒标
	  		//var donjie = parseFloat(apr)*parseFloat(account)/(100*12) + parseFloat(account)/100*sxf;//冻结资金
                        //var donjie = parseFloat(apr)*parseFloat(account)/(100*12);
	  		//if(parseInt(total_zi) < parseInt(donjie)) errorMsg += '- 您的账户总余额小于(利息+管理手续费的金额)' + '\n';
	  }else if(fastbiao){
	  		if(scene_status != '1'){
                          errorMsg += '- 您未进行现场认证，请先进行现场认证<br/>';
                          jQuery.jBox.alert(errorMsg,'提示');
                          location.href='/index.php?user&q=code/user/scene_status';
                          return false;
                        } 
	  		else if(account>5000000) errorMsg += '- 贷款总金额不能大于500万<br/>';
                        
	  }else if(jinbiao){//净值标:账户总额减去冻结总额减去待还总额减去替人担保金额
       
              if(jinMoney < 500){
                            errorMsg += '-您的净资产小于500，不能发净资产标！<br/>';
              }else if(account>jinMoney){
                            errorMsg += '-借款金额不能大于净资产！<br/>';
              }else if(phone_status != '1'){
                          errorMsg += '- 您未进行手机认证，请先进行手机认证<br/>';
                          jQuery.jBox.alert(errorMsg,'提示');
                          location.href='/index.php?user&q=code/user/phone_status';
                          return false;
              }
              
          }else{//信用标:
	  		if(real_s != '1'){
                            errorMsg += '-请先通过实名认证！<br/>';
                            jQuery.jBox.alert(errorMsg,'提示');
                            location.href='/index.php?user&q=code/user/realname';
                            return false;
                        }else if(vip_status != 1){
                            errorMsg += '-您不是VIP用户，请先申请VIP！<br/>';
                            jQuery.jBox.alert(errorMsg,'提示');
                            location.href="/vip/index.html";
                            return false;
                        }else if(cr < 30 ){
                            errorMsg += '-您的积分小于30分,请上传资料进行认证！<br/>';
                            jQuery.jBox.alert(errorMsg,'提示');
                            location.href="/index.php?user&q=code/attestation";
                            return false;
                        }
			else if(account>max_account) errorMsg += '- 借款金额大于可用信用额度<br/>';
	  }
	  if (apr.length == 0 ) {
		errorMsg += '- 利率不能为空<br/>';
	  }
	  if (time_limit >=1 && time_limit<=6 && apr>23.24) {
		errorMsg += '- 1至6个月的年利率不能超过23.24%<br/>';
	  }else if (time_limit >6  && apr>25.24) {
		errorMsg += '- 6至12个月的年利率不能超过'+max_fax+'%<br/>';
	  }
	  
	  if (apr<0 ||apr>max_apr) {
		errorMsg += '- 利率不能大于'+max_apr+'%<br/>';
	  }
	  
	  if (award==1 && (part_account=="" || part_account<5 || part_account>account*0.02)) {
		errorMsg += '- 固定金额分摊奖励不能低于5元,不能高于总标的金额的2%<br/>';
	  }
	  if (award==2 && (funds =="" || funds<0.1 || funds>6)) {
		errorMsg += '- 投标金额比例奖励0.1%~6% <br/>';
	  }
	  if (most_account!=0 && parseInt(most_account)<parseInt(lowest_account)){
		  errorMsg += '- 投标最大金额不能小于最小金额<br/>';
	  }
	  if (title.length == 0 ) {
		errorMsg += '- 标题不能为空<br/>';
	  }
	  if (content.length == 0 ) {
		errorMsg += '- 内容不能为空<br/>';
	  }
	  if (valicode.length == 0 ) {
		errorMsg += '- 验证码不能为空<br/>';
	  }
	var awa = "";
	if(!miaobiao_is){
		for(var i=0;i<frm.award.length;i++){   
			   if(frm.award[i].checked){
				 awa =  frm.award[i].value;
				}
			}
	}
	if(awa==1){
		if (part_account==""){
			errorMsg += '- 固定分摊比例奖励不能为空<br/>';
		}
	}
	if(awa==2){
		if (funds==""){
			errorMsg += '- 投标金额比例奖励不能为空<br/>';
		}
	}
	  if (errorMsg.length > 0){
		  jQuery.jBox.alert(errorMsg,'提示');
		  return false;
	  } else{
		jQuery.jBox.tip("<span style='color:#FFFFFF'>提交中</span>", 'loading');
		document.forms['form1'].submit();
		return true;
	  }
}
function get_award_value()
{
    var form1 = document.forms['form1'];
    for (i=0; i<form1.award.length; i++){
        if (form1.award[i].checked)
        {
           return form1.award[i].value;
        }
    }
}
function change_j(type){
	var frm = document.forms['form1'];
	if (type==0){
                jQuery("#part_account").attr("disabled",true); 
		jQuery("#funds").attr("disabled",true);
                jQuery("#is_false").attr("disabled",true);
	}else if (type==1){
                jQuery("#part_account").attr("disabled",false);
		jQuery("#funds").attr("disabled",true);
                jQuery("#is_false").attr("disabled",false);
	}else if (type==2){
                jQuery("#part_account").attr("disabled",true); 
		jQuery("#funds").attr("disabled",false); 
                jQuery("#is_false").attr("disabled",false);
	}
}
</script>

<? endif; ?>
<link href="/themes/soonmes/media/css/modal.css" rel="stylesheet" type="text/css">
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/tooltip.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/popover.js"></script>
<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>