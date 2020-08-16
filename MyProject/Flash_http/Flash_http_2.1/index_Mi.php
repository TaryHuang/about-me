<?

include("abc_cool/cool.php");
ob_start();
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/body_Num.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<?

if($_COOKIE["true"]=="通過"){
$sql_pass=$_COOKIE["pass_1988"];
$sql_word="SELECT * 
FROM `pass` 
WHERE 1 AND `user` = '$sql_pass'";
$my_job=sql_b($sql_word);
if($my_job[0][0]==''){
header("location:../index.php");
}

}else{
header("location:index.php");
}

?>
<?




//主題內容
$sql_10001="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `Num` = '$num_10s'  AND `true` = '開' ";
$sql_10001i=sql_b($sql_10001);//得到資料庫資料



	  
	  $sqls09_ous_j="SELECT * 
FROM `myfalsh_over` 
WHERE 1 AND `Q_A` 
= '論壇系統' ";
	  
	  $sqls09_ous_jsa=sql_b($sqls09_ous_j);

?>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<!-- InstanceBeginEditable name="doctitle" -->
<title><?
echo $sqls09_ous_jsa[0][15];
?></title>
<!-- InstanceEndEditable --><script language="JavaScript" type="text/JavaScript">
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
body,td,th {
	font-size: large;
	color: #000000;
}
body {
	background-color: #E6E6E6;
}
-->
</style>
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>
<body>
 <?
 if($sql_10001i[0][0]==''){
echo '<div id="a" style="position:absolute; left:320px; top:189px; width:400px; height:112px; z-index:2; background-color: #000000; layer-background-color: #000000; border: 1px none #000000; font-size: 36px; color: #990000; visibility: visible;">
  <div align="center"><br>
  -此文章關閉中-</div>
</div>'; 
 
 } 
 ?>
<div id="Layer1" style="position:absolute; left:18px; top:8px; width:955px; height:625px; z-index:1">
  <table width="964" height="0" border="0" cellpadding="1" cellspacing="1">
    <tr>
      <td width="204" height="25"><a href="index.php" target="_self">論壇首頁</a></td>
      <td width="753"><div align="right"><?
	  
	  if($sql_10001i[0][0]!=''){
	  $ddd_sq_1="SELECT * 
FROM `my_f_word` 
WHERE 1 AND `Num_http` = '$num_10s' AND `user` = '$sql_pass' ";
	  $ddd_sq_2=sql_b($ddd_sq_1);
	  
	  
	  if($ddd_sq_2[0][0]==''){
        echo'<form name="form1" method="post" action="abc_cool/url_header.php">
<input name="Submit2" type="submit" value="加入我的最愛">
<input name="my_user_aaa" type="hidden" value="'.$sql_pass.'">
<input name="my_word_aaa" type="hidden" value="'.$num_10s.'">
<input name="pin_kk47" type="hidden" value="aaa17">
</form>
';
      }else{
	  
	 echo ' [ 已經加入我的最愛 ]';
	  }//判定是否加入我的
	  }
	  ?>
	  </div></td>
    </tr>
  </table>
  <table width="965" height="221" border="0" cellpadding="1" cellspacing="1">
    <tr>
      <th height="45" nowrap bgcolor="#3C3C3C" >
      <div align="center"><!-- InstanceBeginEditable name="title" --><?
	  echo '<font style="color:#FFFFFF;font-size:20px">';
		echo $sql_10001i[0][1];
			  echo '</font>';
			  
		?><!-- InstanceEndEditable --> </div></th>
    </tr>
    <tr>
      <td height="31"><br>
      發文人 :<!-- InstanceBeginEditable name="peo" --><?
		echo '<a href="h_ya/in_body.php?na_num='.$sql_10001i[0][14].'">'.$sql_10001i[0][2].'</a>';
		?><!-- InstanceEndEditable --> 日期: <!-- InstanceBeginEditable name="date" --><?
		echo $sql_10001i[0][9];
		?><!-- InstanceEndEditable --></td>
    </tr>
    <tr>
      <td height="75" bgcolor="#999999"><div align="justify">
        <br>
        <table width="961" height="25" border="0" cellpadding="3" cellspacing="3">
            <tr>
              <td height="19"><!-- InstanceBeginEditable name="body1" --><?
	    echo'<pre>';
		$l__2006_7_8_3=pass_u_go_out_2($sql_10001i[0][6]);//身體
		echo $l__2006_7_8_3;
		echo'</pre>';
	
		
		
		?><!-- InstanceEndEditable --></td>
            </tr>
          </table>
        <div align="right"><br>
          <br>
          <table width="135" border="0" cellspacing="1" cellpadding="1">
            <tr><?
			if($sql_10001i[0][7]!=''){
			  echo '<td width="300" nowrap><font style="font-size:12px">日期 : '.$sql_10001i[0][10].' <br>最後編輯人: '.$sql_10001i[0][7].'</font><td>';
              }
			  if($sql_10001i[0][0]!=''){
			  echo '<td width="50" nowrap><div align="left"><a href="index_mi.php?num_10s='.$num_10s.'&fun=a&#hi_http">[引用]</a></div></td>
              <td width="50" nowrap><div align="left"><a href="index_mi.php?num_10s='.$num_10s.'&fun=c&#hi_http">[編輯]</a></div></td>
              <td width="50" nowrap><div align="left"><a href="url_header.php?pin_password=aaa6&ooooooo_1='.$num_10s.'">[刪除]</a></div></td>';
			  }
			  ?> 
            </tr>
          </table>
          <br>
        </div>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
