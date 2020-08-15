<?
ob_start();
session_start();
	@require("../database_link.php");//資料夾連線
	@require("../".$database_link__function."/ctrl.php");//連線FUN


function md5_num($num,$r=0){
if($r==0)
	$r=rand(5,15);
return substr (md5($num),rand(0,15),$r);
}


function date_add_day($y,$m,$d,$add){
//取得月份

switch($m){
case 1:$md=31;break;
case 2:
		if($y%4==0)
		$md=29;
		else
		$md=28;
		;break;
case 3:$md=31;break;
case 4:$md=30;break;
case 5:$md=31;break;
case 6:$md=30;break;
case 7:$md=31;break;
case 8:$md=31;break;
case 9:$md=30;break;
case 10:$md=31;break;
case 11:$md=30;break;
case 12:$md=31;break;
}

if(($d+$add)>$md){
	$md2=($d+$add)-$md;
	if($m==12){
	$y++;
	$m=1;
	}else{
	$m++;
	}
							if($m<10){
							$b='0';
							}else{
							$b='';
							}
	return $y.$b.$m.'0'.$md2;
}

return $y.$m.($d+$add);
}


function file_only_put($file_name,$value,$value_name){
	fputs($file_name,$value_name."='");
	fputs($file_name,$value);
	fputs($file_name,"'; \r\n");
}


function file_put_all($loc,$str){
$str=clean_html_str($str);
	$f=@fopen($loc,"w+");
		fputs($f,$str);
	fclose($f);
}

	

