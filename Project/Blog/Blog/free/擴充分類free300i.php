<?
$free_fun_pin='349kail13O3V';





$this_pin_frees='get_me_down_now';//回應此ip 





$this__name__free='-匯出分類文章-';//創作人





$this__title__free='可以匯出您指定的分類內的文章 可做擴充分享動作';//標題






$this__fun__free='<br><br><br><form name="this_values" method="post" action="alls/free_form.php">
  <table width="250" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><div align="right">
          <input type="submit"  value="匯出">
		  <input type="hidden" name="xp_qrb" value="9999" >
      </div></td>
    </tr>
  </table>
  <input type="hidden"  name="this_form_change" value="get_me_down_now">
</form>';//給予表單



$this__form__free='
if($xp_qrb!="9999"){
include("add_121_a.php");
include("add_184_all.php");
include("add_184_alls.php");
include("add_443_alls.php");
$blank2=new file_et;
$of=fopen("download98.js","w+");
$ij=0;

$array_download_who=$name__444;
for($i=0;$i<count($arrays_value__0);$i++){
if($arrays_value__0[$i]==$xp_qrb){
$array_download_name=$arrays_value__2[$i];

for($j=0;$j<count($por___184);$j++){
if($por___184[$j]==$arrays_value__0[$i]){
$array_download98_title[$ij]=$title___184[$j];
$array_download98_body[$ij]=$body___184[$j];
$array_download98_now[$ij]=$date_now___184[$j];
$array_download98_date[$ij]=$date_start___184[$j];
$ij++;
}
}
$i=(count($arrays_value__0)+2);
}
}
fputs($of,"<?
");
fputs($of,'."'".'$array_download_pin="rightsnowp41"'.";
'".');

fputs($of,'."'".'$array_download_name='."'".'.'.'"'."'".'"'.'.$array_download_name.'.'"'."'".';
"'.');
fputs($of,'."'".'$array_download_who='."'".'.'.'"'."'".'"'.'.$array_download_who.'.'"'."'".';
"'.');

$blank2->file_puts($of,$array_download98_title,'."'".'$array_download98_title'."'".');
$blank2->file_puts($of,$array_download98_body,'."'".'$array_download98_body'."'".');
$blank2->file_puts($of,$array_download98_now,'."'".'$array_download98_now'."'".');
$blank2->file_puts($of,$array_download98_date,'."'".'$array_download98_date'."'".');

fputs($of,"
?>");

header("location:../login_bodys.php?ppiinnss=down_laods");

}else{
header("location:../login_bodys.php?ppiinnss=eorro_987");

}



';//怎樣做處理




?>