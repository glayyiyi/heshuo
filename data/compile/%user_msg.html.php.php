<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
<? $this->magic_include(array('file' => "user_header.html", 'vars' => array()));?>


<div id="main" class="clearfix">
	<div class="box">
		<div class="box-con">
			<p class="reg-pro">
            系统提示信息
            </p>
            <div align="center">
            <br><br><? if (!isset($this->magic_vars['_U']['showmsg']['msg'])) $this->magic_vars['_U']['showmsg']['msg'] = ''; echo $this->magic_vars['_U']['showmsg']['msg']; ?>
            
            <br><br><div id="msg_content"><a href="<? if (!isset($this->magic_vars['_U']['showmsg']['url'])) $this->magic_vars['_U']['showmsg']['url'] = ''; echo $this->magic_vars['_U']['showmsg']['url']; ?>" ><? if (!isset($this->magic_vars['_U']['showmsg']['content'])) $this->magic_vars['_U']['showmsg']['content'] = ''; echo $this->magic_vars['_U']['showmsg']['content']; ?></a></div><br><br>
            </div>
		</div>
	</div>
</div>

<script> 

var url = '<? if (!isset($this->magic_vars['_U']['showmsg']['url'])) $this->magic_vars['_U']['showmsg']['url'] = ''; echo $this->magic_vars['_U']['showmsg']['url']; ?>';
var content = '<? if (!isset($this->magic_vars['_U']['showmsg']['content'])) $this->magic_vars['_U']['showmsg']['content'] = ''; echo $this->magic_vars['_U']['showmsg']['content']; ?>';

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
</script>


<? $this->magic_include(array('file' => "user_footer.html", 'vars' => array()));?>