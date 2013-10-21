<?
if (!defined('ROOT_PATH'))  die('不能访问');//防止直接访问

if ($_A['query_type'] == "biaoTJ"){
	//不限权限
}else{
	check_rank("borrow_".$_A['query_type']);//检查权限
}

include_once("borrow.class.php");

$_A['list_purview'] =  array("borrow"=>array("借款管理"=>array("borrow_list"=>"借款列表",
"borrow_new"=>"添加借款",
"borrow_edit"=>"编辑借款",
"borrow_amount"=>"借款额度",
"borrow_amount_view"=>"额度管理",
"borrow_del"=>"删除借款",
"borrow_view"=>"审核借款",
"borrow_full"=>"满标列表",
"borrow_repayment"=>"已还款",
"borrow_liubiao"=>"流标",
"borrow_late"=>"逾期",
"borrow_full_view"=>"满标查看")));
//权限
$_A['list_name'] = $_A['module_result']['name'];
$_A['list_menu'] = "<a href='{$_A['query_url']}{$_A['site_url']}'>所有借款</a> - <a href='{$_A['query_url']}&status=0{$_A['site_url']}'>发标待审</a> -  <a href='{$_A['query_url']}&status=1{$_A['site_url']}'>正在招标款</a> -  <a href='{$_A['query_url']}/full&status=1{$_A['site_url']}'>己满标待审</a> -  <a href='{$_A['query_url']}/full&status=3{$_A['site_url']}'>满标审核通过</a> - <a href='{$_A['query_url']}/full&status=4{$_A['site_url']}'>满标审核未通过</a> - <a href='{$_A['query_url']}/repayment{$_A['site_url']}&status=1'>已还款</a>  -  <a href='{$_A['query_url']}/liubiao{$_A['site_url']}'>流标</a>  - <a href='{$_A['query_url']}/late{$_A['site_url']}'>逾期</a> - <a href='{$_A['query_url']}/lateFast{$_A['site_url']}'>抵押标到期</a>  - <a href='{$_A['query_url']}/amount{$_A['site_url']}'>借款额度</a> - <a href='{$_A['query_url']}/tongji{$_A['site_url']}'>统计</a>";

