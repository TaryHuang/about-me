<?

ob_start();

include("cool.php");//���������}���ӳo��}�B���ʧ@

$pin_kk47_WINS=$_POST[pin_kk47];

if($pin_kk47=='aaa23'){
$my_pin_kk47="�峹�H��[��";
}//end
switch($pin_kk47_WINS){
case aaa1:$my_pin_kk47="���K�X";break;
case aaa2:$my_pin_kk47="�o�e�p�H";break;
case aaa3:$my_pin_kk47="�ӽбb��";break;
case aaa4:$my_pin_kk47="�ѰO�K�X";break;
case aaa10:$my_pin_kk47="�򥻸�ƭק�";break;
case aaa11:$my_pin_kk47="�ӤH��ƭק�";break;
case aaa12:$my_pin_kk47="�R���p�H";break;
case aaa13:$my_pin_kk47="�R���q�T�����";break;
case aaa14:$my_pin_kk47="�[�J�q�T��";break;
case aaa15:$my_pin_kk47="�R���ƥ��H��";break;
case aaa16:$my_pin_kk47="�s�W�@���峹";break;
case aaa17:$my_pin_kk47="�[�J�ڪ��̷R";break;
case aaa18:$my_pin_kk47="�^�Ф峹";break;
case aaa19:$my_pin_kk47="�R���ڪ��̷R";break;
case aaa20:$my_pin_kk47="�ק惡�峹";break;
case aaa24:$my_pin_kk47="�ק�^�Ф峹a";break;
case aaa25:$my_pin_kk47="�_���峹a";break;

case aaa26:$my_pin_kk47="�[�J�¦W��";break;
}
/*--------------------------------------------
$sql="";
$data=sql_b($sql);
-------------------------------*/
if($my_pin_kk47=="���K�X"){
$b__2006_7_8_1=$_POST[pin_myuser_1988];//�b��
$b__2006_7_8_2=$_POST[password_aass106_0];//�K�X��
//-----------------------------------------



$b__2006_7_8_3=$_POST[password_aass106_2];//�K�X�s
$b__2006_7_8_4=$_POST[password_aass106_1];//�K�X�s

$b__2006_7_8_3=pass_u_go_out($b__2006_7_8_3);
$b__2006_7_8_4=pass_u_go_out($b__2006_7_8_4);
 
if(strlen($b__2006_7_8_3)>=4){
if($b__2006_7_8_3==$b__2006_7_8_4){
if(preg_match("/[^0-9a-zA-Z]+/",$b__2006_7_8_3)){
header("location:../h_ya/indax.php?windown=mypassword_15");
}else{

$b__2006_7_8_44="OK";
}

if($b__2006_7_8_44=="OK"){
$sql="SELECT `user` , `pass` 
FROM `pass` 
WHERE 1 AND `user` = '$b__2006_7_8_1' AND `pass` = '$b__2006_7_8_2'";
$data_sssssss=sql_b($sql);

if($data_sssssss[0][0]!=''){
$sql="UPDATE `pass` SET `pass` = '$b__2006_7_8_3' WHERE  `user` = '$b__2006_7_8_1' AND `pass` = '$b__2006_7_8_2' ";
$data=sql_a($sql);
//�o��n�`�N����  �N�O�b���n���T�{ ���n�����O�ۤv�n�J�b��  ���i�H�ק��L�H�K�X
header("location:../h_ya/indax.php?windown=mypassword_1");
}else{

header("location:../h_ya/indax.php?windown=mypassword_2");

}//�P�w �±K�X �O�_�O���T��

}else{

header("location:../h_ya/indax.php?windown=mypassword_2");

}//�P�w �±K�X �O�_�O���T��

}else{
header("location:../h_ya/indax.php?windown=mypassword_3");

}//�P�w �K�X ��K�X�T�{  �O�_�@��mypassword_1
}else{
header("location:../h_ya/indax.php?windown=mypassword_31");
}//�K�X�C�� �|�Ӧr��

}//end







































if($my_pin_kk47=="�o�e�p�H"){
$f_2006_7_8_1=$_POST[send_2006_7_5_i];
$f_2006_7_8_2=$_POST[send_2006_7_5_d];
$f_2006_7_8_3=$_POST[send_2006_7_5_f];
$f_2006_7_8_4=$_POST[send_2006_7_5_a];
$f_2006_7_8_5=$_POST[send_2006_7_5_e];
$f_2006_7_8_6=$_POST[send_2006_7_5_b];
$f_2006_7_8_7=$_POST[send_2006_7_5_c];
//-------------




$f_2006_7_8_3=pass_u_go_out($f_2006_7_8_3);
$f_2006_7_8_2=pass_u_go_out($f_2006_7_8_2);

$sql2212_b="SELECT * 
FROM `pass` 
WHERE 1 AND `user` = '$f_2006_7_8_1' AND `win` = '�}' ";

$sqldhiu1hd=sql_b($sql2212_b);

if($sqldhiu1hd[0][0]!=''){

//----------
if($_COOKIE["powers_a"]!='���i�g�J'){





if($f_2006_7_8_5=='yes'){

//-----�}���ɮ�+�y���s��
$f_4_f=file("f_4.h");//�����
$f_4_o=fopen("f_4.h","w+");//�}���ɮ�
$f_4_f[0]++;
fputs($f_4_o,$f_4_f[0]);//�g�J
fclose($f_4_o);//�����ɮ�
//-----

$ssql="INSERT INTO `e_mails` ( `num` , `uesr` , `title` , `body` ) 
VALUES (
'$f_4_f[0]', '$f_2006_7_8_1', '$f_2006_7_8_2', '$f_2006_7_8_3'
);";
sql_a($ssql);

}//end �P�w�O�_�n �ƥ�

switch($f_2006_7_8_4){
case '0':$my_2006_7_5_aa="�ʺ�";break;
case '1':$my_2006_7_5_aa="�q�T��";break;
}//�P�w �q�T�� ��� �٬O�ʺ�





$rabs_1=rand(1,13);
$aaaas_color=array('#000000','#666666','#999999','#CCCCCC','#FFFFFF','#FF50A7','#FF5096','#FF5084','#FF5073','#FF5061','#FF5050','#FF6250','#FF7C50','#FF8550','#FF8D50','#FF9650','#FF9F50','#FFA850','#FFB050','#FFB950','#FFC250','#FFCB50','#FFD350','#FFDD78','#FFE478','#FFEB78','#FFF278','#FFF878','#FFFF78'
,'#F8FF78','#F1FF78','#EBFF78','#E4FF78','#DDFF78','#D2FF78','#C0FF78','#AEFF78','#9CFF78','#8AFF78','#78FF78','#78FF8A','#78FF9C',
'#78FFAE','#78FFC0','#78FFD2','#78FFDD','#78FFE4','#78FFEB','#78FFF2','#78FFF8','#78FFFF','#78F8FF','#78F1FF','#78EBFF','#78E4FF','#78DDFF','#78D2FF','#78C0FF','#78AEFF','#789CFF'
,'#788AFF','#7878FF','#8A78FF','#9C78FF','#AE78FF','#C778FF','#D278FF','#DD78FF','#E978FF','#F478FF','#FF78FF','#FF78F4','#FF78E8','#FF78DD','#FF78C7','#FFCC00','#FF9900','#990000','#663399','#3366FF','#0033FF','#FFFF00','#996600','#FF0066','');

$rabs_1_a=rand(0,count($aaaas_color));
switch($rabs_1){
case 1;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
��~�{�z�� 
�~�}�|�}�|�� 
�|�{�D�D�z�}�w���@�@�@ 
�~�r�w�w�t��~~�u�� �H �� �� �� �� ^^ 
�x���@���x�@�@�x�� �@ 
���s�w�w���@�@�x ~~~~~~~~~�N 
������������������������������������������ 
[/psq_==_2]';break;
case 2;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]

�~������������ 
������������ �@     - �@�d���P�P ���z�\���@�� -
���ڨ�����o!! ����     
������������������������ 
��������������~�� ������ �� 
������������ ���@ �@����������������
�������������� �@�@�@������ ������������������
[/psq_==_2]
';break;
case 3;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
�~���ġĢ~�~�~�~�~�ġĢ~�� 
�x�@�@�@�@�@�@�@�@�@�@�@�x�@�@�@�~�w�w�w�w�w�� 
�x�@�@�@�@�@�@�@�@�@�@�@�x�@�@�@�x�֢Ӣڢڢݢx 
�x�@�D�@�~�w�w�w���@�D�@�x�@�~���x���Ѧw�w���x �@ 
�x�ݡ@�@�x���@���x�@�@�ݢx�ݢ������w�w�w�w�w�� 
�x�@�@�@���w�w�w���@�@�@�x�@ 
���w�w�s���w�w�w�w�s�w���� 
[/psq_==_2]';break;

case 4;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
* ���� �b�c�e�c�b�D�����D����� 
����i�i�i�i�i��* ���D�� * �� 
�����i�i�i�i���i�i���D��Ѯ�N�F,�� 
�������i�i�i�i�i���i���D�e�A�@����,* �� 
������i�i�i�i�i�D������p�ߧO�۲D�F�I� 
* ����i�i�i�i�i:���* * ���D:��� 
����i�i�i�i�i���D�*:����*���� �� �Ʊ�ڳ�������!!!!!! 
:���* * ���D:��� ���D���* * �� 
[/psq_==_2]
';break;
case 5;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
���i�i�i�i�i�i���@�@�@�@�@�@���i�i�i�i��      ���ڭJù��!
�����@�@�@�@�@�@�����@�@�@�@�����@�@�@�@���� 
���@�@�@�@�@�@�@�@�����@�@�����@�@�@�@�@�@�i 
�k�@�@�@���i���@�@�@���������@�@���i�@�@�@�i 
���@�@�����@�@�����@�@�@�@�@�@���������@���� 
���i�i�� ���� �@�@�@�@�@�@���i�i�� 
�@�@�@�@�@�@�i�@���@�@�@�@�@�@�@���@�i 
�@�@�@�@�@�@�i�@���@�@�@�e�@�@�@���@�i 
�@�@�@�@ �@ �����@�@�@������@�@�@���� 
�@�@�@�@�@�@�@���i�f�d�d�@�d�d�f�i�� 
�@�@�@�@�@�@�@�@�@�����@�@�@���� 
�@�@�@�@�@�@�@�@�@�i�@�@�@�@�@�i 
�@�@�@�@�@�@�@�@�����y�@�@�@�k���� 
�@�@�@�@�@�@�@�y�d�����f�f�f�����d 
[/psq_==_2]
';break;
case 6;$rabs_2='    
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
        
�I�~������������z�CZ�I�k�k 
�Pz�� (�С\��) ���c�c�[���� 
�~�����������������e�k���X�D�E�I

[/psq_==_2]
';break;
case 7;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
    ���ޡ@�@�@�@�@�@�@�@ ���� 
�@�������ߡ@�������@�@�@ ���ߡ@�@�@�������� 
�@��������@�����ޡ@���@ ����@������������ 
�@�@����@�@������@�ޢ������� ������������ 
�@�@����@�@�������@��������� ������������ 
�@�@�@�@�@�@�@�@�@�@�@�@������@ �@���@�� 
�@�@�@�@�@�@�@�@�@�@�@�@�@�@�@�@�@ �@������
[/psq_==_2]
';break;

case 8;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
�e�A�����i�R���߫}�r!!~cc
 ��_�� �@��_�� �@��_��
�]�����^ �]���^ �]�����^
��š^�� �� �š^�� �� �š^��
�ߤW���� �դѪ��� �`�۪��� 


 ��_��@��_�� �@��_��
�]�����^�]���^ �]�I�I�^
��š^�� ��š^�� ��š^��
�c�@�@���� �`�]���� �R������ 
[/psq_==_2]
';break;
case 9;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
�C 
���@��@�@�C 
���@�a�@�@�C�@�@�@���i���b�b�b�b�b�b�b�b���i�� 
�֡@���@�@�C�@�@�@���@�@�@�@�@�@�@�@�@�@�@�@�� 
���@�A�@�@�@�C�@�@�j�@���i���@�@�@�@���i���@�@�x 
���@�L�@�@�@�@���i���@�i�i���@�����@���i�i�@�@�x 
�B�@�ơ@�@�@�@���i�i�����i���@�@�@�@���i���@�@/ 
��@���@�@�@�@�@���i���c�d�e�f�g�h�h�g�f�e�d�� 
�@�@���@�@�@�@�@�@�x�@�@�@�@�w�w���@�@�@�@�@���i�� 
�@�@�B�@�@�@�@�@�@�x�@�@�@�@�@�@�@�@�@�@�@�@���i�i�� 
�@�@�P�@�@�@�@�@�����@�@�@�@�@�@�@�@�@�@�@�������i�� 
�@�@�֡@�@�@�@���i�i���@�@�@�@�@�@�@�@�@���i�i�� 
�@�@�֡@�@�@�@�i�i�i�i�w�w�w�w�w�w�w�w�w�i�i�i�i 
[/psq_==_2]';break;
case 10;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
            ��켰�R���P

