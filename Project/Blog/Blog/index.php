<?
ob_start();
include('fun__.php');
include("all_function.php");
myhourse_thistime();
myhourse_today();



@include('alls/ip_come_on.php');
$blink=new file_et;

$true____x='false';
for($i=0;$i<(count($come_ip_youip_99));$i++){
if($come_ip_youip_99[$i]==$REMOTE_ADDR){
$true____x='true';
$iii=$i;
$i=count($come_ip_youip_99)+2;
}
}//�O�_�k��IP


if($true____x=='true'){
$come_ip_time_99[$iii]=(date('His')+300);
$come_ip_youip_99[$iii]=$REMOTE_ADDR;
$come_ip_this_time[$iii]=(date('H:i:s'));
$opens=fopen("alls/ip_come_on.php","w+");
fputs($opens,'<?   ');
$blink->file_puts($opens,$come_ip_time_99,'$come_ip_time_99');
$blink->file_puts($opens,$come_ip_youip_99,'$come_ip_youip_99');
$blink->file_puts($opens,$come_ip_this_time,'$come_ip_this_time');
fputs($opens,'   ?>');
}else{

$count_ip=count($come_ip_time_99);
$come_ip_time_99[$count_ip]=(date('His')+150);
$come_ip_youip_99[$count_ip]=$REMOTE_ADDR;
$come_ip_this_time[$count_ip]=(date('H:i:s'));
$opens=fopen("alls/ip_come_on.php","w+");
fputs($opens,'<?   ');
$blink->file_puts($opens,$come_ip_time_99,'$come_ip_time_99');
$blink->file_puts($opens,$come_ip_youip_99,'$come_ip_youip_99');
$blink->file_puts($opens,$come_ip_this_time,'$come_ip_this_time');
fputs($opens,'   ?>');
}//�s�Wip �� ��s�ɶ�
?>

