<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
{include file="user_header.html" }
<script type="text/javascript">
{literal}
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
{/literal}
</script>
<form name="login" method="post" action="" id="log_in" onSubmit="submitonce(this)">
<div id="main" class="clearfix">
		<!-- 主要内容 -->
			<div class="content">
				<!-- 2列 -->
                <!-- 两栏结构-左为主要内容-右为辅助内容 -->
                <div class="grid_c2_c20s4 clearfix m_b_25">
                  <div class="col_main">
                    <div class="main_wrap">
                    	<!-- 左栏 -->
                        <div class="loginModule">
                        	<div class="pass_login_div">
			
							  <p class="item nameBg"><input id="username" name="username" maxlength="64" tabindex="1" type="text" class="input_name" value="请输入用户名"></p>
                              <p class="item passBg"><input type="password"  name="password" id="password" maxlength="16" tabindex="2" class="input_pass" value="请输入密码"></p>
                              <p class="item"><table><tr><td>记住我</td><td><input type="checkbox" name="remember" value="1" style="width:15px;border:0" /></td><td><select name="save_time"><option value="3600">一个小时</option><option value="18000">五个小时</option><option value="86400">一天</option><option value="604800">一周</option><option value="2592000">一个月</option><option value="31104000">永远</option></select></td></tr></table></p>
                			  
                			  <br>
                			  <p class="item tc">
                                	<input type="submit" class="btn btn_login m_r_25" value="登 录"</>
                                	
									<a href="/index.php?user&q=going/getreg" class="link">注 册</a>			 
							  </p>
							  <p class="item">
							  <a href="/index.php?user&q=going/getpwd" class="link">忘记密码?</a>
                                    
							  </p>
						
					     </div>

			</div>
		</div>
		</div>
	<div class="col_extra">
                  	<!-- 右侧 -->
                    <div class="banner_login m_b_50">
                    	<img src="{$tempdir}/images/banner_login.jpg" />
                    </div>
                    <div class="clearfix down">
                   	  <div class="fl phoneDown">
                       	<h4 class="m_b_10">中硕信投客户端下载</h4>
                          <p>
                             <a href="#"><img src="{$tempdir}/images/icon_android.png"></a>
                             <a href="#"><img src="{$tempdir}/images/icon_iPhone.png"></a>
                          </p>
                        </div>
                        <div class="fl club"><a href="#"><img src="{$tempdir}/images/club.jpg"></a></div>
                   	  <div class="fl weixin">
                        	<h4 class="tit m_b_10">官方微信</h4>
                            <p>微信扫描二维码，<br>获得每日精选资讯</p>
                        </div>
                    </div>
                    <!-- end 右侧 -->
                  </div>
                  <!-- end -->
                </div>
                <!-- end 两栏结构-左为主要内容-右为辅助内容 -->
				<!-- end 2列 -->
			</div>
			<!-- end 主要内容 -->		
</div>
</form>
{include file="user_footer.html" }