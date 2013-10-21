<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
<? $this->magic_include(array('file' => "admin_head.html.php", 'vars' => array()));?>

<!--模块列表 开始-->
<? if (!isset($this->magic_vars['_A']['query_class'])) $this->magic_vars['_A']['query_class']=''; ;if (  $this->magic_vars['_A']['query_class'] == "list"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr >
		<td width="" class="main_td">编号</td>
		<td width="*" class="main_td">名称</td>
		<th width="" class="main_td">描述</th>
		<th width="" class="main_td">版本</th>
		<th width="" class="main_td">作者</th>
		<th width="" class="main_td">更新时间</th>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['module_list']) || $this->magic_vars['_A']['module_list']=='') $this->magic_vars['_A']['module_list'] = array();  $_from = $this->magic_vars['_A']['module_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;if (  $this->magic_vars['item']['type']!='admin'): ?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?>class="tr2"<? endif; ?>>
		<td align="center"><? if (!isset($this->magic_vars['item']['code'])) $this->magic_vars['item']['code'] = ''; echo $this->magic_vars['item']['code']; ?></td>
		<td align="center"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
		<td align="center"><? if (!isset($this->magic_vars['item']['description'])) $this->magic_vars['item']['description'] = ''; echo $this->magic_vars['item']['description']; ?></td>
		<td align="center"><? if (!isset($this->magic_vars['item']['version'])) $this->magic_vars['item']['version'] = '';$_tmp = $this->magic_vars['item']['version'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
		<td align="center"><? if (!isset($this->magic_vars['item']['author'])) $this->magic_vars['item']['author'] = '';$_tmp = $this->magic_vars['item']['author'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
		<td align="center"><? if (!isset($this->magic_vars['item']['date'])) $this->magic_vars['item']['date'] = '';$_tmp = $this->magic_vars['item']['date'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
		
	</tr>
	<? endif; ?>
	<? endforeach; endif; unset($_from); ?>	
</table>
<!--模块列表 结束-->	

<!--模块管理 开始-->	
<? if (!isset($this->magic_vars['_A']['query_class'])) $this->magic_vars['_A']['query_class']=''; ;elseif (  $this->magic_vars['_A']['query_class']=="channel"): ?>

	<!--已安装模块列表 开始-->
	<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type']== "install"): ?>
	<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
		<tr >
			<td width="" class="main_td">编号</td>
			<td width="*" class="main_td">名称</td>
			<th width="" class="main_td">描述</th>
			<th width="" class="main_td">版本</th>
			<th width="" class="main_td">排序</th>
			<td width="" class="main_td">操作</td>
		</tr>
		<form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/order" method="post">
		<?  if(!isset($this->magic_vars['_A']['module_list']) || $this->magic_vars['_A']['module_list']=='') $this->magic_vars['_A']['module_list'] = array();  $_from = $this->magic_vars['_A']['module_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;if (  $this->magic_vars['item']['type']!='admin'): ?>
		<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?>class="tr2"<? endif; ?>>
			<td align="center"><? if (!isset($this->magic_vars['item']['code'])) $this->magic_vars['item']['code'] = ''; echo $this->magic_vars['item']['code']; ?></td>
			<td align="center"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
			<td align="center"><? if (!isset($this->magic_vars['item']['description'])) $this->magic_vars['item']['description'] = ''; echo $this->magic_vars['item']['description']; ?></td>
			<td align="center"><? if (!isset($this->magic_vars['item']['version'])) $this->magic_vars['item']['version'] = '';$_tmp = $this->magic_vars['item']['version'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
			<td align="center"><input name="order[]" type="text" value="<? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']; ?>" size="6"  /><input name="module_id[]" type="hidden" value="<? if (!isset($this->magic_vars['item']['module_id'])) $this->magic_vars['item']['module_id'] = ''; echo $this->magic_vars['item']['module_id']; ?>" size="6"  /></td>
			<td align="center" ><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/fields&code=<? if (!isset($this->magic_vars['item']['code'])) $this->magic_vars['item']['code'] = ''; echo $this->magic_vars['item']['code']; ?>">字段</a> | <a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/channel/purview&code=<? if (!isset($this->magic_vars['item']['code'])) $this->magic_vars['item']['code'] = ''; echo $this->magic_vars['item']['code']; ?>&id=<? if (!isset($this->magic_vars['item']['module_id'])) $this->magic_vars['item']['module_id'] = ''; echo $this->magic_vars['item']['module_id']; ?>">权限</a> | <a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/edit&code=<? if (!isset($this->magic_vars['item']['code'])) $this->magic_vars['item']['code'] = ''; echo $this->magic_vars['item']['code']; ?>">编辑</a> |  <a href="#" onClick="javascript:if(confirm('请确定是否要卸载此模块，此模块卸载后所有的数据都将清空，请慎重处理')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/del&code=<? if (!isset($this->magic_vars['item']['code'])) $this->magic_vars['item']['code'] = ''; echo $this->magic_vars['item']['code']; ?>'">卸载</a> | <a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/<? if (!isset($this->magic_vars['item']['code'])) $this->magic_vars['item']['code'] = ''; echo $this->magic_vars['item']['code']; ?>">内容管理</a></td>
		</tr>
		<? endif; ?>
		<? endforeach; endif; unset($_from); ?>
		<tr>
			<td colspan="6" class="submit" ><input type="submit" value="修改排序" />
				<input value="添加新模块" type="button" onclick="javascript:location='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/new';" /> </div>	
			</td>
		</tr>
		</form>
	</table>
	<!--已安装模块列表 结束-->
	
	<!--未安装模块列表 开始-->
	<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']== "unstall"): ?>
	<table width="100%" border="0" cellpadding="5" cellspacing="1" >
	<tr>
		<td class="main_td">识别ID</td>
		<td width="*" class="main_td">模块名称</td>
		<td width="*" class="main_td">模块简介</td>
		<td width="*" class="main_td">版本号</td>
		<td class="main_td">类型</td>
		<th class="main_td">状态</th>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['module_list']) || $this->magic_vars['_A']['module_list']=='') $this->magic_vars['_A']['module_list'] = array();  $_from = $this->magic_vars['_A']['module_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?>class="tr2"<? endif; ?>>
		<td  ><? if (!isset($this->magic_vars['item']['code'])) $this->magic_vars['item']['code'] = ''; echo $this->magic_vars['item']['code']; ?></td>
		<td ><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
		<td ><? if (!isset($this->magic_vars['item']['description'])) $this->magic_vars['item']['description'] = ''; echo $this->magic_vars['item']['description']; ?></td>
		<td ><? if (!isset($this->magic_vars['item']['version'])) $this->magic_vars['item']['version'] = ''; echo $this->magic_vars['item']['version']; ?></td>
		<td  ><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type'] = ''; echo $this->magic_vars['item']['type']; ?></td>
		<td  ><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/channel/new&code=<? if (!isset($this->magic_vars['item']['code'])) $this->magic_vars['item']['code'] = ''; echo $this->magic_vars['item']['code']; ?>">安装</a></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	</table>
	<!--未安装模块列表 结束-->
	
	<!--模块编辑 开始-->
	<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']== "edit" ||  $this->magic_vars['_A']['query_type']== "new"): ?>
	<div class="module_add">
		<form action="" method="post" name="form1" onsubmit="return check_form();" >
		<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?>编辑<? else: ?>添加<? endif; ?>模块</strong></div>
		
		<div class="module_border">
			<div class="l">模块名称：</div>
			<div class="c">
				<input type="text" class="input_border" align="absmiddle" name="name" value="<? if (!isset($this->magic_vars['_A']['module_result']['name'])) $this->magic_vars['_A']['module_result']['name'] = ''; echo $this->magic_vars['_A']['module_result']['name']; ?>" />
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">识别ID（code）：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['module_result']['code'])) $this->magic_vars['_A']['module_result']['code']=''; ;if (  $this->magic_vars['_A']['query_type']=="edit" || ( $this->magic_vars['_A']['query_type']=="new" &&  $this->magic_vars['_A']['module_result']['code']!="")): ?><? if (!isset($this->magic_vars['_A']['module_result']['code'])) $this->magic_vars['_A']['module_result']['code'] = ''; echo $this->magic_vars['_A']['module_result']['code']; ?><input type="hidden" name="code" value="<? if (!isset($this->magic_vars['_A']['module_result']['code'])) $this->magic_vars['_A']['module_result']['code'] = ''; echo $this->magic_vars['_A']['module_result']['code']; ?>" /><? else: ?>
				<input type="text" align="absmiddle" name="code" value="" class="input_border" onkeyup="value=value.replace(/[^a-z_]/g,'')" /><? endif; ?>
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">类型：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_A']['module_result']['type'])) $this->magic_vars['_A']['module_result']['type'] = '';$_tmp = $this->magic_vars['_A']['module_result']['type'];$_tmp = $this->magic_modifier("default",$_tmp,"cms");echo $_tmp;unset($_tmp); ?><input type="hidden" name="type" value="<? if (!isset($this->magic_vars['_A']['module_result']['type'])) $this->magic_vars['_A']['module_result']['type'] = '';$_tmp = $this->magic_vars['_A']['module_result']['type'];$_tmp = $this->magic_modifier("default",$_tmp,"cms");echo $_tmp;unset($_tmp); ?>" />
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">排序：</div>
			<div class="c">
				<input type="text" class="input_border" align="absmiddle" name="order" value="<? if (!isset($this->magic_vars['_A']['module_result']['order'])) $this->magic_vars['_A']['module_result']['order'] = '';$_tmp = $this->magic_vars['_A']['module_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" size="4"/>
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">状态：</div>
			<div class="c">
				<select name="status" class="input_border">
				<option value="1" <? if (!isset($this->magic_vars['_A']['module_result']['status'])) $this->magic_vars['_A']['module_result']['status']='';if (!isset($this->magic_vars['_A']['module_result']['status'])) $this->magic_vars['_A']['module_result']['status']=''; ;if (  $this->magic_vars['_A']['module_result']['status']=='1' ||  $this->magic_vars['_A']['module_result']['status']==""): ?> selected="selected"<? endif; ?>>开启</option>
				<option value="0"  <? if (!isset($this->magic_vars['_A']['module_result']['status'])) $this->magic_vars['_A']['module_result']['status']=''; ;if (  $this->magic_vars['_A']['module_result']['status']=='0'): ?> selected="selected"<? endif; ?>>关闭</option>
			  </select>
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">模板可选项：</div>
			<div class="c">
				<label><input type="checkbox" name="default_field[]" value="title" checked="checked" disabled="disabled"/>标题</label> <? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "new"): ?><? if (!isset($this->magic_vars['_A']['article_fields'])) $this->magic_vars['_A']['article_fields'] = array();
 $_from =$this->magic_vars['_A']['article_fields'];
 $checked=array("all");$kname="";
 if (!is_array($checked)) $checked = explode(',',$checked);
 foreach ($_from as $key => $value):echo "<input type=checkbox value='$key' name='default_field[]' ";  echo ' checked '; echo " >$value "; endforeach; ?><? else: ?><? if (!isset($this->magic_vars['_A']['article_fields'])) $this->magic_vars['_A']['article_fields'] = array();
 $_from =$this->magic_vars['_A']['article_fields'];
 $checked=isset($this->magic_vars['_A']['module_result']['default_field'])?$this->magic_vars['_A']['module_result']['default_field']:'';$kname="";
 if (!is_array($checked)) $checked = explode(',',$checked);
 foreach ($_from as $key => $value):echo "<input type=checkbox value='$key' name='default_field[]' "; if(isset($checked) && isset($checked) && in_array($key,$checked)){ echo ' checked '; };echo " >$value "; endforeach; ?><? endif; ?>
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">标题名称：</div>
			<div class="c">
				<input type="text" align="absmiddle" name="title_name" value="<? if (!isset($this->magic_vars['_A']['module_result']['title_name'])) $this->magic_vars['_A']['module_result']['title_name'] = '';$_tmp = $this->magic_vars['_A']['module_result']['title_name'];$_tmp = $this->magic_modifier("default",$_tmp,"标题");echo $_tmp;unset($_tmp); ?>" class="input_border"  />
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">启用自定义字段：</div>
			<div class="c">
				<input type="radio" name="fields" value="1" <? if (!isset($this->magic_vars['_A']['module_result']['fields'])) $this->magic_vars['_A']['module_result']['fields']=''; ;if (   $this->magic_vars['_A']['module_result']['fields']==1): ?> checked="checked"<? endif; ?>/> 是 <input type="radio" name="fields" value="0" <? if (!isset($this->magic_vars['_A']['module_result']['fields'])) $this->magic_vars['_A']['module_result']['fields']='';if (!isset($this->magic_vars['_A']['module_result']['fields'])) $this->magic_vars['_A']['module_result']['fields']=''; ;if (  $this->magic_vars['_A']['module_result']['fields']==0 ||  $this->magic_vars['_A']['module_result']['fields']==""): ?> checked="checked"<? endif; ?> /> 否
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">是否支持会员投稿：</div>
			<div class="c">
				<input type="radio" name="issent" value="1" <? if (!isset($this->magic_vars['_A']['module_result']['issent'])) $this->magic_vars['_A']['module_result']['issent']=''; ;if (   $this->magic_vars['_A']['module_result']['issent']==1): ?> checked="checked"<? endif; ?>/> 是 <input type="radio" name="issent" value="0" <? if (!isset($this->magic_vars['_A']['module_result']['issent'])) $this->magic_vars['_A']['module_result']['issent']='';if (!isset($this->magic_vars['_A']['module_result']['issent'])) $this->magic_vars['_A']['module_result']['issent']=''; ;if (  $this->magic_vars['_A']['module_result']['issent']==0 ||  $this->magic_vars['_A']['module_result']['issent']==""): ?> checked="checked"<? endif; ?> /> 否
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">投稿是否唯一：</div>
			<div class="c">
				<input type="radio" name="onlyone" value="1" <? if (!isset($this->magic_vars['_A']['module_result']['onlyone'])) $this->magic_vars['_A']['module_result']['onlyone']=''; ;if (  $this->magic_vars['_A']['module_result']['onlyone']==1): ?> checked="checked"<? endif; ?>/> 是 <input type="radio" name="onlyone" value="0" <? if (!isset($this->magic_vars['_A']['module_result']['onlyone'])) $this->magic_vars['_A']['module_result']['onlyone']='';if (!isset($this->magic_vars['_A']['module_result']['onlyone'])) $this->magic_vars['_A']['module_result']['onlyone']=''; ;if (  $this->magic_vars['_A']['module_result']['onlyone']==0 ||  $this->magic_vars['_A']['module_result']['onlyone']==""): ?> checked="checked"<? endif; ?> /> 否
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">投稿文章类型：</div>
			<div class="c">
				<input type="radio" name="article_status" value="1" <? if (!isset($this->magic_vars['_A']['module_result']['article_status'])) $this->magic_vars['_A']['module_result']['article_status']=''; ;if (  $this->magic_vars['_A']['module_result']['article_status']==1): ?> checked="checked"<? endif; ?>/> 已审核 <input type="radio" name="article_status" value="0" <? if (!isset($this->magic_vars['_A']['module_result']['article_status'])) $this->magic_vars['_A']['module_result']['article_status']='';if (!isset($this->magic_vars['_A']['module_result']['article_status'])) $this->magic_vars['_A']['module_result']['article_status']=''; ;if (  $this->magic_vars['_A']['module_result']['article_status']==0 ||  $this->magic_vars['_A']['module_result']['article_status']==""): ?> checked="checked"<? endif; ?> /> 未审核
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">默认访问类型：</div>
			<div class="c">
				 <input type="radio" name="visit_type" value="0" <? if (!isset($this->magic_vars['_A']['module_result']['visit_type'])) $this->magic_vars['_A']['module_result']['visit_type']='';if (!isset($this->magic_vars['_A']['module_result']['visit_type'])) $this->magic_vars['_A']['module_result']['visit_type']=''; ;if (  $this->magic_vars['_A']['module_result']['visit_type']==0 ||  $this->magic_vars['_A']['module_result']['visit_type']==""): ?> checked="checked"<? endif; ?>  title="如：?3/1"/> 动态访问 <input type="radio" name="visit_type" value="1" <? if (!isset($this->magic_vars['_A']['module_result']['visit_type'])) $this->magic_vars['_A']['module_result']['visit_type']=''; ;if (  $this->magic_vars['_A']['module_result']['visit_type']==1): ?> checked="checked"<? endif; ?> title="如：?article/dongtai/1.html"/> 伪静态 <input type="radio" name="visit_type" value="2" <? if (!isset($this->magic_vars['_A']['module_result']['visit_type'])) $this->magic_vars['_A']['module_result']['visit_type']=''; ;if (  $this->magic_vars['_A']['module_result']['visit_type']==2): ?> checked="checked"<? endif; ?>/ title="如：/article/dongtai/1.html"> 生成html
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">默认封面模板：</div>
			<div class="c">
				<input type="text" align="absmiddle" name="index_tpl" value="<? if (!isset($this->magic_vars['_A']['module_result']['index_tpl'])) $this->magic_vars['_A']['module_result']['index_tpl'] = '';$_tmp = $this->magic_vars['_A']['module_result']['index_tpl'];$_tmp = $this->magic_modifier("default",$_tmp,"[code].html");echo $_tmp;unset($_tmp); ?>" class="input_border"  />[code]表示此模块的识别id，以下类推
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">默认列表模板：</div>
			<div class="c">
				<input type="text" align="absmiddle" name="list_tpl" value="<? if (!isset($this->magic_vars['_A']['module_result']['list_tpl'])) $this->magic_vars['_A']['module_result']['list_tpl'] = '';$_tmp = $this->magic_vars['_A']['module_result']['list_tpl'];$_tmp = $this->magic_modifier("default",$_tmp,"[code]_list.html");echo $_tmp;unset($_tmp); ?>" class="input_border"  />
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">默认内容模板：</div>
			<div class="c">
				<input type="text" align="absmiddle" name="content_tpl" value="<? if (!isset($this->magic_vars['_A']['module_result']['content_tpl'])) $this->magic_vars['_A']['module_result']['content_tpl'] = '';$_tmp = $this->magic_vars['_A']['module_result']['content_tpl'];$_tmp = $this->magic_modifier("default",$_tmp,"[code]_content.html");echo $_tmp;unset($_tmp); ?>" class="input_border"  />
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">搜索模板：</div>
			<div class="c">
				<input type="text" align="absmiddle" name="search_tpl" value="<? if (!isset($this->magic_vars['_A']['module_result']['search_tpl'])) $this->magic_vars['_A']['module_result']['search_tpl'] = '';$_tmp = $this->magic_vars['_A']['module_result']['search_tpl'];$_tmp = $this->magic_modifier("default",$_tmp,"[code]_search.html");echo $_tmp;unset($_tmp); ?>" class="input_border"  />
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">简介：</div>
			<div class="c">
				<input type="text" align="absmiddle" name="description" value="<? if (!isset($this->magic_vars['_A']['module_result']['description'])) $this->magic_vars['_A']['module_result']['description'] = ''; echo $this->magic_vars['_A']['module_result']['description']; ?>" class="input_border"  />
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">版本：</div>
			<div class="c">
				<input type="text" align="absmiddle" name="version" value="<? if (!isset($this->magic_vars['_A']['module_result']['version'])) $this->magic_vars['_A']['module_result']['version'] = '';$_tmp = $this->magic_vars['_A']['module_result']['version'];$_tmp = $this->magic_modifier("default",$_tmp,"1.0");echo $_tmp;unset($_tmp); ?>" class="input_border"  />
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">作者：</div>
			<div class="c">
				<input type="text" align="absmiddle" name="author" value="<? if (!isset($this->magic_vars['_A']['module_result']['author'])) $this->magic_vars['_A']['module_result']['author'] = '';$_tmp = $this->magic_vars['_A']['module_result']['author'];$_tmp = $this->magic_modifier("default",$_tmp,"hycms");echo $_tmp;unset($_tmp); ?>" class="input_border"  />
			</div>
		</div>
		
		<div class="module_submit border_b" >
			<input type="submit" value=" 提 交 " class="submitstyle" name="submit_ok" />&nbsp;&nbsp;
			<input name="reset" type="reset" class="submitstyle" value=" 重 置 " />
		</div>
		</form>
	</div>
	
	<script>
	function check_form(){
		 var frm = document.forms['form1'];
		 var title = frm.elements['name'].value;
		 var code = frm.elements['code'].value;
		 var errorMsg = '';
		  if (title.length == 0 ) {
			errorMsg += '模块名称必须填写' + '\n';
		  }
		  if (code.length == 0 ) {
			errorMsg += '识别id必须填写' + '\n';
		  }
		  if (errorMsg.length > 0){
			alert(errorMsg); return false;
		  } else{  
			return true;
		  }
	}
	</script>
	
	<!--模块编辑 结束-->
	
	<!--所有模块列表 开始-->
	<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']== "list"): ?>
	<table width="100%" border="0" cellpadding="5" cellspacing="1" >
		<tr>
		  <td width="11%" class="main_td">识别ID</td>
		  <td width="*" class="main_td">模块名称</td>
		  <td width="*" class="main_td">模块简介</td>
		  <td width="*" class="main_td">版本号</td>
		  <td width="18%" class="main_td">类型</td>
		  <th width="22%" class="main_td">状态</th>
		</tr>
		<?  if(!isset($this->magic_vars['_A']['module_list']) || $this->magic_vars['_A']['module_list']=='') $this->magic_vars['_A']['module_list'] = array();  $_from = $this->magic_vars['_A']['module_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?>class="tr2"<? endif; ?>>
		  <td  ><? if (!isset($this->magic_vars['item']['code'])) $this->magic_vars['item']['code'] = ''; echo $this->magic_vars['item']['code']; ?></td>
		  <td ><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
		  <td ><? if (!isset($this->magic_vars['item']['description'])) $this->magic_vars['item']['description'] = ''; echo $this->magic_vars['item']['description']; ?></td>
		  <td ><? if (!isset($this->magic_vars['item']['version'])) $this->magic_vars['item']['version'] = ''; echo $this->magic_vars['item']['version']; ?></td>
		  <td  ><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type'] = ''; echo $this->magic_vars['item']['type']; ?></td>
		  <td  ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status'] == 1): ?><font color="#009900">已安装</font><? else: ?><font color="#FF0000">未安装</font><? endif; ?></td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
	</table>
	<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']== "purview"): ?>
	<div class="module_border">
		<div class="l">code：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['code'])) $this->magic_vars['code'] = ''; echo $this->magic_vars['code']; ?>
		</div>
	</div>
	<div class="module_border">
		<div class="l"><strong>权限识别码</strong></div>
		<div class="c">
			<strong>权限名</strong>
		</div>
	</div>
	<?  if(!isset($this->magic_vars['purviewlist']) || $this->magic_vars['purviewlist']=='') $this->magic_vars['purviewlist'] = array();  $_from = $this->magic_vars['purviewlist']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<div class="module_border">
		<div class="l"><? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['item'])) $this->magic_vars['item'] = ''; echo $this->magic_vars['item']; ?><a href="javascript:if(confirm('您确认要删除么?')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/delpurview&code=<? if (!isset($_REQUEST['code'])) $_REQUEST['code'] = ''; echo $_REQUEST['code']; ?>&module_id=<? if (!isset($this->magic_vars['module_id'])) $this->magic_vars['module_id'] = ''; echo $this->magic_vars['module_id']; ?>&purviewcode=<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>'" style="margin-left:50px">删除</a>
		</div>
	</div>
	<? endforeach; endif; unset($_from); ?>
	<form method="post" action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/newpurview&code=<? if (!isset($_REQUEST['code'])) $_REQUEST['code'] = ''; echo $_REQUEST['code']; ?>">
	<div class="module_border" style="text-align:center">
		<input type="hidden" value="<? if (!isset($this->magic_vars['module_id'])) $this->magic_vars['module_id'] = ''; echo $this->magic_vars['module_id']; ?>" name="module_id" />
		<input type="submit" value="添加权限项">
	</div>
	</form>
	<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']=="newpurview"): ?>
	<form name="form1" method="post" action="">
	<div class="module_border">
		<div class="l">权限识别码：</div>
		<div class="c">
			<input type="text" name="purviewcode" /><font style="color:red">*</font>
		</div>
	</div>
	<div class="module_border">
		<div class="l">权限名：</div>
		<div class="c">
			<input type="text" name="purviewname" /><font style="color:red">*</font>
		</div>
	</div>
	<div class="module_border" style="text-align:center">
		<input type="hidden" value="<? if (!isset($this->magic_vars['module_id'])) $this->magic_vars['module_id'] = ''; echo $this->magic_vars['module_id']; ?>" name="module_id" />
		<input type="button" value="确认添加" name="sub" onclick="form_sub()" />
	</div>
	</form>
	
	<script type="text/javascript">
	function form_sub(){
		var form = document.forms['form1'];
		var purviewcode = form.elements['purviewcode'].value;
		var purviewname = form.elements['purviewname'].value;
		if(purviewcode==""){
			alert('权限识别码不能为空');
			return;
		}
		if(purviewname==""){
			alert('权限名不能为空');
			return;
		}
		form.elements['sub'].disabled=true;
		form.submit();
	}
	</script>
	
	<!--所有模块列表 结束-->
	<? endif; ?>
<!--模块管理 结束-->


<!--字段管理 开始-->
<? if (!isset($this->magic_vars['_A']['query_class'])) $this->magic_vars['_A']['query_class']=''; ;elseif (  $this->magic_vars['_A']['query_class']=="fields"): ?>

	<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type']== "list"): ?>
	<!--字段列表 开始-->
	<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
		<tr class="tr">
		  <td class="main_td">字段名称</td>
		  <td class="main_td">标识名</td>
		  <td class="main_td">字段类型</td>
		  <td class="main_td">长度</td>
		  <td class="main_td">数据类型</td>
		  <td class="main_td">排序</td>
		  <th class="main_td">操作</th>
		</tr>
		<form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/order" method="post">
		<?  if(!isset($this->magic_vars['_A']['fields_list']) || $this->magic_vars['_A']['fields_list']=='') $this->magic_vars['_A']['fields_list'] = array();  $_from = $this->magic_vars['_A']['fields_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
		<tr  <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
			<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
			<td class="main_td1"align="center"><? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?></td>
			<td  class="main_td1"><? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type'] = ''; echo $this->magic_vars['item']['type']; ?></td>
			<td  class="main_td1"><? if (!isset($this->magic_vars['item']['size'])) $this->magic_vars['item']['size'] = '';$_tmp = $this->magic_vars['item']['size'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></td>
			<td class="main_td1"><? if (!isset($this->magic_vars['item']['input'])) $this->magic_vars['item']['input'] = ''; echo $this->magic_vars['item']['input']; ?></td>
			<td class="main_td1"><input name="order[]" type="text" value="<? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']; ?>" size="6"  />
			<input name="fields_id[]" type="hidden" value="<? if (!isset($this->magic_vars['item']['fields_id'])) $this->magic_vars['item']['fields_id'] = ''; echo $this->magic_vars['item']['fields_id']; ?>"  /></td>
			<td class="main_td1"> <a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/edit&code=<? if (!isset($this->magic_vars['item']['code'])) $this->magic_vars['item']['code'] = ''; echo $this->magic_vars['item']['code']; ?>&fields_id=<? if (!isset($this->magic_vars['item']['fields_id'])) $this->magic_vars['item']['fields_id'] = ''; echo $this->magic_vars['item']['fields_id']; ?>">修改</a> | <a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/del&code=<? if (!isset($this->magic_vars['item']['code'])) $this->magic_vars['item']['code'] = ''; echo $this->magic_vars['item']['code']; ?>&fields_id=<? if (!isset($this->magic_vars['item']['fields_id'])) $this->magic_vars['item']['fields_id'] = ''; echo $this->magic_vars['item']['fields_id']; ?>'">删除</a> </td>
		</tr>
		<? endforeach; endif; unset($_from); ?>
		<tr >
			<td  colspan="7" class="submit" >
			<input type="submit" value="修改排序" />&nbsp;&nbsp;&nbsp;&nbsp;
			<input value="添加新字段" type="button" onclick="javascript:location='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/new&code=<? if (!isset($_REQUEST['code'])) $_REQUEST['code'] = ''; echo $_REQUEST['code']; ?>';" /> 
			</td>
		</tr>
		</form>
	</table>
	<!--字段列表 结束-->
	
	<!--添加字段 开始-->
	<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type']== "new" ||  $this->magic_vars['_A']['query_type']== "edit"): ?>
	<div class="module_add">
	<form action="" method="post" name="form1"  onsubmit="return check_form()">
	
		<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?>编辑<? else: ?>添加<? endif; ?>字段</strong></div>
		
		<div class="module_border">
			<div class="l">字段名称：</div>
			<div class="c">
				<input type="text" class="input_border" align="absmiddle" name="name" value="<? if (!isset($this->magic_vars['_A']['fields_result']['name'])) $this->magic_vars['_A']['fields_result']['name'] = ''; echo $this->magic_vars['_A']['fields_result']['name']; ?>" />
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">标示名：</div>
			<div class="c">
				<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type']=='new'): ?>
			  <input type="text" align="absmiddle" name="nid" class="input_border"  onkeyup="value=value.replace(/[^a-z_]/g,'')"/>只能为字母或下划线<? else: ?><? if (!isset($this->magic_vars['_A']['fields_result']['nid'])) $this->magic_vars['_A']['fields_result']['nid'] = ''; echo $this->magic_vars['_A']['fields_result']['nid']; ?><input type="hidden" align="absmiddle" name="nid" value="<? if (!isset($this->magic_vars['_A']['fields_result']['nid'])) $this->magic_vars['_A']['fields_result']['nid'] = ''; echo $this->magic_vars['_A']['fields_result']['nid']; ?>"    /><? endif; ?>
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">排序：</div>
			<div class="c">
				<input type="text" align="absmiddle" name="order" value="<? if (!isset($this->magic_vars['_A']['fields_result']['order'])) $this->magic_vars['_A']['fields_result']['order'] = '';$_tmp = $this->magic_vars['_A']['fields_result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>"  />	 
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">数据类型：</div>
			<div class="c">
				<select name="input">
<? if (!isset($this->magic_vars['_A']['fields_input'])) $this->magic_vars['_A']['fields_input'] = array(); $_from =$this->magic_vars['_A']['fields_input'];$_selected='';  foreach ($_from as $key => $value):echo "<option value='$key'"; if(isset($this->magic_vars['_A']['fields_result']['input']) && $key == $this->magic_vars['_A']['fields_result']['input']){ echo ' selected '; };echo " >$value</option>"; endforeach; ?></select>

			</div>
		</div>
		
		<div class="module_border">
			<div class="l">字段类型：</div>
			<div class="c">
				<select name="type">
<? if (!isset($this->magic_vars['_A']['fields_type'])) $this->magic_vars['_A']['fields_type'] = array(); $_from =$this->magic_vars['_A']['fields_type'];$_selected='';  foreach ($_from as $key => $value):echo "<option value='$key'"; if(isset($this->magic_vars['_A']['fields_result']['type']) && $key == $this->magic_vars['_A']['fields_result']['type']){ echo ' selected '; };echo " >$value</option>"; endforeach; ?></select>

			</div>
		</div>
	   
		<div class="module_border">
			<div class="l">默认值：</div>
			<div class="c">
				<input name="default" id="default" type="text" value="<? if (!isset($this->magic_vars['_A']['fields_result']['default'])) $this->magic_vars['_A']['fields_result']['default'] = ''; echo $this->magic_vars['_A']['fields_result']['default']; ?>"/>
			</div>
		</div>
		 <div class="module_border">
			<div class="l">字段可选：</div>
			<div class="c">
				<input name="select" type="text"  value="<? if (!isset($this->magic_vars['_A']['fields_result']['select'])) $this->magic_vars['_A']['fields_result']['select'] = ''; echo $this->magic_vars['_A']['fields_result']['select']; ?>"/> 多个可选值请用,号隔开
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">字段描述：</div>
			<div class="c">
				<textarea name="description" cols="50" rows="7" ><? if (!isset($this->magic_vars['_A']['fields_result']['description'])) $this->magic_vars['_A']['fields_result']['description'] = ''; echo $this->magic_vars['_A']['fields_result']['description']; ?></textarea>
			</div>
		</div>
		
		<div class="module_submit">
			<input name="code" type="hidden" value="<? if (!isset($_REQUEST['code'])) $_REQUEST['code'] = ''; echo $_REQUEST['code']; ?>"  />
			<input name="fields_id" type="hidden" value="<? if (!isset($_REQUEST['fields_id'])) $_REQUEST['fields_id'] = ''; echo $_REQUEST['fields_id']; ?>"  />
			<input type="submit" value=" 提 交 " class="submitstyle" name="submit_ok" />
			<input name="reset" type="reset" class="submitstyle" value=" 重 置 " /></td>
		</div>
		</form>
	</div>
	
	
	<script>
	function check_form(){
		 var frm = document.forms['form1'];
		 var title = frm.elements['name'].value;
		 var nid = frm.elements['nid'].value;
		 var input = frm.elements['input'].value;
		 var selecte = frm.elements['select'].value;
		 var errorMsg = '';
		  if (title.length == 0 ) {
			errorMsg += '字段名称必须填写' + '\n';
		  }
		   if (nid.length == 0 ) {
			errorMsg += '标示名必须填写' + '\n';
		  }
		   if ((input == "select" || input == "checkbox" || input == "radio") && selecte=="") {
			errorMsg += '你选择的数据类型必须要填写字段的可选值，用英文的","隔开' + '\n';
		  }
		  if (errorMsg.length > 0){
			alert(errorMsg); return false;
		  } else{  
			return true;
		  }
	
	}
	
	</script>
	
	<!--添加字段 结束-->
	<? endif; ?>
<!--字段管理 结束-->


<? if (!isset($this->magic_vars['_A']['query_class'])) $this->magic_vars['_A']['query_class']=''; ;elseif (  $this->magic_vars['_A']['query_class']=="update"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">

<form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/<? if (!isset($this->magic_vars['result']['type'])) $this->magic_vars['result']['type'] = ''; echo $this->magic_vars['result']['type']; ?>&code=<? if (!isset($_REQUEST['code'])) $_REQUEST['code'] = ''; echo $_REQUEST['code']; ?>" method="post" name="form1" >

	<tr>
		<td align="right"  width="15%">模块名称：</td>
		<td align="left"  ><? if (!isset($this->magic_vars['result']['name'])) $this->magic_vars['result']['name'] = ''; echo $this->magic_vars['result']['name']; ?>
	  </td>
	</tr>
<tr>
		<td align="right"  width="15%">模块标识：</td>
		<td align="left"  ><? if (!isset($this->magic_vars['result']['code'])) $this->magic_vars['result']['code'] = ''; echo $this->magic_vars['result']['code']; ?>
	  </td>
	</tr>
	<tr>
		<td align="right"  width="15%">更新介绍：</td>
		<td align="left"  ><? if (!isset($this->magic_vars['result']['description'])) $this->magic_vars['result']['description'] = ''; echo $this->magic_vars['result']['description']; ?>
	  </td>
	</tr>
	<tr>
		<td align="right"  width="15%">更新版本：</td>
		<td align="left"  ><? if (!isset($this->magic_vars['result']['version'])) $this->magic_vars['result']['version'] = ''; echo $this->magic_vars['result']['version']; ?>
	  </td>
	</tr>
	<tr>
		<td align="right"  width="15%">类型：</td>
		<td align="left"  ><? if (!isset($this->magic_vars['result']['type'])) $this->magic_vars['result']['type'] = ''; echo $this->magic_vars['result']['type']; ?>
	  </td>
	</tr>
	<tr>
		<td align="right"  width="15%">更新时间：</td>
		<td align="left"  ><? if (!isset($this->magic_vars['result']['date'])) $this->magic_vars['result']['date'] = ''; echo $this->magic_vars['result']['date']; ?>
	  </td>
	</tr>
	<tr  >
		<td    colspan="2">
		<input type="hidden" name="list_code" value="<? if (!isset($this->magic_vars['result']['code'])) $this->magic_vars['result']['code'] = ''; echo $this->magic_vars['result']['code']; ?>" />
		&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value=" 确认更新 "  name="submit_ok" />
		</td>
	</tr>
</table>
</form>
<? else: ?>
	<? if (!isset($this->magic_vars['module_tpl'])) $this->magic_vars['module_tpl']='';if (!isset($this->magic_vars['template_dir'])) $this->magic_vars['template_dir']=''; ; $_from = $this->magic_vars['module_tpl'];  $this->magic_include(array('file' => $_from, 'vars' => array('template_dir' => $this->magic_vars['template_dir']))); unset($_from);?>
<? endif; ?>


<? $this->magic_include(array('file' => "admin_foot.html", 'vars' => array()));?>

