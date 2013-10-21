<?php
/******************************
 * $File: config.inc.php
 * $Description: 网站配置文件
 * $Author: ahui 
 * $Time:2010-03-09
 * $Update:None 
 * $UpdateDate:None 
******************************/
session_cache_limiter('private,must-revalidate');
session_start();//打开缓存
//error_reporting(E_ALL || ~E_NOTICE);
//error_reporting(E_ALL );//报告所有错误

//define('ROOT_PATH', ereg_replace("[/\\]{1,}", '/', dirname(__FILE__) )."/../" );//根目录
define('ROOT_PATH', dirname(__FILE__) . '/../');
header('Content-Type:text/html;charset=GB2312');
 
print_r($_SESSION['purview']);

?>
