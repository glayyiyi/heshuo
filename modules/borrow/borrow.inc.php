<?php
if (!defined('ROOT_PATH'))  die('不能访问');//防止直接访问
include_once("borrow.class.php");

//liukun add for bug 52 begin
$firePHPEnable=TRUE;
if ($firePHPEnable){
	require_once('modules/FirePHPCore/FirePHP.class.php');
	require_once('modules/FirePHPCore/fb.php');
	ob_start();

	$firephp = FirePHP::getInstance(true);
}
//liukun add for bug 52 end

if ($_U['query_type'] == "add" || $_U['query_type'] == "update"){
	//发布借款标锁 20121110 add by weego 
	//---------------apc高并发内存共享锁开启--------------------------
	//liukun add for bug 296 begin
	 
//	require_once(ROOT_PATH."core/slock.class.php");
//	$lockTenderNo="addborrow"; //根据addborrow进行锁定控制排队进行
//	$lock = new slock();
//	$lock->lock($lockTenderNo);
 
	//liukun add for bug 296 end
	//---------------apc高并发内存共享锁开启--------------------------
	
	//验证用户是否有发过标 add by weego 20120613
	$result = borrowClass::GetOnes(array("user_id"=>$_G['user_id']));
	if (!isset($_POST['name'])){
		$msg = array("请不要乱操作","","/publish/index.html");
	//暂时注释掉 2012-9-6 jackfeng
	}elseif (strtolower ($_POST['valicode'])!=$_SESSION['valicode']){
		$msg = array("验证码不正确");
	}elseif($_POST['style']==1 && $_POST['time_limit']%3!=0){
		$msg = array("您选择的是按季还款，借款期限请填写3的倍数");
        }elseif($_POST['award']==1 && $_POST['part_account']<5){
                $msg = array("您选择的是按金额奖励，请填写奖励金额值(不能低于5元)");
        }elseif($_POST['award']==2 && $_POST['funds'] < 0.1){
                $msg = array("您选择的是按比例奖励，请填写奖励比例值( 0.1% ~ 6% )");
        }elseif(isset($_POST['isDXB']) && (!isset($_POST['pwd']) || $_POST['pwd'] == "" ) ){
                $msg = array("您选择了定向标，请输入定向标的密码.");
        }elseif(isset($_POST['is_lz']) && $_POST['account']%100!=0){
        	$msg = array("流转标的借款金额必须是100的整数倍.");
        }else{
		$var = array("name","use","time_limit","style","account","apr","lowest_account","most_account","valid_time","award","part_account","funds","is_false","open_account","open_borrow","open_tender","open_credit","content","is_vouch","vouch_award","vouch_user");
		$data = post_var($var);
		if(isset($_POST['ismb'])){
			$data['time_limit'] = 1;
			$data['style'] = 0;
			$data['is_mb'] = intval($_POST['ismb']);
		}
		if(isset($_POST['isjin'])){
			$data['is_jin'] = intval($_POST['isjin']);
		}
		if(isset($_POST['isfast'])){
			$data['is_fast'] = intval($_POST['isfast']);
		}
		if(isset($_POST['is_vouch'])){
			$data['is_vouch'] = intval($_POST['is_vouch']);
		}
		if(isset($_POST['is_lz'])){
			$data['is_lz'] = intval($_POST['is_lz']);
			$data['lowest_account'] = 100;
			$data['style'] = 0;
		}
		if(isset($_POST['isxin'])){
			$data['is_xin'] = intval($_POST['isxin']);
		}
		//按天 add by weego for 天标  20120513
		if((int)$_POST['isday']==1){
			//liukun add for bug 324 begin
			$data['style'] = 0;
			//liukun add for bug 324 end
			$data['time_limit'] = 1;
			$data['time_limit_day'] = intval($_POST['time_limit_day']);
			$data['time_limit_day'] = $data['time_limit_day']?$data['time_limit_day']:30;
			$data['isday'] = intval($_POST['isday']);
		}
		//按天 add by jackfeng for 担保新增 20120716
		if((int)$_POST['danbao']==1){
			$data['danbao'] = 1;
		}
        //定向标 密码
        if(isset($_POST['pwd'])){
            if(isset($_POST['pwd']) && $_POST['pwd'] != ""){
                  $data['pwd'] = htmlspecialchars($_POST['pwd']);
            }
       	}
		//liukun add for bug 294 begin 标种参数化，发标时指定标种类型    
        if(isset($_POST['biao_type'])){
        	$data['biao_type'] = $_POST['biao_type'];
        }
		//liukun add for bug 294   end  标种参数化，发标时指定标种类型              
		$data['open_account'] = 1;
		$data['open_borrow'] = 1;
		$data['open_credit'] = 1;
		if ($_POST['submit']=="保存草稿"){
			$data['status'] = -1;
		}else{
			$data['status'] =0;
		}
                
		$data['user_id'] = $_G['user_id'];
		if ($_U['query_type'] == "add"){
			//liukun add for bug 294 begin 标种参数华
			$result = borrowClass::Add($data);
			//借款标的审核额度的
			//liukun add for bug 294  end  标种参数华
		}else{
			$data['id'] = $_POST['id'];
			$data['user_id'] = $_G['user_id'];
			$result = borrowClass::Update($data);
		}
		if ($result===true){
//			global $mysql;
//			$auto['id']=$mysql->db_insert_id();
//			$auto['user_id']=$_G['user_id'];
//			$auto['total_jie']=$data['account'];
//			$auto['zuishao_jie']=$data['lowest_account'];
//			borrowClass::auto_borrow($auto);
			$msg = array("借款发布成功。","","/index.php?user&q=code/borrow/publish");
		}else{
			$msg = array($result);
		}
		
	}
	//---------------apc高并发内存共享锁关闭--------------------------
	//liukun add for bug 296 begin
	 
//	$lock->release($lockTenderNo);
	 
	//发布借款标锁 add by weego 20121110
	//---------------apc高并发内存共享锁关闭--------------------------

	
}elseif ($_U['query_type'] == "cancel"){
	$data['id'] = (int)$_REQUEST['id'];
	$data['user_id'] = $_G['user_id'];
	$result = borrowClass::Cancel($data);
	if(is_bool($result)){
		if($result==false){
			$msg = array("撤销失败!","","index.php?user&q=code/borrow/publish");
		}else{
			$msg = array("撤销成功!","","index.php?user&q=code/borrow/publish");
		}
	}else{
		$msg = array($result,"","index.php?user&q=code/borrow/publish");
	}
}