function file_put($open_file,$write_array,$value_name){
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








function clean_html_array($array){
for($i=0;$i<count($array);$i++){
	$box[]=htmlspecialchars($array[$i]);
}//for
return $box;
}



function log_txt($message,$sort,$pinx=''){
	global $database_link__function,$database_link__style;
	@require("../".$database_link__function."/log.php");
	@require("../".$database_link__style."/ctrl_style.php");
//以下是 有此分類才做寫入
if(in_array($sort,$back_show_message_array) || $sort=='99'){
if(count($log_pin)<100){
$chect_trace=1;
while($chect_trace){
	$md5=md5_num(rand(1,1000),3);
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
	
	$f=@fopen("../".$database_link__function."/log.php","w+");
	if(flock($f,LOCK_EX)){
	fputs($f,"<? \r\n");
	file_put($f,$log_pin,'$log_pin');
	file_put($f,$log_sort,'$log_sort');
	file_put($f,$log_message,'$log_message');
	file_put($f,$log_pinx,'$log_pinx');
	file_put($f,$log_date,'$log_date');
	fputs($f,"\r\n ?>");
	flock($f,LOCK_UN);
	}else{
	return ;
	}
	fclose($f);

}
}

?>











<?
//登入連線狀態	
if($_POST[pin_x]=='login'){
if($ctrl_blog_host==1 || $_SERVER['REMOTE_ADDR']=='127.0.0.1'){

if((int)($_COOKIE[login])<=4){
	$num=$_COOKIE[login]+1;
	setcookie('login',$num,time()+180);
@require("../".$database_link__function."/pass.php");//連線
		session_unregister("open_login_id");
		session_unregister("open_login_pass");
	if($blog_login_pass==(substr(md5($_POST[pass]),$this_blog_md5,15)) && $blog_login_id==$_POST[id]){
		$open_login_id=$blog_login_id;
		$open_login_pass=$blog_login_pass;
		session_register("open_login_id");
		session_register("open_login_pass");
		}
	if(session_is_registered("open_login_id") && session_is_registered("open_login_pass")){
		log_txt($_SERVER['REMOTE_ADDR'],'7');
		header("location:loc.php?loc=00");
	}else{
		header("location:loc.php?loc=01");
	}
}else{
	if($_COOKIE[login]==5){
			log_txt($_SERVER['REMOTE_ADDR'],'2');
			$num=$_COOKIE[login];
			$num++;
		setcookie('login',$num,time()+200);
	}
		header("location:loc.php?loc=04");
}

}else{
		header("location:loc.php?loc=05");
}
	exit();
}
?>








<?
@require("../".$database_link__function."/pass.php");//連線FUN
if($_SESSION[open_login_id]!=$blog_login_id && $_SESSION[open_login_pass]!=$blog_login_pass){
header('location:../');
}
?>




<?php
//::新增文章::
if($_POST[pinx]=="add_document"){
$title_check=clean_html_str($_POST[title]);

	if($_POST[html]==1 || $_POST[html]==3 || $_POST[html]==5 || $_POST[html]==7 || $_POST[html]==10)
		$html_check=$_POST[html];
	else
		$html_check="0";			
									$body_check=clean_html_str($_POST[body]);
									
	if($_POST[message]==1)
		$message_check='1';
	else
		$message_check='0';
if(strlen_ban($title_check) && chk_value($_POST[password],1) && strlen_ban($body_check,0,50000)){
//驗證字元數是否府合start
$password_check=$_POST[password];
//驗證是否有此資料
@require("../".$database_link__document."/document_sort.php");
if(@in_array($_POST[sort],$document_sort_pin)){
//驗證是否有此資料
@require("../".$database_link__document."/document_id.php");
//*****給予pin是否有重覆******
$chect_trace=1;
while($chect_trace){
	$md5=md5_num(rand(10000,90000));//產生pin
		if(!@in_array($md5,$document_id_pin))
			$chect_trace=0;
}


//(寫入array)
$document_id_pin[]=$md5;//pin 
$document_id_title[]=$title_check;//標題
$document_id_sort[]=$_POST[sort];//分類
$document_id_html[]=date_add_day(date('Y'),date('m'),date('d'),$html_check);//是否使用html
$document_id_style[]=clean_html_str($_POST[style]);//style背景
$document_id_open_message[]=$message_check;//是否可留言
$document_id_pw[]=$password_check;//密碼
$document_id_start_date[]=date("YmdHis");//創始時間
$document_id_end_date[]=date("YmdHis");//更新時間
//(寫入檔案)
$f=@fopen("../".$database_link__document."/document_id.php","w+");
fputs($f,'<? ');
file_put($f,$document_id_pin,'$document_id_pin');
file_put($f,$document_id_title,'$document_id_title');
file_put($f,$document_id_sort,'$document_id_sort');
file_put($f,$document_id_style,'$document_id_style');
file_put($f,$document_id_html,'$document_id_html');
file_put($f,$document_id_pw,'$document_id_pw');
file_put($f,$document_id_open_message,'$document_id_open_message');
file_put($f,$document_id_start_date,'$document_id_start_date');
file_put($f,$document_id_end_date,'$document_id_end_date');
fputs($f,'?>');
fclose($f);


//**新增到資料夾中**
$f=@fopen("../".$database_link__document."/".$md5,"w+");
fputs($f,$body_check);
fclose($f);
 	log_txt($title_check,"20",$md5);
header("location:loc.php?loc=10&value=".$_POST[sort]);//成功
//驗證是否有此資料
}else{
 	log_txt('新增文章-找不到該分類',"0",$_POST[sort]);
	header("location:loc.php?loc=03");//系統發生錯誤
}
//驗證是否有此資料

//驗證字元數是否府合
}else{
	header("location:loc.php?loc=02");//字元錯誤
}
//驗證字元數是否府合end
exit();
}//end 新增文章



//::跳到編輯文章::
if($_POST[pinx]=="updata_document_check"){
header("location:index.php?action=updata_document&pin=".$_POST[pin]);
exit();
}//文章[編輯]與[刪除]中的~~~~編輯 跳回真正要編輯的地方






//::編輯文章::
if($_POST[pinx]=="updata_documents"){
@require("../".$database_link__document."/document_id.php");
//驗證字元數
$title_check=clean_html_str($_POST[title]);

									$body_check=clean_html_str($_POST[body]);
	if($_POST[message]==1)
		$message_check='1';
	else
		$message_check='0';
if(strlen_ban($title_check) &&  chk_value($_POST[password],1) && strlen_ban($body_check,0,50000)){
//驗證字元數
if(@in_array($_POST[pin],$document_id_pin)){
$num=array_search($_POST[pin],$document_id_pin);
$document_id_title[$num]=$title_check;//標題
$document_id_sort[$num]=$_POST[sort];//分類
$document_id_style[$num]=clean_html_str($_POST[style]);//style背景
$document_id_open_message[$num]=$message_check;//是否可留言
$document_id_pw[$num]=$_POST[password];//密碼
$document_id_end_date[$num]=date("YmdHis");//更新時間
//(寫入檔案)
$f=@fopen("../".$database_link__document."/document_id.php","w+");
fputs($f,'<? ');
file_put($f,$document_id_pin,'$document_id_pin');
file_put($f,$document_id_title,'$document_id_title');
file_put($f,$document_id_sort,'$document_id_sort');
file_put($f,$document_id_style,'$document_id_style');
file_put($f,$document_id_html,'$document_id_html');
file_put($f,$document_id_pw,'$document_id_pw');
file_put($f,$document_id_open_message,'$document_id_open_message');
file_put($f,$document_id_start_date,'$document_id_start_date');
file_put($f,$document_id_end_date,'$document_id_end_date');
fputs($f,'?>');
fclose($f);


//**新增到資料夾中**
$f=@fopen("../".$database_link__document."/".$_POST[pin],"w+");
fputs($f,$body_check);
fclose($f);
	log_txt($title_check,'22',$_POST[pin]);
	header("location:loc.php?loc=12&value=".$_POST[sort]);
//驗證是否有此資料
}else{
	log_txt('更新文章-找不到該文章',0,$_POST[pin]);
	header("location:loc.php?loc=03");//系統錯誤
}
//驗證是否有此資料


//驗證字元數
}else{
	header("location:loc.php?loc=02");//字元錯誤
}
//驗證字元數
exit();
}//更新文章







if($_POST[pinx]=="del_document"){
@require("../".$database_link__document."/document_id.php");
//是否有此資料
if(@in_array($_POST[pin],$document_id_pin)){
//是否有此資料
$num=array_search($_POST[pin],$document_id_pin);//取得該節點
//::刪除陣列裡的數值::
$sort_num=$document_id_sort[$num];
$log_values=$document_id_title[$num];
unset($document_id_pin[$num]);
unset($document_id_title[$num]);
unset($document_id_sort[$num]);
unset($document_id_html[$num]);
unset($document_id_style[$num]);
unset($document_id_pw[$num]);
unset($document_id_open_message[$num]);
unset($document_id_start_date[$num]);
unset($document_id_end_date[$num]);
//::存檔::
//(寫入檔案)
$f=@fopen("../".$database_link__document."/document_id.php","w+");
fputs($f,'<? ');
file_put($f,$document_id_pin,'$document_id_pin');
file_put($f,$document_id_title,'$document_id_title');
file_put($f,$document_id_sort,'$document_id_sort');
file_put($f,$document_id_style,'$document_id_style');
file_put($f,$document_id_html,'$document_id_html');
file_put($f,$document_id_pw,'$document_id_pw');
file_put($f,$document_id_open_message,'$document_id_open_message');
file_put($f,$document_id_start_date,'$document_id_start_date');
file_put($f,$document_id_end_date,'$document_id_end_date');
fputs($f,'?>');
fclose($f);
@unlink("../$database_link__document/".$_POST[pin]);



@require("../".$database_link__message."/leave_message.php");
@require("../".$database_link__message."/reply_message.php");
if(@in_array($_POST[pin],$leave_message_document)){
$counts=count($leave_message_pin);
for($i=0;$i<$counts;$i++){
	if($_POST[pin]!=$leave_message_document[$i]){
	continue;
	}
	//echo $leave_message_pin[$i]."<br>";
	$nums=$i;
		//刪除之前 先將要使用的資料取出
			$del_pin_message=$leave_message_pin[$nums];//刪除的pin
		//刪除之前 先將要使用的資料取出
			unset($leave_message_pin[$nums]);
			unset($leave_message_document[$nums]);
			unset($leave_message_name[$nums]);
			unset($leave_message_date[$nums]);
			unset($leave_message_ip[$nums]);
			unset($leave_message_switch[$nums]);
			@unlink("../".$database_link__message."/".$del_pin_message);
		if(@in_array($del_pin_message,$back_reply_message_pinx)){
			$num2=array_search($del_pin_message,$back_reply_message_pinx);
			$del_pin_message=$back_reply_message_pin[$num2];
			unset($back_reply_message_pin[$num2]);
			unset($back_reply_message_pinx[$num2]);
			unset($back_reply_message_date[$num2]);
			@unlink("../".$database_link__message."/".$del_pin_message);
		}		
}//for	
		
		//下面是把最後寫進去	
		$f=@fopen("../".$database_link__message."/leave_message.php","w+");
		fputs($f,"<? \r\n");
		file_put($f,$leave_message_pin,'$leave_message_pin');
		file_put($f,$leave_message_document,'$leave_message_document');
		file_put($f,$leave_message_name,'$leave_message_name');
		file_put($f,$leave_message_date,'$leave_message_date');
		file_put($f,$leave_message_switch,'$leave_message_switch');
		file_put($f,$leave_message_ip,'$leave_message_ip');
		fputs($f,"\r\n ?>");
		fclose($f);
			$f=@fopen("../".$database_link__message."/reply_message.php","w+");		
			fputs($f,"<? \r\n");
			file_put($f,$back_reply_message_pin,'$back_reply_message_pin');
			file_put($f,$back_reply_message_date,'$back_reply_message_date');
			file_put($f,$back_reply_message_pinx,'$back_reply_message_pinx');
			fputs($f,"\r\n ?>");
			fclose($f);
}

	log_txt($log_values,"21",$_POST[pin]);
	header("location:loc.php?loc=11&value=".$sort_num);
}else{
	log_txt('刪除文章-找不到該文章',"0",$_POST[pin]);
	header("location:loc.php?loc=03");
}
exit();
}//文章[編輯]與[刪除]中的~~~~刪除




if($_POST[pinx]=='updata_ctrl'){
$f=fopen("../".$database_link__function."/ctrl.php","w+");
if($_POST['switch']==1)
	$swich_check=1;
else
	$swich_check=0;
							$switch_say_check=clean_html_str($_POST[switch_say]);
							$blog_name_check=clean_html_str($_POST[blog_name]);
							$blog_myname_check=clean_html_str($_POST[blog_myname]);
if($_POST[host]==1)
	$host_check=1;
else
	$host_check=0;
fputs($f,"<? \r\n");
file_only_put($f,$swich_check,'$ctrl_blog_switch');
file_only_put($f,$switch_say_check,'$ctrl_blog_switch_say');
file_only_put($f,$blog_name_check,'$ctrl_blog_name');
file_only_put($f,$blog_myname_check,'$ctrl_blog_myname');
file_only_put($f,$host_check,'$ctrl_blog_host');
fputs($f,"\r\n ?>");
fclose($f);
	log_txt("","3",$_SERVER['REMOTE_ADDR']);
header("location:loc.php?loc=21");
exit();
}



if($_POST[pinx]=='ctrl_style'){
	@require("../".$database_link__style."/style_back.php");
	@require("../".$database_link__style."/style_homepage.php");
if(@in_array($_POST[t_back],$style_back_pin) || $_POST[t_back]==0 && @in_array($_POST[t_homepage],$style_homepage_pin)|| $_POST[t_homepage]==0){
	$f=@fopen("../".$database_link__style."/ctrl_style.php","w+");
	fputs($f,"<? \r\n");
file_only_put($f,clean_html_str($_POST[homepage_show_news]),'$homepage_show_news');
file_only_put($f,clean_html_str($_POST[homepage_show_document]),'$homepage_show_document');
file_only_put($f,clean_html_str($_POST[homepage_leave_message]),'$homepage_leave_message');
file_only_put($f,clean_html_str($_POST[back_leave_message]),'$back_leave_message');
file_only_put($f,clean_html_str($_POST[back_show_document]),'$back_show_document');
file_only_put($f,clean_html_str($_POST[back_show_message]),'$back_show_message');
file_only_put($f,clean_html_str($_POST[t_back]),'$ctrl_style_back');
file_only_put($f,clean_html_str($_POST[t_homepage]),'$ctrl_style_homepage');

//以下後來增加的
file_only_put($f,clean_html_str($_POST[homepage_document_switch]),'$homepage_show_document_switch');
file_only_put($f,clean_html_str($_POST[homepage_message_switch]),'$homepage_show_message_switch');
file_only_put($f,clean_html_str($_POST[back_document_switch]),'$back_show_document_switch');
file_only_put($f,clean_html_str($_POST[back_message_switch]),'$back_show_message_switch');
file_only_put($f,clean_html_str($_POST[homepage_message_date]),'$homepage_message_date');
file_only_put($f,clean_html_str($_POST[homepage_document_date]),'$homepage_document_date');
file_only_put($f,clean_html_str($_POST[back_message_date]),'$back_message_date');
file_only_put($f,clean_html_str($_POST[back_document_date]),'$back_document_date');
$back_message_arrays=explode(',',$_POST[send_array]);
file_put($f,$back_message_arrays,'$back_show_message_array');

	fputs($f,"\r\n ?>");
	fclose($f);
	log_txt('',"4");
header("location:loc.php?loc=20");
//是否有此資料
}else{
log_txt('系統樣式-找不到該佈景',"0",$_POST[pin]);
header("location:loc.php?loc=03");
}
//是否有此資料
exit();
}//改動blog[前後]台樣式




if($_POST[pinx]=='updata_sorts'){
if($_POST[h_pin]!=''){
$array_pin=explode(",",$_POST[h_pin]);//轉陣列
}else{
$array_pin=array();
}
@require("../".$database_link__document."/document_sort.php");//因為有title沒有傳遞
$trues=true;
for($i=0;$i<count($document_sort_pin);$i++){
	if(!@in_array($document_sort_pin[$i],$array_pin)){
		$log_message=$document_sort_pin[$i];
		$trues=false;
		break;
	}
}
if($trues){
for($i=0;$i<count($array_pin);$i++){
	$num=array_search($array_pin[$i],$document_sort_pin);
	$array_title[$i]=$document_sort_title[$num];
	$array_hidden[$i]=$document_sort_hidden[$num];
}
	$f=fopen("../".$database_link__document."/document_sort.php","w+");
	fputs($f,"<? \r\n");
	file_put($f,$array_pin,'$document_sort_pin');
	file_put($f,$array_hidden,'$document_sort_hidden');
	file_put($f,$array_title,'$document_sort_title');
	fputs($f,"\r\n ?>");
	fclose($f);
	log_txt('','6');
header("location:loc.php?loc=31");
}else{
	log_txt('分類排序-找不到該分類',"0",$log_message);
	header("location:loc.php?loc=03");
}
exit();
}//改動blog分類排序



if($_POST[pinx]=='add_sort'){
$title_check=clean_html_str($_POST[title]);
//字元數
if(strlen_ban($title_check)){
//字元數
@require("../".$database_link__document."/document_sort.php");
$chect_trace=1;
while($chect_trace){
	$check_num=md5_num(rand(10000,90000),6);
	if(!@in_array($check_num,$document_sort_pin))
		$chect_trace=0;
}
$document_sort_pin[]=$check_num;
$document_sort_hidden[]="0";
$document_sort_title[]=$title_check;
	$f=fopen("../".$database_link__document."/document_sort.php","w+");
	fputs($f,"<? \r\n");
	file_put($f,$document_sort_pin,'$document_sort_pin');
	file_put($f,$document_sort_hidden,'$document_sort_hidden');
	file_put($f,$document_sort_title,'$document_sort_title');
	fputs($f,"\r\n ?>");
	fclose($f);
	log_txt($title_check,"10",$check_num);
header("location:loc.php?loc=32");
}else{
header("location:loc.php?loc=02");//字元
}
exit();
}//新增分類


if($_POST[pinx]=='updatas_sort'){
@require("../".$database_link__document."/document_sort.php");
//字元數
$title_check=clean_html_str($_POST[title]);
if(strlen_ban($title_check)){
//字元數
if(@in_array($_POST[pin],$document_sort_pin)){
$num=array_search($_POST[pin],$document_sort_pin);
if($_POST[hidden_sort]==1)
	$hidden_check=1;
else
	$hidden_check=0;

$document_sort_hidden[$num]=$hidden_check;
$document_sort_title[$num]=$title_check;
	$f=fopen("../".$database_link__document."/document_sort.php","w+");
	fputs($f,"<? \r\n");
	file_put($f,$document_sort_pin,'$document_sort_pin');
	file_put($f,$document_sort_hidden,'$document_sort_hidden');
	file_put($f,$document_sort_title,'$document_sort_title');
	fputs($f,"\r\n ?>");
	fclose($f);
log_txt($title_check,"12",$_POST[pin]);
header("location:loc.php?loc=33&value=".$_POST[pin]);
}else{
log_txt('更新分類-找不到該分類',"0",$_POST[pin]);
header("location:loc.php?loc=03");
}
//字元數
}else{
header("location:loc.php?loc=02");
}//字元數
exit();
}//if end 更新分類



//if end 刪除分類
if($_POST[pinx]=='del_sort'){

@require("../".$database_link__document."/document_sort.php");//載入檔案
@require("../".$database_link__document."/document_id.php");//載入檔案
@require("../".$database_link__message."/leave_message.php");
@require("../".$database_link__message."/reply_message.php");
if(!@in_array($_POST[pin],$document_sort_pin)){
 	log_txt('刪除分類-找不到該分類',"0",$_POST[pin]);
	header("location:loc.php?loc=03");
	exit();
}


if($_POST[del_ctrl]==0){
$i_num=count($document_id_pin);
		for($i=0;$i<$i_num;$i++){
			if($document_id_sort[$i]==$_POST[pin]){
				$document_id_sort[$i]=$_POST[change_sort];
			}
		}
}else{

if(@in_array($_POST[pin],$document_id_sort)){

$counts=count($leave_message_pin);
$num=count($document_id_pin);
for($j=0;$j<$num;$j++){
		if($document_id_sort[$j]!=$_POST[pin]){
			continue;
		}
		
		
		
				@unlink("../$database_link__document/".$document_id_pin[$j]);
				$del_pin_document=$document_id_pin[$j];
				unset($document_id_pin[$j]);
				unset($document_id_title[$j]);
				unset($document_id_sort[$j]);
				unset($document_id_html[$j]);
				unset($document_id_style[$j]);
				unset($document_id_pw[$j]);
				unset($document_id_open_message[$j]);
				unset($document_id_start_date[$j]);
				unset($document_id_end_date[$j]);
				

if(@in_array($del_pin_document,$leave_message_document)){
	for($i=0;$i<$counts;$i++){
	
	if($del_pin_document!=$leave_message_document[$i]){
		continue;
	}

		//刪除之前 先將要使用的資料取出
			$del_pin_message=$leave_message_pin[$i];//刪除的pin
		//刪除之前 先將要使用的資料取出
			unset($leave_message_pin[$i]);
			unset($leave_message_document[$i]);
			unset($leave_message_ip[$i]);
			unset($leave_message_name[$i]);
			unset($leave_message_date[$i]);
			unset($leave_message_switch[$i]);
			@unlink("../".$database_link__message."/".$del_pin_message);
		
		
		
		if(@in_array($del_pin_message,$back_reply_message_pinx)){
			$num2=array_search($del_pin_message,$back_reply_message_pinx);
			$del_pin_message2=$back_reply_message_pin[$num2];
			unset($back_reply_message_pin[$num2]);
			unset($back_reply_message_pinx[$num2]);
			unset($back_reply_message_date[$num2]);
			@unlink("../".$database_link__message."/".$del_pin_message2);
		}		
	}//for	
}
							
}
}
	
	
	
	
	
	
		//下面是把最後寫進去	
		$f=@fopen("../".$database_link__message."/leave_message.php","w+");
		fputs($f,"<? \r\n");
		file_put($f,$leave_message_pin,'$leave_message_pin');
		file_put($f,$leave_message_document,'$leave_message_document');
		file_put($f,$leave_message_name,'$leave_message_name');
		file_put($f,$leave_message_ip,'$leave_message_ip');
		file_put($f,$leave_message_date,'$leave_message_date');
		file_put($f,$leave_message_switch,'$leave_message_switch');
		fputs($f,"\r\n ?>");
		fclose($f);
				$f=@fopen("../".$database_link__message."/reply_message.php","w+");		
				fputs($f,"<? \r\n");
				file_put($f,$back_reply_message_pin,'$back_reply_message_pin');
				file_put($f,$back_reply_message_date,'$back_reply_message_date');
				file_put($f,$back_reply_message_pinx,'$back_reply_message_pinx');
				fputs($f,"\r\n ?>");
				fclose($f);	

}



$f=@fopen("../".$database_link__document."/document_id.php","w+");
fputs($f,"<? \r\n");
file_put($f,$document_id_pin,'$document_id_pin');
file_put($f,$document_id_title,'$document_id_title');
file_put($f,$document_id_sort,'$document_id_sort');
file_put($f,$document_id_style,'$document_id_style');
file_put($f,$document_id_html,'$document_id_html');
file_put($f,$document_id_pw,'$document_id_pw');
file_put($f,$document_id_open_message,'$document_id_open_message');
file_put($f,$document_id_start_date,'$document_id_start_date');
file_put($f,$document_id_end_date,'$document_id_end_date');
fputs($f,"\r\n ?>");
fclose($f);


$num=array_search($_POST[pin],$document_sort_pin);
$log_message=$document_sort_title[$num];
$log_message2=$document_sort_title[array_search($_POST[change_sort],$document_sort_pin)];
				unset($document_sort_pin[$num]);
				unset($document_sort_hidden[$num]);
				unset($document_sort_title[$num]);
	$f=@fopen("../".$database_link__document."/document_sort.php","w+");
	fputs($f,"<? \r\n");
	file_put($f,$document_sort_pin,'$document_sort_pin');
	file_put($f,$document_sort_hidden,'$document_sort_hidden');
	file_put($f,$document_sort_title,'$document_sort_title');
	fputs($f,"\r\n ?>");
	fclose($f);
	
	if($_POST[del_ctrl]==0)
		log_txt($log_message.'，文章轉向 :  '.$log_message2,"11",$_POST[pin]);
	else
		log_txt($log_message.'，文章 : 全部刪除',"11",$_POST[pin]);
header("location:loc.php?loc=34");
//是否找到資料

exit();
}//if end 刪除分類





//刪除留言
if($_GET[pinx]=="del_message"){
@require("../".$database_link__message."/leave_message.php");
	if(@in_array($_GET[pin],$leave_message_pin)){
		$num=array_search($_GET[pin],$leave_message_pin);
		//刪除之前 先將要使用的資料取出
		$del_pin_message=$leave_message_pin[$num];//刪除的pin
		$del_document_message=$leave_message_document[$num];//要給傳送得值
		$log_message=$leave_message_name[$num];//刪除的pin
		//刪除之前 先將要使用的資料取出
		unset($leave_message_pin[$num]);
		unset($leave_message_document[$num]);
		unset($leave_message_name[$num]);
		unset($leave_message_date[$num]);
		unset($leave_message_switch[$num]);
		unset($leave_message_ip[$num]);	
		$f=@fopen("../".$database_link__message."/leave_message.php","w+");
		if(flock($f,LOCK_EX)){
		fputs($f,"<? \r\n");
		file_put($f,$leave_message_pin,'$leave_message_pin');
		file_put($f,$leave_message_document,'$leave_message_document');
		file_put($f,$leave_message_ip,'$leave_message_ip');
		file_put($f,$leave_message_name,'$leave_message_name');
		file_put($f,$leave_message_date,'$leave_message_date');
		file_put($f,$leave_message_switch,'$leave_message_switch');
		fputs($f,"\r\n ?>");
		flock($f,LOCK_UN);
		}else{
		header("location:loc.php?loc=17");
		exit();
		}
		fclose($f);
		@unlink("../".$database_link__message."/".$del_pin_message);//疑點 被刪掉了 還去呼叫背山調的值  已被刪除=>$leave_message_pin[$num]
		//上為刪除留言
		//下為刪除回覆留言
		@require("../".$database_link__message."/reply_message.php");
		if(@in_array($del_pin_message,$back_reply_message_pinx)){
		$num2=array_search($del_pin_message,$back_reply_message_pinx);
		//刪除之前 先將要使用的資料取出
		$del_pin_message=$back_reply_message_pin[$num2];//刪除的pin
		//刪除之前 先將要使用的資料取出
		unset($back_reply_message_pin[$num2]);
		unset($back_reply_message_pinx[$num2]);
		unset($back_reply_message_date[$num2]);
		$f=@fopen("../".$database_link__message."/reply_message.php","w+");
		fputs($f,"<? \r\n");
		file_put($f,$back_reply_message_pin,'$back_reply_message_pin');
		file_put($f,$back_reply_message_date,'$back_reply_message_date');
		file_put($f,$back_reply_message_pinx,'$back_reply_message_pinx');
		fputs($f,"\r\n ?>");
		fclose($f);
		@unlink("../".$database_link__message."/".$del_pin_message);
		}//if 是否有回覆的留言
		log_txt($log_message,"31",$_GET[pin]);
		header("location:loc.php?loc=37&value=".$del_document_message);//成功刪除留言
	}else{
		log_txt('刪除留言-找不到該留言',"0",$_GET[pin]);
		header("location:loc.php?loc=03");//系統發生錯誤
	}
exit();
}









//回覆留言
if($_POST[pinx]=="reply_message"){
	@require("../".$database_link__message."/reply_message.php");
	@require("../".$database_link__message."/leave_message.php");	
	$body_check=clean_html_str($_POST[body]);
if(strlen_ban($body_check,1,1000)){
	if(@in_array($_POST[pin],$leave_message_pin)){
	$log_message=$leave_message_name[array_search($_POST[pin],$leave_message_pin)];
	if(@in_array($_POST[pin],$back_reply_message_pinx)){
	$num=array_search($_POST[pin],$leave_message_pin);
	$num2=array_search($_POST[pin],$back_reply_message_pinx);
	$back_reply_message_date[$num2]=date("YmdHis");


	$f=fopen("../".$database_link__message."/reply_message.php","w+");
	fputs($f,"<? \r\n");
	file_put($f,$back_reply_message_pin,'$back_reply_message_pin');
	file_put($f,$back_reply_message_date,'$back_reply_message_date');
	file_put($f,$back_reply_message_pinx,'$back_reply_message_pinx');
	fputs($f,"\r\n ?>");
	fclose($f);
	
			$f=fopen("../".$database_link__message."/".$back_reply_message_pin[$num2],"w+");
			fputs($f,$body_check);
			fclose($f);
			header("location:loc.php?loc=36&value=".$leave_message_document[$num]);	
	}else{
	$num=array_search($_POST[pin],$leave_message_pin);
	$chect_trace=1;
	while($chect_trace){
		$md5=md5_num(rand(10000,90000),rand(3,5));//必須小於六 因為留言6~8 留言跟回覆都放在同ㄍ資料夾中!!
		if(!@in_array($md5,$back_reply_message_pin))
			$chect_trace=0;
	}//while
	
$back_reply_message_pin[]=$md5;
$back_reply_message_date[]=date("YmdHis");
$back_reply_message_pinx[]=$_POST[pin];


	$f=fopen("../".$database_link__message."/reply_message.php","w+");
	fputs($f,"<? \r\n");
	file_put($f,$back_reply_message_pin,'$back_reply_message_pin');
	file_put($f,$back_reply_message_date,'$back_reply_message_date');
	file_put($f,$back_reply_message_pinx,'$back_reply_message_pinx');
	fputs($f,"\r\n ?>");
	fclose($f);
	
			$f=fopen("../".$database_link__message."/".$md5,"w+");
			fputs($f,$body_check);
			fclose($f);
			header("location:loc.php?loc=35&value=".$leave_message_document[$num]);	

	}
	
	log_txt($log_message,"32",$_POST[pin]);
	}else{
	log_txt("回覆留言-找不到該留言","0",$_POST[pin]);
	header("location:loc.php?loc=03");//系統錯誤
	}
}else{
	header("location:loc.php?loc=02");//字元數不正確
}
exit();
}//if




if($_POST[pinx]=='add_setup'){
	@require("../".$database_link__style."/style_center_data.php");	
$_POST[name]=clean_html_str($_POST[name]);
if(!strlen_ban($_POST[name],2,30)){
		header("location:loc.php?loc=02");
		exit();
}
if(is_file('../'.$database_link__free.'/'.$_POST[pin].'.h')){
chk_value($_POST[pin],0);
	$chect_trace=1;
	while($chect_trace){
		$md5=md5_num(rand(10000,90000),5);
		if(!@in_array($md5,$style_center_pin))
			$chect_trace=0;
	}//while
$num_pins=hexdec($_POST[pin]);
		if($num_pins%77==0 && $num_pins%11==0 && $num_pins%7==0){
			if($num_pins%3==1)
			$sorts='2';
			else if($num_pins%3==2)
			$sorts='1';
			else
			$sorts='0';
		}else{
		header("location:loc.php?loc=03");
		return ;
		exit();
		}

if($sorts=='1'){
	@require("../".$database_link__style."/style_back.php");	
	$sort="back";
	$style_back_pin[]=$md5;
	$style_back_name[]=clean_html_str2($_POST[name]);
	$f=fopen("../".$database_link__style."/style_back.php","w+");
	fputs($f,"<? \r\n");
	file_put($f,$style_back_pin,'$style_back_pin');
	file_put($f,$style_back_name,'$style_back_name');
	fputs($f,"\r\n ?>");
	fclose($f);	
	$fh=file("../".$database_link__free.'/'.$_POST[pin].'.h');
	$f=@fopen("../".$database_link__style.'/'.$md5,"w+");
	for($i=0;$i<count($fh);$i++){
	fputs($f,$fh[$i]);
	}
	fclose($f);	
	
}else if($sorts=='2'){
	@require("../".$database_link__style."/style_homepage.php");	
	$sort="homepage";
	$style_homepage_pin[]=$md5;
	$style_homepage_name[]=clean_html_str2($_POST[name]);
	$f=fopen("../".$database_link__style."/style_homepage.php","w+");
	fputs($f,"<? \r\n");
	file_put($f,$style_homepage_pin,'$style_homepage_pin');
	file_put($f,$style_homepage_name,'$style_homepage_name');
	fputs($f,"\r\n ?>");
	fclose($f);	
	$fh=file("../".$database_link__free.'/'.$_POST[pin].'.h');
	$f=@fopen("../".$database_link__style.'/'.$md5,"w+");
	for($i=0;$i<count($fh);$i++){
	fputs($f,$fh[$i]);
	}
	fclose($f);	
}else if($sorts=='0'){
	@require("../".$database_link__style."/style_document.php");	
	$sort="document";
	$style_document_pin[]=$md5;
	$style_document_name[]=clean_html_str2($_POST[name]);
	$f=fopen("../".$database_link__style."/style_document.php","w+");
	fputs($f,"<? \r\n");
	file_put($f,$style_document_pin,'$style_document_pin');
	file_put($f,$style_document_name,'$style_document_name');
	fputs($f,"\r\n ?>");
	fclose($f);
	$fh=file("../".$database_link__free.'/'.$_POST[pin].'.h');
	
	$f=@fopen("../".$database_link__style.'/'.$md5.'_top',"w+");
	fputs($f,$fh[0]);
	fclose($f);	
	$f=@fopen("../".$database_link__style.'/'.$md5.'_down',"w+");
	fputs($f,$fh[1]);
	fclose($f);	
}else{
		header("location:loc.php?loc=03");
		exit();
}




$style_center_pin[]=$md5;
$style_center_sort[]=$sort;
$style_center_date[]=date("YmdHis");

if($sort=='homepage'){
$log_value="前端佈景";
}else if($sort=='back'){
$log_value="後端佈景";
}else{
$log_value="庫存樣式";
}
		
	$f=fopen("../".$database_link__style."/style_center_data.php","w+");
	fputs($f,"<? \r\n");
	file_put($f,$style_center_pin,'$style_center_pin');
	file_put($f,$style_center_sort,'$style_center_sort');
	file_put($f,$style_center_date,'$style_center_date');
	fputs($f,"\r\n ?>");
	fclose($f);		
@unlink('../'.$database_link__free.'/'.$_POST[pin].'.h');//刪除檔案	
	log_txt('您已安裝'.clean_html_str2($_POST[name]),"5",' 到 '.$log_value);
		header("location:loc.php?loc=38");		
}else{
		header("location:loc.php?loc=03");
}
exit();
}






if($_POST[pinx]=='del_setup'){
	@require("../".$database_link__style."/style_center_data.php");	
	
	if(@in_array($_POST[pin],$style_center_pin)){
	$num=array_search($_POST[pin],$style_center_pin);

	if($style_center_sort[$num]=='back'){
	@require("../".$database_link__style."/style_back.php");
	$num2=array_search($_POST[pin],$style_back_pin);
	$log_value=$style_back_name[$num2];
	$sort='後端佈景';
	@unlink("../".$database_link__style.'/'.$style_back_pin[$num2]);

		unset($style_back_pin[$num2]);
		unset($style_back_name[$num2]);
		$f=fopen("../".$database_link__style."/style_back.php","w+");
		fputs($f,"<? \r\n");
		file_put($f,$style_back_pin,'$style_back_pin');
		file_put($f,$style_back_name,'$style_back_name');
		fputs($f,"\r\n ?>");
		fclose($f);
		
	}else if($style_center_sort[$num]=='homepage'){
	@require("../".$database_link__style."/style_homepage.php");	
	$num2=array_search($_POST[pin],$style_homepage_pin);
	$log_value=$style_homepage_name[$num2];
	$sort='前端佈景';		
	@unlink("../".$database_link__style.'/'.$style_homepage_pin[$num2]);
		unset($style_homepage_pin[$num2]);
		unset($style_homepage_name[$num2]);
		$f=fopen("../".$database_link__style."/style_homepage.php","w+");
		fputs($f,"<? \r\n");
		file_put($f,$style_homepage_pin,'$style_homepage_pin');
		file_put($f,$style_homepage_name,'$style_homepage_name');
		fputs($f,"\r\n ?>");
		fclose($f);
	}else{
	@require("../".$database_link__style."/style_document.php");	
	$num2=array_search($_POST[pin],$style_document_pin);
	$log_value=$style_document_name[$num2];
	$sort='庫存樣式';
		@unlink("../".$database_link__style.'/'.$style_document_pin[$num2].'_top');
		@unlink("../".$database_link__style.'/'.$style_document_pin[$num2].'_down');

		unset($style_document_pin[$num2]);
		unset($style_document_name[$num2]);
		$f=fopen("../".$database_link__style."/style_document.php","w+");
		fputs($f,"<? \r\n");
		file_put($f,$style_document_pin,'$style_document_pin');
		file_put($f,$style_document_name,'$style_document_name');
		fputs($f,"\r\n ?>");
		fclose($f);
	}

	unset($style_center_pin[$num]);
	unset($style_center_sort[$num]);
	unset($style_center_date[$num]);
		$f=fopen("../".$database_link__style."/style_center_data.php","w+");
		fputs($f,"<? \r\n");
		file_put($f,$style_center_pin,'$style_center_pin');
		file_put($f,$style_center_sort,'$style_center_sort');
		file_put($f,$style_center_date,'$style_center_date');
		fputs($f,"\r\n ?>");
		fclose($f);	

		log_txt('您已卸下'.$sort,"5",'中 '.$log_value.' 模組');	
		header("location:loc.php?loc=39");	
	}else{
		log_txt("卸下模組-找不到該模組","0",$_POST[pin]);	
		header("location:loc.php?loc=03");	
	}
}







if($_POST[pinx]=='updata_style2'){

if($_POST[homepage_top_chk]==1)
	$homepage_top_chks=1;
else	
	$homepage_top_chks=0;
	
if($_POST[homepage_menu_chk]==1)
	$homepage_menu_chks=1;
else	
	$homepage_menu_chks=0;

if($_POST[homepage_menu2_chk]==1)
	$homepage_menu2_chks=1;
else	
	$homepage_menu2_chks=0;
		
							if($_POST[homepage_index_chk]==1)
								$homepage_index_chks=1;
							else	
								$homepage_index_chks=0;
	
if($_POST[homepage_down_chk]==1)
	$homepage_down_chks=1;
else	
	$homepage_down_chks=0;

							if($_POST[back_top_chk]==1)
								$back_top_chks=1;
							else	
								$back_top_chks=0;
	
if($_POST[back_menu2_chk]==1)
	$back_menu2_chks=1;
else	
	$back_menu2_chks=0;
	
	if($_POST[back_down_chk]==1)
	$back_down_chks=1;
	else	
	$back_down_chks=0;
							if($_POST[back_index_chk]==1)
								$back_index_chks=1;
							else	
								$back_index_chks=0;	
		$f=fopen("../".$database_link__div."/div_ctrl.php","w+");
		fputs($f,"<? \r\n");
		file_only_put($f,$homepage_top_chks,'$homepage_top_chk');
		file_only_put($f,$homepage_menu_chks,'$homepage_menu_chk');
		file_only_put($f,$homepage_index_chks,'$homepage_index_chk');
		file_only_put($f,$homepage_menu2_chks,'$homepage_menu2_chk');
		file_only_put($f,$homepage_down_chks,'$homepage_down_chk');

		file_only_put($f,$back_top_chks,'$back_top_chk');
		file_only_put($f,$back_menu2_chks,'$back_menu2_chk');
		file_only_put($f,$back_index_chks,'$back_index_chk');
		file_only_put($f,$back_down_chks,'$back_down_chk');

		fputs($f,"\r\n ?>");
		fclose($f);
//---寫入版面 
log_txt('',"8");
header('location:loc.php?loc=40');
exit();
}




if($_POST[pinx]=='add_rss'){
	@require("../".$database_link__document."/myrss.php");	

$title_check=clean_html_str($_POST[title]);

if(strlen_ban($title_check)){
$chect_trace=1;
while($chect_trace){
	$md5=md5_num(rand(10000,90000));//產生pin
		if(!@in_array($md5,$myrss_pin))
			$chect_trace=0;
}		

	$myrss_pin[]=$md5;
	$myrss_language[]=0;
	$myrss_name[]=$title_check;
	$myrss_url[]='http://';
	$myrss_open[]='0';
	$myrss_num[]='5';	
		$f=fopen("../".$database_link__document."/myrss.php","w+");
		fputs($f,"<? \r\n");
		file_put($f,$myrss_pin,'$myrss_pin');
		file_put($f,$myrss_language,'$myrss_language');
		file_put($f,$myrss_name,'$myrss_name');
		file_put($f,$myrss_url,'$myrss_url');
		file_put($f,$myrss_open,'$myrss_open');
		file_put($f,$myrss_num,'$myrss_num');
		fputs($f,"\r\n ?>");
		fclose($f);	
		log_txt($title_check,"40",$md5);
header('location:loc.php?loc=41');
}else{
header('location:loc.php?loc=02');
}

exit();
}




if($_POST[pinx]=='updata_rss'){
@include('../'.$database_link__document.'/myrss.php');
$title_check=clean_html_str($_POST[title]);
$url_check=clean_html_str($_POST[url]);


if($_POST[language]==1){
$language_check=1;
}else if($_POST[language]==2){
$language_check=2;
}else if($_POST[language]==3){
$language_check=3;
}else if($_POST[language]==4){
$language_check=4;
}else{
$language_check=0;
}

if($_POST[open]==1){
$open_check=1;
}else{
$open_check=0;
}
$number=(int)($_POST[number]);
if(strlen_ban($title_check) && strlen_ban($url_check,4,300)){

if(@in_array($_POST[pin],$myrss_pin)){
$num=array_search($_POST[pin],$myrss_pin);
$myrss_language[$num]=$language_check;
$myrss_name[$num]=$title_check;
$myrss_url[$num]=$url_check;
$myrss_open[$num]=$open_check;
$myrss_num[$num]=$number;
		$f=fopen("../".$database_link__document."/myrss.php","w+");
		fputs($f,"<? \r\n");
		file_put($f,$myrss_pin,'$myrss_pin');
		file_put($f,$myrss_language,'$myrss_language');
		file_put($f,$myrss_name,'$myrss_name');
		file_put($f,$myrss_url,'$myrss_url');
		file_put($f,$myrss_open,'$myrss_open');
		file_put($f,$myrss_num,'$myrss_num');
		fputs($f,"\r\n ?>");
		fclose($f);
		log_txt($title_check,"42",$_POST[pin]);
		header('location:loc.php?loc=43&value='.$_POST[pin]);
}else{
	log_txt('更新RSS-找不到該RSS',"0",$_POST[pin]);
header('location:loc.php?loc=03');//系統錯誤
}
}else{
header('location:loc.php?loc=02');
}//字元錯誤
exit();
}






if($_GET[pinx]=='del_rss'){
	@require("../".$database_link__document."/myrss.php");
if(@in_array($_GET[pin],$myrss_pin)){
	$num=array_search($_GET[pin],$myrss_pin);	
	$log_value=$myrss_name[$num];
unset($myrss_pin[$num]);
unset($myrss_language[$num]);
unset($myrss_name[$num]);
unset($myrss_url[$num]);
unset($myrss_open[$num]);
unset($myrss_num[$num]);
		$f=fopen("../".$database_link__document."/myrss.php","w+");
		fputs($f,"<? \r\n");
		file_put($f,$myrss_pin,'$myrss_pin');
		file_put($f,$myrss_language,'$myrss_language');
		file_put($f,$myrss_name,'$myrss_name');
		file_put($f,$myrss_url,'$myrss_url');
		file_put($f,$myrss_open,'$myrss_open');
		file_put($f,$myrss_num,'$myrss_num');
		fputs($f,"\r\n ?>");
		fclose($f);
		log_txt($log_value,"41");
		header('location:loc.php?loc=42');
}else{
	log_txt('刪除RSS-找不到該RSS',"0",$_GET[pin]);
	header('location:loc.php?loc=03');
}
exit();
}








if($_POST[pinx]=='check_blog'){
global $database_link__document,$database_link__message;
@require("../".$database_link__document."/document_id.php");	
@require("../".$database_link__document."/document_sort.php");	
$dirdata=opendir("../".$database_link__document.'/');
$box=0;
while ($file = readdir($dirdata)) {
if($file=='.' || $file=='..'){
continue ;
}
		$filename=strrchr($file, '.php');
		if($filename!='.php'){
			if(!@in_array($file,$document_id_pin)){
				@unlink("../".$database_link__document.'/'.$file);
			}
		}
}
closedir($dirdata);
$start__sort=false;
		for($i=0;$i<count($document_id_pin);$i++){
			if(!is_file("../".$database_link__document.'/'.$document_id_pin[$i])){
					$f=@fopen("../".$database_link__document.'/'.$document_id_pin[$i],"w+");
					fputs($f,date("F d ,Y").' - 檔案已遺失 -');
					fclose($f);
			}
			if(!@in_array($document_id_sort[$i],$document_sort_pin)){
					$document_id_sort[$i]='0';
					$start__sort=true;			//準備建立 編號0分類
			}
			
		}
if($start__sort){
	//看看是否有建立資料夾
	if(!@in_array('0',$document_sort_pin)){
		$document_sort_pin[]='0';
		$document_sort_hidden[]='0';
		$document_sort_title[]=date("F d").' [尚未分類]';
	$f=fopen("../".$database_link__document."/document_sort.php","w+");
	fputs($f,"<? \r\n");
	file_put($f,$document_sort_pin,'$document_sort_pin');
	file_put($f,$document_sort_hidden,'$document_sort_hidden');
	file_put($f,$document_sort_title,'$document_sort_title');
	fputs($f,"\r\n ?>");
	fclose($f);
	}


$f=@fopen("../".$database_link__document."/document_id.php","w+");
fputs($f,'<? ');
file_put($f,$document_id_pin,'$document_id_pin');
file_put($f,$document_id_title,'$document_id_title');
file_put($f,$document_id_sort,'$document_id_sort');
file_put($f,$document_id_style,'$document_id_style');
file_put($f,$document_id_html,'$document_id_html');
file_put($f,$document_id_pw,'$document_id_pw');
file_put($f,$document_id_open_message,'$document_id_open_message');
file_put($f,$document_id_start_date,'$document_id_start_date');
file_put($f,$document_id_end_date,'$document_id_end_date');
fputs($f,'?>');
fclose($f);
}






@require("../".$database_link__message."/leave_message.php");	
$dirdata=opendir("../".$database_link__message.'/');
while ($file = readdir($dirdata)) {
if($file=='.' || $file=='..'){
continue ;
}
		$filename=strrchr($file, '.php');
		if($filename!='.php' && strlen($file)>=6){
			if(!@in_array($file,$leave_message_pin)){
				@unlink("../".$database_link__message.'/'.$file);
			}
		}
}
closedir($dirdata);
		for($i=0;$i<count($leave_message_pin);$i++){
			if(!is_file("../".$database_link__message.'/'.$leave_message_pin[$i])){
			unset($leave_message_pin[$i]);
			unset($leave_message_document[$i]);
			unset($leave_message_ip[$i]);
			unset($leave_message_date[$i]);
			unset($leave_message_name[$i]);
			unset($leave_message_switch[$i]);
			}
			if(!@in_array($leave_message_document[$i],$document_id_pin)){
			unset($leave_message_pin[$i]);
			unset($leave_message_document[$i]);
			unset($leave_message_ip[$i]);
			unset($leave_message_date[$i]);
			unset($leave_message_name[$i]);
			unset($leave_message_switch[$i]);
			@unlink("../".$database_link__message.'/'.$leave_message_pin[$i]);
			}
		}
		
		$f=fopen("../".$database_link__message."/leave_message.php","w+");
		fputs($f,"<? \r\n");
		file_put($f,$leave_message_pin,'$leave_message_pin');
		file_put($f,$leave_message_document,'$leave_message_document');
		file_put($f,$leave_message_ip,'$leave_message_ip');
		file_put($f,$leave_message_date,'$leave_message_date');
		file_put($f,$leave_message_name,'$leave_message_name');
		file_put($f,$leave_message_switch,'$leave_message_switch');		
		fputs($f,"\r\n ?>");
		fclose($f);
		
		
		
		
		
		

@require("../".$database_link__message."/reply_message.php");	
$dirdata=opendir("../".$database_link__message.'/');
$box=0;
while ($file = readdir($dirdata)) {
if($file=='.' || $file=='..'){
continue ;
}
		$filename=strrchr($file, '.php');
		if($filename!='.php' && strlen($file)<=5){
			if(!@in_array($file,$back_reply_message_pin)){
				@unlink("../".$database_link__message.'/'.$file);
			}
		}
}
closedir($dirdata);
		for($i=0;$i<count($back_reply_message_pin);$i++){
			if(!is_file("../".$database_link__message.'/'.$back_reply_message_pin[$i])){
			unset($back_reply_message_pin[$i]);
			unset($back_reply_message_date[$i]);
			unset($back_reply_message_pinx[$i]);
			}
			if(!@in_array($back_reply_message_pin[$i],$leave_message_pin)){
			unset($back_reply_message_pin[$i]);
			unset($back_reply_message_date[$i]);
			unset($back_reply_message_pinx[$i]);
			@unlink("../".$database_link__message.'/'.$back_reply_message_pin[$i]);
			}	
		}
		
	$f=fopen("../".$database_link__message."/reply_message.php","w+");
	fputs($f,"<? \r\n");
	file_put($f,$back_reply_message_pin,'$back_reply_message_pin');
	file_put($f,$back_reply_message_date,'$back_reply_message_date');
	file_put($f,$back_reply_message_pinx,'$back_reply_message_pinx');
	fputs($f,"\r\n ?>");
	fclose($f);
	
header("location:loc.php?loc=44");
exit();
}//if end


if($_POST[pinx]=='check_blog_log'){
$w='文章總數 : '.clean_html_str($_POST[t1]).'，留言總數 : '.clean_html_str($_POST[t2]).'，回覆總數 : '.clean_html_str($_POST[t3]);
if($_POST[tt]==0){
$p=' 狀態 [ 健康 ] ';
}else if($_POST[tt]==1){
$p=' 狀態 [ 正常 ] ';
}else if($_POST[tt]==2){
$p=' 狀態 [ 小感冒 ] ';
}else{
$p=' 狀態 [ 生病 ] ';
}


$p.=' - 已使用'.clean_html_str($_POST[use_month]).'個月';
$p.=' - 總容量約 : '.clean_html_str($_POST[total]).' Kb';
	log_txt($w,"99",$p);	
	header("location:loc.php?loc=45");
}

if($_POST[pinx]=='add_div'){
@require('../'.$database_link__div."/div_pin.php");//資料夾連線
$name_check=clean_html_str($_POST[name]);
if(strlen_ban($name_check)){
$chect_trace=1;
while($chect_trace){
	$md5=md5_num(rand(10000,90000));//產生pin
		if(!@in_array($md5,$div_pin))
			$chect_trace=0;
}

$div__pin[]=$md5;
$div__name[]=$name_check;
if($_POST[sorts]==1){
$sort=1;//前端
}else{
$sort=0;//後端
}
$div__sort[]=$sort;
$div__loc[]='0';
	$f=fopen("../".$database_link__div."/div_pin.php","w+");
	fputs($f,"<? \r\n");
	file_put($f,$div__pin,'$div__pin');
	file_put($f,$div__name,'$div__name');
	file_put($f,$div__sort,'$div__sort');
	file_put($f,$div__loc,'$div__loc');
	fputs($f,"\r\n ?>");
	fclose($f);

	$f=fopen("../".$database_link__div."/".$md5,"w+");
	fputs($f,clean_html_str($_POST[body]));
	fclose($f);
		log_txt($name_check,"50");
	header("location:loc.php?loc=46");
}else{
	header("location:loc.php?loc=02");
}
exit();
}


if($_GET[pin_x]=='del_div'){
@require('../'.$database_link__div."/div_pin.php");//資料夾連線
if(@in_array($_GET[pin],$div__pin)){
			$num=array_search($_GET[pin],$div__pin);
		@unlink("../".$database_link__div."/".$div__pin[$num]);
		$name_div=$div__name[$num];
		unset($div__pin[$num]);
		unset($div__name[$num]);
		unset($div__sort[$num]);
		unset($div__loc[$num]);
	$f=fopen("../".$database_link__div."/div_pin.php","w+");
	fputs($f,"<? \r\n");
	file_put($f,$div__pin,'$div__pin');
	file_put($f,$div__name,'$div__name');
	file_put($f,$div__sort,'$div__sort');
	file_put($f,$div__loc,'$div__loc');
	fputs($f,"\r\n ?>");
	fclose($f);
		log_txt($name_div,"51");
		header("location:loc.php?loc=47");
}else{
	log_txt("刪除版面-找不到該版面","0",$_GET[pin]);
		header("location:loc.php?loc=03");
}
exit();
}


if($_POST[pinx]=='updata_div'){
@require('../'.$database_link__div."/div_pin.php");//資料夾連線
$name_check=clean_html_str($_POST[name]);
if(!strlen_ban($name_check)){
		header("location:loc.php?loc=02");
exit();
}
	if(@in_array($_POST[pin],$div__pin)){
		$num=array_search($_POST[pin],$div__pin);
		if($_POST[sorts]==1){
		$sort=1;
		}else{
		$sort=0;
		}
if($_POST[loc]=='top'){
$loc='top';
}else if($_POST[loc]=='menu2'){
$loc='menu2';
}else if($_POST[loc]=='down'){
$loc='down';
}else if($_POST[loc]=='index'){
$loc='index';
}else{
$loc='0';
}

		$div__name[$num]=$name_check;
		$div__sort[$num]=$sort;
		$div__loc[$num]=$loc;
			$f=fopen("../".$database_link__div."/div_pin.php","w+");
			fputs($f,"<? \r\n");
			file_put($f,$div__pin,'$div__pin');
			file_put($f,$div__name,'$div__name');
			file_put($f,$div__sort,'$div__sort');
			file_put($f,$div__loc,'$div__loc');
			fputs($f,"\r\n ?>");
			fclose($f);
		
		$f=fopen("../".$database_link__div."/".$_POST[pin],"w+");
		fputs($f,clean_html_str($_POST[body]));
		fclose($f);
	log_txt($name_check,"52",$_POST[pin]);
		header("location:loc.php?loc=48");
	}else{
	log_txt("編輯版面-找不到該版面","0",$_POST[pin]);
	header("location:loc.php?loc=03");
	}
exit();
}

?>