���D�X��X���O�O�E���X��X���D��X�����D�X��X�� ���D�X��X�����D�X��X
�@�@�����A�B�@�@�@�@���A�B�@�@�������A�B�@ 
�@�@���@�@�@�@�@�@���@�@�@�@�@�@���@�@�@�@�@ 
�@���@�@�@ �@�@���@�@�@�@�@�@�@�@�@ �@�@�@ �@ 
�A ���@�@�@�� �A �@�� �@���@ �B�@���@�@���@�B 
| ���@ ���@�@ |�@���@ �� �@���@�W �@ ���@ ���W 
���i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i��

[/psq_==_2]
';break;
case 11;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]

~~~~~~~~~~~�s       �O�A���ڦ��@��..
��������~���@�@�@ 
�~�~�~~���A �Y�B�@�@ 
���~�� �A�@�Y�B�@�@�@ 
^^~���@�@�@�@�@�@�@�@�@ 
~���@�@�@�@�@�@�@�@�@�@ �@ 
�A�@�@�\�\�@ �@�@�\�\�@�@ �B 
| �@�@�@�@�@�@�@�@�@�@�@�@�W 
���e�e�d�d�c���c�d�d�e�e�� 
';break;
case 12;$rabs_2='
 [psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]                      
					    
���������������������� 
�~���@���w�w�w�w���@���@�~���@�w�w�w�w�w���@�� 
�x�@�@�@�@�@�@�@�@�@�x�@�x�@�@�@�@�@�@�@���@�x 
�x�@���@�@�@�@�@���@�x�@�x�@���@�@�@�@�@���@�x 
�x���@���w�w�w���@���x�@�x���@���s�s�s���@���x 
�x�@�@�@�@�@�@�@�@�@�x�@�x�@�@�@���w���@�@�@�x 
���w�s�ݢw�w�w�ݢs�w���@���w�s���w�w�w���s�w��  
[/psq_==_2]
';break;

case 13;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
                        
�ڡ����ڷQ���S.. 
������������������������ ��
�@�@�@�@�@�~�ᢡ�@�@�@�@�@�@�@�@�@ �� 
�b�~�f�g�h�����i�h�g�f�e�d�c�b(��)�i�� 
�@�����d__�b�b�b�b�b�����������v�v�v�@ 
�@�@�@�@��O �@ ��O 
[/psq_==_2]
';break;
}//end �Ϯ�





















if($my_2006_7_5_aa=='�ʺ�'){



if($f_2006_7_8_2!='' && strlen($f_2006_7_8_3)>=5  ){

$f_2006_7_8_3=$f_2006_7_8_3.'





'.$rabs_2;


$sql_a="SELECT * 
FROM `pass` 
WHERE 1 AND `name` 
= '$f_2006_7_8_6'";
$data_a=sql_b($sql_a);

//�P�w�ʺ٤�_���H
if($data_a[0][0]=='' || $data_a[0][1]==$f_2006_7_8_1){
header('location:../h_ya/indax.php?windown=mypassword_19');
}else{
//-----�}���ɮ�+�y���s��
$f_2_f=file("f_2.h");//�����
$f_2_o=fopen("f_2.h","w+");//�}���ɮ�
$f_2_f[0]++;
fputs($f_2_o,$f_2_f[0]);//�g�J
fclose($f_2_o);//�����ɮ�
//-----
$sql_a="SELECT * 
FROM `pass` 
WHERE 1 AND `name` 
= '$f_2006_7_8_6'";
$data_a=sql_b($sql_a);
$data1_you=$data_a[0][1];//�A���b��
$data2_you=$data_a[0][3];//�A���ʺ�

//----------------------------���H �A
$sql_b="SELECT * 
FROM `pass` 
WHERE 1 AND `user` 
= '$f_2006_7_8_1'";
$data_b=sql_b($sql_b);
$data1_my=$data_b[0][1];//�ڪ��b��
$data2_my=$data_b[0][3];//�ڪ��ʺ�
$data3_my=$data_b[0][0];//���H�ݧڪ���ƪ�
//----------------------------�H�H ��






$sql333="INSERT INTO `e_mail` ( `num` , `name` , `name_2` , `time` , `title` , `body` , `true` , `uesr` , `pin_gs` , `ip`, `ddddd` ) 
VALUES (
'$f_2_f[0]', '$data2_you', '$data2_my', NOW( ) , '$f_2006_7_8_2', '$f_2006_7_8_3', '���\Ū', '$data1_you', '$data1_my', '$REMOTE_ADDR', '$data3_my'
);
";
sql_a($sql333);

setcookie('powers_a','���i�g�J',time()+30);
header('location:../h_ya/indax.php?windown=mypassword_8');
}

}else{
header('location:../h_ya/indax.php?windown=mypassword_18');

}

}




