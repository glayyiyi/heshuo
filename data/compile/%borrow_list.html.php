<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/borrow_new.css" rel="stylesheet" type="text/css" />
<? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']==""): ?>
<? header('location:/index.action?user&q=going/login');exit(); ?>
<? endif; ?>
<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']==""): ?>
<div id="main" class="clearfix"><div class="box"><div class="box-con"><p class="reg-pro">ϵͳ��ʾ��Ϣ</p><div align="center">
		<br><br>��ѡ�񷢲��ı���<br><br><div id="msg_content"><a href="/borrow/index.html" >ǰ�����б�ҳ</a></div><br><br>
		</div></div></div></div>
<? else: ?>
<div id="main" class="clearfix">

<? $data = array('article_id'=>isset($_REQUEST['article_id'])?$_REQUEST['article_id']:'','user_id'=>'0','user_id'=>$this->magic_vars['_G']['user_id'],'id'=>isset($_REQUEST['article_id'])?$_REQUEST['article_id']:'');  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['var'] = borrowClass::GetOnes($data);if(!is_array($this->magic_vars['var'])){ $this->magic_vars['var']=array();}?>
<!--����Ŀ ��ʼ-->
<div class="wrap950 header_site_sub">

	<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']='';if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="vouch" ||  $this->magic_vars['var']['is_vouch']==1): ?>
	<div class="alert alert-error fade in">
	 <a class="close" data-dismiss="alert" href="#">&times;</a>
	<font color="#FF0000">�𾴵��û������ã������ڷ������ǵ����꣬�����꽫�����е�����ȵ��û����е������ȵ�����������Զ������Ͷ�꣡</font></div>
<script>
jQuery.jBox.prompt('�����ڷ������ǣ�������!', '��ʾ', 'info');
</script>
	<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;elseif (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="miao"): ?>
	<div class="alert alert-error fade in">
	 <a class="close" data-dismiss="alert" href="#">&times;</a>
	<font color="#FF0000">�𾴵��û������ã������ڷ��������뻹�꣬�뻹�꽫�������ϵͳ�Զ���˲��Զ����</font></div>
<script>
jQuery.jBox.prompt('�����ڷ������ǣ��뻹��!', '��ʾ', 'info');
</script>
	<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;elseif (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="fast"): ?>
	<div class="alert alert-error fade in">
	 <a class="close" data-dismiss="alert" href="#">&times;</a>
	<font color="#FF0000">�𾴵��û������ã������ڷ������ǵ�Ѻ�꣬��Ѻ����С΢��ҵ�ֳ���˽�</font></div>
<script>
jQuery.jBox.prompt('�����ڷ������ǣ���Ѻ��!', '��ʾ', 'info');
</script>
	<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;elseif (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="jin"): ?>
	<div class="alert alert-error fade in">
	 <a class="close" data-dismiss="alert" href="#">&times;</a>
	<font color="#FF0000">�𾴵��û������ã������ڷ������Ǿ�ֵ�꣬��ֵ������������վ�ϵ��ʲ�Ϊ������һ�ֽ��꣡</font></div>
<script>
jQuery.jBox.prompt('�����ڷ������ǣ���ֵ��!', '��ʾ', 'info');
</script>
	<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;elseif (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="xin"): ?>
	<div class="alert alert-error fade in">
	 <a class="close" data-dismiss="alert" href="#">&times;</a>
	<font color="#FF0000">�𾴵��û������ã������ڷ����������ñ꣬���ñ�����������վ�ϵĽ�����ö��Ϊ��׼��һ�ָ������ý��꣡</font></div>
<script>
jQuery.jBox.prompt('�����ڷ������ǣ����ñ�!', '��ʾ', 'info');
</script>
	<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;elseif (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="lz"): ?>
	<div class="alert alert-error fade in">
	 <a class="close" data-dismiss="alert" href="#">&times;</a>
	<font color="#FF0000">�𾴵��û������ã������ڷ���������ת�꣬Ͷ���˼���Ͷ�ʼ�����Ч��</font></div>
<script>
jQuery.jBox.prompt('�����ڷ������ǣ���ת��!', '��ʾ', 'info');
</script>
		
	<? endif; ?>
</div>
<!--����Ŀ ����-->
<form name="form1" method="post" id="form1" action="/index.php?user&q=code/borrow/<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id']=''; ;if (  $this->magic_vars['var']['user_id']==""): ?>add<? else: ?>update<? endif; ?>"  enctype="multipart/form-data">
<!--�����Ϣ ��ʼ-->

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
		<li class="active"><a href="#jkxx"  >�����Ϣ</a></li>
		<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']!="miao"): ?><li><a href="#tbjl" >Ͷ�꽱��</a></li><? endif; ?>
		<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']='';if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="vouch" ||  $this->magic_vars['var']['is_vouch']==1): ?><li><a href="#dbjl"  >��������</a></li><? endif; ?>
		<li><a href="#zhxx"  >�ʻ���Ϣ��������</a></li>
		<!--<li><a href="#jkxq" data-toggle="tab">Ͷ�����ϸ˵��</a></li>-->
</ul>

<div id="myTabContent" class="tab-content">
<div class="wrap950 list_1 tab-pane fade in active" id="jkxx">
	<div class="content">
	
			<div class="module_border">
			<div class="w">����ܽ�</div>
			<div class="c">
					<span id="infojdmoney" data-content="�����Ӧ��500Ԫ��5,000,000Ԫ֮�䡣���ױ��־�Ϊ����ҡ����ɹ���, ÿ���°�������ȡ 
                            ������ã��ڽ������ֱ�ӿ۳��� ���꾡����Ϣ��鿴������վ �շѹ���"><input type="text" name="account"  id="account" value="<? if (!isset($this->magic_vars['var']['account'])) $this->magic_vars['var']['account'] = ''; echo $this->magic_vars['var']['account']; ?>" onkeyup="value=value.replace(/[^0-9]/g,'')" /><br /> ��д��<span id="cnaccount"></span>
							</span>
			</div>
			<div class="w">�����ʣ�</div>
			<div class="c">
				<input type="text" name="apr" id="infonlv" data-content="��д���ṩ��Ͷ���ߵ�������,����д��������������������ʡ�1��6���µ������ʲ��ܳ���22.40%,7��12���µ������ʲ��ܳ���24.00%.��Χ��1%��24.00%����ֻ����С���������λ��" value="<? if (!isset($this->magic_vars['var']['apr'])) $this->magic_vars['var']['apr'] = ''; echo $this->magic_vars['var']['apr']; ?>" onkeyup="apr_keyup()" /> % 
			</div>
		</div>
