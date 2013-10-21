<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "list"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr>
		<td width="" class="main_td">UID</td>
		<td width="" class="main_td">用户名</td>
		<td width="" class="main_td">真实姓名</td>
		<td width="" class="main_td">性别</td>
		<td width="" class="main_td">邮箱</td>
		<td width="" class="main_td">QQ</td>
		<td width="" class="main_td">手机</td>
		<td width="" class="main_td">所在地</td>
		<td width="" class="main_td">身份证</td>
		<th width="" class="main_td">添加时间</th>
		<th width="" class="main_td">状态</th>
		<th width="" class="main_td">用户类型</th>
		<th width="" class="main_td">是否为vip</th>
		<td width="" class="main_td">操作</td>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['user_list']) || $this->magic_vars['_A']['user_list']=='') $this->magic_vars['_A']['user_list'] = array();  $_from = $this->magic_vars['_A']['user_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['sex'])) $this->magic_vars['item']['sex']=''; ;if (  $this->magic_vars['item']['sex']==1): ?>男<? if (!isset($this->magic_vars['item']['sex'])) $this->magic_vars['item']['sex']=''; ;elseif (  $this->magic_vars['item']['sex']==2): ?>女<? else: ?>未知<? endif; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['email'])) $this->magic_vars['item']['email'] = ''; echo $this->magic_vars['item']['email']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['qq'])) $this->magic_vars['item']['qq'] = ''; echo $this->magic_vars['item']['qq']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['phone'])) $this->magic_vars['item']['phone'] = ''; echo $this->magic_vars['item']['phone']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['area'])) $this->magic_vars['item']['area'] = '';$_tmp = $this->magic_vars['item']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['card_id'])) $this->magic_vars['item']['card_id'] = ''; echo $this->magic_vars['item']['card_id']; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status'] ==1): ?>开通<? else: ?>关闭<? endif; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['typename'])) $this->magic_vars['item']['typename'] = ''; echo $this->magic_vars['item']['typename']; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['vip_status'])) $this->magic_vars['item']['vip_status']=''; ;if (  $this->magic_vars['item']['vip_status']==1): ?>是<? else: ?>否<? endif; ?></td>
		<td class="main_td1" align="center"><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/edit&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>">修改</a> / <a href="#" onClick="javascript:if(confirm('确定要删除吗?删除后将不可恢复')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/del&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>'">删除</a><? if (!isset($_SESSION['usertype'])) $_SESSION['usertype']=''; ;if (  $_SESSION['usertype']==1): ?> / <a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/manager/edit&user_id=<? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>">管理用户</a><? endif; ?> </td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr>
		<td colspan="14" class="action">
			<div class="floatl"></div>
			<div class="floatr">
				用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
				邮箱：<input type="text" name="email" id="email" value="<? if (!isset($_REQUEST['email'])) $_REQUEST['email'] = ''; echo $_REQUEST['email']; ?>"/>
				真实姓名：<input type="text" name="realname" id="realname" value="<? if (!isset($_REQUEST['realname'])) $_REQUEST['realname'] = '';$_tmp = $_REQUEST['realname'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
				<input type="button" value="搜索" onclick="sousuo()" />
			</div>
		</td>
		</tr>
	<tr>
		<td colspan="13" class="page">
		<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?>
		</td>
	</tr>
