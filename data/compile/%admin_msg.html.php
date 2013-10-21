<? $this->magic_include(array('file' => "admin_head.html.php", 'vars' => array()));?>
<div class="module_add">
	
	<div class="module_title"><strong>系统信息</strong></div>
	
	<div class="module_border"  style="text-align:center">
		<br />
			<strong><? if (!isset($this->magic_vars['_A']['showmsg']['msg'])) $this->magic_vars['_A']['showmsg']['msg'] = ''; echo $this->magic_vars['_A']['showmsg']['msg']; ?></strong> <br /><br />
	</div>
	<div class="module_border" style="text-align:center" id="msg_content">
			<a href="<? if (!isset($this->magic_vars['_A']['showmsg']['url'])) $this->magic_vars['_A']['showmsg']['url'] = ''; echo $this->magic_vars['_A']['showmsg']['url']; ?>"><? if (!isset($this->magic_vars['_A']['showmsg']['content'])) $this->magic_vars['_A']['showmsg']['content'] = ''; echo $this->magic_vars['_A']['showmsg']['content']; ?></a>
	</div>
</div>
<script> 
var url = '<? if (!isset($this->magic_vars['_A']['showmsg']['url'])) $this->magic_vars['_A']['showmsg']['url'] = ''; echo $this->magic_vars['_A']['showmsg']['url']; ?>';
var content = '<? if (!isset($this->magic_vars['_A']['showmsg']['content'])) $this->magic_vars['_A']['showmsg']['content'] = ''; echo $this->magic_vars['_A']['showmsg']['content']; ?>';

if (url == ""){
	document.getElementById('msg_content').innerHTML = "<a href='javascript:history.go(-1)'>"+content+"</a>";
}else{
	document.getElementById('msg_content').innerHTML = "<a href='"+url+"'>"+content+"</a>";
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
<? $this->magic_include(array('file' => "admin_foot.html", 'vars' => array()));?>