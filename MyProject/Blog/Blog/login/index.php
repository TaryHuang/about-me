<?
include('../alls/add_121_a.php');
include('../alls/add_184_all.php');
include('../alls/add_184_alls.php');
include('../alls/add_thisword.php');
include('../all_function.php');
$del__alls=new file_et;
for($i=0;$i<count($arrays_value__0);$i++){
if($arrays_value__end[$i]=='@刪除不顯示#'){


if($arrays_value__1[$i]<=date('Ymd')){

for($j=0;$j<count($num___184);$j++){
if($arrays_value__0[$i]==$por___184[$j]){
$date_start___184[$j]='';
$peo_num___184[$j]='';
$date_add__184[$j]='';
$ips___184[$j]='';
$end_ture__184[$j]='[狀態]@已刪除無法顯示#';


$title___184[$j]='';
$body___184[$j]='';
$date_now___184[$j]='';

for($j2=0;$j2<count($add__thisword__num);$j2++){
if($add__thisword__nums[$j2]==$num___184[$j]){
$add__thisword__num[$j2]='';
$add__thisword__pass[$j2]='@已刪除#';
$add__thisword__nums[$j2]='';
$add__thisword__name[$j2]='';
$add__thisword__body[$j2]='';
$add__thisword__date[$j2]='';
$add__thisword__ip[$j2]='';
}//判定是否是我要刪除的
}//刪除回文資料

}//判定資料是否是我要刪除的
}//刪除文章部份



$arrays_value__end[$i]='@已刪除無法顯示#';
$arrays_value__1[$i]='';
$arrays_value__2[$i]='';
$fo=fopen("../alls/add_121_a.php","w+");
fputs($fo,'<?   ');
$del__alls->file_puts($fo,$arrays_value__0,'$arrays_value__0');//無法變
$del__alls->file_puts($fo,$arrays_value__1,'$arrays_value__1');//無法變
$del__alls->file_puts($fo,$arrays_value__2,'$arrays_value__2');//無法變
$del__alls->file_puts($fo,$arrays_value__end,'$arrays_value__end');
$del__alls->file_puts($fo,$arrays_value__actions,'$arrays_value__actions');//無法變
$del__alls->file_putssa($fo,$arrays_value__action,'$arrays_value__action');//無法變
fputs($fo,' ?>');





$fo=fopen("../alls/add_184_all.php","w+");
fputs($fo,'<?   ');
$del__alls->file_puts($fo,$num___184,'$num___184');//無法變
$del__alls->file_puts($fo,$date_start___184,'$date_start___184');
$del__alls->file_puts($fo,$por___184,'$por___184');
$del__alls->file_puts($fo,$peo_num___184,'$peo_num___184');
$del__alls->file_puts($fo,$date_add__184,'$date_add__184');
$del__alls->file_puts($fo,$ips___184,'$ips___184');
$del__alls->file_puts($fo,$end_ture__184,'$end_ture__184');
fputs($fo,' ?>');






$fo=fopen("../alls/add_184_alls.php","w+");
fputs($fo,'<?   ');
$del__alls->file_puts($fo,$title___184,'$title___184');//無法變
$del__alls->file_puts($fo,$body___184,'$body___184');
$del__alls->file_puts($fo,$date_now___184,'$date_now___184');
fputs($fo,' ?>');





$fo=fopen("../alls/add_thisword.php","w+");
fputs($fo,'<?   ');
$del__alls->file_puts($fo,$add__thisword__num,'$add__thisword__num');//無法變
$del__alls->file_puts($fo,$add__thisword__nums,'$add__thisword__nums');
$del__alls->file_puts($fo,$add__thisword__pass,'$add__thisword__pass');
$del__alls->file_puts($fo,$add__thisword__name,'$add__thisword__name');//無法變
$del__alls->file_puts($fo,$add__thisword__body,'$add__thisword__body');
$del__alls->file_puts($fo,$add__thisword__date,'$add__thisword__date');
$del__alls->file_puts($fo,$add__thisword__ip,'$add__thisword__ip');
fputs($fo,' ?>');

}//現在時間
}//if
}//for
?>