</table>
<!-- 添加和修改用户 开始 -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "new" ||  $this->magic_vars['_A']['query_type'] == "edit"): ?>
<div class="module_add">
	<form name="form_user" method="post" action="" onsubmit="return submit_fool()">
	<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?>编辑<? else: ?>添加<? endif; ?>用户</strong></div>
	<div class="module_border">
		<div class="l">用户名：</div>
		<div class="c">
			<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] != "edit"): ?><input name="username" type="text"  class="input_border" /><? else: ?><? if (!isset($this->magic_vars['_A']['user_result']['username'])) $this->magic_vars['_A']['user_result']['username'] = ''; echo $this->magic_vars['_A']['user_result']['username']; ?><input name="username" type="hidden"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['user_result']['username'])) $this->magic_vars['_A']['user_result']['username'] = ''; echo $this->magic_vars['_A']['user_result']['username']; ?>" /><? endif; ?> <font color="#FF0000">*</font>
		</div>
	</div>
	<div class="module_border">
		<div class="l">登录密码：</div>
		<div class="c">
			<input name="password" type="password" class="input_border" /><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?> 不修改请为空<? endif; ?> <font color="#FF0000">*</font>
		</div>
	</div>
	<div class="module_border">
		<div class="l">确认密码：</div>
		<div class="c">
			<input name="password1" type="password" class="input_border" /><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?> 不修改请为空<? endif; ?> <font color="#FF0000">*</font>
		</div>
	</div>
	<div class="module_border">
		<div class="l">真实姓名：</div>
		<div class="c">
			<input name="realname" type="text" value="<? if (!isset($this->magic_vars['_A']['user_result']['realname'])) $this->magic_vars['_A']['user_result']['realname'] = ''; echo $this->magic_vars['_A']['user_result']['realname']; ?>" class="input_border" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">性　别： </div>
		<div class="c">
		<input type="radio" name="sex" value="1" <? if (!isset($this->magic_vars['_A']['user_result']['sex'])) $this->magic_vars['_A']['user_result']['sex']=''; ;if (  $this->magic_vars['_A']['user_result']['sex']==1): ?> checked="checked" <? endif; ?> />
		男&nbsp;&nbsp;
		<input type="radio" name="sex" value="2"  <? if (!isset($this->magic_vars['_A']['user_result']['sex'])) $this->magic_vars['_A']['user_result']['sex']=''; ;if (  $this->magic_vars['_A']['user_result']['sex']==2): ?> checked="checked" <? endif; ?>/>
	  女&nbsp;&nbsp; 
		</div>
	</div>
	<div class="module_border">
		<div class="l">生日：</div>
		<div class="c">
		<input type="text" name="birthday"  class="input_border" value="<? if (!isset($this->magic_vars['_A']['user_result']['birthday'])) $this->magic_vars['_A']['user_result']['birthday'] = '';$_tmp = $this->magic_vars['_A']['user_result']['birthday'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d");echo $_tmp;unset($_tmp); ?>" size="20" onclick="change_picktime()"/> 
		</div>
	</div>
	<div class="module_border">
		<div class="l">所属客服：</div>
		<div class="c">
			<select name="kefu_userid">
			<option value="0">无</option>
			<? $this->magic_vars['query_type']='GetList';$data = array('type_id'=>'7,3','limit'=>'all');$default = '';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
			<option value="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = ''; echo $this->magic_vars['var']['user_id']; ?>" <? if (!isset($this->magic_vars['_A']['user_result']['kefu_userid'])) $this->magic_vars['_A']['user_result']['kefu_userid']='';if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id']=''; ;if (  $this->magic_vars['_A']['user_result']['kefu_userid']== $this->magic_vars['var']['user_id']): ?> selected="selected"<? endif; ?>><? if (!isset($this->magic_vars['var']['username'])) $this->magic_vars['var']['username'] = ''; echo $this->magic_vars['var']['username']; ?></option>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</select>
		</div>
	</div>
	<div class="module_border">
		<div class="l">是否可以发担保标：</div>
		<div class="c">
			<input type="radio" name="borrow_vouch" value="0" <? if (!isset($this->magic_vars['_A']['user_result']['borrow_vouch'])) $this->magic_vars['_A']['user_result']['borrow_vouch']=''; ;if (  $this->magic_vars['_A']['user_result']['borrow_vouch']==0): ?> checked="checked"<? endif; ?>/>否 <input type="radio" name="borrow_vouch" value="1" <? if (!isset($this->magic_vars['_A']['user_result']['borrow_vouch'])) $this->magic_vars['_A']['user_result']['borrow_vouch']=''; ;if (  $this->magic_vars['_A']['user_result']['borrow_vouch']==1): ?> checked="checked"<? endif; ?>/>可以
		</div>
	</div>
	<div class="module_border">
		<div class="l">类型： </div>
		<div class="c">
			<select name="type_id">
