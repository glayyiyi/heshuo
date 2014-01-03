<?php
if (!defined('ROOT_PATH'))  die('不能访问');//防止直接访问

$url = $_U['query_url']."/{$_U['query_type']}";
if (isset($_G['query_string'][2])){
	$url .= "&".$_G['query_string'][2];
}
if  ($_U['query_type'] == "applyvip") $url = '/vip/index.html';
$_SESSION['valicode'] = isset($_POST['valicode'])?$_SESSION['valicode']:'';

if(strtolower($_POST['valicode']) != $_SESSION['valicode']){
		$msg = array("验证码错误","",$url);
}else{
	$_SESSION['valicode'] = '';
	//密码保护功能
	if ($_U['query_type'] == "protection"){
		if ((isset($_POST['type']) && $_POST['type'] == 1)){
			if (  $_G['user_result']['answer']=="" || $_POST['answer'] == $_G['user_result']['answer']){
				$_U['answer_type'] = 2;
			}else{
				$msg = array("问题答案不正确","",$url);
			}
		}elseif (isset($_POST['type']) && $_POST['type'] == 2){
			$var = array("question","answer");
			$data = post_var($var);
			if ($data['answer']==""){
				$msg = array("问题答案不能为空","",$url);	
			}else{
				$data['user_id'] = $_G['user_id'];
				$result = $user->UpdateUserProtection($data);
				if ($result == false){
					$msg = array($result);	
				}else{
					$msg = array("密码保护修改成功","",$url);	
				}
			}
		}
	}
	
	
	//交易密码设置
	elseif ($_U['query_type'] == "paypwd"){
		if (isset($_POST['oldpassword'])){
			if ($_G['user_result']['paypassword'] == "" && md5($_POST['oldpassword']) !=$_G['user_result']['password']){
				$msg = array("密码不正确，请输入您的登录密码","",$url);	
			}elseif ($_G['user_result']['paypassword'] != "" && md5($_POST['oldpassword']) != $_G['user_result']['paypassword']){
				$msg = array("密码不正确，请输入您的旧交易密码","",$url);	
			}else{
				$data['user_id'] = $_G['user_id'];
				$data['paypassword'] = md5($_POST['newpassword']);
				$result = $user->UpdateUserAll($data);
				if ($result == false){
					$msg = array($result);
				}else{
					$msg = array("密码修改成功","",$url);	
				}
			}
		}
	}
	//短信定制设置
	elseif ($_U['query_type'] == "smsorder"){
		$results = userClass::GetOnes(array("user_id"=>$_G['user_id']));
		$results_type = userClass::GetAppOnes(array("appid"=>1));
		if (isset($_POST['ordertype'])){
			$ordertype=$_POST['ordertype'];
			$ar_tmp = explode("_", $ordertype); 
			$data["money"]=$ar_tmp[1]?$ar_tmp[1]:0;
			$data["start_time"]=date("Y-m-d");
			$data["userid"]=$_G['user_id'];
			$data["apptypeid"]=1;
			$data["mobile"]=$results["phone"];
			if(!$results["phone"] || strlen($results["phone"])<11 || strlen($results["phone"])>13)
			{
				$msg = array("你未填写过手机号码，或者手机号码有错误！","",$url);	
			}
			else
			{
				if ($ar_tmp[0]==1)
				{
					$data["end_time"]=date( "Y-m-d", mktime(0,0,0,date("m")+1,date("d"),date("Y")));
				}
				elseif ($ar_tmp[0]==2)
				{
					$data["end_time"]=date( "Y-m-d", mktime(0,0,0,date("m"),date("d"),date("Y")+1));
				}
				$_results = userClass::GetSmsOnes(array("userid"=>$_G['user_id']));			
				if ($_results)
				{
					$time1=strtotime($_results["end_time"]);
					$time2=time();
					if (DateDiff("d",$time2,$time1)>0)
					{
						$msg = array("你已经订购短信提醒功能，不能重复订购！","",$url);	
					}
					else
					{
						 userClass::UpdateSmsUser($data);

					}
				}
				else
				{
					userClass::AddSmsUser($data);
				}
			}
		}
			$results_sms = userClass::GetSmsOnes(array("userid"=>$_G['user_id']));
			if($results_sms)
			{
				$results_sms['start_time']=date("Y-m-d",strtotime($results_sms['start_time']));
				$results_sms['end_time']=date("Y-m-d",strtotime($results_sms['end_time']));
			}
			else
			{
				$results_sms['start_time']=date("Y-m-d");
				$results_sms['end_time']=date("Y-m-d");
			}

			$_U['smsuser'] = $results_sms;
			$_U['apptype'] = $results_type;
	}
	//交易密码设置
	elseif ($_U['query_type'] == "getpaypwd"){
		if(isset($_GET['keyid']) && isset($_GET['keyid'])!=""){
			if (isset($_POST['paypwd']) && $_POST['paypwd']!=""){
				if ($_POST['paypwd']==""){
					$msg = array("密码不能为空","",$url);
				}elseif ($_POST['paypwd']!=$_POST['paypwd1']){
					$msg = array("两次密码不一样","",$url);
				}else{
					$data['user_id'] = $_G['user_id'];
					$data['paypassword'] = md5($_POST['paypwd']);
					$result = $user->UpdateUser($data);
					$msg = array("交易密码修改成功","","index.php?user&q=code/user/paypwd");
				}
			}else{
				//$id = urldecode($_REQUEST['id']);
				//$_id = explode(",",authcode(trim($id),"DECODE"));
				//$data['user_id'] = $_id[0];
				$a = email_ciphertext($_GET['keyid'],'DECODE');
				if(is_array($a)){
					$data['user_id'] = $a[0];
					$user_id = $a[0];
					$end_time = $a[2];
					$mkey = $a[4];
				}else{
					$data['user_id'] = '';
					$user_id = '';
					$end_time = 0;
				}
				if($user_id == ''){
					$msg = array('链接错误或被修改，请重新申请。','','/index.php?user&q=code/user/getpaypwd');
				}elseif (time()>$end_time){
					$msg = array('信息已过期，请重新申请。','','/index.php?user&q=code/user/getpaypwd');
				}elseif ($data['user_id']!=$_G['user_id']){
					$msg = array('此信息不是你的信息，请不要乱操作','','/index.php?user&q=code/user/getpaypwd');
				}else{
					$re = $mysql->db_fetch_array('select encryption,user_status from {user} where user_id='.$user_id);
					if($re['user_status']!='getPayPwd' || $re['encryption']!=$mkey){
						$msg = array('链接已失效，请重新获取','','/index.php?user&q=code/user/getpaypwd');
					}
				}
			}
		}elseif (isset($_POST['valicode'])){
			$data['user_id'] = $_G['user_id'];
			$data['username'] = $_G['user_result']['username'];
			$data['email'] = $_G['user_result']['email'];
			$data['webname'] = $_G['system']['con_webname'];
			$data['title'] = "交易密码取回";
			$data['key'] = "getPayPwd";
			$data['query_url'] = "code/user/getpaypwd";
			$data['encryption'] = md5($_G['user_id']);
			$data['msg'] = RegEmailMsg($data);
			$data['type'] = "getpaypwd";
			$result = $user->SendEmail($data);
			if($result){
				$msg = array("信息已发送到您的邮箱，请注意查收");
				$mysql->db_query('update {user} set encryption=\''.$data['encryption'].'\',user_status=\'getPayPwd\' where user_id='.$_G['user_id']);
			}else{
				$msg = array("信息发送失败");
			}
		}
	}
	
	//登录密码设置
	elseif ($_U['query_type'] == "userpwd"){
		if (isset($_POST['oldpassword'])){
			if (md5($_POST['oldpassword']) != $_G['user_result']['password']){
				$msg = array("密码不正确，请输入您的旧密码","",$url);	
			}else{
				require_once ROOT_PATH . '/core/config_ucenter.php';
				require_once ROOT_PATH . '/uc_client/client.php';
				$ucresult = uc_user_edit($_G['user_result']['username'], $_POST['oldpassword'], $_POST['newpassword']);

                 if ($ucresult == -1) {
					$msg = array("旧密码不正确,请使用论坛的登录密码","",$url);
				} elseif ($ucresult == -4) {
					$msg = array("Email 格式有误","",$url);
				} elseif ($ucresult == -5) {
					$msg = array("Email 不允许注册","",$url);
				} elseif ($ucresult == -6) {
					$msg = array("该 Email 已经被注册","",$url);
				} else{
					$data['user_id'] = $_G['user_id'];
					$data['password'] = $_POST['newpassword'];
					$result = $user->UpdateUser($data);
					if ($result == false){
						$msg = array($result);	
					}else{
						$msg = array("登录密码修改成功","",$url);	
					}
				}
			}
		}
	}
	
	//动态口令设置
	elseif ($_U['query_type'] == "serialStatusSet"){
		
		if (isset($_POST['action'])){
			/*判断动态口令*/
			$result = userClass::GetOnes(array("user_id"=>$_G['user_id']));
			$uchon_sn_db = $result['serial_id'];
			$uchon_otp = $_POST['uchoncode'];
			$res = otp_check_new($uchon_sn_db, $uchon_otp);

			if($res->resCode == '1'){
				unset($_POST['action']);
				unset($_POST['name']);
				$a = array();
				foreach($_POST as $k=>$v){
					$a[$k] = $v;
				}
				
				$data['user_id'] = $_G['user_id'];
				$data['serial_status'] = json_encode($a);
				$result = $user->UpdateUser($data);
				if ($result == false){
					$msg = array($result);	
				}else{
					$msg = array("提交成功","",$url);	
				}
			}else{
				$msg = array("动态口令错误","",$url);
			}
		}
	}
	elseif($_U['query_type']=='tenderTreasure'){
		if(isset($_POST['username']) && $_POST['protocolcheck']!=1){
			
			$msg = array("对不起，您必须同意投友宝用户授权协议才能申请","",$url);
		}elseif(isset($_POST['username'])){
				$post_data = array();
				$post_data['username_forum'] = $_POST['username'];//论坛用户名
				$post_data['username_terrace'] = $_G['user_result']['username'];//平台用户名
				$forum_key = explode(";",$_G['system']['con_forum_key']);//平台key
				$post_data['pid'] = $forum_key[0];
				$post_data['skey'] = $forum_key[1];
				$post_data['time'] = time();
				foreach ($post_data as $k=>$v)
				{
					$post_data[$k] = iconv("gbk", "utf-8", $v);
				}
				ksort($post_data);//排序
				$str = '';
				foreach ($post_data as $key=>$val) {
					$str.=",{$key}:{$val}";
				}
				$str = substr($str, 1);
				$str = strtoupper(md5($str));
				$post_data['sign'] = $str;
				unset($post_data['skey']);
				$url=$_G['system']['con_forum_url'];
				$o="";
				foreach ($post_data as $k=>$v)
				{
				    $o.= "$k=".urlencode($v)."&";
				}
				$post_data=substr($o,0,-1);
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_setopt($ch, CURLOPT_URL,$url);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				$result = curl_exec($ch);
				if (curl_errno($ch)) {   
	           		echo '<pre><b>错误:</b><br />('.$url.')'.curl_error($ch);   
	        	}
				curl_close($ch);
				$arr = json_decode($result,true);
				foreach($arr as $k=>$v){
					$arr[$k] = iconv("utf-8", "gbk", $v);
				}
				if($arr['error']!=0){
					$msg = array($arr['msg']);
				}else{
					if($arr['accredit']==1){
						$sql = "update `{user}` set `forum_key`='{$arr['key']}',`forum_accredit`=1 where `user_id`={$_G['user_id']}";
						$re = $mysql->db_query($sql);
						if($re==false){
							$msg = array("申请失败,{$sql}");
						}else{
							$msg = array("申请成功");
						}
					}else{
						$msg = array("申请失败");
					}
				}
		}
	}
	//设置隐私
	elseif ($_U['query_type'] == "privacy"){
		if (isset($_POST['friend'])){	
			$var = array("friend","friend_comment","borrow_list","loan_log","sent_msg","friend_request","look_black","allow_black_sent","allow_black_request");
			$_result = post_var($var);
			$data['privacy'] = serialize($_result);
			$data['user_id'] = $_G['user_id'];
			$result = $user->UpdateUserAll($data);
			if ($result == false){
				$msg = array($result);	
			}else{
				$msg = array("隐私设置成功","",$url);	
			}
			
		}else{
			$result = unserialize($_G['user_result']['privacy']);
			$_U['user_privacy'] = $result;
		}
	}
	
	//实名认证
	elseif ($_U['query_type'] == "realname"){
		if (isset($_POST['realname'])){
			$var = array("realname","sex","card_type","card_id","province","city","province","city","area","nation");
			$data = post_var($var);
			$data['user_id'] = $_G['user_id'];
			$data['birthday'] = get_mktime($_POST['birthday']);
			$data['real_status'] = 2;
			if ($data['birthday'] == ""){
				$msg = array("出生年月不能为空，请重新刷新页面并认真填写.","","?user&q=code/user/realname");	
			}else{
				$cord = $data['card_id'];
				if(strlen($cord)==15){
					$cord = idcard_15to18($data['card_id']);
				}
				$birthday1 = substr($cord, 6, 8);
				$birthday2 = str_replace("-", "", $_POST['birthday']);
				if (!isIdCard($data['card_id']) && $data['card_type']==1){
					$msg = array("身份证号码格式不正确","","?user&q=code/user/realname");
				}elseif($birthday1 != $birthday2 && $data['card_type']==1){
					$msg = array("出生日期填写有误,与证件不一致","","?user&q=code/user/realname");
				}else{
					$result = userClass::CheckIdcard(array("user_id"=>$data['user_id'],"card_id"=>$data['card_id']));
					if($result == true){
						$msg = array("身份证号码已经存在","","?user&q=code/user/realname");	
					}else{
						$_G['upimg']['file'] = "card_pic2";
						$_G['upimg']['code'] = "user";
						$pic_result = $upload->upfile($_G['upimg']);
						if ($pic_result!=""){
							$data['card_pic2'] = $pic_result['filename'];
						}
						$_G['upimg']['file'] = "card_pic1";
						$pic_result = $upload->upfile($_G['upimg']);
						if ($pic_result!=""){
							$data['card_pic1'] = $pic_result['filename'];
						}
						if($data['card_pic1'] == "" || $data['card_pic2'] == "" ){
							$msg = array("请重新上传身份证照片，如有问题，请联系理财顾问","","?user&q=code/user/realname");	
						}else{
							$result = $user->UpdateUserAll($data);
							if ($result == false){
								$msg = array($result);	
							}else{
								$msg = array("姓名认证添加成功，请等待管理员审核","",$url);	
							}
						}
					}
				}
			}
		}
	}
	
	//邮箱认证
	elseif ($_U['query_type'] == "email_status"){
		if (isset($_POST['email']) && $_POST['email']!="" ){
			$data['user_id'] = $_G['user_id'];
			$data['email'] = $_POST['email'];
			$result = $user->CheckEmail($data);
			if ($result==false){
				$result = $user->UpdateUserAll($data);
				if ($result == false){
					$msg = array($result);	
				}else{
					$data['username'] = $_G['user_result']['username'];
					$data['webname'] = $_G['system']['con_webname'];
					$data['title'] = $data['webname']."注册邮件确认";
					$data['encryption'] = md5($data['user_id']);
					$data['msg'] = RegEmailMsg($data);
					$data['type'] = "reg";
					if (isset($_SESSION['sendemail_time']) && $_SESSION['sendemail_time']+60*2>time()){
						$msg = array("请2分钟后再次请求。","",$url);
					}else{
						$result = $user->SendEmail($data);
						if ($result==true) {
							$mysql->db_query('update {user} set encryption=\''.$data['encryption'].'\',user_status=\'regemail\' where user_id='.$data['user_id']);
							$_SESSION['sendemail_time'] = time();
							$msg = array("激活信息已经发送到您的邮箱，请注意查收。","",$url);
						}
						else{
							$msg = array("发送失败，请跟管理员联系。","",$url);
						}
					}
				}
			}else{
				$msg = array("你重新填写的邮箱已经存在","",$url);	
			}
		}
	}
	
	//手机认证
	elseif ($_U['query_type'] == "phone_status"){
		if (isset($_POST['phone']) && is_numeric($_POST['phone']) && $_POST['type']=="getcode"){
			//$data['user_id'] = $_G['user_id'];
			//$data['phone_status'] = $_POST['phone'];
			$code = mt_rand(100000,999999);
			$lasttime=time()+5*60;
			$itype=3;
			$sql = "insert into `{sms_check}`(code,lasttime,user_id,addtime,itype,phone) values('".$code."','".$lasttime."',".$_G["user_id"].",unix_timestamp(),".$itype.",'".$_POST['phone']."')";
			$mysql->db_query($sql);
			$re = sendSMS($_G['user_id'], '手机认证验证码为'.$code.'请在5分钟内提交！', 1, $_POST['phone']);
			//By Glay 增加exit退出，当echo后直接返回ajax msg
			if($re){
				echo 1;
				exit;
			}else{
				echo 0;
				exit;
			}
			//$result = $user->UpdateUserAll($data);
		}elseif($_POST['code']!="" && is_numeric($_POST['phone']) && !isset($_POST['type'])){
			$sql="select id,code,lasttime from `{sms_check}` where user_id={$_G["user_id"]} and phone='{$_POST['phone']}' and isuse=0 and itype=3 order by id desc";
			$re = $mysql->db_fetch_array($sql);
			if(!isset($re['code'])){
				$msg = array("手机号码输入有误","",$url);
			}else{
				if($re['lasttime']<time()){
					$msg = array("验证码已过期，请重新获取","",$url);
				}elseif($re['code']!=$_POST['code']){
					$msg = array("验证码输入有误","",$url);
				}else{
					$data['user_id'] = $_G['user_id'];
					$data['phone_status'] = 1;
					$data['phone'] = $_POST['phone'];
					$result = $user->UpdateUserAll($data);
					$mysql->db_query("update `{sms_check}` set isuse=1 where id={$re['id']}");
					if ($result == false){
						$msg = array($result);	
					}else{
						$msg = array("手机认证成功","",$url);	
					}
				}
			}
		}
	}
	
	//视频认证
	elseif ($_U['query_type'] == "video_status"){
		if (isset($_POST['submit']) && $_POST['submit']!="" ){
			
			$data['user_id'] = $_G['user_id'];
			$data['video_status'] = 2;
			
			$result = $user->UpdateUserAll($data);
			if ($result == false){
				$msg = array($result);	
			}else{
				$msg = array("视频操作成功，请等待理财顾问人员与你联系","",$url);	
			}
		}
	}
	
	//交易密码设置
	elseif ($_U['query_type'] == "credit"){
		$_U['user_cache'] = userClass::GetUserCache(array("user_id"=>$_G['user_id']));//用户缓存
	}
	
	//邀请好友
	elseif ($_U['query_type'] == "reginvite"){
		
		//$oUrl=$_G['weburl'].urlencode("/index.php?user&q=going/reginvite&u=").$_G['user_id'];
		
		//$_U['user_inviteid'] =  shortenSinaUrl($oUrl);
		
		//$_U['user_inviteid'] = $_G['user_id'] ;
		
		//By Glay
		$encrypt="000001";
		$data = $_G['user_id'];		// 被加密信息
		//$key = 'reg_invite';					// 密钥
		//$encrypt = encrypt($data,$key);
		//$decrypt = decrypt($encrypt, $key);
		//echo $encrypt, "\n", $decrypt;
		if (intval ( $data ) > 0) {
			
			$x = $data;
			$len = strlen ( $data );
			
			for($i = 0; $i < (6 - $len); $i ++) {
				$x = '0' . $x;
			}
			$encrypt = $x;
		}
		
		$_U ['user_inviteid'] = $encrypt;
	}
	
	
					

	//VIP申请
	elseif ($_U['query_type'] == "applyvip"){
		if (isset($_POST['vip_remark'])){
			$data['user_id'] = $_G['user_id'];
			$data['vip_remark'] = nl2br($_POST['vip_remark']);;
			$data['kefu_userid'] = $_POST['kefu_userid'];
            if($data['kefu_userid'] == ""){
               $msg = array("请选择你的理财顾问","","?vip");
             }else{
				require_once ROOT_PATH.'modules/account/account.class.php';
				$re = accountClass::GetOneAccount(array('user_id'=>$_G['user_id']));
				if($re['use_money']<$_G['system']['con_vip_money']){
					 $msg = array("VIP申请失败，账户余额不足","","?vip");
				}else{
                	userClass::ApplyUserVip($data);//用户缓存
                	$msg = array("VIP申请成功，请等待管理员审核","","?vip");
				}
            }
		}
	}

	//加为好友
	elseif ($_U['query_type'] == "addfriend"){
		if (isset($_POST['type'])){
			$data['type'] = $_POST['type'];
			$data['content'] = nl2br($_POST['content']);
			$data['friends_userid'] = $_POST['friends_userid'];
			$data['user_id'] = $_G['user_id'];
			$results = userClass::GetOnes(array("user_id"=>$_G['user_id']));
			 
            $real_status=$results['real_status'];

			if($real_status!=1){

				$msg = array("对不起，未实名认证会员不能添加好友，请先进行实名认证。"); 
			}else{
				$result = userClass::AddFriends($data);
				if ($result==false){
					$msg = array($result,"","/index.php?user&q=code/user/myfriend");	
				}else{
					$msg = array("添加好友成功，请等待好友的审核","","/index.php?user&q=code/user/myfriend");	
				}
			}
		}else{
			if($_G['user_result']['real_status']!=1){
				echo "<div style='text-align:center'>对不起，未实名认证会员不能添加好友，请先进行实名认证。</div>";
				exit();
			}else{
				$result = userClass::GetOnes(array("username"=>$_REQUEST['username']));
				if ($result==false){
					$result = userClass::GetOnes(array("username"=>urldecode($_REQUEST['username'])));
					$_REQUEST['username'] = urldecode($_REQUEST['username']);
				}
				if ($result==false){
					echo "<div style='text-align:center'>找不到此用户，请不要乱操作。</div>";
					exit;
				}elseif ($result['user_id']==$_G['user_id']){
					echo "<div style='text-align:center'>不能加自己为好友。</div>";
					exit;
				}else{
					echo "<form method='post' action='/index.php?user&q=code/user/addfriend'>";
					echo "<div align='left'><br>&nbsp;&nbsp;&nbsp;好友：{$_REQUEST['username']}<input type='hidden' name='friends_userid' value='{$result['user_id']}'></div>";
					echo "<div align='left'><br>&nbsp;&nbsp;&nbsp;类型：<select name='type'>";
					foreach ($_G["_linkage"]['friends_type'] as $key => $value){
						echo "<option value='{$value['value']}'>{$value['name']}</option>";
					}
					echo "</select></div><div align='left'><br>&nbsp;&nbsp;&nbsp;内容：<textarea rows='5' cols='30' name='content'></textarea></div>";
					echo "<div align='left'><br>&nbsp;&nbsp;&nbsp;<input type='submit' value='确定添加'></div>";
					echo "</form>";
					exit;
				}
			}
		}
	}
	
	//请求的加为好友
	elseif ($_U['query_type'] == "raddfriend"){
		if (isset($_POST['type'])){
			$data['type'] = $_POST['type'];
			$data['content'] = nl2br($_POST['content']);
			$data['friends_userid'] = $_POST['friends_userid'];
			$data['user_id'] = $_G['user_id'];
			$result = userClass::RAddFriends($data);
			if ($result==false){
				$msg = array($result,"","/index.php?user&q=code/user/myfriend");
			}else{
				$msg = array("成功添加好友成功","","/index.php?user&q=code/user/myfriend");	
			}
		}else{
			$result = userClass::GetOnes(array("username"=>$_REQUEST['username']));
			if ($result==false){
				echo "<div style='text-align:center'>找不到此用户，请不要乱操作。</div>";
				exit;
			}elseif ($result['user_id']==$_G['user_id']){
				echo "<div style='text-align:center'>不能加自己为好友。</div>";
				exit;
			}else{
				echo "<form method='post' action='/index.php?user&q=code/user/raddfriend'>";
				echo "<div align='left'><br>&nbsp;&nbsp;&nbsp;好友：{$_REQUEST['username']}<input type='hidden' name='friends_userid' value='{$result['user_id']}'></div>";
				echo "<div align='left'><br>&nbsp;&nbsp;&nbsp;类型：<select name='type'>";
				foreach ($_G["_linkage"]['friends_type'] as $key => $value){
					echo "<option value='{$value['value']}'>{$value['name']}</option>";
				}
				echo "</select></div><div align='left'><br>&nbsp;&nbsp;&nbsp;内容：<textarea rows='5' cols='30' name='content'></textarea></div>";
				echo "<div align='left'><br>&nbsp;&nbsp;&nbsp;<input type='submit' value='确定添加'></div>";
				echo "</form>";
				exit;
			}
		}
	}
	
	
	//加为好友
	elseif ($_U['query_type'] == "checkaddfriend"){
		if (isset($_POST['type'])){
			$data['type'] = $_POST['type'];
			$data['content'] = nl2br($_POST['content']);
			$data['friends_userid'] = $_POST['friends_userid'];
			$data['user_id'] = $_G['user_id'];
			$result = userClass::AddFriends($data);
			if ($result==false){
				$msg = array($result,"","/index.php?user&q=code/user/myfriend");	
			}else{
				$msg = array("添加好友成功，请等待好友的审核","","/index.php?user&q=code/user/myfriend");	
			}
		}else{
			$result = userClass::GetOnes(array("username"=>$_REQUEST['username']));
			if ($result==false){
				echo "<div style='text-align:center'>找不到此用户，请不要乱操作。</div>";
				exit;
			}elseif ($result['user_id']==$_G['user_id']){
				echo "<div style='text-align:center'>不能加自己为好友。</div>";
				exit;
			}else{
				echo "<form method='post' action='/index.php?user&q=code/user/addfriend'>";
				echo "<div align='left'><br>&nbsp;&nbsp;&nbsp;好友：{$_REQUEST['username']}<input type='hidden' name='friends_userid' value='{$result['user_id']}'></div>";
				echo "<div align='left'><br>&nbsp;&nbsp;&nbsp;类型：<select name='type'>";
				foreach ($_G["_linkage"]['friends_type'] as $key => $value){
					echo "<option value='{$value['value']}'>{$value['name']}</option>";
				}
				echo "</select></div><div align='left'><br>&nbsp;&nbsp;&nbsp;内容：<textarea rows='5' cols='30' name='content'></textarea></div>";
				echo "<div align='left'><br>&nbsp;&nbsp;&nbsp;<input type='submit' value='确定添加'></div>";
				echo "</form>";
				exit;
			}
		}
	}
	
	//删除好友
	elseif ($_U['query_type'] == "delfriend"){
		$data['user_id'] = $_G['user_id'];
		$data['friend_username'] = $_REQUEST['username'];
		userClass::DeleteFriends($data);
		$msg = array("删除成功","",$_U['query_url']."/myfriend");
	
	}
	
	//加为黑名单
	elseif ($_U['query_type'] == "blackfriend"){
	
        $data['user_id'] = $_G['user_id'];
		$data['friend_username'] = $_REQUEST['username'];
		userClass::BlackFriends($data);
		$msg = array("已成功加入黑名单","",$_U['query_url']."/black");
            
	
	}
	//重新加为好友
	elseif ($_U['query_type'] == "readdfriend"){
		$data['user_id'] = $_G['user_id'];
		$data['friend_username'] = $_REQUEST['username'];
		userClass::ReaddFriends($data);
		$msg = array("已成功加为好友","",$_U['query_url']."/myfriend");
	
	}
	
	//申请成为兼职
	elseif ($_U['query_type'] == "jianzhi"){
		if(isset($_POST['content']) && $_POST['content']!=""){
			$data['user_id'] = $_G['user_id'];
			$data['content'] = $_POST['content'];
			$data['old_type'] = $_G['user_result']['type_id'];
			$data['new_type'] = 7;
			userClass::TypeChange($data);
			$msg = array("资料以提交，请等待管理员的审核","",$_U['query_url']."/jianzhi");
		}else{
			$_U['typechange_result'] = userClass::TypeChange($data);
		}
	}
}
//By Glay
function encrypt($data, $key) {
	$key = md5 ( $key );
	$x = 0;
	$len = strlen ( $data );
	$l = strlen ( $key );
	for($i = 0; $i < $len; $i ++) {
		if ($x == $l) {
			$x = 0;
		}
		$char .= $key {$x};
		$x ++;
	}
	for($i = 0; $i < $len; $i ++) {
		$str .= chr ( ord ( $data {$i} ) + (ord ( $char {$i} )) % 256 );
	}
	return base64_encode ( $str );
}


function shortenSinaUrl($url, $key = '2746907695') {
	$opts['http'] = array('method' => "GET", 'timeout'=>60,);
	$context = stream_context_create($opts);
	$url = "http://api.t.sina.com.cn/short_url/shorten.json?source=$key&url_long=$url";
	$html =  @file_get_contents($url,false,$context);
	$url = json_decode($html,true);
	if (!empty($url[0]['url_short'])) {
		return $url[0]['url_short'];
	}
	return $url;
}


$template = "user_info.html.php";
?>