<?




for($i=0;$i<count($arrays_value__0);$i++){
if($end_ture__184[$i]=='[狀態]@資料刪除中#'){
if($date_add__184[$i]<=date('Ymd')){


$pos_nums=$num___184[$i];


$date_start___184[$i]='';
$peo_num___184[$i]='';
$date_add__184[$i]='';
$ips___184[$i]='';
$end_ture__184[$i]='[狀態]@已刪除無法顯示#';


$title___184[$i]='';
$body___184[$i]='';
$date_now___184[$i]='';


$fo=fopen("../alls/add_184_all.php","w+");
fputs($fo,'<?   ');
$del__alls->file_puts($fo,$num___184,'$num___184');//無法變
$del__alls->file_puts($fo,$date_start___184,'$date_start___184');
$del__alls->file_puts($fo,$por___184,'$por___184');
$del__alls->file_puts($fo,$peo_num___184,'$peo_num___184');
$del__alls->file_puts($fo,$date_add__184,'$date_add__184');
$del__alls->file_puts($fo,$ips___184,'$ips___184');
$del__alls->file_puts($fo,$end_ture__184,'$end_ture__184');
fputs($fo,' ?>');

$fo=fopen("../alls/add_184_alls.php","w+");
fputs($fo,'<?   ');
$del__alls->file_puts($fo,$title___184,'$title___184');//無法變
$del__alls->file_puts($fo,$body___184,'$body___184');
$del__alls->file_puts($fo,$date_now___184,'$date_now___184');
fputs($fo,' ?>');

for($j2=0;$j2<(count($add__thisword__num));$j2++){
if($add__thisword__nums[$j2]==$pos_nums){
$add__thisword__num[$j2]='';
$add__thisword__pass[$j2]='@已刪除#';
$add__thisword__nums[$j2]='';
$add__thisword__name[$j2]='';
$add__thisword__body[$j2]='';
$add__thisword__date[$j2]='';
$add__thisword__ip[$j2]='';
}
}//fo
$fo=fopen("../alls/add_thisword.php","w+");
fputs($fo,'<?   ');
$del__alls->file_puts($fo,$add__thisword__num,'$add__thisword__num');//無法變
$del__alls->file_puts($fo,$add__thisword__nums,'$add__thisword__nums');
$del__alls->file_puts($fo,$add__thisword__pass,'$add__thisword__pass');
$del__alls->file_puts($fo,$add__thisword__name,'$add__thisword__name');//無法變
$del__alls->file_puts($fo,$add__thisword__body,'$add__thisword__body');
$del__alls->file_puts($fo,$add__thisword__date,'$add__thisword__date');
$del__alls->file_puts($fo,$add__thisword__ip,'$add__thisword__ip');
fputs($fo,' ?>');





}//現在時間
}//if
}//for
?>