<? if (!isset($this->magic_vars['list_type'])) $this->magic_vars['list_type'] = array(); $_from =$this->magic_vars['list_type'];$_selected='';  foreach ($_from as $key => $value):echo "<option value='$key'"; if(isset($this->magic_vars['_A']['user_result']['type_id']) && $key == $this->magic_vars['_A']['user_result']['type_id']){ echo ' selected '; };echo " >$value</option>"; endforeach; ?></select>

		</div>
	</div>
	<div class="module_border">
		<div class="l">是否锁定：</div>
		<div class="c">
			 <input name="islock" type="radio" value="0"   <? if (!isset($this->magic_vars['_A']['user_result']['islock'])) $this->magic_vars['_A']['user_result']['islock']=''; ;if (  $this->magic_vars['_A']['user_result']['islock']=="0"): ?> checked="checked"<? endif; ?>/>开通<input name="islock" type="radio" value="1" <? if (!isset($this->magic_vars['_A']['user_result']['islock'])) $this->magic_vars['_A']['user_result']['islock']='';if (!isset($this->magic_vars['_A']['user_result']['islock'])) $this->magic_vars['_A']['user_result']['islock']=''; ;if (  $this->magic_vars['_A']['user_result']['islock']==1 ||  $this->magic_vars['_A']['user_result']['islock']==""): ?> checked="checked"<? endif; ?>/>锁定
		</div>
	</div>
	<div class="module_border">
		<div class="l">介绍人ID：</div>
		<div class="c">
			 <input name="invite_userid" id="invite_userid"  value="<? if (!isset($this->magic_vars['_A']['user_result']['invite_userid'])) $this->magic_vars['_A']['user_result']['invite_userid'] = ''; echo $this->magic_vars['_A']['user_result']['invite_userid']; ?>" type="text" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">推广提成费用：</div>
		<div class="c">
			 <input name="invite_money" id="invite_money" value="<? if (!isset($this->magic_vars['_A']['user_result']['invite_money'])) $this->magic_vars['_A']['user_result']['invite_money'] = ''; echo $this->magic_vars['_A']['user_result']['invite_money']; ?>" type="text" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">状态：</div>
		<div class="c">
			 <input name="status" type="radio" value="0"   <? if (!isset($this->magic_vars['_A']['user_result']['status'])) $this->magic_vars['_A']['user_result']['status']=''; ;if (  $this->magic_vars['_A']['user_result']['status']=="0"): ?> checked="checked"<? endif; ?>/>关闭<input name="status" type="radio" value="1" <? if (!isset($this->magic_vars['_A']['user_result']['status'])) $this->magic_vars['_A']['user_result']['status']='';if (!isset($this->magic_vars['_A']['user_result']['status'])) $this->magic_vars['_A']['user_result']['status']=''; ;if (  $this->magic_vars['_A']['user_result']['status']==1 ||  $this->magic_vars['_A']['user_result']['status']==""): ?> checked="checked"<? endif; ?>/>开通
		</div>
	</div>
	<div class="module_border">
		<div class="l">所在地：</div>
		<div class="c">
			<script src="./plugins/index.php?&q=area&area=<? if (!isset($this->magic_vars['_A']['user_result']['area'])) $this->magic_vars['_A']['user_result']['area'] = ''; echo $this->magic_vars['_A']['user_result']['area']; ?>" type='text/javascript' language="javascript"></script>
		</div>
	</div>
	<div class="module_border">
		<div class="l">证件类型：</div>
		<div class="c">
			<select name="card_type">
				<option value="1" <? if (!isset($this->magic_vars['_A']['user_result']['card_type'])) $this->magic_vars['_A']['user_result']['card_type']=''; ;if (  $this->magic_vars['_A']['user_result']['card_type']==1): ?> selected="selected"<? endif; ?>>身份证</option>
				<option value="2" <? if (!isset($this->magic_vars['_A']['user_result']['card_type'])) $this->magic_vars['_A']['user_result']['card_type']=''; ;if (  $this->magic_vars['_A']['user_result']['card_type']==2): ?> selected="selected"<? endif; ?>>军官证</option>
				<option value="3" <? if (!isset($this->magic_vars['_A']['user_result']['card_type'])) $this->magic_vars['_A']['user_result']['card_type']=''; ;if (  $this->magic_vars['_A']['user_result']['card_type']==3): ?> selected="selected"<? endif; ?>>台胞证</option>
			</select>
			<input name="card_id" type="text" value="<? if (!isset($this->magic_vars['_A']['user_result']['card_id'])) $this->magic_vars['_A']['user_result']['card_id'] = ''; echo $this->magic_vars['_A']['user_result']['card_id']; ?>" class="input_border" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">电子邮件地址： </div>
		<div class="c">
			<input name="email" value="<? if (!isset($this->magic_vars['_A']['user_result']['email'])) $this->magic_vars['_A']['user_result']['email'] = ''; echo $this->magic_vars['_A']['user_result']['email']; ?>" type="text"  class="input_border" /> <font color="#FF0000">*</font>
		</div>
	</div>
	<div class="module_border">
		<div class="l">QQ：</div>
		<div class="c">
			<input name="qq" type="text" value="<? if (!isset($this->magic_vars['_A']['user_result']['qq'])) $this->magic_vars['_A']['user_result']['qq'] = ''; echo $this->magic_vars['_A']['user_result']['qq']; ?>" class="input_border" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">旺旺：</div>
		<div class="c">
			<input name="wangwang" type="text" value="<? if (!isset($this->magic_vars['_A']['user_result']['wangwang'])) $this->magic_vars['_A']['user_result']['wangwang'] = ''; echo $this->magic_vars['_A']['user_result']['wangwang']; ?>" class="input_border" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">家庭电话：</div>
		<div class="c">
			<input name="tel" type="text" value="<? if (!isset($this->magic_vars['_A']['user_result']['tel'])) $this->magic_vars['_A']['user_result']['tel'] = ''; echo $this->magic_vars['_A']['user_result']['tel']; ?>" class="input_border" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">手机：</div>
		<div class="c">
			<input name="phone" type="text" value="<? if (!isset($this->magic_vars['_A']['user_result']['phone'])) $this->magic_vars['_A']['user_result']['phone'] = ''; echo $this->magic_vars['_A']['user_result']['phone']; ?>" class="input_border" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">详细地址：</div>
		<div class="c">
			<input name="address" type="text" value="<? if (!isset($this->magic_vars['_A']['user_result']['address'])) $this->magic_vars['_A']['user_result']['address'] = ''; echo $this->magic_vars['_A']['user_result']['address']; ?>" class="input_border" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">令牌序列号SN：</div>
		<div class="c">
			<input name="serial_id" type="text" value="<? if (!isset($this->magic_vars['_A']['user_result']['serial_id'])) $this->magic_vars['_A']['user_result']['serial_id'] = ''; echo $this->magic_vars['_A']['user_result']['serial_id']; ?>" class="input_border" />
		</div>
	</div>
	<div class="module_submit border_b" >
	<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type']=="edit"): ?><input type="hidden" name="user_id" value="<? if (!isset($_REQUEST['user_id'])) $_REQUEST['user_id'] = ''; echo $_REQUEST['user_id']; ?>" /><? endif; ?>
	<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type']=="new"): ?><input type="button" name="tijiao" value="确认提交" onclick="check_user()" /><? else: ?><input type="submit" name="tijiao" value="确认提交" /><? endif; ?>
	<input type="reset" name="reset" value="重置表单" />
	</div>
	</form>
