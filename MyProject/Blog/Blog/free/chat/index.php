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
}//end 開關器

if($end_rights_end=='true'){
?>
<?
include('database/pass_data.php');
$yes_remote_true="false";
for($i=0;$i<count($pass_data_ip);$i++){
if($pass_data_ip[$i]==$REMOTE_ADDR && date('YmdHi')<=$pass_data_del_time[$i]){
$yes_remote_true="true";
$i=count($pass_data_ip)+2;
}
}//for
if($yes_remote_true=="true"){
if($true_lader=='true'){
echo '<frameset rows="377,*" cols="*" framespacing="0" frameborder="NO" border="0">
  <frame src="_top.php?val_=true" name="tops" scrolling="NO" noresize>
  <frame src="_down.php?val_=true" name="mainFrame">
</frameset>';
}else{
echo '<frameset rows="377,*" cols="*" framespacing="0" frameborder="NO" border="0">
  <frame src="_top.php" name="tops" scrolling="NO" noresize>
  <frame src="_down.php" name="mainFrame">
</frameset>';
}
}else{

echo '<body bgcolor="#000000" scroll="no">

<div  style="position:absolute; left:280px; top:250px; width:133px; height:105px; z-index:1">
<form  method="post" action="database/fun_pass.php">
  <table border="0" width="200" cellspacing="2" cellpadding="2">
    <tr>
      <td style="font-size:12px;color:#999999">暱稱</th>
      <td style="font-size:12px;color:#999999"><input name="data_name" type="text" size="10" maxlength="12" style="font-size:12px"> 4~20字元</td>
    </tr>
    <tr>
      <td style="font-size:12px;color:#999999">密碼</th>
      <td style="font-size:12px;color:#999999"><input name="data_pass" type="password" size="12" maxlength="12" style="font-size:12px"> 6~12字元</td>
    </tr>
	<tr>
      <td style="font-size:12px;color:#999999">性別</th>
      <td style="font-size:12px;color:#999999">男
<input name="boys" type="radio" value="1" checked>
女
<input name="boys" type="radio" value="0">
</td>
    </tr>
	    <tr>
      <td style="font-size:12px;color:#999999">年齡</th>
      <td style="font-size:12px;color:#999999">';
echo '<select name="age" style="font-size:12px;">';
for($i=7;$i<50;$i++){
if($i==17){
 echo '<option value="'.$i.'" selected>'.$i.'</option>';
}else{
 echo '<option value="'.$i.'" >'.$i.'</option>';
}
}//for
echo'</select> 歲';	  
echo '</td>
    </tr>
	    <tr>
      <td style="font-size:12px;color:#999999">模式</th>
      <td style="font-size:12px;color:#999999"><input name="ox_i" type="radio" value="1" checked>
      直接登入<input name="ox_i" type="radio" value="0">申請註冊
</td>
    </tr>
    <tr>
      <td colspan="2"><div align="right">
        <input type="submit" name="Submit" value="進入">
      </div></td>
    </tr>
  </table>';
echo'</form>
</div>
<div  style="position:absolute; left:23px; top:50px; width:680px; height:260px; z-index:-1; filter:progid:DXImageTransForm.Microsoft.Alpha(style=2,opacity=70); background-image: url(database/bg.gif); border: 1px none #000000;">
</div>';


echo '</body>
';
}
?>
<?
}else{
header('location:erro.php');
}//end 是否給予ip進入
?>
