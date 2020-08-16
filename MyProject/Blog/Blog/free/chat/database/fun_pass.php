<?
include('../../../all_function.php');
$blink=new file_et;
include('pass_data.php');
//登入密碼
?>

<?
if($ox_i=='0'){
$blink2=new mysql_et;

$false_t='0';
for($i=0;$i<count($pass_data_name);$i++){
if($pass_data_name[$i]==$data_name){
$false_t='1';
$i=(count($pass_data_name)+2);
}
}

$bula=eregi('^[a-zA-Z0-9]{6,12}',$data_pass);

$data_name=$blink2->str_re($data_name);
$data_pass=$blink2->str_re($data_pass);
if($false_t=='0'){
if(strlen($data_name)<=20 && strlen($data_name)>=4 && strlen($data_pass)>=6 && strlen($data_pass)<=12 && strlen($age)<3 && $bula){
$opens=fopen("pass_data.php","w+");
$nums2=count($pass_data_name);
if(date('i')==59){
if(date('H')==23){
$time_t=100000;
}else{
$time_t=1000;
}
}else{
$time_t=2;
}
$pass_data_name[$nums2]=$data_name;
$pass_data_pass[$nums2]=$data_pass;
$pass_data_ip[$nums2]=$REMOTE_ADDR;
if($boys==0){
$boys=0;
}else{
$boys=1;
}

$pass_chat__boy[$nums2]=$boys;
$pass_chat__age[$nums2]=$age;
$pass_data_del_time[$nums2]=(date('YmdHi')+$time_t);
fputs($opens,'<?   ');
$blink->file_puts($opens,$pass_data_name,'$pass_data_name');
$blink->file_puts($opens,$pass_data_pass,'$pass_data_pass');
$blink->file_puts($opens,$pass_data_ip,'$pass_data_ip');
$blink->file_puts($opens,$pass_data_del_time,'$pass_data_del_time');
$blink->file_puts($opens,$pass_chat__boy,'$pass_chat__boy');
$blink->file_puts($opens,$pass_chat__age,'$pass_chat__age');
fputs($opens,'   ?>');

echo '
<script language="javascript">
alert("註冊成功 !\n\n下次站長同行時\n\n---KeyOnly---\n\n暱稱 : '.$data_name.'\n\n密碼 : '.$data_pass.'\n ");
location.replace("../");
</script>';

}else{
echo '<script language="javascript">
alert("失敗 !您註冊的有誤");
history.go(-1);
</script>';
}
}else{
echo '
<script language="javascript">
alert("失敗 !暱稱慘遭重複..");
history.go(-1);
</script>';
}


 
}else{






$u='false';
for($i=0;$i<(count($pass_data_name));$i++){
if($pass_data_name[$i]==$data_name && $pass_data_pass[$i]==$data_pass){

if(date('i')==59){
$time_t=1000;
}else{
$time_t=2;
}
$pass_data_del_time[$i]=(date('YmdHi')+$time_t);
$pass_data_ip[$i]=$REMOTE_ADDR;
$u='true';
$ii=$i;
$i=(count($pass_data_name)+2);
}//if
}//for

if($u=='true'){
if($pass_data_ip[$ii]!='' && $pass_data_del_time[$ii]<(date('YmdHi'))){

 $opens=fopen("pass_data.php","w+");
 fputs($opens,'<?   ');
 $blink->file_puts($opens,$pass_data_name,'$pass_data_name');
 $blink->file_puts($opens,$pass_data_pass,'$pass_data_pass');
 $blink->file_puts($opens,$pass_data_ip,'$pass_data_ip');
 $blink->file_puts($opens,$pass_data_del_time,'$pass_data_del_time');
 $blink->file_puts($fo,$pass_chat__boy,'$pass_chat__boy');
 $blink->file_puts($fo,$pass_chat__age,'$pass_chat__age');
 fputs($opens,'   ?>');

echo '
<script language="javascript">
alert("成功進入 ! ");
location.replace("../");
</script>';


}else{
echo '
<script language="javascript">
alert("此暱稱使用中 ! ");
history.go(-1);

</script>';
}


}else{
echo '
<script language="javascript">
alert("失敗 !暱稱密碼不符合");
history.go(-1);
</script>';
}


}//end 

?>