<script type="text/javascript">
	
	 jQuery("#account").keyup(function(){ 
		var account=jQuery("#account").val();
		var cnaccount=Arabia_to_Chinese(account);
		jQuery("#cnaccount").html(cnaccount);
	 //д�봥�����������ܽ�� add by weego 20121206
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
			<div class="w">�����;��</div>
			<div class="c"  >
				<span id="infojkxx" data-content="˵�����ɹ���ľ�����;">  <select name='use' id='use' >  <option value='1' <?php if($this->magic_vars['var']['use']=='1') echo "selected='selected'" ?>>������ת</option>  <option value='2' <?php if($this->magic_vars['var']['use']=='2') echo "selected='selected'" ?>>������ת</option>  <option value='3' <?php if($this->magic_vars['var']['use']=='3') echo "selected='selected'" ?>>������ת</option>  <option value='4' <?php if($this->magic_vars['var']['use']=='4') echo "selected='selected'" ?>>��������</option>  <option value='5' <?php if($this->magic_vars['var']['use']=='5') echo "selected='selected'" ?>>�����ֽ��</option>  <option value='6' <?php if($this->magic_vars['var']['use']=='6') echo "selected='selected'" ?>>�������</option>  <option value='7' <?php if($this->magic_vars['var']['use']=='7') echo "selected='selected'" ?>>��ҵ���</option> </select> </span>
			</div>
			
			<div class="w">������ޣ�</div>
			<div class="c">
<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="miao"): ?>
<span id="infomb" data-content="��Ҫ�����ʱ�䡣">
			  <select name='time_limit' id='time_limit' disabled='disabled'>  <option value='1' <?php if($this->magic_vars['var']['time_limit']=='1') echo "selected='selected'" ?>>1����</option>  <option value='2' <?php if($this->magic_vars['var']['time_limit']=='2') echo "selected='selected'" ?>>2����</option>  <option value='3' <?php if($this->magic_vars['var']['time_limit']=='3') echo "selected='selected'" ?>>3����</option>  <option value='4' <?php if($this->magic_vars['var']['time_limit']=='4') echo "selected='selected'" ?>>4����</option>  <option value='5' <?php if($this->magic_vars['var']['time_limit']=='5') echo "selected='selected'" ?>>5����</option>  <option value='6' <?php if($this->magic_vars['var']['time_limit']=='6') echo "selected='selected'" ?>>6����</option>  <option value='7' <?php if($this->magic_vars['var']['time_limit']=='7') echo "selected='selected'" ?>>7����</option>  <option value='8' <?php if($this->magic_vars['var']['time_limit']=='8') echo "selected='selected'" ?>>8����</option>  <option value='9' <?php if($this->magic_vars['var']['time_limit']=='9') echo "selected='selected'" ?>>9����</option>  <option value='10' <?php if($this->magic_vars['var']['time_limit']=='10') echo "selected='selected'" ?>>10����</option>  <option value='11' <?php if($this->magic_vars['var']['time_limit']=='11') echo "selected='selected'" ?>>11����</option>  <option value='12' <?php if($this->magic_vars['var']['time_limit']=='12') echo "selected='selected'" ?>>12����</option> </select>
</span>
<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;elseif (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="lz"): ?>

<span id="infotl" data-content="�������ڡ�">
<span id="time_limit_day">
		 <input type="text" name="time_limit_day"  id="time_limit_day" value="<? if (!isset($this->magic_vars['var']['time_limit_day'])) $this->magic_vars['var']['time_limit_day'] = ''; echo $this->magic_vars['var']['time_limit_day']; ?>" onkeyup="value=value.replace(/[^0-9]/g,'')" /> ��
</span>

</span>
<? else: ?>
<span id="infotl" data-content="��Ҫ�����ʱ�䣬">
<span id="time_limit" <? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="jin"): ?> style="display:none;" <? endif; ?> >
  <select name='time_limit' id='time_limit' >  <option value='1' <?php if($this->magic_vars['var']['time_limit']=='1') echo "selected='selected'" ?>>1����</option>  <option value='2' <?php if($this->magic_vars['var']['time_limit']=='2') echo "selected='selected'" ?>>2����</option>  <option value='3' <?php if($this->magic_vars['var']['time_limit']=='3') echo "selected='selected'" ?>>3����</option>  <option value='4' <?php if($this->magic_vars['var']['time_limit']=='4') echo "selected='selected'" ?>>4����</option>  <option value='5' <?php if($this->magic_vars['var']['time_limit']=='5') echo "selected='selected'" ?>>5����</option>  <option value='6' <?php if($this->magic_vars['var']['time_limit']=='6') echo "selected='selected'" ?>>6����</option>  <option value='7' <?php if($this->magic_vars['var']['time_limit']=='7') echo "selected='selected'" ?>>7����</option>  <option value='8' <?php if($this->magic_vars['var']['time_limit']=='8') echo "selected='selected'" ?>>8����</option>  <option value='9' <?php if($this->magic_vars['var']['time_limit']=='9') echo "selected='selected'" ?>>9����</option>  <option value='10' <?php if($this->magic_vars['var']['time_limit']=='10') echo "selected='selected'" ?>>10����</option>  <option value='11' <?php if($this->magic_vars['var']['time_limit']=='11') echo "selected='selected'" ?>>11����</option>  <option value='12' <?php if($this->magic_vars['var']['time_limit']=='12') echo "selected='selected'" ?>>12����</option> </select> 
