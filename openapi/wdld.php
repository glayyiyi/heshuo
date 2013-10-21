<?php
if(!isset($_POST['key'])){
	exit('请求的参数不合法');
}
header("Content-Type:text/html; charset=UTF-8");
define('ROOT_PATH', dirname(__FILE__) . '/../');
date_default_timezone_set('Asia/Shanghai');
$ob = new forumIntface($_POST);
class forumIntface{
	const TYPENONENTITY = '类型错误';
	const NOTACCREDITUSER = '未授权用户';
	const NOTHAVEDATA = '无相关数据';
	const ERRORKEY = '密钥错误';
	const MYSQLERROR = '链接数据库出错';
	const BORROWIDERROR = '标id有误';
	const TIMEFORMERROR = '时间格式有误';
	const EXCEEDVISITTIMES = '访问过于频繁';
	const ACCOUNTLOCK = '访问频率超出，你的访问暂时被锁定，请联系我们解锁';
	const ACCOUNISTLOCK = '账号被锁定';
	private $type_arr = array('getNewBorrows','getBorrowsByDate');//限制访问方法
	private $mysql = '';//数据库资源
	private $host = '';//网站域名
	private $uid = '';//第三方id
	private $showType = 1;//回传数据格式1：XML，2：json
	private $accreditInfo = '';//平台授权信息
	private $visitTime = '';//访问时间
	public function __construct($data){
		require ROOT_PATH.'core/common.inc.php';
		require ROOT_PATH.'core/mysql.class.php';
		$this->mysql = new Mysql($db_config);
		$this->init($data);
		if($this->mysql instanceof Mysql){
			$this->$data['type']();
		}else{
			$this->error(self::MYSQLERROR);
		}
	}
	/*
	 * 初审化数据，认证
	 */
	private function init($data){
		$this->showType = $data['returnType'];
		if(!in_array($data['type'], $this->type_arr)){
			$this->error(self::TYPENONENTITY);
		}
		//根据uid获取相应的key
		$this->uid = $data['uid'];
		$this->visitTime = time();
		$this->setAccreditInfo();
		$Mkey = $data['key'];
		unset($data['key']);
		$str = '';
		foreach($data as $k=>$v){
			$str.= '&'.$k.'='.$v;
		}
		$str = substr($str, 1);
		$mi = md5($str.$this->accreditInfo['ukey']);
		if($mi!=$Mkey){
			$this->error(self::ERRORKEY);
		}
		$this->isExceedVisitTime();
		unset($data['uid']);
		unset($data['type']);
		foreach($data as $key=>$value){
			$this->$key=$value;
		}
		$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https')  === false ? 'http' : 'https';
		$this->host = $protocol.'://'.$_SERVER['HTTP_HOST'];
	}
	/*
	 * 设置授权信息
	 */
	private function setAccreditInfo(){
		$info = $this->mysql->db_fetch_array('select * from {third_accredit_info} where uid='.$this->uid);
		if(empty($info)){
			$this->error(self::NOTACCREDITUSER);
		}elseif($info['status']!=1){
			$this->error(self::ACCOUNISTLOCK);
		}
		$this->accreditInfo = $info;
	}
	/*
	 * 判断用户是否超过了访问次数
	 */
	private function isExceedVisitTime(){
		$info = $this->accreditInfo;
		if($info['timeperiod']+60>$this->visitTime){
			if($info['minutetimes']>$info['totaltimes'] && $info['minutetimes']>$info['totaltimes']*1.5){
				$this->mysql->db_query('update {third_accredit_info} set status=0 where uid='.$this->uid);
				$this->error(self::ACCOUNTLOCK);
			}elseif($info['minutetimes']>$info['totaltimes']){
				$this->mysql->db_query('update {third_accredit_info} set minutetimes=minutetimes+1,timeperiod='.$this->visitTime.' where uid='.$this->uid);
				$this->error(self::EXCEEDVISITTIMES);
			}else{
				$this->mysql->db_query('update {third_accredit_info} set minutetimes=minutetimes+1 where uid='.$this->uid);//不重置时间周期，周期内的访问次数加1
				return true;
			}
		}
		$this->mysql->db_query('update {third_accredit_info} set minutetimes=1,timeperiod='.$this->visitTime.' where uid='.$this->uid);//重置时间周期和周期内的访问次数
		return true;
	}
	/*
	 * 获取当前正在进行投标中的标信息
	 */
	private function getNewBorrows(){
		$fieldArr = array(
					'p1.id',
					'p1.name as title',
					'p1.biao_type as type',
					'p1.style as repaymentType',
					'p1.time_limit',
					'p1.isday',
					'p1.time_limit_day',
					'p1.account as money',
					'p1.account_yes',
					'p1.apr as yearRate',
					'p1.award',
					'p1.funds',
					'p1.part_account',
					'p1.verify_time as startTime',
					'p1.pwd',
					'p2.username as owner'
					);
		$fields = implode(',', $fieldArr);
		$sql = 'select '.$fields.' from {borrow} as p1 left join {user} as p2 on p1.user_id=p2.user_id where p1.status=1 and (p1.verify_time+p1.valid_time*25*60*60)>'.time();
		$data = $this->mysql->db_fetch_arrays($sql);
		$biao_info = $this->getBiaoInfo();
		foreach($data as $key=>$value){
			$data[$key]['bidInfoUrl'] = $data[$key]['bidUrl'] = $this->host.'/invest/a'.$value['id'].'.html';
			$data[$key]['type'] = $this->getBiaoType($value['type']);
			$data[$key]['repaymentType'] = $this->getRepayType($value['repaymentType']);
			if($value['isday']==1){
				$data[$key]['limitTime'] = $value['time_limit_day']/100;
				$data[$key]['dayBid'] = 1;
			}else{
				$data[$key]['dayBid'] = 0;
				$data[$key]['limitTime'] = $value['time_limit'];
			}
			$data[$key]['prize'] = 0;
			$data[$key]['prizeMoney'] = 0;
			if($value['award']==2){
				$data[$key]['prize'] = $value['funds'];
				$data[$key]['prizeMoney'] = 0;
			}else if($value['award']==1){
				$data[$key]['prize'] = 0;
				$data[$key]['prizeMoney'] = $value['part_account'];
			}
			$data[$key]['process'] = round($value['account_yes']/$value['money'],2);
			$data[$key]['loanPlatform'] = $this->uid;
			if($value['isday']==1){
				$borrow_fee=round($value['money']*$biao_info[$value['type']]['borrow_day_fee_rate']/30*$value['time_limit_day'],2);
			}else{
				$_fee_rate = $biao_info[$value['type']]['borrow_fee_rate_start'] + (($value['time_limit'] - $biao_info[$value['type']]['borrow_fee_rate_start_month_num'])>0?($value['time_limit'] - $biao_info[$value['type']]['borrow_fee_rate_start_month_num'])*$biao_info[$value['type']]['borrow_fee_rate']:0);
				$borrow_fee = round($value['money']*$_fee_rate,2);
			}
			$data[$key]['fee'] = $borrow_fee;
			$data[$key]['hasPwd'] = 0;
			if($value['pwd']!=''){
				$data[$key]['hasPwd'] = 1;
			}
			$data[$key]['startTime'] = date("YmdHis",$value['startTime']);
			$data[$key]['endTime'] = '';
			unset($data[$key]['time_limit_day']);
			unset($data[$key]['time_limit']);
			unset($data[$key]['isday']);
			unset($data[$key]['award']);
			unset($data[$key]['funds']);
			unset($data[$key]['part_account']);
			unset($data[$key]['account_yes']);
			unset($data[$key]['pwd']);
		}
		$this->show($data);
	}
	/*
	 * 获取某时间段的标
	 */
	private function getBorrowsByDate(){
		$startTime = $this->formatTime($this->startTime, 1);
		$endTime = $this->formatTime($this->endTime, 0);
		if($startTime==false || $endTime==false || $startTime>$endTime){
			return $this->error(self::TIMEFORMERROR);
		}
		$fieldArr = array(
					'p1.id',
					'p1.name as title',
					'p1.biao_type as type',
					'p1.style as repaymentType',
					'p1.time_limit',
					'p1.isday',
					'p1.time_limit_day',
					'p1.account as money',
					'p1.account_yes',
					'p1.apr as yearRate',
					'p1.award',
					'p1.funds',
					'p1.part_account',
					'p1.verify_time as startTime',
					'p1.pwd',
					'p2.username as owner'
					);
		$fields = implode(',', $fieldArr);
		$sql = 'select '.$fields.' from {borrow} as p1 left join {user} as p2 on p1.user_id=p2.user_id where p1.status=3 and p1.verify_time>='.$startTime.' and p1.verify_time<='.$endTime;
		$data = $this->mysql->db_fetch_arrays($sql);
		$biao_info = $this->getBiaoInfo();
		foreach($data as $key=>$value){
			$data[$key]['bidInfoUrl'] = $data[$key]['bidUrl'] = $this->host.'/invest/a'.$value['id'].'.html';
			$data[$key]['type'] = $this->getBiaoType($value['type']);
			$data[$key]['repaymentType'] = $this->getRepayType($value['repaymentType']);
			if($value['isday']==1){
				$data[$key]['limitTime'] = $value['time_limit_day']/100;
				$data[$key]['dayBid'] = 1;
			}else{
				$data[$key]['dayBid'] = 0;
				$data[$key]['limitTime'] = $value['time_limit'];
			}
			$data[$key]['prize'] = 0;
			$data[$key]['prizeMoney'] = 0;
			if($value['award']==2){
				$data[$key]['prize'] = $value['funds'];
				$data[$key]['prizeMoney'] = 0;
			}else if($value['award']==1){
				$data[$key]['prize'] = 0;
				$data[$key]['prizeMoney'] = $value['part_account'];
			}
			$data[$key]['process'] = round($value['account_yes']/$value['money'],2);
			$data[$key]['loanPlatform'] = $this->uid;
			if($value['isday']==1){
				$borrow_fee=round($value['money']*$biao_info[$value['type']]['borrow_day_fee_rate']/30*$value['time_limit_day'],2);
			}else{
				$_fee_rate = $biao_info[$value['type']]['borrow_fee_rate_start'] + (($value['time_limit'] - $biao_info[$value['type']]['borrow_fee_rate_start_month_num'])>0?($value['time_limit'] - $biao_info[$value['type']]['borrow_fee_rate_start_month_num'])*$biao_info[$value['type']]['borrow_fee_rate']:0);
				$borrow_fee = round($value['money']*$_fee_rate,2);
			}
			$data[$key]['fee'] = $borrow_fee;
			$data[$key]['hasPwd'] = 0;
			if($value['pwd']!=''){
				$data[$key]['hasPwd'] = 1;
			}
			$data[$key]['startTime'] = date("YmdHis",$value['startTime']);
			$data[$key]['endTime'] = '';
			unset($data[$key]['time_limit_day']);
			unset($data[$key]['time_limit']);
			unset($data[$key]['isday']);
			unset($data[$key]['award']);
			unset($data[$key]['funds']);
			unset($data[$key]['part_account']);
			unset($data[$key]['account_yes']);
			unset($data[$key]['pwd']);
		}
		$this->show($data);
	}
	/*
	 * 获取标种配置
	 */
	private function getBiaoInfo(){
		$sql = 'select * from {biao_type}';
		$data = $this->mysql->db_fetch_arrays($sql);
		$biao_type = array();
		foreach($data as $key=>$value){
			$biao_type[$value['biao_type_name']] = $value;
		}
		return $biao_type;
	}
	/*
	 * 获取还款方式
	 */
	private function getRepayType($type){
		switch($type){
			case 0:
				$id = 1;
				break;
			case 1:
				$id = 2;
				break;
			case 2:
				$id = 4;
				break;
			case 3:
				$id = 3;
				break;
			default:
				$id = 1;
				break;
		}
		return $id;
	}
	/*
	 * 显示json
	 */
	private function show($data){
		if($this->showType==1){
			$this->showXml($data);
		}
		if(is_array($data)){
			$data = $this->gbk_utf8($data);
			echo json_encode($data);
		}else{
			$this->error(self::NOTHAVEDATA);
		}
		exit();
	}
	/*
	 * 显示xml
	 */
	private function showXml($data){
		header("Content-type:text/xml");
		$str = '<?xml version="1.0" encoding="utf-8"?>';
		foreach($data as $key=>$value){
			$str .= '<bidInfos>';
			foreach($value as $k=>$v){
				$str .= "<{$k}>".$v."</{$k}>";
			}
			$str .= '</bidInfos>';
		}
		echo $this->gbk_utf8($str);
		exit();
	}
	/*
	 * 显示错误信息json
	 */
	private function error($string){
		if($this->showType==1){
			$this->errorXml($string);
		}
		$err = array('error'=>1,'msg'=>$string);
		$err = $this->gbk_utf8($err);
		echo json_encode($err);
		exit();
	}
	/*
	 * 显示错误信息xml
	 */
	 private function errorXml($string){
		header("Content-type:text/xml");
		$str = '<?xml version="1.0" encoding="UTF-8"?>';
		$str .= "<error>1</error>";
		$str .= "<msg>".$string."</msg>";
		echo $this->gbk_utf8($str);
		exit();
	}
	/*
	 * gbk转utf8
	 */
	private function gbk_utf8($arr){
		if(is_array($arr)){
			foreach($arr as $k=>$v){
				if(is_array($v)){
					$re = $this->gbk_utf8($v);
					$arr[$k] = $re;
				}else{
					$arr[$k] = iconv('gbk','utf-8',$v);
				}
			}
		}else{
			$arr = iconv('gbk','utf-8',$arr);
		}
		return $arr;
	}
	/*
	 * 格式化时间
	 */
	private function formatTime($time,$start=1){
		$time = trim($time);
		preg_match("/^[0-9]{2,4}-[0-9]{1,2}-[0-9]{1,2}\s+[0-9]{1,2}:[0-9]{1,2}:[0-9]{1,2}$/", $time, $timeArr_1);
		if(empty($timeArr)){
			preg_match("/^([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})$/", $time, $timeArr_2);
			if(empty($timeArr_2)) return false;
			if($start==1) return strtotime($time.' 00:00:00');
			return strtotime($time.' 23:59:59');
		}else{
			return strtotime($time);
		}
	}
	/*
	 * 获取标的类型
	 */
	private function getBiaoType($biaoType){
		switch($biaoType){
			case 'jin':
				$type = '净';
				break;
			case 'xin':
				$type = '信';
				break;
			case 'vouch':
				$type = '担';
				break;
			case 'fast':
				$type = '押';
				break;
			case 'miao':
				$type = '秒';
				break;
			case 'lz':
				$type = '流';
				break;
			default:
				$type = '未定义';
				break;
		}
		return $type;
	}
}
function ip_address() {
	if(!empty($_SERVER["HTTP_CLIENT_IP"])) {
		$ip_address = $_SERVER["HTTP_CLIENT_IP"];
	}else if(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
		$ip_address = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
	}else if(!empty($_SERVER["REMOTE_ADDR"])){
		$ip_address = $_SERVER["REMOTE_ADDR"];
	}else{
		$ip_address = '';
	}
	return $ip_address;
}
?>