if($my_2006_7_5_aa=='�q�T��'){


if($f_2006_7_8_2!='' && strlen($f_2006_7_8_3)>=5 && $f_2006_7_8_7!=''){
$sql_a21="SELECT * 
FROM `pass` 
WHERE 1 AND `Num` 
= '$f_2006_7_8_7'";


$f_2006_7_8_3=$f_2006_7_8_3.'




'.$rabs_2;



$data_a=sql_b($sql_a21);
if($data_a[0][1]!=''){
//-----�}���ɮ�+�y���s��
$f_2_f=file("f_2.h");//�����
$f_2_o=fopen("f_2.h","w+");//�}���ɮ�
$f_2_f[0]++;
fputs($f_2_o,$f_2_f[0]);//�g�J
fclose($f_2_o);//�����ɮ�
//-----

$data1_you=$data_a[0][1];//�A���b��
$data2_you=$data_a[0][3];//�A���ʺ�

//----------------------------���H �A
$sql_b="SELECT * 
FROM `pass` 
WHERE 1 AND `user` 
= '$f_2006_7_8_1'";
$data_b=sql_b($sql_b);
$data1_my=$data_b[0][1];//�ڪ��b��
$data2_my=$data_b[0][3];//�ڪ��ʺ�
$data3_my=$data_b[0][0];//���H�ݧڪ���ƪ�
//----------------------------�H�H ��







$sql333="INSERT INTO `e_mail` ( `num` , `name` , `name_2` , `time` , `title` , `body` , `true` , `uesr` , `pin_gs` , `ip`, `ddddd` ) 
VALUES (
'$f_2_f[0]', '$data2_you', '$data2_my', NOW( ) , '$f_2006_7_8_2', '$f_2006_7_8_3', '���\Ū', '$data1_you', '$data1_my', '$REMOTE_ADDR', '$data3_my'
);
";
sql_a($sql333);

setcookie('powers_a','���i�g�J',time()+30);
header('location:../h_ya/indax.php?windown=mypassword_8');

}else{
header('location:../h_ya/indax.php?windown=mypassword_19');

}//�q�T��


}else{

header('location:../h_ya/indax.php?windown=mypassword_18');
}


}















}else{

header('location:../h_ya/indax.php?windown=mypassword_20');
}

}else{
header('location:../h_ya/indax.php?windown=mypassword_101');

}//end �Q�T��



}//end

































