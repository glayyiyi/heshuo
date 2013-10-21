<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
<? $this->magic_include(array('file' => "admin_head.html.php", 'vars' => array()));?>

<!--栏目管理列表可以管理的列表，开始-->
<? if (!isset($this->magic_vars['_A']['query_class'])) $this->magic_vars['_A']['query_class']=''; ;if (  $this->magic_vars['_A']['query_class'] == "loop"): ?>
 <table  border="0"  cellspacing="1" bgcolor="#CCCCCC"  width="100%">
	  <form action="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=site/order" method="post" name="form1" onsubmit="return submit_fool()">
		<tr >
			<td width="" class="main_td">全选</td>						
			<td width="" class="main_td">ID</td>
			<td width="" class="main_td">栏目名称</td>
			<th width="" class="main_td">识别ID</th>
			<th width="" class="main_td">管理权限</th>
			<th width="" class="main_td">所属模块</th>
			<th width="" class="main_td">排序</th>
			<td width="" class="main_td">操作</td>
		</tr>
		<?  if(!isset($this->magic_vars['_G']['site_list']) || $this->magic_vars['_G']['site_list']=='') $this->magic_vars['_G']['site_list'] = array();  $_from = $this->magic_vars['_G']['site_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  id="id_<? if (!isset($this->magic_vars['item']['pid'])) $this->magic_vars['item']['pid'] = ''; echo $this->magic_vars['item']['pid']; ?>_<? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?>" <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==0): ?>class="tr2"<? endif; ?>>
			<td class="main_td1" align="center" width="40">
			<? if (!isset($this->magic_vars['item']['ppid'])) $this->magic_vars['item']['ppid']=''; ;if (  $this->magic_vars['item']['ppid']==1): ?>
			<a href="javascript:void(0);" onclick="change_tr('<? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?>','<? if (!isset($this->magic_vars['item']['pid'])) $this->magic_vars['item']['pid'] = ''; echo $this->magic_vars['item']['pid']; ?>');"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_open.gif" align="absmiddle" border="0" id="imgopen_<? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?>"  /><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_close.gif" align="absmiddle" border="0" id="imgclose_<? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?>"  style="display:none" /></a> 
			<? else: ?>
			<img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_no.gif" />
			<? endif; ?>
			<input type="hidden" value="<? if (!isset($this->magic_vars['item']['ppid'])) $this->magic_vars['item']['ppid'] = ''; echo $this->magic_vars['item']['ppid']; ?>" id="ppd_<? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?>" />
			</td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?></td>
			<td class="main_td1" align="left" ><? if (!isset($this->magic_vars['item']['aname'])) $this->magic_vars['item']['aname'] = ''; echo $this->magic_vars['item']['aname']; ?></td>
			<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?></td>
			<td class="main_td1" align="center">
			<? if (!isset($this->magic_vars['_A']['admin_type_check'])) $this->magic_vars['_A']['admin_type_check'] = array();
 $_from =$this->magic_vars['_A']['admin_type_check'];
 $checked=isset($this->magic_vars['item']['rank'])?$this->magic_vars['item']['rank']:'';$kname=$this->magic_vars['key'];
 if (!is_array($checked)) $checked = explode(',',$checked);
 foreach ($_from as $key => $value):echo "<input type=checkbox value='$key' name='rank[$kname][]' "; if(isset($checked) && isset($checked) && in_array($key,$checked)){ echo ' checked '; };echo " >$value "; endforeach; ?></td>
			<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['module_name'])) $this->magic_vars['item']['module_name'] = ''; echo $this->magic_vars['item']['module_name']; ?></td>
			<td class="main_td1" align="center" ><input type="text" name="order[<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>]" value="<? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']; ?>" size="3" /><input type="hidden" name="site_id[<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>]" value="<? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?>" /></td>
			<td class="main_td1" align="center" >
		  <a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=site/new&pid=<? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?><? if (!isset($this->magic_vars['site_url'])) $this->magic_vars['site_url'] = ''; echo $this->magic_vars['site_url']; ?>">添加</a> <a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=site/edit&a=loop&site_id=<? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?><? if (!isset($this->magic_vars['site_url'])) $this->magic_vars['site_url'] = ''; echo $this->magic_vars['site_url']; ?>">修改</a> <a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=site/move&a=loop&site_id=<? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?><? if (!isset($this->magic_vars['site_url'])) $this->magic_vars['site_url'] = ''; echo $this->magic_vars['site_url']; ?>">移动</a> <a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=site/del&site_id=<? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?><? if (!isset($this->magic_vars['site_url'])) $this->magic_vars['site_url'] = ''; echo $this->magic_vars['site_url']; ?>'">删除</a></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
	<tr>
	<td colspan="8" class="submit" >
	<input type="submit" value="修改排序" /> 
	</td>