if ($_A['query_type'] == "list"){
	$_A['list_title'] = "信息列表";
	if (isset($_POST['id']) && $_POST['id']!=""){
		$data['id'] = $_POST['id'];
		$data['flag'] = $_POST['flag'];
		$data['view'] = $_POST['view'];
		$result = borrowClass::Action($data);
		if ($result==true){
			$msg = array("修改成功","",$_A['query_url'].$_A['site_url']);
		}else{
			$msg = array("修改失败，请跟管理员联系");
		}
	
	}else{
		if (isset($_GET['user_id'])){
			$data['user_id'] = $_GET['user_id'];
		}
		if (isset($_GET['status']) && $_GET['status']!=""){
			$data['status'] = $_GET['status'];
		}
		if (isset($_GET['biaoType']) && $_GET['biaoType']!=""){
			$data['biaoType'] = $_GET['biaoType'];
		}
		if (isset($_GET['username'])){
			$data['username'] = $_GET['username'];
		}
		if(isset($_GET['dotime1'])){
			$data['dotime1']=$_GET['dotime1'];
		}
		if(isset($_GET['dotime2'])){
			$data['dotime2']=$_GET['dotime2'];
		}
		if (isset($_GET['type']) && $_GET['type']=="excel"){
			$title = array("序号","用户名称","标种","借款标题","借款金额","利率（%）","借款期限","发布时间","状态");
			$data['limit'] = "all";
			$result = borrowClass::GetList($data);
			borrowClass::borrowListForExcel(array('type'=>'borrowlist','title'=>$title,'excelresult'=>$result));
			exit;
		}
		$data['page'] = $_A['page'];
		$data['epage'] = $_A['epage'];
		//$result = borrowClass::GetList($data);
		$result = borrowClass::GetListAdmin($data);
		if (is_array($result)){
			$pages->set_data($result);
			$_A['borrow_list'] = $result['list'];
			$_A['showpage'] = $pages->show(3);
		}else{
			$msg = array($result);
		}
	}
}
/**
 * 额度管理
**/
elseif ($_A['query_type'] == "amount"){
	check_rank("borrow_amount");//检查权限
	$_A['list_title'] = "额度管理";
	if (isset($_GET['user_id']) && $_GET['user_id']!=""){
		$data['user_id'] = $_GET['user_id'];
	}
	if (isset($_GET['username']) && $_GET['username']!=""){
		$data['username'] = $_GET['username'];
	}
	if (isset($_GET['type']) && $_GET['type']!=""){
		$data['type'] = $_GET['type'];
	}
    if (isset($_GET['status']) && $_GET['status']!=""){
		$data['status'] = $_GET['status'];
	}	
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
	$result = borrowClass::GetAmountApplyList($data);
	if (is_array($result)){
		$pages->set_data($result);
		$_A['borrow_amount_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
}
/**
 * 额度管理
**/
elseif ($_A['query_type'] == "amount_view"){
	check_rank("borrow_amount_view");//检查权限
	$data['id'] = $_GET['id'];
	$result = borrowClass::GetAmountApplyOne($data);
	if (isset($_POST['status'])){
		if(strtolower($_POST['valicode'])!=$_SESSION['valicode']){
			$msg = array("验证码输入有误");
		}else{
			$_SESSION['valicode']="";
			$data['user_id'] = $result['user_id'];
			$data['status'] = $_POST['status'];
			$data['type'] = $_POST['type'];
			$data['account'] = $_POST['account'];
			$data['verify_remark'] = $_POST['verify_remark'];
			$result = borrowClass::CheckAmountApply($data);
			if ($result !=1){
				$msg = array($result);
			}else{
				$msg = array("操作成功","",$_A['query_url']."/amount&a=borrow");
			}
			$user->add_log($_log,$result);//记录操作
		}
	}else{
		if(is_array($result)){
			$_A['borrow_amount_result'] = $result;	
		}else{
			$msg = array($result);
		}	
	}
}
/**
 * 添加
**/
/*
elseif ($_A['query_type'] == "new"  || $_A['query_type'] == "edit" ){
	check_rank("borrow_new");//检查权限
	$_A['list_title'] = "管理信息";
	//读取用户id的信息
	if (isset($_REQUEST['user_id']) && isset($_POST['username'])){
		if(isset($_POST['user_id']) && $_POST['user_id']!=""){
			$data['user_id'] = $_POST['user_id'];
			$result = userClass::GetOne($data);
		}elseif(isset($_POST['username']) && $_POST['username']!=""){
			$data['username'] = $_POST['username'];
			$result = userClass::GetOne($data);
		}
		if ($result==false){
			$msg = array("找不到此用户");
		}else{
			echo "<script>location.href='".$_A['query_url']."/new&user_id={$result['user_id']}'</script>";
		}
	}
	elseif (isset($_POST['name'])){
		$var = array("user_id","name","use","time_limit","style","account","apr","lowest_account","most_account","valid_time","award","part_account","funds","is_false","open_account","open_borrow","open_tender","open_credit","content");
		$data = post_var($var);
		if ($_POST['status']!=0 || $_POST['status']!=-1){
			$msg = array("此标已经在招标或者已经完成，不能修改","",$_A['query_url'].$_A['site_url']);
		}else{
			if ($_A['query_type'] == "new"){
				$result = borrowClass::Add($data);
			}else{
				$data['id'] = $_POST['id'];
				$result = borrowClass::Update($data);
			}
			
			if ($result !== true){
				$msg = array($result);
			}else{
				$msg = array("操作成功","",$_A['query_url'].$_A['site_url']);
			}
		}
		$user->add_log($_log,$result);//记录操作
	}
	elseif ($_A['query_type'] == "edit" ){
		$data['user_id'] = $_REQUEST['user_id'];
		$data['id'] = $_REQUEST['id'];
		$result = borrowClass::GetOne($data);
		if (is_array($result)){
			$_A['borrow_result'] = $result;
		}else{
			$msg = array($result);
		}
		
	}
	elseif(isset($_REQUEST['user_id']) && !isset($_POST['username'])){
		$data['user_id'] = $_REQUEST['user_id'];
		$result = userClass::GetOne($data);
		if ($result==false){
			$msg = array("您的输入有误","",$_A['query_url']);
		}else{
			$_A['user_result'] = $result;
			//$result = borrowClass::GetOne($data);
			//$_A['borrow_result'] = $result;
		}
	}
}
*/
/**
 * 查看
**/
elseif ($_A['query_type'] == "view"){
	check_rank("borrow_view");//检查权限
	$_A['list_title'] = "查看认证";
	if (isset($_POST['id'])){
		$var = array("id","status","verify_remark");
		$data = post_var($var);
		$data['verify_user'] = $_G['user_id'];
		$data['verify_time'] = time();
		$result = borrowClass::Verify($data);
		if ($result==false){
			$msg = array("审核失败");
		}else{
			//添加用户的动态
			$brsql="select * from `{borrow}` where id ='".$_POST['id']."'";
			$br_row = $mysql->db_fetch_array($brsql);
			if($data['status']==1){
				//自动投标
				$auto['id']=$br_row['id'];
				$auto['user_id']=$br_row['user_id'];
				$auto['total_jie']=$br_row['account'];
				$auto['zuishao_jie']=$br_row['lowest_account'];
				borrowClass::auto_borrow($auto);

				$_data['user_id'] = $_POST['user_id'];
				$_data['content'] = "成功发布了\"<a href=\'/invest/a{$data['id']}.html\' target=\'_blank\'>{$_POST['name']}</a>\"借款标";
				$result = userClass::AddUserTrend($_data);
			}else{
				if($br_row['is_mb'] == 1){
					require_once ROOT_PATH.'/modules/borrow/biao/miaobiao.class.php';
					$data_1['user_id']=$br_row['user_id'];
					$data_1['apr']=$br_row['apr'];
					$data_1['account']=$br_row['account'];
					$data_1['id']=$br_row['id'];
					$data_1['name']=$br_row['name'];
					$miaobiao = new miaobiaoClass();
					$miaobiao->cancel($data_1);
				}
			}
			$msg = array("审核操作成功","",$_A['query_url'].$_A['site_url']."&a=borrow");
		}
		$user->add_log($_log,$result);//记录操作
	}else{
		$data['id'] = $_GET['id'];
		$data['user_id'] = $_GET['user_id'];
		$_A['borrow_result'] = borrowClass::GetOne($data);
	}
}
/**
 * 删除
**/
/*
elseif ($_A['query_type'] == "del"){
	check_rank("borrow_del");//检查权限
	$data['id'] = $_GET['id'];
	$result = borrowClass::Delete($data);
	if ($result !== true){
		$msg = array($result);
	}else{
		$msg = array("删除成功","",$_A['query_url'].$_A['site_url']);
	}
	$user->add_log($_log,$result);//记录操作
}
*/
/**
 * 满标列表
**/
elseif ($_A['query_type'] == "full"){
	check_rank("borrow_full");//检查权限
	$_A['list_title'] = "信息列表";
	$data['page'] = $_A['page'];
	$data['epage'] = $_A['epage'];
	$data['type'] = 'review';
	if (isset($_GET['status']) && $_GET['status']!=""){
		$data['status'] = $_GET['status'];
	}
	if (isset($_GET['biaoType']) && $_GET['biaoType']!=""){
		$data['biaoType'] = $_GET['biaoType'];
	}
	if (isset($_GET['username']) && $_GET['username']!=""){
		$data['username'] = $_GET['username'];
	}
	//liukun add for bug 52 begin
	//fb($data, FirePHP::TRACE);
	//liukun add for bug 52 end
	//$result = borrowClass::GetList($data);
	$result = borrowClass::GetListAdmin($data);
	if (is_array($result)){
		$pages->set_data($result);
		$_A['borrow_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
}
/**
 * 借款标撤回
**/
elseif ($_A['query_type'] == "cancel"){
	check_rank("borrow_cancel");//检查权限
	$_A['list_title'] = "撤回";
	if(strtolower($_POST['valicode'])!=$_SESSION['valicode']){
		$msg = array("验证码输入有误");
	}else{
		$_SESSION['valicode']="";
		$re = borrowClass::Cancel(array("id"=>$_POST['id']));
		if($re==false){
			$msg = array("撤回失败","",$_A['query_url'].$_A['site_url']);
		}else{
			$msg = array("撤回成功","",$_A['query_url'].$_A['site_url']);
		}
	}
}
/**
 * 已还款借款
**/
elseif($_A['query_type'] == "repayment"){
	check_rank("borrow_repayment");//检查权限
	$_A['list_title'] = "还款信息";
	$data['page'] = $_A['page'];
	$data['epage'] = 10;
	$data['order'] = "repayment_time";
	$data['borrow_status'] = 3;
	if (isset($_GET['status']) && $_GET['status']!=""){
		$data['status'] = $_GET['status'];
	}
	if (isset($_GET['username']) && $_GET['username']!=""){
		$data['username'] = $_GET['username'];
	}
	if (isset($_GET['keywords']) && $_GET['keywords']!=""){
		$data['keywords'] = $_GET['keywords'];
	}
	if (isset($_GET['biaoType']) && $_GET['biaoType']!=""){
		$data['biaoType'] = $_GET['biaoType'];
	}
	if(isset($_GET['dotime1']) && $_GET['dotime1']!=""){
		$data['dotime1'] = $_GET['dotime1'];
	}
	if(isset($_GET['dotime2']) && $_GET['dotime2']!=""){
		$data['dotime2'] = $_GET['dotime2'];
	}
	if ($_GET['type']=="excel"){
			$title = array("序号","借款人","借款标题","期数","到期时间","还款金额","还款利息","还款时间","状态");
			$data['limit'] = "all";
			$result = borrowClass::GetRepaymentList($data);
			borrowClass::borrowListForExcel(array('type'=>'repaymentlist','title'=>$title,'excelresult'=>$result));
			exit;
	}
	$result = borrowClass::GetRepaymentList($data);
	if (is_array($result)){
		$pages->set_data($result);
		$_A['borrow_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
}
/**
 * 流标列表
**/
elseif ($_A['query_type'] == "liubiao"){
	check_rank("borrow_liubiao");//检查权限
	$_A['list_title'] = "流标";
	$data['page'] = $_A['page'];
	$data['epage'] = 25;
	$data['type'] = "late";
	$data['status'] = "1";
	$result = borrowClass::GetList($data);
	if (is_array($result)){
		$pages->set_data($result);
		$_A['borrow_list'] = $result['list'];
		$_A['showpage'] = $pages->show(3);
	}else{
		$msg = array($result);
	}
}
/**
 * 流标修改
**/
elseif ($_A['query_type'] == "liubiao_edit"){
	check_rank("borrow_liubiao");//检查权限
	$_A['list_title'] = "流标管理";
	if (isset($_POST['status'])){
		if(strtolower($_POST['valicode'])!=$_SESSION['valicode']){
			$msg = array("验证码输入有误");
		}else{
			$_SESSION['valicode']="";
			$data['days'] = $_POST['days'];
			$data['id'] = $_POST['id'];
			$data['status'] = $_POST['status'];
			$result = borrowClass::ActionLiubiao($data);
			if($result==true){
				$msg = array("操作成功","",$_A['query_url']."/liubiao".$_A['site_url']);
			}else{
				$msg = array("操作失败");
			}
		}
	}else{
		$data['id'] = $_GET['id'];
		$result = borrowClass::GetOne($data);
		$_A['borrow_result'] = $result;
	}
}

/**
 * 流转标停止流转
 **/
elseif ($_A['query_type']=="stoplz"){
	check_rank("borrow_stoplz");
	$id = $_GET['id'];
	if($id>0){
		$sql = "update `{borrow}` set valid_time=0 where id=$id";
		$re = $mysql->db_query($sql);
		if($re==false){
			$msg = array("操作失败");
		}else{
			$msg = array("操作成功");
		}
	}else{
		$msg = array("请不要乱操作");
	}
}
/**
 * 满标复审
**/
elseif ($_A['query_type'] == "full_view"){
	global $mysql;
	check_rank("borrow_full_view");//检查权限
	$_A['list_title'] = "满标处理";
	if(!isset($_POST['id']) && !isset($_GET['id'])){
		$msg = array("操作有误");
	}elseif (isset($_POST['id'])){
		if($_SESSION['valicode']!=strtolower($_POST['valicode'])){
			$msg = array("验证码不正确");
		}else{
			$_SESSION['valicode']="";
			$var = array("id","status","repayment_remark");
			$data = post_var($var);
			$data['repayment_user'] = $_G['user_id'];
            $data['verify_time'] = time();         
            $sql = "select status from {borrow}  where id=".$_POST['id'];
            $resultBorrow = $mysql->db_fetch_array($sql);
            if($resultBorrow['status']==3 && $resultBorrow['status']==4){
                $msg = array("此标已经审核过或正在审核处理中，不能重复审核");
            }else{
                $result = borrowClass::AddRepayment($data);
                if(is_bool($result)){
                	if ($result ==false){
                		$msg = array("操作失败");
                	}else{
                		$msg = array("操作成功","",$_A['query_url']."/full".$_A['site_url']);
                	}
                }else{
                	$msg = array($result);
                }
           	}
		}
		$user->add_log($_log,$result);//记录操作
	}else{
		$data['id'] = $_GET['id'];
		$_A['borrow_result'] = borrowClass::GetOne($data);
		if ($_A['borrow_result']['status']==1 && ($_A['borrow_result']['is_lz']!=1 || ($_A['borrow_result']['is_lz']==1 && $_A['borrow_result']['account_yes']==0))){
			$data['borrow_id'] = $data['id'];
			$data['page'] = $_A['page'];
			$data['epage'] = $_A['epage'];
			$result = borrowClass::GetTenderList($data);
			$_A['borrow_repayment'] = borrowClass::GetRepayment(array("id"=>$data['id']));
			if (is_array($result)){
				$pages->set_data($result);
				$_A['borrow_tender_list'] = $result['list'];
				$_A['showpage'] = $pages->show(3);
			}else{
				$msg = array($result);
			}
		}else{
			$msg = array("当前借款标用户已经撤回 或 您的操作有误, 请刷新本页面");
		}
	}
}
/**
 * 逾期还款
**/
elseif ($_A['query_type'] == "late"){
	check_rank("borrow_late");//检查权限
	$_A['list_title'] = "逾期还款";
	if (isset($_POST['id'])){
		/*
		if($_SESSION['valicode']!=$_POST['valicode']){
			$msg = array("验证码不正确");
		}else{
			$_SESSION['valicode'] = "";
			$var = array("id","status","repayment_remark");
			$data = post_var($var);
			$data['repayment_user'] = $_G['user_id'];
			$result = borrowClass::AddRepayment($data);
			if ($result ==false){
				$msg = array($result);
			}else{
				$msg = array("操作成功","",$_A['query_url']."/full".$_A['site_url']);
			}
		}
		$user->add_log($_log,$result);//记录操作
		*/
	}else{
		$data['page'] = $_A['page'];
		$data['epage'] = $_A['epage'];
		$data['status'] = "0,2";
		$data['repayment_time'] = time();
		if(isset($_GET['username'])){
			$data['username'] = $_GET['username'];
		}
		if(isset($_GET['status'])){
			$data['status'] = $_GET['status'];
		}
		if ($_GET['type']=="excel"){
			$title = array("借款编号","借款人","借款标题","期数","到期时间","应还本息","预期天数","罚金","状态");
			$data['limit'] = "all";
			$result = borrowClass::GetRepaymentList($data);
			borrowClass::borrowListForExcel(array('type'=>'late','title'=>$title,'excelresult'=>$result));
			exit;
		}
		$result = borrowClass::GetRepaymentList($data);
		if (is_array($result)){
			$pages->set_data($result);
			$_A['borrow_repayment_list'] = $result['list'];
			$_A['showpage'] = $pages->show(3);
		}else{
			$msg = array($result);
		}
	}
}
/**
 * 即将到期借款
**/
elseif ($_A['query_type'] == "lateFast"){
	$_A['list_title'] = "抵押标到期";
	if(isset($_POST['id'])){
		if($_SESSION['valicode']!=strtolower($_POST['valicode'])){
			$msg = array("验证码不正确");
		}else{
			$var = array("id","status","repayment_remark");
			$data = post_var($var);
			$data['repayment_user'] = $_G['user_id'];
			$result = borrowClass::AddRepayment($data);
			if ($result ==false){
				$msg = array($result);
			}else{
				$msg = array("操作成功","",$_A['query_url']."/full".$_A['site_url']);
			}
			$_SESSION['valicode'] = "";
		}
		$user->add_log($_log,$result);//记录操作
	}else{
		$data['page'] = $_A['page'];
		$data['epage'] = $_A['epage'];
		$data['status'] = "0,2";
        $data['is_fast'] = 1;
		$data['repayment_time'] = time();
		if(isset($_GET['status'])){
			$data['status'] = $_GET['status'];
		}
		if(isset($_GET['username'])){
			$data['username'] = $_GET['username'];
		}
		//add by weego for latefast to excel 20120831
		if (isset($_GET['type']) && $_GET['type']=="excel"){
			$title = array("序号","用户名","借款标题","期数","到期时间","应还本息","应还利息","逾期天数","罚金","状态");
			$data['limit'] = "all";
			$result = borrowClass::GetRepaymentList($data);
			borrowClass::borrowListForExcel(array('type'=>'lateFast','title'=>$title,'excelresult'=>$result));
			exit;
		}
		$result = borrowClass::GetRepaymentList($data);
		if (is_array($result)){
			$pages->set_data($result);
			$_A['borrow_repayment_list'] = $result['list'];
			$_A['showpage'] = $pages->show(3);
		}else{
			$msg = array($result);
		}
	}
}
/**
 * 逾期还款网站代还
**/
elseif ($_A['query_type'] == "late_repay"){
	check_rank("borrow_late");//检查权限
	if(isset($_POST['id'])){
		if(strtolower($_POST['valicode'])!=$_SESSION['valicode']){
			$msg = array("验证码输入有误");
		}else{
			$_SESSION['valicode']="";
			$sql = "select status from `{borrow_repayment}` where id = {$_POST['id']}";
			$result = $mysql->db_fetch_array($sql);
			if($result==false){
				$msg = array("您的操作有误");
			}else{
				if ($result['status']==1){
					$msg = array("已经还款，请不要乱操作");
				}elseif ($result['status']==2){
					$msg = array("网站已经代还，请不要乱操作");
				}else{
					$n = borrowClass::LateRepay(array("id"=>$_POST['id']));
					if(is_bool($n)){
						if($n==false){
							$msg = array("还款失败");
						}else{
							$msg = array("还款成功");
						}
					}else{
						$msg = $n;
					}
				}
			}
		}
	}elseif(isset($_GET['id'])){
		$sql = "select id from `{borrow_repayment}` where id = {$_GET['id']}";
		$result = $mysql->db_fetch_array($sql);
		if($result==false){
			$msg = array("没有相关内容");
		}else{
			$data['repayment_time'] = time();
			$data['repayment_id']=$_GET['id'];
			$result = borrowClass::GetRepaymentList($data);
			$biao_type = $result['list'][0]['biao_type'];
			require_once ROOT_PATH.'modules/borrow/biao/'.$biao_type.'biao.class.php';
			$classname = $biao_type."biaoClass";
			$dynaBiaoClass = new $classname();
			$re = $dynaBiaoClass->getWebRepayInfo(array('borrow_id'=>$result['list'][0]['borrow_id'],'order'=>$result['list'][0]['order']));
			$result['list'][0]['advance_time']=$_G['biao_type'][$biao_type]['advance_time'];
			$_A['borrow_tender_list']=$re;
			$_A['borrow_result']=$result['list'][0];
		}
	}
}
/**
 * 统计
**/
elseif ($_A['query_type'] == "tongji"){
	$_A['borrow_tongji'] = borrowClass::Tongji();
	$_A['account_tongji'] = accountClass::Tongji();
}
//防止乱操作
else{
	$msg = array("输入有误，请不要乱操作","",$url);
}
?>