</div>

<script type="text/javascript">
function check_user(){
	 var frm = document.forms['form_user'];
	 var username = frm.elements['username'].value;
	 var password = frm.elements['password'].value;
	 var password1 = frm.elements['password1'].value;
	 var email = frm.elements['email'].value;
	 var errorMsg = '';
	 if (username.length == 0 ) {
		errorMsg += '-- 用户名不能为空<br/>';
	 }
	 if (username.length<2) {
		errorMsg += '-- 用户名长度不能少于2位<br/>';
	 }
	 if (password.length==0) {
		errorMsg += '-- 密码不能为空<br/>';
	  }
	  if (password.length<6) {
		errorMsg += '-- 密码长度不能小于6位<br/>';
	  }
	  if (password.length!=password1.length) {
		errorMsg += '-- 两次密码不一样<br/>';
	  }
	  if(email.length==0) {
		errorMsg += '-- 邮箱不能为空<br/>';
	  }
	  if(errorMsg.length > 0){
		$.jBox.info(errorMsg,'提示');
		return false;
	  } else{
	  	frm.elements['tijiao'].disabled=true;
	  	frm.elements['tijiao'].value="提交中..";
	  	frm.submit();
		return true;
	  }
}
</script>

<!-- 添加和修改用户 结束 -->
<!-- 用户类型列表 开始 -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "type"): ?>
<table width="100%" border="0" cellpadding="5" cellspacing="1">
	<tr>
		<td width="7%" class="main_td">类型名称</td>
		<td class="main_td">简要</td>
		<td class="main_td">备注</td>
		<td width="5%" class="main_td">排序</td>
		<td width="5%" class="main_td">状态</td>
		<td width="7%" class="main_td">操作</td>
	</tr>
	<form action="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type_order" method="post">
	<?  if(!isset($this->magic_vars['_A']['user_type_list']) || $this->magic_vars['_A']['user_type_list']=='') $this->magic_vars['_A']['user_type_list'] = array();  $_from = $this->magic_vars['_A']['user_type_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td bgcolor="#ffffff" ><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = ''; echo $this->magic_vars['item']['name']; ?></td>
		<td bgcolor="#ffffff" ><? if (!isset($this->magic_vars['item']['summary'])) $this->magic_vars['item']['summary'] = ''; echo $this->magic_vars['item']['summary']; ?></td>
		<td bgcolor="#ffffff"><? if (!isset($this->magic_vars['item']['remark'])) $this->magic_vars['item']['remark'] = ''; echo $this->magic_vars['item']['remark']; ?></td>
		<td bgcolor="#ffffff"><input name="order[]" size="2" value="<? if (!isset($this->magic_vars['item']['order'])) $this->magic_vars['item']['order'] = ''; echo $this->magic_vars['item']['order']; ?>"type="text" ><input name="type_id[]" type="hidden" size="2" value="<? if (!isset($this->magic_vars['item']['type_id'])) $this->magic_vars['item']['type_id'] = ''; echo $this->magic_vars['item']['type_id']; ?>" ></td>
		<td bgcolor="#ffffff" ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status']==1): ?>开通<? else: ?><font color=red>关闭</font><? endif; ?></td>
		<td bgcolor="#ffffff"><a href="<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type_edit&type_id=<? if (!isset($this->magic_vars['item']['type_id'])) $this->magic_vars['item']['type_id'] = ''; echo $this->magic_vars['item']['type_id']; ?>&a=userinfo">修改</a>/<a href="#" onclick="javascript:if(confirm('确定要删除吗?请慎重')) location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type_del&type_id=<? if (!isset($this->magic_vars['item']['type_id'])) $this->magic_vars['item']['type_id'] = ''; echo $this->magic_vars['item']['type_id']; ?>'">删除</a></td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr>
		<td colspan="6" class="action"><input type="button" onclick="javascript:location.href='<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/type_new<? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>'" value="添加类型" />  <input type="submit" value="修改排序" /> </td>
	</tr>
	</form>
</table><!-- 用户类型列表 结束 -->

<!-- 添加修改用户类型 开始 -->
<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']='';if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "type_new" ||  $this->magic_vars['_A']['query_type'] == "type_edit"): ?>
<div class="module_add">
	<form enctype="multipart/form-data" name="form1" method="post" action="" onsubmit="return check_form();"  >
	<div class="module_title"><strong><? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "edit"): ?>编辑<? else: ?>添加<? endif; ?>用户类型</strong></div>
	<div class="module_border">
		<div class="l">类型名称:</div>
		<div class="c">
			<input type="text" name="name"  class="input_border" value="<? if (!isset($this->magic_vars['result']['name'])) $this->magic_vars['result']['name'] = ''; echo $this->magic_vars['result']['name']; ?>" size="30" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">排序:</div>
		<div class="c">
			<input type="text" name="order"  class="input_border" value="<? if (!isset($this->magic_vars['result']['order'])) $this->magic_vars['result']['order'] = '';$_tmp = $this->magic_vars['result']['order'];$_tmp = $this->magic_modifier("default",$_tmp,"10");echo $_tmp;unset($_tmp); ?>" size="10" />
		</div>
	</div>
	<div class="module_border">
		<div class="l">状态:</div>
		<div class="c">
			<input type="radio" name="status" value="0" <? if (!isset($this->magic_vars['result']['status'])) $this->magic_vars['result']['status']=''; ;if (  $this->magic_vars['result']['status'] == 0): ?>checked="checked"<? endif; ?>/> 关闭<input type="radio" name="status" value="1"  <? if (!isset($this->magic_vars['result']['status'])) $this->magic_vars['result']['status']='';if (!isset($this->magic_vars['result']['status'])) $this->magic_vars['result']['status']=''; ;if (  $this->magic_vars['result']['status'] ==1 || $this->magic_vars['result']['status'] ==""): ?>checked="checked"<? endif; ?>/>开通
		</div>
	</div>
	<div class="module_border">
		<div class="l">简要说明:</div>
		<div class="c">
			<textarea name="summary" cols="55" rows="6"><? if (!isset($this->magic_vars['result']['summary'])) $this->magic_vars['result']['summary'] = ''; echo $this->magic_vars['result']['summary']; ?></textarea>
		</div>
	</div>
	<div class="module_border">
		<div class="l">备注:</div>
		<div class="c">
			<textarea name="remark" cols="55" rows="6"><? if (!isset($this->magic_vars['result']['remark'])) $this->magic_vars['result']['remark'] = ''; echo $this->magic_vars['result']['remark']; ?></textarea>
		</div>
	</div>
	<div class="module_submit" >
	<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;if (  $this->magic_vars['_A']['query_type'] == "type_edit"): ?><input type="hidden" name="type_id" value="<? if (!isset($this->magic_vars['result']['type_id'])) $this->magic_vars['result']['type_id'] = ''; echo $this->magic_vars['result']['type_id']; ?>" /><? endif; ?>
		<input type="submit" value="确认提交" />
		<input type="reset" name="reset" value="重置表单" />
	</div>
	</form>
