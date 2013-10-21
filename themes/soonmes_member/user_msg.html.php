<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{include file="user_header.html"}


<div id="main" class="clearfix">
	<div class="box">
		<div class="box-con">
			<p class="reg-pro">
            系统提示信息
            </p>
            <div align="center">
            <br><br>{$_U.showmsg.msg}
            
            <br><br><div id="msg_content"><a href="{$_U.showmsg.url}" >{$_U.showmsg.content}</a></div><br><br>
            </div>
		</div>
	</div>
</div>

<script> 

var url = '{ $_U.showmsg.url }';
var content = '{ $_U.showmsg.content }';
{literal}
if (url == ""){
	jQuery("#msg_content").html("<a href='javascript:history.go(-1)'>"+content+"</a>");
	//document.getElementById('msg_content').innerHTML = "<a href='javascript:history.go(-1)'>"+content+"</a>";
}else{
	jQuery("#msg_content").html("<a href='"+url+"'>"+content+"</a>");
	//document.getElementById('msg_content').innerHTML = "<a href='"+url+"'>"+content+"</a>";
}
setInterval("testTime()",5000); 
function testTime() { 
		if (url == ""){
			history.go(-1);
		}else{
        location.href = url; //#设定跳转的链接地址
		}
} 
</script>{/literal}


{include file="user_footer.html"}