<?

include('alls/date_login.php');
if($____login_time>date("YmdHis") && $____login_ip==$REMOTE_ADDR){

//判定是否給予進入
?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
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
<style type="text/css">
<!--
body {
	SCROLLBAR-FACE-COLOR: #fcb400;
	SCROLLBAR-3DLIGHT-COLOR: #d8006c;
	SCROLLBAR-ARROW-COLOR: #d8fcfc;
}
body,td,th {
	font-size: 12px;
	color: #000000;
    
}
a:link {
	color: #6699FF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
	color: #990000;
}
a:active {
	text-decoration: none;
}

</style>
<link href="css/back.css" rel="stylesheet" type="text/css">
</head>
<body>

<?
include('all_function.php');
include('login___fun.php');

switch($ppiinnss){
case '':$pins___go='[資訊首頁]';break;//文章分類 [新增]
case '1':$pins___go='[編輯首頁]';break;//文章分類 [新增]
case '121':$pins___go='文章分類[新增]';break;//文章分類 [新增]
case '122':$pins___go='文章分類[新增重新整理]';break;//文章分類 [新增]
case '148':$pins___go='文章分類[編輯]';break;//文章分類 [編輯]
case '125':$pins___go='文章分類[編輯成功]';break;//文章分類 [修改分類]
case '149':$pins___go='文章分類[修改]';break;//文章分類 [修改分類]
case '103':$pins___go='文章分類[資料有誤]';break;//我的文章 [編輯]
case '184':$pins___go='我的文章[新增]';break;//我的文章 [新增]
case '179':$pins___go='我的文章[編輯]';break;//我的文章 [編輯]
case '104':$pins___go='我的文章[請選擇分類]';break;//我的文章 [編輯]
case '105':$pins___go='我的文章[您輸入的字元不正確]';break;//輸入的資料 低於
case '178':$pins___go='我的文章[編輯show]';break;//我的文章 [編輯]
case '171':$pins___go='我的文章[新增成功]';break;//我的文章 [編輯]
case '172':$pins___go='我的文章[編輯成功]';break;//我的文章 [編輯]
case '161':$pins___go='我的文章[編輯刪除]';break;//我的文章 [編輯]
case '162':$pins___go='我的文章[復活文章]';break;//我的文章 [編輯]
case '165':$pins___go='我的文章[復活文章181]';break;//我的文章 [編輯]
case '166':$pins___go='我的文章[編輯文章181]';break;//我的文章 [編輯]
case '168':$pins___go='我的文章[編輯文章181s]';break;//我的文章 [編輯]
case '167':$pins___go='我的文章[刪除文章181]';break;//我的文章 [編輯]
case 'ok2919':$pins___go='成功a刪除樣版';break;//我的文章 [編輯]
case '283':$pins___go='討論版__修正成功a';break;//我的文章 [編輯]
case '219':$pins___go='留言版[選擇]';break;//留言版 [資訊]
case '230':$pins___go='留言版[選擇_留言版]';break;//留言版 [資訊]
case '212':$pins___go='留言版[編輯]';break;//留言版 [資訊]
case '293':$pins___go='留言版[資訊]';break;//留言版 [編輯]
case '253':$pins___go='留言版[編輯成功]';break;//留言版 [編輯]
case '221':$pins___go='留言版[密碼字元不對]';break;//留言版 [資訊]
case '2291':$pins___go='留言版[刪除留言]';break;//留言版刪除
case '2392':$pins___go='留言版 修改成功a';break;//留言版 [資訊]
case 'index3451':$pins___go='首頁編輯成功a';break;//留言版 [資訊]
case 'index3441_eorro':$pins___go='首頁字元太多a';break;//留言版 [資訊]
case '2318':$pins___go='留言版[修改內容成功]';break;//留言版刪除
case '2292':$pins___go='回覆[成功]';break;//留言版刪除
case '312':$pins___go='儲存樣板[儲存]';break;
case '315':$pins___go='儲存樣板[編輯]';break;
case '318':$pins___go='儲存樣板[修改]';break;
case '319':$pins___go='儲存樣板[套用]';break;
case '323':$pins___go='儲存樣板[儲存]成功a';break;
case '324':$pins___go='儲存樣板[儲存]編輯a';break;
case '326':$pins___go='儲存樣板[儲存]套用a';break;
case 'eorro_987':$pins___go='擴充程式有誤';break;
case 'ok___987':$pins___go='擴充程式成功a';break;
case '327':$pins___go='留言版[選擇_討論區]';break;
case '328':$pins___go='留言版[選擇_插版]';break;
case '335':$pins___go='更改密碼a';break;
case '339':$pins___go='更改密碼[新]';break;
case '340':$pins___go='更改密碼錯誤';break;
case '341':$pins___go='更改密碼錯誤ip';break;
case '342':$pins___go='二者密碼不相同';break;
case '343':$pins___go='密碼字元不合';break;
case '345':$pins___go='密碼更改成功a';break;
case '3453':$pins___go='留言版_插版成功A';break;
case '3128':$pins___go='新增樣版_錯誤a';break;
case '434':$pins___go='個人資料';break;
case '475':$pins___go='個人資料[成功修改]a';break;
case '424':$pins___go='控制中心';break;
case '591':$pins___go='控制中心[changeOK]';break;
case '531':$pins___go='信箱系統';break;
case '535':$pins___go='信箱個人';break;
case '5358':$pins___go='成功刪除此信件a';break;
case '53318_chan':$pins___go='信箱系統內容a';break;
case 'down_laods':$pins___go='當匯出download時';break;
case 'd1231r3':$pins___go='個人資料有誤喔a';break;
case '535see':$pins___go='觀看個人信箱內容';break;
case '538':$pins___go='刪除信箱內容倒數';break;
default:$pins___go='與以上資料不合';
}//end 一百為限制
if($pins___go=='與以上資料不合'){
header('location:index.php');
}//end
?>
<div id="body" style="position:absolute; left:5px; top:38px; width:667px; height:385px; z-index:1; overflow: visible;">
  <table width="640"  border="0"  cellpadding="0" cellspacing="1" bordercolor="#000000" background="images/back__bg.gif">
    <tr>
      <td  class="login_body2"><div class="login_body__body"> 
<br>
<br>
<?

if($pins___go=='當匯出download時'){
say__show_3('[ <a href="alls/download98.js"> Download </a>] 檔案<br>檔案可放在free資料夾中<br>-即可進行安裝模式-');
}



if($pins___go=='信箱系統內容a'){
include('alls/free_table.php');
for($i=0;$i<count($table_array__pin);$i++){
if($table_array__pin[$i]==$pin_table){

echo $table_array__table[$i];


if($pin_table=='get_me_down_now'){
include('alls/add_121_a.php');


echo '<form >匯出分類 <select onChange="document.this_values.xp_qrb.value=this.value">';
echo '<option value="9999" selected>請選擇</option>';
for($i=0;$i<count($arrays_value__0);$i++){
if($arrays_value__end[$i]=='@無刪除#'){
echo '<option value="'.$arrays_value__0[$i].'" >'.$arrays_value__2[$i].'</option>';
}//if
}//for
echo '</select></form>';
}

if($pin_table=='chat_p_alls_down'){
@include('free/chat/database/key_in.php');

$of=fopen("free/chat/database/key_in.php","w+");
fputs($of,"<?  
");
fputs($of,'$key_true="'.$key_true.'";
');

fputs($of,'$key_ip__j1="'.$REMOTE_ADDR.'";
');
fputs($of,'$key_ip__j2="'.$key_ip__j2.'";
');
fputs($of,'$key_ip__j3="'.$key_ip__j3.'";
');
fputs($of,'$key_ip__j4="'.$key_ip__j4.'";
');
fputs($of,'$key_ip__j5="'.$key_ip__j5.'";
');
fputs($of,'$key_ip__j2_true="'.$key_ip__j2_true.'";
');
fputs($of,'$key_ip__j3_true="'.$key_ip__j3_true.'";
');
fputs($of,'$key_ip__j4_true="'.$key_ip__j4_true.'";
');
fputs($of,'$key_ip__j5_true="'.$key_ip__j5_true.'";
');
fputs($of,'$key_body_true="'.$key_body_true.'";
');
fputs($of,"  ?>");


if($key_true=='1'){
$key_true___x1='checked';
}else{
$key_true___x2='checked';
}
if($key_body_true=='1'){
$key_body_true___x1='checked';
}


if($key_ip__j2_true=='1'){
$key_ip__j2_true___x='checked';
}
if($key_ip__j3_true=='1'){
$key_ip__j3_true___x='checked';
}
if($key_ip__j4_true=='1'){
$key_ip__j4_true___x='checked';
}
if($key_ip__j5_true=='1'){
$key_ip__j5_true___x='checked';
}


echo '<form  method="post" action="alls/free_form.php">
<table width="200" border="0" cellspacing="1" cellpadding="1">
    <tr>
    <td>
      <div align="center">
        <input type="button" onClick=location.replace("free/chat/index.php") value="進入聊天室">
        </div></td>
  </tr>
        <tr>
    <td align="right">
      
        <input type="submit"  value="更新">
      </td>
  </tr>
        <tr>
    <td><div align="left">聊天室開關 : 
      開
        <input name="chat__data_true" type="radio" value="1" '.$key_true___x1.'>
        關
        <input name="chat__data_true" type="radio" value="0" '.$key_true___x2.'>
    </div>
      <div align="center"></div></td>
  </tr>
  <tr>
    <td>清除發言<input name="del_alls" type="checkbox" value="1"></td>
  </tr>
  <tr>
    <td><input name="chat_ip1_true" type="checkbox" id="chat_ip1_true" value="1" '.$key_ip__j2_true___x.'>
      ip :
      <input name="chat_ip1" type="text" id="chat_ip1" size="15" maxlength="15" value="'.$key_ip__j2.'"></td>
  </tr>
  <tr>
    <td><input name="chat_ip2_true" type="checkbox" id="this_true_15" value="1" '.$key_ip__j3_true___x.'>
ip :
  <input name="chat_ip2" type="text" id="chat_ip2" size="15" maxlength="15" value="'.$key_ip__j3.'"></td>
  </tr>
  <tr>
    <td><input name="chat_ip3_true" type="checkbox" id="this_true_16" value="1" '.$key_ip__j4_true___x.'>
ip :
  <input name="chat_ip3" type="text" id="chat_ip3" size="15" maxlength="15" value="'.$key_ip__j4.'"></td>
  </tr>
  <tr>
    <td><input name="chat_ip4_true" type="checkbox" id="this_true_17" value="1" '.$key_ip__j5_true___x.'>
ip :
  <input name="chat_ip4" type="text" id="chat_ip4" size="15" maxlength="15" value="'.$key_ip__j5.'"></td>
  </tr>
  <tr>
    <td>聊天輔助
      <input name="chat__text_true" type="checkbox" id="chat__text_true" value="1" '.$key_body_true___x1.'>
    公開    </td>
  </tr>
  <tr>
    <td align="center">

        <textarea name="text_body__1" cols="60" rows="10" wrap="VIRTUAL">';
$files=file('free/chat/database/key_broad.php');
for($i=0;$i<(count($files));$i++){
echo $files[$i];
}//end for		
echo '</textarea>
  </td>
  </tr>
    <tr>
    <td>-----記事本-----</td>
  </tr>
    <tr>
    <td align="center">

        <textarea name="text_body__2" cols="60" rows="5" wrap="VIRTUAL">';
@include('free/chat/database/broad__say.php');
echo $say____text_body9;			
echo '</textarea>
</td>
  </tr>
</table>


      <input type="hidden"  name="this_form_change" value="chat_p_alls_down">
</form>';
}

if($pin_table=='p_is_ip_say_hello'){
@include('alls/ob_ip_say_hello.php');

for($i=0;$i<count($ob_say_hello_ip);$i++){
if($ob_say_hello_del_time[$i]<=date('Ymd')){
$ob_say_hello_ip[$i]='';
$ob_say_hello_title[$i]='';
$ob_say_hello_body[$i]='';
$ob_say_hello_true[$i]='';
$ob_say_hello_date[$i]='';
$ob_say_hello_del_time[$i]='';
}
}//end for
$blink=new file_et;
$of=fopen("alls/ob_ip_say_hello.php","w+");
fputs($of,"<?
");
$blink->file_puts($of,$ob_say_hello_ip,'$ob_say_hello_ip');//IP
$blink->file_puts($of,$ob_say_hello_title,'$ob_say_hello_title');//標題
$blink->file_puts($of,$ob_say_hello_body,'$ob_say_hello_body');//內容
$blink->file_puts($of,$ob_say_hello_true,'$ob_say_hello_true');//是否被開啟
$blink->file_puts($of,$ob_say_hello_date,'$ob_say_hello_date');//日期
$blink->file_puts($of,$ob_say_hello_del_time,'$ob_say_hello_del_time');//幾天後刪除
fputs($of,"
?>");




echo '<table width="600" border="1" cellspacing="0" cellpadding="0" >
  <tr>
    <td height="30" colspan="4" bgcolor="#ffcc00">&nbsp;&nbsp;發出的交信</td>
  </tr>
  <tr>
    <th width="15%" >發文日期</th>
    <th width="20%">訊息</th>
    <th width="10%">閱讀</th>
    <th width="60%">訊息內容</th>
  </tr>';
for($i=(count($ob_say_hello_ip)-1);$i>-1;$i--){
if($ob_say_hello_ip[$i]!=''){
if($ob_say_hello_true[$i]==0){
$trues='<b style="color:#990000">未閱讀</b>';
}else{
$trues='<font style="color:#66CC00">已閱讀</font>';
}
echo '<tr>
    <td align="center" height="50">'.$ob_say_hello_date[$i].'</td>
    <td align="center">'.$ob_say_hello_title[$i].'</th>
    <td align="center">'.$trues.'</th>
    <td align="center"><textarea cols="42" rows="2" wrap="VIRTUAL">'.$ob_say_hello_body[$i].'
	                '.'ip:'.$ob_say_hello_ip[$i].'</textarea></td>
  </tr>';
}//是否是空鄭烈
}//for
echo '</table>';
}//if p_is_ip_say_hello就執行 目前有多少接受訊息
$i=count($table_array__pin)+2;
}//if
}//for
}//if
?>
<?
if($pins___go=='[資訊首頁]'){
include("alls/add_thisword.php");
include("alls/add_184_alls.php");
include("alls/add_184_all.php");
include("alls/add_121_a.php");
include("alls/add_borads.php");
include("alls/add_mycool.php");
$nums_later=0;
for($i=0;$i<count($cool__99true);$i++){
if($cool__99true[$i]=='1'){
$nums_later++;
}
}

echo '<table border="0" cellspacing="5" cellpadding="3" >
<tr><td>-您有'.$nums_later.'封信件-</td></tr>
  <tr valign="top"  >
    <td><table width="220" border="1" cellspacing="4" cellpadding="4" bgcolor="#ffcc00">
      <tr>
        <td>最新回覆</td>
      </tr>
      <tr >
        <td bgcolor="#ffffff" class="last_index__div">';
	  $stops__num=0;
for($i=(count($add__thisword__num)-1);$i>-1;$i--){
if($add__thisword__pass[$i]!='@已刪除#' && $end_ture__184[$add__thisword__nums[$i]-1000]=='[狀態]@顯示資料#'){
echo '&nbsp;&rsaquo;&rsaquo;<a href="login_bodys.php?ppiinnss=293&borad__lens=l02l&vals='.$add__thisword__nums[$i].'&check_se='.$add__thisword__num[$i].'">&nbsp;';
echo $add__thisword__name[$i];
echo '</a><br>&nbsp;&nbsp;To:';
echo '<font style="color:#333333">'.$title___184[$add__thisword__nums[$i]-1000].'</font>';
echo '<br>';
$stops__num++;
if($stops__num>=12){
$i=-2;
}

}		
}
echo '</td>
      </tr>
    </table><br></td>
    <td><table width="220" border="1" cellspacing="4" cellpadding="4" bgcolor="#ffcc00">
      <tr>
        <td>最新留言</td>
      </tr>
      <tr>
        <td bgcolor="#ffffff" class="last_index__div">';
	  $stops__num=0;
for($i=(count($array_borads__num_pass)-1);$i>-1;$i--){
if($array_borads__num_pass[$i]!='@已刪除此留言#'){
echo '&nbsp;&rsaquo;&rsaquo;<a href="login_bodys.php?ppiinnss=293&borad__lens=l1ll&check_se='.$array_borads__num[$i].'">&nbsp;';
echo $array_borads__name[$i];
echo '</a><br>&nbsp;&nbsp;To:';
echo '<font style="color:#333333">'.$arrays_value__2[$array_borads__num[$i]-100].'</font>';
echo '<br>';
$stops__num++;
if($stops__num>=12){
$i=-2;
}
}		
}		
echo '</td>
      </tr>
    </table><br></td>
  </tr>
</table>';

}
?>

<?


if($pins___go=='文章分類[新增]'){
add_fun_121();
}
if($pins___go=='成功刪除此信件a'){
say__show_1('成 功 -刪除此信件-','login_bodys.php?ppiinnss=531');

}
if($pins___go=='首頁編輯成功a'){
say__show_3('-首頁編輯-');
}
if($pins___go=='成功a刪除樣版'){
say__show_1('成 功 -刪除樣版-','login_bodys.php?ppiinnss=315');
}


if($pins___go=='文章分類[新增重新整理]'){
say__show_1('成 功 -新增文章分類-','login_bodys.php?ppiinnss=148');
}

if($pins___go=='文章分類[編輯成功]'){
say__show_1('成 功 -編輯文章分類-','login_bodys.php?ppiinnss=148');
}


if($pins___go=='討論版__修正成功a'){
say__show_1('成 功 -編輯討論版-','login_bodys.php?ppiinnss=293&check_se='.$check__se);
}
if($pins___go=='留言版 修改成功a'){
say__show_1('成 功 -修改留言內容-','login_bodys.php?ppiinnss=293&borad__lens=l1ll&check_se='.$check__se);
}

if($pins___go=='留言版_插版成功A'){
say__show_1('成 功 -更新插版-','login_bodys.php?ppiinnss=293&check_se='.$check_se);
}
if($pins___go=='新增樣版_錯誤a'){
say__show_2('失敗 -您輸入的資料有誤-');
}
if($pins___go=='個人資料有誤喔a'){
say__show_2('失敗 -暱稱or簡介字元不符-');
}
if($pins___go=='我的文章[新增成功]'){
say__show_1('成 功 -新增文章-','login_bodys.php?ppiinnss=179&check_data='.$check_data.'&val_=show');
}
if($pins___go=='我的文章[編輯成功]'){
say__show_1('成 功 -編輯文章-','login_bodys.php?ppiinnss=179&check_data='.$joins);
}

if($pins___go=='我的文章[編輯刪除]'){
say__show_1('成 功 -刪除文章-','login_bodys.php?ppiinnss=179&check_data='.$joins);
}

if($pins___go=='我的文章[復活文章]'){
say__show_1('成 功 -復活文章-','login_bodys.php?ppiinnss=179&val__Q=del__Q&check_data='.$joins);
}

if($pins___go=='留言版[編輯成功]'){
say__show_1('成 功 -留言版編輯-','login_bodys.php?ppiinnss=293&borad__lens=l1ll&check_se='.$joins);
}

if($pins___go=='我的文章[復活文章181]'){
say__show_1('成 功 -復活文章-','login_bodys.php?ppiinnss=179&val_=show&check_data='.$joins);
}
if($pins___go=='我的文章[編輯文章181]'){
say__show_1('成 功 -編輯文章-','login_bodys.php?ppiinnss=179&val_=show&check_data='.$joins);
}
if($pins___go=='我的文章[刪除文章181]'){
say__show_1('成 功 -刪除文章-','login_bodys.php?ppiinnss=179&val_=show&check_data='.$joins);
}
if($pins___go=='文章分類[資料有誤]'){
say__show_2('失敗 -您輸入的資料有誤-');
}
if($pins___go=='我的文章[請選擇分類]'){
say__show_2('失敗 -請選擇分類資料-');
}
if($pins___go=='首頁字元太多a'){
say__show_2('失敗 -字元不正確-');
}
if($pins___go=='留言版[密碼字元不對]'){
say__show_2('失敗 您輸入的密碼 [不符合]');
}
if($pins___go=='我的文章[您輸入的字元不正確]'){
say__show_2('失敗 您輸入的字元 [不符合]');
}

if($pins___go=='擴充程式有誤'){
say__show_2('失 敗 您輸入不正確的資料');
}
if($pins___go=='擴充程式成功a'){
say__show_1('成 功 -完成您的需求-','login_bodys.php?ppiinnss=531');
}
if($pins___go=='儲存樣板[儲存]成功a'){
say__show_1('成 功 -儲存新增樣版-','login_bodys.php?ppiinnss=315');
}
if($pins___go=='儲存樣板[儲存]編輯a'){
say__show_1('成 功 -編輯樣版-','login_bodys.php?ppiinnss=315');
}
if($pins___go=='儲存樣板[儲存]套用a'){
say__show_3('-套用樣版-');
}
if($pins___go=='個人資料[成功修改]a'){
say__show_3('-更改個人資料-');
}
if($pins___go=='更改密碼錯誤'){
say__show_2('失敗 -您輸入的密碼有誤-');
}
if($pins___go=='更改密碼錯誤ip'){
say__show_2('失敗 -本機電腦才行更改-');
}
if($pins___go=='二者密碼不相同'){
say__show_2('失敗 -再次輸入的密碼有誤-');
}
if($pins___go=='密碼字元不合'){
say__show_2('失敗 -您輸入的字元不符合-');
}
if($pins___go=='密碼更改成功a'){
say__show_3('-更改密碼成功-');
}
if($pins___go=='控制中心[changeOK]'){
say__show_3('-更改Blog控制-');
}


if($pins___go=='留言版[刪除留言]'){
say__show_1('成 功 -刪除留言-','login_bodys.php?ppiinnss=293&borad__lens=l1ll&check_se='.$check_se);
}
if($pins___go=='留言版[修改內容成功]'){
say__show_1('成 功 -修改留言-','login_bodys.php?ppiinnss=293&borad__lens=l1ll&check_se='.$check_se);
}
if($pins___go=='刪除信箱內容倒數'){
say__show_1('成 功 -刪除信件-','login_bodys.php?ppiinnss=535');
}
if($pins___go=='回覆[成功]'){
say__show_1('成 功 -刪除回覆-','login_bodys.php?ppiinnss=293&borad__lens=l02l&vals='.$vals.'&check_se='.$check_se);
}
//---------

if($pins___go=='[編輯首頁]'){
$files_index=file('alls/index__alls.h');
echo '<form method="post" action="rs_pass_all.php">
<table border="0" cellspacing="1" cellpadding="1">
    <tr>
    <td align="right"><input  type="submit" style="font-size:12px" value="更新"><input  type="hidden" value="97215" name="kings"></td>
  </tr>
  <tr>
    <td>原始檔</td>
  </tr>
  <tr>
    <td><textarea name="bodys_str" cols="80" rows="22">';
	 foreach($files_index as $value){
	 echo $value;
	 }
echo '</textarea></td>
  </tr>
</table></form>';
}
if($pins___go=='文章分類[編輯]'){
include('alls/add_121_a.php');
for($i=0;$i<count($arrays_value__1);$i++){
for($k=$i+1;$k<count($arrays_value__1);$k++){
if($arrays_value__1[$i]>$arrays_value__1[$k]){
$box_s0=$arrays_value__0[$i];
$box_s1=$arrays_value__1[$i];
$box_s2=$arrays_value__2[$i];
$box_send=$arrays_value__end[$i];
$arrays_value__0[$i]=$arrays_value__0[$k];
$arrays_value__1[$i]=$arrays_value__1[$k];
$arrays_value__2[$i]=$arrays_value__2[$k];
$arrays_value__end[$i]=$arrays_value__end[$k];
$arrays_value__0[$k]=$box_s0;
$arrays_value__1[$k]=$box_s1;
$arrays_value__2[$k]=$box_s2;
$arrays_value__end[$k]=$box_send;


}//if
}
}//for 換


change_fun_148($arrays_value__2,$arrays_value__1,$arrays_value__0,$arrays_value__end);//名稱
}













if($pins___go=='文章分類[修改]'){
include("alls/add_121_a.php");

$aaas1=$arrays_value__1[$snums];
$aaas2=$arrays_value__2[$snums];
$aaas0=$arrays_value__0[$snums];
$aaasend=$arrays_value__end[$snums];
echo '<br><br><br><br><br><br>';
change_fun_148_a($aaas2,$aaas1,$aaas0,$aaasend);


}






if($pins___go=='我的文章[新增]'){
include('alls/add_121_a.php');
$colors_s=new color_et;
$color_bb=$colors_s->color_select_2('a___color');

for($i=0;$i<count($arrays_value__1);$i++){
for($k=$i+1;$k<count($arrays_value__1);$k++){
if($arrays_value__1[$i]>$arrays_value__1[$k]){
$box_s0=$arrays_value__0[$i];
$box_s1=$arrays_value__1[$i];
$box_s2=$arrays_value__2[$i];
$box_send=$arrays_value__end[$i];
$arrays_value__0[$i]=$arrays_value__0[$k];
$arrays_value__1[$i]=$arrays_value__1[$k];
$arrays_value__2[$i]=$arrays_value__2[$k];
$arrays_value__end[$i]=$arrays_value__end[$k];
$arrays_value__0[$k]=$box_s0;
$arrays_value__1[$k]=$box_s1;
$arrays_value__2[$k]=$box_s2;
$arrays_value__end[$k]=$box_send;
}//if
}
}//for 換
add_fun_184($arrays_value__2,$arrays_value__0,$color_bb,$arrays_value__end);
}



if($pins___go=='我的文章[編輯]'){
echo '<br>';
if($check_data==''){

include("alls/add_121_a.php");
for($i=0;$i<count($arrays_value__1);$i++){
for($k=$i+1;$k<count($arrays_value__1);$k++){
if($arrays_value__1[$i]>$arrays_value__1[$k]){
$box_s0=$arrays_value__0[$i];
$box_s1=$arrays_value__1[$i];
$box_s2=$arrays_value__2[$i];
$box_send=$arrays_value__end[$i];
$arrays_value__0[$i]=$arrays_value__0[$k];
$arrays_value__1[$i]=$arrays_value__1[$k];
$arrays_value__2[$i]=$arrays_value__2[$k];
$arrays_value__end[$i]=$arrays_value__end[$k];
$arrays_value__0[$k]=$box_s0;
$arrays_value__1[$k]=$box_s1;
$arrays_value__2[$k]=$box_s2;
$arrays_value__end[$k]=$box_send;
}//if
}
}//for 換


change_fun_179($arrays_value__2,$arrays_value__0,$arrays_value__end,$arrays_value__1);

}else{


include('alls/add_121_a.php');
include('alls/add_184_all.php');
include('alls/add_184_alls.php');
include('alls/add_thisword.php');
if($val_=='show'){
$num___ks=0;
echo '<table width="592" border="1" cellpadding="2" cellspacing="0">
  <tr bgcolor="#FFCC00">
    <th height="40" colspan="5">主題</th>
    <th colspan="2">編輯</th>
    </tr>
  <tr>
    <td width="47" height="15" nowrap><div align="center">編號</div></td>
    <td width="273" nowrap><div align="center">標題</div></td>
    <td width="54" nowrap><div align="center">人氣</div></td>
    <td width="54" nowrap><div align="center">回覆</div></td>
    <td width="80" nowrap><div align="center">最後編輯</div></td>
    <td width="42" nowrap><div align="center">編輯</div></td>
    <td width="42" nowrap><div align="center">刪除</div></td>
  </tr>';
for($k=0;$k<count($num___184);$k++){
$num___adds=0;
for($ks=0;$ks<count($add__thisword__nums);$ks++){
if($add__thisword__nums[$ks]==$num___184[$k]){
$num___adds++;
}
}//判定回負數 有多少
if($check_data==$por___184[$k]){
if($end_ture__184[$k]=='[狀態]@顯示資料#' || $end_ture__184[$k]=='[狀態]@資料刪除中#'){
$num___ks++;
change_fun_181($num___ks,$end_ture__184[$k],$title___184[$k],$peo_num___184[$k],$num___184[$k],$num___adds,$date_start___184[$k],$date_now___184[$k]);
}//---------------重點是:選擇是否是 刪除的文章
}
}
echo'</table>';
}//編號選擇方式

}//end
}



//------------------------
if($pins___go=='留言版[編輯]'){

include('alls/add_121_a.php');
include('helps.htm');
$col=new color_et;
$coloss=$col->color_select_2('a___color');
add_chan_borad($coloss,$arrays_value__action[($targets-100)],$arrays_value__actions[($targets-100)],($targets-100));
}

if($pins___go=='留言版[資訊]'){
include('alls/add_121_a.php');
echo '<table  width="550" height="20" border="0" cellpadding="1" cellspacing="1" bgcolor="#ffcc00">
    <tr>
      <td ><table  border="0" cellspacing="3" cellpadding="1">
        <tr>
         <td nowrap>[&nbsp;'.$arrays_value__2[($check_se-100)].'&nbsp;]&nbsp;&nbsp;<a href="login_bodys.php?ppiinnss=293&check_se='.$check_se.'" target="_self"> [討論版]</a>   <a href="login_bodys.php?ppiinnss=293&borad__lens=l1ll&check_se='.$check_se.'" target="_self"> [留言版]</a><a href="login_bodys.php?ppiinnss=293&borad__lens=l002&check_se='.$check_se.'" target="_self"> [所有文章] </a></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <table  width="550" border="0" cellpadding="1" cellspacing="1"><tr><td class="broad_show2">';
if($borad__lens==''){



$nums_value=($check_se-100);
//------------------------
$str_ress=new mysql_et;
//------------------------ 

$values_go=$str_ress->str_re_go($arrays_value__actions[$nums_value],array('[b]**','**[/b]','[A=','**[/A]','[url=http://','**[/url]','[img=http://','[MTV=http://','[music]**http://','**[/music]','[swf=http://','.swf**]','[/swf]','**]',']**'),array('<b>','</b>','<font style=color:','</font>','<a target="_blank" href=http://','</a>','<img src=http://','<embed src=http://','<embed width=300 height=40 src=http://','>','<embed src="http://','.swf" type="audio/x-pn-realaudio-plugin" autostart="false" controls="ControlPanel"','></embed>','>','>'));
borad_show__219($values_go);
}


if($borad__lens=='l02l'){

include('alls/add_184_all.php');
include('alls/add_184_alls.php');
include('alls/add_thisword.php');

//------------------------
$str_ress=new mysql_et;
//------------------------ 

$values_go=$str_ress->str_re_go($body___184[$vals-1000],array('[b]**','**[/b]','[A=','**[/A]','[url=http://','**[/url]','[img=http://','[MTV=http://','[music]**http://','**[/music]','[swf=http://','.swf**]','[/swf]','**]',']**'),array('<b>','</b>','<font style=color:','</font>','<a target="_blank" href=http://','</a>','<img src=http://','<embed src=http://','<embed width=300 height=40 src=http://','>','<embed src="http://','.swf" type="audio/x-pn-realaudio-plugin" autostart="false" controls="ControlPanel"','></embed>','>','>'));
$add___numsd=0;
for($i=0;$i<count($add__thisword__pass);$i++){
if($add__thisword__nums[$i]==$num___184[$vals-1000]){
$add___numsd++;
}
}
borad_show_225($peo_num___184[$vals-1000],$date_start___184[$vals-1000],$title___184[$vals-1000],$values_go,$date_now___184[$vals-1000],$add___numsd);



echo '<br><hr size="1">';
	  $num_s=-1;
	  $colors__array_ago=array('#ffcc00','#FF99FF','#6699FF','#FFFF79','#9DFFB6');
	  for($i=0;$i<count($add__thisword__num);$i++){
	  if($add__thisword__nums[$i]==$vals){
	  if($num_s<(count($colors__array_ago)-1)){
	  $num_s++;
	  }else{
	  $num_s=0;
	  }
echo '<br><table border="1" cellspacing="2" cellpadding="2" bgcolor="'.$colors__array_ago[$num_s].'"  bordercolor="#000000">
    <tr>
      <td><table border="0" cellspacing="5" cellpadding="0">
        <tr>
          <td align="left"><div align="right" style="font-size:12px">ip:'.$add__thisword__ip[$i].'</div>&nbsp;暱&nbsp;稱:&nbsp;'.$add__thisword__name[$i].'&nbsp;&nbsp;&nbsp;'.($i+1000).'#</td>
        </tr>
        <tr>
          <td><textarea  cols="40" rows="7" wrap="VIRTUAL" readonly="true" style="color:#999999;background-color:#333333">'.$add__thisword__body[$i].'</textarea></td>
        </tr>
        <tr>
          <td align="right"><a href="del_boradorthisword.php?del___val=927&pins_val='.$add__thisword__pass[$i].'" onClick="return confirm('."'".'您確定要刪除?'."'".')" style="color:#333333">[--刪除回覆--]</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;日期:'.$add__thisword__date[$i].'</td>
        </tr>
      </table></td>
    </tr>
  </table>';
		}//if
		}//for
}
if($borad__lens=='l310'){
include('alls/add_borads.php');
include('alls/add_121_a.php');
echo '<form action="rs_pass_all.php" method="post">';
echo '<br><br><br><div align="center"><table  border="0" cellspacing="0" cellpadding="3"  >
    <tr  >
      <td align="right" >
        <input type="submit"  style="font-size:12px" value="修改"><input type="hidden"  name="kings" value="chan876borad"><input type="hidden"  name="vals_1" value="'.$val_i.'"><br><br>
      </td>
    </tr>';

for($i=0;$i<count($array_borads__num_pass);$i++){
if($val_i==$array_borads__num_pass[$i]){

if($array_borads__boy[$i]=='男'){
$bgcolors='#ffcc00';
}else{
$bgcolors='#ffccff';
}
echo '    <tr>
      <td bgcolor="'.$bgcolors.'" ><div align="right">ip:'.$array_borads__ip[$i].'&nbsp;&nbsp;</div>';
echo '&nbsp;&nbsp;♀'.$array_borads__boy[$i].'♂'.'&nbsp;&nbsp;&nbsp;&nbsp;'.$array_borads__name[$i].'_的留言';
echo '</td>
    </tr>
    <tr bgcolor="'.$bgcolors.'">
      <td align="right">&nbsp;&nbsp;<textarea name="body_go"  wrap="VIRTUAL" style="width:25em;height:10em;" >'.$array_borads__body[$i].'</textarea>&nbsp;&nbsp;<br>
';
echo '日期:'.$array_borads__date[$i].'&nbsp;&nbsp;';
echo '</td>
    </tr>';
}
}	
echo '</table></div>';
echo '</form>';
}

if($borad__lens=='l002'){
include('alls/add_184_all.php');
include('alls/add_184_alls.php');
include('alls/add_thisword.php');
echo '<div align="center"><br><table width="530" border="1" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFCC00">
    <th height="40" colspan="4" nowrap>主題</th>
    <th colspan="2" nowrap>時間</th>
    </tr>
  <tr>
    <td width="10%" nowrap><div align="center">編號</div></td>
    <td width="44%" nowrap><div align="center">標題</div></td>
    <td width="10%" nowrap><div align="center">人氣</div></td>
    <td width="10%" nowrap><div align="center">回覆</div></td>
    <td width="13%" nowrap><div align="center">發文時間</div></td>
    <td width="13%" nowrap><div align="center">最後編輯</div></td>
  </tr>';
  
  
for($i=count($num___184);$i>-1;$i--){
if($por___184[$i]==$check_se && $end_ture__184[$i]!='[狀態]@資料刪除中#' && $end_ture__184[$i]=='[狀態]@顯示資料#'){
$num___adds=0;
for($ii=0;$ii<count($add__thisword__num);$ii++){
if($add__thisword__nums[$ii]==$num___184[$i]){
$num___adds++;
}
}//for

borad_show__220($num___184[$i],$title___184[$i],$peo_num___184[$i],$num___adds,$date_start___184[$i],$date_now___184[$i],$check_se);
}
}//end
echo '</table></div>';
}//導覽列


if($borad__lens=='l1ll'){
borad_show__221();
}//留言版


echo '</td> </tr> </table>';
}


if($pins___go=='我的文章[編輯show]'){
include('alls/add_121_a.php');
include('alls/add_184_all.php');
include('alls/add_184_alls.php');
$col=new color_et;
$coloss=$col->color_select_2('a___color');

chan_fun_292($arrays_value__2,$arrays_value__0,$por___184[$piss2-1000],$title___184[$piss2-1000],$body___184[$piss2-1000],$coloss,$arrays_value__end,$piss2);

}


if($pins___go=='我的文章[編輯文章181s]'){
include('alls/add_121_a.php');
include('alls/add_184_all.php');
include('alls/add_184_alls.php');
$col=new color_et;
$coloss=$col->color_select_2('a___color');

chan_fun_293($arrays_value__2,$arrays_value__0,$por___184[$piss2-1000],$title___184[$piss2-1000],$body___184[$piss2-1000],$coloss,$arrays_value__end,$piss2);

}

if($pins___go=='儲存樣板[儲存]'){
include("alls/293_css.h");
$img__css_style="width=350 height=300";
echo '<script language="javascript">
function change____gif(){
switch(document.myform.cools_style.value){
';
for($i=0;$i<count($this__css_98array_img);$i++){
echo 'case "'.$this__css_98array_value[$i].'":image__bo.innerHTML="<img src='.$this__css_98array_img[$i].'    '.$img__css_style.'>";break;
';
}//給js 的
echo '}
}
</script>';	


$bg_color='#FFCCFF';
$text__style='style="font-size:12px"';
echo '<form action="rs_pass_all.php" method="post" name="myform" target="_self">';

function table__bg(){
include("alls/293_css.h");
$arrays_value=$this__css_98array_name;
$arrays_values=$this__css_98array_value;
echo '<select name="cools_style" onChange="change____gif()">';
for($i=0;$i<count($arrays_value);$i++) 
   echo'<option value="'.$arrays_values[$i].'">'.$arrays_value[$i].'</option>';
echo '</select>';
}//end

echo '<br><table border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td colspan="2"><div align="right"><input type="submit" value="新增" style="font-size:12px"></div></td>
    </tr>
    <tr>
      <td>樣版名稱</td>
      <td><input name="cools_name" type="text" size="18"></td>
    </tr>
    <tr>
      <td>選擇樣版型態</td>
      <td>';
table__bg();
echo '</td>
    </tr>
    <tr>
      <td colspan="2"><div id="image__bo"><img src=images/bg1.gif '.$img__css_style.'></div></td>
    </tr>
  </table>';
echo '<input type="hidden" value="add312" name="kings">';
echo '</form>';//修改
}

if($pins___go=='儲存樣板[編輯]'){
include("alls/add_293_all.php");
include("alls/add_293_alls.php");
echo '  <table width="400" height="71" border="1" cellpadding="0" cellspacing="0">
    <tr bgcolor="#FFCC00">
      <td height="40" colspan="4">&nbsp;&nbsp;樣版模組</td>
    </tr>
    <tr>
      <td width="75%" height="25"><div align="center">項目</div></td>
      <td colspan="2"><div align="center">編輯</div></td>
    </tr>';
for($i=0;$i<count($this__cools293ipin);$i++){
if($this__cools293ipin[$i]!=''){
if($nums__checked==$this__cools293ipin[$i]){
$nums__checked_ok='<font style="color:#990000">[使用中]</font>';
}else{
$nums__checked_ok='';
}
	 echo '<tr>
      <td width="75%" height="27"><div align="left">&nbsp;&nbsp;'.$this__cools293iname[$i].'&nbsp;&nbsp;&nbsp;&nbsp;'.$nums__checked_ok.'</div></td>
      <form method="post" action="login_bodys.php?ppiinnss=318&chanbody='.$this__cools293ipin[$i].'"><td ><div align="center"><input name="up" type="submit" value="修改" style="font-size:12px"></div></td></form>
      <form method="post" action="rs_pass_all.php"><td ><div align="center"><input type="hidden" value="'.$this__cools293ipin[$i].'" name="pu_pin"><input type="hidden" value="del8123" name="kings"><input type="submit" value="刪除" style="font-size:12px"></div></td></form>
	</tr>';
}
}
echo '</table>';
}

if($pins___go=='儲存樣板[修改]'){
include('alls/add_293_all.php');
include('alls/293_css.h');
include('helps.htm');
echo '<form action="index_try.php?val_ok=ok" method="post" name="myforms2" target="try"><input name="value_css_cools" type="hidden"><input name="value_divs_cools" type="hidden"><input name="value_style_cools" type="hidden"><input name="g_index_img" type="hidden"><input type="submit" value="--遊覽整體畫面--" onClick="Gi_alls();"></form>';
echo '<form action="rs_pass_all.php" method="post" name="myforms" target="_self">';
echo '<div align="right"><input value="修改" type="submit">&nbsp;&nbsp;&nbsp;</div>';
echo '<div align="left" class="back__centers">';
echo '<table  border="0" cellspacing="1" cellpadding="5">
  <tr>
    <td>樣版名稱</td>
    <td><input value="'.$this__cools293iname[($chanbody-500)].'" type="text" size="12" maxlength="40" name="k_name"></td>
  </tr>
  <tr>
    <td>風格style</td>
    <td>[ ';
	for($i=0;$i<count($this__css_98array_value);$i++){
if($this__css_98array_value[$i]==$this__cools293icss2[($chanbody-500)]){
echo $this__css_98array_name[$i];
echo '<input type="hidden" value="'.$this__css_98array_value[$i].'" name="val_styles">';
 }
}
echo ' ]

</td></tr>
    <tr>
    <td>首頁圖片</td>
    <td><input value="'.$this__cools293ititle[($chanbody-500)].'" type="text" size="30" maxlength="250"  name="k_title"></td>
  </tr>
</table>';
echo '<br>解說<br><textarea name="k_say" cols="60" rows="10" wrap="VIRTUAL">'.$this__cools293itext[($chanbody-500)].'</textarea><br><br>';
echo '<br>插版-<a href="http://" onClick="Gi_div();">[DIV]</a>&nbsp;&nbsp;<a href="http://" onClick="Gi_img();">[IMG]</a>&nbsp;&nbsp;<a href="http://" onClick="Gi_flash();">[FLASH]</a>&nbsp;&nbsp;<a href="http://" onClick="Gi_swf();">[SWF]</a><br>
程式碼-<input type="text" size=70 style="font-size:12px" name="value__ans"><br><textarea name="k_xp" cols="75" rows="5" wrap="VIRTUAL">'.$this__cools293ixp[($chanbody-500)].'</textarea><br><br>';
echo 'CSS<br><textarea name="k_css" cols="75" rows="25" wrap="VIRTUAL">'.$this__cools293icss[($chanbody-500)].'</textarea><br><br><br>';
echo '</div>';
echo '<input type="hidden" value="'.$chanbody.'" name="num_pins"><input type="hidden" value="chan315" name="kings"></form>';
}


if($pins___go=='儲存樣板[套用]'){
include('alls/add_293_alls.php');
include('alls/add_293_all.php');
function ok__change($array_id,$array_name,$checked){

echo '<form  method="post" action="rs_pass_all.php"><table width="195"  border="1" cellpadding="0" cellspacing="0">
    <tr>
      <td height="30" bgcolor="#FFCC00">&nbsp;&nbsp;套用樣版</td>
    </tr>
    <tr>
      <td height="55"><div align="center">
	   樣版 <select name="checks">';
		for($i=0;$i<count($array_id);$i++){
		if($array_name[$i]!=''){
		if($checked==$array_id[$i]){
        echo   '<option value="'.$array_id[$i].'" selected>'.$array_name[$i].'</option>';
         }else{
		  echo   '<option value="'.$array_id[$i].'">'.$array_name[$i].'</option>';
      
		 }
		 }
		 }		
        echo '</select>
      </div></td>
    </tr>
    <tr>
      <td height="30" align="right">
        <input type="submit"  style="font-size:12px" value="套用">&nbsp;&nbsp;
      </td>
    </tr>
  </table><input type="hidden" value="ok319" name="kings"></form>';

}//end
ok__change($this__cools293ipin,$this__cools293iname,$nums__checked);
}



if($pins___go=='更改密碼a'){

change__passwords();

}

if($pins___go=='信箱系統'){

read_emails_win();

}
if($pins___go=='信箱個人'){
echo '<table width="560" height="59" border="1" cellpadding="0" cellspacing="0">
    <tr bgcolor="#FFCC00">
      <td height="37" colspan="5">&nbsp;&nbsp;個人信件</td>
    </tr>
    <tr>
      <th width="23%">寄信人</th>
      <th width="45%">主題</th>
      <th width="10%">閱讀</th>
      <th width="12%">日期</th>
      <th width="10%">刪除</th>
    </tr>';
read_emails_me();
}

if($pins___go=='個人資料'){
include("alls/add_443_alls.php");
my_center($name__444,$boy__444,$bir__444_2000,$bir__444_12,$bir__444_31,$star__444,$o__444,$merry__444,$int__444,$dri__444,$myimg__444,$img__444,$love__444,$hate__444,$loves__444,$hates__444,$pho__444);

}
if($pins___go=='控制中心'){
include("alls/add_423_all.php");
win_center($win__blog_true,$win__blog_name,$win__blog_localhost);

}
if($pins___go=='更改密碼[新]'){

echo '<form name="form4" method="post" action="rs_pass_all.php"><table width="230" height="93" border="1" cellpadding="0" cellspacing="0">
    <tr bgcolor="#FFCC00">
      <td height="35" colspan="2">&nbsp;&nbsp;輸入新密碼</td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;新密碼</td>
      <td height="28">&nbsp;&nbsp;<input name="newpass1" type="password" size="15" maxlength="15"></td>
    </tr>
	    <tr>
      <td width="35%">&nbsp;&nbsp;再輸入一次</td>
      <td height="28">&nbsp;&nbsp;<input name="newpass2" type="password" size="15" maxlength="15"></td>
    </tr>
    <tr>
      <td height="50" colspan="2" align="right">
        <input type="submit"   style="font-size:12px" value="更新">&nbsp;&nbsp;
      </td>
    </tr>
</table><input type="hidden" name="kings" value="chan456"></form>';

}



if($pins___go=='留言版[選擇]'){
tops___img();
}


if($pins___go=='留言版[選擇_留言版]'){
borad____999();
}
if($pins___go=='留言版[選擇_討論區]'){
chan_fun_borad();
}

if($pins___go=='留言版[選擇_插版]'){
include('helps.htm');
include('alls/add_g_img.php');
if($g_img__a1[$targets]=='1'){
$c1='checked';
}
if($g_img__a2[$targets]=='1'){
$c2='checked';
}
if($g_img__a3[$targets]=='1'){
$c3='checked';
}
if($g_img__a4[$targets]=='1'){
$c4='checked';
}
echo '<form name="myforms" method="post" action="rs_pass_all.php"><div align="right"><input type="submit" style="font-size:12px" value="更新">&nbsp;&nbsp;&nbsp;&nbsp;</div><table cellpadding="2" cellspacing="2"><tr><td><div align="left"><br>解說<br><textarea name="k_say" cols="60" rows="10" wrap="VIRTUAL">'.$g_img__Qa[$targets].'</textarea><br><br>';
echo '<input type="checkbox" name="chan1" value="1" '.$c1.'>討論版
      <input type="checkbox" name="chan2" value="1" '.$c2.'>留言版
      <input type="checkbox" name="chan3" value="1" '.$c3.'>文章
	  <input type="checkbox" name="chan4" value="1" '.$c4.'>所有文章<input type="hidden" name="vals" value="'.$targets.'"><input type="hidden" name="kings" value="chan894">';
echo '<br><br>插版-<a href="http://" onClick="Gi_div();">[DIV]</a>&nbsp;&nbsp;<a href="http://" onClick="Gi_img();">[IMG]</a>&nbsp;&nbsp;<a href="http://" onClick="Gi_flash();">[FLASH]</a>&nbsp;&nbsp;<a href="http://" onClick="Gi_swf();">[SWF]</a><br>
程式碼-<input type="text" size=70 style="font-size:12px" name="value__ans"><br><textarea name="k_xp" cols="75" rows="5" wrap="VIRTUAL">'.$g_img__gos[$targets].'</textarea><br><br>';
echo 'CSS<br><textarea name="k_css" cols="75" rows="25" wrap="VIRTUAL">'.$g_img__css[$targets].'</textarea><br><br><br>';
echo '</div></td></tr></table></form>';
}

if($pins___go=='觀看個人信箱內容'){
echo '<br><br><br>';
include('alls/add_mycool.php');

for($i=0;$i<count($cool__99num);$i++){
if($cool__99num[$i]==$vals_99){
if($cool__99boy[$i]=='男'){
$this__colors="#6699FF";
}else{
$this__colors="#FF99FF";
}

echo '<div class="div__round_style"><table  border="1" cellspacing="5" cellpadding="3" bgcolor="'.$this__colors.'">
    <tr>
      <td>寄信者:&nbsp;'.$cool__99name[$i].'</td>
    </tr>
	    <tr>
      <td>性&nbsp;別:&nbsp;♀'.$cool__99boy[$i].'♂&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ip:'.$cool__99ip[$i].'</td>
    </tr>
    <tr>
      <td>標&nbsp;題:&nbsp;'.$cool__99title[$i].'</td>
    </tr>
	    <tr>
      <td class="div_see_9" valign="top" align="left"><pre>'.$cool__99body[$i].'</pre></td>
    </tr>
    <tr>
      <td align="right">日期:&nbsp;'.$cool__99date[$i].'&nbsp;</td>
    </tr>
  </table></div>';
  
  
  
  if($cool__99true[$i]=='1'){
$fo=fopen('alls/add_mycool.php',"w+");
$banks=new file_et;
$cool__99true[$i]='0';
fputs($fo,'<?   ');
$banks->file_puts($fo,$cool__99name,'$cool__99name');//不用
$banks->file_puts($fo,$cool__99num,'$cool__99num');
$banks->file_puts($fo,$cool__99boy,'$cool__99boy');//不用
$banks->file_puts($fo,$cool__99title,'$cool__99title');//不用
$banks->file_puts($fo,$cool__99body,'$cool__99body');//不用
$banks->file_puts($fo,$cool__99ip,'$cool__99ip');//不用
$banks->file_puts($fo,$cool__99date,'$cool__99date');//不用
$banks->file_puts($fo,$cool__99true,'$cool__99true');//需要改成0　　改成以閱讀

fputs($fo,'  ?>');
fclose($fo);
}
}
}//for
}//end


?> 
<br>
<br> 
</div>        <div align="center"><br>
  版權 &copy; 收集者專用 ---請勿更改版權語及做商業用途--- <br>
          <br>
        </div></td>
    </tr>
  </table>
</div>
<div id="tops" style="position:absolute; left:585px; top:10px; width:65px; height:20px; z-index:3; visibility: inherit;"><a href="index.php" target="_blank">Blog</a> / <a href="back_login.php" target="_self">登出</a></div>

<div id="Layer1" style="position:absolute; left:7px; top:13px; width:541px; height:29px; z-index:4; visibility: visible; overflow: visible;">
  <?
div_tops();
?>
</div>
</body>
<?
}else{
if(($____login_time+600)>date("YmdHis")){
header('location:login/index.php?val=back');
}else{
echo '無法登入';
}
}
?>
</body>
</html>