</span></span>
<span id="time_limit_day" <? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="jin"): ?> style="display:;" <? else: ?>style="display:none;"<? endif; ?>>
			<select name="time_limit_day" id="time_limit_day" ><option value="1">1��</option><option value="2">2��</option><option value="3">3��</option><option value="4">4��</option><option value="5">5��</option><option value="6">6��</option><option value="7">7��</option><option value="8">8��</option><option value="9">9��</option><option value="10">10��</option><option value="11">11��</option><option value="12">12��</option><option value="13">13��</option><option value="14">14��</option><option value="15">15��</option><option value="16">16��</option><option value="17">17��</option><option value="18">18��</option><option value="19">19��</option><option value="20">20��</option><option value="21">21��</option><option value="22">22��</option><option value="23">23��</option><option value="24">24��</option><option value="25">25��</option></select>
</span>
<a href="#">����</a>
 <input type="checkbox" name="changetoDay" <? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="jin"): ?> checked="true" <? endif; ?>   value="1"  id="changetoDay" onclick="">  
<? endif; ?>				
			</div>
		</div>
		<div class="module_border" id="borrow_day" <? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="jin"): ?>style="display:block"<? else: ?>style="display:none;"<? endif; ?>>
			<div class="w">�Ƿ���꣺</div>
			<div class="c"><input type="hidden" name="isday" id="isday" <? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']='';if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="jin"|| $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="lz"): ?> value="1" <? else: ?> value="0" <? endif; ?>/>��
			</div>
			<div class="sco" style="color:#FF0000" >���ɹ���ϵͳ������ÿ��30������������Ϣ��<a href="/gonggao/a244.html" target="_blank">���ϵͳ˵��</a></div>
		</div>	

<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="miao"): ?>
		<div class="module_border">
			<div class="w">�Ƿ���꣺</div>
			<div class="c">
			<input type="hidden" name="ismb" value="1" />
			<select name="miaobiao" disabled="disabled"><option value="1">��</option><option value="0">��</option></select>
			</div>
			<div class="sco" style="color:#FF0000" >���ɹ���ϵͳ�����۳�һ���µ���Ϣ�����Զ����л������</div>
		</div>
<? endif; ?>				
		
<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="fast"): ?>
 
		<div class="module_border">
			<div class="w">�Ƿ��Ѻ�꣺</div>
			<div class="c">
			<input type="hidden" name="isfast" value="1" />
			<input type="hidden" name="fastid" value="<? if (!isset($this->magic_vars['fastid'])) $this->magic_vars['fastid'] = ''; echo $this->magic_vars['fastid']; ?>" />
			<select name="fastbiao" disabled="disabled"><option value="1">��</option><option value="0">��</option></select>
			</div>
			<div class="sco" style="color:#FF0000" ><span id="infogeili" data-content="��Ѻ������ʾ��ǡ���������<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>��վ�����ϸ�˲������ʲ���ծ�����ݽ���˵�����״����ǩ����Ѻ����������ȷ�����տ����ں���ķ�Χ�ڡ������˵��ڻ���������ѣ������յ�����<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>�渶�������Ϣ���ծȨת��Ϊ<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>��վ���У���Ѻ�����ں�ÿ�찴ǧ��֮����ȡ��Ϣ��������Ϣ����Ϣȫ��Ϊ<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>��վ��ȡ.">��Ѻ������ʾ��ǡ���������<? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>��վ�����ϸ�˲������ʲ���ծ������.....</span></div>
		</div>
		<!--<div class="module_border">
			<div class="w">�Ƿ񵣱���</div>
			<div class="c">
			<select name="danbao" ><option value="0">��</option><option value="1">��</option></select>
			</div>
			<div class="sco" style="color:#FF0000" >ѡ�б�ʾ�ɵ�����˾�����˽���</div>
		</div>
		<div class="module_border">
			<div class="w">�Ƿ���٣�</div>
			<div class="c">
			<select name="kuai" ><option value="0">��</option><option value="1">��</option></select>
			</div>
			<div class="sco" style="color:#FF0000" >ѡ�б�ʾ�˽�����ٱ�</div>
		</div>-->
<? endif; ?>	

<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="jin"): ?>
		<div class="module_border">
			<div class="w">�Ƿ��ʲ��꣺</div>
			<div class="c">
			<input type="hidden" name="isjin" value="1" />
			<select name="jinbiao" disabled="disabled"><option value="1">��</option><option value="0">��</option></select>
			</div>
			<div class="sco" style="color:#FF0000" >���ʲ�������ʾ��ǡ�����.</div>
		</div>
<? endif; ?>

<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="lz"): ?>
<input name="is_lz" type="hidden" value="1" />
<div class="module_border">
			<div class="w">ÿ�ݽ�</div>
			<div class="c">
                  <span id="infolzpermoney" data-content="���ñ����Ϲ���ÿ�ݼ�ֵ��" ><input disabled="disabled" type="text" name="lzpermoney" id="lzpermoney" value='100'> Ԫ</span>
			</div>
                  <div class="w">�ܷ�����</div>
			<div class="c">
                  <span id="infolzper" data-content='ϵͳ���ݽ�����ÿ�ݽ��Զ����㱾�����ת������' ><input disabled="disabled" type="text" name="lzper" id="lzper"></span><input type="button" name="clstotalper" id="clstotalper" value="����"/>
			</div>
</div>

<script type="text/javascript">

