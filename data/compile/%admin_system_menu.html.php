		<div class="fenlan">
			<div class="fenlan_title"><span><a href="javascript:void(0);" onclick="change_menu('system_menu_1',this)">+</a></span><strong><a href="javascript:void(0);">系统设置</a></strong></div>
			<div class="fenlan_content">
				<ul id="system_menu_1">
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=system/info">系统参数</a></li>
					<!-- <li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=system/watermark">图片水印设置</a></li> -->
					<!-- <li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=system/fujian">附件设置</a></li> -->
					<!-- <li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=system/flag">自定义属性</a></li> -->
                    <li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=system/email">邮件设置</a></li>
                    <!-- <li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=system/phone">短信设置</a></li> -->
				</ul>
			</div>
		</div>
		
 
		
		<div class="fenlan">
			<div class="fenlan_title"><span><a href="javascript:void(0);" onclick="change_menu('site_menu_6',this)">+</a></span><strong><a href="javascript:void(0);" >用户管理</a></strong></div>
			<div class="fenlan_content">
				<ul id="site_menu_6">
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/manager&a=system">管理员管理</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user&a=system">用户管理</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=system/user">修改个人信息（密码）</a></li>
				</ul>
			</div>
		</div>
		
		<div class="fenlan">
			<div class="fenlan_title"><span><a href="javascript:void(0);" onclick="change_menu('system_menu_3',this)">+</a></span><strong><a href="javascript:void(0);">操作记录</a></strong></div>
			<div class="fenlan_content">
				<ul id="system_menu_3">
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=system/userlog">用户操作记录</a></li>
				</ul>
			</div>
		</div>
		<div class="fenlan">
			<div class="fenlan_title"><span><a href="javascript:void(0);" onclick="change_menu('system_menu_5',this)">+</a></span><strong><a href="javascript:void(0);">其它管理</a></strong></div>
			<div class="fenlan_content">
				<ul id="system_menu_5">
					<!-- <li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=system/upfiles">图片管理</a></li> -->
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=system/clearcache">清空缓存</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=system/parameter">重新生成参数文件</a></li>
				</ul>
			</div>
		</div>
 