<?
include("abc_cool/cool.php");



$pass_po=$_POST[pins];
  switch($pass_po){
  case aaa1:$gopass='�W�y��a';break;
  case aaa2:$gopass='�U�y��a';break;
  case aaa3:$gopass='���ia';break;
  case aaa4:$gopass='show�峹a';break;
  case aaa5:$gopass='logo���}';break;
  case aaa6:$gopass='�����}��';break;
    case aaa7:$gopass='��������';break;
	case aaa9:$gopass='��Ʈw�s�W';break;
	case aaa10:$gopass='��Ʈw�Ƨ�';break;
	case aaa11:$gopass='�s�W�Q�װ�';break;
	case aaa12:$gopass='�ק�Q�װ�';break;
	case aaa20:$gopass='�R���Q�װ�';break;
	case aaa100:$gopass='�׾³̷s����';break;
		case aaa99:$gopass='�ڪ���x';break;
  }//end
  
  
  if($gopass=='�ڪ���x'){

$a_2006_7_11=$_POST[send_2006_7_6_b]; 

//-----�}���ɮ�+�y���s��
$f_2_o=fopen("h_ya/up28i.h","w+");//�}���ɮ�

fputs($f_2_o,$a_2006_7_11);
fclose($f_2_o);//�����ɮ�
//-----
header("location:myhouse.php");


}
  
if($gopass=='�׾³̷s����'){

$a_2006_7_11=$_POST[send_2006_7_6_b]; 

//-----�}���ɮ�+�y���s��
$f_2_o=fopen("h_ya/up29i.h","w+");//�}���ɮ�

fputs($f_2_o,$a_2006_7_11);
fclose($f_2_o);//�����ɮ�
//-----
header("location:myhouse.php");


}


if($gopass=='�W�y��a'){

$a_2006_7_11=$_POST[send_2006_7_6_b]; 

//-----�}���ɮ�+�y���s��
$f_2_o=fopen("h_ya/up20i.h","w+");//�}���ɮ�

fputs($f_2_o,$a_2006_7_11);
fclose($f_2_o);//�����ɮ�
//-----
header("location:myhouse.php");


}

if($gopass=='�U�y��a'){

$a_2006_7_11=$_POST[send_2006_7_6_b]; 

//-----�}���ɮ�+�y���s��
$f_2_o=fopen("h_ya/down20i.h","w+");//�}���ɮ�

fputs($f_2_o,$a_2006_7_11);
fclose($f_2_o);//�����ɮ�
//-----
header("location:myhouse.php");


}

if($gopass=='show�峹a'){

$a_2006_7_11=$_POST[send_2006_7_6_b]; 

//-----�}���ɮ�+�y���s��
$f_2_o=fopen("h_ya/vbhollo.h","w+");//�}���ɮ�

fputs($f_2_o,$a_2006_7_11);
fclose($f_2_o);//�����ɮ�
//-----
header("location:myhouse.php");


}





if($gopass=='���ia'){

$a_2006_7_11=$_POST[send_2006_7_6_b]; 

//-----�}���ɮ�+�y���s��
$f_2_o=fopen("h_ya/sayhollo.h","w+");//�}���ɮ�

fputs($f_2_o,$a_2006_7_11);
fclose($f_2_o);//�����ɮ�
//-----
header("location:myhouse.php");


}



if($gopass=='logo���}'){

$a_2006_7_11_1=$_POST[https]; 
$a_2006_7_11_2=$_POST[width]; 
$a_2006_7_11_3=$_POST[height]; 
$a_2006_7_11_4=$_POST[my_x]; 
$a_2006_7_11_5=$_POST[my_y]; 

$a_2006_7_11_6=$_POST[width11]; 
$a_2006_7_11_7=$_POST[height11]; 
$a_2006_7_11_8=$_POST[my_x11]; 
$a_2006_7_11_9=$_POST[my_y11]; 
$ssql="UPDATE `myfalsh_over` SET 
`title_x` = '$a_2006_7_11_6',
`title_y` = '$a_2006_7_11_7',
`body_x` = '$a_2006_7_11_8',
`body_y` = '$a_2006_7_11_9',

`logo` = '$a_2006_7_11_1',
`logo_x` = '$a_2006_7_11_4',
`logo_y` = '$a_2006_7_11_5',
`logo_width` = '$a_2006_7_11_2',
`logo_height` = '$a_2006_7_11_3' ,`true_logos` = '$radioss10'WHERE `Q_A` = '�׾¨t��'";
sql_a($ssql);

header("location:myhouse.php");


}



if($gopass=='�����}��'){

$a_2006_7_11_1=$_POST[truesss]; 
$a_2006_7_11_2=$_POST[truesss_say]; 

$ssql="UPDATE `myfalsh_over` SET `true` = '$a_2006_7_11_1',
`true_text` = '$a_2006_7_11_2' WHERE `Q_A` = '�׾¨t��'";
sql_a($ssql);
header("location:myhouse.php");

}