//������ת����ܷ���
jQuery("#clstotalper").click(function(){
	if(jQuery("#account").val()%jQuery("#lzpermoney").val()!=0){
		jQuery.jBox.error('��������Ϊ100��������','��ʾ');
		return;
	}
	var clstotalper=jQuery("#account").val()/jQuery("#lzpermoney").val();
	jQuery("#lzper").val(clstotalper+"��");

})


</script>
<? else: ?>

<div class="module_border">
			<div class="w">�Ƿ���꣺</div>
			<div class="c">
                  <span id="infoisDXB" data-content="�����������ض����û���������Ͷ�꣬���ú�����󣬸��߶Է��˱�����뼴��." ><input type="checkbox" name="isDXB" id="isDXB" value="1" onclick="checkDXB()">  </span>
			</div>
                  <div class="w">��������룺</div>
			<div class="c">
                  <span id="infopwd" data-content='�����������������ֻ����֡���"��ϲ����","���տ���"�ȵ� ' ><input disabled="disabled" type="text" name="pwd" id="pwd"></span>
			</div>
</div>
<? endif; ?>

<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="xin"): ?>
<input type="hidden" name="isxin" value="1" />
<? endif; ?>
		<div class="module_border">
			<div class="w">���Ͷ���</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="lz"): ?>
				<span id="infolow" data-content="����Ͷ���߶�һ�������Ͷ���ܶ������">100Ԫ</span>
				<? else: ?>	
				<span id="infolow" data-content="����Ͷ���߶�һ�������Ͷ���ܶ������">  <select name='lowest_account' id='lowest_account' >  <option value='50' <?php if($this->magic_vars['var']['lowest_account']=='50') echo "selected='selected'" ?>>50Ԫ</option>  <option value='100' <?php if($this->magic_vars['var']['lowest_account']=='100') echo "selected='selected'" ?>>100Ԫ</option>  <option value='150' <?php if($this->magic_vars['var']['lowest_account']=='150') echo "selected='selected'" ?>>150Ԫ</option>  <option value='200' <?php if($this->magic_vars['var']['lowest_account']=='200') echo "selected='selected'" ?>>200Ԫ</option>  <option value='500' <?php if($this->magic_vars['var']['lowest_account']=='500') echo "selected='selected'" ?>>500Ԫ</option>  <option value='1000' <?php if($this->magic_vars['var']['lowest_account']=='1000') echo "selected='selected'" ?>>1000Ԫ</option>  <option value='2000' <?php if($this->magic_vars['var']['lowest_account']=='2000') echo "selected='selected'" ?>>2000Ԫ</option>  <option value='3000' <?php if($this->magic_vars['var']['lowest_account']=='3000') echo "selected='selected'" ?>>3000Ԫ</option>  <option value='5000' <?php if($this->magic_vars['var']['lowest_account']=='5000') echo "selected='selected'" ?>>5000Ԫ</option>  <option value='6000' <?php if($this->magic_vars['var']['lowest_account']=='6000') echo "selected='selected'" ?>>6000Ԫ</option>  <option value='7000' <?php if($this->magic_vars['var']['lowest_account']=='7000') echo "selected='selected'" ?>>7000Ԫ</option>  <option value='8000' <?php if($this->magic_vars['var']['lowest_account']=='8000') echo "selected='selected'" ?>>8000Ԫ</option>  <option value='9000' <?php if($this->magic_vars['var']['lowest_account']=='9000') echo "selected='selected'" ?>>9000Ԫ</option>  <option value='10000' <?php if($this->magic_vars['var']['lowest_account']=='10000') echo "selected='selected'" ?>>10000Ԫ</option> </select></span>
			<? endif; ?>
			</div>
			<div class="w">���Ͷ���ܶ</div>
			<div class="c">
			<span id="infomax" data-content="����Ͷ���߶�һ�������Ͷ���ܶ������">  <select name='most_account' id='most_account' >  <option value='0' <?php if($this->magic_vars['var']['most_account']=='0') echo "selected='selected'" ?>>û������</option>  <option value='50' <?php if($this->magic_vars['var']['most_account']=='50') echo "selected='selected'" ?>>50Ԫ</option>  <option value='100' <?php if($this->magic_vars['var']['most_account']=='100') echo "selected='selected'" ?>>100Ԫ</option>  <option value='200' <?php if($this->magic_vars['var']['most_account']=='200') echo "selected='selected'" ?>>200Ԫ</option>  <option value='500' <?php if($this->magic_vars['var']['most_account']=='500') echo "selected='selected'" ?>>500Ԫ</option>  <option value='1000' <?php if($this->magic_vars['var']['most_account']=='1000') echo "selected='selected'" ?>>1000Ԫ</option>  <option value='1500' <?php if($this->magic_vars['var']['most_account']=='1500') echo "selected='selected'" ?>>1500Ԫ</option>  <option value='2000' <?php if($this->magic_vars['var']['most_account']=='2000') echo "selected='selected'" ?>>2000Ԫ</option>  <option value='5000' <?php if($this->magic_vars['var']['most_account']=='5000') echo "selected='selected'" ?>>5000Ԫ</option>  <option value='10000' <?php if($this->magic_vars['var']['most_account']=='10000') echo "selected='selected'" ?>>10000Ԫ</option>  <option value='15000' <?php if($this->magic_vars['var']['most_account']=='15000') echo "selected='selected'" ?>>15000Ԫ</option>  <option value='20000' <?php if($this->magic_vars['var']['most_account']=='20000') echo "selected='selected'" ?>>20000Ԫ</option>  <option value='30000' <?php if($this->magic_vars['var']['most_account']=='30000') echo "selected='selected'" ?>>30000Ԫ</option>  <option value='50000' <?php if($this->magic_vars['var']['most_account']=='50000') echo "selected='selected'" ?>>50000Ԫ</option>  <option value='80000' <?php if($this->magic_vars['var']['most_account']=='80000') echo "selected='selected'" ?>>80000Ԫ</option>  <option value='100000' <?php if($this->magic_vars['var']['most_account']=='100000') echo "selected='selected'" ?>>100000Ԫ</option>  <option value='100000' <?php if($this->magic_vars['var']['most_account']=='100000') echo "selected='selected'" ?>>150000Ԫ</option>  <option value='200000' <?php if($this->magic_vars['var']['most_account']=='200000') echo "selected='selected'" ?>>200000Ԫ</option> </select></span>
			</div>
		</div>
		<div class="module_border">
			<div class="w">��Чʱ�䣺</div>
			<div class="c">
			<span id="infoyxtime" data-content="���ô˴ν�����ʵ����������ʽ��ȴﵽ100%��ֱ�ӽ�����վ�ĸ���">  <select name='valid_time' id='valid_time' >  <option value='1' <?php if($this->magic_vars['var']['valid_time']=='1') echo "selected='selected'" ?>>1��</option>  <option value='2' <?php if($this->magic_vars['var']['valid_time']=='2') echo "selected='selected'" ?>>2��</option>  <option value='3' <?php if($this->magic_vars['var']['valid_time']=='3') echo "selected='selected'" ?>>3��</option>  <option value='4' <?php if($this->magic_vars['var']['valid_time']=='4') echo "selected='selected'" ?>>4��</option>  <option value='5' <?php if($this->magic_vars['var']['valid_time']=='5') echo "selected='selected'" ?>>5��</option>  <option value='6' <?php if($this->magic_vars['var']['valid_time']=='6') echo "selected='selected'" ?>>6��</option>  <option value='7' <?php if($this->magic_vars['var']['valid_time']=='7') echo "selected='selected'" ?>>7��</option>  <option value='366' <?php if($this->magic_vars['var']['valid_time']=='366') echo "selected='selected'" ?>>��������</option> </select></span>
			</div>
			<div class="w">���ʽ��</div>
			<div class="c">
			<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="lz"): ?>
				<span id="infohk" data-content="���·��ڻ�����ָ�����߽��ɹ���ÿ�»���Ϣ��"><select disabled="disabled" name='style' id=style ><option value='0' >���·��ڻ���</option></select></span>
			<? else: ?>
				<span id="infohk" data-content="���·��ڻ�����ָ�����߽��ɹ���ÿ�»���Ϣ��">  <select name='style' id='style' >  <option value='0' <?php if($this->magic_vars['var']['style']=='0') echo "selected='selected'" ?>>���·��ڻ���</option>  <option value='3' <?php if($this->magic_vars['var']['style']=='3') echo "selected='selected'" ?>>���¸�Ϣ���ڻ���</option>  <option value='2' <?php if($this->magic_vars['var']['style']=='2') echo "selected='selected'" ?>>����ȫ���</option> </select></span>
			<? endif; ?>
			</div>
		</div>
	</div>
	<div class="foot"></div>
