<style type="text/css">
<!--
body,td,th {
	color: #999999;
	font-size: larger;
}
body {
	background-color: #000000;
}
a:link {
	color: #FFCC00;
	text-decoration: none;
}
a:hover {
	color: #990000;
	text-decoration: none;
}
a {
	font-size: 12px;
}
a:visited {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style>
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

echo '-聊天室關閉中-';
}

if($end_rights_end=='false'){
echo '站長未邀請您中..';
}
if($end_rights_end=='true'){
echo '<script language="javascript">
location.replace("index.php");
</script>';
}else{
echo '<script language="javascript">
function locah(){
location.replace("erro,php");
}
setTimeOut("locah()",1500);
</script>';
}
?>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
<div  style="position:absolute; left:282px; top:153px; width:228px; height:75px; z-index:1;font-size:50px">等待室..<br>
</div>
<div style="position:absolute; left:447px; top:131px; width:69px; height:17px; z-index:2; overflow: visible;"><a href="../../" target="_blank">回到本站</a></div>
