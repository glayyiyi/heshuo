<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title><? if (!isset($this->magic_vars['_G']['article']['name'])) $this->magic_vars['_G']['article']['name']=''; ;if (  $this->magic_vars['_G']['article']['name']!=""): ?><? if (!isset($this->magic_vars['_G']['article']['name'])) $this->magic_vars['_G']['article']['name'] = ''; echo $this->magic_vars['_G']['article']['name']; ?> - <? endif; ?><? if (!isset($this->magic_vars['_G']['site_result']['name'])) $this->magic_vars['_G']['site_result']['name']=''; ;if (  $this->magic_vars['_G']['site_result']['name']): ?> <? if (!isset($this->magic_vars['_G']['site_result']['name'])) $this->magic_vars['_G']['site_result']['name'] = ''; echo $this->magic_vars['_G']['site_result']['name']; ?> -  <? endif; ?><? if (!isset($this->magic_vars['_G']['system']['con_webname'])) $this->magic_vars['_G']['system']['con_webname'] = ''; echo $this->magic_vars['_G']['system']['con_webname']; ?>
-�������Ϣƽ̨-p2p����|������|P2P���Ͻ��|���ƽ̨|Ͷ�����|���˴�|���ô���|С�����|��Ѻ
</title>
<meta name="description" content="<? if (!isset($this->magic_vars['_G']['system']['con_description'])) $this->magic_vars['_G']['system']['con_description'] = ''; echo $this->magic_vars['_G']['system']['con_description']; ?>" />
<meta name="keywords" content="<? if (!isset($this->magic_vars['_G']['system']['con_keywords'])) $this->magic_vars['_G']['system']['con_keywords'] = ''; echo $this->magic_vars['_G']['system']['con_keywords']; ?>" />
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/jquery-ui.css" type="text/css" media="all" />
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/jquery.js"></script>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/jquery-ui.js"></script>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/thickbox/thickbox.js"></script>
<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/thickbox/thickbox.css" type="text/css" media="screen" />
<!--jbox-->
<link id="skin" rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/jBox/Skins/Gray/jbox.css" />
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/jBox/jquery.jBox-2.3.min.js?v=1" charset='gb2312'></script>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/jBox/i18n/jquery.jBox-zh-CN.js?v=1" charset='gb2312'></script>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/blockUI.js"></script>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/index.js"></script>

<!--jbox-->
<meta property="qc:admins" content="773325432571652767456375" />

</head>