</div>
<!--�����Ϣ ����-->

<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="miao"): ?>

<? else: ?>
<!--Ͷ�꽱�� ��ʼ-->
<div class="wrap950 list_1 tab-pane fade" id="tbjl"">
	<div class="content">
	<div class="module_border">
			<div class="w"><span id="infowjiang" data-content="����������˽��������ᶳ�����ʻ�����Ӧ���˻������Ҫ���ý�������ȷ�������ʻ����㹻 ���˻���"><input type="radio" name="award" id="award" value="0" <? if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']='';if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']=''; ;if (  $this->magic_vars['var']['award']==0 ||  $this->magic_vars['var']['award']==""): ?> checked="checked"<? endif; ?> onclick="change_j(0)">�����ý���&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
			<div class="c"></div>
		</div>
		<div class="module_border">
			<div class="w"><span id="infoyjiang2" data-content="��Χ��0.1%~6% ���������ñ��α��Ҫ����������Ͷ���û��Ľ���������"><input type="radio" name="award" id="award" value="2" <? if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']=''; ;if (  $this->magic_vars['var']['award']==2): ?> checked="checked"<? endif; ?> onclick="change_j(2)"/>��Ͷ�������������</span></div>
			<div class="c">
				<input type="text" id="funds" name="funds" value="<? if (!isset($this->magic_vars['var']['funds'])) $this->magic_vars['var']['funds'] = ''; echo $this->magic_vars['var']['funds']; ?>" size="5" />%  
			</div>
			<div class="w"><span id="infoyjiang1" data-content="���ܵ���5Ԫ,���ܸ����ܱ�Ľ���2%�����뱣������Ԫ��Ϊ��λ���������ñ��α��Ҫ����������Ͷ���û����ܽ�"><input type="radio" name="award" id="award" value="1" <? if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']=''; ;if (  $this->magic_vars['var']['award']==1): ?> checked="checked"<? endif; ?> onclick="change_j(1)"/>���̶�����̯������</span></div>
			<div class="c">
				<input type="text" id="part_account" name="part_account" value="<? if (!isset($this->magic_vars['var']['part_account'])) $this->magic_vars['var']['part_account'] = ''; echo $this->magic_vars['var']['part_account']; ?>" size="5" />Ԫ
			</div>
		</div>
	</div>
	<div class="foot"></div>
</div>
<!--Ͷ�꽱�� ����-->
<? endif; ?>

<? if (!isset($this->magic_vars['_G']['biaotype_info']['biao_type_name'])) $this->magic_vars['_G']['biaotype_info']['biao_type_name']='';if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if (  $this->magic_vars['_G']['biaotype_info']['biao_type_name']=="vouch" ||  $this->magic_vars['var']['is_vouch']==1): ?>

