<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>网站业务系统处理平台</title>

    <style type="text/css">
       
body {
	background-color: #1D3647;
	margin:0;
	padding:0; 
    background-repeat: repeat
}

A {
    font-size: 10pt;
    color: #383636;
    text-decoration: none;
}

A:hover {
    font-size: 10pt;
    text-decoration: underline;
    color: #383636
}

A:active {
    font-size: 10pt;
    COLOR: #383636;
    text-decoration: underline;
}

P {
    font-size: 10pt;
	margin:0;
}

TD {
    font-size: 10pt;
    line-height: 14pt;
}

.bi-blue {
    font-family: "Arial", "Helvetica", "sans-serif";
    font-size: 10pt;
    color: #00AEEF;
    text-decoration: none;
}

LI {
    FONT-SIZE: 20pt
}

input {
    font: 10pt Tahoma, Verdana;
}

SELECT {
    FONT-SIZE: 10pt
}

.top_thead {
    margin: 0px;
    padding: 3px;
    color: #ffffff;
    vertical-align: middle;
    background-image: url(<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>images/top_bg2.gif);
    background-repeat: repeat-x;
}

.top_thead a:link, .top_thead a:visited, .top_thead a:active {
    text-decoration: none;
    color: #ffffff;
    background-color: transparent;
}

.top_thead a:hover {
    margin: 0px;
    text-decoration: underline;
    color: #dddddd;
}

.td_css1 {
    border-left: #FF4400 1px solid;
    border-right: #FF4400 1px solid;
    border-top: #FF4400 1px solid;
}

.td_css2 {
    border-left: #FF4400 1px solid;
    border-right: #FF4400 1px solid;
    border-BOTTOM: #DEDEDE 1px solid;
}

.b-form {
    font-size: 10pt;
    color: #6C6451;
    text-decoration: none;
    background-color: #EDA58A;
    border: 1px solid #BC4F25;
    background-attachment: fixed;
    background-repeat: no-repeat;

}

.b-form2 {
    font-size: 10pt;
    color: #444444;
    text-decoration: none;
    background-color: #FFFFFF;
    border: 1px solid #cccccc;
    background-attachment: fixed;
    background-repeat: no-repeat;

}


.login_top_bg {
	background-image: url(<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/login-top-bg.gif);
	background-repeat: repeat-x;
}

.login-buttom-bg {
	background-image: url(<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/login-buttom-bg.gif);
	background-repeat: repeat-x;
}
.login-buttom-txt {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #ABCAD3;
	text-decoration: none;
	line-height: 20px;
}
.login_txt {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 25px;
	color: #333333;
}
.Submit {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #629DAE;
	text-decoration: none;
	background-image: url(<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/Submit_bg.gif);
	background-repeat: repeat-x;
}
.login_bg {
	background-image: url(<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/login_bg.jpg);
	background-repeat: repeat-x;
}
.login_bg2 {
	background-image: url(<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/login-content-bg.gif);
	background-repeat: no-repeat;
	background-position: right;
}

.admin_txt {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #FFFFFF;
	text-decoration: none;
	height: 38px;
	width: 100%;
	position: ???;
	line-height: 38px;
}
.login_txt_bt {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	line-height: 25px;
	color: #666666;
	font-weight: bold;
}
.admin_topbg {
	background-image: url(<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/top-right.gif);
	background-repeat: repeat-x;
}
.txt_bt {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 25px;
	font-weight: bold;
	color: #000000;
	text-decoration: none;
}
.left_topbg {
	background-image: url(<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/content-bg.gif);
	background-repeat: repeat-x;
}
.admin_toptxt {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #4A8091;
	height: 18px;
	width: 100%;
	overflow: hidden;
	position: ???;
}

.left_bt {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	color: #395a7b;
}
.left_bt2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 25px;
	font-weight: bold;
	color: #333333;
}
.titlebt {
	font-size: 12px;
	line-height: 26px;
	font-weight: bold;
	color: #000000;
	background-image: url(<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/top_bt.jpg);
	background-repeat: no-repeat;
	display: block;
	text-indent: 15px;
	padding-top: 5px;
}

.left_txt {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 25px;
	color: #666666;
}
.left_txt2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 25px;
	color: #000000;
}
.nowtable {
	background-color: #e1e5ee;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-top-style: solid;
	border-top-color: #bfc4ca;
	border-right-color: #bfc4ca;
	border-bottom-color: #bfc4ca;
	border-left-color: #bfc4ca;
}
.left_txt3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 25px;
	color: #003366;
	text-decoration: none;
}



.left_ts {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 25px;
	font-weight: bold;
	color: #FF6600;
}
.line_table {
	border: 1px solid #CCCCCC;
}
.sec1 {
	CURSOR: hand;
	COLOR: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 25px;
	border: 1px solid #B5D0D9;
	background-image: url(<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/right_smbg.jpg);
	background-repeat: repeat-x;
}
.sec2 {
	FONT-WEIGHT: bold;
	CURSOR: hand;
	COLOR: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 25px;
	background-color: #e2e7ed;
	border: 1px solid #e2e7ed;
}
.main_tab {
	COLOR: #000000;
	BACKGROUND-COLOR: #e2e7ed;
	border: 1px solid #e2e7ed;
}
.MM a {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #666666;
	background-image: url(<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/menu_bg.gif);
	background-repeat: no-repeat;
	list-style-type: none;
	list-style-image: none;
}
a:link {
	font-size: 12px;
	line-height: 25px;
	color: #333333;
	text-decoration: none;
}
a:hover {
	font-size: 12px;
	line-height: 25px;
	color: #666666;
	text-decoration: none;
}
a:visited {
	font-size: 12px;
	line-height: 25px;
	color: #333333;
	text-decoration: none;
}