if($gopass=='��������'){

$a_2006_7_11_1a=$_POST[as_2006_a]; 
$a_2006_7_11_2a=$_POST[as_2006_b]; 
$a_2006_7_11_3a=$_POST[as_2006_c]; 

$a_2006_7_11_4a=$_POST[as_2006_d]; 


$a_2006_7_11_5a=$_POST[as_2006_ffs];
$a_2006_7_11=$_POST[as_2006_e]; 


$a_2006_7_11=pass_u_go_out($a_2006_7_11);
//-----�}���ɮ�+�y���s��
$f_2_o=fopen("h_ya/myhouse_word.h","w+");//�}���ɮ�
fputs($f_2_o,$a_2006_7_11);
fclose($f_2_o);//�����ɮ�
//-----as_2006_b_2s



$ssql="UPDATE `myfalsh_over` SET `color_http` = '$a_2006_7_11_2a',
`color_s` = '$a_2006_7_11_3a',
`my_word` = '$a_2006_7_11_4a',
`my_http_name` = '$a_2006_7_11_1a',`colosaar` = '$a_2006_7_11_5a',`body_color_2` = '$as_2006_ffsss' ,`body_color_5` = '$as_2006_ffsss2' ,`my_body_color` = '$as_2006_b_2s',`true` = '$as_2006_ffsss_1' ,`true_text` = '$as_2006_ffsss_2' WHERE `Q_A` = '�׾¨t��' ";
sql_a($ssql);
header("location:myhouse.php");

}




if($gopass=='��Ʈw�s�W'){
//-----�}���ɮ�+�y���s��
$f_4_f=file("h_ya/ffasd_201.h");//�����
$f_4_o=fopen("h_ya/ffasd_201.h","w+");//�}���ɮ�
$f_4_f[0]++;
fputs($f_4_o,$f_4_f[0]);//�g�J
fclose($f_4_o);//�����ɮ�


$a_2006_7_11=$_POST[name_cool]; 

$power_word="bar".$f_4_f[0];

$f_4_sss=$f_4_f[0];

$ssql="INSERT INTO `bar` ( `Num` , `name` , `Num_p2` ) 
VALUES (
'$power_word', '$a_2006_7_11', '$f_4_sss'
);";
sql_a($ssql);
header("location:myhouse.php?ppaa=a8");


}//end



if($gopass=='��Ʈw�Ƨ�'){
$a_2006_7_11_num=$_POST[num]; 

for($i=0;$i<$a_2006_7_11_num;$i++){

$sss1='us_p1'.$i;
$sss2='us_p2'.$i;
$a_2006_7_11=$_POST[$sss1]; //���ܪ�
$a_2006_7_12=$_POST[$sss2];//���Ӹ��
$ssql="UPDATE `bar` SET `Num_p2` = '$a_2006_7_11' WHERE `Num` = '$a_2006_7_12'";
sql_a($ssql);
}

header("location:myhouse.php?ppaa=a8");


}//end



if($gopass=='�s�W�Q�װ�'){

$a_2006_7_11=$_POST[name_1]; //���ܪ�
$a_2006_7_12=$_POST[name_2];//���Ӹ��
$a_2006_7_13=$_POST[name_3];//���Ӹ��
//-----�}���ɮ�+�y���s��
$f_4_f=file("f_aas.h");//�����
$f_4_o=fopen("f_aas.h","w+");//�}���ɮ�
$f_4_f[0]++;
fputs($f_4_o,$f_4_f[0]);//�g�J
fclose($f_4_o);//�����ɮ�
//-----

$f_4_fs=$f_4_f[0];



$f_4_fd=file("f_aass.h");//�����
$f_4_oa=fopen("f_aass.h","w+");//�}���ɮ�
$f_4_fd[0]++;
fputs($f_4_oa,$f_4_fd[0]);//�g�J
fclose($f_4_oa);//�����ɮ�
//-----

$f_4_fsaaa=$f_4_fd[0];
$ssql="INSERT INTO `bar_all` ( `Num` , `P_url` , `body` , `body_2` , `body_num` , `body_num2` , `lider` , `lider2` , `true` , `a18` , `lv` , `good` , `pin_s` , `pin_bar` ) 
VALUES (
'$f_4_fs', 'http://', '$a_2006_7_11', '$a_2006_7_12', '', '', '', '', '��', '', '', 'http://', '$a_2006_7_13', '$f_4_fsaaa'
);";
sql_a($ssql);


header('location:myhouse.php?ppaa=a9&value_https='.$vasss_ur);


}//end  aaa12




