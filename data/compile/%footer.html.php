<link rel=stylesheet type="text/css" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/common.css">
<div class="footbg">
    <div class="footer">
        <div class="friendbox">
            <dl class="clearfix hezuo">
                <dt>
                    �������
                </dt>
                <?  if(!isset($this->magic_vars['_G']['partner']) || $this->magic_vars['_G']['partner']=='') $this->magic_vars['_G']['partner'] = array();  $_from = $this->magic_vars['_G']['partner']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
                <dd>
                	<a href="<? if (!isset($this->magic_vars['item']['url'])) $this->magic_vars['item']['url'] = ''; echo $this->magic_vars['item']['url']; ?>" target="_blank" id="partner_<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>"></a>
                    <img src="<? if (!isset($this->magic_vars['item']['logoimg'])) $this->magic_vars['item']['logoimg']=''; ;if (  $this->magic_vars['item']['logoimg']!=''): ?>/<? if (!isset($this->magic_vars['item']['logoimg'])) $this->magic_vars['item']['logoimg'] = ''; echo $this->magic_vars['item']['logoimg']; ?><? else: ?><? if (!isset($this->magic_vars['item']['logo'])) $this->magic_vars['item']['logo'] = ''; echo $this->magic_vars['item']['logo']; ?><? endif; ?>" alt="" class="fdimg" width="152" height="36" onclick="document.getElementById('partner_<? if (!isset($this->magic_vars['key'])) $this->magic_vars['key'] = ''; echo $this->magic_vars['key']; ?>').click()" style="cursor:pointer">
                </dd>
                <? endforeach; endif; unset($_from); ?>
            </dl>
            <dl class="clearfix youqing">
                <dt>
                    ��������
                </dt>
                <?  if(!isset($this->magic_vars['_G']['blogroll']) || $this->magic_vars['_G']['blogroll']=='') $this->magic_vars['_G']['blogroll'] = array();  $_from = $this->magic_vars['_G']['blogroll']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['item']):
?>
                <dd><a href="<? if (!isset($this->magic_vars['item']['url'])) $this->magic_vars['item']['url'] = ''; echo $this->magic_vars['item']['url']; ?>" target="_blank"><? if (!isset($this->magic_vars['item']['webname'])) $this->magic_vars['item']['webname'] = ''; echo $this->magic_vars['item']['webname']; ?></a></dd>
                <? endforeach; endif; unset($_from); ?>
            </dl>
          
        </div>
        <div class="foottxt clearfix">
            <ul>
                <li class="ft-title title1">��������</li>
                <li>
                    <a href="#">��˾����</a>
                </li>
                <li>
                    <a href="#">��˾����</a>
                </li>
                <li>
                    <a href="#">��˾����</a>
                </li>
                <li>
                    <a href="#">��˾����</a>
                </li>
            </ul>
            <ul>
                <li class="ft-title title2">��������</li>
                <li>
                    <a href="#">��˾����</a>
                </li>
                <li>
                    <a href="#">��˾����</a>
                </li>
                <li>
                    <a href="#">��˾����</a>
                </li>
                <li>
                    <a href="#">��˾����</a>
                </li>
            </ul>
            <ul>
                <li class="ft-title title3">��������</li>
                <li>
                    <a href="#">��˾����</a>
                </li>
                <li>
                    <a href="#">��˾����</a>
                </li>
                <li>
                    <a href="#">��˾����</a>
                </li>
                <li>
                    <a href="#">��˾����</a>
                </li>
            </ul>
            <ul>
                <li class="ft-title title4">��������</li>
                <li>
                    <a href="#">��˾����</a>
                </li>
                <li>
                    <a href="#">��˾����</a>
                </li>
                <li>
                    <a href="#">��˾����</a>
                </li>
                <li>
                    <a href="#">��˾����</a>
                </li>
            </ul>
            <img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/footlogo.png" alt="" class="footlogo">
        </div>
    </div>

    <div class="message">
        <div class="messagetxt">
            <p>
                <a href="#">���ں�˶��Ͷ</a>��|��<a href="#">�ٷ�΢��</a>��|��<a href="#">��˾֤��</a>��|��<a href="#">��ƸӢ��</a>��|��<a href="#">��ϵ����</a>��|����˶��Ͷ��Ȩ���� 2013��
            </p>
            <p>
                ��ַ��<? if (!isset($this->magic_vars['_G']['system']['con_address'])) $this->magic_vars['_G']['system']['con_address'] = ''; echo $this->magic_vars['_G']['system']['con_address']; ?>  �ͷ����ߣ�<? if (!isset($this->magic_vars['_G']['system']['con_fuwutel'])) $this->magic_vars['_G']['system']['con_fuwutel'] = ''; echo $this->magic_vars['_G']['system']['con_fuwutel']; ?>
            </p>
        </div>
    </div>
