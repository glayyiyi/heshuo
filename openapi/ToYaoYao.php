<?php
header("Content-type:text/xml");
$path = str_replace('\\','/',dirname(__FILE__));
define('ROOT_PATH', dirname(__FILE__) . '/../../');

if(!isset($_POST['type'])){
	exit();
}
$echo_type = $_POST['echo_type']=='xml'?'xml':'json';
$data = array(
		'time_start'=>$_POST['time_start'],
		'time_end'=>$_POST['time_end'],
		'type'=>$_POST['type'],
		'echo_type'=>$echo_type
		);
$MDK = '596a96cc7bf9108cd896f33c44aedc8a';
$key = md5($_POST['time'].$MDK);
if($key != $_POST['key']){
	exit();
}
$ob = new ToYaoYao($data);
class ToYaoYao{
	private $time_start = 0;
	private $time_end = 0;
	private $limit = 10;
	private $startId = 0;
	private $mysql;
	private $echo_type = "xml";
	public function __construct($data){
		$type = array('borrowlist'=>'getBorrwoList');
		if(array_key_exists($data['type'],$type)){
			$function = $type[$data['type']];
		}else{
			exit();
		}
		date_default_timezone_set('PRC');
		$yesterday = date("Y-m-d", time()-86400);
		if(isset($data['time_start']) && $data['time_start']!=''){
			$this->time_start = intval(strtotime($data['time_start'].' 0:0:0'));
		}else{
			$this->time_start = intval(strtotime($yesterday.' 0:0:0'));
		}
		if(isset($data['time_end']) && $data['time_end']!=''){
			$this->time_end = intval(strtotime($data['time_end'].' 23:59:59'));
		}else{
			$this->time_end = intval(strtotime($yesterday.' 23:59:59'));
		}
		if(isset($data['limit'])){
			$this->limit = $data['limit'];
		}
		if(isset($data['echo_type'])){
			$this->echo_type = $data['echo_type'];
		}
		require_once '../core/function.inc.php';
		require_once '../core/common.inc.php';
		require_once '../core/mysql.class.php';
		$this->mysql = new Mysql($db_config);
		$this->$function();
	}
	private function getBorrwoList(){
		$where = 'where 1=1';
		if($this->time_start>0){
			$where .= ' and p1.repayment_time>='.$this->time_start;
		}
		if($this->time_end>0){
			$where .= ' and p1.repayment_time<='.$this->time_end;
		}
		if($this->startId>0){
			$where .= ' and p1.id>='.$this->startId;
		}
		$sql = 'select p1.*,p2.username from `{borrow}` p1 left join {user} p2 on p1.user_id=p2.user_id '.$where.' order by id asc limit '.$this->limit;
		$result = $this->mysql->db_fetch_arrays($sql);
		if ($this->echo_type == 'xml'){
			$this->toStringXml($result);
		}else{
			$this->toStringJson($result);
		}
	}
	private function toStringXml($data){
		$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https')  === false ? 'http' : 'https';
		$protocol = $protocol.'://'.$_SERVER['HTTP_HOST'];
		$str = '<?xml version="1.0" encoding="utf-8"?>';
		$str .= "<erongdu>";
		foreach($data as $key=>$value){
			$time = $value['repayment_time'];
			switch ($value['biao_type']){
				case 'jin':
					$type = '净值标';
					break;
				case 'xin':
					$type = '信用标';
					break;
				case 'vouch':
					$type = '担保标';
					break;
				case 'fast':
					$type = '抵押标';
					break;
				case 'miao':
					$type = '秒标';
					break;
			}
			if($value['isday']==1){
				$day = $value['time_limit_day'];
			}else{
				$day = $value['time_limit']*30;
			}
			$funds_radio = 0;
			$funds_money = 0;
			if($value['award']==1){
				$funds_radio = 0;
				$funds_money = $value['part_account'];
			}elseif($value['award']==2){
				$funds_radio = $value['funds'];
				$funds_money = 0;
			}
			$str .= '<item id="'.$key.'">';
			$str .= '<borrow_id>'.$value['id'].'</borrow_id>';
			$str .= '<money>'.$value['account'].'</money>';
			$str .= '<addtime>'.$time.'</addtime>';
			$str .= '<owner>'.$value['username'].'</owner>';
			$str .= '<apr>'.$value['apr'].'</apr>';
			$str .= '<day>'.$day.'</day>';
			$str .= '<award_radio>'.$funds_radio.'</award_radio>';
			$str .= '<award_money>'.$funds_money.'</award_money>';
			$str .= '<name>'.$value['name'].'</name>';
			$str .= '<type>'.$type.'</type>';
			$str .= '<url>'.$protocol.'/invest/a'.$value['id'].'.html</url>';
			$str .= '</item>';
		}
		$str .= "</erongdu>";
		echo $this->gbkToUtf8($str);
	}
	private function toStringJson($data){
		echo json_encode($this->gbk_utf8($data));
	}
	private function gbkToUtf8($str){
		return iconv('GBK','utf-8',$str);
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
}
?>