if($my_pin_kk47=="�ӽбb��"){
//---------------------------------------------------�����Q ���W���
$a__2006_7_8_1=$_POST[user_d100]; //�b�� OK
$a__2006_7_8_2=$_POST[pass_d100]; //�K�X OK
$a__2006_7_8_3=$_POST[pass_2_d100]; //�A��J�@���K�X  ok
$a__2006_7_8_4=$_POST[name_d100]; //�ʺ� OK
$a__2006_7_8_5=$_POST[email]; //E-MAIL 
$a__2006_7_8_6=$_POST[bir_1_d100]; //�褸 ok
$a__2006_7_8_7=$_POST[name_1_d100]; //�u��m�W 
$a__2006_7_8_8=$_POST[pass_A_d100]; //���� 
//----------------------------------
$a__2006_7_8_9=$_POST[bir_2_d100]; //�ͤ� ��   ok
$a__2006_7_8_10=$_POST[bir_3_d100]; //�ͤ� �� ok
$a__2006_7_8_11=$_POST[pass_Q_d100]; //���D ok
$a__2006_7_8_12=$_POST[boy_1_d100]; //�ʧO ok

//------------------���W���

if($a__2006_7_8_1!='' && $a__2006_7_8_2!='' && $a__2006_7_8_3!='' && $a__2006_7_8_4!=''  && $a__2006_7_8_5!='' && $a__2006_7_8_6!='' && $a__2006_7_8_7!=''){

if($a__2006_7_8_1!=$a__2006_7_8_2){

$sql___1="SELECT * 
FROM `pass` 
WHERE 1 AND `user` = '$a__2006_7_8_1' ";
$sql___1i=sql_b($sql___1);
if($sql___1i[0][0]==''){
$a__2006_7_8_ok='���\1_1';
}else{
header('location:../index.php?add=open_3');
}//�O�_������ �b�� 

if($a__2006_7_8_ok=='���\1_1'){


$a__2006_7_8_4=pass_u_go_out($a__2006_7_8_4);

if(strlen($a__2006_7_8_4)>=4 && strlen($a__2006_7_8_4)<=20 ){


$a__2006_7_8_ok='���\1';

}else{

header('location:../index.php?add=open_5');
}//END
}//�⤣�W�h���r���N��




if($a__2006_7_8_ok=='���\1'){
$sql___1="SELECT * 
FROM `pass` 
WHERE 1 AND `name` = '$a__2006_7_8_4' ";
$sql___1i=sql_b($sql___1);
if($sql___1i[0][0]==''){
$a__2006_7_8_ok='���\2';
}else{
header('location:../index.php?add=open_4');

}
}//�O�_�ʺ�


if($a__2006_7_8_ok=='���\2'){
if(strlen($a__2006_7_8_1)>=4 && strlen($a__2006_7_8_1)<=12 ){

if(preg_match("/[^0-9a-zA-Z_]+/",$a__2006_7_8_1)){
header('location:../index.php?add=open_1');
}else{
$a__2006_7_8_ok='���\3';
}//END

}else{

header('location:../index.php?add=open_2');
}//END
}//�b���O�_��



if($a__2006_7_8_ok=='���\3'){

if($a__2006_7_8_2==$a__2006_7_8_3){

if(strlen($a__2006_7_8_3)>=4 && strlen($a__2006_7_8_3)<=12 ){

if(preg_match("/[^0-9a-zA-Z]+/",$a__2006_7_8_1)){
header('location:../index.php?add=open_6');
}else{
$a__2006_7_8_ok='���\4';
}//END

}else{

header('location:../index.php?add=open_8');
}//END


}else{

header('location:../index.php?add=open_7');
}//�P�w�T�{�K�X �O�_���T

}//�P�w�K�X�O�_���T



if($a__2006_7_8_ok=='���\4'){


$a__2006_7_8_7=pass_u_go_out($a__2006_7_8_7);

$a__2006_7_8_8=pass_u_go_out($a__2006_7_8_8);

$a__2006_7_8_5=pass_u_go_out($a__2006_7_8_5);

$a__2006_7_8_6=pass_u_go_out($a__2006_7_8_6);


$a__2006_7_8_ok='���\5';

}//�ѨM�Ҧ�����ê


if($a__2006_7_8_ok=='���\5'){
if(strlen($a__2006_7_8_6)==4){
if(preg_match("/[^0-9]+/",$a__2006_7_8_6)){
header('location:../index.php?add=open_9');
}else{
$a__2006_7_8_ok='���\6';
}//END
}else{
header('location:../index.php?add=open_9');
}//end �r����a 
}//end


if($a__2006_7_8_ok=='���\6'){
if(strlen($a__2006_7_8_7)>=2){

$a__2006_7_8_ok='���\7';


}else{

header('location:../index.php?add=open_10');
}//end �r����a 
}//end



if($a__2006_7_8_ok=='���\7'){
if(strlen($a__2006_7_8_8)>=2){

$a__2006_7_8_ok='���\8';


}else{

header('location:../index.php?add=open_12');
}//end 
}//end ����


if($a__2006_7_8_ok=='���\8'){
if(strlen($a__2006_7_8_5)>=8){


if(preg_match("/[^0-9a-zA-Z_.@]+/",$a__2006_7_8_1)){
header('location:../index.php?add=open_13');
}else{
$a__2006_7_8_ok='���\AA';
}//END

}else{

header('location:../index.php?add=open_13');
}//end �r����a 
}//end  







if($a__2006_7_8_ok=='���\AA'){
$f_1_f=file("f_1.h");//�����
$f_1_o=fopen("f_1.h","w+");//�}���ɮ�
$f_1_f[0]++;
fputs($f_1_o,$f_1_f[0]);//�g�J
fclose($f_1_o);//�����ɮ�






$sql="INSERT INTO `pass` ( `Num` , `user` , `pass` , `name` , `boy_girl` , `email` , `birsday_1` , `birsday_2` , `birsday_3` , `Q_` , `A_` , `from` , `my_HTTP` , `W` , `INT` , `JOB` , `P_URL` , `Lv100` , `come_num` , `win` , `kkss1` , `kkss2` , `kkss3` , `landtime` , `true_name` ,`p_url_2`,`p_true` ) 
VALUES (
'$f_1_f[0]', '$a__2006_7_8_1', '$a__2006_7_8_2', '$a__2006_7_8_4', '$a__2006_7_8_12', '$a__2006_7_8_5', '$a__2006_7_8_6', '$a__2006_7_8_9', '$a__2006_7_8_10', '$a__2006_7_8_11', '$a__2006_7_8_8', '�x�W..', 'http://', '', '', '�L', 'http://', '5', '1', '��', '1', '1', '0', NOW( ) , '$a__2006_7_8_7','1','0'
);";
sql_a($sql);//�ӽЦ��\  ���U�ӬO �g�J�p�H+�W �@�ѵL�k �o��


//-----�}���ɮ�+�y���s��
$f_2_f8=file("f_2.h");//�����
$f_2_o8=fopen("f_2.h","w+");//�}���ɮ�
$f_2_f8[0]++;
fputs($f_2_o8,$f_2_f8[0]);//�g�J
fclose($f_2_o8);//�����ɮ�
//-----

$title_s201='[�s����� ����T��]' ;
$body_s201='�w�� '.$a__2006_7_8_4 .' �[�J���׾�
�ѩ�z�O[psq_=color:#FFCC00=_2]�s�[�J������[/psq_==_2] �B���F���@[psq_=color:#FFCC00=_2]�׾«~��[/psq_==_2] 
�s��N3�Ѫ��ɶ�[psq_=color:#FF6699=_2][ �L�k�o�� ][/psq_==_2]  �бz���� ^^&

�b���z�i�H��J�ӤH��� ���Ҧ��H��{�ѩp
�Ф��ѱz���e��J��(�P�N��) �L���O�H �]�׾i�ۤv!

';






$rabs_1=rand(1,13);
$aaaas_color=array('#000000','#666666','#999999','#CCCCCC','#FFFFFF','#FF50A7','#FF5096','#FF5084','#FF5073','#FF5061','#FF5050','#FF6250','#FF7C50','#FF8550','#FF8D50','#FF9650','#FF9F50','#FFA850','#FFB050','#FFB950','#FFC250','#FFCB50','#FFD350','#FFDD78','#FFE478','#FFEB78','#FFF278','#FFF878','#FFFF78'
,'#F8FF78','#F1FF78','#EBFF78','#E4FF78','#DDFF78','#D2FF78','#C0FF78','#AEFF78','#9CFF78','#8AFF78','#78FF78','#78FF8A','#78FF9C',
'#78FFAE','#78FFC0','#78FFD2','#78FFDD','#78FFE4','#78FFEB','#78FFF2','#78FFF8','#78FFFF','#78F8FF','#78F1FF','#78EBFF','#78E4FF','#78DDFF','#78D2FF','#78C0FF','#78AEFF','#789CFF'
,'#788AFF','#7878FF','#8A78FF','#9C78FF','#AE78FF','#C778FF','#D278FF','#DD78FF','#E978FF','#F478FF','#FF78FF','#FF78F4','#FF78E8','#FF78DD','#FF78C7','#FFCC00','#FF9900','#990000','#663399','#3366FF','#0033FF','#FFFF00','#996600','#FF0066','');

$rabs_1_a=rand(0,count($aaaas_color));
switch($rabs_1){
case 1;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
��~�{�z�� 
�~�}�|�}�|�� 
�|�{�D�D�z�}�w���@�@�@ 
�~�r�w�w�t��~~�u��  �H �� �� �� �� ^^ 
�x���@���x�@�@�x�� �@ 
���s�w�w���@�@�x ~~~~~~~~~�N 
������������������������������������������ 
[/psq_==_2]';break;
case 2;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]

�~������������ 
������������ �@     - �@�d���P�P ���z�\���@�� -
���ڨ�����o!! ����     
������������������������ 
��������������~�� ������ �� 
������������ ���@ �@����������������
�������������� �@�@�@������ ������������������
[/psq_==_2]
';break;
case 3;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
�~���ġĢ~�~�~�~�~�ġĢ~�� 
�x�@�@�@�@�@�@�@�@�@�@�@�x�@�@�@�~�w�w�w�w�w�� 
�x�@�@�@�@�@�@�@�@�@�@�@�x�@�@�@�x�֢Ӣڢڢݢx 
�x�@�D�@�~�w�w�w���@�D�@�x�@�~���x���Ѧw�w���x �@ 
�x�ݡ@�@�x���@���x�@�@�ݢx�ݢ������w�w�w�w�w�� 
�x�@�@�@���w�w�w���@�@�@�x�@ 
���w�w�s���w�w�w�w�s�w���� 
[/psq_==_2]';break;

case 4;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
* ���� �b�c�e�c�b�D�����D����� 
����i�i�i�i�i��* ���D�� * �� 
�����i�i�i�i���i�i���D��Ѯ�N�F,�� 
�������i�i�i�i�i���i���D�e�A�@����,* �� 
������i�i�i�i�i�D������p�ߧO�۲D�F�I� 
* ����i�i�i�i�i:���* * ���D:��� 
����i�i�i�i�i���D�*:����*���� �� �Ʊ�ڳ�������!!!!!! 
:���* * ���D:��� ���D���* * �� 
[/psq_==_2]
';break;
case 5;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
���i�i�i�i�i�i���@�@�@�@�@�@���i�i�i�i��      ���ڭJù��!
�����@�@�@�@�@�@�����@�@�@�@�����@�@�@�@���� 
���@�@�@�@�@�@�@�@�����@�@�����@�@�@�@�@�@�i 
�k�@�@�@���i���@�@�@���������@�@���i�@�@�@�i 
���@�@�����@�@�����@�@�@�@�@�@���������@���� 
���i�i�� ���� �@�@�@�@�@�@���i�i�� 
�@�@�@�@�@�@�i�@���@�@�@�@�@�@�@���@�i 
�@�@�@�@�@�@�i�@���@�@�@�e�@�@�@���@�i 
�@�@�@�@ �@ �����@�@�@������@�@�@���� 
�@�@�@�@�@�@�@���i�f�d�d�@�d�d�f�i�� 
�@�@�@�@�@�@�@�@�@�����@�@�@���� 
�@�@�@�@�@�@�@�@�@�i�@�@�@�@�@�i 
�@�@�@�@�@�@�@�@�����y�@�@�@�k���� 
�@�@�@�@�@�@�@�y�d�����f�f�f�����d 
[/psq_==_2]
';break;
case 6;$rabs_2='    
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
        
�I�~������������z�CZ�I�k�k 
�Pz�� (�С\��) ���c�c�[���� 
�~�����������������e�k���X�D�E�I

[/psq_==_2]
';break;
case 7;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
    ���ޡ@�@�@�@�@�@�@�@ ���� 
�@�������ߡ@�������@�@�@ ���ߡ@�@�@�������� 
�@��������@�����ޡ@���@ ����@������������ 
�@�@����@�@������@�ޢ������� ������������ 
�@�@����@�@�������@��������� ������������ 
�@�@�@�@�@�@�@�@�@�@�@�@������@ �@���@�� 
�@�@�@�@�@�@�@�@�@�@�@�@�@�@�@�@�@ �@������
[/psq_==_2]
';break;

case 8;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
�e�A�����i�R���߫}�r!!~cc
 ��_�� �@��_�� �@��_��
�]�����^ �]���^ �]�����^
��š^�� �� �š^�� �� �š^��
�ߤW���� �դѪ��� �`�۪��� 


 ��_��@��_�� �@��_��
�]�����^�]���^ �]�I�I�^
��š^�� ��š^�� ��š^��
�c�@�@���� �`�]���� �R������ 
[/psq_==_2]
';break;
case 9;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
�C 
���@��@�@�C 
���@�a�@�@�C�@�@�@���i���b�b�b�b�b�b�b�b���i�� 
�֡@���@�@�C�@�@�@���@�@�@�@�@�@�@�@�@�@�@�@�� 
���@�A�@�@�@�C�@�@�j�@���i���@�@�@�@���i���@�@�x 
���@�L�@�@�@�@���i���@�i�i���@�����@���i�i�@�@�x 
�B�@�ơ@�@�@�@���i�i�����i���@�@�@�@���i���@�@/ 
��@���@�@�@�@�@���i���c�d�e�f�g�h�h�g�f�e�d�� 
�@�@���@�@�@�@�@�@�x�@�@�@�@�w�w���@�@�@�@�@���i�� 
�@�@�B�@�@�@�@�@�@�x�@�@�@�@�@�@�@�@�@�@�@�@���i�i�� 
�@�@�P�@�@�@�@�@�����@�@�@�@�@�@�@�@�@�@�@�������i�� 
�@�@�֡@�@�@�@���i�i���@�@�@�@�@�@�@�@�@���i�i�� 
�@�@�֡@�@�@�@�i�i�i�i�w�w�w�w�w�w�w�w�w�i�i�i�i 
[/psq_==_2]';break;
case 10;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
            ��켰�R���P

���D�X��X���O�O�E���X��X���D��X�����D�X��X�� ���D�X��X�����D�X��X
�@�@�����A�B�@�@�@�@���A�B�@�@�������A�B�@ 
�@�@���@�@�@�@�@�@���@�@�@�@�@�@���@�@�@�@�@ 
�@���@�@�@ �@�@���@�@�@�@�@�@�@�@�@ �@�@�@ �@ 
�A ���@�@�@�� �A �@�� �@���@ �B�@���@�@���@�B 
| ���@ ���@�@ |�@���@ �� �@���@�W �@ ���@ ���W 
���i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i��

[/psq_==_2]
';break;
case 11;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]