<?
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
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<?
@include('alls/add_423_all.php');
echo '<title>'.$win__blog_name.'</title>';
?>
<?
include('alls/add_293_alls.php');
echo '<link href="css/window_css.php?number='.$nums__checked.'" rel="stylesheet" type="text/css">';
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
</head>
<body>
<?
if($win__blog_true=='on'){
@include("alls/ip_no_value.php");
$ip_no_____power='ok';
for($i=0;$i<count($no_ip___ip);$i++){
if($no_ip___ip[$i]==$REMOTE_ADDR){
$ip_no_____power='no ok';
$i=count($no_ip___ip)+2;
}//if �P�w�A��ip �O�_�i�H�i�J����
}//for



if($ip_no_____power=='ok'){
@include('alls/ob_ip_say_hello.php');
for($i=0;$i<count($ob_say_hello_ip);$i++){
 if($ob_say_hello_ip[$i]==$REMOTE_ADDR && $ob_say_hello_true[$i]=='0'){
 $ob_say_hello___trans="have";
 $iii=$i;
 $i=count($ob_say_hello_ip)+2;
 }//if
}//for
if($ob_say_hello___trans!="have"){

@include('free/chat/database/key_in.php');

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
case 'location':$end_rights_end='false';break;
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
if($end_rights_end=='false'){
include('fun__tamber.php');
}else{
echo '<script language="javascript">
alert("-������z�ϥΦP��-");
location.replace("free/chat/");
</script>';
}//end if
}else{

echo'<link href="css/ob.css" rel="stylesheet" type="text/css">

<div class="say_div1">
<div class="say_div1_1" align="center">'.$ob_say_hello_title[$iii].'</div>
<div class="say_div1_2">'.$ob_say_hello_body[$iii].'</div>
<div class="say_div1_3" align="right">���:'.$ob_say_hello_date[$iii].'</div>
<div class="say_div1_4" align="center"><a href="index.php">�^�쥻��</a></div>
</div>';
$rands_num=floor(rand(0,7));
switch($rands_num){
case 0:$img__str='
�������� �ݡ��@�@�@�@�@�@�@ �������� 
�������� ������������������ ���������������� �@ 
�������� ������������������ �������������������ڴN�O�R����� 
�������� �����䡸����������@ ���塸�������� ';break;
case 1:$img__str='
���E�X����X�O�X�D�O�E�X��X��..�D�O�E�X� 
�~�������O�����X�D�O���E�X��X�O�X���D�E�X��X�� 
�W�����W��o���P��e���A��.�O���X�E�X��X�O���X 
�W�����W�˺��o���������֡E�X��D�E�X��..�X 
���X�X���D�O���E�X����X�O�X�D�O��X�O���E�X�
';break;
case 2:$img__str='
�C�~���@�@�@�@�@�@�~���@�@�@�@�@�@�@�@�@ 
�~�r�r�w�w�w�w�w�w�r�r���� 
�x�@�@���@�@�@�@�@���@�x�@�@�Ө�...���@��!!�@�@ 
�x���@�@���w�w�w���@���x�� 
���w�m���i�R�a���n�w�w��.... 
';break;
case 3:$img__str='


�~�����~���~���~���~���~�������@�@ 
���������e�x���Ӣx�����x���֢x���֢� 
�����������������������������  ';break;
case 4:$img__str='

����\��
�~�s�s���~�w���w���w���w���w���w��
���w�w���էO���Ѯ�v�T��߱���!?�x
�����������w���w���w���w���w���w�� ';break;
case 5:$img__str='
��.....�i�i�i �C���C���C���C���C���C���C��
��.�����ġĢ@.���C���C���C���C���C���C��
�R.�i�i ���������C�����A�ܭ�C���C���C��
��.�i�i Milk���C�����A�C�ѳ��ܦ����O��C
�O.�i�i_____�����Ʊ�C���ݨ�A�C�믫���ܦn��~~ ��';break;
case 6:$img__str='
�~�r�r�w�w�w�w�w�r�r�� 
�x�@�@�@�@�@�@�@�@�@�x�@�U�� 
�x�@���@�@�@�@�@���@�x�w���w 
�x���@���s�s�s���@���x���U�@ 
�x�@�@�@���w���@�@�@�� 
���w�s���w�w�w�w�s����';break;
case 7:$img__str='

�� �X�E�X���D�O�E�X���D��X���O�O�E���X��X���D
....................... �[�[�[.........
....... �[�[�[........ C���i��............
. ... C���i��...........�w�w�w................
���X�E�X���D�O�E�X���D��X���O�O�E���X��X���D��
';break;


}
$rands_num1=floor(rand(0,5));
switch($rands_num1){
case 0:$img__str1='
�¦N�z�O�Q�A�w��^3^
~~~~~~~~~~~�s 
��������~���@�@�@ 
�~�~�~~���A �Y�B�@�@ 
���~�� �A�@�Y�B�@�@�@ 
^^~���@�@�@�@�@�@�@�@�@ 
~���@�@�@�@�@�@�@�@�@�@ �@ 
�A�@�@�\�\�@ �@�@�\�\�@�@ �B 
| �@�@�@�@�@�@�@�@�@�@�@�@�W 
���e�e�d�d�c���c�d�d�e�e�� 
������������������������������
�U�ѡU�U�n�U�U���U�U�B�U�U�ߡU
�U�ѡU�U���U�U�ڡU�U�B�U�U�Q�U
�U�֡U�U�֡U�U���U�U���U�U�ơU 
�U�֡U�U��U�U�u�U�U�ɡU�U���U 
������������������������������ ';break;
case 1:$img__str1='


���A���~^^
�C�C.���ááááááááááá� �@ 
�@�@�U�@���ááááááááâ@�@�U
�@�@�U�@�@�ġġġġġġġġġ��@�U�@
�@..���@�@�@�@�@�@�@�@�@�@�@�@�@�@�@�@
�@..�@���@���@���@���@���@���@���@���@
�@�@�@�U�@�@�@�@�@�@�@�@�@�@�@�U
�@�@�@�U�@�@���@�@�@�@�@���@�@�U�@ 
�@�@���U�@���@�@�@���@�@�@���@�U�@�@�@ 
�@���@�U�@�@�@�@�@�@�@�@�@�@�@�U�@���@ 
�@�@�@�U�@�@�@�@�@�@�@�@�@�@�@�U 
�@�@�@���ССССССССССТ� 
�@�@�@�@�@�@���@�@�@�@�@�@�C�C.. ';break;
case 2:$img__str1='


���~���@�~���@�@�~�� 
�@�x�x�@�x�x�@�@�x�|�� 
�~�r�r�w�r������|�w�� 
�x�@�ʡ@�ʡ@�x�@�@�@�~�w�w�w�w�w�w�w�w�w�� 
�x�@��@��@�x�@�~���x���֡D�ּ֡D�n�߱��x 
�x�@�@���@�@�x�ݢ������w�w�w�w�w�w�w�w�w�� 
���w���ۢ��w�� 
�~�����~���~���~���~���~�������@�@ 
���������e�x���Ӣx�����x���֢x���֢� 
����������������������������� 
';break;
case 3:$img__str1='
�����@�@�@�@�@�@�@���@�~���㡸��
�@�i���@�@�@�@�@���i�@�����㢣�� ���@
�@�i�i���@�@�@���i�i�@���@�@�@�@�@�@�@�� 
�@���i�i�@�@�@�i�i���A�@�@�@�@�@�@�@�@�@�B
�@�@���i�@�@�@�i���@�j���۳½k�Ӭݩp�P�� �j
�@�@�@���@�@�@���@�@�B�@�@�@�@�@�@�@�@�@�A 
�@���i�i�i�i�i���@�@�@���@�@�@�@
���i�i�i�i�i��i���@�@�@�~��
�i�i�i�i�i�i�i�i�i�סס@����ԡԢw�ԡ�    ��~�s~��
�i�i�i�i�i�i�i�i���@�@
�i�i�i�i�i�i�i���@
���i�i�i�i�i�i���@
�@�e�e�e�e�e�����@
�@�@�@�@�@�@����
�n�`�a�����Ӭݪ۳½k��... ';break;
case 4:$img__str1='      ..�U�@�@�@���i�����i�� 
�V���V�@�@�@�i�ۤ߸۷N�i 
�@���@�@�@�@���i�i�i�i�� 
�@�@�@�@�@�@�@���i�i�� 
�@�@�@�@�@�@�@�@���� 
�@�@�@���i�����i���j���i�����i�� 
�@�@�@�i�öQ�ͽˢi�j�i�P�̦@�W�i 
�@�@�@���i�i�i�i���j���i�i�i�i�� 
�@�@�@�@���i�i���@�j�@���i�i�� 
�@�@�@�@�@�����@�@�j�@�@���� 
�@�@���@�@�@���i�����i���@ 
�@�С��С@�@�i���ɳ߮��i 
�@�@�x�@�@�@���i�i�i�i�� 
�@�@�@�@�@�@�@���i�i�� 
�@�@�@�@�@�@�@�@�����@�@ 
�@�@�@�@�@�@�@�@�@�j�@��';break;
case 5:$img__str1='


�~�СССССТ����˲~ 
���Т��@�@�~�Т��@�@�@���� 
�~�����СТ������@�@�@�@�@�@�� 
�U���i�����i���U�@�@�@�@�@�@�@�R�� 
�U�i�i�i�i�i�i�U���˰e�@�@�@�@�@�@�@��ˡ�
�U���i�i�i�i���U�@�@�@���� 
�U�@���i�i���@�U�@�@�@�@�@���� 
�U�@�@�����@�@�U�@�@�@�@�@�@�@�ߺw 
��============���@�@�@�@�@�@�@�@�@�H�ˡ�';break;

}
$rands_num2=floor(rand(0,4));
switch($rands_num2){
case 0:$color="#FF33CC";break;
case 1:$color="#663366";break;
case 2:$color="#0033FF";break;
case 3:$color="#330000";break;
case 4:$color="#990000";break;
}
echo '<div class="say_div2__all"  style="color:'.$color.'">'.$img__str.'</div>';
echo '<div class="say_div2__all1"  style="color:#333333">'.$img__str1.'</div>';
$of=fopen("alls/ob_ip_say_hello.php","w+");
fputs($of,"<?
");
$ob_say_hello_true[$iii]='1';
$ob_say_hello_del_time[$iii]=(date('Ymd')+3);
$blink->file_puts($of,$ob_say_hello_ip,'$ob_say_hello_ip');//IP
$blink->file_puts($of,$ob_say_hello_title,'$ob_say_hello_title');//���D
$blink->file_puts($of,$ob_say_hello_body,'$ob_say_hello_body');//���e
$blink->file_puts($of,$ob_say_hello_true,'$ob_say_hello_true');//�O�_�Q�}��
$blink->file_puts($of,$ob_say_hello_date,'$ob_say_hello_date');//���
$blink->file_puts($of,$ob_say_hello_del_time,'$ob_say_hello_del_time');//�X�ѫ�R��
fputs($of,"
?>");
echo '<script language="javascript">
alert("-���H��z�ϥΥ�H-");
</script>';
}//�P�w�O�_�T��


}else{
header('location:get_outoutout');
}//end �Tip�Ҧ�
}else{
echo '<img src="images/close2.gif" width="170" height="80">';
}
?>
</body>
</html>