</tr>		
</table>
<!--栏目管理列表，可以管理的列表，结束-->
		
			
<!--栏目管理列表，所有人都可以查看，开始-->
<? if (!isset($this->magic_vars['_A']['query_class'])) $this->magic_vars['_A']['query_class']=''; ;elseif (  $this->magic_vars['_A']['query_class'] == "list"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC"  width="100%">
	<tr >					
		<td width="" class="main_td" >ID</td>
		<td width="" class="main_td">栏目名称</td>
		<th width="" class="main_td">识别ID</th>
		<th width="" class="main_td">所属模块</th>
		<th width="" class="main_td">排序</th>
	</tr>
	<?  if(!isset($this->magic_vars['_G']['site_list']) || $this->magic_vars['_G']['site_list']=='') $this->magic_vars['_G']['site_list'] = array();  $_from = $this->magic_vars['_G']['site_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr id="id_<? if (!isset($this->magic_vars['item']['pid'])) $this->magic_vars['item']['pid'] = ''; echo $this->magic_vars['item']['pid']; ?>_<? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?>" <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==0): ?>class="tr2"<? endif; ?>>
		
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?></td>
		<td class="main_td1" align="left" ><? if (!isset($this->magic_vars['item']['aname'])) $this->magic_vars['item']['aname'] = ''; echo $this->magic_vars['item']['aname']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['module_name'])) $this->magic_vars['item']['module_name'] = ''; echo $this->magic_vars['item']['module_name']; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']; ?></td>
	
	</tr>
	<? endforeach; endif; unset($_from); ?>	
</table>
<!--栏目管理列表，所有人都可以查看，结束-->
			