<!--�������� ��ʼ-->
<div class="wrap950 list_1 tab-pane fade" id="dbjl">
	<div class="content">
		<div class="module_border">
			<div class="w">����������</div>
			<div class="c">
			<input name="vouch_award" id="infodbbl" data-content="��������������Ҫ���İٷֱȸ������ˣ������100��������3%�������˽��50������50*3%=1.5" type="text" value="<? if (!isset($this->magic_vars['var']['vouch_award'])) $this->magic_vars['var']['vouch_award'] = ''; echo $this->magic_vars['var']['vouch_award']; ?>" size="6" />%
			</div>
			<div class="w">ָ�������ˣ�</div>
			<div class="c">
			<input name="vouch_user" type="text" id="infodbb2" data-content="ָ���������������|������Ϊ�ձ�ʾ�����˶����Ե���" value="<? if (!isset($this->magic_vars['var']['vouch_user'])) $this->magic_vars['var']['vouch_user'] = ''; echo $this->magic_vars['var']['vouch_user']; ?>" /><input name="is_vouch" type="hidden" value="1" />
			</div>
		</div>
	</div>
	<div class="foot"></div>
</div>
<!--�������� ����-->
<? endif; ?>

<!--�ʻ���Ϣ�������� ��ʼ-->
<div class="wrap950 list_1 tab-pane fade" id="zhxx">
	<div class="content">
		<div class="module_border">
			<div class="w"><span id="infoss1" data-content="��������ϴ�ѡ�����ʵʱ�������ʻ��ģ��˻��ܶ�����������ܶ">�����ҵ��ʻ��ʽ����<input type="checkbox" name="open_account" value="1" checked="checked" disabled="disabled"/></span> </div>
			<div class="c"></div>
			<div class="w"><span id="infoss1" data-content="��������ϴ�ѡ�����ʵʱ�������ʻ��ģ�����ܶ�ѻ����ܶδ�����ܶ�ٻ��ܶ�����ܶ">�����ҵĽ���ʽ����<input type="checkbox" name="open_borrow" value="1" checked="checked" disabled="disabled"/></span></div>
			<div class="c"></div>
		</div>
		
		<div class="module_border">
			<div class="w"><span id="infoss1" data-content="��������ϴ�ѡ�����ʵʱ�������ʻ��ģ�Ͷ���ܶ���ջ��ܶ���ջ��ܶ">�����ҵ�Ͷ���ʽ����<input type="checkbox" name="open_tender" value="1" <? if (!isset($this->magic_vars['var']['open_tender'])) $this->magic_vars['var']['open_tender']=''; ;if (  $this->magic_vars['var']['open_tender']==1): ?> checked="checked"<? endif; ?>/></span></div>
			<div class="c"></div>
			<div class="w">
				<span id="infoss1" data-content="��������ϴ�ѡ�����ʵʱ�������ʻ��ģ�������ö�ȡ�������ö�ȡ�">�����ҵ����ö����� <input type="checkbox" name="open_credit" value="1" checked="checked" disabled="disabled"/></span></div>
			<div class="c"></div>
		</div>
	
	</div>
	<div class="foot"></div>
</div>
</div> <!-- myTabContent -->

</div>
<!--�ʻ���Ϣ�������� ����-->
<br/>
<!--�ʻ���Ϣ�������� ��ʼ-->
<ul  id="tab2" class="list-tab clearfix">
		<li class="active"><a href="#tbxx" data-toggle="tab2">������ϸ˵��</a></li>
</ul>
<div id="myTabContent" class="tab-content">

<div class="wrap950 list_1 tab-pane fade in active" id="tbxx">
	<div class="content">
		<div class="module_border">
			<div class="w">���⣺</div>
			<div style="padding-top:6px;">
				<input type="text" name="name" value="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>" size="50" id="infotitle" data-content="��д���ı��⣬д��һ���ܽ�ļ���Ҳ��һ��" /> 
			</div>
			 
		</div>
                <script charset="gb2312" src="/plugins/editor/kindeditor/kindeditor-min.js"></script>
		<script charset="gb2312" src="/plugins/editor/kindeditor/lang/zh_CN.js"></script>
		<div class="module_border">
			<div class="w">��Ϣ��</div>
			<div style="float:left">
				<textarea name="content" id="content" style="width:650px;height:200px;visibility:hidden;" >
                                    <? if (!isset($this->magic_vars['var']['content'])) $this->magic_vars['var']['content']=''; ;if (  $this->magic_vars['var']['content']!=""): ?>
                                        <? if (!isset($this->magic_vars['var']['content'])) $this->magic_vars['var']['content'] = ''; echo $this->magic_vars['var']['content']; ?>
                                    <? else: ?>
                                        <P>������飺 </P>
                                        <P>վ�ڹ����û�����</P>
                                        <P>����ϣ�</P>
                                    <? endif; ?>
                                </textarea>
				<!--iframe src="/plugins/editor/sinaeditor/editor.htm?id=content&ReadCookie=0" frameBorder="0" marginHeight="0" marginWidth="0" scrolling="No" width="640" height="460"></iframe-->
			</div>
		</div>
		<div class="module_border">
			<div class="w">��֤�룺</div>
			<div style="padding-top:6px;">
				<input name="valicode" type="text" size="11" maxlength="4" style="float:left" tabindex="3"/> &nbsp;&nbsp;&nbsp; <img src="/plugins/index.php?q=imgcode" alt="���ˢ��" onClick="this.src='/plugins/index.php?q=imgcode&t=' + Math.random();"  style="cursor:pointer; margin-left:3px;" />
				<input type="hidden" value="<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>" name="id" />
			</div>
			<div class="sco" ></div>
		</div>
	</div>
	<br/>
	<div class="content" style="text-align:center;">
		<input type="button" value="ȷ���ύ" class="btn-action" onclick="check_form()" />
	</div>
	<div class="foot"></div>
</div>

</div> <!-- myTabContent -->
<!--�ʻ���Ϣ�������� ����-->
<!--�ʻ���Ϣ�������� ��ʼ-->

</form>

</div>
<? unset($_magic_vars);unset($data); ?>