//删除
/*
elseif ($_U['query_type'] == "del"){
	$data['id'] = $_REQUEST['id'];
	$data['user_id'] = $_G['user_id'];
	$data['status'] = -1;
	$result = borrowClass::Delete($data);
	if ($result==false){
		$msg = array($result);
	}else{
		$msg = array("招标删除成功!");
	}
}
*/
//流转标自动回购 add by weego 20121208 
elseif ($_U['query_type'] == "autoReBackbuy"){
	$data='';
	$result = borrowClass::autoLZRepay($data);
	if($result==false){
		$msg = array("回购失败!");
	}else{
		$msg = array("回购成功!");
	}
}
//用户投标
elseif ($_U['query_type'] == "tender"){
	//投标锁 20121010 add by weego 
	//liukun add for bug 296 begin
	if(1==2){
	require_once(ROOT_PATH."core/slock.class.php");
	$_POST['id']=(int)$_POST['id'];

	$lockTenderNo=$_POST['id']; //根据标的id进行锁定控制排队进行
	//---------------apc高并发内存共享锁开启--------------------------
	$lock = new slock();
	$lock->lock($lockTenderNo);
	}
	//liukun add for bug 296 end
	 
	if (strtolower($_POST['yzmcode'])!=$_SESSION['valicode'] || !isset($_POST['yzmcode'])){//秒标 验证码 by timest 2012-10-11
		$msg = array("验证码错误",'','/invest/a'.$_POST['id'].'.html');
	}else{
		$_SESSION['valicode']="";
		include_once(ROOT_PATH."modules/account/account.class.php");
		$borrow_result = borrowClass::GetOne(array("id"=>$_POST['id'],"tender_userid"=>$_G['user_id']));//获取借款标的单独信息
		$is_lz=$borrow_result['is_lz'];
		if($is_lz==1){
			$account_money = (int)$_POST['flow_count']*100;
			$postmoney = (int)$_POST['flow_count']*100;
		}else{
			$account_money = $_POST['money'];
			$postmoney = $_POST['money'];
		}
		//liukun add for bug 52 begin
		fb($account_money, FirePHP::TRACE);
		fb($borrow_result, FirePHP::TRACE);
		//liukun add for bug 52 end
		//定向标密码
		$dxbPWD = $_POST['dxbPWD'];

		//liukun add for bug 151 begin
		//1.计算借款标剩余可投标量
		$can_account = $borrow_result['account'] - $borrow_result['account_yes'];
		//2.计算最大投标吧，与本客户累计投标量之间的差量
		//系统中使用0表示投标金额无限制，为了便于计算，这里做一个转换，当是0时，直接转换为10000,0000
		if ($borrow_result['most_account']==0){
			$borrow_result['most_account']=100000000;
		}
		$can_single_account = $borrow_result['most_account'] - $borrow_result['tender_yes'];
		//3.判断个人最小投标与剩余投标，取两者中的小者为最小投标量
		$lowest_account = $borrow_result['lowest_account'];

		if($can_account < $lowest_account){
			$lowest_account = $can_account;
		}

		if($can_single_account < $lowest_account){
			$lowest_account = $can_single_account;
		}


		//如果剩余投标量小于最小投标量，表示这是投标的最后一点差额，这个时候，实际投标以剩余量为准，不考虑投标额限制
		if ($account_money > $can_account){
			$account_money = $can_account;
		}
		//如果投标金额大于个人还可投标金额，实际投标金额为个人还可投标金额
		if ($account_money > $can_single_account){
			$account_money = $can_single_account;
		}
		//liukun add for bug 151 end
		
		//*********************************
		//add by jackfeng 2012-10-08 快速标
		$kuai =  $borrow_result['is_kuai'];
		$cashKuaiMoney = 0;
		/*
		if($kuai == 1){
			//统计可用的线下充值资金,以发标之后的线下充值时间为准
			$dayTimeD=$borrow_result['addtime'];;//发标时间;
			$sql = "select sum(money) as num from `{account_recharge}` where user_id = {$_G['user_id']} and status=1  and type=2 and addtime>".$dayTimeD;
		
			$resultCash = $mysql->db_fetch_arrays($sql);
			foreach ($resultCash as $key => $value){
				$cashKuaiMoney=$value["num"];
			}
			if(!isset($cashKuaiMoney)){
				$cashKuaiMoney=0;
			}

			//统计发标之后投快速标的资金(包括完成和未完成的)
			$sql = "select sum(account) as num From  `{borrow_tender}` where user_id = {$_G['user_id']} and borrow_id in(select id from `{borrow}` where is_kuai=1 and status=1 and addtime>=".$dayTimeD.")  and addtime>".$dayTimeD;
			$resultCash2 = $mysql->db_fetch_arrays($sql);
			foreach ($resultCash2 as $key => $value){
				$cashKuaiMoney2=$value["num"];
			}
			if(isset($cashKuaiMoney2)){
				$cashKuaiMoney = $cashKuaiMoney-$cashKuaiMoney2;
			}
		}*/
		//*********************************
		if($_G['user_id'] == $borrow_result['user_id']){
			$msg = array("自己不能投自己发布的标！");
		}elseif ($_G['user_result']['islock']==1){
			$msg = array("您账号已经被锁定，不能进行投标，请跟管理员联系");
		}elseif (!is_array($borrow_result)){
			$msg = array($borrow_result);
		}elseif ($borrow_result['account_yes']>=$borrow_result['account']){
			$msg = array("此标已满，请勿再投");
		}elseif ($borrow_result['verify_time'] == "" || $borrow_result['status'] != 1){
			$msg = array("此标尚未通过审核");
		}elseif($kuai == 1 && $cashKuaiMoney<$account_money){
			$msg = array("您好，您的投标金额大于可用于你当前可投快速标的可用资金(此标发布后的线下充值资金才能投标)");
		}
		//liukun add for bug 这里永远也不会满足，因为$borrow_result['valid_time']是有效天数，
		//elseif ($borrow_result['verify_time'] + $borrow_result['valid_time']>time()){
		elseif (($borrow_result['verify_time'] + $borrow_result['valid_time'] * 3600 * 24) <time()){
			$msg = array("此标已过期");
		}
		elseif(!is_numeric($account_money)){
			$msg = array("请输入正确的金额",'','/invest/a'.$_POST['id'].'.html');
		}
		//liukun add for bug 151 begin
		elseif($account_money < $lowest_account ){
			$msg = array("您的投标金额{$account_money}不能小于最小投标金额{$lowest_account}",'','/invest/a'.$_POST['id'].'.html');
		}
		elseif($can_single_account == 0 ){
			$msg = array("您的总投标金额已经到达最大限制{$borrow_result['most_account']}",'','/invest/a'.$_POST['id'].'.html');
		}
		//liukun add for bug 151 end

		elseif($dxbPWD != $borrow_result['pwd']){
			$msg = array("您输入的定向标密码不正确，请向发标者取得正确的密码.",'','/invest/a'.$_POST['id'].'.html');
		}
		//liukun add for bug 58 begin
		elseif (md5($_POST['paypassword'])!=$_G['user_result']['paypassword']){
			$msg = array("支付交易密码不正确",'','/invest/a'.$_POST['id'].'.html');
		}
		//liukun add for bug 58 end
		else{
			$account_result =  accountClass::GetOneAccount(array("user_id"=>$_G['user_id']));//获取当前用户的余额
			if (($borrow_result['account']-$borrow_result['account_yes'])<$account_money){
				$account_money = $borrow_result['account']-$borrow_result['account_yes'];
			}
			if ($account_result['use_money']<$account_money){
				$msg = array("您的余额不足",'','/invest/a'.$_POST['id'].'.html');
			}else{
				$data['borrow_id'] = $_POST['id'];
				$data['money'] = $postmoney;
				$data['account'] = $account_money;
				$data['user_id'] = $_G['user_id'];
				$data['status'] = 5;
				$result = borrowClass::AddTender($data);//添加借款标
				if ($result === true){
					if ($borrow_result['status'] ==1 && ($borrow_result['account_yes'] + $account_money) >= $borrow_result['account'] && $borrow_result['is_lz']!=1){
						$classname = $borrow_result['biao_type']."biaoClass";
						$dynaBiaoClass = new $classname();
						$auto_full_verify_result = $dynaBiaoClass->get_auto_full_verify($borrow_result['biao_type']);
						if ($auto_full_verify_result==1){
							$data_e['id'] = $_POST['id'];
							$data_e['status'] = '3';
							$data_e['repayment_remark'] = '自动复审';
							borrowClass::AddRepayment($data_e);
						}
					}
					$msg = array("投标成功","","/index.php?user&q=code/borrow/bid");
				}else{
					if(is_bool($result) && $result==false){
						$msg = array("投标失败",'','/invest/a'.$_POST['id'].'.html');
					}else{
						$msg = array($result);
					}
				}
			}
		}
	}
	//---------------apc高并发内存共享锁关闭--------------------------
	//liukun add for bug 296 begin
	if(1==2){
	$lock->release($lockTenderNo);
	}
	//投标锁 add by weego 20121010
}
//担保标投标
elseif ($_U['query_type'] == "vouch"){
	$msg = "";
	//if ($_SESSION['valicode']!=$_POST['valicode']){
        if(1==2){
		$msg = array("验证码错误");
	}else if (1==2){
		include_once(ROOT_PATH."modules/account/account.class.php");
		$borrow_result = borrowClass::GetOne(array("id"=>$_POST['id'],"tender_userid"=>$_G['user_id']));//获取借款标的单独信息
		
		$vouch_account = $_POST['money'];
		if (($borrow_result['account']-$borrow_result['vouch_account'])<$vouch_account){
			$account_money = $borrow_result['account']-$borrow_result['vouch_account'];
		}else{
			$account_money = $vouch_account;
		}
		
		$uacc = borrowClass::GetUserLog(array('user_id'=>$_G['user_id']));
		
		if ($_G['user_result']['islock']==1){
			$msg = array("您账号已经被锁定，不能进行担保，请跟管理员联系");
		}elseif (!is_array($borrow_result)){
			$msg = array($borrow_result);
		}elseif ($uacc['total']<$account_money){
			$msg = array("您的帐户总额小于您想担保的总金额，不能担宝");
		}elseif ($borrow_result['vouch_account']>=$borrow_result['account']){
			$msg = array("此担保标担保金额已满，请勿再担保");
		}elseif ($borrow_result['verify_time'] == "" || $borrow_result['status'] != 1){
			$msg = array("此标尚未通过审核");
		}elseif ($borrow_result['verify_time'] + $borrow_result['valid_time']>time()){
			$msg = array("此标已过期");
		}elseif (md5($_POST['paypassword'])!=$_G['user_result']['paypassword']){
			$msg = array("支付交易密码不正确");
		}else{
			//获取投资的担保额度borrowClass::GetUserLog
			$vouch_amount =  borrowClass::GetAmountOne($_G['user_id'],"tender_vouch");
			
			if ($vouch_amount['account_use']<$account_money){
				$msg = array("您的担保金额不足");
			}else{
				$data['borrow_id'] = $_POST['id'];
				$data['vouch_account'] = $vouch_account;
				$data['account'] = $account_money;
				$data['user_id'] = $_G['user_id'];
				$data['content'] = $_POST['content'];
				$data['status'] = 0;
				
				//判断是否是担保人
				if ($borrow_result['vouch_user']!=""){
					$_vouch_user = explode("|",$borrow_result['vouch_user']);
					if (!in_array($_G['user_result']['username'],$_vouch_user)){
						$msg = array("此担保标已经指定了担保人，你不是此担保人，不能进行担保");
					}
				}
				if ($msg==""){
					$result = borrowClass::AddVouch($data);//添加担保标
					if ($result==false){
						$msg = array($result);
					}else{
						$msg = array("担保成功","","/index.php?user&q=code/borrow/bid");
						$_SESSION['valicode'] = "";
						
					}
				}
			}
		}
	}
	elseif ($_G['user_result']['islock']==1){
		$msg = array("您账号已经被锁定，不能进行担保，请跟管理员联系");
	}
	else{
	
		$result = borrowClass::AddVouch($_POST);//array("borrow_id"=>$_POST['id'],"tender_userid"=>$_G['user_id']));//添加担保标
	
		if ($result===true){
			$msg = array("担保成功","","/index.php?user&q=code/borrow/bid");
			$_SESSION['valicode'] = "";
		}else{
			$msg = array($result);
		}
	}
	
}


