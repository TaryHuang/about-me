<?php
include('alls/date_login.php');
if($____login_ip==$REMOTE_ADDR){

//判定是否給予進入
?>


<?
include('all_function.php');

$aaiiddss=$_POST["kings"];

switch($aaiiddss){
case '121':$power='新增分類';break;
case '148chan':$power='修改_編輯分類';break;
case '148del':$power='刪除_編輯分類';break;

case '184add':$power='新增文章';break;
case '184chan_181':$power='編輯文章181';break; 
case '184del_181':$power='刪除文章181';break; 
case '184ohmygod_181':$power='復活文章181';break; 


case 'chan876borad':$power='修改留言內容';break; 
case '293chan':$power='編輯留言版';break;
case 'chan_294':$power='編輯討論版a';break;
case 'add312':$power='新增儲存樣版';break;
case 'chan315':$power='修改儲存樣版';break;
case 'ok319':$power='套用樣版';break;
case 'chan894':$power='修改插版';break;
case 'del8123':$power='刪除樣版化模組';break;

case 'chan419':$power='修改個人資料';break;
case 'chan446':$power='修改密碼a';break;
case 'chan456':$power='更新密碼a';break;
case 'chan481':$power='更改blog中心';break;
case 'del__98mys':$power='刪除個人信件';break;
case '97215':$power='首頁編輯原始碼';break;
case 'del__9873':$power='刪除系統信件a';break;
}//end

if($power=='刪除系統信件a'){
include('alls/free.php');
$of=fopen('alls/free.php','w+');
for($i=0;$i<count($later__is_free_pin);$i++){
if($later__is_free_pin[$i]==$pins_this){
$later__is_free_true[$i]='0';
$i=count($later__is_free_pin)+2;
}
}
$blink=new file_et;
fputs($of,'<? 
');
$blink->file_puts($of,$later__is_free_pin,'$later__is_free_pin');
$blink->file_puts($of,$later__is_free_name,'$later__is_free_name');
$blink->file_puts($of,$later__is_free_true,'$later__is_free_true');
$blink->file_puts($of,$later__is_free_title,'$later__is_free_title');
fputs($of,'
?>');
header('location:login_bodys.php?ppiinnss=5358');
}


if($power=='刪除樣版化模組'){
include('alls/add_293_all.php');
for($i=0;$i<(count($this__cools293ipin));$i++){
if($pu_pin==$this__cools293ipin[$i]){
$this__cools293ipin[$i]='';
$this__cools293iname[$i]='';
$this__cools293icss2[$i]='';
$this__cools293icss[$i]='';

$this__cools293ititle[$i]='';
$this__cools293ixp[$i]='';
$this__cools293itext[$i]='';

}//if
}//for


$add__cool=new file_et;
$opens=fopen("alls/add_293_all.php","w+");
fputs($opens,'<?   ');
$add__cool->file_puts($opens,$this__cools293ipin,'$this__cools293ipin');
$add__cool->file_puts($opens,$this__cools293iname,'$this__cools293iname');
$add__cool->file_puts($opens,$this__cools293icss2,'$this__cools293icss2');
$add__cool->file_puts($opens,$this__cools293icss,'$this__cools293icss');
$add__cool->file_puts($opens,$this__cools293ititle,'$this__cools293ititle');
$add__cool->file_puts($opens,$this__cools293ixp,'$this__cools293ixp');
$add__cool->file_puts($opens,$this__cools293itext,'$this__cools293itext');
fputs($opens,' ?>');
header('location:login_bodys.php?ppiinnss=ok2919');
}



if($power=='首頁編輯原始碼'){
if(strlen($bodys_str)<12000){
$file__et_write=new file_et;
$file__et_write->file_puts2('alls/index__alls.h',$bodys_str);
header('location:login_bodys.php?ppiinnss=index3451');
}else{
header('location:login_bodys.php?ppiinnss=index3441_eorro');
}
}

if($power=='新增分類'){
//=============
$str_replace_et=new mysql_et;
$nums=$str_replace_et->nums_p($nums);
$names=$str_replace_et->str_re($names);
//=============

if(strlen($nums)<=4 && strlen($names)<=32  && strlen($names)>=2){




include('alls/add_121_a.php');
include('alls/add_borad_css.php');

$array___nums=count($arrays_value__0);

$array____0=$arrays_value__0;
$array____1=$arrays_value__1;
$array____2=$arrays_value__2;
$arrays_value__action1=$arrays_value__action;
$arrays_value__action2=$arrays_value__actions;
$array____end=$arrays_value__end;

$array____0[$array___nums]=($array___nums+100);
$array____1[$array___nums]=$nums;
$array____2[$array___nums]=$names;
$array____end[$array___nums]='@無刪除#';
$arrays_value__action1[$array___nums][0]='0';
$arrays_value__action1[$array___nums][1]='0';
$arrays_value__action1[$array___nums][2]='0';
$arrays_value__action1[$array___nums][3]='0';
$arrays_value__action1[$array___nums][4]='0';
$arrays_value__action1[$array___nums][5]='0';
$arrays_value__action1[$array___nums][6]='0';
$arrays_value__action1[$array___nums][7]='0';
$arrays_value__action1[$array___nums][8]='0';
$arrays_value__action1[$array___nums][9]='';

$arrays_value__action2[$array___nums]='';
//=====================
$add__cool=new file_et;

$opens=fopen('alls/add_121_a.php','w+');

fputs($opens,'<? ');

$add__cool->file_puts($opens,$array____0,'$arrays_value__0');
$add__cool->file_puts($opens,$array____1,'$arrays_value__1');
$add__cool->file_puts($opens,$array____2,'$arrays_value__2');
$add__cool->file_puts($opens,$array____end,'$arrays_value__end');
$add__cool->file_putssa($opens,$arrays_value__action1,'$arrays_value__action');
$add__cool->file_puts($opens,$arrays_value__action2,'$arrays_value__actions');
fputs($opens,' ?>');
fclose($opens);


$opens=fopen('alls/add_borad_css.php','w+');
fputs($opens,'<? ');


$css_all_array[$array___nums]='

/**********************************************************/
/*留言版說明*/
.borad__div {
	overflow: auto;
	padding: 5px;
	text-align: left;
	vertical-align: top;
	white-space: pre;
	display: block;
	border-color:#000000;
	border: 1px solid #000000;
	height: 100px;
	width: 300px;
	background-color: #FFCC33;
}
/**********************************************************/










/**********************************************************/

/***留言外框***/
.borad__css {
	position: static;
	width: 270px;
	border: 1px solid #000000;
}




/***假如男生的話***/
.borad__css_boy {
	position: static;
	width: 350px;
	border-top: 1px solid #000000;
	border-right: 1px none #000000;
	border-bottom: 1px solid #000000;
	border-left: 1px solid #000000;
	text-align: left;
	vertical-align: top;
	white-space: pre;
	display: block;
	padding: 2px;
	height: 120px;
	background-image: url(../images/093.gif);
	background-repeat: no-repeat;
	background-position: right;
}
/***假如男生 暱稱***/
.borad__css_boy_title {
	background-color: #FFCC00;
	height: 25px;
	text-align: center;
	vertical-align: middle;
	display: block;
}
/***假如男生 圖片***/
.borad__css_boy_bg2 {
	background-color: #FFCC00;
	text-align: center;
	vertical-align: top;
	display: block;
}
/***假如男生 日期***/
.borad__css_boy_date {
	background-color: #FFCC00;
	text-align: right;
	display: block;
}






/**********************************************************/






/***假如女生的話***/
.borad__css_girl {
	position: static;
	width: 350px;
	border-top: 1px solid #000000;
	border-right: 1px none #000000;
	border-bottom: 1px solid #000000;
	border-left: 1px solid #000000;
	text-align: left;
	vertical-align: top;
	white-space: pre;
	display: block;
	padding: 2px;
	height: 120px;
	background-image: url(../images/092.gif);
	background-repeat: no-repeat;
	background-position: right;
}
/***假如女生 暱稱***/
.borad__css_girl_title {
	background-color: #FFCCFF;
	height: 25px;
	text-align: center;
	vertical-align: middle;
	display:block;
}
/***假如女生 圖片***/
.borad__css_girl_bg2 {
	background-color: #FFCCFF;
	text-align: center;
	vertical-align: top;
	display: block;
}
/***假如女生 日期***/
.borad__css_girl_date {
	background-color: #FFCCFF;
	text-align: right;
	display: block;
}

/**********************************************************/







';

$this_borad_p1_name[$array___nums]='手刀';//圖片名稱
$this_borad_p2_name[$array___nums]='無言';
$this_borad_p3_name[$array___nums]='哭泣';
$this_borad_p4_name[$array___nums]='高興';
$this_borad_p5_name[$array___nums]='親吻';
$this_borad_p6_name[$array___nums]='去~';

$this_borad_p1_url[$array___nums]='images/img1.gif';//圖片網址
$this_borad_p2_url[$array___nums]='images/img2.gif';
$this_borad_p3_url[$array___nums]='images/img3.gif';
$this_borad_p4_url[$array___nums]='images/img4.gif';
$this_borad_p5_url[$array___nums]='images/img5.gif';
$this_borad_p6_url[$array___nums]='images/img6.gif';

$say__text_word[$array___nums]='留言版規定';//說明的所有資訊
$add__cool->file_puts($opens,$css_all_array,'$css_all_array');

$add__cool->file_puts($opens,$this_borad_p1_name,'$this_borad_p1_name');
$add__cool->file_puts($opens,$this_borad_p2_name,'$this_borad_p2_name');
$add__cool->file_puts($opens,$this_borad_p3_name,'$this_borad_p3_name');
$add__cool->file_puts($opens,$this_borad_p4_name,'$this_borad_p4_name');
$add__cool->file_puts($opens,$this_borad_p5_name,'$this_borad_p5_name');
$add__cool->file_puts($opens,$this_borad_p6_name,'$this_borad_p6_name');

$add__cool->file_puts($opens,$this_borad_p1_url,'$this_borad_p1_url');
$add__cool->file_puts($opens,$this_borad_p2_url,'$this_borad_p2_url');
$add__cool->file_puts($opens,$this_borad_p3_url,'$this_borad_p3_url');
$add__cool->file_puts($opens,$this_borad_p4_url,'$this_borad_p4_url');
$add__cool->file_puts($opens,$this_borad_p5_url,'$this_borad_p5_url');
$add__cool->file_puts($opens,$this_borad_p6_url,'$this_borad_p6_url');

$add__cool->file_puts($opens,$say__text_word,'$say__text_word');
fputs($opens,' ?>');
fclose($opens);
//------新增定義的blog_css
header("location:login_bodys.php?ppiinnss=122");



include('alls/add_g_img.php');
$is=count($g_img__num);
$g_img__num[$is]=($array___nums+100);
$g_img__Qa[$is]='';
$g_img__a1[$is]='0';
$g_img__a2[$is]='0';
$g_img__a3[$is]='0';
$g_img__a4[$is]='0';
$g_img__gos[$is]='';
$g_img__css[$is]='';
$opens=fopen('alls/add_g_img.php','w+');
fputs($opens,'<? ');
$add__cool->file_puts($opens,$g_img__num,'$g_img__num');
$add__cool->file_puts($opens,$g_img__Qa,'$g_img__Qa');
$add__cool->file_puts($opens,$g_img__a1,'$g_img__a1');
$add__cool->file_puts($opens,$g_img__a2,'$g_img__a2');
$add__cool->file_puts($opens,$g_img__a3,'$g_img__a3');
$add__cool->file_puts($opens,$g_img__a4,'$g_img__a4');
$add__cool->file_puts($opens,$g_img__gos,'$g_img__gos');
$add__cool->file_puts($opens,$g_img__css,'$g_img__css');
fputs($opens,' ?>');
fclose($opens);
}else{

header("location:login_bodys.php?ppiinnss=103");
}//-----------------------------否定資料
}//end





if($power=='修改_編輯分類'){
//=============
$str_replace_et=new mysql_et;
$namse_148_num=$str_replace_et->nums_p($namse_148_num);
$namse_148_name=$str_replace_et->str_re($namse_148_name);
//=============
if(strlen($namse_148_num)<=4 && strlen($namse_148_name)<=32  && strlen($namse_148_name)>=2){

include("alls/add_121_a.php");

$arrays_value__1[($namse_148_0-100)]=$namse_148_num;
$arrays_value__2[($namse_148_0-100)]=$namse_148_name;
$banks=new file_et;

$fo=fopen('alls/add_121_a.php','w+');

fputs($fo,'<?   ');

$banks->file_puts($fo,$arrays_value__0,'$arrays_value__0');
$banks->file_puts($fo,$arrays_value__1,'$arrays_value__1');
$banks->file_puts($fo,$arrays_value__2,'$arrays_value__2');
$banks->file_puts($fo,$arrays_value__end,'$arrays_value__end');
$banks->file_putssa($fo,$arrays_value__action,'$arrays_value__action');
$banks->file_puts($fo,$arrays_value__actions,'$arrays_value__actions');
fputs($fo,'    ?>');

fclose($fo);


header("location:login_bodys.php?ppiinnss=125");
}else{
header("location:login_bodys.php?ppiinnss=103");
}//-----------------------------否定資料
}//end
 





if($power=='刪除_編輯分類'){
include("alls/add_121_a.php");
include("alls/add_borad_css.php");
include("alls/add_borads.php");
include("alls/add_g_img.php");//插版
$del__alls=new file_et;
$today__date=(date("Ymd")+3);
for($i=0;$i<(count($arrays_value__0));$i++){
if($arrays_value__0[$i]==($snums+100)){
$arrays_value__1[$i]=$today__date;
$arrays_value__end[$i]='@刪除不顯示#';
$arrays_value__actions[$i]='';
$arrays_value__action[$i][0]='0';
$arrays_value__action[$i][1]='0';
$arrays_value__action[$i][2]='0';
$arrays_value__action[$i][3]='0';
$arrays_value__action[$i][4]='0';
$arrays_value__action[$i][5]='0';
$arrays_value__action[$i][6]='0';
$arrays_value__action[$i][7]='0';
$arrays_value__action[$i][8]='0';
$arrays_value__action[$i][9]='';

//------- alls/add_121_a.php
$fo=fopen("alls/add_121_a.php","w+");
fputs($fo,'<?   ');
$del__alls->file_puts($fo,$arrays_value__0,'$arrays_value__0');//無法變
$del__alls->file_puts($fo,$arrays_value__1,'$arrays_value__1');
$del__alls->file_puts($fo,$arrays_value__2,'$arrays_value__2');
$del__alls->file_puts($fo,$arrays_value__end,'$arrays_value__end');
$del__alls->file_puts($fo,$arrays_value__actions,'$arrays_value__actions');
$del__alls->file_putssa($fo,$arrays_value__action,'$arrays_value__action');
fputs($fo,' ?>');
fclose(fo);
//-------



//------- alls/add_121_a.php

$css_all_array[$i]='';
$this_borad_p1_name[$i]='';
$this_borad_p2_name[$i]='';
$this_borad_p3_name[$i]='';
$this_borad_p4_name[$i]='';
$this_borad_p5_name[$i]='';
$this_borad_p6_name[$i]='';
$this_borad_p1_url[$i]='';
$this_borad_p2_url[$i]='';
$this_borad_p3_url[$i]='';
$this_borad_p4_url[$i]='';
$this_borad_p5_url[$i]='';
$this_borad_p6_url[$i]='';
$say__text_word[$i]='';

$g_img__num[$i]='';
$g_img__Qa[$i]='';
$g_img__a1[$i]='';
$g_img__a2[$i]='';
$g_img__a3[$i]='';
$g_img__a4[$i]='';
$g_img__gos[$i]='';
$g_img__css[$i]='';
$fo=fopen("alls/add_g_img.php","w+");
fputs($fo,'<?   ');
$del__alls->file_puts($fo,$g_img__num,'$g_img__num');
$del__alls->file_puts($fo,$g_img__Qa,'$g_img__Qa');
$del__alls->file_puts($fo,$g_img__a1,'$g_img__a1');
$del__alls->file_puts($fo,$g_img__a2,'$g_img__a2');
$del__alls->file_puts($fo,$g_img__a3,'$g_img__a3');
$del__alls->file_puts($fo,$g_img__a4,'$g_img__a4');
$del__alls->file_puts($fo,$g_img__gos,'$g_img__gos');
$del__alls->file_puts($fo,$g_img__css,'$g_img__css');
fputs($fo,' ?>');




$fo=fopen("alls/add_borad_css.php","w+");
fputs($fo,'<?   ');
$del__alls->file_puts($fo,$css_all_array,'$css_all_array');
$del__alls->file_puts($fo,$this_borad_p1_name,'$this_borad_p1_name');
$del__alls->file_puts($fo,$this_borad_p2_name,'$this_borad_p2_name');
$del__alls->file_puts($fo,$this_borad_p3_name,'$this_borad_p3_name');
$del__alls->file_puts($fo,$this_borad_p4_name,'$this_borad_p4_name');
$del__alls->file_puts($fo,$this_borad_p5_name,'$this_borad_p5_name');
$del__alls->file_puts($fo,$this_borad_p6_name,'$this_borad_p6_name');
$del__alls->file_puts($fo,$this_borad_p1_url,'$this_borad_p1_url');
$del__alls->file_puts($fo,$this_borad_p2_url,'$this_borad_p2_url');
$del__alls->file_puts($fo,$this_borad_p3_url,'$this_borad_p3_url');
$del__alls->file_puts($fo,$this_borad_p4_url,'$this_borad_p4_url');
$del__alls->file_puts($fo,$this_borad_p5_url,'$this_borad_p5_url');
$del__alls->file_puts($fo,$this_borad_p6_url,'$this_borad_p6_url');
$del__alls->file_puts($fo,$say__text_word,'$say__text_word');
fputs($fo,' ?>');



for($jj2=0;$jj2<(count($array_borads__num));$jj2++){
if($array_borads__num[$jj2]==($snums+100)){
$array_borads__num[$jj2]='';
$array_borads__num_pass[$jj2]='@已刪除此留言#';
$array_borads__name[$jj2]='';
$array_borads__boy[$jj2]='';
$array_borads__color[$jj2]='';
$array_borads__date[$jj2]='';
$array_borads__ip[$jj2]='';
$array_borads__img[$jj2]='';
$array_borads__body[$jj2]='';
}
}//end 留言版 留言
$fo=fopen("alls/add_borads.php","w+");
fputs($fo,'<?   ');
$del__alls->file_puts($fo,$array_borads__num,'$array_borads__num');
$del__alls->file_puts($fo,$array_borads__num_pass,'$array_borads__num_pass');
$del__alls->file_puts($fo,$array_borads__name,'$array_borads__name');
$del__alls->file_puts($fo,$array_borads__boy,'$array_borads__boy');
$del__alls->file_puts($fo,$array_borads__color,'$array_borads__color');
$del__alls->file_puts($fo,$array_borads__date,'$array_borads__date');
$del__alls->file_puts($fo,$array_borads__ip,'$array_borads__ip');
$del__alls->file_puts($fo,$array_borads__img,'$array_borads__img');
$del__alls->file_puts($fo,$array_borads__body,'$array_borads__body');
fputs($fo,' ?>');


}
}
header("location:login_bodys.php?ppiinnss=125");
}//end







if($power=='新增文章'){
include("alls/add_121_a.php");
include("alls/add_184_all.php");//開檔案 存array 時間 IP 流水號
include("alls/add_184_alls.php");//開檔案 存array 標題 內容
$banks=new file_et;
//=============
$str_replace_et=new mysql_et;
$bodys=$str_replace_et->str_re($bodys);
$titles=$str_replace_et->str_re($titles);
//=============
for($i=0;$i<count($arrays_value__0);$i++){
if($arrays_value__0[$i]==$por){
$por___ok='true';
}//end
}//end 驗證是否有這個資料

if($por___ok=='true'){
if(strlen($titles)<=35 && strlen($titles)>=2 && strlen($bodys)<=7500  && strlen($bodys)>=5 ){


$fo=fopen('alls/add_184_all.php','w+');
//***********************
$peo_num___184_x=$peo_num___184;
$date_add__184_x=$date_add__184;
$end_ture__184_x=$end_ture__184;

$num___184_y=$num___184;
$date_start___184_x=$date_start___184;
$por___184_x=$por___184;
$ips___184_x=$ips___184;
$date_now___184_y=$date_now___184;
$title___184_y=$title___184;
$body___184_y=$body___184;
//***********************
//--------
$num___184_x=count($num___184);

$peo_num___184_x[$num___184_x]='0';
$date_add__184_x[$num___184_x]=date("Ymd");
$end_ture__184_x[$num___184_x]='[狀態]@顯示資料#';
$num___184_y[$num___184_x]=($num___184_x+1000);
$date_start___184_x[$num___184_x]=date("Y-m-d H:i:s"); 
$por___184_x[$num___184_x]=$por;
$ips___184_x[$num___184_x]=$REMOTE_ADDR;
$date_now___184_y[$num___184_x]=date("Y-m-d H:i:s");//未有修改
$title___184_y[$num___184_x]=$titles;
$body___184_y[$num___184_x]=$bodys;
//--------
fputs($fo,'<?   ');
$banks->file_puts($fo,$num___184_y,'$num___184');//流水號
$banks->file_puts($fo,$date_start___184_x,'$date_start___184');
$banks->file_puts($fo,$por___184_x,'$por___184');
$banks->file_puts($fo,$ips___184_x,'$ips___184');
$banks->file_puts($fo,$peo_num___184_x,'$peo_num___184');
$banks->file_puts($fo,$date_add__184_x,'$date_add__184');

$banks->file_puts($fo,$end_ture__184_x,'$end_ture__184');
fputs($fo,'    ?>');
fclose($fo);

//**********************************************
$fo=fopen('alls/add_184_alls.php','w+');
fputs($fo,'<?   ');
$banks->file_puts($fo,$date_now___184_y,'$date_now___184');
$banks->file_puts($fo,$title___184_y,'$title___184');
$banks->file_puts($fo,$body___184_y,'$body___184');
fputs($fo,'    ?>');
fclose($fo);
header('location:login_bodys.php?ppiinnss=171&check_data='.$por___184_x[$num___184_x]);
}else{
header("location:login_bodys.php?ppiinnss=105");
}//--------------是否資料正確
}else{
header("location:login_bodys.php?ppiinnss=104");
}//end----是否選擇正確
}//end



if($power=='編輯留言版'){
include("alls/add_121_a.php");
include("alls/add_borad_css.php");


if(strlen($text__html)<8000 && strlen($css_alls)<8000 && strlen(name__url1)<300 && strlen(name__url2)<300 && strlen(name__url3)<300 && strlen(name__url4)<300 && strlen(name__url5)<300 && strlen(name__url6)<300 && strlen(name__str1)<300 && strlen(name__str2)<300 && strlen(name__str3)<300 && strlen(name__str4)<300 && strlen(name__str5)<300 && strlen(name__str6)<300){


if($arrays_value__0[$xd_pin]==($xd_pin+100)){
$banks=new file_et;




if($cs_array1!='1'){
$cs_array1='0';
}
if($cs_array2!='1'){
$cs_array2='0';
}
if($cs_array3!='1'){
$cs_array3='0';
}
if($cs_array4!='1'){
$cs_array4='0';
}
if($cs_array5!='1'){
$cs_array5='0';
}
if($cs_array6!='1'){
$cs_array6='0';
}
if($cs_array7!='1'){
$cs_array7='0';
}
if($cs_array8!='1'){
$cs_array8='0';
}




//cheacked
function num___pin_s($a){
for($i=0;$i<(strlen($a));$i++){
switch($a[$i]){
case '0':$a[$i]='0';break;
case '1':$a[$i]='1';break;
case '2':$a[$i]='2';break;
case '3':$a[$i]='3';break;
case '4':$a[$i]='4';break;
case '5':$a[$i]='5';break;
case '6':$a[$i]='6';break;
case '7':$a[$i]='7';break;
case '8':$a[$i]='8';break;
case '9':$a[$i]='9';break;
case 'a':$a[$i]='a';break;
case 'b':$a[$i]='b';break;
case 'c':$a[$i]='c';break;
case 'd':$a[$i]='d';break;
case 'e':$a[$i]='e';break;
case 'f':$a[$i]='f';break;
case 'g':$a[$i]='g';break;
case 'h':$a[$i]='h';break;
case 'i':$a[$i]='i';break;
case 'j':$a[$i]='j';break;
case 'k':$a[$i]='k';break;
case 'l':$a[$i]='l';break;
case 'm':$a[$i]='m';break;
case 'n':$a[$i]='n';break;
case 'o':$a[$i]='o';break;
case 'p':$a[$i]='p';break;
case 'q':$a[$i]='q';break;
case 'r':$a[$i]='r';break;
case 's':$a[$i]='s';break;
case 't':$a[$i]='t';break;
case 'u':$a[$i]='u';break;
case 'v':$a[$i]='v';break;
case 'w':$a[$i]='w';break;
case 'x':$a[$i]='x';break;
case 'y':$a[$i]='y';break;
case 'z':$a[$i]='z';break;
case 'A':$a[$i]='A';break;
case 'B':$a[$i]='B';break;
case 'C':$a[$i]='C';break;
case 'D':$a[$i]='D';break;
case 'E':$a[$i]='E';break;
case 'F':$a[$i]='F';break;
case 'G':$a[$i]='G';break;
case 'H':$a[$i]='H';break;
case 'I':$a[$i]='I';break;
case 'J':$a[$i]='J';break;
case 'K':$a[$i]='K';break;
case 'L':$a[$i]='L';break;
case 'M':$a[$i]='M';break;
case 'N':$a[$i]='N';break;
case 'O':$a[$i]='O';break;
case 'P':$a[$i]='P';break;
case 'Q':$a[$i]='Q';break;
case 'R':$a[$i]='R';break;
case 'S':$a[$i]='S';break;
case 'T':$a[$i]='T';break;
case 'U':$a[$i]='U';break;
case 'V':$a[$i]='V';break;
case 'W':$a[$i]='W';break;
case 'X':$a[$i]='X';break;
case 'Y':$a[$i]='Y';break;
case 'Z':$a[$i]='Z';break;
default :$a[$i]='@';
}//swicth
}//for
return $a;
}//---------------這是用來:判定是否是 數字的fun




$cs_array666=num___pin_s($cs_array666);
if($cs_array666[0]!='@' && $cs_array666[1]!='@' && $cs_array666[2]!='@' && $cs_array666[3]!='@'){

$fo=fopen('alls/add_121_a.php','w+');
fputs($fo,'<?   ');
$banks->file_puts($fo,$arrays_value__0,'$arrays_value__0');
$banks->file_puts($fo,$arrays_value__1,'$arrays_value__1');
$banks->file_puts($fo,$arrays_value__2,'$arrays_value__2');
$banks->file_puts($fo,$arrays_value__end,'$arrays_value__end');
$banks->file_puts($fo,$arrays_value__actions,'$arrays_value__actions');
//-------------
$arrays_value__actionx=$arrays_value__action;
$arrays_value__actionsx=$arrays_value__actions;


$arrays_value__actionx[$xd_pin][0]=$cs_array1;
$arrays_value__actionx[$xd_pin][1]=$cs_array2;
$arrays_value__actionx[$xd_pin][2]=$cs_array3;
$arrays_value__actionx[$xd_pin][3]=$cs_array4;
$arrays_value__actionx[$xd_pin][4]=$cs_array5;
$arrays_value__actionx[$xd_pin][5]=$cs_array6;
$arrays_value__actionx[$xd_pin][6]=$cs_array7;
$arrays_value__actionx[$xd_pin][7]=$cs_array8;
$arrays_value__actionx[$xd_pin][8]=$cs_array9;
$arrays_value__actionx[$xd_pin][9]=$cs_array666;

$banks->file_putssa($fo,$arrays_value__actionx,'$arrays_value__action');


fputs($fo,'    ?>');

fclose($fo);
//***************************************************************

$fo=fopen('alls/add_borad_css.php','w+');
fputs($fo,'<?   ');


//=============
$str_replace_et=new mysql_et;
$name__str1=$str_replace_et->str_re($name__str1);
$name__str2=$str_replace_et->str_re($name__str2);
$name__str3=$str_replace_et->str_re($name__str3);
$name__str4=$str_replace_et->str_re($name__str4);
$name__str5=$str_replace_et->str_re($name__str5);
$name__str6=$str_replace_et->str_re($name__str6);
//=============
//=============
$name__url1=$str_replace_et->str_re($name__url1);
$name__url2=$str_replace_et->str_re($name__url2);
$name__url3=$str_replace_et->str_re($name__url3);
$name__url4=$str_replace_et->str_re($name__url4);
$name__url5=$str_replace_et->str_re($name__url5);
$name__url6=$str_replace_et->str_re($name__url6);
//=============
$css_alls=$str_replace_et->str_re($css_alls);
$text__html=$str_replace_et->str_re($text__html);



$css_all_array[$xd_pin]=$css_alls;
$say__text_word[$xd_pin]=$text__html;
$this_borad_p1_name[$xd_pin]=$name__str1;
$this_borad_p2_name[$xd_pin]=$name__str2;
$this_borad_p3_name[$xd_pin]=$name__str3;
$this_borad_p4_name[$xd_pin]=$name__str4;
$this_borad_p5_name[$xd_pin]=$name__str5;
$this_borad_p6_name[$xd_pin]=$name__str6;

$this_borad_p1_url[$xd_pin]=$name__url1;
$this_borad_p2_url[$xd_pin]=$name__url2;
$this_borad_p3_url[$xd_pin]=$name__url3;
$this_borad_p4_url[$xd_pin]=$name__url4;
$this_borad_p5_url[$xd_pin]=$name__url5;
$this_borad_p6_url[$xd_pin]=$name__url6;



$banks->file_puts($fo,$css_all_array,'$css_all_array');

$banks->file_puts($fo,$this_borad_p1_name,'$this_borad_p1_name');
$banks->file_puts($fo,$this_borad_p2_name,'$this_borad_p2_name');
$banks->file_puts($fo,$this_borad_p3_name,'$this_borad_p3_name');
$banks->file_puts($fo,$this_borad_p4_name,'$this_borad_p4_name');
$banks->file_puts($fo,$this_borad_p5_name,'$this_borad_p5_name');
$banks->file_puts($fo,$this_borad_p6_name,'$this_borad_p6_name');
$banks->file_puts($fo,$this_borad_p1_url,'$this_borad_p1_url');
$banks->file_puts($fo,$this_borad_p2_url,'$this_borad_p2_url');
$banks->file_puts($fo,$this_borad_p3_url,'$this_borad_p3_url');
$banks->file_puts($fo,$this_borad_p4_url,'$this_borad_p4_url');
$banks->file_puts($fo,$this_borad_p5_url,'$this_borad_p5_url');
$banks->file_puts($fo,$this_borad_p6_url,'$this_borad_p6_url');


$banks->file_puts($fo,$say__text_word,'$say__text_word');


fputs($fo,'    ?>');

fclose($fo);
header('location:login_bodys.php?ppiinnss=253&joins='.$arrays_value__0[$xd_pin]);

}else{
header('location:login_bodys.php?ppiinnss=221');
}
}else{
header('location:login_bodys.php?ppiinnss=103');
}

}else{
header('location:login_bodys.php?ppiinnss=index3441_eorro');
}


}//end










if($power=='復活文章181'){

include('alls/add_184_all.php');
include('alls/add_184_alls.php');
$banks=new file_et;
if($num___184[$del_val-1000]==$del_val){
$fo=fopen('alls/add_184_all.php','w+');
fputs($fo,'<?   ');
//-------------------
$banks->file_puts($fo,$num___184,'$num___184');
$banks->file_puts($fo,$date_start___184,'$date_start___184');
$banks->file_puts($fo,$por___184,'$por___184');
$banks->file_puts($fo,$peo_num___184,'$peo_num___184');


//-----------------------沒動到的
$ips___184__s=$ips___184;
$end_ture__184__s=$end_ture__184;
$date_add__184__s=$date_add__184;
//--------
$ips___184__s[$del_val-1000]=$REMOTE_ADDR;
$end_ture__184__s[$del_val-1000]='[狀態]@顯示資料#';
$date_add__184__s[$del_val-1000]='復活時間:'.date('Y-m-d H:i:s');

$banks->file_puts($fo,$date_add__184__s,'$date_add__184');
$banks->file_puts($fo,$ips___184__s,'$ips___184');//要變
$banks->file_puts($fo,$end_ture__184__s,'$end_ture__184');//要變
fputs($fo,'    ?>');
fclose($fo);

header('location:login_bodys.php?ppiinnss=165&joins='.$por___184[$del_val-1000]);
}else{
header('location:login_bodys.php?ppiinnss=103');
}//判定是否是正確的網頁路徑
}



if($power=='刪除文章181'){
include('alls/add_184_all.php');
include('alls/add_184_alls.php');
$banks=new file_et;


if($num___184[$poioq-1000]==$poioq){
$fo=fopen('alls/add_184_all.php','w+');
fputs($fo,'<?   ');
//-------------------
$banks->file_puts($fo,$num___184,'$num___184');
$banks->file_puts($fo,$date_start___184,'$date_start___184');
$banks->file_puts($fo,$por___184,'$por___184');
$banks->file_puts($fo,$peo_num___184,'$peo_num___184');


//-----------------------沒動到的
$ips___184__s=$ips___184;
$end_ture__184__s=$end_ture__184;
$date_add__184__s=$date_add__184;
//--------
$ips___184__s[$poioq-1000]=$REMOTE_ADDR;
$end_ture__184__s[$poioq-1000]='[狀態]@資料刪除中#';
$date_add__184__s[$poioq-1000]=(date('Ymd')+3);

$banks->file_puts($fo,$date_add__184__s,'$date_add__184');
$banks->file_puts($fo,$ips___184__s,'$ips___184');//要變
$banks->file_puts($fo,$end_ture__184__s,'$end_ture__184');//要變
fputs($fo,'    ?>');
fclose($fo);



$fo=fopen('alls/add_184_alls.php','w+');
fputs($fo,'<?   ');
$banks->file_puts($fo,$title___184,'$title___184');
$banks->file_puts($fo,$body___184,'$body___184');//

$date_now___184ss=$date_now___184;
$date_now___184ss[$poioq-1000]=date('Y-m-d H:i:s');
$banks->file_puts($fo,$date_now___184ss,'$date_now___184');//要變
fputs($fo,'    ?>');
fclose($fo);

header('location:login_bodys.php?ppiinnss=167&joins='.$por___184[$poioq-1000]);
}else{
header('location:login_bodys.php?ppiinnss=103');
}//判定是否是正確的網頁路徑
}








if($power=='編輯文章181'){
include('alls/add_121_a.php');
include('alls/add_184_all.php');
include('alls/add_184_alls.php');
for($i=0;$i<(count($arrays_value__0));$i++){
if($arrays_value__0[$i]==$por){
$por___ok='true';
}//end
}//end 驗證是否有這個資料

//**********1個是千位編號  1個是出自編號
if($num___184[$pins-1000]==$pins && $por___ok=='true'){
$banks=new file_et;
$mysqlss=new mysql_et;
$bodys=$mysqlss->str_re($bodys);
$titles=$mysqlss->str_re($titles);

if(strlen($titles)<=35 && strlen($titles)>=2 && strlen($bodys)<=7500  && strlen($bodys)>=5 ){
$fo=fopen('alls/add_184_all.php','w+');

//**********
$num___184__x=$num___184;
$date_start___184__x=$date_start___184;
$por___184__x=$por___184;
$ips___184__x=$ips___184;
$peo_num___184__x=$peo_num___184;
$date_add__184__x=$date_add__184;
$end_ture__184__x=$end_ture__184;
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
$num___184__x;//無 編號
$date_start___184__x;
$por___184__x[$pins-1000]=$por;//有 出自哪個分類
$ips___184__x[$pins-1000]=$REMOTE_ADDR;//有 IP位址
$peo_num___184__x;//無 人氣
$date_add__184__x;//無 這是刪除資料時  緩衝期
$end_ture__184__x;//無 開關
//**********
fputs($fo,'<?   ');
$banks->file_puts($fo,$num___184__x,'$num___184');
$banks->file_puts($fo,$date_start___184__x,'$date_start___184');
$banks->file_puts($fo,$por___184__x,'$por___184');
$banks->file_puts($fo,$ips___184__x,'$ips___184');
$banks->file_puts($fo,$peo_num___184__x,'$peo_num___184');
$banks->file_puts($fo,$date_add__184__x,'$date_add__184');
$banks->file_puts($fo,$end_ture__184__x,'$end_ture__184');
//-----------------------
fputs($fo,'    ?>');
fclose($fo);



$fo=fopen('alls/add_184_alls.php','w+');

//**********
$date_now___184__x=$date_now___184;
$title___184__x=$title___184;
$body___184__x=$body___184;
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
$date_now___184__x[$pins-1000]=date("Y-m-d H:i:s");//有 更新時間
$title___184__x[$pins-1000]=$titles;//有 標題
$body___184__x[$pins-1000]=$bodys;//有 內容
//**********
fputs($fo,'<?   ');

$banks->file_puts($fo,$date_now___184__x,'$date_now___184');
$banks->file_puts($fo,$title___184__x,'$title___184');
$banks->file_puts($fo,$body___184__x,'$body___184');
//-----------------------
fputs($fo,'    ?>');
fclose($fo);

header('location:login_bodys.php?ppiinnss=166&joins='.$por___184__x[$pins-1000]);
}else{
header('location:login_bodys.php?ppiinnss=105');
}//判定字元數目 對不對
}else{
header('location:login_bodys.php?ppiinnss=103');
}//判定是否從正確的網頁進入
}



if($power=='新增儲存樣版'){
include('alls/add_293_all.php');
include('alls/293_css.h');
$str_replace_et=new mysql_et;
$cools_name=$str_replace_et->str_re($cools_name);
if(strlen($cools_name)<40 && strlen($cools_name)>2 ){
$fo=fopen('alls/add_293_all.php',"w+");
$banks=new file_et;
fputs($fo,'<?   ');
//----
$nums__pin=count($this__cools293ipin);
$this__cools293ipin[$nums__pin]=($nums__pin+500);//流水號   
$this__cools293iname[$nums__pin]=$cools_name;//樣版名稱
$this__cools293ititle[$nums__pin]='images/title_img.gif';//樣版名稱
for($i=0;$i<count($this__css_98array_value);$i++){
if($cools_style==$this__css_98array_value[$i]){
$this__cools293icss2[$nums__pin]=$this__css_98array_value[$i];//套用於哪種樣版 可做還原css
$this__cools293icss[$nums__pin]=$this__css_98array_css[$i];//套用於哪種樣版 可做還原css
$this__cools293itext[$nums__pin]=$this__css_98array_text[$i];//解說樣版狀態自己可修改
$this__cools293ixp[$nums__pin]='';//插版
}
}//假如傳過來的直 等於樣版裡的直 就寫給他正確的css存進去
//-------
$banks->file_puts($fo,$this__cools293ipin,'$this__cools293ipin');
$banks->file_puts($fo,$this__cools293iname,'$this__cools293iname');
$banks->file_puts($fo,$this__cools293icss2,'$this__cools293icss2');
$banks->file_puts($fo,$this__cools293icss,'$this__cools293icss');
$banks->file_puts($fo,$this__cools293ititle,'$this__cools293ititle');
$banks->file_puts($fo,$this__cools293ixp,'$this__cools293ixp');
$banks->file_puts($fo,$this__cools293itext,'$this__cools293itext');
fputs($fo,'    ?>');
fclose($fo);

header('location:login_bodys.php?ppiinnss=323');
}else{
header('location:login_bodys.php?ppiinnss=3128');
}
}



if($power=='修改儲存樣版'){
include('alls/add_293_all.php');

$str_replace_et=new mysql_et;
$k_name=$str_replace_et->str_re($k_name);
$k_title=$str_replace_et->str_re($k_title);
$k_css=$str_replace_et->str_re($k_css);
$k_say=$str_replace_et->str_re($k_say);
$k_xp=$str_replace_et->str_re($k_xp);
//***************************** 
if(strlen($k_css)<8000 && strlen($k_say)<8000 && strlen($k_xp)<8000 && strlen($k_name)<50 && strlen($k_name)>2 && strlen($k_title)<300){
$fo=fopen('alls/add_293_all.php',"w+");
$banks=new file_et;
fputs($fo,'<?   ');
$nums__pin=($num_pins-500);
$this__cools293iname[$nums__pin]=$k_name;//樣版名稱
$this__cools293ititle[$nums__pin]=$k_title;//樣版名稱
$this__cools293icss[$nums__pin]=$k_css;//套用於哪種樣版 可做還原css
$this__cools293itext[$nums__pin]=$k_say;//解說樣版狀態自己可修改
$this__cools293ixp[$nums__pin]=$k_xp;//插版
//----
$banks->file_puts($fo,$this__cools293ipin,'$this__cools293ipin');//不用
$banks->file_puts($fo,$this__cools293iname,'$this__cools293iname');
$banks->file_puts($fo,$this__cools293icss2,'$this__cools293icss2');//不用
$banks->file_puts($fo,$this__cools293icss,'$this__cools293icss');
$banks->file_puts($fo,$this__cools293ititle,'$this__cools293ititle');
$banks->file_puts($fo,$this__cools293itext,'$this__cools293itext');
$banks->file_puts($fo,$this__cools293ixp,'$this__cools293ixp');
//-----------------------
fputs($fo,'    ?>');
fclose($fo);
header('location:login_bodys.php?ppiinnss=324');
}else{
header('location:login_bodys.php?ppiinnss=index3441_eorro');
}
}

if($power=='套用樣版'){

$fo=fopen('alls/add_293_alls.php',"w+");
fputs($fo,'<?   ');
//----

$word_put='
$nums__checked="'.$checks.'";
';
fputs($fo,$word_put);

fputs($fo,'    ?>');

fclose($fo);


header('location:login_bodys.php?ppiinnss=326');
}


if($power=='修改個人資料'){
$str_replace_et=new mysql_et;




$name___443=$str_replace_et->str_re($name___443);
$boy__443=$str_replace_et->str_re($boy__443);
$name___443_2000=$str_replace_et->str_re($name___443_2000);
$name___443_12=$str_replace_et->str_re($name___443_12);
$name___443_31=$str_replace_et->str_re($name___443_31);
$star___443=$str_replace_et->str_re($star___443);
$merry___443=$str_replace_et->str_re($merry___443);
$int___443=$str_replace_et->str_re($int___443);
$dri___443=$str_replace_et->str_re($dri___443);
$myimg___443=$str_replace_et->str_re($myimg___443);
$img___443=$str_replace_et->str_re($img___443);
$love___443=$str_replace_et->str_re($love___443);
$hates___443=$str_replace_et->str_re($hates___443);
$pho___443=$str_replace_et->str_re($pho___443);

$loves___443=$str_replace_et->str_re($loves___443);
$hate___443=$str_replace_et->str_re($hate___443);

if($name___443!='' &&  strlen($hate___443)<3000){


$fo=fopen('alls/add_443_alls.php',"w+");
fputs($fo,'<?   ');
//----

$word_put='
$name__444='."'".$name___443."';
";
fputs($fo,$word_put);
//------暱稱
$word_put='
$boy__444='."'".$boy__443."';
";
fputs($fo,$word_put);
//------暱稱
$word_put='
$bir__444_2000='."'".$name___443_2000."';
";
fputs($fo,$word_put);
//------西元
$word_put='
$bir__444_12='."'".$name___443_12."';
";
fputs($fo,$word_put);
//------月
$word_put='
$bir__444_31='."'".$name___443_31."';
";
fputs($fo,$word_put);
//------日
$word_put='
$star__444='."'".$star___443."';
";
fputs($fo,$word_put);
//------星座
$word_put='
$o__444='."'".$o___443."';
";
fputs($fo,$word_put);
//------血型
$word_put='
$merry__444='."'".$merry___443."';
";
fputs($fo,$word_put);
//------婚姻
$word_put='
$int__444='."'".$int___443."';
";
fputs($fo,$word_put);
//------興趣
$word_put='
$dri__444='."'".$dri___443."';
";//------夢想
fputs($fo,$word_put);
$word_put='
$myimg__444='."'".$myimg___443."';
";//------自拍
fputs($fo,$word_put);
$word_put='
$img__444='."'".$img___443."';
";//------圖片
fputs($fo,$word_put);
$word_put='
$love__444='."'".$love___443."';
";//------最愛
fputs($fo,$word_put);
$word_put='
$hate__444='."'".$hate___443."';
";//------討厭
fputs($fo,$word_put);
$word_put='
$loves__444='."'".$loves___443."';
";//------最愛的事
fputs($fo,$word_put);
$word_put='
$hates__444='."'".$hates___443."';
";//------討厭的事
fputs($fo,$word_put);
$word_put='
$pho__444='."'".$pho___443."';
";//------線上聯絡方式
fputs($fo,$word_put);
fputs($fo,'    ?>');

fclose($fo);

header('location:login_bodys.php?ppiinnss=475');
}else{
header('location:login_bodys.php?ppiinnss=d1231r3');
}
}


if($power=='修改密碼a'){
include("login___fun.php");
include("alls/pass.php");

$pass_pass=pass_chan($passs);
if($pass_____p==$pass_pass){
header('location:login_bodys.php?ppiinnss=339');
}else{
header('location:login_bodys.php?ppiinnss=340');
}
}

if($power=='更新密碼a'){
if($REMOTE_ADDR=="127.0.0.1"){
if($newpass1==$newpass2){

include("login___fun.php");
include("alls/pass.php");
$newpass1=pass_chan($newpass1);
if($newpass1!='' && strlen($newpass2)>=6 && strlen($newpass2)<=12){
$of=fopen("alls/pass.php",'w+');

fputs($of,'<?  ');
$vale='
$pass_____p="'.$newpass1.'";
';
fputs($of,$vale);
$vale='
$word_____p="'.$word_____p.'";
';
fputs($of,$vale);
fputs($of,'  ?>');
fclose($of);
$banks=new file_et;

include("alls/bug_.php");
$bug___ip_u[count($bug___ip_u)]=$REMOTE_ADDR;
$bug___word_u[count($bug___word_u)]='-更改密碼-';
$bug___time_u[count($bug___time_u)]=date("m/d H:i");
$of=fopen("alls/bug_.php","w+");
fputs($of,'<?  ');
$banks->file_puts($of,$bug___ip_u,'$bug___ip_u');
$banks->file_puts($of,$bug___word_u,'$bug___word_u');
$banks->file_puts($of,$bug___time_u,'$bug___time_u');
fputs($of,'  ?>');
fclose($of);



header('location:login_bodys.php?ppiinnss=345');
}else{
header('location:login_bodys.php?ppiinnss=343');
}//字元數正不正確

}else{
header('location:login_bodys.php?ppiinnss=342');
}//二者密碼

}else{
header('location:login_bodys.php?ppiinnss=341');
}//判定是否是本機電腦
}//end





if($power=='更改blog中心'){
$files=new mysql_et;
$blog_name__1=$files->str_re($blog_name__1);
$trues__1=$files->str_re($trues__1);
$local__1=$files->str_re($local__1);


$of=fopen("alls/add_423_all.php","w+");
fputs($of,'<?  
');

$word='$win__blog_name="'.$blog_name__1.'";
';
fputs($of,$word);
$word='$win__blog_true="'.$trues__1.'";
';
fputs($of,$word);
$word='$win__blog_localhost="'.$local__1.'";
';
fputs($of,$word);


fputs($of,'  ?>');

header('location:login_bodys.php?ppiinnss=591');
}




if($power=='編輯討論版a'){
include('alls/add_121_a.php');
$fo=fopen('alls/add_121_a.php',"w+");
$banks=new file_et;
fputs($fo,'<?   ');
//***************************** 
$banks->file_puts($fo,$arrays_value__0,'$arrays_value__0');//不用
$banks->file_puts($fo,$arrays_value__1,'$arrays_value__1');
$banks->file_puts($fo,$arrays_value__2,'$arrays_value__2');
$banks->file_puts($fo,$arrays_value__end,'$arrays_value__end');
$banks->file_putssaa1($fo,$arrays_value__action,'$arrays_value__action');
//*****************************
//=============
$str_replace_et=new mysql_et;
$bodys=$str_replace_et->str_re($bodys);
//=============
$arrays_value__actions[$pins]=$bodys;
$banks->file_puts($fo,$arrays_value__actions,'$arrays_value__actions');//需要改變
fputs($fo,'  ?>');
header('location:login_bodys.php?ppiinnss=283&check__se='.($pins+100));
}

if($power=='修改留言內容'){
include('alls/add_borads.php');
$fo=fopen('alls/add_borads.php',"w+");
$banks=new file_et;
fputs($fo,'<?   ');
//=============
$str_replace_et=new mysql_et;
$body_go=$str_replace_et->str_re($body_go);
//=============
//***************************** 
for($i=0;$i<count($array_borads__num_pass);$i++){
if($vals_1==$array_borads__num_pass[$i]){
$array_borads__body[$i]=$body_go;
$local=$array_borads__num[$i];
}
}//for
$banks->file_puts($fo,$array_borads__num,'$array_borads__num');//不用
$banks->file_puts($fo,$array_borads__num_pass,'$array_borads__num_pass');
$banks->file_puts($fo,$array_borads__name,'$array_borads__name');//不用
$banks->file_puts($fo,$array_borads__boy,'$array_borads__boy');//不用
$banks->file_puts($fo,$array_borads__color,'$array_borads__color');//不用
$banks->file_puts($fo,$array_borads__date,'$array_borads__date');
$banks->file_puts($fo,$array_borads__ip,'$array_borads__ip');//不用
$banks->file_puts($fo,$array_borads__img,'$array_borads__img');//不用
$banks->file_puts($fo,$array_borads__body,'$array_borads__body');//需要
fputs($fo,'  ?>');
header('location:login_bodys.php?ppiinnss=2392&check__se='.$local);
}//修改留言內容



if($power=='刪除個人信件'){
include('alls/add_mycool.php');
$fo=fopen('alls/add_mycool.php',"w+");
$banks=new file_et;
fputs($fo,'<?   ');
//***************************** 
for($i=0;$i<count($cool__99num);$i++){
if($vals__pin==$cool__99num[$i]){
$cool__99name[$i]='';
$cool__99num[$i]='@已刪除#';
$cool__99boy[$i]='';
$cool__99title[$i]='';
$cool__99body[$i]='';
$cool__99ip[$i]='';
$cool__99date[$i]='';
$cool__99true[$i]='';
}
}//for
$banks->file_puts($fo,$cool__99name,'$cool__99name');//不用
$banks->file_puts($fo,$cool__99num,'$cool__99num');
$banks->file_puts($fo,$cool__99boy,'$cool__99boy');//不用
$banks->file_puts($fo,$cool__99title,'$cool__99title');//不用
$banks->file_puts($fo,$cool__99body,'$cool__99body');//不用
$banks->file_puts($fo,$cool__99ip,'$cool__99ip');
$banks->file_puts($fo,$cool__99date,'$cool__99date');//不用
$banks->file_puts($fo,$cool__99true,'$cool__99true');//不用

fputs($fo,'  ?>');
fclose($fo);
header('location:login_bodys.php?ppiinnss=538');
}





if($power=='修改插版'){
include('alls/add_g_img.php');
$banks=new file_et;
$str_replace_et=new mysql_et;
$k_xp=$str_replace_et->str_re($k_xp);
$k_css=$str_replace_et->str_re($k_css);
$k_say=$str_replace_et->str_re($k_say);
if(strlen($k_say)<8000 && strlen($k_xp)<8000 && strlen($k_css)<8000){
$fo=fopen('alls/add_g_img.php',"w+");

fputs($fo,'<?   ');
//***************************** 
$g_img__Qa[$vals]=$k_say;
if($chan1=='1'){
$chan1='1';
}else{
$chan1='0';
}
if($chan2=='1'){
$chan2='1';
}else{
$chan2='0';
}
if($chan3=='1'){
$chan3='1';
}else{
$chan3='0';
}
if($chan4=='1'){
$chan4='1';
}else{
$chan4='0';
}
$g_img__a1[$vals]=$chan1;
$g_img__a2[$vals]=$chan2;
$g_img__a3[$vals]=$chan3;
$g_img__a4[$vals]=$chan4;
$g_img__gos[$vals]=$k_xp;
$g_img__css[$vals]=$k_css;

$banks->file_puts($fo,$g_img__num,'$g_img__num');//不用
$banks->file_puts($fo,$g_img__Qa,'$g_img__Qa');
$banks->file_puts($fo,$g_img__a1,'$g_img__a1');
$banks->file_puts($fo,$g_img__a2,'$g_img__a2');
$banks->file_puts($fo,$g_img__a3,'$g_img__a3');
$banks->file_puts($fo,$g_img__a4,'$g_img__a4');
$banks->file_puts($fo,$g_img__gos,'$g_img__gos');
$banks->file_puts($fo,$g_img__css,'$g_img__css');

fputs($fo,'  ?>');
fclose($fo);
header('location:login_bodys.php?ppiinnss=3453&check_se='.($vals+100));
}else{
header('location:login_bodys.php?ppiinnss=index3441_eorro');
}
}


?>






<?php

}else{
echo '無法登入';
}
?>





