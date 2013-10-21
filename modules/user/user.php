<?
if (!defined('ROOT_PATH'))  die('不能访问');//防止直接访问
check_rank("user_".$_A['query_type']);//检查权限

$_A['list_purview'] =  array("user"=>array("用户管理"=>array("user_list"=>"用户列表","user_view"=>"查看用户信息","user_new"=>"添加用户","user_edit"=>"修改用户","user_del"=>"删除用户","user_type"=>"用户类型","user_type_order"=>"用户类型排序","user_type_del"=>"删除用户类型","user_type_new"=>"添加用户类型","user_type_edit"=>"编辑用户类型")));//权限
$_A['list_name'] = "用户管理";
$_A['list_menu'] = "<a href='{$_A['query_url']}{$_A['site_url']}'>用户列表</a> - <a href='{$_A['query_url']}/vip{$_A['site_url']}'>vip用户</a> - <a href='{$_A['query_url']}/new{$_A['site_url']}'>添加用户</a> - <a href='{$_A['query_url']}/type{$_A['site_url']}'>用户类型</a>";
$_A['list_table'] = "";

/**
 * 用户列表
**/
if ($_A['query_type'] == "list"){
	$_A['list_title'] = "用户列表";
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
	$data['type'] = 2;
	if(isset($_GET['username'])){
		$data['username']=$_GET['username'];
	}
	if(isset($_GET['email'])){
		$data['email']=$_GET['email'];
	}
	if(isset($_GET['realname'])){
		$data['realname']=$_GET['realname'];
	}
	$result = userClass::GetList($data);
	$pages->set_data($result);
	$_A['user_list'] = $result['list'];
	$_A['showpage'] = $pages->show(3);
}
/**
 * 用户列表
**/
/*
if ($_A['query_type'] == "typechange"){
	$_A['list_title'] = "用户改变类型申请";
	if (isset($_REQUEST['id']) && $_REQUEST['id']!=""){
		$data['id'] = $_REQUEST['id'];
		$data['status'] = $_REQUEST['status'];
		$data['type'] = "update";
		$result = userClass::TypeChange($data);
		$msg = array("类型修改成功","",$_A['query_url']."/typechange");
	}else{
		$data['page'] = $_A['page'];
		$data['epage'] = $_A['epage'];
		$data['type'] = "list";
		$result = userClass::TypeChange($data);
		$pages->set_data($result);
		
		$_A['user_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}
}*/
/**
 * 添加和编辑用户
**/
elseif ($_A['query_type'] == "new" || $_A['query_type'] == "edit" || $_A['query_type'] == "view"){
	if ($_A['query_type'] == "new" ){
		$_A['list_title'] = "添加用户";
	}else{
		$_A['list_title'] = "修改用户";
	}
	if (isset($_POST['realname'])){
		$var = array("type_id","username","email","realname","password","sex","qq","wangwang","tel","phone","address","status","province","city","area","card_type","card_id","islock","invite_userid","invite_money","serial_id");
		$data = post_var($var);
		$data['area'] = post_area();
		$data['birthday'] = get_mktime($_POST['birthday']);
		$purview_usertype = explode(",",$_SESSION['purview']);
		//add by weego 20120929 修改资料用户后导致搜索不到用户bug
		if($data['type_id']==''){
			$data['type_id']='2';
		}
		if (!in_array("userinfo_edit",$purview_usertype) ){
			$msg = array("您没有权限添加或管理此类的管理员".$index['type_id']);
		}else{
			if ($_A['query_type'] == "new"){
				$check_username = userClass::CheckUsername(array("username"=>$data['username']));
				$check_email = userClass::CheckEmail(array("email"=>$data['email']));
				if ($check_username) {
					$msg = array("用户名已经存在");
				}elseif ($check_email){
					$msg = array("邮箱已经存在");
				}else{
					$masg = '';
					if ($rdGlobal['uc_on']){
						require_once ROOT_PATH . '/core/config_ucenter.php';
						require_once ROOT_PATH . '/uc_client/client.php';
						$uid = uc_user_register($data['username'], $data["password"], $data['email']);
						if ($uid <= 0) {
							if ($uid == -1) {
								$masg = '用户名不合法';
							} elseif ($uid == -2) {
								$masg = '包含要允许注册的词语';
							} elseif ($uid == -3) {
								$masg = '用户名已经存在';
							} elseif ($uid == -4) {
								$masg = 'Email 格式有误';
							} elseif ($uid == -5) {
								$masg = 'Email 不允许注册';
							} elseif ($uid == -6) {
								$masg = '该 Email 已经被注册';
							} else {
								$masg = '未定义';
							}
						}
					}
					if($masg == ''){
						$result = userClass::AddUser($data);
						if ($result>0){
							$msg = array("用户名添加成功","",$_A['query_url']);
						}else{
							$msg = array($result);
						}
					}else{
						$msg = array($masg);
					}
				}	
			}else{
				if ($data['password']==""){
					unset($data['password']);
				}
				$data["user_id"] = $_POST['user_id'];
				$check_email = userClass::CheckEmail(array("email"=>$data['email'],"user_id"=>$data["user_id"]));
				if ($check_email==true){
					$msg = array("邮箱已经存在");
				}else{
					$lt = 1;
					if($rdGlobal['uc_on']==true){
						$user_result = $mysql->db_fetch_array('select username,email from {user} where user_id='.$data["user_id"]);
						if ($data['password']==""){
							$newpad = '';
						}else{
							$newpad = $data['password'];
						}
						if($data['email']==$user_result['email']){
							$email = '';
						}else{
							$email = $data['email'];
						}
						if($newpad!='' || $email!=''){
							$lt = 0;
							require_once ROOT_PATH . '/core/config_ucenter.php';
							require_once ROOT_PATH . '/uc_client/client.php';
							$ucresult = uc_user_edit($user_result['username'], '', $newpad, $email, 1);
							if ($ucresult == -1) {
								$masg = array("旧密码不正确,请使用论坛的登录密码");
							} elseif ($ucresult == -4) {
								$masg = array("Email 格式有误");
							} elseif ($ucresult == -5) {
								$masg = array("Email 不允许注册");
							} elseif ($ucresult == -6) {
								$masg = array("该 Email 已经被注册");
							} else{
								$lt = 1;
							}
						}
					}
					if($lt==1){
						$result = $user->UpdateUser($data);
						if ($_POST['kefu_userid']!=""){
							$sql = "update `{user_cache}` set kefu_userid=".$_POST['kefu_userid']." where user_id='{$data['user_id']}'";
							$mysql->db_query($sql);
						}
						if ($result===false){
							$msg = array($result);
						}else{
							$msg = array("修改成功");
						}
					}else{
						$msg = $masg;
					}
				}
			}
		}
	}else{
		$user_type = userClass::GetTypeList(array("type"=>2));
		if ($user_type==false){
			$msg = array("还没有类型，请先添加","添加用户类型","{$_A['query_url']}/type_new");
		}else{
			foreach ($user_type as $key => $value){
				$purview_usertype = explode(",",$_SESSION['purview']);
				if (in_array("manager_new_".$value['type_id'],$purview_usertype) || in_array("other_all",$purview_usertype) ){
					$list_type[$value['type_id']] = $value['name']; 
				}
			}
			$magic->assign("list_type",$list_type);
		}
		if ($_A['query_type'] == "edit" || $_A['query_type'] == "view"){
			if ($_REQUEST['user_id']==1){
				$msg = array("此管理员不能编辑,如果要修改，请到修改个人信息");
			}else{
				$_A['user_result'] = userClass::GetOne(array("user_id"=>$_REQUEST['user_id']));
			}
			//用户的查看
			if ($_A['query_type'] == "view"){
				$magic->assign("_A",$_A);
				$magic->display("view.tpl","modules/user");exit;
			}
		}
	}
}
/**
 * 删除用户
**/
elseif ($_A['query_type'] == "del"){
	if ($_GET['user_id']==1){
		$msg = array("此用户不能删除");
	}else{
		//repair by weego 20120703
		//$result = userClass::DeleteUser(array("user_id"=>$_REQUEST['user_id'],"type"=>2));
		$msg = array("此用户不能删除,请联系超级管理员");
	}
	//$user->add_log($_log,$result);//记录操作
}
/**
 * 用户类型列表
**/
elseif ($_A['query_type'] == "type"){
	$_A['user_type_list'] = userClass::GetTypeList(array("type"=>2));//0表示用户组的类别，1表示管理组的类型
}
/**
 * 添加和编辑用户类型
**/
elseif ($_A['query_type'] == "type_new" || $_A['query_type'] == "type_edit"){
	if (isset($_POST['name'])){
		$var = array("name","order","remark","status","summary","purview");
		$data = post_var($var);
		$data['type'] = 2;
		if ($_A['query_type'] == "type_new"){
			$result = userClass::AddType($data);
		}else{
			$data['type_id'] = $_POST['type_id'];
			$result = userClass::UpdateType($data);
		}
		if ($result == false){
			$msg = array($result);
		}else{
			$msg = array("类型操作成功","","{$_A['query_url']}/type&a=userinfo");
		}
		$user->add_log($_log,$result);//记录操作
	}else{
		if ($_A['query_type'] == "type_edit"){
			$result = userClass::GetTypeOne(array("type_id"=>$_GET['type_id']));
			$magic->assign("result",$result);
		}
	}
}
/**
 * 修改用户类型排序
**/
elseif ($_A['query_type'] == "type_order"){
	$data['order'] = $_POST['order'];
	$data['type_id'] = $_POST['type_id'];
	$result = userClass::OrderType($data);
	if ($result == false){
		$msg = array("输入有误，请跟管理员联系");
	}else{
		$msg = array("排序修改成功");
	}
	$user->add_log($_log,$result);//记录操作
}
/**
 * 删除用户类型
**/
elseif ($_A['query_type'] == "type_del"){
	$data['type_id'] = $_REQUEST['type_id'];
	if ($data['type_id']==1){
		$msg = array("超级管理员类型禁止删除");
	}else{
		$result = userClass::DeleteType($data);
		if ($result){
			$msg = array("删除成功");
		}else{
			$msg = array($result);
		}
		$user->add_log($_log,$result);//记录操作
	}
}
/**
 * VIP用户
**/
elseif ($_A['query_type'] == "vip"){
	if(isset($_GET['username'])){
		$data['username']=$_GET['username'];
	}
	$data['vip_status']=1;
	$result = userClass::GetList($data);//0表示用户组的类别，1表示管理组的类型
	$pages->set_data($result);
	$_A['user_vip_list'] = $result['list'];
	$_A['showpage'] = $pages->show(3);
}
/**
 * VIP审核查看
**/
/*
elseif ($_A['query_type'] == "vipview"){
	if (isset($_POST['isvip'])){
		$var = array("isvip","vip_veremark");
		$data = post_var($var);
		if ($data['isvip']==1){
			$data['vip_time'] = time();
		}
		$data['user_id'] = $_POST['user_id'];
		$result = userClass::UpdateUser($data);
		
		if ($result == false){
			$msg = array($result);
		}else{
                    
			$msg = array("VIP用户审核成功","","{$_A['query_url']}/vip");
		}
		
		$user->add_log($_log,$result);//记录操作
	}else{
		$_A['user_result'] = userClass::GetOne(array("user_id"=>$_REQUEST['user_id']));
	}
}
*/
?>