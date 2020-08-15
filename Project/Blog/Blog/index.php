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
}//是否右此IP


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
}//新增ip 跟 更新時間
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
}//if 判定你的ip 是否可以進入網站
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
alert("-站長對您使用同行-");
location.replace("free/chat/");
</script>';
}//end if
}else{

echo'<link href="css/ob.css" rel="stylesheet" type="text/css">

<div class="say_div1">
<div class="say_div1_1" align="center">'.$ob_say_hello_title[$iii].'</div>
<div class="say_div1_2">'.$ob_say_hello_body[$iii].'</div>
<div class="say_div1_3" align="right">日期:'.$ob_say_hello_date[$iii].'</div>
<div class="say_div1_4" align="center"><a href="index.php">回到本站</a></div>
</div>';
$rands_num=floor(rand(0,7));
switch($rands_num){
case 0:$img__str='
☆══╗ ╔☆　　　　　　　 ╔╗╔╗ 
╚╗╔╝ ║║╔═╦╦╦═☆ ║☆╝╠═╦╦╗ 　 
╔╝╚╗ ║╚╣║║║║╠╣ ╚╗╔╣║║║☆←我就是愛尼♀♂ 
╚═☆╝ ╚═╩☆╩═╩═╝　 ╚╝☆═╩═╝ ';break;
case 1:$img__str='
☆‧°☆∴°﹒°．﹒‧°∴°☆..．﹒‧°∴☆ 
╭╯╰╮﹒☆☆°．﹒☆‧°∴°﹒°☆．‧°∴°∴ 
︱☆★︱把這罐星砂送給你☆.﹒☆°‧°∴°﹒☆° 
︱☆★︱裝滿這滿滿的祝福‧°∴☆．‧°☆..° 
╰——╯．﹒☆‧°☆∴°﹒°．﹒∴°﹒☆‧°∴☆
';break;
case 2:$img__str='
。╭╮　　　　　　╭╮　　　　　　　　　 
╭┴┴──────┴┴╮灌 
│　　●　　　　　●　│　　來來...笑一個!!　　 
│○　　╰───╯　○│水 
╰─《粉可愛吧★》──╯.... 
';break;
case 3:$img__str='


╭╮☆╭╧╮╭╧╮╭╧╮╭╧╮╭╮☆〞　　 
╰幸╮║送│║來│║祝│║福│╰快╮ 
☆╰福╘∞╛╘∞╛╘∞╛╘∞╛☆╰樂  ';break;
case 4:$img__str='

§∩﹏∩
╭︿︿╮╭─☆─★─☆─★─☆─╮
╰──╯＜別讓天氣影響到心情喲!?│
╰○○╯╰─★─☆─★─☆─★─╯ ';break;
case 5:$img__str='
＊.....███ 。＊。＊。＊。＊。＊。＊。＊
補.◢◣＿＿＼.＊。＊。＊。＊。＊。＊。＊
充.██ ○○∣＊。＊給你喝唷。＊。＊。＊
體.██ Milk∣。＊讓你每天都很有活力喔。
力.██_____∣＊希望每次看到你。精神都很好唷~~ ＊';break;
case 6:$img__str='
╭┴┴─────┴┴╮ 
│　　　　　　　　　│＼｜／ 
│　●　　　　　●　│─☆─ 
│○　╰┬┬┬╯　○│／｜＼ 
│　　　╰─╯　　　／ 
╰─┬○────┬○╯';break;
case 7:$img__str='

☆ °‧°☆．﹒‧°☆．∴°☆﹒﹒‧☆°∴°☆．
....................... ︴︴︴.........
....... ︴︴︴........ C◥█◤............
. ... C◥█◤...........───................
☆°‧°☆．﹒‧°☆．∴°☆﹒﹒‧☆°∴°☆．∴
';break;


}
$rands_num1=floor(rand(0,5));
switch($rands_num1){
case 0:$img__str1='
麻吉哇費想你滴唷^3^
~~~~~~~~~~~︿ 
ㄒㄒㄒㄒ~／　　＼ 
ㄏㄏㄏ~／∕ ︳﹨　＼ 
灌水~／ ∕　︳﹨　　＼ 
^^~／　　　　　　　　＼ 
~／　　　　　　　　　　 ＼ 
∕　　﹏﹏　 　　﹏﹏　　 ﹨ 
| 　　　　　　　　　　　　︱ 
╰▄▄▃▃▂▽▂▃▃▄▄╯ 
╒╧╕╒╧╕╒╧╕╒╧╕╒╧╕
｜天｜｜要｜｜美｜｜步｜｜心｜
｜天｜｜幸｜｜夢｜｜步｜｜想｜
｜快｜｜福｜｜成｜｜高｜｜事｜ 
｜樂｜｜唷｜｜真｜｜升｜｜成｜ 
╘═╛╘═╛╘═╛╘═╛╘═╛ ';break;
case 1:$img__str1='


幫你灌圖~^^
。。.／￣￣￣￣￣￣￣￣￣￣￣￣ ＼ 
　　｜　／￣￣￣￣￣￣￣￣￣＼　｜
　　｜　＼＿＿＿＿＿＿＿＿＿／　｜　
　..／　　　　　　　　　　　　　　＼　
　..＼／＼／＼／＼／＼／＼／＼／＼／　
　　　｜　　　　　　　　　　　｜
　　　｜　　●　　　　　●　　｜　 
　　／｜　”　　　ˇ　　　”　｜＼　　 
　●　｜　　　　　　　　　　　｜　●　 
　　　｜　　　　　　　　　　　｜ 
　　　╰－－－－－－－－－－－╯ 
　　　　　　／　　　　　＼。。.. ';break;
case 2:$img__str1='


＊╭╮　╭╮　　╭╮ 
　││　││　　│└╮ 
╭┴┴─┴Ⅲ╮～└─╯ 
│　﹋　﹋　│　　　╭─────────╮ 
│　∩　∩　│　╭╮│幸福．快樂．好心情│ 
│　　▽　　│Ｏ╰╯╰─────────╯ 
╰─ｍ∞ｍ─╯ 
╭╮☆╭╧╮╭╧╮╭╧╮╭╧╮╭╮☆〞　　 
╰幸╮║送│║來│║祝│║福│╰快╮ 
☆╰福╘∞╛╘∞╛╘∞╛╘∞╛☆╰樂 
';break;
case 3:$img__str1='
☆◣　　　　　　　◢　╭☆～☆╮
　█◣　　　　　◢█　╰～～～╯＿ ☆　
　██◣　　　◢██　／　　　　　　　╲ 
　◥██　　　██◤∕　　　　　　　　　﹨
　　◥█　　　█◤　▏☆芝麻糊來看妳嚕☆ ▏
　　　◥　　　◤　　﹨　　　　　　　　　∕ 
　◢█████◣　　　╲　　　　
◢█████⊙█◣　　　╭～
█████████＝＝　╰～√√─√√    ☆~龍~☆
████████◤　　
███████◤　
◥██████◣　
　▄▄▄▄▄◣◢　
　　　　　　◤◥
要常帶熊熊來看芝麻糊喔... ';break;
case 4:$img__str1='      ..｜　　　◢█◣◢█◣ 
–☆–　　　█誠心誠意█ 
　∣　　　　◥████◤ 
　　　　　　　◥██◤ 
　　　　　　　　◥◤ 
　　　◢█◣◢█◣▏◢█◣◢█◣ 
　　　█珍貴友誼█▏█同甘共苦█ 
　　　◥████◤▏◥████◤ 
　　　　◥██◤　▏　◥██◤ 
　　　　　◥◤　　▏　　◥◤ 
　　∣　　　◢█◣◢█◣　 
　－☆－　　█分享喜悅█ 
　　│　　　◥████◤ 
　　　　　　　◥██◤ 
　　　　　　　　◥◤　　 
　　　　　　　　　▏　∣';break;
case 5:$img__str1='


╭－－－－－－╮＊﹌瓶 
╰－╮　　╭－╯　　　中有 
╭╯╰－－╯╰╮　　　　　一顆 
｜◢█◣◢█◣｜　　　　　　　愛心 
｜██████｜＊﹌送　　　　　　　唷﹌＊
｜◥████◤｜　　　給我 
｜　◥██◤　｜　　　　　所關 
｜　　◥◤　　｜　　　　　　　心滴 
╰============╯　　　　　　　　　人﹌＊';break;

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
$blink->file_puts($of,$ob_say_hello_title,'$ob_say_hello_title');//標題
$blink->file_puts($of,$ob_say_hello_body,'$ob_say_hello_body');//內容
$blink->file_puts($of,$ob_say_hello_true,'$ob_say_hello_true');//是否被開啟
$blink->file_puts($of,$ob_say_hello_date,'$ob_say_hello_date');//日期
$blink->file_puts($of,$ob_say_hello_del_time,'$ob_say_hello_del_time');//幾天後刪除
fputs($of,"
?>");
echo '<script language="javascript">
alert("-有人對您使用交信-");
</script>';
}//判定是否訊息


}else{
header('location:get_outoutout');
}//end 禁ip模式
}else{
echo '<img src="images/close2.gif" width="170" height="80">';
}
?>
</body>
</html>
