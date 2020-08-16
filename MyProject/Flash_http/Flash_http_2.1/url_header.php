<?
ob_start();

include("abc_cool/cool.php");//全部的網址都來這轉址且做動作


switch($pin_password){
case 登入:$go_play='登入';break;
case 登出:$go_play='登出';break;//登出  因為網址不能用中文
case aaa5:$go_play="密碼提示";break;
case aaa6:$go_play="刪除文章a";break;
case aaa7:$go_play="刪除回覆文章a";break;
}


if($go_play=="密碼提示"){

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

header("location:index.php?add=save108_word");//寫入cookie

}else{
header("location:index.php?add=save108_no");//判定錯誤
}
//這邊要注意的事  先做資料庫比對  在做生日比對
}//end


//------------------------------
if($go_play=='登入'){
$b__2006_7_9_1=$_POST[user_a];
$b__2006_7_9_2=$_POST[pass_b];



$sql_ooPassoo="SELECT `user` , `pass` , `name` 
FROM `pass` 
WHERE 1 AND `user` = '$b__2006_7_9_1' AND `pass` = '$b__2006_7_9_2'";
$sql_oooPassooo=sql_b($sql_ooPassoo);
if($sql_oooPassooo[0][0]!=''){

setcookie("true","通過",time()+3600);//是否有經過這裡  
setcookie("pass_1988",$sql_oooPassooo[0][0],time()+3600);

header('location:h_ya/url_header.php?pin_pass_2=ok&pass_1_value='.$sql_oooPassooo[0][0]);//正確的  寫入cookie  要再轉址 再寫一次 因為cookie檔案不同 要記二種
}else{

header("location:index.php?add=worry100");

}//if  判定密碼正確 不正確
}


//-----------------------登出
if($go_play=='登出'){
setcookie("true","不通過",time()-308200);//是否有經過這裡  
setcookie("pass_1988",'',time()-308200);


header("location:h_ya/url_header.php?pin_pass_2=nook");
}








if($go_play=='刪除文章a'){

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


if($kkk_2006_7_8_3_ii[0][0]==$sqlaaiss2[0][14] || $sqlaaiss22E1[0][4]==$kkk_2006_7_8_3_ii[0][1] || $sqlaaiss22E1[0][5]==$kkk_2006_7_8_3_ii[0][1] || $kkk_2006_7_8_3_ii[0][15]=='管理員(最高權限)'){


$dddddddddddddd=$kkk_2006_7_8_3_ii[0][3];

$sql="UPDATE `bar_all_all` SET
`id` = '$dddddddddddddd',
`ip` = '$REMOTE_ADDR',
`times` = NOW() ,
`true` = '關' WHERE `Num` = '$ooooooo_1' ";
sql_a($sql);

header('location:index_mi.php?num_10s='.$ooooooo_1);


}else{

header('location:index_mi.php?num_10s='.$ooooooo_1.'&fun=e&#hi_http');
}


}








if($go_play=='刪除回覆文章a'){

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


if($kkk_2006_7_8_3_ii[0][0]==$pass_my || $kkk_2006_7_8_3_ii[0][15]=='管理員(最高權限)' || $sqlaaiss2[0][4]==$kkk_2006_7_8_3_ii[0][1] || $sqlaaiss2[0][5]==$kkk_2006_7_8_3_ii[0][1]){

$sql="DELETE FROM `bar_all_alls` WHERE `num` = '$out_num' ";


sql_a($sql);


header('location:index_mi.php?num_10s='.$gotos);


}else{
header('location:index_mi.php?num_10s='.$gotos.'&fun=e&#hi_http');
}


}






?>