<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
			<!-- ��Ҫ���� -->
			<div id="main" class="clearfix">
				<!-- ���ģ�� -->
				<div class="bannerBar m_b_15">
					<p class="pic"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/banner_01.jpg" /></p>
					<!-- ������ -->
					<div class="pop_searchBar">
						<div class="hd">
							<ul class="tab_search">
								<li><a class="hover" href="#">��ҪͶ��<s class="ico_tip"></s></a></li>
								<li><a href="#">��Ҫ����<s class="ico_tip"></s></a></li>
							</ul>
						</div>
						<div class="bg">
							<p class="item">
								<label class="tit">���</label>
								<span class="c"><input class="input_picbg_01" type="text" name="textfield" id="textfield" /></span>
							</p>
							<p class="item">
								<label class="tit">�껯������</label>
								<span class="c"><input class="input_picbg_01" type="text" name="textfield" id="textfield" /></span>
							</p>
							<p class="item">
								<label class="tit">����</label>
								<span class="c"><input class="input_picbg_01" type="text" name="textfield" id="textfield" /></span>
							</p>
							<p class="item">
								<label class="tit"></label>
								<span class="c tc"><a class="btn btn_green_01 m_t_10" href="��ҪͶ�ʣ���ѯ.html">�� ��</a></span>
							</p>
						</div>
					</div>
					<!-- end ������ -->
				</div>
				<!-- end ���ģ�� -->

         
         
      
            

         
         
         
         
         
				<!-- ����Ͷ�� -->
				<div class="module_01 m_b_17">
					<div class="hd m_b_15">
						<h3 class="fl">����Ͷ��</h3>
						<span class="fr more"><a href="#">MORE</a></span>
					</div>
					<div class="bg posit_rel">
						<!-- ���� -->
						<div class="global_module prolist">
							<div  class="prolist_content">
				                <ul>
				                    <li>
				                        <b class="pic"><a href="#"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/pic_01.jpg" alt="" /></a></b>
				                        <div class="itemInfo">
				                        	<h4>���1310��  </h4>
				                        	<p class="m_b_5">����TOT��50�������� ���й�˾������</p>
				                        	<p><a href="#" class="ico_sprite btn btn_view_01">�� ��</a></p>
				                        </div>
				                    </li>
				                    <li>
				                        <b class="pic"><a href="#"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/pic_01.jpg" alt="" /></a></b>
				                        <div class="itemInfo">
				                        	<h4>���1310��  </h4>
				                        	<p class="m_b_5">����TOT��50�������� ���й�˾������</p>
				                        	<p><a href="#" class="ico_sprite btn btn_view_01">�� ��</a></p>
				                        </div>
				                    </li>
				                    <li>
				                        <b class="pic"><a href="#"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/pic_01.jpg" alt="" /></a></b>
				                        <div class="itemInfo">
				                        	<h4>���1310��  </h4>
				                        	<p class="m_b_5">����TOT��50�������� ���й�˾������</p>
				                        	<p><a href="#" class="ico_sprite btn btn_view_01">�� ��</a></p>
				                        </div>
				                    </li>
				                    <li>
				                        <b class="pic"><a href="#"><img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/pic_01.jpg" alt="" /></a></b>
				                        <div class="itemInfo">
				                        	<h4>���1310��</h4>
				                        	<p class="m_b_5">����TOT��50�������� ���й�˾������</p>
				                        	<p><a href="#" class="ico_sprite btn btn_view_01">�� ��</a></p>
				                        </div>
				                    </li>
				                </ul>
				            </div>
						</div>
						<!-- ���Ұ�ť -->
			            <p class="module_left"><img class="goLeft" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/btn_left.png" alt="" /></p>
			            <p class="module_right"><img class="goRight" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/btn_right.png" alt="" /></p>

			            <!-- ���α��� -->
			            <div class="module_01tip"></div>

					</div>
				</div>
				<!-- end ����Ͷ�� -->
				<!-- 2�� -->
				<div class="grid_c2 clearfix m_b_10">
					<div class="fl clum_l">
						<!-- ���Ŵ��� -->
						<div class="module_02">
							<div class="hd">
							<h3>���Ŵ���</h3>
							</div>
							
							<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'var','limit'=>'10','order'=>'biaoindex');$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<div class="bg">
                    <a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html"><img src="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = '';$_tmp = $this->magic_vars['var']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"middle");echo $_tmp;unset($_tmp); ?>" class="productimg"></a>
                    <ul class="hot_list">
                        <li class="titleli">
                           <span>
                                <a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"25:...");echo $_tmp;unset($_tmp); ?>&nbsp;&nbsp;</a>
                           </span>
                           <? if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;if (  $this->magic_vars['var']['is_lz']==1): ?>
                           <a href="/question/a146.html" target="_blank" rel="tooltip" title="��Ŀ��ת��"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/lz.gif" border="0"  alt="����鿴����"  /></a>&nbsp;
                           <? if (!isset($this->magic_vars['var']['is_fast'])) $this->magic_vars['var']['is_fast']=''; ;elseif (  $this->magic_vars['var']['is_fast']==1): ?>
                           <a href="/question/a146.html" target="_blank" rel="tooltip" title="С΢��ҵ�ֳ���˵�Ѻ��"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/fast.gif" border="0"  alt="����鿴����"  /></a>&nbsp;
                           <? if (!isset($this->magic_vars['var']['is_jin'])) $this->magic_vars['var']['is_jin']=''; ;elseif (  $this->magic_vars['var']['is_jin']==1): ?>
                           <a href="/question/a184.html" target="_blank" rel="tooltip" title="���������վ���ʲ������ϵĽ���"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/jin.gif"   border="0"  alt="����鿴����" /></a>&nbsp;
                           <? if (!isset($this->magic_vars['var']['is_mb'])) $this->magic_vars['var']['is_mb']=''; ;elseif (  $this->magic_vars['var']['is_mb']==1): ?>
                           <a href="/question/a145.html" target="_blank" rel="tooltip" title="�������ϵͳ�Զ�����"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/miao.jpg"  border="0" /></a>&nbsp;
                           <? if (!isset($this->magic_vars['var']['is_xin'])) $this->magic_vars['var']['is_xin']=''; ;elseif (  $this->magic_vars['var']['is_xin']==1): ?>
                           <a href="/question/a143.html" target="_blank" rel="tooltip" title="��վ��������ö�Ƚ���"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/xin.jpg"   border="0"  alt="����鿴����" /></a>&nbsp;
                           <? endif; ?>
                           <? if (!isset($this->magic_vars['var']['isday'])) $this->magic_vars['var']['isday']=''; ;if (  $this->magic_vars['var']['isday']==1): ?><a href="#" target="_blank" rel="tooltip" title="����ǰ������"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/day.jpg"   border="0"  alt="����鿴����" /></a>&nbsp;<? endif; ?>
                           <? if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']='';if (!isset($this->magic_vars['var']['award'])) $this->magic_vars['var']['award']=''; ;if (  $this->magic_vars['var']['award']==1 ||  $this->magic_vars['var']['award']==2): ?><a  rel="tooltip" title="Ͷ�ʸý������Ϣ���ж���Ľ���" href="#" ><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/jiangli.gif"  border="0"  /></a>&nbsp;<? endif; ?>
                           <? if (!isset($this->magic_vars['var']['pwd'])) $this->magic_vars['var']['pwd']=''; ;if (  $this->magic_vars['var']['pwd'] != ""): ?><a rel="tooltip" title="�������Ͷ���ʱ����Ҫ��������Ľ���" href="#"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/lock.gif"  border="0"  /></a>&nbsp;<? endif; ?>
                           <? if (!isset($this->magic_vars['var']['danbao'])) $this->magic_vars['var']['danbao']=''; ;if (  $this->magic_vars['var']['danbao'] == 1): ?><a rel="tooltip" title="�ɵ�����������˾�����Ľ���" href="#"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/dan.gif"  border="0" /></a><? endif; ?>
                           <? if (!isset($this->magic_vars['var']['is_kuai'])) $this->magic_vars['var']['is_kuai']=''; ;if (  $this->magic_vars['var']['is_kuai']==1): ?> <a rel="tooltip" title="���ٱ꣬�����ʽ���ת" href="#"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/kuai.gif"  border="0" /></a><? endif; ?>
                        </li>
                        <li>������<? if (!isset($this->magic_vars['var']['account_format'])) $this->magic_vars['var']['account_format'] = ''; echo $this->magic_vars['var']['account_format']; ?>Ԫ</li>
                        <li>�����ʣ�<strong><? if (!isset($this->magic_vars['var']['apr'])) $this->magic_vars['var']['apr'] = ''; echo $this->magic_vars['var']['apr']; ?></strong>%</li>
                        <li><? if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;if (  $this->magic_vars['var']['is_lz']==1): ?>��ת���ڣ�<? else: ?>������ޣ�<? endif; ?><? if (!isset($this->magic_vars['var']['isday'])) $this->magic_vars['var']['isday']=''; ;if (  $this->magic_vars['var']['isday']==1): ?><strong><? if (!isset($this->magic_vars['var']['time_limit_day'])) $this->magic_vars['var']['time_limit_day'] = ''; echo $this->magic_vars['var']['time_limit_day']; ?></strong>��<? else: ?><strong><? if (!isset($this->magic_vars['var']['time_limit'])) $this->magic_vars['var']['time_limit'] = ''; echo $this->magic_vars['var']['time_limit']; ?></strong>����<? endif; ?></li>
                        <li><span style="float:left">���õȼ���</span><img class="rank" src="<? if (!isset($this->magic_vars['_G']['system']['con_credit_picurl'])) $this->magic_vars['_G']['system']['con_credit_picurl'] = ''; echo $this->magic_vars['_G']['system']['con_credit_picurl']; ?><? if (!isset($this->magic_vars['var']['credit_pic'])) $this->magic_vars['var']['credit_pic'] = '';$_tmp = $this->magic_vars['var']['credit_pic'];$_tmp = $this->magic_modifier("default",$_tmp,"credit_s11.gif");echo $_tmp;unset($_tmp); ?>" title="<? if (!isset($this->magic_vars['var']['credit_jifen'])) $this->magic_vars['var']['credit_jifen'] = '';$_tmp = $this->magic_vars['var']['credit_jifen'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>��" /></li>
                        <li>
                            <div class="float_left">����ɣ�</div>
                            <div class="jindu float_left">
                                <div class="tiaotiao" style="width:<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale'] = '';$_tmp = $this->magic_vars['var']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%"></div>
                            </div>
                            <div class="float_left">&nbsp;<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale'] = '';$_tmp = $this->magic_vars['var']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%</div>
                        </li>
                        <li><? if (!isset($this->magic_vars['var']['isday'])) $this->magic_vars['var']['isday']='';if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;if (  $this->magic_vars['var']['isday']==1 && $this->magic_vars['var']['is_lz']==0): ?>����ȫ���<? if (!isset($this->magic_vars['var']['is_mb'])) $this->magic_vars['var']['is_mb']=''; ;elseif (  $this->magic_vars['var']['is_mb']==1): ?>ϵͳ�Զ�����<? if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;elseif (  $this->magic_vars['var']['is_lz']==1): ?>�����Զ��ع�<? else: ?><? if (!isset($this->magic_vars['var']['style'])) $this->magic_vars['var']['style'] = '';$_tmp = $this->magic_vars['var']['style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?><? endif; ?></li>
					</ul>
					<div class="list-btnbox">
						<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==3): ?>
						<? if (!isset($this->magic_vars['var']['repayment_account'])) $this->magic_vars['var']['repayment_account']='';if (!isset($this->magic_vars['var']['repayment_yesaccount'])) $this->magic_vars['var']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['repayment_account'] ==  $this->magic_vars['var']['repayment_yesaccount']): ?>
						<a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="btn-action">�ѻ���</a>
						<? else: ?>
						<a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="btn-action">������</a>
						<? endif; ?>
						<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==5): ?>
						<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/cancel_repayment.jpg" />
						<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==4): ?>
						<a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="btn-action">����ʧ��</a>
						<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==2): ?>
						<a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="btn-action">�ȴ�����</a>
						<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale'] < 100): ?>
							<? if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;if (  $this->magic_vars['var']['is_lz']==1): ?>
							<a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="btn-action">�����Ϲ�</a>
							<? else: ?>
							<a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="btn-action">����Ͷ��</a>
							<? endif; ?>
						<? else: ?>
							<? if (!isset($this->magic_vars['var']['is_lz'])) $this->magic_vars['var']['is_lz']=''; ;if (  $this->magic_vars['var']['is_lz']==1): ?>
							<a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="btn-action">���Ϲ���</a>
							<? else: ?>
							<a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" class="btn-action">�ȴ�����</a>
							<? endif; ?>
					<? endif; ?>
					</div>
				</div>
			<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
							
						</div>
						<!-- end ���Ŵ��� -->
					</div>
					<div class="fr clum_r">
                    	<!-- ��ƹ����ƽ� -->
						<div class="module_03">
							<div class="hd">
								<h3><s class="icon_tj"></s>��ƹ����ƽ�</h3>
							</div>
							<div class="bg">
								<ul class="list_lc">
									<? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'20','type_id'=>'3');$default = '';  include_once(ROOT_PATH.'core/user.class.php');$this->magic_vars['magic_result'] = userClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
						
						<li>
						<div class="clearfix posit_rel">
											<div class="info">
											<h4 class="name m_b_10"><? if (!isset($this->magic_vars['var']['username'])) $this->magic_vars['var']['username'] = ''; echo $this->magic_vars['var']['username']; ?></h4>
								<p class="item">������<? if (!isset($this->magic_vars['var']['realname'])) $this->magic_vars['var']['realname'] = ''; echo $this->magic_vars['var']['realname']; ?></p>
								<p class="item">�绰:<? if (!isset($this->magic_vars['var']['phone'])) $this->magic_vars['var']['phone'] = ''; echo $this->magic_vars['var']['phone']; ?></p>
								<p class="item m_b_6"><label>�����Ǽ���</label><span class="star"><s class="star_01"></s><s class="star_01"></s><s class="star_01"></s><s class="star_01"></s><s class="star_01"></s></span></p>
                                 <p class="zx m_b_10"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<? if (!isset($this->magic_vars['var']['qq'])) $this->magic_vars['var']['qq'] = ''; echo $this->magic_vars['var']['qq']; ?>&site=qq&menu=yes">
                                                    <img border="0" src="http://wpa.qq.com/pa?p=2:<? if (!isset($this->magic_vars['var']['qq'])) $this->magic_vars['var']['qq'] = ''; echo $this->magic_vars['var']['qq']; ?>:41" alt="���������ҷ���Ϣ" title="���������ҷ���Ϣ"/></a>
                                                    </p>
                  				
								<!-- <p class="item"><? if (!isset($this->magic_vars['var']['content'])) $this->magic_vars['var']['content'] = ''; echo $this->magic_vars['var']['content']; ?></p> -->
								</div>
						<b class="photo"><img src="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = '';$_tmp = $this->magic_vars['var']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");echo $_tmp;unset($_tmp); ?>" width="100" height="99" /></b>
							
							
						</div>
						
							
					</li>
					<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
								</ul>
							</div>
						</div>
						<!-- end ��ƹ����ƽ� -->
                    	<!-- �� �� -->
   
             <div class="module_04 m_b_10">
                <div class="hd">
                    <span class="float_left"><h3><s class="icon_gg"></s>�� ��</h3></span><a href="/gonggao/index.html" class="float_right">[����]</a>
                </div>
                <div class="bg">
                <ul class="noteList">
                    <? $this->magic_vars['varlgnore'] = array();$this->magic_vars['varsite_id'] = array(22); if(!isset($this->magic_vars['_G']['site_list'])) $this->magic_vars['_G']['site_list']= array(); $_from = $this->magic_vars['_G']['site_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from,'array'); } if (count($_from)):
 $i=0;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
 if ($this->magic_vars['var']['pid']!=''  && in_array($this->magic_vars['var']['site_id'],$this->magic_vars['varsite_id']) ): $this->magic_vars['key'] =$i?>
                    <? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'6','site_var'=>'var','var'=>'item','status'=>'1','site_id'=>$this->magic_vars['var']['site_id']);$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
                        <li class="clearfix"><a href="<? if (!isset($this->magic_vars['item']['site_nid'])) $this->magic_vars['item']['site_nid'] = ''; echo $this->magic_vars['item']['site_nid']; ?>/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html"><span  class="float_left"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"10");echo $_tmp;unset($_tmp); ?></span><span class="float_right">12.15</span></a></li>
                    <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
                    <? $i++;endif;endforeach; endif;  unset($_from);unset($_magic_vars);unset($this->magic_vars['lgnore']); ?>	
                </ul>
                </div>
            </div>
              <!-- end �� �� -->
            <div class="module_04 m_b_10">
                <div class="hd">
                    <span class="float_left"><h3>�ɹ�����</h3></span><a href="/invest/index.html?type=success" class="float_right">[����]</a>
                </div>
                <div class="bg" id="success_borrow">
                    <ul class="notelist">
                        <? $this->magic_vars['query_type']='GetList';$data = array('type'=>'fast','var'=>'var','limit'=>'6','status'=>'3','order'=>'account_down','recMonth'=>'1');$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
                        <li class="clearfix">
                            <img src="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = '';$_tmp = $this->magic_vars['var']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"");echo $_tmp;unset($_tmp); ?>" alt="" class="sucimg">
                            <dl>
                                <dt><a href="invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" target="_blank" title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = '';$_tmp = $this->magic_vars['var']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"13");echo $_tmp;unset($_tmp); ?></a></dt>
                                <dd>��<b><? if (!isset($this->magic_vars['var']['account'])) $this->magic_vars['var']['account'] = ''; echo $this->magic_vars['var']['account']; ?>Ԫ</b></dd>
                                <dd>���ޣ�<? if (!isset($this->magic_vars['var']['time_limit'])) $this->magic_vars['var']['time_limit'] = '';$_tmp = $this->magic_vars['var']['time_limit'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_time_limit");echo $_tmp;unset($_tmp); ?></dd>
                            </dl>
                        </li>
                        <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
                    </ul>
                </div>
            </div>
            <div class="module_04 m_b_10" style="margin-bottom: 0;">
                <div class="hd">
                   <span class="float_left"><h3> ��������</h3></span>
                    <a href="/newsdongtai/index.html" class="float_right">[����]</a>
                </div>
                <div class="bg">
                <ul class="nodelist">
                    <? $this->magic_vars['varlgnore'] = array();$this->magic_vars['varsite_id'] = array(11); if(!isset($this->magic_vars['_G']['site_list'])) $this->magic_vars['_G']['site_list']= array(); $_from = $this->magic_vars['_G']['site_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from,'array'); } if (count($_from)):
 $i=0;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
 if ($this->magic_vars['var']['pid']!=''  && in_array($this->magic_vars['var']['site_id'],$this->magic_vars['varsite_id']) ): $this->magic_vars['key'] =$i?>
                    <? $this->magic_vars['query_type']='GetList';$data = array('limit'=>'7','site_var'=>'var','var'=>'item','status'=>'1','site_id'=>$this->magic_vars['var']['site_id']);$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['item']):
?>
                        <li><a href="<? if (!isset($this->magic_vars['item']['site_nid'])) $this->magic_vars['item']['site_nid'] = ''; echo $this->magic_vars['item']['site_nid']; ?>/a<? if (!isset($this->magic_vars['item']['id'])) $this->magic_vars['item']['id'] = ''; echo $this->magic_vars['item']['id']; ?>.html"><? if (!isset($this->magic_vars['item']['name'])) $this->magic_vars['item']['name'] = '';$_tmp = $this->magic_vars['item']['name'];$_tmp = $this->magic_modifier("truncate",$_tmp,"18");echo $_tmp;unset($_tmp); ?></a></li>
                    <? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
                    <? $i++;endif;endforeach; endif;  unset($_from);unset($_magic_vars);unset($this->magic_vars['lgnore']); ?>	
                </ul>
                </div>
            </div>
                       
                       
                        <!-- �ٷ�΢��  -->
                        <div class="weibo">
                        	<div class="hd">�ٷ�΢��</div>
                            <div class="bg clearfix">
                            	<p class="txt fl m_r_20">΢��ɨ���ά�룬���ÿ�վ�ѡ��Ѷ</p>
                                <p class="pic fl"><img src="" width="100" height="100" alt="��ά��"></p>
                            </div>
                        </div>
                        <!-- end �ٷ�΢��  -->
                    </div>
				</div>
				<!-- end 2�� -->
			
			<!-- end ��Ҫ���� -->		
			</div>
			
		
		<script type="text/javascript">

jQuery(function(){
	jQuery("[rel='tooltip']").tooltip();
	jQuery('#login_btn').click(function(){
		jQuery('#login_sub').submit();
	});
});

</script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/tooltip.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/popover.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/transition.js"></script>

<!--main end-->
<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>
