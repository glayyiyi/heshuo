<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
<? $this->magic_include(array('file' => "user_header.html", 'vars' => array()));?>
<script type="text/javascript">

   function submitonce(login){
		 if(document.all||document.getElementById){
		  for(i=0;i<login.length;i++){
		   var tempobj=login.elements[i];
		   if(tempobj.type.toLowerCase()=="submit"||tempobj.type.toLowerCase()=="reset")
				tempobj.disabled=true;
		  }
		 }
	};
            var childWindow;
            function toQzoneLogin()
            {
				childWindow = 	window.location.href="/api/qqlogin.php";
			    
            }

</script>
<form name="login" method="post" action="" id="log_in" onSubmit="submitonce(this)">
<div id="main" class="clearfix">
	<div class="box">
		<div class="box-con" style=" position: relative;">
			<div class="reg-header"><h3>�û���¼</h3></div>
			<div  style="width:540px; ">
			<ul class="reg-table">
				<li>
					<div class="reg-l-title">�û�����</div>
					<div class="reg-l-input">
						<input type="text"  id="username" name="username" maxlength="64" style="color:#999" tabindex="1" >
					</div>
				</li>
				<li>
					<div class="reg-l-title">���룺</div>
					<div class="reg-l-input"><input type="password"  name="password" id="password" maxlength="16" tabindex="2" /></div>
					 
				</li>
                                <li>
					<div class="reg-l-title">��̬���</div>
					<div class="reg-l-input"><input type="text"  name="uchoncode"  maxlength="16" tabindex="2" /></div>
					 
				</li>
				<li>
					<div class="reg-l-title"></div>
					<div class="reg-l-input"><table><tr><td>��ס��</td><td><input type="checkbox" name="remember" value="1" style="width:15px;border:0" /></td><td><select name="save_time"><option value="3600">һ��Сʱ</option><option value="18000">���Сʱ</option><option value="86400">һ��</option><option value="604800">һ��</option><option value="2592000">һ����</option><option value="31104000">��Զ</option></select></td></tr></table></div>
				</li>
				<li>
					<div class="reg-l-title"> </div>
					<div  ><input type="submit" value="������¼" class="btn-action" />
					</div>
					<div class="reg-l-title"><a href="/index.php?user&q=going/getpwd" style="text-decoration:underline;color:#03c;">��������?</a></div>
                </li>
			</ul>
			</div>
			<div style="width: 350px; position: absolute; right: 20px; top: 90px;">
			<span>��û���ʺ�? <a href="/index.php?user&q=going/getreg" style="text-decoration:underline;color:#03c;">���ע��</a></span><br/><br/>
			</div>
		</div>
	</div>
</div>
</form>
<? $this->magic_include(array('file' => "user_footer.html", 'vars' => array()));?>