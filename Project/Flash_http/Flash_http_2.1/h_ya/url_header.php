<?
ob_start();

include("../abc_cool/cool.php");//全部的網址都來這轉址且做動作


switch($pin_pass_2){
case ok:$ok_pass="通過";break;
case nook:$ok_pass="不通過";break;
}//end


if($ok_pass=="通過"){

setcookie("true","通過",time()+3600);//是否有經過這裡  
setcookie("pass_1988",$pass_1_value,time()+3600);


$sql_2006_7_9_a="SELECT * 
FROM `pass` 
WHERE 1 AND `user` = '$pass_1_value'";
$sql_2006_7_9_aa=sql_b($sql_2006_7_9_a);

$sql_2006_7_9_aaa=$sql_2006_7_9_aa[0][18];
$sql_2006_7_9_aaa=$sql_2006_7_9_aaa+1;
$sql_2006_7_9_b="UPDATE `pass` SET `come_num` = '$sql_2006_7_9_aaa',`Lv100` = NOW() WHERE  `user` = '$pass_1_value' ";
sql_a($sql_2006_7_9_b);

header("location:index.php");

}


if($ok_pass=="不通過"){


setcookie("true","不通過",time()-308200);//是否有經過這裡  
setcookie("pass_1988",'',time()-308200);

header("location:../index.php?add=say_104");

}
?>