<?


$file_aoigjk=file("h_ya/vbhollo.h");
$file_aoigjk=pass_u_go_out_2($file_aoigjk);
foreach($file_aoigjk as $value_file){

echo $value_file;
}//end

?>


  <br>
  <!-- InstanceBeginEditable name="body_s" -->
  <?
if($sql_10001i[0][0]!=''){
  //回覆
  
  if($loas==''){
  $loas=0;
  }
  
  $loas21=$loas*30;
  $sql_10002="SELECT * 
FROM `bar_all_alls` 
WHERE 1 AND `pin` = '$num_10s' AND `true` = '開' ORDER BY `time` ASC  LIMIT  $loas21 , 30  ";
$sql_10002i=sql_b($sql_10002);//得到資料庫資料


for($i=1;$i<count($sql_10002i)+1;$i++){


$k=$i+$loas21;

$i--;
$sql_10002i[$i][4]=pass_u_go_out_2($sql_10002i[$i][4]);

mi_index_6($sql_10002i[$i],$k,$num_10s);

$i++;

}//for
} 
  ?>
  <!-- InstanceEndEditable --><br>
  <div align="center">
    <br>
<?  

$body_power12_087a="SELECT * 
FROM `bar_all_alls` 
WHERE 1 AND `pin` = '$num_10s'";
$body_power12_087sa=sql_b($body_power12_087a);
//$loas 
body_power12_087(count($body_power12_087sa),30,$num_10s,$loas);