~~~~~~~~~~~�s       �O�A���ڦ��@��..
��������~���@�@�@ 
�~�~�~~���A �Y�B�@�@ 
���~�� �A�@�Y�B�@�@�@ 
^^~���@�@�@�@�@�@�@�@�@ 
~���@�@�@�@�@�@�@�@�@�@ �@ 
�A�@�@�\�\�@ �@�@�\�\�@�@ �B 
| �@�@�@�@�@�@�@�@�@�@�@�@�W 
���e�e�d�d�c���c�d�d�e�e�� 
';break;
case 12;$rabs_2='
 [psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]                      
					    
���������������������� 
�~���@���w�w�w�w���@���@�~���@�w�w�w�w�w���@�� 
�x�@�@�@�@�@�@�@�@�@�x�@�x�@�@�@�@�@�@�@���@�x 
�x�@���@�@�@�@�@���@�x�@�x�@���@�@�@�@�@���@�x 
�x���@���w�w�w���@���x�@�x���@���s�s�s���@���x 
�x�@�@�@�@�@�@�@�@�@�x�@�x�@�@�@���w���@�@�@�x 
���w�s�ݢw�w�w�ݢs�w���@���w�s���w�w�w���s�w��  
[/psq_==_2]
';break;

case 13;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
                        
�ڡ����ڷQ���S.. 
������������������������ ��
�@�@�@�@�@�~�ᢡ�@�@�@�@�@�@�@�@�@ �� 
�b�~�f�g�h�����i�h�g�f�e�d�c�b(��)�i�� 
�@�����d__�b�b�b�b�b�����������v�v�v�@ 
�@�@�@�@��O �@ ��O 
[/psq_==_2]
';break;
}//end �Ϯ�

$body_s201=$body_s201.'

'.$rabs_2;


$sql3331o="INSERT INTO `e_mail` ( `num` , `name` , `name_2` , `time` , `title` , `body` , `true` , `uesr` , `pin_gs` , `ip`, `ddddd` ) 
VALUES (
'$f_2_f8[0]', '$a__2006_7_8_4', '[ �׾¨t�� ]', NOW( ) , '$title_s201', '$body_s201', '���\Ū', '$a__2006_7_8_1', '[�t��]', '[�t��]', '001'
);
";
sql_a($sql3331o);

$timessss=259200;
$job_star=array('[ �ڬO�����ꪺ�s�� ]','[ �C�շs��ϥ� ]','[ �ڬO�s��и�ڰ��B�� ]','[ �s���Ш| �ѧL���ФF ]','[ �g�O�s��и�ڳq�H ]');

$randsss=rand(0,count($job_star));

$randsss_job=$job_star[$randsss];

$sql3331o11="INSERT INTO `lea_user` ( `num` , `user` , `true_now` , `false_time` , `day_time_now` , `user_num` , `mmqw` , `fqewqw` , `daysssss` ) 
VALUES (
'$f_1_f[0]', '$a__2006_7_8_4', NOW( ) , NOW( )+$timessss , NOW( ), '[ �׾¨t�� ]', '0', '$randsss_job', '3'
);";
sql_a($sql3331o11);


//�o��n�`�N����  �N�O�b���n���T�{ ���n�����O�ۤv�n�J�b��  ���i�H�ק��L�H�K�X

header('location:../index.php?add=worry105');

}


}else{

header('location:../index.php?add=worry106');
}//end �L�k�b�� �K�X�۵�


}else{
header('location:../index.php?add=worry107');
}


}//end �ӽбb��














if($my_pin_kk47=="�ѰO�K�X"){
$c_2006_7_8_1=$_POST[user_d101]; //�b��
$c_2006_7_8_2=$_POST[name_d101]; //�u��H��


$sql="SELECT `Num` , `user` , `birsday_2` , `birsday_3` , `true_name` 
FROM `pass` 
WHERE 1 AND `user` 
= '$c_2006_7_8_1' AND `true_name` 
= '$c_2006_7_8_2'";
$data_d101=sql_b($sql);


if($data_d101[0][1]!=''){

$nnnns=rand(5,9);
//2006-($save108_d101_A[0][1]*$save108_d101_A[0][2])+($nnnns*$nnnns*$nnnns)
$num_d101=2006-($data_d101[0][3]*$data_d101[0][2])+($nnnns*$nnnns*$nnnns);
$data_d101data_d101=$data_d101[0][0]+1365;
header('location:../index.php?add=save108&number_d101='.$num_d101.'&user_d101='.$data_d101data_d101.'&nnnns='.$nnnns);
//�o��n�`�N���� �ͤ�+�`�� header();
}//end �P�w�O�_���T
else{

header('location:../index.php?add=say_102');

}
}




if($my_pin_kk47=="�򥻸�ƭק�"){
$d_2006_7_8_1=$_POST[qq_2006_7_4]; //���D
$d_2006_7_8_2=$_POST[aa_2006_7_4]; //����
$d_2006_7_8_3=$_POST[user_2006_7_4_a]; //�b��
$d_2006_7_8_4=$_POST[ph_2006_7_4]; //�q��
$d_2006_7_8_5=$_POST[em_2006_7_4]; //email

$d_2006_7_8_2=pass_u_go_out($d_2006_7_8_2);

$d_2006_7_8_5=pass_u_go_out($d_2006_7_8_5);

$d_2006_7_8_4=pass_u_go_out($d_2006_7_8_4);


if(strlen($d_2006_7_8_2)>=4){

$d_2006_7_8_6='���\1';
}else{
header("location:../h_ya/indax.php?windown=mypassword_17");
}

if($d_2006_7_8_6=='���\1'){
if(strlen($d_2006_7_8_5)>=9){
$d_2006_7_8_6='OK';
}else{
header("location:../h_ya/indax.php?windown=mypassword_16");
}
}//end



if($d_2006_7_8_6=='OK'){
$sql="UPDATE `pass` SET `email` = '$d_2006_7_8_5',
`Q_` = '$d_2006_7_8_1',
`A_` = '$d_2006_7_8_2',
`pho_num` = '$d_2006_7_8_4' WHERE `user` = '$d_2006_7_8_3' ";
sql_a($sql);


header("location:../h_ya/indax.php?windown=mypassword_4");
}//end
}



if($my_pin_kk47=="�ӤH��ƭק�"){
$e_2006_7_8_1=$_POST[bo_2006_7_4_i]; //���D
$e_2006_7_8_2=$_POST[bo_2006_7_4_h]; //����
$e_2006_7_8_3=$_POST[bo_2006_7_4_f]; //�b��
$e_2006_7_8_4=$_POST[bo_2006_7_4_j]; //�q��
$e_2006_7_8_5=$_POST[bo_2006_7_4_a]; //email
$e_2006_7_8_6=$_POST[bo_2006_7_4_b]; //���D
$e_2006_7_8_7=$_POST[bo_2006_7_4_c]; //����
$e_2006_7_8_8=$_POST[bo_2006_7_4_d]; //�b��
$e_2006_7_8_9=$_POST[bo_2006_7_4_e]; //�q��
$e_2006_7_8_10=$_POST[bo_2006_7_4_g]; //email
$e_2006_7_8_11=$_POST[user_2006_7_4_a];


//-------------
$e_2006_7_8_4=pass_u_go_out($e_2006_7_8_4);

$e_2006_7_8_10=pass_u_go_out($e_2006_7_8_10);

$e_2006_7_8_3=pass_u_go_out($e_2006_7_8_3);

$e_2006_7_8_2=pass_u_go_out($e_2006_7_8_2);

$e_2006_7_8_1=pass_u_go_out($e_2006_7_8_1);

//--------------

$sql="UPDATE `pass` SET `W` = '$e_2006_7_8_1',
`INT` = '$e_2006_7_8_2' ,`my_HTTP`='$e_2006_7_8_3',`P_URL`='$e_2006_7_8_4'
,`kkss1`='$e_2006_7_8_5'
,`kkss2`='$e_2006_7_8_6'
,`p_url_2`='$e_2006_7_8_7'
,`p_size`='$e_2006_7_8_8'
,`P_true`='$e_2006_7_8_9'
,`from`='$e_2006_7_8_10'
  WHERE `user` = '$e_2006_7_8_11'";
sql_a($sql);


header("location:../h_ya/indax.php?windown=mypassword_5");
}



if($my_pin_kk47=="�R���p�H"){

$sql="SELECT `num` , `uesr` 
FROM `e_mail` 
WHERE 1 AND `num` = '$sss_2006_7_5_b' AND `uesr` = '$sss_2006_7_5_a' ";
$ddddd_2006_7_5=sql_b($sql);//�P�w�d�� ��email �O�_���� ��ɤH��

if($ddddd_2006_7_5[0][0]!=''){
$sql="DELETE FROM `e_mail` WHERE `num` = '$sss_2006_7_5_b' AND `uesr` = '$sss_2006_7_5_a'";
sql_a($sql);
header("location:../h_ya/indax.php?windown=mypassword_6");

}else{

header("location:../h_ya/indax.php?windown=mypassword_7");

}//�P�w�O�_�O �b������ƤH
}//end




