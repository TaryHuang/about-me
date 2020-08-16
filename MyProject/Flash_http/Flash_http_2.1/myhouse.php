<?
include("abc_cool/cool.php");



if($_COOKIE["true"]=="通過"){
$sql_pass=$_COOKIE["pass_1988"];
$sql_word="SELECT * 
FROM `pass` 
WHERE 1 AND `user` = '$sql_pass'";
$my_job=sql_b($sql_word);
if($my_job[0][0]=='' || $my_job[0][15]!='管理員(最高權限)'){
header("location:index.php");
}
}else{

header("location:index.php");
}

	  $sqls09_ous_j="SELECT * 
FROM `myfalsh_over` 
WHERE 1 AND `Q_A` 
= '論壇系統' ";
	  
	  $sqls09_ous_jsa=sql_b($sqls09_ous_j);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>
<?

echo $sqls09_ous_jsa[0][15];
?>
</title>
<script language="JavaScript" type="text/JavaScript">
<!--
function mmLoadMenus() {
  if (window.mm_menu_0712194622_0) return;
                      window.mm_menu_0712194622_0 = new Menu("root",76,18,"",12,"#FFCC00","#0066FF","#000000","#000000","center","middle",3,0,1000,-5,7,true,true,true,2,true,true);
  mm_menu_0712194622_0.addMenuItem("論壇公告","window.open('myhouse.php?ppaa=a3', '_self');");
  mm_menu_0712194622_0.addMenuItem("論壇座標","window.open('myhouse.php?ppaa=a5', '_self');");
  mm_menu_0712194622_0.addMenuItem("論壇版面","window.open('myhouse.php?ppaa=a7', '_self');");
   mm_menu_0712194622_0.hideOnMouseOut=true;
   mm_menu_0712194622_0.bgColor='#666666';
   mm_menu_0712194622_0.menuBorder=1;
   mm_menu_0712194622_0.menuLiteBgColor='#333333';
   mm_menu_0712194622_0.menuBorderBgColor='#000000';
window.mm_menu_0712195019_0 = new Menu("root",102,18,"",12,"#FFCC00","#0066FF","#000000","#000000","center","middle",3,0,1000,-5,7,true,true,true,2,true,true);
  mm_menu_0712195019_0.addMenuItem("論壇上版語","window.open('myhouse.php?ppaa=a1', '_self');");
  mm_menu_0712195019_0.addMenuItem("我的日誌版","window.open('myhouse.php?ppaa=a99', '_self');");
  mm_menu_0712195019_0.addMenuItem("論壇最新消息","window.open('myhouse.php?ppaa=a100', '_self');");
  mm_menu_0712195019_0.addMenuItem("論壇個人資料","window.open('myhouse.php?ppaa=a2', '_self');");
  mm_menu_0712195019_0.addMenuItem("論壇文章版語","window.open('myhouse.php?ppaa=a4', '_self');");
   mm_menu_0712195019_0.hideOnMouseOut=true;
   mm_menu_0712195019_0.bgColor='#333333';
   mm_menu_0712195019_0.menuBorder=1;
   mm_menu_0712195019_0.menuLiteBgColor='#333333';
   mm_menu_0712195019_0.menuBorderBgColor='#333333';
window.mm_menu_0712195113_0 = new Menu("root",115,18,"",12,"#FFCC00","#0066FF","#000000","#000000","center","middle",3,0,1000,-5,7,true,true,true,2,true,true);
  mm_menu_0712195113_0.addMenuItem("新增刪除資料庫","window.open('myhouse.php?ppaa=a8', '_self');");
  mm_menu_0712195113_0.addMenuItem("新增刪除討論區","window.open('myhouse.php?ppaa=a9', '_self');");
   mm_menu_0712195113_0.hideOnMouseOut=true;
   mm_menu_0712195113_0.bgColor='#333333';
   mm_menu_0712195113_0.menuBorder=1;
   mm_menu_0712195113_0.menuLiteBgColor='#333333';
   mm_menu_0712195113_0.menuBorderBgColor='#333333';
window.mm_menu_0712195311_0 = new Menu("root",128,18,"",12,"#FFCC00","#0066FF","#000000","#000000","center","middle",3,0,1000,-5,7,true,true,true,2,true,true);
  mm_menu_0712195311_0.addMenuItem("討論區版主");
  mm_menu_0712195311_0.addMenuItem("查看討論區版主面");
   mm_menu_0712195311_0.hideOnMouseOut=true;
   mm_menu_0712195311_0.bgColor='#333333';
   mm_menu_0712195311_0.menuBorder=1;
   mm_menu_0712195311_0.menuLiteBgColor='#333333';
   mm_menu_0712195311_0.menuBorderBgColor='#333333';
                window.mm_menu_0712195636_0 = new Menu("root",135,18,"",12,"#FFCC00","#0066FF","#000000","#000000","center","middle",3,0,1000,-5,7,true,true,true,2,true,true);
  mm_menu_0712195636_0.addMenuItem("查詢人事資料","window.open('myhouse.php?ppaa=a11', '_self');");
  mm_menu_0712195636_0.addMenuItem("查詢論壇文章","window.open('myhouse.php?ppaa=a12', '_self');");
  mm_menu_0712195636_0.addMenuItem("查詢人氣文章(30筆)","window.open('myhouse.php?ppaa=a13', '_self');");
  mm_menu_0712195636_0.addMenuItem("查詢回覆最旺(30筆)","window.open('myhouse.php?ppaa=a14', '_self');");
   mm_menu_0712195636_0.hideOnMouseOut=true;
   mm_menu_0712195636_0.bgColor='#333333';
   mm_menu_0712195636_0.menuBorder=1;
   mm_menu_0712195636_0.menuLiteBgColor='#333333';
   mm_menu_0712195636_0.menuBorderBgColor='#333333';

mm_menu_0712195636_0.writeMenus();
} // mmLoadMenus()

