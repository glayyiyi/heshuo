
		<div class="fenlan">
			<div class="fenlan_title"><span><a href="javascript:void(0);" onclick="change_menu('module_menu_1',this)">+</a></span><strong><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/channel" >模块列表</a></strong></div>
			<div class="fenlan_content">
				<ul id="module_menu_1">
					<?  if(!isset($this->magic_vars['_A']['module_install_list']) || $this->magic_vars['_A']['module_install_list']=='') $this->magic_vars['_A']['module_install_list'] = array();  $_from = $this->magic_vars['_A']['module_install_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['module']):
?>
					<li><span><? if (!isset($this->magic_vars['module']['fields'])) $this->magic_vars['module']['fields']=''; ;if (  $this->magic_vars['module']['fields']==1): ?><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/fields&code=<? if (!isset($this->magic_vars['module']['code'])) $this->magic_vars['module']['code'] = ''; echo $this->magic_vars['module']['code']; ?>">字段</a> - <? endif; ?> <a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/<? if (!isset($this->magic_vars['module']['code'])) $this->magic_vars['module']['code'] = ''; echo $this->magic_vars['module']['code']; ?>">内容</a></span><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/channel/edit&code=<? if (!isset($this->magic_vars['module']['code'])) $this->magic_vars['module']['code'] = ''; echo $this->magic_vars['module']['code']; ?>"  id="site" title="<? if (!isset($this->magic_vars['module']['description'])) $this->magic_vars['module']['description'] = ''; echo $this->magic_vars['module']['description']; ?>" ><? if (!isset($this->magic_vars['module']['name'])) $this->magic_vars['module']['name'] = ''; echo $this->magic_vars['module']['name']; ?></a></li>
					<? endforeach; endif; unset($_from); ?>
				</ul>
			</div>
		</div>
		
<!--
		<div class="fenlan">
			<div class="fenlan_title"><span><a href="javascript:void(0);" onclick="change_menu('module_menu_2',this)">+</a></span><strong><a href="<? if (!isset($this->magic_vars['admin_url'])) $this->magic_vars['admin_url'] = ''; echo $this->magic_vars['admin_url']; ?>&q=module" >模块管理</a></strong></div>
			<div class="fenlan_content">
				<ul id="module_menu_2">
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/channel" id="adminlist">全部模块</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/channel/install" id="adminlist">已安装模块</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/channel/unstall" id="adminlist">未安装模块</a></li>
				</ul>
			</div>
		</div>
-->