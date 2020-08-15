<?

include('alls/date_login.php');
if($____login_time>date("YmdHis") && $____login_ip==$REMOTE_ADDR){

//判定是否給予進入
?>

<?
if($del___val=='912'){
include('alls/add_borads.php');
include('all_function.php');
for($i=0;$i<count($array_borads__num_pass);$i++){
if($array_borads__num_pass[$i]==$this_val){
$check_se1=$array_borads__num[$i];
$array_borads__num[$i]='';
$array_borads__num_pass[$i]='@已刪除此留言#';
$array_borads__name[$i]='';
$array_borads__boy[$i]='';
$array_borads__color[$i]='';
$array_borads__date[$i]='';
$array_borads__ip[$i]='';
$array_borads__img[$i]='';
$array_borads__body[$i]='';


$fo=fopen('alls/add_borads.php',"w+");
$banks=new file_et;
fputs($fo,'<?   ');
//***************************** 
$banks->file_puts($fo,$array_borads__num,'$array_borads__num');//不用
$banks->file_puts($fo,$array_borads__num_pass,'$array_borads__num_pass');
$banks->file_puts($fo,$array_borads__name,'$array_borads__name');//不用
$banks->file_puts($fo,$array_borads__boy,'$array_borads__boy');
$banks->file_puts($fo,$array_borads__color,'$array_borads__color');//不用
$banks->file_puts($fo,$array_borads__date,'$array_borads__date');
$banks->file_puts($fo,$array_borads__ip,'$array_borads__ip');//不用
$banks->file_puts($fo,$array_borads__img,'$array_borads__img');
$banks->file_puts($fo,$array_borads__body,'$array_borads__body');//不用
fputs($fo,'   ?>');
header('location:login_bodys.php?ppiinnss=2291&check_se='.$check_se1);
}//if
}//for
}//end 刪除此留言 並且回到







if($del___val=='927' && $REMOTE_ADDR=="127.0.0.1"){
include('alls/add_thisword.php');
include('all_function.php');


for($i=0;$i<(count($add__thisword__pass));$i++){
if($add__thisword__pass[$i]==$pins_val){
$check_se11=$add__thisword__nums[$i];
$check_se22=$add__thisword__num[$i];
$fo=fopen('alls/add_thisword.php',"w+");
$add__thisword__num[$i]='';
$add__thisword__nums[$i]='';
$add__thisword__pass[$i]='@已刪除#';
$add__thisword__name[$i]='';
$add__thisword__body[$i]='';
$add__thisword__date[$i]='';
$add__thisword__ip[$i]='';
$banks=new file_et;
fputs($fo,'<?   ');
//***************************** 
$banks->file_puts($fo,$add__thisword__num,'$add__thisword__num');//不用
$banks->file_puts($fo,$add__thisword__nums,'$add__thisword__nums');
$banks->file_puts($fo,$add__thisword__pass,'$add__thisword__pass');//不用
$banks->file_puts($fo,$add__thisword__name,'$add__thisword__name');
$banks->file_puts($fo,$add__thisword__body,'$add__thisword__body');//不用
$banks->file_puts($fo,$add__thisword__date,'$add__thisword__date');
$banks->file_puts($fo,$add__thisword__ip,'$add__thisword__ip');//不用
fputs($fo,'   ?>');
}//if
}//for

header('location:login_bodys.php?ppiinnss=2292&vals='.$check_se11.'&check_se='.$check_se22);
}











if($del___val=='add_word'){
include('free/download98.js');
include('all_function.php');
$blik=new file_et;





include('alls/add_121_a.php');
//**************************************
$of=fopen('alls/add_121_a.php','w+');
$numsx1=count($arrays_value__0);
$arrays_value__0[$numsx1]=($numsx1+100);
$arrays_value__1[$numsx1]='No';
$arrays_value__2[$numsx1]=$array_download_name;
$arrays_value__end[$numsx1]='@無刪除#';
$arrays_value__action[$numsx1][0]='0';
$arrays_value__action[$numsx1][1]='0';
$arrays_value__action[$numsx1][2]='0';
$arrays_value__action[$numsx1][3]='0';
$arrays_value__action[$numsx1][4]='0';
$arrays_value__action[$numsx1][5]='0';
$arrays_value__action[$numsx1][6]='0';
$arrays_value__action[$numsx1][7]='0';
$arrays_value__action[$numsx1][8]='0';
$arrays_value__action[$numsx1][9]='';
$arrays_value__actions[$numsx1]='';
fputs($of,'<? 
');
$blik->file_puts($of,$arrays_value__0,'$arrays_value__0');
$blik->file_puts($of,$arrays_value__1,'$arrays_value__1');
$blik->file_puts($of,$arrays_value__2,'$arrays_value__2');
$blik->file_puts($of,$arrays_value__end,'$arrays_value__end');
$blik->file_putssa($of,$arrays_value__action,'$arrays_value__action');
$blik->file_puts($of,$arrays_value__actions,'$arrays_value__actions');
fputs($of,'
?>');





include('alls/add_184_all.php');
//**************************************
$of=fopen('alls/add_184_all.php','w+');
$numsx2=count($num___184);
for($i=0;$i<(count($array_download98_title));$i++){
$num___184[$numsx2]=($numsx2+1000);
$date_start___184[$numsx2]=$array_download98_date[$i];
$por___184[$numsx2]=(100+$numsx1);
$peo_num___184[$numsx2]='0';
$date_add__184[$numsx2]='';
$ips___184[$numsx2]='';
$end_ture__184[$numsx2]='[狀態]@顯示資料#';
$numsx2++;
}//for
fputs($of,'<?
');
$blik->file_puts($of,$num___184,'$num___184');
$blik->file_puts($of,$date_start___184,'$date_start___184');
$blik->file_puts($of,$por___184,'$por___184');
$blik->file_puts($of,$peo_num___184,'$peo_num___184');
$blik->file_puts($of,$date_add__184,'$date_add__184');
$blik->file_puts($of,$ips___184,'$ips___184');
$blik->file_puts($of,$end_ture__184,'$end_ture__184');
fputs($of,'
?>');


include('alls/add_184_alls.php');
//**************************************
$of=fopen('alls/add_184_alls.php','w+');
$numsx2=count($title___184);
for($i=0;$i<(count($array_download98_title));$i++){
$date_now___184[$numsx2]=$array_download98_now[$i];
$title___184[$numsx2]=$array_download98_title[$i];
$body___184[$numsx2]=$array_download98_body[$i];
$numsx2++;
}//for

fputs($of,'<?
');
$blik->file_puts($of,$date_now___184,'$date_now___184');
$blik->file_puts($of,$title___184,'$title___184');
$blik->file_puts($of,$body___184,'$body___184');
fputs($of,'
?>');








//**************************************
include('alls/add_g_img.php');

$numsx3=count($g_img__num);
$g_img__num[$numsx3]=($numsx3+100);
$g_img__Qa[$numsx3]='';
$g_img__a1[$numsx3]='0';
$g_img__a2[$numsx3]='0';
$g_img__a3[$numsx3]='0';
$g_img__a4[$numsx3]='0';
$g_img__gos[$numsx3]='';
$g_img__css[$numsx3]='';
$of=fopen('alls/add_g_img.php','w+');
fputs($of,'<?
');
$blik->file_puts($of,$g_img__num,'$g_img__num');
$blik->file_puts($of,$g_img__Qa,'$g_img__Qa');
$blik->file_puts($of,$g_img__a1,'$g_img__a1');
$blik->file_puts($of,$g_img__a2,'$g_img__a2');
$blik->file_puts($of,$g_img__a3,'$g_img__a3');
$blik->file_puts($of,$g_img__a4,'$g_img__a4');
$blik->file_puts($of,$g_img__gos,'$g_img__gos');
$blik->file_puts($of,$g_img__css,'$g_img__css');
fputs($of,'
?>');


//**************************************
include('alls/add_borad_css.php');
$css_all_array[$numsx3]='
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

$this_borad_p1_name[$numsx3]='手刀';//圖片名稱
$this_borad_p2_name[$numsx3]='無言';
$this_borad_p3_name[$numsx3]='哭泣';
$this_borad_p4_name[$numsx3]='高興';
$this_borad_p5_name[$numsx3]='親吻';
$this_borad_p6_name[$numsx3]='去~';
$this_borad_p1_url[$numsx3]='images/img1.gif';
$this_borad_p2_url[$numsx3]='images/img2.gif';
$this_borad_p3_url[$numsx3]='images/img3.gif';
$this_borad_p4_url[$numsx3]='images/img4.gif';
$this_borad_p5_url[$numsx3]='images/img5.gif';
$this_borad_p6_url[$numsx3]='images/img6.gif';

$say__text_word[$numsx3]='留言版規定';

$of=fopen('alls/add_borad_css.php','w+');
fputs($of,'<?
');
$blik->file_puts($of,$css_all_array,'$css_all_array');
$blik->file_puts($of,$this_borad_p1_name,'$this_borad_p1_name');
$blik->file_puts($of,$this_borad_p2_name,'$this_borad_p2_name');
$blik->file_puts($of,$this_borad_p3_name,'$this_borad_p3_name');
$blik->file_puts($of,$this_borad_p4_name,'$this_borad_p4_name');
$blik->file_puts($of,$this_borad_p5_name,'$this_borad_p5_name');
$blik->file_puts($of,$this_borad_p6_name,'$this_borad_p6_name');
$blik->file_puts($of,$this_borad_p1_url,'$this_borad_p1_url');
$blik->file_puts($of,$this_borad_p2_url,'$this_borad_p2_url');
$blik->file_puts($of,$this_borad_p3_url,'$this_borad_p3_url');
$blik->file_puts($of,$this_borad_p4_url,'$this_borad_p4_url');
$blik->file_puts($of,$this_borad_p5_url,'$this_borad_p5_url');
$blik->file_puts($of,$this_borad_p6_url,'$this_borad_p6_url');
$blik->file_puts($of,$say__text_word,'$say__text_word');


fputs($of,'
?>');


@unlink('free/download98.js');
@unlink('alls/download98.js');

echo '<script>
alert("-安裝成功!-");
parent.lefts.location.href="login_pass.php";
location.replace("login_top.php");
</script>';
}

?>


<?
}else{

echo '無法完成';

}
?>