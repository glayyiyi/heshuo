<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
<? $this->magic_include(array('file' => "admin_head.html.php", 'vars' => array()));?>
<? if (!isset($this->magic_vars['html_template'])) $this->magic_vars['html_template']='';; $_from = $this->magic_vars['html_template'];  $this->magic_include(array('file' => $_from, 'vars' => array())); unset($_from);?>
<? $this->magic_include(array('file' => "admin_foot.html", 'vars' => array()));?>

