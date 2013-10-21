<?php
if(!isset($_POST['sign'])){
	exit();
}
$args = $_POST;
$path = str_replace('\\','/',dirname(__FILE__));
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
$ob = new TerraceToForum($args);
class TerraceToForum{
	const USERNOTACCREDIT = '用户未授权';
	const RERRACENOTACCREDIT = '平台未授权';
	const VALICODEERROR = '验证码错误';
	const ARGSNOTWRONGFUL = '请求的参数不合法';
	const USERNOTEXISTS = '用户不存在';
	const NOTSIGN = '密文错误';
	private $user_id = '';
	private $type = '';
	private $lastid = 0;
	private $limit = 10;
	private $user_type = 1;
	private $mysql = '';
	public function TerraceToForum($args){
		$this->__construct($args);
	}
	public function __construct($args){
		$args = $this->utf8_gbk($args);
		require_once ROOT_PATH.'/core/function.inc.php';
		require_once ROOT_PATH.'/core/common.inc.php';
		require_once ROOT_PATH.'/core/mysql.class.php';
		$this->mysql = new Mysql($db_config);
		$this->manageArgs($args);
	}
	private function manageArgs($args){
		$array = array('account','accountlog','cash','recharge','tender','collection','announcement','accounttype','unauthorized');
		if(!in_array($args['type'],$array)){
			$this->error(self::ARGSNOTWRONGFUL);
			exit();
		}else{
			$this->type = $args['type'];
		}
		//用户类型
		if(isset($args['user_type']) && is_numeric($args['user_type'])){
			$this->user_type = intval($args['user_type']);
		}
		if(isset($args['lastid']) && is_numeric($args['lastid'])){
			$this->lastid = $args['lastid'];
		}
		if(isset($args['limit']) && is_numeric($args['limit'])){
			$this->limit = $args['limit'];
		}
		//请求时间
		if($args['time']<=0){
			$this->error(self::ARGSNOTWRONGFUL);
			exit();
		}
		//加密key
		if($args['sign']==''){
			$this->error(self::NOTSIGN);
			exit();
		}
		//用户id,用户key,系统key
		if($this->user_type==1){
			$username = $args['username'];
			if ($username == ''){
				$this->error(self::USERNOTEXISTS);
				exit();
			}
			$sql = "select user_id,forum_key,forum_accredit from `{user}` where username='{$username}'";
			$user_result = $this->mysql->db_fetch_array($sql);
			if($user_result['forum_accredit']!=1){
				$this->error(self::USERNOTACCREDIT);
				exit();
			}else{
				$this->user_id = $user_result['user_id'];
				$args['key'] = $user_result['forum_key'];
			}
		}
		$sql_1 = "select value from `{system}` where nid='con_forum_key'";
		$system_k = $this->mysql->db_fetch_array($sql_1);
		if($system_k['value']==''){
			$this->error(self::RERRACENOTACCREDIT);
			exit();
		}else{
			$system_key = explode(";",$system_k['value']);
			$args['skey'] = $system_key[1];
			$args['pid'] = $system_key[0];
		}
		$sign = $args['sign'];
		unset($args['sign']);
		$md_key = $this->sign($args);
		if($sign == $md_key){
			$this->toSubmit();
		}else{
			$this->error(self::NOTSIGN);
			exit();
		}
	}
	/*
	 * 获取资金日志
	 */
	private function getAccountlogList(){
		$type_array = $this->getAccounttypeList();
		$fee_array = array('fee','recharge_fee','tender_mange','tixian_fee');
		$reward_array = array('award_add','vouch_award','recharge_reward');
		$sql = 'select * from `{account_log}` where user_id='.$this->user_id.' and id>'.$this->lastid.' order by id asc limit '.$this->limit;
		if($this->limit==1){
			$result =  $this->mysql->db_fetch_array($sql);
			if (in_array($result['type'], $fee_array)){
				$result['type'] = 'fee';
				$result['type_name'] = '手续费';
			}elseif (in_array($result['type'], $reward_array)){
				$result['type'] = 'reward';
				$result['type_name'] = '奖励';
			}else{
				$result['type_name'] = $type_array[$result['type']];
			}
		}else{
			$result = $this->mysql->db_fetch_arrays($sql);
			foreach ($result as $k=>$v){
				if (in_array($v['type'], $fee_array)){
					$result[$k]['type'] = 'fee';
					$result[$k]['type_name'] = '手续费';
				}elseif (in_array($v['type'], $reward_array)){
					$result[$k]['type'] = 'reward';
					$result[$k]['type_name'] = '奖励';
				}else{
					$result[$k]['type_name'] = $type_array[$v['type']];
				}
			}
		}
		return $result;
	}
	/*
	 * 获取资金类型
	 */
	private function getAccounttypeList(){
		if (file_exists(ROOT_PATH.'/data/parameter/parameter_linkage.php')){
			include ROOT_PATH.'/data/parameter/parameter_linkage.php';
		}
		if(isset($_G['linkage']['account_type'])){
			$type_array = $_G['linkage']['account_type'];
		}else{
			$re = $this->mysql->db_fetch_arrays('select p1.*,p2.nid from {linkage} p1 left join {linkage_type} as p2 on p1.type_id=p2.id where p2.nid="account_type"');
			$type_array = array();
			foreach ($re as $v){
				$type_array[$v['value']] = $v['name'];
			}
		}
		return $type_array;
	}
	/*
	 * 获取资金
	*/
	private function getAccountList(){
		$sql = 'select * from `{account}` where user_id='.$this->user_id;
		$re = $this->mysql->db_fetch_array($sql);
		if(empty($re)){
			return array('total'=>0,'use_money'=>0,'no_use_money'=>0,'collection'=>0);
		}
		return $re;
	}
	/*
	 * 获取提现记录
	 */
	private function getCashList(){
		$sql = 'select * from `{account_cash}` where user_id='.$this->user_id.' and id>'.$this->lastid.' order by id asc limit '.$this->limit;
		if($this->limit==1){
			return $this->mysql->db_fetch_array($sql);
		}else{
			return $this->mysql->db_fetch_arrays($sql);
		}
	}
	/*
	 * 获取充值记录
	 */
	private function getRechargeList(){
		$sql = 'select * from `{account_recharge}` where user_id='.$this->user_id.' and id>'.$this->lastid.' order by id asc limit '.$this->limit;
		if($this->limit==1){
			return $this->mysql->db_fetch_array($sql);
		}else{
			return $this->mysql->db_fetch_arrays($sql);
		}
	}
	/*
	 * 获取投标记录
	 */
	private function getTenderList(){
		$sql = 'select p1.*,p2.name borrow_name from `{borrow_tender}` p1 left join `{borrow}` p2 on p1.borrow_id=p2.id where p1.status!=2 and p1.user_id='.$this->user_id.' and p1.id>'.$this->lastid.' order by id asc limit '.$this->limit;
		if($this->limit==1){
			return $this->mysql->db_fetch_array($sql);
		}else{
			return $this->mysql->db_fetch_arrays($sql);
		}
	}
	/*
	 * 获取代收记录
	 */
	private function getCollectionList(){
		$sql = 'select p1.* from `{borrow_collection}` p1 left join 
				`{borrow_tender}` p2 on p1.tender_id=p2.id where p2.user_id='.$this->user_id.' and p1.id>'.$this->lastid.' order by id asc limit '.$this->limit;
		if($this->limit==1){
			return $this->mysql->db_fetch_array($sql);
		}else{
			return $this->mysql->db_fetch_arrays($sql);
		}
	}
	/*
	 * 获取公告
	 */
	private function getAnnouncementList(){
		if($this->user_type==2){
			$sql = 'select * from `{article}` where site_id=22 and  id>'.$this->lastid.' limit '.$this->limit;
			if($this->limit==1){
				return $this->mysql->db_fetch_array($sql);
			}else{
				return $this->mysql->db_fetch_arrays($sql);
			}
		}else{
			$this->error(self::ARGSNOTWRONGFUL);
		}
	}
	/*
	 * 取消授权
	*/
	private function unauthorized(){
		$sql = "update `{user}` set forum_key='',forum_accredit=0 where user_id=".$this->user_id.' limit 1';
		return $this->mysql->db_query($sql);
	}
	public function __call($function, $agrs){
		return self::ARGSNOTWRONGFUL;
	}
	/*
	 * 加密
	 */
	private function sign($data){
		$data = $this->gbk_utf8($data);
		ksort($data);//排序
		$str = '';
		foreach ($data as $key=>$val) {
			$str.=",{$key}:{$val}";
		}
		$str = substr($str, 1);
		return strtoupper(md5($str));
	}
	/*
	 * 回传参数
	 */
	private function toSubmit(){
		if($this->type=='unauthorized'){
			$result = $this->unauthorized();
			$re = array();
			$re['error'] = $result==false?1:0;
		}else{
			$type = ucwords($this->type);
			$type = 'get'.$type.'List';
			$result = $this->$type();
			$re = $this->gbk_utf8($result);
		}
		echo json_encode($re);
		exit();
	}
	private function error($error){
		$data['error'] = 1;
		$data['msg'] = $error;
		$re = $this->gbk_utf8($data);
		echo json_encode($re);
		exit();
	}
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
	private function utf8_gbk($arr){
		if(is_array($arr)){
			foreach($arr as $k=>$v){
				if(is_array($v)){
					$re = $this->utf8_gbk($v);
					$arr[$k] = $re;
				}else{
					$arr[$k] = iconv('utf-8','gbk',$v);
				}
			}
		}else{
			$arr = iconv('utf-8','gbk',$arr);
		}
		return $arr;
	}
}
?>