<?php
!defined('IN_TEMPLATE') && exit('Access Denied');
?>
<? $this->magic_include(array('file' => "user_header.html", 'vars' => array()));?>
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/modal.css" rel="stylesheet" type="text/css" />
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/auto_user.css" rel="stylesheet" type="text/css" />

<style type="text/css">
.auto_borrow_style tr{line-height:30px}
</style>


<!--�û����ĵ�����Ŀ ��ʼ-->
<div id="main" class="clearfix">
<div class="wrap950 ">
	<!--��ߵĵ��� ��ʼ-->
	<div class="user_left">
		<? $this->magic_include(array('file' => "user_menu.html", 'vars' => array()));?>
	</div>
	<!--��ߵĵ��� ����-->
	
	<!--�ұߵ����� ��ʼ-->
	<div class="user_right">
		<div class="user_right_menu">
			<ul id="tab" class="list-tab clearfix">
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="auto"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/auto">�Զ�Ͷ���б�</a></li>
				<li <? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="auto_new"): ?> class="cur"<? endif; ?>><a href="<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/auto_new">����Զ�Ͷ��</a></li>
			</ul>
		</div>
		
		<div class="user_right_main" style="text-align:left;">
		<!--�Զ�Ͷ�� ��ʼ-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;if (  $this->magic_vars['_U']['query_type']=="auto"): ?>
		<div class="user_help alert">
1���Զ�Ͷ������������1������<br />
2�����жϵ��з��������Ĺ���ʱ��Ϊ���Զ�Ͷ�꣬�������Ĺ���������á� 
</div>
 