function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<style type="text/css">
<!--
.style2 {color: #FFCC00}
body,td,th {
	font-size: 12px;
}
a:link {
	color: #FFCC00;
}
a:visited {
	color: #FFCC00;
}
body {
	background-color: #0099FF;
}
.style3 {color: #666666}
-->
</style>
<script language="JavaScript" src="mm_menu.js"></script>
</head>

<body>
<script language="JavaScript1.2">mmLoadMenus();</script>
<div id="Layer2" style="position:absolute; left:268px; top:26px; width:646px; height:527px; z-index:2; background-color: #000000; layer-background-color: #000000; border: 1px none #000000; overflow: auto;">
  <br>
  <div align="left"><font style="font-size:12px;color:#FFCC00">&nbsp;
  <?
  
  switch($ppaa){
  case a1:$xy='上語版';break;
  case a2:$xy='下語版';break;
  case a3:$xy='公告';break;
  case a4:$xy='show文章a';break;
  case a5:$xy='logo網址';break;
   case a6:$xy='網站開關';break;
   case a7:$xy='網站版面';break;
   case a8:$xy='資料庫';break;
     case a9:$xy='討論區';break;
	 case a10:$xy='修改討論區';break;
	  case a11:$xy='查詢人事';break;
	  case a12:$xy='查詢文章';break;
	    case a13:$xy='查詢人氣文章';break;
  case a14:$xy='查詢回覆文章';break;
  
    case a15:$xy='查詢人事查詢a';break;
   case a16:$xy='查詢文章查詢a';break;
	   case a100:$xy='論壇最新消息';break;  
	   case a99:$xy='我的日誌';break;
  }//end查詢人事
  
        if($xy=='我的日誌'){
  echo ' (我的日誌)';
  }
  
  
      if($xy=='論壇最新消息'){
  echo ' (論壇最新消息)';
  }
  
    if($xy=='查詢人事查詢a'){
  echo ' (查詢人事)';
  }
      if($xy=='查詢文章查詢a'){
  echo ' (查詢文章)';
  }
  
  
  if($xy=='上語版'){
  echo ' (論壇上版)';
  }
   if($xy=='下語版'){
  echo ' (論壇個人資料版)';
  } 
     if($xy=='公告'){
  echo ' (公告版)';
  } 
  
       if($xy=='show文章a'){
  echo ' (論壇文章語版)';
  } 
  
  
  if($xy=='logo網址'){
  echo ' (Logo網址)';
  }//end
  
    if($xy=='網站開關'){
  echo ' (網站開關)';
  }//end
  
  
      if($xy=='網站版面'){
  echo ' (網站版面)';
  }//end
  
  
        if($xy=='資料庫'){
  echo ' (資料庫)';
  
  
  echo'<pre style="color:#FFCC00">';
echo'
   1.請注意在這新增一筆的資料由於刪除資料過大是無法在此刪除的 請由MYSQL中處理
   2.為了彌補第一點的錯誤 !   如果有想不顯示的資料 請寫上９９（即可關閉）';
echo'</pre>';
  }//end
  
          if($xy=='討論區'){
  echo ' (討論區)';
  }//end
  
  
            if($xy=='修改討論區'){
  echo ' (討論區修改)';
  }//end
              if($xy=='查詢人事'){
  echo ' (查詢人事)';
  }//end
                if($xy=='查詢文章'){
  echo ' (查詢文章)';
  }//end
  
                  if($xy=='查詢人氣文章'){
  echo ' (查詢人氣文章)';
  }//end
                  if($xy=='查詢回覆文章'){
  echo ' (查詢回覆文章)';
  }//end
 
  ?>
</font></div>
<div align="center"><font style="font-size:12px;color:#FFCC00">------------------------------------------------------------------------------------------------------------------------------------------------------------</font></div>
  <p align="center" class="style3">
  <?
  
  switch($ppaa){
  case a1:$xy='上語版';break;
  case a2:$xy='下語版';break;
  case a3:$xy='公告';break;
  case a4:$xy='show文章a';break;
  case a5:$xy='logo網址';break;
  case a6:$xy='網站開關';break;
  case a7:$xy='網站版面';break;
  case a8:$xy='資料庫';break;
  case a9:$xy='討論區';break;
  case a10:$xy='修改討論區';break;
  case a11:$xy='查詢人事';break;
  case a12:$xy='查詢文章';break;
  case a13:$xy='查詢人氣文章';break;
  case a14:$xy='查詢回覆文章';break;
  case a15:$xy='查詢人事查詢a';break;
   case a16:$xy='查詢文章查詢a';break;
   case a100:$xy='論壇最新消息';break;
      case a99:$xy='我的日誌';break;

  }//end資料庫查詢人事查詢文章
      if($xy=='我的日誌'){
   include("abc_cool/cools.php");
  $sss=file("h_ya/up28i.h");
  
  
foreach($sss as $value){
$value22=$value22.$value;
 }
  
  im_imdex_33();
  echo'<form name="myform" method="post" action="xxmyxx.php">';
  echo'<textarea name="send_2006_7_6_b" cols="70" rows="22" wrap="VIRTUAL">'.$value22.'</textarea>';
  echo'&nbsp; <input type="submit" name="Submit2" value="送出">';
  echo'&nbsp; <input type="hidden" name="pins" value="aaa99">';
  echo'</form>';
  }
  
  
    if($xy=='論壇最新消息'){
   include("abc_cool/cools.php");
  $sss=file("h_ya/up29i.h");
  
  
foreach($sss as $value){
$value22=$value22.$value;
 }
  
  im_imdex_33();
  echo'<form name="myform" method="post" action="xxmyxx.php">';
  echo'<textarea name="send_2006_7_6_b" cols="70" rows="22" wrap="VIRTUAL">'.$value22.'</textarea>';
  echo'&nbsp; <input type="submit" name="Submit2" value="送出">';
  echo'&nbsp; <input type="hidden" name="pins" value="aaa100">';
  echo'</form>';
  }
  
  
  
  
  if($xy=='上語版'){
   include("abc_cool/cools.php");
  $sss=file("h_ya/up20i.h");
  
  
foreach($sss as $value){
$value22=$value22.$value;
 }
  
  im_imdex_33();
  echo'<form name="myform" method="post" action="xxmyxx.php">';
  echo'<textarea name="send_2006_7_6_b" cols="70" rows="22" wrap="VIRTUAL">'.$value22.'</textarea>';
  echo'&nbsp; <input type="submit" name="Submit2" value="送出">';
  echo'&nbsp; <input type="hidden" name="pins" value="aaa1">';
  echo'</form>';
  }
  
  
  
  
    if($xy=='下語版'){
   include("abc_cool/cools.php");
  $sss=file("h_ya/down20i.h");
  
  
foreach($sss as $value){
$value22=$value22.$value;
 }
  
  im_imdex_33();
  echo'<form name="myform" method="post" action="xxmyxx.php">';
  echo'<textarea name="send_2006_7_6_b" cols="70" rows="22" wrap="VIRTUAL">'.$value22.'</textarea>';
  echo'&nbsp; <input type="submit" name="Submit2" value="送出">';
  echo'&nbsp; <input type="hidden" name="pins" value="aaa2">';
  echo'</form>';
  }
  
  
      if($xy=='公告'){
   include("abc_cool/cools.php");
  $sss=file("h_ya/sayhollo.h");
  
  
foreach($sss as $value){
$value22=$value22.$value;
 }
  
  im_imdex_33();
  echo'<form name="myform" method="post" action="xxmyxx.php">';
  echo'<textarea name="send_2006_7_6_b" cols="70" rows="22" wrap="VIRTUAL">'.$value22.'</textarea>';
  echo'&nbsp; <input type="submit" name="Submit2" value="送出">';
  echo'&nbsp; <input type="hidden" name="pins" value="aaa3">';
  echo'</form>';
  }
  
  
        if($xy=='show文章a'){
   include("abc_cool/cools.php");
  $sss=file("h_ya/vbhollo.h");
  
  
foreach($sss as $value){
$value22=$value22.$value;
 }
  
  im_imdex_33();
  echo'<form name="myform" method="post" action="xxmyxx.php">';
  echo'<textarea name="send_2006_7_6_b" cols="70" rows="22" wrap="VIRTUAL">'.$value22.'</textarea>';
  echo'&nbsp; <input type="submit" name="Submit2" value="送出">';
  echo'&nbsp; <input type="hidden" name="pins" value="aaa4">';
  echo'</form>';
  }
  
  
  
  if($xy=='logo網址'){
  
  $sql2="SELECT * 
FROM `myfalsh_over` 
WHERE 1 AND `Q_A` = '論壇系統'";
  $sql2s=sql_b($sql2);
  if($sql2s[0][17]==1){
  $avss12='checked';
  }else{
  $avss13='checked';
  }
  echo'<br><br>';
  echo '<form name="form1" method="post" action="xxmyxx.php">
<table width="283" border="0" cellpadding="3" cellspacing="3" bordercolor="#990000">
    	<tr>
      <td width="51" nowrap>Logo開關</td>
      <td width="150" nowrap><div align="left">
	  開 <input name="radioss10" type="radio" value="1" '.$avss12.'>
   關 <input name="radioss10" type="radio" value="0"  '.$avss13.'>
  </div>
</td>
      <td width="44" nowrap>&nbsp;</td>
	</tr>
	<tr>
      <td width="51" nowrap>Logo網址(img)</td>
      <td width="150" nowrap><input name="https" type="text" size="20" value="'.$sql2s[0][2].'"></td>
      <td width="44" nowrap>&nbsp;</td>
	</tr>
	    <tr>
      <td width="51" nowrap>Logo大小</td>
      <td width="150" nowrap>寬 : 
        <input name="width" type="text" size="5" maxlength="3" value="'.$sql2s[0][9].'">
        高 : 
        <input name="height" type="text" size="5" maxlength="3" value="'.$sql2s[0][10].'"></td>
      <td width="44" nowrap>&nbsp;</td>
	    </tr>
			    <tr>
      <td width="51" nowrap>Logo座標</td>
      <td width="150" nowrap>x :
        <input name="my_x" type="text" size="5" maxlength="4" value="'.$sql2s[0][7].'">
        y :
         <input name="my_y" type="text" size="5" maxlength="4" value="'.$sql2s[0][8].'"></td>
      <td width="44" nowrap>&nbsp;</td>
	    </tr>
	    <tr>
      <td width="51" nowrap>&nbsp;</td>
      <td width="150" nowrap>&nbsp;</td> 
    </tr>
  </table>
  
  <table width="283" border="0" cellpadding="3" cellspacing="3" bordercolor="#990000">

	    <tr>
      <td width="51" nowrap>選單座標</td>
      <td width="150" nowrap>x : 
        <input name="width11" type="text" size="5" maxlength="4" value="'.$sql2s[0][3].'">
        y : 
        <input name="height11" type="text" size="5" maxlength="4" value="'.$sql2s[0][4].'"></td>
      <td width="44" nowrap>&nbsp;</td>
	    </tr>
			    <tr>
      <td width="51" nowrap>Body座標</td>
      <td width="150" nowrap>x :
        <input name="my_x11" type="text" size="5" maxlength="4" value="'.$sql2s[0][5].'">
        y :
         <input name="my_y11" type="text" size="5" maxlength="4" value="'.$sql2s[0][6].'"></td>
      <td width="44" nowrap>&nbsp;</td>
	    </tr>
	    <tr>
      <td width="51" nowrap>&nbsp;</td>
      <td width="150" nowrap>&nbsp;</td>
      <td width="44" nowrap><input type="submit" name="Submit" value="送出"></td>
    </tr>
  </table>
  
  &nbsp; <input type="hidden" name="pins" value="aaa5">
</form>';
  
  }
  
  
  
  if($xy=='網站開關'){
    $sql2="SELECT * 
FROM `myfalsh_over` 
WHERE 1 AND `Q_A` = '論壇系統'";
  $sql2s=sql_b($sql2);
  
  echo '<br><br><br><br>';
  if($sql2s[0][1]=='開'){
  $true_s1="checked";//給開
  }else{
  $true_s2="checked";//給關
  }
  echo '<form name="form1" method="post" action="xxmyxx.php">';
  echo'<table width="277" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td width="69" nowrap>網站開關</td>
    <td width="126" nowrap><input name="truesss" type="radio" value="開"  '.$true_s1.'>
      開
        <input name="truesss" type="radio" value="關"  '.$true_s2.'>
    關</td>
    <td width="52" nowrap>&nbsp;</td>
  </tr>
  <tr>
    <td nowrap>網站關閉時</td>
    <td nowrap><input name="truesss_say" type="text" size="18" maxlength="30" value="'.$sql2s[0][11].'"></td>
    <td nowrap>&nbsp;</td>
  </tr>
  <tr>
    <td nowrap>&nbsp;</td>
    <td nowrap>&nbsp;</td>
    <td nowrap><input type="submit" name="Submit3" value="送出"></td>
  </tr>
</table>';
 echo'<input type="hidden" name="pins" value="aaa6">
</form>'; 
  }//end
  




if($xy=='網站版面'){


$sql2="SELECT * 
FROM `myfalsh_over` 
WHERE 1 AND `Q_A` = '論壇系統'";
  $sql2s=sql_b($sql2);

  $sss1=file("h_ya/myhouse_word.h");
  
  
foreach($sss1 as $value222i){
$value22=$value22.$value222i;
 }
 
 
 //寫顏色語版
 $aaaas_color=array('#000000','#3A3A3A','#666666','#999999','#CCCCCC','#FFFFFF','#FF50A7','#FF5096','#FF5084','#FF5073','#FF5061','#FF5050','#FF6250','#FF7C50','#FF8550','#FF8D50','#FF9650','#FF9F50','#FFA850','#FFB050','#FFB950','#FFC250','#FFCB50','#FFD350','#FFDD78','#FFE478','#FFEB78','#FFF278','#FFF878','#FFFF78'
,'#F8FF78','#F1FF78','#EBFF78','#E4FF78','#DDFF78','#D2FF78','#C0FF78','#AEFF78','#9CFF78','#8AFF78','#78FF78','#78FF8A','#78FF9C',
'#78FFAE','#78FFC0','#78FFD2','#78FFDD','#78FFE4','#78FFEB','#78FFF2','#78FFF8','#78FFFF','#78F8FF','#78F1FF','#78EBFF','#78E4FF','#78DDFF','#78D2FF','#78C0FF','#78AEFF','#789CFF'
,'#788AFF','#7878FF','#8A78FF','#9C78FF','#AE78FF','#C778FF','#D278FF','#DD78FF','#E978FF','#F478FF','#FF78FF','#FF78F4','#FF78E8','#FF78DD','#FF78C7','#FFCC00','#FF9900','#990000','#663399','#3366FF','#0033FF','#FFFF00','#996600','#FF0066','#003366','');
for($i=0;$i<count($aaaas_color);$i++){
if($sql2s[0][13]==$aaaas_color[$i]){
$aaaas_color_OK=$aaaas_color_OK.'<option value="'.$aaaas_color[$i].'" style=" background-color:'.$aaaas_color[$i].';border-color:" selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>';
}else{
$aaaas_color_OK=$aaaas_color_OK.'<option value="'.$aaaas_color[$i].'" style=" background-color:'.$aaaas_color[$i].';border-color:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>';
}//假如顏色表根資料庫一樣 就給他 selected

}//end

for($i=0;$i<count($aaaas_color);$i++){
if($sql2s[0][19]==$aaaas_color[$i]){
$aaaas_color_OK_23=$aaaas_color_OK_23.'<option value="'.$aaaas_color[$i].'" style=" background-color:'.$aaaas_color[$i].';border-color:" selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>';
}else{
$aaaas_color_OK_23=$aaaas_color_OK_23.'<option value="'.$aaaas_color[$i].'" style=" background-color:'.$aaaas_color[$i].';border-color:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>';
}//假如顏色表根資料庫一樣 就給他 selected

}//end



for($i=0;$i<count($aaaas_color);$i++){
if($sql2s[0][16]==$aaaas_color[$i]){
$aaaas_color_OK_2=$aaaas_color_OK_2.'<option value="'.$aaaas_color[$i].'" style=" background-color:'.$aaaas_color[$i].';border-color:" selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>';
}else{
$aaaas_color_OK_2=$aaaas_color_OK_2.'<option value="'.$aaaas_color[$i].'" style=" background-color:'.$aaaas_color[$i].';border-color:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>';
}//假如顏色表根資料庫一樣 就給他 selected

}//end
 

for($i=0;$i<count($aaaas_color);$i++){
if($sql2s[0][18]==$aaaas_color[$i]){
$aaaas_color_OK_24=$aaaas_color_OK_24.'<option value="'.$aaaas_color[$i].'" style=" background-color:'.$aaaas_color[$i].';border-color:" selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>';
}else{
$aaaas_color_OK_24=$aaaas_color_OK_24.'<option value="'.$aaaas_color[$i].'" style=" background-color:'.$aaaas_color[$i].';border-color:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>';
}//假如顏色表根資料庫一樣 就給他 selected

}//end


for($i=0;$i<count($aaaas_color);$i++){
if($sql2s[0][1]==$aaaas_color[$i]){
$aaaas_color_OK_p1=$aaaas_color_OK_p1.'<option value="'.$aaaas_color[$i].'" style=" background-color:'.$aaaas_color[$i].';border-color:" selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>';
}else{
$aaaas_color_OK_p1=$aaaas_color_OK_p1.'<option value="'.$aaaas_color[$i].'" style=" background-color:'.$aaaas_color[$i].';border-color:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>';
}//假如顏色表根資料庫一樣 就給他 selected

}//end


for($i=0;$i<count($aaaas_color);$i++){
if($sql2s[0][11]==$aaaas_color[$i]){
$aaaas_color_OK_p2=$aaaas_color_OK_p2.'<option value="'.$aaaas_color[$i].'" style=" background-color:'.$aaaas_color[$i].';border-color:" selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>';
}else{
$aaaas_color_OK_p2=$aaaas_color_OK_p2.'<option value="'.$aaaas_color[$i].'" style=" background-color:'.$aaaas_color[$i].';border-color:">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>';
}//假如顏色表根資料庫一樣 就給他 selected

}//end




  echo '<form name="form1" method="post" action="xxmyxx.php">';
echo'<table width="400" border="0" cellspacing="1" cellpadding="5">
  <tr>
    <td width="52" nowrap><div align="left">網站名稱</div></td>
    <td width="160" nowrap colspan="3"><div align="left">
      <input name="as_2006_a" type="text" size="15" maxlength="30"  value="'.$sql2s[0][15].'" >
    </div></td>
    <td width="42" nowrap>&nbsp;</td>
  </tr>
    <tr>
    <td nowrap><p align="left">內部顏色</p>    </td>
    <td nowrap><div align="left">
      <select name="as_2006_ffsss">
'.$aaaas_color_OK_24.' 
</select>
   </div></td>
    <td nowrap><p align="center">連結變顏色</p>    </td>
    <td nowrap><div align="left">
      <select name="as_2006_ffsss_1">
'.$aaaas_color_OK_p1.' 
</select>
   </div></td>
	
  </tr>

  </tr>
    <tr>
    <td nowrap><p align="left">內部中顏色</p>    </td>
    <td nowrap><div align="left">
      <select name="as_2006_ffsss2">
'.$aaaas_color_OK_23.' 
</select>
   </div></td>
    <td nowrap  ><p align="center">使用者顏色</p>    </td>
    <td nowrap ><div align="left">
      <select name="as_2006_ffsss_2">
'.$aaaas_color_OK_p2.' 
</select>
   </div></td>
  </tr>
  <tr>
    <td nowrap><p align="left">內邊框顏色</p>    </td>
    <td nowrap><div align="left">
      <select name="as_2006_ffs">
'.$aaaas_color_OK_2.' 
</select>
   </div></td>
    <td nowrap><p align="center">外邊框顏色</p>    </td>
    <td nowrap><div align="left">
      <select name="as_2006_c">
'.$aaaas_color_OK.' 
</select>
   </div></td>
  </tr>

      <tr>
    <td width="52" nowrap><div align="left">背景網址(個人)</div></td>
    <td width="160" nowrap colspan="3"><div align="left">
      <input type="text" name="as_2006_b_2s" value="'.$sql2s[0][20].'">
    </div></td>
    <td width="42" nowrap>&nbsp;</td>
  </tr>
    <tr>
    <td width="52" nowrap><div align="left">背景網址(主版)</div></td>
    <td width="160" nowrap colspan="3"><div align="left">
      <input type="text" name="as_2006_b" value="'.$sql2s[0][12].'">
    </div></td>
    <td width="42" nowrap>&nbsp;</td>
  </tr>
  <tr>
    <td nowrap><div align="left">版權語 </div><br><br></td>
    <td nowrap colspan="3"><div align="left">
	<input type="text" name="as_2006_d" value="'.$sql2s[0][14].'">
         </div></td>
    <td nowrap>&nbsp;</td>
  </tr>
  <tr>
    <td nowrap ><div align="left">記事本</div><br><br><br><br></td>
    <td nowrap colspan="3"><div align="left">
      <textarea name="as_2006_e" cols="50" rows="5" wrap="VIRTUAL">'.$value22.'</textarea>
    </div></td>
    <td nowrap>&nbsp;</td>
  </tr>
  <tr>
    <td nowrap><div align="left"></div></td>
    <td nowrap><div align="left"></div></td>
    <td nowrap><input type="submit" name="Submit32" value="送出"></td>
  </tr>
</table>';

 echo'<input type="hidden" name="pins" value="aaa7">
</form>'; 

}



if($xy=='資料庫'){

$sql2="SELECT * 
FROM `bar` 
WHERE 1 ";
  $sql2s=sql_b($sql2);
  
  
  
  
  
  
  

echo'<form name="form1" method="post" action="xxmyxx.php"><table width="100" border="0" cellspacing="5" cellpadding="2">

  <tr>
    <td width="28" nowrap>排序</td>
    <td width="142" nowrap><div align="center">資料庫</div></td>
  </tr>  
  <tr>
    <td  colspan="2"><div align="left">-----------------------------------------</div></td>
  </tr>';
 for($i=0;$i<count($sql2s);$i++){
 for($k=$i+1;$k<count($sql2s);$k++){

if($sql2s[$i][2]>$sql2s[$k][2]){
$powerssss=$sql2s[$i];
$sql2s[$i]=$sql2s[$k];
$sql2s[$k]=$powerssss;
 
 }
 }
 
 $is1='us_p1'.$i;
 $is2='us_p2'.$i;
 echo'  <tr>
    <td width="28" nowrap><input name="'.$is1.'" type="text" size="3" maxlength="2" value="'.$sql2s[$i][2].'"></td>
    <td width="142" nowrap><div align="center">'.$sql2s[$i][1].'</div></td>
	  </tr>';
 echo'<input type="hidden" name="'.$is2.'" value="'.$sql2s[$i][0].'">';
	  
 }//for 
  
  
echo'
  <tr>
    <td >&nbsp;</td>
    <td><input type="submit" name="Submit4" value="排序"></td>
  </tr>
   <input type="hidden" name="num" value="'.count($sql2s).'">
 <input type="hidden" name="pins" value="aaa10">
</table></form>  ';
echo'<br><br><br>';


echo'<div align="right"><table width="0 border="0" cellspacing="5" cellpadding="5">
<form name="form1" method="post" action="xxmyxx.php">
  <tr>
    <td ><input type="text" name="name_cool" size="15" maxlength="12"></td>
    <td><input type="submit" name="Submit4" value="新增"></td>
  </tr>
<input type="hidden" name="pins" value="aaa9">
</form>  

  
</table></div>';


}//end









if($xy=='討論區'){
echo'
<script language="javascript">
function asds(){
a=prompt("請輸入名稱","必輸入");

b=prompt("介紹內容","介紹");
document.myform.name_1.value=a;//名稱
document.myform.name_2.value=b;//介紹內容
}//end

</script>';


$sql2="SELECT * 
FROM `bar` 
WHERE 1 
ORDER BY `Num_p2` ASC";

  $sql2s=sql_b($sql2);
  $body_i200='<option selected>選擇</option>';
  for($i=0;$i<count($sql2s);$i++){
  $body_i200=$body_i200.' <option value="myhouse.php?ppaa=a9&value_https='.$sql2s[$i][0].'" >'.$sql2s[$i][1].'</option>';
  }//資料庫資料
  
  echo'<br><br>';

echo'<table width="363" height="25" border="0" cellpadding="2" cellspacing="2" bordercolor="#FFCC00">';
  
  if($value_https!=''){
  echo'<tr>
  <td colspan="4" align="right">
  
  
<form name="myform" method="post" action="xxmyxx.php">

<input name="name_1" type="text" size="12"  readonly="true" value="名稱">
<input name="name_2" type="text" size="25"  readonly="true" value="介紹">
<input name="name_3" type="hidden" size="25"  readonly="true" value="'.$value_https.'">
<input name="pins" type="hidden" size="25"  readonly="true" value="aaa11">
<input type="submit" name="Submit" value="新增">
<input type="hidden" name="vasss_ur" value="'.$value_https.'">
</form>
  
  
  <input type="button" name="Submit" value="填入資料" onClick="asds()"></td>
  
  
  </tr>';
  }
  echo'<tr>
    <td width="125" nowrap  height="10"><div align="center">
     <br>
    <form name="form1">
      <select name="menu1" onChange="MM_jumpMenu('."'".'parent'."'".',this,0)">
'.$body_i200.'
      </select>
    </form>
    </div></td>
    <td width="209" nowrap><div align="center"><font style="color:#FFCC00;font-size:12px">討論區</font></div></td>
	<td width="60" nowrap><div align="center"><font style="color:#FFCC00;font-size:12px">修改</font></div></td>
	<td width="60" nowrap><div align="center"><font style="color:#FFCC00;font-size:12px">刪除</font></div></td>
  </tr>';
 //以下是寫出 討論區的地方 
 $sql2a="SELECT * 
FROM `bar_all` 
WHERE 1 AND `pin_s` = '$value_https'";

  $sql2ss=sql_b($sql2a);
 
 for($i=0;$i<count($sql2ss);$i++){
   echo'<tr>
    <td>&nbsp;</td>
    <td width="209" nowrap height="30"><div align="left"> &nbsp; '.$sql2ss[$i][2].'</div></td>
	<form name="form2" method="post" action="myhouse.php?ppaa=a10">
	<td width="60" nowrap><div align="center">

<input type="submit" name="Submit" value="修改">
<input type="hidden" name="pis_value" value="'.$sql2ss[$i][0].'">
<input type="hidden" name="vasss_ur" value="'.$value_https.'">
</div></td></form>

<form name="form2" method="post" action="xxmyxx.php">
<td width="60" nowrap><div align="center">
<input type="submit" name="Submit" value="刪除">
<input type="hidden" name="vasss_ur" value="'.$value_https.'">
<input type="hidden" name="sat" value="'.$sql2ss[$i][0].'">
<input type="hidden" name="pins" value="aaa20">
</div></td></form>
  
  
  </tr>';
 }//end
  
echo'</table>';


}//end


if($xy=='修改討論區'){

$as_ho=$_POST[pis_value];

$sql99="SELECT * 
FROM `bar_all` 
WHERE 1 AND `Num` = '$as_ho' ";

$sql99i=sql_b($sql99);

if($sql99i[0][8]=='開'){
$sql99i08_1="selected";
}else{
$sql99i08_2="selected";

}

echo'<br><br><br><br><br>';
echo'<form name="myform" method="post" action="xxmyxx.php">
-------<font style="color:#FFCC00;font-size:15px">'.$sql99i[0][2].'</font>------<br><br>
  <table width="0" border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td width="75" nowrap>介紹</td>
      <td width="64" nowrap>首圖片</td>
      <td width="52" nowrap>連結圖片</td>
      <td width="70" nowrap>版主帳號</td>
      <td width="70" nowrap>副版主帳號</td>
      <td width="50" nowrap>開關</td>
      <td width="5" nowrap>&nbsp;</td>
    </tr>
    <tr>
      <td nowrap><input name="f1_2" type="text" size="10" value="'.$sql99i[0][3].'"  maxlength="30"></td>
      <td nowrap><input name="f1_3" type="text" size="10" value="'.$sql99i[0][1].'" ></td>
      <td nowrap><input name="f1_4" type="text" size="10" value="'.$sql99i[0][11].'"></td>
      <td nowrap><input name="f1_5" type="text" size="10" value="'.$sql99i[0][4].'" maxlength="30"></td>
      <td nowrap><input name="f1_6" type="text" size="10" value="'.$sql99i[0][5].'" maxlength="30"></td>
      <td nowrap><select name="f1_7">
          <option value="開"  '.$sql99i08_1.'>開</option>
          <option value="關" '.$sql99i08_2.'>關</option>
      </select></td>
      <td nowrap><input type="submit" name="Submit2" value="修改"></td>
    </tr>
  </table>
  <input name="f1_1" type="hidden" size="10" value="'.$sql99i[0][2].'">
    <input type="hidden" name="vasss_ur" value="'.$vasss_ur.'">
  <input type="hidden" name="pins" value="aaa12">
  <input type="hidden" name="pins_a" value="'.$as_ho.'">
    <input type="hidden" name="lider11" value="'.$sql99i[0][4].'">
  <input type="hidden" name="lider22" value="'.$sql99i[0][5].'">
</form>';


}



if($xy=='查詢人事'){
echo'<br><br><br><br><br><br><br>';


im_imdex_34('myhouse.php?ppaa=a15');
}//end ok



if($xy=='查詢文章'){
echo'<br><br><br><br><br><br><br>';



im_imdex_35('myhouse.php?ppaa=a16');
}


if($xy=='查詢人氣文章'){
$saql="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `true` = '開' ";
$saqli=sql_b($saql);

$saqlaa="SELECT * 
FROM `bar_all_alls` 
WHERE 1 AND `true` = '開'";
$saqliaa=sql_b($saqlaa);



im_imdex_36($saqli,$saqliaa);
}



if($xy=='查詢回覆文章'){
$saql="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `true` = '開' ";
$saqli=sql_b($saql);

$saqlaa="SELECT * 
FROM `bar_all_alls` 
WHERE 1 AND `true` = '開'";
$saqliaa=sql_b($saqlaa);



im_imdex_37($saqli,$saqliaa);
}




if($xy=='查詢人事查詢a'){
//編號  帳號


$value_star1=$_POST[m_star_1];
$value_star2=$_POST[m_star_2];
switch($value_star1){
case '1':$sql="SELECT * FROM `pass` WHERE 1 AND `Num` = '$value_star2' ";break;
case '2':$sql="SELECT * FROM `pass` WHERE 1 AND `user` = '$value_star2' ";break;
case '3':$sql="SELECT * FROM `pass` WHERE 1 AND `name` = '$value_star2' ";break;
case '4':$sql="SELECT * FROM `pass` WHERE 1 AND `true_name` = '$value_star2' ";break;
case '5':$sql="SELECT * FROM `pass` WHERE 1 AND `win` = '$value_star2' ";break;
case '6':$sql="SELECT * FROM `pass` WHERE 1 AND `boy_girl` = '$value_star2' ";break;
}




 $data=sql_b($sql);


im_imdex_38($data);

im_imdex_34('myhouse.php?ppaa=a15');

 
  }
  
  
  
  
  
  
  if($xy=='查詢文章查詢a'){
//編號  帳號


$value_star1=$_POST[m_star_1];
$value_star2=$_POST[m_star_2];

$value_star2='%'.$value_star2.'%';
switch($value_star1){
case '1':$sql="SELECT * FROM `bar_all_all` WHERE 1 AND `title` LIKE '$value_star2' ORDER BY `peos_num` DESC ";break;
case '2':$sql="SELECT * FROM `bar_all_all` WHERE 1 AND `peo` LIKE '$value_star2'";break;
case '3':$sql="SELECT * FROM `bar_all_all` WHERE 1 AND `good` = '置頂' `title` LIKE '$value_star2' ORDER BY `peos_num` DESC ";break;
case '4':$sql="SELECT * FROM `bar_all_all` WHERE 1 AND `P_S` != '0' `title` LIKE '$value_star2' ORDER BY `peos_num` DESC ";break;
case '5':$sql="SELECT * FROM `bar_all_all` WHERE 1 AND `true` = '關' `title` LIKE '$value_star2' ORDER BY `peos_num` DESC ";break;
}




 $data=sql_b($sql);


im_imdex_39($data);

im_imdex_35('myhouse.php?ppaa=a16');


echo'<br><br><br><br>';

   }









  ?>
  </p>
</div>

<br>
<br>
<br>
<br>
<br>
<br>

   <table width="235" border="0" cellpadding="5" cellspacing="1" bordercolor="#990000">
    <tr bgcolor="#333333">
      <th height="41" colspan="2" nowrap><span class="style2">論壇系統</span></th>
  </tr>
    <tr bgcolor="#333333">
      <td width="93" nowrap><a href="#" name="link7" id="link1" onMouseOver="MM_showMenu(window.mm_menu_0712194622_0,80,10,null,'link7')" onMouseOut="MM_startTimeout();">論壇最新公告</a></td>
      <td width="128" rowspan="7" nowrap>&nbsp;</td>
  </tr>
    <tr bgcolor="#333333">
      <td nowrap><a href="#" name="link9" id="link2" onMouseOver="MM_showMenu(window.mm_menu_0712195019_0,80,10,null,'link9')" onMouseOut="MM_startTimeout();">論壇語法版</a></td>
  </tr>
    <tr bgcolor="#333333">
      <td nowrap><a href="#" name="link8" id="link3" onMouseOver="MM_showMenu(window.mm_menu_0712195113_0,80,10,null,'link8')" onMouseOut="MM_startTimeout();">新增刪除討論</a></td>
  </tr>
    <tr bgcolor="#333333">
      <td nowrap><a href="#" name="link4" id="link5" onMouseOver="MM_showMenu(window.mm_menu_0712195636_0,80,10,null,'link4')" onMouseOut="MM_startTimeout();">查看掉閱資料</a></td>
  </tr>
    <tr bgcolor="#333333">
      <td nowrap>&nbsp;</td>
  </tr>
    <tr bgcolor="#333333">
      <td height="161" nowrap>&nbsp;</td>
  </tr>
    <tr bgcolor="#333333">
      <td height="67" nowrap><div align="center"><a href="index.php" target="_self">回去論壇</a></div></td>
  </tr>
</table>

</body>
</html>
