<?php
class wyzxPayment {
	public static function ToSubmit($payment){
		$v_mid = '1001';
		$v_url = 'http://115.28.172.63/modules/payment/wyzx_return.php';
		$key   = 'test';
		
		
		if(trim($payment['trade_no'])<>"")
		{
			$v_oid = trim($payment['trade_no']);
		}
		else
		{
			$v_oid = date('Ymd',time())."-".$v_mid."-".date('His',time());
		
		}
			
		$v_amount = trim($payment['money']); //支付金额 
		$v_moneytype = "CNY";	//币种
		
		$text = $v_amount.$v_moneytype.$v_oid.$v_mid.$v_url.$key;//md5加密拼凑串,注意顺序不能变
		$v_md5info = strtoupper(md5($text));	//md5函数加密并转化成大写字母
		
		$remark1 = trim($_POST['remark1']); 	//备注字段1
		$remark2 = trim($_POST['remark2']);
		
		$pmode_id = trim($payment['bankCode']);					 //代表选择的银行
		
		
		$v_rcvname   = trim($_POST['v_rcvname'])  ;
		$v_rcvaddr   = trim($_POST['v_rcvaddr'])  ;
		$v_rcvtel    = trim($_POST['v_rcvtel'])   ;
		$v_rcvpost   = trim($_POST['v_rcvpost'])  ;
		$v_rcvemail  = trim($_POST['v_rcvemail']) ;
		$v_rcvmobile = trim($_POST['v_rcvmobile']);
		
		$v_ordername   = trim($_POST['v_ordername'])  ;
		$v_orderaddr   = trim($_POST['v_orderaddr'])  ;
		$v_ordertel    = trim($_POST['v_ordertel'])   ;
		$v_orderpost   = trim($_POST['v_orderpost'])  ;
		$v_orderemail  = trim($_POST['v_orderemail']) ;
		$v_ordermobile = trim($_POST['v_ordermobile']);
		header("Content-type:text/html; charset=gb2312");
		?>
		<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
		<html>
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
		<title></title>
		
		<link href="css/index.css" rel="stylesheet" type="text/css">
		</head>
		<body onLoad="javascript:document.E_FORM.submit()">
		<form method="post" name="E_FORM" action="https://Pay3.chinabank.com.cn/PayGate">
			<input type="hidden" name="v_mid"         value="<?php echo $v_mid;?>">
			<input type="hidden" name="v_oid"         value="<?php echo $v_oid;?>">
			<input type="hidden" name="v_amount"      value="<?php echo $v_amount;?>">
			<input type="hidden" name="v_moneytype"   value="<?php echo $v_moneytype;?>">
			<input type="hidden" name="v_url"         value="<?php echo $v_url;?>">
			<input type="hidden" name="v_md5info"     value="<?php echo $v_md5info;?>">
			<input type="hidden" name="pmode_id"     value="<?php echo $pmode_id;?>">
		
			
			<input type="hidden" name="remark1"       value="<?php echo $remark1;?>">
			<input type="hidden" name="remark2"       value="<?php echo $remark2;?>">
		
		
			<input type="hidden" name="v_rcvname"      value="<?php echo $v_rcvname;?>">
			<input type="hidden" name="v_rcvtel"       value="<?php echo $v_rcvtel;?>">
			<input type="hidden" name="v_rcvpost"      value="<?php echo $v_rcvpost;?>">
			<input type="hidden" name="v_rcvaddr"      value="<?php echo $v_rcvaddr;?>">
			<input type="hidden" name="v_rcvemail"     value="<?php echo $v_rcvemail;?>">
			<input type="hidden" name="v_rcvmobile"    value="<?php echo $v_rcvmobile;?>">
		
			<input type="hidden" name="v_ordername"    value="<?php echo $v_ordername;?>">
			<input type="hidden" name="v_ordertel"     value="<?php echo $v_ordertel;?>">
			<input type="hidden" name="v_orderpost"    value="<?php echo $v_orderpost;?>">
			<input type="hidden" name="v_orderaddr"    value="<?php echo $v_orderaddr;?>">
			<input type="hidden" name="v_ordermobile"  value="<?php echo $v_ordermobile;?>">
			<input type="hidden" name="v_orderemail"   value="<?php echo $v_orderemail;?>">
		
		</form>
		
		</body>
		</html>
<?php
	exit;
	}
	function GetFields(){
         return array(
                'member_id'=>array(
                        'label'=>'客户号',
                        'type'=>'string'
                    ),
                'PrivateKey'=>array(
                        'label'=>'私钥',
                        'type'=>'string'
                ),
				'authtype'=>array(
						'label'=>'其他',
						'type'=>'string'
				)
            );
    }
}
?>