.MM a:link {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #666666;
	
	background-image: url(<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/menu_bg.gif);
	background-repeat: no-repeat;
	list-style-type: none;
	list-style-image: none;
}

    </style>

<link rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/jquery-ui.css" type="text/css" media="all" />
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/jquery.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/jquery-ui.min.js" type="text/javascript"></script>

<link id="skin" rel="stylesheet" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/jBox/Skins/Gray/jbox.css" />
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/jBox/i18n/jquery.jBox-zh-CN.js"></script>
</head>

<script>


var login_msg="<? if (!isset($this->magic_vars['login_msg'])) $this->magic_vars['login_msg'] = ''; echo $this->magic_vars['login_msg']; ?>";


jQuery(function(){
	if(login_msg!=""){
		jQuery.jBox.tip(login_msg, 'warning');
	}
});
    function check_login(){
        if (form1.username.value==""){
            //alert("用户名不能为空！");
			jQuery.jBox.tip("用户名不能为空！", 'warning');
            return false;
        }else if (form1.password.value==""){
            //alert("密码不能为空！");
			jQuery.jBox.tip("密码不能为空！", 'warning');
            return false;
        }else if (form1.valicode.value==""){
            //alert("验证码不能为空！");
			jQuery.jBox.tip("验证码不能为空！", 'warning');
            return false;
        }

    }

</script>

<body>
<table width="100%" height="166" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td height="42" valign="top"><table width="100%" height="42" border="0" cellpadding="0" cellspacing="0" class="login_top_bg">
            <tr>
                <td width="1%" height="21">&nbsp;</td>
                <td height="42">&nbsp;</td>
                <td width="17%">&nbsp;</td>
            </tr>
        </table></td>
    </tr>
    <tr>
        <td valign="top"><table width="100%" height="532" border="0" cellpadding="0" cellspacing="0" class="login_bg">
            <tr>
                <td width="49%" align="right"><table width="91%" height="532" border="0" cellpadding="0" cellspacing="0" class="login_bg2">
                    <tr>
                        <td height="138" valign="top"><table width="100%" height="427" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td height="149">&nbsp;</td>
                            </tr>
                            
                            <tr>
                                <td height="198" align="right" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                                    
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td height="25" colspan="2" class="left_txt" align="left"><p>1- 感谢杭州融都商务咨询有限公司提供的支持</p></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td height="25" colspan="2" class="left_txt" align="left"><p>2- 进入管理模块请注意选择安全退出</p>　 技术支持：0571-85135916</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td width="30%" height="40" align="left"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/icon-demo.gif" width="16" height="16"><a href="/" target="_blank" class="left_txt3"> 前台首页</a> </td>
                                        <td width="35%" align="left"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/icon-login-seaver.gif" width="16" height="16"><a href="#"; target=_blank;>在线客服</a></td>

                                    </tr>
                                </table></td>
                            </tr>
                        </table></td>
                    </tr>
                </table></td>
                <td width="1%" >&nbsp;</td>
                <td width="50%" valign="bottom"><table width="100%" height="59" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="4%">&nbsp;</td>
                        <td width="96%" height="38"><span class="login_txt_bt">登录网贷业务处理平台</span></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td height="21"><table cellSpacing="0" cellPadding="0" width="100%" border="0" id="table211" height="328">
                            <tr>
                                <td height="164" colspan="2" align="middle">  <form id="form1" name="form1" method="post" action="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=login" onsubmit="return check_login();">
                                    <input type="hidden" name="enews" value="login">
                                  <table width="50%" height="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="70" height="27">用户名:&nbsp;</td>
                                            <td colspan="2" align="left"><input name="username" type="text" size="20" maxlength="20" tabindex="1" style="width:185px;" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="27">密&nbsp;&nbsp;码:&nbsp;</td>
                                            <td colspan="2" align="left"><input name="password" type="password" size="21" maxlength="20"  tabindex="2" style="width:185px;" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="27">验证码:&nbsp;</td>
                                            <td colspan="2" align="left"><input name="valicode" type="text" size="11" maxlength="4" tabindex="3"/>&nbsp;<img src="plugins/index.php?q=imgcode" alt="点击刷新" onClick="this.src='plugins/index.php?q=imgcode&t=' + Math.random();" align="absmiddle" style="cursor:pointer" /></td>
                                        </tr>
                                        <tr>
                                            <td height="27">动态口令:&nbsp;</td>
                                            <td colspan="2" align="left"><input name="uchoncode" type="text" size="21" maxlength="20"  tabindex="4" style="width:185px;"/></td>
                                        </tr>
                                        <tr>
                                            <td height="27">&nbsp;</td>
                                            <td colspan="2" valign="bottom"><input name="imageField" type="image" src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/login2.gif" width="69" height="21" border="0">
                                            </td>
                                        </tr>
                                    </table>
                                </form></td>
                            </tr>
                            <tr>
                                <td width="433" height="164" align="right" valign="bottom"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/login-wel.gif" width="242" height="138" /></td>
                                <td width="57" align="right" valign="bottom">&nbsp;</td>
                            </tr>
                        </table></td>
                    </tr>
                </table></td>
            </tr>
        </table></td>
    </tr>
    <tr>
        <td height="20"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="login-buttom-bg">
            <tr>
                <td align="center"><span class="login-buttom-txt">Powered by　<strong><a href="http://www.erongdu.com" style="color:#fff;">RDTECH</a>　V6.1.0</strong> <font color="#FF9900"></font> &copy; 2010-2012, RONGDU &nbsp;Inc.</span></td>
            </tr>
        </table></td>
    </tr>
</table>

</body>
</html>
