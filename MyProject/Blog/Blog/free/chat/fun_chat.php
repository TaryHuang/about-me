<?
include('database/key_in.php');
if($key_true=='1'){
switch($REMOTE_ADDR){
case $key_ip__j1:$end_rights_='location';break;
case $key_ip__j2:$end_rights_='location2';break;
case $key_ip__j3:$end_rights_='location3';break;
case $key_ip__j4:$end_rights_='location4';break;
case $key_ip__j5:$end_rights_='location5';break;
default:$end_rights_='getout';
}
switch($end_rights_){
case 'getout':$end_rights_end='false';break;
case 'location':$end_rights_end='true';break;
case 'location2':
if($key_ip__j2_true=='1'){
$end_rights_end='true';
}else{
$end_rights_end='false';
};break;
case 'location3':
if($key_ip__j3_true=='1'){
$end_rights_end='true';
}else{
$end_rights_end='false';
};break;
case 'location4':
if($key_ip__j4_true=='1'){
$end_rights_end='true';
}else{
$end_rights_end='false';
};break;
case 'location5':
if($key_ip__j5_true=='1'){
$end_rights_end='true';
}else{
$end_rights_end='false';
};break;
default:$end_rights_end='false';
}

}else{
$end_rights_end='false';
}


if($end_rights_end=='true'){

?>
<style type="text/css">
<!--
body {
	background-color: #000000;
}
-->
</style>';
<?

//---------------------寫入留言
include('../../all_function.php');
include('word_data.php');
include('database/pass_data.php');

$blink2=new mysql_et;
$bla=new file_et;

for($i=0;$i<count($pass_data_name);$i++){
if(date('YmdHi')>=$pass_data_del_time[$i]){
$pass_data_ip[$i]='';//內容 通常以單行
}//if
}//for

$fo=fopen('database/pass_data.php',"w+");
fputs($fo,'<?   ');
$bla->file_puts($fo,$pass_data_name,'$pass_data_name');
$bla->file_puts($fo,$pass_data_ip,'$pass_data_ip');
$bla->file_puts($fo,$pass_data_pass,'$pass_data_pass');
$bla->file_puts($fo,$pass_data_del_time,'$pass_data_del_time');
$bla->file_puts($fo,$pass_chat__boy,'$pass_chat__boy');
$bla->file_puts($fo,$pass_chat__age,'$pass_chat__age');
fputs($fo,'   ?>');








for($i=0;$i<(count($pass_data_name));$i++){
if($REMOTE_ADDR==$pass_data_ip[$i] && date('YmdHi')<=$pass_data_del_time[$i] ){
$ids=$pass_data_name[$i];
$i=count($pass_data_ip)+2;
}//if
}//for
$words=$blink2->str_re($words);
switch($color_thisword){
case '#ffcc00':$color_thisword='#ffcc00';break;
case '#CC0000':$color_thisword='#CC0000';break;
case '#666666':$color_thisword='#666666';break;
case '#0066FF':$color_thisword='#0066FF';break;
case '#FF66CC':$color_thisword='#FF66CC';break;
case '#FFFFFF':$color_thisword='#ffffff';break;
case '#FF9900':$color_thisword='#FF9900';break;
default:$color_thisword='#000000';
}


if($words!=''  && strlen($words)<=80 ){


if($ids!=''){

$nums=count($data_chat__date);
$fo=fopen('word_data.php',"w+");
fputs($fo,'<?   ');
$data_chat__str[$nums]=$words;//內容 通常以單行
$data_chat__ip[$nums]=$REMOTE_ADDR;
$data_chat__colors[$nums]=$color_thisword;
$data_chat__id[$nums]=$ids;//暱稱 為哪個帳號 密碼者
$data_chat__date[$nums]=date('m/d h:i:s');

$bla->file_puts($fo,$data_chat__str,'$data_chat__str');
$bla->file_puts($fo,$data_chat__ip,'$data_chat__ip');
$bla->file_puts($fo,$data_chat__id,'$data_chat__id');
$bla->file_puts($fo,$data_chat__date,'$data_chat__date');
$bla->file_puts($fo,$data_chat__colors,'$data_chat__colors');
fputs($fo,'   ?>');
header('location:_top.php');
}else{
echo'<script language="javascript">
alert("無法寫入");
location.replace("erro.php");
</script>';
}
}else{
echo'<script language="javascript">
alert("請勿輸入奇怪的字元");
location.replace("_top.php");
</script>';
}
?>

<?
}else{
echo'<script language="javascript">
alert("無法寫入");
location.replace("erro.php");
</script>';
}
?>