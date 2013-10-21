<div class="module_add">
		<form name="form_user" method="post" action="<? if (!isset($this->magic_vars['url'])) $this->magic_vars['url'] = ''; echo $this->magic_vars['url']; ?>"  onsubmit="return check_user();" >
		<div class="module_title"><strong>修改个人信息</strong></div>

		<div class="module_border">
			<div class="l">用户名： </div>
			<div class="c">
				<? if (!isset($this->magic_vars['_G']['user_result']['username'])) $this->magic_vars['_G']['user_result']['username'] = ''; echo $this->magic_vars['_G']['user_result']['username']; ?>
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">真实姓名： </div>
			<div class="c">
				<input name="realname" type="text" value="<? if (!isset($this->magic_vars['_G']['user_result']['realname'])) $this->magic_vars['_G']['user_result']['realname'] = ''; echo $this->magic_vars['_G']['user_result']['realname']; ?>" class="input_border" />
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">电子邮件地址：  </div>
			<div class="c">
				<input name="email" value="<? if (!isset($this->magic_vars['_G']['user_result']['email'])) $this->magic_vars['_G']['user_result']['email'] = ''; echo $this->magic_vars['_G']['user_result']['email']; ?>" type="text"  class="input_border" />
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">性　别： </div>
			<div class="c">
				<input type="radio" name="sex" value="0" <? if (!isset($this->magic_vars['_G']['user_result']['sex'])) $this->magic_vars['_G']['user_result']['sex']='';if (!isset($this->magic_vars['_G']['user_result']['sex'])) $this->magic_vars['_G']['user_result']['sex']=''; ;if (  $this->magic_vars['_G']['user_result']['sex']==0 ||  $this->magic_vars['_G']['user_result']['sex']==""): ?> checked="checked" <? endif; ?>/>
                    保密&nbsp;&nbsp;
                    <input type="radio" name="sex" value="1" <? if (!isset($this->magic_vars['_G']['user_result']['sex'])) $this->magic_vars['_G']['user_result']['sex']=''; ;if (  $this->magic_vars['_G']['user_result']['sex']==1): ?> checked="checked" <? endif; ?> />
                    男&nbsp;&nbsp;
                    <input type="radio" name="sex" value="2"  <? if (!isset($this->magic_vars['_G']['user_result']['sex'])) $this->magic_vars['_G']['user_result']['sex']=''; ;if (  $this->magic_vars['_G']['user_result']['sex']==2): ?> checked="checked" <? endif; ?>/>
                  女&nbsp;&nbsp; 
			</div>
		</div>
		
		
		<div class="module_border">
			<div class="l">QQ：</div>
			<div class="c">
				<input name="qq" type="text" value="<? if (!isset($this->magic_vars['_G']['user_result']['qq'])) $this->magic_vars['_G']['user_result']['qq'] = ''; echo $this->magic_vars['_G']['user_result']['qq']; ?>" class="input_border" />
                 
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
				<input name="tel" type="text" value="<? if (!isset($this->magic_vars['_G']['user_result']['tel'])) $this->magic_vars['_G']['user_result']['tel'] = ''; echo $this->magic_vars['_G']['user_result']['tel']; ?>" class="input_border" />
                 
			</div>
		</div>
		 <div class="module_border">
			<div class="l">手机：</div>
			<div class="c">
				<input name="phone" type="text" value="<? if (!isset($this->magic_vars['_G']['user_result']['phone'])) $this->magic_vars['_G']['user_result']['phone'] = ''; echo $this->magic_vars['_G']['user_result']['phone']; ?>" class="input_border" />
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">详细地址： </div>
			<div class="c">
				<input name="address" type="text" value="<? if (!isset($this->magic_vars['_G']['user_result']['address'])) $this->magic_vars['_G']['user_result']['address'] = ''; echo $this->magic_vars['_G']['user_result']['address']; ?>" class="input_border" />
			</div>
		</div>
		
		<div class="module_title"><strong>修改密码</strong></div>
        <div class="module_border">
			<div class="l">原密码：</div>
			<div class="c">
				<input name="password" type="password" size="25"  class="InputBorder" /> 密码修改：（不改请为空）
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">新密码：</div>
			<div class="c">
				<input name="password1" type="password" size="25"  class="InputBorder" />
			</div>
		</div>
		
		<div class="module_border">
			<div class="l">确认密码：</div>
			<div class="c">
				<input name="password2" type="password" size="25"  class="InputBorder" />
			</div>
		</div>
		
		<div class="module_submit"><input name="user_id" type="hidden" value="<? if (!isset($_SESSION['user_id'])) $_SESSION['user_id'] = ''; echo $_SESSION['user_id']; ?>" />
            <input name="submit" type="submit" class="bnt_queren" value="确认修改" />
          </div>
   	 </form>
      </div>

	<script>
function check_user(){
	 var frm = document.forms['form_user'];
	 var password = frm.elements['password'].value;
	  var password1 = frm.elements['password1'].value;
	  var password2 = frm.elements['password2'].value;
	 var errorMsg = '';
		if (password!=""){
		  if (password1.length==0) {
			errorMsg += '新密码不能为空' + '\n';
		  }
		  if (password1.length<6) {
			errorMsg += '密码长度不能小于6位' + '\n';
		  }
		   if (password2.length!=password1.length) {
			errorMsg += '两次密码不一样' + '\n';
		  }
	  }
	  if (errorMsg.length > 0){
		alert(errorMsg); return false;
	  } else{  
		return submit_fool();
	  }
}

</script>