</div>

<script type="text/javascript">
function check_form(){
	 var frm = document.forms['form1'];
	 var title = frm.elements['name'].value;
	 var errorMsg = '';
	  if (title.length == 0 ) {
		errorMsg += '类型名称必须填写' + '\n';
	  }
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return true;
	  }
}

</script><!-- 添加修改用户类型 结束 -->

<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type']=''; ;elseif (  $this->magic_vars['_A']['query_type'] == "vip"): ?>
<table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
	<tr>
		<td width="" class="main_td">ID</td>
		<td width="" class="main_td">用户名</td>
		<td width="" class="main_td">真实姓名1</td>
		<th width="" class="main_td">添加时间</th>
		<th width="" class="main_td">状态</th>
		<th width="" class="main_td">用户类型</th>
		<th width="" class="main_td">登录次数</th>
		<th width="" class="main_td">状态</th>
		<th width="" class="main_td">是否缴费</th>
		<td width="" class="main_td">操作</td>
	</tr>
	<?  if(!isset($this->magic_vars['_A']['user_vip_list']) || $this->magic_vars['_A']['user_vip_list']=='') $this->magic_vars['_A']['user_vip_list'] = array();  $_from = $this->magic_vars['_A']['user_vip_list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
	<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr2"<? endif; ?>>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['user_id'])) $this->magic_vars['item']['user_id'] = ''; echo $this->magic_vars['item']['user_id']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['realname'])) $this->magic_vars['item']['realname'] = ''; echo $this->magic_vars['item']['realname']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['username'])) $this->magic_vars['item']['username'] = ''; echo $this->magic_vars['item']['username']; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['addtime'])) $this->magic_vars['item']['addtime'] = '';$_tmp = $this->magic_vars['item']['addtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['status'])) $this->magic_vars['item']['status']=''; ;if (  $this->magic_vars['item']['status'] ==1): ?>开通<? else: ?>隐藏<? endif; ?></td>
		<td class="main_td1" align="center" ><? if (!isset($this->magic_vars['item']['typename'])) $this->magic_vars['item']['typename'] = ''; echo $this->magic_vars['item']['typename']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['logintime'])) $this->magic_vars['item']['logintime'] = ''; echo $this->magic_vars['item']['logintime']; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['isvip'])) $this->magic_vars['item']['isvip']=''; ;if (  $this->magic_vars['item']['isvip']==-1): ?>vip审核<? else: ?>VIP会员<? endif; ?></td>
		<td class="main_td1" align="center"><? if (!isset($this->magic_vars['item']['vip_money'])) $this->magic_vars['item']['vip_money']=''; ;if (  $this->magic_vars['item']['vip_money']==""): ?>无<? else: ?><? if (!isset($this->magic_vars['item']['vip_money'])) $this->magic_vars['item']['vip_money'] = ''; echo $this->magic_vars['item']['vip_money']; ?>元<? endif; ?></td>
		<td class="main_td1" align="center">--</td>
	</tr>
	<? endforeach; endif; unset($_from); ?>
	<tr>
		<td colspan="10" class="action">
		<div class="floatl"></div>
			<div class="floatr">
				用户名：<input type="text" name="username" id="username" value="<? if (!isset($_REQUEST['username'])) $_REQUEST['username'] = '';$_tmp = $_REQUEST['username'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>"/>
				<input type="button" value="搜索" onclick="sousuo()" />
			</div>
			</td>
		</tr>
	<tr>
		<td colspan="10" class="page">
		<? if (!isset($this->magic_vars['_A']['showpage'])) $this->magic_vars['_A']['showpage'] = ''; echo $this->magic_vars['_A']['showpage']; ?>
		</td>
	</tr>
</table>
<? endif; ?>
<script type="text/javascript">
	var url = '<? if (!isset($this->magic_vars['_A']['query_url'])) $this->magic_vars['_A']['query_url'] = ''; echo $this->magic_vars['_A']['query_url']; ?>/<? if (!isset($this->magic_vars['_A']['query_type'])) $this->magic_vars['_A']['query_type'] = ''; echo $this->magic_vars['_A']['query_type']; ?><? if (!isset($this->magic_vars['_A']['site_url'])) $this->magic_vars['_A']['site_url'] = ''; echo $this->magic_vars['_A']['site_url']; ?>';
	
	function sousuo(){
		var sou = "";
		var username = $("#username").val() || "";
		var email = $("#email").val() || "";
		var realname = $("#realname").val() || "";
		if(username!=""){
			sou += "&username="+username;
		}
		if(email!=""){
			sou += "&email="+email;
		}
		if(realname!=""){
			sou += "&realname="+realname;
		}
		location.href=url+sou;
	}
</script>
