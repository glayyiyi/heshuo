<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
<form name="f1" method="post">
<tr>
    <td class="main_td" align="center">参数</td>
	<td class="main_td"  align="center">值</td>
	<td class="main_td"  align="center">设置</td>
</tr>
  <?  if(!isset($this->magic_vars['result']) || $this->magic_vars['result']=='') $this->magic_vars['result'] = array();  $_from = $this->magic_vars['result']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?>class="tr2"<? endif; ?> >
    <td   class="main_td1" ><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?>:</td>
  <td align="left" class="main_td1" >
  <? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;if (  $this->magic_vars['item']['type']==0): ?>
    <input type="<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid']=''; ;if (  $this->magic_vars['item']['nid']=="con_email_pwd"): ?>password<? else: ?>text<? endif; ?>" value="<? if (!isset($this->magic_vars['item']['value'])) $this->magic_vars['item']['value'] = '';$_tmp = $this->magic_vars['item']['value'];$_tmp = $this->magic_modifier("br2nl",$_tmp,"");echo $_tmp;unset($_tmp); ?>" name="value[<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>]"/>
  <? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;elseif (  $this->magic_vars['item']['type']==2): ?>
  <textarea name="value[<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>]" cols="30" rows="4"><? if (!isset($this->magic_vars['item']['value'])) $this->magic_vars['item']['value'] = '';$_tmp = $this->magic_vars['item']['value'];$_tmp = $this->magic_modifier("br2nl",$_tmp,"");echo $_tmp;unset($_tmp); ?></textarea>
  <? if (!isset($this->magic_vars['item']['type'])) $this->magic_vars['item']['type']=''; ;elseif (  $this->magic_vars['item']['type']==3): ?>
  <input  name="value[<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>]" value="<? if (!isset($this->magic_vars['item']['value'])) $this->magic_vars['item']['value'] = '';$_tmp = $this->magic_vars['item']['value'];$_tmp = $this->magic_modifier("br2nl",$_tmp,"");echo $_tmp;unset($_tmp); ?>" size="15"> <INPUT onclick="uploadImg('value[<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>]');" type=button value=上传图片...>
  <? else: ?>
  <input type="radio" name="value[<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>]" value="1" <? if (!isset($this->magic_vars['item']['value'])) $this->magic_vars['item']['value']=''; ;if (  $this->magic_vars['item']['value']==1): ?> checked="checked"<? endif; ?> /> 是 <input type="radio" name="value[<? if (!isset($this->magic_vars['item']['nid'])) $this->magic_vars['item']['nid'] = ''; echo $this->magic_vars['item']['nid']; ?>]"  value="0"  <? if (!isset($this->magic_vars['item']['value'])) $this->magic_vars['item']['value']=''; ;if (  $this->magic_vars['item']['value']==0): ?> checked="checked"<? endif; ?>/> 否
  <? endif; ?>
  </td>
   <td class="main_td1" ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status'] ==1): ?><a href="<? if (!isset($this->magic_vars['url'])) $this->magic_vars['url'] = ''; echo $this->magic_vars['url']; ?>/edit&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">修改</a> / <a href=" <? if (!isset($this->magic_vars['url'])) $this->magic_vars['url'] = ''; echo $this->magic_vars['url']; ?>/del&id=<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>">删除</a><? else: ?> - <? endif; ?></td>
</tr>
<? endforeach; endif; unset($_from); ?>
<tr>
    <td class="submit" colspan="3"><input name="submit" type="submit" value="提 交" /></td>
</tr>
</table>
</form>