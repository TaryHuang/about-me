<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
	@require("../database_link.php");

/******************************
用途:將陣列已f_open的方式儲存~DATA等於記事本
方法:file_put_homepage(開啟檔案,寫入array,寫入array的變數)與file_put相同
注意:此為單一寫入~要先啟動OB_START; 宣告F_OPEN及F_CLOSE
********************************/
function file_put_homepage($open_file,$write_array,$value_name){
	fputs($open_file,"\r\n");
	$bos=$value_name.'=array(';
	fputs($open_file,$bos);
for($i=0;$i<count($write_array);$i++){
	fputs($open_file,"'".$write_array[key($write_array)]."'");
	if($i!=count($write_array)-1){
		fputs($open_file,',');
	}//if
	next($write_array);
}//for
	fputs($open_file,"); \r\n");
}//簡易存入  非fopen


/******************************
用途:將數值改為md5碼   將10000~90000變成高達一百多萬的可能性
方法:md5_num(數值); 傳回md5~介於6~8之間的字元
注意:搭配亂數函數 rand(從幾,到幾)
********************************/
function md5_num_homepage($num,$r=0){
if($r==0)
	$r=rand(6,8);//取6~8之間的個數介質 留言高 回覆低5 因為都放一起ˇˇ
return substr (md5($num),rand(0,20),$r);//亂數 除掉前面0~10字元
}







/******************************
用途:將系統~紀錄日誌------- 為了新增留言 特別調過來
方法:log_txt(訊息,分類)
********************************/
function log_txt_homepage($message,$sort,$pinx=''){
	global $database_link__function,$database_link__style;
	@require("../".$database_link__function."/log.php");
	@require("../".$database_link__style."/ctrl_style.php");
//以下是 有此分類才做寫入
if(in_array($sort,$back_show_message_array)){
if(count($log_pin)<100){
$chect_trace=1;
while($chect_trace){
	$md5=md5_num_homepage(rand(1,1000),3);//產生pin
		if(!@in_array($md5,$log_pin))
			$chect_trace=0;
}

	$log_pin[]=$md5;
	$log_sort[]=$sort;
	$log_message[]=$message;
	$log_pinx[]=$pinx;
	$log_date[]=date("YmdHis");
}else{
	$sort_date=$log_date;
	sort($log_date);
	$num=array_search($log_date[0],$sort_date);
	$log_sort[$num]=$sort;
	$log_message[$num]=$message;
	$log_pinx[$num]=$pinx;
	$sort_date[$num]=date("YmdHis");
	$log_date=$sort_date;
}//判定是否超過101筆資料
	
	$f=@fopen("../".$database_link__function."/log.php","w+");
	if(flock($f,LOCK_EX)){
	fputs($f,"<? \r\n");
	file_put_homepage($f,$log_pin,'$log_pin');
	file_put_homepage($f,$log_sort,'$log_sort');
	file_put_homepage($f,$log_message,'$log_message');
	file_put_homepage($f,$log_pinx,'$log_pinx');
	file_put_homepage($f,$log_date,'$log_date');
	fputs($f,"\r\n ?>");
		 flock($f,LOCK_UN);
	}else{
	return ;
	}
	fclose($f);

}//判定是否存入
}//end
?>
<?php
	ob_start();
	if(!isset($_COOKIE[free])){
	log_txt_homepage('安裝模組','1',$_SERVER['REMOTE_ADDR']);
	setcookie('free','1',time()+10000);
	header("location:../");
	}else{
	header("location:../");	
	}
?>
