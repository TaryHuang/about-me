<?
ob_start();

include("abc_cool/cool.php");//���������}���ӳo��}�B���ʧ@


switch($pin_password){
case �n�J:$go_play='�n�J';break;
case �n�X:$go_play='�n�X';break;//�n�X  �]�����}����Τ���
case aaa5:$go_play="�K�X����";break;
case aaa6:$go_play="�R���峹a";break;
case aaa7:$go_play="�R���^�Ф峹a";break;
}


if($go_play=="�K�X����"){

$a__2006_7_9_1=$_POST[user_d102]-563;
$a__2006_7_9_2=$_POST[anser_d102];
$a__2006_7_9_3=$_POST[number_d102];
$a__2006_7_9_4=$_POST[number_d103];


$sql="SELECT `Num` , `birsday_2` , `birsday_3` , `A_` , `pass`
FROM `pass` 
WHERE 1 AND `Num` 
= '$a__2006_7_9_1' AND `A_` 
= '$a__2006_7_9_2'";
$data=sql_b($sql);
$num_d102s=2006-($data[0][1]*$data[0][2])+($a__2006_7_9_4*$a__2006_7_9_4*$a__2006_7_9_4);
if($a__2006_7_9_3==$num_d102s){

setcookie('tary_d102',$data[0][4],time()+10);

header("location:index.php?add=save108_word");//�g�Jcookie

}else{
header("location:index.php?add=save108_no");//�P�w���~
}
//�o��n�`�N����  ������Ʈw���  �b���ͤ���
}//end


//------------------------------
if($go_play=='�n�J'){
$b__2006_7_9_1=$_POST[user_a];
$b__2006_7_9_2=$_POST[pass_b];



$sql_ooPassoo="SELECT `user` , `pass` , `name` 
FROM `pass` 
WHERE 1 AND `user` = '$b__2006_7_9_1' AND `pass` = '$b__2006_7_9_2'";
$sql_oooPassooo=sql_b($sql_ooPassoo);
if($sql_oooPassooo[0][0]!=''){

setcookie("true","�q�L",time()+3600);//�O�_���g�L�o��  
setcookie("pass_1988",$sql_oooPassooo[0][0],time()+3600);

header('location:h_ya/url_header.php?pin_pass_2=ok&pass_1_value='.$sql_oooPassooo[0][0]);//���T��  �g�Jcookie  �n�A��} �A�g�@�� �]��cookie�ɮפ��P �n�O�G��
}else{

header("location:index.php?add=worry100");

}//if  �P�w�K�X���T �����T
}


//-----------------------�n�X
if($go_play=='�n�X'){
setcookie("true","���q�L",time()-308200);//�O�_���g�L�o��  
setcookie("pass_1988",'',time()-308200);


header("location:h_ya/url_header.php?pin_pass_2=nook");
}








if($go_play=='�R���峹a'){

$s___2006_7_9=$_COOKIE["pass_1988"];




$sqlassssa="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `Num` = '$ooooooo_1'";
$sqlaaiss2=sql_b($sqlassssa);


$sqlaaiss22144=$sqlaaiss2[0][12];
$sqlassssaQWEQW="SELECT * 
FROM `bar_all` 
WHERE 1 AND `pin_bar` = '$sqlaaiss22144' ";
$sqlaaiss22E1=sql_b($sqlassssaQWEQW);


$kkk_2006_7_8_3_i="SELECT * 
FROM `pass` 
WHERE 1 AND `user` = '$s___2006_7_9' ";
$kkk_2006_7_8_3_ii=sql_b($kkk_2006_7_8_3_i);


if($kkk_2006_7_8_3_ii[0][0]==$sqlaaiss2[0][14] || $sqlaaiss22E1[0][4]==$kkk_2006_7_8_3_ii[0][1] || $sqlaaiss22E1[0][5]==$kkk_2006_7_8_3_ii[0][1] || $kkk_2006_7_8_3_ii[0][15]=='�޲z��(�̰��v��)'){


$dddddddddddddd=$kkk_2006_7_8_3_ii[0][3];

$sql="UPDATE `bar_all_all` SET
`id` = '$dddddddddddddd',
`ip` = '$REMOTE_ADDR',
`times` = NOW() ,
`true` = '��' WHERE `Num` = '$ooooooo_1' ";
sql_a($sql);

header('location:index_mi.php?num_10s='.$ooooooo_1);


}else{

header('location:index_mi.php?num_10s='.$ooooooo_1.'&fun=e&#hi_http');
}


}








if($go_play=='�R���^�Ф峹a'){

$s___2006_7_91=$_COOKIE["pass_1988"];



$kkk_2006_7_8_3_i="SELECT * 
FROM `pass` 
WHERE 1 AND `user` = '$s___2006_7_91' ";
$kkk_2006_7_8_3_ii=sql_b($kkk_2006_7_8_3_i);


$dddddddddddddd=$kkk_2006_7_8_3_ii[0][3];

$sqlaa="SELECT * 
FROM `bar_all_alls` 
WHERE 1 AND `num` = '$out_num' ";
$sqlaai=sql_b($sqlaa);



$sqlaai1=$sqlaai[0][10];
$sqlassssa="SELECT * 
FROM `bar_all` 
WHERE 1 AND `pin_bar` = '$sqlaai1' ";
$sqlaaiss2=sql_b($sqlassssa);


if($kkk_2006_7_8_3_ii[0][0]==$pass_my || $kkk_2006_7_8_3_ii[0][15]=='�޲z��(�̰��v��)' || $sqlaaiss2[0][4]==$kkk_2006_7_8_3_ii[0][1] || $sqlaaiss2[0][5]==$kkk_2006_7_8_3_ii[0][1]){

$sql="DELETE FROM `bar_all_alls` WHERE `num` = '$out_num' ";


sql_a($sql);


header('location:index_mi.php?num_10s='.$gotos);


}else{
header('location:index_mi.php?num_10s='.$gotos.'&fun=e&#hi_http');
}


}






?>