<!--������ϸ ����-->
		<table  border="0"  cellspacing="1" class="table table-striped  table-condensed" >
			  <form action="" method="post">
				<tr class="head" >
					<td>����</td>
					<td>�Ƿ�����</td>
					<td>Ͷ������</td>
					<td>Ͷ����</td>
					<td>���ʷ�Χ</td>
					<td>�������</td>
					<td>���û���</td>
					<td>��Ľ���</td>
					<td>�Ƿ��Ѻ��</td>
                    <td>�Ƿ����ñ�</td>
                    <td>�Ƿ�ֵ��</td>
					<td>����</td>
				</tr>
				<? $this->magic_vars['query_type']='GetAutoList';$data = array('limit'=>'all','order'=>'order','user_id'=>$this->magic_vars['_G']['user_id']);$default = '';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetAutoList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
				<span style="display:none"><? if (!isset($this->magic_vars['i'])) $this->magic_vars['i'] = ''; echo $this->magic_vars['i']++; ?></span>
				<tr <? if (!isset($this->magic_vars['key'])) $this->magic_vars['key']=''; ;if (  $this->magic_vars['key']%2==1): ?> class="tr1"<? endif; ?>>
					<td ><? if (!isset($this->magic_vars['i'])) $this->magic_vars['i'] = ''; echo $this->magic_vars['i']; ?></td>
					<td ><? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==1): ?>����<? else: ?>δ����<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['var']['tender_type'])) $this->magic_vars['var']['tender_type']=''; ;if (  $this->magic_vars['var']['tender_type']==1): ?>�����Ͷ��<? else: ?>������Ͷ��<? endif; ?></td>
					<td>��<? if (!isset($this->magic_vars['var']['tender_account'])) $this->magic_vars['var']['tender_account'] = ''; echo $this->magic_vars['var']['tender_account']; ?></td>
					<td><!--<? if (!isset($this->magic_vars['var']['tender_scale'])) $this->magic_vars['var']['tender_scale'] = ''; echo $this->magic_vars['var']['tender_scale']; ?>-->   <? if (!isset($this->magic_vars['var']['apr_first'])) $this->magic_vars['var']['apr_first'] = ''; echo $this->magic_vars['var']['apr_first']; ?>% ~ <? if (!isset($this->magic_vars['var']['apr_last'])) $this->magic_vars['var']['apr_last'] = ''; echo $this->magic_vars['var']['apr_last']; ?>%</td>
					<td><? if (!isset($this->magic_vars['var']['timelimit_status'])) $this->magic_vars['var']['timelimit_status']=''; ;if (  $this->magic_vars['var']['timelimit_status']==1): ?><? if (!isset($this->magic_vars['var']['timelimit_month_first'])) $this->magic_vars['var']['timelimit_month_first'] = ''; echo $this->magic_vars['var']['timelimit_month_first']; ?>~<? if (!isset($this->magic_vars['var']['timelimit_month_last'])) $this->magic_vars['var']['timelimit_month_last'] = ''; echo $this->magic_vars['var']['timelimit_month_last']; ?><? else: ?>������<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['var']['borrow_credit_status'])) $this->magic_vars['var']['borrow_credit_status']=''; ;if (  $this->magic_vars['var']['borrow_credit_status']==1): ?><? if (!isset($this->magic_vars['var']['borrow_credit_first'])) $this->magic_vars['var']['borrow_credit_first'] = ''; echo $this->magic_vars['var']['borrow_credit_first']; ?>~<? if (!isset($this->magic_vars['var']['borrow_credit_last'])) $this->magic_vars['var']['borrow_credit_last'] = ''; echo $this->magic_vars['var']['borrow_credit_last']; ?><? else: ?>������<? endif; ?></td>
					<td><? if (!isset($this->magic_vars['var']['award_status'])) $this->magic_vars['var']['award_status']=''; ;if (  $this->magic_vars['var']['award_status']==1): ?><? if (!isset($this->magic_vars['var']['award_first'])) $this->magic_vars['var']['award_first'] = ''; echo $this->magic_vars['var']['award_first']; ?>~<? if (!isset($this->magic_vars['var']['award_last'])) $this->magic_vars['var']['award_last'] = ''; echo $this->magic_vars['var']['award_last']; ?><? else: ?>������<? endif; ?></td>
                    <td><? if (!isset($this->magic_vars['var']['fast_status'])) $this->magic_vars['var']['fast_status']=''; ;if (  $this->magic_vars['var']['fast_status']==1): ?>��<? else: ?>������<? endif; ?></td>
                    <td><? if (!isset($this->magic_vars['var']['xin_status'])) $this->magic_vars['var']['xin_status']=''; ;if (  $this->magic_vars['var']['xin_status']==1): ?>��<? else: ?>������<? endif; ?></td>
                    <td><? if (!isset($this->magic_vars['var']['jin_status'])) $this->magic_vars['var']['jin_status']=''; ;if (  $this->magic_vars['var']['jin_status']==1): ?>��<? else: ?>������<? endif; ?></td>
					<td><a href="/index.php?user&q=code/borrow/auto_new&id=<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>">�޸�</a> <a href="#" onclick="javascript:if(confirm('��ȷ��Ҫɾ�����Զ�Ͷ����')) location.href='<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/auto_del&id=<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>'">ɾ��</a></td>
				</tr>
				<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
			</form>	
		</table>
	
		</div>
		
		
		<!--�Զ�Ͷ�� ����-->
		<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type']=''; ;elseif (  $this->magic_vars['_U']['query_type']=="auto_new"): ?>
		<form  method="post" name="form1"  action="/index.php?user&q=code/borrow/auto_add" >
		<div class="user_help alert">
		�Զ�Ͷ��ʱ��ֻ������������ѡ�������ʱϵͳ�Ż�Ϊ���Զ�Ͷ�ꡣ
		</div>
		 <div  style=" width: 780px; margin:0 auto; padding-bottom:20px;"> 
        <div class="sideT" >
            <div class="user_right_title"> 
                <span class=""><strong style="color:red">��Ч״̬</strong></span></div> 
            <div class="set_table" style=" clear:both; float:left"> 
			
            <table border="0" style="text-align:left" class='auto_borrow_style'> 
                    <tr> 
                        <th> 
                            ״̬��
                        </th> 
                        <td> 
                           <input id="status" type="checkbox" name="status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['status'])) $this->magic_vars['_U']['auto_result']['status']=''; ;if (  $this->magic_vars['_U']['auto_result']['status']==1): ?> checked="checked" <? endif; ?>/><label for="">�Ƿ�����</label><span>(�����ѡ����ǰ���򲻻���Ч)</span> 
                        </td> 
                    </tr> 
                    <tr> 
                        <th> 
                            ��
                        </th> 
                        <td style="width:550px"> 
                            <span style='display:none;'><input  type="radio" name="tender_type" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['tender_type'])) $this->magic_vars['_U']['auto_result']['tender_type']='';if (!isset($this->magic_vars['_U']['auto_result']['tender_type'])) $this->magic_vars['_U']['auto_result']['tender_type']=''; ;if (  $this->magic_vars['_U']['auto_result']['tender_type']==1 ||  $this->magic_vars['_U']['auto_result']['tender_type']==""): ?> checked="checked"<? endif; ?>  /></span> <label for="tender_type">ÿ��Ͷ��</label> 
                            <input name="tender_account" type="text" maxlength="5" id="tender_account"  style="width:80px;" value="<? if (!isset($this->magic_vars['_U']['auto_result']['tender_account'])) $this->magic_vars['_U']['auto_result']['tender_account'] = ''; echo $this->magic_vars['_U']['auto_result']['tender_account']; ?>" />Ԫ<span>(����50Ԫ)</span> 
                           <!-- <span ><input  type="radio" name="tender_type" value="2"  <? if (!isset($this->magic_vars['_U']['auto_result']['tender_type'])) $this->magic_vars['_U']['auto_result']['tender_type']=''; ;if (  $this->magic_vars['_U']['auto_result']['tender_type']==2): ?> checked="checked"<? endif; ?>  /><label for="tender_type">������Ͷ��</label></span> 
                            <input name="tender_scale" type="text" value="<? if (!isset($this->magic_vars['_U']['auto_result']['tender_scale'])) $this->magic_vars['_U']['auto_result']['tender_scale'] = ''; echo $this->magic_vars['_U']['auto_result']['tender_scale']; ?>" maxlength="2"  style="width:80px;" />%<span>(ֻ����1%~<span id="">20</span>%)</span> -->
                        </td> 
                    </tr> 
                    <tr> 
                        <th> 
                        </th> 
                        <td  style="width:600px;"> 
                         <span style="color:Red;">���������ĵ����Ͷ�������Ա�ĵ������Ϊ׼�����С�ڱ�ĵ���СͶ������Ͷ��
                     
                        </span>
                      <br /> 
                        <span>����ǰ��������ʱϵͳ��Ϊ���Զ�Ͷ��Ķ�ȣ�Ͷ����ͱ�����ֻ��Ϊ����0��Ϊ��������</span>
                       </td> 
                        </tr> 
                    </table> 
            </div> 
            <!--
            <div class="user_right_title"> 
                <span class=""><strong style="color:red">�������Ϣ����</strong></span></div> 
            <div class="set_table" style=" clear:both;float:left"> 
                <table border="0" style="text-align:left"> 
                    <tr align="left"> 
                        <th> 
                            ��֤ѡ�
                        </th> 
                        <td> 
                            <input id="video_status" type="checkbox" name="video_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['video_status'])) $this->magic_vars['_U']['auto_result']['video_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['video_status']==1): ?> checked="checked"<? endif; ?> /><label for="video_status">����ͨ����Ƶ��֤</label> 
                            <input id="scene_status" type="checkbox" name="scene_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['scene_status'])) $this->magic_vars['_U']['auto_result']['scene_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['scene_status']==1): ?> checked="checked"<? endif; ?> /><label for="scene_status">����ͨ���ֳ���֤</label> 
                        </td> 
                        <td> 
                           <span>��ѡ����û�д������ơ�</span> 
                        </td> 
                    </tr> -->
                   <!--
                    <tr> 
                        <th> 
                            ��ϵѡ�
                        </th> 
                        <td> 
                            <input id="my_friend" type="checkbox" name="my_friend" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['my_friend'])) $this->magic_vars['_U']['auto_result']['my_friend']=''; ;if (  $this->magic_vars['_U']['auto_result']['my_friend']==1): ?> checked="checked"<? endif; ?>/><label for="my_friend">�������ҵĺ���</label> 
                            <input id="not_black" type="checkbox" name="not_black" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['not_black'])) $this->magic_vars['_U']['auto_result']['not_black']=''; ;if (  $this->magic_vars['_U']['auto_result']['not_black']==1): ?> checked="checked"<? endif; ?>/><label for="not_black">���벻���ҵĺ�������</label> 
                        </td> 
                        <td> 
                           <span>(��ѡ����û�д�������)</span> 
                        </td> 
                    </tr> 
                    <tr> 
                        <th> 
                            �������ã�
                        </th> 
                        <td> 
                            <input id="late_status" type="checkbox" name="late_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['late_status'])) $this->magic_vars['_U']['auto_result']['late_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_status']==1): ?> checked="checked"<? endif; ?> /><label for="late_status">���ڴ�������С�ڵ���(��)</label> 
                            <select name="late_times" id="late_times" style=" width: 50px;"> 
	<option <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']='';if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==0 ||  $this->magic_vars['_U']['auto_result']['late_times']==""): ?> selected="selected"<? endif; ?> value="0">0</option> 
	<option value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==1): ?> selected="selected"<? endif; ?> >1</option> 
	<option value="2" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==2): ?> selected="selected"<? endif; ?> >2</option> 
	<option value="3" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==3): ?> selected="selected"<? endif; ?> >3</option> 
	<option value="4" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==4): ?> selected="selected"<? endif; ?> >4</option> 
	<option value="5" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==5): ?> selected="selected"<? endif; ?> >5</option> 
	<option value="6" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==6): ?> selected="selected"<? endif; ?> >6</option> 
	<option value="7" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==7): ?> selected="selected"<? endif; ?> >7</option> 
	<option value="8" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==8): ?> selected="selected"<? endif; ?> >8</option> 
	<option value="9" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==9): ?> selected="selected"<? endif; ?> >9</option> 
	<option value="10" <? if (!isset($this->magic_vars['_U']['auto_result']['late_times'])) $this->magic_vars['_U']['auto_result']['late_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['late_times']==10): ?> selected="selected"<? endif; ?> >10</option> 
 
</select> 
                            
                        </td> 
                        <td> 
                           <input id="dianfu_status" type="checkbox" name="dianfu_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_status'])) $this->magic_vars['_U']['auto_result']['dianfu_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_status']==1): ?> checked="checked"<? endif; ?>  /><label for="dianfu_status">���渶��������С�ڵ���(��)</label> 
                            <select name="dianfu_times" id="dianfu_times" style=" width: 50px;"> 
	<option <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']='';if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==0 ||  $this->magic_vars['_U']['auto_result']['dianfu_times']==""): ?> selected="selected"<? endif; ?> value="0">0</option> 
	<option value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==1): ?> selected="selected"<? endif; ?> >1</option> 
	<option value="2" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==2): ?> selected="selected"<? endif; ?> >2</option> 
	<option value="3" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==3): ?> selected="selected"<? endif; ?> >3</option> 
	<option value="4" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==4): ?> selected="selected"<? endif; ?> >4</option> 
	<option value="5" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==5): ?> selected="selected"<? endif; ?> >5</option> 
	<option value="6" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==6): ?> selected="selected"<? endif; ?> >6</option> 
	<option value="7" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==7): ?> selected="selected"<? endif; ?> >7</option> 
	<option value="8" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==8): ?> selected="selected"<? endif; ?> >8</option> 
	<option value="9" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==9): ?> selected="selected"<? endif; ?> >9</option> 
	<option value="10" <? if (!isset($this->magic_vars['_U']['auto_result']['dianfu_times'])) $this->magic_vars['_U']['auto_result']['dianfu_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['dianfu_times']==10): ?> selected="selected"<? endif; ?> >10</option> 
 
</select> 
                        </td> 
                    </tr> 
                    <tr> 
                        <th> 
                            ��������
                        </th> 
                        <td style="width:380px"> 
                            <input type="checkbox" name="black_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['black_status'])) $this->magic_vars['_U']['auto_result']['black_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_status']==1): ?> checked="checked"<? endif; ?> /><label for="black_status">����վ</label> 
                            <select name="black_user" id="black_user" style=" width: 90px;"> 
	<option value="0" <? if (!isset($this->magic_vars['_U']['auto_result']['black_user'])) $this->magic_vars['_U']['auto_result']['black_user']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_user']==0): ?> selected="selected"<? endif; ?>>�����û�</option> 
	<option value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['black_user'])) $this->magic_vars['_U']['auto_result']['black_user']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_user']==1): ?> selected="selected"<? endif; ?>>����VIP</option> 
	<option value="2" <? if (!isset($this->magic_vars['_U']['auto_result']['black_user'])) $this->magic_vars['_U']['auto_result']['black_user']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_user']==2): ?> selected="selected"<? endif; ?>>���ƻ�Ա</option> 
	<option value="3" <? if (!isset($this->magic_vars['_U']['auto_result']['black_user'])) $this->magic_vars['_U']['auto_result']['black_user']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_user']==3): ?> selected="selected"<? endif; ?>>���ƻ�Ա</option> 
	<option value="4" <? if (!isset($this->magic_vars['_U']['auto_result']['black_user'])) $this->magic_vars['_U']['auto_result']['black_user']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_user']==4): ?> selected="selected"<? endif; ?>>�׽��Ա</option> 
 