if($my_pin_kk47=="�R���q�T�����"){
$g__2006_7_8_1=$_POST[f_200675_b];
$g__2006_7_8_2=$_POST[f_200675_a];

$sql="DELETE FROM `f_s` WHERE `num` = '$g__2006_7_8_1' AND `user2` = '$g__2006_7_8_2' ";
sql_a($sql);


header("location:../h_ya/indax.php?windown=mypassword_10");
}



if($my_pin_kk47=="�[�J�q�T��"){
$j__2006_7_8_1=$_POST[my_200675_ss];
$j__2006_7_8_2=$_POST[my_200675_s];
$f_3_f=file("f_3.h");//�����
$f_3_o=fopen("f_3.h","w+");//�}���ɮ�
$f_3_f[0]++;
fputs($f_3_o,$f_3_f[0]);//�g�J
fclose($f_3_o);//�����ɮ�

$sql_a="SELECT * 
FROM `pass` 
WHERE 1 AND `Num` 
= '$j__2006_7_8_1'";
$data_a=sql_b($sql_a);
$data1_you=$data_a[0][1];//�A���b��
$data2_you=$data_a[0][3];//�A���ʺ�
$data3_you=$data_a[0][0];//�A���ʺ�
//----------------------------�n��
$sql_b="SELECT * 
FROM `pass` 
WHERE 1 AND `user` 
= '$j__2006_7_8_2'";
$data_b=sql_b($sql_b);
$data1_my=$data_b[0][1];//�ڪ��b��
$data2_my=$data_b[0][3];//�ڪ��ʺ�
//----------------------------�ڦۤv��



$sql="INSERT INTO `f_s` ( `num` , `name` , `name2` , `user` , `user2` , `pin` ) 
VALUES (
'$f_3_f[0]', '$data2_you', '$data2_my', '$data1_you', '$data1_my', '$data3_you'
);
";
sql_a($sql);


header("location:../h_ya/in_body.php?na_num=$j__2006_7_8_1");
}









if($my_pin_kk47=="�R���ƥ��H��"){
$k__2006_7_8_1=$_POST[a2006_7_5];
$k__2006_7_8_2=$_POST[b2006_7_5];
$sql="DELETE FROM `e_mails` WHERE `num` = '$k__2006_7_8_1' AND `uesr` = '$k__2006_7_8_2'";
sql_a($sql);


header("location:../h_ya/indax.php?windown=mypassword_12");
}



if($my_pin_kk47=="�s�W�@���峹"){
$l__2006_7_8_1=$_POST[send_2006_7_6_c];
$l__2006_7_8_2=$_POST[send_2006_7_6_a];
$l__2006_7_8_3=$_POST[send_2006_7_6_b];
$l__2006_7_8_4=$_POST[send_2006_7_6_e];
$l__2006_7_8_5=$_POST[send_2006_7_6_d];

$l__2006_7_8_2=pass_u_go_out($l__2006_7_8_2);//�}�Y �����|���Ϥ��������y�k
$l__2006_7_8_3=pass_u_go_out($l__2006_7_8_3);



if($l__2006_7_8_2=='' || $l__2006_7_8_3==''){
header('location:../h_ya/imdex.php?http='.$l__2006_7_8_4.'&value='.$l__2006_7_8_5.'&pins=qq1');


}else{

$sql_aa="SELECT * 
FROM `pass` 
WHERE 1 AND `user` = '$l__2006_7_8_1' AND `win` = '�}'";
$sql_bb=sql_b($sql_aa);
$sql_bb_1=$sql_bb[0][3];
$sql_bb_2=$sql_bb[0][0];
if($sql_bb_2!=''){

if($_COOKIE["powers_2006"]!='���i�g�J'){

setcookie('powers_2006','���i�g�J',time()+60);



//-----�}���ɮ�+�y���s��
$f_5_f=file("f5.h");//�����
$f_5_o=fopen("f5.h","w+");//�}���ɮ�
$f_5_f[0]++;
fputs($f_5_o,$f_5_f[0]);//�g�J
fclose($f_5_o);//�����ɮ�
//-----




$sql="INSERT INTO `bar_all_all` ( `Num` , `title` , `peo` , `peo_num` , `peos_num` , `good` , `body` , `id` , `ip` , `time` , `times` , `bar` , `bar_all` , `true` , `numID` , `P_S` ) 
VALUES (
'$f_5_f[0]', '$l__2006_7_8_2', '$sql_bb_1', '0', NOW( ), '���m��', '$l__2006_7_8_3', '', '$REMOTE_ADDR', NOW( ) , NOW( ) , '$l__2006_7_8_4', '$l__2006_7_8_5', '�}', '$sql_bb_2', '0'
);
";
sql_a($sql);



header('location:../h_ya/imdex.php?http='.$l__2006_7_8_4.'&value='.$l__2006_7_8_5.'&pins=qq1');


}else{
header('location:../h_ya/imdex.php?http='.$l__2006_7_8_4.'&value='.$l__2006_7_8_5.'&pins=qq1&say_2006=dsa');

}





}else{

header('location:../h_ya/imdex.php?http='.$l__2006_7_8_4.'&value='.$l__2006_7_8_5.'&pins=qq1&say_2006=dsss');


}


}//if
}//end










if($my_pin_kk47=="�[�J�ڪ��̷R"){

//-----�}���ɮ�+�y���s��
$f_5_f=file("f6.h");//�����
$f_5_o=fopen("f6.h","w+");//�}���ɮ�
$f_5_f[0]++;
fputs($f_5_o,$f_5_f[0]);//�g�J
fclose($f_5_o);//�����ɮ�
//-----
$sqlaaaa="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `Num` = '$my_word_aaa'";
$sqlaaaaaaa=sql_b($sqlaaaa);
$sqlaaaaaaas=$sqlaaaaaaa[0][12];
$sql="INSERT INTO `my_f_word` ( `Num` , `Num_http` , `user` ,`bar_num`) 
VALUES (
'$f_5_f[0]', '$my_word_aaa', '$my_user_aaa','$sqlaaaaaaas'
);";
sql_a($sql);



header('location:../index_mi.php?num_10s='.$my_word_aaa);
}




if($my_pin_kk47=="�^�Ф峹"){


$o__2006_7_9_a=$_POST[send_2006_7_7_b]; 
$o__2006_7_9_b=$_POST[send_2006_7_7_body]; 
$o__2006_7_9_c=$_POST[send_2006_7_7_d]; 
$o__2006_7_9_d=$_POST[send_2006_7_7_a]; 
$o__2006_7_9_e=$_POST[send_2006_7_7_e]; //bar

$o__2006_7_9_ffaa=$_POST[send_2006_7_7_ff]; //bar


$o__2006_7_9_b=pass_u_go_out($o__2006_7_9_b);

if($_COOKIE["pass_200s"]!='���i�g�J'){




$o__2006_7_9_ff_1="SELECT * 
FROM `pass` 
WHERE 1 AND `Num` = '$o__2006_7_9_ffaa' ";
$o__2006_7_9_ff_2=sql_b($o__2006_7_9_ff_1);
$o__2006_7_9_ff_3=$o__2006_7_9_ff_2[0][1];//����"��"�o��H���b��

//--------------
$adqwd_us="SELECT * 
FROM `pass` 
WHERE 1 AND `Num` = '$o__2006_7_9_d' AND `win` = '�}' ";
$adqwd_us_i=sql_b($adqwd_us);
//--------------------

if($adqwd_us_i[0][0]!=''){
setcookie('pass_200s','���i�g�J',time()+60);

//-----�}���ɮ�+�y���s��
$f_5_f=file("f7.h");//�����
$f_5_o=fopen("f7.h","w+");//�}���ɮ�
$f_5_f[0]++;
fputs($f_5_o,$f_5_f[0]);//�g�J
fclose($f_5_o);//�����ɮ�
//-----


$sql="INSERT INTO `bar_all_alls` ( `num` , `name` , `qwqwqw` , `id` , `body` , `time` , `times` , `pin` , `true` , `in_http` , `barrrr` , `user_us` ) 
VALUES (
'$f_5_f[0]', '$o__2006_7_9_a', '$REMOTE_ADDR', '', '$o__2006_7_9_b', NOW( ) , NOW( ) , '$o__2006_7_9_c', '�}', '$o__2006_7_9_d', '$o__2006_7_9_e','$o__2006_7_9_ff_3'
);";
sql_a($sql);

$sql_asd2="UPDATE `bar_all_all` SET `peos_num` = NOW() WHERE `Num` = '$o__2006_7_9_c'  ";

sql_a($sql_asd2);
header('location:../index_mi.php?num_10s='.$o__2006_7_9_c);

}else{

header('location:../index_mi.php?num_10s='.$o__2006_7_9_c.'&fun=h#hi_http');
}

}else{

header('location:../index_mi.php?num_10s='.$o__2006_7_9_c.'&fun=ff#hi_http');

}//if cookie ���i�g�J

}//end