if($gopass=='�ק�Q�װ�'){

$a_2006_7_13_1=$_POST[pins_a]; 
$a_2006_7_13_2=$_POST[f1_1]; 
$a_2006_7_13_3=$_POST[f1_2]; 
$a_2006_7_13_4=$_POST[f1_3]; 
$a_2006_7_13_5=$_POST[f1_4]; 


$a_2006_7_13_6=$_POST[f1_5]; 
$a_2006_7_13_7=$_POST[f1_6]; 
$a_2006_7_13_8=$_POST[f1_7]; 

$a_2006_7_13_9=$_POST[$vasss_ur];


$sql201="SELECT * 
FROM `pass` 
WHERE 1 AND `user` = '$a_2006_7_13_6'  AND `JOB` != '�޲z��(�̰��v��)'";

$sql201i=sql_b($sql201);//���D
$sql201is=$sql201i[0][1];
$sql201iss=$sql201i[0][3];
$a_2006_7_13_2___aaa=$a_2006_7_13_2.' (���D)';
$ssqlaaa11="UPDATE `pass` SET `JOB` = '$a_2006_7_13_2___aaa' WHERE  `user` = '$sql201is' AND `JOB` = '�L' ";
sql_a($ssqlaaa11);











$sql202="SELECT * 
FROM `pass` 
WHERE 1 AND `user` = '$a_2006_7_13_7' AND `JOB` != '�޲z��(�̰��v��)' ";

$sql202i=sql_b($sql202);//�ƪ�
$sql202is=$sql202i[0][1];
$sql202iss=$sql202i[0][3];

$a_2006_7_13_2___aaas=$a_2006_7_13_2.' (�ƪ��D)';
$ssqlaaa22="UPDATE `pass` SET `JOB` = '$a_2006_7_13_2___aaas' WHERE  `user` = '$sql202is' AND `JOB` = '�L'";
sql_a($ssqlaaa22);







$ssql="UPDATE `bar_all` SET `P_url` = '$a_2006_7_13_4',
`body` = '$a_2006_7_13_2',
`body_2` = '$a_2006_7_13_3',
`body_num` = '$sql201is',
`body_num2` = '$sql202is',
`lider` = '$sql201iss',
`lider2` = '$sql202iss',
`true` = '$a_2006_7_13_8',
`good` = '$a_2006_7_13_5' WHERE `Num` = '$a_2006_7_13_1' ";
sql_a($ssql);





$a_2006_7_13_78=$_POST[lider11];//�󴫪��D
$a_2006_7_13_87=$_POST[lider22];//�󴫪��D


if($a_2006_7_13_78!=$a_2006_7_13_6){
$ssqlaaa2a2="UPDATE `pass` SET `JOB` = '�L' WHERE  `user` = '$a_2006_7_13_78' AND `JOB` != '�޲z��(�̰��v��)'";
sql_a($ssqlaaa2a2);
}


if($a_2006_7_13_87!=$a_2006_7_13_7){
$ssqlaaa2a2="UPDATE `pass` SET `JOB` = '�L' WHERE  `user` = '$a_2006_7_13_87'  AND `JOB` != '�޲z��(�̰��v��)'";
sql_a($ssqlaaa2a2);
}



header('location:myhouse.php?ppaa=a9&value_https='.$vasss_ur);

}











if($gopass=='�R���Q�װ�'){
//�o�O�Ӥj�u�{  �������峹�R�� �Q�װϧR��  ���D���H
$a_2006_7_13_6=$_POST[sat]; 

$sqlsa="SELECT * 
FROM `bar_all` 
WHERE 1 AND `Num` = '$a_2006_7_13_6' ";
$sqls=sql_b($sqlsa);


$sqls0=$sqls[0][0];//�s��
$sqls1=$sqls[0][4];//���D
$sqls2=$sqls[0][5];//�ƪ��D
$sqls4=$sqls[0][13];//3


$sqlsssss1="DELETE FROM `bar_all_all` WHERE `bar_all` = '$sqls4' ";//�R���峹
sql_a($sqlsssss1);
$sqlsssss2="DELETE FROM `bar_all_alls` WHERE `barrrr` = '$sqls4'";//�R���^��
sql_a($sqlsssss2);

$sqlsssss3="UPDATE `pass` SET `JOB` = '�L' WHERE   `user` = '$sqls1'";//��¾�ȴ��� 
sql_a($sqlsssss3);

$sqlsssss4="UPDATE `pass` SET `JOB` = '�L' WHERE   `user` = '$sqls2'";//��¾�ȴ��� 
sql_a($sqlsssss4);

$sqlsssss5="DELETE FROM `bar_all` WHERE `Num` = '$sqls0'";//�R���Q�װ�
sql_a($sqlsssss5);


$sqlsssss6="DELETE FROM `my_f_word` WHERE `bar_num` = '$sqls4' ";//�R���Q�װ�
sql_a($sqlsssss6);

header('location:myhouse.php?ppaa=a9&value_https='.$vasss_ur);

}

?>