</select> 
                            <label for="black_times" id="black_times">��Ϊ��������������(��)</label> 
                            <select name="black_times" id="black_times" style=" width: 50px;"> 
	<option <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']='';if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==0 ||  $this->magic_vars['_U']['auto_result']['black_times']==""): ?> selected="selected"<? endif; ?> value="0">0</option> 
	<option value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==1): ?> selected="selected"<? endif; ?> >1</option> 
	<option value="2" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==2): ?> selected="selected"<? endif; ?> >2</option> 
	<option value="3" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==3): ?> selected="selected"<? endif; ?> >3</option> 
	<option value="4" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==4): ?> selected="selected"<? endif; ?> >4</option> 
	<option value="5" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==5): ?> selected="selected"<? endif; ?> >5</option> 
	<option value="6" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==6): ?> selected="selected"<? endif; ?> >6</option> 
	<option value="7" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==7): ?> selected="selected"<? endif; ?> >7</option> 
	<option value="8" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==8): ?> selected="selected"<? endif; ?> >8</option> 
	<option value="9" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==9): ?> selected="selected"<? endif; ?> >9</option> 
	<option value="10" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==10): ?> selected="selected"<? endif; ?> >10</option>
	<option value="15" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==15): ?> selected="selected"<? endif; ?>>15</option> 
	<option value="20" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==20): ?> selected="selected"<? endif; ?>>20</option> 
	<option value="25" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==25): ?> selected="selected"<? endif; ?>>25</option> 
	<option value="30" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==30): ?> selected="selected"<? endif; ?>>30</option> 
	<option value="40" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==40): ?> selected="selected"<? endif; ?>>40</option> 
	<option value="50" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==50): ?> selected="selected"<? endif; ?>>50</option> 
	<option value="80" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==80): ?> selected="selected"<? endif; ?>>80</option> 
	<option value="100" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==100): ?> selected="selected"<? endif; ?>>100</option> 
	<option value="150" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==150): ?> selected="selected"<? endif; ?>>150</option> 
	<option value="200" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==200): ?> selected="selected"<? endif; ?>>200</option> 
	<option value="250" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==250): ?> selected="selected"<? endif; ?>>250</option> 
	<option value="300" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==300): ?> selected="selected"<? endif; ?>>300</option> 
	<option value="500" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==500): ?> selected="selected"<? endif; ?>>500</option> 
	<option value="800" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==800): ?> selected="selected"<? endif; ?>>800</option> 
	<option value="1000" <? if (!isset($this->magic_vars['_U']['auto_result']['black_times'])) $this->magic_vars['_U']['auto_result']['black_times']=''; ;if (  $this->magic_vars['_U']['auto_result']['black_times']==1000): ?> selected="selected"<? endif; ?>>1000</option> 
 
