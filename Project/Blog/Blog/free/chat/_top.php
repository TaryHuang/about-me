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


<?
include('../../all_function.php');
include('database/pass_data.php');


$bla=new file_et;
$trues_val="no have";
for($i=0;$i<count($pass_data_name);$i++){
if($REMOTE_ADDR==$pass_data_ip[$i] && $pass_data_del_time[$i]>=date('YmdHi')){
if(date('i')==59){
if(date('H')==23){
$time_t=100000;
}else{
$time_t=1000;
}
}else{
if($REMOTE_ADDR==$key_ip__j1){
$time_t=10;
}else{
$time_t=2;
}
}
$trues_val="have";
$pass_data_del_time[$i]=(date("YmdHi")+$time_t);//內容 通常以單行
$i=count($pass_data_ip)+2;
}//if
}//for
if($trues_val=='have'){
$fo=fopen('database/pass_data.php',"w+");
fputs($fo,'<?   ');
$bla->file_puts($fo,$pass_data_name,'$pass_data_name');
$bla->file_puts($fo,$pass_data_ip,'$pass_data_ip');
$bla->file_puts($fo,$pass_data_pass,'$pass_data_pass');
$bla->file_puts($fo,$pass_data_del_time,'$pass_data_del_time');
$bla->file_puts($fo,$pass_chat__boy,'$pass_chat__boy');
$bla->file_puts($fo,$pass_chat__age,'$pass_chat__age');
fputs($fo,'   ?>');
echo '<script language="javascript">
function gos(){
location.replace("_top.php#end");
}
setTimeout("gos()",1);
</script>';
}else{
echo '
<script language="javascript">

location.replace("erro.php");
</script>
';
}
?> 

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>聊天室</title>
<style type="text/css">
<!--
body {
	background-color: #000000;
}
body,td,th {
	color: #333333;
	font-size: small;
}
-->
body { 
 SCROLLBAR-FACE-COLOR: #fcb400;
 SCROLLBAR-3DLIGHT-COLOR: #d8006c;
 SCROLLBAR-ARROW-COLOR: #d8fcfc;
}
</style>

<link href="chat_la.css" rel="stylesheet" type="text/css">


<style type="text/css">
<!--
a:link {
	color: #FFFFFF;
	text-decoration: none;
}
a:hover {
	color: #666666;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:active {
	text-decoration: none;
	color: #666666;
}
a {
	font-size: 12px;
	color: #FFFFFF;
}
-->
</style></head>

  <script language="javascript">
function loca(){
location.replace("_top.php");
}
setTimeout("loca()",4500);
</script>
<body>
<div class="div_table">
&nbsp;<br>
&nbsp;&equiv;&equiv;&nbsp;聊天室&nbsp;&equiv;&equiv;<br>

<?
  include('../../alls/ip_come_on.php');
for($i=0;$i<count($pass_data_name);$i++){
if($pass_data_del_time[$i]>=date('YmdHi') && $pass_data_ip!=''){
if($pass_chat__boy[$i]==1){
$color_g="#0066FF";
$color_gs='男';
}else{
$color_g="#FF66CC";
$color_gs='女';
}


echo '&nbsp;&nbsp;<font style="color:'.$color_g.'">'.$pass_data_name[$i].' ['.$color_gs.'] '.$pass_chat__age[$i].'歲</font><font style="font-size:8px;color:#000000"></font><br>';
}
}
?>
<br>
&nbsp;&equiv;&equiv;&nbsp;聊天室外部&nbsp;&equiv;&equiv;<br> 

  <?
  include('../../alls/ip_come_on.php');
for($i=0;$i<count($come_ip_youip_99);$i++){
if($come_ip_youip_99[$i]!='' && $come_ip_youip_99[$i]!='127.0.0.1'){
echo '&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#666666;">'.$come_ip_youip_99[$i].'</font><br>';
}
}
  ?>
</div>
<?
if($key_body_true=='1'){
 echo '<div class="div_table4" style="SCROLLBAR-3DLIGHT-COLOR: #000000;
 SCROLLBAR-ARROW-COLOR: #486cb4;
 SCROLLBAR-DARKSHADOW-COLOR: #000000;
 SCROLLBAR-BASE-COLOR: #000000">';

  $files=file('database/key_broad.php');
  for($i=0;$i<count($files);$i++){
  echo $files[$i];
  }
  echo '</div>';
}
?>
</div>
  <div class="div_table2"  ><br>
    <br><br><br><br><br><br>&nbsp;&nbsp;<font style="font-size:20px">~歡迎進入聊天室~</font><br>
<?
include('word_data.php');
for($i=0;$i<count($data_chat__str);$i++){
if($data_chat__id[$i]!=''){
echo '<font style="color:'.$data_chat__colors[$i].'">'.$data_chat__id[$i].'</font>:<font style="color:'.$data_chat__colors[$i].'">'.$data_chat__str[$i].'</font><br>';
}
}
?><a name="end"></a><br><br>
</div>


</body>
</html>

<?
}else{
echo '<script language="javascript">

location.replace("erro.php");
</script>';
}
?>