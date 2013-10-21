		<!--
		<div class="fenlan">
			<div class="fenlan_title"><span><a href="javascript:void(0);" onclick="change_menu('site_menu_1',this)">+</a></span><strong><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=site" >栏目列表</a></strong></div>
			<div  style="margin-top:10px;" id="site_menu_1">
				
				<link rel="StyleSheet" href="plugins/dtree/dtree.css" type="text/css" />
			<script type="text/javascript" src="plugins/dtree/dtree.js"></script>
				<script type="text/javascript">
				
				d = new dTree('d','plugins/dtree/');
				d.add(0,-1,'根目录','','','');
				<?  if(!isset($this->magic_vars['site_res']) || $this->magic_vars['site_res']=='') $this->magic_vars['site_res'] = array();  $_from = $this->magic_vars['site_res']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				d.add('<? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?>',<? if (!isset($this->magic_vars['item']['pid'])) $this->magic_vars['item']['pid'] = '';$_tmp = $this->magic_vars['item']['pid'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,'<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>','<? if (!isset($this->magic_vars['_url'])) $this->magic_vars['_url'] = ''; echo $this->magic_vars['_url']; ?>/<? if (!isset($this->magic_vars['item']['code'])) $this->magic_vars['item']['code'] = ''; echo $this->magic_vars['item']['code']; ?>&site_id=<? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?>','','');
				
				<? endforeach; endif; unset($_from); ?>
				
				document.write(d);
				
			</script>
			</div>
		</div>
		-->
				<!--
		
		<? if (!isset($this->magic_vars['_G']['system']['con_site_listtype'])) $this->magic_vars['_G']['system']['con_site_listtype']=''; ;if (  $this->magic_vars['_G']['system']['con_site_listtype'] == 1): ?>
		<div class="fenlan">
			<div class="fenlan_title"><span><a href="javascript:void(0);" onclick="change_menu('site_menu_1',this)">+</a></span><strong><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=site" >栏目列表</a></strong></div>
			<div  style="margin-top:10px;" id="site_menu_1">
				
				<link rel="StyleSheet" href="plugins/dtree/dtree.css" type="text/css" />
			<script type="text/javascript" src="plugins/dtree/dtree.js"></script>
				<script type="text/javascript">
				
				d = new dTree('d','plugins/dtree/');
				d.add(0,-1,'根目录','','','');
				
				<?  if(!isset($this->magic_vars['_G']['site_list_pur']) || $this->magic_vars['_G']['site_list_pur']=='') $this->magic_vars['_G']['site_list_pur'] = array();  $_from = $this->magic_vars['_G']['site_list_pur']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				d.add('<? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?>',<? if (!isset($this->magic_vars['item']['pid'])) $this->magic_vars['item']['pid'] = '';$_tmp = $this->magic_vars['item']['pid'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,'<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>','<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=<? if (!isset($this->magic_vars['item']['style'])) $this->magic_vars['item']['style']=''; ;if (  $this->magic_vars['item']['style']==1): ?>site/update<? else: ?>module/<? if (!isset($this->magic_vars['item']['code'])) $this->magic_vars['item']['code'] = ''; echo $this->magic_vars['item']['code']; ?><? endif; ?>&site_id=<? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?>&a=site"','','');
				
				<? endforeach; endif; unset($_from); ?>
				document.write(d);
				
			</script>
			</div>
		</div>
		<? else: ?>
		<?  if(!isset($this->magic_vars['_A']['site_menu']) || $this->magic_vars['_A']['site_menu']=='') $this->magic_vars['_A']['site_menu'] = array();  $_from = $this->magic_vars['_A']['site_menu']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<div class="fenlan" >
			<div class="fenlan_title"><span><a href="javascript:void(0);" onclick="change_menu('site_menu_<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>',this)">+</a></span><strong><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=<? if (!isset($this->magic_vars['item']['style'])) $this->magic_vars['item']['style']=''; ;if (  $this->magic_vars['item']['style']==1): ?>site/update<? else: ?>module/<? if (!isset($this->magic_vars['item']['code'])) $this->magic_vars['item']['code'] = ''; echo $this->magic_vars['item']['code']; ?><? endif; ?>&site_id=<? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?>&a=site"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></a></strong></div>
			<div class="fenlan_content">
				<ul id="site_menu_<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>"  style="display:none">
					<?  if(!isset($this->magic_vars['item']['sub']) || $this->magic_vars['item']['sub']=='') $this->magic_vars['item']['sub'] = array();  $_from = $this->magic_vars['item']['sub']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['_item']):
?>
						<li >
						<? if (!isset($this->magic_vars['_item']['aurl'])) $this->magic_vars['_item']['aurl']=''; ;if (  $this->magic_vars['_item']['aurl']!=""): ?>
						<a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=<? if (!isset($this->magic_vars['_item']['aurl'])) $this->magic_vars['_item']['aurl'] = ''; echo $this->magic_vars['_item']['aurl']; ?>&site_id=<? if (!isset($this->magic_vars['_item']['site_id'])) $this->magic_vars['_item']['site_id'] = ''; echo $this->magic_vars['_item']['site_id']; ?>&a=site"><? if (!isset($this->magic_vars['_item']['name'])) $this->magic_vars['_item']['name'] = ''; echo $this->magic_vars['_item']['name']; ?></a>
						<? else: ?>
						<a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=<? if (!isset($this->magic_vars['_item']['style'])) $this->magic_vars['_item']['style']=''; ;if (  $this->magic_vars['_item']['style']==1): ?>site/update<? else: ?>module/<? if (!isset($this->magic_vars['_item']['code'])) $this->magic_vars['_item']['code'] = ''; echo $this->magic_vars['_item']['code']; ?><? endif; ?>&site_id=<? if (!isset($this->magic_vars['_item']['site_id'])) $this->magic_vars['_item']['site_id'] = ''; echo $this->magic_vars['_item']['site_id']; ?>&a=site"><? if (!isset($this->magic_vars['_item']['name'])) $this->magic_vars['_item']['name'] = ''; echo $this->magic_vars['_item']['name']; ?></a>
						</li>
						<? endif; ?>
						<?  if(!isset($this->magic_vars['_item']['_sub']) || $this->magic_vars['_item']['_sub']=='') $this->magic_vars['_item']['_sub'] = array();  $_from = $this->magic_vars['_item']['_sub']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['__item']):
