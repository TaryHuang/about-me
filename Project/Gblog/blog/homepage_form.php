<?
session_start();
ob_start();
	@require("database_link.php");//取得資料夾路徑
	@require($database_link__function."/ctrl.php");//取得資料夾路徑
	@require($database_link__function."/pass.php");//設定
	if($ctrl_blog_switch=='0'){
		if(!($_SESSION[open_login_id]==$blog_login_id && $_SESSION[open_login_pass]==$blog_login_pass)){
		header("location:loc_homepage.php?loc=20");
		exit();
		}
	}

/******************************
用途:將陣列已f_open的方式儲存~DATA等於記事本
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


function md5_num_homepage($num,$r=0){
if($r==0)
	$r=rand(6,8);
return substr (md5($num),rand(0,20),$r);
}






function log_txt_homepage($message,$sort,$pinx=''){
	global $database_link__function,$database_link__style;
	@require($database_link__function."/log.php");
	@require($database_link__style."/ctrl_style.php");
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
}
	
	$f=@fopen($database_link__function."/log.php","w+");
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






if($_POST[pinx]=="document_body_pw"){
@require($database_link__document."/document_id.php");//控制
	$num=array_search($_POST['pin'],$document_id_pin);
	if($document_id_pw[$num]!=$_POST[pw]){
		header("location:loc_homepage.php?loc=10");
		exit();
	}
		setcookie($document_id_pin[$num],$_POST[pw],time()+3600);
		header("location:body.php?pin=".$_POST[pin]);
exit();
} 






if($_POST[pinx]=="document_pw"){
@require($database_link__document."/document_id.php");
	$num=array_search($_POST['pin'],$document_id_pin);
	if($document_id_pw[$num]!=$_POST[pw]){
		header("location:loc_homepage.php?loc=10");
		exit();
	}
		setcookie($document_id_pin[$num],$_POST[pw],time()+3600);
		header("location:./?pin=".$_POST[pin]);
exit();
} 








//新增留言
if($_POST[pinx]=="leave_message"){
@require($database_link__document."/document_id.php");
	if(@in_array($_POST['document_id'],$document_id_pin)){
	$open_message=array_search($_POST[document_id],$document_id_pin);//是否可以留言
	if($document_id_open_message[$open_message]!='1'){
		header("location:loc_homepage.php?loc=16");
		exit();
	}
	if(date('Ymd')<$document_id_html[$open_message]){
		header("location:loc_homepage.php?loc=16");
		exit();
	}	
	
if(!($_COOKIE[$_POST[document_id]]==$document_id_pw[array_search($_POST[document_id],$document_id_pin)])){
	header("location:loc_homepage.php?loc=18");
	exit();
}

	if($_POST['switch']==0)
		$switch_check=0;
	else
		$switch_check=1;
$name_check=clean_html_str2($_POST[name]);
$body_check=clean_html_str($_POST[body]);
	if(strlen_ban($name_check,2,30) && strlen_ban($body_check,10,1000) && chk_text($body_check)){
@require($database_link__message."/leave_message.php");

$md5=substr(md5($_POST[img_pin]),$this_blog_md5,8);
		if($md5!=$_POST[img_md5]){
			header("location:loc_homepage.php?loc=15");//驗證碼錯誤
		exit();
		}
$md5=substr($md5,0,rand(6,8));
if(!@in_array($md5,$leave_message_pin)){
	$leave_message_pin[]=$md5;
	$leave_message_document[]=$_POST[document_id];
	$leave_message_name[]=$name_check;
	$leave_message_switch[]=$switch_check;
	$leave_message_ip[]=$_SERVER['REMOTE_ADDR'];
	$leave_message_date[]=date("YmdHis");	
	$f=@fopen($database_link__message."/leave_message.php","w+");
	if(flock($f,LOCK_EX)){ 
	fputs($f,"<? \r\n");
	file_put_homepage($f,$leave_message_pin,'$leave_message_pin');
	file_put_homepage($f,$leave_message_document,'$leave_message_document');
	file_put_homepage($f,$leave_message_ip,'$leave_message_ip');
	file_put_homepage($f,$leave_message_date,'$leave_message_date');
	file_put_homepage($f,$leave_message_name,'$leave_message_name');
	file_put_homepage($f,$leave_message_switch,'$leave_message_switch');
	fputs($f,"\r\n ?>");
	flock($f,LOCK_UN);
	}else{
		header("location:loc_homepage.php?loc=17");	//稍後再試
	}
	fclose($f);	
//寫入檔案
$f=@fopen($database_link__message."/".$md5,"w+");
fputs($f,$body_check);
fclose($f);

log_txt_homepage($name_check,'30',$md5);
		header("location:loc_homepage.php?loc=13&value=".$_POST[document_id]);
}else{
		header("location:loc_homepage.php?loc=14");	//驗證碼重負到
}		
			
	}else{
		header("location:loc_homepage.php?loc=12");	
	}//if 字元數是否正確
}else{
		header("location:loc_homepage.php?loc=11");//很抱歉此文章
}

exit();
}
?>