</div>


 <!-- 

<div id=floatTools class=float0831>
  <div class=floatL><a style="display: none" id=aFloatTools_Show class=btnOpen 
title=�鿴���߿ͷ� 
onclick="javascript:jQuery('#divFloatToolsView').animate({width: 'show', opacity: 'show'}, 'normal',function(){ jQuery('#divFloatToolsView').show();kf_setCookie('RightFloatShown', 0, '', '/', 'www.istudy.com.cn'); });jQuery('#aFloatTools_Show').attr('style','display:none');jQuery('#aFloatTools_Hide').attr('style','display:block');" 
href="javascript:void(0);">չ��</a> <a id=aFloatTools_Hide class=btnCtn 
title=�ر����߿ͷ� 
onclick="javascript:jQuery('#divFloatToolsView').animate({width: 'hide', opacity: 'hide'}, 'normal',function(){jQuery('#divFloatToolsView').hide();kf_setCookie('RightFloatShown', 1, '', '/', 'www.istudy.com.cn'); });jQuery('#aFloatTools_Show').attr('style','display:block');jQuery('#aFloatTools_Hide').attr('style','display:none');" 
href="javascript:void(0);">����</a> </div>
  <div id=divFloatToolsView class=floatR style="display: none">
    <div class=tp></div>
    <div class=cn>
      <ul>
        <li class=top>
          <H3 class=titZx>QQ��ѯ</H3>
        </li>
        <li><span class=icoZx style="color:#30b2ed;font-size:14px;font-weight:bold;">���ݴ�</span> </li>
         <li style="text-align:left;"><a target="_blank"  href="http://wpa.qq.com/msgrd?v=3&uin=2595175761&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2595175761:45" alt="���������ҷ���Ϣ" title="���������ҷ���Ϣ">&nbsp;&nbsp;�ͷ�-01</a></li>
		<li style="text-align:left;"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2595175761&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2595175761:45" alt="���������ҷ���Ϣ" title="���������ҷ���Ϣ">&nbsp;&nbsp;�ͷ�-02</a></li>          
		<li style="text-align:left;"><a target="_blank"  href="http://wpa.qq.com/msgrd?v=3&uin=2595175761&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2595175761:45" alt="���������ҷ���Ϣ" title="���������ҷ���Ϣ">&nbsp;&nbsp;�ͷ�-03</a></li>
        <li style="text-align:left;"><a target="_blank"    href="http://wpa.qq.com/msgrd?v=3&uin=2595175761&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2595175761:45" alt="���������ҷ���Ϣ" title="���������ҷ���Ϣ">&nbsp;&nbsp;���-04</a></li>  
        <li style="text-align:left;"><a target="_blank"    href="http://wpa.qq.com/msgrd?v=3&uin=2595175761&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2595175761:45" alt="���������ҷ���Ϣ" title="���������ҷ���Ϣ">&nbsp;&nbsp;���-05</a></li>
        <li style="text-align:left;"><a target="_blank"   href="http://wpa.qq.com/msgrd?v=3&uin=2595175761&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2595175761:45" alt="���������ҷ���Ϣ" title="���������ҷ���Ϣ">&nbsp;&nbsp;���-06</a></li>
		
         
							 
		
      </ul>
    </div>
  </div>
</div>

<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/kefu.js"></script>

 -->
</body>
</html>