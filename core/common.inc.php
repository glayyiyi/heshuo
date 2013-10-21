<?php
/******************************
 * $File: common.inc.php
 * $Description: 通用的数据库文件
 * $Author: ahui 
 * $Time:2010-03-09
 * $Update:None 
 * $UpdateDate:None 
******************************/

if (!defined('ROOT_PATH'))  die('不能访问');//防止直接访问

$db_config['host']     = '127.0.0.1';      //数据库主机	
$db_config['user']     = 'root';      //数据库用户名	
$db_config['pwd']      = 'rootroot';  //数据库用户密码	
$db_config['name']     = 'heshuo';      //数据库名	
$db_config['port']     = '3306';      //端口		
$db_config['prefix']   = 'rd_'; //CMS表名前缀	
$db_config['language'] = 'gbk'; //数据库字符集 gbk,latin1,utf8,utf8..



?>