<body>
<div class="headbg">
    <div class="head clearfix">
        <div class="float_left">
           <? if (!isset($this->magic_vars['_G']['user_id'])) $this->magic_vars['_G']['user_id']=''; ;if (  $this->magic_vars['_G']['user_id']>0): ?>
				  ��ӭ�㣬<a href="/?user"><? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?></a> 
				  <a href="/?user&q=going/logout">[�˳�]</a>
				 <? else: ?>
				 <? if (!isset($this->magic_vars['_G']['open_connet']['type'])) $this->magic_vars['_G']['open_connet']['type']=''; ;if (  $this->magic_vars['_G']['open_connet']['type']=='qq'): ?>
				 ��ӭ����<img src="/data/images/base/connect_qq.gif" title="qq" />
				 <? if (!isset($this->magic_vars['_G']['open_connet']['nickname'])) $this->magic_vars['_G']['open_connet']['nickname'] = ''; echo $this->magic_vars['_G']['open_connet']['nickname']; ?> | 
				 <a href="/index.action?user&q=going/reg">�����ʺ���Ϣ</a> | 
				 <a href="/index.action?user&q=going/login">�������ʺ�</a> | 
				<a href="/?user&q=going/logout">�˳�</a>
				 <? else: ?>
				 <a href="/index.action?user&q=going/login">��¼</a> | 
				<a href="/index.action?user&q=going/getreg">ע��</a>
				 <? endif; ?>
				
				<? endif; ?>
        </div>
        <div class="float_right">
            <div class="quick-link-wrap"><a href="/invest/index.html?order=account_up">��ҪͶ��</a> | <a href="/borrow/index.html">��Ҫ���</a> | <a href="/index.action?user&q=code/account/recharge_new">��Ҫ��ֵ</a> | <a href="/index.action?user&q=code/account/cash_new">��Ҫ����</a> | <a href="/aboutus/index.html"> ��ѯ����</a></div>
        </div>
    </div>
    <div class="logo clearfix">
        <div class="logoimg">
            <a href="/"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/logo.png" alt=""></a>
        </div>
        <div class="telimg">
            <img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/telimg.png" alt="����绰">
        </div>
    </div>
    <div class="navbg">
        <div class="nav">
            <ul class="navul clearfix">
                <li <? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']='';if (!isset($this->magic_vars['_G']['site_presult']['nid'])) $this->magic_vars['_G']['site_presult']['nid']=''; ;if (  $this->magic_vars['_G']['site_result']['nid']=="" ||  $this->magic_vars['_G']['site_presult']['nid']=="index"): ?> class="hover2" <? endif; ?> >
                    <a href="/">��ҳ</a>
                </li>
                <li <? if (!isset($this->magic_vars['_G']['site_presult']['nid'])) $this->magic_vars['_G']['site_presult']['nid']='';if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']=''; ;if (  $this->magic_vars['_G']['site_presult']['nid']=="invest" ||  $this->magic_vars['_G']['site_result']['nid']=="invest"): ?> class="hover2"  <? else: ?>  class=""  <? endif; ?>>
                    <a href="/invest/index.html?order=account_up" >��ҪͶ��</a>
                </li>
                <li <? if (!isset($this->magic_vars['_G']['site_presult']['nid'])) $this->magic_vars['_G']['site_presult']['nid']='';if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']=''; ;if (  $this->magic_vars['_G']['site_presult']['nid']=="borrow"  ||  $this->magic_vars['_G']['site_result']['nid']=="borrow"): ?> class="hover2"  <? else: ?> class=""  <? endif; ?>>
                    <a href="/borrow/index.html">��Ҫ����</a>
                </li>
                <li <? if (!isset($this->magic_vars['_G']['site_presult']['nid'])) $this->magic_vars['_G']['site_presult']['nid']='';if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']=''; ;if (  $this->magic_vars['_G']['site_presult']['nid']=="user"  ||  $this->magic_vars['_G']['site_result']['nid']=="user"): ?> class="hover2"  <? else: ?>  class=""  <? endif; ?>>
                    <a href="/index.action?user">�˻�����</a>
                </li>
                <li <? if (!isset($this->magic_vars['_G']['site_presult']['nid'])) $this->magic_vars['_G']['site_presult']['nid']='';if (!isset($this->magic_vars['_G']['site_presult']['nid'])) $this->magic_vars['_G']['site_presult']['nid']='';if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']='';if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid']=''; ;if (  $this->magic_vars['_G']['site_presult']['nid']=="help"  ||  $this->magic_vars['_G']['site_presult']['nid']=="kefu"  ||  $this->magic_vars['_G']['site_result']['nid']=="help" ||  $this->magic_vars['_G']['site_result']['nid']=="aboutus"): ?> class="hover2"  <? else: ?>  class=""  <? endif; ?>>
                    <a href="/aboutus/index.html">��Ѷ����</a>
                </li>
                <li>
                    <a href="#">��̳</a>
                </li>
            </ul>
            <div class="navlist">
                <? $this->magic_vars['query_type']='GetSiteList';$data = array('var'=>'var','epage'=>'20','pid'=>'1','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','status'=>'1');$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetSiteList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
                    <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key'] != 0): ?>
                        | <a class="submenu" href="/<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html" ><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a>  
                    <? else: ?>
                        <a class="submenu" href="/<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html" ><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a>
                    <? endif; ?>
                <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>

            </div>
            <div class="navlist hide">
                  <a class="submenu" href="/rhtz/index.html">���Ͷ��</a> |
                  <a class="submenu" href="/invest/index.html" >�б��еĽ���</a> |
                  <a class="submenu" href="/invest/index.html?type=reviews" >�����еĽ���</a> |
                  <a class="submenu" href="/invest/index.html?type=success" >��ɵĽ���</a> |
                  <a class="submenu" href="/invest/index.html?type=late" >���ڵĽ���</a>  
            </div>
            <div class="navlist hide">
                  <a class="submenu" href="/borrow/index.html" >��δ���</a> | 
                  <? if (!isset($this->magic_vars['_G']['biao_type']['xin']['available'])) $this->magic_vars['_G']['biao_type']['xin']['available']=''; ;if (  $this->magic_vars['_G']['biao_type']['xin']['available']==1): ?>
                  <a class="submenu" href="/publish/index.html?biao_type=xin" >�������ñ�</a> | 
                  <? endif; ?>
                  <? if (!isset($this->magic_vars['_G']['biao_type']['jin']['available'])) $this->magic_vars['_G']['biao_type']['jin']['available']=''; ;if (  $this->magic_vars['_G']['biao_type']['jin']['available']==1): ?>
                  <a class="submenu" href="/publish/index.html?biao_type=jin" >������ֵ��</a> | 
                  <? endif; ?>
                  <? if (!isset($this->magic_vars['_G']['biao_type']['fast']['available'])) $this->magic_vars['_G']['biao_type']['fast']['available']=''; ;if (  $this->magic_vars['_G']['biao_type']['fast']['available']==1): ?>
                  <a class="submenu" href="/publish/index.html?biao_type=fast" >������Ѻ��</a> | 
                  <? endif; ?>
                  <? if (!isset($this->magic_vars['_G']['biao_type']['miao']['available'])) $this->magic_vars['_G']['biao_type']['miao']['available']=''; ;if (  $this->magic_vars['_G']['biao_type']['miao']['available']==1): ?>
                  <a class="submenu" href="/publish/index.html?biao_type=miao" >�����뻹��</a> | 
                  <? endif; ?>
                  <? if (!isset($this->magic_vars['_G']['biao_type']['lz']['available'])) $this->magic_vars['_G']['biao_type']['lz']['available']=''; ;if (  $this->magic_vars['_G']['biao_type']['lz']['available']==1): ?>
                  <a class="submenu" href="/publish/index.html?biao_type=lz" >������ת��</a> 
                  <? endif; ?>
            </div>
            <div class="navlist hide">
                  <a class="submenu" href="/index.action?user" >�ҵ��˺�</a> |
                  <a class="submenu" href="/index.action?user&q=code/user/reginvite" >�������</a> |
                  <a class="submenu" href="/vip/index.html" >vip����</a> |
                  <a class="submenu" href="/index.action?user&q=code/account/recharge_new" >�˻���ֵ</a> |
                  <a class="submenu" href="/index.action?user&q=code/account/cash_new" >�˻�����</a> |
                  <a class="submenu" href="/index.action?user&q=code/borrow/repaymentplan" >��Ҫ����</a>  
            </div>
            <div class="navlist hide">
                <? $this->magic_vars['query_type']='GetSiteList';$data = array('var'=>'var','epage'=>'20','pid'=>'21','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','status'=>'1');$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetSiteList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
                <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key'] != 0): ?>
                    | <a class="submenu" href="/<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html" ><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a>  
                <? else: ?>
                    <a class="submenu" href="/<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html" ><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a>
                <? endif; ?>
                <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
            </div>
            <div class="navlist hide">
                ��
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/head_nav.js"></script>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/base.js"></script>

<!--header-end-->