<link rel=stylesheet type="text/css" href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/common.css">
<div class="footbg">
    <div class="footer">
        <div class="friendbox">
            <dl class="clearfix hezuo">
                <dt>
                    合作伙伴
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
                    友情链接
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
                <li class="ft-title title1">关于我们</li>
                <li>
                    <a href="#">公司介绍</a>
                </li>
                <li>
                    <a href="#">公司介绍</a>
                </li>
                <li>
                    <a href="#">公司介绍</a>
                </li>
                <li>
                    <a href="#">公司介绍</a>
                </li>
            </ul>
            <ul>
                <li class="ft-title title2">关于我们</li>
                <li>
                    <a href="#">公司介绍</a>
                </li>
                <li>
                    <a href="#">公司介绍</a>
                </li>
                <li>
                    <a href="#">公司介绍</a>
                </li>
                <li>
                    <a href="#">公司介绍</a>
                </li>
            </ul>
            <ul>
                <li class="ft-title title3">关于我们</li>
                <li>
                    <a href="#">公司介绍</a>
                </li>
                <li>
                    <a href="#">公司介绍</a>
                </li>
                <li>
                    <a href="#">公司介绍</a>
                </li>
                <li>
                    <a href="#">公司介绍</a>
                </li>
            </ul>
            <ul>
                <li class="ft-title title4">关于我们</li>
                <li>
                    <a href="#">公司介绍</a>
                </li>
                <li>
                    <a href="#">公司介绍</a>
                </li>
                <li>
                    <a href="#">公司介绍</a>
                </li>
                <li>
                    <a href="#">公司介绍</a>
                </li>
            </ul>
            <img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/footlogo.png" alt="" class="footlogo">
        </div>
    </div>

    <div class="message">
        <div class="messagetxt">
            <p>
                <a href="#">关于合硕成投</a>　|　<a href="#">官方微博</a>　|　<a href="#">公司证件</a>　|　<a href="#">招聘英才</a>　|　<a href="#">联系我们</a>　|　合硕成投版权所有 2013年
            </p>
            <p>
                地址：<? if (!isset($this->magic_vars['_G']['system']['con_address'])) $this->magic_vars['_G']['system']['con_address'] = ''; echo $this->magic_vars['_G']['system']['con_address']; ?>  客服热线：<? if (!isset($this->magic_vars['_G']['system']['con_fuwutel'])) $this->magic_vars['_G']['system']['con_fuwutel'] = ''; echo $this->magic_vars['_G']['system']['con_fuwutel']; ?>
            </p>
        </div>
    </div>
</div>


 <!-- 

<div id=floatTools class=float0831>
  <div class=floatL><a style="display: none" id=aFloatTools_Show class=btnOpen 
title=查看在线客服 
onclick="javascript:jQuery('#divFloatToolsView').animate({width: 'show', opacity: 'show'}, 'normal',function(){ jQuery('#divFloatToolsView').show();kf_setCookie('RightFloatShown', 0, '', '/', 'www.istudy.com.cn'); });jQuery('#aFloatTools_Show').attr('style','display:none');jQuery('#aFloatTools_Hide').attr('style','display:block');" 
href="javascript:void(0);">展开</a> <a id=aFloatTools_Hide class=btnCtn 
title=关闭在线客服 
onclick="javascript:jQuery('#divFloatToolsView').animate({width: 'hide', opacity: 'hide'}, 'normal',function(){jQuery('#divFloatToolsView').hide();kf_setCookie('RightFloatShown', 1, '', '/', 'www.istudy.com.cn'); });jQuery('#aFloatTools_Show').attr('style','display:block');jQuery('#aFloatTools_Hide').attr('style','display:none');" 
href="javascript:void(0);">收缩</a> </div>
  <div id=divFloatToolsView class=floatR style="display: none">
    <div class=tp></div>
    <div class=cn>
      <ul>
        <li class=top>
          <H3 class=titZx>QQ咨询</H3>
        </li>
        <li><span class=icoZx style="color:#30b2ed;font-size:14px;font-weight:bold;">温州贷</span> </li>
         <li style="text-align:left;"><a target="_blank"  href="http://wpa.qq.com/msgrd?v=3&uin=2595175761&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2595175761:45" alt="点击这里给我发消息" title="点击这里给我发消息">&nbsp;&nbsp;客服-01</a></li>
		<li style="text-align:left;"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2595175761&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2595175761:45" alt="点击这里给我发消息" title="点击这里给我发消息">&nbsp;&nbsp;客服-02</a></li>          
		<li style="text-align:left;"><a target="_blank"  href="http://wpa.qq.com/msgrd?v=3&uin=2595175761&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2595175761:45" alt="点击这里给我发消息" title="点击这里给我发消息">&nbsp;&nbsp;客服-03</a></li>
        <li style="text-align:left;"><a target="_blank"    href="http://wpa.qq.com/msgrd?v=3&uin=2595175761&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2595175761:45" alt="点击这里给我发消息" title="点击这里给我发消息">&nbsp;&nbsp;审核-04</a></li>  
        <li style="text-align:left;"><a target="_blank"    href="http://wpa.qq.com/msgrd?v=3&uin=2595175761&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2595175761:45" alt="点击这里给我发消息" title="点击这里给我发消息">&nbsp;&nbsp;审核-05</a></li>
        <li style="text-align:left;"><a target="_blank"   href="http://wpa.qq.com/msgrd?v=3&uin=2595175761&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2595175761:45" alt="点击这里给我发消息" title="点击这里给我发消息">&nbsp;&nbsp;审核-06</a></li>
		
         
							 
		
      </ul>
    </div>
  </div>
</div>

<script type="text/javascript" src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/kefu.js"></script>

 -->
</body>
</html>