<?
@include('../free/free300i.php');
include('../alls/free.php');
if($free_fun_pin=='349kail13O3V'){
$__trues='false';
for($i=0;$i<count($later__is_free_pin);$i++){
if($later__is_free_pin[$i]==$this_pin_frees){
$__trues='true';
$__trues_num=$i;
$i=count($later__is_free_pin)+2;
}//if
}//for

//--------------------------上面寫完 是否有擴充過??

$blink=new file_et;




if($__trues=='true'){
$of=fopen('../alls/free.php','w+');
$later__is_free_true[$__trues_num]='1';
fputs($of,'<? 
');
$blink->file_puts($of,$later__is_free_pin,'$later__is_free_pin');
$blink->file_puts($of,$later__is_free_name,'$later__is_free_name');
$blink->file_puts($of,$later__is_free_true,'$later__is_free_true');
$blink->file_puts($of,$later__is_free_title,'$later__is_free_title');
fputs($of,'
?>');



}else{
include('../alls/free_table.php');
$of=fopen('../alls/free.php','w+');
$num___this=count($later__is_free_pin);

$later__is_free_pin[$num___this]=$this_pin_frees;
$later__is_free_name[$num___this]=$this__name__free;
$later__is_free_true[$num___this]='1';
$later__is_free_title[$num___this]=$this__title__free;


fputs($of,'<? 
');
$blink->file_puts($of,$later__is_free_pin,'$later__is_free_pin');
$blink->file_puts($of,$later__is_free_name,'$later__is_free_name');
$blink->file_puts($of,$later__is_free_true,'$later__is_free_true');
$blink->file_puts($of,$later__is_free_title,'$later__is_free_title');
fputs($of,'
?>');




$of=fopen('../alls/free_table.php','w+');//table


$num___this=count($table_array__table);
$table_array__table[$num___this]=$this__fun__free;
$table_array__pin[$num___this]=$this_pin_frees;
fputs($of,'<? 
');
$blink->file_puts($of,$table_array__pin,'$table_array__pin');
$blink->file_puts($of,$table_array__table,'$table_array__table');
fputs($of,'
?>');


$of=fopen('../alls/free_form.php','a+');//table
fputs($of,'

');
fputs($of,'<? 
       if($forms_pin_____=='."'".$this_pin_frees."'".'){
');
fputs($of,$this__form__free);
fputs($of,'
       }//***'.$this__title__free.'***
?>');



}//是否有安裝過此擴充檔


@unlink('../free/free300i.php');//table
}//end 是否等於擴充檔 不然有人亂擴充
//--擴充檔案 
?>
<?
@include('../alls/ip_no_value.php');
$ip____true_back='false';
for($i=0;$i<count($no_ip___ip);$i++){
if($REMOTE_ADDR==$no_ip___ip[$i]){
$ip____true_back='true';
$i=count($no_ip___ip)+2;
}
}
if($ip____true_back=='false' || $REMOTE_ADDR=='127.0.0.1'){
?>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
	color: #FFFFFF;
}
body {
	background-color: #333333;
	background-image: url(../images/login_bg.gif);
}
-->
</style>

<meta http-equiv="Content-Type" content="text/html; charset=big5">

<body scroll="no">
<div  style="position:absolute; left:84px; top:67px; width:529px; height:259px; z-index:-1;filter:progid:DXImageTransForm.Microsoft.Alpha(style=2); background-image: url(../images/login.jpg); layer-background-image: url(../images/login.jpg); border: 1px none #000000;">

<div id="log" style="position:absolute; left:177px; top:103px; width:185px; height:88px; z-index:5; overflow: visible;">
	<form  method="post" action="../l_o_g_i_n.php">
	  <div align="right">
	    <input name="submit" type="submit" style="font-size:12px"  value="登入">
      </div>
	  <table width="136" border="0" cellpadding="2" cellspacing="2">
      <tr>
        <td width="128" nowrap>帳號
          <input name="word_b" type="text" id="word_b" style="font-size:12px" size="10" maxlength="14"></td>
      </tr>
      <tr>
        <td nowrap>密碼
          <input name="pass_b" type="password" id="pass_b" style="font-size:12px" size="14" maxlength="12"></td>
      </tr>
      <tr>
        <td nowrap>紀錄
          <input name="time_cookie" type="radio" value="10" checked>
3小時
<input name="time_cookie" type="radio" value="60">
整天</td>
      </tr>
    </table>
<?
if($val=='back'){
echo '<input type="hidden" value="go_back" name="back">';
}
if($val=='back2'){
echo '<input type="hidden" value="out_join" name="back">';
}
?>	
    </form>
</div>
</div>
<div  style="position:absolute; left:190px; top:342px; width:304px; height:27px; z-index:6; overflow: visible;"> 版權 &copy; 收集者專用 ---請勿更改版權語及做商業用途--- </div>
</body>
<?
}else{
header('location:false');
}
?>