?> <br>
    <br>
    <br>
  </div><?

	$s2006_7_7i=sql_b($s2006_7_7);//判定是否有權利 修改此文章
  
  if($sql_10001i[0][0]!=''){
  
  include("abc_cool/cools.php");
  
  switch($fun){
  case '':$aaa_http='';break;//等於回覆                   OK
  case a:$aaa_http='a';break;//等於引用+回覆(本文章)      OK
  case b:$aaa_http='b';break;//等於引用+回覆(回覆)        OK 
  case c:$aaa_http='c';break;//修改(本文章)               OK OKOK
  case d:$aaa_http='d';break;//修改(回覆文章)             
  case e:$aaa_http='e';break;//無法刪除                   OK
    case ff:$aaa_http='ff';break;//無法連續發文                   OK
	 case h:$aaa_http='hh';break;//無法連續發文                   OK
  }
  
  
  if($aaa_http==''){
  echo '<form name="myform" method="post" action="abc_cool/url_header.php">
  <table width="444" height="232" border="0" cellpadding="1" cellspacing="1" bordercolor="#000000">
   <tr>
    <td height="28"><span class="style3">使用者 : ';
 all_color_font($my_job[0][3],'藍色',18);
	echo'</span></td>
    </tr>
	<tr>
      <td height="28" bgcolor="#0099FF"><span class="style3">回覆文章</span></td>
    </tr>
    <tr>
      <td height="25"><input type="button" name="Submit" value="粗體" onClick="jss_2006_7_10_2();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="斜體" onClick="jss_2006_7_10_3();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="字體" onClick="jss_2006_7_10_9();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="連結" onClick="jss_2006_7_10_1();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="圖片" onClick="jss_2006_7_10_5();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="Flash" onClick="jss_2006_7_10_6();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="音樂" onClick="jss_2006_7_10_8()"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="影片" onClick="jss_2006_7_10_7();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
</td>
    </tr>
    <tr>
      <td height="133"><div align="center">
        <textarea name="send_2006_7_7_body" cols="60" rows="8" wrap="VIRTUAL"></textarea>
      </div></td>
    </tr>
    <tr>
      <td><div align="right">
        <input type="submit" name="Submit" value="發表">
      </div></td>
    </tr>
  </table>
   <br>
  <br>
  <br>

  <input type="hidden" name="send_2006_7_7_a" value="'.$my_job[0][0].'">
  <input type="hidden" name="send_2006_7_7_b" value="'.$my_job[0][3].'">
<input type="hidden" name="send_2006_7_7_c" value="'.$my_job[0][1].'">
<input type="hidden" name="send_2006_7_7_d" value="'.$num_10s.'">
<input type="hidden" name="send_2006_7_7_e" value="'.$sql_10001i[0][12].'">
<input type="hidden" name="send_2006_7_7_ff" value="'.$sql_10001i[0][14].'">
<input type="hidden" name="pin_kk47" value="aaa18">
  
  </form>';
  echo'<a name="hi_http"></a>';
  }//回覆文章
  
  
  
  
  
  
    if($aaa_http=='a'){
	$s2006_7_7="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `Num` = '$num_10s' ";
	$s2006_7_7i=sql_b($s2006_7_7);//判定是否有權利 修改此文章
	
  echo '<form name="myform" method="post" action="abc_cool/url_header.php">
  <table width="444" height="232" border="0" cellpadding="1" cellspacing="1" bordercolor="#000000">
   <tr>
    <td height="28"><span class="style3">使用者 : ';
 all_color_font($my_job[0][3],'藍色',18);
	echo'</span></td>
    </tr>
	<tr>
      <td height="28" bgcolor="#0099FF"><span class="style3">回覆文章</span></td>
    </tr>
    <tr>
      <td height="25"><input type="button" name="Submit" value="粗體" onClick="jss_2006_7_10_2();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="斜體" onClick="jss_2006_7_10_3();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="字體" onClick="jss_2006_7_10_9();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="連結" onClick="jss_2006_7_10_1();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="圖片" onClick="jss_2006_7_10_5();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="Flash" onClick="jss_2006_7_10_6();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="音樂" onClick="jss_2006_7_10_8()"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="影片" onClick="jss_2006_7_10_7();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
</td>
    </tr>
    <tr>
      <td height="133"><div align="center">
        <textarea name="send_2006_7_7_body" cols="60" rows="8" wrap="VIRTUAL">
[quotes][b]______________________________________________________[/b]
[em]回覆:'.$s2006_7_7i[0][2].'     日期:'.$s2006_7_7i[0][10].'[/em]
'.$s2006_7_7i[0][6].'
[b]______________________________________________________[/b][/quotes]

</textarea>
      </div></td>
    </tr>
    <tr>
      <td><div align="right">
        <input type="submit" name="Submit" value="發表">
      </div></td>
    </tr>
  </table>
   <br>
  <br>
  <br>

  <input type="hidden" name="send_2006_7_7_a" value="'.$my_job[0][0].'">
  <input type="hidden" name="send_2006_7_7_b" value="'.$my_job[0][3].'">
<input type="hidden" name="send_2006_7_7_c" value="'.$my_job[0][1].'">
<input type="hidden" name="send_2006_7_7_d" value="'.$num_10s.'">
<input type="hidden" name="send_2006_7_7_e" value="'.$sql_10001i[0][12].'">
<input type="hidden" name="send_2006_7_7_ff" value="'.$sql_10001i[0][14].'">
<input type="hidden" name="pin_kk47" value="aaa18">
  
  </form>';
  echo'<a name="hi_http"></a>';
  }//
  
  
  
  
  
  
     if($aaa_http=='b'){
	$s2006_7_7="SELECT * 
FROM `bar_all_alls` 
WHERE 1 AND `num` = '$anum' ";
	$s2006_7_7i=sql_b($s2006_7_7);//
	
  echo '<form name="myform" method="post" action="abc_cool/url_header.php">
  <table width="444" height="232" border="0" cellpadding="1" cellspacing="1" bordercolor="#000000">
   <tr>
    <td height="28"><span class="style3">使用者 : ';
 all_color_font($my_job[0][3],'藍色',18);
	echo'</span></td>
    </tr>
	<tr>
      <td height="28" bgcolor="#0099FF"><span class="style3">回覆文章</span></td>
    </tr>
    <tr>
      <td height="25"><input type="button" name="Submit" value="粗體" onClick="jss_2006_7_10_2();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="斜體" onClick="jss_2006_7_10_3();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="字體" onClick="jss_2006_7_10_9();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="連結" onClick="jss_2006_7_10_1();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="圖片" onClick="jss_2006_7_10_5();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="Flash" onClick="jss_2006_7_10_6();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="音樂" onClick="jss_2006_7_10_8()"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="影片" onClick="jss_2006_7_10_7();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
</td>
    </tr>
    <tr>
      <td height="133"><div align="center">
        <textarea name="send_2006_7_7_body" cols="60" rows="8" wrap="VIRTUAL">
[quotes][b]______________________________________________________[/b]
[em]回覆:'.$s2006_7_7i[0][1].'     日期:'.$s2006_7_7i[0][6].'[/em]
'.$s2006_7_7i[0][4].'
[b]______________________________________________________[/b][/quotes]
</textarea>
      </div></td>
    </tr>
    <tr>
      <td><div align="right">
        <input type="submit" name="Submit" value="發表">
      </div></td>
    </tr>
  </table>
   <br>
  <br>
  <br>

  <input type="hidden" name="send_2006_7_7_a" value="'.$my_job[0][0].'">
  <input type="hidden" name="send_2006_7_7_b" value="'.$my_job[0][3].'">
<input type="hidden" name="send_2006_7_7_c" value="'.$my_job[0][1].'">
<input type="hidden" name="send_2006_7_7_d" value="'.$num_10s.'">
<input type="hidden" name="send_2006_7_7_e" value="'.$sql_10001i[0][12].'">
<input type="hidden" name="send_2006_7_7_ff" value="'.$sql_10001i[0][14].'">
<input type="hidden" name="pin_kk47" value="aaa18">
  
  </form>';
  echo'<a name="hi_http"></a>';
  }//
  
  
  
  
  
  
  
  
      if($aaa_http=='c'){
	  $myname_s=$my_job[0][0];
	$s2006_7_7="SELECT * 
FROM `bar_all_all` 
WHERE 1 AND `Num` = '$num_10s' AND `numID` = '$myname_s'";
	$s2006_7_7i=sql_b($s2006_7_7);//判定是否有權利 修改此文章
	
	
	$s2006_7_7iaaa=$sql_10001i[0][12];
	$qwed_2006_7_14s="SELECT * 
FROM `bar_all` 
WHERE 1 AND `pin_bar` 
= '$s2006_7_7iaaa'";
	$qwed_2006_7_14=sql_b($qwed_2006_7_14s);
	
	
		if($s2006_7_7i[0][0]!='' || $qwed_2006_7_14[0][4]==$my_job[0][1] ||  $qwed_2006_7_14[0][5]==$my_job[0][1] || $my_job[0][15]=='管理員(最高權限)'){
  
  
  if($qwed_2006_7_14[0][4]==$my_job[0][1] || $my_job[0][15]=='管理員(最高權限)'){
  
  if($sql_10001i[0][5]=='置頂'){
  $p_1='selected';
   $p_2='';
  }else{
  $p_2='selected';
   $p_1='';
  }//置頂
  
  if($sql_10001i[0][15]=='0'){
  $assw_1='selected';
    $assw_2='';
  }else{
    $assw_1='';
  $assw_2='selected';
  }
 
  
  $word_s2006_7_14=' <select name="java_1">
    <option value="置頂" '.$p_1.'>置頂</option>
	<option value="不置頂" '.$p_2.'>不置頂</option>
  </select>
    <select name="java_2">
    <option value="0" '.$assw_1.'>無</option>
	<option value="1" '.$assw_2.'>精華</option>
  </selec>
  ';  
  }else{
  echo' <input type="hidden" name="java_1" value="'.$sql_10001i[0][5].'">';
  echo' <input type="hidden" name="java_2" value="'.$sql_10001i[0][15].'">';
    }//是否有權利改經華置頂
  
  
  
  
  echo '<form name="myform" method="post" action="abc_cool/url_header.php">
  <table width="444" height="232" border="0" cellpadding="1" cellspacing="1" bordercolor="#000000">
   <tr>
    <td height="28"><span class="style3">使用者 : ';
 all_color_font($my_job[0][3],'藍色',18);
	echo'</span></td>
    </tr>
	<tr>
      <td height="28" bgcolor="#0099FF"><span class="style3">修改文章</span></td>
    </tr>
	   <tr>
      <td height="25">標題 <input name="ttiittllee" type="text" size="35" value="'.$sql_10001i[0][1].'">
'.$word_s2006_7_14.'
  
  </td>
    </tr>
    <tr>
      <td height="25"><input type="button" name="Submit" value="粗體" onClick="jss_2006_7_10_2();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="斜體" onClick="jss_2006_7_10_3();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="字體" onClick="jss_2006_7_10_9();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="連結" onClick="jss_2006_7_10_1();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="圖片" onClick="jss_2006_7_10_5();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="Flash" onClick="jss_2006_7_10_6();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="音樂" onClick="jss_2006_7_10_8()"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="影片" onClick="jss_2006_7_10_7();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
</td>
    </tr>
    <tr>
      <td height="133"><div align="center">
        <textarea name="send_2006_7_7_body" cols="60" rows="8" wrap="VIRTUAL">'.$sql_10001i[0][6].'</textarea>
      </div></td>
    </tr>
    <tr>
	     <td><div align="right">
       <input type="submit" name="Submit" value="修改">
      </div></td>
    </tr>
  </table>
   <br>
  <br>
  <br>

  <input type="hidden" name="send_2006_7_7_aa" value="'.$my_job[0][0].'">
  <input type="hidden" name="send_2006_7_7_bb" value="'.$my_job[0][3].'">
<input type="hidden" name="send_2006_7_7_cc" value="'.$my_job[0][1].'">
<input type="hidden" name="send_2006_7_7_dd" value="'.$num_10s.'">
<input type="hidden" name="pin_kk47" value="aaa20">
  
  </form>';
  }else{
 echo '[ 您無法修改此文章 ]';
 
   echo'<a name="hi_http"></a>';
  }//判定是否有權利
  
  echo'<a name="hi_http"></a>';
  }//修改文章
  
  }//end
  
  
  
  
  
  
  
        if($aaa_http=='d'){
		$my_job21212=$my_job[0][0];
		
		$s2006_7_7="SELECT * 
FROM `bar_all_alls` 
WHERE 1 AND `num` = '$anum_2006' AND `true` = '開' AND `in_http` = '$my_job21212' ";
	$s2006_7_7i=sql_b($s2006_7_7);//
		
	$s2006_7_7iaaa=$sql_10001i[0][12];
	$qwed_2006_7_14s="SELECT * 
FROM `bar_all` 
WHERE 1 AND `pin_bar` 
= '$s2006_7_7iaaa'";
	$qwed_2006_7_14=sql_b($qwed_2006_7_14s);
	
	
	if($s2006_7_7i[0][0]!='' || $qwed_2006_7_14[0][4]==$my_job[0][1] ||  $qwed_2006_7_14[0][5]==$my_job[0][1] || $my_job[0][15]=='管理員(最高權限)'){
  //取回覆文章的內容 
  		$s2006_7_7="SELECT * 
FROM `bar_all_alls` 
WHERE 1 AND `num` = '$anum_2006' AND `true` = '開' ";
	$s2006_7_7i=sql_b($s2006_7_7);//
  
  
  echo '<form name="myform" method="post" action="abc_cool/url_header.php">
  <table width="444" height="232" border="0" cellpadding="1" cellspacing="1" bordercolor="#000000">
   <tr>
    <td height="28"><span class="style3">使用者 : ';
 all_color_font($my_job[0][3],'藍色',18);
	echo'</span></td>
    </tr>
	<tr>
      <td height="28" bgcolor="#0099FF"><span class="style3">修改文章</span></td>
    </tr>
    <tr>
      <td height="25"><input type="button" name="Submit" value="粗體" onClick="jss_2006_7_10_2();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="斜體" onClick="jss_2006_7_10_3();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="字體" onClick="jss_2006_7_10_9();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="連結" onClick="jss_2006_7_10_1();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="圖片" onClick="jss_2006_7_10_5();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="Flash" onClick="jss_2006_7_10_6();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="音樂" onClick="jss_2006_7_10_8()"  style="background-color:#000000;font-size:14px;color:#FFCC00">
<input type="button" name="Submit" value="影片" onClick="jss_2006_7_10_7();"  style="background-color:#000000;font-size:14px;color:#FFCC00">
</td>
    </tr>
    <tr>
      <td height="133"><div align="center">
        <textarea name="send_2006_7_7_body" cols="60" rows="8" wrap="VIRTUAL">'.$s2006_7_7i[0][4].'
</textarea>
      </div></td>
    </tr>
    <tr>
      <td><div align="right">
        <input type="submit" name="Submit" value="發表">
      </div></td>
    </tr>
  </table>
   <br>
  <br>
  <br>

  <input type="hidden" name="send_2006_7_7_a" value="'.$my_job[0][0].'">
  <input type="hidden" name="send_2006_7_7_b" value="'.$my_job[0][3].'">
<input type="hidden" name="send_2006_7_7_d" value="'.$num_10s.'">
<input type="hidden" name="send_2006_7_7_e" value="'.$anum_2006.'">
<input type="hidden" name="send_2006_7_7_ff" value="'.$sql_10001i[0][14].'">
<input type="hidden" name="pin_kk47" value="aaa24">
  
  </form>';
  echo'<a name="hi_http"></a>';
  }else{
echo '[ 您無法修改此文章 ]';
    echo'<a name="hi_http"></a>';
  
  }//end
  
  }//end
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  		if($aaa_http=='e'){
  
  echo '您無法刪除此文章';
  
 echo'<a name="hi_http"></a>';
  }
  
    		if($aaa_http=='ff'){
  
  echo '[ 您無法連續發文 ]';
  echo '<embed src="h_ya/sound/sorry.Mp3"  visibility: hidden>';
 echo'<a name="hi_http"></a>';
  }
  
  
  
  
  
  
  
   
  
    		if($aaa_http=='hh'){
  
  echo '[ 您被禁言中 無法發言 ]';
  echo '<embed src="h_ya/sound/sorry1.Mp3"  visibility: hidden>';
 echo'<a name="hi_http"></a>';
  }
  
  
  ?>
  
    <table width="964" border="0" cellspacing="1" cellpadding="1">
    <td>      <div align="center">
      <hr width="100%" size="1">
      <?
	  echo '版權語 :'.$sqls09_ous_jsa[0][14];
	  
	  
	  
	  ?>
      </div>
      </td>
  </table>
    <br>
    <br>
    <br>
    <br>
    </div>

</body>
<!-- InstanceEnd --></html>