<!--添加和修改栏目 开始-->
<? if (!isset($this->magic_vars['_A']['query_class'])) $this->magic_vars['_A']['query_class']='';if (!isset($this->magic_vars['_A']['query_class'])) $this->magic_vars['_A']['query_class']=''; ;elseif (  $this->magic_vars['_A']['query_class'] == "new" ||  $this->magic_vars['_A']['query_class'] == "edit"): ?>
	<div class="module_add">
	
	<form action="" method="post" name="form1" onsubmit="return check_form()" enctype="multipart/form-data">
	<div class="module_title"><span><? if (!isset($this->magic_vars['_A']['query_class'])) $this->magic_vars['_A']['query_class']=''; ;if (  $this->magic_vars['_A']['query_class']=="edit"): ?><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>&q=site/new&pid=<? if (!isset($this->magic_vars['_A']['site_result']['site_id'])) $this->magic_vars['_A']['site_result']['site_id'] = ''; echo $this->magic_vars['_A']['site_result']['site_id']; ?>&a=loop">添加子栏目</a>&nbsp;<? endif; ?></span><strong><? if (!isset($this->magic_vars['_A']['query_class'])) $this->magic_vars['_A']['query_class']=''; ;if (  $this->magic_vars['_A']['query_class'] == "edit"): ?>编辑<? else: ?>添加<? endif; ?>栏目</strong></div>
	<div class="module_border">
		<div class="l">所在栏目：</div>
		<div class="c">
			<strong><? if (!isset($this->magic_vars['_A']['site_presult']['name'])) $this->magic_vars['_A']['site_presult']['name'] = '';$_tmp = $this->magic_vars['_A']['site_presult']['name']; if (!isset($this->magic_vars['_A']['site_result']['pname'])) $this->magic_vars['_A']['site_result']['pname'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['_A']['site_result']['pname']);$_tmp = $this->magic_modifier("default",$_tmp,"根目录");echo $_tmp;unset($_tmp); ?>
				<input type="hidden" name="pid" value="<? if (!isset($this->magic_vars['_A']['site_presult']['site_id'])) $this->magic_vars['_A']['site_presult']['site_id'] = '';$_tmp = $this->magic_vars['_A']['site_presult']['site_id']; if (!isset($this->magic_vars['_A']['site_result']['pid'])) $this->magic_vars['_A']['site_result']['pid'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['_A']['site_result']['pid']);$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" /></strong>
		</div>
	</div>
	
	 <div class="module_border">
		<div class="l">栏目名称 ：</div>
		<div class="c">
			<input type="text" align="absmiddle" name="name" value="<? if (!isset($this->magic_vars['_A']['site_result']['name'])) $this->magic_vars['_A']['site_result']['name'] = ''; echo $this->magic_vars['_A']['site_result']['name']; ?>" /> <input type="checkbox" name="isurl" value="1" onclick="jump_url()"  <? if (!isset($this->magic_vars['result']['isurl'])) $this->magic_vars['result']['isurl']=''; ;if (  $this->magic_vars['result']['isurl']=="1"): ?> checked="checked"<? endif; ?>/>跳转页
		</div>
	</div>
	
	<div class="module_border" style="display:<? if (!isset($this->magic_vars['result']['isurl'])) $this->magic_vars['result']['isurl']=''; ;if (  $this->magic_vars['result']['isurl']!="1"): ?>none<? endif; ?>" id="jump_url">
		<div class="l">跳转网址：</div>
		<div class="c">
			<input type="text" name="url"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['site_result']['url'])) $this->magic_vars['_A']['site_result']['url'] = ''; echo $this->magic_vars['_A']['site_result']['url']; ?>" size="30" />
		</div>
	</div>
	
	
	<div class="module_border" >
		<div class="l">自定义链接：</div>
		<div class="c">
			<input type="text" name="aurl"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['site_result']['aurl'])) $this->magic_vars['_A']['site_result']['aurl'] = ''; echo $this->magic_vars['_A']['site_result']['aurl']; ?>" size="30" />此次可以做为网站栏目的自定义链接管理，比如讲师管理，直接输入site/peixun/teacher 
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">识别ID(nid)：</div>
		<div class="c">
			<input type="text" align="absmiddle" name="nid"  onkeyup="value=value.replace(/[^a-zA-Z_0-9]/g,'')" value="<? if (!isset($this->magic_vars['_A']['site_result']['nid'])) $this->magic_vars['_A']['site_result']['nid'] = ''; echo $this->magic_vars['_A']['site_result']['nid']; ?>"/>只能为 字母和下划线（_）
				
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">状&nbsp;&nbsp;&nbsp; 态 ：</div>
		<div class="c">
			<input type="radio" value="0" name="status" <? if (!isset($this->magic_vars['_A']['site_result']['status'])) $this->magic_vars['_A']['site_result']['status']='';if (!isset($this->magic_vars['_A']['site_result']['status'])) $this->magic_vars['_A']['site_result']['status']=''; ;if (  $this->magic_vars['_A']['site_result']['status']==0 ||  $this->magic_vars['_A']['site_result']['status']==""): ?>checked="checked"<? endif; ?>/>隐藏
			<input type="radio" value="1" name="status" <? if (!isset($this->magic_vars['_A']['site_result']['status'])) $this->magic_vars['_A']['site_result']['status']='';if (!isset($this->magic_vars['_A']['site_result']['status'])) $this->magic_vars['_A']['site_result']['status']=''; ;if (  $this->magic_vars['_A']['site_result']['status']==1 ||  $this->magic_vars['_A']['site_result']['status']==""): ?>checked="checked"<? endif; ?> />显示
		</div>
	</div>
	
	
	<div class="module_border" >
		<div class="l">栏目类型：</div>
		<div class="c">
			<input type="radio" value="0" name="style" <? if (!isset($this->magic_vars['_A']['site_result']['style'])) $this->magic_vars['_A']['site_result']['style']='';if (!isset($this->magic_vars['_A']['site_result']['style'])) $this->magic_vars['_A']['site_result']['style']=''; ;if (  $this->magic_vars['_A']['site_result']['style']==0 || $this->magic_vars['_A']['site_result']['style']==""): ?>checked="checked"<? endif; ?>/>列表
			<input type="radio" value="1" name="style" <? if (!isset($this->magic_vars['_A']['site_result']['style'])) $this->magic_vars['_A']['site_result']['style']=''; ;if (  $this->magic_vars['_A']['site_result']['style']==1): ?>checked="checked"<? endif; ?>/>单页文章
		</div>
	</div>
	
				<!--
			   <div class="module_border">
		<div class="l">管理权限：</div>
		<div class="c">
			
				<? if (!isset($this->magic_vars['config']['type'])) $this->magic_vars['config']['type']=''; ;if (  $this->magic_vars['config']['type']=='edit'): ?>
					<? if (!isset($this->magic_vars['pur'])) $this->magic_vars['pur'] = ''; echo $this->magic_vars['pur']; ?>
				<? else: ?>
				<?  if(!isset($this->magic_vars['rank']) || $this->magic_vars['rank']=='') $this->magic_vars['rank'] = array();  $_from = $this->magic_vars['rank']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<input type="checkbox" value="<? if (!isset($this->magic_vars['item']['rank'])) $this->magic_vars['item']['rank'] = ''; echo $this->magic_vars['item']['rank']; ?>" name="rank[}"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?> 
				 <? endforeach; endif; unset($_from); ?>
				 <? endif; ?>
		
				（不选择表示不限制）
		</div>
	</div>
	
	
			  -->
	 <div class="module_border">
		<div class="l">排列顺序：</div>
		<div class="c">
				<input type="text" align="absmiddle" name="order"  onkeyup="value=value.replace(/[^0-9]/g,'')" size="5" value="<? if (!isset($this->magic_vars['_A']['site_result']['order'])) $this->magic_vars['_A']['site_result']['order'] = '';$_tmp = $this->magic_vars['_A']['site_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>"/>
		</div>
	</div>
	
	 <div class="module_border">
		<div class="l">所属模块：</div>
		<div class="c">
				<? if (!isset($this->magic_vars['_A']['query_class'])) $this->magic_vars['_A']['query_class']=''; ;if (  $this->magic_vars['_A']['query_class'] == "edit"): ?>
					<? if (!isset($this->magic_vars['_A']['site_result']['module_name'])) $this->magic_vars['_A']['site_result']['module_name'] = ''; echo $this->magic_vars['_A']['site_result']['module_name']; ?>
				<input type="hidden" name="code" value="<? if (!isset($this->magic_vars['_A']['site_result']['code'])) $this->magic_vars['_A']['site_result']['code'] = ''; echo $this->magic_vars['_A']['site_result']['code']; ?>" />
				<? else: ?>
				<select name="code" id="code" >
				<option value="" >请选择模块</option>
				<?  if(!isset($this->magic_vars['_A']['module_list']) || $this->magic_vars['_A']['module_list']=='') $this->magic_vars['_A']['module_list'] = array();  $_from = $this->magic_vars['_A']['module_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
				<option value="<? if (!isset($this->magic_vars['item']['code'])) $this->magic_vars['item']['code'] = ''; echo $this->magic_vars['item']['code']; ?>" ><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></option>
				<? endforeach; endif; unset($_from); ?>
				</select>
				<? endif; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">封面模板：</div>
		<div class="c">
			<input name="index_tpl" type="text"  style="width:300px" value="<? if (!isset($this->magic_vars['_A']['site_result']['index_tpl'])) $this->magic_vars['_A']['site_result']['index_tpl'] = '';$_tmp = $this->magic_vars['_A']['site_result']['index_tpl'];$_tmp = $this->magic_modifier("default",$_tmp,"[code].html");echo $_tmp;unset($_tmp); ?>" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">列表模板：</div>
		<div class="c">
			<input name="list_tpl" type="text"  style="width:300px" value="<? if (!isset($this->magic_vars['_A']['site_result']['list_tpl'])) $this->magic_vars['_A']['site_result']['list_tpl'] = '';$_tmp = $this->magic_vars['_A']['site_result']['list_tpl'];$_tmp = $this->magic_modifier("default",$_tmp,"[code]_list.html");echo $_tmp;unset($_tmp); ?>" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">文章模板：</div>
		<div class="c">
			<input name="content_tpl" type="text"  style="width:300px" value="<? if (!isset($this->magic_vars['_A']['site_result']['content_tpl'])) $this->magic_vars['_A']['site_result']['content_tpl'] = '';$_tmp = $this->magic_vars['_A']['site_result']['content_tpl'];$_tmp = $this->magic_modifier("default",$_tmp,"[code]_content.html");echo $_tmp;unset($_tmp); ?>" />
		</div>
	</div>
			  
	<? if (!isset($this->magic_vars['_A']['query_class'])) $this->magic_vars['_A']['query_class']=''; ;if (  $this->magic_vars['_A']['query_class']=="edit"): ?>
	<div class="module_border">
		<div class="l">模板修改：</div>
		<div class="c">
			 <input type="checkbox" value="1" name="update_all" />所属栏目一起修改 <input type="checkbox" value="1" name="update_brother" />同级栏目一起修改
		</div>
	</div>
	 <? endif; ?>
	 
	<div class="module_border">
		<div class="l">列表命名规则：</div>
		<div class="c">
			<input name="list_name" type="text"  style="width:300px" value="<? if (!isset($this->magic_vars['_A']['site_result']['list_name'])) $this->magic_vars['_A']['site_result']['list_name'] = '';$_tmp = $this->magic_vars['_A']['site_result']['list_name'];$_tmp = $this->magic_modifier("default",$_tmp,"index_[page].html");echo $_tmp;unset($_tmp); ?>" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">文章命名规则：</div>
		<div class="c">
			<input name="content_name" type="text"  style="width:300px" value="<? if (!isset($this->magic_vars['_A']['site_result']['content_name'])) $this->magic_vars['_A']['site_result']['content_name'] = '';$_tmp = $this->magic_vars['_A']['site_result']['content_name'];$_tmp = $this->magic_modifier("default",$_tmp,"[id].html");echo $_tmp;unset($_tmp); ?>" />
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">文件保存目录：</div>
		<div class="c">
			<input name="sitedir" type="text"  style="width:300px" value="<? if (!isset($this->magic_vars['_A']['site_result']['sitedir'])) $this->magic_vars['_A']['site_result']['sitedir'] = '';$_tmp = $this->magic_vars['_A']['site_result']['sitedir'];$_tmp = $this->magic_modifier("default",$_tmp,"[nid]");echo $_tmp;unset($_tmp); ?>" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">管理权限：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['admin_type_check'])) $this->magic_vars['_A']['admin_type_check'] = array();
 $_from =$this->magic_vars['_A']['admin_type_check'];
 $checked=isset($this->magic_vars['_A']['site_result']['rank'])?$this->magic_vars['_A']['site_result']['rank']:'';$kname="";
 if (!is_array($checked)) $checked = explode(',',$checked);
 foreach ($_from as $key => $value):echo "<input type=checkbox value='$key' name='rank[]' "; if(isset($checked) && isset($checked) && in_array($key,$checked)){ echo ' checked '; };echo " >$value "; endforeach; ?> 
		</div>
	</div>
	<? if (!isset($this->magic_vars['_A']['query_class'])) $this->magic_vars['_A']['query_class']=''; ;if (  $this->magic_vars['_A']['query_class']=="new"): ?>
	<div class="module_border">
		<div class="l">目录相对位置：</div>
		<div class="c">
			<input name="referpath" type="radio" value="parent" checked="chekced" />
              上级目录
                            <input name="referpath" type="radio" value="cmspath" />
              CMS根目录
		</div>
	</div>
	<? endif; ?>
	
	<div class="module_border">
		<div class="l">文件访问类型：</div>
		<div class="c">
			<input type="radio" name="visit_type" value="0" <? if (!isset($this->magic_vars['result']['visit_type'])) $this->magic_vars['result']['visit_type']='';if (!isset($this->magic_vars['result']['visit_type'])) $this->magic_vars['result']['visit_type']=''; ;if (  $this->magic_vars['result']['visit_type']==0 ||  $this->magic_vars['result']['visit_type']==""): ?> checked="checked"<? endif; ?>  title="如：?3/1"/> 动态访问 <input type="radio" name="visit_type" value="1" <? if (!isset($this->magic_vars['result']['visit_type'])) $this->magic_vars['result']['visit_type']=''; ;if (  $this->magic_vars['result']['visit_type']==1): ?> checked="checked"<? endif; ?> title="如：?article/dongtai/1.html"/> 生成html访问 （备注：如果系统设置伪静态为是，则按伪静态的来）
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">title参数：</div>
		<div class="c">
			<textarea name="title" cols="40" rows="3" id="title"><? if (!isset($this->magic_vars['_A']['site_result']['title'])) $this->magic_vars['_A']['site_result']['title'] = ''; echo $this->magic_vars['_A']['site_result']['title']; ?></textarea>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">关键字：</div>
		<div class="c">
			<textarea name="keywords" cols="40" rows="3" id="keywords"><? if (!isset($this->magic_vars['_A']['site_result']['keywords'])) $this->magic_vars['_A']['site_result']['keywords'] = ''; echo $this->magic_vars['_A']['site_result']['keywords']; ?></textarea>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">栏目描述：</div>
		<div class="c">
			 <textarea name="description" cols="40" rows="3" id="textarea2"><? if (!isset($this->magic_vars['_A']['site_result']['description'])) $this->magic_vars['_A']['site_result']['description'] = ''; echo $this->magic_vars['_A']['site_result']['description']; ?></textarea>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">栏目图片：</div>
		<div class="c">
			 <input type="file" name="litpic" size="30" class="input_border"/><? if (!isset($this->magic_vars['_A']['site_result']['litpic'])) $this->magic_vars['_A']['site_result']['litpic']=''; ;if (  $this->magic_vars['_A']['site_result']['litpic']!=""): ?><a href="./<? if (!isset($this->magic_vars['_A']['site_result']['litpic'])) $this->magic_vars['_A']['site_result']['litpic'] = ''; echo $this->magic_vars['_A']['site_result']['litpic']; ?>" target="_blank" title="有图片"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_1.jpg" border="0"  /></a><? endif; ?>
		</div>
	</div>
			<script charset="utf-8" src="/plugins/editor/kindeditor/kindeditor-min.js"></script>
		<script charset="utf-8" src="/plugins/editor/kindeditor/lang/zh_CN.js"></script>
	<div class="module_border">
		<div class="l">栏目内容：</div>
		<div class="c">
 
						<textarea name="content" id="content"  style="width:800px;height:400px;visibility:hidden;" ><? if (!isset($this->magic_vars['_A']['site_result']['content'])) $this->magic_vars['_A']['site_result']['content'] = ''; echo $this->magic_vars['_A']['site_result']['content']; ?></textarea>

		</div>
	</div>
	
	<div class="module_submit">
		<? if (!isset($this->magic_vars['_A']['query_class'])) $this->magic_vars['_A']['query_class']=''; ;if (  $this->magic_vars['_A']['query_class'] == "edit"): ?><input type="hidden" value="<? if (!isset($_REQUEST['site_id'])) $_REQUEST['site_id'] = ''; echo $_REQUEST['site_id']; ?>"  name="site_id" /><? endif; ?>
		<input type="submit" value=" 提 交 "  name="submit_ok" />&nbsp;&nbsp;
		<input name="reset" type="reset"  value=" 重 置 " />
	</div>
			</form>
 </div>
  <script>
	var url = "<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=site";
	
	//editor add by weego 20120615 for 网页编辑器
	var editor;
	KindEditor.ready(function(K) {
		editor = K.create('textarea[name="content"]', {
			allowFileManager : true
		});
	});
			
	$(function() {
		$("#code").change(function() {
			$.ajax({
			  url: url+"/module&code="+this.value,
			  cache: false,
			  success: function(html){
				var aa = html.split(",");
				$("input[name='index_tpl']").attr("value",aa[0]);
				$("input[name='list_tpl']").attr("value",aa[1]);
				$("input[name='content_tpl']").attr("value",aa[2]);
			  }
			}); 

		})
		;
	});
	</script>
  
  
 <!--添加和修改栏目 结束--> 
  	
	
<!--编辑栏目 开始-->
<? if (!isset($this->magic_vars['_A']['query_class'])) $this->magic_vars['_A']['query_class']=''; ;elseif (  $this->magic_vars['_A']['query_class'] == "update"): ?>
	<div class="module_add">
	
	<form action="" method="post" name="form1" onsubmit="return check_form()" enctype="multipart/form-data">
	<div class="module_title"><strong>编辑栏目</strong></div>
	<div class="module_border">
		<div class="l">所在栏目：</div>
		<div class="c">
			<strong><? if (!isset($this->magic_vars['_A']['site_presult']['name'])) $this->magic_vars['_A']['site_presult']['name'] = '';$_tmp = $this->magic_vars['_A']['site_presult']['name']; if (!isset($this->magic_vars['_A']['site_result']['pname'])) $this->magic_vars['_A']['site_result']['pname'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['_A']['site_result']['pname']);$_tmp = $this->magic_modifier("default",$_tmp,"根目录");echo $_tmp;unset($_tmp); ?>
				<input type="hidden" name="pid" value="<? if (!isset($this->magic_vars['_A']['site_presult']['site_id'])) $this->magic_vars['_A']['site_presult']['site_id'] = '';$_tmp = $this->magic_vars['_A']['site_presult']['site_id']; if (!isset($this->magic_vars['_A']['site_result']['pid'])) $this->magic_vars['_A']['site_result']['pid'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$this->magic_vars['_A']['site_result']['pid']);$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>" /></strong>
		</div>
	</div>
	
	 <div class="module_border">
		<div class="l">栏目名称 ：</div>
		<div class="c">
			<input type="text" align="absmiddle" name="name" value="<? if (!isset($this->magic_vars['_A']['site_result']['name'])) $this->magic_vars['_A']['site_result']['name'] = ''; echo $this->magic_vars['_A']['site_result']['name']; ?>" />
		</div>
	
	</div>
	
	
	<div class="module_border">
		<div class="l">识别ID(nid)：</div>
		<div class="c">
			<input type="text" align="absmiddle" name="nid"  onkeyup="value=value.replace(/[^a-zA-Z_]/g,'')" value="<? if (!isset($this->magic_vars['_A']['site_result']['nid'])) $this->magic_vars['_A']['site_result']['nid'] = ''; echo $this->magic_vars['_A']['site_result']['nid']; ?>"/>只能为 字母和下划线（_）
				
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">状&nbsp;&nbsp;&nbsp; 态 ：</div>
		<div class="c">
			<input type="radio" value="0" name="status" <? if (!isset($this->magic_vars['_A']['site_result']['status'])) $this->magic_vars['_A']['site_result']['status']='';if (!isset($this->magic_vars['_A']['site_result']['status'])) $this->magic_vars['_A']['site_result']['status']=''; ;if (  $this->magic_vars['_A']['site_result']['status']==0 ||  $this->magic_vars['_A']['site_result']['status']==""): ?>checked="checked"<? endif; ?>/>隐藏
			<input type="radio" value="1" name="status" <? if (!isset($this->magic_vars['_A']['site_result']['status'])) $this->magic_vars['_A']['site_result']['status']='';if (!isset($this->magic_vars['_A']['site_result']['status'])) $this->magic_vars['_A']['site_result']['status']=''; ;if (  $this->magic_vars['_A']['site_result']['status']==1 ||  $this->magic_vars['_A']['site_result']['status']==""): ?>checked="checked"<? endif; ?> />显示
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">栏目图片：</div>
		<div class="c">
			 <input type="file" name="litpic" size="30" class="input_border"/><? if (!isset($this->magic_vars['_A']['site_result']['litpic'])) $this->magic_vars['_A']['site_result']['litpic']=''; ;if (  $this->magic_vars['_A']['site_result']['litpic']!=""): ?><a href="./<? if (!isset($this->magic_vars['_A']['site_result']['litpic'])) $this->magic_vars['_A']['site_result']['litpic'] = ''; echo $this->magic_vars['_A']['site_result']['litpic']; ?>" target="_blank" title="有图片"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_1.jpg" border="0"  /></a><input type="checkbox" name="clearlitpic" value="1" /> 去掉图片<? endif; ?>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">内容：</div>
		<div class="c">
			<?  if (!isset($this->magic_vars['_A']['site_result']['content'])) $this->magic_vars['_A']['site_result']['content']=''; ; $name = "content" ; $value = $this->magic_vars['_A']['site_result']['content'];require_once(ROOT_PATH ."/plugins/editor/sinaeditor/Editor.class.php");
$editor=new sinaEditor($name);
	$editor->Value= "$value";

	$editor->AutoSave=false;
	echo $editor->Create(); ?>
		</div>
	</div>
	
	
	<div class="module_border">
		<div class="l">title参数：</div>
		<div class="c">
			<textarea name="title" cols="40" rows="3" id="title"><? if (!isset($this->magic_vars['_A']['site_result']['title'])) $this->magic_vars['_A']['site_result']['title'] = ''; echo $this->magic_vars['_A']['site_result']['title']; ?></textarea>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">关键字：</div>
		<div class="c">
			<textarea name="keywords" cols="40" rows="3" id="keywords"><? if (!isset($this->magic_vars['_A']['site_result']['keywords'])) $this->magic_vars['_A']['site_result']['keywords'] = ''; echo $this->magic_vars['_A']['site_result']['keywords']; ?></textarea>
		</div>
	</div>
	
	<div class="module_border">
		<div class="l">栏目描述：</div>
		<div class="c">
			 <textarea name="description" cols="40" rows="3" id="textarea2"><? if (!isset($this->magic_vars['_A']['site_result']['description'])) $this->magic_vars['_A']['site_result']['description'] = ''; echo $this->magic_vars['_A']['site_result']['description']; ?></textarea>
		</div>
	</div>
	<div class="module_submit">
		<input type="hidden" value="<? if (!isset($_REQUEST['site_id'])) $_REQUEST['site_id'] = ''; echo $_REQUEST['site_id']; ?>"  name="site_id" />
		<input type="submit" value=" 提 交 "  name="submit_ok" />&nbsp;&nbsp;
		<input name="reset" type="reset"  value=" 重 置 " />
	</div>
			</form>
 </div>
 
  
 <!--添加和修改栏目 结束--> 
 
 	
		  <? if (!isset($this->magic_vars['_A']['query_class'])) $this->magic_vars['_A']['query_class']=''; ;elseif (  $this->magic_vars['_A']['query_class'] == "recycle"): ?>
			 <table  border="0"  width="100%" cellspacing="1"  bgcolor="#CCCCCC" >
				 
					<tr >
						<td class="main_td" >栏目ID</td>
						<td class="main_td">栏目名称</td>
						<td class="main_td">识别ID</td>
						<td class="main_td">所属模块</td>
						<td class="main_td" width="30%">操作</td>
					</tr>
					<?  if(!isset($this->magic_vars['result']) || $this->magic_vars['result']=='') $this->magic_vars['result'] = array();  $_from = $this->magic_vars['result']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
					<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==0): ?>class="tr2"<? endif; ?>>
						<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?></td>
						<td class="main_td1" align="left"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
						<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?></td>
						<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['module_name'])) $this->magic_vars['item']['module_name'] = ''; echo $this->magic_vars['item']['module_name']; ?></td>
						<td class="main_td1" align="center" >
							<a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=site/<? if (!isset($this->magic_vars['item']['code'])) $this->magic_vars['item']['code'] = ''; echo $this->magic_vars['item']['code']; ?>&site_id=<? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?>">内容</a> 
							<a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=site/new&pid=<? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?>">添加</a> 
							<a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=site/edit&site_id=<? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?>" >修改</a> 
							<a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=site/move&site_id=<? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?>">移动</a> 
							<a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=site/del&site_id=<? if (!isset($this->magic_vars['item']['site_id'])) $this->magic_vars['item']['site_id'] = ''; echo $this->magic_vars['item']['site_id']; ?>'">删除</a>
						</td>
					</tr>
					<? endforeach; endif; unset($_from); ?>
	      </table>
		 