if($my_pin_kk47=="�R���ڪ��̷R"){

$sql="DELETE FROM `my_f_word` WHERE  `Num_http` = '$sem_2006_7_7_b' AND `user` = '$sem_2006_7_7_a'";
sql_a($sql);


header("location:../h_ya/indax.php?windown=mypassword_14");
}





if($my_pin_kk47=="�ק惡�峹"){
$oo__2006_7_9_a=$_POST[ttiittllee]; 
$oo__2006_7_9_b=$_POST[send_2006_7_7_body]; 
$oo__2006_7_9_c=$_POST[send_2006_7_7_bb]; 
$oo__2006_7_9_d=$_POST[send_2006_7_7_dd]; 
$oo__2006_7_9_e=$_POST[send_2006_7_7_aa]; 



$oo__2006_7_9_a=pass_u_go_out($oo__2006_7_9_a);//�}�Y���|���Ϥ��������y�k


$sql="UPDATE `bar_all_all` SET `title` = '$oo__2006_7_9_a',
`body` = '$oo__2006_7_9_b',
`id` = '$oo__2006_7_9_c',
`ip` = '$REMOTE_ADDR',`good` = '$java_1',`P_s` = '$java_2',
`times` = NOW() WHERE `Num` = '$oo__2006_7_9_d'  ";
sql_a($sql);


header('location:../index_mi.php?num_10s='.$oo__2006_7_9_d);
}





if($my_pin_kk47=="�峹�H��[��"){

$gg_2006_7_9_1;//�O�s��

$gg_2006_7_9_2="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `Num` = '$gg_2006_7_9_1'  AND `true` = '�}' ";
$gg_2006_7_9_3=sql_b($gg_2006_7_9_2);//�o���Ʈw���

$gg_2006_7_9_4=$gg_2006_7_9_3[0][3]+1;
$gg_2006_7_9_5="UPDATE `bar_all_all` SET `peo_num` = '$gg_2006_7_9_4' WHERE `Num` = '$gg_2006_7_9_1' AND  `true` = '�}' ";

sql_a($gg_2006_7_9_5);//�o���Ʈw���


header('location:../index_mi.php?num_10s='.$gg_2006_7_9_1);


}//end








if($my_pin_kk47=="�ק�^�Ф峹a"){
$oo__2006_7_9_a=$_POST[send_2006_7_7_a]; //�s��
$oo__2006_7_9_b=$_POST[send_2006_7_7_b]; 
$oo__2006_7_9_c=$_POST[send_2006_7_7_body]; 
$oo__2006_7_9_d=$_POST[send_2006_7_7_e]; 
$oo__2006_7_9_e=$_POST[send_2006_7_7_d]; 


$oo__2006_7_9_c=pass_u_go_out($oo__2006_7_9_c);



$oo__2006_7_9_a=pass_u_go_out($oo__2006_7_9_a);//�}�Y���|���Ϥ��������y�k
$sql="UPDATE `bar_all_alls` SET `qwqwqw` = '$REMOTE_ADDR',
`id` = '$oo__2006_7_9_b',
`body` = '$oo__2006_7_9_c',
`times` = NOW() WHERE `num` = '$oo__2006_7_9_d' ";
sql_a($sql);


header('location:../index_mi.php?num_10s='.$oo__2006_7_9_e);
}














if($my_pin_kk47=="�_���峹a"){
$oo__2006_7_9_a=$_POST[pin_kk47aid]; 
$oo__2006_7_9_b=$_POST[pin_kk47a222]; 

$oo__2006_7_9_c=$_POST[pin_kk47aid111]; 
$oo__2006_7_9_d=$_POST[pin_kk47aid222]; 

$sqssa1111="SELECT * 
FROM `pass` 
WHERE 1 AND `user` = '$oo__2006_7_9_a'";
$sqssa1111111=sql_b($sqssa1111);

$sqssa1111111s=$sqssa1111111[0][3];

$sqssa="UPDATE `bar_all_all` SET `ip` = '$REMOTE_ADDR',
`id` = '$sqssa1111111s',
`times` = NOW() ,
`true` = '�}' WHERE `Num` = '$oo__2006_7_9_b' AND `true` = '��' ";
sql_a($sqssa);



header('location:../h_ya/imdex.php?value='.$oo__2006_7_9_c.'&http='.$oo__2006_7_9_d.'&pins=qq4');
}











if($my_pin_kk47=="�[�J�¦W��"){
$oo__2006_7_9_a=$_POST[aa_2006_7_14_a]; //�Q�����s��
$oo__2006_7_9_b=$_POST[aa_2006_7_14_b]; //�Q�����ʺ�
$oo__2006_7_9_c=$_POST[aa_2006_7_14_c]; //�Q������]
$oo__2006_7_9_d=$_POST[aa_2006_7_14_d]; //�Q�����ʺ�
$oo__2006_7_9_e=$_POST[aa_2006_7_14_e]; //�ާ@��
$oo__2006_7_9_f=$_POST[aa_2006_7_14_f]; //�Ѽ�
$oo__2006_7_9_h=$_POST[aa_2006_7_14_h]; //�Ѽ�
switch($oo__2006_7_9_f){
case '3':$oo__2006_7_9_fff=259200;break;
case '7':$oo__2006_7_9_fff=604800;break;
case '14':$oo__2006_7_9_fff=1209600;break;
}//end


$sqssa1111="INSERT INTO `lea_user` ( `num` , `user` , `true_now` , `false_time` , `day_time_now` , `user_num` , `mmqw` , `fqewqw` , `daysssss` ) 
VALUES (
'$oo__2006_7_9_a', '$oo__2006_7_9_b', NOW( ) , NOW( )+$oo__2006_7_9_fff , NOW( ), '$oo__2006_7_9_e', '$oo__2006_7_9_d', '$oo__2006_7_9_c', '$oo__2006_7_9_f'
);";
$sqssa1111111=sql_b($sqssa1111);


$sqssa="UPDATE `pass` SET `win` = '��' WHERE `Num` = '$oo__2006_7_9_a' ";
sql_a($sqssa);
















$rabs_1=rand(1,13);
$aaaas_color=array('#000000','#3A3A3A','#666666','#999999','#CCCCCC','#FFFFFF','#FF50A7','#FF5096','#FF5084','#FF5073','#FF5061','#FF5050','#FF6250','#FF7C50','#FF8550','#FF8D50','#FF9650','#FF9F50','#FFA850','#FFB050','#FFB950','#FFC250','#FFCB50','#FFD350','#FFDD78','#FFE478','#FFEB78','#FFF278','#FFF878','#FFFF78'
,'#F8FF78','#F1FF78','#EBFF78','#E4FF78','#DDFF78','#D2FF78','#C0FF78','#AEFF78','#9CFF78','#8AFF78','#78FF78','#78FF8A','#78FF9C',
'#78FFAE','#78FFC0','#78FFD2','#78FFDD','#78FFE4','#78FFEB','#78FFF2','#78FFF8','#78FFFF','#78F8FF','#78F1FF','#78EBFF','#78E4FF','#78DDFF','#78D2FF','#78C0FF','#78AEFF','#789CFF'
,'#788AFF','#7878FF','#8A78FF','#9C78FF','#AE78FF','#C778FF','#D278FF','#DD78FF','#E978FF','#F478FF','#FF78FF','#FF78F4','#FF78E8','#FF78DD','#FF78C7','#FFCC00','#FF9900','#990000','#663399','#3366FF','#0033FF','#FFFF00','#996600','#FF0066','#003366','');

$rabs_1_a=rand(0,count($aaaas_color));
switch($rabs_1){
case 1;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
��~�{�z�� 
�~�}�|�}�|�� 
�|�{�D�D�z�}�w���@�@�@ 
�~�r�w�w�t��~~�u�� �H �� �� �� �� ^^ 
�x���@���x�@�@�x�� �@ 
���s�w�w���@�@�x ~~~~~~~~~�N 
������������������������������������������ 
[/psq_==_2]';break;
case 2;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]

�~������������ 
������������ �@     - �@�d���P�P ���z�\���@�� -
���ڨ�����o!! ����     
������������������������ 
��������������~�� ������ �� 
������������ ���@ �@����������������
�������������� �@�@�@������ ������������������
[/psq_==_2]
';break;
case 3;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
�~���ġĢ~�~�~�~�~�ġĢ~�� 
�x�@�@�@�@�@�@�@�@�@�@�@�x�@�@�@�~�w�w�w�w�w�� 
�x�@�@�@�@�@�@�@�@�@�@�@�x�@�@�@�x�֢Ӣڢڢݢx 
�x�@�D�@�~�w�w�w���@�D�@�x�@�~���x���Ѧw�w���x �@ 
�x�ݡ@�@�x���@���x�@�@�ݢx�ݢ������w�w�w�w�w�� 
�x�@�@�@���w�w�w���@�@�@�x�@ 
���w�w�s���w�w�w�w�s�w���� 
[/psq_==_2]';break;