</select><label for="" id="">��</label> 
                        </td> 
                        <td><input id="not_late_black" type="checkbox" value="1" name="not_late_black" <? if (!isset($this->magic_vars['_U']['auto_result']['not_late_black'])) $this->magic_vars['_U']['auto_result']['not_late_black']=''; ;if (  $this->magic_vars['_U']['auto_result']['not_late_black']==1): ?> checked="checked"<? endif; ?>/><label for="not_late_black">���벻����վ���ں�������</label></td> 
                        </tr> 
                    -->
                    <!--<tr> 
                        <th> 
                            ���û��֣�
                        </th> 
                        <td> 
                           <input id="borrow_credit_status" type="checkbox" name="borrow_credit_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['borrow_credit_status'])) $this->magic_vars['_U']['auto_result']['borrow_credit_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['borrow_credit_status']==1): ?> checked="checked"<? endif; ?>/><label for="borrow_credit_status">���ֱ���Ϊ</label> 
                           <input name="borrow_credit_first" type="text" value="<? if (!isset($this->magic_vars['_U']['auto_result']['borrow_credit_first'])) $this->magic_vars['_U']['auto_result']['borrow_credit_first'] = ''; echo $this->magic_vars['_U']['auto_result']['borrow_credit_first']; ?>" maxlength="6" id="borrow_credit_first" style="width:50px;" />~<input name="borrow_credit_last" type="text" value="<? if (!isset($this->magic_vars['_U']['auto_result']['borrow_credit_last'])) $this->magic_vars['_U']['auto_result']['borrow_credit_last'] = ''; echo $this->magic_vars['_U']['auto_result']['borrow_credit_last']; ?>" maxlength="6" id="borrow_credit_last"  style="width:50px;" /> 
                        </td> 
                       
                    </tr> 
                    
                </table> 
            </div> -->
            <div class="user_right_title"> 
                <span class=""><strong style="color:red">�����Ϣ����</strong></span></div> 
            <div class="set_table" style=" clear:both;"> 
                <table border="0" style="text-align:left; float:left" class='auto_borrow_style' > 
                <tr> 
                        <th> 
                            ���ʽ��
                        </th> 
                        <td> 
                            <input id="borrow_style_status" type="checkbox" name="borrow_style_status" value="1"  <? if (!isset($this->magic_vars['_U']['auto_result']['borrow_style_status'])) $this->magic_vars['_U']['auto_result']['borrow_style_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['borrow_style_status']==1): ?> checked="checked"<? endif; ?>/><label for="">����  ���ʽ����Ϊ</label> 
                            <select name="borrow_style" id="borrow_style" > 
	<option value="0"  <? if (!isset($this->magic_vars['_U']['auto_result']['borrow_style'])) $this->magic_vars['_U']['auto_result']['borrow_style']=''; ;if (  $this->magic_vars['_U']['auto_result']['borrow_style']==0): ?> selected="selected"<? endif; ?>>���·��ڻ���</option> 
 
</select> 
                        </td> 
                        <td><span>����ѡ����û�д������ơ�</span></td> 
                    </tr> 
                    <tr> 
                        <th> 
                            ������ޣ�
                        </th> 
                        <td style="width:400px"> 
                           <input id="timelimit_status"  name="timelimit_status" type="radio" value="0" checked="checked" <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_status'])) $this->magic_vars['_U']['auto_result']['timelimit_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_status']==0): ?> checked="checked"<? endif; ?>/><label for="">���޶�����</label> 
                           <input id="timelimit_status" type="radio" name="timelimit_status" value="1"   name="timelimit_status" <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_status'])) $this->magic_vars['_U']['auto_result']['timelimit_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_status']==1): ?> checked="checked"<? endif; ?>/><label for="">�����������</label> 
                        </td> 
                        <td> 
                            <span></span> 
                        </td> 
                    </tr> 
                <tr> 
                        <th> 
                        </th> 
                        <td style="width:400px"> 
                         �±꣺
		<select id="timelimit_month_first" name="timelimit_month_first" style=" width: 80px;"> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==0): ?> selected="selected"<? endif; ?> value="0">��Ͷ�±�</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==1): ?> selected="selected"<? endif; ?> value="1">1����</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==2): ?> selected="selected"<? endif; ?> value="2">2����</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==3): ?> selected="selected"<? endif; ?> value="3">3����</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==4): ?> selected="selected"<? endif; ?> value="4">4����</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==5): ?> selected="selected"<? endif; ?> value="5">5����</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==6): ?> selected="selected"<? endif; ?> value="6">6����</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==7): ?> selected="selected"<? endif; ?> value="7">7����</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==8): ?> selected="selected"<? endif; ?> value="8">8����</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==9): ?> selected="selected"<? endif; ?> value="9">9����</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==10): ?> selected="selected"<? endif; ?> value="10">10����</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==11): ?> selected="selected"<? endif; ?> value="11">11����</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_first'])) $this->magic_vars['_U']['auto_result']['timelimit_month_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_first']==12): ?> selected="selected"<? endif; ?> value="12">12����</option> 
		</select>
			~
		<select id="timelimit_month_last" name="timelimit_month_last" style=" width: 80px;"> 
			<option value="0"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==0): ?> selected="selected"<? endif; ?>>��Ͷ�±�</option> 
            <option value="1"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==1): ?> selected="selected"<? endif; ?>>1����</option> 
			<option value="2"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==2): ?> selected="selected"<? endif; ?>>2����</option> 
			<option value="3"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==3): ?> selected="selected"<? endif; ?>>3����</option> 
			<option value="4"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==4): ?> selected="selected"<? endif; ?>>4����</option> 
			<option value="5"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==5): ?> selected="selected"<? endif; ?>>5����</option> 
			<option value="6"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==6): ?> selected="selected"<? endif; ?>>6����</option> 
			<option value="7"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==7): ?> selected="selected"<? endif; ?>>7����</option> 
			<option value="8"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==8): ?> selected="selected"<? endif; ?>>8����</option> 
			<option value="9"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==9): ?> selected="selected"<? endif; ?>>9����</option> 
			<option value="10"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==10): ?> selected="selected"<? endif; ?>>10����</option> 
			<option value="11"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==11): ?> selected="selected"<? endif; ?>>11����</option> 
			<option value="12"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_month_last'])) $this->magic_vars['_U']['auto_result']['timelimit_month_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_month_last']==12): ?> selected="selected"<? endif; ?>>12����</option> 
		</select>
                                                    
                        <br/>��꣺
                        
	<select id="timelimit_day_first" name="timelimit_day_first" style=" width: 80px;"> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==0): ?> selected="selected"<? endif; ?> value="0">��Ͷ���</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==1): ?> selected="selected"<? endif; ?> value="1">1��</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==2): ?> selected="selected"<? endif; ?> value="2">2��</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==3): ?> selected="selected"<? endif; ?> value="3">3��</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==4): ?> selected="selected"<? endif; ?> value="4">4��</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==5): ?> selected="selected"<? endif; ?> value="5">5��</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==6): ?> selected="selected"<? endif; ?> value="6">6��</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==7): ?> selected="selected"<? endif; ?> value="7">7��</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==8): ?> selected="selected"<? endif; ?> value="8">8��</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==9): ?> selected="selected"<? endif; ?> value="9">9��</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==10): ?> selected="selected"<? endif; ?> value="10">10��</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==11): ?> selected="selected"<? endif; ?> value="11">11��</option> 
			<option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==12): ?> selected="selected"<? endif; ?> value="12">12��</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==13): ?> selected="selected"<? endif; ?> value="13">13��</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==14): ?> selected="selected"<? endif; ?> value="14">14��</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==15): ?> selected="selected"<? endif; ?> value="15">15��</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==16): ?> selected="selected"<? endif; ?> value="16">16��</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==17): ?> selected="selected"<? endif; ?> value="17">17��</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==18): ?> selected="selected"<? endif; ?> value="18">18��</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==19): ?> selected="selected"<? endif; ?> value="19">19��</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==20): ?> selected="selected"<? endif; ?> value="20">20��</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==21): ?> selected="selected"<? endif; ?> value="21">21��</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==22): ?> selected="selected"<? endif; ?> value="22">22��</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==23): ?> selected="selected"<? endif; ?> value="23">23��</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==24): ?> selected="selected"<? endif; ?> value="24">24��</option> 
            <option  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_first'])) $this->magic_vars['_U']['auto_result']['timelimit_day_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_first']==25): ?> selected="selected"<? endif; ?> value="25">25��</option> 
	</select>
		~
		<select id="timelimit_day_last" name="timelimit_day_last" style=" width: 80px;"> 
			<option value="0"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==0): ?> selected="selected"<? endif; ?>>��Ͷ���</option> 
            <option value="1"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==1): ?> selected="selected"<? endif; ?>>1��</option> 
			<option value="2"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==2): ?> selected="selected"<? endif; ?>>2��</option> 
			<option value="3"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==3): ?> selected="selected"<? endif; ?>>3��</option> 
			<option value="4"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==4): ?> selected="selected"<? endif; ?>>4��</option> 
			<option value="5"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==5): ?> selected="selected"<? endif; ?>>5��</option> 
			<option value="6"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==6): ?> selected="selected"<? endif; ?>>6��</option> 
			<option value="7"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==7): ?> selected="selected"<? endif; ?>>7��</option> 
			<option value="8"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==8): ?> selected="selected"<? endif; ?>>8��</option> 
			<option value="9"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==9): ?> selected="selected"<? endif; ?>>9��</option> 
			<option value="10"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==10): ?> selected="selected"<? endif; ?>>10��</option> 
			<option value="11"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==11): ?> selected="selected"<? endif; ?>>11��</option> 
			<option value="12"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==12): ?> selected="selected"<? endif; ?>>12��</option> 
            <option value="13"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==13): ?> selected="selected"<? endif; ?>>13��</option> 
            <option value="14"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==14): ?> selected="selected"<? endif; ?>>14��</option> 
            <option value="15"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==15): ?> selected="selected"<? endif; ?>>15��</option> 
            <option value="16"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==16): ?> selected="selected"<? endif; ?>>16��</option> 
            <option value="17"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==17): ?> selected="selected"<? endif; ?>>17��</option> 
            <option value="18"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==18): ?> selected="selected"<? endif; ?>>18��</option> 
            <option value="19"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==19): ?> selected="selected"<? endif; ?>>19��</option> 
            <option value="20"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==20): ?> selected="selected"<? endif; ?>>20��</option> 
            <option value="21"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==21): ?> selected="selected"<? endif; ?>>21��</option> 
            <option value="22"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==22): ?> selected="selected"<? endif; ?>>22��</option> 
            <option value="23"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==23): ?> selected="selected"<? endif; ?>>23��</option> 
            <option value="24"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==24): ?> selected="selected"<? endif; ?>>24��</option> 
            <option value="25"  <? if (!isset($this->magic_vars['_U']['auto_result']['timelimit_day_last'])) $this->magic_vars['_U']['auto_result']['timelimit_day_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['timelimit_day_last']==25): ?> selected="selected"<? endif; ?>>25��</option> 
		</select>
                        </td> 
                        <td> 
                            <span></span> 
                        </td> 
                    </tr> 
                    
                 <tr> 
                        <th> 
                            �����ʣ�
                        </th> 
                        <td> 
                           <input id="apr_status" type="checkbox" name="apr_status" value="1"  <? if (!isset($this->magic_vars['_U']['auto_result']['apr_status'])) $this->magic_vars['_U']['auto_result']['apr_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_status']==1): ?> checked="checked"<? endif; ?>/><label for="">���� ���ʷ�Χ��</label> 
                           
						<select name="apr_first" style=" width: 80px;"> 
														<option value="1"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==1): ?> selected="selected"<? endif; ?>>1%</option> 
														<option value="2"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==2): ?> selected="selected"<? endif; ?>>2%</option> 
														<option value="3"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==3): ?> selected="selected"<? endif; ?>>3%</option> 
														<option value="4"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==4): ?> selected="selected"<? endif; ?>>4%</option> 
														<option value="5"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==5): ?> selected="selected"<? endif; ?>>5%</option> 
														<option value="6"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==6): ?> selected="selected"<? endif; ?>>6%</option> 
														<option value="7"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==7): ?> selected="selected"<? endif; ?>>7%</option> 
														<option value="8"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==8): ?> selected="selected"<? endif; ?>>8%</option> 
														<option value="9"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==9): ?> selected="selected"<? endif; ?>>9%</option> 
														<option value="10"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==10): ?> selected="selected"<? endif; ?>>10%</option> 
														<option value="11"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==11): ?> selected="selected"<? endif; ?>>11%</option> 
														<option value="12"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==12): ?> selected="selected"<? endif; ?>>12%</option> 
														<option value="13"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==13): ?> selected="selected"<? endif; ?>>13%</option> 
														<option value="14"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==14): ?> selected="selected"<? endif; ?>>14%</option> 
														<option value="15"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==15): ?> selected="selected"<? endif; ?>>15%</option> 
														<option value="16"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==16): ?> selected="selected"<? endif; ?>>16%</option> 
														<option value="17"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==17): ?> selected="selected"<? endif; ?>>17%</option> 
														<option value="18"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==18): ?> selected="selected"<? endif; ?>>18%</option> 
														<option value="19"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==19): ?> selected="selected"<? endif; ?>>19%</option> 
														<option value="20"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==20): ?> selected="selected"<? endif; ?>>20%</option> 
														<option value="21"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==21): ?> selected="selected"<? endif; ?>>21%</option> 
														<option value="22"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==22): ?> selected="selected"<? endif; ?>>22%</option> 
														<option value="23"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==23): ?> selected="selected"<? endif; ?>>23%</option> 
														<option value="24"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==24): ?> selected="selected"<? endif; ?>>24%</option> 
														<option value="25"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_first'])) $this->magic_vars['_U']['auto_result']['apr_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_first']==25): ?> selected="selected"<? endif; ?>>25%</option> 
							</select> 
                            ~
							<select name="apr_last" style=" width: 80px;"> 
						   								<option value="5"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==5): ?> selected="selected"<? endif; ?>>5%</option> 
														<option value="6"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==6): ?> selected="selected"<? endif; ?>>6%</option> 
														<option value="7"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==7): ?> selected="selected"<? endif; ?>>7%</option> 
														<option value="8"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==8): ?> selected="selected"<? endif; ?>>8%</option> 
														<option value="9"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==9): ?> selected="selected"<? endif; ?>>9%</option> 
														<option value="10"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==10): ?> selected="selected"<? endif; ?>>10%</option> 
														<option value="11"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==11): ?> selected="selected"<? endif; ?>>11%</option> 
														<option value="12"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==12): ?> selected="selected"<? endif; ?>>12%</option> 
														<option value="13"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==13): ?> selected="selected"<? endif; ?>>13%</option> 
														<option value="14"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==14): ?> selected="selected"<? endif; ?>>14%</option> 
														<option value="15"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==15): ?> selected="selected"<? endif; ?>>15%</option> 
														<option value="16"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==16): ?> selected="selected"<? endif; ?>>16%</option> 
														<option value="17"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==17): ?> selected="selected"<? endif; ?>>17%</option> 
														<option value="18"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==18): ?> selected="selected"<? endif; ?>>18%</option> 
														<option value="19"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==19): ?> selected="selected"<? endif; ?>>19%</option> 
														<option value="20"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==20): ?> selected="selected"<? endif; ?>>20%</option> 
														<option value="21"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==21): ?> selected="selected"<? endif; ?>>21%</option> 
														<option value="22"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==22): ?> selected="selected"<? endif; ?>>22%</option> 
														<option value="23"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==23): ?> selected="selected"<? endif; ?>>23%</option> 
														<option value="24"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==24): ?> selected="selected"<? endif; ?>>24%</option> 
														<option value="25"   <? if (!isset($this->magic_vars['_U']['auto_result']['apr_last'])) $this->magic_vars['_U']['auto_result']['apr_last']=''; ;if (  $this->magic_vars['_U']['auto_result']['apr_last']==25): ?> selected="selected"<? endif; ?>>25%</option> 
							</select>	
                        </td> 
                        <td> 
                            <span>����������û�д������ơ�</span> 
                        </td> 
                    </tr> 
                <tr> 
                        <th> 
                            Ͷ�꽱����
                        </th> 
                        <td> 
                           <input  type="checkbox" name="award_status"  value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['award_status'])) $this->magic_vars['_U']['auto_result']['award_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_status']==1): ?> checked="checked"<? endif; ?> />���� <label for="">����������ڵ���</label> 
                           <select name="award_first" style=" width: 80px;"> 
	<option  value="0" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0"): ?> selected="selected"<? endif; ?>>0%</option> 
	<option value="0.1" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.1"): ?> selected="selected"<? endif; ?>>0.1%</option> 
	<option value="0.2" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.2"): ?> selected="selected"<? endif; ?>>0.2%</option> 
	<option value="0.3" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.3"): ?> selected="selected"<? endif; ?>>0.3%</option> 
	<option value="0.4" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.4"): ?> selected="selected"<? endif; ?>>0.4%</option> 
	<option value="0.5" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.5"): ?> selected="selected"<? endif; ?>>0.5%</option> 
	<option value="0.6" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.6"): ?> selected="selected"<? endif; ?>>0.6%</option> 
	<option value="0.7" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.17"): ?> selected="selected"<? endif; ?>>0.7%</option> 
	<option value="0.8" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.8"): ?> selected="selected"<? endif; ?>>0.8%</option> 
	<option value="0.9" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.9"): ?> selected="selected"<? endif; ?>>0.9%</option> 
	<option value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="1"): ?> selected="selected"<? endif; ?>>1%</option> 
	<option value="1.5" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="1.5"): ?> selected="selected"<? endif; ?>>1.5%</option> 
	<option value="2" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="2"): ?> selected="selected"<? endif; ?>>2%</option> 
 
