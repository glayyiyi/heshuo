<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
<? $this->magic_include(array('file' => "admin_head.html.php", 'vars' => array()));?>

			 <table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
			  
				
			  <tr>
					<td colspan="2" bgcolor="#ffffff" class="main_td2" >
					<div class="main_title">ϵͳ������Ϣ</div>
					</td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">php�汾:</td>
					<td class="main_td1" align="left"><? if (!isset($this->magic_vars['_A']['php_info']['phpv'])) $this->magic_vars['_A']['php_info']['phpv'] = ''; echo $this->magic_vars['_A']['php_info']['phpv']; ?></td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">GD��汾:</td>
					<td class="main_td1" align="left"><? if (!isset($this->magic_vars['_A']['php_info']['sp_gd'])) $this->magic_vars['_A']['php_info']['sp_gd'] = ''; echo $this->magic_vars['_A']['php_info']['sp_gd']; ?></td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">�Ƿ�ȫģʽ:</td>
					<td class="main_td1" align="left"><? if (!isset($this->magic_vars['_A']['php_info']['sp_safe_mode'])) $this->magic_vars['_A']['php_info']['sp_safe_mode'] = ''; echo $this->magic_vars['_A']['php_info']['sp_safe_mode']; ?></td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">����������ϵͳ:</td>
					<td class="main_td1" align="left"><? if (!isset($this->magic_vars['_A']['php_info']['sp_os'])) $this->magic_vars['_A']['php_info']['sp_os'] = ''; echo $this->magic_vars['_A']['php_info']['sp_os']; ?></td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">������IP:</td>
					<td class="main_td1" align="left"><? if (!isset($this->magic_vars['_A']['php_info']['sp_host'])) $this->magic_vars['_A']['php_info']['sp_host'] = ''; echo $this->magic_vars['_A']['php_info']['sp_host']; ?></td>
				</tr>	
				<!--tr>
					<td colspan="2" bgcolor="#ffffff" class="main_td2" >
					<div class="main_title">ʹ�ð���</div>
					</td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">�ٷ���վ:</td>
					<td class="main_td1" align="left"><a href="http://www.xmdw.cn" target="_blank">www.xmdw.cn</a></td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">�ٷ���̳:</td>
					<td class="main_td1" align="left"><a href="http://bbs.xmdw.cn" target="_blank">bbs.xmdw.cn</a></td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">ϵͳ����:</td>
					<td class="main_td1" align="left"><a href="http://help.xmdw.cn" target="_blank">help.xmdw.cn</a></td>
				</tr-->
	      </table>
		
<? $this->magic_include(array('file' => "admin_foot.html", 'vars' => array()));?>