case 4;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
* ���� �b�c�e�c�b�D�����D����� 
����i�i�i�i�i��* ���D�� * �� 
�����i�i�i�i���i�i���D��Ѯ�N�F,�� 
�������i�i�i�i�i���i���D�e�A�@����,* �� 
������i�i�i�i�i�D������p�ߧO�۲D�F�I� 
* ����i�i�i�i�i:���* * ���D:��� 
����i�i�i�i�i���D�*:����*���� �� �Ʊ�ڳ�������!!!!!! 
:���* * ���D:��� ���D���* * �� 
[/psq_==_2]
';break;
case 5;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
���i�i�i�i�i�i���@�@�@�@�@�@���i�i�i�i��      ���ڭJù��!
�����@�@�@�@�@�@�����@�@�@�@�����@�@�@�@���� 
���@�@�@�@�@�@�@�@�����@�@�����@�@�@�@�@�@�i 
�k�@�@�@���i���@�@�@���������@�@���i�@�@�@�i 
���@�@�����@�@�����@�@�@�@�@�@���������@���� 
���i�i�� ���� �@�@�@�@�@�@���i�i�� 
�@�@�@�@�@�@�i�@���@�@�@�@�@�@�@���@�i 
�@�@�@�@�@�@�i�@���@�@�@�e�@�@�@���@�i 
�@�@�@�@ �@ �����@�@�@������@�@�@���� 
�@�@�@�@�@�@�@���i�f�d�d�@�d�d�f�i�� 
�@�@�@�@�@�@�@�@�@�����@�@�@���� 
�@�@�@�@�@�@�@�@�@�i�@�@�@�@�@�i 
�@�@�@�@�@�@�@�@�����y�@�@�@�k���� 
�@�@�@�@�@�@�@�y�d�����f�f�f�����d 
[/psq_==_2]
';break;
case 6;$rabs_2='    
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
        
�I�~������������z�CZ�I�k�k 
�Pz�� (�С\��) ���c�c�[���� 
�~�����������������e�k���X�D�E�I

[/psq_==_2]
';break;
case 7;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
    ���ޡ@�@�@�@�@�@�@�@ ���� 
�@�������ߡ@�������@�@�@ ���ߡ@�@�@�������� 
�@��������@�����ޡ@���@ ����@������������ 
�@�@����@�@������@�ޢ������� ������������ 
�@�@����@�@�������@��������� ������������ 
�@�@�@�@�@�@�@�@�@�@�@�@������@ �@���@�� 
�@�@�@�@�@�@�@�@�@�@�@�@�@�@�@�@�@ �@������
[/psq_==_2]
';break;

case 8;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
�e�A�����i�R���߫}�r!!~cc
 ��_�� �@��_�� �@��_��
�]�����^ �]���^ �]�����^
��š^�� �� �š^�� �� �š^��
�ߤW���� �դѪ��� �`�۪��� 


 ��_��@��_�� �@��_��
�]�����^�]���^ �]�I�I�^
��š^�� ��š^�� ��š^��
�c�@�@���� �`�]���� �R������ 
[/psq_==_2]
';break;
case 9;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
�C 
���@��@�@�C 
���@�a�@�@�C�@�@�@���i���b�b�b�b�b�b�b�b���i�� 
�֡@���@�@�C�@�@�@���@�@�@�@�@�@�@�@�@�@�@�@�� 
���@�A�@�@�@�C�@�@�j�@���i���@�@�@�@���i���@�@�x 
���@�L�@�@�@�@���i���@�i�i���@�����@���i�i�@�@�x 
�B�@�ơ@�@�@�@���i�i�����i���@�@�@�@���i���@�@/ 
��@���@�@�@�@�@���i���c�d�e�f�g�h�h�g�f�e�d�� 
�@�@���@�@�@�@�@�@�x�@�@�@�@�w�w���@�@�@�@�@���i�� 
�@�@�B�@�@�@�@�@�@�x�@�@�@�@�@�@�@�@�@�@�@�@���i�i�� 
�@�@�P�@�@�@�@�@�����@�@�@�@�@�@�@�@�@�@�@�������i�� 
�@�@�֡@�@�@�@���i�i���@�@�@�@�@�@�@�@�@���i�i�� 
�@�@�֡@�@�@�@�i�i�i�i�w�w�w�w�w�w�w�w�w�i�i�i�i 
[/psq_==_2]';break;
case 10;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
            ��켰�R���P

���D�X��X���O�O�E���X��X���D��X�����D�X��X�� ���D�X��X�����D�X��X
�@�@�����A�B�@�@�@�@���A�B�@�@�������A�B�@ 
�@�@���@�@�@�@�@�@���@�@�@�@�@�@���@�@�@�@�@ 
�@���@�@�@ �@�@���@�@�@�@�@�@�@�@�@ �@�@�@ �@ 
�A ���@�@�@�� �A �@�� �@���@ �B�@���@�@���@�B 
| ���@ ���@�@ |�@���@ �� �@���@�W �@ ���@ ���W 
���i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i�i��

[/psq_==_2]
';break;
case 11;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]

~~~~~~~~~~~�s       �O�A���ڦ��@��..
��������~���@�@�@ 
�~�~�~~���A �Y�B�@�@ 
���~�� �A�@�Y�B�@�@�@ 
^^~���@�@�@�@�@�@�@�@�@ 
~���@�@�@�@�@�@�@�@�@�@ �@ 
�A�@�@�\�\�@ �@�@�\�\�@�@ �B 
| �@�@�@�@�@�@�@�@�@�@�@�@�W 
���e�e�d�d�c���c�d�d�e�e�� 
';break;
case 12;$rabs_2='
 [psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]                      
					    
���������������������� 
�~���@���w�w�w�w���@���@�~���@�w�w�w�w�w���@�� 
�x�@�@�@�@�@�@�@�@�@�x�@�x�@�@�@�@�@�@�@���@�x 
�x�@���@�@�@�@�@���@�x�@�x�@���@�@�@�@�@���@�x 
�x���@���w�w�w���@���x�@�x���@���s�s�s���@���x 
�x�@�@�@�@�@�@�@�@�@�x�@�x�@�@�@���w���@�@�@�x 
���w�s�ݢw�w�w�ݢs�w���@���w�s���w�w�w���s�w��  
[/psq_==_2]
';break;

case 13;$rabs_2='
[psq_=color:'.$aaaas_color[$rabs_1_a].'=_2]
                        
�ڡ����ڷQ���S.. 
������������������������ ��
�@�@�@�@�@�~�ᢡ�@�@�@�@�@�@�@�@�@ �� 
�b�~�f�g�h�����i�h�g�f�e�d�c�b(��)�i�� 
�@�����d__�b�b�b�b�b�����������v�v�v�@ 
�@�@�@�@��O �@ ��O 
[/psq_==_2]
';break;
}//end �Ϯ�

//-----�}���ɮ�+�y���s��
$f_2_f8=file("f_2.h");//�����
$f_2_o8=fopen("f_2.h","w+");//�}���ɮ�
$f_2_f8[0]++;
fputs($f_2_o8,$f_2_f8[0]);//�g�J
fclose($f_2_o8);//�����ɮ�

$power_0912_1="SELECT * 
FROM `pass` 
WHERE 1 AND `Num` = '$oo__2006_7_9_a' ";
$power_0912_1i=sql_b($power_0912_1);
$power_0912_1i_1=$power_0912_1i[0][1];
$power_0912_1i_2=$power_0912_1i[0][3];


$power_0912_2="SELECT * 
FROM `bar_all` 
WHERE 1 AND `pin_bar` = '$oo__2006_7_9_d'";
$power_0912_2i=sql_b($power_0912_2);
$power_0912_2i_1=$power_0912_2i[0][2];

$body_s2061='
Sorry !  �ѩ�A�H�ϥ��׾³W�w�Q�T��'.$oo__2006_7_9_f.'��

[psq_=color:#990000=_2]�X��[[/psq_==_2] '.$power_0912_2i_1.' [psq_=color:#990000=_2]][/psq_==_2]
[psq_=color:#990000=_2]�D�n��][[/psq_==_2] '.$oo__2006_7_9_c.' [psq_=color:#990000=_2]][/psq_==_2]
                                           
                                            [psq_=color:#990000=_2]�ާ@�H[[/psq_==_2]'.$oo__2006_7_9_e.'[psq_=color:#990000=_2]][/psq_==_2]';
		
$body_s2061=$body_s2061.$rabs_2;			
											
											

$asd_2006_7_18="INSERT INTO `e_mail` ( `num` , `name` , `name_2` , `time` , `title` , `body` , `true` , `uesr` , `pin_gs` , `ip`, `ddddd` ) 
VALUES (
'$f_2_f8[0]', '$power_0912_1i_2', '[ �׾¨t�� ]', NOW( ) , '[ �׾¸T���T�� ]', '$body_s2061', '���\Ū', '$power_0912_1i_1', '[�t��]', '[�t��]', '001'
);";
sql_a($asd_2006_7_18);







header('location:../h_ya/imdex.php?value='.$oo__2006_7_9_d.'&http='.$oo__2006_7_9_h.'&pins=qq1');
}




?>