<?

include('alls/date_login.php');
if($____login_time>date("YmdHis") && $____login_ip==$REMOTE_ADDR){

//�P�w�O�_�����i�J
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
</style><div class="left___div_top_1">�ثe�W�u
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
alert("�ǳƦw�ˤ�...");
</script>';//�Ĥ@��
if(count($array_download98_title)==count($array_download98_body) && count($array_download98_now)==count($array_download98_body) && count($array_download98_title)==count($array_download98_date)){
echo '<script language="javascript">';
echo 'alert("-'.$array_download_who.'- �X�R��  \n\n�w�˪����� ::'.$array_download_name.'::   \n\n�@�� '.count($array_download98_body).' �g�峹\n\n�ݷ|�Y�X�{���~\n\n��ܦ��ɮ׾D�H���\n\n�Хߨ�R�����ɮ�");';
echo 'location.replace("del_boradorthisword.php?del___val=add_word")';
echo '</script>';
}else{
echo '<script language="javascript">';
echo 'alert("���� ! �z�n�w�˪�'.$array_download_name.'�����~  \n\n�i��D�H�ק�L-�L�k�X�R\n\n�ЧR�� download98.js �ɮ�");';
echo 'function loc(){';
echo 'location.replace("login_top.php")';
echo '}
setTimeout("loc();",12000);';
echo '</script>';
}//if 

}else{

echo '<meta http-equiv="refresh" content="5">';
}//�S���w����
?>
</div>
</div>


<?
}else{

echo '�L�k�n�J';

}
?>