<? if (!isset($this->magic_vars['_A']['query_class'])) $this->magic_vars['_A']['query_class']=''; ;elseif (  $this->magic_vars['_A']['query_class']=="move"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%" >
	<tr >
		<td align="left" bgcolor="#FFFFFF" class="main_td">&nbsp;&nbsp;移动栏目</td>
	</tr>
<form action="" method="post" onsubmit="return submit_fool()">
<tr><td bgcolor="#FFFFFF" align="left" class="main_td1">
<input name="site_id" type="hidden" value="<? if (!isset($this->magic_vars['_A']['site_result']['site_id'])) $this->magic_vars['_A']['site_result']['site_id'] = ''; echo $this->magic_vars['_A']['site_result']['site_id']; ?>" />
<font color="#FF0000">移动栏目不会删除原来的数据。</font>
</td></tr>
<tr><td bgcolor="#FFFFFF" align="left" class="main_td1">
<div style="width:170px; overflow:hidden; float:left" align="left">移动的栏目：</div><? if (!isset($this->magic_vars['_A']['site_result']['name'])) $this->magic_vars['_A']['site_result']['name'] = ''; echo $this->magic_vars['_A']['site_result']['name']; ?>
<br />
<div style="width:170px; overflow:hidden; float:left"align="left">请选择要移动到的栏目下：</div><select name="pid">
<option value="0">根目录</option>
<? $this->magic_vars['varlgnore'] = array();$this->magic_vars['varsite_id'] = array(); if(!isset($this->magic_vars['_G']['site_list'])) $this->magic_vars['_G']['site_list']= array(); $_from = $this->magic_vars['_G']['site_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from,'array'); } if (count($_from)):
 $i=0;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
 if ($this->magic_vars['var']['pid']!=''  && $this->magic_vars['var']['pid']==0 ): $this->magic_vars['key'] =$i?>
<option value="<? if (!isset($this->magic_vars['var']['site_id'])) $this->magic_vars['var']['site_id'] = ''; echo $this->magic_vars['var']['site_id']; ?>" <? if (!isset($this->magic_vars['result']['pid'])) $this->magic_vars['result']['pid']='';if (!isset($this->magic_vars['var']['site_id'])) $this->magic_vars['var']['site_id']=''; ;if (  $this->magic_vars['result']['pid'] ==  $this->magic_vars['var']['site_id']): ?> selected="selected"<? endif; ?> >-<? if (!isset($this->magic_vars['var']['aname'])) $this->magic_vars['var']['aname'] = ''; echo $this->magic_vars['var']['aname']; ?></option>
<? $i++;endif;endforeach; endif;  unset($_from);unset($_magic_vars);unset($this->magic_vars['lgnore']); ?>
</select>
</td></tr>
	<tr>
		<td  bgcolor="#FFFFFF" >
		&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value=" 提 交 " class="submitstyle" name="submit_ok" />&nbsp;&nbsp;
		<input name="reset" type="reset" class="submitstyle" value=" 重 置 " />
		</td>
	</tr>
</table>
</form>
 <? endif; ?>
		
<? $this->magic_include(array('file' => "admin_foot.html", 'vars' => array()));?>

