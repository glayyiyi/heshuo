
			<div class="fenlan_title"><span><a href="javascript:void(0);" onclick="change_menu('site_menu_1',this)">+</a></span><strong><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=site" >栏目列表</a></strong></div>
			<div  style="margin-top:10px;" id="site_menu_1">
				
				<link rel="StyleSheet" href="plugins/dtree/dtree.css" type="text/css" />
			<script type="text/javascript" src="plugins/dtree/dtree.js"></script>
				<script type="text/javascript">
				
				d = new dTree('d','plugins/dtree/');
				d.add(0,-1,'根目录','','','');
				<?  if(!isset($this->magic_vars['_G']['site_list']) || $this->magic_vars['_G']['site_list']=='') $this->magic_vars['_G']['site_list'] = array();  $_from = $this->magic_vars['_G']['site_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				d.add('<? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?>',<? if (!isset($this->magic_vars['item']['pid'])) $this->magic_vars['item']['pid'] = '';$_tmp = $this->magic_vars['item']['pid'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>,'<? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>','<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=site/edit&site_id=<? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?>&a=loop"','','');
				
				<? endforeach; endif; unset($_from); ?>
				document.write(d);
				
			</script>
			</div>
		