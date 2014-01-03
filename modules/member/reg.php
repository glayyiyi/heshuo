<?php
require_once ROOT_PATH . '/core/config_ucenter.php';
require_once ROOT_PATH . '/uc_client/client.php';
if (!defined('ROOT_PATH')) die('不能访问'); //防止直接访问
if ($_G['user_id'] != "" && isset($_SESSION['step']) && $_SESSION['reg_step'] == "") {
	header('location:index.php?user');
	exit;
} elseif (isset($_SESSION['reg_step']) && $_SESSION['reg_step'] == "reg_email") {
	header('location:index.php?user&q=going/reg_email');
	exit;
} 
//By Glay 无email也可以注册
if (isset($_POST['email'])||isset($_POST['username'])) {
	//By Glay 增加invite_userid
	$var = array('email', 'username', 'sex', 'password', 'email', 'realname', 'invite_userid', 'type_id', 'phone', 'area', 'qq', 'card_type', 'card_id','invite_userid');
	$index = post_var($var);
	
	
	
		$varUserName = array('invite_username');
        $index2 =  post_var($varUserName);
		
       
       
	// By Glay 去掉session里的邀请码 $index["invite_userid"] = $_SESSION["reginvite_user_id"];
	if (isset ( $_POST ['invite_userid'] ) && ( $_POST ['invite_userid']!="")) {
		
		// By Glay 邀请码的密文进行解密
		//$key = 'reg_invite'; // 密钥
		
		//$decrypt = decrypt ( $_POST ['invite_userid'], $key );
		$index ["invite_userid"] = intval($_POST ['invite_userid']);
		$sql = "select user_id from {user} where user_id='{$index ["invite_userid"] }'";
		
		
		$result = $mysql->db_fetch_array ( $sql );
	
		if ($result ['user_id'] == "") {
			echo "<script>alert('此邀请码不存在，请填写有效的邀请码！');location.href='index.php?user&q=going/getreg';</script>";
			exit ();
		}
	}
        
        if(isset($_POST['invite_username']) && $_POST['invite_username'] != ""){
            $sql = "select user_id from {user} where `username`='{$_POST['invite_username']}'";
            
            $result = $mysql->db_fetch_array($sql);
            
            if($result['user_id'] == ""){
                echo "<script>alert('此邀请人不存在，请慎重填写！');location.href='index.php?user&q=going/getreg';</script>";
                exit();
            }
       }
       
   
        
        if($index["invite_userid"] == "" && $index2["invite_username"]!=""){
            $invite_username = $index2["invite_username"];
            $sql = "select user_id from {user} where `username`='{$invite_username}'";
            $result = $mysql->db_fetch_array($sql);
            $index["invite_userid"] = $result["user_id"];
           
        }
		$index["type_id"] = 2;
		if ($rdGlobal['uc_on']){
			$uid = uc_user_register($index["username"], $index["password"], $index["email"]);
			if ($uid <= 0) {
				if ($uid == -1) {
					$msg = '用户名不合法';
				} elseif ($uid == -2) {
					$msg = '包含要允许注册的词语';
				} elseif ($uid == -3) {
					$msg = '用户名已经存在';
				} elseif ($uid == -4) {
					$msg = 'Email 格式有误';
				} elseif ($uid == -5) {
					$msg = 'Email 不允许注册';
				} elseif ($uid == -6) {
					$msg = '该 Email 已经被注册';
				} else {
					$msg = '未定义';
				} 
			} 
			if ($msg){
				echo "<script>alert('$msg');location.href='index.php?user&q=going/getreg';</script>";
				exit();
			}
			//$ucsynlogin = uc_user_synlogin($uid);
		}
		
	
		
	$user_id = $user -> AddUser($index);
	
	if ($user_id > 0) {
		//注册成功
		if($_G['open_connet']['type']=='qq'){
			$sql = "update `{user}` set  connect_openid='".$_G['open_connet']['openid']."'  where user_id = '" . $user_id. "'";	
			$mysql -> db_query($sql);
		}else{
			$update_set="";
		}
		$data['user_id'] = $user_id;
		$data['username'] = $index['username'];
		$data['email'] = $index['email'];
		$data['webname'] = $_G['system']['con_webname'];
		$data['title'] = $data['webname']."注册邮件确认";
		$data['key'] = $_U['user_reg_key'];
		$data['encryption'] = md5($user_id);
		$data['msg'] = RegEmailMsg($data);
		$data['type'] = "reg";
		$result = $user -> SendEmail($data);
		$data['reg_step'] = "reg_email"; 
		$mysql->db_query('update {user} set encryption=\''.$data['encryption'].'\',user_status=\'regemail\' where user_id='.$user_id);
		if (isset($_POST['cookietime']) && $_POST['cookietime'] > 0) {
			$ctime = time() + $_POST['cookietime'] * 60;
		} else {
			$ctime = 0;
		} 

		if ($_G['is_cookie'] == 1) {
			setcookie('rdun', authcode($data['user_id'] . "," . time(), "ENCODE"), $ctime);
			setcookie('login_endtime',$ctime, $ctime);
		} else {
			$_SESSION['rdun'] = authcode($data['user_id'] . "," . time(), "ENCODE");
 			$_SESSION['login_endtime'] = $ctime;
		} 
		//add by weego for 登录cookies验证 20120610			
		setcookie('login_uid',$data['user_id'], $ctime);
 
		 //By Glay $_SESSION['reg_step'] = "reg_email";
		//echo "<script>alert('注册成功');location.href='index.php?user&q=going/reg_email';</script>";
		echo "<script>alert('注册成功');location.href='index.php?user';</script>";
		//http://dev.heshuo.com/index.php?user&q=going/reg_email&jump=true
		//http://dev.heshuo.com/index.php?user&q=going/reg_avatar&jump=true
		
	} else {
		header('location:index.php?user&q=going/getreg');
	} 
} else {
	$title = '用户注册';
	$template = 'user_reg_info.html.php';
} 

function decrypt($data, $key) {
	$key = md5 ( $key );
	$x = 0;
	$data = base64_decode ( $data );
	$len = strlen ( $data );
	$l = strlen ( $key );
	for($i = 0; $i < $len; $i ++) {
		if ($x == $l) {
			$x = 0;
		}
		$char .= substr ( $key, $x, 1 );
		$x ++;
	}
	for($i = 0; $i < $len; $i ++) {
		if (ord ( substr ( $data, $i, 1 ) ) < ord ( substr ( $char, $i, 1 ) )) {
			$str .= chr ( (ord ( substr ( $data, $i, 1 ) ) + 256) - ord ( substr ( $char, $i, 1 ) ) );
		} else {
			$str .= chr ( ord ( substr ( $data, $i, 1 ) ) - ord ( substr ( $char, $i, 1 ) ) );
		}
	}
	return $str;
}

?>