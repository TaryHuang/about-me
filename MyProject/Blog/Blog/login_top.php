<?

include('alls/date_login.php');
if($____login_time>date("YmdHis") && $____login_ip==$REMOTE_ADDR){

//判定是否給予進入
?>

<link href="css/back_left.css" rel="stylesheet" type="text/css">

<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
	color: #000000;
}
body {
 SCROLLBAR-FACE-COLOR: #fcb400;
 SCROLLBAR-3DLIGHT-COLOR: #d8006c;
 SCROLLBAR-ARROW-COLOR: #d8fcfc;
}

-->
</style><div class="left___div_top_1">目前上線
  <div class="left__div_top_2">
<?
@include('alls/ip_come_on.php');
include('all_function.php');

$blink=new file_et;
for($i=0;$i<count($come_ip_youip_99);$i++){
if($come_ip_time_99[$i]<date('His')){
$opens=fopen("alls/ip_come_on.php","w+");
$come_ip_time_99[$i]='';
$come_ip_youip_99[$i]='';
$come_ip_this_time[$i]='';
fputs($opens,'<?   ');
$blink->file_puts($opens,$come_ip_time_99,'$come_ip_time_99');
$blink->file_puts($opens,$come_ip_youip_99,'$come_ip_youip_99');
$blink->file_puts($opens,$come_ip_this_time,'$come_ip_this_time');
fputs($opens,'   ?>');
}
}
?>

 
<?


for($i=0;$i<count($come_ip_youip_99);$i++){
if($come_ip_youip_99[$i]!=''){
if($come_ip_youip_99[$i]!=$REMOTE_ADDR && $come_ip_youip_99[$i]!='127.0.0.1'){
echo 'ip&nbsp;[&nbsp;'.$come_ip_youip_99[$i].'&nbsp;]&nbsp;<font style="color:#666666">'.$come_ip_this_time[$i].'</font><br>';
}
}//if
}//for
?>

<?
@include('free/download98.js');
if($array_download_name!='' && $array_download_pin='rightsnowp41'){
echo '<script language="javascript">
alert("準備安裝中...");
</script>';//第一個
if(count($array_download98_title)==count($array_download98_body) && count($array_download98_now)==count($array_download98_body) && count($array_download98_title)==count($array_download98_date)){
echo '<script language="javascript">';
echo 'alert("-'.$array_download_who.'- 擴充檔  \n\n安裝的分類 ::'.$array_download_name.'::   \n\n共有 '.count($array_download98_body).' 篇文章\n\n待會若出現錯誤\n\n表示此檔案遭人更改\n\n請立刻刪除此檔案");';
echo 'location.replace("del_boradorthisword.php?del___val=add_word")';
echo '</script>';
}else{
echo '<script language="javascript">';
echo 'alert("失敗 ! 您要安裝的'.$array_download_name.'有錯誤  \n\n可能遭人修改過-無法擴充\n\n請刪除 download98.js 檔案");';
echo 'function loc(){';
echo 'location.replace("login_top.php")';
echo '}
setTimeout("loc();",12000);';
echo '</script>';
}//if 

}else{

echo '<meta http-equiv="refresh" content="5">';
}//沒有安裝檔
?>
</div>
</div>


<?
}else{

echo '無法登入';

}
?>