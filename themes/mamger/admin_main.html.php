<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{include file="admin_head.html.php"}

			 <table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
			  
				
			  <tr>
					<td colspan="2" bgcolor="#ffffff" class="main_td2" >
					<div class="main_title">系统基本信息</div>
					</td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">php版本:</td>
					<td class="main_td1" align="left">{$_A.php_info.phpv}</td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">GD库版本:</td>
					<td class="main_td1" align="left">{$_A.php_info.sp_gd}</td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">是否安全模式:</td>
					<td class="main_td1" align="left">{$_A.php_info.sp_safe_mode}</td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">服务器操作系统:</td>
					<td class="main_td1" align="left">{$_A.php_info.sp_os}</td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">服务器IP:</td>
					<td class="main_td1" align="left">{ $_A.php_info.sp_host}</td>
				</tr>	
				<!--tr>
					<td colspan="2" bgcolor="#ffffff" class="main_td2" >
					<div class="main_title">使用帮助</div>
					</td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">官方网站:</td>
					<td class="main_td1" align="left"><a href="http://www.xmdw.cn" target="_blank">www.xmdw.cn</a></td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">官方论坛:</td>
					<td class="main_td1" align="left"><a href="http://bbs.xmdw.cn" target="_blank">bbs.xmdw.cn</a></td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">系统帮助:</td>
					<td class="main_td1" align="left"><a href="http://help.xmdw.cn" target="_blank">help.xmdw.cn</a></td>
				</tr-->
	      </table>
		
{include file="admin_foot.html"}