</select> 
                            ~
                       <!--     <select name="award_last" style=" width: 80px;"> 
	<option value="0.1" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.1"): ?> selected="selected"<? endif; ?>>0.1%</option> 
	<option value="0.2" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.2"): ?> selected="selected"<? endif; ?>>0.2%</option> 
	<option value="0.3" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.3"): ?> selected="selected"<? endif; ?>>0.3%</option> 
	<option value="0.4" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.4"): ?> selected="selected"<? endif; ?>>0.4%</option> 
	<option value="0.5" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.5"): ?> selected="selected"<? endif; ?>>0.5%</option> 
	<option value="0.6" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.6"): ?> selected="selected"<? endif; ?>>0.6%</option> 
	<option value="0.7" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.17"): ?> selected="selected"<? endif; ?>>0.7%</option> 
	<option value="0.8" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.8"): ?> selected="selected"<? endif; ?>>0.8%</option> 
	<option value="0.9" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="0.9"): ?> selected="selected"<? endif; ?>>0.9%</option> 
	<option value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="1"): ?> selected="selected"<? endif; ?>>1%</option> 
	<option value="1.5" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="1.5"): ?> selected="selected"<? endif; ?>>1.5%</option> 
	<option value="2" <? if (!isset($this->magic_vars['_U']['auto_result']['award_first'])) $this->magic_vars['_U']['auto_result']['award_first']=''; ;if (  $this->magic_vars['_U']['auto_result']['award_first']=="2"): ?> selected="selected"<? endif; ?>>2%</option> 
 