//查看标的还款信息
elseif ($_U['query_type'] == "repayment_view"){
	$data['id'] = $_GET['id'];
	if ($data['id']==""){
		$msg = array("您的输入有误");
	}
	$data['user_id'] = $_G['user_id'];
	$result =  borrowClass::GetOne($data);
	if ($result==false){
		$msg = array("您的操作有误");
	}else{
		$_U['borrow_result'] = $result;
	}
}

//还款
elseif ($_U['query_type'] == "repay"){
	$data['id'] = $_REQUEST['id'];
	if ($data['id']==""){
		$msg = array("您的输入有误");
	}else{
		$data['user_id'] = $_G['user_id'];
		$result =  borrowClass::Repay($data);
		if (is_bool($result)){
			if($result==false){
				$msg = array("操作失败","","/index.php?user&q=code/borrow/repayment");
			}else{
				$msg = array("操作成功","","/index.php?user&q=code/borrow/repayment");
			}
		}else{
			$msg = array($result,"","/index.php?user&q=code/borrow/repayment");
		}
	}
}
//额度申请
elseif ($_U['query_type'] == "limitapp"){
	if (isset($_POST['account']) && $_POST['account']>0){
		$var = array("account","content","type","remark");
		$data = post_var($var);
		$data['user_id'] = $_G['user_id'];
		$result = borrowClass::GetAmountApplyOne(array("user_id"=>$data['user_id'],"type"=>$data['type']));
		if ($result!=false && $result['verify_time']+60*60*24*30 >time()){
			$msg = array("请一个月后再申请");
		}elseif ($result!=false && $result['addtime']+60*60*24*30 >time() && $result['status']==2){
			$msg = array("您已经提交了申请，请等待审核");
		}else{
			$data['status'] = 2;
			$result =  borrowClass::AddAmountApply($data);//获取当前用户的余额
			if ($result!==true){
				$msg = array($result);
			}else{
				$msg = array("额度申请成功，请等待管理员审核","","/index.php?user&q=code/borrow/limitapp");
			}
		}
	}
}
	
//增加自动投标
elseif ($_U['query_type'] == "auto_add"){
	$_POST['user_id'] = $_G['user_id'];
	$_POST['addtime'] = time();
	$re = borrowClass::add_auto($_POST);
	if($re===false){
		$msg = array("您已经添加了1条自动投标，最多只能添加1条，您可以删除或者修改","","/index.php?user&q=code/borrow/auto");
	}else{
		$msg = array("自动投标设置成功","","/index.php?user&q=code/borrow/auto");
	}
}

//修改自动投标
elseif ($_U['query_type'] == "auto_new"&&is_numeric($_GET['id'])){
	$result = borrowClass::GetAutoId($_GET['id']);
	$_U['auto_result'] = $result;
}

//删除自动投标
elseif ($_U['query_type'] == "auto_del"&&is_numeric($_GET['id'])){
	$result = borrowClass::del_auto($_GET['id']);
	if($result) $msg = array("自动投标删除成功","","/index.php?user&q=code/borrow/auto");
}
else{
	
	
}

$template = "user_borrow.html.php";
if($_U['query_type'] == "auto"||$_U['query_type'] == "auto_new")  $template = "auto_user_borrow.html.php";
?>
