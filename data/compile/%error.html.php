<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<div id="main" class="clearfix">
	<div class="box">
		<div class="box-con">
			<p class="reg-pro">
            系统提示信息
            </p>
            <div align="center">
            <br><br><? if (!isset($this->magic_vars['_G']['msg']['0'])) $this->magic_vars['_G']['msg']['0'] = ''; echo $this->magic_vars['_G']['msg']['0']; ?>
            
            <br><br><div id="msg_content"><? if (!isset($this->magic_vars['_G']['msg']['1'])) $this->magic_vars['_G']['msg']['1'] = ''; echo $this->magic_vars['_G']['msg']['1']; ?></div><br><br>
            </div>
		</div>
	</div>
</div>
<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>