<script type="text/javascript">
        function Arabia_to_Chinese(Num) {
            for (i = Num.length - 1; i >= 0; i--) {
                Num = Num.replace(",", "")//�滻tomoney()�еġ�,��
                Num = Num.replace(" ", "")//�滻tomoney()�еĿո�
            }
            Num = Num.replace("��", "")//�滻�����ܳ��ֵģ��ַ�
            if (isNaN(Num)) { //��֤������ַ��Ƿ�Ϊ����
            	jQuery.jBox.error('����Сд����Ƿ���ȷ','��ʾ');
                return;
            }
            if(Num>max_account){
            	jQuery.jBox.error('�����ܴ���'+max_account+'Ԫ','��ʾ');
            	document.getElementById("account").value=max_account;
            	Num = max_account.toString();
            }
            //---�ַ�������ϣ���ʼת����ת������ǰ�������ֱַ�ת��---//
            part = String(Num).split(".");
            newchar = "";
            //С����ǰ����ת��
            for (i = part[0].length - 1; i >= 0; i--) {
                if (part[0].length > 10) {
                	document.getElementById("account").value=0;
                	jQuery.jBox.error('λ�������޷�����', '��ʾ');
                	return;
                } //����������ʰ�ڵ�λ����ʾ
                tmpnewchar = ""
                perchar = part[0].charAt(i);
                switch (perchar) {
                    case "0": tmpnewchar = "��" + tmpnewchar; break;
                    case "1": tmpnewchar = "Ҽ" + tmpnewchar; break;
                    case "2": tmpnewchar = "��" + tmpnewchar; break;
                    case "3": tmpnewchar = "��" + tmpnewchar; break;
                    case "4": tmpnewchar = "��" + tmpnewchar; break;
                    case "5": tmpnewchar = "��" + tmpnewchar; break;
                    case "6": tmpnewchar = "½" + tmpnewchar; break;
                    case "7": tmpnewchar = "��" + tmpnewchar; break;
                    case "8": tmpnewchar = "��" + tmpnewchar; break;
                    case "9": tmpnewchar = "��" + tmpnewchar; break;
                }
                switch (part[0].length - i - 1) {
                    case 0: tmpnewchar = tmpnewchar + "Ԫ"; break;
                    case 1: if (perchar != 0) tmpnewchar = tmpnewchar + "ʰ"; break;
                    case 2: if (perchar != 0) tmpnewchar = tmpnewchar + "��"; break;
                    case 3: if (perchar != 0) tmpnewchar = tmpnewchar + "Ǫ"; break;
                    case 4: tmpnewchar = tmpnewchar + "��"; break;
                    case 5: if (perchar != 0) tmpnewchar = tmpnewchar + "ʰ"; break;
                    case 6: if (perchar != 0) tmpnewchar = tmpnewchar + "��"; break;
                    case 7: if (perchar != 0) tmpnewchar = tmpnewchar + "Ǫ"; break;
                    case 8: tmpnewchar = tmpnewchar + "��"; break;
                    case 9: tmpnewchar = tmpnewchar + "ʰ"; break;
                }
                newchar = tmpnewchar + newchar;
            }
            //С����֮�����ת��
            if (Num.indexOf(".") != -1) {
                if (part[1].length > 2) {
                	jQuery.jBox.error('С����֮��ֻ�ܱ�����λ,ϵͳ���Զ��ض�','��ʾ');
                    part[1] = part[1].substr(0, 2)
                }
                for (i = 0; i < part[1].length; i++) {
                    tmpnewchar = ""
                    perchar = part[1].charAt(i)
                    switch (perchar) {
                        case "0": tmpnewchar = "��" + tmpnewchar; break;
                        case "1": tmpnewchar = "Ҽ" + tmpnewchar; break;
                        case "2": tmpnewchar = "��" + tmpnewchar; break;
                        case "3": tmpnewchar = "��" + tmpnewchar; break;
                        case "4": tmpnewchar = "��" + tmpnewchar; break;
                        case "5": tmpnewchar = "��" + tmpnewchar; break;
                        case "6": tmpnewchar = "½" + tmpnewchar; break;
                        case "7": tmpnewchar = "��" + tmpnewchar; break;
                        case "8": tmpnewchar = "��" + tmpnewchar; break;
                        case "9": tmpnewchar = "��" + tmpnewchar; break;
                    }
                    if (i == 0) tmpnewchar = tmpnewchar + "��";
                    if (i == 1) tmpnewchar = tmpnewchar + "��";
                    newchar = newchar + tmpnewchar;
                }
            }
            //�滻�������ú���
            while (newchar.search("����") != -1)
                newchar = newchar.replace("����", "��");
            newchar = newchar.replace("����", "��");
            newchar = newchar.replace("����", "��");
            newchar = newchar.replace("����", "��");
            newchar = newchar.replace("��Ԫ", "Ԫ");
            newchar = newchar.replace("���", "");
            newchar = newchar.replace("���", "");

            if (newchar.charAt(newchar.length - 1) == "Ԫ" || newchar.charAt(newchar.length - 1) == "��")
                newchar = newchar + "��"
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
	jQuery.jBox.alert("��Ľ������Ϊ<? if (!isset($this->magic_vars['acc']['borrow_vouch'])) $this->magic_vars['acc']['borrow_vouch'] = ''; echo $this->magic_vars['acc']['borrow_vouch']; ?>Ԫ,�㻹�ܽ�<? if (!isset($this->magic_vars['acc']['borrow_vouch_use'])) $this->magic_vars['acc']['borrow_vouch_use'] = ''; echo $this->magic_vars['acc']['borrow_vouch_use']; ?>Ԫ",'��ʾ');
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
		errorMsg += '- �ܽ���Ϊ��<br/>';
	  }
	  if(account>max_account){
		  errorMsg += '- �ܽ��ܴ���'+max_account+'Ԫ<br/>';
	  }
	  if(account<min_account){
		  errorMsg += '- �ܽ���С��'+min_account+'Ԫ<br/>';
	  }
	  if(lzbiao){
		  if(account%100!==0){
			  errorMsg += '- ��ת��Ľ�������Ϊ100�ı���' + '\n';
		  }
		if(time_limit_day<1)
		{
			errorMsg += '- ����д�������<br/>';
		}
	  }
	  if(danbao){//����
		   if(account > danbao_money){//������ڵ������,������
                  errorMsg += '- ����ǰ�Ĵ�����������Ŀ��õ�����ȣ�<br/>';
           }else if(cr < 30 || real_s != '1'){
                  errorMsg += '- ����δͨ��ʵ����֤<br/>';
                  jQuery.jBox.alert(errorMsg,'��ʾ');
                  location.href='/index.php?user&q=code/user/realname';
                  return false;
            }else if(vip_status != 1){
                            errorMsg += '-������VIP�û�����������VIP��<br/>';
                            jQuery.jBox.alert(errorMsg,'��ʾ');
                            location.href="/vip/index.html";
                            return false;
            }else if(cr <30){
                  errorMsg += '- ����ǰ�Ļ���С��30�֣����ϴ����Ͻ�����֤!<br/>';
                  jQuery.jBox.alert(errorMsg,'��ʾ');
                  location.href='/index.php?user&q=code/attestation';
                  return false;
            }else if(account>(danbao_money)){
            	  errorMsg += '- �������ڵ������<br/>';
			};
	  }else if(miaobiao_is){//���
	  		//var donjie = parseFloat(apr)*parseFloat(account)/(100*12) + parseFloat(account)/100*sxf;//�����ʽ�
                        //var donjie = parseFloat(apr)*parseFloat(account)/(100*12);
	  		//if(parseInt(total_zi) < parseInt(donjie)) errorMsg += '- �����˻������С��(��Ϣ+���������ѵĽ��)' + '\n';
	  }else if(fastbiao){
	  		if(scene_status != '1'){
                          errorMsg += '- ��δ�����ֳ���֤�����Ƚ����ֳ���֤<br/>';
                          jQuery.jBox.alert(errorMsg,'��ʾ');
                          location.href='/index.php?user&q=code/user/scene_status';
                          return false;
                        } 
	  		else if(account>5000000) errorMsg += '- �����ܽ��ܴ���500��<br/>';
                        
	  }else if(jinbiao){//��ֵ��:�˻��ܶ��ȥ�����ܶ��ȥ�����ܶ��ȥ���˵������
       
              if(jinMoney < 500){
                            errorMsg += '-���ľ��ʲ�С��500�����ܷ����ʲ��꣡<br/>';
              }else if(account>jinMoney){
                            errorMsg += '-�����ܴ��ھ��ʲ���<br/>';
              }else if(phone_status != '1'){
                          errorMsg += '- ��δ�����ֻ���֤�����Ƚ����ֻ���֤<br/>';
                          jQuery.jBox.alert(errorMsg,'��ʾ');
                          location.href='/index.php?user&q=code/user/phone_status';
                          return false;
              }
              
          }else{//���ñ�:
	  		if(real_s != '1'){
                            errorMsg += '-����ͨ��ʵ����֤��<br/>';
                            jQuery.jBox.alert(errorMsg,'��ʾ');
                            location.href='/index.php?user&q=code/user/realname';
                            return false;
                        }else if(vip_status != 1){
                            errorMsg += '-������VIP�û�����������VIP��<br/>';
                            jQuery.jBox.alert(errorMsg,'��ʾ');
                            location.href="/vip/index.html";
                            return false;
                        }else if(cr < 30 ){
                            errorMsg += '-���Ļ���С��30��,���ϴ����Ͻ�����֤��<br/>';
                            jQuery.jBox.alert(errorMsg,'��ʾ');
                            location.href="/index.php?user&q=code/attestation";
                            return false;
                        }
			else if(account>max_account) errorMsg += '- �������ڿ������ö��<br/>';
	  }
	  if (apr.length == 0 ) {
		errorMsg += '- ���ʲ���Ϊ��<br/>';
	  }
	  if (time_limit >=1 && time_limit<=6 && apr>23.24) {
		errorMsg += '- 1��6���µ������ʲ��ܳ���23.24%<br/>';
	  }else if (time_limit >6  && apr>25.24) {
		errorMsg += '- 6��12���µ������ʲ��ܳ���'+max_fax+'%<br/>';
	  }
	  
	  if (apr<0 ||apr>max_apr) {
		errorMsg += '- ���ʲ��ܴ���'+max_apr+'%<br/>';
	  }
	  
	  if (award==1 && (part_account=="" || part_account<5 || part_account>account*0.02)) {
		errorMsg += '- �̶�����̯�������ܵ���5Ԫ,���ܸ����ܱ�Ľ���2%<br/>';
	  }
	  if (award==2 && (funds =="" || funds<0.1 || funds>6)) {
		errorMsg += '- Ͷ�����������0.1%~6% <br/>';
	  }
	  if (most_account!=0 && parseInt(most_account)<parseInt(lowest_account)){
		  errorMsg += '- Ͷ��������С����С���<br/>';
	  }
	  if (title.length == 0 ) {
		errorMsg += '- ���ⲻ��Ϊ��<br/>';
	  }
	  if (content.length == 0 ) {
		errorMsg += '- ���ݲ���Ϊ��<br/>';
	  }
	  if (valicode.length == 0 ) {
		errorMsg += '- ��֤�벻��Ϊ��<br/>';
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
			errorMsg += '- �̶���̯������������Ϊ��<br/>';
		}
	}
	if(awa==2){
		if (funds==""){
			errorMsg += '- Ͷ���������������Ϊ��<br/>';
		}
	}
	  if (errorMsg.length > 0){
		  jQuery.jBox.alert(errorMsg,'��ʾ');
		  return false;
	  } else{
		jQuery.jBox.tip("<span style='color:#FFFFFF'>�ύ��</span>", 'loading');
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