?>
						<li class="sub" >
						<? if (!isset($this->magic_vars['__item']['aurl'])) $this->magic_vars['__item']['aurl']=''; ;if (  $this->magic_vars['__item']['aurl']!=""): ?>
						<a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=<? if (!isset($this->magic_vars['__item']['aurl'])) $this->magic_vars['__item']['aurl'] = ''; echo $this->magic_vars['__item']['aurl']; ?>&site_id=<? if (!isset($this->magic_vars['__item']['site_id'])) $this->magic_vars['__item']['site_id'] = ''; echo $this->magic_vars['__item']['site_id']; ?>&a=site"><? if (!isset($this->magic_vars['__item']['name'])) $this->magic_vars['__item']['name'] = ''; echo $this->magic_vars['__item']['name']; ?></a>
						
						<? else: ?>
						
						<a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=<? if (!isset($this->magic_vars['__item']['style'])) $this->magic_vars['__item']['style']=''; ;if (  $this->magic_vars['__item']['style']==1): ?>site/update<? else: ?>module/<? if (!isset($this->magic_vars['__item']['code'])) $this->magic_vars['__item']['code'] = ''; echo $this->magic_vars['__item']['code']; ?><? endif; ?>&site_id=<? if (!isset($this->magic_vars['__item']['site_id'])) $this->magic_vars['__item']['site_id'] = ''; echo $this->magic_vars['__item']['site_id']; ?>&a=site"><? if (!isset($this->magic_vars['__item']['name'])) $this->magic_vars['__item']['name'] = ''; echo $this->magic_vars['__item']['name']; ?></a><? endif; ?>
						</li>
						<? endforeach; endif; unset($_from); ?>
					<? endforeach; endif; unset($_from); ?>
				</ul>
			</div>
		</div>
		<? endforeach; endif; unset($_from); ?>
		<? endif; ?>
		
		

			<div class="fenlan">
			<div class="fenlan_title"><span><a href="javascript:void(0);" onclick="change_menu('site_menu_4',this)">+</a></span><strong><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=site" >用户管理</a></strong></div>
			<div class="fenlan_content">
				<ul id="site_menu_4">
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user&a=site" id="admintype">用户列表</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/new&a=site" id="adminlist">添加用户</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/user/type&a=site" id="adminlist">用户类型</a></li>
				</ul>
			</div>
		</div>
		<div class="fenlan">
			<div class="fenlan_title"><span><a href="javascript:void(0);" onclick="change_menu('site_menu_3',this)">+</a></span><strong><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/help&a=site" >帮助中心</a></strong></div>
			<div class="fenlan_content">
				<ul id="site_menu_3">
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/help&a=site" id="admintype">帮助列表</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/help/type&a=site" id="admintype">帮助分类</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/help/new&a=site" id="adminlist">添加帮助</a></li>
				</ul>
			</div>
		</div>
		
		
		<div class="fenlan">
			<div class="fenlan_title"><span><a href="javascript:void(0);" onclick="change_menu('site_menu_5',this)">+</a></span><strong><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/footer&a=site" >底部链接管理</a></strong></div>
			<div class="fenlan_content">
				<ul id="site_menu_5">
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/footer&a=site" id="admintype">底部链接列表</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/footer/type&a=site" id="admintype">底部链接分类</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/footer/new&a=site" id="adminlist">添加底部链接</a></li>
				</ul>
			</div>
		</div>
		
		-->