</select> -->
                        </td> 
                        <td> 
                            <span>����������û�д������ơ�</span> 
                        </td> 
                    </tr> 
                 <tr> 
                        <th> 
                            Ͷ�ʱ��֣�
                        </th> 
                        <td> 
                           
                           <!--<input id="vouch_status" type="checkbox" name="vouch_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['vouch_status'])) $this->magic_vars['_U']['auto_result']['vouch_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['vouch_status']==1): ?> checked="checked"<? endif; ?> /><label for="vouch_status">����Ϊ��Ѻ��</label>-->
                           <input id="fast_status" type="checkbox" name="fast_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['fast_status'])) $this->magic_vars['_U']['auto_result']['fast_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['fast_status']==1): ?> checked="checked"<? endif; ?> /><label for="fast_status">��Ѻ��</label>
                           <input id="xin_status" type="checkbox" name="xin_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['xin_status'])) $this->magic_vars['_U']['auto_result']['xin_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['xin_status']==1): ?> checked="checked"<? endif; ?> /><label for="xin_status">���ñ�</label>
                           <input id="jin_status" type="checkbox" name="jin_status" value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['jin_status'])) $this->magic_vars['_U']['auto_result']['jin_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['jin_status']==1): ?> checked="checked"<? endif; ?> /><label for="jin_status">��ֵ��</label>
                           <!--
                           <input id="tuijian_status" type="checkbox" name="tuijian_status"  value="1" <? if (!isset($this->magic_vars['_U']['auto_result']['tuijian_status'])) $this->magic_vars['_U']['auto_result']['tuijian_status']=''; ;if (  $this->magic_vars['_U']['auto_result']['tuijian_status']==1): ?> checked="checked"<? endif; ?>/><label for="tuijian_status">����Ϊ�Ƽ���</label> 
                           -->
                        </td>
                        <td> 
                            <span>��ѡ������Ͷ�ʱ��֣��ɶ�ѡ��</span> 
                        </td> 
                    </tr> 
                </table> 
                </div> 
        </div> 
        <div style="text-align:center; clear:both"> 
		<input type="hidden" name="auto_id" value="<? if (!isset($this->magic_vars['_U']['auto_result']['id'])) $this->magic_vars['_U']['auto_result']['id'] = ''; echo $this->magic_vars['_U']['auto_result']['id']; ?>" />
        <input type="submit" class="btn-action" name="" value="����" id=""  /> 
        <input type="reset" class="btn-action" name="" value="ȡ��" id=""  /> 
        </div> 
    </div> 
		</form>
	<? endif; ?>
		<script> 
var url = "<? if (!isset($this->magic_vars['_U']['query_url'])) $this->magic_vars['_U']['query_url'] = ''; echo $this->magic_vars['_U']['query_url']; ?>/<? if (!isset($this->magic_vars['_U']['query_type'])) $this->magic_vars['_U']['query_type'] = ''; echo $this->magic_vars['_U']['query_type']; ?>";

function sousuo(urla){
	if (urla!="") url = urla;
	var _url = "";
	var dotime1 = $("#dotime1").val();
	var keywords = $("#keywords").val();
	var username = $("#username").val();
	var status = $("#status").val();
	var reply_status = $("#reply_status").val();
	var tender_username = $("#tender_username").val();
	var dotime2 = $("#dotime2").val();
	if (username!=null){
		 _url += "&username="+username;
	}
	if (tender_username!=null){
		 _url += "&tender_username="+tender_username;
	}
	if (status!=null){
		 _url += "&status="+status;
	}
	if (reply_status!=null){
		 _url += "&reply_status="+reply_status;
	}
	if (keywords!=null){
		 _url += "&keywords="+keywords;
	}
	if (dotime1!=null){
		 _url += "&dotime1="+dotime1;
	}
	if (dotime2!=null){
		 _url += "&dotime2="+dotime2;
	}
	location.href=url+_url;
}
 
</script>

</div>
</div>
</div>
</div>
<!--�û����ĵ�����Ŀ ����-->
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/modal.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/tab.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/alert.js"></script>
<script src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/js/transition.js"></script>
<? $this->magic_include(array('file' => "user_footer.html", 'vars' => array()));?>